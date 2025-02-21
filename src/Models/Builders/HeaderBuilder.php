<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Field17;
use FortisAPILib\Models\Header;
use FortisAPILib\Models\Settings;

/**
 * Builder for model Header
 *
 * @see Header
 */
class HeaderBuilder
{
    /**
     * @var Header
     */
    private $instance;

    private function __construct(Header $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Header Builder object.
     */
    public static function init(): self
    {
        return new self(new Header());
    }

    /**
     * Sets settings field.
     *
     * @param Settings|null $value
     */
    public function settings(?Settings $value): self
    {
        $this->instance->setSettings($value);
        return $this;
    }

    /**
     * Sets fields field.
     *
     * @param Field17[]|null $value
     */
    public function fields(?array $value): self
    {
        $this->instance->setFields($value);
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
     * Initializes a new Header object.
     */
    public function build(): Header
    {
        return CoreHelper::clone($this->instance);
    }
}
