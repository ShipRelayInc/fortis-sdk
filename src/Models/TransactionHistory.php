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

class TransactionHistory implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $transactionId;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var array
     */
    private $statusId = [];

    /**
     * @var array
     */
    private $eventDateTs = [];

    /**
     * @var array
     */
    private $locationId = [];

    /**
     * @var int|null
     */
    private $createdTs;

    /**
     * @var int|null
     */
    private $modifiedTs;

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
     * Returns Id.
     * Transaction Histories ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Transaction Histories ID
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Status Id.
     * Status ID
     */
    public function getStatusId(): ?int
    {
        if (count($this->statusId) == 0) {
            return null;
        }
        return $this->statusId['value'];
    }

    /**
     * Sets Status Id.
     * Status ID
     *
     * @maps status_id
     */
    public function setStatusId(?int $statusId): void
    {
        $this->statusId['value'] = $statusId;
    }

    /**
     * Unsets Status Id.
     * Status ID
     */
    public function unsetStatusId(): void
    {
        $this->statusId = [];
    }

    /**
     * Returns Event Date Ts.
     * Event Date TS
     */
    public function getEventDateTs(): ?int
    {
        if (count($this->eventDateTs) == 0) {
            return null;
        }
        return $this->eventDateTs['value'];
    }

    /**
     * Sets Event Date Ts.
     * Event Date TS
     *
     * @maps event_date_ts
     */
    public function setEventDateTs(?int $eventDateTs): void
    {
        $this->eventDateTs['value'] = $eventDateTs;
    }

    /**
     * Unsets Event Date Ts.
     * Event Date TS
     */
    public function unsetEventDateTs(): void
    {
        $this->eventDateTs = [];
    }

    /**
     * Returns Location Id.
     * Location ID
     */
    public function getLocationId(): ?string
    {
        if (count($this->locationId) == 0) {
            return null;
        }
        return $this->locationId['value'];
    }

    /**
     * Sets Location Id.
     * Location ID
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId['value'] = $locationId;
    }

    /**
     * Unsets Location Id.
     * Location ID
     */
    public function unsetLocationId(): void
    {
        $this->locationId = [];
    }

    /**
     * Returns Created Ts.
     * Created Time Stamp
     */
    public function getCreatedTs(): ?int
    {
        return $this->createdTs;
    }

    /**
     * Sets Created Ts.
     * Created Time Stamp
     *
     * @maps created_ts
     */
    public function setCreatedTs(?int $createdTs): void
    {
        $this->createdTs = $createdTs;
    }

    /**
     * Returns Modified Ts.
     * Modified Time Stamp
     */
    public function getModifiedTs(): ?int
    {
        return $this->modifiedTs;
    }

    /**
     * Sets Modified Ts.
     * Modified Time Stamp
     *
     * @maps modified_ts
     */
    public function setModifiedTs(?int $modifiedTs): void
    {
        $this->modifiedTs = $modifiedTs;
    }

    /**
     * Converts the TransactionHistory object to a human-readable string representation.
     *
     * @return string The string representation of the TransactionHistory object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TransactionHistory',
            [
                'transactionId' => $this->transactionId,
                'id' => $this->id,
                'statusId' => $this->getStatusId(),
                'eventDateTs' => $this->getEventDateTs(),
                'locationId' => $this->getLocationId(),
                'createdTs' => $this->createdTs,
                'modifiedTs' => $this->modifiedTs,
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
        if (isset($this->transactionId)) {
            $json['transaction_id'] = $this->transactionId;
        }
        if (isset($this->id)) {
            $json['id']             = $this->id;
        }
        if (!empty($this->statusId)) {
            $json['status_id']      = $this->statusId['value'];
        }
        if (!empty($this->eventDateTs)) {
            $json['event_date_ts']  = $this->eventDateTs['value'];
        }
        if (!empty($this->locationId)) {
            $json['location_id']    = $this->locationId['value'];
        }
        if (isset($this->createdTs)) {
            $json['created_ts']     = $this->createdTs;
        }
        if (isset($this->modifiedTs)) {
            $json['modified_ts']    = $this->modifiedTs;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
