# # PaymentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_id** | **string** | Unique Payment ID set by the Prio system. This is an internal identifier. | [readonly]
**payment_original_id** | **string** | In case of a modification (refund, capture after authorization) this will be the &#x60;payment_id&#x60; of the original record. | [optional] [readonly]
**payment_partner_id** | **string** | Payment partner identifier. | [optional]
**payment_shift_id** | **string** | Unique identifier of the shift linked to the cashier initiating the payment. | [optional] [readonly]
**payment_merchant_reference** | **string** | Unique (external) payment reference set by the merchant / (third) party / POS system initiating the payment. This reference will also be used to identify the payment in the PSP system. |
**payment_external_reference** | **string** | External payment reference set to identify the shopper / entity / cardholder / guest performing the payment. This reference can also be used to identify the payment in the PSP system. | [optional]
**payment_order_reference** | **string** | The &#x60;order_reference&#x60; linked to this payment. | [optional]
**payment_booking_references** | **string[]** | The booking references linked to this payment. Only returned in case of partial payment (pay per booking). | [optional] [readonly]
**payment_order_version** | **int** | Version of the order (&#x60;order_version&#x60;) during the payment. | [optional] [readonly]
**payment_status** | [**\PrioTicket\DistributorAPI\Models\PaymentStatus**](PaymentStatus.md) |  |
**payment_method** | [**\PrioTicket\DistributorAPI\Models\PaymentMethod**](PaymentMethod.md) |  |
**payment_scheme** | [**\PrioTicket\DistributorAPI\Models\PaymentScheme**](PaymentScheme.md) |  | [optional]
**payment_type** | [**\PrioTicket\DistributorAPI\Models\PaymentType**](PaymentType.md) |  |
**payment_link** | **string** | Only applicable in case the PSP only supports payment via Hosted Payment Page Link or &#x60;payment_method:LINK&#x60;. | [optional] [readonly]
**payment_link_expires_at** | [**\DateTime**](\DateTime.md) | Date and time when the payment link expires. In case of pre-payment this value will be the &#x60;reservation_valid_until&#x60;. | [optional] [readonly]
**payment_authorization_expires_at** | [**\DateTime**](\DateTime.md) | Authorisation is valid only for a limited amount of time. In case an authorised payment hasn&#39;t been captured or cancelled, it expires after the predefined deadline is missed.   Often the order is cancelled or redemption is blocked in case the payment can no longer be captured.  Only applicable if &#x60;payment_type:AUTHORIZATION&#x60;. | [optional] [readonly]
**payment_recurring** | **bool** | Whether the payment details are stored for recurring payments. | [readonly] [default to false]
**payment_recurring_type** | [**\PrioTicket\DistributorAPI\Models\PaymentRecurringType**](PaymentRecurringType.md) |  | [optional]
**payment_class** | [**\PrioTicket\DistributorAPI\Models\PaymentClass**](PaymentClass.md) |  | [optional]
**payment_refund_type** | [**\PrioTicket\DistributorAPI\Models\RefundType**](RefundType.md) |  | [optional]
**payment_refund_reason** | **string** | Reason of refund.  Only applicable in case &#x60;payment_type:REFUND&#x60;. | [optional]
**payment_currency_code** | **string** | The (guest) currency code of this payment. According to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217).  **(ADVANCED)** This value defaults to &#x60;order.order_pricing[].price_currency_code&#x60;, unless the guest uses an alternative checkout currency, in which case an additional &#x60;payment_currency_rate&#x60; and &#x60;payment_currency_amount&#x60; will be returned.  Note that the payment service provider can perform an additional conversion called dynamic currency conversion (DCC), which will be returned inside &#x60;payment_gateway_additional_values&#x60;. |
**payment_currency_rate** | **string** | Checkout / Guest currency conversion rate.   If not set and an alternative &#x60;payment_currency_code&#x60; is provided, the latest rates from the Currency API will be used as default.  &gt; Alternative rates can only be provided on (re)sales, purchase exchange rates are fixed. | [optional]
**payment_currency_amount** | **string** | The total amount / value that has been authorised / settled / refunded in the alternative (guest) currency (&#x60;payment_amount&#x60; * &#x60;payment_currency_rate&#x60;). | [optional] [readonly]
**payment_amount** | **string** | The amount authorised / settled / refunded during this transaction in the base (order) currency.  In case of refunds, this value will be a positive value but the payment type will be set to &#x60;payment_type:REFUND&#x60;. | [readonly]
**payment_total** | **string** | The actual total amount that is (already) authorised / settled in the base (order) currency. This will be a running sum of all (previous) payment (&#x60;payment_amount&#x60;) transactions linked to this order. Refunds will be subtracted from the total. | [readonly]
**payment_gateway_details** | [**\PrioTicket\DistributorAPI\Models\PaymentGatewayDetails**](PaymentGatewayDetails.md) |  | [optional]
**payment_contact** | [**\PrioTicket\DistributorAPI\Models\ContactDetails**](ContactDetails.md) |  | [optional]
**payment_fees** | [**\PrioTicket\DistributorAPI\Models\Fee[]**](Fee.md) | Applied payment fees.  Payment fees are a fixed or variable cost based on the selected payment method. | [optional] [readonly]
**payment_notes** | [**\PrioTicket\DistributorAPI\Models\Note[]**](Note.md) | Payment notes. | [optional]
**payment_created** | [**\DateTime**](\DateTime.md) | Date and time of payment. | [readonly]
**payment_created_name** | **string** | Cashier name / Username who created the payment. | [readonly]
**payment_created_email** | **string** | Cashier email / User email who created the payment. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
