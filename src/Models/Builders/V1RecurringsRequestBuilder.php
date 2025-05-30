<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Joi;
use FortisAPILib\Models\V1RecurringsRequest;

/**
 * Builder for model V1RecurringsRequest
 *
 * @see V1RecurringsRequest
 */
class V1RecurringsRequestBuilder
{
    /**
     * @var V1RecurringsRequest
     */
    private $instance;

    private function __construct(V1RecurringsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new V1 Recurrings Request Builder object.
     *
     * @param int $interval
     * @param string $intervalType
     * @param string $locationId
     * @param string $startDate
     * @param int $transactionAmount
     */
    public static function init(
        int $interval,
        string $intervalType,
        string $locationId,
        string $startDate,
        int $transactionAmount
    ): self {
        return new self(
            new V1RecurringsRequest($interval, $intervalType, $locationId, $startDate, $transactionAmount)
        );
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
     * Unsets payment method field.
     */
    public function unsetPaymentMethod(): self
    {
        $this->instance->unsetPaymentMethod();
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
     * Unsets status field.
     */
    public function unsetStatus(): self
    {
        $this->instance->unsetStatus();
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
     * Initializes a new V1 Recurrings Request object.
     */
    public function build(): V1RecurringsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
