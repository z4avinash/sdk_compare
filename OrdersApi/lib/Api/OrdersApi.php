<?php
/**
 * OrdersApi
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
 * OrdersApi Class Doc Comment
 *
 * @category Class
 * @package  PrioTicket\DistributorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrdersApi
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
     * Operation cancelOrder
     *
     * Cancel Order / Booking
     *
     * @param  string $order_reference In case only the &#x60;order_reference&#x60; is provided, a full cancellation will be made. (required)
     * @param  string[] $booking_reference [FILTER] In case the &#x60;booking_reference&#x60; is provided, a partial cancellation will be made. Only the specified booking(s) will be cancelled. (optional)
     * @param  string[] $product_type_transaction_id [FILTER] **(ADVANCED)** In case the &#x60;product_type_transaction_id&#x60; is provided, a partial cancellation will be made. Only the specified transaction(s) will be cancelled. (optional)
     * @param  string $cancellation_reason [INFO] Optional reason for this cancellation. (optional)
     * @param  string $payment_refund [CONFIG] Whether the guest payment should be refunded. In case the order is partially cancelled, the amount will be partially refunded as well. If multiple payments are made (split-payment) then all linked payments will be refunded. This value will be ignored in case no payment is made.  For more flexible refunds you could use the Cancel / Refund Payment API instead. (optional, default to 'true')
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\OrderDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function cancelOrder($order_reference, $booking_reference = null, $product_type_transaction_id = null, $cancellation_reason = null, $payment_refund = 'true')
    {
        list($response) = $this->cancelOrderWithHttpInfo($order_reference, $booking_reference, $product_type_transaction_id, $cancellation_reason, $payment_refund);
        return $response;
    }

    /**
     * Operation cancelOrderWithHttpInfo
     *
     * Cancel Order / Booking
     *
     * @param  string $order_reference In case only the &#x60;order_reference&#x60; is provided, a full cancellation will be made. (required)
     * @param  string[] $booking_reference [FILTER] In case the &#x60;booking_reference&#x60; is provided, a partial cancellation will be made. Only the specified booking(s) will be cancelled. (optional)
     * @param  string[] $product_type_transaction_id [FILTER] **(ADVANCED)** In case the &#x60;product_type_transaction_id&#x60; is provided, a partial cancellation will be made. Only the specified transaction(s) will be cancelled. (optional)
     * @param  string $cancellation_reason [INFO] Optional reason for this cancellation. (optional)
     * @param  string $payment_refund [CONFIG] Whether the guest payment should be refunded. In case the order is partially cancelled, the amount will be partially refunded as well. If multiple payments are made (split-payment) then all linked payments will be refunded. This value will be ignored in case no payment is made.  For more flexible refunds you could use the Cancel / Refund Payment API instead. (optional, default to 'true')
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\OrderDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelOrderWithHttpInfo($order_reference, $booking_reference = null, $product_type_transaction_id = null, $cancellation_reason = null, $payment_refund = 'true')
    {
        $request = $this->cancelOrderRequest($order_reference, $booking_reference, $product_type_transaction_id, $cancellation_reason, $payment_refund);

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
                    if ('\PrioTicket\DistributorAPI\Models\OrderDetailResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\OrderDetailResponse', []),
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
                case 409:
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

            $returnType = '\PrioTicket\DistributorAPI\Models\OrderDetailResponse';
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
                        '\PrioTicket\DistributorAPI\Models\OrderDetailResponse',
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
     * Operation cancelOrderAsync
     *
     * Cancel Order / Booking
     *
     * @param  string $order_reference In case only the &#x60;order_reference&#x60; is provided, a full cancellation will be made. (required)
     * @param  string[] $booking_reference [FILTER] In case the &#x60;booking_reference&#x60; is provided, a partial cancellation will be made. Only the specified booking(s) will be cancelled. (optional)
     * @param  string[] $product_type_transaction_id [FILTER] **(ADVANCED)** In case the &#x60;product_type_transaction_id&#x60; is provided, a partial cancellation will be made. Only the specified transaction(s) will be cancelled. (optional)
     * @param  string $cancellation_reason [INFO] Optional reason for this cancellation. (optional)
     * @param  string $payment_refund [CONFIG] Whether the guest payment should be refunded. In case the order is partially cancelled, the amount will be partially refunded as well. If multiple payments are made (split-payment) then all linked payments will be refunded. This value will be ignored in case no payment is made.  For more flexible refunds you could use the Cancel / Refund Payment API instead. (optional, default to 'true')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelOrderAsync($order_reference, $booking_reference = null, $product_type_transaction_id = null, $cancellation_reason = null, $payment_refund = 'true')
    {
        return $this->cancelOrderAsyncWithHttpInfo($order_reference, $booking_reference, $product_type_transaction_id, $cancellation_reason, $payment_refund)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelOrderAsyncWithHttpInfo
     *
     * Cancel Order / Booking
     *
     * @param  string $order_reference In case only the &#x60;order_reference&#x60; is provided, a full cancellation will be made. (required)
     * @param  string[] $booking_reference [FILTER] In case the &#x60;booking_reference&#x60; is provided, a partial cancellation will be made. Only the specified booking(s) will be cancelled. (optional)
     * @param  string[] $product_type_transaction_id [FILTER] **(ADVANCED)** In case the &#x60;product_type_transaction_id&#x60; is provided, a partial cancellation will be made. Only the specified transaction(s) will be cancelled. (optional)
     * @param  string $cancellation_reason [INFO] Optional reason for this cancellation. (optional)
     * @param  string $payment_refund [CONFIG] Whether the guest payment should be refunded. In case the order is partially cancelled, the amount will be partially refunded as well. If multiple payments are made (split-payment) then all linked payments will be refunded. This value will be ignored in case no payment is made.  For more flexible refunds you could use the Cancel / Refund Payment API instead. (optional, default to 'true')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelOrderAsyncWithHttpInfo($order_reference, $booking_reference = null, $product_type_transaction_id = null, $cancellation_reason = null, $payment_refund = 'true')
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\OrderDetailResponse';
        $request = $this->cancelOrderRequest($order_reference, $booking_reference, $product_type_transaction_id, $cancellation_reason, $payment_refund);

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
     * Create request for operation 'cancelOrder'
     *
     * @param  string $order_reference In case only the &#x60;order_reference&#x60; is provided, a full cancellation will be made. (required)
     * @param  string[] $booking_reference [FILTER] In case the &#x60;booking_reference&#x60; is provided, a partial cancellation will be made. Only the specified booking(s) will be cancelled. (optional)
     * @param  string[] $product_type_transaction_id [FILTER] **(ADVANCED)** In case the &#x60;product_type_transaction_id&#x60; is provided, a partial cancellation will be made. Only the specified transaction(s) will be cancelled. (optional)
     * @param  string $cancellation_reason [INFO] Optional reason for this cancellation. (optional)
     * @param  string $payment_refund [CONFIG] Whether the guest payment should be refunded. In case the order is partially cancelled, the amount will be partially refunded as well. If multiple payments are made (split-payment) then all linked payments will be refunded. This value will be ignored in case no payment is made.  For more flexible refunds you could use the Cancel / Refund Payment API instead. (optional, default to 'true')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function cancelOrderRequest($order_reference, $booking_reference = null, $product_type_transaction_id = null, $cancellation_reason = null, $payment_refund = 'true')
    {
        // verify the required parameter 'order_reference' is set
        if ($order_reference === null || (is_array($order_reference) && count($order_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_reference when calling cancelOrder'
            );
        }
        if (strlen($order_reference) < 8) {
            throw new \InvalidArgumentException('invalid length for "$order_reference" when calling OrdersApi.cancelOrder, must be bigger than or equal to 8.');
        }


        $resourcePath = '/orders/{order_reference}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($booking_reference)) {
            $booking_reference = ObjectSerializer::serializeCollection($booking_reference, 'form', true);
        }
        if ($booking_reference !== null) {
            $queryParams['booking_reference'] = $booking_reference;
        }
        // query params
        if (is_array($product_type_transaction_id)) {
            $product_type_transaction_id = ObjectSerializer::serializeCollection($product_type_transaction_id, 'form', true);
        }
        if ($product_type_transaction_id !== null) {
            $queryParams['product_type_transaction_id'] = $product_type_transaction_id;
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
        // query params
        if ($payment_refund !== null) {
            if('form' === 'form' && is_array($payment_refund)) {
                foreach($payment_refund as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['payment_refund'] = $payment_refund;
            }
        }


        // path params
        if ($order_reference !== null) {
            $resourcePath = str_replace(
                '{' . 'order_reference' . '}',
                ObjectSerializer::toPathValue($order_reference),
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createOrder
     *
     * Create Order / Confirm Reservation / Checkout Cart
     *
     * @param  \PrioTicket\DistributorAPI\Models\CreateOrderRequest $create_order_request Create Order Request. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\OrderDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function createOrder($create_order_request)
    {
        list($response) = $this->createOrderWithHttpInfo($create_order_request);
        return $response;
    }

    /**
     * Operation createOrderWithHttpInfo
     *
     * Create Order / Confirm Reservation / Checkout Cart
     *
     * @param  \PrioTicket\DistributorAPI\Models\CreateOrderRequest $create_order_request Create Order Request. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\OrderDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function createOrderWithHttpInfo($create_order_request)
    {
        $request = $this->createOrderRequest($create_order_request);

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
                case 201:
                    if ('\PrioTicket\DistributorAPI\Models\OrderDetailResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\OrderDetailResponse', []),
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
                case 402:
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
                case 409:
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

            $returnType = '\PrioTicket\DistributorAPI\Models\OrderDetailResponse';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\PrioTicket\DistributorAPI\Models\OrderDetailResponse',
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
                case 402:
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
     * Operation createOrderAsync
     *
     * Create Order / Confirm Reservation / Checkout Cart
     *
     * @param  \PrioTicket\DistributorAPI\Models\CreateOrderRequest $create_order_request Create Order Request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrderAsync($create_order_request)
    {
        return $this->createOrderAsyncWithHttpInfo($create_order_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createOrderAsyncWithHttpInfo
     *
     * Create Order / Confirm Reservation / Checkout Cart
     *
     * @param  \PrioTicket\DistributorAPI\Models\CreateOrderRequest $create_order_request Create Order Request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createOrderAsyncWithHttpInfo($create_order_request)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\OrderDetailResponse';
        $request = $this->createOrderRequest($create_order_request);

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
     * Create request for operation 'createOrder'
     *
     * @param  \PrioTicket\DistributorAPI\Models\CreateOrderRequest $create_order_request Create Order Request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createOrderRequest($create_order_request)
    {
        // verify the required parameter 'create_order_request' is set
        if ($create_order_request === null || (is_array($create_order_request) && count($create_order_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_order_request when calling createOrder'
            );
        }

        $resourcePath = '/orders';
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
        if (isset($create_order_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_order_request));
            } else {
                $httpBody = $create_order_request;
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getOrder
     *
     * Order Details
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  int $order_version Order Version / Revision number. By default the latest revision will be returned.  If set, the &#x60;cache&#x60; value will be ignored. (optional) (deprecated)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\OrderDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function getOrder($order_reference, $order_version = null, $cache = 'true')
    {
        list($response) = $this->getOrderWithHttpInfo($order_reference, $order_version, $cache);
        return $response;
    }

    /**
     * Operation getOrderWithHttpInfo
     *
     * Order Details
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  int $order_version Order Version / Revision number. By default the latest revision will be returned.  If set, the &#x60;cache&#x60; value will be ignored. (optional) (deprecated)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\OrderDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderWithHttpInfo($order_reference, $order_version = null, $cache = 'true')
    {
        $request = $this->getOrderRequest($order_reference, $order_version, $cache);

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
                    if ('\PrioTicket\DistributorAPI\Models\OrderDetailResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\OrderDetailResponse', []),
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

            $returnType = '\PrioTicket\DistributorAPI\Models\OrderDetailResponse';
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
                        '\PrioTicket\DistributorAPI\Models\OrderDetailResponse',
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
     * Operation getOrderAsync
     *
     * Order Details
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  int $order_version Order Version / Revision number. By default the latest revision will be returned.  If set, the &#x60;cache&#x60; value will be ignored. (optional) (deprecated)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderAsync($order_reference, $order_version = null, $cache = 'true')
    {
        return $this->getOrderAsyncWithHttpInfo($order_reference, $order_version, $cache)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderAsyncWithHttpInfo
     *
     * Order Details
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  int $order_version Order Version / Revision number. By default the latest revision will be returned.  If set, the &#x60;cache&#x60; value will be ignored. (optional) (deprecated)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderAsyncWithHttpInfo($order_reference, $order_version = null, $cache = 'true')
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\OrderDetailResponse';
        $request = $this->getOrderRequest($order_reference, $order_version, $cache);

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
     * Create request for operation 'getOrder'
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  int $order_version Order Version / Revision number. By default the latest revision will be returned.  If set, the &#x60;cache&#x60; value will be ignored. (optional) (deprecated)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getOrderRequest($order_reference, $order_version = null, $cache = 'true')
    {
        // verify the required parameter 'order_reference' is set
        if ($order_reference === null || (is_array($order_reference) && count($order_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_reference when calling getOrder'
            );
        }
        if (strlen($order_reference) < 8) {
            throw new \InvalidArgumentException('invalid length for "$order_reference" when calling OrdersApi.getOrder, must be bigger than or equal to 8.');
        }


        $resourcePath = '/orders/{order_reference}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($order_version !== null) {
            if('form' === 'form' && is_array($order_version)) {
                foreach($order_version as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_version'] = $order_version;
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


        // path params
        if ($order_reference !== null) {
            $resourcePath = str_replace(
                '{' . 'order_reference' . '}',
                ObjectSerializer::toPathValue($order_reference),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml', 'text/csv']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml', 'text/csv'],
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
     * Operation getOrders
     *
     * List Orders
     *
     * @param  string $reseller_id [FILTER] on &#x60;reseller_id&#x60;. (optional)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $market_admin_id [FILTER] on &#x60;market_admin_id&#x60;. (optional) (deprecated)
     * @param  string $supplier_id [FILTER] on &#x60;supplier_id&#x60;. (optional)
     * @param  string $order_reference [FILTER] on &#x60;order_reference&#x60;. (optional)
     * @param  string $order_external_reference [FILTER] on &#x60;order_external_reference&#x60;. (optional)
     * @param  \PrioTicket\DistributorAPI\Models\OrderStatusTypes[] $order_status [FILTER] on &#x60;order_status&#x60;. (optional) (deprecated)
     * @param  string $order_contact_uid [FILTER] on &#x60;order_contact_uid&#x60;. (optional)
     * @param  string $order_contact_name [FILTER] on &#x60;order_contact_name&#x60;, &#x60;contact_name_first&#x60; and &#x60;contact_name_last&#x60;. (optional)
     * @param  string $order_contact_email [FILTER] on &#x60;order_contact_email&#x60;. (optional)
     * @param  \DateTime $order_created_from [FILTER] on &#x60;order_created&#x60;. Only the orders created from this specific date will be returned. A longer time range might increase response times. (optional)
     * @param  \DateTime $order_created_to [FILTER] on &#x60;order_created&#x60;. Only the orders created till this specific date will be returned. A longer time range might increase response times. (optional)
     * @param  \DateTime $order_modified [FILTER] on &#x60;order_modified&#x60;. Only the orders modified after the given date will be returned. This includes newly created orders.  For caching purposes we recommend using the &#x60;If-Modified-Since&#x60; header instead. (optional) (deprecated)
     * @param  string $booking_reference [FILTER] on &#x60;booking_reference&#x60;. (optional)
     * @param  string $booking_external_reference [FILTER] on &#x60;booking_external_reference&#x60;. (optional)
     * @param  string[] $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string $product_type_code [FILTER] on &#x60;product_type_code&#x60;. (optional)
     * @param  string $product_availability_id [FILTER] on &#x60;product_availability_id&#x60;. (optional)
     * @param  string $product_availability_capacity_id [FILTER] on &#x60;product_availability_capacity_id&#x60;. (optional) (deprecated)
     * @param  string $order_created_email [FILTER] on &#x60;order_created_email&#x60;. Only the orders made by this user / cashier will be returned. (optional)
     * @param  string $order_search_query [SEARCH] on keywords. This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (&#x60;cache:true&#x60;) (optional)
     * @param  string $filter_bookings [CONFIG] Filter (sub) bookings from response.   Whether to include all bookings belonging to the same order or only those matching the defined filters. By default the system will return every booking of an order, regardless whether some of those bookings do not match the defined filters.  For example. when a filter for &#x60;product_id&#x60; is set, only orders which contain that product will be returned, but additional bookings (for different product IDs) of that same order might be listed as well. By enabling this filter, only bookings for that &#x60;product_id&#x60; would be returned. (optional, default to 'false')
     * @param  string $order_view_type [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials. (optional) (deprecated)
     * @param  string $order_sort_by [SORT] Select sorting method.  UPCOMING: [INVOICE_DATE]. (optional, default to 'ORDER_CREATED')
     * @param  string $order_sort_order [SORT] Keyword used to sort result sets in either ascending or descending order. (optional, default to 'DESC')
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\OrderListResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function getOrders($reseller_id = null, $distributor_id = null, $market_admin_id = null, $supplier_id = null, $order_reference = null, $order_external_reference = null, $order_status = null, $order_contact_uid = null, $order_contact_name = null, $order_contact_email = null, $order_created_from = null, $order_created_to = null, $order_modified = null, $booking_reference = null, $booking_external_reference = null, $product_id = null, $product_type_code = null, $product_availability_id = null, $product_availability_capacity_id = null, $order_created_email = null, $order_search_query = null, $filter_bookings = 'false', $order_view_type = null, $order_sort_by = 'ORDER_CREATED', $order_sort_order = 'DESC', $items_per_page = 10, $start_index = 1, $page = 1, $cache = 'true', $if_modified_since = null)
    {
        list($response) = $this->getOrdersWithHttpInfo($reseller_id, $distributor_id, $market_admin_id, $supplier_id, $order_reference, $order_external_reference, $order_status, $order_contact_uid, $order_contact_name, $order_contact_email, $order_created_from, $order_created_to, $order_modified, $booking_reference, $booking_external_reference, $product_id, $product_type_code, $product_availability_id, $product_availability_capacity_id, $order_created_email, $order_search_query, $filter_bookings, $order_view_type, $order_sort_by, $order_sort_order, $items_per_page, $start_index, $page, $cache, $if_modified_since);
        return $response;
    }

    /**
     * Operation getOrdersWithHttpInfo
     *
     * List Orders
     *
     * @param  string $reseller_id [FILTER] on &#x60;reseller_id&#x60;. (optional)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $market_admin_id [FILTER] on &#x60;market_admin_id&#x60;. (optional) (deprecated)
     * @param  string $supplier_id [FILTER] on &#x60;supplier_id&#x60;. (optional)
     * @param  string $order_reference [FILTER] on &#x60;order_reference&#x60;. (optional)
     * @param  string $order_external_reference [FILTER] on &#x60;order_external_reference&#x60;. (optional)
     * @param  \PrioTicket\DistributorAPI\Models\OrderStatusTypes[] $order_status [FILTER] on &#x60;order_status&#x60;. (optional) (deprecated)
     * @param  string $order_contact_uid [FILTER] on &#x60;order_contact_uid&#x60;. (optional)
     * @param  string $order_contact_name [FILTER] on &#x60;order_contact_name&#x60;, &#x60;contact_name_first&#x60; and &#x60;contact_name_last&#x60;. (optional)
     * @param  string $order_contact_email [FILTER] on &#x60;order_contact_email&#x60;. (optional)
     * @param  \DateTime $order_created_from [FILTER] on &#x60;order_created&#x60;. Only the orders created from this specific date will be returned. A longer time range might increase response times. (optional)
     * @param  \DateTime $order_created_to [FILTER] on &#x60;order_created&#x60;. Only the orders created till this specific date will be returned. A longer time range might increase response times. (optional)
     * @param  \DateTime $order_modified [FILTER] on &#x60;order_modified&#x60;. Only the orders modified after the given date will be returned. This includes newly created orders.  For caching purposes we recommend using the &#x60;If-Modified-Since&#x60; header instead. (optional) (deprecated)
     * @param  string $booking_reference [FILTER] on &#x60;booking_reference&#x60;. (optional)
     * @param  string $booking_external_reference [FILTER] on &#x60;booking_external_reference&#x60;. (optional)
     * @param  string[] $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string $product_type_code [FILTER] on &#x60;product_type_code&#x60;. (optional)
     * @param  string $product_availability_id [FILTER] on &#x60;product_availability_id&#x60;. (optional)
     * @param  string $product_availability_capacity_id [FILTER] on &#x60;product_availability_capacity_id&#x60;. (optional) (deprecated)
     * @param  string $order_created_email [FILTER] on &#x60;order_created_email&#x60;. Only the orders made by this user / cashier will be returned. (optional)
     * @param  string $order_search_query [SEARCH] on keywords. This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (&#x60;cache:true&#x60;) (optional)
     * @param  string $filter_bookings [CONFIG] Filter (sub) bookings from response.   Whether to include all bookings belonging to the same order or only those matching the defined filters. By default the system will return every booking of an order, regardless whether some of those bookings do not match the defined filters.  For example. when a filter for &#x60;product_id&#x60; is set, only orders which contain that product will be returned, but additional bookings (for different product IDs) of that same order might be listed as well. By enabling this filter, only bookings for that &#x60;product_id&#x60; would be returned. (optional, default to 'false')
     * @param  string $order_view_type [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials. (optional) (deprecated)
     * @param  string $order_sort_by [SORT] Select sorting method.  UPCOMING: [INVOICE_DATE]. (optional, default to 'ORDER_CREATED')
     * @param  string $order_sort_order [SORT] Keyword used to sort result sets in either ascending or descending order. (optional, default to 'DESC')
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\OrderListResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrdersWithHttpInfo($reseller_id = null, $distributor_id = null, $market_admin_id = null, $supplier_id = null, $order_reference = null, $order_external_reference = null, $order_status = null, $order_contact_uid = null, $order_contact_name = null, $order_contact_email = null, $order_created_from = null, $order_created_to = null, $order_modified = null, $booking_reference = null, $booking_external_reference = null, $product_id = null, $product_type_code = null, $product_availability_id = null, $product_availability_capacity_id = null, $order_created_email = null, $order_search_query = null, $filter_bookings = 'false', $order_view_type = null, $order_sort_by = 'ORDER_CREATED', $order_sort_order = 'DESC', $items_per_page = 10, $start_index = 1, $page = 1, $cache = 'true', $if_modified_since = null)
    {
        $request = $this->getOrdersRequest($reseller_id, $distributor_id, $market_admin_id, $supplier_id, $order_reference, $order_external_reference, $order_status, $order_contact_uid, $order_contact_name, $order_contact_email, $order_created_from, $order_created_to, $order_modified, $booking_reference, $booking_external_reference, $product_id, $product_type_code, $product_availability_id, $product_availability_capacity_id, $order_created_email, $order_search_query, $filter_bookings, $order_view_type, $order_sort_by, $order_sort_order, $items_per_page, $start_index, $page, $cache, $if_modified_since);

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
                    if ('\PrioTicket\DistributorAPI\Models\OrderListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\OrderListResponse', []),
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

            $returnType = '\PrioTicket\DistributorAPI\Models\OrderListResponse';
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
                        '\PrioTicket\DistributorAPI\Models\OrderListResponse',
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
     * Operation getOrdersAsync
     *
     * List Orders
     *
     * @param  string $reseller_id [FILTER] on &#x60;reseller_id&#x60;. (optional)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $market_admin_id [FILTER] on &#x60;market_admin_id&#x60;. (optional) (deprecated)
     * @param  string $supplier_id [FILTER] on &#x60;supplier_id&#x60;. (optional)
     * @param  string $order_reference [FILTER] on &#x60;order_reference&#x60;. (optional)
     * @param  string $order_external_reference [FILTER] on &#x60;order_external_reference&#x60;. (optional)
     * @param  \PrioTicket\DistributorAPI\Models\OrderStatusTypes[] $order_status [FILTER] on &#x60;order_status&#x60;. (optional) (deprecated)
     * @param  string $order_contact_uid [FILTER] on &#x60;order_contact_uid&#x60;. (optional)
     * @param  string $order_contact_name [FILTER] on &#x60;order_contact_name&#x60;, &#x60;contact_name_first&#x60; and &#x60;contact_name_last&#x60;. (optional)
     * @param  string $order_contact_email [FILTER] on &#x60;order_contact_email&#x60;. (optional)
     * @param  \DateTime $order_created_from [FILTER] on &#x60;order_created&#x60;. Only the orders created from this specific date will be returned. A longer time range might increase response times. (optional)
     * @param  \DateTime $order_created_to [FILTER] on &#x60;order_created&#x60;. Only the orders created till this specific date will be returned. A longer time range might increase response times. (optional)
     * @param  \DateTime $order_modified [FILTER] on &#x60;order_modified&#x60;. Only the orders modified after the given date will be returned. This includes newly created orders.  For caching purposes we recommend using the &#x60;If-Modified-Since&#x60; header instead. (optional) (deprecated)
     * @param  string $booking_reference [FILTER] on &#x60;booking_reference&#x60;. (optional)
     * @param  string $booking_external_reference [FILTER] on &#x60;booking_external_reference&#x60;. (optional)
     * @param  string[] $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string $product_type_code [FILTER] on &#x60;product_type_code&#x60;. (optional)
     * @param  string $product_availability_id [FILTER] on &#x60;product_availability_id&#x60;. (optional)
     * @param  string $product_availability_capacity_id [FILTER] on &#x60;product_availability_capacity_id&#x60;. (optional) (deprecated)
     * @param  string $order_created_email [FILTER] on &#x60;order_created_email&#x60;. Only the orders made by this user / cashier will be returned. (optional)
     * @param  string $order_search_query [SEARCH] on keywords. This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (&#x60;cache:true&#x60;) (optional)
     * @param  string $filter_bookings [CONFIG] Filter (sub) bookings from response.   Whether to include all bookings belonging to the same order or only those matching the defined filters. By default the system will return every booking of an order, regardless whether some of those bookings do not match the defined filters.  For example. when a filter for &#x60;product_id&#x60; is set, only orders which contain that product will be returned, but additional bookings (for different product IDs) of that same order might be listed as well. By enabling this filter, only bookings for that &#x60;product_id&#x60; would be returned. (optional, default to 'false')
     * @param  string $order_view_type [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials. (optional) (deprecated)
     * @param  string $order_sort_by [SORT] Select sorting method.  UPCOMING: [INVOICE_DATE]. (optional, default to 'ORDER_CREATED')
     * @param  string $order_sort_order [SORT] Keyword used to sort result sets in either ascending or descending order. (optional, default to 'DESC')
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersAsync($reseller_id = null, $distributor_id = null, $market_admin_id = null, $supplier_id = null, $order_reference = null, $order_external_reference = null, $order_status = null, $order_contact_uid = null, $order_contact_name = null, $order_contact_email = null, $order_created_from = null, $order_created_to = null, $order_modified = null, $booking_reference = null, $booking_external_reference = null, $product_id = null, $product_type_code = null, $product_availability_id = null, $product_availability_capacity_id = null, $order_created_email = null, $order_search_query = null, $filter_bookings = 'false', $order_view_type = null, $order_sort_by = 'ORDER_CREATED', $order_sort_order = 'DESC', $items_per_page = 10, $start_index = 1, $page = 1, $cache = 'true', $if_modified_since = null)
    {
        return $this->getOrdersAsyncWithHttpInfo($reseller_id, $distributor_id, $market_admin_id, $supplier_id, $order_reference, $order_external_reference, $order_status, $order_contact_uid, $order_contact_name, $order_contact_email, $order_created_from, $order_created_to, $order_modified, $booking_reference, $booking_external_reference, $product_id, $product_type_code, $product_availability_id, $product_availability_capacity_id, $order_created_email, $order_search_query, $filter_bookings, $order_view_type, $order_sort_by, $order_sort_order, $items_per_page, $start_index, $page, $cache, $if_modified_since)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrdersAsyncWithHttpInfo
     *
     * List Orders
     *
     * @param  string $reseller_id [FILTER] on &#x60;reseller_id&#x60;. (optional)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $market_admin_id [FILTER] on &#x60;market_admin_id&#x60;. (optional) (deprecated)
     * @param  string $supplier_id [FILTER] on &#x60;supplier_id&#x60;. (optional)
     * @param  string $order_reference [FILTER] on &#x60;order_reference&#x60;. (optional)
     * @param  string $order_external_reference [FILTER] on &#x60;order_external_reference&#x60;. (optional)
     * @param  \PrioTicket\DistributorAPI\Models\OrderStatusTypes[] $order_status [FILTER] on &#x60;order_status&#x60;. (optional) (deprecated)
     * @param  string $order_contact_uid [FILTER] on &#x60;order_contact_uid&#x60;. (optional)
     * @param  string $order_contact_name [FILTER] on &#x60;order_contact_name&#x60;, &#x60;contact_name_first&#x60; and &#x60;contact_name_last&#x60;. (optional)
     * @param  string $order_contact_email [FILTER] on &#x60;order_contact_email&#x60;. (optional)
     * @param  \DateTime $order_created_from [FILTER] on &#x60;order_created&#x60;. Only the orders created from this specific date will be returned. A longer time range might increase response times. (optional)
     * @param  \DateTime $order_created_to [FILTER] on &#x60;order_created&#x60;. Only the orders created till this specific date will be returned. A longer time range might increase response times. (optional)
     * @param  \DateTime $order_modified [FILTER] on &#x60;order_modified&#x60;. Only the orders modified after the given date will be returned. This includes newly created orders.  For caching purposes we recommend using the &#x60;If-Modified-Since&#x60; header instead. (optional) (deprecated)
     * @param  string $booking_reference [FILTER] on &#x60;booking_reference&#x60;. (optional)
     * @param  string $booking_external_reference [FILTER] on &#x60;booking_external_reference&#x60;. (optional)
     * @param  string[] $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string $product_type_code [FILTER] on &#x60;product_type_code&#x60;. (optional)
     * @param  string $product_availability_id [FILTER] on &#x60;product_availability_id&#x60;. (optional)
     * @param  string $product_availability_capacity_id [FILTER] on &#x60;product_availability_capacity_id&#x60;. (optional) (deprecated)
     * @param  string $order_created_email [FILTER] on &#x60;order_created_email&#x60;. Only the orders made by this user / cashier will be returned. (optional)
     * @param  string $order_search_query [SEARCH] on keywords. This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (&#x60;cache:true&#x60;) (optional)
     * @param  string $filter_bookings [CONFIG] Filter (sub) bookings from response.   Whether to include all bookings belonging to the same order or only those matching the defined filters. By default the system will return every booking of an order, regardless whether some of those bookings do not match the defined filters.  For example. when a filter for &#x60;product_id&#x60; is set, only orders which contain that product will be returned, but additional bookings (for different product IDs) of that same order might be listed as well. By enabling this filter, only bookings for that &#x60;product_id&#x60; would be returned. (optional, default to 'false')
     * @param  string $order_view_type [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials. (optional) (deprecated)
     * @param  string $order_sort_by [SORT] Select sorting method.  UPCOMING: [INVOICE_DATE]. (optional, default to 'ORDER_CREATED')
     * @param  string $order_sort_order [SORT] Keyword used to sort result sets in either ascending or descending order. (optional, default to 'DESC')
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersAsyncWithHttpInfo($reseller_id = null, $distributor_id = null, $market_admin_id = null, $supplier_id = null, $order_reference = null, $order_external_reference = null, $order_status = null, $order_contact_uid = null, $order_contact_name = null, $order_contact_email = null, $order_created_from = null, $order_created_to = null, $order_modified = null, $booking_reference = null, $booking_external_reference = null, $product_id = null, $product_type_code = null, $product_availability_id = null, $product_availability_capacity_id = null, $order_created_email = null, $order_search_query = null, $filter_bookings = 'false', $order_view_type = null, $order_sort_by = 'ORDER_CREATED', $order_sort_order = 'DESC', $items_per_page = 10, $start_index = 1, $page = 1, $cache = 'true', $if_modified_since = null)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\OrderListResponse';
        $request = $this->getOrdersRequest($reseller_id, $distributor_id, $market_admin_id, $supplier_id, $order_reference, $order_external_reference, $order_status, $order_contact_uid, $order_contact_name, $order_contact_email, $order_created_from, $order_created_to, $order_modified, $booking_reference, $booking_external_reference, $product_id, $product_type_code, $product_availability_id, $product_availability_capacity_id, $order_created_email, $order_search_query, $filter_bookings, $order_view_type, $order_sort_by, $order_sort_order, $items_per_page, $start_index, $page, $cache, $if_modified_since);

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
     * Create request for operation 'getOrders'
     *
     * @param  string $reseller_id [FILTER] on &#x60;reseller_id&#x60;. (optional)
     * @param  string $distributor_id [FILTER] on &#x60;distributor_id&#x60;. (optional)
     * @param  string $market_admin_id [FILTER] on &#x60;market_admin_id&#x60;. (optional) (deprecated)
     * @param  string $supplier_id [FILTER] on &#x60;supplier_id&#x60;. (optional)
     * @param  string $order_reference [FILTER] on &#x60;order_reference&#x60;. (optional)
     * @param  string $order_external_reference [FILTER] on &#x60;order_external_reference&#x60;. (optional)
     * @param  \PrioTicket\DistributorAPI\Models\OrderStatusTypes[] $order_status [FILTER] on &#x60;order_status&#x60;. (optional) (deprecated)
     * @param  string $order_contact_uid [FILTER] on &#x60;order_contact_uid&#x60;. (optional)
     * @param  string $order_contact_name [FILTER] on &#x60;order_contact_name&#x60;, &#x60;contact_name_first&#x60; and &#x60;contact_name_last&#x60;. (optional)
     * @param  string $order_contact_email [FILTER] on &#x60;order_contact_email&#x60;. (optional)
     * @param  \DateTime $order_created_from [FILTER] on &#x60;order_created&#x60;. Only the orders created from this specific date will be returned. A longer time range might increase response times. (optional)
     * @param  \DateTime $order_created_to [FILTER] on &#x60;order_created&#x60;. Only the orders created till this specific date will be returned. A longer time range might increase response times. (optional)
     * @param  \DateTime $order_modified [FILTER] on &#x60;order_modified&#x60;. Only the orders modified after the given date will be returned. This includes newly created orders.  For caching purposes we recommend using the &#x60;If-Modified-Since&#x60; header instead. (optional) (deprecated)
     * @param  string $booking_reference [FILTER] on &#x60;booking_reference&#x60;. (optional)
     * @param  string $booking_external_reference [FILTER] on &#x60;booking_external_reference&#x60;. (optional)
     * @param  string[] $product_id [FILTER] on &#x60;product_id&#x60;. (optional)
     * @param  string $product_type_code [FILTER] on &#x60;product_type_code&#x60;. (optional)
     * @param  string $product_availability_id [FILTER] on &#x60;product_availability_id&#x60;. (optional)
     * @param  string $product_availability_capacity_id [FILTER] on &#x60;product_availability_capacity_id&#x60;. (optional) (deprecated)
     * @param  string $order_created_email [FILTER] on &#x60;order_created_email&#x60;. Only the orders made by this user / cashier will be returned. (optional)
     * @param  string $order_search_query [SEARCH] on keywords. This API provides full-text (wildcard) search capabilities.   Only results linked to your account will be returned and searching is only available in case cache is enabled (&#x60;cache:true&#x60;) (optional)
     * @param  string $filter_bookings [CONFIG] Filter (sub) bookings from response.   Whether to include all bookings belonging to the same order or only those matching the defined filters. By default the system will return every booking of an order, regardless whether some of those bookings do not match the defined filters.  For example. when a filter for &#x60;product_id&#x60; is set, only orders which contain that product will be returned, but additional bookings (for different product IDs) of that same order might be listed as well. By enabling this filter, only bookings for that &#x60;product_id&#x60; would be returned. (optional, default to 'false')
     * @param  string $order_view_type [CONFIG] **(ADVANCED)** account view type.  This value defaults and is limited to the scope of your credentials. (optional) (deprecated)
     * @param  string $order_sort_by [SORT] Select sorting method.  UPCOMING: [INVOICE_DATE]. (optional, default to 'ORDER_CREATED')
     * @param  string $order_sort_order [SORT] Keyword used to sort result sets in either ascending or descending order. (optional, default to 'DESC')
     * @param  int $items_per_page [PAGING] Items Per Page - Allows user&#39;s to configure the &#x60;items_per_page&#x60; value. For example, to load 100 items per page, the developer may point the user to a url with the query string ?items_per_page&#x3D;100. This parameter is mainly usefull to manage response times, higher values result in longer response times and therefore it is recommended to keep this value as low as possible. We do allow to adjust this value so it can be used to batch/cache/update inventory at once.  Clients should anticipate that the value of this parameter may not be honored by the API, and should rely exclusively on the contents of the &#x60;items_per_page&#x60; response element in calculating actual page size. (optional, default to 10)
     * @param  int $start_index [PAGING] Index-based paging - Allows user&#39;s to jump directly to a specific item position within a list of items. For example, to load 10 items starting at item 200, the developer may point the user to a url with the query string ?start_index&#x3D;200. (optional, default to 1)
     * @param  int $page [PAGING] Page-based paging - Allows user&#39;s to jump directly to a specific page within the items. This is similar to index-based paging, but saves the developer the extra step of having to calculate the item index for a new page of items. For example, rather than jump to item number 200, the developer could jump to page 20. The urls during page-based paging could use the query string ?page&#x3D;1 or ?page&#x3D;20. The &#x60;page_index&#x60; and &#x60;total_pages&#x60; properties are used for this style of paging. (optional, default to 1)
     * @param  string $cache [CACHE] Whether the results should be loaded from the caching server. This will significantly improve performance and disabling this functionality is not recommended. (optional, default to 'true')
     * @param  string $if_modified_since [CACHE] The &#x60;If-Modified-Since&#x60; request HTTP header makes the request conditional: the server will send back the requested resource, with a 200 status, only if it has been modified after the given date. If the resource has not been modified since, the response will be a 304 without any body; the &#x60;Last-Modified&#x60; response header of a previous request will contain the date of last modification.  Note that if a single resource has changed, all records matching your request will be returned, not just those changed after the given date. This provides you with an efficient caching method. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getOrdersRequest($reseller_id = null, $distributor_id = null, $market_admin_id = null, $supplier_id = null, $order_reference = null, $order_external_reference = null, $order_status = null, $order_contact_uid = null, $order_contact_name = null, $order_contact_email = null, $order_created_from = null, $order_created_to = null, $order_modified = null, $booking_reference = null, $booking_external_reference = null, $product_id = null, $product_type_code = null, $product_availability_id = null, $product_availability_capacity_id = null, $order_created_email = null, $order_search_query = null, $filter_bookings = 'false', $order_view_type = null, $order_sort_by = 'ORDER_CREATED', $order_sort_order = 'DESC', $items_per_page = 10, $start_index = 1, $page = 1, $cache = 'true', $if_modified_since = null)
    {
        if ($order_reference !== null && strlen($order_reference) < 8) {
            throw new \InvalidArgumentException('invalid length for "$order_reference" when calling OrdersApi.getOrders, must be bigger than or equal to 8.');
        }

        if ($booking_reference !== null && strlen($booking_reference) < 8) {
            throw new \InvalidArgumentException('invalid length for "$booking_reference" when calling OrdersApi.getOrders, must be bigger than or equal to 8.');
        }

        if ($product_type_code !== null && strlen($product_type_code) < 8) {
            throw new \InvalidArgumentException('invalid length for "$product_type_code" when calling OrdersApi.getOrders, must be bigger than or equal to 8.');
        }

        if ($items_per_page !== null && $items_per_page > 500) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling OrdersApi.getOrders, must be smaller than or equal to 500.');
        }
        if ($items_per_page !== null && $items_per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$items_per_page" when calling OrdersApi.getOrders, must be bigger than or equal to 1.');
        }

        if ($start_index !== null && $start_index > 10000) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling OrdersApi.getOrders, must be smaller than or equal to 10000.');
        }
        if ($start_index !== null && $start_index < 1) {
            throw new \InvalidArgumentException('invalid value for "$start_index" when calling OrdersApi.getOrders, must be bigger than or equal to 1.');
        }

        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling OrdersApi.getOrders, must be bigger than or equal to 1.');
        }


        $resourcePath = '/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($reseller_id !== null) {
            if('form' === 'form' && is_array($reseller_id)) {
                foreach($reseller_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['reseller_id'] = $reseller_id;
            }
        }
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
        if ($market_admin_id !== null) {
            if('form' === 'form' && is_array($market_admin_id)) {
                foreach($market_admin_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['market_admin_id'] = $market_admin_id;
            }
        }
        // query params
        if ($supplier_id !== null) {
            if('form' === 'form' && is_array($supplier_id)) {
                foreach($supplier_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['supplier_id'] = $supplier_id;
            }
        }
        // query params
        if ($order_reference !== null) {
            if('form' === 'form' && is_array($order_reference)) {
                foreach($order_reference as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_reference'] = $order_reference;
            }
        }
        // query params
        if ($order_external_reference !== null) {
            if('form' === 'form' && is_array($order_external_reference)) {
                foreach($order_external_reference as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_external_reference'] = $order_external_reference;
            }
        }
        // query params
        if (is_array($order_status)) {
            $order_status = ObjectSerializer::serializeCollection($order_status, 'form', true);
        }
        if ($order_status !== null) {
            $queryParams['order_status'] = $order_status;
        }
        // query params
        if ($order_contact_uid !== null) {
            if('form' === 'form' && is_array($order_contact_uid)) {
                foreach($order_contact_uid as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_contact_uid'] = $order_contact_uid;
            }
        }
        // query params
        if ($order_contact_name !== null) {
            if('form' === 'form' && is_array($order_contact_name)) {
                foreach($order_contact_name as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_contact_name'] = $order_contact_name;
            }
        }
        // query params
        if ($order_contact_email !== null) {
            if('form' === 'form' && is_array($order_contact_email)) {
                foreach($order_contact_email as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_contact_email'] = $order_contact_email;
            }
        }
        // query params
        if ($order_created_from !== null) {
            if('form' === 'form' && is_array($order_created_from)) {
                foreach($order_created_from as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_created_from'] = $order_created_from;
            }
        }
        // query params
        if ($order_created_to !== null) {
            if('form' === 'form' && is_array($order_created_to)) {
                foreach($order_created_to as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_created_to'] = $order_created_to;
            }
        }
        // query params
        if ($order_modified !== null) {
            if('form' === 'form' && is_array($order_modified)) {
                foreach($order_modified as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_modified'] = $order_modified;
            }
        }
        // query params
        if ($booking_reference !== null) {
            if('form' === 'form' && is_array($booking_reference)) {
                foreach($booking_reference as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['booking_reference'] = $booking_reference;
            }
        }
        // query params
        if ($booking_external_reference !== null) {
            if('form' === 'form' && is_array($booking_external_reference)) {
                foreach($booking_external_reference as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['booking_external_reference'] = $booking_external_reference;
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
        if ($product_type_code !== null) {
            if('form' === 'form' && is_array($product_type_code)) {
                foreach($product_type_code as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_type_code'] = $product_type_code;
            }
        }
        // query params
        if ($product_availability_id !== null) {
            if('form' === 'form' && is_array($product_availability_id)) {
                foreach($product_availability_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_availability_id'] = $product_availability_id;
            }
        }
        // query params
        if ($product_availability_capacity_id !== null) {
            if('form' === 'form' && is_array($product_availability_capacity_id)) {
                foreach($product_availability_capacity_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['product_availability_capacity_id'] = $product_availability_capacity_id;
            }
        }
        // query params
        if ($order_created_email !== null) {
            if('form' === 'form' && is_array($order_created_email)) {
                foreach($order_created_email as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_created_email'] = $order_created_email;
            }
        }
        // query params
        if ($order_search_query !== null) {
            if('form' === 'form' && is_array($order_search_query)) {
                foreach($order_search_query as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_search_query'] = $order_search_query;
            }
        }
        // query params
        if ($filter_bookings !== null) {
            if('form' === 'form' && is_array($filter_bookings)) {
                foreach($filter_bookings as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['filter_bookings'] = $filter_bookings;
            }
        }
        // query params
        if ($order_view_type !== null) {
            if('form' === 'form' && is_array($order_view_type)) {
                foreach($order_view_type as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_view_type'] = $order_view_type;
            }
        }
        // query params
        if ($order_sort_by !== null) {
            if('form' === 'form' && is_array($order_sort_by)) {
                foreach($order_sort_by as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_sort_by'] = $order_sort_by;
            }
        }
        // query params
        if ($order_sort_order !== null) {
            if('form' === 'form' && is_array($order_sort_order)) {
                foreach($order_sort_order as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_sort_order'] = $order_sort_order;
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
     * Operation getVoucher
     *
     * Get Voucher
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  string $booking_reference A unique identifier got in response of booking API. (optional)
     * @param  string $voucher_additional_information This information will be shown on the voucher in a seperate section. (optional) (deprecated)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\GetVoucherResponseJSON|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function getVoucher($order_reference, $booking_reference = null, $voucher_additional_information = null)
    {
        list($response) = $this->getVoucherWithHttpInfo($order_reference, $booking_reference, $voucher_additional_information);
        return $response;
    }

    /**
     * Operation getVoucherWithHttpInfo
     *
     * Get Voucher
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  string $booking_reference A unique identifier got in response of booking API. (optional)
     * @param  string $voucher_additional_information This information will be shown on the voucher in a seperate section. (optional) (deprecated)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\GetVoucherResponseJSON|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVoucherWithHttpInfo($order_reference, $booking_reference = null, $voucher_additional_information = null)
    {
        $request = $this->getVoucherRequest($order_reference, $booking_reference, $voucher_additional_information);

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
                    if ('\PrioTicket\DistributorAPI\Models\GetVoucherResponseJSON' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\GetVoucherResponseJSON', []),
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

            $returnType = '\PrioTicket\DistributorAPI\Models\GetVoucherResponseJSON';
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
                        '\PrioTicket\DistributorAPI\Models\GetVoucherResponseJSON',
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
     * Operation getVoucherAsync
     *
     * Get Voucher
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  string $booking_reference A unique identifier got in response of booking API. (optional)
     * @param  string $voucher_additional_information This information will be shown on the voucher in a seperate section. (optional) (deprecated)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVoucherAsync($order_reference, $booking_reference = null, $voucher_additional_information = null)
    {
        return $this->getVoucherAsyncWithHttpInfo($order_reference, $booking_reference, $voucher_additional_information)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVoucherAsyncWithHttpInfo
     *
     * Get Voucher
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  string $booking_reference A unique identifier got in response of booking API. (optional)
     * @param  string $voucher_additional_information This information will be shown on the voucher in a seperate section. (optional) (deprecated)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVoucherAsyncWithHttpInfo($order_reference, $booking_reference = null, $voucher_additional_information = null)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\GetVoucherResponseJSON';
        $request = $this->getVoucherRequest($order_reference, $booking_reference, $voucher_additional_information);

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
     * Create request for operation 'getVoucher'
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  string $booking_reference A unique identifier got in response of booking API. (optional)
     * @param  string $voucher_additional_information This information will be shown on the voucher in a seperate section. (optional) (deprecated)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getVoucherRequest($order_reference, $booking_reference = null, $voucher_additional_information = null)
    {
        // verify the required parameter 'order_reference' is set
        if ($order_reference === null || (is_array($order_reference) && count($order_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_reference when calling getVoucher'
            );
        }
        if (strlen($order_reference) < 8) {
            throw new \InvalidArgumentException('invalid length for "$order_reference" when calling OrdersApi.getVoucher, must be bigger than or equal to 8.');
        }

        if ($booking_reference !== null && strlen($booking_reference) < 8) {
            throw new \InvalidArgumentException('invalid length for "$booking_reference" when calling OrdersApi.getVoucher, must be bigger than or equal to 8.');
        }


        $resourcePath = '/orders/{order_reference}/voucher';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($booking_reference !== null) {
            if('form' === 'form' && is_array($booking_reference)) {
                foreach($booking_reference as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['booking_reference'] = $booking_reference;
            }
        }
        // query params
        if ($voucher_additional_information !== null) {
            if('form' === 'form' && is_array($voucher_additional_information)) {
                foreach($voucher_additional_information as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['voucher_additional_information'] = $voucher_additional_information;
            }
        }


        // path params
        if ($order_reference !== null) {
            $resourcePath = str_replace(
                '{' . 'order_reference' . '}',
                ObjectSerializer::toPathValue($order_reference),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/pdf']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/pdf'],
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
     * Operation updateOrder
     *
     * Update / Amend Order
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  \PrioTicket\DistributorAPI\Models\UpdateOrderRequest $update_order_request Update Order Request. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \PrioTicket\DistributorAPI\Models\OrderDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel
     */
    public function updateOrder($order_reference, $update_order_request)
    {
        list($response) = $this->updateOrderWithHttpInfo($order_reference, $update_order_request);
        return $response;
    }

    /**
     * Operation updateOrderWithHttpInfo
     *
     * Update / Amend Order
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  \PrioTicket\DistributorAPI\Models\UpdateOrderRequest $update_order_request Update Order Request. (required)
     *
     * @throws \PrioTicket\DistributorAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \PrioTicket\DistributorAPI\Models\OrderDetailResponse|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel|\PrioTicket\DistributorAPI\Models\ErrorModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateOrderWithHttpInfo($order_reference, $update_order_request)
    {
        $request = $this->updateOrderRequest($order_reference, $update_order_request);

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
                    if ('\PrioTicket\DistributorAPI\Models\OrderDetailResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\PrioTicket\DistributorAPI\Models\OrderDetailResponse', []),
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
                case 409:
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

            $returnType = '\PrioTicket\DistributorAPI\Models\OrderDetailResponse';
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
                        '\PrioTicket\DistributorAPI\Models\OrderDetailResponse',
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
     * Operation updateOrderAsync
     *
     * Update / Amend Order
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  \PrioTicket\DistributorAPI\Models\UpdateOrderRequest $update_order_request Update Order Request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateOrderAsync($order_reference, $update_order_request)
    {
        return $this->updateOrderAsyncWithHttpInfo($order_reference, $update_order_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateOrderAsyncWithHttpInfo
     *
     * Update / Amend Order
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  \PrioTicket\DistributorAPI\Models\UpdateOrderRequest $update_order_request Update Order Request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateOrderAsyncWithHttpInfo($order_reference, $update_order_request)
    {
        $returnType = '\PrioTicket\DistributorAPI\Models\OrderDetailResponse';
        $request = $this->updateOrderRequest($order_reference, $update_order_request);

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
     * Create request for operation 'updateOrder'
     *
     * @param  string $order_reference A unique identifier got in response of booking API. (required)
     * @param  \PrioTicket\DistributorAPI\Models\UpdateOrderRequest $update_order_request Update Order Request. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateOrderRequest($order_reference, $update_order_request)
    {
        // verify the required parameter 'order_reference' is set
        if ($order_reference === null || (is_array($order_reference) && count($order_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_reference when calling updateOrder'
            );
        }
        if (strlen($order_reference) < 8) {
            throw new \InvalidArgumentException('invalid length for "$order_reference" when calling OrdersApi.updateOrder, must be bigger than or equal to 8.');
        }

        // verify the required parameter 'update_order_request' is set
        if ($update_order_request === null || (is_array($update_order_request) && count($update_order_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $update_order_request when calling updateOrder'
            );
        }

        $resourcePath = '/orders/{order_reference}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($order_reference !== null) {
            $resourcePath = str_replace(
                '{' . 'order_reference' . '}',
                ObjectSerializer::toPathValue($order_reference),
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
        if (isset($update_order_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($update_order_request));
            } else {
                $httpBody = $update_order_request;
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
