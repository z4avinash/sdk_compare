# PrioTicket\DistributorAPI\ProductsApi

All URIs are relative to https://sandbox-distributor-api.prioticket.com/v3.5/distributor.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCurrencyRates()**](ProductsApi.md#getCurrencyRates) | **GET** /products/currency_rates | List Product Currency Rates
[**getProduct()**](ProductsApi.md#getProduct) | **GET** /products/{product_id} | List Product Details
[**getProductAvailability()**](ProductsApi.md#getProductAvailability) | **GET** /products/{product_id}/availability | List Product Availabilities
[**getProductCategories()**](ProductsApi.md#getProductCategories) | **GET** /products/categories | List Product Categories
[**getProductDestinations()**](ProductsApi.md#getProductDestinations) | **GET** /products/destinations | List Product Destinations
[**getProductLocations()**](ProductsApi.md#getProductLocations) | **GET** /products/locations | List Product Locations
[**getProductRoutes()**](ProductsApi.md#getProductRoutes) | **GET** /products/routes | List Product Routes
[**getProductTaxes()**](ProductsApi.md#getProductTaxes) | **GET** /products/taxes | List Product Taxes
[**getProducts()**](ProductsApi.md#getProducts) | **GET** /products | List Products


## `getCurrencyRates()`

```php
getCurrencyRates($currency_date, $currency_base, $currency_type, $if_modified_since): \PrioTicket\DistributorAPI\Models\DistributorCurrencyRatesResponse
```

List Product Currency Rates

This API returns all the currency rates on a daily basis.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | [FILTER] on `currency_date`.
$currency_base = USD; // string | [FILTER] on `currency_base`.
$currency_type = SALES; // string | [CONFIG] show currency rates based on sales or purchase price.
$if_modified_since = Wed, 21 Oct 2015 07:28:00 GMT; // string | [CACHE] The `If-Modified-Since` request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the `Last-Modified` response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method.

try {
    $result = $apiInstance->getCurrencyRates($currency_date, $currency_base, $currency_type, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getCurrencyRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_date** | **\DateTime**| [FILTER] on &#x60;currency_date&#x60;. |
 **currency_base** | **string**| [FILTER] on &#x60;currency_base&#x60;. | [optional]
 **currency_type** | **string**| [CONFIG] show currency rates based on sales or purchase price. | [optional]
 **if_modified_since** | **string**| [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\DistributorCurrencyRatesResponse**](../Model/DistributorCurrencyRatesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProduct()`

```php
getProduct($product_id, $distributor_id, $product_content_language, $product_version, $cache, $if_modified_since): \PrioTicket\DistributorAPI\Models\ProductDetailResponse
```

List Product Details

This API provides all the product information that is available in the Prio system for the requested product (`product_id`).

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = PRODUCT_ID_123; // string | Unique identifier for the product assigned by Prio.
$distributor_id = 501; // string | [FILTER] on `distributor_id`.
$product_content_language = en; // string | Language code to request language specific product data. If left empty or language is not available (not included in `product_content_languages`), the response will be in the default language i.e. English. The actual language returned can also be found inside the `Content-Language` header.
$product_version = 1; // int | Product Version / Revision number. By default the latest revision will be returned.  If set, the `cache` value will be ignored.
$cache = true; // string | [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended.
$if_modified_since = Wed, 21 Oct 2015 07:28:00 GMT; // string | [CACHE] The `If-Modified-Since` request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the `Last-Modified` response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method.

try {
    $result = $apiInstance->getProduct($product_id, $distributor_id, $product_content_language, $product_version, $cache, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| Unique identifier for the product assigned by Prio. |
 **distributor_id** | **string**| [FILTER] on &#x60;distributor_id&#x60;. | [optional]
 **product_content_language** | **string**| Language code to request language specific product data. If left empty or language is not available (not included in &#x60;product_content_languages&#x60;), the response will be in the default language i.e. English. The actual language returned can also be found inside the &#x60;Content-Language&#x60; header. | [optional]
 **product_version** | **int**| Product Version / Revision number. By default the latest revision will be returned.  If set, the &#x60;cache&#x60; value will be ignored. | [optional]
 **cache** | **string**| [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. | [optional] [default to &#39;true&#39;]
 **if_modified_since** | **string**| [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\ProductDetailResponse**](../Model/ProductDetailResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductAvailability()`

```php
getProductAvailability($product_id, $from_date, $distributor_id, $to_date, $include_disabled, $availability_capacity_id, $spots_open_min, $sub_products_depth, $party_size, $availability_modified): \PrioTicket\DistributorAPI\Models\AvailabilitiesListResponse
```

List Product Availabilities

The availability API is used to make sure that the product or service is available on the desired date and time slot.   Depending on the `product_availability` parameter given in the product feed, the availability needs to be requested using this endpoint prior to making a booking.  This endpoint should be called in order to get up-to-date availability information for a product with managed capacity.  The response will contain the availability for each time slot of the requested product that lies within the specified date range.  Time slots will not be omitted in case of no availability. Neither will a NO_AVAILABILITY error be returned in that case. Instead, an explicit vacancy of zero should be expected.  **Caching Recommendations**  We only recommend caching if you would like to show availability for multiple products at once or for example hide fully booked products in a general overview page. Consider carefully whether caching is needed.     An example caching policy:       * Before every order, we recommend checking the availability again to get the exact price and availability.   * Once per hour, update the availability for the coming week.   * Once per day, update the availability for the coming month.   * Once per week, update the availability for the coming 90 days.      * To further improve accuracy, you could tweak intervals based on the popularity or remaining capacity of the product. For example, only regularly fetch availabilty once the remaining capacity falls below 100.      > ### Notes > * Dates and times are always relative to the supplier timezone and all offsets are automatically adjusted based on daylight saving time (DST). > * A maximum of 90 days is allowed. If you would like to batch availability for a longer period, please make multiple calls.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | Unique identifier for the product assigned by Prio.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | [FILTER] From which date availability is requested. If supplied with `to_date` , then availability request is for a date range.  If supplied without `to_date`, then for a single date availability is requested.
$distributor_id = 501; // string | [FILTER] on `distributor_id`.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | [FILTER] Till which date availability is requested. If this is empty, availability will be searched for the given `from_date` only.
$include_disabled = true; // string | [FILTER] Include disabled / closed (`availability_active:false`) entries.
$availability_capacity_id = 'availability_capacity_id_example'; // string | [FILTER] on `availability_capacity_id`.
$spots_open_min = 56; // int | [FILTER] The minimum remaining `availability_spots_open`.
$sub_products_depth = 1; // int | [FILTER] The iteration depth of the included entries of the sub-products in the response. This will not apply to sub-products which have shared capacity linked to the main product.  Example Setup: ``` Product 101 (Main)   Product 201 (Sub)     Product 301 (Nested)     Product 302 (Nested)   Product 202 (Sub)     Product 401 (Nested)     Product 402 (Nested) ``` * `sub_products_depth:0` will return Product 101. * `sub_products_depth:1` will return Product 101, 201 and 202. * `sub_products_depth:2` will return Product 101, 201, 202, 301, 302, 401 and 402.
$party_size = 56; // int | [FILTER] The party size that can be accommodated during this time slot. Only applicable for selected merchants.
$availability_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | [FILTER] Only show entries modified after the given date.

try {
    $result = $apiInstance->getProductAvailability($product_id, $from_date, $distributor_id, $to_date, $include_disabled, $availability_capacity_id, $spots_open_min, $sub_products_depth, $party_size, $availability_modified);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductAvailability: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| Unique identifier for the product assigned by Prio. |
 **from_date** | **\DateTime**| [FILTER] From which date availability is requested. If supplied with &#x60;to_date&#x60; , then availability request is for a date range.  If supplied without &#x60;to_date&#x60;, then for a single date availability is requested. |
 **distributor_id** | **string**| [FILTER] on &#x60;distributor_id&#x60;. | [optional]
 **to_date** | **\DateTime**| [FILTER] Till which date availability is requested. If this is empty, availability will be searched for the given &#x60;from_date&#x60; only. | [optional]
 **include_disabled** | **string**| [FILTER] Include disabled / closed (&#x60;availability_active:false&#x60;) entries. | [optional] [default to &#39;false&#39;]
 **availability_capacity_id** | **string**| [FILTER] on &#x60;availability_capacity_id&#x60;. | [optional]
 **spots_open_min** | **int**| [FILTER] The minimum remaining &#x60;availability_spots_open&#x60;. | [optional]
 **sub_products_depth** | **int**| [FILTER] The iteration depth of the included entries of the sub-products in the response. This will not apply to sub-products which have shared capacity linked to the main product.  Example Setup: &#x60;&#x60;&#x60; Product 101 (Main)   Product 201 (Sub)     Product 301 (Nested)     Product 302 (Nested)   Product 202 (Sub)     Product 401 (Nested)     Product 402 (Nested) &#x60;&#x60;&#x60; * &#x60;sub_products_depth:0&#x60; will return Product 101. * &#x60;sub_products_depth:1&#x60; will return Product 101, 201 and 202. * &#x60;sub_products_depth:2&#x60; will return Product 101, 201, 202, 301, 302, 401 and 402. | [optional] [default to 0]
 **party_size** | **int**| [FILTER] The party size that can be accommodated during this time slot. Only applicable for selected merchants. | [optional]
 **availability_modified** | **\DateTime**| [FILTER] Only show entries modified after the given date. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\AvailabilitiesListResponse**](../Model/AvailabilitiesListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductCategories()`

```php
getProductCategories($distributor_id, $category_id, $category_type, $category_search_query, $if_modified_since): \PrioTicket\DistributorAPI\Models\DistributorProductCategoriesResponse
```

List Product Categories

This API provides all the product categories that are available in the Prio system per distributor.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$distributor_id = 501; // string | [FILTER] on `distributor_id`.
$category_id = ["4"]; // string[] | [FILTER] on categories (`category_id`).
$category_type = array('category_type_example'); // string[] | [FILTER] on Category Type (`category_type`).
$category_search_query = 'category_search_query_example'; // string | [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned.
$if_modified_since = Wed, 21 Oct 2015 07:28:00 GMT; // string | [CACHE] The `If-Modified-Since` request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the `Last-Modified` response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method.

try {
    $result = $apiInstance->getProductCategories($distributor_id, $category_id, $category_type, $category_search_query, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **string**| [FILTER] on &#x60;distributor_id&#x60;. | [optional]
 **category_id** | [**string[]**](../Model/string.md)| [FILTER] on categories (&#x60;category_id&#x60;). | [optional]
 **category_type** | [**string[]**](../Model/string.md)| [FILTER] on Category Type (&#x60;category_type&#x60;). | [optional]
 **category_search_query** | **string**| [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned. | [optional]
 **if_modified_since** | **string**| [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\DistributorProductCategoriesResponse**](../Model/DistributorProductCategoriesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductDestinations()`

```php
getProductDestinations($distributor_id, $destination_id, $items_per_page, $start_index, $page, $if_modified_since): \PrioTicket\DistributorAPI\Models\ProductDestinationsResponse
```

List Product Destinations

This API provides all the product destinations that are available in the Prio system per distributor.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$distributor_id = 501; // string | [FILTER] on `distributor_id`.
$destination_id = ["4"]; // string[] | [FILTER] on destination (`destination_id`).
$items_per_page = 5; // int | [PAGING] Items Per Page - Allows user's to configure the `items_per_page` value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page=100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the `items_per_page` response element in calculating actual page size.
$start_index = 1; // int | [PAGING] Index-based paging - Allows user's to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index=200.
$page = 1; // int | [PAGING] Page-based paging - Allows user's to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page=1 or ?page=20. The `page_index` and `total_pages` properties are used for this style of paging.
$if_modified_since = Wed, 21 Oct 2015 07:28:00 GMT; // string | [CACHE] The `If-Modified-Since` request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the `Last-Modified` response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method.

try {
    $result = $apiInstance->getProductDestinations($distributor_id, $destination_id, $items_per_page, $start_index, $page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **string**| [FILTER] on &#x60;distributor_id&#x60;. | [optional]
 **destination_id** | [**string[]**](../Model/string.md)| [FILTER] on destination (&#x60;destination_id&#x60;). | [optional]
 **items_per_page** | **int**| [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. | [optional] [default to 10]
 **start_index** | **int**| [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. | [optional] [default to 1]
 **page** | **int**| [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. | [optional] [default to 1]
 **if_modified_since** | **string**| [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\ProductDestinationsResponse**](../Model/ProductDestinationsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductLocations()`

```php
getProductLocations($distributor_id, $product_id, $location_type, $items_per_page, $start_index, $page, $if_modified_since): \PrioTicket\DistributorAPI\Models\LocationListResponse
```

List Product Locations

This API returns all the available locations of products.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$distributor_id = 501; // string | [FILTER] on `distributor_id`.
$product_id = PRODUCT_ID_123; // string | [FILTER] on `product_id`.
$location_type = ["VENUE"]; // string[] | [FILTER] on Location Type (`location_type`).
$items_per_page = 5; // int | [PAGING] Items Per Page - Allows user's to configure the `items_per_page` value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page=100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the `items_per_page` response element in calculating actual page size.
$start_index = 1; // int | [PAGING] Index-based paging - Allows user's to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index=200.
$page = 1; // int | [PAGING] Page-based paging - Allows user's to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page=1 or ?page=20. The `page_index` and `total_pages` properties are used for this style of paging.
$if_modified_since = Wed, 21 Oct 2015 07:28:00 GMT; // string | [CACHE] The `If-Modified-Since` request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the `Last-Modified` response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method.

try {
    $result = $apiInstance->getProductLocations($distributor_id, $product_id, $location_type, $items_per_page, $start_index, $page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **string**| [FILTER] on &#x60;distributor_id&#x60;. | [optional]
 **product_id** | **string**| [FILTER] on &#x60;product_id&#x60;. | [optional]
 **location_type** | [**string[]**](../Model/string.md)| [FILTER] on Location Type (&#x60;location_type&#x60;). | [optional]
 **items_per_page** | **int**| [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. | [optional] [default to 10]
 **start_index** | **int**| [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. | [optional] [default to 1]
 **page** | **int**| [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. | [optional] [default to 1]
 **if_modified_since** | **string**| [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\LocationListResponse**](../Model/LocationListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductRoutes()`

```php
getProductRoutes($distributor_id, $product_id, $items_per_page, $start_index, $page, $if_modified_since): \PrioTicket\DistributorAPI\Models\RoutesListResponse
```

List Product Routes

This API returns all the routes of the products linked to a distributor.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$distributor_id = 501; // string | [FILTER] on `distributor_id`.
$product_id = PRODUCT_ID_123; // string | [FILTER] on `product_id`.
$items_per_page = 5; // int | [PAGING] Items Per Page - Allows user's to configure the `items_per_page` value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page=100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the `items_per_page` response element in calculating actual page size.
$start_index = 1; // int | [PAGING] Index-based paging - Allows user's to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index=200.
$page = 1; // int | [PAGING] Page-based paging - Allows user's to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page=1 or ?page=20. The `page_index` and `total_pages` properties are used for this style of paging.
$if_modified_since = Wed, 21 Oct 2015 07:28:00 GMT; // string | [CACHE] The `If-Modified-Since` request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the `Last-Modified` response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method.

try {
    $result = $apiInstance->getProductRoutes($distributor_id, $product_id, $items_per_page, $start_index, $page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductRoutes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **string**| [FILTER] on &#x60;distributor_id&#x60;. | [optional]
 **product_id** | **string**| [FILTER] on &#x60;product_id&#x60;. | [optional]
 **items_per_page** | **int**| [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. | [optional] [default to 10]
 **start_index** | **int**| [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. | [optional] [default to 1]
 **page** | **int**| [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. | [optional] [default to 1]
 **if_modified_since** | **string**| [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\RoutesListResponse**](../Model/RoutesListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductTaxes()`

```php
getProductTaxes($distributor_id, $product_id, $tax_region, $items_per_page, $start_index, $page, $if_modified_since): \PrioTicket\DistributorAPI\Models\DistributorProductTaxesResponse
```

List Product Taxes

This API returns all the tax configurations of the products linked to a distributor.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$distributor_id = 501; // string | [FILTER] on `distributor_id`.
$product_id = PRODUCT_ID_123; // string | [FILTER] on `product_id`.
$tax_region = India; // string | [FILTER] on `tax_region`.
$items_per_page = 5; // int | [PAGING] Items Per Page - Allows user's to configure the `items_per_page` value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page=100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the `items_per_page` response element in calculating actual page size.
$start_index = 1; // int | [PAGING] Index-based paging - Allows user's to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index=200.
$page = 1; // int | [PAGING] Page-based paging - Allows user's to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page=1 or ?page=20. The `page_index` and `total_pages` properties are used for this style of paging.
$if_modified_since = Wed, 21 Oct 2015 07:28:00 GMT; // string | [CACHE] The `If-Modified-Since` request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the `Last-Modified` response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method.

try {
    $result = $apiInstance->getProductTaxes($distributor_id, $product_id, $tax_region, $items_per_page, $start_index, $page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductTaxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **string**| [FILTER] on &#x60;distributor_id&#x60;. | [optional]
 **product_id** | **string**| [FILTER] on &#x60;product_id&#x60;. | [optional]
 **tax_region** | **string**| [FILTER] on &#x60;tax_region&#x60;. | [optional]
 **items_per_page** | **int**| [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. | [optional] [default to 10]
 **start_index** | **int**| [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. | [optional] [default to 1]
 **page** | **int**| [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. | [optional] [default to 1]
 **if_modified_since** | **string**| [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\DistributorProductTaxesResponse**](../Model/DistributorProductTaxesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProducts()`

```php
getProducts($distributor_id, $product_content_language, $product_content, $product_start_date, $product_end_date, $product_duration, $product_booking_quantity_min, $product_booking_quantity_max, $product_id, $product_supplier, $market_admin_id, $product_category, $product_destination, $product_tag, $product_language, $product_location_id, $product_location_country_code, $product_currency_code, $product_custom_field, $product_type, $product_status, $product_catalogue_status, $product_availability, $product_relations, $product_favorite, $product_planet, $product_modified, $product_search_query, $product_view_type, $product_sort_by, $product_sort_order, $items_per_page, $start_index, $page, $cache, $if_modified_since): \PrioTicket\DistributorAPI\Models\ProductListResponse
```

List Products

This API provides all the products in the Prio system per distributor. Extensive filtering is available but do note that certain filters might affect performance. > By default only the latest revision will be returned.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$distributor_id = 501; // string | [FILTER] on `distributor_id`.
$product_content_language = en; // string | [CONFIG] content language to return in the response.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. If the defined language is not available, the product will be returned in the `product_default_language`.
$product_content = tour museum amsterdam; // string | [FILTER] on product content.  Searches the fields:   + `product_id`(Upcoming)   + `product_title`   + `product_short_description`   + `product_long_description`   + `product_supplier_name`   + `product_highlights`   + `product_includes`    Regex used: '(?is)^(?=.*\\\\b(query1.*)\\\\b)(?=.*\\\\b(query2.*)\\\\b).*'    + Case insensitive.   + Positive lookaheads and word boundaries to make word order not matter and to recognize word spacing.
$product_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | [FILTER] on `product_start_date`.
$product_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | [FILTER] on `product_end_date`.
$product_duration = 90; // int | [FILTER] on `product_duration`. (Minutes)
$product_booking_quantity_min = 1; // int | [FILTER] on `product_booking_quantity_min`.
$product_booking_quantity_max = 3; // int | [FILTER] on `product_booking_quantity_max`.
$product_id = ["PRODUCT_ID_123"]; // string[] | [FILTER] on `product_id`.
$product_supplier = ["PRODUCT_SUPPLIER_ID"]; // string[] | [FILTER] on `product_supplier_id`.
$market_admin_id = ["PRODUCT_MARKET_ADMIN_ID"]; // string[] | [FILTER] on `market_admin_id`.
$product_category = ["PRODUCT_CATEGORY_ID_123"]; // string[] | [FILTER] on categories (`category_id`).
$product_destination = ["PRODUCT_DESTINATION_ID_123"]; // string[] | [FILTER] on destinations (`destination_id`).
$product_tag = ["PRODUCT_TAG"]; // string[] | [FILTER] on Tag.   Combination of `product_tag_id`, `product_tag_description` and `product_tag_group`.
$product_language = ["en"]; // string[] | [FILTER] on available product languages.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.   Products without a language value will not be returned.
$product_location_id = ["PRODUCT_LOCATION_ID"]; // string[] | [FILTER] on `location_id`.
$product_location_country_code = ["NL"]; // string[] | [FILTER] on country ( [ISO-3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)).
$product_currency_code = ["EUR"]; // string[] | [FILTER] on Product Currency Code, according to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217).
$product_custom_field = array(new \PrioTicket\DistributorAPI\Models\\PrioTicket\DistributorAPI\Models\CustomField()); // \PrioTicket\DistributorAPI\Models\CustomField[] | [FILTER] on `product_custom_fields`.
$product_type = ["ADULT","CHILD"]; // string[] | [FILTER] on Product Type (`product_type`).
$product_status = ["ACTIVE"]; // string[] | [FILTER] on Product Status (`product_status`). > A product can only be sold if the status is `ACTIVE` or `TEST`.  <details>   <summary>**Product Statuses**</summary>  Product Status: * `DRAFT` - Product is a draft.     The product is a draft.  * `REVIEW` - Product is in review.     The product is in review.   * `ACTIVE` - Product is active.    The product is fully configured and ready to sell using any linked catalogue (See Product Catalogue Status).  * `EXPIRED` - Product is expired.    The product configured availability expired and this product is no longer available for sales.   * `ARCHIVED` - Product is archived.     The product is archived. It can return to `ACTIVE` by unarchiving it.  * `INACTIVE` - Product is inactive.    The product is set inactive. It should not be visible on any channel and cannot be sold until set to `ACTIVE` again.  * `TEST` - Product is in test.    The product is fully configured and ready to sell. Similar to `ACTIVE`, but only meant for internal testing purposes. This product should not be exposed to end-consumers.  * `UNAVAILABLE` - Product is unavailable.    The product is automatically set as unavailable due to an error or misconfiguration. This product requires attention.  * `SUSPENDED` - Product is suspended.    The product is suspended due to Terms of Service violation.  * `DELETED` - Product is deleted.    The product is permanently deleted.    * `PREVIEW` - Product is in preview.    The product is visible but cannot be booked yet. Generally used during pre-sales. This state is automatically set if the product is `ACTIVE` but did not yet reach the `product_booking_start_date`.  </details>
$product_catalogue_status = ["ACTIVE"]; // string[] | [FILTER] on Product Catalogue Status (`product_catalogue_status`). <details>   <summary>**Product Catalogue Statuses**</summary>  Product Catalogue Status: * `PENDING` - Product is pending to be assigned to a catalogue. * `INACTIVE` - Product is assigned and inactive on the catalogue. * `ACTIVE` - Product is assigned and active on the catalogue. </details>
$product_availability = true; // string | [FILTER] Include products with `product_availability:true`.
$product_relations = true; // string | [FILTER] Include product relations. (Addon, Combi, Cluster)
$product_favorite = true; // string | [FILTER] Return `product_favorite:true` only.
$product_planet = EARTH; // string | [FILTER] on an astronomical body. *(Reserved for future use)*
$product_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | [FILTER] on products modified after the given date.   * This includes newly created products. * Deleted products are ignored and should be handled manually.  For caching purposes we recommend using the `If-Modified-Since` header instead.
$product_search_query = 'product_search_query_example'; // string | [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (`cache:true`)
$product_view_type = DISTRIBUTOR; // string | [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials.
$product_sort_by = PRODUCT_CREATED; // string | [SORT] method. <details>   <summary>**Sort Methods**</summary>  Sort Methods: * `PRODUCT_CREATED` - Sort on `product_created`. * `PRODUCT_MODIFIED` - Sort on `product_modified`. * `PRODUCT_TITLE_A_Z` - Sort on `product_title`. * `SUPPLIER_NAME_A_Z` - Sort on `product_supplier_name`. * `LOCATION_NAME_A_Z` - Sort on `location_name`. * `PRICE_VALUE` - Sort on `product_from_price`.    Price is sorted based on the current season.  * `DISCOUNT_VALUE` - (Upcoming) * `SEARCH_RELEVANCE` - Search results are sorted on match relevance.     This sorting method should only be used during wildcard (`product_search_query`) searches.      If `product_search_query` is empty, it will fallback to `CUSTOM`.  * `CUSTOM` - Custom sort as defined in the catalogues.    If no custom sorting has been configured it will fallback to `PRODUCT_MODIFIED`.  </details>
$product_sort_order = ASC; // string | [SORT] keyword used to sort result sets in either ascending or descending order.
$items_per_page = 5; // int | [PAGING] Items Per Page - Allows user's to configure the `items_per_page` value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page=100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the `items_per_page` response element in calculating actual page size.
$start_index = 1; // int | [PAGING] Index-based paging - Allows user's to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index=200.
$page = 1; // int | [PAGING] Page-based paging - Allows user's to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page=1 or ?page=20. The `page_index` and `total_pages` properties are used for this style of paging.
$cache = true; // string | [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended.
$if_modified_since = Wed, 21 Oct 2015 07:28:00 GMT; // string | [CACHE] The `If-Modified-Since` request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the `Last-Modified` response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method.

try {
    $result = $apiInstance->getProducts($distributor_id, $product_content_language, $product_content, $product_start_date, $product_end_date, $product_duration, $product_booking_quantity_min, $product_booking_quantity_max, $product_id, $product_supplier, $market_admin_id, $product_category, $product_destination, $product_tag, $product_language, $product_location_id, $product_location_country_code, $product_currency_code, $product_custom_field, $product_type, $product_status, $product_catalogue_status, $product_availability, $product_relations, $product_favorite, $product_planet, $product_modified, $product_search_query, $product_view_type, $product_sort_by, $product_sort_order, $items_per_page, $start_index, $page, $cache, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **distributor_id** | **string**| [FILTER] on &#x60;distributor_id&#x60;. | [optional]
 **product_content_language** | **string**| [CONFIG] content language to return in the response.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. If the defined language is not available, the product will be returned in the &#x60;product_default_language&#x60;. | [optional]
 **product_content** | **string**| [FILTER] on product content.  Searches the fields:   + &#x60;product_id&#x60;(Upcoming)   + &#x60;product_title&#x60;   + &#x60;product_short_description&#x60;   + &#x60;product_long_description&#x60;   + &#x60;product_supplier_name&#x60;   + &#x60;product_highlights&#x60;   + &#x60;product_includes&#x60;    Regex used: &#39;(?is)^(?&#x3D;.*\\\\b(query1.*)\\\\b)(?&#x3D;.*\\\\b(query2.*)\\\\b).*&#39;    + Case insensitive.   + Positive lookaheads and word boundaries to make word order not matter and to recognize word spacing. | [optional]
 **product_start_date** | **\DateTime**| [FILTER] on &#x60;product_start_date&#x60;. | [optional]
 **product_end_date** | **\DateTime**| [FILTER] on &#x60;product_end_date&#x60;. | [optional]
 **product_duration** | **int**| [FILTER] on &#x60;product_duration&#x60;. (Minutes) | [optional]
 **product_booking_quantity_min** | **int**| [FILTER] on &#x60;product_booking_quantity_min&#x60;. | [optional]
 **product_booking_quantity_max** | **int**| [FILTER] on &#x60;product_booking_quantity_max&#x60;. | [optional]
 **product_id** | [**string[]**](../Model/string.md)| [FILTER] on &#x60;product_id&#x60;. | [optional]
 **product_supplier** | [**string[]**](../Model/string.md)| [FILTER] on &#x60;product_supplier_id&#x60;. | [optional]
 **market_admin_id** | [**string[]**](../Model/string.md)| [FILTER] on &#x60;market_admin_id&#x60;. | [optional]
 **product_category** | [**string[]**](../Model/string.md)| [FILTER] on categories (&#x60;category_id&#x60;). | [optional]
 **product_destination** | [**string[]**](../Model/string.md)| [FILTER] on destinations (&#x60;destination_id&#x60;). | [optional]
 **product_tag** | [**string[]**](../Model/string.md)| [FILTER] on Tag.   Combination of &#x60;product_tag_id&#x60;, &#x60;product_tag_description&#x60; and &#x60;product_tag_group&#x60;. | [optional]
 **product_language** | [**string[]**](../Model/string.md)| [FILTER] on available product languages.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.   Products without a language value will not be returned. | [optional]
 **product_location_id** | [**string[]**](../Model/string.md)| [FILTER] on &#x60;location_id&#x60;. | [optional]
 **product_location_country_code** | [**string[]**](../Model/string.md)| [FILTER] on country ( [ISO-3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)). | [optional]
 **product_currency_code** | [**string[]**](../Model/string.md)| [FILTER] on Product Currency Code, according to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217). | [optional]
 **product_custom_field** | [**\PrioTicket\DistributorAPI\Models\CustomField[]**](../Model/\PrioTicket\DistributorAPI\Models\CustomField.md)| [FILTER] on &#x60;product_custom_fields&#x60;. | [optional]
 **product_type** | [**string[]**](../Model/string.md)| [FILTER] on Product Type (&#x60;product_type&#x60;). | [optional]
 **product_status** | [**string[]**](../Model/string.md)| [FILTER] on Product Status (&#x60;product_status&#x60;). &gt; A product can only be sold if the status is &#x60;ACTIVE&#x60; or &#x60;TEST&#x60;.  &lt;details&gt;   &lt;summary&gt;**Product Statuses**&lt;/summary&gt;  Product Status: * &#x60;DRAFT&#x60; - Product is a draft.     The product is a draft.  * &#x60;REVIEW&#x60; - Product is in review.     The product is in review.   * &#x60;ACTIVE&#x60; - Product is active.    The product is fully configured and ready to sell using any linked catalogue (See Product Catalogue Status).  * &#x60;EXPIRED&#x60; - Product is expired.    The product configured availability expired and this product is no longer available for sales.   * &#x60;ARCHIVED&#x60; - Product is archived.     The product is archived. It can return to &#x60;ACTIVE&#x60; by unarchiving it.  * &#x60;INACTIVE&#x60; - Product is inactive.    The product is set inactive. It should not be visible on any channel and cannot be sold until set to &#x60;ACTIVE&#x60; again.  * &#x60;TEST&#x60; - Product is in test.    The product is fully configured and ready to sell. Similar to &#x60;ACTIVE&#x60;, but only meant for internal testing purposes. This product should not be exposed to end-consumers.  * &#x60;UNAVAILABLE&#x60; - Product is unavailable.    The product is automatically set as unavailable due to an error or misconfiguration. This product requires attention.  * &#x60;SUSPENDED&#x60; - Product is suspended.    The product is suspended due to Terms of Service violation.  * &#x60;DELETED&#x60; - Product is deleted.    The product is permanently deleted.    * &#x60;PREVIEW&#x60; - Product is in preview.    The product is visible but cannot be booked yet. Generally used during pre-sales. This state is automatically set if the product is &#x60;ACTIVE&#x60; but did not yet reach the &#x60;product_booking_start_date&#x60;.  &lt;/details&gt; | [optional]
 **product_catalogue_status** | [**string[]**](../Model/string.md)| [FILTER] on Product Catalogue Status (&#x60;product_catalogue_status&#x60;). &lt;details&gt;   &lt;summary&gt;**Product Catalogue Statuses**&lt;/summary&gt;  Product Catalogue Status: * &#x60;PENDING&#x60; - Product is pending to be assigned to a catalogue. * &#x60;INACTIVE&#x60; - Product is assigned and inactive on the catalogue. * &#x60;ACTIVE&#x60; - Product is assigned and active on the catalogue. &lt;/details&gt; | [optional]
 **product_availability** | **string**| [FILTER] Include products with &#x60;product_availability:true&#x60;. | [optional] [default to &#39;true&#39;]
 **product_relations** | **string**| [FILTER] Include product relations. (Addon, Combi, Cluster) | [optional] [default to &#39;true&#39;]
 **product_favorite** | **string**| [FILTER] Return &#x60;product_favorite:true&#x60; only. | [optional]
 **product_planet** | **string**| [FILTER] on an astronomical body. *(Reserved for future use)* | [optional]
 **product_modified** | **\DateTime**| [FILTER] on products modified after the given date.   * This includes newly created products. * Deleted products are ignored and should be handled manually.  For caching purposes we recommend using the &#x60;If-Modified-Since&#x60; header instead. | [optional]
 **product_search_query** | **string**| [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (&#x60;cache:true&#x60;) | [optional]
 **product_view_type** | **string**| [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials. | [optional]
 **product_sort_by** | **string**| [SORT] method. &lt;details&gt;   &lt;summary&gt;**Sort Methods**&lt;/summary&gt;  Sort Methods: * &#x60;PRODUCT_CREATED&#x60; - Sort on &#x60;product_created&#x60;. * &#x60;PRODUCT_MODIFIED&#x60; - Sort on &#x60;product_modified&#x60;. * &#x60;PRODUCT_TITLE_A_Z&#x60; - Sort on &#x60;product_title&#x60;. * &#x60;SUPPLIER_NAME_A_Z&#x60; - Sort on &#x60;product_supplier_name&#x60;. * &#x60;LOCATION_NAME_A_Z&#x60; - Sort on &#x60;location_name&#x60;. * &#x60;PRICE_VALUE&#x60; - Sort on &#x60;product_from_price&#x60;.    Price is sorted based on the current season.  * &#x60;DISCOUNT_VALUE&#x60; - (Upcoming) * &#x60;SEARCH_RELEVANCE&#x60; - Search results are sorted on match relevance.     This sorting method should only be used during wildcard (&#x60;product_search_query&#x60;) searches.      If &#x60;product_search_query&#x60; is empty, it will fallback to &#x60;CUSTOM&#x60;.  * &#x60;CUSTOM&#x60; - Custom sort as defined in the catalogues.    If no custom sorting has been configured it will fallback to &#x60;PRODUCT_MODIFIED&#x60;.  &lt;/details&gt; | [optional] [default to &#39;PRODUCT_MODIFIED&#39;]
 **product_sort_order** | **string**| [SORT] keyword used to sort result sets in either ascending or descending order. | [optional] [default to &#39;DESC&#39;]
 **items_per_page** | **int**| [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. | [optional] [default to 10]
 **start_index** | **int**| [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. | [optional] [default to 1]
 **page** | **int**| [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. | [optional] [default to 1]
 **cache** | **string**| [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. | [optional] [default to &#39;true&#39;]
 **if_modified_since** | **string**| [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\ProductListResponse**](../Model/ProductListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
