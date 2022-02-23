# # CreateOrderModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_platform_id** | **string** | Unique identifier of the platform. | [readonly]
**order_platform_name** | **string** | Name of the platform. | [readonly]
**order_reseller_id** | **string** | Unique identifier of the reseller. | [readonly]
**order_reseller_name** | **string** | Name of the reseller. | [readonly]
**order_distributor_id** | **string** | Unique identifier for distributor assigned by Prio. |
**order_distributor_name** | **string** | Name of the distributor. | [readonly]
**order_partner_id** | **string** | Unique identifier for partner assigned by Prio. | [optional]
**order_partner_name** | **string** | Name of the partner. | [optional] [readonly]
**order_reference** | **string** | A unique identifier for the created order in the Prio. | [readonly]
**order_external_reference** | **string** | A unique order identifier within the external system. |
**order_status** | [**\PrioTicket\DistributorAPI\Models\OrderStatusTypes**](OrderStatusTypes.md) |  |
**order_settlement_type** | [**\PrioTicket\DistributorAPI\Models\SettlementType**](SettlementType.md) |  | [optional]
**order_channel** | [**\PrioTicket\DistributorAPI\Models\OrderChannel**](OrderChannel.md) |  |
**order_language** | **string** | Language to use for communication, e.g pre-arrival emails. Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. |
**order_version** | **int** | Order version number. | [readonly] [default to 1]
**order_archived** | **string** | Whether this order has been archived. Orders will be automatically archived if it is in a final state and has not been amended for a long period of time. | [optional] [readonly] [default to 'false']
**order_redacted** | **string** | Whether this order has redacted or de-identified sensitive data such as personally identifiable information (PII). | [readonly] [default to 'false']
**order_contacts** | [**\PrioTicket\DistributorAPI\Models\ContactDetails[]**](ContactDetails.md) | Contacts linked to this order. | [optional]
**order_promocodes** | [**\PrioTicket\DistributorAPI\Models\AppliedPromocode[]**](AppliedPromocode.md) | The promocodes applied to this order. Only shown in case one or more promocodes have been applied in the reservation. Not applicable to Direct Booking. | [optional] [readonly]
**order_payments** | [**\PrioTicket\DistributorAPI\Models\PaymentDetails[]**](PaymentDetails.md) | Details on the payments linked to this order.   An order can have multiple payment records in case of installments, split payments, refunds and additional charges. Every action will result in an additional record, hence all payment history is maintained.  Payment records are always returned in a descending order based on the payment date. Therefore the first entry in the array can be considered as the most recent payment / refund and thus the &#x60;payment_total&#x60; (running sum) as the actual total amount paid and the &#x60;payment_status &#x60; as the latest payment status for this order. If there are no records, the order can be considered unpaid.  Only a single payment can be in progress or pending at the same time. Outstanding amounts will be added as a running total in the latest record with &#x60;payment_status:PENDING&#x60;.  &gt; All payments linked to this order will be returned, regardless of the &#x60;order_version&#x60;. | [optional] [readonly]
**order_pricing** | [**\PrioTicket\DistributorAPI\Models\Pricing**](Pricing.md) |  | [optional]
**order_credit** | [**\PrioTicket\DistributorAPI\Models\CreditLimit**](CreditLimit.md) |  | [optional]
**order_invoices** | [**\PrioTicket\DistributorAPI\Models\InvoiceDetails[]**](InvoiceDetails.md) | Related invoices. | [optional]
**order_options** | [**\PrioTicket\DistributorAPI\Models\OrderOptions**](OrderOptions.md) |  | [optional]
**order_flags** | [**\PrioTicket\DistributorAPI\Models\Flag[]**](Flag.md) | Order flags. | [optional]
**order_custom_fields** | [**\PrioTicket\DistributorAPI\Models\CustomField[]**](CustomField.md) | Freeform entry of any key-value pair. | [optional]
**order_notes** | [**\PrioTicket\DistributorAPI\Models\Note[]**](Note.md) | Order notes. | [optional]
**order_activity_url** | **string** | This link redirects towards the Activity Overview which allows the agent to amend the order. | [optional]
**order_customer_url** | **string** | This link that can be attached and communicated towards the end-consumer and allows for order amendment. | [optional]
**order_created** | **\DateTime** | Date and time of order creation. | [readonly]
**order_modified** | **\DateTime** | Date and time of order update. | [readonly]
**order_confirmed** | **\DateTime** | Date and time of order confirmation. | [optional] [readonly]
**order_invoiced** | **\DateTime** | Date and time of order invoice. | [optional] [readonly]
**order_cancellation_date_time** | **\DateTime** | Date and time of order cancellation. | [optional] [readonly]
**order_created_name** | **string** | Cashier name / User name who created the order. | [readonly]
**order_created_email** | **string** | Cashier email / User email who created the order. | [readonly]
**order_view_type** | [**\PrioTicket\DistributorAPI\Models\AccountType**](AccountType.md) |  |
**order_bookings** | [**\PrioTicket\DistributorAPI\Models\BookingOption[]**](BookingOption.md) | Details of the bookings to be made. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
