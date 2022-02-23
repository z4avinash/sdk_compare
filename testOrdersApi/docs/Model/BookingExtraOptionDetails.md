# # BookingExtraOptionDetails

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
**value_count** | **int** | Value count. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
