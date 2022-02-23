# # ProductPaymentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_payment_type** | **string** | Indicates how the product will be purchased.  Payment Types:    * &#x60;REQUIRED&#x60; (string) - The user has to pay this service at the booking time.    * &#x60;OPTIONAL&#x60; (string) - The user can choose to pre-pay this service at the booking time or later, but it is not required in order to book.    * &#x60;NOT_SUPPORTED&#x60; (string) - Payment is not supported for this service. |
**product_payment_term** | [**\PrioTicket\DistributorAPI\Models\PaymentTermType**](PaymentTermType.md) |  |
**product_payment_deposit** | **string** | A deposit that the user may be charged or have a hold on their credit card for. | [optional]
**product_payment_require_creditcard** | **bool** | This product requires a payment via creditcard. | [optional] [default to false]
**product_payment_currency** | [**\PrioTicket\DistributorAPI\Models\Currency**](Currency.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
