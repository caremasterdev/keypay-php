<?php

namespace Tests;

use GuzzleHttp\Client;
use KeypayPHP\Application;
use OpenAPI\Client\Api\AbaSettingsApi;
use OpenAPI\Client\Configuration;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testConstructsAndStoresAccessToken(): void
    {
        $app = new Application('secret-token');

        $this->assertInstanceOf(Configuration::class, $app->getConfiguration());
        $this->assertSame('secret-token', $app->getConfiguration()->getAccessToken());
    }

    public function testDefaultConfig(): void
    {
        $app = new Application('t');

        $this->assertSame('https://api.yourpayroll.com.au', $app->getConfigOption('keypay', 'base_url'));
        $this->assertSame('v2', $app->getConfigOption('keypay', 'core_version'));
    }

    public function testInvalidConfigKeyThrows(): void
    {
        $this->expectException(\Exception::class);
        (new Application('t'))->getConfig('nope');
    }

    public function testInvalidConfigOptionThrows(): void
    {
        $this->expectException(\Exception::class);
        (new Application('t'))->getConfigOption('keypay', 'nope');
    }

    public function testSetConfigOption(): void
    {
        $app = new Application('t');
        $app->setConfigOption('keypay', 'base_url', 'https://example.test');

        $this->assertSame('https://example.test', $app->getConfigOption('keypay', 'base_url'));
    }

    public function testTransportCanBeReplaced(): void
    {
        $app = new Application('t');
        $client = new Client();
        $app->setTransport($client);

        $this->assertSame($client, $app->getTransport());
    }

    public function testForApiBuildsApiClientWithSharedConfiguration(): void
    {
        $app = new Application('tok');
        $api = $app->forApi(AbaSettingsApi::class);

        $this->assertInstanceOf(AbaSettingsApi::class, $api);
        $this->assertSame('tok', $api->getConfig()->getAccessToken());
    }
}
