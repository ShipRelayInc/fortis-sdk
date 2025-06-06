<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\AdditionalAmount;

/**
 * Builder for model AdditionalAmount
 *
 * @see AdditionalAmount
 */
class AdditionalAmountBuilder
{
    /**
     * @var AdditionalAmount
     */
    private $instance;

    private function __construct(AdditionalAmount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Additional Amount Builder object.
     */
    public static function init(): self
    {
        return new self(new AdditionalAmount());
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Unsets type field.
     */
    public function unsetType(): self
    {
        $this->instance->unsetType();
        return $this;
    }

    /**
     * Sets amount field.
     *
     * @param int|null $value
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Unsets amount field.
     */
    public function unsetAmount(): self
    {
        $this->instance->unsetAmount();
        return $this;
    }

    /**
     * Sets account type field.
     *
     * @param string|null $value
     */
    public function accountType(?string $value): self
    {
        $this->instance->setAccountType($value);
        return $this;
    }

    /**
     * Unsets account type field.
     */
    public function unsetAccountType(): self
    {
        $this->instance->unsetAccountType();
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param float|null $value
     */
    public function currency(?float $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Unsets currency field.
     */
    public function unsetCurrency(): self
    {
        $this->instance->unsetCurrency();
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
     * Initializes a new Additional Amount object.
     */
    public function build(): AdditionalAmount
    {
        return CoreHelper::clone($this->instance);
    }
}
