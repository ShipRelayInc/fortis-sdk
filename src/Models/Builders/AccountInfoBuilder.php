<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\AccountInfo;

/**
 * Builder for model AccountInfo
 *
 * @see AccountInfo
 */
class AccountInfoBuilder
{
    /**
     * @var AccountInfo
     */
    private $instance;

    private function __construct(AccountInfo $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Account Info Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountInfo());
    }

    /**
     * Sets ch acc age ind field.
     *
     * @param string|null $value
     */
    public function chAccAgeInd(?string $value): self
    {
        $this->instance->setChAccAgeInd($value);
        return $this;
    }

    /**
     * Sets ch acc date field.
     *
     * @param string|null $value
     */
    public function chAccDate(?string $value): self
    {
        $this->instance->setChAccDate($value);
        return $this;
    }

    /**
     * Sets ch acc change ind field.
     *
     * @param string|null $value
     */
    public function chAccChangeInd(?string $value): self
    {
        $this->instance->setChAccChangeInd($value);
        return $this;
    }

    /**
     * Sets ch acc change field.
     *
     * @param string|null $value
     */
    public function chAccChange(?string $value): self
    {
        $this->instance->setChAccChange($value);
        return $this;
    }

    /**
     * Sets ch acc pw change ind field.
     *
     * @param string|null $value
     */
    public function chAccPwChangeInd(?string $value): self
    {
        $this->instance->setChAccPwChangeInd($value);
        return $this;
    }

    /**
     * Sets ch acc pw change field.
     *
     * @param string|null $value
     */
    public function chAccPwChange(?string $value): self
    {
        $this->instance->setChAccPwChange($value);
        return $this;
    }

    /**
     * Sets ship address usage ind field.
     *
     * @param string|null $value
     */
    public function shipAddressUsageInd(?string $value): self
    {
        $this->instance->setShipAddressUsageInd($value);
        return $this;
    }

    /**
     * Sets ship address usage field.
     *
     * @param string|null $value
     */
    public function shipAddressUsage(?string $value): self
    {
        $this->instance->setShipAddressUsage($value);
        return $this;
    }

    /**
     * Sets txn activity day field.
     *
     * @param int|null $value
     */
    public function txnActivityDay(?int $value): self
    {
        $this->instance->setTxnActivityDay($value);
        return $this;
    }

    /**
     * Sets txn activity year field.
     *
     * @param int|null $value
     */
    public function txnActivityYear(?int $value): self
    {
        $this->instance->setTxnActivityYear($value);
        return $this;
    }

    /**
     * Sets provision attempts day field.
     *
     * @param int|null $value
     */
    public function provisionAttemptsDay(?int $value): self
    {
        $this->instance->setProvisionAttemptsDay($value);
        return $this;
    }

    /**
     * Sets nb purchase account field.
     *
     * @param int|null $value
     */
    public function nbPurchaseAccount(?int $value): self
    {
        $this->instance->setNbPurchaseAccount($value);
        return $this;
    }

    /**
     * Sets suspicious acc activity field.
     *
     * @param string|null $value
     */
    public function suspiciousAccActivity(?string $value): self
    {
        $this->instance->setSuspiciousAccActivity($value);
        return $this;
    }

    /**
     * Sets ship name indicator field.
     *
     * @param string|null $value
     */
    public function shipNameIndicator(?string $value): self
    {
        $this->instance->setShipNameIndicator($value);
        return $this;
    }

    /**
     * Sets payment acc ind field.
     *
     * @param string|null $value
     */
    public function paymentAccInd(?string $value): self
    {
        $this->instance->setPaymentAccInd($value);
        return $this;
    }

    /**
     * Sets payment acc age field.
     *
     * @param string|null $value
     */
    public function paymentAccAge(?string $value): self
    {
        $this->instance->setPaymentAccAge($value);
        return $this;
    }

    /**
     * Sets ch acc req id field.
     *
     * @param string|null $value
     */
    public function chAccReqId(?string $value): self
    {
        $this->instance->setChAccReqId($value);
        return $this;
    }

    /**
     * Unsets ch acc req id field.
     */
    public function unsetChAccReqId(): self
    {
        $this->instance->unsetChAccReqId();
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
     * Initializes a new Account Info object.
     */
    public function build(): AccountInfo
    {
        return CoreHelper::clone($this->instance);
    }
}
