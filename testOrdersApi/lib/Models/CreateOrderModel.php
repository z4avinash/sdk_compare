<?php
/**
 * CreateOrderModel
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
 * CreateOrderModel Class Doc Comment
 *
 * @category Class
 * @description Create order model.
 * @package  PrioTicket\DistributorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateOrderModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateOrderModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_platform_id' => 'string',
        'order_platform_name' => 'string',
        'order_reseller_id' => 'string',
        'order_reseller_name' => 'string',
        'order_distributor_id' => 'string',
        'order_distributor_name' => 'string',
        'order_partner_id' => 'string',
        'order_partner_name' => 'string',
        'order_reference' => 'string',
        'order_external_reference' => 'string',
        'order_status' => '\PrioTicket\DistributorAPI\Models\OrderStatusTypes',
        'order_settlement_type' => '\PrioTicket\DistributorAPI\Models\SettlementType',
        'order_channel' => '\PrioTicket\DistributorAPI\Models\OrderChannel',
        'order_language' => 'string',
        'order_version' => 'int',
        'order_archived' => 'string',
        'order_redacted' => 'string',
        'order_contacts' => '\PrioTicket\DistributorAPI\Models\ContactDetails[]',
        'order_promocodes' => '\PrioTicket\DistributorAPI\Models\AppliedPromocode[]',
        'order_payments' => '\PrioTicket\DistributorAPI\Models\PaymentDetails[]',
        'order_pricing' => '\PrioTicket\DistributorAPI\Models\Pricing',
        'order_credit' => '\PrioTicket\DistributorAPI\Models\CreditLimit',
        'order_invoices' => '\PrioTicket\DistributorAPI\Models\InvoiceDetails[]',
        'order_options' => '\PrioTicket\DistributorAPI\Models\OrderOptions',
        'order_flags' => '\PrioTicket\DistributorAPI\Models\Flag[]',
        'order_custom_fields' => '\PrioTicket\DistributorAPI\Models\CustomField[]',
        'order_notes' => '\PrioTicket\DistributorAPI\Models\Note[]',
        'order_activity_url' => 'string',
        'order_customer_url' => 'string',
        'order_created' => '\DateTime',
        'order_modified' => '\DateTime',
        'order_confirmed' => '\DateTime',
        'order_invoiced' => '\DateTime',
        'order_cancellation_date_time' => '\DateTime',
        'order_created_name' => 'string',
        'order_created_email' => 'string',
        'order_view_type' => '\PrioTicket\DistributorAPI\Models\AccountType',
        'order_bookings' => '\PrioTicket\DistributorAPI\Models\BookingOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order_platform_id' => null,
        'order_platform_name' => null,
        'order_reseller_id' => null,
        'order_reseller_name' => null,
        'order_distributor_id' => null,
        'order_distributor_name' => null,
        'order_partner_id' => null,
        'order_partner_name' => null,
        'order_reference' => null,
        'order_external_reference' => null,
        'order_status' => null,
        'order_settlement_type' => null,
        'order_channel' => null,
        'order_language' => null,
        'order_version' => null,
        'order_archived' => null,
        'order_redacted' => null,
        'order_contacts' => null,
        'order_promocodes' => null,
        'order_payments' => null,
        'order_pricing' => null,
        'order_credit' => null,
        'order_invoices' => null,
        'order_options' => null,
        'order_flags' => null,
        'order_custom_fields' => null,
        'order_notes' => null,
        'order_activity_url' => 'URI',
        'order_customer_url' => 'URI',
        'order_created' => 'date-time',
        'order_modified' => 'date-time',
        'order_confirmed' => 'date-time',
        'order_invoiced' => 'date-time',
        'order_cancellation_date_time' => 'date-time',
        'order_created_name' => null,
        'order_created_email' => 'email',
        'order_view_type' => null,
        'order_bookings' => null
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
        'order_platform_id' => 'order_platform_id',
        'order_platform_name' => 'order_platform_name',
        'order_reseller_id' => 'order_reseller_id',
        'order_reseller_name' => 'order_reseller_name',
        'order_distributor_id' => 'order_distributor_id',
        'order_distributor_name' => 'order_distributor_name',
        'order_partner_id' => 'order_partner_id',
        'order_partner_name' => 'order_partner_name',
        'order_reference' => 'order_reference',
        'order_external_reference' => 'order_external_reference',
        'order_status' => 'order_status',
        'order_settlement_type' => 'order_settlement_type',
        'order_channel' => 'order_channel',
        'order_language' => 'order_language',
        'order_version' => 'order_version',
        'order_archived' => 'order_archived',
        'order_redacted' => 'order_redacted',
        'order_contacts' => 'order_contacts',
        'order_promocodes' => 'order_promocodes',
        'order_payments' => 'order_payments',
        'order_pricing' => 'order_pricing',
        'order_credit' => 'order_credit',
        'order_invoices' => 'order_invoices',
        'order_options' => 'order_options',
        'order_flags' => 'order_flags',
        'order_custom_fields' => 'order_custom_fields',
        'order_notes' => 'order_notes',
        'order_activity_url' => 'order_activity_url',
        'order_customer_url' => 'order_customer_url',
        'order_created' => 'order_created',
        'order_modified' => 'order_modified',
        'order_confirmed' => 'order_confirmed',
        'order_invoiced' => 'order_invoiced',
        'order_cancellation_date_time' => 'order_cancellation_date_time',
        'order_created_name' => 'order_created_name',
        'order_created_email' => 'order_created_email',
        'order_view_type' => 'order_view_type',
        'order_bookings' => 'order_bookings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_platform_id' => 'setOrderPlatformId',
        'order_platform_name' => 'setOrderPlatformName',
        'order_reseller_id' => 'setOrderResellerId',
        'order_reseller_name' => 'setOrderResellerName',
        'order_distributor_id' => 'setOrderDistributorId',
        'order_distributor_name' => 'setOrderDistributorName',
        'order_partner_id' => 'setOrderPartnerId',
        'order_partner_name' => 'setOrderPartnerName',
        'order_reference' => 'setOrderReference',
        'order_external_reference' => 'setOrderExternalReference',
        'order_status' => 'setOrderStatus',
        'order_settlement_type' => 'setOrderSettlementType',
        'order_channel' => 'setOrderChannel',
        'order_language' => 'setOrderLanguage',
        'order_version' => 'setOrderVersion',
        'order_archived' => 'setOrderArchived',
        'order_redacted' => 'setOrderRedacted',
        'order_contacts' => 'setOrderContacts',
        'order_promocodes' => 'setOrderPromocodes',
        'order_payments' => 'setOrderPayments',
        'order_pricing' => 'setOrderPricing',
        'order_credit' => 'setOrderCredit',
        'order_invoices' => 'setOrderInvoices',
        'order_options' => 'setOrderOptions',
        'order_flags' => 'setOrderFlags',
        'order_custom_fields' => 'setOrderCustomFields',
        'order_notes' => 'setOrderNotes',
        'order_activity_url' => 'setOrderActivityUrl',
        'order_customer_url' => 'setOrderCustomerUrl',
        'order_created' => 'setOrderCreated',
        'order_modified' => 'setOrderModified',
        'order_confirmed' => 'setOrderConfirmed',
        'order_invoiced' => 'setOrderInvoiced',
        'order_cancellation_date_time' => 'setOrderCancellationDateTime',
        'order_created_name' => 'setOrderCreatedName',
        'order_created_email' => 'setOrderCreatedEmail',
        'order_view_type' => 'setOrderViewType',
        'order_bookings' => 'setOrderBookings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_platform_id' => 'getOrderPlatformId',
        'order_platform_name' => 'getOrderPlatformName',
        'order_reseller_id' => 'getOrderResellerId',
        'order_reseller_name' => 'getOrderResellerName',
        'order_distributor_id' => 'getOrderDistributorId',
        'order_distributor_name' => 'getOrderDistributorName',
        'order_partner_id' => 'getOrderPartnerId',
        'order_partner_name' => 'getOrderPartnerName',
        'order_reference' => 'getOrderReference',
        'order_external_reference' => 'getOrderExternalReference',
        'order_status' => 'getOrderStatus',
        'order_settlement_type' => 'getOrderSettlementType',
        'order_channel' => 'getOrderChannel',
        'order_language' => 'getOrderLanguage',
        'order_version' => 'getOrderVersion',
        'order_archived' => 'getOrderArchived',
        'order_redacted' => 'getOrderRedacted',
        'order_contacts' => 'getOrderContacts',
        'order_promocodes' => 'getOrderPromocodes',
        'order_payments' => 'getOrderPayments',
        'order_pricing' => 'getOrderPricing',
        'order_credit' => 'getOrderCredit',
        'order_invoices' => 'getOrderInvoices',
        'order_options' => 'getOrderOptions',
        'order_flags' => 'getOrderFlags',
        'order_custom_fields' => 'getOrderCustomFields',
        'order_notes' => 'getOrderNotes',
        'order_activity_url' => 'getOrderActivityUrl',
        'order_customer_url' => 'getOrderCustomerUrl',
        'order_created' => 'getOrderCreated',
        'order_modified' => 'getOrderModified',
        'order_confirmed' => 'getOrderConfirmed',
        'order_invoiced' => 'getOrderInvoiced',
        'order_cancellation_date_time' => 'getOrderCancellationDateTime',
        'order_created_name' => 'getOrderCreatedName',
        'order_created_email' => 'getOrderCreatedEmail',
        'order_view_type' => 'getOrderViewType',
        'order_bookings' => 'getOrderBookings'
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
        $this->container['order_platform_id'] = $data['order_platform_id'] ?? null;
        $this->container['order_platform_name'] = $data['order_platform_name'] ?? null;
        $this->container['order_reseller_id'] = $data['order_reseller_id'] ?? null;
        $this->container['order_reseller_name'] = $data['order_reseller_name'] ?? null;
        $this->container['order_distributor_id'] = $data['order_distributor_id'] ?? null;
        $this->container['order_distributor_name'] = $data['order_distributor_name'] ?? null;
        $this->container['order_partner_id'] = $data['order_partner_id'] ?? null;
        $this->container['order_partner_name'] = $data['order_partner_name'] ?? null;
        $this->container['order_reference'] = $data['order_reference'] ?? null;
        $this->container['order_external_reference'] = $data['order_external_reference'] ?? null;
        $this->container['order_status'] = $data['order_status'] ?? null;
        $this->container['order_settlement_type'] = $data['order_settlement_type'] ?? null;
        $this->container['order_channel'] = $data['order_channel'] ?? null;
        $this->container['order_language'] = $data['order_language'] ?? null;
        $this->container['order_version'] = $data['order_version'] ?? 1;
        $this->container['order_archived'] = $data['order_archived'] ?? 'false';
        $this->container['order_redacted'] = $data['order_redacted'] ?? 'false';
        $this->container['order_contacts'] = $data['order_contacts'] ?? null;
        $this->container['order_promocodes'] = $data['order_promocodes'] ?? null;
        $this->container['order_payments'] = $data['order_payments'] ?? null;
        $this->container['order_pricing'] = $data['order_pricing'] ?? null;
        $this->container['order_credit'] = $data['order_credit'] ?? null;
        $this->container['order_invoices'] = $data['order_invoices'] ?? null;
        $this->container['order_options'] = $data['order_options'] ?? null;
        $this->container['order_flags'] = $data['order_flags'] ?? null;
        $this->container['order_custom_fields'] = $data['order_custom_fields'] ?? null;
        $this->container['order_notes'] = $data['order_notes'] ?? null;
        $this->container['order_activity_url'] = $data['order_activity_url'] ?? null;
        $this->container['order_customer_url'] = $data['order_customer_url'] ?? null;
        $this->container['order_created'] = $data['order_created'] ?? null;
        $this->container['order_modified'] = $data['order_modified'] ?? null;
        $this->container['order_confirmed'] = $data['order_confirmed'] ?? null;
        $this->container['order_invoiced'] = $data['order_invoiced'] ?? null;
        $this->container['order_cancellation_date_time'] = $data['order_cancellation_date_time'] ?? null;
        $this->container['order_created_name'] = $data['order_created_name'] ?? null;
        $this->container['order_created_email'] = $data['order_created_email'] ?? null;
        $this->container['order_view_type'] = $data['order_view_type'] ?? null;
        $this->container['order_bookings'] = $data['order_bookings'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_platform_id'] === null) {
            $invalidProperties[] = "'order_platform_id' can't be null";
        }
        if ($this->container['order_platform_name'] === null) {
            $invalidProperties[] = "'order_platform_name' can't be null";
        }
        if ($this->container['order_reseller_id'] === null) {
            $invalidProperties[] = "'order_reseller_id' can't be null";
        }
        if ($this->container['order_reseller_name'] === null) {
            $invalidProperties[] = "'order_reseller_name' can't be null";
        }
        if ($this->container['order_distributor_id'] === null) {
            $invalidProperties[] = "'order_distributor_id' can't be null";
        }
        if ($this->container['order_distributor_name'] === null) {
            $invalidProperties[] = "'order_distributor_name' can't be null";
        }
        if ($this->container['order_reference'] === null) {
            $invalidProperties[] = "'order_reference' can't be null";
        }
        if ((mb_strlen($this->container['order_reference']) < 8)) {
            $invalidProperties[] = "invalid value for 'order_reference', the character length must be bigger than or equal to 8.";
        }

        if ($this->container['order_external_reference'] === null) {
            $invalidProperties[] = "'order_external_reference' can't be null";
        }
        if ($this->container['order_status'] === null) {
            $invalidProperties[] = "'order_status' can't be null";
        }
        if ($this->container['order_channel'] === null) {
            $invalidProperties[] = "'order_channel' can't be null";
        }
        if ($this->container['order_language'] === null) {
            $invalidProperties[] = "'order_language' can't be null";
        }
        if ($this->container['order_version'] === null) {
            $invalidProperties[] = "'order_version' can't be null";
        }
        if ($this->container['order_redacted'] === null) {
            $invalidProperties[] = "'order_redacted' can't be null";
        }
        if ($this->container['order_created'] === null) {
            $invalidProperties[] = "'order_created' can't be null";
        }
        if ($this->container['order_modified'] === null) {
            $invalidProperties[] = "'order_modified' can't be null";
        }
        if ($this->container['order_created_name'] === null) {
            $invalidProperties[] = "'order_created_name' can't be null";
        }
        if ($this->container['order_created_email'] === null) {
            $invalidProperties[] = "'order_created_email' can't be null";
        }
        if ($this->container['order_view_type'] === null) {
            $invalidProperties[] = "'order_view_type' can't be null";
        }
        if ($this->container['order_bookings'] === null) {
            $invalidProperties[] = "'order_bookings' can't be null";
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
     * Gets order_platform_id
     *
     * @return string
     * @deprecated
     */
    public function getOrderPlatformId()
    {
        return $this->container['order_platform_id'];
    }

    /**
     * Sets order_platform_id
     *
     * @param string $order_platform_id Unique identifier of the platform.
     *
     * @return self
     * @deprecated
     */
    public function setOrderPlatformId($order_platform_id)
    {
        $this->container['order_platform_id'] = $order_platform_id;

        return $this;
    }

    /**
     * Gets order_platform_name
     *
     * @return string
     * @deprecated
     */
    public function getOrderPlatformName()
    {
        return $this->container['order_platform_name'];
    }

    /**
     * Sets order_platform_name
     *
     * @param string $order_platform_name Name of the platform.
     *
     * @return self
     * @deprecated
     */
    public function setOrderPlatformName($order_platform_name)
    {
        $this->container['order_platform_name'] = $order_platform_name;

        return $this;
    }

    /**
     * Gets order_reseller_id
     *
     * @return string
     */
    public function getOrderResellerId()
    {
        return $this->container['order_reseller_id'];
    }

    /**
     * Sets order_reseller_id
     *
     * @param string $order_reseller_id Unique identifier of the reseller.
     *
     * @return self
     */
    public function setOrderResellerId($order_reseller_id)
    {
        $this->container['order_reseller_id'] = $order_reseller_id;

        return $this;
    }

    /**
     * Gets order_reseller_name
     *
     * @return string
     */
    public function getOrderResellerName()
    {
        return $this->container['order_reseller_name'];
    }

    /**
     * Sets order_reseller_name
     *
     * @param string $order_reseller_name Name of the reseller.
     *
     * @return self
     */
    public function setOrderResellerName($order_reseller_name)
    {
        $this->container['order_reseller_name'] = $order_reseller_name;

        return $this;
    }

    /**
     * Gets order_distributor_id
     *
     * @return string
     */
    public function getOrderDistributorId()
    {
        return $this->container['order_distributor_id'];
    }

    /**
     * Sets order_distributor_id
     *
     * @param string $order_distributor_id Unique identifier for distributor assigned by Prio.
     *
     * @return self
     */
    public function setOrderDistributorId($order_distributor_id)
    {
        $this->container['order_distributor_id'] = $order_distributor_id;

        return $this;
    }

    /**
     * Gets order_distributor_name
     *
     * @return string
     */
    public function getOrderDistributorName()
    {
        return $this->container['order_distributor_name'];
    }

    /**
     * Sets order_distributor_name
     *
     * @param string $order_distributor_name Name of the distributor.
     *
     * @return self
     */
    public function setOrderDistributorName($order_distributor_name)
    {
        $this->container['order_distributor_name'] = $order_distributor_name;

        return $this;
    }

    /**
     * Gets order_partner_id
     *
     * @return string|null
     */
    public function getOrderPartnerId()
    {
        return $this->container['order_partner_id'];
    }

    /**
     * Sets order_partner_id
     *
     * @param string|null $order_partner_id Unique identifier for partner assigned by Prio.
     *
     * @return self
     */
    public function setOrderPartnerId($order_partner_id)
    {
        $this->container['order_partner_id'] = $order_partner_id;

        return $this;
    }

    /**
     * Gets order_partner_name
     *
     * @return string|null
     */
    public function getOrderPartnerName()
    {
        return $this->container['order_partner_name'];
    }

    /**
     * Sets order_partner_name
     *
     * @param string|null $order_partner_name Name of the partner.
     *
     * @return self
     */
    public function setOrderPartnerName($order_partner_name)
    {
        $this->container['order_partner_name'] = $order_partner_name;

        return $this;
    }

    /**
     * Gets order_reference
     *
     * @return string
     */
    public function getOrderReference()
    {
        return $this->container['order_reference'];
    }

    /**
     * Sets order_reference
     *
     * @param string $order_reference A unique identifier for the created order in the Prio.
     *
     * @return self
     */
    public function setOrderReference($order_reference)
    {

        if ((mb_strlen($order_reference) < 8)) {
            throw new \InvalidArgumentException('invalid length for $order_reference when calling CreateOrderModel., must be bigger than or equal to 8.');
        }

        $this->container['order_reference'] = $order_reference;

        return $this;
    }

    /**
     * Gets order_external_reference
     *
     * @return string
     */
    public function getOrderExternalReference()
    {
        return $this->container['order_external_reference'];
    }

    /**
     * Sets order_external_reference
     *
     * @param string $order_external_reference A unique order identifier within the external system.
     *
     * @return self
     */
    public function setOrderExternalReference($order_external_reference)
    {
        $this->container['order_external_reference'] = $order_external_reference;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return \PrioTicket\DistributorAPI\Models\OrderStatusTypes
     * @deprecated
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param \PrioTicket\DistributorAPI\Models\OrderStatusTypes $order_status order_status
     *
     * @return self
     * @deprecated
     */
    public function setOrderStatus($order_status)
    {
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets order_settlement_type
     *
     * @return \PrioTicket\DistributorAPI\Models\SettlementType|null
     */
    public function getOrderSettlementType()
    {
        return $this->container['order_settlement_type'];
    }

    /**
     * Sets order_settlement_type
     *
     * @param \PrioTicket\DistributorAPI\Models\SettlementType|null $order_settlement_type order_settlement_type
     *
     * @return self
     */
    public function setOrderSettlementType($order_settlement_type)
    {
        $this->container['order_settlement_type'] = $order_settlement_type;

        return $this;
    }

    /**
     * Gets order_channel
     *
     * @return \PrioTicket\DistributorAPI\Models\OrderChannel
     */
    public function getOrderChannel()
    {
        return $this->container['order_channel'];
    }

    /**
     * Sets order_channel
     *
     * @param \PrioTicket\DistributorAPI\Models\OrderChannel $order_channel order_channel
     *
     * @return self
     */
    public function setOrderChannel($order_channel)
    {
        $this->container['order_channel'] = $order_channel;

        return $this;
    }

    /**
     * Gets order_language
     *
     * @return string
     */
    public function getOrderLanguage()
    {
        return $this->container['order_language'];
    }

    /**
     * Sets order_language
     *
     * @param string $order_language Language to use for communication, e.g pre-arrival emails. Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.
     *
     * @return self
     */
    public function setOrderLanguage($order_language)
    {
        $this->container['order_language'] = $order_language;

        return $this;
    }

    /**
     * Gets order_version
     *
     * @return int
     */
    public function getOrderVersion()
    {
        return $this->container['order_version'];
    }

    /**
     * Sets order_version
     *
     * @param int $order_version Order version number.
     *
     * @return self
     */
    public function setOrderVersion($order_version)
    {
        $this->container['order_version'] = $order_version;

        return $this;
    }

    /**
     * Gets order_archived
     *
     * @return string|null
     * @deprecated
     */
    public function getOrderArchived()
    {
        return $this->container['order_archived'];
    }

    /**
     * Sets order_archived
     *
     * @param string|null $order_archived Whether this order has been archived. Orders will be automatically archived if it is in a final state and has not been amended for a long period of time.
     *
     * @return self
     * @deprecated
     */
    public function setOrderArchived($order_archived)
    {
        $this->container['order_archived'] = $order_archived;

        return $this;
    }

    /**
     * Gets order_redacted
     *
     * @return string
     * @deprecated
     */
    public function getOrderRedacted()
    {
        return $this->container['order_redacted'];
    }

    /**
     * Sets order_redacted
     *
     * @param string $order_redacted Whether this order has redacted or de-identified sensitive data such as personally identifiable information (PII).
     *
     * @return self
     * @deprecated
     */
    public function setOrderRedacted($order_redacted)
    {
        $this->container['order_redacted'] = $order_redacted;

        return $this;
    }

    /**
     * Gets order_contacts
     *
     * @return \PrioTicket\DistributorAPI\Models\ContactDetails[]|null
     */
    public function getOrderContacts()
    {
        return $this->container['order_contacts'];
    }

    /**
     * Sets order_contacts
     *
     * @param \PrioTicket\DistributorAPI\Models\ContactDetails[]|null $order_contacts Contacts linked to this order.
     *
     * @return self
     */
    public function setOrderContacts($order_contacts)
    {
        $this->container['order_contacts'] = $order_contacts;

        return $this;
    }

    /**
     * Gets order_promocodes
     *
     * @return \PrioTicket\DistributorAPI\Models\AppliedPromocode[]|null
     */
    public function getOrderPromocodes()
    {
        return $this->container['order_promocodes'];
    }

    /**
     * Sets order_promocodes
     *
     * @param \PrioTicket\DistributorAPI\Models\AppliedPromocode[]|null $order_promocodes The promocodes applied to this order. Only shown in case one or more promocodes have been applied in the reservation. Not applicable to Direct Booking.
     *
     * @return self
     */
    public function setOrderPromocodes($order_promocodes)
    {
        $this->container['order_promocodes'] = $order_promocodes;

        return $this;
    }

    /**
     * Gets order_payments
     *
     * @return \PrioTicket\DistributorAPI\Models\PaymentDetails[]|null
     */
    public function getOrderPayments()
    {
        return $this->container['order_payments'];
    }

    /**
     * Sets order_payments
     *
     * @param \PrioTicket\DistributorAPI\Models\PaymentDetails[]|null $order_payments Details on the payments linked to this order.   An order can have multiple payment records in case of installments, split payments, refunds and additional charges. Every action will result in an additional record, hence all payment history is maintained.  Payment records are always returned in a descending order based on the payment date. Therefore the first entry in the array can be considered as the most recent payment / refund and thus the `payment_total` (running sum) as the actual total amount paid and the `payment_status ` as the latest payment status for this order. If there are no records, the order can be considered unpaid.  Only a single payment can be in progress or pending at the same time. Outstanding amounts will be added as a running total in the latest record with `payment_status:PENDING`.  > All payments linked to this order will be returned, regardless of the `order_version`.
     *
     * @return self
     */
    public function setOrderPayments($order_payments)
    {
        $this->container['order_payments'] = $order_payments;

        return $this;
    }

    /**
     * Gets order_pricing
     *
     * @return \PrioTicket\DistributorAPI\Models\Pricing|null
     */
    public function getOrderPricing()
    {
        return $this->container['order_pricing'];
    }

    /**
     * Sets order_pricing
     *
     * @param \PrioTicket\DistributorAPI\Models\Pricing|null $order_pricing order_pricing
     *
     * @return self
     */
    public function setOrderPricing($order_pricing)
    {
        $this->container['order_pricing'] = $order_pricing;

        return $this;
    }

    /**
     * Gets order_credit
     *
     * @return \PrioTicket\DistributorAPI\Models\CreditLimit|null
     * @deprecated
     */
    public function getOrderCredit()
    {
        return $this->container['order_credit'];
    }

    /**
     * Sets order_credit
     *
     * @param \PrioTicket\DistributorAPI\Models\CreditLimit|null $order_credit order_credit
     *
     * @return self
     * @deprecated
     */
    public function setOrderCredit($order_credit)
    {
        $this->container['order_credit'] = $order_credit;

        return $this;
    }

    /**
     * Gets order_invoices
     *
     * @return \PrioTicket\DistributorAPI\Models\InvoiceDetails[]|null
     * @deprecated
     */
    public function getOrderInvoices()
    {
        return $this->container['order_invoices'];
    }

    /**
     * Sets order_invoices
     *
     * @param \PrioTicket\DistributorAPI\Models\InvoiceDetails[]|null $order_invoices Related invoices.
     *
     * @return self
     * @deprecated
     */
    public function setOrderInvoices($order_invoices)
    {
        $this->container['order_invoices'] = $order_invoices;

        return $this;
    }

    /**
     * Gets order_options
     *
     * @return \PrioTicket\DistributorAPI\Models\OrderOptions|null
     */
    public function getOrderOptions()
    {
        return $this->container['order_options'];
    }

    /**
     * Sets order_options
     *
     * @param \PrioTicket\DistributorAPI\Models\OrderOptions|null $order_options order_options
     *
     * @return self
     */
    public function setOrderOptions($order_options)
    {
        $this->container['order_options'] = $order_options;

        return $this;
    }

    /**
     * Gets order_flags
     *
     * @return \PrioTicket\DistributorAPI\Models\Flag[]|null
     */
    public function getOrderFlags()
    {
        return $this->container['order_flags'];
    }

    /**
     * Sets order_flags
     *
     * @param \PrioTicket\DistributorAPI\Models\Flag[]|null $order_flags Order flags.
     *
     * @return self
     */
    public function setOrderFlags($order_flags)
    {
        $this->container['order_flags'] = $order_flags;

        return $this;
    }

    /**
     * Gets order_custom_fields
     *
     * @return \PrioTicket\DistributorAPI\Models\CustomField[]|null
     */
    public function getOrderCustomFields()
    {
        return $this->container['order_custom_fields'];
    }

    /**
     * Sets order_custom_fields
     *
     * @param \PrioTicket\DistributorAPI\Models\CustomField[]|null $order_custom_fields Freeform entry of any key-value pair.
     *
     * @return self
     */
    public function setOrderCustomFields($order_custom_fields)
    {
        $this->container['order_custom_fields'] = $order_custom_fields;

        return $this;
    }

    /**
     * Gets order_notes
     *
     * @return \PrioTicket\DistributorAPI\Models\Note[]|null
     */
    public function getOrderNotes()
    {
        return $this->container['order_notes'];
    }

    /**
     * Sets order_notes
     *
     * @param \PrioTicket\DistributorAPI\Models\Note[]|null $order_notes Order notes.
     *
     * @return self
     */
    public function setOrderNotes($order_notes)
    {
        $this->container['order_notes'] = $order_notes;

        return $this;
    }

    /**
     * Gets order_activity_url
     *
     * @return string|null
     * @deprecated
     */
    public function getOrderActivityUrl()
    {
        return $this->container['order_activity_url'];
    }

    /**
     * Sets order_activity_url
     *
     * @param string|null $order_activity_url This link redirects towards the Activity Overview which allows the agent to amend the order.
     *
     * @return self
     * @deprecated
     */
    public function setOrderActivityUrl($order_activity_url)
    {
        $this->container['order_activity_url'] = $order_activity_url;

        return $this;
    }

    /**
     * Gets order_customer_url
     *
     * @return string|null
     * @deprecated
     */
    public function getOrderCustomerUrl()
    {
        return $this->container['order_customer_url'];
    }

    /**
     * Sets order_customer_url
     *
     * @param string|null $order_customer_url This link that can be attached and communicated towards the end-consumer and allows for order amendment.
     *
     * @return self
     * @deprecated
     */
    public function setOrderCustomerUrl($order_customer_url)
    {
        $this->container['order_customer_url'] = $order_customer_url;

        return $this;
    }

    /**
     * Gets order_created
     *
     * @return \DateTime
     */
    public function getOrderCreated()
    {
        return $this->container['order_created'];
    }

    /**
     * Sets order_created
     *
     * @param \DateTime $order_created Date and time of order creation.
     *
     * @return self
     */
    public function setOrderCreated($order_created)
    {
        $this->container['order_created'] = $order_created;

        return $this;
    }

    /**
     * Gets order_modified
     *
     * @return \DateTime
     * @deprecated
     */
    public function getOrderModified()
    {
        return $this->container['order_modified'];
    }

    /**
     * Sets order_modified
     *
     * @param \DateTime $order_modified Date and time of order update.
     *
     * @return self
     * @deprecated
     */
    public function setOrderModified($order_modified)
    {
        $this->container['order_modified'] = $order_modified;

        return $this;
    }

    /**
     * Gets order_confirmed
     *
     * @return \DateTime|null
     * @deprecated
     */
    public function getOrderConfirmed()
    {
        return $this->container['order_confirmed'];
    }

    /**
     * Sets order_confirmed
     *
     * @param \DateTime|null $order_confirmed Date and time of order confirmation.
     *
     * @return self
     * @deprecated
     */
    public function setOrderConfirmed($order_confirmed)
    {
        $this->container['order_confirmed'] = $order_confirmed;

        return $this;
    }

    /**
     * Gets order_invoiced
     *
     * @return \DateTime|null
     * @deprecated
     */
    public function getOrderInvoiced()
    {
        return $this->container['order_invoiced'];
    }

    /**
     * Sets order_invoiced
     *
     * @param \DateTime|null $order_invoiced Date and time of order invoice.
     *
     * @return self
     * @deprecated
     */
    public function setOrderInvoiced($order_invoiced)
    {
        $this->container['order_invoiced'] = $order_invoiced;

        return $this;
    }

    /**
     * Gets order_cancellation_date_time
     *
     * @return \DateTime|null
     */
    public function getOrderCancellationDateTime()
    {
        return $this->container['order_cancellation_date_time'];
    }

    /**
     * Sets order_cancellation_date_time
     *
     * @param \DateTime|null $order_cancellation_date_time Date and time of order cancellation.
     *
     * @return self
     */
    public function setOrderCancellationDateTime($order_cancellation_date_time)
    {
        $this->container['order_cancellation_date_time'] = $order_cancellation_date_time;

        return $this;
    }

    /**
     * Gets order_created_name
     *
     * @return string
     */
    public function getOrderCreatedName()
    {
        return $this->container['order_created_name'];
    }

    /**
     * Sets order_created_name
     *
     * @param string $order_created_name Cashier name / User name who created the order.
     *
     * @return self
     */
    public function setOrderCreatedName($order_created_name)
    {
        $this->container['order_created_name'] = $order_created_name;

        return $this;
    }

    /**
     * Gets order_created_email
     *
     * @return string
     */
    public function getOrderCreatedEmail()
    {
        return $this->container['order_created_email'];
    }

    /**
     * Sets order_created_email
     *
     * @param string $order_created_email Cashier email / User email who created the order.
     *
     * @return self
     */
    public function setOrderCreatedEmail($order_created_email)
    {
        $this->container['order_created_email'] = $order_created_email;

        return $this;
    }

    /**
     * Gets order_view_type
     *
     * @return \PrioTicket\DistributorAPI\Models\AccountType
     * @deprecated
     */
    public function getOrderViewType()
    {
        return $this->container['order_view_type'];
    }

    /**
     * Sets order_view_type
     *
     * @param \PrioTicket\DistributorAPI\Models\AccountType $order_view_type order_view_type
     *
     * @return self
     * @deprecated
     */
    public function setOrderViewType($order_view_type)
    {
        $this->container['order_view_type'] = $order_view_type;

        return $this;
    }

    /**
     * Gets order_bookings
     *
     * @return \PrioTicket\DistributorAPI\Models\BookingOption[]
     */
    public function getOrderBookings()
    {
        return $this->container['order_bookings'];
    }

    /**
     * Sets order_bookings
     *
     * @param \PrioTicket\DistributorAPI\Models\BookingOption[] $order_bookings Details of the bookings to be made.
     *
     * @return self
     */
    public function setOrderBookings($order_bookings)
    {
        $this->container['order_bookings'] = $order_bookings;

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


