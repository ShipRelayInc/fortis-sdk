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

class ChallengeMessageExtension implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var bool|null
     */
    private $criticalityIndicator;

    /**
     * @var array|null
     */
    private $data;

    /**
     * Returns Id.
     * A unique identifier for the extension. Payment System Registered Application Provider Identifier
     * (RID) is required as prefix of the ID. The maximum length is 64 characters.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * A unique identifier for the extension. Payment System Registered Application Provider Identifier
     * (RID) is required as prefix of the ID. The maximum length is 64 characters.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     * The name of the extension data set as defined by the extension owner. Maximum length is 64
     * characters.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the extension data set as defined by the extension owner. Maximum length is 64
     * characters.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Criticality Indicator.
     * A boolean value indicating whether the recipient must understand the contents of the extension to
     * interpret the entire message.
     */
    public function getCriticalityIndicator(): ?bool
    {
        return $this->criticalityIndicator;
    }

    /**
     * Sets Criticality Indicator.
     * A boolean value indicating whether the recipient must understand the contents of the extension to
     * interpret the entire message.
     *
     * @maps criticality_indicator
     */
    public function setCriticalityIndicator(?bool $criticalityIndicator): void
    {
        $this->criticalityIndicator = $criticalityIndicator;
    }

    /**
     * Returns Data.
     * The data carried in the extension as. The maximum length is 8059 characters.
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * The data carried in the extension as. The maximum length is 8059 characters.
     *
     * @maps data
     */
    public function setData(?array $data): void
    {
        $this->data = $data;
    }

    /**
     * Converts the ChallengeMessageExtension object to a human-readable string representation.
     *
     * @return string The string representation of the ChallengeMessageExtension object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ChallengeMessageExtension',
            [
                'id' => $this->id,
                'name' => $this->name,
                'criticalityIndicator' => $this->criticalityIndicator,
                'data' => $this->data,
                'additionalProperties' => $this->additionalProperties
            ]
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
        if (isset($this->id)) {
            $json['id']                    = $this->id;
        }
        if (isset($this->name)) {
            $json['name']                  = $this->name;
        }
        if (isset($this->criticalityIndicator)) {
            $json['criticality_indicator'] = $this->criticalityIndicator;
        }
        if (isset($this->data)) {
            $json['data']                  = $this->data;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
