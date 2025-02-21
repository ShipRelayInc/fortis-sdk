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

/**
 * Currency Type Information on `expand`
 */
class CurrencyType implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var string|null
     */
    private $title;

    /**
     * Returns Id.
     * ID
     */
    public function getId(): ?int
    {
        if (count($this->id) == 0) {
            return null;
        }
        return $this->id['value'];
    }

    /**
     * Sets Id.
     * ID
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id['value'] = $id;
    }

    /**
     * Unsets Id.
     * ID
     */
    public function unsetId(): void
    {
        $this->id = [];
    }

    /**
     * Returns Title.
     * Title
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     * Title
     *
     * @maps title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * Converts the CurrencyType object to a human-readable string representation.
     *
     * @return string The string representation of the CurrencyType object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CurrencyType',
            [
                'id' => $this->getId(),
                'title' => $this->title,
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
        if (!empty($this->id)) {
            $json['id']    = $this->id['value'];
        }
        if (isset($this->title)) {
            $json['title'] = $this->title;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
