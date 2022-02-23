<?php
/**
 * ExtraOptions
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
 * ExtraOptions Class Doc Comment
 *
 * @category Class
 * @description Product options.
 * @package  PrioTicket\DistributorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ExtraOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExtraOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'option_id' => 'string',
        'option_name' => 'string',
        'option_description' => 'string',
        'option_start_date' => '\DateTime',
        'option_end_date' => '\DateTime',
        'option_label' => 'string',
        'option_type' => 'string',
        'option_selection_type' => 'string',
        'option_count_type' => 'string',
        'option_list_type' => 'string',
        'option_price_type' => 'string',
        'option_booking_quantity_min' => 'int',
        'option_booking_quantity_max' => 'int',
        'option_quantity_min' => 'int',
        'option_quantity_max' => 'int',
        'option_mandatory' => 'bool',
        'option_icon' => 'string',
        'option_values' => '\PrioTicket\DistributorAPI\Models\ExtraOptionValueDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'option_id' => null,
        'option_name' => null,
        'option_description' => null,
        'option_start_date' => 'date-time',
        'option_end_date' => 'date-time',
        'option_label' => null,
        'option_type' => null,
        'option_selection_type' => null,
        'option_count_type' => null,
        'option_list_type' => null,
        'option_price_type' => null,
        'option_booking_quantity_min' => null,
        'option_booking_quantity_max' => null,
        'option_quantity_min' => null,
        'option_quantity_max' => null,
        'option_mandatory' => null,
        'option_icon' => 'uri',
        'option_values' => null
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
        'option_id' => 'option_id',
        'option_name' => 'option_name',
        'option_description' => 'option_description',
        'option_start_date' => 'option_start_date',
        'option_end_date' => 'option_end_date',
        'option_label' => 'option_label',
        'option_type' => 'option_type',
        'option_selection_type' => 'option_selection_type',
        'option_count_type' => 'option_count_type',
        'option_list_type' => 'option_list_type',
        'option_price_type' => 'option_price_type',
        'option_booking_quantity_min' => 'option_booking_quantity_min',
        'option_booking_quantity_max' => 'option_booking_quantity_max',
        'option_quantity_min' => 'option_quantity_min',
        'option_quantity_max' => 'option_quantity_max',
        'option_mandatory' => 'option_mandatory',
        'option_icon' => 'option_icon',
        'option_values' => 'option_values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'option_id' => 'setOptionId',
        'option_name' => 'setOptionName',
        'option_description' => 'setOptionDescription',
        'option_start_date' => 'setOptionStartDate',
        'option_end_date' => 'setOptionEndDate',
        'option_label' => 'setOptionLabel',
        'option_type' => 'setOptionType',
        'option_selection_type' => 'setOptionSelectionType',
        'option_count_type' => 'setOptionCountType',
        'option_list_type' => 'setOptionListType',
        'option_price_type' => 'setOptionPriceType',
        'option_booking_quantity_min' => 'setOptionBookingQuantityMin',
        'option_booking_quantity_max' => 'setOptionBookingQuantityMax',
        'option_quantity_min' => 'setOptionQuantityMin',
        'option_quantity_max' => 'setOptionQuantityMax',
        'option_mandatory' => 'setOptionMandatory',
        'option_icon' => 'setOptionIcon',
        'option_values' => 'setOptionValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'option_id' => 'getOptionId',
        'option_name' => 'getOptionName',
        'option_description' => 'getOptionDescription',
        'option_start_date' => 'getOptionStartDate',
        'option_end_date' => 'getOptionEndDate',
        'option_label' => 'getOptionLabel',
        'option_type' => 'getOptionType',
        'option_selection_type' => 'getOptionSelectionType',
        'option_count_type' => 'getOptionCountType',
        'option_list_type' => 'getOptionListType',
        'option_price_type' => 'getOptionPriceType',
        'option_booking_quantity_min' => 'getOptionBookingQuantityMin',
        'option_booking_quantity_max' => 'getOptionBookingQuantityMax',
        'option_quantity_min' => 'getOptionQuantityMin',
        'option_quantity_max' => 'getOptionQuantityMax',
        'option_mandatory' => 'getOptionMandatory',
        'option_icon' => 'getOptionIcon',
        'option_values' => 'getOptionValues'
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

    const OPTION_LABEL_DISCOUNT = 'DISCOUNT';
    const OPTION_LABEL_FEATURE = 'FEATURE';
    const OPTION_LABEL_MERCHANDISE = 'MERCHANDISE';
    const OPTION_LABEL_MISCELLANEOUS = 'MISCELLANEOUS';
    const OPTION_LABEL_OTHER = 'OTHER';
    const OPTION_TYPE_SINGLE = 'SINGLE';
    const OPTION_TYPE_RADIO = 'RADIO';
    const OPTION_TYPE_CHECKBOX = 'CHECKBOX';
    const OPTION_TYPE_SHORT_ANSWER = 'SHORT_ANSWER';
    const OPTION_TYPE_PARAGRAPH = 'PARAGRAPH';
    const OPTION_TYPE_DROPDOWN = 'DROPDOWN';
    const OPTION_TYPE_BOOLEAN = 'BOOLEAN';
    const OPTION_TYPE_DATE = 'DATE';
    const OPTION_TYPE_TIME = 'TIME';
    const OPTION_TYPE_DATETIME = 'DATETIME';
    const OPTION_TYPE_NUMBER = 'NUMBER';
    const OPTION_TYPE_LOCATION_SEARCH = 'LOCATION_SEARCH';
    const OPTION_SELECTION_TYPE_MANUAL = 'MANUAL';
    const OPTION_SELECTION_TYPE_AUTO = 'AUTO';
    const OPTION_COUNT_TYPE_FLEXIBLE = 'FLEXIBLE';
    const OPTION_COUNT_TYPE_RESTRICTED = 'RESTRICTED';
    const OPTION_LIST_TYPE_PRODUCT = 'PRODUCT';
    const OPTION_LIST_TYPE_PRODUCT_TYPE = 'PRODUCT_TYPE';
    const OPTION_PRICE_TYPE_PRODUCT = 'PRODUCT';
    const OPTION_PRICE_TYPE_PRODUCT_TYPE = 'PRODUCT_TYPE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOptionLabelAllowableValues()
    {
        return [
            self::OPTION_LABEL_DISCOUNT,
            self::OPTION_LABEL_FEATURE,
            self::OPTION_LABEL_MERCHANDISE,
            self::OPTION_LABEL_MISCELLANEOUS,
            self::OPTION_LABEL_OTHER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOptionTypeAllowableValues()
    {
        return [
            self::OPTION_TYPE_SINGLE,
            self::OPTION_TYPE_RADIO,
            self::OPTION_TYPE_CHECKBOX,
            self::OPTION_TYPE_SHORT_ANSWER,
            self::OPTION_TYPE_PARAGRAPH,
            self::OPTION_TYPE_DROPDOWN,
            self::OPTION_TYPE_BOOLEAN,
            self::OPTION_TYPE_DATE,
            self::OPTION_TYPE_TIME,
            self::OPTION_TYPE_DATETIME,
            self::OPTION_TYPE_NUMBER,
            self::OPTION_TYPE_LOCATION_SEARCH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOptionSelectionTypeAllowableValues()
    {
        return [
            self::OPTION_SELECTION_TYPE_MANUAL,
            self::OPTION_SELECTION_TYPE_AUTO,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOptionCountTypeAllowableValues()
    {
        return [
            self::OPTION_COUNT_TYPE_FLEXIBLE,
            self::OPTION_COUNT_TYPE_RESTRICTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOptionListTypeAllowableValues()
    {
        return [
            self::OPTION_LIST_TYPE_PRODUCT,
            self::OPTION_LIST_TYPE_PRODUCT_TYPE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOptionPriceTypeAllowableValues()
    {
        return [
            self::OPTION_PRICE_TYPE_PRODUCT,
            self::OPTION_PRICE_TYPE_PRODUCT_TYPE,
        ];
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
        $this->container['option_id'] = $data['option_id'] ?? null;
        $this->container['option_name'] = $data['option_name'] ?? null;
        $this->container['option_description'] = $data['option_description'] ?? null;
        $this->container['option_start_date'] = $data['option_start_date'] ?? null;
        $this->container['option_end_date'] = $data['option_end_date'] ?? null;
        $this->container['option_label'] = $data['option_label'] ?? null;
        $this->container['option_type'] = $data['option_type'] ?? null;
        $this->container['option_selection_type'] = $data['option_selection_type'] ?? null;
        $this->container['option_count_type'] = $data['option_count_type'] ?? null;
        $this->container['option_list_type'] = $data['option_list_type'] ?? null;
        $this->container['option_price_type'] = $data['option_price_type'] ?? null;
        $this->container['option_booking_quantity_min'] = $data['option_booking_quantity_min'] ?? null;
        $this->container['option_booking_quantity_max'] = $data['option_booking_quantity_max'] ?? null;
        $this->container['option_quantity_min'] = $data['option_quantity_min'] ?? 0;
        $this->container['option_quantity_max'] = $data['option_quantity_max'] ?? 0;
        $this->container['option_mandatory'] = $data['option_mandatory'] ?? false;
        $this->container['option_icon'] = $data['option_icon'] ?? null;
        $this->container['option_values'] = $data['option_values'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['option_id'] === null) {
            $invalidProperties[] = "'option_id' can't be null";
        }
        if ($this->container['option_name'] === null) {
            $invalidProperties[] = "'option_name' can't be null";
        }
        $allowedValues = $this->getOptionLabelAllowableValues();
        if (!is_null($this->container['option_label']) && !in_array($this->container['option_label'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'option_label', must be one of '%s'",
                $this->container['option_label'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['option_type'] === null) {
            $invalidProperties[] = "'option_type' can't be null";
        }
        $allowedValues = $this->getOptionTypeAllowableValues();
        if (!is_null($this->container['option_type']) && !in_array($this->container['option_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'option_type', must be one of '%s'",
                $this->container['option_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['option_selection_type'] === null) {
            $invalidProperties[] = "'option_selection_type' can't be null";
        }
        $allowedValues = $this->getOptionSelectionTypeAllowableValues();
        if (!is_null($this->container['option_selection_type']) && !in_array($this->container['option_selection_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'option_selection_type', must be one of '%s'",
                $this->container['option_selection_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['option_count_type'] === null) {
            $invalidProperties[] = "'option_count_type' can't be null";
        }
        $allowedValues = $this->getOptionCountTypeAllowableValues();
        if (!is_null($this->container['option_count_type']) && !in_array($this->container['option_count_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'option_count_type', must be one of '%s'",
                $this->container['option_count_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOptionListTypeAllowableValues();
        if (!is_null($this->container['option_list_type']) && !in_array($this->container['option_list_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'option_list_type', must be one of '%s'",
                $this->container['option_list_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['option_price_type'] === null) {
            $invalidProperties[] = "'option_price_type' can't be null";
        }
        $allowedValues = $this->getOptionPriceTypeAllowableValues();
        if (!is_null($this->container['option_price_type']) && !in_array($this->container['option_price_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'option_price_type', must be one of '%s'",
                $this->container['option_price_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['option_mandatory'] === null) {
            $invalidProperties[] = "'option_mandatory' can't be null";
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
     * Gets option_id
     *
     * @return string
     */
    public function getOptionId()
    {
        return $this->container['option_id'];
    }

    /**
     * Sets option_id
     *
     * @param string $option_id Option ID.
     *
     * @return self
     */
    public function setOptionId($option_id)
    {
        $this->container['option_id'] = $option_id;

        return $this;
    }

    /**
     * Gets option_name
     *
     * @return string
     */
    public function getOptionName()
    {
        return $this->container['option_name'];
    }

    /**
     * Sets option_name
     *
     * @param string $option_name (Translatable) Option name.
     *
     * @return self
     */
    public function setOptionName($option_name)
    {
        $this->container['option_name'] = $option_name;

        return $this;
    }

    /**
     * Gets option_description
     *
     * @return string|null
     */
    public function getOptionDescription()
    {
        return $this->container['option_description'];
    }

    /**
     * Sets option_description
     *
     * @param string|null $option_description (Translatable) Option description.
     *
     * @return self
     */
    public function setOptionDescription($option_description)
    {
        $this->container['option_description'] = $option_description;

        return $this;
    }

    /**
     * Gets option_start_date
     *
     * @return \DateTime|null
     */
    public function getOptionStartDate()
    {
        return $this->container['option_start_date'];
    }

    /**
     * Sets option_start_date
     *
     * @param \DateTime|null $option_start_date Starting date of option.
     *
     * @return self
     */
    public function setOptionStartDate($option_start_date)
    {
        $this->container['option_start_date'] = $option_start_date;

        return $this;
    }

    /**
     * Gets option_end_date
     *
     * @return \DateTime|null
     */
    public function getOptionEndDate()
    {
        return $this->container['option_end_date'];
    }

    /**
     * Sets option_end_date
     *
     * @param \DateTime|null $option_end_date End date of option.
     *
     * @return self
     */
    public function setOptionEndDate($option_end_date)
    {
        $this->container['option_end_date'] = $option_end_date;

        return $this;
    }

    /**
     * Gets option_label
     *
     * @return string|null
     */
    public function getOptionLabel()
    {
        return $this->container['option_label'];
    }

    /**
     * Sets option_label
     *
     * @param string|null $option_label Option label.
     *
     * @return self
     */
    public function setOptionLabel($option_label)
    {
        $allowedValues = $this->getOptionLabelAllowableValues();
        if (!is_null($option_label) && !in_array($option_label, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'option_label', must be one of '%s'",
                    $option_label,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['option_label'] = $option_label;

        return $this;
    }

    /**
     * Gets option_type
     *
     * @return string
     */
    public function getOptionType()
    {
        return $this->container['option_type'];
    }

    /**
     * Sets option_type
     *
     * @param string $option_type * `SINGLE` - Single option value is available. * `RADIO` - Customer can select only one out of multiple option values. * `CHECKBOX` - Customers can select one or more option values. * `SHORT_ANSWER` - A one-line input field for text. (UPCOMING) * `PARAGRAPH` - A multi-line input field for text. (UPCOMING) * `DROPDOWN` - A selection from a dropdown. (UPCOMING) * `BOOLEAN` - A yes/no button. (UPCOMING) * `DATE` - A date. (UPCOMING) * `TIME` - A time. (UPCOMING) * `DATETIME` - A date and time. (UPCOMING) * `NUMBER` - A number. (UPCOMING) * `LOCATION_SEARCH` - A search widget that supports finding matched location given user input from provided location list. (UPCOMING)
     *
     * @return self
     */
    public function setOptionType($option_type)
    {
        $allowedValues = $this->getOptionTypeAllowableValues();
        if (!in_array($option_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'option_type', must be one of '%s'",
                    $option_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['option_type'] = $option_type;

        return $this;
    }

    /**
     * Gets option_selection_type
     *
     * @return string
     */
    public function getOptionSelectionType()
    {
        return $this->container['option_selection_type'];
    }

    /**
     * Sets option_selection_type
     *
     * @param string $option_selection_type * `MANUAL` - Whether the guest is able to select the options himself. * `AUTO` - **(ADVANCED)** Whether the option is automatically added to the cart. This only applies to `option_count_type:RESTRICTED`. Only available for `option_type:SINGLE`.
     *
     * @return self
     */
    public function setOptionSelectionType($option_selection_type)
    {
        $allowedValues = $this->getOptionSelectionTypeAllowableValues();
        if (!in_array($option_selection_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'option_selection_type', must be one of '%s'",
                    $option_selection_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['option_selection_type'] = $option_selection_type;

        return $this;
    }

    /**
     * Gets option_count_type
     *
     * @return string
     */
    public function getOptionCountType()
    {
        return $this->container['option_count_type'];
    }

    /**
     * Sets option_count_type
     *
     * @param string $option_count_type * `FLEXIBLE` - The sum of `option_values.value_count` is not restricted to the `booking quantity` (Product Option) or `product_type_count` (Product Type Option). Do note that it should still adhere to `option_quantity_min` and `option_quantity_max`. * `RESTRICTED` - The sum of `option_values.value_count` must be equal to the `booking quantity` (Product Option) or `product_type_count` (Product Type Option).
     *
     * @return self
     */
    public function setOptionCountType($option_count_type)
    {
        $allowedValues = $this->getOptionCountTypeAllowableValues();
        if (!in_array($option_count_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'option_count_type', must be one of '%s'",
                    $option_count_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['option_count_type'] = $option_count_type;

        return $this;
    }

    /**
     * Gets option_list_type
     *
     * @return string|null
     */
    public function getOptionListType()
    {
        return $this->container['option_list_type'];
    }

    /**
     * Sets option_list_type
     *
     * @param string|null $option_list_type Whether to show this option on product level (once on the page), or repeat the option for each selected `product_type` / Person / PAX. * `PRODUCT` - Show the option once on product level. * `PRODUCT_TYPE` - Show the option for each selected `product_type`.
     *
     * @return self
     */
    public function setOptionListType($option_list_type)
    {
        $allowedValues = $this->getOptionListTypeAllowableValues();
        if (!is_null($option_list_type) && !in_array($option_list_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'option_list_type', must be one of '%s'",
                    $option_list_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['option_list_type'] = $option_list_type;

        return $this;
    }

    /**
     * Gets option_price_type
     *
     * @return string
     */
    public function getOptionPriceType()
    {
        return $this->container['option_price_type'];
    }

    /**
     * Sets option_price_type
     *
     * @param string $option_price_type Whether this option has individual pricing for each `product_type` or a fixed amount. If `PRODUCT_TYPE` then the prices will be returned per `value_product_type_id` regardless of whether this is a Product- or Product Type Option. * `PRODUCT` - Prices are equal regardless of the selected `product_type`'s. Price is still increased based on the selected quantity. * `PRODUCT_TYPE` - Prices are different per `product_type`. For `product_options` this will always be in combination with `option_count_type:RESTRICTED` (as you are unable to determine how many options should be charged for which `product_type`). * `INCLUDED` - Prices are already included in the sales price of the product itself. Amounts are shown for informational purposes only.
     *
     * @return self
     */
    public function setOptionPriceType($option_price_type)
    {
        $allowedValues = $this->getOptionPriceTypeAllowableValues();
        if (!in_array($option_price_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'option_price_type', must be one of '%s'",
                    $option_price_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['option_price_type'] = $option_price_type;

        return $this;
    }

    /**
     * Gets option_booking_quantity_min
     *
     * @return int|null
     */
    public function getOptionBookingQuantityMin()
    {
        return $this->container['option_booking_quantity_min'];
    }

    /**
     * Sets option_booking_quantity_min
     *
     * @param int|null $option_booking_quantity_min The minimum booking quantity required for this option to be applicable. The booking quantity is a sum of all values of `product_type_count`.
     *
     * @return self
     */
    public function setOptionBookingQuantityMin($option_booking_quantity_min)
    {
        $this->container['option_booking_quantity_min'] = $option_booking_quantity_min;

        return $this;
    }

    /**
     * Gets option_booking_quantity_max
     *
     * @return int|null
     */
    public function getOptionBookingQuantityMax()
    {
        return $this->container['option_booking_quantity_max'];
    }

    /**
     * Sets option_booking_quantity_max
     *
     * @param int|null $option_booking_quantity_max The maximum booking quantity allowed for this option to be applicable The booking quantity is a sum of all values of `product_type_count`.
     *
     * @return self
     */
    public function setOptionBookingQuantityMax($option_booking_quantity_max)
    {
        $this->container['option_booking_quantity_max'] = $option_booking_quantity_max;

        return $this;
    }

    /**
     * Gets option_quantity_min
     *
     * @return int|null
     */
    public function getOptionQuantityMin()
    {
        return $this->container['option_quantity_min'];
    }

    /**
     * Sets option_quantity_min
     *
     * @param int|null $option_quantity_min The minimum option count required.  If `option_mandatory:true` and `option_quantity_min` is not set then option count should be equal to `product_type_count`.   Option count is a sum of all values of `option_values.value_count`.
     *
     * @return self
     */
    public function setOptionQuantityMin($option_quantity_min)
    {
        $this->container['option_quantity_min'] = $option_quantity_min;

        return $this;
    }

    /**
     * Gets option_quantity_max
     *
     * @return int|null
     */
    public function getOptionQuantityMax()
    {
        return $this->container['option_quantity_max'];
    }

    /**
     * Sets option_quantity_max
     *
     * @param int|null $option_quantity_max The maximum option count allowed.  If `option_mandatory:true` and `option_quantity_max` is not set then option count should be equal to `product_type_count`.   Option count is a sum of all values of `option_values.value_count`.
     *
     * @return self
     */
    public function setOptionQuantityMax($option_quantity_max)
    {
        $this->container['option_quantity_max'] = $option_quantity_max;

        return $this;
    }

    /**
     * Gets option_mandatory
     *
     * @return bool
     */
    public function getOptionMandatory()
    {
        return $this->container['option_mandatory'];
    }

    /**
     * Sets option_mandatory
     *
     * @param bool $option_mandatory Whether it is mandatory to set this option.
     *
     * @return self
     */
    public function setOptionMandatory($option_mandatory)
    {
        $this->container['option_mandatory'] = $option_mandatory;

        return $this;
    }

    /**
     * Gets option_icon
     *
     * @return string|null
     */
    public function getOptionIcon()
    {
        return $this->container['option_icon'];
    }

    /**
     * Sets option_icon
     *
     * @param string|null $option_icon Option icon.
     *
     * @return self
     */
    public function setOptionIcon($option_icon)
    {
        $this->container['option_icon'] = $option_icon;

        return $this;
    }

    /**
     * Gets option_values
     *
     * @return \PrioTicket\DistributorAPI\Models\ExtraOptionValueDetails[]|null
     */
    public function getOptionValues()
    {
        return $this->container['option_values'];
    }

    /**
     * Sets option_values
     *
     * @param \PrioTicket\DistributorAPI\Models\ExtraOptionValueDetails[]|null $option_values Option values.
     *
     * @return self
     */
    public function setOptionValues($option_values)
    {
        $this->container['option_values'] = $option_values;

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


