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
 * Identity Verification
 */
class IdentityVerification implements \JsonSerializable
{
    /**
     * @var array
     */
    private $dlState = [];

    /**
     * @var array
     */
    private $dlNumber = [];

    /**
     * @var array
     */
    private $dobYear = [];

    /**
     * Returns Dl State.
     * Required for ACH transactions when Driver's License Verification is enabled on the terminal.  Either
     * dl_number + dl_state OR customer_id will need to be passed in this scenario.
     */
    public function getDlState(): ?string
    {
        if (count($this->dlState) == 0) {
            return null;
        }
        return $this->dlState['value'];
    }

    /**
     * Sets Dl State.
     * Required for ACH transactions when Driver's License Verification is enabled on the terminal.  Either
     * dl_number + dl_state OR customer_id will need to be passed in this scenario.
     *
     * @maps dl_state
     */
    public function setDlState(?string $dlState): void
    {
        $this->dlState['value'] = $dlState;
    }

    /**
     * Unsets Dl State.
     * Required for ACH transactions when Driver's License Verification is enabled on the terminal.  Either
     * dl_number + dl_state OR customer_id will need to be passed in this scenario.
     */
    public function unsetDlState(): void
    {
        $this->dlState = [];
    }

    /**
     * Returns Dl Number.
     * Required for ACH transactions when Driver's License Verification is enabled on the terminal.  Either
     * dl_number + dl_state OR customer_id will need to be passed in this scenario.
     */
    public function getDlNumber(): ?string
    {
        if (count($this->dlNumber) == 0) {
            return null;
        }
        return $this->dlNumber['value'];
    }

    /**
     * Sets Dl Number.
     * Required for ACH transactions when Driver's License Verification is enabled on the terminal.  Either
     * dl_number + dl_state OR customer_id will need to be passed in this scenario.
     *
     * @maps dl_number
     */
    public function setDlNumber(?string $dlNumber): void
    {
        $this->dlNumber['value'] = $dlNumber;
    }

    /**
     * Unsets Dl Number.
     * Required for ACH transactions when Driver's License Verification is enabled on the terminal.  Either
     * dl_number + dl_state OR customer_id will need to be passed in this scenario.
     */
    public function unsetDlNumber(): void
    {
        $this->dlNumber = [];
    }

    /**
     * Returns Dob Year.
     * Required for certain ACH transactions where Identity Verification has been enabled for the terminal.
     * Either ssn4 or dob_year will need to be passed in this scenario but NOT BOTH.
     */
    public function getDobYear(): ?string
    {
        if (count($this->dobYear) == 0) {
            return null;
        }
        return $this->dobYear['value'];
    }

    /**
     * Sets Dob Year.
     * Required for certain ACH transactions where Identity Verification has been enabled for the terminal.
     * Either ssn4 or dob_year will need to be passed in this scenario but NOT BOTH.
     *
     * @maps dob_year
     */
    public function setDobYear(?string $dobYear): void
    {
        $this->dobYear['value'] = $dobYear;
    }

    /**
     * Unsets Dob Year.
     * Required for certain ACH transactions where Identity Verification has been enabled for the terminal.
     * Either ssn4 or dob_year will need to be passed in this scenario but NOT BOTH.
     */
    public function unsetDobYear(): void
    {
        $this->dobYear = [];
    }

    /**
     * Converts the IdentityVerification object to a human-readable string representation.
     *
     * @return string The string representation of the IdentityVerification object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'IdentityVerification',
            [
                'dlState' => $this->getDlState(),
                'dlNumber' => $this->getDlNumber(),
                'dobYear' => $this->getDobYear(),
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
        if (!empty($this->dlState)) {
            $json['dl_state']  = $this->dlState['value'];
        }
        if (!empty($this->dlNumber)) {
            $json['dl_number'] = $this->dlNumber['value'];
        }
        if (!empty($this->dobYear)) {
            $json['dob_year']  = $this->dobYear['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
