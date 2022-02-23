# PrioTicketDistributorAPI

# Interface Specification 
![Uptime](https://badgen.net/uptime-robot/status/m785487968-fe65ff8817eb8d24c10c8d99) ![Uptime Robot ratio (30 days)](https://img.shields.io/uptimerobot/ratio/m785487968-fe65ff8817eb8d24c10c8d99) <!--- ![pipeline status](https://gitlab.fullserviceplatform.com/apis/distributor-api/badges/master/pipeline.svg) --> ![Maintenance](https://img.shields.io/badge/Maintained-yes-green.svg) ![Security Headers](https://img.shields.io/security-headers?url=https%3A%2F%2Fdistributor-api.prioticket.com%2Fv3.2%2Fdistributor%2Fsystem%2Fping)
## Note
This product is in **General Availability**.

  General Availability (GA) products and features are available to all customers, ready for production use, and covered by our SLAs. GA products and features are commonly available throughout the whole system and are fully implemented.

## Description
This document describes the Prio Distributor API, powered by a platform through which products can be distributed for services and venues. This API allows to obtain information about our inventory, check real-time availability and make bookings. Every booking will result in valid tickets with which users have access to the services and venues. Access is allowed when a valid passcode gets scanned and redeemed by the supplier.

The Prio Distributor API can be divided into four parts:
* Content APIs: Exposes our product inventory such as Destinations, Categories and Products.
* Availability API: Most products have have limited capacity or require you to select a certain time. The availability API returns those slots.
* Reservation APIs: The reservation APIs allow you to block / reserve a ticket for a limited time so that you are able to obtain the payment from the guest. Furthermore it allows for managing a shoppingcart if needed.
* Booking APIs: The booking APIs allow to confirm reservations, make direct bookings and retrieve your tickets / barcodes.

Additional APIs are:
* Authentication APIs: Most API requests require valid credentials, these credentials can be obtained using the Auth endpoints.
* Payment APIs: Most B2B resellers manage payments themselves and are afterwards invoiced for their purchases. In case you want to make use of the existing Payment Service Provider integrations of Prio you can use the Payment APIs.
* Contact APIs: Advanced APIs to handle guest information, only applicable for recurring guests.
* Notification APIs: Configure webhooks to support asynchronous bookings and get notified of external changes.
* System APIs: Monitor API Health and Uptime.
---
## Functionalities
Below you can find a complete list of API supported features.
<details>
      <summary>**Short List**</summary>
 <table>
  <tr>
    <th>Basic</th>
    <th>Advanced</th>
  </tr>
  <tr>
    <td>Easy to implement and required for basic integration:
    
  * Basic Product Types
  * Admission Types
  * Third Party Tickets
  * Availability
  * Capacity
  * Currency
  * Seasonal Pricing
  * Basic Product Options
  * Product Includes (Content)
  * Product Excludes (Content)
  * Duration
  * Opening Times (Content)
  * Locations (Content)
  * Categories (Content)
  * Highlights (Content)
  * Cancellation Policy (Content)
  * Turnout Time (Content)
  * Booking Quantity Limit
  * Dynamic reservation timeout
  * Discounts
  * Contact Details
  * Pickup Points
  * Multi language (Content)
  * Product Type Quantity Limit
  </td>
    <td>Harder to integrate and less frequently used:
    
  * Advanced Product Types
  * Dynamic Pricing
  * Quantity Pricing
  * Daily Pricing
  * Age Group Pricing
  * Multi Currency
  * Advanced Product Options
  * Combi Products
  * Cluster Products
  * Addon Products
  * Promocodes
  * Custom Fields
  * Tags (Content)
  * Routes (Content)
  * Cancellation Policy (Restriction)
  * Group code (Code Setttings)
  * Group Pricing
  * Seating
  * Partial Cancellation and Partial Refunds
  * Advanced code settings
  * Advanced filtering
  * Prio PSP support
  * Partner Sales
  * Search
    </td>
  </tr>
</table> </details>

<details>
      <summary>**Full List**</summary>
 <table>
  <tr>
    <th>Functionalities</th>
    <th>Functionalities</th>
    <th>Functionalities</th>
  </tr>
  <tr>
    <td>
      
  * Add booking (Amendment)
  * Add Booking to Guest (Contact)
  * Addon Products
  * Admission Types
  * Advanced code settings
  * Advanced Contact Details
  * Advanced Filters
  * Advanced Graylog usage
  * Advanced Product Options
  * Advanced Product types (incl. custom)
  * Advanced validation and error management
  * Age Group Pricing
  * Amendments
  * Auto recovery and auto refund / cancellation
  * Basic Discounts
  * Basic Order Contacts
  * Basic Product Options
  * Basic Product Types
  * Booking Quantity Limit
  * Booking Versioning
  * Capacity
  * Categories (Content)
  * Cluster Tickets
  * Combi discount
  * Combi Tickets
  * Contact Amend
  * Contact Create
  * Contact Delete
  * Contact Show
  * Currency - Guest
  * Currency Advanced (Base + New + Purchase)
  * Currency Basic
  * Currency Rates (Fixer.io)
  * Custom Fields
  * Cut-off Time
  * Dependencies
  * Display price
  * Download e-ticket
  * Duration
  * Dynamic reservation timeout
  * Edit guest details
  * Elastic (Orders)
  * Favorite products
  * Filter on flags
  * Flag Module
  * From Price
  * Group code
  * Group pricing
  * Guest details
  * Highlights (Content)
  </td>
    <td>
    
  * If-Modified-Since HTTP header (Caching)
  * Itenaries
  * Locations (Content)
  * Manual payment
  * Max - Min Restrictions
  * Multi language (Content)
  * Multiple Account Level Login (Reseller, Distributor, Supplier)
  * Multiple Barcode Types
  * Multiple contacts linked to order
  * Notifications
  * Opening Times (Content)
  * Order Options
  * Order Summary
  * Orders API
  * Overbooking
  * Pagination
  * Paid vs Unpaid bookings
  * Partial Cancellation (Booking)
  * Partial Cancellation (Transaction)
  * Partial Refunds
  * Partner Discount
  * Partner Fees
  * Partner Sales
  * Past Date Bookings
  * Payment - Pay Later (Cashier / Guest)
  * Payment API
  * Payment Service Provider support
  * Pick up points
  * Price result check
  * Print voucher per page
  * Product Availability
  * Product Categories (Main and Custom)
  * Product Excludes (Content)
  * Product Includes (Content)
  * Product List / Detail API
  * Product Locations
  * Product Routes 
  * Product Type Classes
  * Promocodes
  * Quantity Pricing
  * Refunds
  * Regular Cancellation
  * Reservations API
  * Routes (Content)
  * Seasonal Pricing
  * Seating
  * Send voucher to email
  * Show booking listing
  * Show payment status per booking
  * Show redeemed vs unredeemed bookings
  </td>
    <td>
    
  * Show sub total
  * Show total price
  * Skip payment when amount is zero
  * Tags (Content)
  * Tax breakdown
  * Third Party Tickets
  * Travel Date Required
  * Travel Date, Redemption Date, Invoice Date sort
  * Turnout Time (Content)
  * Webhooks
  </td>
  </tr>
</table> </details>

---

## Getting Started
### Integration Process

  To facilitate our partners in the best possible way we recommend to follow our integration steps and the process as described below.

<details>
      <summary>**Integration Stages**</summary>

  **Pre-development stage**

  1. Review our documentation.
  
  2. Fill in our \"Prio Partner Integration Questionnaire\" and finalize the scope of the integration.
  
  The \"Prio Partner Integration Questionnaire\" will be used to guide your implementation to the Prio system. It contains basic information on your company, integration use-cases, scoping, process explanations and more.
  
   We highly recommended scoping your requirements list with your integration manager. This API offers an extensive list of possibilities and exceptions. Depending on your product setup, you are not required to implement each and every feature. Partial implementation of this API is possible due to a limited number of mandatory fields as well as multiple alternative request / response formats.
   
   <details>
      <summary>**Why scoping matters**</summary>

  Integrating into the Prioticket platform can take several days to many months. This API is layered to support each and every feature of the platform while maintaining simplicity of use.
  It is important to know beforehand which features you would like to implement and prevent unnecessary research and development for functionalities that either your system does not support or would not be used by your client. 
  
  For example, a valid order can be made in our system with less than 8 values and a single endpoint:
   
   ```json
   {
      \"order\": {
          \"order_distributor_id\": \"{{order_distributor_id}}\",
          \"order_language\": \"{{order_language}}\",
          \"order_external_reference\": \"{{order_external_reference}}\",
          \"order_bookings\": [
              {
                  \"booking_option_type\": \"DIRECT_BOOKING\",
                  \"product_id\": \"{product_id}\",
                  \"product_type_details\": [
                      {
                          \"product_type_id\": \"{{product_type_id}}\",
                          \"product_type_count\": \"{{product_type_count}}\"
                      }
                  ]
              }
          ],
          \"order_contact\": {
              \"contact_email\": \"{{contact_email}}\"
          }
      }
  }
  
  ```

</details>
   
  **Warning:** Do not start implementing or analyzing **advanced** functionalities without consulting your account manager first.

---

  **Development stage**

  3. Partner starts implementing the API according to agreed scope.

---

  **End-to-end testing stage**

  4. Partner notifies the API Verification Team (<api-verification@prioticket.com>) who will initiate the end-to-end verification process with the partner.

---

  **Mapping stage**

  5. Prio and Partner create mutual product mapping sheet. (Optional)

---

  **Launch and monitoring stage**
 
  6. Prio provides production credentials.
  
  7. One or more test orders are made on production to reassure third-party connectivity. 

  8. Partner is monitored and added to the Marketplace.


</details>
  
---  
  
### Postman 
[Postman](https://www.getpostman.com/) is a very popular tool for API development. Luckily Postman now has support for OpenAPI, which means you can import this whole API as a collection in a few steps.
For more information check: [Working with OpenAPI](https://learning.getpostman.com/docs/postman/collections/working_with_openAPI/).
Our API definition can be found [here](https://swagger.prioticket.com/definitions/Prio-Distributor-API/v35/distributor.json).
  
---
## Formats

  ### General


  + All data should be in the [UTF-8](https://en.wikipedia.org/wiki/UTF-8) character set.


  + Currency codes are sent in the [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217) format.


  + Language is defined in the [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.


  + Amounts and values should follow the international standard. Rounding might be required.


  + All data fields are case-sensitive.


  + Optional parameters that are not set or left empty will not be returned in
  the response. All optional parameters are nullable to support serialization.

  ---

  ### Date / Time

  Points in time are expressed as strings using the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) datetime format. We always expect the local time with its UTC offset.
  
  <details>
      <summary>**Examples**</summary>
  
  Burj Khalifa entrance Ticket in Dubai for 12th of May 2016 at 14:00 (local time).
  
  <table>
  <tr>
    <th>Expected</th>
    <th>Not expected</th>
  </tr>
  <tr>
      <td>    
      
    '2020-05-12T14:00:00+04:00'
    
    
    
  </td>
      <td>
      
    '2020-05-12T10:00:00+08:00'
    '2020-05-12T18:00:00+00:00'
          
  </td>
  </tr>
  </table>
  
  > Note 1: Although the above examples express the same point in time, 
    we consider only the first one as valid because we always require the date and time in reference to the location of the activity. <br><br>
  > Note 2: Although mentioned in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt), due to technical restrictions we do not support the Z suffix. Please send `+00:00` to denote a zero UTC offset instead. <br><br>
  > Note 3: All offsets are automatically adjusted based on daylight saving time (DST).
  
</details>
  
---
### Headers
  
  #### Authorization
  
  To allow secure data transmission between Suppliers and Distributors all API
  requests require HTTPS.

  The API Key Token information for the sandbox and production environment will be sent
  in a separate mail.<br>

  If the request lacks any authentication information (e.g., the client
   was unaware that authentication is necessary or attempted using an
   unsupported authentication method), the **resource server** should not
   include an error code or other error information.

  `Authorization: Bearer JWT Token`<br>
  
   ---

  #### Idempotency
  
  The Prio API supports [idempotency](https://tools.ietf.org/html/rfc7231#section-4.2.2), allowing you to retry a request multiple times while only performing the action once. This helps avoid unwanted duplication in case of failures and retries. For example, in the case of a timeout error, it is possible to safely retry sending the same API Create Order call multiple times with the guarantee that the order will only be created once.

  This API supports idempotency on POST requests (other request types such as GET, DELETE and PUT are idempotent by definition). 
  
  ---

  #### Content-Type

  The `Content-Type` should be `application/json`.
  
  ---
  
  #### Application Info
 
  Application info consists of data elements that identify the software that you use for making requests to the Prio platform. When you include application info in your requests, we can analyze and troubleshoot more efficiently, and provide a better support experience.
  
  Application info includes:
  
  * `App-Name` - Name of your application.
  * `App-Version` - Version of your application.
  * `App-Machine-ID` - Identifier of your machine.
  * `App-Flavor` - Flavor of your application.
  * `App-Reference` - Reference of your application.
 
  Above values can be sent in the headers of any request and we recommend sending them if you have multiple applications directly interacting with this API. Custom headers can be sent as well, as long as they have the \"App-\" prefix attached.
  
  ---
     
## Product Configuration 

  ### Product types and classes

  Each product contains product types. These product types can offer aged based ticketing (such as Adult and Child), but also provide a variety of other flexible product variations such as group pricing, business and economy seating or different car configurations.
  
  Because some products might behave different from others, each product type is categorized within a product class; a group of products that behaves similarly. 
  
  <details>
      <summary>**Product Definitions**</summary>
    
  * Class Standard:
    
    Product types in the standard class are the most common and are supported by almost all systems. These types will always be age-restricted.
  
    * `ADULT` - Adult.
    
    * `CHILD` - Child.
    
    * `SENIOR` - Senior.
    
    * `YOUTH` - Youth.
        
    * `INFANT` - Infant.
    
  * Class Individual:
  
    Product types in the individual class are less common and therefore have fewer supported systems. These types will never be age-restricted.
    
    * `PERSON` - Person.
    
    * `STUDENT` - Student.
    
    * `RESIDENT` - Resident.
    
    * `MILITARY` - Military.
    
    * `IMPAIRED` - Impaired.
  
  * Class Item:
  
    Product types in the item class do not refer to actual persons, instead they could, for example, be packages (Regular, Silver, Diamond), objects (Merchandise, private tours), a type of event, class identifier (Economy, Business) and much more.
  
    * `ITEM` - Item.
    
  * Class Group:
   
    Product types in the group class always consist of multiple persons. It can, for example, be a family of 2 Adults and 2 Childs.
    
    * `GROUP` - Group.
    
    * `FAMILY` - Family.
    
  * Class Custom:
  
    Product types in the custom class are completely dynamic and therefore require explicit mapping with external systems. They do not return as `CUSTOM`, instead they can take any form.
    
    * `CUSTOM` - Custom.
    
  </details>
    
---
    
### Product admission types
Some products require the guest to select a day or time during the booking process. Depending on the type of admission this calendar / datetime picker can have several restrictions.

Below you will find the most common types of admission.

 <details>
      <summary>**Admission Types**</summary>

+ `TIME_PERIOD` - Customers can arrive at any time between the start (`availability_from_date_time`) and end time (`availability_to_date_time`) of the availability slot. Multiple periods in a single day should be expected.
  Therefore a date- and timepicker should be shown.

  Examples:

  * An amusement park which has two opening periods, for example, a morning shift (09:00 - 12:00) and an afternoon shift (14:00 - 22:00).

  * An afternoon admission to an amusement park that can be used from
 1pm to 9pm.
 
  ---
 
+ `TIME_DATE` - Variation on `TIME_PERIOD`, whereas only a single period exists in a day. It is not required to choose between different times within a day, therefore only a datepicker is required.
  Note that in case the slot includes midnight (two or more days), the day from which the `availability_from_date_time` originated should take precedence.

  Examples:
  
  * A museum ticket that can be used during any time on the purchase date.
  * A public transport ticket which is valid for the whole day.
  
  ---

+ `TIME_POINT` - Customers are required to be present at the start time of the availability slot but can leave any time they want.

  Examples:

   * In the museum admission scenario, a timed entry ticket
   for 10am requires the user to be at the museum at 10am. The start time of
   availability slots for this service represents the designated entry
   time. The end time, however, is used solely as a key to identify the
   availability slot for booking.
   
   ---
   
+ `TIME_OPEN` - Customers can arrive at any time. Availablity is not applicable.

  Examples:
  
  * A museum entry voucher which can be used anytime during the year.
  
  ---
  
+ `TIME_SLOT` - Customers are required to be present at the start time of the availability slot, and the service is expected to finish at the end time of the slot.
    
  Examples:

    * A tour that starts at 9am that requires all attendees to arrive
       at the start time, and returns at around 12pm.
    * A haircut reservation at 3pm on Saturday that will take approximately
     30 minutes.
    * A fitness class from 6pm to 8pm.
    
</details>
    
---
   
### Pricing
    
  Different pricing configurations can be set depending on the product type (`product_type`), age group (`product_type_age`), booking quantity (`product_quantity_pricing`), season (`product_seasonal_pricing`), daily pricing (`product_daily_pricing`) and custom / time-based pricing (`product_dynamic_pricing`).
  
  All prices are given per `product_type`, per season (`product_seasonal_pricing:true`).
  Every possible variation to this price is given as either a discount or surcharge.
  The newly calculated price is returned in both the Reservation and Order API.
  
  TIP: To check whether you have implemented all logic correctly, it is advised that you cross-check the returned prices in the API with your own.
  
  ---
  
  ### Translations
  
  This API supports multilingual content.
  
  All translatable fields can be found inside the `product_content` object.
  
  Normally the returned content would default to the `product_default_language`, which is commonly English. Would you wish to retrieve more languages, those supported for that specific product can be found inside `product_content_languages`.
  
  One of the language codes in the above array can then be sent within the original request in the URL as `&product_content_language={language_code}`.
  
  ---
  
  ### Pagination
  
  Please be aware that some datasets can be bigger than others. The size of your inventory varies depending on your catalogue setup.
  Pagination is supported on endpoints for which potentially thousands of records can be expected. To retrieve the full dataset we recommend implementing the paging rules.
  
  This only applies to partners which process considerable volume.
  
  ---

## Errors

The API will return the appropriate [HTTP status code](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes) for every request and this could therefore be used to categorize most common types of errors (e.g `400`/`401`/`402`/`403`/`404`/`405`/`406`/`409`/`418`/`422`/`429`/`500`/`501`/`502`/`503`/`504` are supported).

Additionally, the `error`, `error_description` and `errors` field can be consulted for more detailed information on the problem.
* Generally in case of a HTTP 400 status the request is missing a required parameter, includes an unsupported parameter or parameter value, repeats the same parameter, uses more than one method for including an access token, or is otherwise malformed. 

  Most HTTP 400 errors are returned with the same error code (`INVALID_REQUEST`) and include more detailed messages within the `errors` array.


* A HTTP 422 (Unprocessable Entity) is most likely caused by a semantic (logical) error and indicates a problem within your integration.
> Please note that in the future more specific error- and HTTP status codes might be added. Therefore consider all status codes between HTTP 200 and HTTP 300 as successfull responses, and every HTTP 400+/500+ as errors. <br><br>
> 
> As our API has over 1000+ unique error codes (grouped by HTTP status). We discourage implementing individual errors on your customer front-end interface and suggest a catch-all clause for each HTTP status code instead.
---
## Using the interactive documentation
This is an interactive documentation which allows you to experience the API first hand without writing any code. To start calling Endpoints, first \"Authorize\" yourself by using the button below.  Fill in the default sandbox credentials or the credentials received by your Account Manager.

Default Sandbox Credentials: 
* API Key: *Currently the API Key is only enforced on the Production Environment.*
* client_id: `demo-distributor@prioticket.com`
* client_secret: `NpEZ&x4QBQV6#L&v`
* distributor_id: `501`

After the authorization is successful, all subsequent calls will automatically contain the Bearer token.

---
### OpenAPI Specification
#### Read-Only and Write-Only Properties
Please note that some schemas are being reused multiple times, across endpoints but also between requests and responses. `readOnly` properties are included in responses but not in requests, and `writeOnly` properties may be sent in requests but not in responses.
Furthermore because all response types are JSON, the order in which the parameters are sent is not relevant and for documentation purposes might change over time.

  More info on this topic can be found in the [Open API Specification](https://swagger.io/docs/specification/data-models/data-types/)
  
#### Deprecation and upcoming changes
Due to limitations on our interactive documentation we list current unavailable methods as deprecated. Note that these are not actually deprecated, instead they will be added in the future. You can safely ignore these parameters as they affect either new or obsolete functionality for services that do not apply nor are within the scope for your current integration.

Furthermore, in case you are viewing the latest version available, continuous amendments to both the documentation and the API can be expected. This means we are constantly adding new functionalities and parameters to the same API version, as long as these are deemed non-breaking and backwards compatible. In case any breaking changes need to be made, a new version will be introduced. Please note that the syntax of upcoming (not yet released) functionalities might be subject to change.
#### Advanced functionality
Across the documentation **Advanced Functionality** can be found. This type of functionality requires a deep understanding of our system and implementation is not required to fully integrate on our API. Contact your account manager in case you would like to implement advanced functionality.
#### Libraries
Because our API definition is publicly available you can use several open-source tools to generate client libraries. Please note that these libraries are auto-generated and should be considered Alpha releases. Backwards compatibility is not guaranteed and as this is a third-party tool we can not offer any assistance.
  In case you find using a SDK helpful we recommend to use the [Open API Generator](https://openapi-generator.tech/).

---
<b>PrioTicket Confidential</b>

  This documentation is protected by law from any form of duplication unless prior permission is obtained from the officers of PrioTicket.

---

For more information, please visit [https://support.prioticket.com](https://support.prioticket.com).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/PrioTicketDistributorAPI/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://sandbox-distributor-api.prioticket.com/v3.5/distributor*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthenticationApi* | [**getToken**](docs/Api/AuthenticationApi.md#gettoken) | **POST** /oauth2/token | Exchange credentials for token. (Example only)
*AvailabilityApi* | [**getAvailability**](docs/Api/AvailabilityApi.md#getavailability) | **GET** /availability | List Product Availability
*AvailabilityApi* | [**removeAvailability**](docs/Api/AvailabilityApi.md#removeavailability) | **DELETE** /availability | Remove Product Availability.
*AvailabilityApi* | [**updateAvailability**](docs/Api/AvailabilityApi.md#updateavailability) | **PATCH** /availability/{availability_id} | Update Availability Slot
*AvailabilityApi* | [**updateAvailabilityBatch**](docs/Api/AvailabilityApi.md#updateavailabilitybatch) | **PUT** /availability | Update Product Availability Batch
*ContactsApi* | [**getContact**](docs/Api/ContactsApi.md#getcontact) | **GET** /contacts/{contact_uid} | Contact Details
*ContactsApi* | [**getContacts**](docs/Api/ContactsApi.md#getcontacts) | **GET** /contacts | List Contacts
*ContactsApi* | [**updateContact**](docs/Api/ContactsApi.md#updatecontact) | **PUT** /contacts/{contact_uid} | Update Contact
*FinancialsApi* | [**getCredit**](docs/Api/FinancialsApi.md#getcredit) | **GET** /financials/credit | Credit Limit Details (Upcoming)
*NotificationsApi* | [**addNotification**](docs/Api/NotificationsApi.md#addnotification) | **POST** /notifications | Create Notification (Example only)
*NotificationsApi* | [**addWebhook**](docs/Api/NotificationsApi.md#addwebhook) | **POST** /webhooks | Create Webhook
*NotificationsApi* | [**getNotifications**](docs/Api/NotificationsApi.md#getnotifications) | **GET** /notifications | List Notifications (Upcoming)
*NotificationsApi* | [**getWebhooks**](docs/Api/NotificationsApi.md#getwebhooks) | **GET** /webhooks | List Webhooks
*NotificationsApi* | [**removeWebhook**](docs/Api/NotificationsApi.md#removewebhook) | **DELETE** /webhooks/{webhook_id} | Remove Webhook
*OrdersApi* | [**cancelOrder**](docs/Api/OrdersApi.md#cancelorder) | **DELETE** /orders/{order_reference} | Cancel Order / Booking
*OrdersApi* | [**createOrder**](docs/Api/OrdersApi.md#createorder) | **POST** /orders | Create Order / Confirm Reservation / Checkout Cart
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /orders/{order_reference} | Order Details
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /orders | List Orders
*OrdersApi* | [**getVoucher**](docs/Api/OrdersApi.md#getvoucher) | **GET** /orders/{order_reference}/voucher | Get Voucher
*OrdersApi* | [**updateOrder**](docs/Api/OrdersApi.md#updateorder) | **PUT** /orders/{order_reference} | Update / Amend Order
*PaymentsApi* | [**addPayment**](docs/Api/PaymentsApi.md#addpayment) | **POST** /payments | Create Payment
*PaymentsApi* | [**addPaymentDetails**](docs/Api/PaymentsApi.md#addpaymentdetails) | **POST** /payments/{payment_id}/details | Submit Additional Payment Details
*PaymentsApi* | [**cancelPayment**](docs/Api/PaymentsApi.md#cancelpayment) | **DELETE** /payments | Cancel / Refund Payment
*PaymentsApi* | [**getPaymentConfig**](docs/Api/PaymentsApi.md#getpaymentconfig) | **GET** /payments/config | Get Payment Configuration
*PaymentsApi* | [**getPayments**](docs/Api/PaymentsApi.md#getpayments) | **GET** /payments | List Payments
*ProductsApi* | [**getCurrencyRates**](docs/Api/ProductsApi.md#getcurrencyrates) | **GET** /products/currency_rates | List Product Currency Rates
*ProductsApi* | [**getProduct**](docs/Api/ProductsApi.md#getproduct) | **GET** /products/{product_id} | List Product Details
*ProductsApi* | [**getProductAvailability**](docs/Api/ProductsApi.md#getproductavailability) | **GET** /products/{product_id}/availability | List Product Availabilities
*ProductsApi* | [**getProductCategories**](docs/Api/ProductsApi.md#getproductcategories) | **GET** /products/categories | List Product Categories
*ProductsApi* | [**getProductDestinations**](docs/Api/ProductsApi.md#getproductdestinations) | **GET** /products/destinations | List Product Destinations
*ProductsApi* | [**getProductLocations**](docs/Api/ProductsApi.md#getproductlocations) | **GET** /products/locations | List Product Locations
*ProductsApi* | [**getProductRoutes**](docs/Api/ProductsApi.md#getproductroutes) | **GET** /products/routes | List Product Routes
*ProductsApi* | [**getProductTaxes**](docs/Api/ProductsApi.md#getproducttaxes) | **GET** /products/taxes | List Product Taxes
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /products | List Products
*ReservationsCartApi* | [**addPromocode**](docs/Api/ReservationsCartApi.md#addpromocode) | **POST** /reservations/{reservation_reference}/promocode | Add Promocode
*ReservationsCartApi* | [**cancelReservation**](docs/Api/ReservationsCartApi.md#cancelreservation) | **DELETE** /reservations/{reservation_reference} | Cancel Reservation / Remove Cart Item / Empty Cart
*ReservationsCartApi* | [**createReservation**](docs/Api/ReservationsCartApi.md#createreservation) | **POST** /reservations | Create Reservation / Create Cart
*ReservationsCartApi* | [**getReservation**](docs/Api/ReservationsCartApi.md#getreservation) | **GET** /reservations/{reservation_reference} | Reservation Details / Cart Details
*ReservationsCartApi* | [**removePromocode**](docs/Api/ReservationsCartApi.md#removepromocode) | **DELETE** /reservations/{reservation_reference}/promocode/{promo_code} | Remove Promocode
*ReservationsCartApi* | [**updateReservation**](docs/Api/ReservationsCartApi.md#updatereservation) | **PUT** /reservations/{reservation_reference} | Update Reservation / Update Cart
*SystemApi* | [**getSystemPing**](docs/Api/SystemApi.md#getsystemping) | **GET** /system/ping | Get System Ping
*SystemApi* | [**getSystemSpecification**](docs/Api/SystemApi.md#getsystemspecification) | **GET** /system/docs | Get System OpenAPI Specification (Upcoming)
*SystemApi* | [**getSystemStatus**](docs/Api/SystemApi.md#getsystemstatus) | **GET** /system/status | Get System Status

## Models

- [AccountType](docs/Model/AccountType.md)
- [AccountingType](docs/Model/AccountingType.md)
- [AddressModel](docs/Model/AddressModel.md)
- [AdyenDropInPaymentRequest](docs/Model/AdyenDropInPaymentRequest.md)
- [AdyenDropInPaymentRequestAllOf](docs/Model/AdyenDropInPaymentRequestAllOf.md)
- [AdyenDropInPaymentResponse](docs/Model/AdyenDropInPaymentResponse.md)
- [AdyenPaymentLinkRequest](docs/Model/AdyenPaymentLinkRequest.md)
- [AdyenPaymentLinkResponse](docs/Model/AdyenPaymentLinkResponse.md)
- [AdyenRecurringPaymentRequest](docs/Model/AdyenRecurringPaymentRequest.md)
- [AdyenRecurringPaymentResponse](docs/Model/AdyenRecurringPaymentResponse.md)
- [AdyenSetPaymentDetailsRequest](docs/Model/AdyenSetPaymentDetailsRequest.md)
- [AdyenTerminalAPIPaymentRequest](docs/Model/AdyenTerminalAPIPaymentRequest.md)
- [AdyenTerminalAPIPaymentRequestAllOf](docs/Model/AdyenTerminalAPIPaymentRequestAllOf.md)
- [AdyenTerminalAPIPaymentResponse](docs/Model/AdyenTerminalAPIPaymentResponse.md)
- [AppliedPromocode](docs/Model/AppliedPromocode.md)
- [AuthorizationType](docs/Model/AuthorizationType.md)
- [AvailabilitiesListResponse](docs/Model/AvailabilitiesListResponse.md)
- [AvailabilitiesListResponseData](docs/Model/AvailabilitiesListResponseData.md)
- [AvailabilityModel](docs/Model/AvailabilityModel.md)
- [AvailabilityPrice](docs/Model/AvailabilityPrice.md)
- [AvailabilitySpots](docs/Model/AvailabilitySpots.md)
- [BookingExtraOptionDetails](docs/Model/BookingExtraOptionDetails.md)
- [BookingExtraOptionDetailsAllOf](docs/Model/BookingExtraOptionDetailsAllOf.md)
- [BookingExtraOptions](docs/Model/BookingExtraOptions.md)
- [BookingItem](docs/Model/BookingItem.md)
- [BookingItemConfirmed](docs/Model/BookingItemConfirmed.md)
- [BookingItemConfirmedAllOf](docs/Model/BookingItemConfirmedAllOf.md)
- [BookingOption](docs/Model/BookingOption.md)
- [BookingOptionType](docs/Model/BookingOptionType.md)
- [BookingProductPickupPoint](docs/Model/BookingProductPickupPoint.md)
- [BookingStatusTypes](docs/Model/BookingStatusTypes.md)
- [CancellationPolicy](docs/Model/CancellationPolicy.md)
- [CancellationType](docs/Model/CancellationType.md)
- [CapacityType](docs/Model/CapacityType.md)
- [CategoryModel](docs/Model/CategoryModel.md)
- [CheckoutField](docs/Model/CheckoutField.md)
- [ClientCredentialsGrantRequest](docs/Model/ClientCredentialsGrantRequest.md)
- [ClientCredentialsGrantResponse](docs/Model/ClientCredentialsGrantResponse.md)
- [CommonBookingOption](docs/Model/CommonBookingOption.md)
- [CommonPaymentGateway](docs/Model/CommonPaymentGateway.md)
- [CommonPaymentRequest](docs/Model/CommonPaymentRequest.md)
- [ConfirmReservation](docs/Model/ConfirmReservation.md)
- [ConfirmReservationAllOf](docs/Model/ConfirmReservationAllOf.md)
- [ConfirmationMode](docs/Model/ConfirmationMode.md)
- [ConfirmedBooking](docs/Model/ConfirmedBooking.md)
- [ConfirmedBookingAllOf](docs/Model/ConfirmedBookingAllOf.md)
- [ConfirmedBookingDetail](docs/Model/ConfirmedBookingDetail.md)
- [ConfirmedBookingDetailAllOf](docs/Model/ConfirmedBookingDetailAllOf.md)
- [ConfirmedCombiBooking](docs/Model/ConfirmedCombiBooking.md)
- [ConfirmedCombiBookingAllOf](docs/Model/ConfirmedCombiBookingAllOf.md)
- [ConfirmedOrderModel](docs/Model/ConfirmedOrderModel.md)
- [ConfirmedOrderModelAllOf](docs/Model/ConfirmedOrderModelAllOf.md)
- [ContactClassification](docs/Model/ContactClassification.md)
- [ContactDetailResponse](docs/Model/ContactDetailResponse.md)
- [ContactDetailResponseData](docs/Model/ContactDetailResponseData.md)
- [ContactDetails](docs/Model/ContactDetails.md)
- [ContactListResponse](docs/Model/ContactListResponse.md)
- [ContactListResponseData](docs/Model/ContactListResponseData.md)
- [ContactListResponseDataAllOf](docs/Model/ContactListResponseDataAllOf.md)
- [ContactType](docs/Model/ContactType.md)
- [CreateNotificationRequest](docs/Model/CreateNotificationRequest.md)
- [CreateNotificationRequestData](docs/Model/CreateNotificationRequestData.md)
- [CreateOrderModel](docs/Model/CreateOrderModel.md)
- [CreateOrderModelAllOf](docs/Model/CreateOrderModelAllOf.md)
- [CreateOrderRequest](docs/Model/CreateOrderRequest.md)
- [CreateOrderRequestData](docs/Model/CreateOrderRequestData.md)
- [CreatePaymentRequest](docs/Model/CreatePaymentRequest.md)
- [CreatePaymentRequestData](docs/Model/CreatePaymentRequestData.md)
- [CreatePaymentResponse](docs/Model/CreatePaymentResponse.md)
- [CreatePaymentResponseData](docs/Model/CreatePaymentResponseData.md)
- [CreateReservationRequest](docs/Model/CreateReservationRequest.md)
- [CreateReservationRequestData](docs/Model/CreateReservationRequestData.md)
- [CreateWebhookRequest](docs/Model/CreateWebhookRequest.md)
- [CreateWebhookRequestData](docs/Model/CreateWebhookRequestData.md)
- [CreateWebhookResponse](docs/Model/CreateWebhookResponse.md)
- [CreateWebhookResponseData](docs/Model/CreateWebhookResponseData.md)
- [CreditDetailData](docs/Model/CreditDetailData.md)
- [CreditDetailResponse](docs/Model/CreditDetailResponse.md)
- [CreditLimit](docs/Model/CreditLimit.md)
- [Currency](docs/Model/Currency.md)
- [CurrencyConversion](docs/Model/CurrencyConversion.md)
- [CurrencySymbolPosition](docs/Model/CurrencySymbolPosition.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomFieldType](docs/Model/CustomFieldType.md)
- [CustomPickupPoint](docs/Model/CustomPickupPoint.md)
- [DayOfTheWeek](docs/Model/DayOfTheWeek.md)
- [DifficultyLevel](docs/Model/DifficultyLevel.md)
- [DirectBookingOption](docs/Model/DirectBookingOption.md)
- [DirectBookingOptionModel](docs/Model/DirectBookingOptionModel.md)
- [DirectBookingOptionModelAllOf](docs/Model/DirectBookingOptionModelAllOf.md)
- [DistributorCurrencyRatesResponse](docs/Model/DistributorCurrencyRatesResponse.md)
- [DistributorCurrencyRatesResponseData](docs/Model/DistributorCurrencyRatesResponseData.md)
- [DistributorProductCategoriesResponse](docs/Model/DistributorProductCategoriesResponse.md)
- [DistributorProductCategoriesResponseData](docs/Model/DistributorProductCategoriesResponseData.md)
- [DistributorProductTaxesResponse](docs/Model/DistributorProductTaxesResponse.md)
- [DistributorProductTaxesResponseData](docs/Model/DistributorProductTaxesResponseData.md)
- [DistributorProductTaxesResponseDataAllOf](docs/Model/DistributorProductTaxesResponseDataAllOf.md)
- [EmailOptionsModel](docs/Model/EmailOptionsModel.md)
- [EmailRecipient](docs/Model/EmailRecipient.md)
- [EmailTypes](docs/Model/EmailTypes.md)
- [ErrorModel](docs/Model/ErrorModel.md)
- [ExtraOptionValue](docs/Model/ExtraOptionValue.md)
- [ExtraOptionValueDetails](docs/Model/ExtraOptionValueDetails.md)
- [ExtraOptionValueDetailsAllOf](docs/Model/ExtraOptionValueDetailsAllOf.md)
- [ExtraOptions](docs/Model/ExtraOptions.md)
- [Fee](docs/Model/Fee.md)
- [FeeType](docs/Model/FeeType.md)
- [FixedBookingPickupPoint](docs/Model/FixedBookingPickupPoint.md)
- [Flag](docs/Model/Flag.md)
- [GetVoucherResponseJSON](docs/Model/GetVoucherResponseJSON.md)
- [GetVoucherResponseJSONData](docs/Model/GetVoucherResponseJSONData.md)
- [GuideLanguage](docs/Model/GuideLanguage.md)
- [Highlight](docs/Model/Highlight.md)
- [Image](docs/Model/Image.md)
- [InvoiceDetails](docs/Model/InvoiceDetails.md)
- [InvoiceStatus](docs/Model/InvoiceStatus.md)
- [Kind](docs/Model/Kind.md)
- [LocationListModel](docs/Model/LocationListModel.md)
- [LocationListModelAllOf](docs/Model/LocationListModelAllOf.md)
- [LocationListResponse](docs/Model/LocationListResponse.md)
- [LocationListResponseData](docs/Model/LocationListResponseData.md)
- [LocationListResponseDataAllOf](docs/Model/LocationListResponseDataAllOf.md)
- [LocationModel](docs/Model/LocationModel.md)
- [LocationType](docs/Model/LocationType.md)
- [MakePaymentResponse](docs/Model/MakePaymentResponse.md)
- [ManualPaymentRequest](docs/Model/ManualPaymentRequest.md)
- [ManualPaymentRequestAllOf](docs/Model/ManualPaymentRequestAllOf.md)
- [ManualPaymentResponse](docs/Model/ManualPaymentResponse.md)
- [Margin](docs/Model/Margin.md)
- [MarginType](docs/Model/MarginType.md)
- [MessagingMethod](docs/Model/MessagingMethod.md)
- [MessagingType](docs/Model/MessagingType.md)
- [MewsPaymentRequest](docs/Model/MewsPaymentRequest.md)
- [MewsPaymentRequestAllOf](docs/Model/MewsPaymentRequestAllOf.md)
- [MewsPaymentResponse](docs/Model/MewsPaymentResponse.md)
- [NGeniusPaymentRequest](docs/Model/NGeniusPaymentRequest.md)
- [NGeniusPaymentRequestAllOf](docs/Model/NGeniusPaymentRequestAllOf.md)
- [NGeniusPaymentResponse](docs/Model/NGeniusPaymentResponse.md)
- [Note](docs/Model/Note.md)
- [NotificationEvent](docs/Model/NotificationEvent.md)
- [NotificationListResponse](docs/Model/NotificationListResponse.md)
- [NotificationListResponseData](docs/Model/NotificationListResponseData.md)
- [NotificationListResponseDataAllOf](docs/Model/NotificationListResponseDataAllOf.md)
- [NotificationStatus](docs/Model/NotificationStatus.md)
- [OAuthErrorCodes](docs/Model/OAuthErrorCodes.md)
- [OAuthErrorModel](docs/Model/OAuthErrorModel.md)
- [OpeningTimeDetail](docs/Model/OpeningTimeDetail.md)
- [OpeningTimes](docs/Model/OpeningTimes.md)
- [OrderChannel](docs/Model/OrderChannel.md)
- [OrderDetailResponse](docs/Model/OrderDetailResponse.md)
- [OrderDetailResponseData](docs/Model/OrderDetailResponseData.md)
- [OrderListResponse](docs/Model/OrderListResponse.md)
- [OrderListResponseData](docs/Model/OrderListResponseData.md)
- [OrderListResponseDataAllOf](docs/Model/OrderListResponseDataAllOf.md)
- [OrderModel](docs/Model/OrderModel.md)
- [OrderOptions](docs/Model/OrderOptions.md)
- [OrderSource](docs/Model/OrderSource.md)
- [OrderStatusTypes](docs/Model/OrderStatusTypes.md)
- [Pass](docs/Model/Pass.md)
- [PassDurationDetails](docs/Model/PassDurationDetails.md)
- [PaymentCategory](docs/Model/PaymentCategory.md)
- [PaymentClass](docs/Model/PaymentClass.md)
- [PaymentConfig](docs/Model/PaymentConfig.md)
- [PaymentConfigResponse](docs/Model/PaymentConfigResponse.md)
- [PaymentConfigResponseData](docs/Model/PaymentConfigResponseData.md)
- [PaymentDetailResponse](docs/Model/PaymentDetailResponse.md)
- [PaymentDetailResponseData](docs/Model/PaymentDetailResponseData.md)
- [PaymentDetails](docs/Model/PaymentDetails.md)
- [PaymentDetailsResponse](docs/Model/PaymentDetailsResponse.md)
- [PaymentDetailsResponseData](docs/Model/PaymentDetailsResponseData.md)
- [PaymentGatewayAddonPayments](docs/Model/PaymentGatewayAddonPayments.md)
- [PaymentGatewayAddonPaymentsAllOf](docs/Model/PaymentGatewayAddonPaymentsAllOf.md)
- [PaymentGatewayAdyen](docs/Model/PaymentGatewayAdyen.md)
- [PaymentGatewayAdyenAllOf](docs/Model/PaymentGatewayAdyenAllOf.md)
- [PaymentGatewayCybersource](docs/Model/PaymentGatewayCybersource.md)
- [PaymentGatewayCybersourceAllOf](docs/Model/PaymentGatewayCybersourceAllOf.md)
- [PaymentGatewayDetails](docs/Model/PaymentGatewayDetails.md)
- [PaymentGatewayExternal](docs/Model/PaymentGatewayExternal.md)
- [PaymentGatewayHotelBill](docs/Model/PaymentGatewayHotelBill.md)
- [PaymentGatewayHotelBillAllOf](docs/Model/PaymentGatewayHotelBillAllOf.md)
- [PaymentGatewayHyperPay](docs/Model/PaymentGatewayHyperPay.md)
- [PaymentGatewayMews](docs/Model/PaymentGatewayMews.md)
- [PaymentGatewayMewsAllOf](docs/Model/PaymentGatewayMewsAllOf.md)
- [PaymentGatewayNGenius](docs/Model/PaymentGatewayNGenius.md)
- [PaymentGatewayType](docs/Model/PaymentGatewayType.md)
- [PaymentListResponse](docs/Model/PaymentListResponse.md)
- [PaymentListResponseData](docs/Model/PaymentListResponseData.md)
- [PaymentListResponseDataAllOf](docs/Model/PaymentListResponseDataAllOf.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentRecurringType](docs/Model/PaymentRecurringType.md)
- [PaymentRequestType](docs/Model/PaymentRequestType.md)
- [PaymentScheme](docs/Model/PaymentScheme.md)
- [PaymentStatus](docs/Model/PaymentStatus.md)
- [PaymentStatusResponse](docs/Model/PaymentStatusResponse.md)
- [PaymentTermType](docs/Model/PaymentTermType.md)
- [PaymentType](docs/Model/PaymentType.md)
- [PickupPoint](docs/Model/PickupPoint.md)
- [PickupPointType](docs/Model/PickupPointType.md)
- [PriceVariationPriceType](docs/Model/PriceVariationPriceType.md)
- [PriceVariationType](docs/Model/PriceVariationType.md)
- [PriceVariations](docs/Model/PriceVariations.md)
- [Pricing](docs/Model/Pricing.md)
- [ProductAdmissionType](docs/Model/ProductAdmissionType.md)
- [ProductBlockoutDate](docs/Model/ProductBlockoutDate.md)
- [ProductBookingModel](docs/Model/ProductBookingModel.md)
- [ProductCatalogueStatus](docs/Model/ProductCatalogueStatus.md)
- [ProductCodeFormat](docs/Model/ProductCodeFormat.md)
- [ProductCodeSettings](docs/Model/ProductCodeSettings.md)
- [ProductCodeSource](docs/Model/ProductCodeSource.md)
- [ProductCombiDetail](docs/Model/ProductCombiDetail.md)
- [ProductContent](docs/Model/ProductContent.md)
- [ProductCurrency](docs/Model/ProductCurrency.md)
- [ProductDestinationModel](docs/Model/ProductDestinationModel.md)
- [ProductDestinationsResponse](docs/Model/ProductDestinationsResponse.md)
- [ProductDestinationsResponseData](docs/Model/ProductDestinationsResponseData.md)
- [ProductDestinationsResponseDataAllOf](docs/Model/ProductDestinationsResponseDataAllOf.md)
- [ProductDetailData](docs/Model/ProductDetailData.md)
- [ProductDetailResponse](docs/Model/ProductDetailResponse.md)
- [ProductExclude](docs/Model/ProductExclude.md)
- [ProductInclude](docs/Model/ProductInclude.md)
- [ProductListResponse](docs/Model/ProductListResponse.md)
- [ProductListResponseData](docs/Model/ProductListResponseData.md)
- [ProductListResponseDataAllOf](docs/Model/ProductListResponseDataAllOf.md)
- [ProductLocation](docs/Model/ProductLocation.md)
- [ProductLocationAllOf](docs/Model/ProductLocationAllOf.md)
- [ProductMarketplaceStatus](docs/Model/ProductMarketplaceStatus.md)
- [ProductModel](docs/Model/ProductModel.md)
- [ProductNoShowPolicy](docs/Model/ProductNoShowPolicy.md)
- [ProductPaymentDetails](docs/Model/ProductPaymentDetails.md)
- [ProductRating](docs/Model/ProductRating.md)
- [ProductRedemptionRules](docs/Model/ProductRedemptionRules.md)
- [ProductRelationDetails](docs/Model/ProductRelationDetails.md)
- [ProductReview](docs/Model/ProductReview.md)
- [ProductServiceType](docs/Model/ProductServiceType.md)
- [ProductSpecialDate](docs/Model/ProductSpecialDate.md)
- [ProductStatus](docs/Model/ProductStatus.md)
- [ProductTax](docs/Model/ProductTax.md)
- [ProductTaxDetail](docs/Model/ProductTaxDetail.md)
- [ProductTermsAndConditions](docs/Model/ProductTermsAndConditions.md)
- [ProductType](docs/Model/ProductType.md)
- [ProductTypeClass](docs/Model/ProductTypeClass.md)
- [ProductTypeDailyVariation](docs/Model/ProductTypeDailyVariation.md)
- [ProductTypeDailyVariationDetail](docs/Model/ProductTypeDailyVariationDetail.md)
- [ProductTypeDetails](docs/Model/ProductTypeDetails.md)
- [ProductTypePricing](docs/Model/ProductTypePricing.md)
- [ProductTypeQuantityVariation](docs/Model/ProductTypeQuantityVariation.md)
- [ProductTypeSeason](docs/Model/ProductTypeSeason.md)
- [ProductVoucherSettings](docs/Model/ProductVoucherSettings.md)
- [PromoCodePricing](docs/Model/PromoCodePricing.md)
- [PromocodeModel](docs/Model/PromocodeModel.md)
- [RedemptionCountType](docs/Model/RedemptionCountType.md)
- [RedemptionDurationType](docs/Model/RedemptionDurationType.md)
- [RedemptionStatus](docs/Model/RedemptionStatus.md)
- [RefundType](docs/Model/RefundType.md)
- [RegularBookingItem](docs/Model/RegularBookingItem.md)
- [RegularBookingItemAllOf](docs/Model/RegularBookingItemAllOf.md)
- [RelationType](docs/Model/RelationType.md)
- [ReservationDetail](docs/Model/ReservationDetail.md)
- [ReservationDetailAllOf](docs/Model/ReservationDetailAllOf.md)
- [ReservationDetailData](docs/Model/ReservationDetailData.md)
- [ReservationDetailResponse](docs/Model/ReservationDetailResponse.md)
- [ReservationModel](docs/Model/ReservationModel.md)
- [ReservedPaginationData](docs/Model/ReservedPaginationData.md)
- [RouteLocation](docs/Model/RouteLocation.md)
- [RouteModel](docs/Model/RouteModel.md)
- [RoutesListResponse](docs/Model/RoutesListResponse.md)
- [RoutesListResponseData](docs/Model/RoutesListResponseData.md)
- [RoutesListResponseDataAllOf](docs/Model/RoutesListResponseDataAllOf.md)
- [SampleNGeniusPaymentResponse](docs/Model/SampleNGeniusPaymentResponse.md)
- [SettlementType](docs/Model/SettlementType.md)
- [Spot](docs/Model/Spot.md)
- [StatusTypes](docs/Model/StatusTypes.md)
- [SubmitPaymentDetailsResponse](docs/Model/SubmitPaymentDetailsResponse.md)
- [SubmitPaymentDetailsResponseData](docs/Model/SubmitPaymentDetailsResponseData.md)
- [SystemDetails](docs/Model/SystemDetails.md)
- [SystemStatus](docs/Model/SystemStatus.md)
- [UpdateBookingOption](docs/Model/UpdateBookingOption.md)
- [UpdateBookingOptionAllOf](docs/Model/UpdateBookingOptionAllOf.md)
- [UpdateContactRequest](docs/Model/UpdateContactRequest.md)
- [UpdateContactRequestData](docs/Model/UpdateContactRequestData.md)
- [UpdateOrderModel](docs/Model/UpdateOrderModel.md)
- [UpdateOrderModelAllOf](docs/Model/UpdateOrderModelAllOf.md)
- [UpdateOrderRequest](docs/Model/UpdateOrderRequest.md)
- [UpdateOrderRequestData](docs/Model/UpdateOrderRequestData.md)
- [VoucherReleaseType](docs/Model/VoucherReleaseType.md)
- [VoucherType](docs/Model/VoucherType.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookListResponse](docs/Model/WebhookListResponse.md)
- [WebhookListResponseData](docs/Model/WebhookListResponseData.md)
- [WebhookListResponseDataAllOf](docs/Model/WebhookListResponseDataAllOf.md)
- [WebhookNotification](docs/Model/WebhookNotification.md)

## Authorization

### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: key
- **Location**: URL query string



### OAuth2

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://www.prioticketapis.com/auth/distributor.products.readonly**: Grants access to products.
    - **https://www.prioticketapis.com/auth/distributor.reservations**: Grants access to reservations.
    - **https://www.prioticketapis.com/auth/distributor.bookings**: Grants access to bookings.
    - **https://www.prioticketapis.com/auth/distributor.bookings.details**: Grants access to booking details.
    - **https://www.prioticketapis.com/auth/distributor/reporting**: Grants access to reporting.


### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

api-support@prioticket.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.5.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
