# # CommonPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_object_type** | **string** | Type of payment.     &lt;details&gt;   &lt;summary&gt;**Payment Object Types**&lt;/summary&gt;  Must be one of the following values:   * &#x60;ADYEN_DROP_IN&#x60; - Adyen Drop-In.   * &#x60;ADYEN_LINK&#x60; - Adyen Payment Link.   * &#x60;ADYEN_TERMINAL&#x60; - Adyen Terminal API.   * &#x60;ADYEN_RECURRING&#x60; - Adyen Recurring Payments.   * &#x60;NGENIUS_HPP&#x60; - N-Genius Hosted Payment Page.   * &#x60;MEWS_BILL&#x60; - Mews Payment.   * &#x60;MANUAL&#x60; - Manual Payment.    &lt;/details&gt;    &gt; Used to aid in serialization, deserialization, and validation. |
**payment_merchant_reference** | **string** | Unique (external) payment reference set by the merchant / (third) party / POS system initiating the payment. This reference will also be used to identify the payment in the PSP system. |
**payment_external_reference** | **string** | External payment reference set to identify the shopper / entity / cardholder / guest performing the payment. This reference can also be used to identify the payment in the PSP system. &gt; Required in case of recurring payments (&#x60;payment_recurring:true&#x60;). | [optional]
**payment_currency_code** | **string** | The (guest) currency code of this payment. According to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217).  **(ADVANCED)** This value defaults to &#x60;order.order_pricing[].price_currency_code&#x60;, unless the guest uses an alternative checkout currency, in which case an additional &#x60;payment_currency_rate&#x60; and &#x60;payment_currency_amount&#x60; will be returned.  Note that the payment service provider can perform an additional conversion called dynamic currency conversion (DCC), which will be returned inside &#x60;payment_gateway_additional_values&#x60;. | [optional]
**payment_currency_rate** | **string** | Checkout / Guest currency conversion rate.   If not set and an alternative &#x60;payment_currency_code&#x60; is provided, the latest rates from the Currency API will be used as default. | [optional]
**payment_currency_amount** | **string** | The total amount / value that has been authorised / settled / refunded in the alternative (guest) currency (&#x60;payment_amount&#x60; * &#x60;payment_currency_rate&#x60;). | [optional] [readonly]
**payment_amount** | **string** | Optional alternative amount to be authorised / settled / refunded during this transaction.   Only set this value in case of partial payments or deposits. By default this is set to the &#x60;order_pricing.price_total&#x60;.   In case of refunds, this value will be a positive value but the payment type should be set to &#x60;payment_type:REFUND&#x60;. | [optional]
**payment_contact** | [**\PrioTicket\DistributorAPI\Models\ContactDetails**](ContactDetails.md) |  | [optional]
**payment_notes** | [**\PrioTicket\DistributorAPI\Models\Note[]**](Note.md) | Payment notes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
