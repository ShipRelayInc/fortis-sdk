<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\EmailBlacklist;

/**
 * Builder for model EmailBlacklist
 *
 * @see EmailBlacklist
 */
class EmailBlacklistBuilder
{
    /**
     * @var EmailBlacklist
     */
    private $instance;

    private function __construct(EmailBlacklist $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Email Blacklist Builder object.
     */
    public static function init(): self
    {
        return new self(new EmailBlacklist());
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
     * Sets is Blacklisted field.
     *
     * @param bool|null $value
     */
    public function isBlacklisted(?bool $value): self
    {
        $this->instance->setIsBlacklisted($value);
        return $this;
    }

    /**
     * Sets detail field.
     *
     * @param bool|null $value
     */
    public function detail(?bool $value): self
    {
        $this->instance->setDetail($value);
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
     * Unsets created ts field.
     */
    public function unsetCreatedTs(): self
    {
        $this->instance->unsetCreatedTs();
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
     * Initializes a new Email Blacklist object.
     */
    public function build(): EmailBlacklist
    {
        return CoreHelper::clone($this->instance);
    }
}
