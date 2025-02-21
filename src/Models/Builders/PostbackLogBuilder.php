<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\PostbackLog;

/**
 * Builder for model PostbackLog
 *
 * @see PostbackLog
 */
class PostbackLogBuilder
{
    /**
     * @var PostbackLog
     */
    private $instance;

    private function __construct(PostbackLog $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Postback Log Builder object.
     */
    public static function init(): self
    {
        return new self(new PostbackLog());
    }

    /**
     * Sets postback status id field.
     *
     * @param int|null $value
     */
    public function postbackStatusId(?int $value): self
    {
        $this->instance->setPostbackStatusId($value);
        return $this;
    }

    /**
     * Unsets postback status id field.
     */
    public function unsetPostbackStatusId(): self
    {
        $this->instance->unsetPostbackStatusId();
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
     * Sets postback config id field.
     *
     * @param string|null $value
     */
    public function postbackConfigId(?string $value): self
    {
        $this->instance->setPostbackConfigId($value);
        return $this;
    }

    /**
     * Sets changelog id field.
     *
     * @param string|null $value
     */
    public function changelogId(?string $value): self
    {
        $this->instance->setChangelogId($value);
        return $this;
    }

    /**
     * Sets http verb field.
     *
     * @param string|null $value
     */
    public function httpVerb(?string $value): self
    {
        $this->instance->setHttpVerb($value);
        return $this;
    }

    /**
     * Unsets http verb field.
     */
    public function unsetHttpVerb(): self
    {
        $this->instance->unsetHttpVerb();
        return $this;
    }

    /**
     * Sets next run ts field.
     *
     * @param int|null $value
     */
    public function nextRunTs(?int $value): self
    {
        $this->instance->setNextRunTs($value);
        return $this;
    }

    /**
     * Unsets next run ts field.
     */
    public function unsetNextRunTs(): self
    {
        $this->instance->unsetNextRunTs();
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
     * Sets model field.
     *
     * @param string|null $value
     */
    public function model(?string $value): self
    {
        $this->instance->setModel($value);
        return $this;
    }

    /**
     * Unsets model field.
     */
    public function unsetModel(): self
    {
        $this->instance->unsetModel();
        return $this;
    }

    /**
     * Sets model id field.
     *
     * @param string|null $value
     */
    public function modelId(?string $value): self
    {
        $this->instance->setModelId($value);
        return $this;
    }

    /**
     * Unsets model id field.
     */
    public function unsetModelId(): self
    {
        $this->instance->unsetModelId();
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
     * Initializes a new Postback Log object.
     */
    public function build(): PostbackLog
    {
        return CoreHelper::clone($this->instance);
    }
}
