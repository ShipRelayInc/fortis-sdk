
# Level 3 Data 6

Level 3 data object

## Structure

`Level3Data6`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `destinationCountryCode` | `?string` | Optional | Code of the country where the goods are being shipped.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getDestinationCountryCode(): ?string | setDestinationCountryCode(?string destinationCountryCode): void |
| `dutyAmount` | `?int` | Optional | Fee amount associated with the import of the purchased goods ,Can accept Two (2) decimal places<br>**Constraints**: `>= 0`, `<= 99999999999900` | getDutyAmount(): ?int | setDutyAmount(?int dutyAmount): void |
| `freightAmount` | `?int` | Optional | Freight or shipping portion of the total transaction amount ,Can accept Two (2) decimal places.<br>**Constraints**: `>= 0`, `<= 999999999900` | getFreightAmount(): ?int | setFreightAmount(?int freightAmount): void |
| `nationalTax` | `?int` | Optional | National tax for the transaction ,Can accept Two (2) decimal places.<br>**Constraints**: `<= 999999999900` | getNationalTax(): ?int | setNationalTax(?int nationalTax): void |
| `salesTax` | `?int` | Optional | Sales tax for the transaction ,Can accept Two (2) decimal places.<br>**Constraints**: `<= 999999999900` | getSalesTax(): ?int | setSalesTax(?int salesTax): void |
| `shipfromZipCode` | `?string` | Optional | Postal/ZIP code of the address from where the purchased goods are being shipped.<br>**Constraints**: *Maximum Length*: `10` | getShipfromZipCode(): ?string | setShipfromZipCode(?string shipfromZipCode): void |
| `shiptoZipCode` | `?string` | Optional | Postal/ZIP code of the address where purchased goods will be delivered.<br>**Constraints**: *Maximum Length*: `10` | getShiptoZipCode(): ?string | setShiptoZipCode(?string shiptoZipCode): void |
| `taxAmount` | `?int` | Optional | Amount of any value added taxes ,Can accept Two (2) decimal places.<br>**Constraints**: `>= 0`, `<= 99999999900` | getTaxAmount(): ?int | setTaxAmount(?int taxAmount): void |
| `taxExempt` | [`?string(TaxExemptEnum)`](../../doc/models/tax-exempt-enum.md) | Optional | Sales Tax Exempt. Allowed values: “1”, “0”. | getTaxExempt(): ?string | setTaxExempt(?string taxExempt): void |
| `customerVatRegistration` | `?string` | Optional | Customer VAT Registration<br>**Constraints**: *Maximum Length*: `13` | getCustomerVatRegistration(): ?string | setCustomerVatRegistration(?string customerVatRegistration): void |
| `merchantVatRegistration` | `?string` | Optional | Merchant VAT Registration<br>**Constraints**: *Maximum Length*: `20` | getMerchantVatRegistration(): ?string | setMerchantVatRegistration(?string merchantVatRegistration): void |
| `orderDate` | `?string` | Optional | Order Date<br>**Constraints**: *Minimum Length*: `6`, *Maximum Length*: `6` | getOrderDate(): ?string | setOrderDate(?string orderDate): void |
| `summaryCommodityCode` | `?string` | Optional | Summary Commodity Code<br>**Constraints**: *Maximum Length*: `4` | getSummaryCommodityCode(): ?string | setSummaryCommodityCode(?string summaryCommodityCode): void |
| `taxRate` | `?int` | Optional | Tax rate used to calculate the sales tax amount, can accept 2 decimal places.<br>**Constraints**: `<= 999900` | getTaxRate(): ?int | setTaxRate(?int taxRate): void |
| `uniqueVatRefNumber` | `?string` | Optional | Unique VAT Reference Number<br>**Constraints**: *Maximum Length*: `15` | getUniqueVatRefNumber(): ?string | setUniqueVatRefNumber(?string uniqueVatRefNumber): void |
| `lineItems` | [`LineItem20[]`](../../doc/models/line-item-20.md) | Required | Array of line items in transaction | getLineItems(): array | setLineItems(array lineItems): void |

## Example (as JSON)

```json
{
  "destination_country_code": "840",
  "duty_amount": 0,
  "freight_amount": 0,
  "national_tax": 2,
  "sales_tax": 200,
  "shipfrom_zip_code": "AZ1234",
  "shipto_zip_code": "FL1234",
  "tax_amount": 10,
  "tax_exempt": "0",
  "customer_vat_registration": "12345678",
  "merchant_vat_registration": "123456",
  "order_date": "171006",
  "summary_commodity_code": "C1K2",
  "tax_rate": 0,
  "unique_vat_ref_number": "vat1234",
  "line_items": [
    {
      "description": "cool drink",
      "commodity_code": "cc123456",
      "discount_amount": 0,
      "other_tax_amount": 0,
      "product_code": "fanta123456",
      "quantity": 12,
      "tax_amount": 4,
      "tax_rate": 0,
      "unit_code": "gll",
      "unit_cost": 3
    }
  ]
}
```

