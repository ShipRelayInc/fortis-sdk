<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\BatchRiskConfig;
use FortisAPILib\Models\CcProductTransaction;
use FortisAPILib\Models\Level3Default;

/**
 * Builder for model CcProductTransaction
 *
 * @see CcProductTransaction
 */
class CcProductTransactionBuilder
{
    /**
     * @var CcProductTransaction
     */
    private $instance;

    private function __construct(CcProductTransaction $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Cc Product Transaction Builder object.
     */
    public static function init(): self
    {
        return new self(new CcProductTransaction());
    }

    /**
     * Sets processor version field.
     *
     * @param string|null $value
     */
    public function processorVersion(?string $value): self
    {
        $this->instance->setProcessorVersion($value);
        return $this;
    }

    /**
     * Unsets processor version field.
     */
    public function unsetProcessorVersion(): self
    {
        $this->instance->unsetProcessorVersion();
        return $this;
    }

    /**
     * Sets industry type field.
     *
     * @param string|null $value
     */
    public function industryType(?string $value): self
    {
        $this->instance->setIndustryType($value);
        return $this;
    }

    /**
     * Unsets industry type field.
     */
    public function unsetIndustryType(): self
    {
        $this->instance->unsetIndustryType();
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
     * Sets payment method field.
     *
     * @param string|null $value
     */
    public function paymentMethod(?string $value): self
    {
        $this->instance->setPaymentMethod($value);
        return $this;
    }

    /**
     * Sets processor field.
     *
     * @param string|null $value
     */
    public function processor(?string $value): self
    {
        $this->instance->setProcessor($value);
        return $this;
    }

    /**
     * Unsets processor field.
     */
    public function unsetProcessor(): self
    {
        $this->instance->unsetProcessor();
        return $this;
    }

    /**
     * Sets mcc field.
     *
     * @param string|null $value
     */
    public function mcc(?string $value): self
    {
        $this->instance->setMcc($value);
        return $this;
    }

    /**
     * Unsets mcc field.
     */
    public function unsetMcc(): self
    {
        $this->instance->unsetMcc();
        return $this;
    }

    /**
     * Sets tax surcharge config field.
     *
     * @param int|null $value
     */
    public function taxSurchargeConfig(?int $value): self
    {
        $this->instance->setTaxSurchargeConfig($value);
        return $this;
    }

    /**
     * Unsets tax surcharge config field.
     */
    public function unsetTaxSurchargeConfig(): self
    {
        $this->instance->unsetTaxSurchargeConfig();
        return $this;
    }

    /**
     * Sets terminal id field.
     *
     * @param string|null $value
     */
    public function terminalId(?string $value): self
    {
        $this->instance->setTerminalId($value);
        return $this;
    }

    /**
     * Unsets terminal id field.
     */
    public function unsetTerminalId(): self
    {
        $this->instance->unsetTerminalId();
        return $this;
    }

    /**
     * Sets partner field.
     *
     * @param string|null $value
     */
    public function partner(?string $value): self
    {
        $this->instance->setPartner($value);
        return $this;
    }

    /**
     * Unsets partner field.
     */
    public function unsetPartner(): self
    {
        $this->instance->unsetPartner();
        return $this;
    }

    /**
     * Sets product ach pv store id field.
     *
     * @param string|null $value
     */
    public function productAchPvStoreId(?string $value): self
    {
        $this->instance->setProductAchPvStoreId($value);
        return $this;
    }

    /**
     * Unsets product ach pv store id field.
     */
    public function unsetProductAchPvStoreId(): self
    {
        $this->instance->unsetProductAchPvStoreId();
        return $this;
    }

    /**
     * Sets invoice adjustment title field.
     *
     * @param string|null $value
     */
    public function invoiceAdjustmentTitle(?string $value): self
    {
        $this->instance->setInvoiceAdjustmentTitle($value);
        return $this;
    }

    /**
     * Unsets invoice adjustment title field.
     */
    public function unsetInvoiceAdjustmentTitle(): self
    {
        $this->instance->unsetInvoiceAdjustmentTitle();
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
     * Sets billing location api id field.
     *
     * @param string|null $value
     */
    public function billingLocationApiId(?string $value): self
    {
        $this->instance->setBillingLocationApiId($value);
        return $this;
    }

    /**
     * Unsets billing location api id field.
     */
    public function unsetBillingLocationApiId(): self
    {
        $this->instance->unsetBillingLocationApiId();
        return $this;
    }

    /**
     * Sets portfolio id field.
     *
     * @param string|null $value
     */
    public function portfolioId(?string $value): self
    {
        $this->instance->setPortfolioId($value);
        return $this;
    }

    /**
     * Unsets portfolio id field.
     */
    public function unsetPortfolioId(): self
    {
        $this->instance->unsetPortfolioId();
        return $this;
    }

    /**
     * Sets portfolio Validation Rule field.
     *
     * @param string|null $value
     */
    public function portfolioValidationRule(?string $value): self
    {
        $this->instance->setPortfolioValidationRule($value);
        return $this;
    }

    /**
     * Unsets portfolio Validation Rule field.
     */
    public function unsetPortfolioValidationRule(): self
    {
        $this->instance->unsetPortfolioValidationRule();
        return $this;
    }

    /**
     * Sets sub processor field.
     *
     * @param string|null $value
     */
    public function subProcessor(?string $value): self
    {
        $this->instance->setSubProcessor($value);
        return $this;
    }

    /**
     * Unsets sub processor field.
     */
    public function unsetSubProcessor(): self
    {
        $this->instance->unsetSubProcessor();
        return $this;
    }

    /**
     * Sets surcharge field.
     *
     * @param array|null $value
     */
    public function surcharge(?array $value): self
    {
        $this->instance->setSurcharge($value);
        return $this;
    }

    /**
     * Sets processor data field.
     *
     * @param array|null $value
     */
    public function processorData(?array $value): self
    {
        $this->instance->setProcessorData($value);
        return $this;
    }

    /**
     * Sets vt clerk number field.
     *
     * @param bool|null $value
     */
    public function vtClerkNumber(?bool $value): self
    {
        $this->instance->setVtClerkNumber($value);
        return $this;
    }

    /**
     * Sets vt billing phone field.
     *
     * @param bool|null $value
     */
    public function vtBillingPhone(?bool $value): self
    {
        $this->instance->setVtBillingPhone($value);
        return $this;
    }

    /**
     * Sets vt enable tip field.
     *
     * @param bool|null $value
     */
    public function vtEnableTip(?bool $value): self
    {
        $this->instance->setVtEnableTip($value);
        return $this;
    }

    /**
     * Sets ach allow debit field.
     *
     * @param bool|null $value
     */
    public function achAllowDebit(?bool $value): self
    {
        $this->instance->setAchAllowDebit($value);
        return $this;
    }

    /**
     * Sets ach allow credit field.
     *
     * @param bool|null $value
     */
    public function achAllowCredit(?bool $value): self
    {
        $this->instance->setAchAllowCredit($value);
        return $this;
    }

    /**
     * Sets ach allow refund field.
     *
     * @param bool|null $value
     */
    public function achAllowRefund(?bool $value): self
    {
        $this->instance->setAchAllowRefund($value);
        return $this;
    }

    /**
     * Sets vt cvv field.
     *
     * @param bool|null $value
     */
    public function vtCvv(?bool $value): self
    {
        $this->instance->setVtCvv($value);
        return $this;
    }

    /**
     * Sets vt street field.
     *
     * @param bool|null $value
     */
    public function vtStreet(?bool $value): self
    {
        $this->instance->setVtStreet($value);
        return $this;
    }

    /**
     * Sets vt zip field.
     *
     * @param bool|null $value
     */
    public function vtZip(?bool $value): self
    {
        $this->instance->setVtZip($value);
        return $this;
    }

    /**
     * Sets vt order num field.
     *
     * @param bool|null $value
     */
    public function vtOrderNum(?bool $value): self
    {
        $this->instance->setVtOrderNum($value);
        return $this;
    }

    /**
     * Sets vt enable field.
     *
     * @param bool|null $value
     */
    public function vtEnable(?bool $value): self
    {
        $this->instance->setVtEnable($value);
        return $this;
    }

    /**
     * Sets receipt show contact name field.
     *
     * @param bool|null $value
     */
    public function receiptShowContactName(?bool $value): self
    {
        $this->instance->setReceiptShowContactName($value);
        return $this;
    }

    /**
     * Sets display avs field.
     *
     * @param bool|null $value
     */
    public function displayAvs(?bool $value): self
    {
        $this->instance->setDisplayAvs($value);
        return $this;
    }

    /**
     * Sets card type visa field.
     *
     * @param bool|null $value
     */
    public function cardTypeVisa(?bool $value): self
    {
        $this->instance->setCardTypeVisa($value);
        return $this;
    }

    /**
     * Sets card type mc field.
     *
     * @param bool|null $value
     */
    public function cardTypeMc(?bool $value): self
    {
        $this->instance->setCardTypeMc($value);
        return $this;
    }

    /**
     * Sets card type disc field.
     *
     * @param bool|null $value
     */
    public function cardTypeDisc(?bool $value): self
    {
        $this->instance->setCardTypeDisc($value);
        return $this;
    }

    /**
     * Sets card type amex field.
     *
     * @param bool|null $value
     */
    public function cardTypeAmex(?bool $value): self
    {
        $this->instance->setCardTypeAmex($value);
        return $this;
    }

    /**
     * Sets card type diners field.
     *
     * @param bool|null $value
     */
    public function cardTypeDiners(?bool $value): self
    {
        $this->instance->setCardTypeDiners($value);
        return $this;
    }

    /**
     * Sets card type jcb field.
     *
     * @param bool|null $value
     */
    public function cardTypeJcb(?bool $value): self
    {
        $this->instance->setCardTypeJcb($value);
        return $this;
    }

    /**
     * Sets card type ebt field.
     *
     * @param bool|null $value
     */
    public function cardTypeEbt(?bool $value): self
    {
        $this->instance->setCardTypeEbt($value);
        return $this;
    }

    /**
     * Sets allow ebt cash benefit field.
     *
     * @param bool|null $value
     */
    public function allowEbtCashBenefit(?bool $value): self
    {
        $this->instance->setAllowEbtCashBenefit($value);
        return $this;
    }

    /**
     * Sets allow ebt food stamp field.
     *
     * @param bool|null $value
     */
    public function allowEbtFoodStamp(?bool $value): self
    {
        $this->instance->setAllowEbtFoodStamp($value);
        return $this;
    }

    /**
     * Sets invoice location field.
     *
     * @param bool|null $value
     */
    public function invoiceLocation(?bool $value): self
    {
        $this->instance->setInvoiceLocation($value);
        return $this;
    }

    /**
     * Sets allow partial authorization field.
     *
     * @param bool|null $value
     */
    public function allowPartialAuthorization(?bool $value): self
    {
        $this->instance->setAllowPartialAuthorization($value);
        return $this;
    }

    /**
     * Sets allow recurring partial authorization field.
     *
     * @param bool|null $value
     */
    public function allowRecurringPartialAuthorization(?bool $value): self
    {
        $this->instance->setAllowRecurringPartialAuthorization($value);
        return $this;
    }

    /**
     * Sets auto decline cvv field.
     *
     * @param bool|null $value
     */
    public function autoDeclineCvv(?bool $value): self
    {
        $this->instance->setAutoDeclineCvv($value);
        return $this;
    }

    /**
     * Sets auto decline street field.
     *
     * @param bool|null $value
     */
    public function autoDeclineStreet(?bool $value): self
    {
        $this->instance->setAutoDeclineStreet($value);
        return $this;
    }

    /**
     * Sets auto decline zip field.
     *
     * @param bool|null $value
     */
    public function autoDeclineZip(?bool $value): self
    {
        $this->instance->setAutoDeclineZip($value);
        return $this;
    }

    /**
     * Sets split payments allow field.
     *
     * @param bool|null $value
     */
    public function splitPaymentsAllow(?bool $value): self
    {
        $this->instance->setSplitPaymentsAllow($value);
        return $this;
    }

    /**
     * Sets vt show custom fields field.
     *
     * @param bool|null $value
     */
    public function vtShowCustomFields(?bool $value): self
    {
        $this->instance->setVtShowCustomFields($value);
        return $this;
    }

    /**
     * Sets receipt show custom fields field.
     *
     * @param bool|null $value
     */
    public function receiptShowCustomFields(?bool $value): self
    {
        $this->instance->setReceiptShowCustomFields($value);
        return $this;
    }

    /**
     * Sets vt override sales tax allowed field.
     *
     * @param bool|null $value
     */
    public function vtOverrideSalesTaxAllowed(?bool $value): self
    {
        $this->instance->setVtOverrideSalesTaxAllowed($value);
        return $this;
    }

    /**
     * Sets vt enable sales tax field.
     *
     * @param bool|null $value
     */
    public function vtEnableSalesTax(?bool $value): self
    {
        $this->instance->setVtEnableSalesTax($value);
        return $this;
    }

    /**
     * Sets vt require zip field.
     *
     * @param bool|null $value
     */
    public function vtRequireZip(?bool $value): self
    {
        $this->instance->setVtRequireZip($value);
        return $this;
    }

    /**
     * Sets vt require street field.
     *
     * @param bool|null $value
     */
    public function vtRequireStreet(?bool $value): self
    {
        $this->instance->setVtRequireStreet($value);
        return $this;
    }

    /**
     * Sets auto decline cavv field.
     *
     * @param bool|null $value
     */
    public function autoDeclineCavv(?bool $value): self
    {
        $this->instance->setAutoDeclineCavv($value);
        return $this;
    }

    /**
     * Sets merchant id field.
     *
     * @param string|null $value
     */
    public function merchantId(?string $value): self
    {
        $this->instance->setMerchantId($value);
        return $this;
    }

    /**
     * Unsets merchant id field.
     */
    public function unsetMerchantId(): self
    {
        $this->instance->unsetMerchantId();
        return $this;
    }

    /**
     * Sets receipt header field.
     *
     * @param string|null $value
     */
    public function receiptHeader(?string $value): self
    {
        $this->instance->setReceiptHeader($value);
        return $this;
    }

    /**
     * Unsets receipt header field.
     */
    public function unsetReceiptHeader(): self
    {
        $this->instance->unsetReceiptHeader();
        return $this;
    }

    /**
     * Sets receipt footer field.
     *
     * @param string|null $value
     */
    public function receiptFooter(?string $value): self
    {
        $this->instance->setReceiptFooter($value);
        return $this;
    }

    /**
     * Unsets receipt footer field.
     */
    public function unsetReceiptFooter(): self
    {
        $this->instance->unsetReceiptFooter();
        return $this;
    }

    /**
     * Sets receipt add account above signature field.
     *
     * @param string|null $value
     */
    public function receiptAddAccountAboveSignature(?string $value): self
    {
        $this->instance->setReceiptAddAccountAboveSignature($value);
        return $this;
    }

    /**
     * Unsets receipt add account above signature field.
     */
    public function unsetReceiptAddAccountAboveSignature(): self
    {
        $this->instance->unsetReceiptAddAccountAboveSignature();
        return $this;
    }

    /**
     * Sets receipt add recurring above signature field.
     *
     * @param string|null $value
     */
    public function receiptAddRecurringAboveSignature(?string $value): self
    {
        $this->instance->setReceiptAddRecurringAboveSignature($value);
        return $this;
    }

    /**
     * Unsets receipt add recurring above signature field.
     */
    public function unsetReceiptAddRecurringAboveSignature(): self
    {
        $this->instance->unsetReceiptAddRecurringAboveSignature();
        return $this;
    }

    /**
     * Sets receipt vt above signature field.
     *
     * @param string|null $value
     */
    public function receiptVtAboveSignature(?string $value): self
    {
        $this->instance->setReceiptVtAboveSignature($value);
        return $this;
    }

    /**
     * Unsets receipt vt above signature field.
     */
    public function unsetReceiptVtAboveSignature(): self
    {
        $this->instance->unsetReceiptVtAboveSignature();
        return $this;
    }

    /**
     * Sets default transaction type field.
     *
     * @param string|null $value
     */
    public function defaultTransactionType(?string $value): self
    {
        $this->instance->setDefaultTransactionType($value);
        return $this;
    }

    /**
     * Unsets default transaction type field.
     */
    public function unsetDefaultTransactionType(): self
    {
        $this->instance->unsetDefaultTransactionType();
        return $this;
    }

    /**
     * Sets username field.
     *
     * @param string|null $value
     */
    public function username(?string $value): self
    {
        $this->instance->setUsername($value);
        return $this;
    }

    /**
     * Unsets username field.
     */
    public function unsetUsername(): self
    {
        $this->instance->unsetUsername();
        return $this;
    }

    /**
     * Sets password field.
     *
     * @param string|null $value
     */
    public function password(?string $value): self
    {
        $this->instance->setPassword($value);
        return $this;
    }

    /**
     * Unsets password field.
     */
    public function unsetPassword(): self
    {
        $this->instance->unsetPassword();
        return $this;
    }

    /**
     * Sets current batch field.
     *
     * @param float|null $value
     */
    public function currentBatch(?float $value): self
    {
        $this->instance->setCurrentBatch($value);
        return $this;
    }

    /**
     * Unsets current batch field.
     */
    public function unsetCurrentBatch(): self
    {
        $this->instance->unsetCurrentBatch();
        return $this;
    }

    /**
     * Sets dup check per batch field.
     *
     * @param string|null $value
     */
    public function dupCheckPerBatch(?string $value): self
    {
        $this->instance->setDupCheckPerBatch($value);
        return $this;
    }

    /**
     * Unsets dup check per batch field.
     */
    public function unsetDupCheckPerBatch(): self
    {
        $this->instance->unsetDupCheckPerBatch();
        return $this;
    }

    /**
     * Sets agent code field.
     *
     * @param string|null $value
     */
    public function agentCode(?string $value): self
    {
        $this->instance->setAgentCode($value);
        return $this;
    }

    /**
     * Unsets agent code field.
     */
    public function unsetAgentCode(): self
    {
        $this->instance->unsetAgentCode();
        return $this;
    }

    /**
     * Sets paylink allow field.
     *
     * @param bool|null $value
     */
    public function paylinkAllow(?bool $value): self
    {
        $this->instance->setPaylinkAllow($value);
        return $this;
    }

    /**
     * Sets quick invoice allow field.
     *
     * @param bool|null $value
     */
    public function quickInvoiceAllow(?bool $value): self
    {
        $this->instance->setQuickInvoiceAllow($value);
        return $this;
    }

    /**
     * Sets level 3 allow field.
     *
     * @param bool|null $value
     */
    public function level3Allow(?bool $value): self
    {
        $this->instance->setLevel3Allow($value);
        return $this;
    }

    /**
     * Sets payfac enable field.
     *
     * @param bool|null $value
     */
    public function payfacEnable(?bool $value): self
    {
        $this->instance->setPayfacEnable($value);
        return $this;
    }

    /**
     * Sets enable 3 ds field.
     *
     * @param bool|null $value
     */
    public function enable3ds(?bool $value): self
    {
        $this->instance->setEnable3ds($value);
        return $this;
    }

    /**
     * Sets sales office id field.
     *
     * @param string|null $value
     */
    public function salesOfficeId(?string $value): self
    {
        $this->instance->setSalesOfficeId($value);
        return $this;
    }

    /**
     * Unsets sales office id field.
     */
    public function unsetSalesOfficeId(): self
    {
        $this->instance->unsetSalesOfficeId();
        return $this;
    }

    /**
     * Sets hosted payment page max allowed field.
     *
     * @param float|null $value
     */
    public function hostedPaymentPageMaxAllowed(?float $value): self
    {
        $this->instance->setHostedPaymentPageMaxAllowed($value);
        return $this;
    }

    /**
     * Unsets hosted payment page max allowed field.
     */
    public function unsetHostedPaymentPageMaxAllowed(): self
    {
        $this->instance->unsetHostedPaymentPageMaxAllowed();
        return $this;
    }

    /**
     * Sets hosted payment page allow field.
     *
     * @param bool|null $value
     */
    public function hostedPaymentPageAllow(?bool $value): self
    {
        $this->instance->setHostedPaymentPageAllow($value);
        return $this;
    }

    /**
     * Sets surcharge id field.
     *
     * @param string|null $value
     */
    public function surchargeId(?string $value): self
    {
        $this->instance->setSurchargeId($value);
        return $this;
    }

    /**
     * Unsets surcharge id field.
     */
    public function unsetSurchargeId(): self
    {
        $this->instance->unsetSurchargeId();
        return $this;
    }

    /**
     * Sets allow big commerce field.
     *
     * @param bool|null $value
     */
    public function allowBigCommerce(?bool $value): self
    {
        $this->instance->setAllowBigCommerce($value);
        return $this;
    }

    /**
     * Sets level 3 default field.
     *
     * @param Level3Default|null $value
     */
    public function level3Default(?Level3Default $value): self
    {
        $this->instance->setLevel3Default($value);
        return $this;
    }

    /**
     * Sets cau subscribe type id field.
     *
     * @param int|null $value
     */
    public function cauSubscribeTypeId(?int $value): self
    {
        $this->instance->setCauSubscribeTypeId($value);
        return $this;
    }

    /**
     * Unsets cau subscribe type id field.
     */
    public function unsetCauSubscribeTypeId(): self
    {
        $this->instance->unsetCauSubscribeTypeId();
        return $this;
    }

    /**
     * Sets cau account number field.
     *
     * @param string|null $value
     */
    public function cauAccountNumber(?string $value): self
    {
        $this->instance->setCauAccountNumber($value);
        return $this;
    }

    /**
     * Unsets cau account number field.
     */
    public function unsetCauAccountNumber(): self
    {
        $this->instance->unsetCauAccountNumber();
        return $this;
    }

    /**
     * Sets location billing account id field.
     *
     * @param string|null $value
     */
    public function locationBillingAccountId(?string $value): self
    {
        $this->instance->setLocationBillingAccountId($value);
        return $this;
    }

    /**
     * Unsets location billing account id field.
     */
    public function unsetLocationBillingAccountId(): self
    {
        $this->instance->unsetLocationBillingAccountId();
        return $this;
    }

    /**
     * Sets product billing group id field.
     *
     * @param string|null $value
     */
    public function productBillingGroupId(?string $value): self
    {
        $this->instance->setProductBillingGroupId($value);
        return $this;
    }

    /**
     * Unsets product billing group id field.
     */
    public function unsetProductBillingGroupId(): self
    {
        $this->instance->unsetProductBillingGroupId();
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
     * Sets run avs on accountvault create field.
     *
     * @param bool|null $value
     */
    public function runAvsOnAccountvaultCreate(?bool $value): self
    {
        $this->instance->setRunAvsOnAccountvaultCreate($value);
        return $this;
    }

    /**
     * Sets accountvault expire notification email enable field.
     *
     * @param bool|null $value
     */
    public function accountvaultExpireNotificationEmailEnable(?bool $value): self
    {
        $this->instance->setAccountvaultExpireNotificationEmailEnable($value);
        return $this;
    }

    /**
     * Sets debit allow void field.
     *
     * @param bool|null $value
     */
    public function debitAllowVoid(?bool $value): self
    {
        $this->instance->setDebitAllowVoid($value);
        return $this;
    }

    /**
     * Sets quick invoice text to pay field.
     *
     * @param bool|null $value
     */
    public function quickInvoiceTextToPay(?bool $value): self
    {
        $this->instance->setQuickInvoiceTextToPay($value);
        return $this;
    }

    /**
     * Sets authentication code field.
     *
     * @param string|null $value
     */
    public function authenticationCode(?string $value): self
    {
        $this->instance->setAuthenticationCode($value);
        return $this;
    }

    /**
     * Unsets authentication code field.
     */
    public function unsetAuthenticationCode(): self
    {
        $this->instance->unsetAuthenticationCode();
        return $this;
    }

    /**
     * Sets sms enable field.
     *
     * @param bool|null $value
     */
    public function smsEnable(?bool $value): self
    {
        $this->instance->setSmsEnable($value);
        return $this;
    }

    /**
     * Sets vt show currency field.
     *
     * @param bool|null $value
     */
    public function vtShowCurrency(?bool $value): self
    {
        $this->instance->setVtShowCurrency($value);
        return $this;
    }

    /**
     * Sets receipt show currency field.
     *
     * @param bool|null $value
     */
    public function receiptShowCurrency(?bool $value): self
    {
        $this->instance->setReceiptShowCurrency($value);
        return $this;
    }

    /**
     * Sets allow blind refund field.
     *
     * @param bool|null $value
     */
    public function allowBlindRefund(?bool $value): self
    {
        $this->instance->setAllowBlindRefund($value);
        return $this;
    }

    /**
     * Sets vt show company name field.
     *
     * @param bool|null $value
     */
    public function vtShowCompanyName(?bool $value): self
    {
        $this->instance->setVtShowCompanyName($value);
        return $this;
    }

    /**
     * Sets receipt show company name field.
     *
     * @param bool|null $value
     */
    public function receiptShowCompanyName(?bool $value): self
    {
        $this->instance->setReceiptShowCompanyName($value);
        return $this;
    }

    /**
     * Sets bank funded only field.
     *
     * @param bool|null $value
     */
    public function bankFundedOnly(?bool $value): self
    {
        $this->instance->setBankFundedOnly($value);
        return $this;
    }

    /**
     * Sets require cvv on keyed cnp field.
     *
     * @param bool|null $value
     */
    public function requireCvvOnKeyedCnp(?bool $value): self
    {
        $this->instance->setRequireCvvOnKeyedCnp($value);
        return $this;
    }

    /**
     * Sets require cvv on tokenized cnp field.
     *
     * @param bool|null $value
     */
    public function requireCvvOnTokenizedCnp(?bool $value): self
    {
        $this->instance->setRequireCvvOnTokenizedCnp($value);
        return $this;
    }

    /**
     * Sets show secondary amount field.
     *
     * @param bool|null $value
     */
    public function showSecondaryAmount(?bool $value): self
    {
        $this->instance->setShowSecondaryAmount($value);
        return $this;
    }

    /**
     * Sets allow secondary amount field.
     *
     * @param bool|null $value
     */
    public function allowSecondaryAmount(?bool $value): self
    {
        $this->instance->setAllowSecondaryAmount($value);
        return $this;
    }

    /**
     * Sets show google pay field.
     *
     * @param bool|null $value
     */
    public function showGooglePay(?bool $value): self
    {
        $this->instance->setShowGooglePay($value);
        return $this;
    }

    /**
     * Sets show apple pay field.
     *
     * @param bool|null $value
     */
    public function showApplePay(?bool $value): self
    {
        $this->instance->setShowApplePay($value);
        return $this;
    }

    /**
     * Sets batch risk config field.
     *
     * @param BatchRiskConfig|null $value
     */
    public function batchRiskConfig(?BatchRiskConfig $value): self
    {
        $this->instance->setBatchRiskConfig($value);
        return $this;
    }

    /**
     * Sets currency code field.
     *
     * @param float|null $value
     */
    public function currencyCode(?float $value): self
    {
        $this->instance->setCurrencyCode($value);
        return $this;
    }

    /**
     * Unsets currency code field.
     */
    public function unsetCurrencyCode(): self
    {
        $this->instance->unsetCurrencyCode();
        return $this;
    }

    /**
     * Sets enable ach validation field.
     *
     * @param bool|null $value
     */
    public function enableAchValidation(?bool $value): self
    {
        $this->instance->setEnableAchValidation($value);
        return $this;
    }

    /**
     * Sets enable ach retry field.
     *
     * @param bool|null $value
     */
    public function enableAchRetry(?bool $value): self
    {
        $this->instance->setEnableAchRetry($value);
        return $this;
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets receipt logo field.
     *
     * @param string|null $value
     */
    public function receiptLogo(?string $value): self
    {
        $this->instance->setReceiptLogo($value);
        return $this;
    }

    /**
     * Sets active field.
     *
     * @param bool|null $value
     */
    public function active(?bool $value): self
    {
        $this->instance->setActive($value);
        return $this;
    }

    /**
     * Sets tz field.
     *
     * @param string|null $value
     */
    public function tz(?string $value): self
    {
        $this->instance->setTz($value);
        return $this;
    }

    /**
     * Unsets tz field.
     */
    public function unsetTz(): self
    {
        $this->instance->unsetTz();
        return $this;
    }

    /**
     * Sets current stan field.
     *
     * @param float|null $value
     */
    public function currentStan(?float $value): self
    {
        $this->instance->setCurrentStan($value);
        return $this;
    }

    /**
     * Unsets current stan field.
     */
    public function unsetCurrentStan(): self
    {
        $this->instance->unsetCurrentStan();
        return $this;
    }

    /**
     * Sets created ts field.
     *
     * @param int|null $value
     */
    public function createdTs(?int $value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Unsets created ts field.
     */
    public function unsetCreatedTs(): self
    {
        $this->instance->unsetCreatedTs();
        return $this;
    }

    /**
     * Sets modified ts field.
     *
     * @param int|null $value
     */
    public function modifiedTs(?int $value): self
    {
        $this->instance->setModifiedTs($value);
        return $this;
    }

    /**
     * Unsets modified ts field.
     */
    public function unsetModifiedTs(): self
    {
        $this->instance->unsetModifiedTs();
        return $this;
    }

    /**
     * Sets created user id field.
     *
     * @param string|null $value
     */
    public function createdUserId(?string $value): self
    {
        $this->instance->setCreatedUserId($value);
        return $this;
    }

    /**
     * Unsets created user id field.
     */
    public function unsetCreatedUserId(): self
    {
        $this->instance->unsetCreatedUserId();
        return $this;
    }

    /**
     * Sets modified user id field.
     *
     * @param string|null $value
     */
    public function modifiedUserId(?string $value): self
    {
        $this->instance->setModifiedUserId($value);
        return $this;
    }

    /**
     * Unsets modified user id field.
     */
    public function unsetModifiedUserId(): self
    {
        $this->instance->unsetModifiedUserId();
        return $this;
    }

    /**
     * Sets product transaction api id field.
     *
     * @param string|null $value
     */
    public function productTransactionApiId(?string $value): self
    {
        $this->instance->setProductTransactionApiId($value);
        return $this;
    }

    /**
     * Unsets product transaction api id field.
     */
    public function unsetProductTransactionApiId(): self
    {
        $this->instance->unsetProductTransactionApiId();
        return $this;
    }

    /**
     * Sets transaction amount notification threshold field.
     *
     * @param int|null $value
     */
    public function transactionAmountNotificationThreshold(?int $value): self
    {
        $this->instance->setTransactionAmountNotificationThreshold($value);
        return $this;
    }

    /**
     * Sets is secondary amount allowed field.
     *
     * @param bool|null $value
     */
    public function isSecondaryAmountAllowed(?bool $value): self
    {
        $this->instance->setIsSecondaryAmountAllowed($value);
        return $this;
    }

    /**
     * Sets fortis id field.
     *
     * @param string|null $value
     */
    public function fortisId(?string $value): self
    {
        $this->instance->setFortisId($value);
        return $this;
    }

    /**
     * Unsets fortis id field.
     */
    public function unsetFortisId(): self
    {
        $this->instance->unsetFortisId();
        return $this;
    }

    /**
     * Sets product billing group code field.
     *
     * @param string|null $value
     */
    public function productBillingGroupCode(?string $value): self
    {
        $this->instance->setProductBillingGroupCode($value);
        return $this;
    }

    /**
     * Unsets product billing group code field.
     */
    public function unsetProductBillingGroupCode(): self
    {
        $this->instance->unsetProductBillingGroupCode();
        return $this;
    }

    /**
     * Sets cau subscribe type code field.
     *
     * @param int|null $value
     */
    public function cauSubscribeTypeCode(?int $value): self
    {
        $this->instance->setCauSubscribeTypeCode($value);
        return $this;
    }

    /**
     * Unsets cau subscribe type code field.
     */
    public function unsetCauSubscribeTypeCode(): self
    {
        $this->instance->unsetCauSubscribeTypeCode();
        return $this;
    }

    /**
     * Sets merchant code field.
     *
     * @param string|null $value
     */
    public function merchantCode(?string $value): self
    {
        $this->instance->setMerchantCode($value);
        return $this;
    }

    /**
     * Unsets merchant code field.
     */
    public function unsetMerchantCode(): self
    {
        $this->instance->unsetMerchantCode();
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
     * Initializes a new Cc Product Transaction object.
     */
    public function build(): CcProductTransaction
    {
        return CoreHelper::clone($this->instance);
    }
}
