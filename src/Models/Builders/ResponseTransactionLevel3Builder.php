<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data28;
use FortisAPILib\Models\ResponseTransactionLevel3;

/**
 * Builder for model ResponseTransactionLevel3
 *
 * @see ResponseTransactionLevel3
 */
class ResponseTransactionLevel3Builder
{
    /**
     * @var ResponseTransactionLevel3
     */
    private $instance;

    private function __construct(ResponseTransactionLevel3 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Response Transaction Level 3 Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseTransactionLevel3());
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
     * @param Data28|null $value
     */
    public function data(?Data28 $value): self
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
     * Initializes a new Response Transaction Level 3 object.
     */
    public function build(): ResponseTransactionLevel3
    {
        return CoreHelper::clone($this->instance);
    }
}
