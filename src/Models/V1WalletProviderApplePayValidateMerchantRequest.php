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

class V1WalletProviderApplePayValidateMerchantRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $merchantId;

    /**
     * @var string
     */
    private $domainName;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @param string $url
     * @param string $merchantId
     * @param string $domainName
     * @param string $displayName
     */
    public function __construct(string $url, string $merchantId, string $domainName, string $displayName)
    {
        $this->url = $url;
        $this->merchantId = $merchantId;
        $this->domainName = $domainName;
        $this->displayName = $displayName;
    }

    /**
     * Returns Url.
     * Url obtained in the ApplePay button click event. Apple's URL that needs to be called to validate
     * merchant.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * Url obtained in the ApplePay button click event. Apple's URL that needs to be called to validate
     * merchant.
     *
     * @required
     * @maps url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Merchant Id.
     * Merchant ID
     */
    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    /**
     * Sets Merchant Id.
     * Merchant ID
     *
     * @required
     * @maps merchantId
     */
    public function setMerchantId(string $merchantId): void
    {
        $this->merchantId = $merchantId;
    }

    /**
     * Returns Domain Name.
     * Domain Name
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }

    /**
     * Sets Domain Name.
     * Domain Name
     *
     * @required
     * @maps domainName
     */
    public function setDomainName(string $domainName): void
    {
        $this->domainName = $domainName;
    }

    /**
     * Returns Display Name.
     * Title
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * Sets Display Name.
     * Title
     *
     * @required
     * @maps displayName
     */
    public function setDisplayName(string $displayName): void
    {
        $this->displayName = $displayName;
    }

    /**
     * Converts the V1WalletProviderApplePayValidateMerchantRequest object to a human-readable string
     * representation.
     *
     * @return string The string representation of the V1WalletProviderApplePayValidateMerchantRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'V1WalletProviderApplePayValidateMerchantRequest',
            [
                'url' => $this->url,
                'merchantId' => $this->merchantId,
                'domainName' => $this->domainName,
                'displayName' => $this->displayName,
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
        $json['url']         = $this->url;
        $json['merchantId']  = $this->merchantId;
        $json['domainName']  = $this->domainName;
        $json['displayName'] = $this->displayName;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
