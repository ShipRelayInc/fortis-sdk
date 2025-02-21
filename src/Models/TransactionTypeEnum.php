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
 * Identifies the type of transaction being authenticated. The values are derived from ISO 8583. This
 * field is required in some markets. Otherwise, the field is optional.
 * >01 - Goods / Service purchase
 * >
 * >03 - Check Acceptance
 * >
 * >10 - Account Funding
 * >
 * >11 - Quasi-Cash Transaction
 * >
 * >28 - Prepaid activation and Loan
 * >
 */
class TransactionTypeEnum
{
    public const ENUM_01 = '01';

    public const ENUM_03 = '03';

    public const ENUM_10 = '10';

    public const ENUM_11 = '11';

    public const ENUM_28 = '28';

    private const _ALL_VALUES = [self::ENUM_01, self::ENUM_03, self::ENUM_10, self::ENUM_11, self::ENUM_28];

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
        throw new Exception("$value is invalid for TransactionTypeEnum.");
    }
}
