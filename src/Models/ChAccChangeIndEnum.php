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
 * Length of time since the cardholder's account information with the 3DS Requestor was last changed.
 * Includes Billing or Shipping address, new payment account, or new user(s) added.
 * >01 - Changed during this transaction
 * >
 * >02 - Less than 30 days
 * >
 * >03 - 30 - 60 days
 * >
 * >04 - More than 60 days
 * >
 */
class ChAccChangeIndEnum
{
    public const ENUM_01 = '01';

    public const ENUM_02 = '02';

    public const ENUM_03 = '03';

    public const ENUM_04 = '04';

    private const _ALL_VALUES = [self::ENUM_01, self::ENUM_02, self::ENUM_03, self::ENUM_04];

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
        throw new Exception("$value is invalid for ChAccChangeIndEnum.");
    }
}
