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
 * Contains device information.
 *
 * Available for supporting EMV 3DS 2.3.1 and later versions.
 */
class Device implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $deviceBindingStatus;

    /**
     * Returns Device Binding Status.
     * Enables the communication of Device Binding Status between the ACS, the DS and the 3DS Requestor.
     * For bound devices (value = 11–14), Device Binding Status also conveys the type of binding that was
     * performed.
     * >01 - Device is not bound by Cardholder
     * >
     * >02 - Not eligible as determined by Issuer
     * >
     * >03 - Pending confirmation by Cardholder
     * >
     * >04 - Cardholder rejected
     * >
     * >05 - Device Binding Status unknown, unavailable, or does not apply
     * >
     * >06 through 10 - Reserved for EMVCo future use (values invalid until defined by EMVCo)
     * >
     * >11 - Device is bound by Cardholder (device is bound using hardware / SIM internal to the Consumer
     * Device. For instance, keys stored in a secure element on the device)
     * >
     * >12 - Device is bound by Cardholder (device is bound using hardware external to the Consumer Device.
     * For example, an external FIDO Authenticator
     * >
     * >13 - Device is bound by Cardholder (device is bound using data that includes dynamically generated
     * data and could include a unique device ID)
     * >
     * >14 - Device is bound by Cardholder (device is bound using static device data that has been obtained
     * from the Consumer Device
     * >
     * >15 - Device is bound by Cardholder (Other method)
     * >
     * >16 through 79 - Reserved for EMVCo future use (values invalid until defined by EMVCo)
     * >
     * >80 through 99 - Reserved for DS use
     * >
     */
    public function getDeviceBindingStatus(): ?string
    {
        return $this->deviceBindingStatus;
    }

    /**
     * Sets Device Binding Status.
     * Enables the communication of Device Binding Status between the ACS, the DS and the 3DS Requestor.
     * For bound devices (value = 11–14), Device Binding Status also conveys the type of binding that was
     * performed.
     * >01 - Device is not bound by Cardholder
     * >
     * >02 - Not eligible as determined by Issuer
     * >
     * >03 - Pending confirmation by Cardholder
     * >
     * >04 - Cardholder rejected
     * >
     * >05 - Device Binding Status unknown, unavailable, or does not apply
     * >
     * >06 through 10 - Reserved for EMVCo future use (values invalid until defined by EMVCo)
     * >
     * >11 - Device is bound by Cardholder (device is bound using hardware / SIM internal to the Consumer
     * Device. For instance, keys stored in a secure element on the device)
     * >
     * >12 - Device is bound by Cardholder (device is bound using hardware external to the Consumer Device.
     * For example, an external FIDO Authenticator
     * >
     * >13 - Device is bound by Cardholder (device is bound using data that includes dynamically generated
     * data and could include a unique device ID)
     * >
     * >14 - Device is bound by Cardholder (device is bound using static device data that has been obtained
     * from the Consumer Device
     * >
     * >15 - Device is bound by Cardholder (Other method)
     * >
     * >16 through 79 - Reserved for EMVCo future use (values invalid until defined by EMVCo)
     * >
     * >80 through 99 - Reserved for DS use
     * >
     *
     * @maps device_binding_status
     * @factory \FortisAPILib\Models\DeviceBindingStatusEnum::checkValue
     */
    public function setDeviceBindingStatus(?string $deviceBindingStatus): void
    {
        $this->deviceBindingStatus = $deviceBindingStatus;
    }

    /**
     * Converts the Device object to a human-readable string representation.
     *
     * @return string The string representation of the Device object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Device',
            [
                'deviceBindingStatus' => $this->deviceBindingStatus,
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
        if (isset($this->deviceBindingStatus)) {
            $json['device_binding_status'] = DeviceBindingStatusEnum::checkValue($this->deviceBindingStatus);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
