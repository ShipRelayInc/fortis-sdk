<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data3;
use FortisAPILib\Models\ResponseDeclinedRecurringTransaction;

/**
 * Builder for model ResponseDeclinedRecurringTransaction
 *
 * @see ResponseDeclinedRecurringTransaction
 */
class ResponseDeclinedRecurringTransactionBuilder
{
    /**
     * @var ResponseDeclinedRecurringTransaction
     */
    private $instance;

    private function __construct(ResponseDeclinedRecurringTransaction $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Response Declined Recurring Transaction Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseDeclinedRecurringTransaction());
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets data field.
     *
     * @param Data3|null $value
     */
    public function data(?Data3 $value): self
    {
        $this->instance->setData($value);
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
     * Initializes a new Response Declined Recurring Transaction object.
     */
    public function build(): ResponseDeclinedRecurringTransaction
    {
        return CoreHelper::clone($this->instance);
    }
}
