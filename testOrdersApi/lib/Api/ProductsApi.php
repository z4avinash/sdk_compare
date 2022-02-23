<?php
/**
 * ProductsApi
 * PHP version 7.3
 *
 * @category Class
 * @package  PrioTicket\DistributorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Prio Distributor API V3.5 (General Availability)
 *
 * # Interface Specification  ![Uptime](https://badgen.net/uptime-robot/status/m785487968-fe65ff8817eb8d24c10c8d99) ![Uptime Robot ratio (30 days)](https://img.shields.io/uptimerobot/ratio/m785487968-fe65ff8817eb8d24c10c8d99) <!--- ![pipeline status](https://gitlab.fullserviceplatform.com/apis/distributor-api/badges/master/pipeline.svg) --> ![Maintenance](https://img.shields.io/badge/Maintained-yes-green.svg) ![Security Headers](https://img.shields.io/security-headers?url=https%3A%2F%2Fdistributor-api.prioticket.com%2Fv3.2%2Fdistributor%2Fsystem%2Fping) ## Note This product is in **General Availability**.    General Availability (GA) products and features are available to all customers, ready for production use, and covered by our SLAs. GA products and features are commonly available throughout the whole system and are fully implemented.  ## Description This document describes the Prio Distributor API, powered by a platform through which products can be distributed for services and venues. This API allows to obtain information about our inventory, check real-time availability and make bookings. Every booking will result in valid tickets with which users have access to the services and venues. Access is allowed when a valid passcode gets scanned and redeemed by the supplier.  The Prio Distributor API can be divided into four parts: * Content APIs: Exposes our product inventory such as Destinations, Categories and Products. * Availability API: Most products have have limited capacity or require you to select a certain time. The availability API returns those slots. * Reservation APIs: The reservation APIs allow you to block / reserve a ticket for a limited time so that you are able to obtain the payment from the guest. Furthermore it allows for managing a shoppingcart if needed. * Booking APIs: The booking APIs allow to confirm reservations, make direct bookings and retrieve your tickets / barcodes.  Additional APIs are: * Authentication APIs: Most API requests require valid credentials, these credentials can be obtained using the Auth endpoints. * Payment APIs: Most B2B resellers manage payments themselves and are afterwards invoiced for their purchases. In case you want to make use of the existing Payment Service Provider integrations of Prio you can use the Payment APIs. * Contact APIs: Advanced APIs to handle guest information, only applicable for recurring guests. * Notification APIs: Configure webhooks to support asynchronous bookings and get notified of external changes. * System APIs: Monitor API Health and Uptime. --- ## Functionalities Below you can find a complete list of API supported features. <details>       <summary>**Short List**</summary>  <table>   <tr>     <th>Basic</th>     <th>Advanced</th>   </tr>   <tr>     <td>Easy to implement and required for basic integration:        * Basic Product Types   * Admission Types   * Third Party Tickets   * Availability   * Capacity   * Currency   * Seasonal Pricing   * Basic Product Options   * Product Includes (Content)   * Product Excludes (Content)   * Duration   * Opening Times (Content)   * Locations (Content)   * Categories (Content)   * Highlights (Content)   * Cancellation Policy (Content)   * Turnout Time (Content)   * Booking Quantity Limit   * Dynamic reservation timeout   * Discounts   * Contact Details   * Pickup Points   * Multi language (Content)   * Product Type Quantity Limit   </td>     <td>Harder to integrate and less frequently used:        * Advanced Product Types   * Dynamic Pricing   * Quantity Pricing   * Daily Pricing   * Age Group Pricing   * Multi Currency   * Advanced Product Options   * Combi Products   * Cluster Products   * Addon Products   * Promocodes   * Custom Fields   * Tags (Content)   * Routes (Content)   * Cancellation Policy (Restriction)   * Group code (Code Setttings)   * Group Pricing   * Seating   * Partial Cancellation and Partial Refunds   * Advanced code settings   * Advanced filtering   * Prio PSP support   * Partner Sales   * Search     </td>   </tr> </table> </details>  <details>       <summary>**Full List**</summary>  <table>   <tr>     <th>Functionalities</th>     <th>Functionalities</th>     <th>Functionalities</th>   </tr>   <tr>     <td>          * Add booking (Amendment)   * Add Booking to Guest (Contact)   * Addon Products   * Admission Types   * Advanced code settings   * Advanced Contact Details   * Advanced Filters   * Advanced Graylog usage   * Advanced Product Options   * Advanced Product types (incl. custom)   * Advanced validation and error management   * Age Group Pricing   * Amendments   * Auto recovery and auto refund / cancellation   * Basic Discounts   * Basic Order Contacts   * Basic Product Options   * Basic Product Types   * Booking Quantity Limit   * Booking Versioning   * Capacity   * Categories (Content)   * Cluster Tickets   * Combi discount   * Combi Tickets   * Contact Amend   * Contact Create   * Contact Delete   * Contact Show   * Currency - Guest   * Currency Advanced (Base + New + Purchase)   * Currency Basic   * Currency Rates (Fixer.io)   * Custom Fields   * Cut-off Time   * Dependencies   * Display price   * Download e-ticket   * Duration   * Dynamic reservation timeout   * Edit guest details   * Elastic (Orders)   * Favorite products   * Filter on flags   * Flag Module   * From Price   * Group code   * Group pricing   * Guest details   * Highlights (Content)   </td>     <td>        * If-Modified-Since HTTP header (Caching)   * Itenaries   * Locations (Content)   * Manual payment   * Max - Min Restrictions   * Multi language (Content)   * Multiple Account Level Login (Reseller, Distributor, Supplier)   * Multiple Barcode Types   * Multiple contacts linked to order   * Notifications   * Opening Times (Content)   * Order Options   * Order Summary   * Orders API   * Overbooking   * Pagination   * Paid vs Unpaid bookings   * Partial Cancellation (Booking)   * Partial Cancellation (Transaction)   * Partial Refunds   * Partner Discount   * Partner Fees   * Partner Sales   * Past Date Bookings   * Payment - Pay Later (Cashier / Guest)   * Payment API   * Payment Service Provider support   * Pick up points   * Price result check   * Print voucher per page   * Product Availability   * Product Categories (Main and Custom)   * Product Excludes (Content)   * Product Includes (Content)   * Product List / Detail API   * Product Locations   * Product Routes    * Product Type Classes   * Promocodes   * Quantity Pricing   * Refunds   * Regular Cancellation   * Reservations API   * Routes (Content)   * Seasonal Pricing   * Seating   * Send voucher to email   * Show booking listing   * Show payment status per booking   * Show redeemed vs unredeemed bookings   </td>     <td>        * Show sub total   * Show total price   * Skip payment when amount is zero   * Tags (Content)   * Tax breakdown   * Third Party Tickets   * Travel Date Required   * Travel Date, Redemption Date, Invoice Date sort   * Turnout Time (Content)   * Webhooks   </td>   </tr> </table> </details>  ---  ## Getting Started ### Integration Process    To facilitate our partners in the best possible way we recommend to follow our integration steps and the process as described below.  <details>       <summary>**Integration Stages**</summary>    **Pre-development stage**    1. Review our documentation.      2. Fill in our \"Prio Partner Integration Questionnaire\" and finalize the scope of the integration.      The \"Prio Partner Integration Questionnaire\" will be used to guide your implementation to the Prio system. It contains basic information on your company, integration use-cases, scoping, process explanations and more.       We highly recommended scoping your requirements list with your integration manager. This API offers an extensive list of possibilities and exceptions. Depending on your product setup, you are not required to implement each and every feature. Partial implementation of this API is possible due to a limited number of mandatory fields as well as multiple alternative request / response formats.        <details>       <summary>**Why scoping matters**</summary>    Integrating into the Prioticket platform can take several days to many months. This API is layered to support each and every feature of the platform while maintaining simplicity of use.   It is important to know beforehand which features you would like to implement and prevent unnecessary research and development for functionalities that either your system does not support or would not be used by your client.       For example, a valid order can be made in our system with less than 8 values and a single endpoint:        ```json    {       \"order\": {           \"order_distributor_id\": \"{{order_distributor_id}}\",           \"order_language\": \"{{order_language}}\",           \"order_external_reference\": \"{{order_external_reference}}\",           \"order_bookings\": [               {                   \"booking_option_type\": \"DIRECT_BOOKING\",                   \"product_id\": \"{product_id}\",                   \"product_type_details\": [                       {                           \"product_type_id\": \"{{product_type_id}}\",                           \"product_type_count\": \"{{product_type_count}}\"                       }                   ]               }           ],           \"order_contact\": {               \"contact_email\": \"{{contact_email}}\"           }       }   }      ```  </details>       **Warning:** Do not start implementing or analyzing **advanced** functionalities without consulting your account manager first.  ---    **Development stage**    3. Partner starts implementing the API according to agreed scope.  ---    **End-to-end testing stage**    4. Partner notifies the API Verification Team (<api-verification@prioticket.com>) who will initiate the end-to-end verification process with the partner.  ---    **Mapping stage**    5. Prio and Partner create mutual product mapping sheet. (Optional)  ---    **Launch and monitoring stage**     6. Prio provides production credentials.      7. One or more test orders are made on production to reassure third-party connectivity.     8. Partner is monitored and added to the Marketplace.   </details>    ---      ### Postman  [Postman](https://www.getpostman.com/) is a very popular tool for API development. Luckily Postman now has support for OpenAPI, which means you can import this whole API as a collection in a few steps. For more information check: [Working with OpenAPI](https://learning.getpostman.com/docs/postman/collections/working_with_openAPI/). Our API definition can be found [here](https://swagger.prioticket.com/definitions/Prio-Distributor-API/v35/distributor.json).    --- ## Formats    ### General     + All data should be in the [UTF-8](https://en.wikipedia.org/wiki/UTF-8) character set.     + Currency codes are sent in the [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217) format.     + Language is defined in the [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.     + Amounts and values should follow the international standard. Rounding might be required.     + All data fields are case-sensitive.     + Optional parameters that are not set or left empty will not be returned in   the response. All optional parameters are nullable to support serialization.    ---    ### Date / Time    Points in time are expressed as strings using the [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) datetime format. We always expect the local time with its UTC offset.      <details>       <summary>**Examples**</summary>      Burj Khalifa entrance Ticket in Dubai for 12th of May 2016 at 14:00 (local time).      <table>   <tr>     <th>Expected</th>     <th>Not expected</th>   </tr>   <tr>       <td>                '2020-05-12T14:00:00+04:00'                  </td>       <td>            '2020-05-12T10:00:00+08:00'     '2020-05-12T18:00:00+00:00'              </td>   </tr>   </table>      > Note 1: Although the above examples express the same point in time,      we consider only the first one as valid because we always require the date and time in reference to the location of the activity. <br><br>   > Note 2: Although mentioned in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt), due to technical restrictions we do not support the Z suffix. Please send `+00:00` to denote a zero UTC offset instead. <br><br>   > Note 3: All offsets are automatically adjusted based on daylight saving time (DST).    </details>    --- ### Headers      #### Authorization      To allow secure data transmission between Suppliers and Distributors all API   requests require HTTPS.    The API Key Token information for the sandbox and production environment will be sent   in a separate mail.<br>    If the request lacks any authentication information (e.g., the client    was unaware that authentication is necessary or attempted using an    unsupported authentication method), the **resource server** should not    include an error code or other error information.    `Authorization: Bearer JWT Token`<br>       ---    #### Idempotency      The Prio API supports [idempotency](https://tools.ietf.org/html/rfc7231#section-4.2.2), allowing you to retry a request multiple times while only performing the action once. This helps avoid unwanted duplication in case of failures and retries. For example, in the case of a timeout error, it is possible to safely retry sending the same API Create Order call multiple times with the guarantee that the order will only be created once.    This API supports idempotency on POST requests (other request types such as GET, DELETE and PUT are idempotent by definition).       ---    #### Content-Type    The `Content-Type` should be `application/json`.      ---      #### Application Info     Application info consists of data elements that identify the software that you use for making requests to the Prio platform. When you include application info in your requests, we can analyze and troubleshoot more efficiently, and provide a better support experience.      Application info includes:      * `App-Name` - Name of your application.   * `App-Version` - Version of your application.   * `App-Machine-ID` - Identifier of your machine.   * `App-Flavor` - Flavor of your application.   * `App-Reference` - Reference of your application.     Above values can be sent in the headers of any request and we recommend sending them if you have multiple applications directly interacting with this API. Custom headers can be sent as well, as long as they have the \"App-\" prefix attached.      ---       ## Product Configuration     ### Product types and classes    Each product contains product types. These product types can offer aged based ticketing (such as Adult and Child), but also provide a variety of other flexible product variations such as group pricing, business and economy seating or different car configurations.      Because some products might behave different from others, each product type is categorized within a product class; a group of products that behaves similarly.       <details>       <summary>**Product Definitions**</summary>        * Class Standard:          Product types in the standard class are the most common and are supported by almost all systems. These types will always be age-restricted.        * `ADULT` - Adult.          * `CHILD` - Child.          * `SENIOR` - Senior.          * `YOUTH` - Youth.              * `INFANT` - Infant.        * Class Individual:        Product types in the individual class are less common and therefore have fewer supported systems. These types will never be age-restricted.          * `PERSON` - Person.          * `STUDENT` - Student.          * `RESIDENT` - Resident.          * `MILITARY` - Military.          * `IMPAIRED` - Impaired.      * Class Item:        Product types in the item class do not refer to actual persons, instead they could, for example, be packages (Regular, Silver, Diamond), objects (Merchandise, private tours), a type of event, class identifier (Economy, Business) and much more.        * `ITEM` - Item.        * Class Group:         Product types in the group class always consist of multiple persons. It can, for example, be a family of 2 Adults and 2 Childs.          * `GROUP` - Group.          * `FAMILY` - Family.        * Class Custom:        Product types in the custom class are completely dynamic and therefore require explicit mapping with external systems. They do not return as `CUSTOM`, instead they can take any form.          * `CUSTOM` - Custom.        </details>      ---      ### Product admission types Some products require the guest to select a day or time during the booking process. Depending on the type of admission this calendar / datetime picker can have several restrictions.  Below you will find the most common types of admission.   <details>       <summary>**Admission Types**</summary>  + `TIME_PERIOD` - Customers can arrive at any time between the start (`availability_from_date_time`) and end time (`availability_to_date_time`) of the availability slot. Multiple periods in a single day should be expected.   Therefore a date- and timepicker should be shown.    Examples:    * An amusement park which has two opening periods, for example, a morning shift (09:00 - 12:00) and an afternoon shift (14:00 - 22:00).    * An afternoon admission to an amusement park that can be used from  1pm to 9pm.     ---   + `TIME_DATE` - Variation on `TIME_PERIOD`, whereas only a single period exists in a day. It is not required to choose between different times within a day, therefore only a datepicker is required.   Note that in case the slot includes midnight (two or more days), the day from which the `availability_from_date_time` originated should take precedence.    Examples:      * A museum ticket that can be used during any time on the purchase date.   * A public transport ticket which is valid for the whole day.      ---  + `TIME_POINT` - Customers are required to be present at the start time of the availability slot but can leave any time they want.    Examples:     * In the museum admission scenario, a timed entry ticket    for 10am requires the user to be at the museum at 10am. The start time of    availability slots for this service represents the designated entry    time. The end time, however, is used solely as a key to identify the    availability slot for booking.        ---     + `TIME_OPEN` - Customers can arrive at any time. Availablity is not applicable.    Examples:      * A museum entry voucher which can be used anytime during the year.      ---    + `TIME_SLOT` - Customers are required to be present at the start time of the availability slot, and the service is expected to finish at the end time of the slot.        Examples:      * A tour that starts at 9am that requires all attendees to arrive        at the start time, and returns at around 12pm.     * A haircut reservation at 3pm on Saturday that will take approximately      30 minutes.     * A fitness class from 6pm to 8pm.      </details>      ---     ### Pricing        Different pricing configurations can be set depending on the product type (`product_type`), age group (`product_type_age`), booking quantity (`product_quantity_pricing`), season (`product_seasonal_pricing`), daily pricing (`product_daily_pricing`) and custom / time-based pricing (`product_dynamic_pricing`).      All prices are given per `product_type`, per season (`product_seasonal_pricing:true`).   Every possible variation to this price is given as either a discount or surcharge.   The newly calculated price is returned in both the Reservation and Order API.      TIP: To check whether you have implemented all logic correctly, it is advised that you cross-check the returned prices in the API with your own.      ---      ### Translations      This API supports multilingual content.      All translatable fields can be found inside the `product_content` object.      Normally the returned content would default to the `product_default_language`, which is commonly English. Would you wish to retrieve more languages, those supported for that specific product can be found inside `product_content_languages`.      One of the language codes in the above array can then be sent within the original request in the URL as `&product_content_language={language_code}`.      ---      ### Pagination      Please be aware that some datasets can be bigger than others. The size of your inventory varies depending on your catalogue setup.   Pagination is supported on endpoints for which potentially thousands of records can be expected. To retrieve the full dataset we recommend implementing the paging rules.      This only applies to partners which process considerable volume.      ---  ## Errors  The API will return the appropriate [HTTP status code](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes) for every request and this could therefore be used to categorize most common types of errors (e.g `400`/`401`/`402`/`403`/`404`/`405`/`406`/`409`/`418`/`422`/`429`/`500`/`501`/`502`/`503`/`504` are supported).  Additionally, the `error`, `error_description` and `errors` field can be consulted for more detailed information on the problem. * Generally in case of a HTTP 400 status the request is missing a required parameter, includes an unsupported parameter or parameter value, repeats the same parameter, uses more than one method for including an access token, or is otherwise malformed.     Most HTTP 400 errors are returned with the same error code (`INVALID_REQUEST`) and include more detailed messages within the `errors` array.   * A HTTP 422 (Unprocessable Entity) is most likely caused by a semantic (logical) error and indicates a problem within your integration. > Please note that in the future more specific error- and HTTP status codes might be added. Therefore consider all status codes between HTTP 200 and HTTP 300 as successfull responses, and every HTTP 400+/500+ as errors. <br><br> >  > As our API has over 1000+ unique error codes (grouped by HTTP status). We discourage implementing individual errors on your customer front-end interface and suggest a catch-all clause for each HTTP status code instead. --- ## Using the interactive documentation This is an interactive documentation which allows you to experience the API first hand without writing any code. To start calling Endpoints, first \"Authorize\" yourself by using the button below.  Fill in the default sandbox credentials or the credentials received by your Account Manager.  Default Sandbox Credentials:  * API Key: *Currently the API Key is only enforced on the Production Environment.* * client_id: `demo-distributor@prioticket.com` * client_secret: `NpEZ&x4QBQV6#L&v` * distributor_id: `501`  After the authorization is successful, all subsequent calls will automatically contain the Bearer token.  --- ### OpenAPI Specification #### Read-Only and Write-Only Properties Please note that some schemas are being reused multiple times, across endpoints but also between requests and responses. `readOnly` properties are included in responses but not in requests, and `writeOnly` properties may be sent in requests but not in responses. Furthermore because all response types are JSON, the order in which the parameters are sent is not relevant and for documentation purposes might change over time.    More info on this topic can be found in the [Open API Specification](https://swagger.io/docs/specification/data-models/data-types/)    #### Deprecation and upcoming changes Due to limitations on our interactive documentation we list current unavailable methods as deprecated. Note that these are not actually deprecated, instead they will be added in the future. You can safely ignore these parameters as they affect either new or obsolete functionality for services that do not apply nor are within the scope for your current integration.  Furthermore, in case you are viewing the latest version available, continuous amendments to both the documentation and the API can be expected. This means we are constantly adding new functionalities and parameters to the same API version, as long as these are deemed non-breaking and backwards compatible. In case any breaking changes need to be made, a new version will be introduced. Please note that the syntax of upcoming (not yet released) functionalities might be subject to change. #### Advanced functionality Across the documentation **Advanced Functionality** can be found. This type of functionality requires a deep understanding of our system and implementation is not required to fully integrate on our API. Contact your account manager in case you would like to implement advanced functionality. #### Libraries Because our API definition is publicly available you can use several open-source tools to generate client libraries. Please note that these libraries are auto-generated and should be considered Alpha releases. Backwards compatibility is not guaranteed and as this is a third-party tool we can not offer any assistance.   In case you find using a SDK helpful we recommend to use the [Open API Generator](https://openapi-generator.tech/).  --- <b>PrioTicket Confidential</b>    This documentation is protected by law from any form of duplication unless prior permission is obtained from the officers of PrioTicket.  ---
 *
 * The version of the OpenAPI document: 3.5.0
 * Contact: api-support@prioticket.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace PrioTicket\DistributorAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use PrioTicket\DistributorAPI\ApiException;
use PrioTicket\DistributorAPI\Configuration;
use PrioTicket\DistributorAPI\HeaderSelector;
use PrioTicket\DistributorAPI\ObjectSerializer;

/**
 * ProductsApi Class Doc Comment
 *
 * @category Class
 * @package  PrioTicket\DistributorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getCurrencyRates
     *
     * List Product Currency Rates
     *
     * @param  \DateTime $currency_date [FILTER] on &#x60;currency_date&#x60;. (required)
     * @param  string $currency_base [FILTER] on &#x60;currency_base&#x60;. (optional)
     * @param  string $currency_type [CONFIG] show currency rates based on sales or purchase price. (optional) (deprecated)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\DistributorCurrencyRatesResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function getCurrencyRates($currency_date, $currency_base = null, $currency_type = null, $if_modified_since = null)
    {
        list($response) = $this->getCurrencyRatesWithHttpInfo($currency_date, $currency_base, $currency_type, $if_modified_since);
        return $response;
    }

    /**
     * Operation getCurrencyRatesWithHttpInfo
     *
     * List Product Currency Rates
     *
     * @param  \DateTime $currency_date [FILTER] on &#x60;currency_date&#x60;. (required)
     * @param  string $currency_base [FILTER] on &#x60;currency_base&#x60;. (optional)
     * @param  string $currency_type [CONFIG] show currency rates based on sales or purchase price. (optional) (deprecated)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\DistributorCurrencyRatesResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCurrencyRatesWithHttpInfo($currency_date, $currency_base = null, $currency_type = null, $if_modified_since = null)
    {
        $request = $this->getCurrencyRatesRequest($currency_date, $currency_base, $currency_type, $if_modified_since);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\DistributorCurrencyRatesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\DistributorCurrencyRatesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\DistributorCurrencyRatesResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\DistributorCurrencyRatesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 501:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCurrencyRatesAsync
     *
     * List Product Currency Rates
     *
     * @param  \DateTime $currency_date [FILTER] on &#x60;currency_date&#x60;. (required)
     * @param  string $currency_base [FILTER] on &#x60;currency_base&#x60;. (optional)
     * @param  string $currency_type [CONFIG] show currency rates based on sales or purchase price. (optional) (deprecated)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCurrencyRatesAsync($currency_date, $currency_base = null, $currency_type = null, $if_modified_since = null)
    {
        return $this->getCurrencyRatesAsyncWithHttpInfo($currency_date, $currency_base, $currency_type, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCurrencyRatesAsyncWithHttpInfo
     *
     * List Product Currency Rates
     *
     * @param  \DateTime $currency_date [FILTER] on &#x60;currency_date&#x60;. (required)
     * @param  string $currency_base [FILTER] on &#x60;currency_base&#x60;. (optional)
     * @param  string $currency_type [CONFIG] show currency rates based on sales or purchase price. (optional) (deprecated)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCurrencyRatesAsyncWithHttpInfo($currency_date, $currency_base = null, $currency_type = null, $if_modified_since = null)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\DistributorCurrencyRatesResponse';
        $request = $this->getCurrencyRatesRequest($currency_date, $currency_base, $currency_type, $if_modified_since);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCurrencyRates'
     *
     * @param  \DateTime $currency_date [FILTER] on &#x60;currency_date&#x60;. (required)
     * @param  string $currency_base [FILTER] on &#x60;currency_base&#x60;. (optional)
     * @param  string $currency_type [CONFIG] show currency rates based on sales or purchase price. (optional) (deprecated)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCurrencyRatesRequest($currency_date, $currency_base = null, $currency_type = null, $if_modified_since = null)
    {
        // verify the required parameter 'currency_date' is set
        if ($currency_date === null || (is_array($currency_date) && count($currency_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $currency_date when calling getCurrencyRates'
            );
        }

        $resourcePath = '/products/currency_rates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($currency_date !== null) {
            if('form' === 'form' && is_array($currency_date)) {
                foreach($currency_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['currency_date'] = $currency_date;
            }
        }
        // query params
        if ($currency_base !== null) {
            if('form' === 'form' && is_array($currency_base)) {
                foreach($currency_base as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['currency_base'] = $currency_base;
            }
        }
        // query params
        if ($currency_type !== null) {
            if('form' === 'form' && is_array($currency_type)) {
                foreach($currency_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['currency_type'] = $currency_type;
            }
        }

        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProduct
     *
     * List Product Details
     *
     * @param  string $product_id Unique identifier for the product assigned by Prio. (required)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_content_language Language code to request language specific product data. If left empty or language is not available (not included in &#x60;product_content_languages&#x60;), the response will be in the default language i.e. English. The actual language returned can also be found inside the &#x60;Content-Language&#x60; header. (optional)
     * @param  int $product_version Product Version / Revision number. By default the latest revision will be returned.  If set, the &#x60;cache&#x60; value will be ignored. (optional) (deprecated)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\ProductDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function getProduct($product_id, $distributor_id = null, $product_content_language = null, $product_version = null, $cache = 'true', $if_modified_since = null)
    {
        list($response) = $this->getProductWithHttpInfo($product_id, $distributor_id, $product_content_language, $product_version, $cache, $if_modified_since);
        return $response;
    }

    /**
     * Operation getProductWithHttpInfo
     *
     * List Product Details
     *
     * @param  string $product_id Unique identifier for the product assigned by Prio. (required)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_content_language Language code to request language specific product data. If left empty or language is not available (not included in &#x60;product_content_languages&#x60;), the response will be in the default language i.e. English. The actual language returned can also be found inside the &#x60;Content-Language&#x60; header. (optional)
     * @param  int $product_version Product Version / Revision number. By default the latest revision will be returned.  If set, the &#x60;cache&#x60; value will be ignored. (optional) (deprecated)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\ProductDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductWithHttpInfo($product_id, $distributor_id = null, $product_content_language = null, $product_version = null, $cache = 'true', $if_modified_since = null)
    {
        $request = $this->getProductRequest($product_id, $distributor_id, $product_content_language, $product_version, $cache, $if_modified_since);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\ProductDetailResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ProductDetailResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\ProductDetailResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ProductDetailResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 501:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductAsync
     *
     * List Product Details
     *
     * @param  string $product_id Unique identifier for the product assigned by Prio. (required)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_content_language Language code to request language specific product data. If left empty or language is not available (not included in &#x60;product_content_languages&#x60;), the response will be in the default language i.e. English. The actual language returned can also be found inside the &#x60;Content-Language&#x60; header. (optional)
     * @param  int $product_version Product Version / Revision number. By default the latest revision will be returned.  If set, the &#x60;cache&#x60; value will be ignored. (optional) (deprecated)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductAsync($product_id, $distributor_id = null, $product_content_language = null, $product_version = null, $cache = 'true', $if_modified_since = null)
    {
        return $this->getProductAsyncWithHttpInfo($product_id, $distributor_id, $product_content_language, $product_version, $cache, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductAsyncWithHttpInfo
     *
     * List Product Details
     *
     * @param  string $product_id Unique identifier for the product assigned by Prio. (required)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_content_language Language code to request language specific product data. If left empty or language is not available (not included in &#x60;product_content_languages&#x60;), the response will be in the default language i.e. English. The actual language returned can also be found inside the &#x60;Content-Language&#x60; header. (optional)
     * @param  int $product_version Product Version / Revision number. By default the latest revision will be returned.  If set, the &#x60;cache&#x60; value will be ignored. (optional) (deprecated)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductAsyncWithHttpInfo($product_id, $distributor_id = null, $product_content_language = null, $product_version = null, $cache = 'true', $if_modified_since = null)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\ProductDetailResponse';
        $request = $this->getProductRequest($product_id, $distributor_id, $product_content_language, $product_version, $cache, $if_modified_since);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProduct'
     *
     * @param  string $product_id Unique identifier for the product assigned by Prio. (required)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_content_language Language code to request language specific product data. If left empty or language is not available (not included in &#x60;product_content_languages&#x60;), the response will be in the default language i.e. English. The actual language returned can also be found inside the &#x60;Content-Language&#x60; header. (optional)
     * @param  int $product_version Product Version / Revision number. By default the latest revision will be returned.  If set, the &#x60;cache&#x60; value will be ignored. (optional) (deprecated)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProductRequest($product_id, $distributor_id = null, $product_content_language = null, $product_version = null, $cache = 'true', $if_modified_since = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling getProduct'
            );
        }

        $resourcePath = '/products/{product_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($distributor_id !== null) {
            if('form' === 'form' && is_array($distributor_id)) {
                foreach($distributor_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['distributor_id'] = $distributor_id;
            }
        }
        // query params
        if ($product_content_language !== null) {
            if('form' === 'form' && is_array($product_content_language)) {
                foreach($product_content_language as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_content_language'] = $product_content_language;
            }
        }
        // query params
        if ($product_version !== null) {
            if('form' === 'form' && is_array($product_version)) {
                foreach($product_version as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_version'] = $product_version;
            }
        }
        // query params
        if ($cache !== null) {
            if('form' === 'form' && is_array($cache)) {
                foreach($cache as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['cache'] = $cache;
            }
        }

        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }

        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'product_id' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProductAvailability
     *
     * List Product Availabilities
     *
     * @param  string $product_id Unique identifier for the product assigned by Prio. (required)
     * @param  \DateTime $from_date [FILTER] From which date availability is requested. If supplied with &#x60;to_date&#x60; , then availability request is for a date range.  If supplied without &#x60;to_date&#x60;, then for a single date availability is requested. (required)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  \DateTime $to_date [FILTER] Till which date availability is requested. If this is empty, availability will be searched for the given &#x60;from_date&#x60; only. (optional)
     * @param  string $include_disabled [FILTER] Include disabled / closed (&#x60;availability_active:false&#x60;) entries. (optional, default to 'false')
     * @param  string $availability_capacity_id [FILTER] on &#x60;availability_capacity_id&#x60;. (optional)
     * @param  int $spots_open_min [FILTER] The minimum remaining &#x60;availability_spots_open&#x60;. (optional)
     * @param  int $sub_products_depth [FILTER] The iteration depth of the included entries of the sub-products in the response. This will not apply to sub-products which have shared capacity linked to the main product.  Example Setup: &#x60;&#x60;&#x60; Product 101 (Main)   Product 201 (Sub)     Product 301 (Nested)     Product 302 (Nested)   Product 202 (Sub)     Product 401 (Nested)     Product 402 (Nested) &#x60;&#x60;&#x60; * &#x60;sub_products_depth:0&#x60; will return Product 101. * &#x60;sub_products_depth:1&#x60; will return Product 101, 201 and 202. * &#x60;sub_products_depth:2&#x60; will return Product 101, 201, 202, 301, 302, 401 and 402. (optional, default to 0)
     * @param  int $party_size [FILTER] The party size that can be accommodated during this time slot. Only applicable for selected merchants. (optional) (deprecated)
     * @param  \DateTime $availability_modified [FILTER] Only show entries modified after the given date. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\AvailabilitiesListResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function getProductAvailability($product_id, $from_date, $distributor_id = null, $to_date = null, $include_disabled = 'false', $availability_capacity_id = null, $spots_open_min = null, $sub_products_depth = 0, $party_size = null, $availability_modified = null)
    {
        list($response) = $this->getProductAvailabilityWithHttpInfo($product_id, $from_date, $distributor_id, $to_date, $include_disabled, $availability_capacity_id, $spots_open_min, $sub_products_depth, $party_size, $availability_modified);
        return $response;
    }

    /**
     * Operation getProductAvailabilityWithHttpInfo
     *
     * List Product Availabilities
     *
     * @param  string $product_id Unique identifier for the product assigned by Prio. (required)
     * @param  \DateTime $from_date [FILTER] From which date availability is requested. If supplied with &#x60;to_date&#x60; , then availability request is for a date range.  If supplied without &#x60;to_date&#x60;, then for a single date availability is requested. (required)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  \DateTime $to_date [FILTER] Till which date availability is requested. If this is empty, availability will be searched for the given &#x60;from_date&#x60; only. (optional)
     * @param  string $include_disabled [FILTER] Include disabled / closed (&#x60;availability_active:false&#x60;) entries. (optional, default to 'false')
     * @param  string $availability_capacity_id [FILTER] on &#x60;availability_capacity_id&#x60;. (optional)
     * @param  int $spots_open_min [FILTER] The minimum remaining &#x60;availability_spots_open&#x60;. (optional)
     * @param  int $sub_products_depth [FILTER] The iteration depth of the included entries of the sub-products in the response. This will not apply to sub-products which have shared capacity linked to the main product.  Example Setup: &#x60;&#x60;&#x60; Product 101 (Main)   Product 201 (Sub)     Product 301 (Nested)     Product 302 (Nested)   Product 202 (Sub)     Product 401 (Nested)     Product 402 (Nested) &#x60;&#x60;&#x60; * &#x60;sub_products_depth:0&#x60; will return Product 101. * &#x60;sub_products_depth:1&#x60; will return Product 101, 201 and 202. * &#x60;sub_products_depth:2&#x60; will return Product 101, 201, 202, 301, 302, 401 and 402. (optional, default to 0)
     * @param  int $party_size [FILTER] The party size that can be accommodated during this time slot. Only applicable for selected merchants. (optional) (deprecated)
     * @param  \DateTime $availability_modified [FILTER] Only show entries modified after the given date. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\AvailabilitiesListResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductAvailabilityWithHttpInfo($product_id, $from_date, $distributor_id = null, $to_date = null, $include_disabled = 'false', $availability_capacity_id = null, $spots_open_min = null, $sub_products_depth = 0, $party_size = null, $availability_modified = null)
    {
        $request = $this->getProductAvailabilityRequest($product_id, $from_date, $distributor_id, $to_date, $include_disabled, $availability_capacity_id, $spots_open_min, $sub_products_depth, $party_size, $availability_modified);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\AvailabilitiesListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\AvailabilitiesListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\AvailabilitiesListResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\AvailabilitiesListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 501:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductAvailabilityAsync
     *
     * List Product Availabilities
     *
     * @param  string $product_id Unique identifier for the product assigned by Prio. (required)
     * @param  \DateTime $from_date [FILTER] From which date availability is requested. If supplied with &#x60;to_date&#x60; , then availability request is for a date range.  If supplied without &#x60;to_date&#x60;, then for a single date availability is requested. (required)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  \DateTime $to_date [FILTER] Till which date availability is requested. If this is empty, availability will be searched for the given &#x60;from_date&#x60; only. (optional)
     * @param  string $include_disabled [FILTER] Include disabled / closed (&#x60;availability_active:false&#x60;) entries. (optional, default to 'false')
     * @param  string $availability_capacity_id [FILTER] on &#x60;availability_capacity_id&#x60;. (optional)
     * @param  int $spots_open_min [FILTER] The minimum remaining &#x60;availability_spots_open&#x60;. (optional)
     * @param  int $sub_products_depth [FILTER] The iteration depth of the included entries of the sub-products in the response. This will not apply to sub-products which have shared capacity linked to the main product.  Example Setup: &#x60;&#x60;&#x60; Product 101 (Main)   Product 201 (Sub)     Product 301 (Nested)     Product 302 (Nested)   Product 202 (Sub)     Product 401 (Nested)     Product 402 (Nested) &#x60;&#x60;&#x60; * &#x60;sub_products_depth:0&#x60; will return Product 101. * &#x60;sub_products_depth:1&#x60; will return Product 101, 201 and 202. * &#x60;sub_products_depth:2&#x60; will return Product 101, 201, 202, 301, 302, 401 and 402. (optional, default to 0)
     * @param  int $party_size [FILTER] The party size that can be accommodated during this time slot. Only applicable for selected merchants. (optional) (deprecated)
     * @param  \DateTime $availability_modified [FILTER] Only show entries modified after the given date. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductAvailabilityAsync($product_id, $from_date, $distributor_id = null, $to_date = null, $include_disabled = 'false', $availability_capacity_id = null, $spots_open_min = null, $sub_products_depth = 0, $party_size = null, $availability_modified = null)
    {
        return $this->getProductAvailabilityAsyncWithHttpInfo($product_id, $from_date, $distributor_id, $to_date, $include_disabled, $availability_capacity_id, $spots_open_min, $sub_products_depth, $party_size, $availability_modified)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductAvailabilityAsyncWithHttpInfo
     *
     * List Product Availabilities
     *
     * @param  string $product_id Unique identifier for the product assigned by Prio. (required)
     * @param  \DateTime $from_date [FILTER] From which date availability is requested. If supplied with &#x60;to_date&#x60; , then availability request is for a date range.  If supplied without &#x60;to_date&#x60;, then for a single date availability is requested. (required)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  \DateTime $to_date [FILTER] Till which date availability is requested. If this is empty, availability will be searched for the given &#x60;from_date&#x60; only. (optional)
     * @param  string $include_disabled [FILTER] Include disabled / closed (&#x60;availability_active:false&#x60;) entries. (optional, default to 'false')
     * @param  string $availability_capacity_id [FILTER] on &#x60;availability_capacity_id&#x60;. (optional)
     * @param  int $spots_open_min [FILTER] The minimum remaining &#x60;availability_spots_open&#x60;. (optional)
     * @param  int $sub_products_depth [FILTER] The iteration depth of the included entries of the sub-products in the response. This will not apply to sub-products which have shared capacity linked to the main product.  Example Setup: &#x60;&#x60;&#x60; Product 101 (Main)   Product 201 (Sub)     Product 301 (Nested)     Product 302 (Nested)   Product 202 (Sub)     Product 401 (Nested)     Product 402 (Nested) &#x60;&#x60;&#x60; * &#x60;sub_products_depth:0&#x60; will return Product 101. * &#x60;sub_products_depth:1&#x60; will return Product 101, 201 and 202. * &#x60;sub_products_depth:2&#x60; will return Product 101, 201, 202, 301, 302, 401 and 402. (optional, default to 0)
     * @param  int $party_size [FILTER] The party size that can be accommodated during this time slot. Only applicable for selected merchants. (optional) (deprecated)
     * @param  \DateTime $availability_modified [FILTER] Only show entries modified after the given date. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductAvailabilityAsyncWithHttpInfo($product_id, $from_date, $distributor_id = null, $to_date = null, $include_disabled = 'false', $availability_capacity_id = null, $spots_open_min = null, $sub_products_depth = 0, $party_size = null, $availability_modified = null)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\AvailabilitiesListResponse';
        $request = $this->getProductAvailabilityRequest($product_id, $from_date, $distributor_id, $to_date, $include_disabled, $availability_capacity_id, $spots_open_min, $sub_products_depth, $party_size, $availability_modified);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProductAvailability'
     *
     * @param  string $product_id Unique identifier for the product assigned by Prio. (required)
     * @param  \DateTime $from_date [FILTER] From which date availability is requested. If supplied with &#x60;to_date&#x60; , then availability request is for a date range.  If supplied without &#x60;to_date&#x60;, then for a single date availability is requested. (required)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  \DateTime $to_date [FILTER] Till which date availability is requested. If this is empty, availability will be searched for the given &#x60;from_date&#x60; only. (optional)
     * @param  string $include_disabled [FILTER] Include disabled / closed (&#x60;availability_active:false&#x60;) entries. (optional, default to 'false')
     * @param  string $availability_capacity_id [FILTER] on &#x60;availability_capacity_id&#x60;. (optional)
     * @param  int $spots_open_min [FILTER] The minimum remaining &#x60;availability_spots_open&#x60;. (optional)
     * @param  int $sub_products_depth [FILTER] The iteration depth of the included entries of the sub-products in the response. This will not apply to sub-products which have shared capacity linked to the main product.  Example Setup: &#x60;&#x60;&#x60; Product 101 (Main)   Product 201 (Sub)     Product 301 (Nested)     Product 302 (Nested)   Product 202 (Sub)     Product 401 (Nested)     Product 402 (Nested) &#x60;&#x60;&#x60; * &#x60;sub_products_depth:0&#x60; will return Product 101. * &#x60;sub_products_depth:1&#x60; will return Product 101, 201 and 202. * &#x60;sub_products_depth:2&#x60; will return Product 101, 201, 202, 301, 302, 401 and 402. (optional, default to 0)
     * @param  int $party_size [FILTER] The party size that can be accommodated during this time slot. Only applicable for selected merchants. (optional) (deprecated)
     * @param  \DateTime $availability_modified [FILTER] Only show entries modified after the given date. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProductAvailabilityRequest($product_id, $from_date, $distributor_id = null, $to_date = null, $include_disabled = 'false', $availability_capacity_id = null, $spots_open_min = null, $sub_products_depth = 0, $party_size = null, $availability_modified = null)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null || (is_array($product_id) && count($product_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product_id when calling getProductAvailability'
            );
        }
        // verify the required parameter 'from_date' is set
        if ($from_date === null || (is_array($from_date) && count($from_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $from_date when calling getProductAvailability'
            );
        }



        $resourcePath = '/products/{product_id}/availability';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($distributor_id !== null) {
            if('form' === 'form' && is_array($distributor_id)) {
                foreach($distributor_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['distributor_id'] = $distributor_id;
            }
        }
        // query params
        if ($from_date !== null) {
            if('form' === 'form' && is_array($from_date)) {
                foreach($from_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['from_date'] = $from_date;
            }
        }
        // query params
        if ($to_date !== null) {
            if('form' === 'form' && is_array($to_date)) {
                foreach($to_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['to_date'] = $to_date;
            }
        }
        // query params
        if ($include_disabled !== null) {
            if('form' === 'form' && is_array($include_disabled)) {
                foreach($include_disabled as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include_disabled'] = $include_disabled;
            }
        }
        // query params
        if ($availability_capacity_id !== null) {
            if('form' === 'form' && is_array($availability_capacity_id)) {
                foreach($availability_capacity_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['availability_capacity_id'] = $availability_capacity_id;
            }
        }
        // query params
        if ($spots_open_min !== null) {
            if('form' === 'form' && is_array($spots_open_min)) {
                foreach($spots_open_min as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['spots_open_min'] = $spots_open_min;
            }
        }
        // query params
        if ($sub_products_depth !== null) {
            if('form' === 'form' && is_array($sub_products_depth)) {
                foreach($sub_products_depth as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['sub_products_depth'] = $sub_products_depth;
            }
        }
        // query params
        if ($party_size !== null) {
            if('form' === 'form' && is_array($party_size)) {
                foreach($party_size as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['party_size'] = $party_size;
            }
        }
        // query params
        if ($availability_modified !== null) {
            if('form' === 'form' && is_array($availability_modified)) {
                foreach($availability_modified as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['availability_modified'] = $availability_modified;
            }
        }


        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                '{' . 'product_id' . '}',
                ObjectSerializer::toPathValue($product_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProductCategories
     *
     * List Product Categories
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string[] $category_id [FILTER] on categories (&#x60;category_id&#x60;). (optional)
     * @param  string[] $category_type [FILTER] on Category Type (&#x60;category_type&#x60;). (optional)
     * @param  string $category_search_query [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned. (optional) (deprecated)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\DistributorProductCategoriesResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function getProductCategories($distributor_id = null, $category_id = null, $category_type = null, $category_search_query = null, $if_modified_since = null)
    {
        list($response) = $this->getProductCategoriesWithHttpInfo($distributor_id, $category_id, $category_type, $category_search_query, $if_modified_since);
        return $response;
    }

    /**
     * Operation getProductCategoriesWithHttpInfo
     *
     * List Product Categories
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string[] $category_id [FILTER] on categories (&#x60;category_id&#x60;). (optional)
     * @param  string[] $category_type [FILTER] on Category Type (&#x60;category_type&#x60;). (optional)
     * @param  string $category_search_query [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned. (optional) (deprecated)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\DistributorProductCategoriesResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductCategoriesWithHttpInfo($distributor_id = null, $category_id = null, $category_type = null, $category_search_query = null, $if_modified_since = null)
    {
        $request = $this->getProductCategoriesRequest($distributor_id, $category_id, $category_type, $category_search_query, $if_modified_since);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\DistributorProductCategoriesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\DistributorProductCategoriesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\DistributorProductCategoriesResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\DistributorProductCategoriesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 501:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductCategoriesAsync
     *
     * List Product Categories
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string[] $category_id [FILTER] on categories (&#x60;category_id&#x60;). (optional)
     * @param  string[] $category_type [FILTER] on Category Type (&#x60;category_type&#x60;). (optional)
     * @param  string $category_search_query [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned. (optional) (deprecated)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductCategoriesAsync($distributor_id = null, $category_id = null, $category_type = null, $category_search_query = null, $if_modified_since = null)
    {
        return $this->getProductCategoriesAsyncWithHttpInfo($distributor_id, $category_id, $category_type, $category_search_query, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductCategoriesAsyncWithHttpInfo
     *
     * List Product Categories
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string[] $category_id [FILTER] on categories (&#x60;category_id&#x60;). (optional)
     * @param  string[] $category_type [FILTER] on Category Type (&#x60;category_type&#x60;). (optional)
     * @param  string $category_search_query [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned. (optional) (deprecated)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductCategoriesAsyncWithHttpInfo($distributor_id = null, $category_id = null, $category_type = null, $category_search_query = null, $if_modified_since = null)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\DistributorProductCategoriesResponse';
        $request = $this->getProductCategoriesRequest($distributor_id, $category_id, $category_type, $category_search_query, $if_modified_since);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProductCategories'
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string[] $category_id [FILTER] on categories (&#x60;category_id&#x60;). (optional)
     * @param  string[] $category_type [FILTER] on Category Type (&#x60;category_type&#x60;). (optional)
     * @param  string $category_search_query [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned. (optional) (deprecated)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProductCategoriesRequest($distributor_id = null, $category_id = null, $category_type = null, $category_search_query = null, $if_modified_since = null)
    {

        $resourcePath = '/products/categories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($distributor_id !== null) {
            if('form' === 'form' && is_array($distributor_id)) {
                foreach($distributor_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['distributor_id'] = $distributor_id;
            }
        }
        // query params
        if (is_array($category_id)) {
            $category_id = ObjectSerializer::serializeCollection($category_id, 'form', true);
        }
        if ($category_id !== null) {
            $queryParams['category_id'] = $category_id;
        }
        // query params
        if (is_array($category_type)) {
            $category_type = ObjectSerializer::serializeCollection($category_type, 'form', true);
        }
        if ($category_type !== null) {
            $queryParams['category_type'] = $category_type;
        }
        // query params
        if ($category_search_query !== null) {
            if('form' === 'form' && is_array($category_search_query)) {
                foreach($category_search_query as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['category_search_query'] = $category_search_query;
            }
        }

        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProductDestinations
     *
     * List Product Destinations
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string[] $destination_id [FILTER] on destination (&#x60;destination_id&#x60;). (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\ProductDestinationsResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function getProductDestinations($distributor_id = null, $destination_id = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        list($response) = $this->getProductDestinationsWithHttpInfo($distributor_id, $destination_id, $items_per_page, $start_index, $page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getProductDestinationsWithHttpInfo
     *
     * List Product Destinations
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string[] $destination_id [FILTER] on destination (&#x60;destination_id&#x60;). (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\ProductDestinationsResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductDestinationsWithHttpInfo($distributor_id = null, $destination_id = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        $request = $this->getProductDestinationsRequest($distributor_id, $destination_id, $items_per_page, $start_index, $page, $if_modified_since);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\ProductDestinationsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ProductDestinationsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\ProductDestinationsResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ProductDestinationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 501:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductDestinationsAsync
     *
     * List Product Destinations
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string[] $destination_id [FILTER] on destination (&#x60;destination_id&#x60;). (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductDestinationsAsync($distributor_id = null, $destination_id = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        return $this->getProductDestinationsAsyncWithHttpInfo($distributor_id, $destination_id, $items_per_page, $start_index, $page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductDestinationsAsyncWithHttpInfo
     *
     * List Product Destinations
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string[] $destination_id [FILTER] on destination (&#x60;destination_id&#x60;). (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductDestinationsAsyncWithHttpInfo($distributor_id = null, $destination_id = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\ProductDestinationsResponse';
        $request = $this->getProductDestinationsRequest($distributor_id, $destination_id, $items_per_page, $start_index, $page, $if_modified_since);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProductDestinations'
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string[] $destination_id [FILTER] on destination (&#x60;destination_id&#x60;). (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProductDestinationsRequest($distributor_id = null, $destination_id = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        if ($items_per_page !== null && $items_per_page > 500) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling ProductsApi.getProductDestinations, must be smaller than or equal to 500.');
        }
        if ($items_per_page !== null && $items_per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling ProductsApi.getProductDestinations, must be bigger than or equal to 1.');
        }

        if ($start_index !== null && $start_index > 10000) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling ProductsApi.getProductDestinations, must be smaller than or equal to 10000.');
        }
        if ($start_index !== null && $start_index < 1) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling ProductsApi.getProductDestinations, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling ProductsApi.getProductDestinations, must be bigger than or equal to 1.');
        }


        $resourcePath = '/products/destinations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($distributor_id !== null) {
            if('form' === 'form' && is_array($distributor_id)) {
                foreach($distributor_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['distributor_id'] = $distributor_id;
            }
        }
        // query params
        if (is_array($destination_id)) {
            $destination_id = ObjectSerializer::serializeCollection($destination_id, 'form', true);
        }
        if ($destination_id !== null) {
            $queryParams['destination_id'] = $destination_id;
        }
        // query params
        if ($items_per_page !== null) {
            if('form' === 'form' && is_array($items_per_page)) {
                foreach($items_per_page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['items_per_page'] = $items_per_page;
            }
        }
        // query params
        if ($start_index !== null) {
            if('form' === 'form' && is_array($start_index)) {
                foreach($start_index as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['start_index'] = $start_index;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }

        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProductLocations
     *
     * List Product Locations
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string[] $location_type [FILTER] on Location Type (&#x60;location_type&#x60;). (optional) (deprecated)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\LocationListResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function getProductLocations($distributor_id = null, $product_id = null, $location_type = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        list($response) = $this->getProductLocationsWithHttpInfo($distributor_id, $product_id, $location_type, $items_per_page, $start_index, $page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getProductLocationsWithHttpInfo
     *
     * List Product Locations
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string[] $location_type [FILTER] on Location Type (&#x60;location_type&#x60;). (optional) (deprecated)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\LocationListResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductLocationsWithHttpInfo($distributor_id = null, $product_id = null, $location_type = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        $request = $this->getProductLocationsRequest($distributor_id, $product_id, $location_type, $items_per_page, $start_index, $page, $if_modified_since);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\LocationListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\LocationListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\LocationListResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\LocationListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 501:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductLocationsAsync
     *
     * List Product Locations
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string[] $location_type [FILTER] on Location Type (&#x60;location_type&#x60;). (optional) (deprecated)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductLocationsAsync($distributor_id = null, $product_id = null, $location_type = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        return $this->getProductLocationsAsyncWithHttpInfo($distributor_id, $product_id, $location_type, $items_per_page, $start_index, $page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductLocationsAsyncWithHttpInfo
     *
     * List Product Locations
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string[] $location_type [FILTER] on Location Type (&#x60;location_type&#x60;). (optional) (deprecated)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductLocationsAsyncWithHttpInfo($distributor_id = null, $product_id = null, $location_type = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\LocationListResponse';
        $request = $this->getProductLocationsRequest($distributor_id, $product_id, $location_type, $items_per_page, $start_index, $page, $if_modified_since);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProductLocations'
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string[] $location_type [FILTER] on Location Type (&#x60;location_type&#x60;). (optional) (deprecated)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProductLocationsRequest($distributor_id = null, $product_id = null, $location_type = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        if ($items_per_page !== null && $items_per_page > 500) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling ProductsApi.getProductLocations, must be smaller than or equal to 500.');
        }
        if ($items_per_page !== null && $items_per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling ProductsApi.getProductLocations, must be bigger than or equal to 1.');
        }

        if ($start_index !== null && $start_index > 10000) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling ProductsApi.getProductLocations, must be smaller than or equal to 10000.');
        }
        if ($start_index !== null && $start_index < 1) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling ProductsApi.getProductLocations, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling ProductsApi.getProductLocations, must be bigger than or equal to 1.');
        }


        $resourcePath = '/products/locations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($distributor_id !== null) {
            if('form' === 'form' && is_array($distributor_id)) {
                foreach($distributor_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['distributor_id'] = $distributor_id;
            }
        }
        // query params
        if ($product_id !== null) {
            if('form' === 'form' && is_array($product_id)) {
                foreach($product_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_id'] = $product_id;
            }
        }
        // query params
        if (is_array($location_type)) {
            $location_type = ObjectSerializer::serializeCollection($location_type, 'form', true);
        }
        if ($location_type !== null) {
            $queryParams['location_type'] = $location_type;
        }
        // query params
        if ($items_per_page !== null) {
            if('form' === 'form' && is_array($items_per_page)) {
                foreach($items_per_page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['items_per_page'] = $items_per_page;
            }
        }
        // query params
        if ($start_index !== null) {
            if('form' === 'form' && is_array($start_index)) {
                foreach($start_index as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['start_index'] = $start_index;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }

        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProductRoutes
     *
     * List Product Routes
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\RoutesListResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function getProductRoutes($distributor_id = null, $product_id = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        list($response) = $this->getProductRoutesWithHttpInfo($distributor_id, $product_id, $items_per_page, $start_index, $page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getProductRoutesWithHttpInfo
     *
     * List Product Routes
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\RoutesListResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductRoutesWithHttpInfo($distributor_id = null, $product_id = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        $request = $this->getProductRoutesRequest($distributor_id, $product_id, $items_per_page, $start_index, $page, $if_modified_since);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\RoutesListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\RoutesListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\RoutesListResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\RoutesListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 501:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductRoutesAsync
     *
     * List Product Routes
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductRoutesAsync($distributor_id = null, $product_id = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        return $this->getProductRoutesAsyncWithHttpInfo($distributor_id, $product_id, $items_per_page, $start_index, $page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductRoutesAsyncWithHttpInfo
     *
     * List Product Routes
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductRoutesAsyncWithHttpInfo($distributor_id = null, $product_id = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\RoutesListResponse';
        $request = $this->getProductRoutesRequest($distributor_id, $product_id, $items_per_page, $start_index, $page, $if_modified_since);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProductRoutes'
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProductRoutesRequest($distributor_id = null, $product_id = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        if ($items_per_page !== null && $items_per_page > 500) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling ProductsApi.getProductRoutes, must be smaller than or equal to 500.');
        }
        if ($items_per_page !== null && $items_per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling ProductsApi.getProductRoutes, must be bigger than or equal to 1.');
        }

        if ($start_index !== null && $start_index > 10000) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling ProductsApi.getProductRoutes, must be smaller than or equal to 10000.');
        }
        if ($start_index !== null && $start_index < 1) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling ProductsApi.getProductRoutes, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling ProductsApi.getProductRoutes, must be bigger than or equal to 1.');
        }


        $resourcePath = '/products/routes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($distributor_id !== null) {
            if('form' === 'form' && is_array($distributor_id)) {
                foreach($distributor_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['distributor_id'] = $distributor_id;
            }
        }
        // query params
        if ($product_id !== null) {
            if('form' === 'form' && is_array($product_id)) {
                foreach($product_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_id'] = $product_id;
            }
        }
        // query params
        if ($items_per_page !== null) {
            if('form' === 'form' && is_array($items_per_page)) {
                foreach($items_per_page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['items_per_page'] = $items_per_page;
            }
        }
        // query params
        if ($start_index !== null) {
            if('form' === 'form' && is_array($start_index)) {
                foreach($start_index as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['start_index'] = $start_index;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }

        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProductTaxes
     *
     * List Product Taxes
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string $tax_region [FILTER] on &#x60;tax_region&#x60;. (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\DistributorProductTaxesResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function getProductTaxes($distributor_id = null, $product_id = null, $tax_region = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        list($response) = $this->getProductTaxesWithHttpInfo($distributor_id, $product_id, $tax_region, $items_per_page, $start_index, $page, $if_modified_since);
        return $response;
    }

    /**
     * Operation getProductTaxesWithHttpInfo
     *
     * List Product Taxes
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string $tax_region [FILTER] on &#x60;tax_region&#x60;. (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\DistributorProductTaxesResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductTaxesWithHttpInfo($distributor_id = null, $product_id = null, $tax_region = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        $request = $this->getProductTaxesRequest($distributor_id, $product_id, $tax_region, $items_per_page, $start_index, $page, $if_modified_since);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\DistributorProductTaxesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\DistributorProductTaxesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\DistributorProductTaxesResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\DistributorProductTaxesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 501:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductTaxesAsync
     *
     * List Product Taxes
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string $tax_region [FILTER] on &#x60;tax_region&#x60;. (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductTaxesAsync($distributor_id = null, $product_id = null, $tax_region = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        return $this->getProductTaxesAsyncWithHttpInfo($distributor_id, $product_id, $tax_region, $items_per_page, $start_index, $page, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductTaxesAsyncWithHttpInfo
     *
     * List Product Taxes
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string $tax_region [FILTER] on &#x60;tax_region&#x60;. (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductTaxesAsyncWithHttpInfo($distributor_id = null, $product_id = null, $tax_region = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\DistributorProductTaxesResponse';
        $request = $this->getProductTaxesRequest($distributor_id, $product_id, $tax_region, $items_per_page, $start_index, $page, $if_modified_since);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProductTaxes'
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string $tax_region [FILTER] on &#x60;tax_region&#x60;. (optional)
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProductTaxesRequest($distributor_id = null, $product_id = null, $tax_region = null, $items_per_page = 10, $start_index = 1, $page = 1, $if_modified_since = null)
    {
        if ($items_per_page !== null && $items_per_page > 500) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling ProductsApi.getProductTaxes, must be smaller than or equal to 500.');
        }
        if ($items_per_page !== null && $items_per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling ProductsApi.getProductTaxes, must be bigger than or equal to 1.');
        }

        if ($start_index !== null && $start_index > 10000) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling ProductsApi.getProductTaxes, must be smaller than or equal to 10000.');
        }
        if ($start_index !== null && $start_index < 1) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling ProductsApi.getProductTaxes, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling ProductsApi.getProductTaxes, must be bigger than or equal to 1.');
        }


        $resourcePath = '/products/taxes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($distributor_id !== null) {
            if('form' === 'form' && is_array($distributor_id)) {
                foreach($distributor_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['distributor_id'] = $distributor_id;
            }
        }
        // query params
        if ($product_id !== null) {
            if('form' === 'form' && is_array($product_id)) {
                foreach($product_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_id'] = $product_id;
            }
        }
        // query params
        if ($tax_region !== null) {
            if('form' === 'form' && is_array($tax_region)) {
                foreach($tax_region as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['tax_region'] = $tax_region;
            }
        }
        // query params
        if ($items_per_page !== null) {
            if('form' === 'form' && is_array($items_per_page)) {
                foreach($items_per_page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['items_per_page'] = $items_per_page;
            }
        }
        // query params
        if ($start_index !== null) {
            if('form' === 'form' && is_array($start_index)) {
                foreach($start_index as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['start_index'] = $start_index;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }

        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getProducts
     *
     * List Products
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_content_language [CONFIG] content language to return in the response.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. If the defined language is not available, the product will be returned in the &#x60;product_default_language&#x60;. (optional)
     * @param  string $product_content [FILTER] on product content.  Searches the fields:   + &#x60;product_id&#x60;(Upcoming)   + &#x60;product_title&#x60;   + &#x60;product_short_description&#x60;   + &#x60;product_long_description&#x60;   + &#x60;product_supplier_name&#x60;   + &#x60;product_highlights&#x60;   + &#x60;product_includes&#x60;    Regex used: &#39;(?is)^(?&#x3D;.*\\\\b(query1.*)\\\\b)(?&#x3D;.*\\\\b(query2.*)\\\\b).*&#39;    + Case insensitive.   + Positive lookaheads and word boundaries to make word order not matter and to recognize word spacing. (optional)
     * @param  \DateTime $product_start_date [FILTER] on &#x60;product_start_date&#x60;. (optional)
     * @param  \DateTime $product_end_date [FILTER] on &#x60;product_end_date&#x60;. (optional)
     * @param  int $product_duration [FILTER] on &#x60;product_duration&#x60;. (Minutes) (optional)
     * @param  int $product_booking_quantity_min [FILTER] on &#x60;product_booking_quantity_min&#x60;. (optional)
     * @param  int $product_booking_quantity_max [FILTER] on &#x60;product_booking_quantity_max&#x60;. (optional)
     * @param  string[] $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string[] $product_supplier [FILTER] on &#x60;product_supplier_id&#x60;. (optional)
     * @param  string[] $market_admin_id [FILTER] on &#x60;market_admin_id&#x60;. (optional) (deprecated)
     * @param  string[] $product_category [FILTER] on categories (&#x60;category_id&#x60;). (optional)
     * @param  string[] $product_destination [FILTER] on destinations (&#x60;destination_id&#x60;). (optional)
     * @param  string[] $product_tag [FILTER] on Tag.   Combination of &#x60;product_tag_id&#x60;, &#x60;product_tag_description&#x60; and &#x60;product_tag_group&#x60;. (optional)
     * @param  string[] $product_language [FILTER] on available product languages.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.   Products without a language value will not be returned. (optional)
     * @param  string[] $product_location_id [FILTER] on &#x60;location_id&#x60;. (optional)
     * @param  string[] $product_location_country_code [FILTER] on country ( [ISO-3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)). (optional)
     * @param  string[] $product_currency_code [FILTER] on Product Currency Code, according to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217). (optional) (deprecated)
     * @param  \PrioTicket\DistributorAPI\Models\CustomField[] $product_custom_field [FILTER] on &#x60;product_custom_fields&#x60;. (optional)
     * @param  string[] $product_type [FILTER] on Product Type (&#x60;product_type&#x60;). (optional)
     * @param  string[] $product_status [FILTER] on Product Status (&#x60;product_status&#x60;). &gt; A product can only be sold if the status is &#x60;ACTIVE&#x60; or &#x60;TEST&#x60;.  &lt;details&gt;   &lt;summary&gt;**Product Statuses**&lt;/summary&gt;  Product Status: * &#x60;DRAFT&#x60; - Product is a draft.     The product is a draft.  * &#x60;REVIEW&#x60; - Product is in review.     The product is in review.   * &#x60;ACTIVE&#x60; - Product is active.    The product is fully configured and ready to sell using any linked catalogue (See Product Catalogue Status).  * &#x60;EXPIRED&#x60; - Product is expired.    The product configured availability expired and this product is no longer available for sales.   * &#x60;ARCHIVED&#x60; - Product is archived.     The product is archived. It can return to &#x60;ACTIVE&#x60; by unarchiving it.  * &#x60;INACTIVE&#x60; - Product is inactive.    The product is set inactive. It should not be visible on any channel and cannot be sold until set to &#x60;ACTIVE&#x60; again.  * &#x60;TEST&#x60; - Product is in test.    The product is fully configured and ready to sell. Similar to &#x60;ACTIVE&#x60;, but only meant for internal testing purposes. This product should not be exposed to end-consumers.  * &#x60;UNAVAILABLE&#x60; - Product is unavailable.    The product is automatically set as unavailable due to an error or misconfiguration. This product requires attention.  * &#x60;SUSPENDED&#x60; - Product is suspended.    The product is suspended due to Terms of Service violation.  * &#x60;DELETED&#x60; - Product is deleted.    The product is permanently deleted.    * &#x60;PREVIEW&#x60; - Product is in preview.    The product is visible but cannot be booked yet. Generally used during pre-sales. This state is automatically set if the product is &#x60;ACTIVE&#x60; but did not yet reach the &#x60;product_booking_start_date&#x60;.  &lt;/details&gt; (optional) (deprecated)
     * @param  string[] $product_catalogue_status [FILTER] on Product Catalogue Status (&#x60;product_catalogue_status&#x60;). &lt;details&gt;   &lt;summary&gt;**Product Catalogue Statuses**&lt;/summary&gt;  Product Catalogue Status: * &#x60;PENDING&#x60; - Product is pending to be assigned to a catalogue. * &#x60;INACTIVE&#x60; - Product is assigned and inactive on the catalogue. * &#x60;ACTIVE&#x60; - Product is assigned and active on the catalogue. &lt;/details&gt; (optional)
     * @param  string $product_availability [FILTER] Include products with &#x60;product_availability:true&#x60;. (optional, default to 'true')
     * @param  string $product_relations [FILTER] Include product relations. (Addon, Combi, Cluster) (optional, default to 'true')
     * @param  string $product_favorite [FILTER] Return &#x60;product_favorite:true&#x60; only. (optional)
     * @param  string $product_planet [FILTER] on an astronomical body. *(Reserved for future use)* (optional) (deprecated)
     * @param  \DateTime $product_modified [FILTER] on products modified after the given date.   * This includes newly created products. * Deleted products are ignored and should be handled manually.  For caching purposes we recommend using the &#x60;If-Modified-Since&#x60; header instead. (optional)
     * @param  string $product_search_query [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (&#x60;cache:true&#x60;) (optional)
     * @param  string $product_view_type [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials. (optional) (deprecated)
     * @param  string $product_sort_by [SORT] method. &lt;details&gt;   &lt;summary&gt;**Sort Methods**&lt;/summary&gt;  Sort Methods: * &#x60;PRODUCT_CREATED&#x60; - Sort on &#x60;product_created&#x60;. * &#x60;PRODUCT_MODIFIED&#x60; - Sort on &#x60;product_modified&#x60;. * &#x60;PRODUCT_TITLE_A_Z&#x60; - Sort on &#x60;product_title&#x60;. * &#x60;SUPPLIER_NAME_A_Z&#x60; - Sort on &#x60;product_supplier_name&#x60;. * &#x60;LOCATION_NAME_A_Z&#x60; - Sort on &#x60;location_name&#x60;. * &#x60;PRICE_VALUE&#x60; - Sort on &#x60;product_from_price&#x60;.    Price is sorted based on the current season.  * &#x60;DISCOUNT_VALUE&#x60; - (Upcoming) * &#x60;SEARCH_RELEVANCE&#x60; - Search results are sorted on match relevance.     This sorting method should only be used during wildcard (&#x60;product_search_query&#x60;) searches.      If &#x60;product_search_query&#x60; is empty, it will fallback to &#x60;CUSTOM&#x60;.  * &#x60;CUSTOM&#x60; - Custom sort as defined in the catalogues.    If no custom sorting has been configured it will fallback to &#x60;PRODUCT_MODIFIED&#x60;.  &lt;/details&gt; (optional, default to 'PRODUCT_MODIFIED')
     * @param  string $product_sort_order [SORT] keyword used to sort result sets in either ascending or descending order. (optional, default to 'DESC')
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\ProductListResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function getProducts($distributor_id = null, $product_content_language = null, $product_content = null, $product_start_date = null, $product_end_date = null, $product_duration = null, $product_booking_quantity_min = null, $product_booking_quantity_max = null, $product_id = null, $product_supplier = null, $market_admin_id = null, $product_category = null, $product_destination = null, $product_tag = null, $product_language = null, $product_location_id = null, $product_location_country_code = null, $product_currency_code = null, $product_custom_field = null, $product_type = null, $product_status = null, $product_catalogue_status = null, $product_availability = 'true', $product_relations = 'true', $product_favorite = null, $product_planet = null, $product_modified = null, $product_search_query = null, $product_view_type = null, $product_sort_by = 'PRODUCT_MODIFIED', $product_sort_order = 'DESC', $items_per_page = 10, $start_index = 1, $page = 1, $cache = 'true', $if_modified_since = null)
    {
        list($response) = $this->getProductsWithHttpInfo($distributor_id, $product_content_language, $product_content, $product_start_date, $product_end_date, $product_duration, $product_booking_quantity_min, $product_booking_quantity_max, $product_id, $product_supplier, $market_admin_id, $product_category, $product_destination, $product_tag, $product_language, $product_location_id, $product_location_country_code, $product_currency_code, $product_custom_field, $product_type, $product_status, $product_catalogue_status, $product_availability, $product_relations, $product_favorite, $product_planet, $product_modified, $product_search_query, $product_view_type, $product_sort_by, $product_sort_order, $items_per_page, $start_index, $page, $cache, $if_modified_since);
        return $response;
    }

    /**
     * Operation getProductsWithHttpInfo
     *
     * List Products
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_content_language [CONFIG] content language to return in the response.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. If the defined language is not available, the product will be returned in the &#x60;product_default_language&#x60;. (optional)
     * @param  string $product_content [FILTER] on product content.  Searches the fields:   + &#x60;product_id&#x60;(Upcoming)   + &#x60;product_title&#x60;   + &#x60;product_short_description&#x60;   + &#x60;product_long_description&#x60;   + &#x60;product_supplier_name&#x60;   + &#x60;product_highlights&#x60;   + &#x60;product_includes&#x60;    Regex used: &#39;(?is)^(?&#x3D;.*\\\\b(query1.*)\\\\b)(?&#x3D;.*\\\\b(query2.*)\\\\b).*&#39;    + Case insensitive.   + Positive lookaheads and word boundaries to make word order not matter and to recognize word spacing. (optional)
     * @param  \DateTime $product_start_date [FILTER] on &#x60;product_start_date&#x60;. (optional)
     * @param  \DateTime $product_end_date [FILTER] on &#x60;product_end_date&#x60;. (optional)
     * @param  int $product_duration [FILTER] on &#x60;product_duration&#x60;. (Minutes) (optional)
     * @param  int $product_booking_quantity_min [FILTER] on &#x60;product_booking_quantity_min&#x60;. (optional)
     * @param  int $product_booking_quantity_max [FILTER] on &#x60;product_booking_quantity_max&#x60;. (optional)
     * @param  string[] $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string[] $product_supplier [FILTER] on &#x60;product_supplier_id&#x60;. (optional)
     * @param  string[] $market_admin_id [FILTER] on &#x60;market_admin_id&#x60;. (optional) (deprecated)
     * @param  string[] $product_category [FILTER] on categories (&#x60;category_id&#x60;). (optional)
     * @param  string[] $product_destination [FILTER] on destinations (&#x60;destination_id&#x60;). (optional)
     * @param  string[] $product_tag [FILTER] on Tag.   Combination of &#x60;product_tag_id&#x60;, &#x60;product_tag_description&#x60; and &#x60;product_tag_group&#x60;. (optional)
     * @param  string[] $product_language [FILTER] on available product languages.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.   Products without a language value will not be returned. (optional)
     * @param  string[] $product_location_id [FILTER] on &#x60;location_id&#x60;. (optional)
     * @param  string[] $product_location_country_code [FILTER] on country ( [ISO-3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)). (optional)
     * @param  string[] $product_currency_code [FILTER] on Product Currency Code, according to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217). (optional) (deprecated)
     * @param  \PrioTicket\DistributorAPI\Models\CustomField[] $product_custom_field [FILTER] on &#x60;product_custom_fields&#x60;. (optional)
     * @param  string[] $product_type [FILTER] on Product Type (&#x60;product_type&#x60;). (optional)
     * @param  string[] $product_status [FILTER] on Product Status (&#x60;product_status&#x60;). &gt; A product can only be sold if the status is &#x60;ACTIVE&#x60; or &#x60;TEST&#x60;.  &lt;details&gt;   &lt;summary&gt;**Product Statuses**&lt;/summary&gt;  Product Status: * &#x60;DRAFT&#x60; - Product is a draft.     The product is a draft.  * &#x60;REVIEW&#x60; - Product is in review.     The product is in review.   * &#x60;ACTIVE&#x60; - Product is active.    The product is fully configured and ready to sell using any linked catalogue (See Product Catalogue Status).  * &#x60;EXPIRED&#x60; - Product is expired.    The product configured availability expired and this product is no longer available for sales.   * &#x60;ARCHIVED&#x60; - Product is archived.     The product is archived. It can return to &#x60;ACTIVE&#x60; by unarchiving it.  * &#x60;INACTIVE&#x60; - Product is inactive.    The product is set inactive. It should not be visible on any channel and cannot be sold until set to &#x60;ACTIVE&#x60; again.  * &#x60;TEST&#x60; - Product is in test.    The product is fully configured and ready to sell. Similar to &#x60;ACTIVE&#x60;, but only meant for internal testing purposes. This product should not be exposed to end-consumers.  * &#x60;UNAVAILABLE&#x60; - Product is unavailable.    The product is automatically set as unavailable due to an error or misconfiguration. This product requires attention.  * &#x60;SUSPENDED&#x60; - Product is suspended.    The product is suspended due to Terms of Service violation.  * &#x60;DELETED&#x60; - Product is deleted.    The product is permanently deleted.    * &#x60;PREVIEW&#x60; - Product is in preview.    The product is visible but cannot be booked yet. Generally used during pre-sales. This state is automatically set if the product is &#x60;ACTIVE&#x60; but did not yet reach the &#x60;product_booking_start_date&#x60;.  &lt;/details&gt; (optional) (deprecated)
     * @param  string[] $product_catalogue_status [FILTER] on Product Catalogue Status (&#x60;product_catalogue_status&#x60;). &lt;details&gt;   &lt;summary&gt;**Product Catalogue Statuses**&lt;/summary&gt;  Product Catalogue Status: * &#x60;PENDING&#x60; - Product is pending to be assigned to a catalogue. * &#x60;INACTIVE&#x60; - Product is assigned and inactive on the catalogue. * &#x60;ACTIVE&#x60; - Product is assigned and active on the catalogue. &lt;/details&gt; (optional)
     * @param  string $product_availability [FILTER] Include products with &#x60;product_availability:true&#x60;. (optional, default to 'true')
     * @param  string $product_relations [FILTER] Include product relations. (Addon, Combi, Cluster) (optional, default to 'true')
     * @param  string $product_favorite [FILTER] Return &#x60;product_favorite:true&#x60; only. (optional)
     * @param  string $product_planet [FILTER] on an astronomical body. *(Reserved for future use)* (optional) (deprecated)
     * @param  \DateTime $product_modified [FILTER] on products modified after the given date.   * This includes newly created products. * Deleted products are ignored and should be handled manually.  For caching purposes we recommend using the &#x60;If-Modified-Since&#x60; header instead. (optional)
     * @param  string $product_search_query [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (&#x60;cache:true&#x60;) (optional)
     * @param  string $product_view_type [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials. (optional) (deprecated)
     * @param  string $product_sort_by [SORT] method. &lt;details&gt;   &lt;summary&gt;**Sort Methods**&lt;/summary&gt;  Sort Methods: * &#x60;PRODUCT_CREATED&#x60; - Sort on &#x60;product_created&#x60;. * &#x60;PRODUCT_MODIFIED&#x60; - Sort on &#x60;product_modified&#x60;. * &#x60;PRODUCT_TITLE_A_Z&#x60; - Sort on &#x60;product_title&#x60;. * &#x60;SUPPLIER_NAME_A_Z&#x60; - Sort on &#x60;product_supplier_name&#x60;. * &#x60;LOCATION_NAME_A_Z&#x60; - Sort on &#x60;location_name&#x60;. * &#x60;PRICE_VALUE&#x60; - Sort on &#x60;product_from_price&#x60;.    Price is sorted based on the current season.  * &#x60;DISCOUNT_VALUE&#x60; - (Upcoming) * &#x60;SEARCH_RELEVANCE&#x60; - Search results are sorted on match relevance.     This sorting method should only be used during wildcard (&#x60;product_search_query&#x60;) searches.      If &#x60;product_search_query&#x60; is empty, it will fallback to &#x60;CUSTOM&#x60;.  * &#x60;CUSTOM&#x60; - Custom sort as defined in the catalogues.    If no custom sorting has been configured it will fallback to &#x60;PRODUCT_MODIFIED&#x60;.  &lt;/details&gt; (optional, default to 'PRODUCT_MODIFIED')
     * @param  string $product_sort_order [SORT] keyword used to sort result sets in either ascending or descending order. (optional, default to 'DESC')
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\ProductListResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductsWithHttpInfo($distributor_id = null, $product_content_language = null, $product_content = null, $product_start_date = null, $product_end_date = null, $product_duration = null, $product_booking_quantity_min = null, $product_booking_quantity_max = null, $product_id = null, $product_supplier = null, $market_admin_id = null, $product_category = null, $product_destination = null, $product_tag = null, $product_language = null, $product_location_id = null, $product_location_country_code = null, $product_currency_code = null, $product_custom_field = null, $product_type = null, $product_status = null, $product_catalogue_status = null, $product_availability = 'true', $product_relations = 'true', $product_favorite = null, $product_planet = null, $product_modified = null, $product_search_query = null, $product_view_type = null, $product_sort_by = 'PRODUCT_MODIFIED', $product_sort_order = 'DESC', $items_per_page = 10, $start_index = 1, $page = 1, $cache = 'true', $if_modified_since = null)
    {
        $request = $this->getProductsRequest($distributor_id, $product_content_language, $product_content, $product_start_date, $product_end_date, $product_duration, $product_booking_quantity_min, $product_booking_quantity_max, $product_id, $product_supplier, $market_admin_id, $product_category, $product_destination, $product_tag, $product_language, $product_location_id, $product_location_country_code, $product_currency_code, $product_custom_field, $product_type, $product_status, $product_catalogue_status, $product_availability, $product_relations, $product_favorite, $product_planet, $product_modified, $product_search_query, $product_view_type, $product_sort_by, $product_sort_order, $items_per_page, $start_index, $page, $cache, $if_modified_since);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\ProductListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ProductListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\ProductListResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ProductListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 501:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 504:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ErrorModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductsAsync
     *
     * List Products
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_content_language [CONFIG] content language to return in the response.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. If the defined language is not available, the product will be returned in the &#x60;product_default_language&#x60;. (optional)
     * @param  string $product_content [FILTER] on product content.  Searches the fields:   + &#x60;product_id&#x60;(Upcoming)   + &#x60;product_title&#x60;   + &#x60;product_short_description&#x60;   + &#x60;product_long_description&#x60;   + &#x60;product_supplier_name&#x60;   + &#x60;product_highlights&#x60;   + &#x60;product_includes&#x60;    Regex used: &#39;(?is)^(?&#x3D;.*\\\\b(query1.*)\\\\b)(?&#x3D;.*\\\\b(query2.*)\\\\b).*&#39;    + Case insensitive.   + Positive lookaheads and word boundaries to make word order not matter and to recognize word spacing. (optional)
     * @param  \DateTime $product_start_date [FILTER] on &#x60;product_start_date&#x60;. (optional)
     * @param  \DateTime $product_end_date [FILTER] on &#x60;product_end_date&#x60;. (optional)
     * @param  int $product_duration [FILTER] on &#x60;product_duration&#x60;. (Minutes) (optional)
     * @param  int $product_booking_quantity_min [FILTER] on &#x60;product_booking_quantity_min&#x60;. (optional)
     * @param  int $product_booking_quantity_max [FILTER] on &#x60;product_booking_quantity_max&#x60;. (optional)
     * @param  string[] $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string[] $product_supplier [FILTER] on &#x60;product_supplier_id&#x60;. (optional)
     * @param  string[] $market_admin_id [FILTER] on &#x60;market_admin_id&#x60;. (optional) (deprecated)
     * @param  string[] $product_category [FILTER] on categories (&#x60;category_id&#x60;). (optional)
     * @param  string[] $product_destination [FILTER] on destinations (&#x60;destination_id&#x60;). (optional)
     * @param  string[] $product_tag [FILTER] on Tag.   Combination of &#x60;product_tag_id&#x60;, &#x60;product_tag_description&#x60; and &#x60;product_tag_group&#x60;. (optional)
     * @param  string[] $product_language [FILTER] on available product languages.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.   Products without a language value will not be returned. (optional)
     * @param  string[] $product_location_id [FILTER] on &#x60;location_id&#x60;. (optional)
     * @param  string[] $product_location_country_code [FILTER] on country ( [ISO-3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)). (optional)
     * @param  string[] $product_currency_code [FILTER] on Product Currency Code, according to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217). (optional) (deprecated)
     * @param  \PrioTicket\DistributorAPI\Models\CustomField[] $product_custom_field [FILTER] on &#x60;product_custom_fields&#x60;. (optional)
     * @param  string[] $product_type [FILTER] on Product Type (&#x60;product_type&#x60;). (optional)
     * @param  string[] $product_status [FILTER] on Product Status (&#x60;product_status&#x60;). &gt; A product can only be sold if the status is &#x60;ACTIVE&#x60; or &#x60;TEST&#x60;.  &lt;details&gt;   &lt;summary&gt;**Product Statuses**&lt;/summary&gt;  Product Status: * &#x60;DRAFT&#x60; - Product is a draft.     The product is a draft.  * &#x60;REVIEW&#x60; - Product is in review.     The product is in review.   * &#x60;ACTIVE&#x60; - Product is active.    The product is fully configured and ready to sell using any linked catalogue (See Product Catalogue Status).  * &#x60;EXPIRED&#x60; - Product is expired.    The product configured availability expired and this product is no longer available for sales.   * &#x60;ARCHIVED&#x60; - Product is archived.     The product is archived. It can return to &#x60;ACTIVE&#x60; by unarchiving it.  * &#x60;INACTIVE&#x60; - Product is inactive.    The product is set inactive. It should not be visible on any channel and cannot be sold until set to &#x60;ACTIVE&#x60; again.  * &#x60;TEST&#x60; - Product is in test.    The product is fully configured and ready to sell. Similar to &#x60;ACTIVE&#x60;, but only meant for internal testing purposes. This product should not be exposed to end-consumers.  * &#x60;UNAVAILABLE&#x60; - Product is unavailable.    The product is automatically set as unavailable due to an error or misconfiguration. This product requires attention.  * &#x60;SUSPENDED&#x60; - Product is suspended.    The product is suspended due to Terms of Service violation.  * &#x60;DELETED&#x60; - Product is deleted.    The product is permanently deleted.    * &#x60;PREVIEW&#x60; - Product is in preview.    The product is visible but cannot be booked yet. Generally used during pre-sales. This state is automatically set if the product is &#x60;ACTIVE&#x60; but did not yet reach the &#x60;product_booking_start_date&#x60;.  &lt;/details&gt; (optional) (deprecated)
     * @param  string[] $product_catalogue_status [FILTER] on Product Catalogue Status (&#x60;product_catalogue_status&#x60;). &lt;details&gt;   &lt;summary&gt;**Product Catalogue Statuses**&lt;/summary&gt;  Product Catalogue Status: * &#x60;PENDING&#x60; - Product is pending to be assigned to a catalogue. * &#x60;INACTIVE&#x60; - Product is assigned and inactive on the catalogue. * &#x60;ACTIVE&#x60; - Product is assigned and active on the catalogue. &lt;/details&gt; (optional)
     * @param  string $product_availability [FILTER] Include products with &#x60;product_availability:true&#x60;. (optional, default to 'true')
     * @param  string $product_relations [FILTER] Include product relations. (Addon, Combi, Cluster) (optional, default to 'true')
     * @param  string $product_favorite [FILTER] Return &#x60;product_favorite:true&#x60; only. (optional)
     * @param  string $product_planet [FILTER] on an astronomical body. *(Reserved for future use)* (optional) (deprecated)
     * @param  \DateTime $product_modified [FILTER] on products modified after the given date.   * This includes newly created products. * Deleted products are ignored and should be handled manually.  For caching purposes we recommend using the &#x60;If-Modified-Since&#x60; header instead. (optional)
     * @param  string $product_search_query [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (&#x60;cache:true&#x60;) (optional)
     * @param  string $product_view_type [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials. (optional) (deprecated)
     * @param  string $product_sort_by [SORT] method. &lt;details&gt;   &lt;summary&gt;**Sort Methods**&lt;/summary&gt;  Sort Methods: * &#x60;PRODUCT_CREATED&#x60; - Sort on &#x60;product_created&#x60;. * &#x60;PRODUCT_MODIFIED&#x60; - Sort on &#x60;product_modified&#x60;. * &#x60;PRODUCT_TITLE_A_Z&#x60; - Sort on &#x60;product_title&#x60;. * &#x60;SUPPLIER_NAME_A_Z&#x60; - Sort on &#x60;product_supplier_name&#x60;. * &#x60;LOCATION_NAME_A_Z&#x60; - Sort on &#x60;location_name&#x60;. * &#x60;PRICE_VALUE&#x60; - Sort on &#x60;product_from_price&#x60;.    Price is sorted based on the current season.  * &#x60;DISCOUNT_VALUE&#x60; - (Upcoming) * &#x60;SEARCH_RELEVANCE&#x60; - Search results are sorted on match relevance.     This sorting method should only be used during wildcard (&#x60;product_search_query&#x60;) searches.      If &#x60;product_search_query&#x60; is empty, it will fallback to &#x60;CUSTOM&#x60;.  * &#x60;CUSTOM&#x60; - Custom sort as defined in the catalogues.    If no custom sorting has been configured it will fallback to &#x60;PRODUCT_MODIFIED&#x60;.  &lt;/details&gt; (optional, default to 'PRODUCT_MODIFIED')
     * @param  string $product_sort_order [SORT] keyword used to sort result sets in either ascending or descending order. (optional, default to 'DESC')
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductsAsync($distributor_id = null, $product_content_language = null, $product_content = null, $product_start_date = null, $product_end_date = null, $product_duration = null, $product_booking_quantity_min = null, $product_booking_quantity_max = null, $product_id = null, $product_supplier = null, $market_admin_id = null, $product_category = null, $product_destination = null, $product_tag = null, $product_language = null, $product_location_id = null, $product_location_country_code = null, $product_currency_code = null, $product_custom_field = null, $product_type = null, $product_status = null, $product_catalogue_status = null, $product_availability = 'true', $product_relations = 'true', $product_favorite = null, $product_planet = null, $product_modified = null, $product_search_query = null, $product_view_type = null, $product_sort_by = 'PRODUCT_MODIFIED', $product_sort_order = 'DESC', $items_per_page = 10, $start_index = 1, $page = 1, $cache = 'true', $if_modified_since = null)
    {
        return $this->getProductsAsyncWithHttpInfo($distributor_id, $product_content_language, $product_content, $product_start_date, $product_end_date, $product_duration, $product_booking_quantity_min, $product_booking_quantity_max, $product_id, $product_supplier, $market_admin_id, $product_category, $product_destination, $product_tag, $product_language, $product_location_id, $product_location_country_code, $product_currency_code, $product_custom_field, $product_type, $product_status, $product_catalogue_status, $product_availability, $product_relations, $product_favorite, $product_planet, $product_modified, $product_search_query, $product_view_type, $product_sort_by, $product_sort_order, $items_per_page, $start_index, $page, $cache, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductsAsyncWithHttpInfo
     *
     * List Products
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_content_language [CONFIG] content language to return in the response.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. If the defined language is not available, the product will be returned in the &#x60;product_default_language&#x60;. (optional)
     * @param  string $product_content [FILTER] on product content.  Searches the fields:   + &#x60;product_id&#x60;(Upcoming)   + &#x60;product_title&#x60;   + &#x60;product_short_description&#x60;   + &#x60;product_long_description&#x60;   + &#x60;product_supplier_name&#x60;   + &#x60;product_highlights&#x60;   + &#x60;product_includes&#x60;    Regex used: &#39;(?is)^(?&#x3D;.*\\\\b(query1.*)\\\\b)(?&#x3D;.*\\\\b(query2.*)\\\\b).*&#39;    + Case insensitive.   + Positive lookaheads and word boundaries to make word order not matter and to recognize word spacing. (optional)
     * @param  \DateTime $product_start_date [FILTER] on &#x60;product_start_date&#x60;. (optional)
     * @param  \DateTime $product_end_date [FILTER] on &#x60;product_end_date&#x60;. (optional)
     * @param  int $product_duration [FILTER] on &#x60;product_duration&#x60;. (Minutes) (optional)
     * @param  int $product_booking_quantity_min [FILTER] on &#x60;product_booking_quantity_min&#x60;. (optional)
     * @param  int $product_booking_quantity_max [FILTER] on &#x60;product_booking_quantity_max&#x60;. (optional)
     * @param  string[] $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string[] $product_supplier [FILTER] on &#x60;product_supplier_id&#x60;. (optional)
     * @param  string[] $market_admin_id [FILTER] on &#x60;market_admin_id&#x60;. (optional) (deprecated)
     * @param  string[] $product_category [FILTER] on categories (&#x60;category_id&#x60;). (optional)
     * @param  string[] $product_destination [FILTER] on destinations (&#x60;destination_id&#x60;). (optional)
     * @param  string[] $product_tag [FILTER] on Tag.   Combination of &#x60;product_tag_id&#x60;, &#x60;product_tag_description&#x60; and &#x60;product_tag_group&#x60;. (optional)
     * @param  string[] $product_language [FILTER] on available product languages.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.   Products without a language value will not be returned. (optional)
     * @param  string[] $product_location_id [FILTER] on &#x60;location_id&#x60;. (optional)
     * @param  string[] $product_location_country_code [FILTER] on country ( [ISO-3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)). (optional)
     * @param  string[] $product_currency_code [FILTER] on Product Currency Code, according to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217). (optional) (deprecated)
     * @param  \PrioTicket\DistributorAPI\Models\CustomField[] $product_custom_field [FILTER] on &#x60;product_custom_fields&#x60;. (optional)
     * @param  string[] $product_type [FILTER] on Product Type (&#x60;product_type&#x60;). (optional)
     * @param  string[] $product_status [FILTER] on Product Status (&#x60;product_status&#x60;). &gt; A product can only be sold if the status is &#x60;ACTIVE&#x60; or &#x60;TEST&#x60;.  &lt;details&gt;   &lt;summary&gt;**Product Statuses**&lt;/summary&gt;  Product Status: * &#x60;DRAFT&#x60; - Product is a draft.     The product is a draft.  * &#x60;REVIEW&#x60; - Product is in review.     The product is in review.   * &#x60;ACTIVE&#x60; - Product is active.    The product is fully configured and ready to sell using any linked catalogue (See Product Catalogue Status).  * &#x60;EXPIRED&#x60; - Product is expired.    The product configured availability expired and this product is no longer available for sales.   * &#x60;ARCHIVED&#x60; - Product is archived.     The product is archived. It can return to &#x60;ACTIVE&#x60; by unarchiving it.  * &#x60;INACTIVE&#x60; - Product is inactive.    The product is set inactive. It should not be visible on any channel and cannot be sold until set to &#x60;ACTIVE&#x60; again.  * &#x60;TEST&#x60; - Product is in test.    The product is fully configured and ready to sell. Similar to &#x60;ACTIVE&#x60;, but only meant for internal testing purposes. This product should not be exposed to end-consumers.  * &#x60;UNAVAILABLE&#x60; - Product is unavailable.    The product is automatically set as unavailable due to an error or misconfiguration. This product requires attention.  * &#x60;SUSPENDED&#x60; - Product is suspended.    The product is suspended due to Terms of Service violation.  * &#x60;DELETED&#x60; - Product is deleted.    The product is permanently deleted.    * &#x60;PREVIEW&#x60; - Product is in preview.    The product is visible but cannot be booked yet. Generally used during pre-sales. This state is automatically set if the product is &#x60;ACTIVE&#x60; but did not yet reach the &#x60;product_booking_start_date&#x60;.  &lt;/details&gt; (optional) (deprecated)
     * @param  string[] $product_catalogue_status [FILTER] on Product Catalogue Status (&#x60;product_catalogue_status&#x60;). &lt;details&gt;   &lt;summary&gt;**Product Catalogue Statuses**&lt;/summary&gt;  Product Catalogue Status: * &#x60;PENDING&#x60; - Product is pending to be assigned to a catalogue. * &#x60;INACTIVE&#x60; - Product is assigned and inactive on the catalogue. * &#x60;ACTIVE&#x60; - Product is assigned and active on the catalogue. &lt;/details&gt; (optional)
     * @param  string $product_availability [FILTER] Include products with &#x60;product_availability:true&#x60;. (optional, default to 'true')
     * @param  string $product_relations [FILTER] Include product relations. (Addon, Combi, Cluster) (optional, default to 'true')
     * @param  string $product_favorite [FILTER] Return &#x60;product_favorite:true&#x60; only. (optional)
     * @param  string $product_planet [FILTER] on an astronomical body. *(Reserved for future use)* (optional) (deprecated)
     * @param  \DateTime $product_modified [FILTER] on products modified after the given date.   * This includes newly created products. * Deleted products are ignored and should be handled manually.  For caching purposes we recommend using the &#x60;If-Modified-Since&#x60; header instead. (optional)
     * @param  string $product_search_query [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (&#x60;cache:true&#x60;) (optional)
     * @param  string $product_view_type [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials. (optional) (deprecated)
     * @param  string $product_sort_by [SORT] method. &lt;details&gt;   &lt;summary&gt;**Sort Methods**&lt;/summary&gt;  Sort Methods: * &#x60;PRODUCT_CREATED&#x60; - Sort on &#x60;product_created&#x60;. * &#x60;PRODUCT_MODIFIED&#x60; - Sort on &#x60;product_modified&#x60;. * &#x60;PRODUCT_TITLE_A_Z&#x60; - Sort on &#x60;product_title&#x60;. * &#x60;SUPPLIER_NAME_A_Z&#x60; - Sort on &#x60;product_supplier_name&#x60;. * &#x60;LOCATION_NAME_A_Z&#x60; - Sort on &#x60;location_name&#x60;. * &#x60;PRICE_VALUE&#x60; - Sort on &#x60;product_from_price&#x60;.    Price is sorted based on the current season.  * &#x60;DISCOUNT_VALUE&#x60; - (Upcoming) * &#x60;SEARCH_RELEVANCE&#x60; - Search results are sorted on match relevance.     This sorting method should only be used during wildcard (&#x60;product_search_query&#x60;) searches.      If &#x60;product_search_query&#x60; is empty, it will fallback to &#x60;CUSTOM&#x60;.  * &#x60;CUSTOM&#x60; - Custom sort as defined in the catalogues.    If no custom sorting has been configured it will fallback to &#x60;PRODUCT_MODIFIED&#x60;.  &lt;/details&gt; (optional, default to 'PRODUCT_MODIFIED')
     * @param  string $product_sort_order [SORT] keyword used to sort result sets in either ascending or descending order. (optional, default to 'DESC')
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductsAsyncWithHttpInfo($distributor_id = null, $product_content_language = null, $product_content = null, $product_start_date = null, $product_end_date = null, $product_duration = null, $product_booking_quantity_min = null, $product_booking_quantity_max = null, $product_id = null, $product_supplier = null, $market_admin_id = null, $product_category = null, $product_destination = null, $product_tag = null, $product_language = null, $product_location_id = null, $product_location_country_code = null, $product_currency_code = null, $product_custom_field = null, $product_type = null, $product_status = null, $product_catalogue_status = null, $product_availability = 'true', $product_relations = 'true', $product_favorite = null, $product_planet = null, $product_modified = null, $product_search_query = null, $product_view_type = null, $product_sort_by = 'PRODUCT_MODIFIED', $product_sort_order = 'DESC', $items_per_page = 10, $start_index = 1, $page = 1, $cache = 'true', $if_modified_since = null)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\ProductListResponse';
        $request = $this->getProductsRequest($distributor_id, $product_content_language, $product_content, $product_start_date, $product_end_date, $product_duration, $product_booking_quantity_min, $product_booking_quantity_max, $product_id, $product_supplier, $market_admin_id, $product_category, $product_destination, $product_tag, $product_language, $product_location_id, $product_location_country_code, $product_currency_code, $product_custom_field, $product_type, $product_status, $product_catalogue_status, $product_availability, $product_relations, $product_favorite, $product_planet, $product_modified, $product_search_query, $product_view_type, $product_sort_by, $product_sort_order, $items_per_page, $start_index, $page, $cache, $if_modified_since);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProducts'
     *
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $product_content_language [CONFIG] content language to return in the response.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. If the defined language is not available, the product will be returned in the &#x60;product_default_language&#x60;. (optional)
     * @param  string $product_content [FILTER] on product content.  Searches the fields:   + &#x60;product_id&#x60;(Upcoming)   + &#x60;product_title&#x60;   + &#x60;product_short_description&#x60;   + &#x60;product_long_description&#x60;   + &#x60;product_supplier_name&#x60;   + &#x60;product_highlights&#x60;   + &#x60;product_includes&#x60;    Regex used: &#39;(?is)^(?&#x3D;.*\\\\b(query1.*)\\\\b)(?&#x3D;.*\\\\b(query2.*)\\\\b).*&#39;    + Case insensitive.   + Positive lookaheads and word boundaries to make word order not matter and to recognize word spacing. (optional)
     * @param  \DateTime $product_start_date [FILTER] on &#x60;product_start_date&#x60;. (optional)
     * @param  \DateTime $product_end_date [FILTER] on &#x60;product_end_date&#x60;. (optional)
     * @param  int $product_duration [FILTER] on &#x60;product_duration&#x60;. (Minutes) (optional)
     * @param  int $product_booking_quantity_min [FILTER] on &#x60;product_booking_quantity_min&#x60;. (optional)
     * @param  int $product_booking_quantity_max [FILTER] on &#x60;product_booking_quantity_max&#x60;. (optional)
     * @param  string[] $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string[] $product_supplier [FILTER] on &#x60;product_supplier_id&#x60;. (optional)
     * @param  string[] $market_admin_id [FILTER] on &#x60;market_admin_id&#x60;. (optional) (deprecated)
     * @param  string[] $product_category [FILTER] on categories (&#x60;category_id&#x60;). (optional)
     * @param  string[] $product_destination [FILTER] on destinations (&#x60;destination_id&#x60;). (optional)
     * @param  string[] $product_tag [FILTER] on Tag.   Combination of &#x60;product_tag_id&#x60;, &#x60;product_tag_description&#x60; and &#x60;product_tag_group&#x60;. (optional)
     * @param  string[] $product_language [FILTER] on available product languages.   Languages are defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.   Products without a language value will not be returned. (optional)
     * @param  string[] $product_location_id [FILTER] on &#x60;location_id&#x60;. (optional)
     * @param  string[] $product_location_country_code [FILTER] on country ( [ISO-3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)). (optional)
     * @param  string[] $product_currency_code [FILTER] on Product Currency Code, according to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217). (optional) (deprecated)
     * @param  \PrioTicket\DistributorAPI\Models\CustomField[] $product_custom_field [FILTER] on &#x60;product_custom_fields&#x60;. (optional)
     * @param  string[] $product_type [FILTER] on Product Type (&#x60;product_type&#x60;). (optional)
     * @param  string[] $product_status [FILTER] on Product Status (&#x60;product_status&#x60;). &gt; A product can only be sold if the status is &#x60;ACTIVE&#x60; or &#x60;TEST&#x60;.  &lt;details&gt;   &lt;summary&gt;**Product Statuses**&lt;/summary&gt;  Product Status: * &#x60;DRAFT&#x60; - Product is a draft.     The product is a draft.  * &#x60;REVIEW&#x60; - Product is in review.     The product is in review.   * &#x60;ACTIVE&#x60; - Product is active.    The product is fully configured and ready to sell using any linked catalogue (See Product Catalogue Status).  * &#x60;EXPIRED&#x60; - Product is expired.    The product configured availability expired and this product is no longer available for sales.   * &#x60;ARCHIVED&#x60; - Product is archived.     The product is archived. It can return to &#x60;ACTIVE&#x60; by unarchiving it.  * &#x60;INACTIVE&#x60; - Product is inactive.    The product is set inactive. It should not be visible on any channel and cannot be sold until set to &#x60;ACTIVE&#x60; again.  * &#x60;TEST&#x60; - Product is in test.    The product is fully configured and ready to sell. Similar to &#x60;ACTIVE&#x60;, but only meant for internal testing purposes. This product should not be exposed to end-consumers.  * &#x60;UNAVAILABLE&#x60; - Product is unavailable.    The product is automatically set as unavailable due to an error or misconfiguration. This product requires attention.  * &#x60;SUSPENDED&#x60; - Product is suspended.    The product is suspended due to Terms of Service violation.  * &#x60;DELETED&#x60; - Product is deleted.    The product is permanently deleted.    * &#x60;PREVIEW&#x60; - Product is in preview.    The product is visible but cannot be booked yet. Generally used during pre-sales. This state is automatically set if the product is &#x60;ACTIVE&#x60; but did not yet reach the &#x60;product_booking_start_date&#x60;.  &lt;/details&gt; (optional) (deprecated)
     * @param  string[] $product_catalogue_status [FILTER] on Product Catalogue Status (&#x60;product_catalogue_status&#x60;). &lt;details&gt;   &lt;summary&gt;**Product Catalogue Statuses**&lt;/summary&gt;  Product Catalogue Status: * &#x60;PENDING&#x60; - Product is pending to be assigned to a catalogue. * &#x60;INACTIVE&#x60; - Product is assigned and inactive on the catalogue. * &#x60;ACTIVE&#x60; - Product is assigned and active on the catalogue. &lt;/details&gt; (optional)
     * @param  string $product_availability [FILTER] Include products with &#x60;product_availability:true&#x60;. (optional, default to 'true')
     * @param  string $product_relations [FILTER] Include product relations. (Addon, Combi, Cluster) (optional, default to 'true')
     * @param  string $product_favorite [FILTER] Return &#x60;product_favorite:true&#x60; only. (optional)
     * @param  string $product_planet [FILTER] on an astronomical body. *(Reserved for future use)* (optional) (deprecated)
     * @param  \DateTime $product_modified [FILTER] on products modified after the given date.   * This includes newly created products. * Deleted products are ignored and should be handled manually.  For caching purposes we recommend using the &#x60;If-Modified-Since&#x60; header instead. (optional)
     * @param  string $product_search_query [SEARCH] on keywords.   This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (&#x60;cache:true&#x60;) (optional)
     * @param  string $product_view_type [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials. (optional) (deprecated)
     * @param  string $product_sort_by [SORT] method. &lt;details&gt;   &lt;summary&gt;**Sort Methods**&lt;/summary&gt;  Sort Methods: * &#x60;PRODUCT_CREATED&#x60; - Sort on &#x60;product_created&#x60;. * &#x60;PRODUCT_MODIFIED&#x60; - Sort on &#x60;product_modified&#x60;. * &#x60;PRODUCT_TITLE_A_Z&#x60; - Sort on &#x60;product_title&#x60;. * &#x60;SUPPLIER_NAME_A_Z&#x60; - Sort on &#x60;product_supplier_name&#x60;. * &#x60;LOCATION_NAME_A_Z&#x60; - Sort on &#x60;location_name&#x60;. * &#x60;PRICE_VALUE&#x60; - Sort on &#x60;product_from_price&#x60;.    Price is sorted based on the current season.  * &#x60;DISCOUNT_VALUE&#x60; - (Upcoming) * &#x60;SEARCH_RELEVANCE&#x60; - Search results are sorted on match relevance.     This sorting method should only be used during wildcard (&#x60;product_search_query&#x60;) searches.      If &#x60;product_search_query&#x60; is empty, it will fallback to &#x60;CUSTOM&#x60;.  * &#x60;CUSTOM&#x60; - Custom sort as defined in the catalogues.    If no custom sorting has been configured it will fallback to &#x60;PRODUCT_MODIFIED&#x60;.  &lt;/details&gt; (optional, default to 'PRODUCT_MODIFIED')
     * @param  string $product_sort_order [SORT] keyword used to sort result sets in either ascending or descending order. (optional, default to 'DESC')
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProductsRequest($distributor_id = null, $product_content_language = null, $product_content = null, $product_start_date = null, $product_end_date = null, $product_duration = null, $product_booking_quantity_min = null, $product_booking_quantity_max = null, $product_id = null, $product_supplier = null, $market_admin_id = null, $product_category = null, $product_destination = null, $product_tag = null, $product_language = null, $product_location_id = null, $product_location_country_code = null, $product_currency_code = null, $product_custom_field = null, $product_type = null, $product_status = null, $product_catalogue_status = null, $product_availability = 'true', $product_relations = 'true', $product_favorite = null, $product_planet = null, $product_modified = null, $product_search_query = null, $product_view_type = null, $product_sort_by = 'PRODUCT_MODIFIED', $product_sort_order = 'DESC', $items_per_page = 10, $start_index = 1, $page = 1, $cache = 'true', $if_modified_since = null)
    {
        if ($items_per_page !== null && $items_per_page > 500) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling ProductsApi.getProducts, must be smaller than or equal to 500.');
        }
        if ($items_per_page !== null && $items_per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling ProductsApi.getProducts, must be bigger than or equal to 1.');
        }

        if ($start_index !== null && $start_index > 10000) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling ProductsApi.getProducts, must be smaller than or equal to 10000.');
        }
        if ($start_index !== null && $start_index < 1) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling ProductsApi.getProducts, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling ProductsApi.getProducts, must be bigger than or equal to 1.');
        }


        $resourcePath = '/products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($distributor_id !== null) {
            if('form' === 'form' && is_array($distributor_id)) {
                foreach($distributor_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['distributor_id'] = $distributor_id;
            }
        }
        // query params
        if ($product_content_language !== null) {
            if('form' === 'form' && is_array($product_content_language)) {
                foreach($product_content_language as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_content_language'] = $product_content_language;
            }
        }
        // query params
        if ($product_content !== null) {
            if('form' === 'form' && is_array($product_content)) {
                foreach($product_content as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_content'] = $product_content;
            }
        }
        // query params
        if ($product_start_date !== null) {
            if('form' === 'form' && is_array($product_start_date)) {
                foreach($product_start_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_start_date'] = $product_start_date;
            }
        }
        // query params
        if ($product_end_date !== null) {
            if('form' === 'form' && is_array($product_end_date)) {
                foreach($product_end_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_end_date'] = $product_end_date;
            }
        }
        // query params
        if ($product_duration !== null) {
            if('form' === 'form' && is_array($product_duration)) {
                foreach($product_duration as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_duration'] = $product_duration;
            }
        }
        // query params
        if ($product_booking_quantity_min !== null) {
            if('form' === 'form' && is_array($product_booking_quantity_min)) {
                foreach($product_booking_quantity_min as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_booking_quantity_min'] = $product_booking_quantity_min;
            }
        }
        // query params
        if ($product_booking_quantity_max !== null) {
            if('form' === 'form' && is_array($product_booking_quantity_max)) {
                foreach($product_booking_quantity_max as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_booking_quantity_max'] = $product_booking_quantity_max;
            }
        }
        // query params
        if (is_array($product_id)) {
            $product_id = ObjectSerializer::serializeCollection($product_id, 'form', true);
        }
        if ($product_id !== null) {
            $queryParams['product_id'] = $product_id;
        }
        // query params
        if (is_array($product_supplier)) {
            $product_supplier = ObjectSerializer::serializeCollection($product_supplier, 'form', true);
        }
        if ($product_supplier !== null) {
            $queryParams['product_supplier'] = $product_supplier;
        }
        // query params
        if (is_array($market_admin_id)) {
            $market_admin_id = ObjectSerializer::serializeCollection($market_admin_id, 'form', true);
        }
        if ($market_admin_id !== null) {
            $queryParams['market_admin_id'] = $market_admin_id;
        }
        // query params
        if (is_array($product_category)) {
            $product_category = ObjectSerializer::serializeCollection($product_category, 'form', true);
        }
        if ($product_category !== null) {
            $queryParams['product_category'] = $product_category;
        }
        // query params
        if (is_array($product_destination)) {
            $product_destination = ObjectSerializer::serializeCollection($product_destination, 'form', true);
        }
        if ($product_destination !== null) {
            $queryParams['product_destination'] = $product_destination;
        }
        // query params
        if (is_array($product_tag)) {
            $product_tag = ObjectSerializer::serializeCollection($product_tag, 'form', true);
        }
        if ($product_tag !== null) {
            $queryParams['product_tag'] = $product_tag;
        }
        // query params
        if (is_array($product_language)) {
            $product_language = ObjectSerializer::serializeCollection($product_language, 'form', true);
        }
        if ($product_language !== null) {
            $queryParams['product_language'] = $product_language;
        }
        // query params
        if (is_array($product_location_id)) {
            $product_location_id = ObjectSerializer::serializeCollection($product_location_id, 'form', true);
        }
        if ($product_location_id !== null) {
            $queryParams['product_location_id'] = $product_location_id;
        }
        // query params
        if (is_array($product_location_country_code)) {
            $product_location_country_code = ObjectSerializer::serializeCollection($product_location_country_code, 'form', true);
        }
        if ($product_location_country_code !== null) {
            $queryParams['product_location_country_code'] = $product_location_country_code;
        }
        // query params
        if (is_array($product_currency_code)) {
            $product_currency_code = ObjectSerializer::serializeCollection($product_currency_code, 'form', true);
        }
        if ($product_currency_code !== null) {
            $queryParams['product_currency_code'] = $product_currency_code;
        }
        // query params
        if (is_array($product_custom_field)) {
            $product_custom_field = ObjectSerializer::serializeCollection($product_custom_field, 'form', true);
        }
        if ($product_custom_field !== null) {
            $queryParams['product_custom_field'] = $product_custom_field;
        }
        // query params
        if (is_array($product_type)) {
            $product_type = ObjectSerializer::serializeCollection($product_type, 'form', true);
        }
        if ($product_type !== null) {
            $queryParams['product_type'] = $product_type;
        }
        // query params
        if (is_array($product_status)) {
            $product_status = ObjectSerializer::serializeCollection($product_status, 'form', true);
        }
        if ($product_status !== null) {
            $queryParams['product_status'] = $product_status;
        }
        // query params
        if (is_array($product_catalogue_status)) {
            $product_catalogue_status = ObjectSerializer::serializeCollection($product_catalogue_status, 'form', true);
        }
        if ($product_catalogue_status !== null) {
            $queryParams['product_catalogue_status'] = $product_catalogue_status;
        }
        // query params
        if ($product_availability !== null) {
            if('form' === 'form' && is_array($product_availability)) {
                foreach($product_availability as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_availability'] = $product_availability;
            }
        }
        // query params
        if ($product_relations !== null) {
            if('form' === 'form' && is_array($product_relations)) {
                foreach($product_relations as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_relations'] = $product_relations;
            }
        }
        // query params
        if ($product_favorite !== null) {
            if('form' === 'form' && is_array($product_favorite)) {
                foreach($product_favorite as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_favorite'] = $product_favorite;
            }
        }
        // query params
        if ($product_planet !== null) {
            if('form' === 'form' && is_array($product_planet)) {
                foreach($product_planet as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_planet'] = $product_planet;
            }
        }
        // query params
        if ($product_modified !== null) {
            if('form' === 'form' && is_array($product_modified)) {
                foreach($product_modified as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_modified'] = $product_modified;
            }
        }
        // query params
        if ($product_search_query !== null) {
            if('form' === 'form' && is_array($product_search_query)) {
                foreach($product_search_query as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_search_query'] = $product_search_query;
            }
        }
        // query params
        if ($product_view_type !== null) {
            if('form' === 'form' && is_array($product_view_type)) {
                foreach($product_view_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_view_type'] = $product_view_type;
            }
        }
        // query params
        if ($product_sort_by !== null) {
            if('form' === 'form' && is_array($product_sort_by)) {
                foreach($product_sort_by as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_sort_by'] = $product_sort_by;
            }
        }
        // query params
        if ($product_sort_order !== null) {
            if('form' === 'form' && is_array($product_sort_order)) {
                foreach($product_sort_order as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_sort_order'] = $product_sort_order;
            }
        }
        // query params
        if ($items_per_page !== null) {
            if('form' === 'form' && is_array($items_per_page)) {
                foreach($items_per_page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['items_per_page'] = $items_per_page;
            }
        }
        // query params
        if ($start_index !== null) {
            if('form' === 'form' && is_array($start_index)) {
                foreach($start_index as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['start_index'] = $start_index;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($cache !== null) {
            if('form' === 'form' && is_array($cache)) {
                foreach($cache as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['cache'] = $cache;
            }
        }

        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = ObjectSerializer::toHeaderValue($if_modified_since);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
