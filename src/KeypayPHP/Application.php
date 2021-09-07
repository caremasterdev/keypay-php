<?php

namespace KeypayPHP;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use KeypayPHP\Remote\Request;
use Swagger\Client\Configuration;

class Application
{
    protected static $_config_defaults = [
        'keypay' => [
            'base_url' => 'https://api.yourpayroll.com.au',
            'default_content_type' => Request::CONTENT_TYPE_JSON,
            'core_version' => 'v2',
        ],
    ];

    protected array $config;

    private ClientInterface $transport;

    private Configuration $configuration;

    public function __construct($token)
    {
        $this->config = static::$_config_defaults;

        $transport = new Client([
            'headers' => [
                'Authorization' => sprintf('Bearer %s', $token),
            ],
        ]);

        $this->transport = $transport;

        $this->configuration = (new Configuration())->setAccessToken($token);
    }

    public function getConfig(string $key)
    {
        if (! isset($this->config[$key])) {
            throw new \Exception("Invalid configuration key [$key]");
        }

        return $this->config[$key];
    }

    /**
     * @param string $config
     * @param $option
     * @return mixed
     * @throws \Exception
     */
    public function getConfigOption(string $config, $option)
    {
        if (! isset($this->getConfig($config)[$option])) {
            throw new \Exception("Invalid configuration option [{$option}]");
        }

        return $this->getConfig($config)[$option];
    }

    public function setConfig($config)
    {
        $this->config = array_replace_recursive(
            self::$_config_defaults,
            $config
        );

        return $this->config;
    }

    /**
     * @param string $config
     * @param mixed $option
     * @param mixed $value
     *
     * @throws \Exception
     *
     * @return array
     */
    public function setConfigOption($config, $option, $value)
    {
        if (! isset($this->config[$config])) {
            throw new \Exception("Invalid configuration key [{$config}]");
        }
        $this->config[$config][$option] = $value;

        return $this->config;
    }

    public function getConfiguration() {
        return $this->configuration;
    }

    /**
     * @return ClientInterface
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @param ClientInterface $client
     * @return ClientInterface
     */
    public function setTransport(ClientInterface $client)
    {
        return $this->transport = $client;
    }
}
