<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data16;
use FortisAPILib\Models\ResponsePaymentCardReaderToken;

/**
 * Builder for model ResponsePaymentCardReaderToken
 *
 * @see ResponsePaymentCardReaderToken
 */
class ResponsePaymentCardReaderTokenBuilder
{
    /**
     * @var ResponsePaymentCardReaderToken
     */
    private $instance;

    private function __construct(ResponsePaymentCardReaderToken $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Response Payment Card Reader Token Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponsePaymentCardReaderToken());
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets data field.
     *
     * @param Data16|null $value
     */
    public function data(?Data16 $value): self
    {
        $this->instance->setData($value);
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
     * Initializes a new Response Payment Card Reader Token object.
     */
    public function build(): ResponsePaymentCardReaderToken
    {
        return CoreHelper::clone($this->instance);
    }
}
