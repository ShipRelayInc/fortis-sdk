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
 * Contains information for the Cardholder. This field is required unless market or regional mandate
 * restricts sending this information.
 */
class Cardholder implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $addressMatch;

    /**
     * @var BillingAddress24|null
     */
    private $billingAddress;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var HomePhone|null
     */
    private $homePhone;

    /**
     * @var MobilePhone|null
     */
    private $mobilePhone;

    /**
     * @var WorkPhone|null
     */
    private $workPhone;

    /**
     * @var string|null
     */
    private $cardholderName;

    /**
     * @var ShippingAddress|null
     */
    private $shippingAddress;

    /**
     * @var string|null
     */
    private $taxId;

    /**
     * Returns Address Match.
     * Indicates whether the Cardholder Shipping Address and Cardholder Billing Address are the same.
     * If the field is not set and the shipping and billing addresses are the same, the 3DS Server will
     * set the value to Y. Otherwise, the value will not be changed.
     * >Y - Shipping Address matches Billing Address
     * >
     * >N - Shipping Address does not match Billing Address
     * >
     */
    public function getAddressMatch(): ?string
    {
        return $this->addressMatch;
    }

    /**
     * Sets Address Match.
     * Indicates whether the Cardholder Shipping Address and Cardholder Billing Address are the same.
     * If the field is not set and the shipping and billing addresses are the same, the 3DS Server will
     * set the value to Y. Otherwise, the value will not be changed.
     * >Y - Shipping Address matches Billing Address
     * >
     * >N - Shipping Address does not match Billing Address
     * >
     *
     * @maps address_match
     * @factory \FortisAPILib\Models\AddressMatchEnum::checkValue
     */
    public function setAddressMatch(?string $addressMatch): void
    {
        $this->addressMatch = $addressMatch;
    }

    /**
     * Returns Billing Address.
     * Cardholder billing address object
     */
    public function getBillingAddress(): ?BillingAddress24
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * Cardholder billing address object
     *
     * @maps billing_address
     */
    public function setBillingAddress(?BillingAddress24 $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Email.
     * The email address associated with the account that is either entered by the Cardholder, or is on
     * file with the 3DS Requestor. This field shall meet requirements of Section 3.4 of IETF RFC 5322.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * The email address associated with the account that is either entered by the Cardholder, or is on
     * file with the 3DS Requestor. This field shall meet requirements of Section 3.4 of IETF RFC 5322.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Home Phone.
     * The home phone provided by the Cardholder. Refer to ITU-E.164 for additional information on format
     * and length.
     *
     * This field is required if available, unless market or regional mandate restricts sending this
     * information.
     */
    public function getHomePhone(): ?HomePhone
    {
        return $this->homePhone;
    }

    /**
     * Sets Home Phone.
     * The home phone provided by the Cardholder. Refer to ITU-E.164 for additional information on format
     * and length.
     *
     * This field is required if available, unless market or regional mandate restricts sending this
     * information.
     *
     * @maps home_phone
     */
    public function setHomePhone(?HomePhone $homePhone): void
    {
        $this->homePhone = $homePhone;
    }

    /**
     * Returns Mobile Phone.
     * The mobile phone provided by the Cardholder. Refer to ITU-E.164 for additional information on format
     * and length.
     *
     * This field is required if available, unless market or regional mandate restricts sending this
     * information.
     */
    public function getMobilePhone(): ?MobilePhone
    {
        return $this->mobilePhone;
    }

    /**
     * Sets Mobile Phone.
     * The mobile phone provided by the Cardholder. Refer to ITU-E.164 for additional information on format
     * and length.
     *
     * This field is required if available, unless market or regional mandate restricts sending this
     * information.
     *
     * @maps mobile_phone
     */
    public function setMobilePhone(?MobilePhone $mobilePhone): void
    {
        $this->mobilePhone = $mobilePhone;
    }

    /**
     * Returns Work Phone.
     * The work phone provided by the Cardholder. Refer to ITU-E.164 for additional information on format
     * and length.
     *
     * This field is required if available, unless market or regional mandate restricts sending this
     * information.
     */
    public function getWorkPhone(): ?WorkPhone
    {
        return $this->workPhone;
    }

    /**
     * Sets Work Phone.
     * The work phone provided by the Cardholder. Refer to ITU-E.164 for additional information on format
     * and length.
     *
     * This field is required if available, unless market or regional mandate restricts sending this
     * information.
     *
     * @maps work_phone
     */
    public function setWorkPhone(?WorkPhone $workPhone): void
    {
        $this->workPhone = $workPhone;
    }

    /**
     * Returns Cardholder Name.
     * Name of the Cardholder.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     */
    public function getCardholderName(): ?string
    {
        return $this->cardholderName;
    }

    /**
     * Sets Cardholder Name.
     * Name of the Cardholder.
     *
     * This field is required unless market or regional mandate restricts sending this information.
     *
     * @maps cardholder_name
     */
    public function setCardholderName(?string $cardholderName): void
    {
        $this->cardholderName = $cardholderName;
    }

    /**
     * Returns Shipping Address.
     * Cardholder shipping address object
     */
    public function getShippingAddress(): ?ShippingAddress
    {
        return $this->shippingAddress;
    }

    /**
     * Sets Shipping Address.
     * Cardholder shipping address object
     *
     * @maps shipping_address
     */
    public function setShippingAddress(?ShippingAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * Returns Tax Id.
     * Tax ID is the Cardholder's tax identification.
     *
     * This field is required depending on the rules provided by the Directory Server.
     * Available for supporting EMV 3DS 2.3.1 and later versions.
     */
    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    /**
     * Sets Tax Id.
     * Tax ID is the Cardholder's tax identification.
     *
     * This field is required depending on the rules provided by the Directory Server.
     * Available for supporting EMV 3DS 2.3.1 and later versions.
     *
     * @maps tax_id
     */
    public function setTaxId(?string $taxId): void
    {
        $this->taxId = $taxId;
    }

    /**
     * Converts the Cardholder object to a human-readable string representation.
     *
     * @return string The string representation of the Cardholder object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Cardholder',
            [
                'addressMatch' => $this->addressMatch,
                'billingAddress' => $this->billingAddress,
                'email' => $this->email,
                'homePhone' => $this->homePhone,
                'mobilePhone' => $this->mobilePhone,
                'workPhone' => $this->workPhone,
                'cardholderName' => $this->cardholderName,
                'shippingAddress' => $this->shippingAddress,
                'taxId' => $this->taxId,
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
        if (isset($this->addressMatch)) {
            $json['address_match']    = AddressMatchEnum::checkValue($this->addressMatch);
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']  = $this->billingAddress;
        }
        if (isset($this->email)) {
            $json['email']            = $this->email;
        }
        if (isset($this->homePhone)) {
            $json['home_phone']       = $this->homePhone;
        }
        if (isset($this->mobilePhone)) {
            $json['mobile_phone']     = $this->mobilePhone;
        }
        if (isset($this->workPhone)) {
            $json['work_phone']       = $this->workPhone;
        }
        if (isset($this->cardholderName)) {
            $json['cardholder_name']  = $this->cardholderName;
        }
        if (isset($this->shippingAddress)) {
            $json['shipping_address'] = $this->shippingAddress;
        }
        if (isset($this->taxId)) {
            $json['tax_id']           = $this->taxId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
