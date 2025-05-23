<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\TerminalCvm;

/**
 * Builder for model TerminalCvm
 *
 * @see TerminalCvm
 */
class TerminalCvmBuilder
{
    /**
     * @var TerminalCvm
     */
    private $instance;

    private function __construct(TerminalCvm $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Terminal Cvm Builder object.
     */
    public static function init(): self
    {
        return new self(new TerminalCvm());
    }

    /**
     * Sets terminal manufacturer code field.
     *
     * @param float|null $value
     */
    public function terminalManufacturerCode(?float $value): self
    {
        $this->instance->setTerminalManufacturerCode($value);
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
     * Sets contact data field.
     *
     * @param string|null $value
     */
    public function contactData(?string $value): self
    {
        $this->instance->setContactData($value);
        return $this;
    }

    /**
     * Unsets contact data field.
     */
    public function unsetContactData(): self
    {
        $this->instance->unsetContactData();
        return $this;
    }

    /**
     * Sets contactless data field.
     *
     * @param string|null $value
     */
    public function contactlessData(?string $value): self
    {
        $this->instance->setContactlessData($value);
        return $this;
    }

    /**
     * Unsets contactless data field.
     */
    public function unsetContactlessData(): self
    {
        $this->instance->unsetContactlessData();
        return $this;
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets created ts field.
     *
     * @param int|null $value
     */
    public function createdTs(?int $value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Sets modified ts field.
     *
     * @param int|null $value
     */
    public function modifiedTs(?int $value): self
    {
        $this->instance->setModifiedTs($value);
        return $this;
    }

    /**
     * Sets created user id field.
     *
     * @param string|null $value
     */
    public function createdUserId(?string $value): self
    {
        $this->instance->setCreatedUserId($value);
        return $this;
    }

    /**
     * Sets modified user id field.
     *
     * @param string|null $value
     */
    public function modifiedUserId(?string $value): self
    {
        $this->instance->setModifiedUserId($value);
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
     * Initializes a new Terminal Cvm object.
     */
    public function build(): TerminalCvm
    {
        return CoreHelper::clone($this->instance);
    }
}
