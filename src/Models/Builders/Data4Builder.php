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
use FortisAPILib\Models\Data4;

/**
 * Builder for model Data4
 *
 * @see Data4
 */
class Data4Builder
{
    /**
     * @var Data4
     */
    private $instance;

    private function __construct(Data4 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Data 4 Builder object.
     */
    public static function init(): self
    {
        return new self(new Data4());
    }

    /**
     * Sets declined recurring transaction id field.
     *
     * @param string|null $value
     */
    public function declinedRecurringTransactionId(?string $value): self
    {
        $this->instance->setDeclinedRecurringTransactionId($value);
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
     * Sets first six field.
     *
     * @param string|null $value
     */
    public function firstSix(?string $value): self
    {
        $this->instance->setFirstSix($value);
        return $this;
    }

    /**
     * Sets last four field.
     *
     * @param string|null $value
     */
    public function lastFour(?string $value): self
    {
        $this->instance->setLastFour($value);
        return $this;
    }

    /**
     * Sets routing field.
     *
     * @param string|null $value
     */
    public function routing(?string $value): self
    {
        $this->instance->setRouting($value);
        return $this;
    }

    /**
     * Unsets routing field.
     */
    public function unsetRouting(): self
    {
        $this->instance->unsetRouting();
        return $this;
    }

    /**
     * Sets status id field.
     *
     * @param float|null $value
     */
    public function statusId(?float $value): self
    {
        $this->instance->setStatusId($value);
        return $this;
    }

    /**
     * Sets reason code id field.
     *
     * @param int|null $value
     */
    public function reasonCodeId(?int $value): self
    {
        $this->instance->setReasonCodeId($value);
        return $this;
    }

    /**
     * Unsets reason code id field.
     */
    public function unsetReasonCodeId(): self
    {
        $this->instance->unsetReasonCodeId();
        return $this;
    }

    /**
     * Sets type id field.
     *
     * @param float|null $value
     */
    public function typeId(?float $value): self
    {
        $this->instance->setTypeId($value);
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
     * Initializes a new Data 4 object.
     */
    public function build(): Data4
    {
        return CoreHelper::clone($this->instance);
    }
}
