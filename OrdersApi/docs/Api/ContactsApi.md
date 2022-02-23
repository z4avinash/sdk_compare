# PrioTicket\DistributorAPI\ContactsApi

All URIs are relative to https://sandbox-distributor-api.prioticket.com/v3.5/distributor.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContact()**](ContactsApi.md#getContact) | **GET** /contacts/{contact_uid} | Contact Details
[**getContacts()**](ContactsApi.md#getContacts) | **GET** /contacts | List Contacts
[**updateContact()**](ContactsApi.md#updateContact) | **PUT** /contacts/{contact_uid} | Update Contact


## `getContact()`

```php
getContact($contact_uid, $include_versions): \PrioTicket\DistributorAPI\Models\ContactDetailResponse
```

Contact Details

Get contact details.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_uid = f44226c0-e142-11ea-86d2-83036af9991e; // string | Unique Contact ID.
$include_versions = true; // bool | [CONFIG] Include all contact revisions.

try {
    $result = $apiInstance->getContact($contact_uid, $include_versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_uid** | [**string**](../Model/.md)| Unique Contact ID. |
 **include_versions** | **bool**| [CONFIG] Include all contact revisions. | [optional] [default to false]

### Return type

[**\PrioTicket\DistributorAPI\Models\ContactDetailResponse**](../Model/ContactDetailResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContacts()`

```php
getContacts($reseller_id, $distributor_id, $contact_type, $contact_external_uid, $items_per_page, $start_index, $page, $if_modified_since): \PrioTicket\DistributorAPI\Models\ContactListResponse
```

List Contacts

Get list of contacts.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reseller_id = 501; // string | [FILTER] on `reseller_id`.
$distributor_id = 501; // string | [FILTER] on `distributor_id`.
$contact_type = GUEST; // \PrioTicket\DistributorAPI\Models\ContactType | [FILTER] on `contact_type`.
$contact_external_uid = 5330d6d0-cb34-11ea-8e26-095824377b3f; // string | [FILTER] on `contact_external_uid`.
$items_per_page = 5; // int | [PAGING] Items Per Page - Allows user's to configure the `items_per_page` value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page=100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the `items_per_page` response element in calculating actual page size.
$start_index = 1; // int | [PAGING] Index-based paging - Allows user's to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index=200.
$page = 1; // int | [PAGING] Page-based paging - Allows user's to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page=1 or ?page=20. The `page_index` and `total_pages` properties are used for this style of paging.
$if_modified_since = Wed, 21 Oct 2015 07:28:00 GMT; // string | [CACHE] The `If-Modified-Since` request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the `Last-Modified` response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method.

try {
    $result = $apiInstance->getContacts($reseller_id, $distributor_id, $contact_type, $contact_external_uid, $items_per_page, $start_index, $page, $if_modified_since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reseller_id** | **string**| [FILTER] on &#x60;reseller_id&#x60;. | [optional]
 **distributor_id** | **string**| [FILTER] on &#x60;distributor_id&#x60;. | [optional]
 **contact_type** | [**\PrioTicket\DistributorAPI\Models\ContactType**](../Model/.md)| [FILTER] on &#x60;contact_type&#x60;. | [optional]
 **contact_external_uid** | **string**| [FILTER] on &#x60;contact_external_uid&#x60;. | [optional]
 **items_per_page** | **int**| [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. | [optional] [default to 10]
 **start_index** | **int**| [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. | [optional] [default to 1]
 **page** | **int**| [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. | [optional] [default to 1]
 **if_modified_since** | **string**| [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\ContactListResponse**](../Model/ContactListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContact()`

```php
updateContact($contact_uid, $update_contact_request, $order_reference): \PrioTicket\DistributorAPI\Models\ContactDetailResponse
```

Update Contact

This API is called to update an existing contact.  **Contact Functionality:**    * To amend an existing contact, please send the corresponding `contact_uid` in both the path as well as the body parameter with the amended data. In this case the latest request takes precedence and therefore the data is always overwritten, not merged.    * TIP: The contact details will be returned on every request. Therefore you are able to merge and combine all data on your side manually.    > Please note that this API will not amend the contact details of individual orders by default. To amend the contact details of an order, please pass the corresponding order references as well.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_uid = f44226c0-e142-11ea-86d2-83036af9991e; // string | Unique Contact ID.
$update_contact_request = new \PrioTicket\DistributorAPI\Models\UpdateContactRequest(); // \PrioTicket\DistributorAPI\Models\UpdateContactRequest | Update Contact Request.
$order_reference = ["ORDRREF123456","ORDRREF12345678"]; // string[] | By default, previous orders will not be amended. If you would like to update existing orders to the latest contact version, please include these here as well.   If the contact was not linked to the order yet, it will be added.

try {
    $result = $apiInstance->updateContact($contact_uid, $update_contact_request, $order_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_uid** | [**string**](../Model/.md)| Unique Contact ID. |
 **update_contact_request** | [**\PrioTicket\DistributorAPI\Models\UpdateContactRequest**](../Model/UpdateContactRequest.md)| Update Contact Request. |
 **order_reference** | [**string[]**](../Model/string.md)| By default, previous orders will not be amended. If you would like to update existing orders to the latest contact version, please include these here as well.   If the contact was not linked to the order yet, it will be added. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\ContactDetailResponse**](../Model/ContactDetailResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
