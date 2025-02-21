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
 * [object Object]
 */
class ReturnFeeTransactionAchRetry implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $rejectedTransactionId;

    /**
     * @var array
     */
    private $returnFee = [];

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $retryTransactionId;

    /**
     * @var string|null
     */
    private $returnFeeTransactionId;

    /**
     * @var int|null
     */
    private $createdTs;

    /**
     * @var string|null
     */
    private $createdUserId;

    /**
     * Returns Rejected Transaction Id.
     * Rejected Transaction ID.
     */
    public function getRejectedTransactionId(): ?string
    {
        return $this->rejectedTransactionId;
    }

    /**
     * Sets Rejected Transaction Id.
     * Rejected Transaction ID.
     *
     * @maps rejected_transaction_id
     */
    public function setRejectedTransactionId(?string $rejectedTransactionId): void
    {
        $this->rejectedTransactionId = $rejectedTransactionId;
    }

    /**
     * Returns Return Fee.
     * Return Fee.
     */
    public function getReturnFee(): ?int
    {
        if (count($this->returnFee) == 0) {
            return null;
        }
        return $this->returnFee['value'];
    }

    /**
     * Sets Return Fee.
     * Return Fee.
     *
     * @maps return_fee
     */
    public function setReturnFee(?int $returnFee): void
    {
        $this->returnFee['value'] = $returnFee;
    }

    /**
     * Unsets Return Fee.
     * Return Fee.
     */
    public function unsetReturnFee(): void
    {
        $this->returnFee = [];
    }

    /**
     * Returns Id.
     * Transaction ACH Retry ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Transaction ACH Retry ID.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Retry Transaction Id.
     * Retry Transaction ID.
     */
    public function getRetryTransactionId(): ?string
    {
        return $this->retryTransactionId;
    }

    /**
     * Sets Retry Transaction Id.
     * Retry Transaction ID.
     *
     * @maps retry_transaction_id
     */
    public function setRetryTransactionId(?string $retryTransactionId): void
    {
        $this->retryTransactionId = $retryTransactionId;
    }

    /**
     * Returns Return Fee Transaction Id.
     * Return Fee Transaction ID.
     */
    public function getReturnFeeTransactionId(): ?string
    {
        return $this->returnFeeTransactionId;
    }

    /**
     * Sets Return Fee Transaction Id.
     * Return Fee Transaction ID.
     *
     * @maps return_fee_transaction_id
     */
    public function setReturnFeeTransactionId(?string $returnFeeTransactionId): void
    {
        $this->returnFeeTransactionId = $returnFeeTransactionId;
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
        return $this->createdUserId;
    }

    /**
     * Sets Created User Id.
     * User ID Created the register
     *
     * @maps created_user_id
     */
    public function setCreatedUserId(?string $createdUserId): void
    {
        $this->createdUserId = $createdUserId;
    }

    /**
     * Converts the ReturnFeeTransactionAchRetry object to a human-readable string representation.
     *
     * @return string The string representation of the ReturnFeeTransactionAchRetry object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ReturnFeeTransactionAchRetry',
            [
                'rejectedTransactionId' => $this->rejectedTransactionId,
                'returnFee' => $this->getReturnFee(),
                'id' => $this->id,
                'retryTransactionId' => $this->retryTransactionId,
                'returnFeeTransactionId' => $this->returnFeeTransactionId,
                'createdTs' => $this->createdTs,
                'createdUserId' => $this->createdUserId,
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
        if (isset($this->rejectedTransactionId)) {
            $json['rejected_transaction_id']   = $this->rejectedTransactionId;
        }
        if (!empty($this->returnFee)) {
            $json['return_fee']                = $this->returnFee['value'];
        }
        if (isset($this->id)) {
            $json['id']                        = $this->id;
        }
        if (isset($this->retryTransactionId)) {
            $json['retry_transaction_id']      = $this->retryTransactionId;
        }
        if (isset($this->returnFeeTransactionId)) {
            $json['return_fee_transaction_id'] = $this->returnFeeTransactionId;
        }
        if (isset($this->createdTs)) {
            $json['created_ts']                = $this->createdTs;
        }
        if (isset($this->createdUserId)) {
            $json['created_user_id']           = $this->createdUserId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
