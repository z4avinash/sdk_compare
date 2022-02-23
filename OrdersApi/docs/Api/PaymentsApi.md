# PrioTicket\DistributorAPI\PaymentsApi

All URIs are relative to https://sandbox-distributor-api.prioticket.com/v3.5/distributor.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPayment()**](PaymentsApi.md#addPayment) | **POST** /payments | Create Payment
[**addPaymentDetails()**](PaymentsApi.md#addPaymentDetails) | **POST** /payments/{payment_id}/details | Submit Additional Payment Details
[**cancelPayment()**](PaymentsApi.md#cancelPayment) | **DELETE** /payments | Cancel / Refund Payment
[**getPaymentConfig()**](PaymentsApi.md#getPaymentConfig) | **GET** /payments/config | Get Payment Configuration
[**getPayments()**](PaymentsApi.md#getPayments) | **GET** /payments | List Payments


## `addPayment()`

```php
addPayment($create_payment_request, $order_reference, $booking_reference, $payment_class): \PrioTicket\DistributorAPI\Models\CreatePaymentResponse
```

Create Payment

This API is called to initiate a payment on a Prio connected PSP or to settle a manual payment.  This is a required step if `SettlementType:DIRECT`.  > * Only applicable to guest payments. Not applicable to B2B resellers (Indirect sales / `SettlementType:EXTERNAL`). > * Once a payment has been made you are unable to amend the reservation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2
$config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PrioTicket\DistributorAPI\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_payment_request = new \PrioTicket\DistributorAPI\Models\CreatePaymentRequest(); // \PrioTicket\DistributorAPI\Models\CreatePaymentRequest
$order_reference = ORDRREF123456; // string | If only a `order_reference` is provided, a full payment will be registered and all bookings will be automatically paid. You can also pass the `reservation_reference` in this field.
$booking_reference = ["BOOKING_REFERENCE_123"]; // string[] | **(ADVANCED)** In case a `booking_reference` is provided, a partial payment will be registered. Only the specified booking will be paid.
$payment_class = SALES; // \PrioTicket\DistributorAPI\Models\PaymentClass | **(ADVANCED)** By default the sales amount will be settled via this API. Alternatively you can also settle the outstanding purchase amount of an order or create an unreferenced payment (e.g. a deposit) which can be allocated to an order or invoice later on.

try {
    $result = $apiInstance->addPayment($create_payment_request, $order_reference, $booking_reference, $payment_class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->addPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_payment_request** | [**\PrioTicket\DistributorAPI\Models\CreatePaymentRequest**](../Model/CreatePaymentRequest.md)|  |
 **order_reference** | **string**| If only a &#x60;order_reference&#x60; is provided, a full payment will be registered and all bookings will be automatically paid. You can also pass the &#x60;reservation_reference&#x60; in this field. | [optional]
 **booking_reference** | [**string[]**](../Model/string.md)| **(ADVANCED)** In case a &#x60;booking_reference&#x60; is provided, a partial payment will be registered. Only the specified booking will be paid. | [optional]
 **payment_class** | [**\PrioTicket\DistributorAPI\Models\PaymentClass**](../Model/.md)| **(ADVANCED)** By default the sales amount will be settled via this API. Alternatively you can also settle the outstanding purchase amount of an order or create an unreferenced payment (e.g. a deposit) which can be allocated to an order or invoice later on. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\CreatePaymentResponse**](../Model/CreatePaymentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addPaymentDetails()`

```php
addPaymentDetails($payment_id, $adyen_set_payment_details_request): \PrioTicket\DistributorAPI\Models\SubmitPaymentDetailsResponse
```

Submit Additional Payment Details

This API allows to submit additional payment details. Only applicable to merchants using the Adyen Marketplace. [More Information](https://docs.adyen.com/checkout/drop-in-web#step-4-additional-front-end)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2
$config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PrioTicket\DistributorAPI\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = de1829d0-e144-11ea-bc09-f935c77bef95; // string | A unique identifier got in response of the create payment API.
$adyen_set_payment_details_request = new \PrioTicket\DistributorAPI\Models\AdyenSetPaymentDetailsRequest(); // \PrioTicket\DistributorAPI\Models\AdyenSetPaymentDetailsRequest

try {
    $result = $apiInstance->addPaymentDetails($payment_id, $adyen_set_payment_details_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->addPaymentDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| A unique identifier got in response of the create payment API. |
 **adyen_set_payment_details_request** | [**\PrioTicket\DistributorAPI\Models\AdyenSetPaymentDetailsRequest**](../Model/AdyenSetPaymentDetailsRequest.md)|  |

### Return type

[**\PrioTicket\DistributorAPI\Models\SubmitPaymentDetailsResponse**](../Model/SubmitPaymentDetailsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelPayment()`

```php
cancelPayment($order_reference, $booking_reference, $product_type_transaction_id, $payment_id, $payment_merchant_reference, $payment_service_provider_reference, $refund_amount, $refund_reason): \PrioTicket\DistributorAPI\Models\PaymentDetailsResponse
```

Cancel / Refund Payment

This API is called to Cancel / Refund your payment. Only use this API to cancel a payment in progress, e.g. a payment initiated on a payment terminal, or to refund a payment without cancelling the order.  In case you would like to cancel AND refund you can simply call the Cancel Reservation or the Cancel Order API (`payment_refund:true`) which will refund the payment automatically (also upon auto-cancellation due to reservation expiry). Any card authorizations or blocks will be released as well.  Either the `order_reference`, `booking_reference`, `product_type_transaction_id`, `payment_id`, `payment_merchant_reference` or `payment_service_provider_reference` is required to identify the payment(s) to refund. If provided, only the matching payment(s) will be refunded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2
$config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PrioTicket\DistributorAPI\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_reference = ORDRREF123456; // string | A unique order / reservation reference. If provided, all payments linked to this order will be refunded.
$booking_reference = ["BOOKING_REFERENCE_123"]; // string[] | **(ADVANCED)** In case a `booking_reference` is provided, a partial refund will be registered. Only the specified booking will be refunded.
$product_type_transaction_id = ["159118380521834001"]; // string[] | **(ADVANCED)** In case the `product_type_transaction_id` is provided, a partial refund will be made. Only the specified transaction(s) will be refunded.
$payment_id = 3fa85f64-5717-4562-b3fc-2c963f66afa6; // string | Unique Payment ID set by the Prio system. This is an internal identifier.
$payment_merchant_reference = 1478349849927_771663371; // string | Unique (external) payment reference set by the merchant / (third) party / POS system initiating the payment.
$payment_service_provider_reference = 852596799876396F; // string | Reference set by payment service provider
$refund_amount = 20.50; // string | **(ADVANCED)** Amount of money to be refunded. If not provided, the full amount will be refunded.
$refund_reason = Guest reimbursement; // string | Reason for this refund.

try {
    $result = $apiInstance->cancelPayment($order_reference, $booking_reference, $product_type_transaction_id, $payment_id, $payment_merchant_reference, $payment_service_provider_reference, $refund_amount, $refund_reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->cancelPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_reference** | **string**| A unique order / reservation reference. If provided, all payments linked to this order will be refunded. | [optional]
 **booking_reference** | [**string[]**](../Model/string.md)| **(ADVANCED)** In case a &#x60;booking_reference&#x60; is provided, a partial refund will be registered. Only the specified booking will be refunded. | [optional]
 **product_type_transaction_id** | [**string[]**](../Model/string.md)| **(ADVANCED)** In case the &#x60;product_type_transaction_id&#x60; is provided, a partial refund will be made. Only the specified transaction(s) will be refunded. | [optional]
 **payment_id** | **string**| Unique Payment ID set by the Prio system. This is an internal identifier. | [optional]
 **payment_merchant_reference** | **string**| Unique (external) payment reference set by the merchant / (third) party / POS system initiating the payment. | [optional]
 **payment_service_provider_reference** | **string**| Reference set by payment service provider | [optional]
 **refund_amount** | **string**| **(ADVANCED)** Amount of money to be refunded. If not provided, the full amount will be refunded. | [optional]
 **refund_reason** | **string**| Reason for this refund. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\PaymentDetailsResponse**](../Model/PaymentDetailsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentConfig()`

```php
getPaymentConfig($payment_gateway_type, $order_reference, $payment_external_reference): \PrioTicket\DistributorAPI\Models\PaymentConfig
```

Get Payment Configuration

This API is called to get available payment methods and configuration from a Prio PSP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2
$config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PrioTicket\DistributorAPI\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_gateway_type = ADYEN; // \PrioTicket\DistributorAPI\Models\PaymentGatewayType | Selected payment service provider.
$order_reference = ORDRREF123456; // string | [FILTER] Some payment service providers allow to filter payment methods / configuration based on for example shopper region and order value. If a `order_reference` or `reservation_reference` is provided, such details will be sent forward to the PSP system.
$payment_external_reference = SHOPPER_REFERENCE; // string | [FILTER] Return the stored payment methods for a specific (returning) shopper (`payment_recurring:true`).

try {
    $result = $apiInstance->getPaymentConfig($payment_gateway_type, $order_reference, $payment_external_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_gateway_type** | [**\PrioTicket\DistributorAPI\Models\PaymentGatewayType**](../Model/.md)| Selected payment service provider. |
 **order_reference** | **string**| [FILTER] Some payment service providers allow to filter payment methods / configuration based on for example shopper region and order value. If a &#x60;order_reference&#x60; or &#x60;reservation_reference&#x60; is provided, such details will be sent forward to the PSP system. |
 **payment_external_reference** | **string**| [FILTER] Return the stored payment methods for a specific (returning) shopper (&#x60;payment_recurring:true&#x60;). | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\PaymentConfig**](../Model/PaymentConfig.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayments()`

```php
getPayments($order_reference, $payment_id, $payment_merchant_reference, $payment_service_provider_reference, $payment_external_reference, $payment_class, $items_per_page, $start_index, $page, $if_modified_since): \PrioTicket\DistributorAPI\Models\PaymentListResponse
```

List Payments

This API is called to list all payments in your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth2
$config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PrioTicket\DistributorAPI\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_reference = ORDRREF123456; // string | [FILTER] on `order_reference`. You can also pass the `reservation_reference` in this field.
$payment_id = 3fa85f64-5717-4562-b3fc-2c963f66afa6; // string | [FILTER] on `payment_id`.
$payment_merchant_reference = 3fa85f64-5717-4562-b3fc-2c963f66afa6; // string | [FILTER] on `payment_merchant_reference`.
$payment_service_provider_reference = 3fa85f64-5717-4562-b3fc-2c963f66afa6; // string | [FILTER] on `payment_service_provider_reference`.
$payment_external_reference = SHOPPER_REFERENCE; // string | [FILTER] on `payment_external_reference`.
$payment_class = SALES; // \PrioTicket\DistributorAPI\Models\PaymentClass | **(ADVANCED)** By default sales payments will be returned. Alternatively you can also retrieve the purchase related payments.
$items_per_page = 5; // int | [PAGING] Items Per Page - Allows user's to configure the `items_per_page` value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page=100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the `items_per_page` response element in calculating actual page size.
$start_index = 1; // int | [PAGING] Index-based paging - Allows user's to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index=200.
$page = 1; // int | [PAGING] Page-based paging - Allows user's to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page=1 or ?page=20. The `page_index` and `total_pages` properties are used for this style of paging.
$if_modified_since = Wed, 21 Oct 2015 07:28:00 GMT; // string | [CACHE] The `If-Modified-Since` request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the `Last-Modified` response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method.

try {
    $result = $apiInstance->getPayments($order_reference, $payment_id, $payment_merchant_reference, $payment_service_provider_reference, $payment_external_reference, $payment_class, $items_per_page, $start_index, $page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_reference** | **string**| [FILTER] on &#x60;order_reference&#x60;. You can also pass the &#x60;reservation_reference&#x60; in this field. | [optional]
 **payment_id** | **string**| [FILTER] on &#x60;payment_id&#x60;. | [optional]
 **payment_merchant_reference** | **string**| [FILTER] on &#x60;payment_merchant_reference&#x60;. | [optional]
 **payment_service_provider_reference** | **string**| [FILTER] on &#x60;payment_service_provider_reference&#x60;. | [optional]
 **payment_external_reference** | **string**| [FILTER] on &#x60;payment_external_reference&#x60;. | [optional]
 **payment_class** | [**\PrioTicket\DistributorAPI\Models\PaymentClass**](../Model/.md)| **(ADVANCED)** By default sales payments will be returned. Alternatively you can also retrieve the purchase related payments. | [optional]
 **items_per_page** | **int**| [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. | [optional] [default to 10]
 **start_index** | **int**| [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. | [optional] [default to 1]
 **page** | **int**| [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. | [optional] [default to 1]
 **if_modified_since** | **string**| [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\PaymentListResponse**](../Model/PaymentListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
