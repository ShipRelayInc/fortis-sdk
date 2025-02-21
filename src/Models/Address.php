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
 * Address of contact
 */
class Address implements \JsonSerializable
{
    /**
     * @var array
     */
    private $city = [];

    /**
     * @var array
     */
    private $state = [];

    /**
     * @var array
     */
    private $postalCode = [];

    /**
     * @var array
     */
    private $country = [];

    /**
     * @var array
     */
    private $street = [];

    /**
     * Returns City.
     * City of contact
     */
    public function getCity(): ?string
    {
        if (count($this->city) == 0) {
            return null;
        }
        return $this->city['value'];
    }

    /**
     * Sets City.
     * City of contact
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city['value'] = $city;
    }

    /**
     * Unsets City.
     * City of contact
     */
    public function unsetCity(): void
    {
        $this->city = [];
    }

    /**
     * Returns State.
     * State of contact
     */
    public function getState(): ?string
    {
        if (count($this->state) == 0) {
            return null;
        }
        return $this->state['value'];
    }

    /**
     * Sets State.
     * State of contact
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state['value'] = $state;
    }

    /**
     * Unsets State.
     * State of contact
     */
    public function unsetState(): void
    {
        $this->state = [];
    }

    /**
     * Returns Postal Code.
     * Postal code of contact
     */
    public function getPostalCode(): ?string
    {
        if (count($this->postalCode) == 0) {
            return null;
        }
        return $this->postalCode['value'];
    }

    /**
     * Sets Postal Code.
     * Postal code of contact
     *
     * @maps postal_code
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode['value'] = $postalCode;
    }

    /**
     * Unsets Postal Code.
     * Postal code of contact
     */
    public function unsetPostalCode(): void
    {
        $this->postalCode = [];
    }

    /**
     * Returns Country.
     * An alpha 2 format country code of US or CA.
     */
    public function getCountry(): ?string
    {
        if (count($this->country) == 0) {
            return null;
        }
        return $this->country['value'];
    }

    /**
     * Sets Country.
     * An alpha 2 format country code of US or CA.
     *
     * @maps country
     * @factory \FortisAPILib\Models\CountryEnum::checkValue
     */
    public function setCountry(?string $country): void
    {
        $this->country['value'] = $country;
    }

    /**
     * Unsets Country.
     * An alpha 2 format country code of US or CA.
     */
    public function unsetCountry(): void
    {
        $this->country = [];
    }

    /**
     * Returns Street.
     * Street of contact
     */
    public function getStreet(): ?string
    {
        if (count($this->street) == 0) {
            return null;
        }
        return $this->street['value'];
    }

    /**
     * Sets Street.
     * Street of contact
     *
     * @maps street
     */
    public function setStreet(?string $street): void
    {
        $this->street['value'] = $street;
    }

    /**
     * Unsets Street.
     * Street of contact
     */
    public function unsetStreet(): void
    {
        $this->street = [];
    }

    /**
     * Converts the Address object to a human-readable string representation.
     *
     * @return string The string representation of the Address object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Address',
            [
                'city' => $this->getCity(),
                'state' => $this->getState(),
                'postalCode' => $this->getPostalCode(),
                'country' => $this->getCountry(),
                'street' => $this->getStreet(),
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
        if (!empty($this->city)) {
            $json['city']        = $this->city['value'];
        }
        if (!empty($this->state)) {
            $json['state']       = $this->state['value'];
        }
        if (!empty($this->postalCode)) {
            $json['postal_code'] = $this->postalCode['value'];
        }
        if (!empty($this->country)) {
            $json['country']     = CountryEnum::checkValue($this->country['value']);
        }
        if (!empty($this->street)) {
            $json['street']      = $this->street['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
