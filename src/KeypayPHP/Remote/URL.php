<?php

namespace KeypayPHP\Remote;

use KeypayPHP\Application;

class URL
{
    const OAUTH_REQUEST_TOKEN = 'RequestToken';

    const OAUTH_ACCESS_TOKEN = 'AccessToken';

    /**
     * @var string The base API URL for the ap type
     */
    private $base_url;

    private $endpoint;

    /**
     * @var string the path
     */
    private $path;

    public function __construct(Application $app, $endpoint)
    {
        //Handle full URLs and pull them back apart.
        //Annoying internal references are http??? and absolute.
        if (strpos($endpoint, 'http') === 0) {
            if (preg_match('@^http(s)?://[^/]+/(?<version>[^/]+)/(?<endpoint>.+)$@i', $endpoint, $matches)) {
                $endpoint = $matches['endpoint'];
                //$version = $matches['version'];
            }
        }

        //This contains API versions and base URLs
        $keypay_config = $app->getConfig('keypay');

        $version = $keypay_config['core_version'];
        $this->base_url = $keypay_config['base_url'];
        $this->endpoint = $endpoint;

        $this->path = sprintf('%s/%s',  $version, $this->endpoint);
    }

    /**
     * @return string
     */
    public function getFullURL()
    {
        return sprintf('%s/%s', $this->base_url, $this->path);
    }
}