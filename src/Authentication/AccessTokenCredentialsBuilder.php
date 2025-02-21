<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Authentication;

use Core\Utils\CoreHelper;

/**
 * Utility class for initializing AccessToken security credentials.
 */
class AccessTokenCredentialsBuilder
{
    /**
     * @var array
     */
    private $config;

    private function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Initializer for AccessTokenCredentialsBuilder
     *
     * @param string $accessToken
     */
    public static function init(string $accessToken): self
    {
        return new self(['accessToken' => $accessToken]);
    }

    /**
     * Setter for AccessToken.
     *
     * @param string $accessToken
     *
     * @return $this
     */
    public function accessToken(string $accessToken): self
    {
        $this->config['accessToken'] = $accessToken;
        return $this;
    }

    public function getConfiguration(): array
    {
        return CoreHelper::clone($this->config);
    }
}
