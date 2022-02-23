# # ProductRelationDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **string** | Unique identifier for the product assigned by Prio. |
**product_parent_id** | **string** | Unique identifier for the parent product assigned by Prio. | [readonly]
**product_supplier_id** | **string** | Unique identifier for supplier. | [readonly]
**product_supplier_name** | **string** | Name of the supplier which offers the product(s). | [readonly]
**product_title** | **string** | The title of product. |
**product_from_price** | **string** | Static From price which can be shown. (Usually regular Adult including discount). Also used for price filtering. | [optional]
**product_currency_code** | **string** | Product Currency Code, according to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217). | [readonly]
**product_start_date** | [**\DateTime**](\DateTime.md) | Starting date of the product. | [optional]
**product_end_date** | [**\DateTime**](\DateTime.md) | End date of the product. | [optional]
**product_timepicker_visible** | **bool** | Whether you should show the timepicker during booking. | [optional] [default to true]
**product_booking_window_product_id** | **string** | The booking window dependant product, also called dependencies, indicates the restrictions on sub-ticket bookings in regards to the selected travel-date of another product. This means that some products can only be bought between a fixed booking window relative to another product (booking). This is mainly used in itenaries and tours where external factors such as travel time restrict a guest to book multiple attractions in a short period.  This dependancy can be set for another (previous) sub-product in this array or the main product of this booking.  Only applicable if &#x60;product_combi:true&#x60; or &#x60;product_addon:true&#x60;. | [optional]
**product_booking_window_start_time** | **int** | The minimum amount of minutes passed after the selected travel date (&#x60;booking_travel_date&#x60;) or availability slot (&#x60;availability_from_date_time&#x60;) of the &#x60;product_booking_window_product_id&#x60;.  Only applicable if &#x60;product_combi:true&#x60; or &#x60;product_addon:true&#x60;. | [optional]
**product_booking_window_end_time** | **int** | The maximum amount of minutes allowed after the previously selected travel date (&#x60;booking_travel_date&#x60;) or availability slot (&#x60;availability_from_date_time&#x60;) of the &#x60;product_booking_window_product_id&#x60;.  Only applicable if &#x60;product_combi:true&#x60; or &#x60;product_addon:true&#x60;. | [optional]
**product_admission_type** | [**\PrioTicket\DistributorAPI\Models\ProductAdmissionType**](ProductAdmissionType.md) |  |
**product_relation_type** | [**\PrioTicket\DistributorAPI\Models\RelationType**](RelationType.md) |  | [optional]
**product_images** | [**\PrioTicket\DistributorAPI\Models\Image[]**](Image.md) | It contains images related to the product. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
