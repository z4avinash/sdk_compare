<?php
/**
 * ContactDetails
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
 * ContactDetails Class Doc Comment
 *
 * @category Class
 * @description Information on the contact.
 * @package  PrioTicket\DistributorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ContactDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact_uid' => 'string',
        'contact_external_uid' => 'string',
        'contact_version' => 'int',
        'contact_number' => 'string',
        'contact_type' => '\PrioTicket\DistributorAPI\Models\ContactType',
        'contact_title' => 'string',
        'contact_name_first' => 'string',
        'contact_name_last' => 'string',
        'contact_email' => 'string',
        'contact_phone' => 'string',
        'contact_mobile' => 'string',
        'contact_language' => 'string',
        'contact_nationality' => 'string',
        'contact_flight_number' => 'string',
        'contact_loyalty_number' => 'string',
        'contact_birth_place' => 'string',
        'contact_birth_date' => '\DateTime',
        'contact_passport' => 'string',
        'contact_gender' => 'string',
        'contact_age' => 'int',
        'contact_room_number' => 'string',
        'contact_website' => 'string',
        'contact_classification' => '\PrioTicket\DistributorAPI\Models\ContactClassification',
        'contact_address' => '\PrioTicket\DistributorAPI\Models\AddressModel',
        'contact_notes' => '\PrioTicket\DistributorAPI\Models\Note[]',
        'contact_custom_fields' => '\PrioTicket\DistributorAPI\Models\CustomField[]',
        'contact_created' => '\DateTime',
        'contact_modified' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contact_uid' => 'uuid',
        'contact_external_uid' => null,
        'contact_version' => null,
        'contact_number' => null,
        'contact_type' => null,
        'contact_title' => null,
        'contact_name_first' => null,
        'contact_name_last' => null,
        'contact_email' => 'email',
        'contact_phone' => 'phone',
        'contact_mobile' => 'phone',
        'contact_language' => null,
        'contact_nationality' => null,
        'contact_flight_number' => null,
        'contact_loyalty_number' => null,
        'contact_birth_place' => null,
        'contact_birth_date' => 'date',
        'contact_passport' => null,
        'contact_gender' => null,
        'contact_age' => null,
        'contact_room_number' => null,
        'contact_website' => 'URI',
        'contact_classification' => null,
        'contact_address' => null,
        'contact_notes' => null,
        'contact_custom_fields' => null,
        'contact_created' => 'date-time',
        'contact_modified' => 'date-time'
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
        'contact_uid' => 'contact_uid',
        'contact_external_uid' => 'contact_external_uid',
        'contact_version' => 'contact_version',
        'contact_number' => 'contact_number',
        'contact_type' => 'contact_type',
        'contact_title' => 'contact_title',
        'contact_name_first' => 'contact_name_first',
        'contact_name_last' => 'contact_name_last',
        'contact_email' => 'contact_email',
        'contact_phone' => 'contact_phone',
        'contact_mobile' => 'contact_mobile',
        'contact_language' => 'contact_language',
        'contact_nationality' => 'contact_nationality',
        'contact_flight_number' => 'contact_flight_number',
        'contact_loyalty_number' => 'contact_loyalty_number',
        'contact_birth_place' => 'contact_birth_place',
        'contact_birth_date' => 'contact_birth_date',
        'contact_passport' => 'contact_passport',
        'contact_gender' => 'contact_gender',
        'contact_age' => 'contact_age',
        'contact_room_number' => 'contact_room_number',
        'contact_website' => 'contact_website',
        'contact_classification' => 'contact_classification',
        'contact_address' => 'contact_address',
        'contact_notes' => 'contact_notes',
        'contact_custom_fields' => 'contact_custom_fields',
        'contact_created' => 'contact_created',
        'contact_modified' => 'contact_modified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_uid' => 'setContactUid',
        'contact_external_uid' => 'setContactExternalUid',
        'contact_version' => 'setContactVersion',
        'contact_number' => 'setContactNumber',
        'contact_type' => 'setContactType',
        'contact_title' => 'setContactTitle',
        'contact_name_first' => 'setContactNameFirst',
        'contact_name_last' => 'setContactNameLast',
        'contact_email' => 'setContactEmail',
        'contact_phone' => 'setContactPhone',
        'contact_mobile' => 'setContactMobile',
        'contact_language' => 'setContactLanguage',
        'contact_nationality' => 'setContactNationality',
        'contact_flight_number' => 'setContactFlightNumber',
        'contact_loyalty_number' => 'setContactLoyaltyNumber',
        'contact_birth_place' => 'setContactBirthPlace',
        'contact_birth_date' => 'setContactBirthDate',
        'contact_passport' => 'setContactPassport',
        'contact_gender' => 'setContactGender',
        'contact_age' => 'setContactAge',
        'contact_room_number' => 'setContactRoomNumber',
        'contact_website' => 'setContactWebsite',
        'contact_classification' => 'setContactClassification',
        'contact_address' => 'setContactAddress',
        'contact_notes' => 'setContactNotes',
        'contact_custom_fields' => 'setContactCustomFields',
        'contact_created' => 'setContactCreated',
        'contact_modified' => 'setContactModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_uid' => 'getContactUid',
        'contact_external_uid' => 'getContactExternalUid',
        'contact_version' => 'getContactVersion',
        'contact_number' => 'getContactNumber',
        'contact_type' => 'getContactType',
        'contact_title' => 'getContactTitle',
        'contact_name_first' => 'getContactNameFirst',
        'contact_name_last' => 'getContactNameLast',
        'contact_email' => 'getContactEmail',
        'contact_phone' => 'getContactPhone',
        'contact_mobile' => 'getContactMobile',
        'contact_language' => 'getContactLanguage',
        'contact_nationality' => 'getContactNationality',
        'contact_flight_number' => 'getContactFlightNumber',
        'contact_loyalty_number' => 'getContactLoyaltyNumber',
        'contact_birth_place' => 'getContactBirthPlace',
        'contact_birth_date' => 'getContactBirthDate',
        'contact_passport' => 'getContactPassport',
        'contact_gender' => 'getContactGender',
        'contact_age' => 'getContactAge',
        'contact_room_number' => 'getContactRoomNumber',
        'contact_website' => 'getContactWebsite',
        'contact_classification' => 'getContactClassification',
        'contact_address' => 'getContactAddress',
        'contact_notes' => 'getContactNotes',
        'contact_custom_fields' => 'getContactCustomFields',
        'contact_created' => 'getContactCreated',
        'contact_modified' => 'getContactModified'
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

    const CONTACT_GENDER_MALE = 'MALE';
    const CONTACT_GENDER_FEMALE = 'FEMALE';
    const CONTACT_GENDER_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContactGenderAllowableValues()
    {
        return [
            self::CONTACT_GENDER_MALE,
            self::CONTACT_GENDER_FEMALE,
            self::CONTACT_GENDER_OTHER,
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
        $this->container['contact_uid'] = $data['contact_uid'] ?? null;
        $this->container['contact_external_uid'] = $data['contact_external_uid'] ?? null;
        $this->container['contact_version'] = $data['contact_version'] ?? 1;
        $this->container['contact_number'] = $data['contact_number'] ?? null;
        $this->container['contact_type'] = $data['contact_type'] ?? null;
        $this->container['contact_title'] = $data['contact_title'] ?? null;
        $this->container['contact_name_first'] = $data['contact_name_first'] ?? null;
        $this->container['contact_name_last'] = $data['contact_name_last'] ?? null;
        $this->container['contact_email'] = $data['contact_email'] ?? null;
        $this->container['contact_phone'] = $data['contact_phone'] ?? null;
        $this->container['contact_mobile'] = $data['contact_mobile'] ?? null;
        $this->container['contact_language'] = $data['contact_language'] ?? null;
        $this->container['contact_nationality'] = $data['contact_nationality'] ?? null;
        $this->container['contact_flight_number'] = $data['contact_flight_number'] ?? null;
        $this->container['contact_loyalty_number'] = $data['contact_loyalty_number'] ?? null;
        $this->container['contact_birth_place'] = $data['contact_birth_place'] ?? null;
        $this->container['contact_birth_date'] = $data['contact_birth_date'] ?? null;
        $this->container['contact_passport'] = $data['contact_passport'] ?? null;
        $this->container['contact_gender'] = $data['contact_gender'] ?? null;
        $this->container['contact_age'] = $data['contact_age'] ?? null;
        $this->container['contact_room_number'] = $data['contact_room_number'] ?? null;
        $this->container['contact_website'] = $data['contact_website'] ?? null;
        $this->container['contact_classification'] = $data['contact_classification'] ?? null;
        $this->container['contact_address'] = $data['contact_address'] ?? null;
        $this->container['contact_notes'] = $data['contact_notes'] ?? null;
        $this->container['contact_custom_fields'] = $data['contact_custom_fields'] ?? null;
        $this->container['contact_created'] = $data['contact_created'] ?? null;
        $this->container['contact_modified'] = $data['contact_modified'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['contact_number']) && (mb_strlen($this->container['contact_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'contact_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['contact_name_first']) && (mb_strlen($this->container['contact_name_first']) > 255)) {
            $invalidProperties[] = "invalid value for 'contact_name_first', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['contact_name_last']) && (mb_strlen($this->container['contact_name_last']) > 255)) {
            $invalidProperties[] = "invalid value for 'contact_name_last', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getContactGenderAllowableValues();
        if (!is_null($this->container['contact_gender']) && !in_array($this->container['contact_gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'contact_gender', must be one of '%s'",
                $this->container['contact_gender'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['contact_age']) && ($this->container['contact_age'] > 150)) {
            $invalidProperties[] = "invalid value for 'contact_age', must be smaller than or equal to 150.";
        }

        if ($this->container['contact_created'] === null) {
            $invalidProperties[] = "'contact_created' can't be null";
        }
        if ($this->container['contact_modified'] === null) {
            $invalidProperties[] = "'contact_modified' can't be null";
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
     * Gets contact_uid
     *
     * @return string|null
     */
    public function getContactUid()
    {
        return $this->container['contact_uid'];
    }

    /**
     * Sets contact_uid
     *
     * @param string|null $contact_uid A unique contact identifier created by Prio.   In case this field is left blank, a new contact will be created in the system. If you pass an already existing `contact_uid`, those contact details will be  used and linked to the current/future order. In this case all other fields will be ignored. > Only applicable for partners using the Contacts Module (Returning guests). For regular transactions this parameter can be safely ignored.
     *
     * @return self
     */
    public function setContactUid($contact_uid)
    {
        $this->container['contact_uid'] = $contact_uid;

        return $this;
    }

    /**
     * Gets contact_external_uid
     *
     * @return string|null
     */
    public function getContactExternalUid()
    {
        return $this->container['contact_external_uid'];
    }

    /**
     * Sets contact_external_uid
     *
     * @param string|null $contact_external_uid Unique external identifier of the contact.
     *
     * @return self
     */
    public function setContactExternalUid($contact_external_uid)
    {
        $this->container['contact_external_uid'] = $contact_external_uid;

        return $this;
    }

    /**
     * Gets contact_version
     *
     * @return int|null
     */
    public function getContactVersion()
    {
        return $this->container['contact_version'];
    }

    /**
     * Sets contact_version
     *
     * @param int|null $contact_version Contact version; every time the contact details are updated, a new version is registered.
     *
     * @return self
     */
    public function setContactVersion($contact_version)
    {


        $this->container['contact_version'] = $contact_version;

        return $this;
    }

    /**
     * Gets contact_number
     *
     * @return string|null
     */
    public function getContactNumber()
    {
        return $this->container['contact_number'];
    }

    /**
     * Sets contact_number
     *
     * @param string|null $contact_number Number of the contact.
     *
     * @return self
     */
    public function setContactNumber($contact_number)
    {
        if (!is_null($contact_number) && (mb_strlen($contact_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $contact_number when calling ContactDetails., must be smaller than or equal to 50.');
        }

        $this->container['contact_number'] = $contact_number;

        return $this;
    }

    /**
     * Gets contact_type
     *
     * @return \PrioTicket\DistributorAPI\Models\ContactType|null
     */
    public function getContactType()
    {
        return $this->container['contact_type'];
    }

    /**
     * Sets contact_type
     *
     * @param \PrioTicket\DistributorAPI\Models\ContactType|null $contact_type contact_type
     *
     * @return self
     */
    public function setContactType($contact_type)
    {
        $this->container['contact_type'] = $contact_type;

        return $this;
    }

    /**
     * Gets contact_title
     *
     * @return string|null
     */
    public function getContactTitle()
    {
        return $this->container['contact_title'];
    }

    /**
     * Sets contact_title
     *
     * @param string|null $contact_title Title prefix of the contact (Mister / Miss / Misses etc).
     *
     * @return self
     */
    public function setContactTitle($contact_title)
    {
        $this->container['contact_title'] = $contact_title;

        return $this;
    }

    /**
     * Gets contact_name_first
     *
     * @return string|null
     */
    public function getContactNameFirst()
    {
        return $this->container['contact_name_first'];
    }

    /**
     * Sets contact_name_first
     *
     * @param string|null $contact_name_first First name of the contact.
     *
     * @return self
     */
    public function setContactNameFirst($contact_name_first)
    {
        if (!is_null($contact_name_first) && (mb_strlen($contact_name_first) > 255)) {
            throw new \InvalidArgumentException('invalid length for $contact_name_first when calling ContactDetails., must be smaller than or equal to 255.');
        }

        $this->container['contact_name_first'] = $contact_name_first;

        return $this;
    }

    /**
     * Gets contact_name_last
     *
     * @return string|null
     */
    public function getContactNameLast()
    {
        return $this->container['contact_name_last'];
    }

    /**
     * Sets contact_name_last
     *
     * @param string|null $contact_name_last Last name of the contact. If you only have the fullname, we recommend sending it as `contact_name_last` and leaving the `contact_name_first` blank.
     *
     * @return self
     */
    public function setContactNameLast($contact_name_last)
    {
        if (!is_null($contact_name_last) && (mb_strlen($contact_name_last) > 255)) {
            throw new \InvalidArgumentException('invalid length for $contact_name_last when calling ContactDetails., must be smaller than or equal to 255.');
        }

        $this->container['contact_name_last'] = $contact_name_last;

        return $this;
    }

    /**
     * Gets contact_email
     *
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->container['contact_email'];
    }

    /**
     * Sets contact_email
     *
     * @param string|null $contact_email Email address of the contact.
     *
     * @return self
     */
    public function setContactEmail($contact_email)
    {
        $this->container['contact_email'] = $contact_email;

        return $this;
    }

    /**
     * Gets contact_phone
     *
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->container['contact_phone'];
    }

    /**
     * Sets contact_phone
     *
     * @param string|null $contact_phone Must be a valid E.164 spec compliant phone number.
     *
     * @return self
     */
    public function setContactPhone($contact_phone)
    {
        $this->container['contact_phone'] = $contact_phone;

        return $this;
    }

    /**
     * Gets contact_mobile
     *
     * @return string|null
     */
    public function getContactMobile()
    {
        return $this->container['contact_mobile'];
    }

    /**
     * Sets contact_mobile
     *
     * @param string|null $contact_mobile Must be a valid E.164 spec compliant phone number.
     *
     * @return self
     */
    public function setContactMobile($contact_mobile)
    {
        $this->container['contact_mobile'] = $contact_mobile;

        return $this;
    }

    /**
     * Gets contact_language
     *
     * @return string|null
     */
    public function getContactLanguage()
    {
        return $this->container['contact_language'];
    }

    /**
     * Sets contact_language
     *
     * @param string|null $contact_language Language and culture code of the contact preferred language ([ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1)).
     *
     * @return self
     */
    public function setContactLanguage($contact_language)
    {
        $this->container['contact_language'] = $contact_language;

        return $this;
    }

    /**
     * Gets contact_nationality
     *
     * @return string|null
     */
    public function getContactNationality()
    {
        return $this->container['contact_nationality'];
    }

    /**
     * Sets contact_nationality
     *
     * @param string|null $contact_nationality Country code of the contact ([ISO-3166-1](https://en.wikipedia.org/wiki/ISO_3166-1)).
     *
     * @return self
     */
    public function setContactNationality($contact_nationality)
    {
        $this->container['contact_nationality'] = $contact_nationality;

        return $this;
    }

    /**
     * Gets contact_flight_number
     *
     * @return string|null
     */
    public function getContactFlightNumber()
    {
        return $this->container['contact_flight_number'];
    }

    /**
     * Sets contact_flight_number
     *
     * @param string|null $contact_flight_number Contact Flight Number.
     *
     * @return self
     */
    public function setContactFlightNumber($contact_flight_number)
    {
        $this->container['contact_flight_number'] = $contact_flight_number;

        return $this;
    }

    /**
     * Gets contact_loyalty_number
     *
     * @return string|null
     */
    public function getContactLoyaltyNumber()
    {
        return $this->container['contact_loyalty_number'];
    }

    /**
     * Sets contact_loyalty_number
     *
     * @param string|null $contact_loyalty_number Contact Loyalty Number.
     *
     * @return self
     */
    public function setContactLoyaltyNumber($contact_loyalty_number)
    {
        $this->container['contact_loyalty_number'] = $contact_loyalty_number;

        return $this;
    }

    /**
     * Gets contact_birth_place
     *
     * @return string|null
     */
    public function getContactBirthPlace()
    {
        return $this->container['contact_birth_place'];
    }

    /**
     * Sets contact_birth_place
     *
     * @param string|null $contact_birth_place Place of birth.
     *
     * @return self
     */
    public function setContactBirthPlace($contact_birth_place)
    {
        $this->container['contact_birth_place'] = $contact_birth_place;

        return $this;
    }

    /**
     * Gets contact_birth_date
     *
     * @return \DateTime|null
     */
    public function getContactBirthDate()
    {
        return $this->container['contact_birth_date'];
    }

    /**
     * Sets contact_birth_date
     *
     * @param \DateTime|null $contact_birth_date Date of birth.
     *
     * @return self
     */
    public function setContactBirthDate($contact_birth_date)
    {
        $this->container['contact_birth_date'] = $contact_birth_date;

        return $this;
    }

    /**
     * Gets contact_passport
     *
     * @return string|null
     */
    public function getContactPassport()
    {
        return $this->container['contact_passport'];
    }

    /**
     * Sets contact_passport
     *
     * @param string|null $contact_passport Passport details of the contact.
     *
     * @return self
     */
    public function setContactPassport($contact_passport)
    {
        $this->container['contact_passport'] = $contact_passport;

        return $this;
    }

    /**
     * Gets contact_gender
     *
     * @return string|null
     */
    public function getContactGender()
    {
        return $this->container['contact_gender'];
    }

    /**
     * Sets contact_gender
     *
     * @param string|null $contact_gender Gender of the contact.
     *
     * @return self
     */
    public function setContactGender($contact_gender)
    {
        $allowedValues = $this->getContactGenderAllowableValues();
        if (!is_null($contact_gender) && !in_array($contact_gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'contact_gender', must be one of '%s'",
                    $contact_gender,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contact_gender'] = $contact_gender;

        return $this;
    }

    /**
     * Gets contact_age
     *
     * @return int|null
     */
    public function getContactAge()
    {
        return $this->container['contact_age'];
    }

    /**
     * Sets contact_age
     *
     * @param int|null $contact_age Age of the contact.
     *
     * @return self
     */
    public function setContactAge($contact_age)
    {

        if (!is_null($contact_age) && ($contact_age > 150)) {
            throw new \InvalidArgumentException('invalid value for $contact_age when calling ContactDetails., must be smaller than or equal to 150.');
        }

        $this->container['contact_age'] = $contact_age;

        return $this;
    }

    /**
     * Gets contact_room_number
     *
     * @return string|null
     */
    public function getContactRoomNumber()
    {
        return $this->container['contact_room_number'];
    }

    /**
     * Sets contact_room_number
     *
     * @param string|null $contact_room_number Contact room number.
     *
     * @return self
     */
    public function setContactRoomNumber($contact_room_number)
    {
        $this->container['contact_room_number'] = $contact_room_number;

        return $this;
    }

    /**
     * Gets contact_website
     *
     * @return string|null
     */
    public function getContactWebsite()
    {
        return $this->container['contact_website'];
    }

    /**
     * Sets contact_website
     *
     * @param string|null $contact_website Contact website.
     *
     * @return self
     */
    public function setContactWebsite($contact_website)
    {
        $this->container['contact_website'] = $contact_website;

        return $this;
    }

    /**
     * Gets contact_classification
     *
     * @return \PrioTicket\DistributorAPI\Models\ContactClassification|null
     */
    public function getContactClassification()
    {
        return $this->container['contact_classification'];
    }

    /**
     * Sets contact_classification
     *
     * @param \PrioTicket\DistributorAPI\Models\ContactClassification|null $contact_classification contact_classification
     *
     * @return self
     */
    public function setContactClassification($contact_classification)
    {
        $this->container['contact_classification'] = $contact_classification;

        return $this;
    }

    /**
     * Gets contact_address
     *
     * @return \PrioTicket\DistributorAPI\Models\AddressModel|null
     */
    public function getContactAddress()
    {
        return $this->container['contact_address'];
    }

    /**
     * Sets contact_address
     *
     * @param \PrioTicket\DistributorAPI\Models\AddressModel|null $contact_address contact_address
     *
     * @return self
     */
    public function setContactAddress($contact_address)
    {
        $this->container['contact_address'] = $contact_address;

        return $this;
    }

    /**
     * Gets contact_notes
     *
     * @return \PrioTicket\DistributorAPI\Models\Note[]|null
     */
    public function getContactNotes()
    {
        return $this->container['contact_notes'];
    }

    /**
     * Sets contact_notes
     *
     * @param \PrioTicket\DistributorAPI\Models\Note[]|null $contact_notes Contact notes.
     *
     * @return self
     */
    public function setContactNotes($contact_notes)
    {
        $this->container['contact_notes'] = $contact_notes;

        return $this;
    }

    /**
     * Gets contact_custom_fields
     *
     * @return \PrioTicket\DistributorAPI\Models\CustomField[]|null
     */
    public function getContactCustomFields()
    {
        return $this->container['contact_custom_fields'];
    }

    /**
     * Sets contact_custom_fields
     *
     * @param \PrioTicket\DistributorAPI\Models\CustomField[]|null $contact_custom_fields Freeform entry of any key-value pair.
     *
     * @return self
     */
    public function setContactCustomFields($contact_custom_fields)
    {
        $this->container['contact_custom_fields'] = $contact_custom_fields;

        return $this;
    }

    /**
     * Gets contact_created
     *
     * @return \DateTime
     */
    public function getContactCreated()
    {
        return $this->container['contact_created'];
    }

    /**
     * Sets contact_created
     *
     * @param \DateTime $contact_created Creation date and time of the contact.
     *
     * @return self
     */
    public function setContactCreated($contact_created)
    {
        $this->container['contact_created'] = $contact_created;

        return $this;
    }

    /**
     * Gets contact_modified
     *
     * @return \DateTime
     */
    public function getContactModified()
    {
        return $this->container['contact_modified'];
    }

    /**
     * Sets contact_modified
     *
     * @param \DateTime $contact_modified Last update date and time of the contact.
     *
     * @return self
     */
    public function setContactModified($contact_modified)
    {
        $this->container['contact_modified'] = $contact_modified;

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


