<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\ActiveRecurring;
use FortisAPILib\Models\Joi;

/**
 * Builder for model ActiveRecurring
 *
 * @see ActiveRecurring
 */
class ActiveRecurringBuilder
{
    /**
     * @var ActiveRecurring
     */
    private $instance;

    private function __construct(ActiveRecurring $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Active Recurring Builder object.
     */
    public static function init(): self
    {
        return new self(new ActiveRecurring());
    }

    /**
     * Sets account vault id field.
     *
     * @param string|null $value
     */
    public function accountVaultId(?string $value): self
    {
        $this->instance->setAccountVaultId($value);
        return $this;
    }

    /**
     * Sets token id field.
     *
     * @param string|null $value
     */
    public function tokenId(?string $value): self
    {
        $this->instance->setTokenId($value);
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
     * Sets joi field.
     *
     * @param Joi|null $value
     */
    public function joi(?Joi $value): self
    {
        $this->instance->setJoi($value);
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
     * Sets end date field.
     *
     * @param string|null $value
     */
    public function endDate(?string $value): self
    {
        $this->instance->setEndDate($value);
        return $this;
    }

    /**
     * Unsets end date field.
     */
    public function unsetEndDate(): self
    {
        $this->instance->unsetEndDate();
        return $this;
    }

    /**
     * Sets installment total count field.
     *
     * @param int|null $value
     */
    public function installmentTotalCount(?int $value): self
    {
        $this->instance->setInstallmentTotalCount($value);
        return $this;
    }

    /**
     * Unsets installment total count field.
     */
    public function unsetInstallmentTotalCount(): self
    {
        $this->instance->unsetInstallmentTotalCount();
        return $this;
    }

    /**
     * Sets interval field.
     *
     * @param int|null $value
     */
    public function interval(?int $value): self
    {
        $this->instance->setInterval($value);
        return $this;
    }

    /**
     * Sets interval type field.
     *
     * @param string|null $value
     */
    public function intervalType(?string $value): self
    {
        $this->instance->setIntervalType($value);
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
     * Sets notification days field.
     *
     * @param int|null $value
     */
    public function notificationDays(?int $value): self
    {
        $this->instance->setNotificationDays($value);
        return $this;
    }

    /**
     * Unsets notification days field.
     */
    public function unsetNotificationDays(): self
    {
        $this->instance->unsetNotificationDays();
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
     * Sets recurring id field.
     *
     * @param string|null $value
     */
    public function recurringId(?string $value): self
    {
        $this->instance->setRecurringId($value);
        return $this;
    }

    /**
     * Unsets recurring id field.
     */
    public function unsetRecurringId(): self
    {
        $this->instance->unsetRecurringId();
        return $this;
    }

    /**
     * Sets recurring api id field.
     *
     * @param string|null $value
     */
    public function recurringApiId(?string $value): self
    {
        $this->instance->setRecurringApiId($value);
        return $this;
    }

    /**
     * Unsets recurring api id field.
     */
    public function unsetRecurringApiId(): self
    {
        $this->instance->unsetRecurringApiId();
        return $this;
    }

    /**
     * Sets start date field.
     *
     * @param string|null $value
     */
    public function startDate(?string $value): self
    {
        $this->instance->setStartDate($value);
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
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
     * Sets recurring c 1 field.
     *
     * @param string|null $value
     */
    public function recurringC1(?string $value): self
    {
        $this->instance->setRecurringC1($value);
        return $this;
    }

    /**
     * Unsets recurring c 1 field.
     */
    public function unsetRecurringC1(): self
    {
        $this->instance->unsetRecurringC1();
        return $this;
    }

    /**
     * Sets recurring c 2 field.
     *
     * @param string|null $value
     */
    public function recurringC2(?string $value): self
    {
        $this->instance->setRecurringC2($value);
        return $this;
    }

    /**
     * Unsets recurring c 2 field.
     */
    public function unsetRecurringC2(): self
    {
        $this->instance->unsetRecurringC2();
        return $this;
    }

    /**
     * Sets recurring c 3 field.
     *
     * @param string|null $value
     */
    public function recurringC3(?string $value): self
    {
        $this->instance->setRecurringC3($value);
        return $this;
    }

    /**
     * Unsets recurring c 3 field.
     */
    public function unsetRecurringC3(): self
    {
        $this->instance->unsetRecurringC3();
        return $this;
    }

    /**
     * Sets send to proc as recur field.
     *
     * @param bool|null $value
     */
    public function sendToProcAsRecur(?bool $value): self
    {
        $this->instance->setSendToProcAsRecur($value);
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
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
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
     * Sets next run date field.
     *
     * @param string|null $value
     */
    public function nextRunDate(?string $value): self
    {
        $this->instance->setNextRunDate($value);
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
     * Sets recurring type id field.
     *
     * @param string|null $value
     */
    public function recurringTypeId(?string $value): self
    {
        $this->instance->setRecurringTypeId($value);
        return $this;
    }

    /**
     * Sets installment amount total field.
     *
     * @param int|null $value
     */
    public function installmentAmountTotal(?int $value): self
    {
        $this->instance->setInstallmentAmountTotal($value);
        return $this;
    }

    /**
     * Unsets installment amount total field.
     */
    public function unsetInstallmentAmountTotal(): self
    {
        $this->instance->unsetInstallmentAmountTotal();
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
     * Initializes a new Active Recurring object.
     */
    public function build(): ActiveRecurring
    {
        return CoreHelper::clone($this->instance);
    }
}
