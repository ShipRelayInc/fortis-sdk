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
 * Array of merchant addresses.
 */
class Address81 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $addressLine1;

    /**
     * @var array
     */
    private $addressLine2 = [];

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $stateProvince;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var string
     */
    private $addressType;

    /**
     * @param string $addressLine1
     * @param string $city
     * @param string $stateProvince
     * @param string $postalCode
     * @param string $countryCode
     * @param string $addressType
     */
    public function __construct(
        string $addressLine1,
        string $city,
        string $stateProvince,
        string $postalCode,
        string $countryCode,
        string $addressType
    ) {
        $this->addressLine1 = $addressLine1;
        $this->city = $city;
        $this->stateProvince = $stateProvince;
        $this->postalCode = $postalCode;
        $this->countryCode = $countryCode;
        $this->addressType = $addressType;
    }

    /**
     * Returns Address Line 1.
     * Line 1 of address.
     */
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }

    /**
     * Sets Address Line 1.
     * Line 1 of address.
     *
     * @required
     * @maps address_line_1
     */
    public function setAddressLine1(string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * Returns Address Line 2.
     * Line 2 of address.
     */
    public function getAddressLine2(): ?string
    {
        if (count($this->addressLine2) == 0) {
            return null;
        }
        return $this->addressLine2['value'];
    }

    /**
     * Sets Address Line 2.
     * Line 2 of address.
     *
     * @maps address_line_2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2['value'] = $addressLine2;
    }

    /**
     * Unsets Address Line 2.
     * Line 2 of address.
     */
    public function unsetAddressLine2(): void
    {
        $this->addressLine2 = [];
    }

    /**
     * Returns City.
     * City of address.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Sets City.
     * City of address.
     *
     * @required
     * @maps city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns State Province.
     * State or province of address.
     */
    public function getStateProvince(): string
    {
        return $this->stateProvince;
    }

    /**
     * Sets State Province.
     * State or province of address.
     *
     * @required
     * @maps state_province
     */
    public function setStateProvince(string $stateProvince): void
    {
        $this->stateProvince = $stateProvince;
    }

    /**
     * Returns Postal Code.
     * Postal code of address.
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * Sets Postal Code.
     * Postal code of address.
     *
     * @required
     * @maps postal_code
     */
    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Returns Country Code.
     * Country of address.
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Sets Country Code.
     * Country of address.
     *
     * @required
     * @maps country_code
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Returns Address Type.
     * Address type of address.
     */
    public function getAddressType(): string
    {
        return $this->addressType;
    }

    /**
     * Sets Address Type.
     * Address type of address.
     *
     * @required
     * @maps address_type
     * @factory \FortisAPILib\Models\AddressTypeEnum::checkValue
     */
    public function setAddressType(string $addressType): void
    {
        $this->addressType = $addressType;
    }

    /**
     * Converts the Address81 object to a human-readable string representation.
     *
     * @return string The string representation of the Address81 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Address81',
            [
                'addressLine1' => $this->addressLine1,
                'addressLine2' => $this->getAddressLine2(),
                'city' => $this->city,
                'stateProvince' => $this->stateProvince,
                'postalCode' => $this->postalCode,
                'countryCode' => $this->countryCode,
                'addressType' => $this->addressType,
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
        $json['address_line_1']     = $this->addressLine1;
        if (!empty($this->addressLine2)) {
            $json['address_line_2'] = $this->addressLine2['value'];
        }
        $json['city']               = $this->city;
        $json['state_province']     = $this->stateProvince;
        $json['postal_code']        = $this->postalCode;
        $json['country_code']       = $this->countryCode;
        $json['address_type']       = AddressTypeEnum::checkValue($this->addressType);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
