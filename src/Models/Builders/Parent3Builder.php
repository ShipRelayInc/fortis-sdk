<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Address1;
use FortisAPILib\Models\Parent3;

/**
 * Builder for model Parent3
 *
 * @see Parent3
 */
class Parent3Builder
{
    /**
     * @var Parent3
     */
    private $instance;

    private function __construct(Parent3 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Parent 3 Builder object.
     */
    public static function init(): self
    {
        return new self(new Parent3());
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
     * Sets account number field.
     *
     * @param string|null $value
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Unsets account number field.
     */
    public function unsetAccountNumber(): self
    {
        $this->instance->unsetAccountNumber();
        return $this;
    }

    /**
     * Sets address field.
     *
     * @param Address1|null $value
     */
    public function address(?Address1 $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets branding domain id field.
     *
     * @param string|null $value
     */
    public function brandingDomainId(?string $value): self
    {
        $this->instance->setBrandingDomainId($value);
        return $this;
    }

    /**
     * Unsets branding domain id field.
     */
    public function unsetBrandingDomainId(): self
    {
        $this->instance->unsetBrandingDomainId();
        return $this;
    }

    /**
     * Sets contact email trx receipt default field.
     *
     * @param bool|null $value
     */
    public function contactEmailTrxReceiptDefault(?bool $value): self
    {
        $this->instance->setContactEmailTrxReceiptDefault($value);
        return $this;
    }

    /**
     * Sets default ach field.
     *
     * @param string|null $value
     */
    public function defaultAch(?string $value): self
    {
        $this->instance->setDefaultAch($value);
        return $this;
    }

    /**
     * Unsets default ach field.
     */
    public function unsetDefaultAch(): self
    {
        $this->instance->unsetDefaultAch();
        return $this;
    }

    /**
     * Sets default cc field.
     *
     * @param string|null $value
     */
    public function defaultCc(?string $value): self
    {
        $this->instance->setDefaultCc($value);
        return $this;
    }

    /**
     * Unsets default cc field.
     */
    public function unsetDefaultCc(): self
    {
        $this->instance->unsetDefaultCc();
        return $this;
    }

    /**
     * Sets email reply to field.
     *
     * @param string|null $value
     */
    public function emailReplyTo(?string $value): self
    {
        $this->instance->setEmailReplyTo($value);
        return $this;
    }

    /**
     * Unsets email reply to field.
     */
    public function unsetEmailReplyTo(): self
    {
        $this->instance->unsetEmailReplyTo();
        return $this;
    }

    /**
     * Sets fax field.
     *
     * @param string|null $value
     */
    public function fax(?string $value): self
    {
        $this->instance->setFax($value);
        return $this;
    }

    /**
     * Unsets fax field.
     */
    public function unsetFax(): self
    {
        $this->instance->unsetFax();
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
     * Sets location api key field.
     *
     * @param string|null $value
     */
    public function locationApiKey(?string $value): self
    {
        $this->instance->setLocationApiKey($value);
        return $this;
    }

    /**
     * Unsets location api key field.
     */
    public function unsetLocationApiKey(): self
    {
        $this->instance->unsetLocationApiKey();
        return $this;
    }

    /**
     * Sets location c 1 field.
     *
     * @param string|null $value
     */
    public function locationC1(?string $value): self
    {
        $this->instance->setLocationC1($value);
        return $this;
    }

    /**
     * Unsets location c 1 field.
     */
    public function unsetLocationC1(): self
    {
        $this->instance->unsetLocationC1();
        return $this;
    }

    /**
     * Sets location c 2 field.
     *
     * @param string|null $value
     */
    public function locationC2(?string $value): self
    {
        $this->instance->setLocationC2($value);
        return $this;
    }

    /**
     * Unsets location c 2 field.
     */
    public function unsetLocationC2(): self
    {
        $this->instance->unsetLocationC2();
        return $this;
    }

    /**
     * Sets location c 3 field.
     *
     * @param string|null $value
     */
    public function locationC3(?string $value): self
    {
        $this->instance->setLocationC3($value);
        return $this;
    }

    /**
     * Unsets location c 3 field.
     */
    public function unsetLocationC3(): self
    {
        $this->instance->unsetLocationC3();
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets office phone field.
     *
     * @param string|null $value
     */
    public function officePhone(?string $value): self
    {
        $this->instance->setOfficePhone($value);
        return $this;
    }

    /**
     * Unsets office phone field.
     */
    public function unsetOfficePhone(): self
    {
        $this->instance->unsetOfficePhone();
        return $this;
    }

    /**
     * Sets office ext phone field.
     *
     * @param string|null $value
     */
    public function officeExtPhone(?string $value): self
    {
        $this->instance->setOfficeExtPhone($value);
        return $this;
    }

    /**
     * Unsets office ext phone field.
     */
    public function unsetOfficeExtPhone(): self
    {
        $this->instance->unsetOfficeExtPhone();
        return $this;
    }

    /**
     * Sets tz field.
     *
     * @param string|null $value
     */
    public function tz(?string $value): self
    {
        $this->instance->setTz($value);
        return $this;
    }

    /**
     * Unsets tz field.
     */
    public function unsetTz(): self
    {
        $this->instance->unsetTz();
        return $this;
    }

    /**
     * Sets parent id field.
     *
     * @param string|null $value
     */
    public function parentId(?string $value): self
    {
        $this->instance->setParentId($value);
        return $this;
    }

    /**
     * Sets show contact notes field.
     *
     * @param bool|null $value
     */
    public function showContactNotes(?bool $value): self
    {
        $this->instance->setShowContactNotes($value);
        return $this;
    }

    /**
     * Sets show contact files field.
     *
     * @param bool|null $value
     */
    public function showContactFiles(?bool $value): self
    {
        $this->instance->setShowContactFiles($value);
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
     * Unsets created user id field.
     */
    public function unsetCreatedUserId(): self
    {
        $this->instance->unsetCreatedUserId();
        return $this;
    }

    /**
     * Sets location type field.
     *
     * @param string|null $value
     */
    public function locationType(?string $value): self
    {
        $this->instance->setLocationType($value);
        return $this;
    }

    /**
     * Unsets location type field.
     */
    public function unsetLocationType(): self
    {
        $this->instance->unsetLocationType();
        return $this;
    }

    /**
     * Sets parent name field.
     *
     * @param string|null $value
     */
    public function parentName(?string $value): self
    {
        $this->instance->setParentName($value);
        return $this;
    }

    /**
     * Unsets parent name field.
     */
    public function unsetParentName(): self
    {
        $this->instance->unsetParentName();
        return $this;
    }

    /**
     * Sets ticket hash key field.
     *
     * @param string|null $value
     */
    public function ticketHashKey(?string $value): self
    {
        $this->instance->setTicketHashKey($value);
        return $this;
    }

    /**
     * Unsets ticket hash key field.
     */
    public function unsetTicketHashKey(): self
    {
        $this->instance->unsetTicketHashKey();
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
     * Initializes a new Parent 3 object.
     */
    public function build(): Parent3
    {
        return CoreHelper::clone($this->instance);
    }
}
