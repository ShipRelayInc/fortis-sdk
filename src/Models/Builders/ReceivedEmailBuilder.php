<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\ReceivedEmail;

/**
 * Builder for model ReceivedEmail
 *
 * @see ReceivedEmail
 */
class ReceivedEmailBuilder
{
    /**
     * @var ReceivedEmail
     */
    private $instance;

    private function __construct(ReceivedEmail $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Received Email Builder object.
     */
    public static function init(): self
    {
        return new self(new ReceivedEmail());
    }

    /**
     * Sets subject field.
     *
     * @param string|null $value
     */
    public function subject(?string $value): self
    {
        $this->instance->setSubject($value);
        return $this;
    }

    /**
     * Sets body field.
     *
     * @param string|null $value
     */
    public function body(?string $value): self
    {
        $this->instance->setBody($value);
        return $this;
    }

    /**
     * Sets source address field.
     *
     * @param string|null $value
     */
    public function sourceAddress(?string $value): self
    {
        $this->instance->setSourceAddress($value);
        return $this;
    }

    /**
     * Sets return path field.
     *
     * @param string|null $value
     */
    public function returnPath(?string $value): self
    {
        $this->instance->setReturnPath($value);
        return $this;
    }

    /**
     * Sets provider id field.
     *
     * @param string|null $value
     */
    public function providerId(?string $value): self
    {
        $this->instance->setProviderId($value);
        return $this;
    }

    /**
     * Unsets provider id field.
     */
    public function unsetProviderId(): self
    {
        $this->instance->unsetProviderId();
        return $this;
    }

    /**
     * Sets domain id field.
     *
     * @param string|null $value
     */
    public function domainId(?string $value): self
    {
        $this->instance->setDomainId($value);
        return $this;
    }

    /**
     * Unsets domain id field.
     */
    public function unsetDomainId(): self
    {
        $this->instance->unsetDomainId();
        return $this;
    }

    /**
     * Sets reason sent field.
     *
     * @param string|null $value
     */
    public function reasonSent(?string $value): self
    {
        $this->instance->setReasonSent($value);
        return $this;
    }

    /**
     * Unsets reason sent field.
     */
    public function unsetReasonSent(): self
    {
        $this->instance->unsetReasonSent();
        return $this;
    }

    /**
     * Sets reason model field.
     *
     * @param string|null $value
     */
    public function reasonModel(?string $value): self
    {
        $this->instance->setReasonModel($value);
        return $this;
    }

    /**
     * Unsets reason model field.
     */
    public function unsetReasonModel(): self
    {
        $this->instance->unsetReasonModel();
        return $this;
    }

    /**
     * Sets reason model id field.
     *
     * @param string|null $value
     */
    public function reasonModelId(?string $value): self
    {
        $this->instance->setReasonModelId($value);
        return $this;
    }

    /**
     * Unsets reason model id field.
     */
    public function unsetReasonModelId(): self
    {
        $this->instance->unsetReasonModelId();
        return $this;
    }

    /**
     * Sets reply to field.
     *
     * @param string|null $value
     */
    public function replyTo(?string $value): self
    {
        $this->instance->setReplyTo($value);
        return $this;
    }

    /**
     * Unsets reply to field.
     */
    public function unsetReplyTo(): self
    {
        $this->instance->unsetReplyTo();
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
     * Initializes a new Received Email object.
     */
    public function build(): ReceivedEmail
    {
        return CoreHelper::clone($this->instance);
    }
}
