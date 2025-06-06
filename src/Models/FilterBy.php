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

class FilterBy implements \JsonSerializable
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $operator;

    /**
     * @var float|string|bool
     */
    private $value;

    /**
     * @param string $key
     * @param string $operator
     * @param float|string|bool $value
     */
    public function __construct(string $key, string $operator, $value)
    {
        $this->key = $key;
        $this->operator = $operator;
        $this->value = $value;
    }

    /**
     * Returns Key.
     * Resource key to filter by
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Sets Key.
     * Resource key to filter by
     *
     * @required
     * @maps key
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * Returns Operator.
     * Filter operand.  Please note `=` does not imply a strict equality check.
     * Only time fields support the `<=` and `>=` operators.
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * Sets Operator.
     * Filter operand.  Please note `=` does not imply a strict equality check.
     * Only time fields support the `<=` and `>=` operators.
     *
     * @required
     * @maps operator
     * @mapsBy oneOf(Operator1Enum)
     * @factory \FortisAPILib\Models\Operator1Enum::checkValue Operator1Enum
     */
    public function setOperator(string $operator): void
    {
        $this->operator = $operator;
    }

    /**
     * Returns Value.
     * Filter value.
     * For time fields, `value` must be sent in Unix format: `946702799`
     *
     * @return float|string|bool
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * Filter value.
     * For time fields, `value` must be sent in Unix format: `946702799`
     *
     * @required
     * @maps value
     * @mapsBy oneOf(anyOf(float),anyOf(float,string,bool))
     *
     * @param float|string|bool $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * Converts the FilterBy object to a human-readable string representation.
     *
     * @return string The string representation of the FilterBy object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'FilterBy',
            [
                'key' => $this->key,
                'operator' => $this->operator,
                'value' => $this->value,
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
        $json['key']      = $this->key;
        $json['operator'] =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->operator,
                'oneOf(Operator1Enum)',
                [
                    '\FortisAPILib\Models\Operator1Enum::checkValue Operator1Enum'
                ]
            );
        $json['value']    =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->value,
                'oneOf(anyOf(float),anyOf(float,string,bool))'
            );
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
