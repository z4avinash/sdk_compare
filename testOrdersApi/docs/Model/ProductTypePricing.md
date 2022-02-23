# # ProductTypePricing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_type_list_price** | **string** | Standard price before discount for the end customer of this product type set by the supplier. |
**product_type_discount** | **string** | Strike-through discount applicable to &#x60;product_type_list_price&#x60;. | [optional]
**product_type_discount_percentage** | **string** | Strike-through discount percentage. If blank then the Strike-through discount is not based on percentages. | [optional]
**product_type_discount_label** | **string** | Strike-through discount label. | [optional]
**product_type_sales_price** | **string** | Standard price after discount for the end-customer set by the reseller. (&#x60;product_type_list_price&#x60; - &#x60;product_type_discount&#x60; &#x3D;&#x3D; &#x60;product_type_sales_price&#x60;). |
**product_type_resale_price** | **string** | Price for which a product type is sold to and purchased by indirect channels. | [optional]
**product_type_display_price** | **string** | The display price is used to show an indicative price for this specific product configuration on your user interface. This price can be used to show the guest a common or marketing related price without requiring further details such as timeslot, pieces, age etc. which would alter the final price. Each individual season can have one or more display prices. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
