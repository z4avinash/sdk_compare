# # DirectBookingOptionModelAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_type_details** | [**\PrioTicket\DistributorAPI\Models\RegularBookingItem[]**](RegularBookingItem.md) | A list specifying the booking quantity per product type. |
**booking_option_type** | **string** | Used to aid in serialization, deserialization, and validation. Must be one of the following values:   * &#x60;CONFIRM_RESERVATION&#x60;   * &#x60;DIRECT_BOOKING&#x60;   * &#x60;UPDATE_BOOKING&#x60;   * &#x60;UPDATE_BOOKING_NOTES&#x60; | [default to 'DIRECT_BOOKING']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
