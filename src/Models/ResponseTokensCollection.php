<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use FortisAPILib\ApiHelper;
use stdClass;

class ResponseTokensCollection implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $type = Type89Enum::TOKENSCOLLECTION;

    /**
     * @var List15[]|null
     */
    private $list;

    /**
     * @var Links|null
     */
    private $links;

    /**
     * @var Pagination|null
     */
    private $pagination;

    /**
     * @var Sort|null
     */
    private $sort;

    /**
     * Returns Type.
     * Resource Type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Resource Type
     *
     * @maps type
     * @factory \FortisAPILib\Models\Type89Enum::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns List.
     * Resource Members
     *
     * @return List15[]|null
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * Sets List.
     * Resource Members
     *
     * @maps list
     *
     * @param List15[]|null $list
     */
    public function setList(?array $list): void
    {
        $this->list = $list;
    }

    /**
     * Returns Links.
     * Pagination page links
     */
    public function getLinks(): ?Links
    {
        return $this->links;
    }

    /**
     * Sets Links.
     * Pagination page links
     *
     * @maps links
     */
    public function setLinks(?Links $links): void
    {
        $this->links = $links;
    }

    /**
     * Returns Pagination.
     * Pagination info
     */
    public function getPagination(): ?Pagination
    {
        return $this->pagination;
    }

    /**
     * Sets Pagination.
     * Pagination info
     *
     * @maps pagination
     */
    public function setPagination(?Pagination $pagination): void
    {
        $this->pagination = $pagination;
    }

    /**
     * Returns Sort.
     * Sort information used on the results
     */
    public function getSort(): ?Sort
    {
        return $this->sort;
    }

    /**
     * Sets Sort.
     * Sort information used on the results
     *
     * @maps sort
     */
    public function setSort(?Sort $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * Converts the ResponseTokensCollection object to a human-readable string representation.
     *
     * @return string The string representation of the ResponseTokensCollection object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ResponseTokensCollection',
            [
                'type' => $this->type,
                'list' => $this->list,
                'links' => $this->links,
                'pagination' => $this->pagination,
                'sort' => $this->sort,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->type)) {
            $json['type']       = Type89Enum::checkValue($this->type);
        }
        if (isset($this->list)) {
            $json['list']       = $this->list;
        }
        if (isset($this->links)) {
            $json['links']      = $this->links;
        }
        if (isset($this->pagination)) {
            $json['pagination'] = $this->pagination;
        }
        if (isset($this->sort)) {
            $json['sort']       = $this->sort;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
