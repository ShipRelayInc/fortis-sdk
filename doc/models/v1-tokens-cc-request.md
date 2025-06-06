
# V1 Tokens Cc Request

## Structure

`V1TokensCcRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountHolderName` | `?string` | Optional | Account holder name<br><br>> For CC, this is the 'Name (as it appears) on Card'. For ACH, this is the 'Name on Account'.<br>> <br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `32` | getAccountHolderName(): ?string | setAccountHolderName(?string accountHolderName): void |
| `accountNumber` | `?string` | Optional | Account number<br><br>> For CC transactions, a credit card number. For ACH transactions, a bank account number. String lengths are conditional, CC should be 13-19 and ACH should be 4-19. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountVaultApiId` | `?string` | Optional | This field can be used to correlate Tokens in our system to data within an outside software integration<br><br>> Must be unique per location. When running a transaction and using a stored token, this field can be used in place of account_vault_id.<br>> <br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64` | getAccountVaultApiId(): ?string | setAccountVaultApiId(?string accountVaultApiId): void |
| `tokenApiId` | `?string` | Optional | This field can be used to correlate Tokens in our system to data within an outside software integration<br><br>> Must be unique per location. When running a transaction and using a stored token, this field can be used in place of token_id.<br>> <br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64` | getTokenApiId(): ?string | setTokenApiId(?string tokenApiId): void |
| `accountvaultC1` | `?string` | Optional | DEPRECATED (Use token_c1 instead)<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getAccountvaultC1(): ?string | setAccountvaultC1(?string accountvaultC1): void |
| `accountvaultC2` | `?string` | Optional | DEPRECATED (Use token_c2 instead)<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getAccountvaultC2(): ?string | setAccountvaultC2(?string accountvaultC2): void |
| `accountvaultC3` | `?string` | Optional | DEPRECATED (Use token_c3 instead)<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getAccountvaultC3(): ?string | setAccountvaultC3(?string accountvaultC3): void |
| `tokenC1` | `?string` | Optional | Custom field 1 for API users to store custom data<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getTokenC1(): ?string | setTokenC1(?string tokenC1): void |
| `tokenC2` | `?string` | Optional | Custom field 2 for API users to store custom data<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getTokenC2(): ?string | setTokenC2(?string tokenC2): void |
| `tokenC3` | `?string` | Optional | Custom field 3 for API users to store custom data<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getTokenC3(): ?string | setTokenC3(?string tokenC3): void |
| `achSecCode` | [`?string(AchSecCode3Enum)`](../../doc/models/ach-sec-code-3-enum.md) | Optional | SEC code for the account | getAchSecCode(): ?string | setAchSecCode(?string achSecCode): void |
| `billingAddress` | [`?BillingAddress`](../../doc/models/billing-address.md) | Optional | Billing Address Object | getBillingAddress(): ?BillingAddress | setBillingAddress(?BillingAddress billingAddress): void |
| `contactId` | `?string` | Optional | Used to associate the Token with a Contact.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getContactId(): ?string | setContactId(?string contactId): void |
| `customerId` | `?string` | Optional | Used to store a customer identification number.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `50` | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `identityVerification` | [`?IdentityVerification2`](../../doc/models/identity-verification-2.md) | Optional | Identity verification | getIdentityVerification(): ?IdentityVerification2 | setIdentityVerification(?IdentityVerification2 identityVerification): void |
| `locationId` | `string` | Required | A valid Location Id associated with the Contact for this Token<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): string | setLocationId(string locationId): void |
| `previousAccountVaultApiId` | `?string` | Optional | Can be used to pull payment info from a previous token api id.<br>**Constraints**: *Maximum Length*: `64` | getPreviousAccountVaultApiId(): ?string | setPreviousAccountVaultApiId(?string previousAccountVaultApiId): void |
| `previousTokenApiId` | `?string` | Optional | Can be used to pull payment info from a previous token api id.<br>**Constraints**: *Maximum Length*: `64` | getPreviousTokenApiId(): ?string | setPreviousTokenApiId(?string previousTokenApiId): void |
| `previousAccountVaultId` | `?string` | Optional | Can be used to pull payment info from a previous token.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getPreviousAccountVaultId(): ?string | setPreviousAccountVaultId(?string previousAccountVaultId): void |
| `previousTokenId` | `?string` | Optional | Can be used to pull payment info from a previous token.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getPreviousTokenId(): ?string | setPreviousTokenId(?string previousTokenId): void |
| `previousTransactionId` | `?string` | Optional | Can be used to pull payment info from a previous transaction.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getPreviousTransactionId(): ?string | setPreviousTransactionId(?string previousTransactionId): void |
| `termsAgree` | `?bool` | Optional | Terms agreement. | getTermsAgree(): ?bool | setTermsAgree(?bool termsAgree): void |
| `termsAgreeIp` | `?string` | Optional | The ip address of the client that agreed to terms. | getTermsAgreeIp(): ?string | setTermsAgreeIp(?string termsAgreeIp): void |
| `title` | `?string` | Optional | Used to describe the Token for easier identification within our UI.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `16` | getTitle(): ?string | setTitle(?string title): void |
| `tokenImportId` | `?string` | Optional | Token Import Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getTokenImportId(): ?string | setTokenImportId(?string tokenImportId): void |
| `secureDirectoryServerTransactionId` | `?string` | Optional | (ECOMM) Directory Server Transaction ID (Such as XID, TAVV) | getSecureDirectoryServerTransactionId(): ?string | setSecureDirectoryServerTransactionId(?string secureDirectoryServerTransactionId): void |
| `secureProtocolVersion` | `?int` | Optional | (ECOMM)  Secure Program Protocol Version | getSecureProtocolVersion(): ?int | setSecureProtocolVersion(?int secureProtocolVersion): void |
| `secureAuthData` | `?string` | Optional | (ECOMM) The token authentication value associated with 3D secure transactions (Such as CAVV, UCAF auth data) | getSecureAuthData(): ?string | setSecureAuthData(?string secureAuthData): void |
| `secureCollectionIndicator` | `?int` | Optional | (ECOMM) Used for UCAF collection indicator or Discover Autentication type | getSecureCollectionIndicator(): ?int | setSecureCollectionIndicator(?int secureCollectionIndicator): void |
| `threeDsServerTransId` | `?string` | Optional | 3DS Server Transaction ID.  If this field is sent and 3DS authentication was done with Fortis, the 3DS fields secure_directory_server_transaction_id, secure_protocol_version, and secure_collection_indicator will be pre-populated. | getThreeDsServerTransId(): ?string | setThreeDsServerTransId(?string threeDsServerTransId): void |
| `acsTransactionId` | `?string` | Optional | ACS Transaction ID<br>**Constraints**: *Maximum Length*: `36` | getAcsTransactionId(): ?string | setAcsTransactionId(?string acsTransactionId): void |
| `joi` | [`?Joi19`](../../doc/models/joi-19.md) | Optional | - | getJoi(): ?Joi19 | setJoi(?Joi19 joi): void |
| `expDate` | `?string` | Optional | Required for CC. The Expiration Date for the credit card. (MMYY format).<br>**Constraints**: *Pattern*: `^(0[1-9]\|1[0-2])[0-9]{2}$` | getExpDate(): ?string | setExpDate(?string expDate): void |
| `eSerialNumber` | `?string` | Optional | E Serial Number<br>**Constraints**: *Maximum Length*: `36`, *Pattern*: `^[a-zA-Z0-9]*$` | getESerialNumber(): ?string | setESerialNumber(?string eSerialNumber): void |
| `eTrackData` | `?string` | Optional | E Track Data | getETrackData(): ?string | setETrackData(?string eTrackData): void |
| `eFormat` | `?string` | Optional | E Format | getEFormat(): ?string | setEFormat(?string eFormat): void |
| `eKeyedData` | `?string` | Optional | E Keyed Data | getEKeyedData(): ?string | setEKeyedData(?string eKeyedData): void |
| `runAvs` | `?bool` | Optional | A flag that will override a product transactions run_avs_on_accountvault_create setting to determine if an avsonly transaction should be run prior to storing the token. When storing an token with tha run_avs flag, if the avsonly check fails account verification with the processor, the token will not be stored in the system. The meaning of the AVS response codes can be found here on this page.This is the new preferred method of validating a credit card and can be used instead of the legacy $1 auth only transaction.Using this flag overrides the default setting for the locations product transactions.<br><br>> Transaction fees may apply when performing an avsonly transaction while storing an token. | getRunAvs(): ?bool | setRunAvs(?bool runAvs): void |
| `trackData` | `?string` | Optional | Track Data from a magnetic card swipe.<br>**Constraints**: *Maximum Length*: `256` | getTrackData(): ?string | setTrackData(?string trackData): void |
| `ticket` | `?string` | Optional | A valid ticket that was created to store the token.<br>**Constraints**: *Maximum Length*: `36` | getTicket(): ?string | setTicket(?string ticket): void |

## Example (as JSON)

```json
{
  "account_holder_name": "John Smith",
  "account_number": "5454545454545454",
  "account_vault_api_id": "accountvaultabcd",
  "token_api_id": "tokenabcd",
  "accountvault_c1": "accountvault custom 1",
  "accountvault_c2": "accountvault custom 2",
  "accountvault_c3": "accountvault custom 3",
  "token_c1": "token custom 1",
  "token_c2": "token custom 2",
  "token_c3": "token custom 3",
  "ach_sec_code": "WEB",
  "contact_id": "11e95f8ec39de8fbdb0a4f1a",
  "customer_id": "123456",
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "previous_account_vault_api_id": "previousaccountvault123456",
  "previous_token_api_id": "previousaccountvault123456",
  "previous_account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
  "previous_token_id": "11e95f8ec39de8fbdb0a4f1a",
  "previous_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "terms_agree": true,
  "terms_agree_ip": "192.168.0.10",
  "title": "Test CC Account",
  "token_import_id": "11e95f8ec39de8fbdb0a4f1a",
  "secure_directory_server_transaction_id": "d65e93c3-35ab-41ba-b307-767bfc19eae",
  "secure_protocol_version": 2,
  "secure_auth_data": "vVwL7UNHCf8W8M2LAfvRChNHN7c%3D",
  "three_ds_server_trans_id": "d65e93c3-35ab-41ba-b307-767bfc19eae",
  "acs_transaction_id": "13c701a3-5a88-4c45-89e9-ef65e50a8bf9",
  "exp_date": "0929",
  "e_serial_number": "1234567890",
  "e_track_data": "%B5454545454545454^account holder^17041010001111A123456789012?250112000000153000000?;5454545454545454=25011011000012345678?00|DC7AB845EFA793FB3C89C5D347D36ED11CAAED0C33E150437893996BA75EB8A0F334D0DAA1B874B6C677A4EF6984B089F891D8E434ACD867B616F4D815E63DA6A86B2AF927E9919B0CFC1DA3FD276D9382672EF8AA256329|32EA4D785CA3398882AABC405017EF9C2BDA666FA007A76538DE10878601EEC36EFE1F185BB8B1C8",
  "e_format": "ksn",
  "e_keyed_data": "236D530E098D48DB3F1AA367882CC1A7D475EFCACEFF1E965F17EC1E2D42CBF611C9EB0F80F4255784BA06951BD6092AB6CD3369D3D7E022E74DDCB16F9C40599FA03355E37E6ABB06B717B207709ED8C6BC5C7B6E32BB2B2F5046551A1C88D6",
  "run_avs": false,
  "track_data": "%B5424181111112228^FDCS TEST CARD /MASTERCARD^18121010001111123456789012?;5424181111112228=1812101100000123456?",
  "ticket": "12345678"
}
```

