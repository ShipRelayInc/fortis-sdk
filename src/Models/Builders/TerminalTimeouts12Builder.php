<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\TerminalTimeouts12;

/**
 * Builder for model TerminalTimeouts12
 *
 * @see TerminalTimeouts12
 */
class TerminalTimeouts12Builder
{
    /**
     * @var TerminalTimeouts12
     */
    private $instance;

    private function __construct(TerminalTimeouts12 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Terminal Timeouts 12 Builder object.
     */
    public static function init(): self
    {
        return new self(new TerminalTimeouts12());
    }

    /**
     * Sets card entry timeout field.
     *
     * @param int|null $value
     */
    public function cardEntryTimeout(?int $value): self
    {
        $this->instance->setCardEntryTimeout($value);
        return $this;
    }

    /**
     * Unsets card entry timeout field.
     */
    public function unsetCardEntryTimeout(): self
    {
        $this->instance->unsetCardEntryTimeout();
        return $this;
    }

    /**
     * Sets device terms prompt timeout field.
     *
     * @param int|null $value
     */
    public function deviceTermsPromptTimeout(?int $value): self
    {
        $this->instance->setDeviceTermsPromptTimeout($value);
        return $this;
    }

    /**
     * Unsets device terms prompt timeout field.
     */
    public function unsetDeviceTermsPromptTimeout(): self
    {
        $this->instance->unsetDeviceTermsPromptTimeout();
        return $this;
    }

    /**
     * Sets overall timeout field.
     *
     * @param int|null $value
     */
    public function overallTimeout(?int $value): self
    {
        $this->instance->setOverallTimeout($value);
        return $this;
    }

    /**
     * Unsets overall timeout field.
     */
    public function unsetOverallTimeout(): self
    {
        $this->instance->unsetOverallTimeout();
        return $this;
    }

    /**
     * Sets pin entry timeout field.
     *
     * @param int|null $value
     */
    public function pinEntryTimeout(?int $value): self
    {
        $this->instance->setPinEntryTimeout($value);
        return $this;
    }

    /**
     * Unsets pin entry timeout field.
     */
    public function unsetPinEntryTimeout(): self
    {
        $this->instance->unsetPinEntryTimeout();
        return $this;
    }

    /**
     * Sets signature input timeout field.
     *
     * @param int|null $value
     */
    public function signatureInputTimeout(?int $value): self
    {
        $this->instance->setSignatureInputTimeout($value);
        return $this;
    }

    /**
     * Unsets signature input timeout field.
     */
    public function unsetSignatureInputTimeout(): self
    {
        $this->instance->unsetSignatureInputTimeout();
        return $this;
    }

    /**
     * Sets signature submit timeout field.
     *
     * @param int|null $value
     */
    public function signatureSubmitTimeout(?int $value): self
    {
        $this->instance->setSignatureSubmitTimeout($value);
        return $this;
    }

    /**
     * Unsets signature submit timeout field.
     */
    public function unsetSignatureSubmitTimeout(): self
    {
        $this->instance->unsetSignatureSubmitTimeout();
        return $this;
    }

    /**
     * Sets status display time field.
     *
     * @param int|null $value
     */
    public function statusDisplayTime(?int $value): self
    {
        $this->instance->setStatusDisplayTime($value);
        return $this;
    }

    /**
     * Unsets status display time field.
     */
    public function unsetStatusDisplayTime(): self
    {
        $this->instance->unsetStatusDisplayTime();
        return $this;
    }

    /**
     * Sets tip cashback timeout field.
     *
     * @param int|null $value
     */
    public function tipCashbackTimeout(?int $value): self
    {
        $this->instance->setTipCashbackTimeout($value);
        return $this;
    }

    /**
     * Unsets tip cashback timeout field.
     */
    public function unsetTipCashbackTimeout(): self
    {
        $this->instance->unsetTipCashbackTimeout();
        return $this;
    }

    /**
     * Sets transaction timeout field.
     *
     * @param int|null $value
     */
    public function transactionTimeout(?int $value): self
    {
        $this->instance->setTransactionTimeout($value);
        return $this;
    }

    /**
     * Unsets transaction timeout field.
     */
    public function unsetTransactionTimeout(): self
    {
        $this->instance->unsetTransactionTimeout();
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
     * Initializes a new Terminal Timeouts 12 object.
     */
    public function build(): TerminalTimeouts12
    {
        return CoreHelper::clone($this->instance);
    }
}
