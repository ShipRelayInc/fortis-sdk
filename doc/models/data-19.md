
# Data 19

## Structure

`Data19`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountVaultId` | `?string` | Optional | Token ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getAccountVaultId(): ?string | setAccountVaultId(?string accountVaultId): void |
| `tokenId` | `?string` | Optional | Token ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getTokenId(): ?string | setTokenId(?string tokenId): void |
| `contactId` | `?string` | Optional | Contact ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getContactId(): ?string | setContactId(?string contactId): void |
| `accountVaultApiId` | `?string` | Optional | Token API ID<br>**Constraints**: *Maximum Length*: `64` | getAccountVaultApiId(): ?string | setAccountVaultApiId(?string accountVaultApiId): void |
| `tokenApiId` | `?string` | Optional | Token API ID<br>**Constraints**: *Maximum Length*: `64` | getTokenApiId(): ?string | setTokenApiId(?string tokenApiId): void |
| `joi` | [`?Joi`](../../doc/models/joi.md) | Optional | - | getJoi(): ?Joi | setJoi(?Joi joi): void |
| `active` | `?bool` | Optional | Active | getActive(): ?bool | setActive(?bool active): void |
| `description` | `?string` | Optional | Description<br>**Constraints**: *Maximum Length*: `36` | getDescription(): ?string | setDescription(?string description): void |
| `endDate` | `?string` | Optional | End date<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getEndDate(): ?string | setEndDate(?string endDate): void |
| `installmentTotalCount` | `?int` | Optional | Installment Total Count<br>**Constraints**: `>= 1`, `<= 999` | getInstallmentTotalCount(): ?int | setInstallmentTotalCount(?int installmentTotalCount): void |
| `interval` | `?int` | Optional | Interval<br>**Constraints**: `>= 0`, `<= 365` | getInterval(): ?int | setInterval(?int interval): void |
| `intervalType` | [`?string(IntervalTypeEnum)`](../../doc/models/interval-type-enum.md) | Optional | Interval Type | getIntervalType(): ?string | setIntervalType(?string intervalType): void |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `notificationDays` | `?int` | Optional | Notification Days<br>**Constraints**: `>= 0`, `<= 365` | getNotificationDays(): ?int | setNotificationDays(?int notificationDays): void |
| `paymentMethod` | [`?string(PaymentMethod1Enum)`](../../doc/models/payment-method-1-enum.md) | Optional | Payment Method | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `productTransactionId` | `?string` | Optional | Product Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getProductTransactionId(): ?string | setProductTransactionId(?string productTransactionId): void |
| `recurringId` | `?string` | Optional | Recurring ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getRecurringId(): ?string | setRecurringId(?string recurringId): void |
| `recurringApiId` | `?string` | Optional | Recurring Api ID<br>**Constraints**: *Maximum Length*: `64` | getRecurringApiId(): ?string | setRecurringApiId(?string recurringApiId): void |
| `startDate` | `?string` | Optional | Start date<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getStartDate(): ?string | setStartDate(?string startDate): void |
| `status` | [`?string(StatusEnum)`](../../doc/models/status-enum.md) | Optional | Status | getStatus(): ?string | setStatus(?string status): void |
| `transactionAmount` | `?int` | Optional | Transaction amount | getTransactionAmount(): ?int | setTransactionAmount(?int transactionAmount): void |
| `termsAgree` | `?bool` | Optional | Terms Agree | getTermsAgree(): ?bool | setTermsAgree(?bool termsAgree): void |
| `termsAgreeIp` | `?string` | Optional | Terms Agree Ip | getTermsAgreeIp(): ?string | setTermsAgreeIp(?string termsAgreeIp): void |
| `recurringC1` | `?string` | Optional | Custom field used for integrations<br>**Constraints**: *Maximum Length*: `128` | getRecurringC1(): ?string | setRecurringC1(?string recurringC1): void |
| `recurringC2` | `?string` | Optional | Custom field used for integrations<br>**Constraints**: *Maximum Length*: `128` | getRecurringC2(): ?string | setRecurringC2(?string recurringC2): void |
| `recurringC3` | `?string` | Optional | Custom field used for integrations<br>**Constraints**: *Maximum Length*: `128` | getRecurringC3(): ?string | setRecurringC3(?string recurringC3): void |
| `sendToProcAsRecur` | `?bool` | Optional | Send To Proc As Recur | getSendToProcAsRecur(): ?bool | setSendToProcAsRecur(?bool sendToProcAsRecur): void |
| `tags` | [`?(Tag[])`](../../doc/models/tag.md) | Optional | Tag Information on `expand` | getTags(): ?array | setTags(?array tags): void |
| `secondaryAmount` | `?int` | Optional | Retained Amount | getSecondaryAmount(): ?int | setSecondaryAmount(?int secondaryAmount): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `id` | `?string` | Optional | Recurring ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): ?string | setId(?string id): void |
| `nextRunDate` | `?string` | Optional | Next Run Date<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getNextRunDate(): ?string | setNextRunDate(?string nextRunDate): void |
| `createdTs` | `?int` | Optional | Created Time Stamp | getCreatedTs(): ?int | setCreatedTs(?int createdTs): void |
| `modifiedTs` | `?int` | Optional | Modified Time Stamp | getModifiedTs(): ?int | setModifiedTs(?int modifiedTs): void |
| `recurringTypeId` | [`?string(RecurringTypeIdEnum)`](../../doc/models/recurring-type-id-enum.md) | Optional | Recurring Type | getRecurringTypeId(): ?string | setRecurringTypeId(?string recurringTypeId): void |
| `installmentAmountTotal` | `?int` | Optional | Installment Amount Total | getInstallmentAmountTotal(): ?int | setInstallmentAmountTotal(?int installmentAmountTotal): void |
| `createdUserId` | `?string` | Optional | User ID Created the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): ?string | setCreatedUserId(?string createdUserId): void |
| `logEmails` | [`?(LogEmail[])`](../../doc/models/log-email.md) | Optional | Log Email Information on `expand` | getLogEmails(): ?array | setLogEmails(?array logEmails): void |
| `contact` | [`?Contact1`](../../doc/models/contact-1.md) | Optional | Contact Information on `expand` | getContact(): ?Contact1 | setContact(?Contact1 contact): void |
| `accountVault` | [`?AccountVault`](../../doc/models/account-vault.md) | Optional | Token Information on `expand` | getAccountVault(): ?AccountVault | setAccountVault(?AccountVault accountVault): void |
| `createdUser` | [`?CreatedUser`](../../doc/models/created-user.md) | Optional | User Information on `expand` | getCreatedUser(): ?CreatedUser | setCreatedUser(?CreatedUser createdUser): void |
| `signature` | [`?Signature`](../../doc/models/signature.md) | Optional | Signature Information on `expand` | getSignature(): ?Signature | setSignature(?Signature signature): void |
| `paymentSchedule` | `?(string[])` | Optional | Payment Schedule Information on `expand`<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getPaymentSchedule(): ?array | setPaymentSchedule(?array paymentSchedule): void |
| `location` | [`?Location`](../../doc/models/location.md) | Optional | Location Information on `expand` | getLocation(): ?Location | setLocation(?Location location): void |
| `productTransaction` | [`?ProductTransaction`](../../doc/models/product-transaction.md) | Optional | Product Transaction Information on `expand` | getProductTransaction(): ?ProductTransaction | setProductTransaction(?ProductTransaction productTransaction): void |
| `nextRunDateMin` | `?string` | Optional | Next Run Date Min Information on `expand`<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getNextRunDateMin(): ?string | setNextRunDateMin(?string nextRunDateMin): void |
| `nextRunDateMax` | `?string` | Optional | Next Run Date Max Information on `expand`<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getNextRunDateMax(): ?string | setNextRunDateMax(?string nextRunDateMax): void |
| `allTags` | [`?(AllTag[])`](../../doc/models/all-tag.md) | Optional | All Tag Information on `expand` | getAllTags(): ?array | setAllTags(?array allTags): void |
| `changelogs` | [`?(Changelog[])`](../../doc/models/changelog.md) | Optional | Changelog Information on `expand` | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `forecast` | [`?Forecast`](../../doc/models/forecast.md) | Optional | Forecast Information on `expand` | getForecast(): ?Forecast | setForecast(?Forecast forecast): void |
| `recurringSplits` | [`?(RecurringSplit[])`](../../doc/models/recurring-split.md) | Optional | Recurring Split Information on `expand` | getRecurringSplits(): ?array | setRecurringSplits(?array recurringSplits): void |

## Example (as JSON)

```json
{
  "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
  "token_id": "11e95f8ec39de8fbdb0a4f1a",
  "contact_id": "11e95f8ec39de8fbdb0a4f1a",
  "account_vault_api_id": "token1234abcd",
  "token_api_id": "token1234abcd",
  "active": true,
  "description": "Description",
  "end_date": "2021-12-01",
  "installment_total_count": 20,
  "interval": 1,
  "interval_type": "d",
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "notification_days": 2,
  "payment_method": "cc",
  "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
  "recurring_api_id": "recurring1234abcd",
  "start_date": "2021-12-01",
  "status": "active",
  "transaction_amount": 300,
  "terms_agree": true,
  "terms_agree_ip": "192.168.0.10",
  "recurring_c1": "recurring custom data 1",
  "recurring_c2": "recurring custom data 2",
  "recurring_c3": "recurring custom data 3",
  "send_to_proc_as_recur": true,
  "secondary_amount": 100,
  "currency": "USD",
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "next_run_date": "2021-12-01",
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "recurring_type_id": "i",
  "installment_amount_total": 99999999,
  "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "next_run_date_min": "2021-12-01",
  "next_run_date_max": "2021-12-01"
}
```

