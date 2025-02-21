<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Conditions41;

/**
 * Builder for model Conditions41
 *
 * @see Conditions41
 */
class Conditions41Builder
{
    /**
     * @var Conditions41
     */
    private $instance;

    private function __construct(Conditions41 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Conditions 41 Builder object.
     */
    public static function init(): self
    {
        return new self(new Conditions41());
    }

    /**
     * Sets method field.
     *
     * @param string|null $value
     */
    public function method(?string $value): self
    {
        $this->instance->setMethod($value);
        return $this;
    }

    /**
     * Sets values field.
     *
     * @param string|null $value
     */
    public function values(?string $value): self
    {
        $this->instance->setValues($value);
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
     * Initializes a new Conditions 41 object.
     */
    public function build(): Conditions41
    {
        return CoreHelper::clone($this->instance);
    }
}
