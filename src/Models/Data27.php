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

class Data27 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $issuerBankName;

    /**
     * @var string|null
     */
    private $countryCode;

    /**
     * @var string|null
     */
    private $detailCardProduct;

    /**
     * @var string|null
     */
    private $detailCardIndicator;

    /**
     * @var string|null
     */
    private $fsaIndicator;

    /**
     * @var string|null
     */
    private $prepaidIndicator;

    /**
     * @var string|null
     */
    private $productId;

    /**
     * @var string|null
     */
    private $regulatorIndicator;

    /**
     * @var array
     */
    private $visaProductSubType = [];

    /**
     * @var array
     */
    private $visaLargeTicketIndicator = [];

    /**
     * @var string|null
     */
    private $accountFundSource;

    /**
     * @var array
     */
    private $cardClass = [];

    /**
     * @var array
     */
    private $tokenInd = [];

    /**
     * @var array
     */
    private $issuingNetwork = [];

    /**
     * Returns Issuer Bank Name.
     * The Issuer Bank name for the BIN
     */
    public function getIssuerBankName(): ?string
    {
        return $this->issuerBankName;
    }

    /**
     * Sets Issuer Bank Name.
     * The Issuer Bank name for the BIN
     *
     * @maps issuer_bank_name
     */
    public function setIssuerBankName(?string $issuerBankName): void
    {
        $this->issuerBankName = $issuerBankName;
    }

    /**
     * Returns Country Code.
     * VISA - Three character alpha country code
     * MC - Three character alpha country code
     * Maestro - Three character alpha country code
     * Amex - Space Filled
     * Discover - Three character alpha country code or spaces when Discover doesn't share issuer country.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Sets Country Code.
     * VISA - Three character alpha country code
     * MC - Three character alpha country code
     * Maestro - Three character alpha country code
     * Amex - Space Filled
     * Discover - Three character alpha country code or spaces when Discover doesn't share issuer country.
     *
     * @maps country_code
     */
    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Returns Detail Card Product.
     * V - Visa
     * M - MasterCard
     * A - American Express
     * D - Discover
     * N - PIN Only (Non-Visa/MasterCard/AMEX/Discover
     */
    public function getDetailCardProduct(): ?string
    {
        return $this->detailCardProduct;
    }

    /**
     * Sets Detail Card Product.
     * V - Visa
     * M - MasterCard
     * A - American Express
     * D - Discover
     * N - PIN Only (Non-Visa/MasterCard/AMEX/Discover
     *
     * @maps detail_card_product
     */
    public function setDetailCardProduct(?string $detailCardProduct): void
    {
        $this->detailCardProduct = $detailCardProduct;
    }

    /**
     * Returns Detail Card Indicator.
     * Left justified, Space filled
     */
    public function getDetailCardIndicator(): ?string
    {
        return $this->detailCardIndicator;
    }

    /**
     * Sets Detail Card Indicator.
     * Left justified, Space filled
     *
     * @maps detail_card_indicator
     */
    public function setDetailCardIndicator(?string $detailCardIndicator): void
    {
        $this->detailCardIndicator = $detailCardIndicator;
    }

    /**
     * Returns Fsa Indicator.
     * Left justified, Space filled
     */
    public function getFsaIndicator(): ?string
    {
        return $this->fsaIndicator;
    }

    /**
     * Sets Fsa Indicator.
     * Left justified, Space filled
     *
     * @maps fsa_indicator
     */
    public function setFsaIndicator(?string $fsaIndicator): void
    {
        $this->fsaIndicator = $fsaIndicator;
    }

    /**
     * Returns Prepaid Indicator.
     * P = Prepaid Card
     * Default: Space filled
     */
    public function getPrepaidIndicator(): ?string
    {
        return $this->prepaidIndicator;
    }

    /**
     * Sets Prepaid Indicator.
     * P = Prepaid Card
     * Default: Space filled
     *
     * @maps prepaid_indicator
     */
    public function setPrepaidIndicator(?string $prepaidIndicator): void
    {
        $this->prepaidIndicator = $prepaidIndicator;
    }

    /**
     * Returns Product Id.
     * P = Prepaid Card
     * Default: Space filled
     */
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     * P = Prepaid Card
     * Default: Space filled
     *
     * @maps product_id
     */
    public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Regulator Indicator.
     * P = Prepaid Card
     * Default: Space filled
     */
    public function getRegulatorIndicator(): ?string
    {
        return $this->regulatorIndicator;
    }

    /**
     * Sets Regulator Indicator.
     * P = Prepaid Card
     * Default: Space filled
     *
     * @maps regulator_indicator
     */
    public function setRegulatorIndicator(?string $regulatorIndicator): void
    {
        $this->regulatorIndicator = $regulatorIndicator;
    }

    /**
     * Returns Visa Product Sub Type.
     * This is used to identify product sub-types, i.e. further classification of product.
     */
    public function getVisaProductSubType(): ?string
    {
        if (count($this->visaProductSubType) == 0) {
            return null;
        }
        return $this->visaProductSubType['value'];
    }

    /**
     * Sets Visa Product Sub Type.
     * This is used to identify product sub-types, i.e. further classification of product.
     *
     * @maps visa_product_sub_type
     */
    public function setVisaProductSubType(?string $visaProductSubType): void
    {
        $this->visaProductSubType['value'] = $visaProductSubType;
    }

    /**
     * Unsets Visa Product Sub Type.
     * This is used to identify product sub-types, i.e. further classification of product.
     */
    public function unsetVisaProductSubType(): void
    {
        $this->visaProductSubType = [];
    }

    /**
     * Returns Visa Large Ticket Indicator.
     * L = Visa Large Ticket.
     * Default: Space filled
     */
    public function getVisaLargeTicketIndicator(): ?string
    {
        if (count($this->visaLargeTicketIndicator) == 0) {
            return null;
        }
        return $this->visaLargeTicketIndicator['value'];
    }

    /**
     * Sets Visa Large Ticket Indicator.
     * L = Visa Large Ticket.
     * Default: Space filled
     *
     * @maps visa_large_ticket_indicator
     */
    public function setVisaLargeTicketIndicator(?string $visaLargeTicketIndicator): void
    {
        $this->visaLargeTicketIndicator['value'] = $visaLargeTicketIndicator;
    }

    /**
     * Unsets Visa Large Ticket Indicator.
     * L = Visa Large Ticket.
     * Default: Space filled
     */
    public function unsetVisaLargeTicketIndicator(): void
    {
        $this->visaLargeTicketIndicator = [];
    }

    /**
     * Returns Account Fund Source.
     * For Visa, MasterCard, and Discover.  Identifies the source of the funds associated with the primary
     * account for the card.
     */
    public function getAccountFundSource(): ?string
    {
        return $this->accountFundSource;
    }

    /**
     * Sets Account Fund Source.
     * For Visa, MasterCard, and Discover.  Identifies the source of the funds associated with the primary
     * account for the card.
     *
     * @maps account_fund_source
     */
    public function setAccountFundSource(?string $accountFundSource): void
    {
        $this->accountFundSource = $accountFundSource;
    }

    /**
     * Returns Card Class.
     * Categorizes the BIN as a Business card, Corporate T&E card, Purchase card or Consumer card. Assists
     * the POS device with prompting decisions – to collect addenda or not.  Visa, MasterCard and Discover
     * only.
     */
    public function getCardClass(): ?string
    {
        if (count($this->cardClass) == 0) {
            return null;
        }
        return $this->cardClass['value'];
    }

    /**
     * Sets Card Class.
     * Categorizes the BIN as a Business card, Corporate T&E card, Purchase card or Consumer card. Assists
     * the POS device with prompting decisions – to collect addenda or not.  Visa, MasterCard and Discover
     * only.
     *
     * @maps card_class
     */
    public function setCardClass(?string $cardClass): void
    {
        $this->cardClass['value'] = $cardClass;
    }

    /**
     * Unsets Card Class.
     * Categorizes the BIN as a Business card, Corporate T&E card, Purchase card or Consumer card. Assists
     * the POS device with prompting decisions – to collect addenda or not.  Visa, MasterCard and Discover
     * only.
     */
    public function unsetCardClass(): void
    {
        $this->cardClass = [];
    }

    /**
     * Returns Token Ind.
     * Token Indicator values:
     * Y = Token BIN
     * Default: Space filled
     * VISA, MC, and Discover Only
     */
    public function getTokenInd(): ?string
    {
        if (count($this->tokenInd) == 0) {
            return null;
        }
        return $this->tokenInd['value'];
    }

    /**
     * Sets Token Ind.
     * Token Indicator values:
     * Y = Token BIN
     * Default: Space filled
     * VISA, MC, and Discover Only
     *
     * @maps token_ind
     */
    public function setTokenInd(?string $tokenInd): void
    {
        $this->tokenInd['value'] = $tokenInd;
    }

    /**
     * Unsets Token Ind.
     * Token Indicator values:
     * Y = Token BIN
     * Default: Space filled
     * VISA, MC, and Discover Only
     */
    public function unsetTokenInd(): void
    {
        $this->tokenInd = [];
    }

    /**
     * Returns Issuing Network.
     * For Discover card types
     * 00 - Discover
     * 01 - Diners
     * 02 - JCB (Japanese Credit Bank)
     * 03 - CUP (China Union Pay)
     * 04 PayPal
     */
    public function getIssuingNetwork(): ?string
    {
        if (count($this->issuingNetwork) == 0) {
            return null;
        }
        return $this->issuingNetwork['value'];
    }

    /**
     * Sets Issuing Network.
     * For Discover card types
     * 00 - Discover
     * 01 - Diners
     * 02 - JCB (Japanese Credit Bank)
     * 03 - CUP (China Union Pay)
     * 04 PayPal
     *
     * @maps issuing_network
     */
    public function setIssuingNetwork(?string $issuingNetwork): void
    {
        $this->issuingNetwork['value'] = $issuingNetwork;
    }

    /**
     * Unsets Issuing Network.
     * For Discover card types
     * 00 - Discover
     * 01 - Diners
     * 02 - JCB (Japanese Credit Bank)
     * 03 - CUP (China Union Pay)
     * 04 PayPal
     */
    public function unsetIssuingNetwork(): void
    {
        $this->issuingNetwork = [];
    }

    /**
     * Converts the Data27 object to a human-readable string representation.
     *
     * @return string The string representation of the Data27 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Data27',
            [
                'issuerBankName' => $this->issuerBankName,
                'countryCode' => $this->countryCode,
                'detailCardProduct' => $this->detailCardProduct,
                'detailCardIndicator' => $this->detailCardIndicator,
                'fsaIndicator' => $this->fsaIndicator,
                'prepaidIndicator' => $this->prepaidIndicator,
                'productId' => $this->productId,
                'regulatorIndicator' => $this->regulatorIndicator,
                'visaProductSubType' => $this->getVisaProductSubType(),
                'visaLargeTicketIndicator' => $this->getVisaLargeTicketIndicator(),
                'accountFundSource' => $this->accountFundSource,
                'cardClass' => $this->getCardClass(),
                'tokenInd' => $this->getTokenInd(),
                'issuingNetwork' => $this->getIssuingNetwork(),
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
        if (isset($this->issuerBankName)) {
            $json['issuer_bank_name']            = $this->issuerBankName;
        }
        if (isset($this->countryCode)) {
            $json['country_code']                = $this->countryCode;
        }
        if (isset($this->detailCardProduct)) {
            $json['detail_card_product']         = $this->detailCardProduct;
        }
        if (isset($this->detailCardIndicator)) {
            $json['detail_card_indicator']       = $this->detailCardIndicator;
        }
        if (isset($this->fsaIndicator)) {
            $json['fsa_indicator']               = $this->fsaIndicator;
        }
        if (isset($this->prepaidIndicator)) {
            $json['prepaid_indicator']           = $this->prepaidIndicator;
        }
        if (isset($this->productId)) {
            $json['product_id']                  = $this->productId;
        }
        if (isset($this->regulatorIndicator)) {
            $json['regulator_indicator']         = $this->regulatorIndicator;
        }
        if (!empty($this->visaProductSubType)) {
            $json['visa_product_sub_type']       = $this->visaProductSubType['value'];
        }
        if (!empty($this->visaLargeTicketIndicator)) {
            $json['visa_large_ticket_indicator'] = $this->visaLargeTicketIndicator['value'];
        }
        if (isset($this->accountFundSource)) {
            $json['account_fund_source']         = $this->accountFundSource;
        }
        if (!empty($this->cardClass)) {
            $json['card_class']                  = $this->cardClass['value'];
        }
        if (!empty($this->tokenInd)) {
            $json['token_ind']                   = $this->tokenInd['value'];
        }
        if (!empty($this->issuingNetwork)) {
            $json['issuing_network']             = $this->issuingNetwork['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
