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

class Data28 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $transactionId;

    /**
     * @var Level3Data|null
     */
    private $level3Data;

    /**
     * Returns Id.
     * Level 3 ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Level 3 ID
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Transaction Id.
     * Transaction ID
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     * Transaction ID
     *
     * @maps transaction_id
     */
    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns Level 3 Data.
     * Level 3 data object
     */
    public function getLevel3Data(): ?Level3Data
    {
        return $this->level3Data;
    }

    /**
     * Sets Level 3 Data.
     * Level 3 data object
     *
     * @maps level3_data
     */
    public function setLevel3Data(?Level3Data $level3Data): void
    {
        $this->level3Data = $level3Data;
    }

    /**
     * Converts the Data28 object to a human-readable string representation.
     *
     * @return string The string representation of the Data28 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Data28',
            [
                'id' => $this->id,
                'transactionId' => $this->transactionId,
                'level3Data' => $this->level3Data,
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
            $json['id']             = $this->id;
        }
        if (isset($this->transactionId)) {
            $json['transaction_id'] = $this->transactionId;
        }
        if (isset($this->level3Data)) {
            $json['level3_data']    = $this->level3Data;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
