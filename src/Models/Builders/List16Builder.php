<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Changelog;
use FortisAPILib\Models\CreatedUser;
use FortisAPILib\Models\List16;
use FortisAPILib\Models\RejectedTransaction;
use FortisAPILib\Models\RetryTransaction;
use FortisAPILib\Models\ReturnFeeTransaction;

/**
 * Builder for model List16
 *
 * @see List16
 */
class List16Builder
{
    /**
     * @var List16
     */
    private $instance;

    private function __construct(List16 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List 16 Builder object.
     */
    public static function init(): self
    {
        return new self(new List16());
    }

    /**
     * Sets rejected transaction id field.
     *
     * @param string|null $value
     */
    public function rejectedTransactionId(?string $value): self
    {
        $this->instance->setRejectedTransactionId($value);
        return $this;
    }

    /**
     * Sets return fee field.
     *
     * @param int|null $value
     */
    public function returnFee(?int $value): self
    {
        $this->instance->setReturnFee($value);
        return $this;
    }

    /**
     * Unsets return fee field.
     */
    public function unsetReturnFee(): self
    {
        $this->instance->unsetReturnFee();
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
     * Sets retry transaction id field.
     *
     * @param string|null $value
     */
    public function retryTransactionId(?string $value): self
    {
        $this->instance->setRetryTransactionId($value);
        return $this;
    }

    /**
     * Sets return fee transaction id field.
     *
     * @param string|null $value
     */
    public function returnFeeTransactionId(?string $value): self
    {
        $this->instance->setReturnFeeTransactionId($value);
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
     * Sets rejected transaction field.
     *
     * @param RejectedTransaction|null $value
     */
    public function rejectedTransaction(?RejectedTransaction $value): self
    {
        $this->instance->setRejectedTransaction($value);
        return $this;
    }

    /**
     * Sets retry transaction field.
     *
     * @param RetryTransaction|null $value
     */
    public function retryTransaction(?RetryTransaction $value): self
    {
        $this->instance->setRetryTransaction($value);
        return $this;
    }

    /**
     * Sets return fee transaction field.
     *
     * @param ReturnFeeTransaction|null $value
     */
    public function returnFeeTransaction(?ReturnFeeTransaction $value): self
    {
        $this->instance->setReturnFeeTransaction($value);
        return $this;
    }

    /**
     * Sets created user field.
     *
     * @param CreatedUser|null $value
     */
    public function createdUser(?CreatedUser $value): self
    {
        $this->instance->setCreatedUser($value);
        return $this;
    }

    /**
     * Sets changelogs field.
     *
     * @param Changelog[]|null $value
     */
    public function changelogs(?array $value): self
    {
        $this->instance->setChangelogs($value);
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
     * Initializes a new List 16 object.
     */
    public function build(): List16
    {
        return CoreHelper::clone($this->instance);
    }
}
