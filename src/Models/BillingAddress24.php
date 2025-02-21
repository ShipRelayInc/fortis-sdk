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
 * Cardholder billing address object
 */
class BillingAddress24 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $countryCode;

    /**
     * @var string|null
     */
    private $addressLine1;

    /**
     * @var string|null
     */
    private $addressLine2;

    /**
     * @var string|null
     */
    private $addressLine3;

    /**
     * @var string|null
     */
    private $postalCode;

    /**
     * @var string|null
     */
    private $state;

    /**
     * Returns City.
     * The city of the Cardholder billing address associated with the card used for this purchase.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     * The city of the Cardholder billing address associated with the card used for this purchase.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Country Code.
     * The ISO 3166-1 alpha-3 country of the Cardholder billing address associated with the card used for
     * this purchase.
     *
     * The field is required if Cardholder Billing Address State is present and unless market or regional
     * mandate restricts sending this information.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Sets Country Code.
     * The ISO 3166-1 alpha-3 country of the Cardholder billing address associated with the card used for
     * this purchase.
     *
     * The field is required if Cardholder Billing Address State is present and unless market or regional
     * mandate restricts sending this information.
     *
     * @maps country_code
     */
    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Returns Address Line 1.
     * First line of the street address or equivalent local portion of the Cardholder billing address
     * associated with the card use for this purchase.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * Sets Address Line 1.
     * First line of the street address or equivalent local portion of the Cardholder billing address
     * associated with the card use for this purchase.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     *
     * @maps address_line_1
     */
    public function setAddressLine1(?string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * Returns Address Line 2.
     * Second line of the street address or equivalent local portion of the Cardholder billing address
     * associated with the card use for this purchase.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * Sets Address Line 2.
     * Second line of the street address or equivalent local portion of the Cardholder billing address
     * associated with the card use for this purchase.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     *
     * @maps address_line_2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * Returns Address Line 3.
     * Third line of the street address or equivalent local portion of the Cardholder billing address
     * associated with the card use for this purchase.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     */
    public function getAddressLine3(): ?string
    {
        return $this->addressLine3;
    }

    /**
     * Sets Address Line 3.
     * Third line of the street address or equivalent local portion of the Cardholder billing address
     * associated with the card use for this purchase.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     *
     * @maps address_line_3
     */
    public function setAddressLine3(?string $addressLine3): void
    {
        $this->addressLine3 = $addressLine3;
    }

    /**
     * Returns Postal Code.
     * ZIP or other postal code of the Cardholder billing address associated with the card used for this
     * purchase.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Sets Postal Code.
     * ZIP or other postal code of the Cardholder billing address associated with the card used for this
     * purchase.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     *
     * @maps postal_code
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Returns State.
     * The state or province of the Cardholder billing address associated with the card used for this
     * purchase. The value should be the country subdivision code defined in ISO 3166-2.
     *
     * This field is required unless State is not applicable for this country and unless market or regional
     * mandate restricts sending this information.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Sets State.
     * The state or province of the Cardholder billing address associated with the card used for this
     * purchase. The value should be the country subdivision code defined in ISO 3166-2.
     *
     * This field is required unless State is not applicable for this country and unless market or regional
     * mandate restricts sending this information.
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * Converts the BillingAddress24 object to a human-readable string representation.
     *
     * @return string The string representation of the BillingAddress24 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BillingAddress24',
            [
                'city' => $this->city,
                'countryCode' => $this->countryCode,
                'addressLine1' => $this->addressLine1,
                'addressLine2' => $this->addressLine2,
                'addressLine3' => $this->addressLine3,
                'postalCode' => $this->postalCode,
                'state' => $this->state,
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
        if (isset($this->city)) {
            $json['city']           = $this->city;
        }
        if (isset($this->countryCode)) {
            $json['country_code']   = $this->countryCode;
        }
        if (isset($this->addressLine1)) {
            $json['address_line_1'] = $this->addressLine1;
        }
        if (isset($this->addressLine2)) {
            $json['address_line_2'] = $this->addressLine2;
        }
        if (isset($this->addressLine3)) {
            $json['address_line_3'] = $this->addressLine3;
        }
        if (isset($this->postalCode)) {
            $json['postal_code']    = $this->postalCode;
        }
        if (isset($this->state)) {
            $json['state']          = $this->state;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
