# PrioTicket\DistributorAPI\OrdersApi

All URIs are relative to https://sandbox-distributor-api.prioticket.com/v3.5/distributor.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrder()**](OrdersApi.md#cancelOrder) | **DELETE** /orders/{order_reference} | Cancel Order / Booking
[**createOrder()**](OrdersApi.md#createOrder) | **POST** /orders | Create Order / Confirm Reservation / Checkout Cart
[**getOrder()**](OrdersApi.md#getOrder) | **GET** /orders/{order_reference} | Order Details
[**getOrders()**](OrdersApi.md#getOrders) | **GET** /orders | List Orders
[**getVoucher()**](OrdersApi.md#getVoucher) | **GET** /orders/{order_reference}/voucher | Get Voucher
[**updateOrder()**](OrdersApi.md#updateOrder) | **PUT** /orders/{order_reference} | Update / Amend Order


## `cancelOrder()`

```php
cancelOrder($order_reference, $booking_reference, $product_type_transaction_id, $cancellation_reason, $payment_refund): \PrioTicket\DistributorAPI\Models\OrderDetailResponse
```

Cancel Order / Booking

This API is called to (partial) cancel an order/ booking. In case of a full cancellation, you are no longer able to amend the order. Otherwise, the updated order will be returned.  Again, to avoid mismatches and validate a correct implementation, make sure you compare the returned `order_pricing.price_total`.  > This API can only be called for bookings with `product_cancellation_allowed:true`. In case your order contains non-cancellable products, a full cancellation will result in an error. You will still be able to do partial-cancellations for those bookings with cancellable products.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_reference = ORDRREF123456; // string | In case only the `order_reference` is provided, a full cancellation will be made.
$booking_reference = ["BOOKING_REFERENCE_123"]; // string[] | [FILTER] In case the `booking_reference` is provided, a partial cancellation will be made. Only the specified booking(s) will be cancelled.
$product_type_transaction_id = ["159118380521834001"]; // string[] | [FILTER] **(ADVANCED)** In case the `product_type_transaction_id` is provided, a partial cancellation will be made. Only the specified transaction(s) will be cancelled.
$cancellation_reason = Payment declined.; // string | [INFO] Optional reason for this cancellation.
$payment_refund = true; // string | [CONFIG] Whether the guest payment should be refunded. In case the order is partially cancelled, the amount will be partially refunded as well. If multiple payments are made (split-payment) then all linked payments will be refunded. This value will be ignored in case no payment is made.  For more flexible refunds you could use the Cancel / Refund Payment API instead.

try {
    $result = $apiInstance->cancelOrder($order_reference, $booking_reference, $product_type_transaction_id, $cancellation_reason, $payment_refund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_reference** | **string**| In case only the &#x60;order_reference&#x60; is provided, a full cancellation will be made. |
 **booking_reference** | [**string[]**](../Model/string.md)| [FILTER] In case the &#x60;booking_reference&#x60; is provided, a partial cancellation will be made. Only the specified booking(s) will be cancelled. | [optional]
 **product_type_transaction_id** | [**string[]**](../Model/string.md)| [FILTER] **(ADVANCED)** In case the &#x60;product_type_transaction_id&#x60; is provided, a partial cancellation will be made. Only the specified transaction(s) will be cancelled. | [optional]
 **cancellation_reason** | **string**| [INFO] Optional reason for this cancellation. | [optional]
 **payment_refund** | **string**| [CONFIG] Whether the guest payment should be refunded. In case the order is partially cancelled, the amount will be partially refunded as well. If multiple payments are made (split-payment) then all linked payments will be refunded. This value will be ignored in case no payment is made.  For more flexible refunds you could use the Cancel / Refund Payment API instead. | [optional] [default to &#39;true&#39;]

### Return type

[**\PrioTicket\DistributorAPI\Models\OrderDetailResponse**](../Model/OrderDetailResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($create_order_request): \PrioTicket\DistributorAPI\Models\OrderDetailResponse
```

Create Order / Confirm Reservation / Checkout Cart

This API is called to book / confirm product(s) and get a barcode / QR-code in response.  Creating an order triggers a payment obligation. Make sure that you received the money from the guest and please note that some products are non-refundable. Do not create an order if its not certain that the product will be purchased.  Make sure that you cross-check the `order_pricing.price_total` with the amount charged to the guest. Mismatches might indicate missing fees or discounts, causing financial mismatches between our systems. We recommend aborting the booking process in case this happens.  --- ## **Booking Options**  **Direct Booking**     + Direct booking of a product without availability (`product_availability:false`) and no traveldate (`product_traveldate_required:false`) (non-dated, no capacity ticket)      + Direct booking of a product without availability (`product_availability:false`) and required traveldate (`product_traveldate_required:true`) (dated, unlimited capacity ticket)      + Direct booking of a product with availability (`product_availability:true`) and with or without capacity (`product_capacity:true/false`).      > * Adding a promotional code to a Direct Booking is not supported.   > * Direct payment settlement with a Direct Booking is not supported.    **Confirm Reservation / Checkout Cart**    + Booking of product(s) with a `reservation_reference` (Confirmation of an active reservation (Confirm and Order)). This can be any product with any configuration.  > Please note that multiple types of **Direct Booking** can be made at once, but only a single **Confirm Reservation** at a time is supported. Would you wish to confirm multiple reserved products at once, please put multiple bookings in a single reservation (Cart). You can not \"mix\" different booking options (**Direct Booking** && **Confirm Reservation**) in the same request.   Therefore only multiple entries of the **Direct Booking** option is being supported.    > * In case multiple products are to be booked, if any of them are unavailable, the whole order will be declined. > * You are unable to combine products with different base currencies in the same order.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_order_request = new \PrioTicket\DistributorAPI\Models\CreateOrderRequest(); // \PrioTicket\DistributorAPI\Models\CreateOrderRequest | Create Order Request.

try {
    $result = $apiInstance->createOrder($create_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_order_request** | [**\PrioTicket\DistributorAPI\Models\CreateOrderRequest**](../Model/CreateOrderRequest.md)| Create Order Request. |

### Return type

[**\PrioTicket\DistributorAPI\Models\OrderDetailResponse**](../Model/OrderDetailResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($order_reference, $order_version, $cache): \PrioTicket\DistributorAPI\Models\OrderDetailResponse
```

Order Details

This API is called to get order details and status.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_reference = ORDRREF123456; // string | A unique identifier got in response of booking API.
$order_version = 1; // int | Order Version / Revision number. By default the latest revision will be returned.  If set, the `cache` value will be ignored.
$cache = true; // string | [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended.

try {
    $result = $apiInstance->getOrder($order_reference, $order_version, $cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_reference** | **string**| A unique identifier got in response of booking API. |
 **order_version** | **int**| Order Version / Revision number. By default the latest revision will be returned.  If set, the &#x60;cache&#x60; value will be ignored. | [optional]
 **cache** | **string**| [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. | [optional] [default to &#39;true&#39;]

### Return type

[**\PrioTicket\DistributorAPI\Models\OrderDetailResponse**](../Model/OrderDetailResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($reseller_id, $distributor_id, $market_admin_id, $supplier_id, $order_reference, $order_external_reference, $order_status, $order_contact_uid, $order_contact_name, $order_contact_email, $order_created_from, $order_created_to, $order_modified, $booking_reference, $booking_external_reference, $product_id, $product_type_code, $product_availability_id, $product_availability_capacity_id, $order_created_email, $order_search_query, $filter_bookings, $order_view_type, $order_sort_by, $order_sort_order, $items_per_page, $start_index, $page, $cache, $if_modified_since): \PrioTicket\DistributorAPI\Models\OrderListResponse
```

List Orders

This API is meant to return a small subset of orders. By default the last 3 months are returned. > If you would like to retrieve all orders for Reporting / BI purposes we recommended a different approach, please contact your account manager for more information.  > By default only the latest revision will be returned.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reseller_id = 501; // string | [FILTER] on `reseller_id`.
$distributor_id = 501; // string | [FILTER] on `distributor_id`.
$market_admin_id = 74343; // string | [FILTER] on `market_admin_id`.
$supplier_id = 145; // string | [FILTER] on `supplier_id`.
$order_reference = ORDRREF123456; // string | [FILTER] on `order_reference`.
$order_external_reference = EXTERNALREF123; // string | [FILTER] on `order_external_reference`.
$order_status = ["ORDER_CONFIRMED"]; // \PrioTicket\DistributorAPI\Models\OrderStatusTypes[] | [FILTER] on `order_status`.
$order_contact_uid = f847dc60-aaf0-11ea-8926-471c6c723e1d; // string | [FILTER] on `order_contact_uid`.
$order_contact_name = John Doe; // string | [FILTER] on `order_contact_name`, `contact_name_first` and `contact_name_last`.
$order_contact_email = JohnDoe@example.com; // string | [FILTER] on `order_contact_email`.
$order_created_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | [FILTER] on `order_created`. Only the orders created from this specific date will be returned. A longer time range might increase response times.
$order_created_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | [FILTER] on `order_created`. Only the orders created till this specific date will be returned. A longer time range might increase response times.
$order_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | [FILTER] on `order_modified`. Only the orders modified after the given date will be returned. This includes newly created orders.  For caching purposes we recommend using the `If-Modified-Since` header instead.
$booking_reference = BOOKINGREF123; // string | [FILTER] on `booking_reference`.
$booking_external_reference = EXTERNALREF123; // string | [FILTER] on `booking_external_reference`.
$product_id = ["PRODUCT_ID_123"]; // string[] | [FILTER] on `product_id`.
$product_type_code = 1539762088951995; // string | [FILTER] on `product_type_code`.
$product_availability_id = 20191026090010006526; // string | [FILTER] on `product_availability_id`.
$product_availability_capacity_id = 20191026090010006526; // string | [FILTER] on `product_availability_capacity_id`.
$order_created_email = examplecashier@prioticket.com; // string | [FILTER] on `order_created_email`. Only the orders made by this user / cashier will be returned.
$order_search_query = 'order_search_query_example'; // string | [SEARCH] on keywords. This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (`cache:true`)
$filter_bookings = false; // string | [CONFIG] Filter (sub) bookings from response.   Whether to include all bookings belonging to the same order or only those matching the defined filters. By default the system will return every booking of an order, regardless whether some of those bookings do not match the defined filters.  For example. when a filter for `product_id` is set, only orders which contain that product will be returned, but additional bookings (for different product IDs) of that same order might be listed as well. By enabling this filter, only bookings for that `product_id` would be returned.
$order_view_type = DISTRIBUTOR; // string | [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials.
$order_sort_by = ORDER_CREATED; // string | [SORT] Select sorting method.  UPCOMING: [INVOICE_DATE].
$order_sort_order = ASC; // string | [SORT] Keyword used to sort result sets in either ascending or descending order.
$items_per_page = 5; // int | [PAGING] Items Per Page - Allows user's to configure the `items_per_page` value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page=100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the `items_per_page` response element in calculating actual page size.
$start_index = 1; // int | [PAGING] Index-based paging - Allows user's to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index=200.
$page = 1; // int | [PAGING] Page-based paging - Allows user's to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page=1 or ?page=20. The `page_index` and `total_pages` properties are used for this style of paging.
$cache = true; // string | [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended.
$if_modified_since = Wed, 21 Oct 2015 07:28:00 GMT; // string | [CACHE] The `If-Modified-Since` request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the `Last-Modified` response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method.

try {
    $result = $apiInstance->getOrders($reseller_id, $distributor_id, $market_admin_id, $supplier_id, $order_reference, $order_external_reference, $order_status, $order_contact_uid, $order_contact_name, $order_contact_email, $order_created_from, $order_created_to, $order_modified, $booking_reference, $booking_external_reference, $product_id, $product_type_code, $product_availability_id, $product_availability_capacity_id, $order_created_email, $order_search_query, $filter_bookings, $order_view_type, $order_sort_by, $order_sort_order, $items_per_page, $start_index, $page, $cache, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reseller_id** | **string**| [FILTER] on &#x60;reseller_id&#x60;. | [optional]
 **distributor_id** | **string**| [FILTER] on &#x60;distributor_id&#x60;. | [optional]
 **market_admin_id** | **string**| [FILTER] on &#x60;market_admin_id&#x60;. | [optional]
 **supplier_id** | **string**| [FILTER] on &#x60;supplier_id&#x60;. | [optional]
 **order_reference** | **string**| [FILTER] on &#x60;order_reference&#x60;. | [optional]
 **order_external_reference** | **string**| [FILTER] on &#x60;order_external_reference&#x60;. | [optional]
 **order_status** | [**\PrioTicket\DistributorAPI\Models\OrderStatusTypes[]**](../Model/\PrioTicket\DistributorAPI\Models\OrderStatusTypes.md)| [FILTER] on &#x60;order_status&#x60;. | [optional]
 **order_contact_uid** | **string**| [FILTER] on &#x60;order_contact_uid&#x60;. | [optional]
 **order_contact_name** | **string**| [FILTER] on &#x60;order_contact_name&#x60;, &#x60;contact_name_first&#x60; and &#x60;contact_name_last&#x60;. | [optional]
 **order_contact_email** | **string**| [FILTER] on &#x60;order_contact_email&#x60;. | [optional]
 **order_created_from** | **\DateTime**| [FILTER] on &#x60;order_created&#x60;. Only the orders created from this specific date will be returned. A longer time range might increase response times. | [optional]
 **order_created_to** | **\DateTime**| [FILTER] on &#x60;order_created&#x60;. Only the orders created till this specific date will be returned. A longer time range might increase response times. | [optional]
 **order_modified** | **\DateTime**| [FILTER] on &#x60;order_modified&#x60;. Only the orders modified after the given date will be returned. This includes newly created orders.  For caching purposes we recommend using the &#x60;If-Modified-Since&#x60; header instead. | [optional]
 **booking_reference** | **string**| [FILTER] on &#x60;booking_reference&#x60;. | [optional]
 **booking_external_reference** | **string**| [FILTER] on &#x60;booking_external_reference&#x60;. | [optional]
 **product_id** | [**string[]**](../Model/string.md)| [FILTER] on &#x60;product_id&#x60;. | [optional]
 **product_type_code** | **string**| [FILTER] on &#x60;product_type_code&#x60;. | [optional]
 **product_availability_id** | **string**| [FILTER] on &#x60;product_availability_id&#x60;. | [optional]
 **product_availability_capacity_id** | **string**| [FILTER] on &#x60;product_availability_capacity_id&#x60;. | [optional]
 **order_created_email** | **string**| [FILTER] on &#x60;order_created_email&#x60;. Only the orders made by this user / cashier will be returned. | [optional]
 **order_search_query** | **string**| [SEARCH] on keywords. This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (&#x60;cache:true&#x60;) | [optional]
 **filter_bookings** | **string**| [CONFIG] Filter (sub) bookings from response.   Whether to include all bookings belonging to the same order or only those matching the defined filters. By default the system will return every booking of an order, regardless whether some of those bookings do not match the defined filters.  For example. when a filter for &#x60;product_id&#x60; is set, only orders which contain that product will be returned, but additional bookings (for different product IDs) of that same order might be listed as well. By enabling this filter, only bookings for that &#x60;product_id&#x60; would be returned. | [optional] [default to &#39;false&#39;]
 **order_view_type** | **string**| [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials. | [optional]
 **order_sort_by** | **string**| [SORT] Select sorting method.  UPCOMING: [INVOICE_DATE]. | [optional] [default to &#39;ORDER_CREATED&#39;]
 **order_sort_order** | **string**| [SORT] Keyword used to sort result sets in either ascending or descending order. | [optional] [default to &#39;DESC&#39;]
 **items_per_page** | **int**| [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. | [optional] [default to 10]
 **start_index** | **int**| [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. | [optional] [default to 1]
 **page** | **int**| [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. | [optional] [default to 1]
 **cache** | **string**| [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. | [optional] [default to &#39;true&#39;]
 **if_modified_since** | **string**| [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\OrderListResponse**](../Model/OrderListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoucher()`

```php
getVoucher($order_reference, $booking_reference, $voucher_additional_information): \PrioTicket\DistributorAPI\Models\GetVoucherResponseJSON
```

Get Voucher

Get a valid voucher / ticket in PDF format.  Some third party reservation systems are unable to provide the voucher codes in a string format, instead you can obtain the PDF file using this API. This endpoint can also be used in case the voucher is not released directly upon booking confirmation. > Please note that by sending the correct Media Type header you can define whether to receive a download URL (`application/json`) or an encoded PDF file directly (`application/pdf`).

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


$apiInstance = new PrioTicket\DistributorAPI\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_reference = ORDRREF123456; // string | A unique identifier got in response of booking API.
$booking_reference = BOOKINGREF123; // string | A unique identifier got in response of booking API.
$voucher_additional_information = Last minute info.; // string | This information will be shown on the voucher in a seperate section.

try {
    $result = $apiInstance->getVoucher($order_reference, $booking_reference, $voucher_additional_information);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_reference** | **string**| A unique identifier got in response of booking API. |
 **booking_reference** | **string**| A unique identifier got in response of booking API. | [optional]
 **voucher_additional_information** | **string**| This information will be shown on the voucher in a seperate section. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\GetVoucherResponseJSON**](../Model/GetVoucherResponseJSON.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($order_reference, $update_order_request): \PrioTicket\DistributorAPI\Models\OrderDetailResponse
```

Update / Amend Order

This API is called to update an order or booking. Regular users should only update basic order details such as contact information. For requesting other timeslots or changing the booking count, we recommend that you cancel the current order and rebook. > Make sure that you provide the complete top-level order object and that all original fields with either the current or amended values (e.g. `order_distributor_id`, `order_external_reference`, all `order_contacts` etc) are sent,  missing (optional) fields will be removed from our records. Note that the opposite is true for `order_bookings`, only the bookings you would like to amend should be provided (see advanced functionality below). --- ### **Advanced Functionality** <details>   <summary>**Amending confirmed orders**</summary>    We always recommend that you do a full cancellation and create a new order in case of amendments.      Alternatively we have the advanced method of amending an existing order with the following benefits:      * Versioning history on order and booking level.      * Best effort algorithm to retain your existing vouchers or adding additional bookings to your combi-passes.      * Payment credit system where existing payments are stored for later purchases.      * Keeping the same `order_reference`.         In case you would like to fully amend an existing order, but retain the same `order_reference`, you can sent the amended booking details with the same `booking_reference` in the request. The original booking will be fully replaced with the newly created (confirmed) booking and therefore you can follow the same approach as you would normally do when creating new orders using the direct booking method, but with the following differences:      * Products that were not in the original order, but found in the amendment request will be added (Add booking to existing order). This allows to easily upsell existing orders and in advanced scenarios add products to the same group / combi codes.      * Products with amended quantity will be either partially cancelled or additionally added. Note that we will NOT take into the account the capacity difference.          For example if the original booking contains 4 tickets and the remaining capacity prior to the amendment is 2, you are NOT able to upsell towards 6 tickets. Although that there would be sufficient remaining capacity to book the additional 2 tickets, the total required capacity (in this case 6) should be equal or less than the current remaining capacity.          We have done this on purpose to prevent concurrency issues when for example the cancellation is delayed and capacity is not released immediately, causing your amendment to fail.     This also allows us to block (reserve) your new products first, then cancel your original booking, making sure you never 'lose' your tickets in case of an error.        * The total payment difference will be calculated and will be either charged or (partially) refunded. Please note that in case of a surcharge, you might be required to submit an additional payment based on your settlement method and payment configuration.        Note that all payments linked to the original order will be returned as well, regardless of the `order_version`.      * The `order_reference` and `booking_reference` will be retained and as such the versions will be updated as `order_version + 1` and only the amended booking will be set to `booking_version + 1`.      * If the original order contained price variations such as cart discounts, partner discounts or promocodes, those will be re-applied on the amended order as well if applicable.      * All booking and cancellation restrictions still apply, if you try to amend any non-cancellable products from the original order (implicitly indicating that you want to cancel those) the request will fail. Similarly you are discouraged (and often not allowed) to cancel any bookings that have already been redeemed.         Furthermore, bookings that were already cancelled in the original order should not be passed in the new request. Therefore they will also not be included in the new version.        * In case the bookings were already invoiced, the original booking will be credited and a new invoice will be created.      * In case a product cannot be cancelled nor amended but additional guests are added, we might create a second booking for the same product.      * In case of amendments we have a best effort algorithm to retain the current voucher (codes), but depending on the product, some vouchers will be invalidated and replaced.      > Bookings will be directly amended using the direct booking concept, you are unable to revert this action. For third-party products we are heavily relying on their system capabilities. Some do not support amendments and therefore a swift cancel and re-book (with or without capacity block) is required instead.     This means that the failure rate on this API can be slightly higher than usual.        > It is important that you only sent the booking objects of the bookings you would like to amend, our system does not check which changes are made, instead we simply cancel the original booking and replace it with a new booking.  </details>

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


$apiInstance = new PrioTicket\DistributorAPI\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_reference = ORDRREF123456; // string | A unique identifier got in response of booking API.
$update_order_request = new \PrioTicket\DistributorAPI\Models\UpdateOrderRequest(); // \PrioTicket\DistributorAPI\Models\UpdateOrderRequest | Update Order Request.

try {
    $result = $apiInstance->updateOrder($order_reference, $update_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_reference** | **string**| A unique identifier got in response of booking API. |
 **update_order_request** | [**\PrioTicket\DistributorAPI\Models\UpdateOrderRequest**](../Model/UpdateOrderRequest.md)| Update Order Request. |

### Return type

[**\PrioTicket\DistributorAPI\Models\OrderDetailResponse**](../Model/OrderDetailResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
