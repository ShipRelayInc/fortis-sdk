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

class File5 implements \JsonSerializable
{
    /**
     * @var array
     */
    private $fileName = [];

    /**
     * @var array
     */
    private $content = [];

    /**
     * Returns File Name.
     * The file name including the extension
     */
    public function getFileName(): ?string
    {
        if (count($this->fileName) == 0) {
            return null;
        }
        return $this->fileName['value'];
    }

    /**
     * Sets File Name.
     * The file name including the extension
     *
     * @maps file_name
     */
    public function setFileName(?string $fileName): void
    {
        $this->fileName['value'] = $fileName;
    }

    /**
     * Unsets File Name.
     * The file name including the extension
     */
    public function unsetFileName(): void
    {
        $this->fileName = [];
    }

    /**
     * Returns Content.
     * File contents as a base64 encoded string
     */
    public function getContent(): ?string
    {
        if (count($this->content) == 0) {
            return null;
        }
        return $this->content['value'];
    }

    /**
     * Sets Content.
     * File contents as a base64 encoded string
     *
     * @maps content
     */
    public function setContent(?string $content): void
    {
        $this->content['value'] = $content;
    }

    /**
     * Unsets Content.
     * File contents as a base64 encoded string
     */
    public function unsetContent(): void
    {
        $this->content = [];
    }

    /**
     * Converts the File5 object to a human-readable string representation.
     *
     * @return string The string representation of the File5 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'File5',
            [
                'fileName' => $this->getFileName(),
                'content' => $this->getContent(),
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
        if (!empty($this->fileName)) {
            $json['file_name'] = $this->fileName['value'];
        }
        if (!empty($this->content)) {
            $json['content']   = $this->content['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
