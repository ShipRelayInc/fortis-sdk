
# V1 Transactions Cc Sale Keyed Request

## Structure

`V1TransactionsCcSaleKeyedRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `additionalAmounts` | [`?(AdditionalAmount[])`](../../doc/models/additional-amount.md) | Optional | Additional amounts | getAdditionalAmounts(): ?array | setAdditionalAmounts(?array additionalAmounts): void |
| `billingAddress` | [`?BillingAddress1`](../../doc/models/billing-address-1.md) | Optional | Billing Address Object | getBillingAddress(): ?BillingAddress1 | setBillingAddress(?BillingAddress1 billingAddress): void |
| `checkinDate` | `?string` | Optional | Checkin Date - The time difference between checkin_date and checkout_date must be less than or equal to 99 days. NOTE: if checkin_date is in the future, set the advance_deposit to 1<br><br>> Required if merchant industry type is lodging.<br>> <br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getCheckinDate(): ?string | setCheckinDate(?string checkinDate): void |
| `checkoutDate` | `?string` | Optional | Checkout Date - The time difference between checkin_date and checkout_date must be less than or equal to 99 days.<br><br>> Required if merchant industry type is lodging.<br>> <br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getCheckoutDate(): ?string | setCheckoutDate(?string checkoutDate): void |
| `clerkNumber` | `?string` | Optional | Clerk or Employee Identifier<br>**Constraints**: *Maximum Length*: `16` | getClerkNumber(): ?string | setClerkNumber(?string clerkNumber): void |
| `contactApiId` | `?string` | Optional | This can be supplied in place of contact_id if you would like to use a contact for the transaction and are using your own custom api_id's to track contacts in the system.<br>**Constraints**: *Maximum Length*: `36` | getContactApiId(): ?string | setContactApiId(?string contactApiId): void |
| `contactId` | `?string` | Optional | If contact_id is provided, ensure it belongs to the same location as the transaction. You cannot move transaction across locations.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getContactId(): ?string | setContactId(?string contactId): void |
| `customData` | `?array` | Optional | A field that allows custom JSON to be entered to store extra data. | getCustomData(): ?array | setCustomData(?array customData): void |
| `customerId` | `?string` | Optional | Can be used by Merchants to identify Contacts in our system by an ID from another system.<br>**Constraints**: *Maximum Length*: `64` | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `description` | `?string` | Optional | Description<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64` | getDescription(): ?string | setDescription(?string description): void |
| `identityVerification` | [`?IdentityVerification`](../../doc/models/identity-verification.md) | Optional | Identity Verification | getIdentityVerification(): ?IdentityVerification | setIdentityVerification(?IdentityVerification identityVerification): void |
| `iiasInd` | [`?int(IiasIndEnum)`](../../doc/models/iias-ind-enum.md) | Optional | Possible values are '0', '1','2' | getIiasInd(): ?int | setIiasInd(?int iiasInd): void |
| `imageFront` | `?string` | Optional | A base64 encoded string for the image.  Used with Check21 ACH transactions. | getImageFront(): ?string | setImageFront(?string imageFront): void |
| `imageBack` | `?string` | Optional | A base64 encoded string for the image.  Used with Check21 ACH transactions. | getImageBack(): ?string | setImageBack(?string imageBack): void |
| `installment` | `?bool` | Optional | Flag that is allowed to be passed on card not present industries to signify the transaction is a fixed installment plan transaction. | getInstallment(): ?bool | setInstallment(?bool installment): void |
| `installmentNumber` | `?int` | Optional | If this is a fixed installment plan and installment field is being passed as 1, then this field must have a vlue of 1-999 specifying the current installment number that is running.<br>**Constraints**: `>= 1`, `<= 999` | getInstallmentNumber(): ?int | setInstallmentNumber(?int installmentNumber): void |
| `installmentCount` | `?int` | Optional | If this is a fixed installment plan and installment field is being passed as 1, then this field must have a vlue of 1-999 specifying the total number of installments on the plan. This number must be grater than or equal to installment_number.<br>**Constraints**: `>= 1`, `<= 999` | getInstallmentCount(): ?int | setInstallmentCount(?int installmentCount): void |
| `locationApiId` | `?string` | Optional | This can be supplied in place of location_id for the transaction if you are using your own custom api_id's for your locations.<br>**Constraints**: *Maximum Length*: `36` | getLocationApiId(): ?string | setLocationApiId(?string locationApiId): void |
| `locationId` | `?string` | Optional | A valid Location Id to associate the transaction with.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `productTransactionId` | `?string` | Optional | The Product's method (cc/ach) has to match the action. If not provided, the API will use the default configured for the Location.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getProductTransactionId(): ?string | setProductTransactionId(?string productTransactionId): void |
| `advanceDeposit` | `?bool` | Optional | Advance Deposit | getAdvanceDeposit(): ?bool | setAdvanceDeposit(?bool advanceDeposit): void |
| `noShow` | `?bool` | Optional | Used in Lodging | getNoShow(): ?bool | setNoShow(?bool noShow): void |
| `notificationEmailAddress` | `?string` | Optional | If email is supplied then receipt will be emailed | getNotificationEmailAddress(): ?string | setNotificationEmailAddress(?string notificationEmailAddress): void |
| `orderNumber` | `?string` | Optional | Required for CC transactions , if merchant's deposit account's duplicate check per batch has 'order_number' field<br>**Constraints**: *Maximum Length*: `32` | getOrderNumber(): ?string | setOrderNumber(?string orderNumber): void |
| `poNumber` | `?string` | Optional | Purchase Order number<br>**Constraints**: *Maximum Length*: `36` | getPoNumber(): ?string | setPoNumber(?string poNumber): void |
| `quickInvoiceId` | `?string` | Optional | Can be used to associate a transaction to a Quick Invoice.  Quick Invoice transactions will have a value for this field automatically.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getQuickInvoiceId(): ?string | setQuickInvoiceId(?string quickInvoiceId): void |
| `recurring` | `?bool` | Optional | Flag that is allowed to be passed on card not present industries to signify the transaction is an ongoing recurring transaction. Possible values to send are 0 or 1. This field must be 0 or not present if installment is sent as 1. | getRecurring(): ?bool | setRecurring(?bool recurring): void |
| `recurringNumber` | `?int` | Optional | If this is an ongoing recurring and recurring field is being passed as 1, then this field must have a vlue of 1-999 specifying the current recurring number that is running.<br>**Constraints**: `>= 1`, `<= 999` | getRecurringNumber(): ?int | setRecurringNumber(?int recurringNumber): void |
| `roomNum` | `?string` | Optional | Used in Lodging<br>**Constraints**: *Maximum Length*: `12` | getRoomNum(): ?string | setRoomNum(?string roomNum): void |
| `roomRate` | `?int` | Optional | Required if merchant industry type is lodging. | getRoomRate(): ?int | setRoomRate(?int roomRate): void |
| `saveAccount` | `?bool` | Optional | Specifies to save account to contacts profile if account_number/track_data is present with either contact_id or contact_api_id in params. | getSaveAccount(): ?bool | setSaveAccount(?bool saveAccount): void |
| `saveAccountTitle` | `?string` | Optional | If saving token while running a transaction, this will be the title of the token.<br>**Constraints**: *Maximum Length*: `16` | getSaveAccountTitle(): ?string | setSaveAccountTitle(?string saveAccountTitle): void |
| `subtotalAmount` | `?int` | Optional | This field is allowed and required for transactions that have a product where surcharge is configured. Use only integer numbers, so $10.99 will be 1099.<br>**Constraints**: `>= 0`, `<= 999999999` | getSubtotalAmount(): ?int | setSubtotalAmount(?int subtotalAmount): void |
| `surchargeAmount` | `?int` | Optional | This field is allowed and required for transactions that have a product where surcharge is configured. Use only integer numbers, so $10.99 will be 1099.<br>**Constraints**: `>= 0`, `<= 999999999` | getSurchargeAmount(): ?int | setSurchargeAmount(?int surchargeAmount): void |
| `tags` | `?(string[])` | Optional | Tags | getTags(): ?array | setTags(?array tags): void |
| `tax` | `?int` | Optional | Amount of Sales tax - If supplied, this amount should be included in the total transaction_amount field. Use only integer numbers, so $10.99 will be 1099.<br>**Constraints**: `>= 0`, `<= 999999999` | getTax(): ?int | setTax(?int tax): void |
| `tipAmount` | `?int` | Optional | Optional tip amount. Tip is not supported for lodging and ecommerce merchants. Use only integer numbers, so $10.99 will be 1099.<br>**Constraints**: `>= 0`, `<= 999999999` | getTipAmount(): ?int | setTipAmount(?int tipAmount): void |
| `transactionAmount` | `int` | Required | Amount of the transaction. This should always be the desired settle amount of the transaction. Use only integer numbers, so $10.99 will be 1099.<br>**Constraints**: `>= 1`, `<= 999999999` | getTransactionAmount(): int | setTransactionAmount(int transactionAmount): void |
| `secondaryAmount` | `?int` | Optional | Retained Amount of the transaction. This should always be less than transaction amount. Use only integer numbers, so $10.99 will be 1099<br>**Constraints**: `>= 0`, `<= 999999999` | getSecondaryAmount(): ?int | setSecondaryAmount(?int secondaryAmount): void |
| `transactionApiId` | `?string` | Optional | See api_id page for more details<br>**Constraints**: *Maximum Length*: `64` | getTransactionApiId(): ?string | setTransactionApiId(?string transactionApiId): void |
| `transactionC1` | `?string` | Optional | Custom field 1 for api users to store custom data<br>**Constraints**: *Maximum Length*: `128` | getTransactionC1(): ?string | setTransactionC1(?string transactionC1): void |
| `transactionC2` | `?string` | Optional | Custom field 2 for api users to store custom data<br>**Constraints**: *Maximum Length*: `128` | getTransactionC2(): ?string | setTransactionC2(?string transactionC2): void |
| `transactionC3` | `?string` | Optional | Custom field 3 for api users to store custom data<br>**Constraints**: *Maximum Length*: `128` | getTransactionC3(): ?string | setTransactionC3(?string transactionC3): void |
| `bankFundedOnlyOverride` | `?bool` | Optional | Bank Funded Only Override | getBankFundedOnlyOverride(): ?bool | setBankFundedOnlyOverride(?bool bankFundedOnlyOverride): void |
| `allowPartialAuthorizationOverride` | `?bool` | Optional | Allow Partial Authorization Override | getAllowPartialAuthorizationOverride(): ?bool | setAllowPartialAuthorizationOverride(?bool allowPartialAuthorizationOverride): void |
| `autoDeclineCvvOverride` | `?bool` | Optional | Auto Decline CVV Override | getAutoDeclineCvvOverride(): ?bool | setAutoDeclineCvvOverride(?bool autoDeclineCvvOverride): void |
| `autoDeclineStreetOverride` | `?bool` | Optional | Auto Decline Street Override | getAutoDeclineStreetOverride(): ?bool | setAutoDeclineStreetOverride(?bool autoDeclineStreetOverride): void |
| `autoDeclineZipOverride` | `?bool` | Optional | Auto Decline Zip Override | getAutoDeclineZipOverride(): ?bool | setAutoDeclineZipOverride(?bool autoDeclineZipOverride): void |
| `ebtType` | [`?string(EbtTypeEnum)`](../../doc/models/ebt-type-enum.md) | Optional | EBT Type | getEbtType(): ?string | setEbtType(?string ebtType): void |
| `cardholderPresent` | `?bool` | Optional | If the cardholder is present at the point of service | getCardholderPresent(): ?bool | setCardholderPresent(?bool cardholderPresent): void |
| `cardPresent` | `?bool` | Optional | A POST only field to specify whether or not the card is present.<br><br>> This field will be defaulted to '1' for all card present industries (retail, lodging, restaurant) and '0' for card not present industries (MOTO/e-commerce).<br>> For lodging, if the no_show flag is set to '1', this field will automatically be set to '0'.<br>> For transactions where account_vault_id is used, this filed will be set to '0'. | getCardPresent(): ?bool | setCardPresent(?bool cardPresent): void |
| `secureAuthData` | `?string` | Optional | (ECOMM) The token authentication value associated with 3D secure transactions (Such as CAVV, UCAF auth data) | getSecureAuthData(): ?string | setSecureAuthData(?string secureAuthData): void |
| `secureProtocolVersion` | `?int` | Optional | (ECOMM)  Secure Program Protocol Version | getSecureProtocolVersion(): ?int | setSecureProtocolVersion(?int secureProtocolVersion): void |
| `secureCollectionIndicator` | `?int` | Optional | (ECOMM) Used for UCAF collection indicator or Discover Autentication type | getSecureCollectionIndicator(): ?int | setSecureCollectionIndicator(?int secureCollectionIndicator): void |
| `secureCryptogram` | `?string` | Optional | (ECOMM) Used to supply the Digital Payment Cryptogram obtained from a Digital Secure Remote Payment (DSRP) transaction | getSecureCryptogram(): ?string | setSecureCryptogram(?string secureCryptogram): void |
| `secureDirectoryServerTransactionId` | `?string` | Optional | (ECOMM) Directory Server Transaction ID (Such as XID, TAVV) | getSecureDirectoryServerTransactionId(): ?string | setSecureDirectoryServerTransactionId(?string secureDirectoryServerTransactionId): void |
| `secureEcommUrl` | `?string` | Optional | (ECOMM) This field is used to enter a merchant identifier such as the Merchant URL or reverse domain name as presented to the consumer during the checkout process for a Digital Secure Remote payment transaction | getSecureEcommUrl(): ?string | setSecureEcommUrl(?string secureEcommUrl): void |
| `terminalSerialNumber` | `?string` | Optional | If transaction was processed using a terminal, this field would contain the terminal's serial number<br>**Constraints**: *Maximum Length*: `36`, *Pattern*: `^[a-zA-Z0-9]*$` | getTerminalSerialNumber(): ?string | setTerminalSerialNumber(?string terminalSerialNumber): void |
| `threedsecure` | `?bool` | Optional | (ECOMM) Specify if the transaction is obtained by 3DSecure. | getThreedsecure(): ?bool | setThreedsecure(?bool threedsecure): void |
| `threeDsServerTransId` | `?string` | Optional | 3DS Server Transaction ID.  If this field is sent and 3DS authentication was done with Fortis, the 3DS fields secure_directory_server_transaction_id, secure_protocol_version, and secure_collection_indicator will be pre-populated. | getThreeDsServerTransId(): ?string | setThreeDsServerTransId(?string threeDsServerTransId): void |
| `walletType` | [`?string(WalletTypeEnum)`](../../doc/models/wallet-type-enum.md) | Optional | This value provides information from where the transaction was initialized (Such as In-App provider)<br><br>> 000 - Unknown wallet type (i.e., Discover PayButton)<br>> <br>> 101 - MasterPass by MasterCard<br>> <br>> 103 - Apple Pay<br>> <br>> 216 - Google Pay<br>> <br>> 217 - Samsung Pay<br>> <br>> 327 - Merchant tokenization program | getWalletType(): ?string | setWalletType(?string walletType): void |
| `clerkId` | `?string` | Optional | Clerk ID | getClerkId(): ?string | setClerkId(?string clerkId): void |
| `voucherNumber` | `?string` | Optional | Voucher Number | getVoucherNumber(): ?string | setVoucherNumber(?string voucherNumber): void |
| `initiationType` | [`?string(InitiationTypeEnum)`](../../doc/models/initiation-type-enum.md) | Optional | Initiation Type | getInitiationType(): ?string | setInitiationType(?string initiationType): void |
| `billPayment` | `?bool` | Optional | If transaction is a bill payment | getBillPayment(): ?bool | setBillPayment(?bool billPayment): void |
| `delayCharge` | `?bool` | Optional | Delay Charge | getDelayCharge(): ?bool | setDelayCharge(?bool delayCharge): void |
| `accountHolderName` | `?string` | Optional | For CC, this is the 'Name (as it appears) on Card'. For ACH, this is the 'Name on Account'.<br><br>> Required for ACH transactions if account_vault_id is not provided. For CC transactions that are run through a terminal, this field may be overwritten by data acquired from the credit card track data.<br>> <br>**Constraints**: *Maximum Length*: `32` | getAccountHolderName(): ?string | setAccountHolderName(?string accountHolderName): void |
| `accountNumber` | `string` | Required | For CC transactions, a credit card number. For ACH transactions, a bank account number.<br><br>> String lengths are conditional, CC should be 13-19 and ACH should be 4-19. Required if account_vault_id , track_data, or micr_data is not provided.<br>> <br>**Constraints**: *Minimum Length*: `13`, *Maximum Length*: `19` | getAccountNumber(): string | setAccountNumber(string accountNumber): void |
| `cvv` | `?string` | Optional | Required for CC transactions if vt_require_cvv is true on producttransaction(Merchant Deposit Account).<br>**Constraints**: *Maximum Length*: `4` | getCvv(): ?string | setCvv(?string cvv): void |
| `entryModeId` | [`?string(EntryModeIdEnum)`](../../doc/models/entry-mode-id-enum.md) | Optional | Entry Mode - See entry mode section for more detail | getEntryModeId(): ?string | setEntryModeId(?string entryModeId): void |
| `expDate` | `string` | Required | Required for CC. The Expiration Date for the credit card. (MMYY format).<br>**Constraints**: *Maximum Length*: `4` | getExpDate(): string | setExpDate(string expDate): void |
| `trackData` | `?string` | Optional | Track Data from a magnetic card swipe.<br>**Constraints**: *Maximum Length*: `256` | getTrackData(): ?string | setTrackData(?string trackData): void |
| `pin` | `?string` | Optional | Pin | getPin(): ?string | setPin(?string pin): void |
| `ksn` | `?string` | Optional | KSN (Key Serial Number) | getKsn(): ?string | setKsn(?string ksn): void |

## Example (as JSON)

```json
{
  "checkin_date": "2021-12-01",
  "checkout_date": "2021-12-01",
  "clerk_number": "AE1234",
  "contact_id": "11e95f8ec39de8fbdb0a4f1a",
  "custom_data": {
    "data1": "custom1",
    "data2": "custom2"
  },
  "customer_id": "customerid",
  "description": "some description",
  "iias_ind": 1,
  "image_front": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
  "image_back": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
  "installment": true,
  "installment_number": 1,
  "installment_count": 1,
  "location_api_id": "location-api-id-florida-2",
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "advance_deposit": false,
  "no_show": false,
  "notification_email_address": "johnsmith@smiths.com",
  "order_number": "433659378839",
  "po_number": "555555553123",
  "quick_invoice_id": "11e95f8ec39de8fbdb0a4f1a",
  "recurring": false,
  "recurring_number": 1,
  "room_num": "303",
  "room_rate": 95,
  "save_account": false,
  "save_account_title": "John Account",
  "subtotal_amount": 599,
  "surcharge_amount": 100,
  "tax": 0,
  "tip_amount": 0,
  "transaction_amount": 1,
  "secondary_amount": 0,
  "transaction_api_id": "transaction-payment-abcd123",
  "transaction_c1": "custom-data-1",
  "transaction_c2": "custom-data-2",
  "transaction_c3": "custom-data-3",
  "bank_funded_only_override": false,
  "allow_partial_authorization_override": false,
  "auto_decline_cvv_override": false,
  "auto_decline_street_override": false,
  "auto_decline_zip_override": false,
  "ebt_type": "food_stamp",
  "secure_auth_data": "vVwL7UNHCf8W8M2LAfvRChNHN7c%3D",
  "secure_protocol_version": 2,
  "secure_cryptogram": "ZVVEVDJITHpTNE9yNlNHMUh0R0E=",
  "secure_directory_server_transaction_id": "d65e93c3-35ab-41ba-b307-767bfc19eae",
  "terminal_serial_number": "1234567890",
  "threedsecure": true,
  "three_ds_server_trans_id": "d65e93c3-35ab-41ba-b307-767bfc19eae",
  "clerk_id": "1234",
  "voucher_number": "1234",
  "initiation_type": "M103",
  "bill_payment": true,
  "delay_charge": true,
  "account_holder_name": "smith",
  "account_number": "5454545454545454",
  "entry_mode_id": "K",
  "exp_date": "0722",
  "track_data": "T051904524T 741025349520O 8520748520963",
  "pin": "1234",
  "ksn": "1234",
  "additional_amounts": [
    {
      "type": "cashback",
      "amount": 6,
      "account_type": "cash_benefit",
      "currency": 154.64
    }
  ],
  "billing_address": {
    "city": "city2",
    "state": "state6",
    "postal_code": "postal_code0",
    "street": "street8",
    "phone": "phone2"
  }
}
```

