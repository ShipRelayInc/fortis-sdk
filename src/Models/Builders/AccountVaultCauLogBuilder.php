<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\AccountVaultCauLog;

/**
 * Builder for model AccountVaultCauLog
 *
 * @see AccountVaultCauLog
 */
class AccountVaultCauLogBuilder
{
    /**
     * @var AccountVaultCauLog
     */
    private $instance;

    private function __construct(AccountVaultCauLog $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Account Vault Cau Log Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountVaultCauLog());
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
     * Unsets account vault id field.
     */
    public function unsetAccountVaultId(): self
    {
        $this->instance->unsetAccountVaultId();
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
     * Initializes a new Account Vault Cau Log object.
     */
    public function build(): AccountVaultCauLog
    {
        return CoreHelper::clone($this->instance);
    }
}
