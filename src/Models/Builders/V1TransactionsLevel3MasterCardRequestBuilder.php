<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Level3Data5;
use FortisAPILib\Models\V1TransactionsLevel3MasterCardRequest;

/**
 * Builder for model V1TransactionsLevel3MasterCardRequest
 *
 * @see V1TransactionsLevel3MasterCardRequest
 */
class V1TransactionsLevel3MasterCardRequestBuilder
{
    /**
     * @var V1TransactionsLevel3MasterCardRequest
     */
    private $instance;

    private function __construct(V1TransactionsLevel3MasterCardRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new V1 Transactions Level 3 Master Card Request Builder object.
     *
     * @param Level3Data5 $level3Data
     */
    public static function init(Level3Data5 $level3Data): self
    {
        return new self(new V1TransactionsLevel3MasterCardRequest($level3Data));
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
     * Initializes a new V1 Transactions Level 3 Master Card Request object.
     */
    public function build(): V1TransactionsLevel3MasterCardRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
