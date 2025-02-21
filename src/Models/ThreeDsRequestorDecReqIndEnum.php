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
 * Indicates whether the 3DS Requestor requests the ACS to utilise Decoupled Authentication and agrees
 * to utilise Decoupled Authentication if the ACS confirms its use.
 *
 * Value "F" and "B" are only valid for EMV 3DS 2.3.1 or later.
 *
 * The field is optional and if value is not present, the expected action is for the ACS to interpret
 * as "N".
 * Available for supporting EMV 3DS 2.2.0 and later versions.
 * >Y - Decoupled Authentication is supported and preferred if challenge is necessary.
 * >
 * >N - Do not use Decoupled Authentication.
 * >
 * >F - Decoupled Authentication is supported and is to be used only as a fallback challenge method if
 * a challenge is necessary (Transaction Status = D in RReq). Available in EMV 3DS 2.3.1 and later.
 * >
 * >B - Decoupled Authentication is supported and can be used as a primary or fallback challenge method
 * if a challenge is necessary (Transaction Status = D in either ARes or RReq). Available in EMV 3DS 2.
 * 3.1 and later.
 * >
 */
class ThreeDsRequestorDecReqIndEnum
{
    public const Y = 'Y';

    public const N = 'N';

    public const F = 'F';

    public const B = 'B';

    private const _ALL_VALUES = [self::Y, self::N, self::F, self::B];

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
        throw new Exception("$value is invalid for ThreeDsRequestorDecReqIndEnum.");
    }
}
