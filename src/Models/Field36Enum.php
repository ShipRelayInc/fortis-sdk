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

class Field36Enum
{
    public const LOCATION_ID = 'location_id';

    public const CC_PRODUCT_TRANSACTION_ID = 'cc_product_transaction_id';

    public const EMAIL = 'email';

    public const AMOUNT_DUE = 'amount_due';

    public const LOCATION_API_ID = 'location_api_id';

    public const CONTACT_ID = 'contact_id';

    public const CONTACT_API_ID = 'contact_api_id';

    public const PAYLINK_API_ID = 'paylink_api_id';

    public const ACH_PRODUCT_TRANSACTION_ID = 'ach_product_transaction_id';

    public const EXPIRE_DATE = 'expire_date';

    public const DISPLAY_PRODUCT_TRANSACTION_RECEIPT_DETAILS = 'display_product_transaction_receipt_details';

    public const DISPLAY_BILLING_FIELDS = 'display_billing_fields';

    public const DELIVERY_METHOD = 'delivery_method';

    public const CELL_PHONE = 'cell_phone';

    public const DESCRIPTION = 'description';

    public const STORE_TOKEN = 'store_token';

    public const STORE_TOKEN_TITLE = 'store_token_title';

    public const PAYLINK_ACTION = 'paylink_action';

    public const BANK_FUNDED_ONLY_OVERRIDE = 'bank_funded_only_override';

    public const TAGS = 'tags';

    public const REDIRECT_URL_DELAY = 'redirect_url_delay';

    public const REDIRECT_URL_ON_APPROVE = 'redirect_url_on_approve';

    public const REDIRECT_URL_ON_DECLINE = 'redirect_url_on_decline';

    public const ID = 'id';

    public const STATUS_ID = 'status_id';

    public const STATUS_CODE = 'status_code';

    public const ACTIVE = 'active';

    public const CREATED_TS = 'created_ts';

    public const MODIFIED_TS = 'modified_ts';

    public const CREATED_USER_ID = 'created_user_id';

    public const MODIFIED_USER_ID = 'modified_user_id';

    public const ALL_TAGS = 'all_tags';

    public const LOCATION = 'location';

    public const CREATED_USER = 'created_user';

    public const MODIFIED_USER = 'modified_user';

    public const CHANGELOGS = 'changelogs';

    public const CONTACT = 'contact';

    public const LOG_EMAILS = 'log_emails';

    public const LOG_SMS = 'log_sms';

    public const TRANSACTIONS = 'transactions';

    public const CC_PRODUCT_TRANSACTION = 'cc_product_transaction';

    public const ACH_PRODUCT_TRANSACTION = 'ach_product_transaction';

    public const EMAIL_BLACKLIST = 'email_blacklist';

    public const SMS_BLACKLIST = 'sms_blacklist';

    public const PAYMENT_URL = 'payment_url';

    private const _ALL_VALUES = [
        self::LOCATION_ID,
        self::CC_PRODUCT_TRANSACTION_ID,
        self::EMAIL,
        self::AMOUNT_DUE,
        self::LOCATION_API_ID,
        self::CONTACT_ID,
        self::CONTACT_API_ID,
        self::PAYLINK_API_ID,
        self::ACH_PRODUCT_TRANSACTION_ID,
        self::EXPIRE_DATE,
        self::DISPLAY_PRODUCT_TRANSACTION_RECEIPT_DETAILS,
        self::DISPLAY_BILLING_FIELDS,
        self::DELIVERY_METHOD,
        self::CELL_PHONE,
        self::DESCRIPTION,
        self::STORE_TOKEN,
        self::STORE_TOKEN_TITLE,
        self::PAYLINK_ACTION,
        self::BANK_FUNDED_ONLY_OVERRIDE,
        self::TAGS,
        self::REDIRECT_URL_DELAY,
        self::REDIRECT_URL_ON_APPROVE,
        self::REDIRECT_URL_ON_DECLINE,
        self::ID,
        self::STATUS_ID,
        self::STATUS_CODE,
        self::ACTIVE,
        self::CREATED_TS,
        self::MODIFIED_TS,
        self::CREATED_USER_ID,
        self::MODIFIED_USER_ID,
        self::ALL_TAGS,
        self::LOCATION,
        self::CREATED_USER,
        self::MODIFIED_USER,
        self::CHANGELOGS,
        self::CONTACT,
        self::LOG_EMAILS,
        self::LOG_SMS,
        self::TRANSACTIONS,
        self::CC_PRODUCT_TRANSACTION,
        self::ACH_PRODUCT_TRANSACTION,
        self::EMAIL_BLACKLIST,
        self::SMS_BLACKLIST,
        self::PAYMENT_URL
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
        throw new Exception("$value is invalid for Field36Enum.");
    }
}
