<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Surcharge;

/**
 * Builder for model Surcharge
 *
 * @see Surcharge
 */
class SurchargeBuilder
{
    /**
     * @var Surcharge
     */
    private $instance;

    private function __construct(Surcharge $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Surcharge Builder object.
     */
    public static function init(): self
    {
        return new self(new Surcharge());
    }

    /**
     * Sets surcharge fee field.
     *
     * @param int|null $value
     */
    public function surchargeFee(?int $value): self
    {
        $this->instance->setSurchargeFee($value);
        return $this;
    }

    /**
     * Sets surcharge rate field.
     *
     * @param int|null $value
     */
    public function surchargeRate(?int $value): self
    {
        $this->instance->setSurchargeRate($value);
        return $this;
    }

    /**
     * Sets max transaction amount field.
     *
     * @param int|null $value
     */
    public function maxTransactionAmount(?int $value): self
    {
        $this->instance->setMaxTransactionAmount($value);
        return $this;
    }

    /**
     * Unsets max transaction amount field.
     */
    public function unsetMaxTransactionAmount(): self
    {
        $this->instance->unsetMaxTransactionAmount();
        return $this;
    }

    /**
     * Sets min fee amount field.
     *
     * @param int|null $value
     */
    public function minFeeAmount(?int $value): self
    {
        $this->instance->setMinFeeAmount($value);
        return $this;
    }

    /**
     * Unsets min fee amount field.
     */
    public function unsetMinFeeAmount(): self
    {
        $this->instance->unsetMinFeeAmount();
        return $this;
    }

    /**
     * Sets max fee amount field.
     *
     * @param int|null $value
     */
    public function maxFeeAmount(?int $value): self
    {
        $this->instance->setMaxFeeAmount($value);
        return $this;
    }

    /**
     * Unsets max fee amount field.
     */
    public function unsetMaxFeeAmount(): self
    {
        $this->instance->unsetMaxFeeAmount();
        return $this;
    }

    /**
     * Sets surcharge on recurring field.
     *
     * @param bool|null $value
     */
    public function surchargeOnRecurring(?bool $value): self
    {
        $this->instance->setSurchargeOnRecurring($value);
        return $this;
    }

    /**
     * Sets refund surcharges field.
     *
     * @param bool|null $value
     */
    public function refundSurcharges(?bool $value): self
    {
        $this->instance->setRefundSurcharges($value);
        return $this;
    }

    /**
     * Sets blind refund surcharges field.
     *
     * @param bool|null $value
     */
    public function blindRefundSurcharges(?bool $value): self
    {
        $this->instance->setBlindRefundSurcharges($value);
        return $this;
    }

    /**
     * Sets product transaction id field.
     *
     * @param string|null $value
     */
    public function productTransactionId(?string $value): self
    {
        $this->instance->setProductTransactionId($value);
        return $this;
    }

    /**
     * Sets run as separate transaction field.
     *
     * @param bool|null $value
     */
    public function runAsSeparateTransaction(?bool $value): self
    {
        $this->instance->setRunAsSeparateTransaction($value);
        return $this;
    }

    /**
     * Sets apply to user type id field.
     *
     * @param string|null $value
     */
    public function applyToUserTypeId(?string $value): self
    {
        $this->instance->setApplyToUserTypeId($value);
        return $this;
    }

    /**
     * Unsets apply to user type id field.
     */
    public function unsetApplyToUserTypeId(): self
    {
        $this->instance->unsetApplyToUserTypeId();
        return $this;
    }

    /**
     * Sets title field.
     *
     * @param string|null $value
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Unsets title field.
     */
    public function unsetTitle(): self
    {
        $this->instance->unsetTitle();
        return $this;
    }

    /**
     * Sets surcharge label field.
     *
     * @param string|null $value
     */
    public function surchargeLabel(?string $value): self
    {
        $this->instance->setSurchargeLabel($value);
        return $this;
    }

    /**
     * Unsets surcharge label field.
     */
    public function unsetSurchargeLabel(): self
    {
        $this->instance->unsetSurchargeLabel();
        return $this;
    }

    /**
     * Sets surcharge transaction product id field.
     *
     * @param string|null $value
     */
    public function surchargeTransactionProductId(?string $value): self
    {
        $this->instance->setSurchargeTransactionProductId($value);
        return $this;
    }

    /**
     * Unsets surcharge transaction product id field.
     */
    public function unsetSurchargeTransactionProductId(): self
    {
        $this->instance->unsetSurchargeTransactionProductId();
        return $this;
    }

    /**
     * Sets state exception check field.
     *
     * @param bool|null $value
     */
    public function stateExceptionCheck(?bool $value): self
    {
        $this->instance->setStateExceptionCheck($value);
        return $this;
    }

    /**
     * Sets compliant field.
     *
     * @param bool|null $value
     */
    public function compliant(?bool $value): self
    {
        $this->instance->setCompliant($value);
        return $this;
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets created user id field.
     *
     * @param string|null $value
     */
    public function createdUserId(?string $value): self
    {
        $this->instance->setCreatedUserId($value);
        return $this;
    }

    /**
     * Sets modified user id field.
     *
     * @param string|null $value
     */
    public function modifiedUserId(?string $value): self
    {
        $this->instance->setModifiedUserId($value);
        return $this;
    }

    /**
     * Sets created ts field.
     *
     * @param int|null $value
     */
    public function createdTs(?int $value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Sets modified ts field.
     *
     * @param int|null $value
     */
    public function modifiedTs(?int $value): self
    {
        $this->instance->setModifiedTs($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Surcharge object.
     */
    public function build(): Surcharge
    {
        return CoreHelper::clone($this->instance);
    }
}
