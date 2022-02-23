# PrioTicket\DistributorAPI\AuthenticationApi

All URIs are relative to https://sandbox-distributor-api.prioticket.com/v3.5/distributor.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getToken()**](AuthenticationApi.md#getToken) | **POST** /oauth2/token | Exchange credentials for token. (Example only)


## `getToken()`

```php
getToken($client_credentials_grant_request, $authorization): \PrioTicket\DistributorAPI\Models\ClientCredentialsGrantResponse
```

Exchange credentials for token. (Example only)

You will be provided with a client_id and a client_secret which you'll use to authenticate yourself in the system. The first thing you need to do is to get access token which you will then use for further requests.  When it expires, you will need to request another one. Multiple tokens can be active at once.   Supported types: + `client_credentials` Once you have a valid access token, you will need to use it to sign all requests made to the Prio API.  This is done by providing Authorization HTTP header along with each of your requests in the following format:  +  `Authorization:` `<token_type>` `<access_token>`  If this header is not present in the request, the service will reject the request by returning the HTTP error code 400 and respond with an appropriate error message. > Please do not manually perform this operation, we highly encourage you to use an existing OAuth library for your specific language.  > Make sure to call this endpoint only in case your current token has expired to reduce roundtrips and overal latency.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

// Configure HTTP basic authorization: basicAuth
$config = PrioTicket\DistributorAPI\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new PrioTicket\DistributorAPI\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_credentials_grant_request = new \PrioTicket\DistributorAPI\Models\ClientCredentialsGrantRequest(); // \PrioTicket\DistributorAPI\Models\ClientCredentialsGrantRequest | Clients in possession of a client password MAY use the HTTP Basic authentication scheme  as defined in [RFC2617](https://tools.ietf.org/html/rfc2617) to authenticate withthe authorization server.    The client identifier is encoded using the \"application/x-www-form-urlencoded\" encoding algorithm, and the encoded value is used as the username; the client password is encoded using the same algorithm and used as the password.  Alternatively, the authorization server supports including the client credentials in the request-body using the following parameters:Including the client credentials in the request-body using the two parameters is NOT RECOMMENDED and SHOULD be limited to clients unable to directly utilize the HTTP Basic authentication scheme (or other password-based HTTP authentication schemes). The parameters can only be transmitted in the request-body and MUST NOT be included in the request URI.
$authorization = 'authorization_example'; // string | The client sends HTTP requests with the Authorization header that contains the word Basic word followed by a space and a base64-encoded string username:password.

try {
    $result = $apiInstance->getToken($client_credentials_grant_request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_credentials_grant_request** | [**\PrioTicket\DistributorAPI\Models\ClientCredentialsGrantRequest**](../Model/ClientCredentialsGrantRequest.md)| Clients in possession of a client password MAY use the HTTP Basic authentication scheme  as defined in [RFC2617](https://tools.ietf.org/html/rfc2617) to authenticate withthe authorization server.    The client identifier is encoded using the \&quot;application/x-www-form-urlencoded\&quot; encoding algorithm, and the encoded value is used as the username; the client password is encoded using the same algorithm and used as the password.  Alternatively, the authorization server supports including the client credentials in the request-body using the following parameters:Including the client credentials in the request-body using the two parameters is NOT RECOMMENDED and SHOULD be limited to clients unable to directly utilize the HTTP Basic authentication scheme (or other password-based HTTP authentication schemes). The parameters can only be transmitted in the request-body and MUST NOT be included in the request URI. |
 **authorization** | **string**| The client sends HTTP requests with the Authorization header that contains the word Basic word followed by a space and a base64-encoded string username:password. | [optional]

### Return type

[**\PrioTicket\DistributorAPI\Models\ClientCredentialsGrantResponse**](../Model/ClientCredentialsGrantResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
