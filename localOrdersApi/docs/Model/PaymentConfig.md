# # PaymentConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_methods** | **string** | In case of &#x60;payment_service_provider:ADYEN&#x60; a list of available payment methods is returned in the response, including any required fields. If you want to know more about the properties returned in the response, see the [response parameters](https://docs.adyen.com/api-explorer/#/PaymentSetupAndVerificationService/paymentMethods__resParam_groups) in the Adyen API Explorer. | [optional] [readonly]
**payment_origin_key** | **string** | In case of &#x60;payment_service_provider:ADYEN&#x60;, the required Origin-Key for Web Drop-In will be returned. More information can be found [here](https://docs.adyen.com/user-management/how-to-get-an-origin-key). | [optional] [readonly]
**payment_origin_domain** | **string** | In case of &#x60;payment_service_provider:ADYEN&#x60;, the configured origin domain authorized for web payments. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
