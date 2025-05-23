<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Detail;
use FortisAPILib\Models\Meta;

/**
 * Builder for model Meta
 *
 * @see Meta
 */
class MetaBuilder
{
    /**
     * @var Meta
     */
    private $instance;

    private function __construct(Meta $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Meta Builder object.
     */
    public static function init(): self
    {
        return new self(new Meta());
    }

    /**
     * Sets details field.
     *
     * @param Detail[]|null $value
     */
    public function details(?array $value): self
    {
        $this->instance->setDetails($value);
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
     * Initializes a new Meta object.
     */
    public function build(): Meta
    {
        return CoreHelper::clone($this->instance);
    }
}
