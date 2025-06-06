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
 * Contains browser information.
 *
 * This field is required when device_channel=02 (BRW).
 */
class BrowserInformation implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $browserAcceptHeader;

    /**
     * @var bool|null
     */
    private $browserJavaEnabled;

    /**
     * @var string|null
     */
    private $browserLanguage;

    /**
     * @var string|null
     */
    private $browserColorDepth;

    /**
     * @var int|null
     */
    private $browserScreenHeight;

    /**
     * @var int|null
     */
    private $browserScreenWidth;

    /**
     * @var int|null
     */
    private $browserTz;

    /**
     * @var string|null
     */
    private $browserUserAgent;

    /**
     * @var string|null
     */
    private $challengeWindowSize;

    /**
     * @var bool|null
     */
    private $browserJavascriptEnabled;

    /**
     * @var string[]|null
     */
    private $acceptLanguage;

    /**
     * Returns Browser Accept Header.
     * Exact content of the HTTP accept headers as sent to the 3DS Requestor from the Cardholder's browser.
     * This field is limited to maximum 2048 characters  and if the total length exceeds the limit, the 3DS
     * Server truncates the excess portion.
     *
     * This field is required for requests where device_channel=02 (BRW).
     */
    public function getBrowserAcceptHeader(): ?string
    {
        return $this->browserAcceptHeader;
    }

    /**
     * Sets Browser Accept Header.
     * Exact content of the HTTP accept headers as sent to the 3DS Requestor from the Cardholder's browser.
     * This field is limited to maximum 2048 characters  and if the total length exceeds the limit, the 3DS
     * Server truncates the excess portion.
     *
     * This field is required for requests where device_channel=02 (BRW).
     *
     * @maps browser_accept_header
     */
    public function setBrowserAcceptHeader(?string $browserAcceptHeader): void
    {
        $this->browserAcceptHeader = $browserAcceptHeader;
    }

    /**
     * Returns Browser Java Enabled.
     * Boolean that represents the ability of the cardholder browser to execute Java. Value is returned
     * from the navigator.javaEnabled property.
     *
     * Depending on the message version, the field is required for requests:
     * - with message version = 2.1.0 and device_channel = 02 (BRW).
     * - with message version = 2.2.0 and device_channel = 02 (BRW) and browser_javascript_enabled = true.
     */
    public function getBrowserJavaEnabled(): ?bool
    {
        return $this->browserJavaEnabled;
    }

    /**
     * Sets Browser Java Enabled.
     * Boolean that represents the ability of the cardholder browser to execute Java. Value is returned
     * from the navigator.javaEnabled property.
     *
     * Depending on the message version, the field is required for requests:
     * - with message version = 2.1.0 and device_channel = 02 (BRW).
     * - with message version = 2.2.0 and device_channel = 02 (BRW) and browser_javascript_enabled = true.
     *
     * @maps browser_java_enabled
     */
    public function setBrowserJavaEnabled(?bool $browserJavaEnabled): void
    {
        $this->browserJavaEnabled = $browserJavaEnabled;
    }

    /**
     * Returns Browser Language.
     * Value representing the browser language as defined in IETF BCP47.
     *
     * Until EMV 3DS 2.2.0:
     * The value is limited to 1-8 characters. If the value exceeds 8 characters, it will be truncated to a
     * semantically valid value, if possible. The value is returned from navigator.language property.
     *
     * This field is required for requests where device_channel = 02 (BRW).
     * In other cases this field is optional.
     *
     * Starting from EMV 3DS 2.3.1:
     * The value is limited to 35 characters. If the value exceeds 35 characters, it will be truncated to a
     * semantically valid value, if possible. The value is returned from navigator.language property.
     *
     * This field is required for requests where device_channel = 02 (BRW) and browser_javascript_enabled =
     * true.
     * In other cases this field is optional.
     */
    public function getBrowserLanguage(): ?string
    {
        return $this->browserLanguage;
    }

    /**
     * Sets Browser Language.
     * Value representing the browser language as defined in IETF BCP47.
     *
     * Until EMV 3DS 2.2.0:
     * The value is limited to 1-8 characters. If the value exceeds 8 characters, it will be truncated to a
     * semantically valid value, if possible. The value is returned from navigator.language property.
     *
     * This field is required for requests where device_channel = 02 (BRW).
     * In other cases this field is optional.
     *
     * Starting from EMV 3DS 2.3.1:
     * The value is limited to 35 characters. If the value exceeds 35 characters, it will be truncated to a
     * semantically valid value, if possible. The value is returned from navigator.language property.
     *
     * This field is required for requests where device_channel = 02 (BRW) and browser_javascript_enabled =
     * true.
     * In other cases this field is optional.
     *
     * @maps browser_language
     */
    public function setBrowserLanguage(?string $browserLanguage): void
    {
        $this->browserLanguage = $browserLanguage;
    }

    /**
     * Returns Browser Color Depth.
     * Value representing the bit depth of the color palette for displaying images, in bits per pixel.
     * Obtained from Cardholder browser using the screen.colorDepth property. The field is limited to 1-2
     * characters.
     *
     * If the value is not in the accepted values, it will be resolved to the first accepted value lower
     * from the one provided.
     *
     * Depending on the message version, the field is required for requests:
     * - with message version = 2.1.0 and device_channel = 02 (BRW).
     * - with message version = 2.2.0 and device_channel = 02 (BRW) and browser_javascript_enabled = true.
     * >1 - 1 bit
     * >
     * >4 - 4 bits
     * >
     * >8 - 8 bits
     * >
     * >15 - 15 bits
     * >
     * >16 - 16 bits
     * >
     * >24 - 24 bits
     * >
     * >32 - 32 bits
     * >
     * >48 - 48 bits
     * >
     */
    public function getBrowserColorDepth(): ?string
    {
        return $this->browserColorDepth;
    }

    /**
     * Sets Browser Color Depth.
     * Value representing the bit depth of the color palette for displaying images, in bits per pixel.
     * Obtained from Cardholder browser using the screen.colorDepth property. The field is limited to 1-2
     * characters.
     *
     * If the value is not in the accepted values, it will be resolved to the first accepted value lower
     * from the one provided.
     *
     * Depending on the message version, the field is required for requests:
     * - with message version = 2.1.0 and device_channel = 02 (BRW).
     * - with message version = 2.2.0 and device_channel = 02 (BRW) and browser_javascript_enabled = true.
     * >1 - 1 bit
     * >
     * >4 - 4 bits
     * >
     * >8 - 8 bits
     * >
     * >15 - 15 bits
     * >
     * >16 - 16 bits
     * >
     * >24 - 24 bits
     * >
     * >32 - 32 bits
     * >
     * >48 - 48 bits
     * >
     *
     * @maps browser_color_depth
     */
    public function setBrowserColorDepth(?string $browserColorDepth): void
    {
        $this->browserColorDepth = $browserColorDepth;
    }

    /**
     * Returns Browser Screen Height.
     * Total height of the Cardholder's screen in pixels. Value is returned from the screen.height property.
     * The value is limited to 1-6 characters.
     *
     * Depending on the message version, the field is required for requests:
     * - with message version = 2.1.0 and device_channel = 02 (BRW).
     * - with message version = 2.2.0 and device_channel = 02 (BRW) and
     * browserJavascripbrowser_javascript_enabledtEnabled = true.
     */
    public function getBrowserScreenHeight(): ?int
    {
        return $this->browserScreenHeight;
    }

    /**
     * Sets Browser Screen Height.
     * Total height of the Cardholder's screen in pixels. Value is returned from the screen.height property.
     * The value is limited to 1-6 characters.
     *
     * Depending on the message version, the field is required for requests:
     * - with message version = 2.1.0 and device_channel = 02 (BRW).
     * - with message version = 2.2.0 and device_channel = 02 (BRW) and
     * browserJavascripbrowser_javascript_enabledtEnabled = true.
     *
     * @maps browser_screen_height
     */
    public function setBrowserScreenHeight(?int $browserScreenHeight): void
    {
        $this->browserScreenHeight = $browserScreenHeight;
    }

    /**
     * Returns Browser Screen Width.
     * Total width of the Cardholder's screen in pixels. Value is returned from the screen.width property.
     * The value is limited to 1-6 characters.
     *
     * Depending on the message version, the field is required for requests:
     * - with message version = 2.1.0 and device_channel = 02 (BRW).
     * - with message version = 2.2.0 and device_channel = 02 (BRW) and browser_javascript_enabled = true.
     */
    public function getBrowserScreenWidth(): ?int
    {
        return $this->browserScreenWidth;
    }

    /**
     * Sets Browser Screen Width.
     * Total width of the Cardholder's screen in pixels. Value is returned from the screen.width property.
     * The value is limited to 1-6 characters.
     *
     * Depending on the message version, the field is required for requests:
     * - with message version = 2.1.0 and device_channel = 02 (BRW).
     * - with message version = 2.2.0 and device_channel = 02 (BRW) and browser_javascript_enabled = true.
     *
     * @maps browser_screen_width
     */
    public function setBrowserScreenWidth(?int $browserScreenWidth): void
    {
        $this->browserScreenWidth = $browserScreenWidth;
    }

    /**
     * Returns Browser Tz.
     * Time difference between UTC time and the Cardholder browser local time, in minutes. The field is
     * limited to 1-5 characters where the values is returned from the getTimezoneOffset() method.
     *
     * Depending on the message version, the field is required for requests:
     * - with message version = 2.1.0 and device_channel = 02 (BRW).
     * - with message version = 2.2.0 and device_channel = 02 (BRW) and browser_javascript_enabled = true.
     */
    public function getBrowserTz(): ?int
    {
        return $this->browserTz;
    }

    /**
     * Sets Browser Tz.
     * Time difference between UTC time and the Cardholder browser local time, in minutes. The field is
     * limited to 1-5 characters where the values is returned from the getTimezoneOffset() method.
     *
     * Depending on the message version, the field is required for requests:
     * - with message version = 2.1.0 and device_channel = 02 (BRW).
     * - with message version = 2.2.0 and device_channel = 02 (BRW) and browser_javascript_enabled = true.
     *
     * @maps browser_tz
     */
    public function setBrowserTz(?int $browserTz): void
    {
        $this->browserTz = $browserTz;
    }

    /**
     * Returns Browser User Agent.
     * Exact content of the HTTP user-agent header. The field is limited to maximum 2048 caracters. If the
     * total length of the User-Agent sent by the browser exceeds 2048 characters, the 3DS Server truncates
     * the excess portion.
     *
     * This field is required for requests where device_channel = 02 (BRW).
     */
    public function getBrowserUserAgent(): ?string
    {
        return $this->browserUserAgent;
    }

    /**
     * Sets Browser User Agent.
     * Exact content of the HTTP user-agent header. The field is limited to maximum 2048 caracters. If the
     * total length of the User-Agent sent by the browser exceeds 2048 characters, the 3DS Server truncates
     * the excess portion.
     *
     * This field is required for requests where device_channel = 02 (BRW).
     *
     * @maps browser_user_agent
     */
    public function setBrowserUserAgent(?string $browserUserAgent): void
    {
        $this->browserUserAgent = $browserUserAgent;
    }

    /**
     * Returns Challenge Window Size.
     * Dimensions of the challenge window that has been displayed to the Cardholder. The ACS shall reply
     * with content that is formatted to appropriately render in this window to provide the best possible
     * user experience.
     *
     * Preconfigured sizes are width X height in pixels of the window displayed in the Cardholder browser
     * window. This is used only to prepare the CReq request and it is not part of the AReq flow. If not
     * present it will be omitted.
     *
     * However, when sending the Challenge Request, this field is required when device_channel = 02 (BRW).
     * >01 - 250 x 400
     * >
     * >02 - 390 x 400
     * >
     * >03 - 500 x 600
     * >
     * >04 - 600 x 400
     * >
     * >05 - Full screen
     * >
     */
    public function getChallengeWindowSize(): ?string
    {
        return $this->challengeWindowSize;
    }

    /**
     * Sets Challenge Window Size.
     * Dimensions of the challenge window that has been displayed to the Cardholder. The ACS shall reply
     * with content that is formatted to appropriately render in this window to provide the best possible
     * user experience.
     *
     * Preconfigured sizes are width X height in pixels of the window displayed in the Cardholder browser
     * window. This is used only to prepare the CReq request and it is not part of the AReq flow. If not
     * present it will be omitted.
     *
     * However, when sending the Challenge Request, this field is required when device_channel = 02 (BRW).
     * >01 - 250 x 400
     * >
     * >02 - 390 x 400
     * >
     * >03 - 500 x 600
     * >
     * >04 - 600 x 400
     * >
     * >05 - Full screen
     * >
     *
     * @maps challenge_window_size
     * @factory \FortisAPILib\Models\ChallengeWindowSizeEnum::checkValue
     */
    public function setChallengeWindowSize(?string $challengeWindowSize): void
    {
        $this->challengeWindowSize = $challengeWindowSize;
    }

    /**
     * Returns Browser Javascript Enabled.
     * Boolean that represents the ability of the cardholder browser to execute JavaScript.
     *
     * This field is required for requests where device_channel = 02 (BRW).
     * Available for supporting EMV 3DS 2.2.0 and later versions.
     */
    public function getBrowserJavascriptEnabled(): ?bool
    {
        return $this->browserJavascriptEnabled;
    }

    /**
     * Sets Browser Javascript Enabled.
     * Boolean that represents the ability of the cardholder browser to execute JavaScript.
     *
     * This field is required for requests where device_channel = 02 (BRW).
     * Available for supporting EMV 3DS 2.2.0 and later versions.
     *
     * @maps browser_javascript_enabled
     */
    public function setBrowserJavascriptEnabled(?bool $browserJavascriptEnabled): void
    {
        $this->browserJavascriptEnabled = $browserJavascriptEnabled;
    }

    /**
     * Returns Accept Language.
     * Value representing the browser language preference present in the http header, as defined in IETF
     * BCP 47.
     *
     * The value is limited to 1-99 elements. Each element should contain a maximum of 100 characters.
     *
     * This field is required for requests where device_channel = 02 (BRW).
     * Available for supporting EMV 3DS 2.3.1 and later versions.
     *
     * @return string[]|null
     */
    public function getAcceptLanguage(): ?array
    {
        return $this->acceptLanguage;
    }

    /**
     * Sets Accept Language.
     * Value representing the browser language preference present in the http header, as defined in IETF
     * BCP 47.
     *
     * The value is limited to 1-99 elements. Each element should contain a maximum of 100 characters.
     *
     * This field is required for requests where device_channel = 02 (BRW).
     * Available for supporting EMV 3DS 2.3.1 and later versions.
     *
     * @maps accept_language
     *
     * @param string[]|null $acceptLanguage
     */
    public function setAcceptLanguage(?array $acceptLanguage): void
    {
        $this->acceptLanguage = $acceptLanguage;
    }

    /**
     * Converts the BrowserInformation object to a human-readable string representation.
     *
     * @return string The string representation of the BrowserInformation object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BrowserInformation',
            [
                'browserAcceptHeader' => $this->browserAcceptHeader,
                'browserJavaEnabled' => $this->browserJavaEnabled,
                'browserLanguage' => $this->browserLanguage,
                'browserColorDepth' => $this->browserColorDepth,
                'browserScreenHeight' => $this->browserScreenHeight,
                'browserScreenWidth' => $this->browserScreenWidth,
                'browserTz' => $this->browserTz,
                'browserUserAgent' => $this->browserUserAgent,
                'challengeWindowSize' => $this->challengeWindowSize,
                'browserJavascriptEnabled' => $this->browserJavascriptEnabled,
                'acceptLanguage' => $this->acceptLanguage,
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
        if (isset($this->browserAcceptHeader)) {
            $json['browser_accept_header']      = $this->browserAcceptHeader;
        }
        if (isset($this->browserJavaEnabled)) {
            $json['browser_java_enabled']       = $this->browserJavaEnabled;
        }
        if (isset($this->browserLanguage)) {
            $json['browser_language']           = $this->browserLanguage;
        }
        if (isset($this->browserColorDepth)) {
            $json['browser_color_depth']        = $this->browserColorDepth;
        }
        if (isset($this->browserScreenHeight)) {
            $json['browser_screen_height']      = $this->browserScreenHeight;
        }
        if (isset($this->browserScreenWidth)) {
            $json['browser_screen_width']       = $this->browserScreenWidth;
        }
        if (isset($this->browserTz)) {
            $json['browser_tz']                 = $this->browserTz;
        }
        if (isset($this->browserUserAgent)) {
            $json['browser_user_agent']         = $this->browserUserAgent;
        }
        if (isset($this->challengeWindowSize)) {
            $json['challenge_window_size']      = ChallengeWindowSizeEnum::checkValue($this->challengeWindowSize);
        }
        if (isset($this->browserJavascriptEnabled)) {
            $json['browser_javascript_enabled'] = $this->browserJavascriptEnabled;
        }
        if (isset($this->acceptLanguage)) {
            $json['accept_language']            = $this->acceptLanguage;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
