# # AdyenDropInPaymentRequestAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_method** | **object** | The paymentComponentData.paymentMethod from Drop-in. (Adyen Specific Field) | [optional]
**payment_recurring** | **bool** | Whether the payment details are stored for recurring payments. | [optional] [default to false]
**payment_recurring_type** | [**\PrioTicket\DistributorAPI\Models\PaymentRecurringType**](PaymentRecurringType.md) |  | [optional]
**return_url** | **string** | In case of a redirection, this is the URL to where your shopper should be redirected back to after they complete the payment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
