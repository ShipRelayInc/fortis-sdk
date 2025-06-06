<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\BillingAddress;
use FortisAPILib\Models\IdentityVerification2;
use FortisAPILib\Models\Joi19;
use FortisAPILib\Models\V1TokensCcRequest;

/**
 * Builder for model V1TokensCcRequest
 *
 * @see V1TokensCcRequest
 */
class V1TokensCcRequestBuilder
{
    /**
     * @var V1TokensCcRequest
     */
    private $instance;

    private function __construct(V1TokensCcRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new V1 Tokens Cc Request Builder object.
     *
     * @param string $locationId
     */
    public static function init(string $locationId): self
    {
        return new self(new V1TokensCcRequest($locationId));
    }

    /**
     * Sets account holder name field.
     *
     * @param string|null $value
     */
    public function accountHolderName(?string $value): self
    {
        $this->instance->setAccountHolderName($value);
        return $this;
    }

    /**
     * Unsets account holder name field.
     */
    public function unsetAccountHolderName(): self
    {
        $this->instance->unsetAccountHolderName();
        return $this;
    }

    /**
     * Sets account number field.
     *
     * @param string|null $value
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Unsets account number field.
     */
    public function unsetAccountNumber(): self
    {
        $this->instance->unsetAccountNumber();
        return $this;
    }

    /**
     * Sets account vault api id field.
     *
     * @param string|null $value
     */
    public function accountVaultApiId(?string $value): self
    {
        $this->instance->setAccountVaultApiId($value);
        return $this;
    }

    /**
     * Unsets account vault api id field.
     */
    public function unsetAccountVaultApiId(): self
    {
        $this->instance->unsetAccountVaultApiId();
        return $this;
    }

    /**
     * Sets token api id field.
     *
     * @param string|null $value
     */
    public function tokenApiId(?string $value): self
    {
        $this->instance->setTokenApiId($value);
        return $this;
    }

    /**
     * Unsets token api id field.
     */
    public function unsetTokenApiId(): self
    {
        $this->instance->unsetTokenApiId();
        return $this;
    }

    /**
     * Sets accountvault c 1 field.
     *
     * @param string|null $value
     */
    public function accountvaultC1(?string $value): self
    {
        $this->instance->setAccountvaultC1($value);
        return $this;
    }

    /**
     * Unsets accountvault c 1 field.
     */
    public function unsetAccountvaultC1(): self
    {
        $this->instance->unsetAccountvaultC1();
        return $this;
    }

    /**
     * Sets accountvault c 2 field.
     *
     * @param string|null $value
     */
    public function accountvaultC2(?string $value): self
    {
        $this->instance->setAccountvaultC2($value);
        return $this;
    }

    /**
     * Unsets accountvault c 2 field.
     */
    public function unsetAccountvaultC2(): self
    {
        $this->instance->unsetAccountvaultC2();
        return $this;
    }

    /**
     * Sets accountvault c 3 field.
     *
     * @param string|null $value
     */
    public function accountvaultC3(?string $value): self
    {
        $this->instance->setAccountvaultC3($value);
        return $this;
    }

    /**
     * Unsets accountvault c 3 field.
     */
    public function unsetAccountvaultC3(): self
    {
        $this->instance->unsetAccountvaultC3();
        return $this;
    }

    /**
     * Sets token c 1 field.
     *
     * @param string|null $value
     */
    public function tokenC1(?string $value): self
    {
        $this->instance->setTokenC1($value);
        return $this;
    }

    /**
     * Unsets token c 1 field.
     */
    public function unsetTokenC1(): self
    {
        $this->instance->unsetTokenC1();
        return $this;
    }

    /**
     * Sets token c 2 field.
     *
     * @param string|null $value
     */
    public function tokenC2(?string $value): self
    {
        $this->instance->setTokenC2($value);
        return $this;
    }

    /**
     * Unsets token c 2 field.
     */
    public function unsetTokenC2(): self
    {
        $this->instance->unsetTokenC2();
        return $this;
    }

    /**
     * Sets token c 3 field.
     *
     * @param string|null $value
     */
    public function tokenC3(?string $value): self
    {
        $this->instance->setTokenC3($value);
        return $this;
    }

    /**
     * Unsets token c 3 field.
     */
    public function unsetTokenC3(): self
    {
        $this->instance->unsetTokenC3();
        return $this;
    }

    /**
     * Sets ach sec code field.
     *
     * @param string|null $value
     */
    public function achSecCode(?string $value): self
    {
        $this->instance->setAchSecCode($value);
        return $this;
    }

    /**
     * Unsets ach sec code field.
     */
    public function unsetAchSecCode(): self
    {
        $this->instance->unsetAchSecCode();
        return $this;
    }

    /**
     * Sets billing address field.
     *
     * @param BillingAddress|null $value
     */
    public function billingAddress(?BillingAddress $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets contact id field.
     *
     * @param string|null $value
     */
    public function contactId(?string $value): self
    {
        $this->instance->setContactId($value);
        return $this;
    }

    /**
     * Unsets contact id field.
     */
    public function unsetContactId(): self
    {
        $this->instance->unsetContactId();
        return $this;
    }

    /**
     * Sets customer id field.
     *
     * @param string|null $value
     */
    public function customerId(?string $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Unsets customer id field.
     */
    public function unsetCustomerId(): self
    {
        $this->instance->unsetCustomerId();
        return $this;
    }

    /**
     * Sets identity verification field.
     *
     * @param IdentityVerification2|null $value
     */
    public function identityVerification(?IdentityVerification2 $value): self
    {
        $this->instance->setIdentityVerification($value);
        return $this;
    }

    /**
     * Sets previous account vault api id field.
     *
     * @param string|null $value
     */
    public function previousAccountVaultApiId(?string $value): self
    {
        $this->instance->setPreviousAccountVaultApiId($value);
        return $this;
    }

    /**
     * Unsets previous account vault api id field.
     */
    public function unsetPreviousAccountVaultApiId(): self
    {
        $this->instance->unsetPreviousAccountVaultApiId();
        return $this;
    }

    /**
     * Sets previous token api id field.
     *
     * @param string|null $value
     */
    public function previousTokenApiId(?string $value): self
    {
        $this->instance->setPreviousTokenApiId($value);
        return $this;
    }

    /**
     * Unsets previous token api id field.
     */
    public function unsetPreviousTokenApiId(): self
    {
        $this->instance->unsetPreviousTokenApiId();
        return $this;
    }

    /**
     * Sets previous account vault id field.
     *
     * @param string|null $value
     */
    public function previousAccountVaultId(?string $value): self
    {
        $this->instance->setPreviousAccountVaultId($value);
        return $this;
    }

    /**
     * Unsets previous account vault id field.
     */
    public function unsetPreviousAccountVaultId(): self
    {
        $this->instance->unsetPreviousAccountVaultId();
        return $this;
    }

    /**
     * Sets previous token id field.
     *
     * @param string|null $value
     */
    public function previousTokenId(?string $value): self
    {
        $this->instance->setPreviousTokenId($value);
        return $this;
    }

    /**
     * Unsets previous token id field.
     */
    public function unsetPreviousTokenId(): self
    {
        $this->instance->unsetPreviousTokenId();
        return $this;
    }

    /**
     * Sets previous transaction id field.
     *
     * @param string|null $value
     */
    public function previousTransactionId(?string $value): self
    {
        $this->instance->setPreviousTransactionId($value);
        return $this;
    }

    /**
     * Unsets previous transaction id field.
     */
    public function unsetPreviousTransactionId(): self
    {
        $this->instance->unsetPreviousTransactionId();
        return $this;
    }

    /**
     * Sets terms agree field.
     *
     * @param bool|null $value
     */
    public function termsAgree(?bool $value): self
    {
        $this->instance->setTermsAgree($value);
        return $this;
    }

    /**
     * Sets terms agree ip field.
     *
     * @param string|null $value
     */
    public function termsAgreeIp(?string $value): self
    {
        $this->instance->setTermsAgreeIp($value);
        return $this;
    }

    /**
     * Unsets terms agree ip field.
     */
    public function unsetTermsAgreeIp(): self
    {
        $this->instance->unsetTermsAgreeIp();
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
     * Sets token import id field.
     *
     * @param string|null $value
     */
    public function tokenImportId(?string $value): self
    {
        $this->instance->setTokenImportId($value);
        return $this;
    }

    /**
     * Unsets token import id field.
     */
    public function unsetTokenImportId(): self
    {
        $this->instance->unsetTokenImportId();
        return $this;
    }

    /**
     * Sets secure directory server transaction id field.
     *
     * @param string|null $value
     */
    public function secureDirectoryServerTransactionId(?string $value): self
    {
        $this->instance->setSecureDirectoryServerTransactionId($value);
        return $this;
    }

    /**
     * Unsets secure directory server transaction id field.
     */
    public function unsetSecureDirectoryServerTransactionId(): self
    {
        $this->instance->unsetSecureDirectoryServerTransactionId();
        return $this;
    }

    /**
     * Sets secure protocol version field.
     *
     * @param int|null $value
     */
    public function secureProtocolVersion(?int $value): self
    {
        $this->instance->setSecureProtocolVersion($value);
        return $this;
    }

    /**
     * Unsets secure protocol version field.
     */
    public function unsetSecureProtocolVersion(): self
    {
        $this->instance->unsetSecureProtocolVersion();
        return $this;
    }

    /**
     * Sets secure auth data field.
     *
     * @param string|null $value
     */
    public function secureAuthData(?string $value): self
    {
        $this->instance->setSecureAuthData($value);
        return $this;
    }

    /**
     * Unsets secure auth data field.
     */
    public function unsetSecureAuthData(): self
    {
        $this->instance->unsetSecureAuthData();
        return $this;
    }

    /**
     * Sets secure collection indicator field.
     *
     * @param int|null $value
     */
    public function secureCollectionIndicator(?int $value): self
    {
        $this->instance->setSecureCollectionIndicator($value);
        return $this;
    }

    /**
     * Unsets secure collection indicator field.
     */
    public function unsetSecureCollectionIndicator(): self
    {
        $this->instance->unsetSecureCollectionIndicator();
        return $this;
    }

    /**
     * Sets three ds server trans id field.
     *
     * @param string|null $value
     */
    public function threeDsServerTransId(?string $value): self
    {
        $this->instance->setThreeDsServerTransId($value);
        return $this;
    }

    /**
     * Unsets three ds server trans id field.
     */
    public function unsetThreeDsServerTransId(): self
    {
        $this->instance->unsetThreeDsServerTransId();
        return $this;
    }

    /**
     * Sets acs transaction id field.
     *
     * @param string|null $value
     */
    public function acsTransactionId(?string $value): self
    {
        $this->instance->setAcsTransactionId($value);
        return $this;
    }

    /**
     * Unsets acs transaction id field.
     */
    public function unsetAcsTransactionId(): self
    {
        $this->instance->unsetAcsTransactionId();
        return $this;
    }

    /**
     * Sets joi field.
     *
     * @param Joi19|null $value
     */
    public function joi(?Joi19 $value): self
    {
        $this->instance->setJoi($value);
        return $this;
    }

    /**
     * Sets exp date field.
     *
     * @param string|null $value
     */
    public function expDate(?string $value): self
    {
        $this->instance->setExpDate($value);
        return $this;
    }

    /**
     * Unsets exp date field.
     */
    public function unsetExpDate(): self
    {
        $this->instance->unsetExpDate();
        return $this;
    }

    /**
     * Sets e serial number field.
     *
     * @param string|null $value
     */
    public function eSerialNumber(?string $value): self
    {
        $this->instance->setESerialNumber($value);
        return $this;
    }

    /**
     * Unsets e serial number field.
     */
    public function unsetESerialNumber(): self
    {
        $this->instance->unsetESerialNumber();
        return $this;
    }

    /**
     * Sets e track data field.
     *
     * @param string|null $value
     */
    public function eTrackData(?string $value): self
    {
        $this->instance->setETrackData($value);
        return $this;
    }

    /**
     * Unsets e track data field.
     */
    public function unsetETrackData(): self
    {
        $this->instance->unsetETrackData();
        return $this;
    }

    /**
     * Sets e format field.
     *
     * @param string|null $value
     */
    public function eFormat(?string $value): self
    {
        $this->instance->setEFormat($value);
        return $this;
    }

    /**
     * Unsets e format field.
     */
    public function unsetEFormat(): self
    {
        $this->instance->unsetEFormat();
        return $this;
    }

    /**
     * Sets e keyed data field.
     *
     * @param string|null $value
     */
    public function eKeyedData(?string $value): self
    {
        $this->instance->setEKeyedData($value);
        return $this;
    }

    /**
     * Unsets e keyed data field.
     */
    public function unsetEKeyedData(): self
    {
        $this->instance->unsetEKeyedData();
        return $this;
    }

    /**
     * Sets run avs field.
     *
     * @param bool|null $value
     */
    public function runAvs(?bool $value): self
    {
        $this->instance->setRunAvs($value);
        return $this;
    }

    /**
     * Sets track data field.
     *
     * @param string|null $value
     */
    public function trackData(?string $value): self
    {
        $this->instance->setTrackData($value);
        return $this;
    }

    /**
     * Unsets track data field.
     */
    public function unsetTrackData(): self
    {
        $this->instance->unsetTrackData();
        return $this;
    }

    /**
     * Sets ticket field.
     *
     * @param string|null $value
     */
    public function ticket(?string $value): self
    {
        $this->instance->setTicket($value);
        return $this;
    }

    /**
     * Unsets ticket field.
     */
    public function unsetTicket(): self
    {
        $this->instance->unsetTicket();
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
     * Initializes a new V1 Tokens Cc Request object.
     */
    public function build(): V1TokensCcRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
