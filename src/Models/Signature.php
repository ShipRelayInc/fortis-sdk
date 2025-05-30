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

/**
 * Signature Information on `expand`
 */
class Signature implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $signature;

    /**
     * @var string|null
     */
    private $resource;

    /**
     * @var string|null
     */
    private $resourceId;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $createdTs;

    /**
     * @var int|null
     */
    private $modifiedTs;

    /**
     * Returns Signature.
     * Signature
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * Sets Signature.
     * Signature
     *
     * @maps signature
     */
    public function setSignature(?string $signature): void
    {
        $this->signature = $signature;
    }

    /**
     * Returns Resource.
     * Resource
     * >Recurring, Transaction, AccountVault, DeviceTerm
     * >
     */
    public function getResource(): ?string
    {
        return $this->resource;
    }

    /**
     * Sets Resource.
     * Resource
     * >Recurring, Transaction, AccountVault, DeviceTerm
     * >
     *
     * @maps resource
     * @factory \FortisAPILib\Models\ResourceEnum::checkValue
     */
    public function setResource(?string $resource): void
    {
        $this->resource = $resource;
    }

    /**
     * Returns Resource Id.
     * Resource ID
     */
    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    /**
     * Sets Resource Id.
     * Resource ID
     *
     * @maps resource_id
     */
    public function setResourceId(?string $resourceId): void
    {
        $this->resourceId = $resourceId;
    }

    /**
     * Returns Id.
     * Signature ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Signature ID
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Created Ts.
     * Created Time Stamp
     */
    public function getCreatedTs(): ?int
    {
        return $this->createdTs;
    }

    /**
     * Sets Created Ts.
     * Created Time Stamp
     *
     * @maps created_ts
     */
    public function setCreatedTs(?int $createdTs): void
    {
        $this->createdTs = $createdTs;
    }

    /**
     * Returns Modified Ts.
     * Modified Time Stamp
     */
    public function getModifiedTs(): ?int
    {
        return $this->modifiedTs;
    }

    /**
     * Sets Modified Ts.
     * Modified Time Stamp
     *
     * @maps modified_ts
     */
    public function setModifiedTs(?int $modifiedTs): void
    {
        $this->modifiedTs = $modifiedTs;
    }

    /**
     * Converts the Signature object to a human-readable string representation.
     *
     * @return string The string representation of the Signature object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Signature',
            [
                'signature' => $this->signature,
                'resource' => $this->resource,
                'resourceId' => $this->resourceId,
                'id' => $this->id,
                'createdTs' => $this->createdTs,
                'modifiedTs' => $this->modifiedTs,
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
        if (isset($this->signature)) {
            $json['signature']   = $this->signature;
        }
        if (isset($this->resource)) {
            $json['resource']    = ResourceEnum::checkValue($this->resource);
        }
        if (isset($this->resourceId)) {
            $json['resource_id'] = $this->resourceId;
        }
        if (isset($this->id)) {
            $json['id']          = $this->id;
        }
        if (isset($this->createdTs)) {
            $json['created_ts']  = $this->createdTs;
        }
        if (isset($this->modifiedTs)) {
            $json['modified_ts'] = $this->modifiedTs;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
