<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data36;

/**
 * Builder for model Data36
 *
 * @see Data36
 */
class Data36Builder
{
    /**
     * @var Data36
     */
    private $instance;

    private function __construct(Data36 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Data 36 Builder object.
     */
    public static function init(): self
    {
        return new self(new Data36());
    }

    /**
     * Sets merchant Session field.
     *
     * @param string|null $value
     */
    public function merchantSession(?string $value): self
    {
        $this->instance->setMerchantSession($value);
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
     * Initializes a new Data 36 object.
     */
    public function build(): Data36
    {
        return CoreHelper::clone($this->instance);
    }
}
