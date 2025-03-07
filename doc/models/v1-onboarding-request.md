
# V1 Onboarding Request

## Structure

`V1OnboardingRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `parentId` | `?string` | Optional | Location ID | getParentId(): ?string | setParentId(?string parentId): void |
| `primaryPrincipal` | [`PrimaryPrincipal1`](../../doc/models/primary-principal-1.md) | Required | The Primary Principal. | getPrimaryPrincipal(): PrimaryPrincipal1 | setPrimaryPrincipal(PrimaryPrincipal1 primaryPrincipal): void |
| `templateCode` | `string` | Required | The ID of the template to be used - this value will be provided by Fortis.<br>**Constraints**: *Maximum Length*: `20`, *Pattern*: `^[a-zA-Z0-9]*$` | getTemplateCode(): string | setTemplateCode(string templateCode): void |
| `email` | `string` | Required | Merchant email address.<br>**Constraints**: *Maximum Length*: `100` | getEmail(): string | setEmail(string email): void |
| `dbaName` | `string` | Required | Merchant 'Doing Business As' name.<br>**Constraints**: *Maximum Length*: `100` | getDbaName(): string | setDbaName(string dbaName): void |
| `location` | [`Location20`](../../doc/models/location-20.md) | Required | The Location. | getLocation(): Location20 | setLocation(Location20 location): void |
| `appDelivery` | [`string(AppDeliveryEnum)`](../../doc/models/app-delivery-enum.md) | Required | The delivery method of the app to the merchant.<br>**Constraints**: *Maximum Length*: `12` | getAppDelivery(): string | setAppDelivery(string appDelivery): void |
| `businessCategory` | [`?string(BusinessCategoryEnum)`](../../doc/models/business-category-enum.md) | Optional | The Category of the merchant's business<br><br>> (Required if "business_type" is provided). Note: "business_type" must belong to the appropriate "business_category" | getBusinessCategory(): ?string | setBusinessCategory(?string businessCategory): void |
| `businessType` | [`?string(BusinessTypeEnum)`](../../doc/models/business-type-enum.md) | Optional | The Type of a merchant's business. | getBusinessType(): ?string | setBusinessType(?string businessType): void |
| `businessDescription` | `?string` | Optional | Description of Goods or Services.<br>**Constraints**: *Maximum Length*: `200` | getBusinessDescription(): ?string | setBusinessDescription(?string businessDescription): void |
| `swipedPercent` | `?int` | Optional | Card present/swiped percentage<br><br>> The sum total of "swiped_percent", "keyed_percent" and "ecommerce_percent" must add up to 100.<br>> <br>**Constraints**: `>= 0`, `<= 100` | getSwipedPercent(): ?int | setSwipedPercent(?int swipedPercent): void |
| `keyedPercent` | `?int` | Optional | Card not present/keyed percentage<br><br>> The sum total of "swiped_percent", "keyed_percent" and "ecommerce_percent" must add up to 100.<br>> <br>**Constraints**: `>= 0`, `<= 100` | getKeyedPercent(): ?int | setKeyedPercent(?int keyedPercent): void |
| `ecommercePercent` | `?int` | Optional | eCommerce percentage.<br><br>> The sum total of "swiped_percent", "keyed_percent" and "ecommerce_percent" must add up to 100.<br>> <br>**Constraints**: `>= 0`, `<= 100` | getEcommercePercent(): ?int | setEcommercePercent(?int ecommercePercent): void |
| `ownershipType` | [`?string(OwnershipTypeEnum)`](../../doc/models/ownership-type-enum.md) | Optional | The Ownership Type of the merchant's business.<br>**Constraints**: *Maximum Length*: `10` | getOwnershipType(): ?string | setOwnershipType(?string ownershipType): void |
| `fedTaxId` | `?string` | Optional | Federal Tax ID (EIN).<br>**Constraints**: *Maximum Length*: `10` | getFedTaxId(): ?string | setFedTaxId(?string fedTaxId): void |
| `ccAverageTicketRange` | `?int` | Optional | Average Transaction Amount Range<br><br>> (Applicable when Template Application Type is 'credit_card' or 'both').<br>> <br>**Constraints**: `>= 1`, `<= 7` | getCcAverageTicketRange(): ?int | setCcAverageTicketRange(?int ccAverageTicketRange): void |
| `ccMonthlyVolumeRange` | `?int` | Optional | Monthly Processing Volume Range<br><br>> (Applicable when Template Application Type is 'credit_card' or 'both').<br>> <br>**Constraints**: `>= 1`, `<= 7` | getCcMonthlyVolumeRange(): ?int | setCcMonthlyVolumeRange(?int ccMonthlyVolumeRange): void |
| `ccHighTicket` | `?int` | Optional | Highest transaction amount rounded to the next dollar<br><br>> (No decimal and applicable when Template Application Type is 'credit_card' or 'both').<br>> <br>**Constraints**: `>= 0`, `<= 30000` | getCcHighTicket(): ?int | setCcHighTicket(?int ccHighTicket): void |
| `ecAverageTicketRange` | `?int` | Optional | Average Transaction Amount Range<br><br>> (Applicable when Template Application Type is 'echeck' or 'both').<br>> <br>**Constraints**: `>= 1`, `<= 7` | getEcAverageTicketRange(): ?int | setEcAverageTicketRange(?int ecAverageTicketRange): void |
| `ecMonthlyVolumeRange` | `?int` | Optional | Monthly Processing Volume Range<br><br>> (Applicable when Template Application Type is 'echeck' or 'both').<br>> <br>**Constraints**: `>= 1`, `<= 7` | getEcMonthlyVolumeRange(): ?int | setEcMonthlyVolumeRange(?int ecMonthlyVolumeRange): void |
| `ecHighTicket` | `?int` | Optional | Highest transaction amount rounded to the next dollar<br><br>> (No decimal and applicable when Template Application Type is 'echeck' or 'both').<br>> <br>**Constraints**: `>= 0`, `<= 30000` | getEcHighTicket(): ?int | setEcHighTicket(?int ecHighTicket): void |
| `website` | `?string` | Optional | Merchant's business website.<br><br>> (Required if "ecommerce_percent" is greater than 0).<br>> <br>**Constraints**: *Maximum Length*: `100` | getWebsite(): ?string | setWebsite(?string website): void |
| `bankAccount` | [`?BankAccount`](../../doc/models/bank-account.md) | Optional | The Bank Account. | getBankAccount(): ?BankAccount | setBankAccount(?BankAccount bankAccount): void |
| `altBankAccount` | [`?AltBankAccount`](../../doc/models/alt-bank-account.md) | Optional | The Alternative Bank Account. | getAltBankAccount(): ?AltBankAccount | setAltBankAccount(?AltBankAccount altBankAccount): void |
| `legalName` | `?string` | Optional | Merchant legal name.<br><br>> (leave blank if same as DBA name).<br>> <br>**Constraints**: *Maximum Length*: `100` | getLegalName(): ?string | setLegalName(?string legalName): void |
| `contact` | [`Contact11`](../../doc/models/contact-11.md) | Required | The Contact. | getContact(): Contact11 | setContact(Contact11 contact): void |
| `clientAppId` | `?string` | Optional | Client Issues Id to track that can be used to track each submitted merchant application. This id should be generated and sent in the request payload, and will be returned in the response payload. If no id is submitted in the payload request, this field will be null in the response.<br>**Constraints**: *Maximum Length*: `50` | getClientAppId(): ?string | setClientAppId(?string clientAppId): void |
| `secCodes` | [`?(string(SecCodeEnum)[])`](../../doc/models/sec-code-enum.md) | Optional | Array of SEC codes that will be allowed, Only applicable for ACH. Valid values are 'PPD', 'WEB', 'TEL', 'CCD'. | getSecCodes(): ?array | setSecCodes(?array secCodes): void |

## Example (as JSON)

```json
{
  "primary_principal": {
    "first_name": "Bob",
    "last_name": "Fairview",
    "middle_name": "Nathaniel",
    "title": "Dr",
    "date_of_birth": "2021-12-01",
    "address_line_1": "1354 Oak St.",
    "address_line_2": "Unit 203",
    "city": "Dover",
    "state_province": "DE",
    "postal_code": "55022",
    "ownership_percent": 100,
    "phone_number": "555-555-1234"
  },
  "template_code": "1234YourTemplateCode",
  "email": "email@domain.com",
  "dba_name": "Discount Home Goods",
  "location": {
    "address_line_1": "1200 West Hartford Pkwy",
    "address_line_2": "Suite 2000",
    "city": "Dover",
    "state_province": "DE",
    "postal_code": "55022",
    "phone_number": "555-555-1212"
  },
  "app_delivery": "direct",
  "business_category": "education",
  "swiped_percent": 0,
  "keyed_percent": 0,
  "ecommerce_percent": 100,
  "ownership_type": "llp",
  "fed_tax_id": "0000000000",
  "cc_average_ticket_range": 5,
  "cc_monthly_volume_range": 1,
  "cc_high_ticket": 1500,
  "ec_average_ticket_range": 5,
  "ec_monthly_volume_range": 2,
  "ec_high_ticket": 1500,
  "website": "http://www.example.com",
  "legal_name": "Total Home Goods, LLP",
  "contact": {
    "first_name": "Jeffery",
    "last_name": "Todd",
    "email": "jtodd@example.com",
    "phone_number": "555-555-3456"
  },
  "client_app_id": "ABC123",
  "parent_id": "parent_id2",
  "business_type": "books_mags_music_and_video",
  "business_description": "business_description0"
}
```

