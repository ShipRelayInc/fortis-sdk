<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\ReasonCode;

/**
 * Builder for model ReasonCode
 *
 * @see ReasonCode
 */
class ReasonCodeBuilder
{
    /**
     * @var ReasonCode
     */
    private $instance;

    private function __construct(ReasonCode $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Reason Code Builder object.
     */
    public static function init(): self
    {
        return new self(new ReasonCode());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
        return $this;
    }

    /**
     * Sets title field.
     *
     * @param string|null $value
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
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
     * Initializes a new Reason Code object.
     */
    public function build(): ReasonCode
    {
        return CoreHelper::clone($this->instance);
    }
}
