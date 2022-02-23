<?php
/**
 * ConfirmedBookingDetail
 *
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

namespace PrioTicket\DistributorAPI\Models;

use \ArrayAccess;
use \PrioTicket\DistributorAPI\ObjectSerializer;

/**
 * ConfirmedBookingDetail Class Doc Comment
 *
 * @category Class
 * @description Details on the confirmed booked product type.
 * @package  PrioTicket\DistributorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConfirmedBookingDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConfirmedBookingDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_type' => '\PrioTicket\DistributorAPI\Models\ProductType',
        'product_type_class' => '\PrioTicket\DistributorAPI\Models\ProductTypeClass',
        'product_type_id' => 'string',
        'product_type_label' => 'string',
        'product_type_age_from' => 'int',
        'product_type_age_to' => 'int',
        'product_type_count' => 'int',
        'product_type_pax' => 'int',
        'product_type_capacity' => 'int',
        'product_type_spots' => '\PrioTicket\DistributorAPI\Models\Spot[]',
        'product_type_code' => 'string',
        'product_type_transaction_id' => 'string',
        'product_type_status' => '\PrioTicket\DistributorAPI\Models\StatusTypes',
        'product_type_redemption_status' => '\PrioTicket\DistributorAPI\Models\RedemptionStatus',
        'product_type_redemption_date_time' => '\DateTime',
        'product_type_pass' => '\PrioTicket\DistributorAPI\Models\Pass',
        'product_type_pricing' => '\PrioTicket\DistributorAPI\Models\Pricing'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_type' => null,
        'product_type_class' => null,
        'product_type_id' => null,
        'product_type_label' => null,
        'product_type_age_from' => null,
        'product_type_age_to' => null,
        'product_type_count' => null,
        'product_type_pax' => null,
        'product_type_capacity' => null,
        'product_type_spots' => null,
        'product_type_code' => null,
        'product_type_transaction_id' => null,
        'product_type_status' => null,
        'product_type_redemption_status' => null,
        'product_type_redemption_date_time' => 'date-time',
        'product_type_pass' => null,
        'product_type_pricing' => null
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
        'product_type' => 'product_type',
        'product_type_class' => 'product_type_class',
        'product_type_id' => 'product_type_id',
        'product_type_label' => 'product_type_label',
        'product_type_age_from' => 'product_type_age_from',
        'product_type_age_to' => 'product_type_age_to',
        'product_type_count' => 'product_type_count',
        'product_type_pax' => 'product_type_pax',
        'product_type_capacity' => 'product_type_capacity',
        'product_type_spots' => 'product_type_spots',
        'product_type_code' => 'product_type_code',
        'product_type_transaction_id' => 'product_type_transaction_id',
        'product_type_status' => 'product_type_status',
        'product_type_redemption_status' => 'product_type_redemption_status',
        'product_type_redemption_date_time' => 'product_type_redemption_date_time',
        'product_type_pass' => 'product_type_pass',
        'product_type_pricing' => 'product_type_pricing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_type' => 'setProductType',
        'product_type_class' => 'setProductTypeClass',
        'product_type_id' => 'setProductTypeId',
        'product_type_label' => 'setProductTypeLabel',
        'product_type_age_from' => 'setProductTypeAgeFrom',
        'product_type_age_to' => 'setProductTypeAgeTo',
        'product_type_count' => 'setProductTypeCount',
        'product_type_pax' => 'setProductTypePax',
        'product_type_capacity' => 'setProductTypeCapacity',
        'product_type_spots' => 'setProductTypeSpots',
        'product_type_code' => 'setProductTypeCode',
        'product_type_transaction_id' => 'setProductTypeTransactionId',
        'product_type_status' => 'setProductTypeStatus',
        'product_type_redemption_status' => 'setProductTypeRedemptionStatus',
        'product_type_redemption_date_time' => 'setProductTypeRedemptionDateTime',
        'product_type_pass' => 'setProductTypePass',
        'product_type_pricing' => 'setProductTypePricing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_type' => 'getProductType',
        'product_type_class' => 'getProductTypeClass',
        'product_type_id' => 'getProductTypeId',
        'product_type_label' => 'getProductTypeLabel',
        'product_type_age_from' => 'getProductTypeAgeFrom',
        'product_type_age_to' => 'getProductTypeAgeTo',
        'product_type_count' => 'getProductTypeCount',
        'product_type_pax' => 'getProductTypePax',
        'product_type_capacity' => 'getProductTypeCapacity',
        'product_type_spots' => 'getProductTypeSpots',
        'product_type_code' => 'getProductTypeCode',
        'product_type_transaction_id' => 'getProductTypeTransactionId',
        'product_type_status' => 'getProductTypeStatus',
        'product_type_redemption_status' => 'getProductTypeRedemptionStatus',
        'product_type_redemption_date_time' => 'getProductTypeRedemptionDateTime',
        'product_type_pass' => 'getProductTypePass',
        'product_type_pricing' => 'getProductTypePricing'
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
        $this->container['product_type'] = $data['product_type'] ?? null;
        $this->container['product_type_class'] = $data['product_type_class'] ?? null;
        $this->container['product_type_id'] = $data['product_type_id'] ?? null;
        $this->container['product_type_label'] = $data['product_type_label'] ?? null;
        $this->container['product_type_age_from'] = $data['product_type_age_from'] ?? null;
        $this->container['product_type_age_to'] = $data['product_type_age_to'] ?? null;
        $this->container['product_type_count'] = $data['product_type_count'] ?? null;
        $this->container['product_type_pax'] = $data['product_type_pax'] ?? null;
        $this->container['product_type_capacity'] = $data['product_type_capacity'] ?? null;
        $this->container['product_type_spots'] = $data['product_type_spots'] ?? null;
        $this->container['product_type_code'] = $data['product_type_code'] ?? null;
        $this->container['product_type_transaction_id'] = $data['product_type_transaction_id'] ?? null;
        $this->container['product_type_status'] = $data['product_type_status'] ?? null;
        $this->container['product_type_redemption_status'] = $data['product_type_redemption_status'] ?? null;
        $this->container['product_type_redemption_date_time'] = $data['product_type_redemption_date_time'] ?? null;
        $this->container['product_type_pass'] = $data['product_type_pass'] ?? null;
        $this->container['product_type_pricing'] = $data['product_type_pricing'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['product_type'] === null) {
            $invalidProperties[] = "'product_type' can't be null";
        }
        if ($this->container['product_type_id'] === null) {
            $invalidProperties[] = "'product_type_id' can't be null";
        }
        if ($this->container['product_type_count'] === null) {
            $invalidProperties[] = "'product_type_count' can't be null";
        }
        if (($this->container['product_type_count'] > 100)) {
            $invalidProperties[] = "invalid value for 'product_type_count', must be smaller than or equal to 100.";
        }

        if (($this->container['product_type_count'] < 1)) {
            $invalidProperties[] = "invalid value for 'product_type_count', must be bigger than or equal to 1.";
        }

        if ($this->container['product_type_pax'] === null) {
            $invalidProperties[] = "'product_type_pax' can't be null";
        }
        if (($this->container['product_type_pax'] < 0)) {
            $invalidProperties[] = "invalid value for 'product_type_pax', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['product_type_capacity']) && ($this->container['product_type_capacity'] < 0)) {
            $invalidProperties[] = "invalid value for 'product_type_capacity', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['product_type_spots']) && (count($this->container['product_type_spots']) < 1)) {
            $invalidProperties[] = "invalid value for 'product_type_spots', number of items must be greater than or equal to 1.";
        }

        if ($this->container['product_type_code'] === null) {
            $invalidProperties[] = "'product_type_code' can't be null";
        }
        if ($this->container['product_type_transaction_id'] === null) {
            $invalidProperties[] = "'product_type_transaction_id' can't be null";
        }
        if ($this->container['product_type_redemption_status'] === null) {
            $invalidProperties[] = "'product_type_redemption_status' can't be null";
        }
        if ($this->container['product_type_pricing'] === null) {
            $invalidProperties[] = "'product_type_pricing' can't be null";
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
     * Gets product_type
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductType
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductType $product_type product_type
     *
     * @return self
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets product_type_class
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductTypeClass|null
     */
    public function getProductTypeClass()
    {
        return $this->container['product_type_class'];
    }

    /**
     * Sets product_type_class
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductTypeClass|null $product_type_class product_type_class
     *
     * @return self
     */
    public function setProductTypeClass($product_type_class)
    {
        $this->container['product_type_class'] = $product_type_class;

        return $this;
    }

    /**
     * Gets product_type_id
     *
     * @return string
     */
    public function getProductTypeId()
    {
        return $this->container['product_type_id'];
    }

    /**
     * Sets product_type_id
     *
     * @param string $product_type_id In case of more complex product configurations e.g. multiple ambiguous product types, the preferred option must be specified using the ID.
     *
     * @return self
     */
    public function setProductTypeId($product_type_id)
    {
        $this->container['product_type_id'] = $product_type_id;

        return $this;
    }

    /**
     * Gets product_type_label
     *
     * @return string|null
     */
    public function getProductTypeLabel()
    {
        return $this->container['product_type_label'];
    }

    /**
     * Sets product_type_label
     *
     * @param string|null $product_type_label (Translatable) The product type label.
     *
     * @return self
     */
    public function setProductTypeLabel($product_type_label)
    {
        $this->container['product_type_label'] = $product_type_label;

        return $this;
    }

    /**
     * Gets product_type_age_from
     *
     * @return int|null
     */
    public function getProductTypeAgeFrom()
    {
        return $this->container['product_type_age_from'];
    }

    /**
     * Sets product_type_age_from
     *
     * @param int|null $product_type_age_from The starting age for age group.
     *
     * @return self
     */
    public function setProductTypeAgeFrom($product_type_age_from)
    {


        $this->container['product_type_age_from'] = $product_type_age_from;

        return $this;
    }

    /**
     * Gets product_type_age_to
     *
     * @return int|null
     */
    public function getProductTypeAgeTo()
    {
        return $this->container['product_type_age_to'];
    }

    /**
     * Sets product_type_age_to
     *
     * @param int|null $product_type_age_to The ending age for age group.  If both `product_type_age_from` and `product_type_age_to` are empty no age-restrictions should be shown. If only `product_type_age_to` is empty, then it is advised to show the age-restriction as e.g. \"22+\".
     *
     * @return self
     */
    public function setProductTypeAgeTo($product_type_age_to)
    {


        $this->container['product_type_age_to'] = $product_type_age_to;

        return $this;
    }

    /**
     * Gets product_type_count
     *
     * @return int
     */
    public function getProductTypeCount()
    {
        return $this->container['product_type_count'];
    }

    /**
     * Sets product_type_count
     *
     * @param int $product_type_count The quantity being booked for the specified product type.  Please note that the following structures are deemed semantically the same. ``` \"product_type_details\":[   {      \"product_type_id\":\"13725\",      \"product_type_count\":\"2\"   } ]  and  \"product_type_details\":[   {                           \"product_type_id\":\"13725\",         \"product_type_count\":1      },   {             \"product_type_id\":\"13725\",          \"product_type_count\":1        } ] ``` We allow this 'alternative format' for 'ease-of-use'. Please note that in the order response we have no other option than to 'split' the product types, otherwise, we would not be able to send multiple codes (single `product_type_code` per pax/piece) in the response.
     *
     * @return self
     */
    public function setProductTypeCount($product_type_count)
    {

        if (($product_type_count > 100)) {
            throw new \InvalidArgumentException('invalid value for $product_type_count when calling ConfirmedBookingDetail., must be smaller than or equal to 100.');
        }
        if (($product_type_count < 1)) {
            throw new \InvalidArgumentException('invalid value for $product_type_count when calling ConfirmedBookingDetail., must be bigger than or equal to 1.');
        }

        $this->container['product_type_count'] = $product_type_count;

        return $this;
    }

    /**
     * Gets product_type_pax
     *
     * @return int
     */
    public function getProductTypePax()
    {
        return $this->container['product_type_pax'];
    }

    /**
     * Sets product_type_pax
     *
     * @param int $product_type_pax Number of persons to be counted in the reporting for the selected product type quantity.
     *
     * @return self
     */
    public function setProductTypePax($product_type_pax)
    {

        if (($product_type_pax < 0)) {
            throw new \InvalidArgumentException('invalid value for $product_type_pax when calling ConfirmedBookingDetail., must be bigger than or equal to 0.');
        }

        $this->container['product_type_pax'] = $product_type_pax;

        return $this;
    }

    /**
     * Gets product_type_capacity
     *
     * @return int|null
     */
    public function getProductTypeCapacity()
    {
        return $this->container['product_type_capacity'];
    }

    /**
     * Sets product_type_capacity
     *
     * @param int|null $product_type_capacity The capacity count to be blocked in the system for the selected availability slot.  For example:  If a single table with six seats is booked by two persons, the setup would be as follows:    ```   \"product_type_count\": 1,   \"product_type_pax\": 2,   \"product_type_capacity\": 6   ```
     *
     * @return self
     */
    public function setProductTypeCapacity($product_type_capacity)
    {

        if (!is_null($product_type_capacity) && ($product_type_capacity < 0)) {
            throw new \InvalidArgumentException('invalid value for $product_type_capacity when calling ConfirmedBookingDetail., must be bigger than or equal to 0.');
        }

        $this->container['product_type_capacity'] = $product_type_capacity;

        return $this;
    }

    /**
     * Gets product_type_spots
     *
     * @return \PrioTicket\DistributorAPI\Models\Spot[]|null
     */
    public function getProductTypeSpots()
    {
        return $this->container['product_type_spots'];
    }

    /**
     * Sets product_type_spots
     *
     * @param \PrioTicket\DistributorAPI\Models\Spot[]|null $product_type_spots Product type spots.
     *
     * @return self
     */
    public function setProductTypeSpots($product_type_spots)
    {


        if (!is_null($product_type_spots) && (count($product_type_spots) < 1)) {
            throw new \InvalidArgumentException('invalid length for $product_type_spots when calling ConfirmedBookingDetail., number of items must be greater than or equal to 1.');
        }
        $this->container['product_type_spots'] = $product_type_spots;

        return $this;
    }

    /**
     * Gets product_type_code
     *
     * @return string
     */
    public function getProductTypeCode()
    {
        return $this->container['product_type_code'];
    }

    /**
     * Sets product_type_code
     *
     * @param string $product_type_code The product code allocated by Prio to redeem products.
     *
     * @return self
     */
    public function setProductTypeCode($product_type_code)
    {
        $this->container['product_type_code'] = $product_type_code;

        return $this;
    }

    /**
     * Gets product_type_transaction_id
     *
     * @return string
     */
    public function getProductTypeTransactionId()
    {
        return $this->container['product_type_transaction_id'];
    }

    /**
     * Sets product_type_transaction_id
     *
     * @param string $product_type_transaction_id Transaction ID of this product type.
     *
     * @return self
     */
    public function setProductTypeTransactionId($product_type_transaction_id)
    {
        $this->container['product_type_transaction_id'] = $product_type_transaction_id;

        return $this;
    }

    /**
     * Gets product_type_status
     *
     * @return \PrioTicket\DistributorAPI\Models\StatusTypes|null
     * @deprecated
     */
    public function getProductTypeStatus()
    {
        return $this->container['product_type_status'];
    }

    /**
     * Sets product_type_status
     *
     * @param \PrioTicket\DistributorAPI\Models\StatusTypes|null $product_type_status product_type_status
     *
     * @return self
     * @deprecated
     */
    public function setProductTypeStatus($product_type_status)
    {
        $this->container['product_type_status'] = $product_type_status;

        return $this;
    }

    /**
     * Gets product_type_redemption_status
     *
     * @return \PrioTicket\DistributorAPI\Models\RedemptionStatus
     */
    public function getProductTypeRedemptionStatus()
    {
        return $this->container['product_type_redemption_status'];
    }

    /**
     * Sets product_type_redemption_status
     *
     * @param \PrioTicket\DistributorAPI\Models\RedemptionStatus $product_type_redemption_status product_type_redemption_status
     *
     * @return self
     */
    public function setProductTypeRedemptionStatus($product_type_redemption_status)
    {
        $this->container['product_type_redemption_status'] = $product_type_redemption_status;

        return $this;
    }

    /**
     * Gets product_type_redemption_date_time
     *
     * @return \DateTime|null
     */
    public function getProductTypeRedemptionDateTime()
    {
        return $this->container['product_type_redemption_date_time'];
    }

    /**
     * Sets product_type_redemption_date_time
     *
     * @param \DateTime|null $product_type_redemption_date_time Date and time of redemption.
     *
     * @return self
     */
    public function setProductTypeRedemptionDateTime($product_type_redemption_date_time)
    {
        $this->container['product_type_redemption_date_time'] = $product_type_redemption_date_time;

        return $this;
    }

    /**
     * Gets product_type_pass
     *
     * @return \PrioTicket\DistributorAPI\Models\Pass|null
     * @deprecated
     */
    public function getProductTypePass()
    {
        return $this->container['product_type_pass'];
    }

    /**
     * Sets product_type_pass
     *
     * @param \PrioTicket\DistributorAPI\Models\Pass|null $product_type_pass product_type_pass
     *
     * @return self
     * @deprecated
     */
    public function setProductTypePass($product_type_pass)
    {
        $this->container['product_type_pass'] = $product_type_pass;

        return $this;
    }

    /**
     * Gets product_type_pricing
     *
     * @return \PrioTicket\DistributorAPI\Models\Pricing
     */
    public function getProductTypePricing()
    {
        return $this->container['product_type_pricing'];
    }

    /**
     * Sets product_type_pricing
     *
     * @param \PrioTicket\DistributorAPI\Models\Pricing $product_type_pricing product_type_pricing
     *
     * @return self
     */
    public function setProductTypePricing($product_type_pricing)
    {
        $this->container['product_type_pricing'] = $product_type_pricing;

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


