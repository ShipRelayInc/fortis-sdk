<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\BankAccount;

/**
 * Builder for model BankAccount
 *
 * @see BankAccount
 */
class BankAccountBuilder
{
    /**
     * @var BankAccount
     */
    private $instance;

    private function __construct(BankAccount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bank Account Builder object.
     */
    public static function init(): self
    {
        return new self(new BankAccount());
    }

    /**
     * Sets routing number field.
     *
     * @param string|null $value
     */
    public function routingNumber(?string $value): self
    {
        $this->instance->setRoutingNumber($value);
        return $this;
    }

    /**
     * Unsets routing number field.
     */
    public function unsetRoutingNumber(): self
    {
        $this->instance->unsetRoutingNumber();
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
     * Initializes a new Bank Account object.
     */
    public function build(): BankAccount
    {
        return CoreHelper::clone($this->instance);
    }
}
