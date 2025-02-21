<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Changelog;
use FortisAPILib\Models\CreatedUser;
use FortisAPILib\Models\List13;
use FortisAPILib\Models\Location;
use FortisAPILib\Models\TerminalApplication;
use FortisAPILib\Models\TerminalCvm;
use FortisAPILib\Models\TerminalManufacturer;
use FortisAPILib\Models\TerminalRouter;
use FortisAPILib\Models\TerminalTimeouts;
use FortisAPILib\Models\TipPercents;

/**
 * Builder for model List13
 *
 * @see List13
 */
class List13Builder
{
    /**
     * @var List13
     */
    private $instance;

    private function __construct(List13 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List 13 Builder object.
     */
    public static function init(): self
    {
        return new self(new List13());
    }

    /**
     * Sets location id field.
     *
     * @param string|null $value
     */
    public function locationId(?string $value): self
    {
        $this->instance->setLocationId($value);
        return $this;
    }

    /**
     * Sets default product transaction id field.
     *
     * @param string|null $value
     */
    public function defaultProductTransactionId(?string $value): self
    {
        $this->instance->setDefaultProductTransactionId($value);
        return $this;
    }

    /**
     * Unsets default product transaction id field.
     */
    public function unsetDefaultProductTransactionId(): self
    {
        $this->instance->unsetDefaultProductTransactionId();
        return $this;
    }

    /**
     * Sets terminal application id field.
     *
     * @param string|null $value
     */
    public function terminalApplicationId(?string $value): self
    {
        $this->instance->setTerminalApplicationId($value);
        return $this;
    }

    /**
     * Sets terminal cvm id field.
     *
     * @param string|null $value
     */
    public function terminalCvmId(?string $value): self
    {
        $this->instance->setTerminalCvmId($value);
        return $this;
    }

    /**
     * Unsets terminal cvm id field.
     */
    public function unsetTerminalCvmId(): self
    {
        $this->instance->unsetTerminalCvmId();
        return $this;
    }

    /**
     * Sets terminal manufacturer code field.
     *
     * @param string|null $value
     */
    public function terminalManufacturerCode(?string $value): self
    {
        $this->instance->setTerminalManufacturerCode($value);
        return $this;
    }

    /**
     * Sets title field.
     *
     * @param string|null $value
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Sets mac address field.
     *
     * @param string|null $value
     */
    public function macAddress(?string $value): self
    {
        $this->instance->setMacAddress($value);
        return $this;
    }

    /**
     * Unsets mac address field.
     */
    public function unsetMacAddress(): self
    {
        $this->instance->unsetMacAddress();
        return $this;
    }

    /**
     * Sets local ip address field.
     *
     * @param string|null $value
     */
    public function localIpAddress(?string $value): self
    {
        $this->instance->setLocalIpAddress($value);
        return $this;
    }

    /**
     * Sets port field.
     *
     * @param int|null $value
     */
    public function port(?int $value): self
    {
        $this->instance->setPort($value);
        return $this;
    }

    /**
     * Sets serial number field.
     *
     * @param string|null $value
     */
    public function serialNumber(?string $value): self
    {
        $this->instance->setSerialNumber($value);
        return $this;
    }

    /**
     * Sets terminal number field.
     *
     * @param string|null $value
     */
    public function terminalNumber(?string $value): self
    {
        $this->instance->setTerminalNumber($value);
        return $this;
    }

    /**
     * Sets terminal timeouts field.
     *
     * @param TerminalTimeouts|null $value
     */
    public function terminalTimeouts(?TerminalTimeouts $value): self
    {
        $this->instance->setTerminalTimeouts($value);
        return $this;
    }

    /**
     * Sets tip percents field.
     *
     * @param TipPercents|null $value
     */
    public function tipPercents(?TipPercents $value): self
    {
        $this->instance->setTipPercents($value);
        return $this;
    }

    /**
     * Sets location api id field.
     *
     * @param string|null $value
     */
    public function locationApiId(?string $value): self
    {
        $this->instance->setLocationApiId($value);
        return $this;
    }

    /**
     * Unsets location api id field.
     */
    public function unsetLocationApiId(): self
    {
        $this->instance->unsetLocationApiId();
        return $this;
    }

    /**
     * Sets terminal api id field.
     *
     * @param string|null $value
     */
    public function terminalApiId(?string $value): self
    {
        $this->instance->setTerminalApiId($value);
        return $this;
    }

    /**
     * Unsets terminal api id field.
     */
    public function unsetTerminalApiId(): self
    {
        $this->instance->unsetTerminalApiId();
        return $this;
    }

    /**
     * Sets header line 1 field.
     *
     * @param string|null $value
     */
    public function headerLine1(?string $value): self
    {
        $this->instance->setHeaderLine1($value);
        return $this;
    }

    /**
     * Unsets header line 1 field.
     */
    public function unsetHeaderLine1(): self
    {
        $this->instance->unsetHeaderLine1();
        return $this;
    }

    /**
     * Sets header line 2 field.
     *
     * @param string|null $value
     */
    public function headerLine2(?string $value): self
    {
        $this->instance->setHeaderLine2($value);
        return $this;
    }

    /**
     * Unsets header line 2 field.
     */
    public function unsetHeaderLine2(): self
    {
        $this->instance->unsetHeaderLine2();
        return $this;
    }

    /**
     * Sets header line 3 field.
     *
     * @param string|null $value
     */
    public function headerLine3(?string $value): self
    {
        $this->instance->setHeaderLine3($value);
        return $this;
    }

    /**
     * Unsets header line 3 field.
     */
    public function unsetHeaderLine3(): self
    {
        $this->instance->unsetHeaderLine3();
        return $this;
    }

    /**
     * Sets header line 4 field.
     *
     * @param string|null $value
     */
    public function headerLine4(?string $value): self
    {
        $this->instance->setHeaderLine4($value);
        return $this;
    }

    /**
     * Unsets header line 4 field.
     */
    public function unsetHeaderLine4(): self
    {
        $this->instance->unsetHeaderLine4();
        return $this;
    }

    /**
     * Sets header line 5 field.
     *
     * @param string|null $value
     */
    public function headerLine5(?string $value): self
    {
        $this->instance->setHeaderLine5($value);
        return $this;
    }

    /**
     * Unsets header line 5 field.
     */
    public function unsetHeaderLine5(): self
    {
        $this->instance->unsetHeaderLine5();
        return $this;
    }

    /**
     * Sets trailer line 1 field.
     *
     * @param string|null $value
     */
    public function trailerLine1(?string $value): self
    {
        $this->instance->setTrailerLine1($value);
        return $this;
    }

    /**
     * Unsets trailer line 1 field.
     */
    public function unsetTrailerLine1(): self
    {
        $this->instance->unsetTrailerLine1();
        return $this;
    }

    /**
     * Sets trailer line 2 field.
     *
     * @param string|null $value
     */
    public function trailerLine2(?string $value): self
    {
        $this->instance->setTrailerLine2($value);
        return $this;
    }

    /**
     * Unsets trailer line 2 field.
     */
    public function unsetTrailerLine2(): self
    {
        $this->instance->unsetTrailerLine2();
        return $this;
    }

    /**
     * Sets trailer line 3 field.
     *
     * @param string|null $value
     */
    public function trailerLine3(?string $value): self
    {
        $this->instance->setTrailerLine3($value);
        return $this;
    }

    /**
     * Unsets trailer line 3 field.
     */
    public function unsetTrailerLine3(): self
    {
        $this->instance->unsetTrailerLine3();
        return $this;
    }

    /**
     * Sets trailer line 4 field.
     *
     * @param string|null $value
     */
    public function trailerLine4(?string $value): self
    {
        $this->instance->setTrailerLine4($value);
        return $this;
    }

    /**
     * Unsets trailer line 4 field.
     */
    public function unsetTrailerLine4(): self
    {
        $this->instance->unsetTrailerLine4();
        return $this;
    }

    /**
     * Sets trailer line 5 field.
     *
     * @param string|null $value
     */
    public function trailerLine5(?string $value): self
    {
        $this->instance->setTrailerLine5($value);
        return $this;
    }

    /**
     * Unsets trailer line 5 field.
     */
    public function unsetTrailerLine5(): self
    {
        $this->instance->unsetTrailerLine5();
        return $this;
    }

    /**
     * Sets default checkin field.
     *
     * @param string|null $value
     */
    public function defaultCheckin(?string $value): self
    {
        $this->instance->setDefaultCheckin($value);
        return $this;
    }

    /**
     * Unsets default checkin field.
     */
    public function unsetDefaultCheckin(): self
    {
        $this->instance->unsetDefaultCheckin();
        return $this;
    }

    /**
     * Sets default checkout field.
     *
     * @param string|null $value
     */
    public function defaultCheckout(?string $value): self
    {
        $this->instance->setDefaultCheckout($value);
        return $this;
    }

    /**
     * Unsets default checkout field.
     */
    public function unsetDefaultCheckout(): self
    {
        $this->instance->unsetDefaultCheckout();
        return $this;
    }

    /**
     * Sets default room rate field.
     *
     * @param int|null $value
     */
    public function defaultRoomRate(?int $value): self
    {
        $this->instance->setDefaultRoomRate($value);
        return $this;
    }

    /**
     * Unsets default room rate field.
     */
    public function unsetDefaultRoomRate(): self
    {
        $this->instance->unsetDefaultRoomRate();
        return $this;
    }

    /**
     * Sets default room number field.
     *
     * @param string|null $value
     */
    public function defaultRoomNumber(?string $value): self
    {
        $this->instance->setDefaultRoomNumber($value);
        return $this;
    }

    /**
     * Unsets default room number field.
     */
    public function unsetDefaultRoomNumber(): self
    {
        $this->instance->unsetDefaultRoomNumber();
        return $this;
    }

    /**
     * Sets debit field.
     *
     * @param bool|null $value
     */
    public function debit(?bool $value): self
    {
        $this->instance->setDebit($value);
        return $this;
    }

    /**
     * Sets emv field.
     *
     * @param bool|null $value
     */
    public function emv(?bool $value): self
    {
        $this->instance->setEmv($value);
        return $this;
    }

    /**
     * Sets cashback enable field.
     *
     * @param bool|null $value
     */
    public function cashbackEnable(?bool $value): self
    {
        $this->instance->setCashbackEnable($value);
        return $this;
    }

    /**
     * Sets print enable field.
     *
     * @param bool|null $value
     */
    public function printEnable(?bool $value): self
    {
        $this->instance->setPrintEnable($value);
        return $this;
    }

    /**
     * Sets sig capture enable field.
     *
     * @param bool|null $value
     */
    public function sigCaptureEnable(?bool $value): self
    {
        $this->instance->setSigCaptureEnable($value);
        return $this;
    }

    /**
     * Sets is provisioned field.
     *
     * @param bool|null $value
     */
    public function isProvisioned(?bool $value): self
    {
        $this->instance->setIsProvisioned($value);
        return $this;
    }

    /**
     * Sets tip enable field.
     *
     * @param bool|null $value
     */
    public function tipEnable(?bool $value): self
    {
        $this->instance->setTipEnable($value);
        return $this;
    }

    /**
     * Sets validated decryption field.
     *
     * @param bool|null $value
     */
    public function validatedDecryption(?bool $value): self
    {
        $this->instance->setValidatedDecryption($value);
        return $this;
    }

    /**
     * Sets communication type field.
     *
     * @param string|null $value
     */
    public function communicationType(?string $value): self
    {
        $this->instance->setCommunicationType($value);
        return $this;
    }

    /**
     * Unsets communication type field.
     */
    public function unsetCommunicationType(): self
    {
        $this->instance->unsetCommunicationType();
        return $this;
    }

    /**
     * Sets active field.
     *
     * @param bool|null $value
     */
    public function active(?bool $value): self
    {
        $this->instance->setActive($value);
        return $this;
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets created ts field.
     *
     * @param int|null $value
     */
    public function createdTs(?int $value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Sets modified ts field.
     *
     * @param int|null $value
     */
    public function modifiedTs(?int $value): self
    {
        $this->instance->setModifiedTs($value);
        return $this;
    }

    /**
     * Sets last registration ts field.
     *
     * @param int|null $value
     */
    public function lastRegistrationTs(?int $value): self
    {
        $this->instance->setLastRegistrationTs($value);
        return $this;
    }

    /**
     * Sets created user id field.
     *
     * @param string|null $value
     */
    public function createdUserId(?string $value): self
    {
        $this->instance->setCreatedUserId($value);
        return $this;
    }

    /**
     * Sets modified user id field.
     *
     * @param string|null $value
     */
    public function modifiedUserId(?string $value): self
    {
        $this->instance->setModifiedUserId($value);
        return $this;
    }

    /**
     * Sets location field.
     *
     * @param Location|null $value
     */
    public function location(?Location $value): self
    {
        $this->instance->setLocation($value);
        return $this;
    }

    /**
     * Sets created user field.
     *
     * @param CreatedUser|null $value
     */
    public function createdUser(?CreatedUser $value): self
    {
        $this->instance->setCreatedUser($value);
        return $this;
    }

    /**
     * Sets terminal application field.
     *
     * @param TerminalApplication|null $value
     */
    public function terminalApplication(?TerminalApplication $value): self
    {
        $this->instance->setTerminalApplication($value);
        return $this;
    }

    /**
     * Sets changelogs field.
     *
     * @param Changelog[]|null $value
     */
    public function changelogs(?array $value): self
    {
        $this->instance->setChangelogs($value);
        return $this;
    }

    /**
     * Sets terminal routers field.
     *
     * @param TerminalRouter[]|null $value
     */
    public function terminalRouters(?array $value): self
    {
        $this->instance->setTerminalRouters($value);
        return $this;
    }

    /**
     * Sets has terminal routers field.
     *
     * @param bool|null $value
     */
    public function hasTerminalRouters(?bool $value): self
    {
        $this->instance->setHasTerminalRouters($value);
        return $this;
    }

    /**
     * Sets terminal cvm field.
     *
     * @param TerminalCvm|null $value
     */
    public function terminalCvm(?TerminalCvm $value): self
    {
        $this->instance->setTerminalCvm($value);
        return $this;
    }

    /**
     * Sets terminal manufacturer field.
     *
     * @param TerminalManufacturer|null $value
     */
    public function terminalManufacturer(?TerminalManufacturer $value): self
    {
        $this->instance->setTerminalManufacturer($value);
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
     * Initializes a new List 13 object.
     */
    public function build(): List13
    {
        return CoreHelper::clone($this->instance);
    }
}
