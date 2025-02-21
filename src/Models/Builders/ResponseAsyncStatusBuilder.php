<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data;
use FortisAPILib\Models\ResponseAsyncStatus;

/**
 * Builder for model ResponseAsyncStatus
 *
 * @see ResponseAsyncStatus
 */
class ResponseAsyncStatusBuilder
{
    /**
     * @var ResponseAsyncStatus
     */
    private $instance;

    private function __construct(ResponseAsyncStatus $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Response Async Status Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseAsyncStatus());
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
     * @param Data|null $value
     */
    public function data(?Data $value): self
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
     * Initializes a new Response Async Status object.
     */
    public function build(): ResponseAsyncStatus
    {
        return CoreHelper::clone($this->instance);
    }
}
