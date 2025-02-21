<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\User;

/**
 * Builder for model User
 *
 * @see User
 */
class UserBuilder
{
    /**
     * @var User
     */
    private $instance;

    private function __construct(User $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new User Builder object.
     */
    public static function init(): self
    {
        return new self(new User());
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
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
        return $this;
    }

    /**
     * Sets username field.
     *
     * @param string|null $value
     */
    public function username(?string $value): self
    {
        $this->instance->setUsername($value);
        return $this;
    }

    /**
     * Unsets username field.
     */
    public function unsetUsername(): self
    {
        $this->instance->unsetUsername();
        return $this;
    }

    /**
     * Sets first name field.
     *
     * @param string|null $value
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Unsets first name field.
     */
    public function unsetFirstName(): self
    {
        $this->instance->unsetFirstName();
        return $this;
    }

    /**
     * Sets last name field.
     *
     * @param string|null $value
     */
    public function lastName(?string $value): self
    {
        $this->instance->setLastName($value);
        return $this;
    }

    /**
     * Unsets last name field.
     */
    public function unsetLastName(): self
    {
        $this->instance->unsetLastName();
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
     * Initializes a new User object.
     */
    public function build(): User
    {
        return CoreHelper::clone($this->instance);
    }
}
