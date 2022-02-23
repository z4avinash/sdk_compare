# PrioTicket\DistributorAPI\NotificationsApi

All URIs are relative to https://sandbox-distributor-api.prioticket.com/v3.5/distributor.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addNotification()**](NotificationsApi.md#addNotification) | **POST** /notifications | Create Notification (Example only)
[**addWebhook()**](NotificationsApi.md#addWebhook) | **POST** /webhooks | Create Webhook
[**getNotifications()**](NotificationsApi.md#getNotifications) | **GET** /notifications | List Notifications (Upcoming)
[**getWebhooks()**](NotificationsApi.md#getWebhooks) | **GET** /webhooks | List Webhooks
[**removeWebhook()**](NotificationsApi.md#removeWebhook) | **DELETE** /webhooks/{webhook_id} | Remove Webhook


## `addNotification()`

```php
addNotification($create_notification_request)
```

Create Notification (Example only)

Trigger sample notification. Only used for testing your integration.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_notification_request = new \PrioTicket\DistributorAPI\Models\CreateNotificationRequest(); // \PrioTicket\DistributorAPI\Models\CreateNotificationRequest

try {
    $apiInstance->addNotification($create_notification_request);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->addNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_notification_request** | [**\PrioTicket\DistributorAPI\Models\CreateNotificationRequest**](../Model/CreateNotificationRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addWebhook()`

```php
addWebhook($create_webhook_request): \PrioTicket\DistributorAPI\Models\CreateWebhookResponse
```

Create Webhook

Add webhook to receive events.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_webhook_request = new \PrioTicket\DistributorAPI\Models\CreateWebhookRequest(); // \PrioTicket\DistributorAPI\Models\CreateWebhookRequest

try {
    $result = $apiInstance->addWebhook($create_webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->addWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_webhook_request** | [**\PrioTicket\DistributorAPI\Models\CreateWebhookRequest**](../Model/CreateWebhookRequest.md)|  |

### Return type

[**\PrioTicket\DistributorAPI\Models\CreateWebhookResponse**](../Model/CreateWebhookResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotifications()`

```php
getNotifications($items_per_page, $start_index, $page): \PrioTicket\DistributorAPI\Models\NotificationListResponse
```

List Notifications (Upcoming)

List triggered notifications.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$items_per_page = 5; // int | [PAGING] Items Per Page - Allows user's to configure the `items_per_page` value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page=100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the `items_per_page` response element in calculating actual page size.
$start_index = 1; // int | [PAGING] Index-based paging - Allows user's to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index=200.
$page = 1; // int | [PAGING] Page-based paging - Allows user's to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page=1 or ?page=20. The `page_index` and `total_pages` properties are used for this style of paging.

try {
    $result = $apiInstance->getNotifications($items_per_page, $start_index, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **items_per_page** | **int**| [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. | [optional] [default to 10]
 **start_index** | **int**| [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. | [optional] [default to 1]
 **page** | **int**| [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. | [optional] [default to 1]

### Return type

[**\PrioTicket\DistributorAPI\Models\NotificationListResponse**](../Model/NotificationListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhooks()`

```php
getWebhooks($items_per_page, $start_index, $page): \PrioTicket\DistributorAPI\Models\WebhookListResponse
```

List Webhooks

List all webhooks.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$items_per_page = 5; // int | [PAGING] Items Per Page - Allows user's to configure the `items_per_page` value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page=100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the `items_per_page` response element in calculating actual page size.
$start_index = 1; // int | [PAGING] Index-based paging - Allows user's to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index=200.
$page = 1; // int | [PAGING] Page-based paging - Allows user's to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page=1 or ?page=20. The `page_index` and `total_pages` properties are used for this style of paging.

try {
    $result = $apiInstance->getWebhooks($items_per_page, $start_index, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **items_per_page** | **int**| [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. | [optional] [default to 10]
 **start_index** | **int**| [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. | [optional] [default to 1]
 **page** | **int**| [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. | [optional] [default to 1]

### Return type

[**\PrioTicket\DistributorAPI\Models\WebhookListResponse**](../Model/WebhookListResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeWebhook()`

```php
removeWebhook($webhook_id)
```

Remove Webhook

Remove webhook.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = de1829d0-e144-11ea-bc09-f935c77bef95; // string | Unique Webhook ID.

try {
    $apiInstance->removeWebhook($webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->removeWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | [**string**](../Model/.md)| Unique Webhook ID. |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
