<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Domain;

/**
 * Builder for model Domain
 *
 * @see Domain
 */
class DomainBuilder
{
    /**
     * @var Domain
     */
    private $instance;

    private function __construct(Domain $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Domain Builder object.
     */
    public static function init(): self
    {
        return new self(new Domain());
    }

    /**
     * Sets url field.
     *
     * @param string|null $value
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
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
     * Sets logo field.
     *
     * @param string|null $value
     */
    public function logo(?string $value): self
    {
        $this->instance->setLogo($value);
        return $this;
    }

    /**
     * Unsets logo field.
     */
    public function unsetLogo(): self
    {
        $this->instance->unsetLogo();
        return $this;
    }

    /**
     * Sets support email field.
     *
     * @param string|null $value
     */
    public function supportEmail(?string $value): self
    {
        $this->instance->setSupportEmail($value);
        return $this;
    }

    /**
     * Unsets support email field.
     */
    public function unsetSupportEmail(): self
    {
        $this->instance->unsetSupportEmail();
        return $this;
    }

    /**
     * Sets allow contact signup field.
     *
     * @param bool|null $value
     */
    public function allowContactSignup(?bool $value): self
    {
        $this->instance->setAllowContactSignup($value);
        return $this;
    }

    /**
     * Sets allow contact registration field.
     *
     * @param bool|null $value
     */
    public function allowContactRegistration(?bool $value): self
    {
        $this->instance->setAllowContactRegistration($value);
        return $this;
    }

    /**
     * Sets allow contact login field.
     *
     * @param bool|null $value
     */
    public function allowContactLogin(?bool $value): self
    {
        $this->instance->setAllowContactLogin($value);
        return $this;
    }

    /**
     * Sets registration fields field.
     *
     * @param string[]|null $value
     */
    public function registrationFields(?array $value): self
    {
        $this->instance->setRegistrationFields($value);
        return $this;
    }

    /**
     * Sets company name field.
     *
     * @param string|null $value
     */
    public function companyName(?string $value): self
    {
        $this->instance->setCompanyName($value);
        return $this;
    }

    /**
     * Unsets company name field.
     */
    public function unsetCompanyName(): self
    {
        $this->instance->unsetCompanyName();
        return $this;
    }

    /**
     * Sets nav color field.
     *
     * @param string|null $value
     */
    public function navColor(?string $value): self
    {
        $this->instance->setNavColor($value);
        return $this;
    }

    /**
     * Unsets nav color field.
     */
    public function unsetNavColor(): self
    {
        $this->instance->unsetNavColor();
        return $this;
    }

    /**
     * Sets button primary color field.
     *
     * @param string|null $value
     */
    public function buttonPrimaryColor(?string $value): self
    {
        $this->instance->setButtonPrimaryColor($value);
        return $this;
    }

    /**
     * Unsets button primary color field.
     */
    public function unsetButtonPrimaryColor(): self
    {
        $this->instance->unsetButtonPrimaryColor();
        return $this;
    }

    /**
     * Sets logo background color field.
     *
     * @param string|null $value
     */
    public function logoBackgroundColor(?string $value): self
    {
        $this->instance->setLogoBackgroundColor($value);
        return $this;
    }

    /**
     * Unsets logo background color field.
     */
    public function unsetLogoBackgroundColor(): self
    {
        $this->instance->unsetLogoBackgroundColor();
        return $this;
    }

    /**
     * Sets icon background color field.
     *
     * @param string|null $value
     */
    public function iconBackgroundColor(?string $value): self
    {
        $this->instance->setIconBackgroundColor($value);
        return $this;
    }

    /**
     * Unsets icon background color field.
     */
    public function unsetIconBackgroundColor(): self
    {
        $this->instance->unsetIconBackgroundColor();
        return $this;
    }

    /**
     * Sets menu text background color field.
     *
     * @param string|null $value
     */
    public function menuTextBackgroundColor(?string $value): self
    {
        $this->instance->setMenuTextBackgroundColor($value);
        return $this;
    }

    /**
     * Unsets menu text background color field.
     */
    public function unsetMenuTextBackgroundColor(): self
    {
        $this->instance->unsetMenuTextBackgroundColor();
        return $this;
    }

    /**
     * Sets menu text color field.
     *
     * @param string|null $value
     */
    public function menuTextColor(?string $value): self
    {
        $this->instance->setMenuTextColor($value);
        return $this;
    }

    /**
     * Unsets menu text color field.
     */
    public function unsetMenuTextColor(): self
    {
        $this->instance->unsetMenuTextColor();
        return $this;
    }

    /**
     * Sets right menu background color field.
     *
     * @param string|null $value
     */
    public function rightMenuBackgroundColor(?string $value): self
    {
        $this->instance->setRightMenuBackgroundColor($value);
        return $this;
    }

    /**
     * Unsets right menu background color field.
     */
    public function unsetRightMenuBackgroundColor(): self
    {
        $this->instance->unsetRightMenuBackgroundColor();
        return $this;
    }

    /**
     * Sets right menu text color field.
     *
     * @param string|null $value
     */
    public function rightMenuTextColor(?string $value): self
    {
        $this->instance->setRightMenuTextColor($value);
        return $this;
    }

    /**
     * Unsets right menu text color field.
     */
    public function unsetRightMenuTextColor(): self
    {
        $this->instance->unsetRightMenuTextColor();
        return $this;
    }

    /**
     * Sets button primary text color field.
     *
     * @param string|null $value
     */
    public function buttonPrimaryTextColor(?string $value): self
    {
        $this->instance->setButtonPrimaryTextColor($value);
        return $this;
    }

    /**
     * Unsets button primary text color field.
     */
    public function unsetButtonPrimaryTextColor(): self
    {
        $this->instance->unsetButtonPrimaryTextColor();
        return $this;
    }

    /**
     * Sets nav logo field.
     *
     * @param string|null $value
     */
    public function navLogo(?string $value): self
    {
        $this->instance->setNavLogo($value);
        return $this;
    }

    /**
     * Unsets nav logo field.
     */
    public function unsetNavLogo(): self
    {
        $this->instance->unsetNavLogo();
        return $this;
    }

    /**
     * Sets fav icon field.
     *
     * @param string|null $value
     */
    public function favIcon(?string $value): self
    {
        $this->instance->setFavIcon($value);
        return $this;
    }

    /**
     * Unsets fav icon field.
     */
    public function unsetFavIcon(): self
    {
        $this->instance->unsetFavIcon();
        return $this;
    }

    /**
     * Sets aes key field.
     *
     * @param string|null $value
     */
    public function aesKey(?string $value): self
    {
        $this->instance->setAesKey($value);
        return $this;
    }

    /**
     * Unsets aes key field.
     */
    public function unsetAesKey(): self
    {
        $this->instance->unsetAesKey();
        return $this;
    }

    /**
     * Sets help text field.
     *
     * @param string|null $value
     */
    public function helpText(?string $value): self
    {
        $this->instance->setHelpText($value);
        return $this;
    }

    /**
     * Unsets help text field.
     */
    public function unsetHelpText(): self
    {
        $this->instance->unsetHelpText();
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
     * Sets email field.
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Unsets email field.
     */
    public function unsetEmail(): self
    {
        $this->instance->unsetEmail();
        return $this;
    }

    /**
     * Sets custom javascript field.
     *
     * @param string|null $value
     */
    public function customJavascript(?string $value): self
    {
        $this->instance->setCustomJavascript($value);
        return $this;
    }

    /**
     * Unsets custom javascript field.
     */
    public function unsetCustomJavascript(): self
    {
        $this->instance->unsetCustomJavascript();
        return $this;
    }

    /**
     * Sets custom theme field.
     *
     * @param string|null $value
     */
    public function customTheme(?string $value): self
    {
        $this->instance->setCustomTheme($value);
        return $this;
    }

    /**
     * Unsets custom theme field.
     */
    public function unsetCustomTheme(): self
    {
        $this->instance->unsetCustomTheme();
        return $this;
    }

    /**
     * Sets custom css field.
     *
     * @param string|null $value
     */
    public function customCss(?string $value): self
    {
        $this->instance->setCustomCss($value);
        return $this;
    }

    /**
     * Unsets custom css field.
     */
    public function unsetCustomCss(): self
    {
        $this->instance->unsetCustomCss();
        return $this;
    }

    /**
     * Sets contact user default entry page field.
     *
     * @param string|null $value
     */
    public function contactUserDefaultEntryPage(?string $value): self
    {
        $this->instance->setContactUserDefaultEntryPage($value);
        return $this;
    }

    /**
     * Unsets contact user default entry page field.
     */
    public function unsetContactUserDefaultEntryPage(): self
    {
        $this->instance->unsetContactUserDefaultEntryPage();
        return $this;
    }

    /**
     * Sets contact user default auth roles field.
     *
     * @param array[]|null $value
     */
    public function contactUserDefaultAuthRoles(?array $value): self
    {
        $this->instance->setContactUserDefaultAuthRoles($value);
        return $this;
    }

    /**
     * Sets custom stylesheet url field.
     *
     * @param string|null $value
     */
    public function customStylesheetUrl(?string $value): self
    {
        $this->instance->setCustomStylesheetUrl($value);
        return $this;
    }

    /**
     * Unsets custom stylesheet url field.
     */
    public function unsetCustomStylesheetUrl(): self
    {
        $this->instance->unsetCustomStylesheetUrl();
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
     * Initializes a new Domain object.
     */
    public function build(): Domain
    {
        return CoreHelper::clone($this->instance);
    }
}
