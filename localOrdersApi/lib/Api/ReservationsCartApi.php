<?php
/**
 * ReservationsCartApi
 * PHP version 7.2
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
 * OpenAPI Generator version: 5.0.1
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
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use PrioTicket\DistributorAPI\ApiException;
use PrioTicket\DistributorAPI\Configuration;
use PrioTicket\DistributorAPI\HeaderSelector;
use PrioTicket\DistributorAPI\ObjectSerializer;

/**
 * ReservationsCartApi Class Doc Comment
 *
 * @category Class
 * @package  PrioTicket\DistributorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReservationsCartApi
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
    public function setHostIndex($hostIndex)
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
     * Operation addPromocode
     *
     * Add Promocode
     *
     * @param  string $reservation_reference A unique identifier got in response of the reservation_reference API. (required)
     * @param  string $promo_code The promocode which should be applied to the cart. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\ReservationDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function addPromocode($reservation_reference, $promo_code)
    {
        list($response) = $this->addPromocodeWithHttpInfo($reservation_reference, $promo_code);
        return $response;
    }

    /**
     * Operation addPromocodeWithHttpInfo
     *
     * Add Promocode
     *
     * @param  string $reservation_reference A unique identifier got in response of the reservation_reference API. (required)
     * @param  string $promo_code The promocode which should be applied to the cart. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\ReservationDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function addPromocodeWithHttpInfo($reservation_reference, $promo_code)
    {
        $request = $this->addPromocodeRequest($reservation_reference, $promo_code);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\ReservationDetailResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse',
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
                case 409:
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
     * Operation addPromocodeAsync
     *
     * Add Promocode
     *
     * @param  string $reservation_reference A unique identifier got in response of the reservation_reference API. (required)
     * @param  string $promo_code The promocode which should be applied to the cart. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addPromocodeAsync($reservation_reference, $promo_code)
    {
        return $this->addPromocodeAsyncWithHttpInfo($reservation_reference, $promo_code)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addPromocodeAsyncWithHttpInfo
     *
     * Add Promocode
     *
     * @param  string $reservation_reference A unique identifier got in response of the reservation_reference API. (required)
     * @param  string $promo_code The promocode which should be applied to the cart. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addPromocodeAsyncWithHttpInfo($reservation_reference, $promo_code)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse';
        $request = $this->addPromocodeRequest($reservation_reference, $promo_code);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'addPromocode'
     *
     * @param  string $reservation_reference A unique identifier got in response of the reservation_reference API. (required)
     * @param  string $promo_code The promocode which should be applied to the cart. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addPromocodeRequest($reservation_reference, $promo_code)
    {
        // verify the required parameter 'reservation_reference' is set
        if ($reservation_reference === null || (is_array($reservation_reference) && count($reservation_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $reservation_reference when calling addPromocode'
            );
        }
        if (strlen($reservation_reference) < 8) {
            throw new \InvalidArgumentException('invalid length for "$reservation_reference" when calling ReservationsCartApi.addPromocode, must be bigger than or equal to 8.');
        }

        // verify the required parameter 'promo_code' is set
        if ($promo_code === null || (is_array($promo_code) && count($promo_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promo_code when calling addPromocode'
            );
        }

        $resourcePath = '/reservations/{reservation_reference}/promocode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($promo_code !== null) {
            if('form' === 'form' && is_array($promo_code)) {
                foreach($promo_code as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['promo_code'] = $promo_code;
            }
        }


        // path params
        if ($reservation_reference !== null) {
            $resourcePath = str_replace(
                '{' . 'reservation_reference' . '}',
                ObjectSerializer::toPathValue($reservation_reference),
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation cancelReservation
     *
     * Cancel Reservation / Remove Cart Item / Empty Cart
     *
     * @param  string $reservation_reference A unique identifier for the created reservation in the Prio system. (required)
     * @param  string[] $booking_reservation_reference When using the Cart functionality you are able to remove individual products. (optional)
     * @param  string $cancellation_reason Optional reason for this cancellation. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\ReservationDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function cancelReservation($reservation_reference, $booking_reservation_reference = null, $cancellation_reason = null)
    {
        list($response) = $this->cancelReservationWithHttpInfo($reservation_reference, $booking_reservation_reference, $cancellation_reason);
        return $response;
    }

    /**
     * Operation cancelReservationWithHttpInfo
     *
     * Cancel Reservation / Remove Cart Item / Empty Cart
     *
     * @param  string $reservation_reference A unique identifier for the created reservation in the Prio system. (required)
     * @param  string[] $booking_reservation_reference When using the Cart functionality you are able to remove individual products. (optional)
     * @param  string $cancellation_reason Optional reason for this cancellation. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\ReservationDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelReservationWithHttpInfo($reservation_reference, $booking_reservation_reference = null, $cancellation_reason = null)
    {
        $request = $this->cancelReservationRequest($reservation_reference, $booking_reservation_reference, $cancellation_reason);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\ReservationDetailResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse',
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
                case 409:
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
     * Operation cancelReservationAsync
     *
     * Cancel Reservation / Remove Cart Item / Empty Cart
     *
     * @param  string $reservation_reference A unique identifier for the created reservation in the Prio system. (required)
     * @param  string[] $booking_reservation_reference When using the Cart functionality you are able to remove individual products. (optional)
     * @param  string $cancellation_reason Optional reason for this cancellation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelReservationAsync($reservation_reference, $booking_reservation_reference = null, $cancellation_reason = null)
    {
        return $this->cancelReservationAsyncWithHttpInfo($reservation_reference, $booking_reservation_reference, $cancellation_reason)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelReservationAsyncWithHttpInfo
     *
     * Cancel Reservation / Remove Cart Item / Empty Cart
     *
     * @param  string $reservation_reference A unique identifier for the created reservation in the Prio system. (required)
     * @param  string[] $booking_reservation_reference When using the Cart functionality you are able to remove individual products. (optional)
     * @param  string $cancellation_reason Optional reason for this cancellation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelReservationAsyncWithHttpInfo($reservation_reference, $booking_reservation_reference = null, $cancellation_reason = null)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse';
        $request = $this->cancelReservationRequest($reservation_reference, $booking_reservation_reference, $cancellation_reason);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'cancelReservation'
     *
     * @param  string $reservation_reference A unique identifier for the created reservation in the Prio system. (required)
     * @param  string[] $booking_reservation_reference When using the Cart functionality you are able to remove individual products. (optional)
     * @param  string $cancellation_reason Optional reason for this cancellation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cancelReservationRequest($reservation_reference, $booking_reservation_reference = null, $cancellation_reason = null)
    {
        // verify the required parameter 'reservation_reference' is set
        if ($reservation_reference === null || (is_array($reservation_reference) && count($reservation_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $reservation_reference when calling cancelReservation'
            );
        }
        if (strlen($reservation_reference) < 8) {
            throw new \InvalidArgumentException('invalid length for "$reservation_reference" when calling ReservationsCartApi.cancelReservation, must be bigger than or equal to 8.');
        }


        $resourcePath = '/reservations/{reservation_reference}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($booking_reservation_reference)) {
            $booking_reservation_reference = ObjectSerializer::serializeCollection($booking_reservation_reference, 'form', true);
        }
        if ($booking_reservation_reference !== null) {
            $queryParams['booking_reservation_reference'] = $booking_reservation_reference;
        }
        // query params
        if ($cancellation_reason !== null) {
            if('form' === 'form' && is_array($cancellation_reason)) {
                foreach($cancellation_reason as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['cancellation_reason'] = $cancellation_reason;
            }
        }


        // path params
        if ($reservation_reference !== null) {
            $resourcePath = str_replace(
                '{' . 'reservation_reference' . '}',
                ObjectSerializer::toPathValue($reservation_reference),
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createReservation
     *
     * Create Reservation / Create Cart
     *
     * @param  \PrioTicket\DistributorAPI\Models\CreateReservationRequest $create_reservation_request Create Reservation Request. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\ReservationDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function createReservation($create_reservation_request)
    {
        list($response) = $this->createReservationWithHttpInfo($create_reservation_request);
        return $response;
    }

    /**
     * Operation createReservationWithHttpInfo
     *
     * Create Reservation / Create Cart
     *
     * @param  \PrioTicket\DistributorAPI\Models\CreateReservationRequest $create_reservation_request Create Reservation Request. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\ReservationDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function createReservationWithHttpInfo($create_reservation_request)
    {
        $request = $this->createReservationRequest($create_reservation_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 201:
                    if ('\PrioTicket\DistributorAPI\Models\ReservationDetailResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse',
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
                case 409:
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
     * Operation createReservationAsync
     *
     * Create Reservation / Create Cart
     *
     * @param  \PrioTicket\DistributorAPI\Models\CreateReservationRequest $create_reservation_request Create Reservation Request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createReservationAsync($create_reservation_request)
    {
        return $this->createReservationAsyncWithHttpInfo($create_reservation_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createReservationAsyncWithHttpInfo
     *
     * Create Reservation / Create Cart
     *
     * @param  \PrioTicket\DistributorAPI\Models\CreateReservationRequest $create_reservation_request Create Reservation Request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createReservationAsyncWithHttpInfo($create_reservation_request)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse';
        $request = $this->createReservationRequest($create_reservation_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createReservation'
     *
     * @param  \PrioTicket\DistributorAPI\Models\CreateReservationRequest $create_reservation_request Create Reservation Request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createReservationRequest($create_reservation_request)
    {
        // verify the required parameter 'create_reservation_request' is set
        if ($create_reservation_request === null || (is_array($create_reservation_request) && count($create_reservation_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_reservation_request when calling createReservation'
            );
        }

        $resourcePath = '/reservations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($create_reservation_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_reservation_request));
            } else {
                $httpBody = $create_reservation_request;
            }
        } elseif (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getReservation
     *
     * Reservation Details / Cart Details
     *
     * @param  string $reservation_reference A unique identifier got in response of the create reservation API. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\ReservationDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function getReservation($reservation_reference)
    {
        list($response) = $this->getReservationWithHttpInfo($reservation_reference);
        return $response;
    }

    /**
     * Operation getReservationWithHttpInfo
     *
     * Reservation Details / Cart Details
     *
     * @param  string $reservation_reference A unique identifier got in response of the create reservation API. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\ReservationDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReservationWithHttpInfo($reservation_reference)
    {
        $request = $this->getReservationRequest($reservation_reference);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\ReservationDetailResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse',
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
     * Operation getReservationAsync
     *
     * Reservation Details / Cart Details
     *
     * @param  string $reservation_reference A unique identifier got in response of the create reservation API. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReservationAsync($reservation_reference)
    {
        return $this->getReservationAsyncWithHttpInfo($reservation_reference)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReservationAsyncWithHttpInfo
     *
     * Reservation Details / Cart Details
     *
     * @param  string $reservation_reference A unique identifier got in response of the create reservation API. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReservationAsyncWithHttpInfo($reservation_reference)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse';
        $request = $this->getReservationRequest($reservation_reference);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getReservation'
     *
     * @param  string $reservation_reference A unique identifier got in response of the create reservation API. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getReservationRequest($reservation_reference)
    {
        // verify the required parameter 'reservation_reference' is set
        if ($reservation_reference === null || (is_array($reservation_reference) && count($reservation_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $reservation_reference when calling getReservation'
            );
        }
        if (strlen($reservation_reference) < 8) {
            throw new \InvalidArgumentException('invalid length for "$reservation_reference" when calling ReservationsCartApi.getReservation, must be bigger than or equal to 8.');
        }


        $resourcePath = '/reservations/{reservation_reference}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($reservation_reference !== null) {
            $resourcePath = str_replace(
                '{' . 'reservation_reference' . '}',
                ObjectSerializer::toPathValue($reservation_reference),
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation removePromocode
     *
     * Remove Promocode
     *
     * @param  string $reservation_reference A unique identifier got in response of the reservation API. (required)
     * @param  string $promo_code The promocode which should should be removed from the cart. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\ReservationDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function removePromocode($reservation_reference, $promo_code)
    {
        list($response) = $this->removePromocodeWithHttpInfo($reservation_reference, $promo_code);
        return $response;
    }

    /**
     * Operation removePromocodeWithHttpInfo
     *
     * Remove Promocode
     *
     * @param  string $reservation_reference A unique identifier got in response of the reservation API. (required)
     * @param  string $promo_code The promocode which should should be removed from the cart. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\ReservationDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function removePromocodeWithHttpInfo($reservation_reference, $promo_code)
    {
        $request = $this->removePromocodeRequest($reservation_reference, $promo_code);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\ReservationDetailResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse',
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
                case 409:
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
     * Operation removePromocodeAsync
     *
     * Remove Promocode
     *
     * @param  string $reservation_reference A unique identifier got in response of the reservation API. (required)
     * @param  string $promo_code The promocode which should should be removed from the cart. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removePromocodeAsync($reservation_reference, $promo_code)
    {
        return $this->removePromocodeAsyncWithHttpInfo($reservation_reference, $promo_code)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation removePromocodeAsyncWithHttpInfo
     *
     * Remove Promocode
     *
     * @param  string $reservation_reference A unique identifier got in response of the reservation API. (required)
     * @param  string $promo_code The promocode which should should be removed from the cart. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removePromocodeAsyncWithHttpInfo($reservation_reference, $promo_code)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse';
        $request = $this->removePromocodeRequest($reservation_reference, $promo_code);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'removePromocode'
     *
     * @param  string $reservation_reference A unique identifier got in response of the reservation API. (required)
     * @param  string $promo_code The promocode which should should be removed from the cart. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function removePromocodeRequest($reservation_reference, $promo_code)
    {
        // verify the required parameter 'reservation_reference' is set
        if ($reservation_reference === null || (is_array($reservation_reference) && count($reservation_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $reservation_reference when calling removePromocode'
            );
        }
        if (strlen($reservation_reference) < 8) {
            throw new \InvalidArgumentException('invalid length for "$reservation_reference" when calling ReservationsCartApi.removePromocode, must be bigger than or equal to 8.');
        }

        // verify the required parameter 'promo_code' is set
        if ($promo_code === null || (is_array($promo_code) && count($promo_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promo_code when calling removePromocode'
            );
        }

        $resourcePath = '/reservations/{reservation_reference}/promocode/{promo_code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($reservation_reference !== null) {
            $resourcePath = str_replace(
                '{' . 'reservation_reference' . '}',
                ObjectSerializer::toPathValue($reservation_reference),
                $resourcePath
            );
        }
        // path params
        if ($promo_code !== null) {
            $resourcePath = str_replace(
                '{' . 'promo_code' . '}',
                ObjectSerializer::toPathValue($promo_code),
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateReservation
     *
     * Update Reservation / Update Cart
     *
     * @param  string $reservation_reference A unique identifier for the created reservation in Prio. (required)
     * @param  \PrioTicket\DistributorAPI\Models\CreateReservationRequest $create_reservation_request Update Reservation Request. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\ReservationDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function updateReservation($reservation_reference, $create_reservation_request)
    {
        list($response) = $this->updateReservationWithHttpInfo($reservation_reference, $create_reservation_request);
        return $response;
    }

    /**
     * Operation updateReservationWithHttpInfo
     *
     * Update Reservation / Update Cart
     *
     * @param  string $reservation_reference A unique identifier for the created reservation in Prio. (required)
     * @param  \PrioTicket\DistributorAPI\Models\CreateReservationRequest $create_reservation_request Update Reservation Request. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\ReservationDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateReservationWithHttpInfo($reservation_reference, $create_reservation_request)
    {
        $request = $this->updateReservationRequest($reservation_reference, $create_reservation_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\PrioTicket\DistributorAPI\Models\ReservationDetailResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 405:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 501:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 502:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 504:
                    if ('\PrioTicket\DistributorAPI\Models\ErrorModel' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\ErrorModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse',
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
                case 409:
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
     * Operation updateReservationAsync
     *
     * Update Reservation / Update Cart
     *
     * @param  string $reservation_reference A unique identifier for the created reservation in Prio. (required)
     * @param  \PrioTicket\DistributorAPI\Models\CreateReservationRequest $create_reservation_request Update Reservation Request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateReservationAsync($reservation_reference, $create_reservation_request)
    {
        return $this->updateReservationAsyncWithHttpInfo($reservation_reference, $create_reservation_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateReservationAsyncWithHttpInfo
     *
     * Update Reservation / Update Cart
     *
     * @param  string $reservation_reference A unique identifier for the created reservation in Prio. (required)
     * @param  \PrioTicket\DistributorAPI\Models\CreateReservationRequest $create_reservation_request Update Reservation Request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateReservationAsyncWithHttpInfo($reservation_reference, $create_reservation_request)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\ReservationDetailResponse';
        $request = $this->updateReservationRequest($reservation_reference, $create_reservation_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'updateReservation'
     *
     * @param  string $reservation_reference A unique identifier for the created reservation in Prio. (required)
     * @param  \PrioTicket\DistributorAPI\Models\CreateReservationRequest $create_reservation_request Update Reservation Request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateReservationRequest($reservation_reference, $create_reservation_request)
    {
        // verify the required parameter 'reservation_reference' is set
        if ($reservation_reference === null || (is_array($reservation_reference) && count($reservation_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $reservation_reference when calling updateReservation'
            );
        }
        if (strlen($reservation_reference) < 8) {
            throw new \InvalidArgumentException('invalid length for "$reservation_reference" when calling ReservationsCartApi.updateReservation, must be bigger than or equal to 8.');
        }

        // verify the required parameter 'create_reservation_request' is set
        if ($create_reservation_request === null || (is_array($create_reservation_request) && count($create_reservation_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_reservation_request when calling updateReservation'
            );
        }

        $resourcePath = '/reservations/{reservation_reference}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($reservation_reference !== null) {
            $resourcePath = str_replace(
                '{' . 'reservation_reference' . '}',
                ObjectSerializer::toPathValue($reservation_reference),
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
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($create_reservation_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_reservation_request));
            } else {
                $httpBody = $create_reservation_request;
            }
        } elseif (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
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
