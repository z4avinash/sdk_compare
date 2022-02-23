# # ConfirmedBookingAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_code** | **string** | The product code. More details can be found on &#x60;product_code_settings&#x60; | [optional] [readonly]
**product_code_settings** | [**\PrioTicket\DistributorAPI\Models\ProductCodeSettings**](ProductCodeSettings.md) |  |
**product_type_details** | [**\PrioTicket\DistributorAPI\Models\ConfirmedBookingDetail[]**](ConfirmedBookingDetail.md) | A list of details on the confirmed booked product types. | [optional]
**product_combi_details** | [**\PrioTicket\DistributorAPI\Models\ConfirmedCombiBooking[]**](ConfirmedCombiBooking.md) | A list of the confirmed combi-products. | [optional] [readonly]
**product_cancellation_policies** | [**\PrioTicket\DistributorAPI\Models\CancellationPolicy[]**](CancellationPolicy.md) | Sometimes a product has a cancellation fee. In that case the order amount might not be refunded in full. If no cancellation policies are set and &#x60;product_cancellation_allowed:true&#x60; then you can always cancel products until they are redeemed. | [optional] [readonly]
**booking_reference** | **string** | Unique identifier for booking assigned by Prio. | [readonly]
**booking_supplier_reference** | **string** | Unique identifier for booking assigned by supplier system. Only applicable if &#x60;product_third_party:true&#x60;. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
