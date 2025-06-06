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

class Recurring implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountVaultId;

    /**
     * @var string|null
     */
    private $tokenId;

    /**
     * @var array
     */
    private $contactId = [];

    /**
     * @var array
     */
    private $accountVaultApiId = [];

    /**
     * @var array
     */
    private $tokenApiId = [];

    /**
     * @var Joi|null
     */
    private $joi;

    /**
     * @var bool|null
     */
    private $active;

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var array
     */
    private $endDate = [];

    /**
     * @var array
     */
    private $installmentTotalCount = [];

    /**
     * @var int|null
     */
    private $interval;

    /**
     * @var string|null
     */
    private $intervalType;

    /**
     * @var string|null
     */
    private $locationId;

    /**
     * @var array
     */
    private $notificationDays = [];

    /**
     * @var string|null
     */
    private $paymentMethod;

    /**
     * @var array
     */
    private $productTransactionId = [];

    /**
     * @var array
     */
    private $recurringId = [];

    /**
     * @var array
     */
    private $recurringApiId = [];

    /**
     * @var string|null
     */
    private $startDate;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var int|null
     */
    private $transactionAmount;

    /**
     * @var bool|null
     */
    private $termsAgree;

    /**
     * @var array
     */
    private $termsAgreeIp = [];

    /**
     * @var array
     */
    private $recurringC1 = [];

    /**
     * @var array
     */
    private $recurringC2 = [];

    /**
     * @var array
     */
    private $recurringC3 = [];

    /**
     * @var bool|null
     */
    private $sendToProcAsRecur;

    /**
     * @var array
     */
    private $tags = [];

    /**
     * @var array
     */
    private $secondaryAmount = [];

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $nextRunDate;

    /**
     * @var int|null
     */
    private $createdTs;

    /**
     * @var int|null
     */
    private $modifiedTs;

    /**
     * @var string|null
     */
    private $recurringTypeId;

    /**
     * @var array
     */
    private $installmentAmountTotal = [];

    /**
     * @var string|null
     */
    private $createdUserId;

    /**
     * Returns Account Vault Id.
     * Token ID
     */
    public function getAccountVaultId(): ?string
    {
        return $this->accountVaultId;
    }

    /**
     * Sets Account Vault Id.
     * Token ID
     *
     * @maps account_vault_id
     */
    public function setAccountVaultId(?string $accountVaultId): void
    {
        $this->accountVaultId = $accountVaultId;
    }

    /**
     * Returns Token Id.
     * Token ID
     */
    public function getTokenId(): ?string
    {
        return $this->tokenId;
    }

    /**
     * Sets Token Id.
     * Token ID
     *
     * @maps token_id
     */
    public function setTokenId(?string $tokenId): void
    {
        $this->tokenId = $tokenId;
    }

    /**
     * Returns Contact Id.
     * Contact ID
     */
    public function getContactId(): ?string
    {
        if (count($this->contactId) == 0) {
            return null;
        }
        return $this->contactId['value'];
    }

    /**
     * Sets Contact Id.
     * Contact ID
     *
     * @maps contact_id
     */
    public function setContactId(?string $contactId): void
    {
        $this->contactId['value'] = $contactId;
    }

    /**
     * Unsets Contact Id.
     * Contact ID
     */
    public function unsetContactId(): void
    {
        $this->contactId = [];
    }

    /**
     * Returns Account Vault Api Id.
     * Token API ID
     */
    public function getAccountVaultApiId(): ?string
    {
        if (count($this->accountVaultApiId) == 0) {
            return null;
        }
        return $this->accountVaultApiId['value'];
    }

    /**
     * Sets Account Vault Api Id.
     * Token API ID
     *
     * @maps account_vault_api_id
     */
    public function setAccountVaultApiId(?string $accountVaultApiId): void
    {
        $this->accountVaultApiId['value'] = $accountVaultApiId;
    }

    /**
     * Unsets Account Vault Api Id.
     * Token API ID
     */
    public function unsetAccountVaultApiId(): void
    {
        $this->accountVaultApiId = [];
    }

    /**
     * Returns Token Api Id.
     * Token API ID
     */
    public function getTokenApiId(): ?string
    {
        if (count($this->tokenApiId) == 0) {
            return null;
        }
        return $this->tokenApiId['value'];
    }

    /**
     * Sets Token Api Id.
     * Token API ID
     *
     * @maps token_api_id
     */
    public function setTokenApiId(?string $tokenApiId): void
    {
        $this->tokenApiId['value'] = $tokenApiId;
    }

    /**
     * Unsets Token Api Id.
     * Token API ID
     */
    public function unsetTokenApiId(): void
    {
        $this->tokenApiId = [];
    }

    /**
     * Returns Joi.
     */
    public function getJoi(): ?Joi
    {
        return $this->joi;
    }

    /**
     * Sets Joi.
     *
     * @maps _joi
     */
    public function setJoi(?Joi $joi): void
    {
        $this->joi = $joi;
    }

    /**
     * Returns Active.
     * Active
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Sets Active.
     * Active
     *
     * @maps active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * Returns Description.
     * Description
     */
    public function getDescription(): ?string
    {
        if (count($this->description) == 0) {
            return null;
        }
        return $this->description['value'];
    }

    /**
     * Sets Description.
     * Description
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     * Description
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns End Date.
     * End date
     */
    public function getEndDate(): ?string
    {
        if (count($this->endDate) == 0) {
            return null;
        }
        return $this->endDate['value'];
    }

    /**
     * Sets End Date.
     * End date
     *
     * @maps end_date
     */
    public function setEndDate(?string $endDate): void
    {
        $this->endDate['value'] = $endDate;
    }

    /**
     * Unsets End Date.
     * End date
     */
    public function unsetEndDate(): void
    {
        $this->endDate = [];
    }

    /**
     * Returns Installment Total Count.
     * Installment Total Count
     */
    public function getInstallmentTotalCount(): ?int
    {
        if (count($this->installmentTotalCount) == 0) {
            return null;
        }
        return $this->installmentTotalCount['value'];
    }

    /**
     * Sets Installment Total Count.
     * Installment Total Count
     *
     * @maps installment_total_count
     */
    public function setInstallmentTotalCount(?int $installmentTotalCount): void
    {
        $this->installmentTotalCount['value'] = $installmentTotalCount;
    }

    /**
     * Unsets Installment Total Count.
     * Installment Total Count
     */
    public function unsetInstallmentTotalCount(): void
    {
        $this->installmentTotalCount = [];
    }

    /**
     * Returns Interval.
     * Interval
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * Interval
     *
     * @maps interval
     */
    public function setInterval(?int $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Type.
     * Interval Type
     */
    public function getIntervalType(): ?string
    {
        return $this->intervalType;
    }

    /**
     * Sets Interval Type.
     * Interval Type
     *
     * @maps interval_type
     * @factory \FortisAPILib\Models\IntervalTypeEnum::checkValue
     */
    public function setIntervalType(?string $intervalType): void
    {
        $this->intervalType = $intervalType;
    }

    /**
     * Returns Location Id.
     * Location ID
     */
    public function getLocationId(): ?string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * Location ID
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Notification Days.
     * Notification Days
     */
    public function getNotificationDays(): ?int
    {
        if (count($this->notificationDays) == 0) {
            return null;
        }
        return $this->notificationDays['value'];
    }

    /**
     * Sets Notification Days.
     * Notification Days
     *
     * @maps notification_days
     */
    public function setNotificationDays(?int $notificationDays): void
    {
        $this->notificationDays['value'] = $notificationDays;
    }

    /**
     * Unsets Notification Days.
     * Notification Days
     */
    public function unsetNotificationDays(): void
    {
        $this->notificationDays = [];
    }

    /**
     * Returns Payment Method.
     * Payment Method
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * Sets Payment Method.
     * Payment Method
     *
     * @maps payment_method
     * @factory \FortisAPILib\Models\PaymentMethod1Enum::checkValue
     */
    public function setPaymentMethod(?string $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Product Transaction Id.
     * Product Transaction ID
     */
    public function getProductTransactionId(): ?string
    {
        if (count($this->productTransactionId) == 0) {
            return null;
        }
        return $this->productTransactionId['value'];
    }

    /**
     * Sets Product Transaction Id.
     * Product Transaction ID
     *
     * @maps product_transaction_id
     */
    public function setProductTransactionId(?string $productTransactionId): void
    {
        $this->productTransactionId['value'] = $productTransactionId;
    }

    /**
     * Unsets Product Transaction Id.
     * Product Transaction ID
     */
    public function unsetProductTransactionId(): void
    {
        $this->productTransactionId = [];
    }

    /**
     * Returns Recurring Id.
     * Recurring ID
     */
    public function getRecurringId(): ?string
    {
        if (count($this->recurringId) == 0) {
            return null;
        }
        return $this->recurringId['value'];
    }

    /**
     * Sets Recurring Id.
     * Recurring ID
     *
     * @maps recurring_id
     */
    public function setRecurringId(?string $recurringId): void
    {
        $this->recurringId['value'] = $recurringId;
    }

    /**
     * Unsets Recurring Id.
     * Recurring ID
     */
    public function unsetRecurringId(): void
    {
        $this->recurringId = [];
    }

    /**
     * Returns Recurring Api Id.
     * Recurring Api ID
     */
    public function getRecurringApiId(): ?string
    {
        if (count($this->recurringApiId) == 0) {
            return null;
        }
        return $this->recurringApiId['value'];
    }

    /**
     * Sets Recurring Api Id.
     * Recurring Api ID
     *
     * @maps recurring_api_id
     */
    public function setRecurringApiId(?string $recurringApiId): void
    {
        $this->recurringApiId['value'] = $recurringApiId;
    }

    /**
     * Unsets Recurring Api Id.
     * Recurring Api ID
     */
    public function unsetRecurringApiId(): void
    {
        $this->recurringApiId = [];
    }

    /**
     * Returns Start Date.
     * Start date
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * Sets Start Date.
     * Start date
     *
     * @maps start_date
     */
    public function setStartDate(?string $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * Returns Status.
     * Status
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status
     *
     * @maps status
     * @factory \FortisAPILib\Models\StatusEnum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Transaction Amount.
     * Transaction amount
     */
    public function getTransactionAmount(): ?int
    {
        return $this->transactionAmount;
    }

    /**
     * Sets Transaction Amount.
     * Transaction amount
     *
     * @maps transaction_amount
     */
    public function setTransactionAmount(?int $transactionAmount): void
    {
        $this->transactionAmount = $transactionAmount;
    }

    /**
     * Returns Terms Agree.
     * Terms Agree
     */
    public function getTermsAgree(): ?bool
    {
        return $this->termsAgree;
    }

    /**
     * Sets Terms Agree.
     * Terms Agree
     *
     * @maps terms_agree
     */
    public function setTermsAgree(?bool $termsAgree): void
    {
        $this->termsAgree = $termsAgree;
    }

    /**
     * Returns Terms Agree Ip.
     * Terms Agree Ip
     */
    public function getTermsAgreeIp(): ?string
    {
        if (count($this->termsAgreeIp) == 0) {
            return null;
        }
        return $this->termsAgreeIp['value'];
    }

    /**
     * Sets Terms Agree Ip.
     * Terms Agree Ip
     *
     * @maps terms_agree_ip
     */
    public function setTermsAgreeIp(?string $termsAgreeIp): void
    {
        $this->termsAgreeIp['value'] = $termsAgreeIp;
    }

    /**
     * Unsets Terms Agree Ip.
     * Terms Agree Ip
     */
    public function unsetTermsAgreeIp(): void
    {
        $this->termsAgreeIp = [];
    }

    /**
     * Returns Recurring C1.
     * Custom field used for integrations
     */
    public function getRecurringC1(): ?string
    {
        if (count($this->recurringC1) == 0) {
            return null;
        }
        return $this->recurringC1['value'];
    }

    /**
     * Sets Recurring C1.
     * Custom field used for integrations
     *
     * @maps recurring_c1
     */
    public function setRecurringC1(?string $recurringC1): void
    {
        $this->recurringC1['value'] = $recurringC1;
    }

    /**
     * Unsets Recurring C1.
     * Custom field used for integrations
     */
    public function unsetRecurringC1(): void
    {
        $this->recurringC1 = [];
    }

    /**
     * Returns Recurring C2.
     * Custom field used for integrations
     */
    public function getRecurringC2(): ?string
    {
        if (count($this->recurringC2) == 0) {
            return null;
        }
        return $this->recurringC2['value'];
    }

    /**
     * Sets Recurring C2.
     * Custom field used for integrations
     *
     * @maps recurring_c2
     */
    public function setRecurringC2(?string $recurringC2): void
    {
        $this->recurringC2['value'] = $recurringC2;
    }

    /**
     * Unsets Recurring C2.
     * Custom field used for integrations
     */
    public function unsetRecurringC2(): void
    {
        $this->recurringC2 = [];
    }

    /**
     * Returns Recurring C3.
     * Custom field used for integrations
     */
    public function getRecurringC3(): ?string
    {
        if (count($this->recurringC3) == 0) {
            return null;
        }
        return $this->recurringC3['value'];
    }

    /**
     * Sets Recurring C3.
     * Custom field used for integrations
     *
     * @maps recurring_c3
     */
    public function setRecurringC3(?string $recurringC3): void
    {
        $this->recurringC3['value'] = $recurringC3;
    }

    /**
     * Unsets Recurring C3.
     * Custom field used for integrations
     */
    public function unsetRecurringC3(): void
    {
        $this->recurringC3 = [];
    }

    /**
     * Returns Send to Proc as Recur.
     * Send To Proc As Recur
     */
    public function getSendToProcAsRecur(): ?bool
    {
        return $this->sendToProcAsRecur;
    }

    /**
     * Sets Send to Proc as Recur.
     * Send To Proc As Recur
     *
     * @maps send_to_proc_as_recur
     */
    public function setSendToProcAsRecur(?bool $sendToProcAsRecur): void
    {
        $this->sendToProcAsRecur = $sendToProcAsRecur;
    }

    /**
     * Returns Tags.
     * Tags
     *
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        if (count($this->tags) == 0) {
            return null;
        }
        return $this->tags['value'];
    }

    /**
     * Sets Tags.
     * Tags
     *
     * @maps tags
     *
     * @param string[]|null $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags['value'] = $tags;
    }

    /**
     * Unsets Tags.
     * Tags
     */
    public function unsetTags(): void
    {
        $this->tags = [];
    }

    /**
     * Returns Secondary Amount.
     * Retained Amount
     */
    public function getSecondaryAmount(): ?int
    {
        if (count($this->secondaryAmount) == 0) {
            return null;
        }
        return $this->secondaryAmount['value'];
    }

    /**
     * Sets Secondary Amount.
     * Retained Amount
     *
     * @maps secondary_amount
     */
    public function setSecondaryAmount(?int $secondaryAmount): void
    {
        $this->secondaryAmount['value'] = $secondaryAmount;
    }

    /**
     * Unsets Secondary Amount.
     * Retained Amount
     */
    public function unsetSecondaryAmount(): void
    {
        $this->secondaryAmount = [];
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Id.
     * Recurring ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Recurring ID
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Next Run Date.
     * Next Run Date
     */
    public function getNextRunDate(): ?string
    {
        return $this->nextRunDate;
    }

    /**
     * Sets Next Run Date.
     * Next Run Date
     *
     * @maps next_run_date
     */
    public function setNextRunDate(?string $nextRunDate): void
    {
        $this->nextRunDate = $nextRunDate;
    }

    /**
     * Returns Created Ts.
     * Created Time Stamp
     */
    public function getCreatedTs(): ?int
    {
        return $this->createdTs;
    }

    /**
     * Sets Created Ts.
     * Created Time Stamp
     *
     * @maps created_ts
     */
    public function setCreatedTs(?int $createdTs): void
    {
        $this->createdTs = $createdTs;
    }

    /**
     * Returns Modified Ts.
     * Modified Time Stamp
     */
    public function getModifiedTs(): ?int
    {
        return $this->modifiedTs;
    }

    /**
     * Sets Modified Ts.
     * Modified Time Stamp
     *
     * @maps modified_ts
     */
    public function setModifiedTs(?int $modifiedTs): void
    {
        $this->modifiedTs = $modifiedTs;
    }

    /**
     * Returns Recurring Type Id.
     * Recurring Type
     */
    public function getRecurringTypeId(): ?string
    {
        return $this->recurringTypeId;
    }

    /**
     * Sets Recurring Type Id.
     * Recurring Type
     *
     * @maps recurring_type_id
     * @factory \FortisAPILib\Models\RecurringTypeIdEnum::checkValue
     */
    public function setRecurringTypeId(?string $recurringTypeId): void
    {
        $this->recurringTypeId = $recurringTypeId;
    }

    /**
     * Returns Installment Amount Total.
     * Installment Amount Total
     */
    public function getInstallmentAmountTotal(): ?int
    {
        if (count($this->installmentAmountTotal) == 0) {
            return null;
        }
        return $this->installmentAmountTotal['value'];
    }

    /**
     * Sets Installment Amount Total.
     * Installment Amount Total
     *
     * @maps installment_amount_total
     */
    public function setInstallmentAmountTotal(?int $installmentAmountTotal): void
    {
        $this->installmentAmountTotal['value'] = $installmentAmountTotal;
    }

    /**
     * Unsets Installment Amount Total.
     * Installment Amount Total
     */
    public function unsetInstallmentAmountTotal(): void
    {
        $this->installmentAmountTotal = [];
    }

    /**
     * Returns Created User Id.
     * User ID Created the register
     */
    public function getCreatedUserId(): ?string
    {
        return $this->createdUserId;
    }

    /**
     * Sets Created User Id.
     * User ID Created the register
     *
     * @maps created_user_id
     */
    public function setCreatedUserId(?string $createdUserId): void
    {
        $this->createdUserId = $createdUserId;
    }

    /**
     * Converts the Recurring object to a human-readable string representation.
     *
     * @return string The string representation of the Recurring object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Recurring',
            [
                'accountVaultId' => $this->accountVaultId,
                'tokenId' => $this->tokenId,
                'contactId' => $this->getContactId(),
                'accountVaultApiId' => $this->getAccountVaultApiId(),
                'tokenApiId' => $this->getTokenApiId(),
                'joi' => $this->joi,
                'active' => $this->active,
                'description' => $this->getDescription(),
                'endDate' => $this->getEndDate(),
                'installmentTotalCount' => $this->getInstallmentTotalCount(),
                'interval' => $this->interval,
                'intervalType' => $this->intervalType,
                'locationId' => $this->locationId,
                'notificationDays' => $this->getNotificationDays(),
                'paymentMethod' => $this->paymentMethod,
                'productTransactionId' => $this->getProductTransactionId(),
                'recurringId' => $this->getRecurringId(),
                'recurringApiId' => $this->getRecurringApiId(),
                'startDate' => $this->startDate,
                'status' => $this->status,
                'transactionAmount' => $this->transactionAmount,
                'termsAgree' => $this->termsAgree,
                'termsAgreeIp' => $this->getTermsAgreeIp(),
                'recurringC1' => $this->getRecurringC1(),
                'recurringC2' => $this->getRecurringC2(),
                'recurringC3' => $this->getRecurringC3(),
                'sendToProcAsRecur' => $this->sendToProcAsRecur,
                'tags' => $this->getTags(),
                'secondaryAmount' => $this->getSecondaryAmount(),
                'currency' => $this->currency,
                'id' => $this->id,
                'nextRunDate' => $this->nextRunDate,
                'createdTs' => $this->createdTs,
                'modifiedTs' => $this->modifiedTs,
                'recurringTypeId' => $this->recurringTypeId,
                'installmentAmountTotal' => $this->getInstallmentAmountTotal(),
                'createdUserId' => $this->createdUserId,
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
        if (isset($this->accountVaultId)) {
            $json['account_vault_id']         = $this->accountVaultId;
        }
        if (isset($this->tokenId)) {
            $json['token_id']                 = $this->tokenId;
        }
        if (!empty($this->contactId)) {
            $json['contact_id']               = $this->contactId['value'];
        }
        if (!empty($this->accountVaultApiId)) {
            $json['account_vault_api_id']     = $this->accountVaultApiId['value'];
        }
        if (!empty($this->tokenApiId)) {
            $json['token_api_id']             = $this->tokenApiId['value'];
        }
        if (isset($this->joi)) {
            $json['_joi']                     = $this->joi;
        }
        if (isset($this->active)) {
            $json['active']                   = $this->active;
        }
        if (!empty($this->description)) {
            $json['description']              = $this->description['value'];
        }
        if (!empty($this->endDate)) {
            $json['end_date']                 = $this->endDate['value'];
        }
        if (!empty($this->installmentTotalCount)) {
            $json['installment_total_count']  = $this->installmentTotalCount['value'];
        }
        if (isset($this->interval)) {
            $json['interval']                 = $this->interval;
        }
        if (isset($this->intervalType)) {
            $json['interval_type']            = IntervalTypeEnum::checkValue($this->intervalType);
        }
        if (isset($this->locationId)) {
            $json['location_id']              = $this->locationId;
        }
        if (!empty($this->notificationDays)) {
            $json['notification_days']        = $this->notificationDays['value'];
        }
        if (isset($this->paymentMethod)) {
            $json['payment_method']           = PaymentMethod1Enum::checkValue($this->paymentMethod);
        }
        if (!empty($this->productTransactionId)) {
            $json['product_transaction_id']   = $this->productTransactionId['value'];
        }
        if (!empty($this->recurringId)) {
            $json['recurring_id']             = $this->recurringId['value'];
        }
        if (!empty($this->recurringApiId)) {
            $json['recurring_api_id']         = $this->recurringApiId['value'];
        }
        if (isset($this->startDate)) {
            $json['start_date']               = $this->startDate;
        }
        if (isset($this->status)) {
            $json['status']                   = StatusEnum::checkValue($this->status);
        }
        if (isset($this->transactionAmount)) {
            $json['transaction_amount']       = $this->transactionAmount;
        }
        if (isset($this->termsAgree)) {
            $json['terms_agree']              = $this->termsAgree;
        }
        if (!empty($this->termsAgreeIp)) {
            $json['terms_agree_ip']           = $this->termsAgreeIp['value'];
        }
        if (!empty($this->recurringC1)) {
            $json['recurring_c1']             = $this->recurringC1['value'];
        }
        if (!empty($this->recurringC2)) {
            $json['recurring_c2']             = $this->recurringC2['value'];
        }
        if (!empty($this->recurringC3)) {
            $json['recurring_c3']             = $this->recurringC3['value'];
        }
        if (isset($this->sendToProcAsRecur)) {
            $json['send_to_proc_as_recur']    = $this->sendToProcAsRecur;
        }
        if (!empty($this->tags)) {
            $json['tags']                     = $this->tags['value'];
        }
        if (!empty($this->secondaryAmount)) {
            $json['secondary_amount']         = $this->secondaryAmount['value'];
        }
        if (isset($this->currency)) {
            $json['currency']                 = $this->currency;
        }
        if (isset($this->id)) {
            $json['id']                       = $this->id;
        }
        if (isset($this->nextRunDate)) {
            $json['next_run_date']            = $this->nextRunDate;
        }
        if (isset($this->createdTs)) {
            $json['created_ts']               = $this->createdTs;
        }
        if (isset($this->modifiedTs)) {
            $json['modified_ts']              = $this->modifiedTs;
        }
        if (isset($this->recurringTypeId)) {
            $json['recurring_type_id']        = RecurringTypeIdEnum::checkValue($this->recurringTypeId);
        }
        if (!empty($this->installmentAmountTotal)) {
            $json['installment_amount_total'] = $this->installmentAmountTotal['value'];
        }
        if (isset($this->createdUserId)) {
            $json['created_user_id']          = $this->createdUserId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
