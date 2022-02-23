# PrioTicket\DistributorAPI\ReservationsCartApi

All URIs are relative to https://sandbox-distributor-api.prioticket.com/v3.5/distributor.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPromocode()**](ReservationsCartApi.md#addPromocode) | **POST** /reservations/{reservation_reference}/promocode | Add Promocode
[**cancelReservation()**](ReservationsCartApi.md#cancelReservation) | **DELETE** /reservations/{reservation_reference} | Cancel Reservation / Remove Cart Item / Empty Cart
[**createReservation()**](ReservationsCartApi.md#createReservation) | **POST** /reservations | Create Reservation / Create Cart
[**getReservation()**](ReservationsCartApi.md#getReservation) | **GET** /reservations/{reservation_reference} | Reservation Details / Cart Details
[**removePromocode()**](ReservationsCartApi.md#removePromocode) | **DELETE** /reservations/{reservation_reference}/promocode/{promo_code} | Remove Promocode
[**updateReservation()**](ReservationsCartApi.md#updateReservation) | **PUT** /reservations/{reservation_reference} | Update Reservation / Update Cart


## `addPromocode()`

```php
addPromocode($reservation_reference, $promo_code): \PrioTicket\DistributorAPI\Models\ReservationDetailResponse
```

Add Promocode

This API is called to apply promocodes on a reservation.  **Promocode Functionality:**   * To add a promocode to the Cart / Reservation, add the applicable promocode to the query. The promocode will automatically be added to the Cart and the updated prices will be returned in the response. * There could be multiple reasons for a promocode to be declined. For example, insufficient cart balance, expired, already used etc. In this case an error `INVALID_PROMOCODE` will be returned with a customer friendly message which can be shown on your front-end.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ReservationsCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reservation_reference = ORDRREF123456; // string | A unique identifier got in response of the reservation_reference API.
$promo_code = PROMOCODE_123; // string | The promocode which should be applied to the cart.

try {
    $result = $apiInstance->addPromocode($reservation_reference, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsCartApi->addPromocode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation_reference** | **string**| A unique identifier got in response of the reservation_reference API. |
 **promo_code** | **string**| The promocode which should be applied to the cart. |

### Return type

[**\PrioTicket\DistributorAPI\Models\ReservationDetailResponse**](../Model/ReservationDetailResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelReservation()`

```php
cancelReservation($reservation_reference, $booking_reservation_reference, $cancellation_reason): \PrioTicket\DistributorAPI\Models\ReservationDetailResponse
```

Cancel Reservation / Remove Cart Item / Empty Cart

This API is called to cancel a reserved timeslot, delete products from your cart or empty the cart. In case of a full cancellation, you are no longer able to amend the reservation. Otherwise, the updated cart will be returned.  Note that (combi-)pricing might have changed.  > If payment is made, funds will be automatically refunded.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ReservationsCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reservation_reference = 'reservation_reference_example'; // string | A unique identifier for the created reservation in the Prio system.
$booking_reservation_reference = array('booking_reservation_reference_example'); // string[] | When using the Cart functionality you are able to remove individual products.
$cancellation_reason = Payment declined; // string | Optional reason for this cancellation.

try {
    $result = $apiInstance->cancelReservation($reservation_reference, $booking_reservation_reference, $cancellation_reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsCartApi->cancelReservation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation_reference** | **string**| A unique identifier for the created reservation in the Prio system. |
 **booking_reservation_reference** | [**string[]**](../Model/string.md)| When using the Cart functionality you are able to remove individual products. | [optional]
 **cancellation_reason** | **string**| Optional reason for this cancellation. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\ReservationDetailResponse**](../Model/ReservationDetailResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createReservation()`

```php
createReservation($create_reservation_request): \PrioTicket\DistributorAPI\Models\ReservationDetailResponse
```

Create Reservation / Create Cart

This API is called to reserve one or multiple product(s). * This endpoint can also be requested for products without managed capacity. * This endpoint should be called only once per order.    Followup request such as amending the cart should be done using the 'Update Reservation` endpoint.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ReservationsCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_reservation_request = new \PrioTicket\DistributorAPI\Models\CreateReservationRequest(); // \PrioTicket\DistributorAPI\Models\CreateReservationRequest | Create Reservation Request.

try {
    $result = $apiInstance->createReservation($create_reservation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsCartApi->createReservation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_reservation_request** | [**\PrioTicket\DistributorAPI\Models\CreateReservationRequest**](../Model/CreateReservationRequest.md)| Create Reservation Request. |

### Return type

[**\PrioTicket\DistributorAPI\Models\ReservationDetailResponse**](../Model/ReservationDetailResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReservation()`

```php
getReservation($reservation_reference): \PrioTicket\DistributorAPI\Models\ReservationDetailResponse
```

Reservation Details / Cart Details

This API is called to get reservation details and status. > You are still able to retrieve the cart details for expired reservations up to 10 days.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ReservationsCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reservation_reference = 'reservation_reference_example'; // string | A unique identifier got in response of the create reservation API.

try {
    $result = $apiInstance->getReservation($reservation_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsCartApi->getReservation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation_reference** | **string**| A unique identifier got in response of the create reservation API. |

### Return type

[**\PrioTicket\DistributorAPI\Models\ReservationDetailResponse**](../Model/ReservationDetailResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removePromocode()`

```php
removePromocode($reservation_reference, $promo_code): \PrioTicket\DistributorAPI\Models\ReservationDetailResponse
```

Remove Promocode

This API is called to remove an applied promocode on a reservation. If a DELETE method is successfully applied, the origin server SHOULD send a 200 (Promocode Removed) status code if the action has been enacted. The new reservation will be returned with the updated prices. > If a promocode or an existing order applied with a promocode is cancelled, the use count will be restored.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ReservationsCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reservation_reference = RESREF123; // string | A unique identifier got in response of the reservation API.
$promo_code = PROMOCODE_123; // string | The promocode which should should be removed from the cart.

try {
    $result = $apiInstance->removePromocode($reservation_reference, $promo_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsCartApi->removePromocode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation_reference** | **string**| A unique identifier got in response of the reservation API. |
 **promo_code** | **string**| The promocode which should should be removed from the cart. |

### Return type

[**\PrioTicket\DistributorAPI\Models\ReservationDetailResponse**](../Model/ReservationDetailResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReservation()`

```php
updateReservation($reservation_reference, $create_reservation_request): \PrioTicket\DistributorAPI\Models\ReservationDetailResponse
```

Update Reservation / Update Cart

This API is called to update an existing reservation / cart. > This endpoint can also be requested for products without availability (`product_availability:false`) or managed capacity (`product_capacity:false`).  **Cart Functionality:**   * To add a product to the cart, send a `reservation_details` array item with a blank `booking_reservation_reference`.    * To amend an existing booking, please send the corresponding `booking_reservation_reference` for the array item with the amended data. In this case the latest request takes precedence and therefore the quantity is always overwritten, not summed.       Only sent the booking details of those bookings you would like to amend.    * To remove a product from the cart, please call the \"Remove Cart Item\" endpoint.     * TIP: The full reservation / cart details will be returned on every request. Therefore you are able to manage the cart outside of your system if required. ReadOnly properties which are included in the response, but not allowed in the request, such as `booking_reservation_valid_until` will be ignored and can be safely sent. If you choose not to do this, make sure both carts are kept in sync.

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


$apiInstance = new PrioTicket\DistributorAPI\Api\ReservationsCartApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reservation_reference = 'reservation_reference_example'; // string | A unique identifier for the created reservation in Prio.
$create_reservation_request = new \PrioTicket\DistributorAPI\Models\CreateReservationRequest(); // \PrioTicket\DistributorAPI\Models\CreateReservationRequest | Update Reservation Request.

try {
    $result = $apiInstance->updateReservation($reservation_reference, $create_reservation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsCartApi->updateReservation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reservation_reference** | **string**| A unique identifier for the created reservation in Prio. |
 **create_reservation_request** | [**\PrioTicket\DistributorAPI\Models\CreateReservationRequest**](../Model/CreateReservationRequest.md)| Update Reservation Request. |

### Return type

[**\PrioTicket\DistributorAPI\Models\ReservationDetailResponse**](../Model/ReservationDetailResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
