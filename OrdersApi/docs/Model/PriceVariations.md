# # PriceVariations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**variation_label** | **string** | Label / Explanation for this variation. | [optional]
**variation_amount** | **string** | The amount which should be added / substracted to the &#x60;price_subtotal&#x60;. This can be a negative value (discount) or positive value (surcharge). |
**variation_type** | **string** | Type of variation.  Only &#x60;CART_DISCOUNT_*&#x60; and &#x60;PARTNER_DISCOUNT&#x60; can be set in the request, other variations will be automatically added based on your order and returned on every response. If you sent other variations in your request, they will be ignored. &lt;details&gt;   &lt;summary&gt;**Variation Types**&lt;/summary&gt;   * &#x60;PRODUCT_DYNAMIC&#x60; - In case of &#x60;product_dynamic_pricing:true&#x60; the price variation based on availability will be shown here.  * &#x60;PRODUCT_DAILY&#x60; - In case of &#x60;product_daily_pricing:true&#x60; the price variation based on the day will be shown here.  * &#x60;PRODUCT_QUANTITY&#x60; - In case of &#x60;product_quantity_pricing:true&#x60; the price variation based on the quantity will be shown here.  * &#x60;PRODUCT_DISCOUNT&#x60; - In case a &#x60;product_type_discount&#x60; is set, the price variation will be shown here.  * &#x60;PRODUCT_MARKUP&#x60; - TBA  * &#x60;PRODUCT_COMBI_DISCOUNT&#x60; - Combi discount.  * &#x60;PARTNER_DISCOUNT&#x60; - In case of partner sales, the guest discount or partner discount / commission can be set by the cashier.  * &#x60;CART_DISCOUNT_FIXED&#x60; - Fixed cart discount set by the cashier.        This discount is pre-configured and must exist in our system prior to making the booking.  * &#x60;CART_DISCOUNT_CUSTOM&#x60; - Custom cart discount set by the cashier.        This discount is dynamic, does not have to exist in our system and can be set to any allowed value.  * &#x60;OTHER&#x60; - Any variation not matching the types above.   &lt;/details&gt; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
