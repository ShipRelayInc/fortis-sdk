<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Links;
use FortisAPILib\Models\List1;
use FortisAPILib\Models\Pagination;
use FortisAPILib\Models\ResponseContactsCollection;
use FortisAPILib\Models\Sort;

/**
 * Builder for model ResponseContactsCollection
 *
 * @see ResponseContactsCollection
 */
class ResponseContactsCollectionBuilder
{
    /**
     * @var ResponseContactsCollection
     */
    private $instance;

    private function __construct(ResponseContactsCollection $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Response Contacts Collection Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseContactsCollection());
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
     * Sets list field.
     *
     * @param List1[]|null $value
     */
    public function list(?array $value): self
    {
        $this->instance->setList($value);
        return $this;
    }

    /**
     * Sets links field.
     *
     * @param Links|null $value
     */
    public function links(?Links $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Sets pagination field.
     *
     * @param Pagination|null $value
     */
    public function pagination(?Pagination $value): self
    {
        $this->instance->setPagination($value);
        return $this;
    }

    /**
     * Sets sort field.
     *
     * @param Sort|null $value
     */
    public function sort(?Sort $value): self
    {
        $this->instance->setSort($value);
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
     * Initializes a new Response Contacts Collection object.
     */
    public function build(): ResponseContactsCollection
    {
        return CoreHelper::clone($this->instance);
    }
}
