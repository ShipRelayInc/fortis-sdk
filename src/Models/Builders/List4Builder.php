<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Changelog;
use FortisAPILib\Models\CreatedUser;
use FortisAPILib\Models\List4;
use FortisAPILib\Models\Location;
use FortisAPILib\Models\ReasonCode;
use FortisAPILib\Models\Signature;
use FortisAPILib\Models\Terminal;

/**
 * Builder for model List4
 *
 * @see List4
 */
class List4Builder
{
    /**
     * @var List4
     */
    private $instance;

    private function __construct(List4 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List 4 Builder object.
     */
    public static function init(): self
    {
        return new self(new List4());
    }

    /**
     * Sets location id field.
     *
     * @param string|null $value
     */
    public function locationId(?string $value): self
    {
        $this->instance->setLocationId($value);
        return $this;
    }

    /**
     * Sets terminal id field.
     *
     * @param string|null $value
     */
    public function terminalId(?string $value): self
    {
        $this->instance->setTerminalId($value);
        return $this;
    }

    /**
     * Sets require signature field.
     *
     * @param bool|null $value
     */
    public function requireSignature(?bool $value): self
    {
        $this->instance->setRequireSignature($value);
        return $this;
    }

    /**
     * Sets device term api id field.
     *
     * @param string|null $value
     */
    public function deviceTermApiId(?string $value): self
    {
        $this->instance->setDeviceTermApiId($value);
        return $this;
    }

    /**
     * Unsets device term api id field.
     */
    public function unsetDeviceTermApiId(): self
    {
        $this->instance->unsetDeviceTermApiId();
        return $this;
    }

    /**
     * Sets terms conditions field.
     *
     * @param string|null $value
     */
    public function termsConditions(?string $value): self
    {
        $this->instance->setTermsConditions($value);
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
     * Sets reason code id field.
     *
     * @param int|null $value
     */
    public function reasonCodeId(?int $value): self
    {
        $this->instance->setReasonCodeId($value);
        return $this;
    }

    /**
     * Sets signature field.
     *
     * @param Signature|null $value
     */
    public function signature(?Signature $value): self
    {
        $this->instance->setSignature($value);
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
     * Sets created user field.
     *
     * @param CreatedUser|null $value
     */
    public function createdUser(?CreatedUser $value): self
    {
        $this->instance->setCreatedUser($value);
        return $this;
    }

    /**
     * Sets location field.
     *
     * @param Location|null $value
     */
    public function location(?Location $value): self
    {
        $this->instance->setLocation($value);
        return $this;
    }

    /**
     * Sets terminal field.
     *
     * @param Terminal|null $value
     */
    public function terminal(?Terminal $value): self
    {
        $this->instance->setTerminal($value);
        return $this;
    }

    /**
     * Sets changelogs field.
     *
     * @param Changelog[]|null $value
     */
    public function changelogs(?array $value): self
    {
        $this->instance->setChangelogs($value);
        return $this;
    }

    /**
     * Sets reason code field.
     *
     * @param ReasonCode|null $value
     */
    public function reasonCode(?ReasonCode $value): self
    {
        $this->instance->setReasonCode($value);
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
     * Initializes a new List 4 object.
     */
    public function build(): List4
    {
        return CoreHelper::clone($this->instance);
    }
}
