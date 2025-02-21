<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Document;

/**
 * Builder for model Document
 *
 * @see Document
 */
class DocumentBuilder
{
    /**
     * @var Document
     */
    private $instance;

    private function __construct(Document $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Document Builder object.
     *
     * @param string $documentName
     * @param string $documentData
     * @param string $mimeType
     */
    public static function init(string $documentName, string $documentData, string $mimeType): self
    {
        return new self(new Document($documentName, $documentData, $mimeType));
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
     * Initializes a new Document object.
     */
    public function build(): Document
    {
        return CoreHelper::clone($this->instance);
    }
}
