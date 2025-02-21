<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * Specifies the preferred version of 3D Secure protocol to be utilized while executing 3D Secure
 * authentication. 3DS Server initiates an authentication request with the preferred version and if
 * this version is not supported by other 3D Secure components, it falls back to the next supported
 * version(s) and continues authentication.
 * If the preferred version is enforced by setting  #enforcePreferredProtocolVersion flag, but this
 * version is not supported by one of the 3D Secure components, 3DS Server does not initiate an
 * authentication and provides corresponding error message to the customer.
 * If no value is provided, EMV 3DS 2.1.0 version will be used by default.
 * >2.1.0 - prefer authentication with 2.1.0 version
 * >
 * >2.2.0 - prefer authentication with 2.2.0 version
 * >
 * >2.3.1 - prefer authentication with 2.3.1 version
 * >
 */
class PreferredProtocolVersionEnum
{
    public const ENUM_210 = '2.1.0';

    public const ENUM_220 = '2.2.0';

    public const ENUM_231 = '2.3.1';

    private const _ALL_VALUES = [self::ENUM_210, self::ENUM_220, self::ENUM_231];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for PreferredProtocolVersionEnum.");
    }
}
