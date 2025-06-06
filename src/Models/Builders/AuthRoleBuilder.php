<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\AuthRole;

/**
 * Builder for model AuthRole
 *
 * @see AuthRole
 */
class AuthRoleBuilder
{
    /**
     * @var AuthRole
     */
    private $instance;

    private function __construct(AuthRole $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Auth Role Builder object.
     */
    public static function init(): self
    {
        return new self(new AuthRole());
    }

    /**
     * Sets user id field.
     *
     * @param string|null $value
     */
    public function userId(?string $value): self
    {
        $this->instance->setUserId($value);
        return $this;
    }

    /**
     * Sets auth role code field.
     *
     * @param int|null $value
     */
    public function authRoleCode(?int $value): self
    {
        $this->instance->setAuthRoleCode($value);
        return $this;
    }

    /**
     * Sets code field.
     *
     * @param int|null $value
     */
    public function code(?int $value): self
    {
        $this->instance->setCode($value);
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
     * Unsets created user id field.
     */
    public function unsetCreatedUserId(): self
    {
        $this->instance->unsetCreatedUserId();
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
     * Unsets modified user id field.
     */
    public function unsetModifiedUserId(): self
    {
        $this->instance->unsetModifiedUserId();
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
     * Initializes a new Auth Role object.
     */
    public function build(): AuthRole
    {
        return CoreHelper::clone($this->instance);
    }
}
