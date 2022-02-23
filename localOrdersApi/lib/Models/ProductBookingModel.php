<?php
/**
 * ProductBookingModel
 *
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

namespace PrioTicket\DistributorAPI\Models;

use \ArrayAccess;
use \PrioTicket\DistributorAPI\ObjectSerializer;

/**
 * ProductBookingModel Class Doc Comment
 *
 * @category Class
 * @description Product booking model.
 * @package  PrioTicket\DistributorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ProductBookingModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductBookingModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'booking_external_reference' => 'string',
        'booking_status' => '\PrioTicket\DistributorAPI\Models\BookingStatusTypes',
        'booking_version' => 'int',
        'booking_voucher_released' => 'bool',
        'booking_travel_date' => '\DateTime',
        'booking_valid_until' => '\DateTime',
        'booking_invoice_status' => '\PrioTicket\DistributorAPI\Models\InvoiceStatus',
        'booking_language' => 'string',
        'booking_pricing' => '\PrioTicket\DistributorAPI\Models\Pricing',
        'booking_notes' => '\PrioTicket\DistributorAPI\Models\Note[]',
        'booking_created' => '\DateTime',
        'booking_modified' => '\DateTime',
        'booking_confirmed' => '\DateTime',
        'booking_cancelled' => '\DateTime',
        'product_id' => 'string',
        'product_relation_id' => 'string',
        'product_pickup_point_id' => 'string',
        'product_pickup_point' => '\PrioTicket\DistributorAPI\Models\PickupPoint',
        'product_availability_id' => 'string',
        'product_availability_from_date_time' => '\DateTime',
        'product_availability_to_date_time' => '\DateTime',
        'product_availability_capacity_id' => 'string',
        'product_availability_capacity_shared_id' => 'string',
        'product_title' => 'string',
        'product_supplier_id' => 'string',
        'product_supplier_name' => 'string',
        'product_supplier_admin_id' => 'string',
        'product_supplier_admin_name' => 'string',
        'product_market_admin_id' => 'string',
        'product_market_admin_name' => 'string',
        'product_source_id' => 'string',
        'product_source_name' => 'string',
        'product_entry_notes' => 'string',
        'product_admission_type' => '\PrioTicket\DistributorAPI\Models\ProductAdmissionType',
        'product_currency_code' => 'string',
        'product_cancellation_allowed' => 'bool',
        'product_options' => '\PrioTicket\DistributorAPI\Models\BookingExtraOptions[]',
        'product_combi_details' => '\PrioTicket\DistributorAPI\Models\ProductCombiDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'booking_external_reference' => null,
        'booking_status' => null,
        'booking_version' => null,
        'booking_voucher_released' => null,
        'booking_travel_date' => 'date-time',
        'booking_valid_until' => 'date-time',
        'booking_invoice_status' => null,
        'booking_language' => null,
        'booking_pricing' => null,
        'booking_notes' => null,
        'booking_created' => 'date-time',
        'booking_modified' => 'date-time',
        'booking_confirmed' => 'date-time',
        'booking_cancelled' => 'date-time',
        'product_id' => null,
        'product_relation_id' => null,
        'product_pickup_point_id' => null,
        'product_pickup_point' => null,
        'product_availability_id' => null,
        'product_availability_from_date_time' => 'date-time',
        'product_availability_to_date_time' => 'date-time',
        'product_availability_capacity_id' => null,
        'product_availability_capacity_shared_id' => null,
        'product_title' => null,
        'product_supplier_id' => null,
        'product_supplier_name' => null,
        'product_supplier_admin_id' => null,
        'product_supplier_admin_name' => null,
        'product_market_admin_id' => null,
        'product_market_admin_name' => null,
        'product_source_id' => null,
        'product_source_name' => null,
        'product_entry_notes' => null,
        'product_admission_type' => null,
        'product_currency_code' => null,
        'product_cancellation_allowed' => null,
        'product_options' => null,
        'product_combi_details' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'booking_external_reference' => 'booking_external_reference',
        'booking_status' => 'booking_status',
        'booking_version' => 'booking_version',
        'booking_voucher_released' => 'booking_voucher_released',
        'booking_travel_date' => 'booking_travel_date',
        'booking_valid_until' => 'booking_valid_until',
        'booking_invoice_status' => 'booking_invoice_status',
        'booking_language' => 'booking_language',
        'booking_pricing' => 'booking_pricing',
        'booking_notes' => 'booking_notes',
        'booking_created' => 'booking_created',
        'booking_modified' => 'booking_modified',
        'booking_confirmed' => 'booking_confirmed',
        'booking_cancelled' => 'booking_cancelled',
        'product_id' => 'product_id',
        'product_relation_id' => 'product_relation_id',
        'product_pickup_point_id' => 'product_pickup_point_id',
        'product_pickup_point' => 'product_pickup_point',
        'product_availability_id' => 'product_availability_id',
        'product_availability_from_date_time' => 'product_availability_from_date_time',
        'product_availability_to_date_time' => 'product_availability_to_date_time',
        'product_availability_capacity_id' => 'product_availability_capacity_id',
        'product_availability_capacity_shared_id' => 'product_availability_capacity_shared_id',
        'product_title' => 'product_title',
        'product_supplier_id' => 'product_supplier_id',
        'product_supplier_name' => 'product_supplier_name',
        'product_supplier_admin_id' => 'product_supplier_admin_id',
        'product_supplier_admin_name' => 'product_supplier_admin_name',
        'product_market_admin_id' => 'product_market_admin_id',
        'product_market_admin_name' => 'product_market_admin_name',
        'product_source_id' => 'product_source_id',
        'product_source_name' => 'product_source_name',
        'product_entry_notes' => 'product_entry_notes',
        'product_admission_type' => 'product_admission_type',
        'product_currency_code' => 'product_currency_code',
        'product_cancellation_allowed' => 'product_cancellation_allowed',
        'product_options' => 'product_options',
        'product_combi_details' => 'product_combi_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'booking_external_reference' => 'setBookingExternalReference',
        'booking_status' => 'setBookingStatus',
        'booking_version' => 'setBookingVersion',
        'booking_voucher_released' => 'setBookingVoucherReleased',
        'booking_travel_date' => 'setBookingTravelDate',
        'booking_valid_until' => 'setBookingValidUntil',
        'booking_invoice_status' => 'setBookingInvoiceStatus',
        'booking_language' => 'setBookingLanguage',
        'booking_pricing' => 'setBookingPricing',
        'booking_notes' => 'setBookingNotes',
        'booking_created' => 'setBookingCreated',
        'booking_modified' => 'setBookingModified',
        'booking_confirmed' => 'setBookingConfirmed',
        'booking_cancelled' => 'setBookingCancelled',
        'product_id' => 'setProductId',
        'product_relation_id' => 'setProductRelationId',
        'product_pickup_point_id' => 'setProductPickupPointId',
        'product_pickup_point' => 'setProductPickupPoint',
        'product_availability_id' => 'setProductAvailabilityId',
        'product_availability_from_date_time' => 'setProductAvailabilityFromDateTime',
        'product_availability_to_date_time' => 'setProductAvailabilityToDateTime',
        'product_availability_capacity_id' => 'setProductAvailabilityCapacityId',
        'product_availability_capacity_shared_id' => 'setProductAvailabilityCapacitySharedId',
        'product_title' => 'setProductTitle',
        'product_supplier_id' => 'setProductSupplierId',
        'product_supplier_name' => 'setProductSupplierName',
        'product_supplier_admin_id' => 'setProductSupplierAdminId',
        'product_supplier_admin_name' => 'setProductSupplierAdminName',
        'product_market_admin_id' => 'setProductMarketAdminId',
        'product_market_admin_name' => 'setProductMarketAdminName',
        'product_source_id' => 'setProductSourceId',
        'product_source_name' => 'setProductSourceName',
        'product_entry_notes' => 'setProductEntryNotes',
        'product_admission_type' => 'setProductAdmissionType',
        'product_currency_code' => 'setProductCurrencyCode',
        'product_cancellation_allowed' => 'setProductCancellationAllowed',
        'product_options' => 'setProductOptions',
        'product_combi_details' => 'setProductCombiDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'booking_external_reference' => 'getBookingExternalReference',
        'booking_status' => 'getBookingStatus',
        'booking_version' => 'getBookingVersion',
        'booking_voucher_released' => 'getBookingVoucherReleased',
        'booking_travel_date' => 'getBookingTravelDate',
        'booking_valid_until' => 'getBookingValidUntil',
        'booking_invoice_status' => 'getBookingInvoiceStatus',
        'booking_language' => 'getBookingLanguage',
        'booking_pricing' => 'getBookingPricing',
        'booking_notes' => 'getBookingNotes',
        'booking_created' => 'getBookingCreated',
        'booking_modified' => 'getBookingModified',
        'booking_confirmed' => 'getBookingConfirmed',
        'booking_cancelled' => 'getBookingCancelled',
        'product_id' => 'getProductId',
        'product_relation_id' => 'getProductRelationId',
        'product_pickup_point_id' => 'getProductPickupPointId',
        'product_pickup_point' => 'getProductPickupPoint',
        'product_availability_id' => 'getProductAvailabilityId',
        'product_availability_from_date_time' => 'getProductAvailabilityFromDateTime',
        'product_availability_to_date_time' => 'getProductAvailabilityToDateTime',
        'product_availability_capacity_id' => 'getProductAvailabilityCapacityId',
        'product_availability_capacity_shared_id' => 'getProductAvailabilityCapacitySharedId',
        'product_title' => 'getProductTitle',
        'product_supplier_id' => 'getProductSupplierId',
        'product_supplier_name' => 'getProductSupplierName',
        'product_supplier_admin_id' => 'getProductSupplierAdminId',
        'product_supplier_admin_name' => 'getProductSupplierAdminName',
        'product_market_admin_id' => 'getProductMarketAdminId',
        'product_market_admin_name' => 'getProductMarketAdminName',
        'product_source_id' => 'getProductSourceId',
        'product_source_name' => 'getProductSourceName',
        'product_entry_notes' => 'getProductEntryNotes',
        'product_admission_type' => 'getProductAdmissionType',
        'product_currency_code' => 'getProductCurrencyCode',
        'product_cancellation_allowed' => 'getProductCancellationAllowed',
        'product_options' => 'getProductOptions',
        'product_combi_details' => 'getProductCombiDetails'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['booking_external_reference'] = $data['booking_external_reference'] ?? null;
        $this->container['booking_status'] = $data['booking_status'] ?? null;
        $this->container['booking_version'] = $data['booking_version'] ?? 1;
        $this->container['booking_voucher_released'] = $data['booking_voucher_released'] ?? null;
        $this->container['booking_travel_date'] = $data['booking_travel_date'] ?? null;
        $this->container['booking_valid_until'] = $data['booking_valid_until'] ?? null;
        $this->container['booking_invoice_status'] = $data['booking_invoice_status'] ?? null;
        $this->container['booking_language'] = $data['booking_language'] ?? 'en';
        $this->container['booking_pricing'] = $data['booking_pricing'] ?? null;
        $this->container['booking_notes'] = $data['booking_notes'] ?? null;
        $this->container['booking_created'] = $data['booking_created'] ?? null;
        $this->container['booking_modified'] = $data['booking_modified'] ?? null;
        $this->container['booking_confirmed'] = $data['booking_confirmed'] ?? null;
        $this->container['booking_cancelled'] = $data['booking_cancelled'] ?? null;
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['product_relation_id'] = $data['product_relation_id'] ?? null;
        $this->container['product_pickup_point_id'] = $data['product_pickup_point_id'] ?? null;
        $this->container['product_pickup_point'] = $data['product_pickup_point'] ?? null;
        $this->container['product_availability_id'] = $data['product_availability_id'] ?? null;
        $this->container['product_availability_from_date_time'] = $data['product_availability_from_date_time'] ?? null;
        $this->container['product_availability_to_date_time'] = $data['product_availability_to_date_time'] ?? null;
        $this->container['product_availability_capacity_id'] = $data['product_availability_capacity_id'] ?? null;
        $this->container['product_availability_capacity_shared_id'] = $data['product_availability_capacity_shared_id'] ?? null;
        $this->container['product_title'] = $data['product_title'] ?? null;
        $this->container['product_supplier_id'] = $data['product_supplier_id'] ?? null;
        $this->container['product_supplier_name'] = $data['product_supplier_name'] ?? null;
        $this->container['product_supplier_admin_id'] = $data['product_supplier_admin_id'] ?? null;
        $this->container['product_supplier_admin_name'] = $data['product_supplier_admin_name'] ?? null;
        $this->container['product_market_admin_id'] = $data['product_market_admin_id'] ?? null;
        $this->container['product_market_admin_name'] = $data['product_market_admin_name'] ?? null;
        $this->container['product_source_id'] = $data['product_source_id'] ?? null;
        $this->container['product_source_name'] = $data['product_source_name'] ?? null;
        $this->container['product_entry_notes'] = $data['product_entry_notes'] ?? null;
        $this->container['product_admission_type'] = $data['product_admission_type'] ?? null;
        $this->container['product_currency_code'] = $data['product_currency_code'] ?? null;
        $this->container['product_cancellation_allowed'] = $data['product_cancellation_allowed'] ?? true;
        $this->container['product_options'] = $data['product_options'] ?? null;
        $this->container['product_combi_details'] = $data['product_combi_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['booking_external_reference'] === null) {
            $invalidProperties[] = "'booking_external_reference' can't be null";
        }
        if ($this->container['booking_status'] === null) {
            $invalidProperties[] = "'booking_status' can't be null";
        }
        if (!is_null($this->container['booking_version']) && ($this->container['booking_version'] < 1)) {
            $invalidProperties[] = "invalid value for 'booking_version', must be bigger than or equal to 1.";
        }

        if ($this->container['booking_created'] === null) {
            $invalidProperties[] = "'booking_created' can't be null";
        }
        if ($this->container['booking_modified'] === null) {
            $invalidProperties[] = "'booking_modified' can't be null";
        }
        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['product_title'] === null) {
            $invalidProperties[] = "'product_title' can't be null";
        }
        if ($this->container['product_supplier_id'] === null) {
            $invalidProperties[] = "'product_supplier_id' can't be null";
        }
        if ($this->container['product_supplier_name'] === null) {
            $invalidProperties[] = "'product_supplier_name' can't be null";
        }
        if ($this->container['product_market_admin_id'] === null) {
            $invalidProperties[] = "'product_market_admin_id' can't be null";
        }
        if ($this->container['product_market_admin_name'] === null) {
            $invalidProperties[] = "'product_market_admin_name' can't be null";
        }
        if ($this->container['product_admission_type'] === null) {
            $invalidProperties[] = "'product_admission_type' can't be null";
        }
        if ($this->container['product_currency_code'] === null) {
            $invalidProperties[] = "'product_currency_code' can't be null";
        }
        if ($this->container['product_cancellation_allowed'] === null) {
            $invalidProperties[] = "'product_cancellation_allowed' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets booking_external_reference
     *
     * @return string
     */
    public function getBookingExternalReference()
    {
        return $this->container['booking_external_reference'];
    }

    /**
     * Sets booking_external_reference
     *
     * @param string $booking_external_reference A unique booking identifier within the external system.
     *
     * @return self
     */
    public function setBookingExternalReference($booking_external_reference)
    {
        $this->container['booking_external_reference'] = $booking_external_reference;

        return $this;
    }

    /**
     * Gets booking_status
     *
     * @return \PrioTicket\DistributorAPI\Models\BookingStatusTypes
     */
    public function getBookingStatus()
    {
        return $this->container['booking_status'];
    }

    /**
     * Sets booking_status
     *
     * @param \PrioTicket\DistributorAPI\Models\BookingStatusTypes $booking_status booking_status
     *
     * @return self
     */
    public function setBookingStatus($booking_status)
    {
        $this->container['booking_status'] = $booking_status;

        return $this;
    }

    /**
     * Gets booking_version
     *
     * @return int|null
     */
    public function getBookingVersion()
    {
        return $this->container['booking_version'];
    }

    /**
     * Sets booking_version
     *
     * @param int|null $booking_version Booking version number.
     *
     * @return self
     */
    public function setBookingVersion($booking_version)
    {

        if (!is_null($booking_version) && ($booking_version < 1)) {
            throw new \InvalidArgumentException('invalid value for $booking_version when calling ProductBookingModel., must be bigger than or equal to 1.');
        }

        $this->container['booking_version'] = $booking_version;

        return $this;
    }

    /**
     * Gets booking_voucher_released
     *
     * @return bool|null
     */
    public function getBookingVoucherReleased()
    {
        return $this->container['booking_voucher_released'];
    }

    /**
     * Sets booking_voucher_released
     *
     * @param bool|null $booking_voucher_released Whether the vouchers of this booking are available / released. Voucher allocation can be delayed based on the voucher release requirements.
     *
     * @return self
     */
    public function setBookingVoucherReleased($booking_voucher_released)
    {
        $this->container['booking_voucher_released'] = $booking_voucher_released;

        return $this;
    }

    /**
     * Gets booking_travel_date
     *
     * @return \DateTime|null
     */
    public function getBookingTravelDate()
    {
        return $this->container['booking_travel_date'];
    }

    /**
     * Sets booking_travel_date
     *
     * @param \DateTime|null $booking_travel_date If `product_availability:false` you can still define the expected redemption date of this product. Required if `product_traveldate_required:true`. If unset and availability is applicable, `booking_travel_date` will be returned as `availability_from_date_time` in the response.
     *
     * @return self
     */
    public function setBookingTravelDate($booking_travel_date)
    {
        $this->container['booking_travel_date'] = $booking_travel_date;

        return $this;
    }

    /**
     * Gets booking_valid_until
     *
     * @return \DateTime|null
     */
    public function getBookingValidUntil()
    {
        return $this->container['booking_valid_until'];
    }

    /**
     * Sets booking_valid_until
     *
     * @param \DateTime|null $booking_valid_until The booking will be valid until this time, after that the booking will be expired if not redeemed. Mainly applicable to open products.
     *
     * @return self
     */
    public function setBookingValidUntil($booking_valid_until)
    {
        $this->container['booking_valid_until'] = $booking_valid_until;

        return $this;
    }

    /**
     * Gets booking_invoice_status
     *
     * @return \PrioTicket\DistributorAPI\Models\InvoiceStatus|null
     */
    public function getBookingInvoiceStatus()
    {
        return $this->container['booking_invoice_status'];
    }

    /**
     * Sets booking_invoice_status
     *
     * @param \PrioTicket\DistributorAPI\Models\InvoiceStatus|null $booking_invoice_status booking_invoice_status
     *
     * @return self
     */
    public function setBookingInvoiceStatus($booking_invoice_status)
    {
        $this->container['booking_invoice_status'] = $booking_invoice_status;

        return $this;
    }

    /**
     * Gets booking_language
     *
     * @return string|null
     */
    public function getBookingLanguage()
    {
        return $this->container['booking_language'];
    }

    /**
     * Sets booking_language
     *
     * @param string|null $booking_language Language codes for the available languages of the product, e.g. Live Guides are available in English and Spanish languages. Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.
     *
     * @return self
     */
    public function setBookingLanguage($booking_language)
    {
        $this->container['booking_language'] = $booking_language;

        return $this;
    }

    /**
     * Gets booking_pricing
     *
     * @return \PrioTicket\DistributorAPI\Models\Pricing|null
     */
    public function getBookingPricing()
    {
        return $this->container['booking_pricing'];
    }

    /**
     * Sets booking_pricing
     *
     * @param \PrioTicket\DistributorAPI\Models\Pricing|null $booking_pricing booking_pricing
     *
     * @return self
     */
    public function setBookingPricing($booking_pricing)
    {
        $this->container['booking_pricing'] = $booking_pricing;

        return $this;
    }

    /**
     * Gets booking_notes
     *
     * @return \PrioTicket\DistributorAPI\Models\Note[]|null
     */
    public function getBookingNotes()
    {
        return $this->container['booking_notes'];
    }

    /**
     * Sets booking_notes
     *
     * @param \PrioTicket\DistributorAPI\Models\Note[]|null $booking_notes Booking notes.
     *
     * @return self
     */
    public function setBookingNotes($booking_notes)
    {
        $this->container['booking_notes'] = $booking_notes;

        return $this;
    }

    /**
     * Gets booking_created
     *
     * @return \DateTime
     */
    public function getBookingCreated()
    {
        return $this->container['booking_created'];
    }

    /**
     * Sets booking_created
     *
     * @param \DateTime $booking_created Date and time of booking creation.
     *
     * @return self
     */
    public function setBookingCreated($booking_created)
    {
        $this->container['booking_created'] = $booking_created;

        return $this;
    }

    /**
     * Gets booking_modified
     *
     * @return \DateTime
     */
    public function getBookingModified()
    {
        return $this->container['booking_modified'];
    }

    /**
     * Sets booking_modified
     *
     * @param \DateTime $booking_modified Date and time of booking update.
     *
     * @return self
     */
    public function setBookingModified($booking_modified)
    {
        $this->container['booking_modified'] = $booking_modified;

        return $this;
    }

    /**
     * Gets booking_confirmed
     *
     * @return \DateTime|null
     */
    public function getBookingConfirmed()
    {
        return $this->container['booking_confirmed'];
    }

    /**
     * Sets booking_confirmed
     *
     * @param \DateTime|null $booking_confirmed Date and time of booking confirmation.
     *
     * @return self
     */
    public function setBookingConfirmed($booking_confirmed)
    {
        $this->container['booking_confirmed'] = $booking_confirmed;

        return $this;
    }

    /**
     * Gets booking_cancelled
     *
     * @return \DateTime|null
     */
    public function getBookingCancelled()
    {
        return $this->container['booking_cancelled'];
    }

    /**
     * Sets booking_cancelled
     *
     * @param \DateTime|null $booking_cancelled Date and time of booking cancellation.
     *
     * @return self
     */
    public function setBookingCancelled($booking_cancelled)
    {
        $this->container['booking_cancelled'] = $booking_cancelled;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id Unique identifier for the product assigned by Prio.
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_relation_id
     *
     * @return string|null
     */
    public function getProductRelationId()
    {
        return $this->container['product_relation_id'];
    }

    /**
     * Sets product_relation_id
     *
     * @param string|null $product_relation_id If this product is booked as part of a cluster or purchased as an addon the related main product id should be defined.  Purchasing an addon requires a booking record for the linked main product. If that is not found within the same order, an error will be returned.  When part of a cluster, only the sub-product is required and therefore there is no need to include the main cluster product as a seperate booking in the same order.  If you do not sent this parameter, it will be considered as an individual sale.
     *
     * @return self
     */
    public function setProductRelationId($product_relation_id)
    {
        $this->container['product_relation_id'] = $product_relation_id;

        return $this;
    }

    /**
     * Gets product_pickup_point_id
     *
     * @return string|null
     */
    public function getProductPickupPointId()
    {
        return $this->container['product_pickup_point_id'];
    }

    /**
     * Sets product_pickup_point_id
     *
     * @param string|null $product_pickup_point_id Mandatory if `product_pickup_point:MANDATORY` in product details.
     *
     * @return self
     */
    public function setProductPickupPointId($product_pickup_point_id)
    {
        $this->container['product_pickup_point_id'] = $product_pickup_point_id;

        return $this;
    }

    /**
     * Gets product_pickup_point
     *
     * @return \PrioTicket\DistributorAPI\Models\PickupPoint|null
     */
    public function getProductPickupPoint()
    {
        return $this->container['product_pickup_point'];
    }

    /**
     * Sets product_pickup_point
     *
     * @param \PrioTicket\DistributorAPI\Models\PickupPoint|null $product_pickup_point product_pickup_point
     *
     * @return self
     */
    public function setProductPickupPoint($product_pickup_point)
    {
        $this->container['product_pickup_point'] = $product_pickup_point;

        return $this;
    }

    /**
     * Gets product_availability_id
     *
     * @return string|null
     */
    public function getProductAvailabilityId()
    {
        return $this->container['product_availability_id'];
    }

    /**
     * Sets product_availability_id
     *
     * @param string|null $product_availability_id The unique ID for the timeslot (`availability_id`) or specific availability spot (`availability_spot_id`) if `product_availability_assigned:true`. Only mandatory if `product_availability:true`.
     *
     * @return self
     */
    public function setProductAvailabilityId($product_availability_id)
    {
        $this->container['product_availability_id'] = $product_availability_id;

        return $this;
    }

    /**
     * Gets product_availability_from_date_time
     *
     * @return \DateTime|null
     */
    public function getProductAvailabilityFromDateTime()
    {
        return $this->container['product_availability_from_date_time'];
    }

    /**
     * Sets product_availability_from_date_time
     *
     * @param \DateTime|null $product_availability_from_date_time The starting date and time of the activity availability.
     *
     * @return self
     */
    public function setProductAvailabilityFromDateTime($product_availability_from_date_time)
    {
        $this->container['product_availability_from_date_time'] = $product_availability_from_date_time;

        return $this;
    }

    /**
     * Gets product_availability_to_date_time
     *
     * @return \DateTime|null
     */
    public function getProductAvailabilityToDateTime()
    {
        return $this->container['product_availability_to_date_time'];
    }

    /**
     * Sets product_availability_to_date_time
     *
     * @param \DateTime|null $product_availability_to_date_time The till date and time of the activity availability.
     *
     * @return self
     */
    public function setProductAvailabilityToDateTime($product_availability_to_date_time)
    {
        $this->container['product_availability_to_date_time'] = $product_availability_to_date_time;

        return $this;
    }

    /**
     * Gets product_availability_capacity_id
     *
     * @return string|null
     */
    public function getProductAvailabilityCapacityId()
    {
        return $this->container['product_availability_capacity_id'];
    }

    /**
     * Sets product_availability_capacity_id
     *
     * @param string|null $product_availability_capacity_id Availability group / capacity identifier.
     *
     * @return self
     */
    public function setProductAvailabilityCapacityId($product_availability_capacity_id)
    {
        $this->container['product_availability_capacity_id'] = $product_availability_capacity_id;

        return $this;
    }

    /**
     * Gets product_availability_capacity_shared_id
     *
     * @return string|null
     */
    public function getProductAvailabilityCapacitySharedId()
    {
        return $this->container['product_availability_capacity_shared_id'];
    }

    /**
     * Sets product_availability_capacity_shared_id
     *
     * @param string|null $product_availability_capacity_shared_id Shared availability / capacity identifier. Only applicable if `capacity_type:SHARED / COMBINED`.
     *
     * @return self
     */
    public function setProductAvailabilityCapacitySharedId($product_availability_capacity_shared_id)
    {
        $this->container['product_availability_capacity_shared_id'] = $product_availability_capacity_shared_id;

        return $this;
    }

    /**
     * Gets product_title
     *
     * @return string
     */
    public function getProductTitle()
    {
        return $this->container['product_title'];
    }

    /**
     * Sets product_title
     *
     * @param string $product_title The title of the product.
     *
     * @return self
     */
    public function setProductTitle($product_title)
    {
        $this->container['product_title'] = $product_title;

        return $this;
    }

    /**
     * Gets product_supplier_id
     *
     * @return string
     */
    public function getProductSupplierId()
    {
        return $this->container['product_supplier_id'];
    }

    /**
     * Sets product_supplier_id
     *
     * @param string $product_supplier_id Unique identifier for the supplier.
     *
     * @return self
     */
    public function setProductSupplierId($product_supplier_id)
    {
        $this->container['product_supplier_id'] = $product_supplier_id;

        return $this;
    }

    /**
     * Gets product_supplier_name
     *
     * @return string
     */
    public function getProductSupplierName()
    {
        return $this->container['product_supplier_name'];
    }

    /**
     * Sets product_supplier_name
     *
     * @param string $product_supplier_name Name of the supplier which offers the product(s).
     *
     * @return self
     */
    public function setProductSupplierName($product_supplier_name)
    {
        $this->container['product_supplier_name'] = $product_supplier_name;

        return $this;
    }

    /**
     * Gets product_supplier_admin_id
     *
     * @return string|null
     */
    public function getProductSupplierAdminId()
    {
        return $this->container['product_supplier_admin_id'];
    }

    /**
     * Sets product_supplier_admin_id
     *
     * @param string|null $product_supplier_admin_id Unique identifier for the supplier admin.
     *
     * @return self
     */
    public function setProductSupplierAdminId($product_supplier_admin_id)
    {
        $this->container['product_supplier_admin_id'] = $product_supplier_admin_id;

        return $this;
    }

    /**
     * Gets product_supplier_admin_name
     *
     * @return string|null
     */
    public function getProductSupplierAdminName()
    {
        return $this->container['product_supplier_admin_name'];
    }

    /**
     * Sets product_supplier_admin_name
     *
     * @param string|null $product_supplier_admin_name Name of the supplier admin.
     *
     * @return self
     */
    public function setProductSupplierAdminName($product_supplier_admin_name)
    {
        $this->container['product_supplier_admin_name'] = $product_supplier_admin_name;

        return $this;
    }

    /**
     * Gets product_market_admin_id
     *
     * @return string
     */
    public function getProductMarketAdminId()
    {
        return $this->container['product_market_admin_id'];
    }

    /**
     * Sets product_market_admin_id
     *
     * @param string $product_market_admin_id Unique identifier for the market admin.
     *
     * @return self
     */
    public function setProductMarketAdminId($product_market_admin_id)
    {
        $this->container['product_market_admin_id'] = $product_market_admin_id;

        return $this;
    }

    /**
     * Gets product_market_admin_name
     *
     * @return string
     */
    public function getProductMarketAdminName()
    {
        return $this->container['product_market_admin_name'];
    }

    /**
     * Sets product_market_admin_name
     *
     * @param string $product_market_admin_name Name of the market admin.
     *
     * @return self
     */
    public function setProductMarketAdminName($product_market_admin_name)
    {
        $this->container['product_market_admin_name'] = $product_market_admin_name;

        return $this;
    }

    /**
     * Gets product_source_id
     *
     * @return string|null
     */
    public function getProductSourceId()
    {
        return $this->container['product_source_id'];
    }

    /**
     * Sets product_source_id
     *
     * @param string|null $product_source_id Unique ID of the product source.
     *
     * @return self
     */
    public function setProductSourceId($product_source_id)
    {
        $this->container['product_source_id'] = $product_source_id;

        return $this;
    }

    /**
     * Gets product_source_name
     *
     * @return string|null
     */
    public function getProductSourceName()
    {
        return $this->container['product_source_name'];
    }

    /**
     * Sets product_source_name
     *
     * @param string|null $product_source_name Source of the product.   Either PrioTicket or the name of the other reservation system e.g. CSS.
     *
     * @return self
     */
    public function setProductSourceName($product_source_name)
    {
        $this->container['product_source_name'] = $product_source_name;

        return $this;
    }

    /**
     * Gets product_entry_notes
     *
     * @return string|null
     */
    public function getProductEntryNotes()
    {
        return $this->container['product_entry_notes'];
    }

    /**
     * Sets product_entry_notes
     *
     * @param string|null $product_entry_notes Product entry information. (Know before you go). The user-visible list of important notes, use for details such as age-restrictions or other conditions that make this service unsuitable.
     *
     * @return self
     */
    public function setProductEntryNotes($product_entry_notes)
    {
        $this->container['product_entry_notes'] = $product_entry_notes;

        return $this;
    }

    /**
     * Gets product_admission_type
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductAdmissionType
     */
    public function getProductAdmissionType()
    {
        return $this->container['product_admission_type'];
    }

    /**
     * Sets product_admission_type
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductAdmissionType $product_admission_type product_admission_type
     *
     * @return self
     */
    public function setProductAdmissionType($product_admission_type)
    {
        $this->container['product_admission_type'] = $product_admission_type;

        return $this;
    }

    /**
     * Gets product_currency_code
     *
     * @return string
     */
    public function getProductCurrencyCode()
    {
        return $this->container['product_currency_code'];
    }

    /**
     * Sets product_currency_code
     *
     * @param string $product_currency_code Product Currency Code, according to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217).
     *
     * @return self
     */
    public function setProductCurrencyCode($product_currency_code)
    {
        $this->container['product_currency_code'] = $product_currency_code;

        return $this;
    }

    /**
     * Gets product_cancellation_allowed
     *
     * @return bool
     */
    public function getProductCancellationAllowed()
    {
        return $this->container['product_cancellation_allowed'];
    }

    /**
     * Sets product_cancellation_allowed
     *
     * @param bool $product_cancellation_allowed Whether it is allowed to cancel this product / booking.   This takes into account the current state of the order as well as variables such as `booking_status` and  `product_type_redemption_status`.    Note that even if a product can be cancelled in this state, cancellation fees and restrictions might still apply and override this value. Please check `product_cancellation_policies` for more details.
     *
     * @return self
     */
    public function setProductCancellationAllowed($product_cancellation_allowed)
    {
        $this->container['product_cancellation_allowed'] = $product_cancellation_allowed;

        return $this;
    }

    /**
     * Gets product_options
     *
     * @return \PrioTicket\DistributorAPI\Models\BookingExtraOptions[]|null
     */
    public function getProductOptions()
    {
        return $this->container['product_options'];
    }

    /**
     * Sets product_options
     *
     * @param \PrioTicket\DistributorAPI\Models\BookingExtraOptions[]|null $product_options The product options booked (including individual options from related combi products).
     *
     * @return self
     */
    public function setProductOptions($product_options)
    {
        $this->container['product_options'] = $product_options;

        return $this;
    }

    /**
     * Gets product_combi_details
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductCombiDetail[]|null
     */
    public function getProductCombiDetails()
    {
        return $this->container['product_combi_details'];
    }

    /**
     * Sets product_combi_details
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductCombiDetail[]|null $product_combi_details In case the booked product is the main combi-product (`product_combi:true`), this field should be populated for each and every listed sub-product inside `product_combi_details`. All sub-product will inherited the missing details such as `product_type_details` from the parent.
     *
     * @return self
     */
    public function setProductCombiDetails($product_combi_details)
    {
        $this->container['product_combi_details'] = $product_combi_details;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


