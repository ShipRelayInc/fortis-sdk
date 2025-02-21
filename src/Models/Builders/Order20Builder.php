<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Order20;

/**
 * Builder for model Order20
 *
 * @see Order20
 */
class Order20Builder
{
    /**
     * @var Order20
     */
    private $instance;

    private function __construct(Order20 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Order 20 Builder object.
     *
     * @param string $key
     * @param string $operator
     */
    public static function init(string $key, string $operator): self
    {
        return new self(new Order20($key, $operator));
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
     * Initializes a new Order 20 object.
     */
    public function build(): Order20
    {
        return CoreHelper::clone($this->instance);
    }
}
