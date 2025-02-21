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

class Field27Enum
{
    public const LOCATION_ID = 'location_id';

    public const ACCOUNT_NUMBER = 'account_number';

    public const CONTACT_API_ID = 'contact_api_id';

    public const FIRST_NAME = 'first_name';

    public const LAST_NAME = 'last_name';

    public const CELL_PHONE = 'cell_phone';

    public const BALANCE = 'balance';

    public const ADDRESS = 'address';

    public const COMPANY_NAME = 'company_name';

    public const HEADER_MESSAGE = 'header_message';

    public const DATE_OF_BIRTH = 'date_of_birth';

    public const EMAIL_TRX_RECEIPT = 'email_trx_receipt';

    public const HOME_PHONE = 'home_phone';

    public const OFFICE_PHONE = 'office_phone';

    public const OFFICE_PHONE_EXT = 'office_phone_ext';

    public const HEADER_MESSAGE_TYPE = 'header_message_type';

    public const UPDATE_IF_EXISTS = 'update_if_exists';

    public const CONTACT_C1 = 'contact_c1';

    public const CONTACT_C2 = 'contact_c2';

    public const CONTACT_C3 = 'contact_c3';

    public const PARENT_ID = 'parent_id';

    public const EMAIL = 'email';

    public const TOKEN_IMPORT_ID = 'token_import_id';

    public const ID = 'id';

    public const CREATED_TS = 'created_ts';

    public const MODIFIED_TS = 'modified_ts';

    public const ACTIVE = 'active';

    public const CREATED_USER_ID = 'created_user_id';

    public const RECEIVED_EMAILS = 'received_emails';

    public const IS_DELETABLE = 'is_deletable';

    public const LOCATION = 'location';

    public const USER = 'user';

    public const RECURRINGS = 'recurrings';

    public const EMAIL_BLACKLIST = 'email_blacklist';

    public const SMS_BLACKLIST = 'sms_blacklist';

    public const CHANGELOGS = 'changelogs';

    public const POSTBACK_LOGS = 'postback_logs';

    public const CREATED_USER = 'created_user';

    public const PARENT_ = 'parent';

    public const CHILDREN = 'children';

    private const _ALL_VALUES = [
        self::LOCATION_ID,
        self::ACCOUNT_NUMBER,
        self::CONTACT_API_ID,
        self::FIRST_NAME,
        self::LAST_NAME,
        self::CELL_PHONE,
        self::BALANCE,
        self::ADDRESS,
        self::COMPANY_NAME,
        self::HEADER_MESSAGE,
        self::DATE_OF_BIRTH,
        self::EMAIL_TRX_RECEIPT,
        self::HOME_PHONE,
        self::OFFICE_PHONE,
        self::OFFICE_PHONE_EXT,
        self::HEADER_MESSAGE_TYPE,
        self::UPDATE_IF_EXISTS,
        self::CONTACT_C1,
        self::CONTACT_C2,
        self::CONTACT_C3,
        self::PARENT_ID,
        self::EMAIL,
        self::TOKEN_IMPORT_ID,
        self::ID,
        self::CREATED_TS,
        self::MODIFIED_TS,
        self::ACTIVE,
        self::CREATED_USER_ID,
        self::RECEIVED_EMAILS,
        self::IS_DELETABLE,
        self::LOCATION,
        self::USER,
        self::RECURRINGS,
        self::EMAIL_BLACKLIST,
        self::SMS_BLACKLIST,
        self::CHANGELOGS,
        self::POSTBACK_LOGS,
        self::CREATED_USER,
        self::PARENT_,
        self::CHILDREN
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
        throw new Exception("$value is invalid for Field27Enum.");
    }
}
