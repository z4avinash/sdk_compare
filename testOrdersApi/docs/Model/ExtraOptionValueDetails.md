# # ExtraOptionValueDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value_id** | **string** | Value ID. |
**value_name** | **string** | (Translatable) Value name. | [optional] [readonly]
**value_price** | **string** | The price of this value. In case &#x60;option_price_type:PRODUCT_TYPE&#x60; then this field will be undefined on &#x60;product_options&#x60; level. | [optional] [readonly]
**value_price_tax_id** | **string** | Tax ID for this product option value. Tax information can be retrieved from the Tax API. | [optional] [readonly]
**value_price_tax_amount** | **string** | Amount of tax applied for this product option value. Additional tax information can be retrieved from the Tax API. | [optional] [readonly]
**value_product_type_id** | **string** | Returned in case this value / option is only applicable to a specific product type (&#x60;option_price_type:PRODUCT_TYPE&#x60;). | [optional] [readonly]
**value_icon** | **string** |  | [optional] [readonly]
**value_quantity_type** | **string** | Whether the quantity limitations apply on the booking or is based on the &#x60;product_type_count&#x60;. | [optional]
**value_quantity_min** | **int** | Minimum quantity required for this value. | [optional] [readonly]
**value_quantity_max** | **int** | Maximum quantity allowed for this value, can never exceed &#x60;option_quantity_max&#39;. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
