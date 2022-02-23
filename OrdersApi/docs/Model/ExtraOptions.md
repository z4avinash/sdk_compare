# # ExtraOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**option_id** | **string** | Option ID. |
**option_name** | **string** | (Translatable) Option name. | [readonly]
**option_description** | **string** | (Translatable) Option description. | [optional] [readonly]
**option_start_date** | [**\DateTime**](\DateTime.md) | Starting date of option. | [optional] [readonly]
**option_end_date** | [**\DateTime**](\DateTime.md) | End date of option. | [optional] [readonly]
**option_label** | **string** | Option label. | [optional] [readonly]
**option_type** | **string** | * &#x60;SINGLE&#x60; - Single option value is available. * &#x60;RADIO&#x60; - Customer can select only one out of multiple option values. * &#x60;CHECKBOX&#x60; - Customers can select one or more option values. * &#x60;SHORT_ANSWER&#x60; - A one-line input field for text. (UPCOMING) * &#x60;PARAGRAPH&#x60; - A multi-line input field for text. (UPCOMING) * &#x60;DROPDOWN&#x60; - A selection from a dropdown. (UPCOMING) * &#x60;BOOLEAN&#x60; - A yes/no button. (UPCOMING) * &#x60;DATE&#x60; - A date. (UPCOMING) * &#x60;TIME&#x60; - A time. (UPCOMING) * &#x60;DATETIME&#x60; - A date and time. (UPCOMING) * &#x60;NUMBER&#x60; - A number. (UPCOMING) * &#x60;LOCATION_SEARCH&#x60; - A search widget that supports finding matched location given user input from provided location list. (UPCOMING) | [readonly]
**option_selection_type** | **string** | * &#x60;MANUAL&#x60; - Whether the guest is able to select the options himself. * &#x60;AUTO&#x60; - **(ADVANCED)** Whether the option is automatically added to the cart. This only applies to &#x60;option_count_type:RESTRICTED&#x60;. Only available for &#x60;option_type:SINGLE&#x60;. | [readonly]
**option_count_type** | **string** | * &#x60;FLEXIBLE&#x60; - The sum of &#x60;option_values.value_count&#x60; is not restricted to the &#x60;booking quantity&#x60; (Product Option) or &#x60;product_type_count&#x60; (Product Type Option). Do note that it should still adhere to &#x60;option_quantity_min&#x60; and &#x60;option_quantity_max&#x60;. * &#x60;RESTRICTED&#x60; - The sum of &#x60;option_values.value_count&#x60; must be equal to the &#x60;booking quantity&#x60; (Product Option) or &#x60;product_type_count&#x60; (Product Type Option). | [readonly]
**option_list_type** | **string** | Whether to show this option on product level (once on the page), or repeat the option for each selected &#x60;product_type&#x60; / Person / PAX. * &#x60;PRODUCT&#x60; - Show the option once on product level. * &#x60;PRODUCT_TYPE&#x60; - Show the option for each selected &#x60;product_type&#x60;. | [optional] [readonly]
**option_price_type** | **string** | Whether this option has individual pricing for each &#x60;product_type&#x60; or a fixed amount. If &#x60;PRODUCT_TYPE&#x60; then the prices will be returned per &#x60;value_product_type_id&#x60; regardless of whether this is a Product- or Product Type Option. * &#x60;PRODUCT&#x60; - Prices are equal regardless of the selected &#x60;product_type&#x60;&#39;s. Price is still increased based on the selected quantity. * &#x60;PRODUCT_TYPE&#x60; - Prices are different per &#x60;product_type&#x60;. For &#x60;product_options&#x60; this will always be in combination with &#x60;option_count_type:RESTRICTED&#x60; (as you are unable to determine how many options should be charged for which &#x60;product_type&#x60;). * &#x60;INCLUDED&#x60; - Prices are already included in the sales price of the product itself. Amounts are shown for informational purposes only. | [readonly]
**option_booking_quantity_min** | **int** | The minimum booking quantity required for this option to be applicable. The booking quantity is a sum of all values of &#x60;product_type_count&#x60;. | [optional] [readonly]
**option_booking_quantity_max** | **int** | The maximum booking quantity allowed for this option to be applicable The booking quantity is a sum of all values of &#x60;product_type_count&#x60;. | [optional] [readonly]
**option_quantity_min** | **int** | The minimum option count required.  If &#x60;option_mandatory:true&#x60; and &#x60;option_quantity_min&#x60; is not set then option count should be equal to &#x60;product_type_count&#x60;.   Option count is a sum of all values of &#x60;option_values.value_count&#x60;. | [optional] [readonly] [default to 0]
**option_quantity_max** | **int** | The maximum option count allowed.  If &#x60;option_mandatory:true&#x60; and &#x60;option_quantity_max&#x60; is not set then option count should be equal to &#x60;product_type_count&#x60;.   Option count is a sum of all values of &#x60;option_values.value_count&#x60;. | [optional] [readonly] [default to 0]
**option_mandatory** | **bool** | Whether it is mandatory to set this option. | [readonly] [default to false]
**option_icon** | **string** | Option icon. | [optional] [readonly]
**option_values** | [**\PrioTicket\DistributorAPI\Models\ExtraOptionValueDetails[]**](ExtraOptionValueDetails.md) | Option values. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
