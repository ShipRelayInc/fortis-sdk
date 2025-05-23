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
 * Indicates shipping method chosen for the transaction. Merchants must choose the Shipping Indicator
 * code that most accurately describes the cardholder's specific transaction. If one or more items are
 * included in the sale, use the Shipping Indicator code for the physical goods, or if all digital
 * goods, use the code that describes the most expensive item.
 * >01 - Ship to cardholder's billing address
 * >
 * >02 - Ship to another verified address on file with merchant
 * >
 * >03 - Ship to address that is different than the cardholder's billing address
 * >
 * >04 - "Ship to Store" / Pick-up at local store (Store address shall be populated in shipping address
 * fields)
 * >
 * >05 - Digital goods (includes online services, electronic gift cards and redemption codes)
 * >
 * >06 - Travel and Event tickets, not shipped
 * >
 * >07 - Other (for example, Gaming, digital services not shipped, e-media subscriptions, etc.)
 * >
 * >08 - Pick-up and go delivery. Availble in EMV 3DS 2.3.1 and later
 * >
 * >09 - Locker delivery (or other automated pick-up). Availble in EMV 3DS 2.3.1 and later
 * >
 * >80 - PS-specific value (dependent on the payment scheme type)
 * >
 * >81 - PS-specific value (dependent on the payment scheme type)
 * >
 */
class ShipIndicatorEnum
{
    public const ENUM_01 = '01';

    public const ENUM_02 = '02';

    public const ENUM_03 = '03';

    public const ENUM_04 = '04';

    public const ENUM_05 = '05';

    public const ENUM_07 = '07';

    public const ENUM_08 = '08';

    public const ENUM_09 = '09';

    public const ENUM_80 = '80';

    public const ENUM_81 = '81';

    private const _ALL_VALUES = [
        self::ENUM_01,
        self::ENUM_02,
        self::ENUM_03,
        self::ENUM_04,
        self::ENUM_05,
        self::ENUM_07,
        self::ENUM_08,
        self::ENUM_09,
        self::ENUM_80,
        self::ENUM_81
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
        throw new Exception("$value is invalid for ShipIndicatorEnum.");
    }
}
