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

class ResponseOnboarding implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $type = Type47Enum::ONBOARDING;

    /**
     * @var Data14|null
     */
    private $data;

    /**
     * Returns Type.
     * Resource Type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Resource Type
     *
     * @maps type
     * @factory \FortisAPILib\Models\Type47Enum::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Data.
     */
    public function getData(): ?Data14
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @maps data
     */
    public function setData(?Data14 $data): void
    {
        $this->data = $data;
    }

    /**
     * Converts the ResponseOnboarding object to a human-readable string representation.
     *
     * @return string The string representation of the ResponseOnboarding object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ResponseOnboarding',
            ['type' => $this->type, 'data' => $this->data, 'additionalProperties' => $this->additionalProperties]
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
        if (isset($this->type)) {
            $json['type'] = Type47Enum::checkValue($this->type);
        }
        if (isset($this->data)) {
            $json['data'] = $this->data;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
