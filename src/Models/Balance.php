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

class Balance implements \JsonSerializable
{
    /**
     * @var array
     */
    private $amountType = [];

    /**
     * @var array
     */
    private $accountType = [];

    /**
     * @var array
     */
    private $amount = [];

    /**
     * Returns Amount Type.
     * The type of amount balance
     */
    public function getAmountType(): ?string
    {
        if (count($this->amountType) == 0) {
            return null;
        }
        return $this->amountType['value'];
    }

    /**
     * Sets Amount Type.
     * The type of amount balance
     *
     * @maps amount_type
     */
    public function setAmountType(?string $amountType): void
    {
        $this->amountType['value'] = $amountType;
    }

    /**
     * Unsets Amount Type.
     * The type of amount balance
     */
    public function unsetAmountType(): void
    {
        $this->amountType = [];
    }

    /**
     * Returns Account Type.
     * The type of account balance
     */
    public function getAccountType(): ?string
    {
        if (count($this->accountType) == 0) {
            return null;
        }
        return $this->accountType['value'];
    }

    /**
     * Sets Account Type.
     * The type of account balance
     *
     * @maps account_type
     */
    public function setAccountType(?string $accountType): void
    {
        $this->accountType['value'] = $accountType;
    }

    /**
     * Unsets Account Type.
     * The type of account balance
     */
    public function unsetAccountType(): void
    {
        $this->accountType = [];
    }

    /**
     * Returns Amount.
     * The amount of balance
     */
    public function getAmount(): ?int
    {
        if (count($this->amount) == 0) {
            return null;
        }
        return $this->amount['value'];
    }

    /**
     * Sets Amount.
     * The amount of balance
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount['value'] = $amount;
    }

    /**
     * Unsets Amount.
     * The amount of balance
     */
    public function unsetAmount(): void
    {
        $this->amount = [];
    }

    /**
     * Converts the Balance object to a human-readable string representation.
     *
     * @return string The string representation of the Balance object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Balance',
            [
                'amountType' => $this->getAmountType(),
                'accountType' => $this->getAccountType(),
                'amount' => $this->getAmount(),
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
        if (!empty($this->amountType)) {
            $json['amount_type']  = $this->amountType['value'];
        }
        if (!empty($this->accountType)) {
            $json['account_type'] = $this->accountType['value'];
        }
        if (!empty($this->amount)) {
            $json['amount']       = $this->amount['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
