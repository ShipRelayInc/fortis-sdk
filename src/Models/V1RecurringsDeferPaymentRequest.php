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

class V1RecurringsDeferPaymentRequest implements \JsonSerializable
{
    /**
     * @var int
     */
    private $deferCount;

    /**
     * @param int $deferCount
     */
    public function __construct(int $deferCount)
    {
        $this->deferCount = $deferCount;
    }

    /**
     * Returns Defer Count.
     * Defer Count
     */
    public function getDeferCount(): int
    {
        return $this->deferCount;
    }

    /**
     * Sets Defer Count.
     * Defer Count
     *
     * @required
     * @maps defer_count
     */
    public function setDeferCount(int $deferCount): void
    {
        $this->deferCount = $deferCount;
    }

    /**
     * Converts the V1RecurringsDeferPaymentRequest object to a human-readable string representation.
     *
     * @return string The string representation of the V1RecurringsDeferPaymentRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'V1RecurringsDeferPaymentRequest',
            ['deferCount' => $this->deferCount, 'additionalProperties' => $this->additionalProperties]
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
        $json['defer_count'] = $this->deferCount;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
