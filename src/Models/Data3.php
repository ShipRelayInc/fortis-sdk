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

class Data3 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var array
     */
    private $declinedTransactionId = [];

    /**
     * @var array
     */
    private $paymentTransactionId = [];

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var array
     */
    private $recurringId = [];

    /**
     * @var array
     */
    private $createdTs = [];

    /**
     * @var array
     */
    private $createdUserId = [];

    /**
     * @var array
     */
    private $modifiedTs = [];

    /**
     * @var array
     */
    private $modifiedUserId = [];

    /**
     * Returns Id.
     * Id
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Id
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Declined Transaction Id.
     * Declined Transaction Id
     */
    public function getDeclinedTransactionId(): ?string
    {
        if (count($this->declinedTransactionId) == 0) {
            return null;
        }
        return $this->declinedTransactionId['value'];
    }

    /**
     * Sets Declined Transaction Id.
     * Declined Transaction Id
     *
     * @maps declined_transaction_id
     */
    public function setDeclinedTransactionId(?string $declinedTransactionId): void
    {
        $this->declinedTransactionId['value'] = $declinedTransactionId;
    }

    /**
     * Unsets Declined Transaction Id.
     * Declined Transaction Id
     */
    public function unsetDeclinedTransactionId(): void
    {
        $this->declinedTransactionId = [];
    }

    /**
     * Returns Payment Transaction Id.
     * Payment Transaction Id
     */
    public function getPaymentTransactionId(): ?string
    {
        if (count($this->paymentTransactionId) == 0) {
            return null;
        }
        return $this->paymentTransactionId['value'];
    }

    /**
     * Sets Payment Transaction Id.
     * Payment Transaction Id
     *
     * @maps payment_transaction_id
     */
    public function setPaymentTransactionId(?string $paymentTransactionId): void
    {
        $this->paymentTransactionId['value'] = $paymentTransactionId;
    }

    /**
     * Unsets Payment Transaction Id.
     * Payment Transaction Id
     */
    public function unsetPaymentTransactionId(): void
    {
        $this->paymentTransactionId = [];
    }

    /**
     * Returns Status.
     * Status
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status
     *
     * @maps status
     * @factory \FortisAPILib\Models\Status3Enum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Recurring Id.
     * Recurring Id
     */
    public function getRecurringId(): ?string
    {
        if (count($this->recurringId) == 0) {
            return null;
        }
        return $this->recurringId['value'];
    }

    /**
     * Sets Recurring Id.
     * Recurring Id
     *
     * @maps recurring_id
     */
    public function setRecurringId(?string $recurringId): void
    {
        $this->recurringId['value'] = $recurringId;
    }

    /**
     * Unsets Recurring Id.
     * Recurring Id
     */
    public function unsetRecurringId(): void
    {
        $this->recurringId = [];
    }

    /**
     * Returns Created Ts.
     * Created Time Stamp
     */
    public function getCreatedTs(): ?int
    {
        if (count($this->createdTs) == 0) {
            return null;
        }
        return $this->createdTs['value'];
    }

    /**
     * Sets Created Ts.
     * Created Time Stamp
     *
     * @maps created_ts
     */
    public function setCreatedTs(?int $createdTs): void
    {
        $this->createdTs['value'] = $createdTs;
    }

    /**
     * Unsets Created Ts.
     * Created Time Stamp
     */
    public function unsetCreatedTs(): void
    {
        $this->createdTs = [];
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
     * Returns Modified Ts.
     * Modified Time Stamp
     */
    public function getModifiedTs(): ?int
    {
        if (count($this->modifiedTs) == 0) {
            return null;
        }
        return $this->modifiedTs['value'];
    }

    /**
     * Sets Modified Ts.
     * Modified Time Stamp
     *
     * @maps modified_ts
     */
    public function setModifiedTs(?int $modifiedTs): void
    {
        $this->modifiedTs['value'] = $modifiedTs;
    }

    /**
     * Unsets Modified Ts.
     * Modified Time Stamp
     */
    public function unsetModifiedTs(): void
    {
        $this->modifiedTs = [];
    }

    /**
     * Returns Modified User Id.
     * Last User ID that updated the register
     */
    public function getModifiedUserId(): ?string
    {
        if (count($this->modifiedUserId) == 0) {
            return null;
        }
        return $this->modifiedUserId['value'];
    }

    /**
     * Sets Modified User Id.
     * Last User ID that updated the register
     *
     * @maps modified_user_id
     */
    public function setModifiedUserId(?string $modifiedUserId): void
    {
        $this->modifiedUserId['value'] = $modifiedUserId;
    }

    /**
     * Unsets Modified User Id.
     * Last User ID that updated the register
     */
    public function unsetModifiedUserId(): void
    {
        $this->modifiedUserId = [];
    }

    /**
     * Converts the Data3 object to a human-readable string representation.
     *
     * @return string The string representation of the Data3 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Data3',
            [
                'id' => $this->id,
                'declinedTransactionId' => $this->getDeclinedTransactionId(),
                'paymentTransactionId' => $this->getPaymentTransactionId(),
                'status' => $this->status,
                'recurringId' => $this->getRecurringId(),
                'createdTs' => $this->getCreatedTs(),
                'createdUserId' => $this->getCreatedUserId(),
                'modifiedTs' => $this->getModifiedTs(),
                'modifiedUserId' => $this->getModifiedUserId(),
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
            $json['id']                      = $this->id;
        }
        if (!empty($this->declinedTransactionId)) {
            $json['declined_transaction_id'] = $this->declinedTransactionId['value'];
        }
        if (!empty($this->paymentTransactionId)) {
            $json['payment_transaction_id']  = $this->paymentTransactionId['value'];
        }
        if (isset($this->status)) {
            $json['status']                  = Status3Enum::checkValue($this->status);
        }
        if (!empty($this->recurringId)) {
            $json['recurring_id']            = $this->recurringId['value'];
        }
        if (!empty($this->createdTs)) {
            $json['created_ts']              = $this->createdTs['value'];
        }
        if (!empty($this->createdUserId)) {
            $json['created_user_id']         = $this->createdUserId['value'];
        }
        if (!empty($this->modifiedTs)) {
            $json['modified_ts']             = $this->modifiedTs['value'];
        }
        if (!empty($this->modifiedUserId)) {
            $json['modified_user_id']        = $this->modifiedUserId['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
