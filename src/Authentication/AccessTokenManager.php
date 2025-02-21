<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Authentication;

use Core\Authentication\CoreAuth;
use FortisAPILib\ConfigurationDefaults;
use Core\Request\Parameters\HeaderParam;

/**
 * Utility class for authorization and token management.
 */
class AccessTokenManager extends CoreAuth implements AccessTokenCredentials
{
    /**
     * @var array
     */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
        parent::__construct(HeaderParam::init('access-token', $this->getAccessToken())->requiredNonEmpty());
    }

    /**
     * String value for accessToken.
     */
    public function getAccessToken(): string
    {
        return $this->config['accessToken'] ?? ConfigurationDefaults::ACCESS_TOKEN;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $accessToken Access Token
     */
    public function equals(string $accessToken): bool
    {
        return $accessToken == $this->getAccessToken();
    }
}
