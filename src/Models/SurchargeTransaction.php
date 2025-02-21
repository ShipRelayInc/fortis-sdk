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
 * Surcharge Transaction Information on `expand`
 */
class SurchargeTransaction implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $modelName;

    /**
     * @var string|null
     */
    private $transactionId;

    /**
     * @var int|null
     */
    private $surchargeFee;

    /**
     * @var int|null
     */
    private $surchargeRate;

    /**
     * @var array
     */
    private $surchargeAmount = [];

    /**
     * @var array
     */
    private $surchargeTransactionMin = [];

    /**
     * @var array
     */
    private $surchargeTransactionMax = [];

    /**
     * @var array
     */
    private $created = [];

    /**
     * @var array
     */
    private $modified = [];

    /**
     * @var array
     */
    private $createdUserId = [];

    /**
     * @var array
     */
    private $modifiedUserId = [];

    /**
     * Returns Id.
     * ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * ID
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Model Name.
     * Model Name
     */
    public function getModelName(): ?string
    {
        return $this->modelName;
    }

    /**
     * Sets Model Name.
     * Model Name
     *
     * @maps model_name
     */
    public function setModelName(?string $modelName): void
    {
        $this->modelName = $modelName;
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
     * Returns Surcharge Fee.
     * Surcharge Fee
     */
    public function getSurchargeFee(): ?int
    {
        return $this->surchargeFee;
    }

    /**
     * Sets Surcharge Fee.
     * Surcharge Fee
     *
     * @maps surcharge_fee
     */
    public function setSurchargeFee(?int $surchargeFee): void
    {
        $this->surchargeFee = $surchargeFee;
    }

    /**
     * Returns Surcharge Rate.
     * Surcharge Rate
     */
    public function getSurchargeRate(): ?int
    {
        return $this->surchargeRate;
    }

    /**
     * Sets Surcharge Rate.
     * Surcharge Rate
     *
     * @maps surcharge_rate
     */
    public function setSurchargeRate(?int $surchargeRate): void
    {
        $this->surchargeRate = $surchargeRate;
    }

    /**
     * Returns Surcharge Amount.
     * Surcharge Amount
     */
    public function getSurchargeAmount(): ?int
    {
        if (count($this->surchargeAmount) == 0) {
            return null;
        }
        return $this->surchargeAmount['value'];
    }

    /**
     * Sets Surcharge Amount.
     * Surcharge Amount
     *
     * @maps surcharge_amount
     */
    public function setSurchargeAmount(?int $surchargeAmount): void
    {
        $this->surchargeAmount['value'] = $surchargeAmount;
    }

    /**
     * Unsets Surcharge Amount.
     * Surcharge Amount
     */
    public function unsetSurchargeAmount(): void
    {
        $this->surchargeAmount = [];
    }

    /**
     * Returns Surcharge Transaction Min.
     * Surcharge Transaction Minimum
     */
    public function getSurchargeTransactionMin(): ?int
    {
        if (count($this->surchargeTransactionMin) == 0) {
            return null;
        }
        return $this->surchargeTransactionMin['value'];
    }

    /**
     * Sets Surcharge Transaction Min.
     * Surcharge Transaction Minimum
     *
     * @maps surcharge_transaction_min
     */
    public function setSurchargeTransactionMin(?int $surchargeTransactionMin): void
    {
        $this->surchargeTransactionMin['value'] = $surchargeTransactionMin;
    }

    /**
     * Unsets Surcharge Transaction Min.
     * Surcharge Transaction Minimum
     */
    public function unsetSurchargeTransactionMin(): void
    {
        $this->surchargeTransactionMin = [];
    }

    /**
     * Returns Surcharge Transaction Max.
     * Surcharge Transaction Maximum
     */
    public function getSurchargeTransactionMax(): ?int
    {
        if (count($this->surchargeTransactionMax) == 0) {
            return null;
        }
        return $this->surchargeTransactionMax['value'];
    }

    /**
     * Sets Surcharge Transaction Max.
     * Surcharge Transaction Maximum
     *
     * @maps surcharge_transaction_max
     */
    public function setSurchargeTransactionMax(?int $surchargeTransactionMax): void
    {
        $this->surchargeTransactionMax['value'] = $surchargeTransactionMax;
    }

    /**
     * Unsets Surcharge Transaction Max.
     * Surcharge Transaction Maximum
     */
    public function unsetSurchargeTransactionMax(): void
    {
        $this->surchargeTransactionMax = [];
    }

    /**
     * Returns Created.
     * Created
     */
    public function getCreated(): ?int
    {
        if (count($this->created) == 0) {
            return null;
        }
        return $this->created['value'];
    }

    /**
     * Sets Created.
     * Created
     *
     * @maps created
     */
    public function setCreated(?int $created): void
    {
        $this->created['value'] = $created;
    }

    /**
     * Unsets Created.
     * Created
     */
    public function unsetCreated(): void
    {
        $this->created = [];
    }

    /**
     * Returns Modified.
     * Modified
     */
    public function getModified(): ?int
    {
        if (count($this->modified) == 0) {
            return null;
        }
        return $this->modified['value'];
    }

    /**
     * Sets Modified.
     * Modified
     *
     * @maps modified
     */
    public function setModified(?int $modified): void
    {
        $this->modified['value'] = $modified;
    }

    /**
     * Unsets Modified.
     * Modified
     */
    public function unsetModified(): void
    {
        $this->modified = [];
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
     * Converts the SurchargeTransaction object to a human-readable string representation.
     *
     * @return string The string representation of the SurchargeTransaction object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SurchargeTransaction',
            [
                'id' => $this->id,
                'modelName' => $this->modelName,
                'transactionId' => $this->transactionId,
                'surchargeFee' => $this->surchargeFee,
                'surchargeRate' => $this->surchargeRate,
                'surchargeAmount' => $this->getSurchargeAmount(),
                'surchargeTransactionMin' => $this->getSurchargeTransactionMin(),
                'surchargeTransactionMax' => $this->getSurchargeTransactionMax(),
                'created' => $this->getCreated(),
                'modified' => $this->getModified(),
                'createdUserId' => $this->getCreatedUserId(),
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
            $json['id']                        = $this->id;
        }
        if (isset($this->modelName)) {
            $json['model_name']                = $this->modelName;
        }
        if (isset($this->transactionId)) {
            $json['transaction_id']            = $this->transactionId;
        }
        if (isset($this->surchargeFee)) {
            $json['surcharge_fee']             = $this->surchargeFee;
        }
        if (isset($this->surchargeRate)) {
            $json['surcharge_rate']            = $this->surchargeRate;
        }
        if (!empty($this->surchargeAmount)) {
            $json['surcharge_amount']          = $this->surchargeAmount['value'];
        }
        if (!empty($this->surchargeTransactionMin)) {
            $json['surcharge_transaction_min'] = $this->surchargeTransactionMin['value'];
        }
        if (!empty($this->surchargeTransactionMax)) {
            $json['surcharge_transaction_max'] = $this->surchargeTransactionMax['value'];
        }
        if (!empty($this->created)) {
            $json['created']                   = $this->created['value'];
        }
        if (!empty($this->modified)) {
            $json['modified']                  = $this->modified['value'];
        }
        if (!empty($this->createdUserId)) {
            $json['created_user_id']           = $this->createdUserId['value'];
        }
        if (!empty($this->modifiedUserId)) {
            $json['modified_user_id']          = $this->modifiedUserId['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
