# # ProductTypeQuantityVariation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_type_quantity_variation_min** | **int** | If &#x60;product_quantity_pricing:true&#x60;; The minimum booking quantity of this type required for this pricing configuration. This value has &#x60;product_type_quantity_min&#x60; as an absolute minimum. |
**product_type_quantity_variation_max** | **int** | If &#x60;product_quantity_pricing:true&#x60;; The maximum booking quantity allowed for this pricing configuration. This value will never exceed &#x60;product_type_quantity_max&#x60;. | [optional]
**product_type_quantity_variation_amount** | **string** | Quantity related price change (per piece) applicable to the product type sales price. |
**product_type_quantity_variation_price_type** | [**\PrioTicket\DistributorAPI\Models\PriceVariationPriceType**](PriceVariationPriceType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
