<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\HomePhone;

/**
 * Builder for model HomePhone
 *
 * @see HomePhone
 */
class HomePhoneBuilder
{
    /**
     * @var HomePhone
     */
    private $instance;

    private function __construct(HomePhone $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Home Phone Builder object.
     */
    public static function init(): self
    {
        return new self(new HomePhone());
    }

    /**
     * Sets cc field.
     *
     * @param string|null $value
     */
    public function cc(?string $value): self
    {
        $this->instance->setCc($value);
        return $this;
    }

    /**
     * Sets subscriber field.
     *
     * @param string|null $value
     */
    public function subscriber(?string $value): self
    {
        $this->instance->setSubscriber($value);
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
     * Initializes a new Home Phone object.
     */
    public function build(): HomePhone
    {
        return CoreHelper::clone($this->instance);
    }
}
