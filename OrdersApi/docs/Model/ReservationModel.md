# # ReservationModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reservation_distributor_id** | **string** | Unique identifier for distributor assigned by Prio. |
**reservation_distributor_name** | **string** | Name of the distributor. | [readonly]
**reservation_partner_id** | **string** | Unique identifier for partner assigned by Prio. | [optional]
**reservation_partner_name** | **string** | Name of the partner. | [optional] [readonly]
**reservation_reference** | **string** | A unique identifier for the created reservation in the Prio. | [readonly]
**reservation_external_reference** | **string** | A unique reservation identifier within the external system. |
**reservation_hold_token** | **string** | Unique hold token for this reservation (Internal use only). Only a single holdtoken is allowed per reservation. | [optional]
**reservation_valid_until** | [**\DateTime**](\DateTime.md) | The reserved order will stay alive until this time, after that the reservation will be auto-cancelled. &gt; Please note that if you are having multiple products in your cart, that the value will be set according to the product with the earliest expiration time. In this case ONLY this specific product will be auto-cancelled. To view your updated reservation you could call the &#39;Cart Details&#39; endpoint.  &gt; Warning; Prio will simply confirm your pending reservation, even when products have been auto-cancelled in between. If this value is not checked by the reserving party, unexpected results could occur. | [readonly]
**reservation_details** | [**\PrioTicket\DistributorAPI\Models\ReservationDetail[]**](ReservationDetail.md) | Contains one or more bookings. |
**reservation_promocodes** | [**\PrioTicket\DistributorAPI\Models\AppliedPromocode[]**](AppliedPromocode.md) | The promocodes applied to this reservation. | [optional] [readonly]
**reservation_pricing** | [**\PrioTicket\DistributorAPI\Models\Pricing**](Pricing.md) |  |
**reservation_payments** | [**\PrioTicket\DistributorAPI\Models\PaymentDetails[]**](PaymentDetails.md) | Details on the payments linked to this reservation.   A reservation can have multiple payment records in case of installments, split payments, refunds and additional charges. Every action will result in a new record so all history is kept.  Payment records are always returned in a descending order based on the payment date. Therefore the first entry in the array can be considered as the last payment and thus the &#x60;payment_total&#x60; (running sum) as the actual total amount paid and the &#x60;payment_status &#x60; as the latest payment status for this reservation. | [optional]
**reservation_credit** | [**\PrioTicket\DistributorAPI\Models\CreditLimit**](CreditLimit.md) |  | [optional]
**reservation_custom_fields** | [**\PrioTicket\DistributorAPI\Models\CustomField[]**](CustomField.md) | Freeform entry of any key-value pair. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
