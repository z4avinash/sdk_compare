# # DirectBookingOptionModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**booking_external_reference** | **string** | A unique booking identifier within the external system. |
**booking_status** | [**\PrioTicket\DistributorAPI\Models\BookingStatusTypes**](BookingStatusTypes.md) |  |
**booking_version** | **int** | Booking version number. | [optional] [readonly] [default to 1]
**booking_voucher_released** | **bool** | Whether the vouchers of this booking are available / released. Voucher allocation can be delayed based on the voucher release requirements. | [optional] [readonly]
**booking_travel_date** | [**\DateTime**](\DateTime.md) | If &#x60;product_availability:false&#x60; you can still define the expected redemption date of this product. Required if &#x60;product_traveldate_required:true&#x60;. If unset and availability is applicable, &#x60;booking_travel_date&#x60; will be returned as &#x60;availability_from_date_time&#x60; in the response. | [optional]
**booking_valid_until** | [**\DateTime**](\DateTime.md) | The booking will be valid until this time, after that the booking will be expired if not redeemed. Mainly applicable to open products. | [optional] [readonly]
**booking_invoice_status** | [**\PrioTicket\DistributorAPI\Models\InvoiceStatus**](InvoiceStatus.md) |  | [optional]
**booking_language** | **string** | Language codes for the available languages of the product, e.g. Live Guides are available in English and Spanish languages. Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. | [optional] [default to 'en']
**booking_pricing** | [**\PrioTicket\DistributorAPI\Models\Pricing**](Pricing.md) |  | [optional]
**booking_notes** | [**\PrioTicket\DistributorAPI\Models\Note[]**](Note.md) | Booking notes. | [optional]
**booking_created** | [**\DateTime**](\DateTime.md) | Date and time of booking creation. | [readonly]
**booking_modified** | [**\DateTime**](\DateTime.md) | Date and time of booking update. | [readonly]
**booking_confirmed** | [**\DateTime**](\DateTime.md) | Date and time of booking confirmation. | [optional] [readonly]
**booking_cancelled** | [**\DateTime**](\DateTime.md) | Date and time of booking cancellation. | [optional] [readonly]
**product_id** | **string** | Unique identifier for the product assigned by Prio. |
**product_relation_id** | **string** | If this product is booked as part of a cluster or purchased as an addon the related main product id should be defined.  Purchasing an addon requires a booking record for the linked main product. If that is not found within the same order, an error will be returned.  When part of a cluster, only the sub-product is required and therefore there is no need to include the main cluster product as a seperate booking in the same order.  If you do not sent this parameter, it will be considered as an individual sale. | [optional]
**product_pickup_point_id** | **string** | Mandatory if &#x60;product_pickup_point:MANDATORY&#x60; in product details. | [optional]
**product_pickup_point** | [**\PrioTicket\DistributorAPI\Models\PickupPoint**](PickupPoint.md) |  | [optional]
**product_availability_id** | **string** | The unique ID for the timeslot (&#x60;availability_id&#x60;) or specific availability spot (&#x60;availability_spot_id&#x60;) if &#x60;product_availability_assigned:true&#x60;. Only mandatory if &#x60;product_availability:true&#x60;. | [optional]
**product_availability_from_date_time** | [**\DateTime**](\DateTime.md) | The starting date and time of the activity availability. | [optional] [readonly]
**product_availability_to_date_time** | [**\DateTime**](\DateTime.md) | The till date and time of the activity availability. | [optional] [readonly]
**product_availability_capacity_id** | **string** | Availability group / capacity identifier. | [optional] [readonly]
**product_availability_capacity_shared_id** | **string** | Shared availability / capacity identifier. Only applicable if &#x60;capacity_type:SHARED / COMBINED&#x60;. | [optional] [readonly]
**product_title** | **string** | The title of the product. | [readonly]
**product_supplier_id** | **string** | Unique identifier for the supplier. | [readonly]
**product_supplier_name** | **string** | Name of the supplier which offers the product(s). | [readonly]
**product_supplier_admin_id** | **string** | Unique identifier for the supplier admin. | [optional] [readonly]
**product_supplier_admin_name** | **string** | Name of the supplier admin. | [optional] [readonly]
**product_market_admin_id** | **string** | Unique identifier for the market admin. | [readonly]
**product_market_admin_name** | **string** | Name of the market admin. | [readonly]
**product_source_id** | **string** | Unique ID of the product source. | [optional] [readonly]
**product_source_name** | **string** | Source of the product.   Either PrioTicket or the name of the other reservation system e.g. CSS. | [optional] [readonly]
**product_entry_notes** | **string** | Product entry information. (Know before you go). The user-visible list of important notes, use for details such as age-restrictions or other conditions that make this service unsuitable. | [optional] [readonly]
**product_admission_type** | [**\PrioTicket\DistributorAPI\Models\ProductAdmissionType**](ProductAdmissionType.md) |  |
**product_currency_code** | **string** | Product Currency Code, according to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217). | [readonly]
**product_cancellation_allowed** | **bool** | Whether it is allowed to cancel this product / booking.   This takes into account the current state of the order as well as variables such as &#x60;booking_status&#x60; and  &#x60;product_type_redemption_status&#x60;.    Note that even if a product can be cancelled in this state, cancellation fees and restrictions might still apply and override this value. Please check &#x60;product_cancellation_policies&#x60; for more details. | [readonly] [default to true]
**product_options** | [**\PrioTicket\DistributorAPI\Models\BookingExtraOptions[]**](BookingExtraOptions.md) | The product options booked (including individual options from related combi products). | [optional]
**product_combi_details** | [**\PrioTicket\DistributorAPI\Models\ProductCombiDetail[]**](ProductCombiDetail.md) | In case the booked product is the main combi-product (&#x60;product_combi:true&#x60;), this field should be populated for each and every listed sub-product inside &#x60;product_combi_details&#x60;. All sub-product will inherited the missing details such as &#x60;product_type_details&#x60; from the parent. | [optional]
**product_type_details** | [**\PrioTicket\DistributorAPI\Models\RegularBookingItem[]**](RegularBookingItem.md) | A list specifying the booking quantity per product type. |
**booking_option_type** | **string** | Used to aid in serialization, deserialization, and validation. Must be one of the following values:   * &#x60;CONFIRM_RESERVATION&#x60;   * &#x60;DIRECT_BOOKING&#x60;   * &#x60;UPDATE_BOOKING&#x60;   * &#x60;UPDATE_BOOKING_NOTES&#x60; | [default to 'DIRECT_BOOKING']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
