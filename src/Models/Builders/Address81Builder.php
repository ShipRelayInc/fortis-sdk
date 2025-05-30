<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Address81;

/**
 * Builder for model Address81
 *
 * @see Address81
 */
class Address81Builder
{
    /**
     * @var Address81
     */
    private $instance;

    private function __construct(Address81 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Address 81 Builder object.
     *
     * @param string $addressLine1
     * @param string $city
     * @param string $stateProvince
     * @param string $postalCode
     * @param string $countryCode
     * @param string $addressType
     */
    public static function init(
        string $addressLine1,
        string $city,
        string $stateProvince,
        string $postalCode,
        string $countryCode,
        string $addressType
    ): self {
        return new self(
            new Address81($addressLine1, $city, $stateProvince, $postalCode, $countryCode, $addressType)
        );
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
     * Unsets address line 2 field.
     */
    public function unsetAddressLine2(): self
    {
        $this->instance->unsetAddressLine2();
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
     * Initializes a new Address 81 object.
     */
    public function build(): Address81
    {
        return CoreHelper::clone($this->instance);
    }
}
