# Tags

```php
$tagsController = $client->getTagsController();
```

## Class Name

`TagsController`

## Methods

* [Create a New Tag](../../doc/controllers/tags.md#create-a-new-tag)
* [List All Tags Related](../../doc/controllers/tags.md#list-all-tags-related)
* [Delete Tag Record](../../doc/controllers/tags.md#delete-tag-record)
* [View Single Tags Record](../../doc/controllers/tags.md#view-single-tags-record)
* [Update Tag Record](../../doc/controllers/tags.md#update-tag-record)


# Create a New Tag

```php
function createANewTag(V1TagsRequest $body, ?array $expand = null): ResponseTag
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1TagsRequest`](../../doc/models/v1-tags-request.md) | Body, Required | - |
| `expand` | [`?(string(Expand34Enum)[])`](../../doc/models/expand-34-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseTag`](../../doc/models/response-tag.md)

## Example Usage

```php
$body = V1TagsRequestBuilder::init(
    '11e95f8ec39de8fbdb0a4f1a',
    'My terminal'
)->build();

$result = $tagsController->createANewTag($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "Tag",
  "data": {
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "title": "My terminal",
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "location": {
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
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |


# List All Tags Related

```php
function listAllTagsRelated(
    ?Page $page = null,
    ?array $order = null,
    ?array $filterBy = null,
    ?array $expand = null,
    ?string $format = null,
    ?string $typeahead = null,
    ?array $fields = null
): ResponseTagsCollection
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | [`?Page`](../../doc/models/page.md) | Query, Optional | Use this field to specify paginate your results, by using page size and number. You can use one of the following methods:<br><br>> /endpoint?page={ "number": 1, "size": 50 }<br>> <br>> /endpoint?page[number]=1&page[size]=50 |
| `order` | [`?(Order20[])`](../../doc/models/order-20.md) | Query, Optional | Criteria used in query string parameters to order results.  Most fields from the endpoint results can be used as a `key`.  Unsupported fields or operators will return a `412`.  Must be encoded, or use syntax that does not require encoding.<br><br>> /endpoint?order[0][key]=created_ts&order[0][operator]=asc<br>> <br>> /endpoint?order=[{ "key": "created_ts", "operator": "asc"}]<br>> <br>> /endpoint?order=[{ "key": "balance", "operator": "desc"},{ "key": "created_ts", "operator": "asc"}]<br>> <br>**Constraints**: *Minimum Items*: `1` |
| `filterBy` | [`?(FilterBy[])`](../../doc/models/filter-by.md) | Query, Optional | Filter criteria that can be used in query string parameters.  Most fields from the endpoint results can be used as a `key`.  Unsupported fields or operators will return a `412`. Must be encoded, or use syntax that does not require encoding.<br><br>> ?filter_by[0][key]=first_name&filter_by[0][operator]==&filter_by[0][value]=Steve<br>> <br>> /endpoint?filter_by=[{ "key": "first_name", "operator": "=", "value": "Fred" }]<br>> <br>> /endpoint?filter_by=[{ "key": "account_type", "operator": "=", "value": "VISA" }]<br>> <br>> /endpoint?filter_by=[{ "key": "created_ts", "operator": ">=", "value": "946702799" }, { "key": "created_ts", "operator": "<=", value: "1695061891" }]<br>> <br>> /endpoint?filter_by=[{ "key": "last_name", "operator": "IN", "value": "Williams,Brown,Allman" }]<br>> <br>**Constraints**: *Minimum Items*: `1` |
| `expand` | [`?(string(Expand34Enum)[])`](../../doc/models/expand-34-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |
| `format` | [`?string(Format1Enum)`](../../doc/models/format-1-enum.md) | Query, Optional | Reporting format, valid values: csv, tsv |
| `typeahead` | `?string` | Query, Optional | You can use any `field_name` from this endpoint results to order the list using the value provided as filter for the same `field_name`. It will be ordered using the following rules: 1) Exact match, 2) Starts with, 3) Contains.<br><br>> /endpoint?filter={ "field_name": "Value" }&_typeahead=field_name |
| `fields` | [`?(string(Field44Enum)[])`](../../doc/models/field-44-enum.md) | Query, Optional | You can use any `field_name` from this endpoint results to filter the list of fields returned on the response. |

## Response Type

[`ResponseTagsCollection`](../../doc/models/response-tags-collection.md)

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

$result = $tagsController->listAllTagsRelated(
    $page,
    $order,
    $filterBy
);
```

## Example Response *(as JSON)*

```json
{
  "type": "TagsCollection",
  "list": [
    {
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "title": "My terminal",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "location": {
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
      }
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


# Delete Tag Record

```php
function deleteTagRecord(string $tagId): ResponseTag
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `tagId` | `string` | Template, Required | Tag ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |

## Response Type

[`ResponseTag`](../../doc/models/response-tag.md)

## Example Usage

```php
$tagId = '11e95f8ec39de8fbdb0a4f1a';

$result = $tagsController->deleteTagRecord($tagId);
```

## Example Response *(as JSON)*

```json
{
  "type": "Tag",
  "data": {
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "title": "My terminal",
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "location": {
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
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# View Single Tags Record

```php
function viewSingleTagsRecord(string $tagId, ?array $expand = null, ?array $fields = null): ResponseTag
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `tagId` | `string` | Template, Required | Tag ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `expand` | [`?(string(Expand34Enum)[])`](../../doc/models/expand-34-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |
| `fields` | [`?(string(Field44Enum)[])`](../../doc/models/field-44-enum.md) | Query, Optional | You can use any `field_name` from this endpoint results to filter the list of fields returned on the response. |

## Response Type

[`ResponseTag`](../../doc/models/response-tag.md)

## Example Usage

```php
$tagId = '11e95f8ec39de8fbdb0a4f1a';

$result = $tagsController->viewSingleTagsRecord($tagId);
```

## Example Response *(as JSON)*

```json
{
  "type": "Tag",
  "data": {
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "title": "My terminal",
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "location": {
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
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# Update Tag Record

```php
function updateTagRecord(string $tagId, V1TagsRequest1 $body): ResponseTag
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `tagId` | `string` | Template, Required | Tag ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1TagsRequest1`](../../doc/models/v1-tags-request-1.md) | Body, Required | - |

## Response Type

[`ResponseTag`](../../doc/models/response-tag.md)

## Example Usage

```php
$tagId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1TagsRequest1Builder::init()
    ->locationId('11e95f8ec39de8fbdb0a4f1a')
    ->title('My terminal')
    ->build();

$result = $tagsController->updateTagRecord(
    $tagId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "Tag",
  "data": {
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "title": "My terminal",
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "location": {
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
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |

