<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data31;

/**
 * Builder for model Data31
 *
 * @see Data31
 */
class Data31Builder
{
    /**
     * @var Data31
     */
    private $instance;

    private function __construct(Data31 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Data 31 Builder object.
     */
    public static function init(): self
    {
        return new self(new Data31());
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
     * Sets user id field.
     *
     * @param string|null $value
     */
    public function userId(?string $value): self
    {
        $this->instance->setUserId($value);
        return $this;
    }

    /**
     * Sets hash field.
     *
     * @param string|null $value
     */
    public function hash(?string $value): self
    {
        $this->instance->setHash($value);
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
     * Initializes a new Data 31 object.
     */
    public function build(): Data31
    {
        return CoreHelper::clone($this->instance);
    }
}
