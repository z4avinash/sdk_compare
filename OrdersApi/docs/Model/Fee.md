# # Fee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fee_label** | **string** | Fee label. | [optional] [readonly]
**fee_type** | [**\PrioTicket\DistributorAPI\Models\FeeType**](FeeType.md) |  |
**fee_amount** | **string** | The applicable fee amount, can either be a surcharge or discount. | [readonly]
**fee_percentage** | **string** | Fee percentage. | [optional]
**fee_tax_id** | **string** | Tax ID for this fee. Tax information can be retrieved from the Tax API. | [readonly]
**fee_tax_amount** | **string** | Amount of tax. | [readonly]
**fee_included** | **bool** | Whether this is an additional fee that should be listed separately and included in the &#x60;price_total&#x60; or is part of a calculation, e.g. margin breakdown (informational only). | [readonly]
**fee_refundable** | **bool** | Whether this fee is refundable. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
