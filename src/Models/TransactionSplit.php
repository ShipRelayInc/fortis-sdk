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

class TransactionSplit implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $transactionId;

    /**
     * @var string|null
     */
    private $contactId;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $createdTs;

    /**
     * @var array
     */
    private $createdUserId = [];

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
     * Returns Contact Id.
     * Contact ID
     */
    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    /**
     * Sets Contact Id.
     * Contact ID
     *
     * @maps contact_id
     */
    public function setContactId(?string $contactId): void
    {
        $this->contactId = $contactId;
    }

    /**
     * Returns Amount.
     * Amount
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Id.
     * Transaction Splits ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Transaction Splits ID
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
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
     * Returns Created User Id.
     * User ID Created the register
     */
    public function getCreatedUserId(): ?string
    {
        if (count($this->createdUserId) == 0) {
            return null;
        }
        return $this->createdUserId['value'];
    }

    /**
     * Sets Created User Id.
     * User ID Created the register
     *
     * @maps created_user_id
     */
    public function setCreatedUserId(?string $createdUserId): void
    {
        $this->createdUserId['value'] = $createdUserId;
    }

    /**
     * Unsets Created User Id.
     * User ID Created the register
     */
    public function unsetCreatedUserId(): void
    {
        $this->createdUserId = [];
    }

    /**
     * Converts the TransactionSplit object to a human-readable string representation.
     *
     * @return string The string representation of the TransactionSplit object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TransactionSplit',
            [
                'transactionId' => $this->transactionId,
                'contactId' => $this->contactId,
                'amount' => $this->amount,
                'id' => $this->id,
                'createdTs' => $this->createdTs,
                'createdUserId' => $this->getCreatedUserId(),
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
            $json['transaction_id']  = $this->transactionId;
        }
        if (isset($this->contactId)) {
            $json['contact_id']      = $this->contactId;
        }
        if (isset($this->amount)) {
            $json['amount']          = $this->amount;
        }
        if (isset($this->id)) {
            $json['id']              = $this->id;
        }
        if (isset($this->createdTs)) {
            $json['created_ts']      = $this->createdTs;
        }
        if (!empty($this->createdUserId)) {
            $json['created_user_id'] = $this->createdUserId['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
