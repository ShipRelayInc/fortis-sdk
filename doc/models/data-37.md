
# Data 37

## Structure

`Data37`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `resultCode` | `?bool` | Optional | 0 for success, 1 for error. More details on Message field. | getResultCode(): ?bool | setResultCode(?bool resultCode): void |
| `merchantID` | `?string` | Optional | string needed to set up a Google or Apple Pay button. | getMerchantID(): ?string | setMerchantID(?string merchantID): void |
| `applePay` | `?bool` | Optional | Boolean indicating if Apple Pay is enabled for this merchant. | getApplePay(): ?bool | setApplePay(?bool applePay): void |
| `googlePay` | `?bool` | Optional | Boolean indicating if Google Pay is enabled for this merchant. | getGooglePay(): ?bool | setGooglePay(?bool googlePay): void |
| `applePayDomains` | `?(array[])` | Optional | Array of the domains registered with apple for this domain.  For Apple Pay, each domain name a merchant uses used has to be registered with Apple before it can be used.  When calling Merchant Details the gateway first checks if the domain provided is already registered for that merchant. If it is, it will return applePay: true and resultCode: 0 and the domain will be listed in appleDomains array.  It will also list all verified domains for that merchant.  If the domain is not verified it will try to verify it and if successful will return applePay: true and the domain will be listed in applePayDomains.  If the domain is not verified successfully the response will return applePay: false and resultCode: 1. Merchant will not be able to process payment in that domain.  Apple verifies the domain by pulling down a verification text file that should be placed on http://domainname.well-known/apple-developer-merchantid-domain-association.  File name must be apple-developer-merchantid-domain-association without a file extension. The contents of the file may be served programmatically. The contents of this file will be the same for all merchants processing Apple Pay. | getApplePayDomains(): ?array | setApplePayDomains(?array applePayDomains): void |
| `message` | `?string` | Optional | Message with information about the results. | getMessage(): ?string | setMessage(?string message): void |
| `googleJWT` | `?string` | Optional | String needed in the Google Pay request. | getGoogleJWT(): ?string | setGoogleJWT(?string googleJWT): void |

## Example (as JSON)

```json
{
  "resultCode": false,
  "merchantID": "abc1234",
  "applePay": true,
  "googlePay": true,
  "applePayDomains": [
    {
      "key1": "val1",
      "key2": "val2"
    },
    {
      "key1": "val1",
      "key2": "val2"
    }
  ],
  "message": "valid user",
  "googleJWT": "45r8v29bvj4gc904jfd932nm"
}
```

