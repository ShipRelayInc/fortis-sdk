
# V1 Paylinks Request 1

## Structure

`V1PaylinksRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `ccProductTransactionId` | `?string` | Optional | cc_product_transaction_id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCcProductTransactionId(): ?string | setCcProductTransactionId(?string ccProductTransactionId): void |
| `email` | `?string` | Optional | Email<br>**Constraints**: *Maximum Length*: `128` | getEmail(): ?string | setEmail(?string email): void |
| `amountDue` | `?int` | Optional | Amount Due<br>**Constraints**: `>= 1`, `<= 999999999` | getAmountDue(): ?int | setAmountDue(?int amountDue): void |
| `locationApiId` | `?string` | Optional | Location Api Id | getLocationApiId(): ?string | setLocationApiId(?string locationApiId): void |
| `contactId` | `?string` | Optional | Contact Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getContactId(): ?string | setContactId(?string contactId): void |
| `contactApiId` | `?string` | Optional | Contact Api Id | getContactApiId(): ?string | setContactApiId(?string contactApiId): void |
| `paylinkApiId` | `?string` | Optional | Paylinke Api Id<br>**Constraints**: *Maximum Length*: `64` | getPaylinkApiId(): ?string | setPaylinkApiId(?string paylinkApiId): void |
| `achProductTransactionId` | `?string` | Optional | Ach Product Transaction Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getAchProductTransactionId(): ?string | setAchProductTransactionId(?string achProductTransactionId): void |
| `expireDate` | `?string` | Optional | Expire Date<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getExpireDate(): ?string | setExpireDate(?string expireDate): void |
| `displayProductTransactionReceiptDetails` | `?bool` | Optional | Display Product Transaction Receipt Details | getDisplayProductTransactionReceiptDetails(): ?bool | setDisplayProductTransactionReceiptDetails(?bool displayProductTransactionReceiptDetails): void |
| `displayBillingFields` | `?bool` | Optional | Display Billing Fields | getDisplayBillingFields(): ?bool | setDisplayBillingFields(?bool displayBillingFields): void |
| `deliveryMethod` | [`?int(DeliveryMethodEnum)`](../../doc/models/delivery-method-enum.md) | Optional | Delivery Method<br><br>> 0 - Do not send<br>> <br>> 1 - Email<br>> <br>> 2 - SMS<br>> <br>> 3 - Both | getDeliveryMethod(): ?int | setDeliveryMethod(?int deliveryMethod): void |
| `cellPhone` | `?string` | Optional | Cell Phone<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getCellPhone(): ?string | setCellPhone(?string cellPhone): void |
| `description` | `?string` | Optional | Description<br>**Constraints**: *Maximum Length*: `64` | getDescription(): ?string | setDescription(?string description): void |
| `storeToken` | `?bool` | Optional | Store Token | getStoreToken(): ?bool | setStoreToken(?bool storeToken): void |
| `storeTokenTitle` | `?string` | Optional | Store Token Title<br>**Constraints**: *Maximum Length*: `16` | getStoreTokenTitle(): ?string | setStoreTokenTitle(?string storeTokenTitle): void |
| `paylinkAction` | [`?string(PaylinkActionEnum)`](../../doc/models/paylink-action-enum.md) | Optional | Paylink Action | getPaylinkAction(): ?string | setPaylinkAction(?string paylinkAction): void |
| `bankFundedOnlyOverride` | `?bool` | Optional | Bank Funded Only Override | getBankFundedOnlyOverride(): ?bool | setBankFundedOnlyOverride(?bool bankFundedOnlyOverride): void |
| `tags` | `?(string[])` | Optional | Used to apply tags to a paylink. | getTags(): ?array | setTags(?array tags): void |
| `redirectUrlDelay` | `?float` | Optional | Redirect URL Delay in seconds<br>**Constraints**: `<= 15` | getRedirectUrlDelay(): ?float | setRedirectUrlDelay(?float redirectUrlDelay): void |
| `redirectUrlOnApprove` | `?string` | Optional | Redirect URL On Approval | getRedirectUrlOnApprove(): ?string | setRedirectUrlOnApprove(?string redirectUrlOnApprove): void |
| `redirectUrlOnDecline` | `?string` | Optional | Redirect URL On Decline | getRedirectUrlOnDecline(): ?string | setRedirectUrlOnDecline(?string redirectUrlOnDecline): void |

## Example (as JSON)

```json
{
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "cc_product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "email": "email@domain.com",
  "amount_due": 1,
  "contact_id": "11e95f8ec39de8fbdb0a4f1a",
  "ach_product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "expire_date": "2021-12-01",
  "display_product_transaction_receipt_details": true,
  "display_billing_fields": true,
  "delivery_method": 0,
  "cell_phone": "3339998822",
  "description": "Description",
  "store_token": false,
  "store_token_title": "John Account",
  "bank_funded_only_override": false,
  "redirect_url_delay": 15,
  "location_api_id": "location_api_id4"
}
```

