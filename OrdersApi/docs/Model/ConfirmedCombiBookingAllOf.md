# # ConfirmedCombiBookingAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_code** | **string** | The product code. More details can be found on &#x60;product_code_settings&#x60;. | [readonly]
**product_code_settings** | [**\PrioTicket\DistributorAPI\Models\ProductCodeSettings**](ProductCodeSettings.md) |  |
**product_type_details** | [**\PrioTicket\DistributorAPI\Models\BookingItemConfirmed[]**](BookingItemConfirmed.md) | A list of the confirmed booked combi-product types. | [readonly]
**booking_supplier_reference** | **string** | Unique identifier for booking assigned by supplier system. Only applicable if &#x60;product_third_party:true&#x60;. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
