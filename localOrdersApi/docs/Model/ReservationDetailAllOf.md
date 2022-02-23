# # ReservationDetailAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_type_details** | [**\PrioTicket\DistributorAPI\Models\RegularBookingItem[]**](RegularBookingItem.md) | A list specifying the booking quantity per product type. |
**booking_reservation_reference** | **string** | Unique identifier for this booking within the current cart. To update this booking you should pass the same value in the next request. |
**booking_reservation_valid_until** | [**\DateTime**](\DateTime.md) | The reserved booking will stay alive until this time, after that the booking will be auto-cancelled. &gt; In this case ONLY this specific product will be auto-cancelled. To view your updated reservation you could call the &#39;Cart Details&#39; endpoint.  &gt; Our system will try to reset the &#x60;booking_reservation_valid_until&#x60; every time the Update Cart endpoint is called. This will not work for most third-party products. Please keep an eye on the value &#x60;booking_reservation_valid_until&#x60; to make sure your cart does not expire. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
