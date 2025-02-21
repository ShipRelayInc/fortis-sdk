<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Result;

/**
 * Builder for model Result
 *
 * @see Result
 */
class ResultBuilder
{
    /**
     * @var Result
     */
    private $instance;

    private function __construct(Result $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Result Builder object.
     */
    public static function init(): self
    {
        return new self(new Result());
    }

    /**
     * Sets client app id field.
     *
     * @param string|null $value
     */
    public function clientAppId(?string $value): self
    {
        $this->instance->setClientAppId($value);
        return $this;
    }

    /**
     * Sets dba name field.
     *
     * @param string|null $value
     */
    public function dbaName(?string $value): self
    {
        $this->instance->setDbaName($value);
        return $this;
    }

    /**
     * Sets email field.
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
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
     * Initializes a new Result object.
     */
    public function build(): Result
    {
        return CoreHelper::clone($this->instance);
    }
}
