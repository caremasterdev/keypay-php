<?php

namespace Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use KeypayPHP\Application;
use OpenAPI\Client\Api\AbaSettingsApi;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Model\BusinessAbaModel;
use PHPUnit\Framework\TestCase;

/**
 * End-to-end through Application -> Api -> Guzzle -> ObjectSerializer,
 * using a mocked HTTP layer (no network needed).
 */
class ApiRequestTest extends TestCase
{
    private array $history = [];

    private function apiWith(Response ...$responses): AbaSettingsApi
    {
        $this->history = [];
        $stack = HandlerStack::create(new MockHandler($responses));
        $stack->push(Middleware::history($this->history));

        $app = new Application('tok-123');
        $app->setTransport(new Client(['handler' => $stack]));

        return $app->forApi(AbaSettingsApi::class);
    }

    public function testGetDeserializesJsonIntoModel(): void
    {
        $api = $this->apiWith(new Response(200, ['Content-Type' => 'application/json'], json_encode([
            'id' => 42,
            'bsb' => '123-456',
            'accountNumber' => '987654',
            'accountName' => 'Test Account',
        ])));

        $result = $api->auAbaGet(42, 7);

        $this->assertInstanceOf(BusinessAbaModel::class, $result);
        $this->assertSame(42, $result->getId());
        $this->assertSame('123-456', $result->getBsb());
        $this->assertSame('Test Account', $result->getAccountName());
    }

    public function testRequestTargetsCorrectUrl(): void
    {
        $api = $this->apiWith(new Response(200, [], '{}'));
        $api->auAbaGet(42, 7);

        $this->assertCount(1, $this->history);
        $request = $this->history[0]['request'];

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('api.yourpayroll.com.au', $request->getUri()->getHost());
        $this->assertSame('/api/v2/business/7/aba/42', $request->getUri()->getPath());
    }

    public function testDefaultTransportSendsBearerToken(): void
    {
        // The token is applied as a default header on the Guzzle client built by
        // Application's constructor (replacing the transport drops it).
        $headers = (new Application('tok-123'))->getTransport()->getConfig('headers');

        $this->assertSame('Bearer tok-123', $headers['Authorization']);
    }

    public function testHttpErrorBecomesApiException(): void
    {
        $api = $this->apiWith(new Response(404, [], '{"message":"not found"}'));

        try {
            $api->auAbaGet(1, 1);
            $this->fail('ApiException was not thrown');
        } catch (ApiException $e) {
            $this->assertSame(404, $e->getCode());
            $this->assertStringContainsString('not found', (string) $e->getResponseBody());
        }
    }

    public function testModelRoundTripsThroughJson(): void
    {
        $model = new BusinessAbaModel(['id' => 5, 'bsb' => '000-000']);
        $json = json_encode(\OpenAPI\Client\ObjectSerializer::sanitizeForSerialization($model));

        $this->assertSame(5, json_decode($json)->id);
        $this->assertSame('000-000', json_decode($json)->bsb);
    }
}
