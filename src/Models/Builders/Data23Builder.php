<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\BillingAddress5;
use FortisAPILib\Models\Data23;

/**
 * Builder for model Data23
 *
 * @see Data23
 */
class Data23Builder
{
    /**
     * @var Data23
     */
    private $instance;

    private function __construct(Data23 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Data 23 Builder object.
     */
    public static function init(): self
    {
        return new self(new Data23());
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
     * Sets cvv field.
     *
     * @param string|null $value
     */
    public function cvv(?string $value): self
    {
        $this->instance->setCvv($value);
        return $this;
    }

    /**
     * Unsets cvv field.
     */
    public function unsetCvv(): self
    {
        $this->instance->unsetCvv();
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
     * Sets billing address field.
     *
     * @param BillingAddress5|null $value
     */
    public function billingAddress(?BillingAddress5 $value): self
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
     * Initializes a new Data 23 object.
     */
    public function build(): Data23
    {
        return CoreHelper::clone($this->instance);
    }
}
