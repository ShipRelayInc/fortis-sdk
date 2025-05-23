<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\V1TagsRequest;

/**
 * Builder for model V1TagsRequest
 *
 * @see V1TagsRequest
 */
class V1TagsRequestBuilder
{
    /**
     * @var V1TagsRequest
     */
    private $instance;

    private function __construct(V1TagsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new V1 Tags Request Builder object.
     *
     * @param string $locationId
     * @param string $title
     */
    public static function init(string $locationId, string $title): self
    {
        return new self(new V1TagsRequest($locationId, $title));
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
     * Initializes a new V1 Tags Request object.
     */
    public function build(): V1TagsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
