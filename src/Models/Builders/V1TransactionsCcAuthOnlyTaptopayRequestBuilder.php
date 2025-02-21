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
use FortisAPILib\Models\BillingAddress1;
use FortisAPILib\Models\IdentityVerification;
use FortisAPILib\Models\V1TransactionsCcAuthOnlyTaptopayRequest;

/**
 * Builder for model V1TransactionsCcAuthOnlyTaptopayRequest
 *
 * @see V1TransactionsCcAuthOnlyTaptopayRequest
 */
class V1TransactionsCcAuthOnlyTaptopayRequestBuilder
{
    /**
     * @var V1TransactionsCcAuthOnlyTaptopayRequest
     */
    private $instance;

    private function __construct(V1TransactionsCcAuthOnlyTaptopayRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new V1 Transactions Cc Auth Only Taptopay Request Builder object.
     *
     * @param string $cardDataCryptogram
     * @param string $generalCardData
     * @param string $cardReaderId
     */
    public static function init(string $cardDataCryptogram, string $generalCardData, string $cardReaderId): self
    {
        return new self(
            new V1TransactionsCcAuthOnlyTaptopayRequest($cardDataCryptogram, $generalCardData, $cardReaderId)
        );
    }

    /**
     * Sets additional amounts field.
     *
     * @param AdditionalAmount[]|null $value
     */
    public function additionalAmounts(?array $value): self
    {
        $this->instance->setAdditionalAmounts($value);
        return $this;
    }

    /**
     * Sets billing address field.
     *
     * @param BillingAddress1|null $value
     */
    public function billingAddress(?BillingAddress1 $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets checkin date field.
     *
     * @param string|null $value
     */
    public function checkinDate(?string $value): self
    {
        $this->instance->setCheckinDate($value);
        return $this;
    }

    /**
     * Unsets checkin date field.
     */
    public function unsetCheckinDate(): self
    {
        $this->instance->unsetCheckinDate();
        return $this;
    }

    /**
     * Sets checkout date field.
     *
     * @param string|null $value
     */
    public function checkoutDate(?string $value): self
    {
        $this->instance->setCheckoutDate($value);
        return $this;
    }

    /**
     * Unsets checkout date field.
     */
    public function unsetCheckoutDate(): self
    {
        $this->instance->unsetCheckoutDate();
        return $this;
    }

    /**
     * Sets clerk number field.
     *
     * @param string|null $value
     */
    public function clerkNumber(?string $value): self
    {
        $this->instance->setClerkNumber($value);
        return $this;
    }

    /**
     * Unsets clerk number field.
     */
    public function unsetClerkNumber(): self
    {
        $this->instance->unsetClerkNumber();
        return $this;
    }

    /**
     * Sets contact api id field.
     *
     * @param string|null $value
     */
    public function contactApiId(?string $value): self
    {
        $this->instance->setContactApiId($value);
        return $this;
    }

    /**
     * Unsets contact api id field.
     */
    public function unsetContactApiId(): self
    {
        $this->instance->unsetContactApiId();
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
     * Sets custom data field.
     *
     * @param array|null $value
     */
    public function customData(?array $value): self
    {
        $this->instance->setCustomData($value);
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
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
        return $this;
    }

    /**
     * Sets identity verification field.
     *
     * @param IdentityVerification|null $value
     */
    public function identityVerification(?IdentityVerification $value): self
    {
        $this->instance->setIdentityVerification($value);
        return $this;
    }

    /**
     * Sets iias ind field.
     *
     * @param int|null $value
     */
    public function iiasInd(?int $value): self
    {
        $this->instance->setIiasInd($value);
        return $this;
    }

    /**
     * Unsets iias ind field.
     */
    public function unsetIiasInd(): self
    {
        $this->instance->unsetIiasInd();
        return $this;
    }

    /**
     * Sets image front field.
     *
     * @param string|null $value
     */
    public function imageFront(?string $value): self
    {
        $this->instance->setImageFront($value);
        return $this;
    }

    /**
     * Unsets image front field.
     */
    public function unsetImageFront(): self
    {
        $this->instance->unsetImageFront();
        return $this;
    }

    /**
     * Sets image back field.
     *
     * @param string|null $value
     */
    public function imageBack(?string $value): self
    {
        $this->instance->setImageBack($value);
        return $this;
    }

    /**
     * Unsets image back field.
     */
    public function unsetImageBack(): self
    {
        $this->instance->unsetImageBack();
        return $this;
    }

    /**
     * Sets installment field.
     *
     * @param bool|null $value
     */
    public function installment(?bool $value): self
    {
        $this->instance->setInstallment($value);
        return $this;
    }

    /**
     * Sets installment number field.
     *
     * @param int|null $value
     */
    public function installmentNumber(?int $value): self
    {
        $this->instance->setInstallmentNumber($value);
        return $this;
    }

    /**
     * Unsets installment number field.
     */
    public function unsetInstallmentNumber(): self
    {
        $this->instance->unsetInstallmentNumber();
        return $this;
    }

    /**
     * Sets installment count field.
     *
     * @param int|null $value
     */
    public function installmentCount(?int $value): self
    {
        $this->instance->setInstallmentCount($value);
        return $this;
    }

    /**
     * Unsets installment count field.
     */
    public function unsetInstallmentCount(): self
    {
        $this->instance->unsetInstallmentCount();
        return $this;
    }

    /**
     * Sets location api id field.
     *
     * @param string|null $value
     */
    public function locationApiId(?string $value): self
    {
        $this->instance->setLocationApiId($value);
        return $this;
    }

    /**
     * Unsets location api id field.
     */
    public function unsetLocationApiId(): self
    {
        $this->instance->unsetLocationApiId();
        return $this;
    }

    /**
     * Sets location id field.
     *
     * @param string|null $value
     */
    public function locationId(?string $value): self
    {
        $this->instance->setLocationId($value);
        return $this;
    }

    /**
     * Unsets location id field.
     */
    public function unsetLocationId(): self
    {
        $this->instance->unsetLocationId();
        return $this;
    }

    /**
     * Sets product transaction id field.
     *
     * @param string|null $value
     */
    public function productTransactionId(?string $value): self
    {
        $this->instance->setProductTransactionId($value);
        return $this;
    }

    /**
     * Unsets product transaction id field.
     */
    public function unsetProductTransactionId(): self
    {
        $this->instance->unsetProductTransactionId();
        return $this;
    }

    /**
     * Sets advance deposit field.
     *
     * @param bool|null $value
     */
    public function advanceDeposit(?bool $value): self
    {
        $this->instance->setAdvanceDeposit($value);
        return $this;
    }

    /**
     * Sets no show field.
     *
     * @param bool|null $value
     */
    public function noShow(?bool $value): self
    {
        $this->instance->setNoShow($value);
        return $this;
    }

    /**
     * Sets notification email address field.
     *
     * @param string|null $value
     */
    public function notificationEmailAddress(?string $value): self
    {
        $this->instance->setNotificationEmailAddress($value);
        return $this;
    }

    /**
     * Unsets notification email address field.
     */
    public function unsetNotificationEmailAddress(): self
    {
        $this->instance->unsetNotificationEmailAddress();
        return $this;
    }

    /**
     * Sets order number field.
     *
     * @param string|null $value
     */
    public function orderNumber(?string $value): self
    {
        $this->instance->setOrderNumber($value);
        return $this;
    }

    /**
     * Unsets order number field.
     */
    public function unsetOrderNumber(): self
    {
        $this->instance->unsetOrderNumber();
        return $this;
    }

    /**
     * Sets po number field.
     *
     * @param string|null $value
     */
    public function poNumber(?string $value): self
    {
        $this->instance->setPoNumber($value);
        return $this;
    }

    /**
     * Unsets po number field.
     */
    public function unsetPoNumber(): self
    {
        $this->instance->unsetPoNumber();
        return $this;
    }

    /**
     * Sets quick invoice id field.
     *
     * @param string|null $value
     */
    public function quickInvoiceId(?string $value): self
    {
        $this->instance->setQuickInvoiceId($value);
        return $this;
    }

    /**
     * Unsets quick invoice id field.
     */
    public function unsetQuickInvoiceId(): self
    {
        $this->instance->unsetQuickInvoiceId();
        return $this;
    }

    /**
     * Sets recurring field.
     *
     * @param bool|null $value
     */
    public function recurring(?bool $value): self
    {
        $this->instance->setRecurring($value);
        return $this;
    }

    /**
     * Sets recurring number field.
     *
     * @param int|null $value
     */
    public function recurringNumber(?int $value): self
    {
        $this->instance->setRecurringNumber($value);
        return $this;
    }

    /**
     * Unsets recurring number field.
     */
    public function unsetRecurringNumber(): self
    {
        $this->instance->unsetRecurringNumber();
        return $this;
    }

    /**
     * Sets room num field.
     *
     * @param string|null $value
     */
    public function roomNum(?string $value): self
    {
        $this->instance->setRoomNum($value);
        return $this;
    }

    /**
     * Unsets room num field.
     */
    public function unsetRoomNum(): self
    {
        $this->instance->unsetRoomNum();
        return $this;
    }

    /**
     * Sets room rate field.
     *
     * @param int|null $value
     */
    public function roomRate(?int $value): self
    {
        $this->instance->setRoomRate($value);
        return $this;
    }

    /**
     * Unsets room rate field.
     */
    public function unsetRoomRate(): self
    {
        $this->instance->unsetRoomRate();
        return $this;
    }

    /**
     * Sets save account field.
     *
     * @param bool|null $value
     */
    public function saveAccount(?bool $value): self
    {
        $this->instance->setSaveAccount($value);
        return $this;
    }

    /**
     * Sets save account title field.
     *
     * @param string|null $value
     */
    public function saveAccountTitle(?string $value): self
    {
        $this->instance->setSaveAccountTitle($value);
        return $this;
    }

    /**
     * Unsets save account title field.
     */
    public function unsetSaveAccountTitle(): self
    {
        $this->instance->unsetSaveAccountTitle();
        return $this;
    }

    /**
     * Sets subtotal amount field.
     *
     * @param int|null $value
     */
    public function subtotalAmount(?int $value): self
    {
        $this->instance->setSubtotalAmount($value);
        return $this;
    }

    /**
     * Unsets subtotal amount field.
     */
    public function unsetSubtotalAmount(): self
    {
        $this->instance->unsetSubtotalAmount();
        return $this;
    }

    /**
     * Sets surcharge amount field.
     *
     * @param int|null $value
     */
    public function surchargeAmount(?int $value): self
    {
        $this->instance->setSurchargeAmount($value);
        return $this;
    }

    /**
     * Unsets surcharge amount field.
     */
    public function unsetSurchargeAmount(): self
    {
        $this->instance->unsetSurchargeAmount();
        return $this;
    }

    /**
     * Sets tags field.
     *
     * @param string[]|null $value
     */
    public function tags(?array $value): self
    {
        $this->instance->setTags($value);
        return $this;
    }

    /**
     * Unsets tags field.
     */
    public function unsetTags(): self
    {
        $this->instance->unsetTags();
        return $this;
    }

    /**
     * Sets tax field.
     *
     * @param int|null $value
     */
    public function tax(?int $value): self
    {
        $this->instance->setTax($value);
        return $this;
    }

    /**
     * Unsets tax field.
     */
    public function unsetTax(): self
    {
        $this->instance->unsetTax();
        return $this;
    }

    /**
     * Sets tip amount field.
     *
     * @param int|null $value
     */
    public function tipAmount(?int $value): self
    {
        $this->instance->setTipAmount($value);
        return $this;
    }

    /**
     * Unsets tip amount field.
     */
    public function unsetTipAmount(): self
    {
        $this->instance->unsetTipAmount();
        return $this;
    }

    /**
     * Sets transaction amount field.
     *
     * @param int|null $value
     */
    public function transactionAmount(?int $value): self
    {
        $this->instance->setTransactionAmount($value);
        return $this;
    }

    /**
     * Unsets transaction amount field.
     */
    public function unsetTransactionAmount(): self
    {
        $this->instance->unsetTransactionAmount();
        return $this;
    }

    /**
     * Sets secondary amount field.
     *
     * @param int|null $value
     */
    public function secondaryAmount(?int $value): self
    {
        $this->instance->setSecondaryAmount($value);
        return $this;
    }

    /**
     * Unsets secondary amount field.
     */
    public function unsetSecondaryAmount(): self
    {
        $this->instance->unsetSecondaryAmount();
        return $this;
    }

    /**
     * Sets transaction api id field.
     *
     * @param string|null $value
     */
    public function transactionApiId(?string $value): self
    {
        $this->instance->setTransactionApiId($value);
        return $this;
    }

    /**
     * Unsets transaction api id field.
     */
    public function unsetTransactionApiId(): self
    {
        $this->instance->unsetTransactionApiId();
        return $this;
    }

    /**
     * Sets transaction c 1 field.
     *
     * @param string|null $value
     */
    public function transactionC1(?string $value): self
    {
        $this->instance->setTransactionC1($value);
        return $this;
    }

    /**
     * Unsets transaction c 1 field.
     */
    public function unsetTransactionC1(): self
    {
        $this->instance->unsetTransactionC1();
        return $this;
    }

    /**
     * Sets transaction c 2 field.
     *
     * @param string|null $value
     */
    public function transactionC2(?string $value): self
    {
        $this->instance->setTransactionC2($value);
        return $this;
    }

    /**
     * Unsets transaction c 2 field.
     */
    public function unsetTransactionC2(): self
    {
        $this->instance->unsetTransactionC2();
        return $this;
    }

    /**
     * Sets transaction c 3 field.
     *
     * @param string|null $value
     */
    public function transactionC3(?string $value): self
    {
        $this->instance->setTransactionC3($value);
        return $this;
    }

    /**
     * Unsets transaction c 3 field.
     */
    public function unsetTransactionC3(): self
    {
        $this->instance->unsetTransactionC3();
        return $this;
    }

    /**
     * Sets bank funded only override field.
     *
     * @param bool|null $value
     */
    public function bankFundedOnlyOverride(?bool $value): self
    {
        $this->instance->setBankFundedOnlyOverride($value);
        return $this;
    }

    /**
     * Sets allow partial authorization override field.
     *
     * @param bool|null $value
     */
    public function allowPartialAuthorizationOverride(?bool $value): self
    {
        $this->instance->setAllowPartialAuthorizationOverride($value);
        return $this;
    }

    /**
     * Sets auto decline cvv override field.
     *
     * @param bool|null $value
     */
    public function autoDeclineCvvOverride(?bool $value): self
    {
        $this->instance->setAutoDeclineCvvOverride($value);
        return $this;
    }

    /**
     * Sets auto decline street override field.
     *
     * @param bool|null $value
     */
    public function autoDeclineStreetOverride(?bool $value): self
    {
        $this->instance->setAutoDeclineStreetOverride($value);
        return $this;
    }

    /**
     * Sets auto decline zip override field.
     *
     * @param bool|null $value
     */
    public function autoDeclineZipOverride(?bool $value): self
    {
        $this->instance->setAutoDeclineZipOverride($value);
        return $this;
    }

    /**
     * Sets ebt type field.
     *
     * @param string|null $value
     */
    public function ebtType(?string $value): self
    {
        $this->instance->setEbtType($value);
        return $this;
    }

    /**
     * Unsets ebt type field.
     */
    public function unsetEbtType(): self
    {
        $this->instance->unsetEbtType();
        return $this;
    }

    /**
     * Sets secure cryptogram field.
     *
     * @param string|null $value
     */
    public function secureCryptogram(?string $value): self
    {
        $this->instance->setSecureCryptogram($value);
        return $this;
    }

    /**
     * Unsets secure cryptogram field.
     */
    public function unsetSecureCryptogram(): self
    {
        $this->instance->unsetSecureCryptogram();
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
     * Sets terminal serial number field.
     *
     * @param string|null $value
     */
    public function terminalSerialNumber(?string $value): self
    {
        $this->instance->setTerminalSerialNumber($value);
        return $this;
    }

    /**
     * Unsets terminal serial number field.
     */
    public function unsetTerminalSerialNumber(): self
    {
        $this->instance->unsetTerminalSerialNumber();
        return $this;
    }

    /**
     * Sets wallet type field.
     *
     * @param string|null $value
     */
    public function walletType(?string $value): self
    {
        $this->instance->setWalletType($value);
        return $this;
    }

    /**
     * Unsets wallet type field.
     */
    public function unsetWalletType(): self
    {
        $this->instance->unsetWalletType();
        return $this;
    }

    /**
     * Sets clerk id field.
     *
     * @param string|null $value
     */
    public function clerkId(?string $value): self
    {
        $this->instance->setClerkId($value);
        return $this;
    }

    /**
     * Unsets clerk id field.
     */
    public function unsetClerkId(): self
    {
        $this->instance->unsetClerkId();
        return $this;
    }

    /**
     * Sets voucher number field.
     *
     * @param string|null $value
     */
    public function voucherNumber(?string $value): self
    {
        $this->instance->setVoucherNumber($value);
        return $this;
    }

    /**
     * Unsets voucher number field.
     */
    public function unsetVoucherNumber(): self
    {
        $this->instance->unsetVoucherNumber();
        return $this;
    }

    /**
     * Sets initiation type field.
     *
     * @param string|null $value
     */
    public function initiationType(?string $value): self
    {
        $this->instance->setInitiationType($value);
        return $this;
    }

    /**
     * Unsets initiation type field.
     */
    public function unsetInitiationType(): self
    {
        $this->instance->unsetInitiationType();
        return $this;
    }

    /**
     * Sets bill payment field.
     *
     * @param bool|null $value
     */
    public function billPayment(?bool $value): self
    {
        $this->instance->setBillPayment($value);
        return $this;
    }

    /**
     * Sets delay charge field.
     *
     * @param bool|null $value
     */
    public function delayCharge(?bool $value): self
    {
        $this->instance->setDelayCharge($value);
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
     * Initializes a new V1 Transactions Cc Auth Only Taptopay Request object.
     */
    public function build(): V1TransactionsCcAuthOnlyTaptopayRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
