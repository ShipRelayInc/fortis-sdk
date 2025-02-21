<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\BrowserInformation;

/**
 * Builder for model BrowserInformation
 *
 * @see BrowserInformation
 */
class BrowserInformationBuilder
{
    /**
     * @var BrowserInformation
     */
    private $instance;

    private function __construct(BrowserInformation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Browser Information Builder object.
     */
    public static function init(): self
    {
        return new self(new BrowserInformation());
    }

    /**
     * Sets browser accept header field.
     *
     * @param string|null $value
     */
    public function browserAcceptHeader(?string $value): self
    {
        $this->instance->setBrowserAcceptHeader($value);
        return $this;
    }

    /**
     * Sets browser java enabled field.
     *
     * @param bool|null $value
     */
    public function browserJavaEnabled(?bool $value): self
    {
        $this->instance->setBrowserJavaEnabled($value);
        return $this;
    }

    /**
     * Sets browser language field.
     *
     * @param string|null $value
     */
    public function browserLanguage(?string $value): self
    {
        $this->instance->setBrowserLanguage($value);
        return $this;
    }

    /**
     * Sets browser color depth field.
     *
     * @param string|null $value
     */
    public function browserColorDepth(?string $value): self
    {
        $this->instance->setBrowserColorDepth($value);
        return $this;
    }

    /**
     * Sets browser screen height field.
     *
     * @param int|null $value
     */
    public function browserScreenHeight(?int $value): self
    {
        $this->instance->setBrowserScreenHeight($value);
        return $this;
    }

    /**
     * Sets browser screen width field.
     *
     * @param int|null $value
     */
    public function browserScreenWidth(?int $value): self
    {
        $this->instance->setBrowserScreenWidth($value);
        return $this;
    }

    /**
     * Sets browser tz field.
     *
     * @param int|null $value
     */
    public function browserTz(?int $value): self
    {
        $this->instance->setBrowserTz($value);
        return $this;
    }

    /**
     * Sets browser user agent field.
     *
     * @param string|null $value
     */
    public function browserUserAgent(?string $value): self
    {
        $this->instance->setBrowserUserAgent($value);
        return $this;
    }

    /**
     * Sets challenge window size field.
     *
     * @param string|null $value
     */
    public function challengeWindowSize(?string $value): self
    {
        $this->instance->setChallengeWindowSize($value);
        return $this;
    }

    /**
     * Sets browser javascript enabled field.
     *
     * @param bool|null $value
     */
    public function browserJavascriptEnabled(?bool $value): self
    {
        $this->instance->setBrowserJavascriptEnabled($value);
        return $this;
    }

    /**
     * Sets accept language field.
     *
     * @param string[]|null $value
     */
    public function acceptLanguage(?array $value): self
    {
        $this->instance->setAcceptLanguage($value);
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
     * Initializes a new Browser Information object.
     */
    public function build(): BrowserInformation
    {
        return CoreHelper::clone($this->instance);
    }
}
