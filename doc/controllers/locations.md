# Locations

```php
$locationsController = $client->getLocationsController();
```

## Class Name

`LocationsController`

## Methods

* [Locations Search](../../doc/controllers/locations.md#locations-search)
* [List All Locations](../../doc/controllers/locations.md#list-all-locations)
* [Locations Detail](../../doc/controllers/locations.md#locations-detail)
* [View Single Location Record](../../doc/controllers/locations.md#view-single-location-record)
* [Location Detail](../../doc/controllers/locations.md#location-detail)


# Locations Search

```php
function locationsSearch(
    ?Page $page = null,
    ?string $keyword = null,
    ?string $relationship = null
): ResponseLocationSearchsCollection
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | [`?Page`](../../doc/models/page.md) | Query, Optional | Use this field to specify paginate your results, by using page size and number. You can use one of the following methods:<br><br>> /endpoint?page={ "number": 1, "size": 50 }<br>> <br>> /endpoint?page[number]=1&page[size]=50 |
| `keyword` | `?string` | Query, Optional | You can use any value to search on specific fields of this endpoint results. You can not specify the fields that are used. |
| `relationship` | [`?string(RelationshipEnum)`](../../doc/models/relationship-enum.md) | Query, Optional | Used to filter the type of locations that will be returned |

## Response Type

[`ResponseLocationSearchsCollection`](../../doc/models/response-location-searchs-collection.md)

## Example Usage

```php
$page = PageBuilder::init()
    ->number(1)
    ->size(50)
    ->build();

$relationship = RelationshipEnum::CHILD;

$result = $locationsController->locationsSearch(
    $page,
    null,
    $relationship
);
```

## Example Response *(as JSON)*

```json
{
  "type": "LocationSearchsCollection",
  "list": [
    {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "account_number": "5454545454545454",
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "contact_email_trx_receipt_default": true,
      "default_ach": "11e608a7d515f1e093242bb2",
      "default_cc": "11e608a442a5f1e092242dda",
      "email_reply_to": "email@domain.com",
      "fax": "3339998822",
      "location_api_id": "location-111111",
      "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
      "location_c1": "custom 1",
      "location_c2": "custom 2",
      "location_c3": "custom data 3",
      "name": "Sample Company Headquarters",
      "office_phone": "2481234567",
      "office_ext_phone": "1021021209",
      "tz": "America/New_York",
      "parent_id": "11ed3e73adb98c0282f3fa9b",
      "show_contact_notes": true,
      "show_contact_files": true,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_type": "merchant",
      "branding_domain_url": "subdomain.sandbox.domain.com",
      "branding_domain": {
        "url": "fortispayrbyn9y.sandbox.zeamster.com",
        "title": "Test Brand Domain Title 2",
        "logo": "",
        "support_email": "email@domain.com",
        "allow_contact_signup": true,
        "allow_contact_registration": true,
        "allow_contact_login": true,
        "registration_fields": [
          "account_number"
        ],
        "company_name": null,
        "nav_color": null,
        "button_primary_color": null,
        "logo_background_color": null,
        "icon_background_color": null,
        "menu_text_background_color": null,
        "menu_text_color": null,
        "right_menu_background_color": null,
        "right_menu_text_color": null,
        "button_primary_text_color": null,
        "nav_logo": null,
        "fav_icon": null,
        "aes_key": null,
        "help_text": null,
        "email_reply_to": "email@domain.com",
        "email": "email@domain.com",
        "custom_javascript": null,
        "custom_theme": null,
        "custom_css": null,
        "contact_user_default_entry_page": "dashboard",
        "contact_user_default_auth_roles": [
          null
        ],
        "custom_stylesheet_url": "https://127.0.0.1/receiver",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      },
      "product_transactions": [
        {
          "processor_version": "1_0_0",
          "title": "My terminal",
          "payment_method": "cc",
          "processor": "zgate",
          "mcc": "1111",
          "tax_surcharge_config": 2,
          "partner": "standalone",
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "surcharge": {},
          "processor_data": {},
          "vt_clerk_number": true,
          "vt_billing_phone": true,
          "vt_enable_tip": true,
          "ach_allow_debit": true,
          "ach_allow_credit": true,
          "ach_allow_refund": true,
          "vt_cvv": true,
          "vt_street": true,
          "vt_zip": true,
          "vt_order_num": true,
          "vt_enable": true,
          "receipt_show_contact_name": true,
          "display_avs": true,
          "card_type_visa": true,
          "card_type_mc": true,
          "card_type_disc": true,
          "card_type_amex": true,
          "card_type_diners": true,
          "card_type_jcb": true,
          "card_type_ebt": true,
          "allow_ebt_cash_benefit": true,
          "allow_ebt_food_stamp": true,
          "invoice_location": true,
          "allow_partial_authorization": true,
          "allow_recurring_partial_authorization": true,
          "auto_decline_cvv": true,
          "auto_decline_street": true,
          "auto_decline_zip": true,
          "split_payments_allow": true,
          "vt_show_custom_fields": true,
          "receipt_show_custom_fields": true,
          "vt_override_sales_tax_allowed": true,
          "vt_enable_sales_tax": true,
          "vt_require_zip": true,
          "vt_require_street": true,
          "auto_decline_cavv": true,
          "current_batch": 34,
          "dup_check_per_batch": null,
          "paylink_allow": false,
          "quick_invoice_allow": false,
          "level3_allow": false,
          "payfac_enable": false,
          "enable_3ds": false,
          "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
          "hosted_payment_page_allow": false,
          "surcharge_id": "11e95f8ec39de8fbdb0a4f1a",
          "allow_big_commerce": false,
          "level3_default": {
            "destination_country_code": "840",
            "duty_amount": 0,
            "freight_amount": 0,
            "national_tax": 2,
            "sales_tax": 200,
            "shipfrom_zip_code": "AZ12345",
            "shipto_zip_code": "MI48335",
            "tax_amount": 0,
            "tax_exempt": "0",
            "customer_vat_registration": "12345678",
            "merchant_vat_registration": "123456",
            "order_date": "171006",
            "summary_commodity_code": "C1K2",
            "tax_rate": 0,
            "unique_vat_ref_number": "vat1234",
            "line_items": [
              {
                "alternate_tax_id": "1234",
                "debit_credit": "C",
                "description": "cool drink",
                "discount_amount": 10,
                "discount_rate": 11,
                "product_code": "coke12345678",
                "quantity": 5,
                "tax_amount": 3,
                "tax_rate": 0,
                "tax_type_applied": "22",
                "tax_type_id": "a1",
                "unit_code": "gll",
                "unit_cost": 10,
                "commodity_code": "cc123456",
                "other_tax_amount": 0
              }
            ]
          },
          "cau_subscribe_type_id": 0,
          "location_billing_account_id": "11eb88b873980c64a21e5fd2",
          "product_billing_group_id": "nofees",
          "account_number": "12345678",
          "run_avs_on_accountvault_create": false,
          "accountvault_expire_notification_email_enable": false,
          "debit_allow_void": false,
          "quick_invoice_text_to_pay": false,
          "sms_enable": false,
          "vt_show_currency": true,
          "receipt_show_currency": false,
          "allow_blind_refund": false,
          "vt_show_company_name": false,
          "receipt_show_company_name": false,
          "bank_funded_only": false,
          "require_cvv_on_keyed_cnp": true,
          "require_cvv_on_tokenized_cnp": true,
          "show_secondary_amount": false,
          "allow_secondary_amount": false,
          "show_google_pay": true,
          "show_apple_pay": true,
          "batch_risk_config": {},
          "currency_code": 840,
          "enable_ach_validation": false,
          "enable_ach_retry": false,
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "active": true,
          "created_ts": 1422040992,
          "modified_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
          "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
          "product_transaction_api_id": "11e95f8ec39de8fbdb0a4f1a",
          "is_secondary_amount_allowed": false,
          "fortis_id": "8149742",
          "product_billing_group_code": "nofees",
          "cau_subscribe_type_code": 0
        }
      ],
      "product_file": {
        "title": "My terminal",
        "product_file_credential_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "active": true,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "product_accountvault": {
        "title": "My terminal",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "active": true,
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "product_token": {
        "title": "My terminal",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "active": true,
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "product_recurring": {
        "title": "Fortispay RbYN6y",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "location_api_id": "11e95f8ec39de8fbdb0a4f1a",
        "send_declined_notifications": true,
        "require_full_payment": true,
        "expire_notification_email_enable": true,
        "expire_notification_sms_enable": true,
        "notification_days_default": 1,
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "tags": [
        {
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "title": "My terminal",
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992
        }
      ],
      "terminals": [
        {
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "default_product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
          "terminal_application_id": "11e95f8ec39de8fbdb0a4f1a",
          "terminal_cvm_id": "11e95f8ec39de8fbdb0a4f1a",
          "terminal_manufacturer_code": "1",
          "title": "My terminal",
          "mac_address": "3D:F2:C9:A6:B3:4F",
          "local_ip_address": "192.168.0.10",
          "port": 10009,
          "serial_number": "1234567890",
          "terminal_number": "973456789012367",
          "terminal_timeouts": {
            "card_entry_timeout": 47,
            "device_terms_prompt_timeout": 30,
            "overall_timeout": 125,
            "pin_entry_timeout": 40,
            "signature_input_timeout": 35,
            "signature_submit_timeout": 38,
            "status_display_time": 12,
            "tip_cashback_timeout": 25,
            "transaction_timeout": 17
          },
          "tip_percents": {
            "percent_1": 0,
            "percent_2": 2,
            "percent_3": 99
          },
          "header_line_1": "line 1 sample",
          "header_line_2": "line 2 sample",
          "header_line_3": "line 3 sample",
          "header_line_4": "line 4 sample",
          "header_line_5": "line 5 sample",
          "trailer_line_1": "trailer 1 sample",
          "trailer_line_2": "trailer 2 sample",
          "trailer_line_3": "trailer 3 sample",
          "trailer_line_4": "trailer 4 sample",
          "trailer_line_5": "trailer 5 sample",
          "default_checkin": "2021-12-01",
          "default_checkout": "2021-12-01",
          "default_room_rate": 56,
          "default_room_number": "303",
          "debit": false,
          "emv": false,
          "cashback_enable": false,
          "print_enable": false,
          "sig_capture_enable": false,
          "is_provisioned": false,
          "tip_enable": false,
          "validated_decryption": false,
          "communication_type": "http",
          "active": true,
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992,
          "last_registration_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
          "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
        }
      ]
    }
  ],
  "links": {
    "type": "Links",
    "first": "/v1/endpoint?page[size]=10&page[number]=1",
    "previous": "/v1/endpoint?page[size]=10&page[number]=5",
    "next": "/v1/endpoint?page[size]=10&page[number]=7",
    "last": "/v1/endpoint?page[size]=10&page[number]=42"
  },
  "pagination": {
    "type": "Pagination",
    "total_count": 423,
    "page_count": 42,
    "page_number": 6,
    "page_size": 10
  },
  "sort": {
    "type": "Sorting",
    "fields": [
      {
        "field": "last_name",
        "order": "asc"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# List All Locations

```php
function listAllLocations(
    ?Page $page = null,
    ?array $order = null,
    ?array $filterBy = null,
    ?array $expand = null,
    ?string $format = null,
    ?string $typeahead = null,
    ?array $fields = null
): ResponseLocationsCollection
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | [`?Page`](../../doc/models/page.md) | Query, Optional | Use this field to specify paginate your results, by using page size and number. You can use one of the following methods:<br><br>> /endpoint?page={ "number": 1, "size": 50 }<br>> <br>> /endpoint?page[number]=1&page[size]=50 |
| `order` | [`?(Order20[])`](../../doc/models/order-20.md) | Query, Optional | Criteria used in query string parameters to order results.  Most fields from the endpoint results can be used as a `key`.  Unsupported fields or operators will return a `412`.  Must be encoded, or use syntax that does not require encoding.<br><br>> /endpoint?order[0][key]=created_ts&order[0][operator]=asc<br>> <br>> /endpoint?order=[{ "key": "created_ts", "operator": "asc"}]<br>> <br>> /endpoint?order=[{ "key": "balance", "operator": "desc"},{ "key": "created_ts", "operator": "asc"}]<br>> <br>**Constraints**: *Minimum Items*: `1` |
| `filterBy` | [`?(FilterBy[])`](../../doc/models/filter-by.md) | Query, Optional | Filter criteria that can be used in query string parameters.  Most fields from the endpoint results can be used as a `key`.  Unsupported fields or operators will return a `412`. Must be encoded, or use syntax that does not require encoding.<br><br>> ?filter_by[0][key]=first_name&filter_by[0][operator]==&filter_by[0][value]=Steve<br>> <br>> /endpoint?filter_by=[{ "key": "first_name", "operator": "=", "value": "Fred" }]<br>> <br>> /endpoint?filter_by=[{ "key": "account_type", "operator": "=", "value": "VISA" }]<br>> <br>> /endpoint?filter_by=[{ "key": "created_ts", "operator": ">=", "value": "946702799" }, { "key": "created_ts", "operator": "<=", value: "1695061891" }]<br>> <br>> /endpoint?filter_by=[{ "key": "last_name", "operator": "IN", "value": "Williams,Brown,Allman" }]<br>> <br>**Constraints**: *Minimum Items*: `1` |
| `expand` | [`?(string(Expand10Enum)[])`](../../doc/models/expand-10-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |
| `format` | [`?string(Format1Enum)`](../../doc/models/format-1-enum.md) | Query, Optional | Reporting format, valid values: csv, tsv |
| `typeahead` | `?string` | Query, Optional | You can use any `field_name` from this endpoint results to order the list using the value provided as filter for the same `field_name`. It will be ordered using the following rules: 1) Exact match, 2) Starts with, 3) Contains.<br><br>> /endpoint?filter={ "field_name": "Value" }&_typeahead=field_name |
| `fields` | [`?(string(Field32Enum)[])`](../../doc/models/field-32-enum.md) | Query, Optional | You can use any `field_name` from this endpoint results to filter the list of fields returned on the response. |

## Response Type

[`ResponseLocationsCollection`](../../doc/models/response-locations-collection.md)

## Example Usage

```php
$page = PageBuilder::init()
    ->number(1)
    ->size(50)
    ->build();

$order = [
    Order20Builder::init(
        'first_name',
        OperatorEnum::ASC
    )->build()
];

$filterBy = [
    FilterByBuilder::init(
        'first_name',
        Operator1Enum::ENUM_1,
        'Fred'
    )->build()
];

$result = $locationsController->listAllLocations(
    $page,
    $order,
    $filterBy
);
```

## Example Response *(as JSON)*

```json
{
  "type": "LocationsCollection",
  "list": [
    {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "account_number": "5454545454545454",
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "contact_email_trx_receipt_default": true,
      "default_ach": "11e608a7d515f1e093242bb2",
      "default_cc": "11e608a442a5f1e092242dda",
      "email_reply_to": "email@domain.com",
      "fax": "3339998822",
      "location_api_id": "location-111111",
      "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
      "location_c1": "custom 1",
      "location_c2": "custom 2",
      "location_c3": "custom data 3",
      "name": "Sample Company Headquarters",
      "office_phone": "2481234567",
      "office_ext_phone": "1021021209",
      "tz": "America/New_York",
      "parent_id": "11e95f8ec39de8fbdb0a4f1a",
      "show_contact_notes": true,
      "show_contact_files": true,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_type": "merchant",
      "ticket_hash_key": "A5F443CADF4AE34BBCAADF4",
      "parent": {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "account_number": "5454545454545454",
        "address": {
          "city": "Novi",
          "state": "MI",
          "postal_code": "48375",
          "country": "US"
        },
        "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
        "contact_email_trx_receipt_default": true,
        "default_ach": "11e608a7d515f1e093242bb2",
        "default_cc": "11e608a442a5f1e092242dda",
        "email_reply_to": "email@domain.com",
        "fax": "3339998822",
        "location_api_id": "location-111111",
        "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
        "location_c1": "custom 1",
        "location_c2": "custom 2",
        "location_c3": "custom data 3",
        "name": "Sample Company Headquarters",
        "office_phone": "2481234567",
        "office_ext_phone": "1021021209",
        "tz": "America/New_York",
        "parent_id": "11e95f8ec39de8fbdb0a4f1a",
        "show_contact_notes": true,
        "show_contact_files": true,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "location_type": "merchant",
        "ticket_hash_key": "A5F443CADF4AE34BBCAADF4"
      },
      "users": [
        {
          "account_number": "5454545454545454",
          "branding_domain_url": "{branding_domain_url}",
          "cell_phone": "3339998822",
          "company_name": "Fortis Payment Systems, LLC",
          "contact_id": "11e95f8ec39de8fbdb0a4f1a",
          "date_of_birth": "2021-12-01",
          "domain_id": "11e95f8ec39de8fbdb0a4f1a",
          "email": "email@domain.com",
          "email_trx_receipt": true,
          "home_phone": "3339998822",
          "first_name": "John",
          "last_name": "Smith",
          "locale": "en-US",
          "office_phone": "3339998822",
          "office_ext_phone": "5",
          "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
          "requires_new_password": null,
          "terms_condition_code": "20220308",
          "tz": "America/New_York",
          "ui_prefs": {
            "entry_page": "dashboard",
            "page_size": 2,
            "report_export_type": "csv",
            "process_method": "virtual_terminal",
            "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
          },
          "username": "{user_name}",
          "user_api_key": "234bas8dfn8238f923w2",
          "user_hash_key": null,
          "user_type_code": 100,
          "password": null,
          "zip": "48375",
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "status_code": 1,
          "api_only": false,
          "is_invitation": false,
          "address": {
            "city": "Novi",
            "state": "MI",
            "postal_code": "48375",
            "country": "US"
          },
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "status": true,
          "login_attempts": 0,
          "last_login_ts": 1422040992,
          "created_ts": 1422040992,
          "modified_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
          "terms_accepted_ts": 1422040992,
          "terms_agree_ip": "192.168.0.10",
          "current_date_time": "2019-03-11T10:38:26-0700",
          "current_login": 1422040992,
          "log_api_response_body_ts": 1422040992
        }
      ],
      "is_deletable": true,
      "terminals": [
        {
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "default_product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
          "terminal_application_id": "11e95f8ec39de8fbdb0a4f1a",
          "terminal_cvm_id": "11e95f8ec39de8fbdb0a4f1a",
          "terminal_manufacturer_code": "1",
          "title": "My terminal",
          "mac_address": "3D:F2:C9:A6:B3:4F",
          "local_ip_address": "192.168.0.10",
          "port": 10009,
          "serial_number": "1234567890",
          "terminal_number": "973456789012367",
          "terminal_timeouts": {
            "card_entry_timeout": 47,
            "device_terms_prompt_timeout": 30,
            "overall_timeout": 125,
            "pin_entry_timeout": 40,
            "signature_input_timeout": 35,
            "signature_submit_timeout": 38,
            "status_display_time": 12,
            "tip_cashback_timeout": 25,
            "transaction_timeout": 17
          },
          "tip_percents": {
            "percent_1": 0,
            "percent_2": 2,
            "percent_3": 99
          },
          "header_line_1": "line 1 sample",
          "header_line_2": "line 2 sample",
          "header_line_3": "line 3 sample",
          "header_line_4": "line 4 sample",
          "header_line_5": "line 5 sample",
          "trailer_line_1": "trailer 1 sample",
          "trailer_line_2": "trailer 2 sample",
          "trailer_line_3": "trailer 3 sample",
          "trailer_line_4": "trailer 4 sample",
          "trailer_line_5": "trailer 5 sample",
          "default_checkin": "2021-12-01",
          "default_checkout": "2021-12-01",
          "default_room_rate": 56,
          "default_room_number": "303",
          "debit": false,
          "emv": false,
          "cashback_enable": false,
          "print_enable": false,
          "sig_capture_enable": false,
          "is_provisioned": false,
          "tip_enable": false,
          "validated_decryption": false,
          "communication_type": "http",
          "active": true,
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992,
          "last_registration_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
          "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
        }
      ],
      "branding_domain": {
        "url": "fortispayrbyn9y.sandbox.zeamster.com",
        "title": "Test Brand Domain Title 2",
        "logo": "",
        "support_email": "email@domain.com",
        "allow_contact_signup": true,
        "allow_contact_registration": true,
        "allow_contact_login": true,
        "registration_fields": [
          "account_number"
        ],
        "company_name": null,
        "nav_color": null,
        "button_primary_color": null,
        "logo_background_color": null,
        "icon_background_color": null,
        "menu_text_background_color": null,
        "menu_text_color": null,
        "right_menu_background_color": null,
        "right_menu_text_color": null,
        "button_primary_text_color": null,
        "nav_logo": null,
        "fav_icon": null,
        "aes_key": null,
        "help_text": null,
        "email_reply_to": "email@domain.com",
        "email": "email@domain.com",
        "custom_javascript": null,
        "custom_theme": null,
        "custom_css": null,
        "contact_user_default_entry_page": "dashboard",
        "contact_user_default_auth_roles": [
          null
        ],
        "custom_stylesheet_url": "https://127.0.0.1/receiver",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      },
      "product_invoice": {
        "title": "Sample title",
        "quote_number_start": 1,
        "quote_number_increment": 1,
        "quote_number_current": 1,
        "invoice_number_start": 1,
        "invoice_number_increment": 1,
        "invoice_number_current": 1,
        "tax_rate": 0,
        "tax_fee": 0,
        "monthly_fee": 0,
        "per_invoice_fee": 0,
        "per_quote_fee": 0,
        "require_pay_in_full": true,
        "selectable": 1,
        "reportable": 1,
        "portfolio_id": "11e95f8ec39de8fbdb0a4f1a",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "product_files": [
        {
          "title": "My terminal",
          "product_file_credential_id": "11e95f8ec39de8fbdb0a4f1a",
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992,
          "active": true,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
        }
      ],
      "created_user": {
        "account_number": "5454545454545454",
        "branding_domain_url": "{branding_domain_url}",
        "cell_phone": "3339998822",
        "company_name": "Fortis Payment Systems, LLC",
        "contact_id": "11e95f8ec39de8fbdb0a4f1a",
        "date_of_birth": "2021-12-01",
        "domain_id": "11e95f8ec39de8fbdb0a4f1a",
        "email": "email@domain.com",
        "email_trx_receipt": true,
        "home_phone": "3339998822",
        "first_name": "John",
        "last_name": "Smith",
        "locale": "en-US",
        "office_phone": "3339998822",
        "office_ext_phone": "5",
        "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
        "requires_new_password": null,
        "terms_condition_code": "20220308",
        "tz": "America/New_York",
        "ui_prefs": {
          "entry_page": "dashboard",
          "page_size": 2,
          "report_export_type": "csv",
          "process_method": "virtual_terminal",
          "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
        },
        "username": "{user_name}",
        "user_api_key": "234bas8dfn8238f923w2",
        "user_hash_key": null,
        "user_type_code": 100,
        "password": null,
        "zip": "48375",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "status_code": 1,
        "api_only": false,
        "is_invitation": false,
        "address": {
          "city": "Novi",
          "state": "MI",
          "postal_code": "48375",
          "country": "US"
        },
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "status": true,
        "login_attempts": 0,
        "last_login_ts": 1422040992,
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "terms_accepted_ts": 1422040992,
        "terms_agree_ip": "192.168.0.10",
        "current_date_time": "2019-03-11T10:38:26-0700",
        "current_login": 1422040992,
        "log_api_response_body_ts": 1422040992
      },
      "changelogs": [
        {
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "action": "CREATE",
          "model": "TransactionRequest",
          "model_id": "11ec829598f0d4008be9aba4",
          "user_id": "11e95f8ec39de8fbdb0a4f1a",
          "changelog_details": [
            {
              "id": "11e95f8ec39de8fbdb0a4f1a",
              "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
              "field": "next_run_ts",
              "old_value": "1643616000"
            }
          ],
          "user": {
            "id": "11e95f8ec39de8fbdb0a4f1a",
            "username": "email@domain.com",
            "first_name": "Bob",
            "last_name": "Fairview"
          }
        }
      ],
      "product_transactions": [
        {
          "processor_version": "1_0_0",
          "title": "My terminal",
          "payment_method": "cc",
          "processor": "zgate",
          "mcc": "1111",
          "tax_surcharge_config": 2,
          "partner": "standalone",
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "surcharge": {},
          "processor_data": {},
          "vt_clerk_number": true,
          "vt_billing_phone": true,
          "vt_enable_tip": true,
          "ach_allow_debit": true,
          "ach_allow_credit": true,
          "ach_allow_refund": true,
          "vt_cvv": true,
          "vt_street": true,
          "vt_zip": true,
          "vt_order_num": true,
          "vt_enable": true,
          "receipt_show_contact_name": true,
          "display_avs": true,
          "card_type_visa": true,
          "card_type_mc": true,
          "card_type_disc": true,
          "card_type_amex": true,
          "card_type_diners": true,
          "card_type_jcb": true,
          "card_type_ebt": true,
          "allow_ebt_cash_benefit": true,
          "allow_ebt_food_stamp": true,
          "invoice_location": true,
          "allow_partial_authorization": true,
          "allow_recurring_partial_authorization": true,
          "auto_decline_cvv": true,
          "auto_decline_street": true,
          "auto_decline_zip": true,
          "split_payments_allow": true,
          "vt_show_custom_fields": true,
          "receipt_show_custom_fields": true,
          "vt_override_sales_tax_allowed": true,
          "vt_enable_sales_tax": true,
          "vt_require_zip": true,
          "vt_require_street": true,
          "auto_decline_cavv": true,
          "current_batch": 34,
          "dup_check_per_batch": null,
          "paylink_allow": false,
          "quick_invoice_allow": false,
          "level3_allow": false,
          "payfac_enable": false,
          "enable_3ds": false,
          "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
          "hosted_payment_page_allow": false,
          "surcharge_id": "11e95f8ec39de8fbdb0a4f1a",
          "allow_big_commerce": false,
          "level3_default": {
            "destination_country_code": "840",
            "duty_amount": 0,
            "freight_amount": 0,
            "national_tax": 2,
            "sales_tax": 200,
            "shipfrom_zip_code": "AZ12345",
            "shipto_zip_code": "MI48335",
            "tax_amount": 0,
            "tax_exempt": "0",
            "customer_vat_registration": "12345678",
            "merchant_vat_registration": "123456",
            "order_date": "171006",
            "summary_commodity_code": "C1K2",
            "tax_rate": 0,
            "unique_vat_ref_number": "vat1234",
            "line_items": [
              {
                "alternate_tax_id": "1234",
                "debit_credit": "C",
                "description": "cool drink",
                "discount_amount": 10,
                "discount_rate": 11,
                "product_code": "coke12345678",
                "quantity": 5,
                "tax_amount": 3,
                "tax_rate": 0,
                "tax_type_applied": "22",
                "tax_type_id": "a1",
                "unit_code": "gll",
                "unit_cost": 10,
                "commodity_code": "cc123456",
                "other_tax_amount": 0
              }
            ]
          },
          "cau_subscribe_type_id": 0,
          "location_billing_account_id": "11eb88b873980c64a21e5fd2",
          "product_billing_group_id": "nofees",
          "account_number": "12345678",
          "run_avs_on_accountvault_create": false,
          "accountvault_expire_notification_email_enable": false,
          "debit_allow_void": false,
          "quick_invoice_text_to_pay": false,
          "sms_enable": false,
          "vt_show_currency": true,
          "receipt_show_currency": false,
          "allow_blind_refund": false,
          "vt_show_company_name": false,
          "receipt_show_company_name": false,
          "bank_funded_only": false,
          "require_cvv_on_keyed_cnp": true,
          "require_cvv_on_tokenized_cnp": true,
          "show_secondary_amount": false,
          "allow_secondary_amount": false,
          "show_google_pay": true,
          "show_apple_pay": true,
          "batch_risk_config": {},
          "currency_code": 840,
          "enable_ach_validation": false,
          "enable_ach_retry": false,
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "active": true,
          "created_ts": 1422040992,
          "modified_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
          "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
          "product_transaction_api_id": "11e95f8ec39de8fbdb0a4f1a",
          "is_secondary_amount_allowed": false,
          "fortis_id": "8149742",
          "product_billing_group_code": "nofees",
          "cau_subscribe_type_code": 0
        }
      ],
      "terminal_routers": [
        {
          "mac_address": "3D:F2:C9:A6:B3:4F",
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
        }
      ],
      "developer_company": {
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "active": true,
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "developer_company_id": "sample developer company id",
      "helppages": [
        {
          "user_type_code": 100,
          "body": "Sample Body",
          "title": "Sample Title",
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
          "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
        }
      ],
      "quick_invoice_setting": {
        "location_api_id": "11e95f8ec39de8fbdb0a4f1a",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "quick_invoice_template": "<html>Template<html>",
        "default_allow_partial_pay": true,
        "default_notification_on_due_date": true,
        "default_notification_days_after_due_date": 7,
        "default_notification_days_before_due_date": 3,
        "show_custom_fields": false,
        "id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "location_billing_accounts": [
        {
          "title": "Billing Acccount Title",
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "ach_sec_code": null,
          "account_number": null,
          "routing": null,
          "exp_date": "0722",
          "billing_zip": "48375",
          "account_type": null,
          "account_holder_name": "John Smith",
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
          "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
          "billing_descriptor": null,
          "payment_method": null,
          "portfolio_id": "11e95f8ec39de8fbdb0a4f1a"
        }
      ],
      "marketplaces": [
        {
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "marketplace_id": "11e95f8ec39de8fbdb0a4f1a",
          "location_api_id": null,
          "user_id": "11e95f8ec39de8fbdb0a4f1a",
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
        }
      ],
      "locationmarketplaces": [
        {
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "marketplace_id": "11e95f8ec39de8fbdb0a4f1a",
          "location_api_id": null,
          "user_id": "11e95f8ec39de8fbdb0a4f1a",
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
        }
      ],
      "addons": [
        {
          "title": " ",
          "secret": " ",
          "iframe_url": " ",
          "location_setup_url": " ",
          "user_setup_url": " ",
          "encrypt_url_params": true
        }
      ]
    }
  ],
  "links": {
    "type": "Links",
    "first": "/v1/endpoint?page[size]=10&page[number]=1",
    "previous": "/v1/endpoint?page[size]=10&page[number]=5",
    "next": "/v1/endpoint?page[size]=10&page[number]=7",
    "last": "/v1/endpoint?page[size]=10&page[number]=42"
  },
  "pagination": {
    "type": "Pagination",
    "total_count": 423,
    "page_count": 42,
    "page_number": 6,
    "page_size": 10
  },
  "sort": {
    "type": "Sorting",
    "fields": [
      {
        "field": "last_name",
        "order": "asc"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# Locations Detail

```php
function locationsDetail(
    ?Page $page = null,
    ?array $order = null,
    ?array $filterBy = null,
    ?array $expand = null,
    ?string $format = null,
    ?string $typeahead = null,
    ?array $fields = null,
    ?array $productTransactionActive = null,
    ?array $productFileActive = null,
    ?array $productInvoiceActive = null,
    ?array $productRecurringActive = null,
    ?array $productAccountvaultActive = null
): ResponseLocationInfosCollection
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | [`?Page`](../../doc/models/page.md) | Query, Optional | Use this field to specify paginate your results, by using page size and number. You can use one of the following methods:<br><br>> /endpoint?page={ "number": 1, "size": 50 }<br>> <br>> /endpoint?page[number]=1&page[size]=50 |
| `order` | [`?(Order20[])`](../../doc/models/order-20.md) | Query, Optional | Criteria used in query string parameters to order results.  Most fields from the endpoint results can be used as a `key`.  Unsupported fields or operators will return a `412`.  Must be encoded, or use syntax that does not require encoding.<br><br>> /endpoint?order[0][key]=created_ts&order[0][operator]=asc<br>> <br>> /endpoint?order=[{ "key": "created_ts", "operator": "asc"}]<br>> <br>> /endpoint?order=[{ "key": "balance", "operator": "desc"},{ "key": "created_ts", "operator": "asc"}]<br>> <br>**Constraints**: *Minimum Items*: `1` |
| `filterBy` | [`?(FilterBy[])`](../../doc/models/filter-by.md) | Query, Optional | Filter criteria that can be used in query string parameters.  Most fields from the endpoint results can be used as a `key`.  Unsupported fields or operators will return a `412`. Must be encoded, or use syntax that does not require encoding.<br><br>> ?filter_by[0][key]=first_name&filter_by[0][operator]==&filter_by[0][value]=Steve<br>> <br>> /endpoint?filter_by=[{ "key": "first_name", "operator": "=", "value": "Fred" }]<br>> <br>> /endpoint?filter_by=[{ "key": "account_type", "operator": "=", "value": "VISA" }]<br>> <br>> /endpoint?filter_by=[{ "key": "created_ts", "operator": ">=", "value": "946702799" }, { "key": "created_ts", "operator": "<=", value: "1695061891" }]<br>> <br>> /endpoint?filter_by=[{ "key": "last_name", "operator": "IN", "value": "Williams,Brown,Allman" }]<br>> <br>**Constraints**: *Minimum Items*: `1` |
| `expand` | [`?(string(Expand10Enum)[])`](../../doc/models/expand-10-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |
| `format` | [`?string(Format1Enum)`](../../doc/models/format-1-enum.md) | Query, Optional | Reporting format, valid values: csv, tsv |
| `typeahead` | `?string` | Query, Optional | You can use any `field_name` from this endpoint results to order the list using the value provided as filter for the same `field_name`. It will be ordered using the following rules: 1) Exact match, 2) Starts with, 3) Contains.<br><br>> /endpoint?filter={ "field_name": "Value" }&_typeahead=field_name |
| `fields` | [`?(string(Field33Enum)[])`](../../doc/models/field-33-enum.md) | Query, Optional | You can use any `field_name` from this endpoint results to filter the list of fields returned on the response. |
| `productTransactionActive` | `?array` | Query, Optional | Product Transaction Active |
| `productFileActive` | `?array` | Query, Optional | Product File Active |
| `productInvoiceActive` | `?array` | Query, Optional | Product Invoice Active |
| `productRecurringActive` | `?array` | Query, Optional | Product Recurring Active |
| `productAccountvaultActive` | `?array` | Query, Optional | Product Accountvault Active |

## Response Type

[`ResponseLocationInfosCollection`](../../doc/models/response-location-infos-collection.md)

## Example Usage

```php
$page = PageBuilder::init()
    ->number(1)
    ->size(50)
    ->build();

$order = [
    Order20Builder::init(
        'first_name',
        OperatorEnum::ASC
    )->build()
];

$filterBy = [
    FilterByBuilder::init(
        'first_name',
        Operator1Enum::ENUM_1,
        'Fred'
    )->build()
];

$result = $locationsController->locationsDetail(
    $page,
    $order,
    $filterBy
);
```

## Example Response *(as JSON)*

```json
{
  "type": "LocationInfosCollection",
  "list": [
    {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "account_number": "5454545454545454",
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "contact_email_trx_receipt_default": true,
      "default_ach": "11e608a7d515f1e093242bb2",
      "default_cc": "11e608a442a5f1e092242dda",
      "email_reply_to": "email@domain.com",
      "fax": "3339998822",
      "location_api_id": "location-111111",
      "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
      "location_c1": "custom 1",
      "location_c2": "custom 2",
      "location_c3": "custom data 3",
      "name": "Sample Company Headquarters",
      "office_phone": "2481234567",
      "office_ext_phone": "1021021209",
      "tz": "America/New_York",
      "parent_id": "11ed3e73adb98c0282f3fa9b",
      "show_contact_notes": true,
      "show_contact_files": true,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_type": "merchant",
      "branding_domain_url": "subdomain.sandbox.domain.com",
      "branding_domain": {
        "url": "fortispayrbyn9y.sandbox.zeamster.com",
        "title": "Test Brand Domain Title 2",
        "logo": "",
        "support_email": "email@domain.com",
        "allow_contact_signup": true,
        "allow_contact_registration": true,
        "allow_contact_login": true,
        "registration_fields": [
          "account_number"
        ],
        "company_name": null,
        "nav_color": null,
        "button_primary_color": null,
        "logo_background_color": null,
        "icon_background_color": null,
        "menu_text_background_color": null,
        "menu_text_color": null,
        "right_menu_background_color": null,
        "right_menu_text_color": null,
        "button_primary_text_color": null,
        "nav_logo": null,
        "fav_icon": null,
        "aes_key": null,
        "help_text": null,
        "email_reply_to": "email@domain.com",
        "email": "email@domain.com",
        "custom_javascript": null,
        "custom_theme": null,
        "custom_css": null,
        "contact_user_default_entry_page": "dashboard",
        "contact_user_default_auth_roles": [
          null
        ],
        "custom_stylesheet_url": "https://127.0.0.1/receiver",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      },
      "product_transactions": [
        {
          "processor_version": "1_0_0",
          "title": "My terminal",
          "payment_method": "cc",
          "processor": "zgate",
          "mcc": "1111",
          "tax_surcharge_config": 2,
          "partner": "standalone",
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "surcharge": {},
          "processor_data": {},
          "vt_clerk_number": true,
          "vt_billing_phone": true,
          "vt_enable_tip": true,
          "ach_allow_debit": true,
          "ach_allow_credit": true,
          "ach_allow_refund": true,
          "vt_cvv": true,
          "vt_street": true,
          "vt_zip": true,
          "vt_order_num": true,
          "vt_enable": true,
          "receipt_show_contact_name": true,
          "display_avs": true,
          "card_type_visa": true,
          "card_type_mc": true,
          "card_type_disc": true,
          "card_type_amex": true,
          "card_type_diners": true,
          "card_type_jcb": true,
          "card_type_ebt": true,
          "allow_ebt_cash_benefit": true,
          "allow_ebt_food_stamp": true,
          "invoice_location": true,
          "allow_partial_authorization": true,
          "allow_recurring_partial_authorization": true,
          "auto_decline_cvv": true,
          "auto_decline_street": true,
          "auto_decline_zip": true,
          "split_payments_allow": true,
          "vt_show_custom_fields": true,
          "receipt_show_custom_fields": true,
          "vt_override_sales_tax_allowed": true,
          "vt_enable_sales_tax": true,
          "vt_require_zip": true,
          "vt_require_street": true,
          "auto_decline_cavv": true,
          "current_batch": 34,
          "dup_check_per_batch": null,
          "paylink_allow": false,
          "quick_invoice_allow": false,
          "level3_allow": false,
          "payfac_enable": false,
          "enable_3ds": false,
          "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
          "hosted_payment_page_allow": false,
          "surcharge_id": "11e95f8ec39de8fbdb0a4f1a",
          "allow_big_commerce": false,
          "level3_default": {
            "destination_country_code": "840",
            "duty_amount": 0,
            "freight_amount": 0,
            "national_tax": 2,
            "sales_tax": 200,
            "shipfrom_zip_code": "AZ12345",
            "shipto_zip_code": "MI48335",
            "tax_amount": 0,
            "tax_exempt": "0",
            "customer_vat_registration": "12345678",
            "merchant_vat_registration": "123456",
            "order_date": "171006",
            "summary_commodity_code": "C1K2",
            "tax_rate": 0,
            "unique_vat_ref_number": "vat1234",
            "line_items": [
              {
                "alternate_tax_id": "1234",
                "debit_credit": "C",
                "description": "cool drink",
                "discount_amount": 10,
                "discount_rate": 11,
                "product_code": "coke12345678",
                "quantity": 5,
                "tax_amount": 3,
                "tax_rate": 0,
                "tax_type_applied": "22",
                "tax_type_id": "a1",
                "unit_code": "gll",
                "unit_cost": 10,
                "commodity_code": "cc123456",
                "other_tax_amount": 0
              }
            ]
          },
          "cau_subscribe_type_id": 0,
          "location_billing_account_id": "11eb88b873980c64a21e5fd2",
          "product_billing_group_id": "nofees",
          "account_number": "12345678",
          "run_avs_on_accountvault_create": false,
          "accountvault_expire_notification_email_enable": false,
          "debit_allow_void": false,
          "quick_invoice_text_to_pay": false,
          "sms_enable": false,
          "vt_show_currency": true,
          "receipt_show_currency": false,
          "allow_blind_refund": false,
          "vt_show_company_name": false,
          "receipt_show_company_name": false,
          "bank_funded_only": false,
          "require_cvv_on_keyed_cnp": true,
          "require_cvv_on_tokenized_cnp": true,
          "show_secondary_amount": false,
          "allow_secondary_amount": false,
          "show_google_pay": true,
          "show_apple_pay": true,
          "batch_risk_config": {},
          "currency_code": 840,
          "enable_ach_validation": false,
          "enable_ach_retry": false,
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "active": true,
          "created_ts": 1422040992,
          "modified_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
          "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
          "product_transaction_api_id": "11e95f8ec39de8fbdb0a4f1a",
          "is_secondary_amount_allowed": false,
          "fortis_id": "8149742",
          "product_billing_group_code": "nofees",
          "cau_subscribe_type_code": 0
        }
      ],
      "product_file": {
        "title": "My terminal",
        "product_file_credential_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "active": true,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "product_accountvault": {
        "title": "My terminal",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "active": true,
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "product_token": {
        "title": "My terminal",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "active": true,
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "product_recurring": {
        "title": "Fortispay RbYN6y",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "location_api_id": "11e95f8ec39de8fbdb0a4f1a",
        "send_declined_notifications": true,
        "require_full_payment": true,
        "expire_notification_email_enable": true,
        "expire_notification_sms_enable": true,
        "notification_days_default": 1,
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "tags": [
        {
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "title": "My terminal",
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992
        }
      ],
      "terminals": [
        {
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "default_product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
          "terminal_application_id": "11e95f8ec39de8fbdb0a4f1a",
          "terminal_cvm_id": "11e95f8ec39de8fbdb0a4f1a",
          "terminal_manufacturer_code": "1",
          "title": "My terminal",
          "mac_address": "3D:F2:C9:A6:B3:4F",
          "local_ip_address": "192.168.0.10",
          "port": 10009,
          "serial_number": "1234567890",
          "terminal_number": "973456789012367",
          "terminal_timeouts": {
            "card_entry_timeout": 47,
            "device_terms_prompt_timeout": 30,
            "overall_timeout": 125,
            "pin_entry_timeout": 40,
            "signature_input_timeout": 35,
            "signature_submit_timeout": 38,
            "status_display_time": 12,
            "tip_cashback_timeout": 25,
            "transaction_timeout": 17
          },
          "tip_percents": {
            "percent_1": 0,
            "percent_2": 2,
            "percent_3": 99
          },
          "header_line_1": "line 1 sample",
          "header_line_2": "line 2 sample",
          "header_line_3": "line 3 sample",
          "header_line_4": "line 4 sample",
          "header_line_5": "line 5 sample",
          "trailer_line_1": "trailer 1 sample",
          "trailer_line_2": "trailer 2 sample",
          "trailer_line_3": "trailer 3 sample",
          "trailer_line_4": "trailer 4 sample",
          "trailer_line_5": "trailer 5 sample",
          "default_checkin": "2021-12-01",
          "default_checkout": "2021-12-01",
          "default_room_rate": 56,
          "default_room_number": "303",
          "debit": false,
          "emv": false,
          "cashback_enable": false,
          "print_enable": false,
          "sig_capture_enable": false,
          "is_provisioned": false,
          "tip_enable": false,
          "validated_decryption": false,
          "communication_type": "http",
          "active": true,
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992,
          "last_registration_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
          "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
        }
      ]
    }
  ],
  "links": {
    "type": "Links",
    "first": "/v1/endpoint?page[size]=10&page[number]=1",
    "previous": "/v1/endpoint?page[size]=10&page[number]=5",
    "next": "/v1/endpoint?page[size]=10&page[number]=7",
    "last": "/v1/endpoint?page[size]=10&page[number]=42"
  },
  "pagination": {
    "type": "Pagination",
    "total_count": 423,
    "page_count": 42,
    "page_number": 6,
    "page_size": 10
  },
  "sort": {
    "type": "Sorting",
    "fields": [
      {
        "field": "last_name",
        "order": "asc"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# View Single Location Record

```php
function viewSingleLocationRecord(
    string $locationId,
    ?array $expand = null,
    ?array $fields = null
): ResponseLocation
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `locationId` | `string` | Template, Required | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `expand` | [`?(string(Expand10Enum)[])`](../../doc/models/expand-10-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |
| `fields` | [`?(string(Field34Enum)[])`](../../doc/models/field-34-enum.md) | Query, Optional | You can use any `field_name` from this endpoint results to filter the list of fields returned on the response. |

## Response Type

[`ResponseLocation`](../../doc/models/response-location.md)

## Example Usage

```php
$locationId = '11e95f8ec39de8fbdb0a4f1a';

$result = $locationsController->viewSingleLocationRecord($locationId);
```

## Example Response *(as JSON)*

```json
{
  "type": "Location",
  "data": {
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "account_number": "5454545454545454",
    "address": {
      "city": "Novi",
      "state": "MI",
      "postal_code": "48375",
      "country": "US"
    },
    "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
    "contact_email_trx_receipt_default": true,
    "default_ach": "11e608a7d515f1e093242bb2",
    "default_cc": "11e608a442a5f1e092242dda",
    "email_reply_to": "email@domain.com",
    "fax": "3339998822",
    "location_api_id": "location-111111",
    "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
    "location_c1": "custom 1",
    "location_c2": "custom 2",
    "location_c3": "custom data 3",
    "name": "Sample Company Headquarters",
    "office_phone": "2481234567",
    "office_ext_phone": "1021021209",
    "tz": "America/New_York",
    "parent_id": "11e95f8ec39de8fbdb0a4f1a",
    "show_contact_notes": true,
    "show_contact_files": true,
    "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
    "location_type": "merchant",
    "ticket_hash_key": "A5F443CADF4AE34BBCAADF4",
    "parent": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "account_number": "5454545454545454",
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "contact_email_trx_receipt_default": true,
      "default_ach": "11e608a7d515f1e093242bb2",
      "default_cc": "11e608a442a5f1e092242dda",
      "email_reply_to": "email@domain.com",
      "fax": "3339998822",
      "location_api_id": "location-111111",
      "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
      "location_c1": "custom 1",
      "location_c2": "custom 2",
      "location_c3": "custom data 3",
      "name": "Sample Company Headquarters",
      "office_phone": "2481234567",
      "office_ext_phone": "1021021209",
      "tz": "America/New_York",
      "parent_id": "11e95f8ec39de8fbdb0a4f1a",
      "show_contact_notes": true,
      "show_contact_files": true,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_type": "merchant",
      "ticket_hash_key": "A5F443CADF4AE34BBCAADF4"
    },
    "users": [
      {
        "account_number": "5454545454545454",
        "branding_domain_url": "{branding_domain_url}",
        "cell_phone": "3339998822",
        "company_name": "Fortis Payment Systems, LLC",
        "contact_id": "11e95f8ec39de8fbdb0a4f1a",
        "date_of_birth": "2021-12-01",
        "domain_id": "11e95f8ec39de8fbdb0a4f1a",
        "email": "email@domain.com",
        "email_trx_receipt": true,
        "home_phone": "3339998822",
        "first_name": "John",
        "last_name": "Smith",
        "locale": "en-US",
        "office_phone": "3339998822",
        "office_ext_phone": "5",
        "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
        "requires_new_password": null,
        "terms_condition_code": "20220308",
        "tz": "America/New_York",
        "ui_prefs": {
          "entry_page": "dashboard",
          "page_size": 2,
          "report_export_type": "csv",
          "process_method": "virtual_terminal",
          "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
        },
        "username": "{user_name}",
        "user_api_key": "234bas8dfn8238f923w2",
        "user_hash_key": null,
        "user_type_code": 100,
        "password": null,
        "zip": "48375",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "status_code": 1,
        "api_only": false,
        "is_invitation": false,
        "address": {
          "city": "Novi",
          "state": "MI",
          "postal_code": "48375",
          "country": "US"
        },
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "status": true,
        "login_attempts": 0,
        "last_login_ts": 1422040992,
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "terms_accepted_ts": 1422040992,
        "terms_agree_ip": "192.168.0.10",
        "current_date_time": "2019-03-11T10:38:26-0700",
        "current_login": 1422040992,
        "log_api_response_body_ts": 1422040992
      }
    ],
    "is_deletable": true,
    "terminals": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "default_product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "terminal_application_id": "11e95f8ec39de8fbdb0a4f1a",
        "terminal_cvm_id": "11e95f8ec39de8fbdb0a4f1a",
        "terminal_manufacturer_code": "1",
        "title": "My terminal",
        "mac_address": "3D:F2:C9:A6:B3:4F",
        "local_ip_address": "192.168.0.10",
        "port": 10009,
        "serial_number": "1234567890",
        "terminal_number": "973456789012367",
        "terminal_timeouts": {
          "card_entry_timeout": 47,
          "device_terms_prompt_timeout": 30,
          "overall_timeout": 125,
          "pin_entry_timeout": 40,
          "signature_input_timeout": 35,
          "signature_submit_timeout": 38,
          "status_display_time": 12,
          "tip_cashback_timeout": 25,
          "transaction_timeout": 17
        },
        "tip_percents": {
          "percent_1": 0,
          "percent_2": 2,
          "percent_3": 99
        },
        "header_line_1": "line 1 sample",
        "header_line_2": "line 2 sample",
        "header_line_3": "line 3 sample",
        "header_line_4": "line 4 sample",
        "header_line_5": "line 5 sample",
        "trailer_line_1": "trailer 1 sample",
        "trailer_line_2": "trailer 2 sample",
        "trailer_line_3": "trailer 3 sample",
        "trailer_line_4": "trailer 4 sample",
        "trailer_line_5": "trailer 5 sample",
        "default_checkin": "2021-12-01",
        "default_checkout": "2021-12-01",
        "default_room_rate": 56,
        "default_room_number": "303",
        "debit": false,
        "emv": false,
        "cashback_enable": false,
        "print_enable": false,
        "sig_capture_enable": false,
        "is_provisioned": false,
        "tip_enable": false,
        "validated_decryption": false,
        "communication_type": "http",
        "active": true,
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "last_registration_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "branding_domain": {
      "url": "fortispayrbyn9y.sandbox.zeamster.com",
      "title": "Test Brand Domain Title 2",
      "logo": "",
      "support_email": "email@domain.com",
      "allow_contact_signup": true,
      "allow_contact_registration": true,
      "allow_contact_login": true,
      "registration_fields": [
        "account_number"
      ],
      "company_name": null,
      "nav_color": null,
      "button_primary_color": null,
      "logo_background_color": null,
      "icon_background_color": null,
      "menu_text_background_color": null,
      "menu_text_color": null,
      "right_menu_background_color": null,
      "right_menu_text_color": null,
      "button_primary_text_color": null,
      "nav_logo": null,
      "fav_icon": null,
      "aes_key": null,
      "help_text": null,
      "email_reply_to": "email@domain.com",
      "email": "email@domain.com",
      "custom_javascript": null,
      "custom_theme": null,
      "custom_css": null,
      "contact_user_default_entry_page": "dashboard",
      "contact_user_default_auth_roles": [
        null
      ],
      "custom_stylesheet_url": "https://127.0.0.1/receiver",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "product_invoice": {
      "title": "Sample title",
      "quote_number_start": 1,
      "quote_number_increment": 1,
      "quote_number_current": 1,
      "invoice_number_start": 1,
      "invoice_number_increment": 1,
      "invoice_number_current": 1,
      "tax_rate": 0,
      "tax_fee": 0,
      "monthly_fee": 0,
      "per_invoice_fee": 0,
      "per_quote_fee": 0,
      "require_pay_in_full": true,
      "selectable": 1,
      "reportable": 1,
      "portfolio_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "product_files": [
      {
        "title": "My terminal",
        "product_file_credential_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "active": true,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "created_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_code": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700",
      "current_login": 1422040992,
      "log_api_response_body_ts": 1422040992
    },
    "changelogs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "action": "CREATE",
        "model": "TransactionRequest",
        "model_id": "11ec829598f0d4008be9aba4",
        "user_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_details": [
          {
            "id": "11e95f8ec39de8fbdb0a4f1a",
            "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
            "field": "next_run_ts",
            "old_value": "1643616000"
          }
        ],
        "user": {
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "username": "email@domain.com",
          "first_name": "Bob",
          "last_name": "Fairview"
        }
      }
    ],
    "product_transactions": [
      {
        "processor_version": "1_0_0",
        "title": "My terminal",
        "payment_method": "cc",
        "processor": "zgate",
        "mcc": "1111",
        "tax_surcharge_config": 2,
        "partner": "standalone",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "surcharge": {},
        "processor_data": {},
        "vt_clerk_number": true,
        "vt_billing_phone": true,
        "vt_enable_tip": true,
        "ach_allow_debit": true,
        "ach_allow_credit": true,
        "ach_allow_refund": true,
        "vt_cvv": true,
        "vt_street": true,
        "vt_zip": true,
        "vt_order_num": true,
        "vt_enable": true,
        "receipt_show_contact_name": true,
        "display_avs": true,
        "card_type_visa": true,
        "card_type_mc": true,
        "card_type_disc": true,
        "card_type_amex": true,
        "card_type_diners": true,
        "card_type_jcb": true,
        "card_type_ebt": true,
        "allow_ebt_cash_benefit": true,
        "allow_ebt_food_stamp": true,
        "invoice_location": true,
        "allow_partial_authorization": true,
        "allow_recurring_partial_authorization": true,
        "auto_decline_cvv": true,
        "auto_decline_street": true,
        "auto_decline_zip": true,
        "split_payments_allow": true,
        "vt_show_custom_fields": true,
        "receipt_show_custom_fields": true,
        "vt_override_sales_tax_allowed": true,
        "vt_enable_sales_tax": true,
        "vt_require_zip": true,
        "vt_require_street": true,
        "auto_decline_cavv": true,
        "current_batch": 34,
        "dup_check_per_batch": null,
        "paylink_allow": false,
        "quick_invoice_allow": false,
        "level3_allow": false,
        "payfac_enable": false,
        "enable_3ds": false,
        "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
        "hosted_payment_page_allow": false,
        "surcharge_id": "11e95f8ec39de8fbdb0a4f1a",
        "allow_big_commerce": false,
        "level3_default": {
          "destination_country_code": "840",
          "duty_amount": 0,
          "freight_amount": 0,
          "national_tax": 2,
          "sales_tax": 200,
          "shipfrom_zip_code": "AZ12345",
          "shipto_zip_code": "MI48335",
          "tax_amount": 0,
          "tax_exempt": "0",
          "customer_vat_registration": "12345678",
          "merchant_vat_registration": "123456",
          "order_date": "171006",
          "summary_commodity_code": "C1K2",
          "tax_rate": 0,
          "unique_vat_ref_number": "vat1234",
          "line_items": [
            {
              "alternate_tax_id": "1234",
              "debit_credit": "C",
              "description": "cool drink",
              "discount_amount": 10,
              "discount_rate": 11,
              "product_code": "coke12345678",
              "quantity": 5,
              "tax_amount": 3,
              "tax_rate": 0,
              "tax_type_applied": "22",
              "tax_type_id": "a1",
              "unit_code": "gll",
              "unit_cost": 10,
              "commodity_code": "cc123456",
              "other_tax_amount": 0
            }
          ]
        },
        "cau_subscribe_type_id": 0,
        "location_billing_account_id": "11eb88b873980c64a21e5fd2",
        "product_billing_group_id": "nofees",
        "account_number": "12345678",
        "run_avs_on_accountvault_create": false,
        "accountvault_expire_notification_email_enable": false,
        "debit_allow_void": false,
        "quick_invoice_text_to_pay": false,
        "sms_enable": false,
        "vt_show_currency": true,
        "receipt_show_currency": false,
        "allow_blind_refund": false,
        "vt_show_company_name": false,
        "receipt_show_company_name": false,
        "bank_funded_only": false,
        "require_cvv_on_keyed_cnp": true,
        "require_cvv_on_tokenized_cnp": true,
        "show_secondary_amount": false,
        "allow_secondary_amount": false,
        "show_google_pay": true,
        "show_apple_pay": true,
        "batch_risk_config": {},
        "currency_code": 840,
        "enable_ach_validation": false,
        "enable_ach_retry": false,
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "active": true,
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_api_id": "11e95f8ec39de8fbdb0a4f1a",
        "is_secondary_amount_allowed": false,
        "fortis_id": "8149742",
        "product_billing_group_code": "nofees",
        "cau_subscribe_type_code": 0
      }
    ],
    "terminal_routers": [
      {
        "mac_address": "3D:F2:C9:A6:B3:4F",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "developer_company": {
      "title": "My terminal",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "active": true,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "developer_company_id": "sample developer company id",
    "helppages": [
      {
        "user_type_code": 100,
        "body": "Sample Body",
        "title": "Sample Title",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "quick_invoice_setting": {
      "location_api_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "quick_invoice_template": "<html>Template<html>",
      "default_allow_partial_pay": true,
      "default_notification_on_due_date": true,
      "default_notification_days_after_due_date": 7,
      "default_notification_days_before_due_date": 3,
      "show_custom_fields": false,
      "id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "location_billing_accounts": [
      {
        "title": "Billing Acccount Title",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "ach_sec_code": null,
        "account_number": null,
        "routing": null,
        "exp_date": "0722",
        "billing_zip": "48375",
        "account_type": null,
        "account_holder_name": "John Smith",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "billing_descriptor": null,
        "payment_method": null,
        "portfolio_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "marketplaces": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "marketplace_id": "11e95f8ec39de8fbdb0a4f1a",
        "location_api_id": null,
        "user_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "locationmarketplaces": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "marketplace_id": "11e95f8ec39de8fbdb0a4f1a",
        "location_api_id": null,
        "user_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "addons": [
      {
        "title": " ",
        "secret": " ",
        "iframe_url": " ",
        "location_setup_url": " ",
        "user_setup_url": " ",
        "encrypt_url_params": true
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# Location Detail

```php
function locationDetail(
    string $locationId,
    ?array $expand = null,
    ?array $fields = null,
    ?array $productTransactionActive = null,
    ?array $productFileActive = null,
    ?array $productInvoiceActive = null,
    ?array $productRecurringActive = null,
    ?array $productAccountvaultActive = null
): ResponseLocationInfo
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `locationId` | `string` | Template, Required | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `expand` | [`?(string(Expand10Enum)[])`](../../doc/models/expand-10-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |
| `fields` | [`?(string(Field35Enum)[])`](../../doc/models/field-35-enum.md) | Query, Optional | You can use any `field_name` from this endpoint results to filter the list of fields returned on the response. |
| `productTransactionActive` | `?array` | Query, Optional | Product Transaction Active |
| `productFileActive` | `?array` | Query, Optional | Product File Active |
| `productInvoiceActive` | `?array` | Query, Optional | Product Invoice Active |
| `productRecurringActive` | `?array` | Query, Optional | Product Recurring Active |
| `productAccountvaultActive` | `?array` | Query, Optional | Product Accountvault Active |

## Response Type

[`ResponseLocationInfo`](../../doc/models/response-location-info.md)

## Example Usage

```php
$locationId = '11e95f8ec39de8fbdb0a4f1a';

$result = $locationsController->locationDetail($locationId);
```

## Example Response *(as JSON)*

```json
{
  "type": "LocationInfo",
  "data": {
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "account_number": "5454545454545454",
    "address": {
      "city": "Novi",
      "state": "MI",
      "postal_code": "48375",
      "country": "US"
    },
    "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
    "contact_email_trx_receipt_default": true,
    "default_ach": "11e608a7d515f1e093242bb2",
    "default_cc": "11e608a442a5f1e092242dda",
    "email_reply_to": "email@domain.com",
    "fax": "3339998822",
    "location_api_id": "location-111111",
    "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
    "location_c1": "custom 1",
    "location_c2": "custom 2",
    "location_c3": "custom data 3",
    "name": "Sample Company Headquarters",
    "office_phone": "2481234567",
    "office_ext_phone": "1021021209",
    "tz": "America/New_York",
    "parent_id": "11ed3e73adb98c0282f3fa9b",
    "show_contact_notes": true,
    "show_contact_files": true,
    "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
    "location_type": "merchant",
    "branding_domain_url": "subdomain.sandbox.domain.com",
    "branding_domain": {
      "url": "fortispayrbyn9y.sandbox.zeamster.com",
      "title": "Test Brand Domain Title 2",
      "logo": "",
      "support_email": "email@domain.com",
      "allow_contact_signup": true,
      "allow_contact_registration": true,
      "allow_contact_login": true,
      "registration_fields": [
        "account_number"
      ],
      "company_name": null,
      "nav_color": null,
      "button_primary_color": null,
      "logo_background_color": null,
      "icon_background_color": null,
      "menu_text_background_color": null,
      "menu_text_color": null,
      "right_menu_background_color": null,
      "right_menu_text_color": null,
      "button_primary_text_color": null,
      "nav_logo": null,
      "fav_icon": null,
      "aes_key": null,
      "help_text": null,
      "email_reply_to": "email@domain.com",
      "email": "email@domain.com",
      "custom_javascript": null,
      "custom_theme": null,
      "custom_css": null,
      "contact_user_default_entry_page": "dashboard",
      "contact_user_default_auth_roles": [
        null
      ],
      "custom_stylesheet_url": "https://127.0.0.1/receiver",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "product_transactions": [
      {
        "processor_version": "1_0_0",
        "title": "My terminal",
        "payment_method": "cc",
        "processor": "zgate",
        "mcc": "1111",
        "tax_surcharge_config": 2,
        "partner": "standalone",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "surcharge": {},
        "processor_data": {},
        "vt_clerk_number": true,
        "vt_billing_phone": true,
        "vt_enable_tip": true,
        "ach_allow_debit": true,
        "ach_allow_credit": true,
        "ach_allow_refund": true,
        "vt_cvv": true,
        "vt_street": true,
        "vt_zip": true,
        "vt_order_num": true,
        "vt_enable": true,
        "receipt_show_contact_name": true,
        "display_avs": true,
        "card_type_visa": true,
        "card_type_mc": true,
        "card_type_disc": true,
        "card_type_amex": true,
        "card_type_diners": true,
        "card_type_jcb": true,
        "card_type_ebt": true,
        "allow_ebt_cash_benefit": true,
        "allow_ebt_food_stamp": true,
        "invoice_location": true,
        "allow_partial_authorization": true,
        "allow_recurring_partial_authorization": true,
        "auto_decline_cvv": true,
        "auto_decline_street": true,
        "auto_decline_zip": true,
        "split_payments_allow": true,
        "vt_show_custom_fields": true,
        "receipt_show_custom_fields": true,
        "vt_override_sales_tax_allowed": true,
        "vt_enable_sales_tax": true,
        "vt_require_zip": true,
        "vt_require_street": true,
        "auto_decline_cavv": true,
        "current_batch": 34,
        "dup_check_per_batch": null,
        "paylink_allow": false,
        "quick_invoice_allow": false,
        "level3_allow": false,
        "payfac_enable": false,
        "enable_3ds": false,
        "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
        "hosted_payment_page_allow": false,
        "surcharge_id": "11e95f8ec39de8fbdb0a4f1a",
        "allow_big_commerce": false,
        "level3_default": {
          "destination_country_code": "840",
          "duty_amount": 0,
          "freight_amount": 0,
          "national_tax": 2,
          "sales_tax": 200,
          "shipfrom_zip_code": "AZ12345",
          "shipto_zip_code": "MI48335",
          "tax_amount": 0,
          "tax_exempt": "0",
          "customer_vat_registration": "12345678",
          "merchant_vat_registration": "123456",
          "order_date": "171006",
          "summary_commodity_code": "C1K2",
          "tax_rate": 0,
          "unique_vat_ref_number": "vat1234",
          "line_items": [
            {
              "alternate_tax_id": "1234",
              "debit_credit": "C",
              "description": "cool drink",
              "discount_amount": 10,
              "discount_rate": 11,
              "product_code": "coke12345678",
              "quantity": 5,
              "tax_amount": 3,
              "tax_rate": 0,
              "tax_type_applied": "22",
              "tax_type_id": "a1",
              "unit_code": "gll",
              "unit_cost": 10,
              "commodity_code": "cc123456",
              "other_tax_amount": 0
            }
          ]
        },
        "cau_subscribe_type_id": 0,
        "location_billing_account_id": "11eb88b873980c64a21e5fd2",
        "product_billing_group_id": "nofees",
        "account_number": "12345678",
        "run_avs_on_accountvault_create": false,
        "accountvault_expire_notification_email_enable": false,
        "debit_allow_void": false,
        "quick_invoice_text_to_pay": false,
        "sms_enable": false,
        "vt_show_currency": true,
        "receipt_show_currency": false,
        "allow_blind_refund": false,
        "vt_show_company_name": false,
        "receipt_show_company_name": false,
        "bank_funded_only": false,
        "require_cvv_on_keyed_cnp": true,
        "require_cvv_on_tokenized_cnp": true,
        "show_secondary_amount": false,
        "allow_secondary_amount": false,
        "show_google_pay": true,
        "show_apple_pay": true,
        "batch_risk_config": {},
        "currency_code": 840,
        "enable_ach_validation": false,
        "enable_ach_retry": false,
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "active": true,
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_api_id": "11e95f8ec39de8fbdb0a4f1a",
        "is_secondary_amount_allowed": false,
        "fortis_id": "8149742",
        "product_billing_group_code": "nofees",
        "cau_subscribe_type_code": 0
      }
    ],
    "product_file": {
      "title": "My terminal",
      "product_file_credential_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "active": true,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "product_accountvault": {
      "title": "My terminal",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "active": true,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "product_token": {
      "title": "My terminal",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "active": true,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "product_recurring": {
      "title": "Fortispay RbYN6y",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_api_id": "11e95f8ec39de8fbdb0a4f1a",
      "send_declined_notifications": true,
      "require_full_payment": true,
      "expire_notification_email_enable": true,
      "expire_notification_sms_enable": true,
      "notification_days_default": 1,
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "terminals": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "default_product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "terminal_application_id": "11e95f8ec39de8fbdb0a4f1a",
        "terminal_cvm_id": "11e95f8ec39de8fbdb0a4f1a",
        "terminal_manufacturer_code": "1",
        "title": "My terminal",
        "mac_address": "3D:F2:C9:A6:B3:4F",
        "local_ip_address": "192.168.0.10",
        "port": 10009,
        "serial_number": "1234567890",
        "terminal_number": "973456789012367",
        "terminal_timeouts": {
          "card_entry_timeout": 47,
          "device_terms_prompt_timeout": 30,
          "overall_timeout": 125,
          "pin_entry_timeout": 40,
          "signature_input_timeout": 35,
          "signature_submit_timeout": 38,
          "status_display_time": 12,
          "tip_cashback_timeout": 25,
          "transaction_timeout": 17
        },
        "tip_percents": {
          "percent_1": 0,
          "percent_2": 2,
          "percent_3": 99
        },
        "header_line_1": "line 1 sample",
        "header_line_2": "line 2 sample",
        "header_line_3": "line 3 sample",
        "header_line_4": "line 4 sample",
        "header_line_5": "line 5 sample",
        "trailer_line_1": "trailer 1 sample",
        "trailer_line_2": "trailer 2 sample",
        "trailer_line_3": "trailer 3 sample",
        "trailer_line_4": "trailer 4 sample",
        "trailer_line_5": "trailer 5 sample",
        "default_checkin": "2021-12-01",
        "default_checkout": "2021-12-01",
        "default_room_rate": 56,
        "default_room_number": "303",
        "debit": false,
        "emv": false,
        "cashback_enable": false,
        "print_enable": false,
        "sig_capture_enable": false,
        "is_provisioned": false,
        "tip_enable": false,
        "validated_decryption": false,
        "communication_type": "http",
        "active": true,
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "last_registration_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |

