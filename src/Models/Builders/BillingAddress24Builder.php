<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\BillingAddress24;

/**
 * Builder for model BillingAddress24
 *
 * @see BillingAddress24
 */
class BillingAddress24Builder
{
    /**
     * @var BillingAddress24
     */
    private $instance;

    private function __construct(BillingAddress24 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Billing Address 24 Builder object.
     */
    public static function init(): self
    {
        return new self(new BillingAddress24());
    }

    /**
     * Sets city field.
     *
     * @param string|null $value
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Sets country code field.
     *
     * @param string|null $value
     */
    public function countryCode(?string $value): self
    {
        $this->instance->setCountryCode($value);
        return $this;
    }

    /**
     * Sets address line 1 field.
     *
     * @param string|null $value
     */
    public function addressLine1(?string $value): self
    {
        $this->instance->setAddressLine1($value);
        return $this;
    }

    /**
     * Sets address line 2 field.
     *
     * @param string|null $value
     */
    public function addressLine2(?string $value): self
    {
        $this->instance->setAddressLine2($value);
        return $this;
    }

    /**
     * Sets address line 3 field.
     *
     * @param string|null $value
     */
    public function addressLine3(?string $value): self
    {
        $this->instance->setAddressLine3($value);
        return $this;
    }

    /**
     * Sets postal code field.
     *
     * @param string|null $value
     */
    public function postalCode(?string $value): self
    {
        $this->instance->setPostalCode($value);
        return $this;
    }

    /**
     * Sets state field.
     *
     * @param string|null $value
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
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
     * Initializes a new Billing Address 24 object.
     */
    public function build(): BillingAddress24
    {
        return CoreHelper::clone($this->instance);
    }
}
