# # AdyenPaymentLinkResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_object_type** | **string** | Type of payment.     &lt;details&gt;   &lt;summary&gt;**Payment Object Types**&lt;/summary&gt;  Must be one of the following values:   * &#x60;ADYEN_DROP_IN&#x60; - Adyen Drop-In.   * &#x60;ADYEN_LINK&#x60; - Adyen Payment Link.   * &#x60;ADYEN_TERMINAL&#x60; - Adyen Terminal API.   * &#x60;ADYEN_RECURRING&#x60; - Adyen Recurring Payments.   * &#x60;NGENIUS_HPP&#x60; - N-Genius Hosted Payment Page.   * &#x60;MEWS_BILL&#x60; - Mews Payment.   * &#x60;MANUAL&#x60; - Manual Payment.    &lt;/details&gt;    &gt; Used to aid in serialization, deserialization, and validation. |
**payment_details** | [**\PrioTicket\DistributorAPI\Models\PaymentDetails**](PaymentDetails.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
