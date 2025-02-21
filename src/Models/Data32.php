<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use FortisAPILib\ApiHelper;
use stdClass;

class Data32 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $userApiKey;

    /**
     * Returns User Api Key.
     * User Api Key
     */
    public function getUserApiKey(): ?string
    {
        return $this->userApiKey;
    }

    /**
     * Sets User Api Key.
     * User Api Key
     *
     * @maps user_api_key
     */
    public function setUserApiKey(?string $userApiKey): void
    {
        $this->userApiKey = $userApiKey;
    }

    /**
     * Converts the Data32 object to a human-readable string representation.
     *
     * @return string The string representation of the Data32 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Data32',
            ['userApiKey' => $this->userApiKey, 'additionalProperties' => $this->additionalProperties]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->userApiKey)) {
            $json['user_api_key'] = $this->userApiKey;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
