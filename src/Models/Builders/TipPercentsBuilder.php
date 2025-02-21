<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\TipPercents;

/**
 * Builder for model TipPercents
 *
 * @see TipPercents
 */
class TipPercentsBuilder
{
    /**
     * @var TipPercents
     */
    private $instance;

    private function __construct(TipPercents $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Tip Percents Builder object.
     */
    public static function init(): self
    {
        return new self(new TipPercents());
    }

    /**
     * Sets percent 1 field.
     *
     * @param int|null $value
     */
    public function percent1(?int $value): self
    {
        $this->instance->setPercent1($value);
        return $this;
    }

    /**
     * Unsets percent 1 field.
     */
    public function unsetPercent1(): self
    {
        $this->instance->unsetPercent1();
        return $this;
    }

    /**
     * Sets percent 2 field.
     *
     * @param int|null $value
     */
    public function percent2(?int $value): self
    {
        $this->instance->setPercent2($value);
        return $this;
    }

    /**
     * Unsets percent 2 field.
     */
    public function unsetPercent2(): self
    {
        $this->instance->unsetPercent2();
        return $this;
    }

    /**
     * Sets percent 3 field.
     *
     * @param int|null $value
     */
    public function percent3(?int $value): self
    {
        $this->instance->setPercent3($value);
        return $this;
    }

    /**
     * Unsets percent 3 field.
     */
    public function unsetPercent3(): self
    {
        $this->instance->unsetPercent3();
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
     * Initializes a new Tip Percents object.
     */
    public function build(): TipPercents
    {
        return CoreHelper::clone($this->instance);
    }
}
