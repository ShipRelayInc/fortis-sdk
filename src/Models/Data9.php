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

class Data9 implements \JsonSerializable
{
    /**
     * @var Result|null
     */
    private $result;

    /**
     * @var Status5|null
     */
    private $status;

    /**
     * Returns Result.
     */
    public function getResult(): ?Result
    {
        return $this->result;
    }

    /**
     * Sets Result.
     *
     * @maps result
     */
    public function setResult(?Result $result): void
    {
        $this->result = $result;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?Status5
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?Status5 $status): void
    {
        $this->status = $status;
    }

    /**
     * Converts the Data9 object to a human-readable string representation.
     *
     * @return string The string representation of the Data9 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Data9',
            [
                'result' => $this->result,
                'status' => $this->status,
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
        if (isset($this->result)) {
            $json['result'] = $this->result;
        }
        if (isset($this->status)) {
            $json['status'] = $this->status;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
