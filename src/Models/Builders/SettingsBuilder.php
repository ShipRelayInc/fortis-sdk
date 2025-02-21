<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Settings;

/**
 * Builder for model Settings
 *
 * @see Settings
 */
class SettingsBuilder
{
    /**
     * @var Settings
     */
    private $instance;

    private function __construct(Settings $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Settings Builder object.
     */
    public static function init(): self
    {
        return new self(new Settings());
    }

    /**
     * Sets enabled field.
     *
     * @param bool|null $value
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Sets columns field.
     *
     * @param float|null $value
     */
    public function columns(?float $value): self
    {
        $this->instance->setColumns($value);
        return $this;
    }

    /**
     * Sets rows field.
     *
     * @param float|null $value
     */
    public function rows(?float $value): self
    {
        $this->instance->setRows($value);
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
     * Initializes a new Settings object.
     */
    public function build(): Settings
    {
        return CoreHelper::clone($this->instance);
    }
}
