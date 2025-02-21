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

class V1TransactionsLevel3MasterCardRequest implements \JsonSerializable
{
    /**
     * @var Level3Data5
     */
    private $level3Data;

    /**
     * @param Level3Data5 $level3Data
     */
    public function __construct(Level3Data5 $level3Data)
    {
        $this->level3Data = $level3Data;
    }

    /**
     * Returns Level 3 Data.
     * Level 3 data object
     */
    public function getLevel3Data(): Level3Data5
    {
        return $this->level3Data;
    }

    /**
     * Sets Level 3 Data.
     * Level 3 data object
     *
     * @required
     * @maps level3_data
     */
    public function setLevel3Data(Level3Data5 $level3Data): void
    {
        $this->level3Data = $level3Data;
    }

    /**
     * Converts the V1TransactionsLevel3MasterCardRequest object to a human-readable string representation.
     *
     * @return string The string representation of the V1TransactionsLevel3MasterCardRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'V1TransactionsLevel3MasterCardRequest',
            ['level3Data' => $this->level3Data, 'additionalProperties' => $this->additionalProperties]
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
        $json['level3_data'] = $this->level3Data;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
