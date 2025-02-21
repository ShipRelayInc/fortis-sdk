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
 * Identifies the category of the message for a specific use case.
 * >01 - Payment Authentication (PA)
 * >
 * >02 - Non-Payment Authentication (NPA)
 * >
 * >80 through 99 - PS Specific Values
 * >
 * >80 - MasterCard Identity Check Insights
 * >
 * >85 - MasterCard Identity Check, Production Validation PA
 * >
 * >86 - MasterCard Identity Check, Production Validation NPA
 * >
 */
class MessageCategoryEnum
{
    public const ENUM_01 = '01';

    public const ENUM_02 = '02';

    public const ENUM_80 = '80';

    public const ENUM_81 = '81';

    public const ENUM_82 = '82';

    public const ENUM_83 = '83';

    public const ENUM_84 = '84';

    public const ENUM_85 = '85';

    public const ENUM_86 = '86';

    public const ENUM_87 = '87';

    public const ENUM_88 = '88';

    public const ENUM_89 = '89';

    public const ENUM_90 = '90';

    public const ENUM_91 = '91';

    public const ENUM_92 = '92';

    public const ENUM_93 = '93';

    public const ENUM_94 = '94';

    public const ENUM_95 = '95';

    public const ENUM_96 = '96';

    public const ENUM_97 = '97';

    public const ENUM_98 = '98';

    public const ENUM_99 = '99';

    private const _ALL_VALUES = [
        self::ENUM_01,
        self::ENUM_02,
        self::ENUM_80,
        self::ENUM_81,
        self::ENUM_82,
        self::ENUM_83,
        self::ENUM_84,
        self::ENUM_85,
        self::ENUM_86,
        self::ENUM_87,
        self::ENUM_88,
        self::ENUM_89,
        self::ENUM_90,
        self::ENUM_91,
        self::ENUM_92,
        self::ENUM_93,
        self::ENUM_94,
        self::ENUM_95,
        self::ENUM_96,
        self::ENUM_97,
        self::ENUM_98,
        self::ENUM_99
    ];

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
        throw new Exception("$value is invalid for MessageCategoryEnum.");
    }
}
