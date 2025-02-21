<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\ItemList;

/**
 * Builder for model ItemList
 *
 * @see ItemList
 */
class ItemListBuilder
{
    /**
     * @var ItemList
     */
    private $instance;

    private function __construct(ItemList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Item List Builder object.
     */
    public static function init(): self
    {
        return new self(new ItemList());
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets amount field.
     *
     * @param int|null $value
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
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
     * Initializes a new Item List object.
     */
    public function build(): ItemList
    {
        return CoreHelper::clone($this->instance);
    }
}
