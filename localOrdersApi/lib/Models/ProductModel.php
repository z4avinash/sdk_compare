<?php
/**
 * ProductModel
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
 * ProductModel Class Doc Comment
 *
 * @category Class
 * @description Product model.
 * @package  PrioTicket\DistributorAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ProductModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_id' => 'string',
        'product_external_id' => 'string',
        'product_internal_reference' => 'string',
        'product_platform_id' => 'string',
        'product_platform_name' => 'string',
        'product_distributor_id' => 'string',
        'product_distributor_name' => 'string',
        'product_reseller_id' => 'string',
        'product_reseller_name' => 'string',
        'product_market_admin_id' => 'string',
        'product_market_admin_name' => 'string',
        'product_supplier_admin_id' => 'string',
        'product_supplier_admin_name' => 'string',
        'product_supplier_id' => 'string',
        'product_source_id' => 'string',
        'product_source_name' => 'string',
        'product_contract_source_id' => 'string',
        'product_contract_source_name' => 'string',
        'product_default_language' => 'string',
        'product_version' => 'int',
        'product_color' => 'string',
        'product_slug' => 'string',
        'product_supplier_url' => 'string',
        'product_supplier_key_public' => 'string',
        'product_from_price' => 'string',
        'product_start_date' => '\DateTime',
        'product_end_date' => '\DateTime',
        'product_booking_start_date' => '\DateTime',
        'product_booking_end_date' => '\DateTime',
        'product_booking_advance_time_min' => 'int',
        'product_booking_advance_time_max' => 'int',
        'product_booking_quantity_min' => 'int',
        'product_booking_quantity_max' => 'int',
        'product_turnout_time' => 'int',
        'product_duration' => 'int',
        'product_show_capacity_count' => 'int',
        'product_third_party' => 'bool',
        'product_seasonal_pricing' => 'bool',
        'product_quantity_pricing' => 'bool',
        'product_daily_pricing' => 'bool',
        'product_dynamic_pricing' => 'bool',
        'product_relation_details_visible' => 'bool',
        'product_timepicker_visible' => 'bool',
        'product_sub_only' => 'bool',
        'product_cluster' => 'bool',
        'product_combi' => 'bool',
        'product_addon' => 'bool',
        'product_availability' => 'bool',
        'product_availability_assigned' => 'bool',
        'product_capacity' => 'bool',
        'product_traveldate_required' => 'bool',
        'product_cancellation_allowed' => 'bool',
        'product_overbooking_allowed' => 'bool',
        'product_past_date_booking_allowed' => 'bool',
        'product_capacity_id' => 'string',
        'product_capacity_shared_id' => 'string',
        'product_capacity_type' => '\PrioTicket\DistributorAPI\Models\CapacityType',
        'product_admission_type' => '\PrioTicket\DistributorAPI\Models\ProductAdmissionType',
        'product_status' => '\PrioTicket\DistributorAPI\Models\ProductStatus',
        'product_catalogue_status' => '\PrioTicket\DistributorAPI\Models\ProductCatalogueStatus',
        'product_service_type' => '\PrioTicket\DistributorAPI\Models\ProductServiceType',
        'product_pickup_point' => 'string',
        'product_pickup_point_details' => '\PrioTicket\DistributorAPI\Models\PickupPoint[]',
        'product_content' => '\PrioTicket\DistributorAPI\Models\ProductContent',
        'product_redemption_rules' => '\PrioTicket\DistributorAPI\Models\ProductRedemptionRules',
        'product_code_settings' => '\PrioTicket\DistributorAPI\Models\ProductCodeSettings',
        'product_payment_detail' => '\PrioTicket\DistributorAPI\Models\ProductPaymentDetails',
        'product_type_seasons' => '\PrioTicket\DistributorAPI\Models\ProductTypeSeason[]',
        'product_options' => '\PrioTicket\DistributorAPI\Models\ExtraOptions[]',
        'product_cancellation_policies' => '\PrioTicket\DistributorAPI\Models\CancellationPolicy[]',
        'product_opening_times' => '\PrioTicket\DistributorAPI\Models\OpeningTimes[]',
        'product_currencies' => '\PrioTicket\DistributorAPI\Models\ProductCurrency[]',
        'product_noshow_policy' => '\PrioTicket\DistributorAPI\Models\ProductNoShowPolicy',
        'product_flags' => '\PrioTicket\DistributorAPI\Models\Flag[]',
        'product_block_out_dates' => '\PrioTicket\DistributorAPI\Models\ProductBlockoutDate[]',
        'product_special_dates' => '\PrioTicket\DistributorAPI\Models\ProductSpecialDate[]',
        'product_locations' => '\PrioTicket\DistributorAPI\Models\ProductLocation[]',
        'product_cluster_details' => '\PrioTicket\DistributorAPI\Models\ProductRelationDetails[]',
        'product_combi_details' => '\PrioTicket\DistributorAPI\Models\ProductRelationDetails[]',
        'product_addon_details' => '\PrioTicket\DistributorAPI\Models\ProductRelationDetails[]',
        'product_categories' => 'string[]',
        'product_destinations' => 'string[]',
        'product_languages' => 'string[]',
        'product_content_languages' => 'string[]',
        'product_guide_languages' => '\PrioTicket\DistributorAPI\Models\GuideLanguage[]',
        'product_routes' => 'string[]',
        'product_notes' => '\PrioTicket\DistributorAPI\Models\Note[]',
        'product_google_categories' => 'string',
        'product_custom_fields' => '\PrioTicket\DistributorAPI\Models\CustomField[]',
        'product_created' => '\DateTime',
        'product_created_name' => 'string',
        'product_created_email' => 'string',
        'product_modified' => '\DateTime',
        'product_modified_name' => 'string',
        'product_modified_email' => 'string',
        'product_view_type' => '\PrioTicket\DistributorAPI\Models\AccountType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_id' => null,
        'product_external_id' => null,
        'product_internal_reference' => null,
        'product_platform_id' => null,
        'product_platform_name' => null,
        'product_distributor_id' => null,
        'product_distributor_name' => null,
        'product_reseller_id' => null,
        'product_reseller_name' => null,
        'product_market_admin_id' => null,
        'product_market_admin_name' => null,
        'product_supplier_admin_id' => null,
        'product_supplier_admin_name' => null,
        'product_supplier_id' => null,
        'product_source_id' => null,
        'product_source_name' => null,
        'product_contract_source_id' => null,
        'product_contract_source_name' => null,
        'product_default_language' => null,
        'product_version' => null,
        'product_color' => null,
        'product_slug' => null,
        'product_supplier_url' => 'uri',
        'product_supplier_key_public' => null,
        'product_from_price' => null,
        'product_start_date' => 'date-time',
        'product_end_date' => 'date-time',
        'product_booking_start_date' => 'date-time',
        'product_booking_end_date' => 'date-time',
        'product_booking_advance_time_min' => null,
        'product_booking_advance_time_max' => null,
        'product_booking_quantity_min' => null,
        'product_booking_quantity_max' => null,
        'product_turnout_time' => null,
        'product_duration' => null,
        'product_show_capacity_count' => null,
        'product_third_party' => null,
        'product_seasonal_pricing' => null,
        'product_quantity_pricing' => null,
        'product_daily_pricing' => null,
        'product_dynamic_pricing' => null,
        'product_relation_details_visible' => null,
        'product_timepicker_visible' => null,
        'product_sub_only' => null,
        'product_cluster' => null,
        'product_combi' => null,
        'product_addon' => null,
        'product_availability' => null,
        'product_availability_assigned' => null,
        'product_capacity' => null,
        'product_traveldate_required' => null,
        'product_cancellation_allowed' => null,
        'product_overbooking_allowed' => null,
        'product_past_date_booking_allowed' => null,
        'product_capacity_id' => null,
        'product_capacity_shared_id' => null,
        'product_capacity_type' => null,
        'product_admission_type' => null,
        'product_status' => null,
        'product_catalogue_status' => null,
        'product_service_type' => null,
        'product_pickup_point' => null,
        'product_pickup_point_details' => null,
        'product_content' => null,
        'product_redemption_rules' => null,
        'product_code_settings' => null,
        'product_payment_detail' => null,
        'product_type_seasons' => null,
        'product_options' => null,
        'product_cancellation_policies' => null,
        'product_opening_times' => null,
        'product_currencies' => null,
        'product_noshow_policy' => null,
        'product_flags' => null,
        'product_block_out_dates' => null,
        'product_special_dates' => null,
        'product_locations' => null,
        'product_cluster_details' => null,
        'product_combi_details' => null,
        'product_addon_details' => null,
        'product_categories' => null,
        'product_destinations' => null,
        'product_languages' => null,
        'product_content_languages' => null,
        'product_guide_languages' => null,
        'product_routes' => null,
        'product_notes' => null,
        'product_google_categories' => null,
        'product_custom_fields' => null,
        'product_created' => 'date-time',
        'product_created_name' => null,
        'product_created_email' => 'email',
        'product_modified' => 'date-time',
        'product_modified_name' => null,
        'product_modified_email' => 'email',
        'product_view_type' => null
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
        'product_id' => 'product_id',
        'product_external_id' => 'product_external_id',
        'product_internal_reference' => 'product_internal_reference',
        'product_platform_id' => 'product_platform_id',
        'product_platform_name' => 'product_platform_name',
        'product_distributor_id' => 'product_distributor_id',
        'product_distributor_name' => 'product_distributor_name',
        'product_reseller_id' => 'product_reseller_id',
        'product_reseller_name' => 'product_reseller_name',
        'product_market_admin_id' => 'product_market_admin_id',
        'product_market_admin_name' => 'product_market_admin_name',
        'product_supplier_admin_id' => 'product_supplier_admin_id',
        'product_supplier_admin_name' => 'product_supplier_admin_name',
        'product_supplier_id' => 'product_supplier_id',
        'product_source_id' => 'product_source_id',
        'product_source_name' => 'product_source_name',
        'product_contract_source_id' => 'product_contract_source_id',
        'product_contract_source_name' => 'product_contract_source_name',
        'product_default_language' => 'product_default_language',
        'product_version' => 'product_version',
        'product_color' => 'product_color',
        'product_slug' => 'product_slug',
        'product_supplier_url' => 'product_supplier_url',
        'product_supplier_key_public' => 'product_supplier_key_public',
        'product_from_price' => 'product_from_price',
        'product_start_date' => 'product_start_date',
        'product_end_date' => 'product_end_date',
        'product_booking_start_date' => 'product_booking_start_date',
        'product_booking_end_date' => 'product_booking_end_date',
        'product_booking_advance_time_min' => 'product_booking_advance_time_min',
        'product_booking_advance_time_max' => 'product_booking_advance_time_max',
        'product_booking_quantity_min' => 'product_booking_quantity_min',
        'product_booking_quantity_max' => 'product_booking_quantity_max',
        'product_turnout_time' => 'product_turnout_time',
        'product_duration' => 'product_duration',
        'product_show_capacity_count' => 'product_show_capacity_count',
        'product_third_party' => 'product_third_party',
        'product_seasonal_pricing' => 'product_seasonal_pricing',
        'product_quantity_pricing' => 'product_quantity_pricing',
        'product_daily_pricing' => 'product_daily_pricing',
        'product_dynamic_pricing' => 'product_dynamic_pricing',
        'product_relation_details_visible' => 'product_relation_details_visible',
        'product_timepicker_visible' => 'product_timepicker_visible',
        'product_sub_only' => 'product_sub_only',
        'product_cluster' => 'product_cluster',
        'product_combi' => 'product_combi',
        'product_addon' => 'product_addon',
        'product_availability' => 'product_availability',
        'product_availability_assigned' => 'product_availability_assigned',
        'product_capacity' => 'product_capacity',
        'product_traveldate_required' => 'product_traveldate_required',
        'product_cancellation_allowed' => 'product_cancellation_allowed',
        'product_overbooking_allowed' => 'product_overbooking_allowed',
        'product_past_date_booking_allowed' => 'product_past_date_booking_allowed',
        'product_capacity_id' => 'product_capacity_id',
        'product_capacity_shared_id' => 'product_capacity_shared_id',
        'product_capacity_type' => 'product_capacity_type',
        'product_admission_type' => 'product_admission_type',
        'product_status' => 'product_status',
        'product_catalogue_status' => 'product_catalogue_status',
        'product_service_type' => 'product_service_type',
        'product_pickup_point' => 'product_pickup_point',
        'product_pickup_point_details' => 'product_pickup_point_details',
        'product_content' => 'product_content',
        'product_redemption_rules' => 'product_redemption_rules',
        'product_code_settings' => 'product_code_settings',
        'product_payment_detail' => 'product_payment_detail',
        'product_type_seasons' => 'product_type_seasons',
        'product_options' => 'product_options',
        'product_cancellation_policies' => 'product_cancellation_policies',
        'product_opening_times' => 'product_opening_times',
        'product_currencies' => 'product_currencies',
        'product_noshow_policy' => 'product_noshow_policy',
        'product_flags' => 'product_flags',
        'product_block_out_dates' => 'product_block_out_dates',
        'product_special_dates' => 'product_special_dates',
        'product_locations' => 'product_locations',
        'product_cluster_details' => 'product_cluster_details',
        'product_combi_details' => 'product_combi_details',
        'product_addon_details' => 'product_addon_details',
        'product_categories' => 'product_categories',
        'product_destinations' => 'product_destinations',
        'product_languages' => 'product_languages',
        'product_content_languages' => 'product_content_languages',
        'product_guide_languages' => 'product_guide_languages',
        'product_routes' => 'product_routes',
        'product_notes' => 'product_notes',
        'product_google_categories' => 'product_google_categories',
        'product_custom_fields' => 'product_custom_fields',
        'product_created' => 'product_created',
        'product_created_name' => 'product_created_name',
        'product_created_email' => 'product_created_email',
        'product_modified' => 'product_modified',
        'product_modified_name' => 'product_modified_name',
        'product_modified_email' => 'product_modified_email',
        'product_view_type' => 'product_view_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'product_external_id' => 'setProductExternalId',
        'product_internal_reference' => 'setProductInternalReference',
        'product_platform_id' => 'setProductPlatformId',
        'product_platform_name' => 'setProductPlatformName',
        'product_distributor_id' => 'setProductDistributorId',
        'product_distributor_name' => 'setProductDistributorName',
        'product_reseller_id' => 'setProductResellerId',
        'product_reseller_name' => 'setProductResellerName',
        'product_market_admin_id' => 'setProductMarketAdminId',
        'product_market_admin_name' => 'setProductMarketAdminName',
        'product_supplier_admin_id' => 'setProductSupplierAdminId',
        'product_supplier_admin_name' => 'setProductSupplierAdminName',
        'product_supplier_id' => 'setProductSupplierId',
        'product_source_id' => 'setProductSourceId',
        'product_source_name' => 'setProductSourceName',
        'product_contract_source_id' => 'setProductContractSourceId',
        'product_contract_source_name' => 'setProductContractSourceName',
        'product_default_language' => 'setProductDefaultLanguage',
        'product_version' => 'setProductVersion',
        'product_color' => 'setProductColor',
        'product_slug' => 'setProductSlug',
        'product_supplier_url' => 'setProductSupplierUrl',
        'product_supplier_key_public' => 'setProductSupplierKeyPublic',
        'product_from_price' => 'setProductFromPrice',
        'product_start_date' => 'setProductStartDate',
        'product_end_date' => 'setProductEndDate',
        'product_booking_start_date' => 'setProductBookingStartDate',
        'product_booking_end_date' => 'setProductBookingEndDate',
        'product_booking_advance_time_min' => 'setProductBookingAdvanceTimeMin',
        'product_booking_advance_time_max' => 'setProductBookingAdvanceTimeMax',
        'product_booking_quantity_min' => 'setProductBookingQuantityMin',
        'product_booking_quantity_max' => 'setProductBookingQuantityMax',
        'product_turnout_time' => 'setProductTurnoutTime',
        'product_duration' => 'setProductDuration',
        'product_show_capacity_count' => 'setProductShowCapacityCount',
        'product_third_party' => 'setProductThirdParty',
        'product_seasonal_pricing' => 'setProductSeasonalPricing',
        'product_quantity_pricing' => 'setProductQuantityPricing',
        'product_daily_pricing' => 'setProductDailyPricing',
        'product_dynamic_pricing' => 'setProductDynamicPricing',
        'product_relation_details_visible' => 'setProductRelationDetailsVisible',
        'product_timepicker_visible' => 'setProductTimepickerVisible',
        'product_sub_only' => 'setProductSubOnly',
        'product_cluster' => 'setProductCluster',
        'product_combi' => 'setProductCombi',
        'product_addon' => 'setProductAddon',
        'product_availability' => 'setProductAvailability',
        'product_availability_assigned' => 'setProductAvailabilityAssigned',
        'product_capacity' => 'setProductCapacity',
        'product_traveldate_required' => 'setProductTraveldateRequired',
        'product_cancellation_allowed' => 'setProductCancellationAllowed',
        'product_overbooking_allowed' => 'setProductOverbookingAllowed',
        'product_past_date_booking_allowed' => 'setProductPastDateBookingAllowed',
        'product_capacity_id' => 'setProductCapacityId',
        'product_capacity_shared_id' => 'setProductCapacitySharedId',
        'product_capacity_type' => 'setProductCapacityType',
        'product_admission_type' => 'setProductAdmissionType',
        'product_status' => 'setProductStatus',
        'product_catalogue_status' => 'setProductCatalogueStatus',
        'product_service_type' => 'setProductServiceType',
        'product_pickup_point' => 'setProductPickupPoint',
        'product_pickup_point_details' => 'setProductPickupPointDetails',
        'product_content' => 'setProductContent',
        'product_redemption_rules' => 'setProductRedemptionRules',
        'product_code_settings' => 'setProductCodeSettings',
        'product_payment_detail' => 'setProductPaymentDetail',
        'product_type_seasons' => 'setProductTypeSeasons',
        'product_options' => 'setProductOptions',
        'product_cancellation_policies' => 'setProductCancellationPolicies',
        'product_opening_times' => 'setProductOpeningTimes',
        'product_currencies' => 'setProductCurrencies',
        'product_noshow_policy' => 'setProductNoshowPolicy',
        'product_flags' => 'setProductFlags',
        'product_block_out_dates' => 'setProductBlockOutDates',
        'product_special_dates' => 'setProductSpecialDates',
        'product_locations' => 'setProductLocations',
        'product_cluster_details' => 'setProductClusterDetails',
        'product_combi_details' => 'setProductCombiDetails',
        'product_addon_details' => 'setProductAddonDetails',
        'product_categories' => 'setProductCategories',
        'product_destinations' => 'setProductDestinations',
        'product_languages' => 'setProductLanguages',
        'product_content_languages' => 'setProductContentLanguages',
        'product_guide_languages' => 'setProductGuideLanguages',
        'product_routes' => 'setProductRoutes',
        'product_notes' => 'setProductNotes',
        'product_google_categories' => 'setProductGoogleCategories',
        'product_custom_fields' => 'setProductCustomFields',
        'product_created' => 'setProductCreated',
        'product_created_name' => 'setProductCreatedName',
        'product_created_email' => 'setProductCreatedEmail',
        'product_modified' => 'setProductModified',
        'product_modified_name' => 'setProductModifiedName',
        'product_modified_email' => 'setProductModifiedEmail',
        'product_view_type' => 'setProductViewType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'product_external_id' => 'getProductExternalId',
        'product_internal_reference' => 'getProductInternalReference',
        'product_platform_id' => 'getProductPlatformId',
        'product_platform_name' => 'getProductPlatformName',
        'product_distributor_id' => 'getProductDistributorId',
        'product_distributor_name' => 'getProductDistributorName',
        'product_reseller_id' => 'getProductResellerId',
        'product_reseller_name' => 'getProductResellerName',
        'product_market_admin_id' => 'getProductMarketAdminId',
        'product_market_admin_name' => 'getProductMarketAdminName',
        'product_supplier_admin_id' => 'getProductSupplierAdminId',
        'product_supplier_admin_name' => 'getProductSupplierAdminName',
        'product_supplier_id' => 'getProductSupplierId',
        'product_source_id' => 'getProductSourceId',
        'product_source_name' => 'getProductSourceName',
        'product_contract_source_id' => 'getProductContractSourceId',
        'product_contract_source_name' => 'getProductContractSourceName',
        'product_default_language' => 'getProductDefaultLanguage',
        'product_version' => 'getProductVersion',
        'product_color' => 'getProductColor',
        'product_slug' => 'getProductSlug',
        'product_supplier_url' => 'getProductSupplierUrl',
        'product_supplier_key_public' => 'getProductSupplierKeyPublic',
        'product_from_price' => 'getProductFromPrice',
        'product_start_date' => 'getProductStartDate',
        'product_end_date' => 'getProductEndDate',
        'product_booking_start_date' => 'getProductBookingStartDate',
        'product_booking_end_date' => 'getProductBookingEndDate',
        'product_booking_advance_time_min' => 'getProductBookingAdvanceTimeMin',
        'product_booking_advance_time_max' => 'getProductBookingAdvanceTimeMax',
        'product_booking_quantity_min' => 'getProductBookingQuantityMin',
        'product_booking_quantity_max' => 'getProductBookingQuantityMax',
        'product_turnout_time' => 'getProductTurnoutTime',
        'product_duration' => 'getProductDuration',
        'product_show_capacity_count' => 'getProductShowCapacityCount',
        'product_third_party' => 'getProductThirdParty',
        'product_seasonal_pricing' => 'getProductSeasonalPricing',
        'product_quantity_pricing' => 'getProductQuantityPricing',
        'product_daily_pricing' => 'getProductDailyPricing',
        'product_dynamic_pricing' => 'getProductDynamicPricing',
        'product_relation_details_visible' => 'getProductRelationDetailsVisible',
        'product_timepicker_visible' => 'getProductTimepickerVisible',
        'product_sub_only' => 'getProductSubOnly',
        'product_cluster' => 'getProductCluster',
        'product_combi' => 'getProductCombi',
        'product_addon' => 'getProductAddon',
        'product_availability' => 'getProductAvailability',
        'product_availability_assigned' => 'getProductAvailabilityAssigned',
        'product_capacity' => 'getProductCapacity',
        'product_traveldate_required' => 'getProductTraveldateRequired',
        'product_cancellation_allowed' => 'getProductCancellationAllowed',
        'product_overbooking_allowed' => 'getProductOverbookingAllowed',
        'product_past_date_booking_allowed' => 'getProductPastDateBookingAllowed',
        'product_capacity_id' => 'getProductCapacityId',
        'product_capacity_shared_id' => 'getProductCapacitySharedId',
        'product_capacity_type' => 'getProductCapacityType',
        'product_admission_type' => 'getProductAdmissionType',
        'product_status' => 'getProductStatus',
        'product_catalogue_status' => 'getProductCatalogueStatus',
        'product_service_type' => 'getProductServiceType',
        'product_pickup_point' => 'getProductPickupPoint',
        'product_pickup_point_details' => 'getProductPickupPointDetails',
        'product_content' => 'getProductContent',
        'product_redemption_rules' => 'getProductRedemptionRules',
        'product_code_settings' => 'getProductCodeSettings',
        'product_payment_detail' => 'getProductPaymentDetail',
        'product_type_seasons' => 'getProductTypeSeasons',
        'product_options' => 'getProductOptions',
        'product_cancellation_policies' => 'getProductCancellationPolicies',
        'product_opening_times' => 'getProductOpeningTimes',
        'product_currencies' => 'getProductCurrencies',
        'product_noshow_policy' => 'getProductNoshowPolicy',
        'product_flags' => 'getProductFlags',
        'product_block_out_dates' => 'getProductBlockOutDates',
        'product_special_dates' => 'getProductSpecialDates',
        'product_locations' => 'getProductLocations',
        'product_cluster_details' => 'getProductClusterDetails',
        'product_combi_details' => 'getProductCombiDetails',
        'product_addon_details' => 'getProductAddonDetails',
        'product_categories' => 'getProductCategories',
        'product_destinations' => 'getProductDestinations',
        'product_languages' => 'getProductLanguages',
        'product_content_languages' => 'getProductContentLanguages',
        'product_guide_languages' => 'getProductGuideLanguages',
        'product_routes' => 'getProductRoutes',
        'product_notes' => 'getProductNotes',
        'product_google_categories' => 'getProductGoogleCategories',
        'product_custom_fields' => 'getProductCustomFields',
        'product_created' => 'getProductCreated',
        'product_created_name' => 'getProductCreatedName',
        'product_created_email' => 'getProductCreatedEmail',
        'product_modified' => 'getProductModified',
        'product_modified_name' => 'getProductModifiedName',
        'product_modified_email' => 'getProductModifiedEmail',
        'product_view_type' => 'getProductViewType'
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

    const PRODUCT_PICKUP_POINT_MANDATORY = 'MANDATORY';
    const PRODUCT_PICKUP_POINT_OPTIONAL = 'OPTIONAL';
    const PRODUCT_PICKUP_POINT_NOT_SET = 'NOT_SET';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductPickupPointAllowableValues()
    {
        return [
            self::PRODUCT_PICKUP_POINT_MANDATORY,
            self::PRODUCT_PICKUP_POINT_OPTIONAL,
            self::PRODUCT_PICKUP_POINT_NOT_SET,
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
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['product_external_id'] = $data['product_external_id'] ?? null;
        $this->container['product_internal_reference'] = $data['product_internal_reference'] ?? null;
        $this->container['product_platform_id'] = $data['product_platform_id'] ?? null;
        $this->container['product_platform_name'] = $data['product_platform_name'] ?? null;
        $this->container['product_distributor_id'] = $data['product_distributor_id'] ?? null;
        $this->container['product_distributor_name'] = $data['product_distributor_name'] ?? null;
        $this->container['product_reseller_id'] = $data['product_reseller_id'] ?? null;
        $this->container['product_reseller_name'] = $data['product_reseller_name'] ?? null;
        $this->container['product_market_admin_id'] = $data['product_market_admin_id'] ?? null;
        $this->container['product_market_admin_name'] = $data['product_market_admin_name'] ?? null;
        $this->container['product_supplier_admin_id'] = $data['product_supplier_admin_id'] ?? null;
        $this->container['product_supplier_admin_name'] = $data['product_supplier_admin_name'] ?? null;
        $this->container['product_supplier_id'] = $data['product_supplier_id'] ?? null;
        $this->container['product_source_id'] = $data['product_source_id'] ?? null;
        $this->container['product_source_name'] = $data['product_source_name'] ?? null;
        $this->container['product_contract_source_id'] = $data['product_contract_source_id'] ?? null;
        $this->container['product_contract_source_name'] = $data['product_contract_source_name'] ?? null;
        $this->container['product_default_language'] = $data['product_default_language'] ?? 'en';
        $this->container['product_version'] = $data['product_version'] ?? null;
        $this->container['product_color'] = $data['product_color'] ?? null;
        $this->container['product_slug'] = $data['product_slug'] ?? null;
        $this->container['product_supplier_url'] = $data['product_supplier_url'] ?? null;
        $this->container['product_supplier_key_public'] = $data['product_supplier_key_public'] ?? null;
        $this->container['product_from_price'] = $data['product_from_price'] ?? null;
        $this->container['product_start_date'] = $data['product_start_date'] ?? null;
        $this->container['product_end_date'] = $data['product_end_date'] ?? null;
        $this->container['product_booking_start_date'] = $data['product_booking_start_date'] ?? null;
        $this->container['product_booking_end_date'] = $data['product_booking_end_date'] ?? null;
        $this->container['product_booking_advance_time_min'] = $data['product_booking_advance_time_min'] ?? null;
        $this->container['product_booking_advance_time_max'] = $data['product_booking_advance_time_max'] ?? null;
        $this->container['product_booking_quantity_min'] = $data['product_booking_quantity_min'] ?? null;
        $this->container['product_booking_quantity_max'] = $data['product_booking_quantity_max'] ?? null;
        $this->container['product_turnout_time'] = $data['product_turnout_time'] ?? null;
        $this->container['product_duration'] = $data['product_duration'] ?? null;
        $this->container['product_show_capacity_count'] = $data['product_show_capacity_count'] ?? null;
        $this->container['product_third_party'] = $data['product_third_party'] ?? false;
        $this->container['product_seasonal_pricing'] = $data['product_seasonal_pricing'] ?? false;
        $this->container['product_quantity_pricing'] = $data['product_quantity_pricing'] ?? false;
        $this->container['product_daily_pricing'] = $data['product_daily_pricing'] ?? false;
        $this->container['product_dynamic_pricing'] = $data['product_dynamic_pricing'] ?? false;
        $this->container['product_relation_details_visible'] = $data['product_relation_details_visible'] ?? false;
        $this->container['product_timepicker_visible'] = $data['product_timepicker_visible'] ?? true;
        $this->container['product_sub_only'] = $data['product_sub_only'] ?? false;
        $this->container['product_cluster'] = $data['product_cluster'] ?? false;
        $this->container['product_combi'] = $data['product_combi'] ?? false;
        $this->container['product_addon'] = $data['product_addon'] ?? false;
        $this->container['product_availability'] = $data['product_availability'] ?? true;
        $this->container['product_availability_assigned'] = $data['product_availability_assigned'] ?? false;
        $this->container['product_capacity'] = $data['product_capacity'] ?? true;
        $this->container['product_traveldate_required'] = $data['product_traveldate_required'] ?? false;
        $this->container['product_cancellation_allowed'] = $data['product_cancellation_allowed'] ?? true;
        $this->container['product_overbooking_allowed'] = $data['product_overbooking_allowed'] ?? false;
        $this->container['product_past_date_booking_allowed'] = $data['product_past_date_booking_allowed'] ?? false;
        $this->container['product_capacity_id'] = $data['product_capacity_id'] ?? null;
        $this->container['product_capacity_shared_id'] = $data['product_capacity_shared_id'] ?? null;
        $this->container['product_capacity_type'] = $data['product_capacity_type'] ?? null;
        $this->container['product_admission_type'] = $data['product_admission_type'] ?? null;
        $this->container['product_status'] = $data['product_status'] ?? null;
        $this->container['product_catalogue_status'] = $data['product_catalogue_status'] ?? null;
        $this->container['product_service_type'] = $data['product_service_type'] ?? null;
        $this->container['product_pickup_point'] = $data['product_pickup_point'] ?? null;
        $this->container['product_pickup_point_details'] = $data['product_pickup_point_details'] ?? null;
        $this->container['product_content'] = $data['product_content'] ?? null;
        $this->container['product_redemption_rules'] = $data['product_redemption_rules'] ?? null;
        $this->container['product_code_settings'] = $data['product_code_settings'] ?? null;
        $this->container['product_payment_detail'] = $data['product_payment_detail'] ?? null;
        $this->container['product_type_seasons'] = $data['product_type_seasons'] ?? null;
        $this->container['product_options'] = $data['product_options'] ?? null;
        $this->container['product_cancellation_policies'] = $data['product_cancellation_policies'] ?? null;
        $this->container['product_opening_times'] = $data['product_opening_times'] ?? null;
        $this->container['product_currencies'] = $data['product_currencies'] ?? null;
        $this->container['product_noshow_policy'] = $data['product_noshow_policy'] ?? null;
        $this->container['product_flags'] = $data['product_flags'] ?? null;
        $this->container['product_block_out_dates'] = $data['product_block_out_dates'] ?? null;
        $this->container['product_special_dates'] = $data['product_special_dates'] ?? null;
        $this->container['product_locations'] = $data['product_locations'] ?? null;
        $this->container['product_cluster_details'] = $data['product_cluster_details'] ?? null;
        $this->container['product_combi_details'] = $data['product_combi_details'] ?? null;
        $this->container['product_addon_details'] = $data['product_addon_details'] ?? null;
        $this->container['product_categories'] = $data['product_categories'] ?? null;
        $this->container['product_destinations'] = $data['product_destinations'] ?? null;
        $this->container['product_languages'] = $data['product_languages'] ?? null;
        $this->container['product_content_languages'] = $data['product_content_languages'] ?? null;
        $this->container['product_guide_languages'] = $data['product_guide_languages'] ?? null;
        $this->container['product_routes'] = $data['product_routes'] ?? null;
        $this->container['product_notes'] = $data['product_notes'] ?? null;
        $this->container['product_google_categories'] = $data['product_google_categories'] ?? null;
        $this->container['product_custom_fields'] = $data['product_custom_fields'] ?? null;
        $this->container['product_created'] = $data['product_created'] ?? null;
        $this->container['product_created_name'] = $data['product_created_name'] ?? null;
        $this->container['product_created_email'] = $data['product_created_email'] ?? null;
        $this->container['product_modified'] = $data['product_modified'] ?? null;
        $this->container['product_modified_name'] = $data['product_modified_name'] ?? null;
        $this->container['product_modified_email'] = $data['product_modified_email'] ?? null;
        $this->container['product_view_type'] = $data['product_view_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['product_market_admin_id'] === null) {
            $invalidProperties[] = "'product_market_admin_id' can't be null";
        }
        if ($this->container['product_market_admin_name'] === null) {
            $invalidProperties[] = "'product_market_admin_name' can't be null";
        }
        if ($this->container['product_supplier_id'] === null) {
            $invalidProperties[] = "'product_supplier_id' can't be null";
        }
        if ($this->container['product_source_id'] === null) {
            $invalidProperties[] = "'product_source_id' can't be null";
        }
        if ($this->container['product_source_name'] === null) {
            $invalidProperties[] = "'product_source_name' can't be null";
        }
        if ($this->container['product_default_language'] === null) {
            $invalidProperties[] = "'product_default_language' can't be null";
        }
        if ($this->container['product_start_date'] === null) {
            $invalidProperties[] = "'product_start_date' can't be null";
        }
        if ($this->container['product_booking_start_date'] === null) {
            $invalidProperties[] = "'product_booking_start_date' can't be null";
        }
        if (!is_null($this->container['product_booking_quantity_max']) && ($this->container['product_booking_quantity_max'] > 100)) {
            $invalidProperties[] = "invalid value for 'product_booking_quantity_max', must be smaller than or equal to 100.";
        }

        if ($this->container['product_third_party'] === null) {
            $invalidProperties[] = "'product_third_party' can't be null";
        }
        if ($this->container['product_seasonal_pricing'] === null) {
            $invalidProperties[] = "'product_seasonal_pricing' can't be null";
        }
        if ($this->container['product_quantity_pricing'] === null) {
            $invalidProperties[] = "'product_quantity_pricing' can't be null";
        }
        if ($this->container['product_daily_pricing'] === null) {
            $invalidProperties[] = "'product_daily_pricing' can't be null";
        }
        if ($this->container['product_dynamic_pricing'] === null) {
            $invalidProperties[] = "'product_dynamic_pricing' can't be null";
        }
        if ($this->container['product_relation_details_visible'] === null) {
            $invalidProperties[] = "'product_relation_details_visible' can't be null";
        }
        if ($this->container['product_cluster'] === null) {
            $invalidProperties[] = "'product_cluster' can't be null";
        }
        if ($this->container['product_combi'] === null) {
            $invalidProperties[] = "'product_combi' can't be null";
        }
        if ($this->container['product_addon'] === null) {
            $invalidProperties[] = "'product_addon' can't be null";
        }
        if ($this->container['product_availability'] === null) {
            $invalidProperties[] = "'product_availability' can't be null";
        }
        if ($this->container['product_availability_assigned'] === null) {
            $invalidProperties[] = "'product_availability_assigned' can't be null";
        }
        if ($this->container['product_capacity'] === null) {
            $invalidProperties[] = "'product_capacity' can't be null";
        }
        if ($this->container['product_traveldate_required'] === null) {
            $invalidProperties[] = "'product_traveldate_required' can't be null";
        }
        if ($this->container['product_cancellation_allowed'] === null) {
            $invalidProperties[] = "'product_cancellation_allowed' can't be null";
        }
        if ($this->container['product_overbooking_allowed'] === null) {
            $invalidProperties[] = "'product_overbooking_allowed' can't be null";
        }
        if ($this->container['product_past_date_booking_allowed'] === null) {
            $invalidProperties[] = "'product_past_date_booking_allowed' can't be null";
        }
        if ($this->container['product_capacity_type'] === null) {
            $invalidProperties[] = "'product_capacity_type' can't be null";
        }
        if ($this->container['product_admission_type'] === null) {
            $invalidProperties[] = "'product_admission_type' can't be null";
        }
        if ($this->container['product_service_type'] === null) {
            $invalidProperties[] = "'product_service_type' can't be null";
        }
        if ($this->container['product_pickup_point'] === null) {
            $invalidProperties[] = "'product_pickup_point' can't be null";
        }
        $allowedValues = $this->getProductPickupPointAllowableValues();
        if (!is_null($this->container['product_pickup_point']) && !in_array($this->container['product_pickup_point'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'product_pickup_point', must be one of '%s'",
                $this->container['product_pickup_point'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['product_content'] === null) {
            $invalidProperties[] = "'product_content' can't be null";
        }
        if ($this->container['product_redemption_rules'] === null) {
            $invalidProperties[] = "'product_redemption_rules' can't be null";
        }
        if ($this->container['product_code_settings'] === null) {
            $invalidProperties[] = "'product_code_settings' can't be null";
        }
        if ($this->container['product_type_seasons'] === null) {
            $invalidProperties[] = "'product_type_seasons' can't be null";
        }
        if ($this->container['product_content_languages'] === null) {
            $invalidProperties[] = "'product_content_languages' can't be null";
        }
        if ($this->container['product_created'] === null) {
            $invalidProperties[] = "'product_created' can't be null";
        }
        if ($this->container['product_created_name'] === null) {
            $invalidProperties[] = "'product_created_name' can't be null";
        }
        if ($this->container['product_created_email'] === null) {
            $invalidProperties[] = "'product_created_email' can't be null";
        }
        if ($this->container['product_modified'] === null) {
            $invalidProperties[] = "'product_modified' can't be null";
        }
        if ($this->container['product_modified_name'] === null) {
            $invalidProperties[] = "'product_modified_name' can't be null";
        }
        if ($this->container['product_modified_email'] === null) {
            $invalidProperties[] = "'product_modified_email' can't be null";
        }
        if ($this->container['product_view_type'] === null) {
            $invalidProperties[] = "'product_view_type' can't be null";
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
     * Gets product_external_id
     *
     * @return string|null
     */
    public function getProductExternalId()
    {
        return $this->container['product_external_id'];
    }

    /**
     * Sets product_external_id
     *
     * @param string|null $product_external_id Unique identifier for the product assigned by the third party.
     *
     * @return self
     */
    public function setProductExternalId($product_external_id)
    {
        $this->container['product_external_id'] = $product_external_id;

        return $this;
    }

    /**
     * Gets product_internal_reference
     *
     * @return string|null
     */
    public function getProductInternalReference()
    {
        return $this->container['product_internal_reference'];
    }

    /**
     * Sets product_internal_reference
     *
     * @param string|null $product_internal_reference Internal Reference / SKU for the product.
     *
     * @return self
     */
    public function setProductInternalReference($product_internal_reference)
    {
        $this->container['product_internal_reference'] = $product_internal_reference;

        return $this;
    }

    /**
     * Gets product_platform_id
     *
     * @return string|null
     */
    public function getProductPlatformId()
    {
        return $this->container['product_platform_id'];
    }

    /**
     * Sets product_platform_id
     *
     * @param string|null $product_platform_id Unique identifier of the platform.
     *
     * @return self
     */
    public function setProductPlatformId($product_platform_id)
    {
        $this->container['product_platform_id'] = $product_platform_id;

        return $this;
    }

    /**
     * Gets product_platform_name
     *
     * @return string|null
     */
    public function getProductPlatformName()
    {
        return $this->container['product_platform_name'];
    }

    /**
     * Sets product_platform_name
     *
     * @param string|null $product_platform_name Name of the platform.
     *
     * @return self
     */
    public function setProductPlatformName($product_platform_name)
    {
        $this->container['product_platform_name'] = $product_platform_name;

        return $this;
    }

    /**
     * Gets product_distributor_id
     *
     * @return string|null
     */
    public function getProductDistributorId()
    {
        return $this->container['product_distributor_id'];
    }

    /**
     * Sets product_distributor_id
     *
     * @param string|null $product_distributor_id Unique identifier for the distributor.
     *
     * @return self
     */
    public function setProductDistributorId($product_distributor_id)
    {
        $this->container['product_distributor_id'] = $product_distributor_id;

        return $this;
    }

    /**
     * Gets product_distributor_name
     *
     * @return string|null
     */
    public function getProductDistributorName()
    {
        return $this->container['product_distributor_name'];
    }

    /**
     * Sets product_distributor_name
     *
     * @param string|null $product_distributor_name Name of the distributor.
     *
     * @return self
     */
    public function setProductDistributorName($product_distributor_name)
    {
        $this->container['product_distributor_name'] = $product_distributor_name;

        return $this;
    }

    /**
     * Gets product_reseller_id
     *
     * @return string|null
     */
    public function getProductResellerId()
    {
        return $this->container['product_reseller_id'];
    }

    /**
     * Sets product_reseller_id
     *
     * @param string|null $product_reseller_id Unique identifier of the reseller.
     *
     * @return self
     */
    public function setProductResellerId($product_reseller_id)
    {
        $this->container['product_reseller_id'] = $product_reseller_id;

        return $this;
    }

    /**
     * Gets product_reseller_name
     *
     * @return string|null
     */
    public function getProductResellerName()
    {
        return $this->container['product_reseller_name'];
    }

    /**
     * Sets product_reseller_name
     *
     * @param string|null $product_reseller_name Name of the reseller.
     *
     * @return self
     */
    public function setProductResellerName($product_reseller_name)
    {
        $this->container['product_reseller_name'] = $product_reseller_name;

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
     * @param string $product_supplier_id Unique identifier for supplier.
     *
     * @return self
     */
    public function setProductSupplierId($product_supplier_id)
    {
        $this->container['product_supplier_id'] = $product_supplier_id;

        return $this;
    }

    /**
     * Gets product_source_id
     *
     * @return string
     */
    public function getProductSourceId()
    {
        return $this->container['product_source_id'];
    }

    /**
     * Sets product_source_id
     *
     * @param string $product_source_id Unique ID of the product source.
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
     * @return string
     */
    public function getProductSourceName()
    {
        return $this->container['product_source_name'];
    }

    /**
     * Sets product_source_name
     *
     * @param string $product_source_name Source of the product.   Either PrioTicket or the name of the other reservation system e.g. CSS.
     *
     * @return self
     */
    public function setProductSourceName($product_source_name)
    {
        $this->container['product_source_name'] = $product_source_name;

        return $this;
    }

    /**
     * Gets product_contract_source_id
     *
     * @return string|null
     */
    public function getProductContractSourceId()
    {
        return $this->container['product_contract_source_id'];
    }

    /**
     * Sets product_contract_source_id
     *
     * @param string|null $product_contract_source_id Contract source id.
     *
     * @return self
     */
    public function setProductContractSourceId($product_contract_source_id)
    {
        $this->container['product_contract_source_id'] = $product_contract_source_id;

        return $this;
    }

    /**
     * Gets product_contract_source_name
     *
     * @return string|null
     */
    public function getProductContractSourceName()
    {
        return $this->container['product_contract_source_name'];
    }

    /**
     * Sets product_contract_source_name
     *
     * @param string|null $product_contract_source_name Contract source of the product.   Either PrioTicket or the name of the contracting party.
     *
     * @return self
     */
    public function setProductContractSourceName($product_contract_source_name)
    {
        $this->container['product_contract_source_name'] = $product_contract_source_name;

        return $this;
    }

    /**
     * Gets product_default_language
     *
     * @return string
     */
    public function getProductDefaultLanguage()
    {
        return $this->container['product_default_language'];
    }

    /**
     * Sets product_default_language
     *
     * @param string $product_default_language Default Supplier Language.   Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.
     *
     * @return self
     */
    public function setProductDefaultLanguage($product_default_language)
    {
        $this->container['product_default_language'] = $product_default_language;

        return $this;
    }

    /**
     * Gets product_version
     *
     * @return int|null
     */
    public function getProductVersion()
    {
        return $this->container['product_version'];
    }

    /**
     * Sets product_version
     *
     * @param int|null $product_version Product version.
     *
     * @return self
     */
    public function setProductVersion($product_version)
    {
        $this->container['product_version'] = $product_version;

        return $this;
    }

    /**
     * Gets product_color
     *
     * @return string|null
     */
    public function getProductColor()
    {
        return $this->container['product_color'];
    }

    /**
     * Sets product_color
     *
     * @param string|null $product_color Color of the product. (HEX)
     *
     * @return self
     */
    public function setProductColor($product_color)
    {
        $this->container['product_color'] = $product_color;

        return $this;
    }

    /**
     * Gets product_slug
     *
     * @return string|null
     */
    public function getProductSlug()
    {
        return $this->container['product_slug'];
    }

    /**
     * Sets product_slug
     *
     * @param string|null $product_slug SEO friendly slug which can be used during URL building.
     *
     * @return self
     */
    public function setProductSlug($product_slug)
    {
        $this->container['product_slug'] = $product_slug;

        return $this;
    }

    /**
     * Gets product_supplier_url
     *
     * @return string|null
     */
    public function getProductSupplierUrl()
    {
        return $this->container['product_supplier_url'];
    }

    /**
     * Sets product_supplier_url
     *
     * @param string|null $product_supplier_url product_supplier_url
     *
     * @return self
     */
    public function setProductSupplierUrl($product_supplier_url)
    {
        $this->container['product_supplier_url'] = $product_supplier_url;

        return $this;
    }

    /**
     * Gets product_supplier_key_public
     *
     * @return string|null
     */
    public function getProductSupplierKeyPublic()
    {
        return $this->container['product_supplier_key_public'];
    }

    /**
     * Sets product_supplier_key_public
     *
     * @param string|null $product_supplier_key_public Supplier public key (Internal use only).
     *
     * @return self
     */
    public function setProductSupplierKeyPublic($product_supplier_key_public)
    {
        $this->container['product_supplier_key_public'] = $product_supplier_key_public;

        return $this;
    }

    /**
     * Gets product_from_price
     *
     * @return string|null
     */
    public function getProductFromPrice()
    {
        return $this->container['product_from_price'];
    }

    /**
     * Sets product_from_price
     *
     * @param string|null $product_from_price Static from price which can be shown on the main product tile. (Usually regular Adult including discount and season independent).
     *
     * @return self
     */
    public function setProductFromPrice($product_from_price)
    {
        $this->container['product_from_price'] = $product_from_price;

        return $this;
    }

    /**
     * Gets product_start_date
     *
     * @return \DateTime
     */
    public function getProductStartDate()
    {
        return $this->container['product_start_date'];
    }

    /**
     * Sets product_start_date
     *
     * @param \DateTime $product_start_date Starting date of product.
     *
     * @return self
     */
    public function setProductStartDate($product_start_date)
    {
        $this->container['product_start_date'] = $product_start_date;

        return $this;
    }

    /**
     * Gets product_end_date
     *
     * @return \DateTime|null
     */
    public function getProductEndDate()
    {
        return $this->container['product_end_date'];
    }

    /**
     * Sets product_end_date
     *
     * @param \DateTime|null $product_end_date End date of the product.
     *
     * @return self
     */
    public function setProductEndDate($product_end_date)
    {
        $this->container['product_end_date'] = $product_end_date;

        return $this;
    }

    /**
     * Gets product_booking_start_date
     *
     * @return \DateTime
     */
    public function getProductBookingStartDate()
    {
        return $this->container['product_booking_start_date'];
    }

    /**
     * Sets product_booking_start_date
     *
     * @param \DateTime $product_booking_start_date The earliest date on which the product is available for sale. This can be earlier than the `product_start_date`.
     *
     * @return self
     */
    public function setProductBookingStartDate($product_booking_start_date)
    {
        $this->container['product_booking_start_date'] = $product_booking_start_date;

        return $this;
    }

    /**
     * Gets product_booking_end_date
     *
     * @return \DateTime|null
     */
    public function getProductBookingEndDate()
    {
        return $this->container['product_booking_end_date'];
    }

    /**
     * Sets product_booking_end_date
     *
     * @param \DateTime|null $product_booking_end_date The date on which the product is no longer available for sale. This can be earlier than the `product_end_date`.
     *
     * @return self
     */
    public function setProductBookingEndDate($product_booking_end_date)
    {
        $this->container['product_booking_end_date'] = $product_booking_end_date;

        return $this;
    }

    /**
     * Gets product_booking_advance_time_min
     *
     * @return int|null
     */
    public function getProductBookingAdvanceTimeMin()
    {
        return $this->container['product_booking_advance_time_min'];
    }

    /**
     * Sets product_booking_advance_time_min
     *
     * @param int|null $product_booking_advance_time_min The minimum amount of minutes you are required to book in advance to the selected travel date (`booking_travel_date`) or availability slot (`availability_from_date_time`).
     *
     * @return self
     */
    public function setProductBookingAdvanceTimeMin($product_booking_advance_time_min)
    {
        $this->container['product_booking_advance_time_min'] = $product_booking_advance_time_min;

        return $this;
    }

    /**
     * Gets product_booking_advance_time_max
     *
     * @return int|null
     */
    public function getProductBookingAdvanceTimeMax()
    {
        return $this->container['product_booking_advance_time_max'];
    }

    /**
     * Sets product_booking_advance_time_max
     *
     * @param int|null $product_booking_advance_time_max The maximum amount of minutes you are allowed to book in advance to the selected travel date (`booking_travel_date`) or availability slot (`availability_from_date_time`).
     *
     * @return self
     */
    public function setProductBookingAdvanceTimeMax($product_booking_advance_time_max)
    {
        $this->container['product_booking_advance_time_max'] = $product_booking_advance_time_max;

        return $this;
    }

    /**
     * Gets product_booking_quantity_min
     *
     * @return int|null
     */
    public function getProductBookingQuantityMin()
    {
        return $this->container['product_booking_quantity_min'];
    }

    /**
     * Sets product_booking_quantity_min
     *
     * @param int|null $product_booking_quantity_min The minimum amount of available seats/spot/places/services required per product booking.
     *
     * @return self
     */
    public function setProductBookingQuantityMin($product_booking_quantity_min)
    {


        $this->container['product_booking_quantity_min'] = $product_booking_quantity_min;

        return $this;
    }

    /**
     * Gets product_booking_quantity_max
     *
     * @return int|null
     */
    public function getProductBookingQuantityMax()
    {
        return $this->container['product_booking_quantity_max'];
    }

    /**
     * Sets product_booking_quantity_max
     *
     * @param int|null $product_booking_quantity_max The maximum amount of available seats/spots/places/services allowed per product booking.
     *
     * @return self
     */
    public function setProductBookingQuantityMax($product_booking_quantity_max)
    {

        if (!is_null($product_booking_quantity_max) && ($product_booking_quantity_max > 100)) {
            throw new \InvalidArgumentException('invalid value for $product_booking_quantity_max when calling ProductModel., must be smaller than or equal to 100.');
        }

        $this->container['product_booking_quantity_max'] = $product_booking_quantity_max;

        return $this;
    }

    /**
     * Gets product_turnout_time
     *
     * @return int|null
     */
    public function getProductTurnoutTime()
    {
        return $this->container['product_turnout_time'];
    }

    /**
     * Sets product_turnout_time
     *
     * @param int|null $product_turnout_time The amount of minutes at which guests should arrive prior to the start time of the reservation.  For example: You need to be at the meeting point 15 minutes in advance.
     *
     * @return self
     */
    public function setProductTurnoutTime($product_turnout_time)
    {
        $this->container['product_turnout_time'] = $product_turnout_time;

        return $this;
    }

    /**
     * Gets product_duration
     *
     * @return int|null
     */
    public function getProductDuration()
    {
        return $this->container['product_duration'];
    }

    /**
     * Sets product_duration
     *
     * @param int|null $product_duration Duration of product / tour/ service in minutes.
     *
     * @return self
     */
    public function setProductDuration($product_duration)
    {
        $this->container['product_duration'] = $product_duration;

        return $this;
    }

    /**
     * Gets product_show_capacity_count
     *
     * @return int|null
     */
    public function getProductShowCapacityCount()
    {
        return $this->container['product_show_capacity_count'];
    }

    /**
     * Sets product_show_capacity_count
     *
     * @param int|null $product_show_capacity_count The value from which the current capacity should be shown to the customer.  Only applicable if `product_capacity:true`.
     *
     * @return self
     */
    public function setProductShowCapacityCount($product_show_capacity_count)
    {
        $this->container['product_show_capacity_count'] = $product_show_capacity_count;

        return $this;
    }

    /**
     * Gets product_third_party
     *
     * @return bool
     */
    public function getProductThirdParty()
    {
        return $this->container['product_third_party'];
    }

    /**
     * Sets product_third_party
     *
     * @param bool $product_third_party Whether the product is from a third party.
     *
     * @return self
     */
    public function setProductThirdParty($product_third_party)
    {
        $this->container['product_third_party'] = $product_third_party;

        return $this;
    }

    /**
     * Gets product_seasonal_pricing
     *
     * @return bool
     */
    public function getProductSeasonalPricing()
    {
        return $this->container['product_seasonal_pricing'];
    }

    /**
     * Sets product_seasonal_pricing
     *
     * @param bool $product_seasonal_pricing Whether pricing can differentiate between specific date ranges (Product types can be returned more than once with different settings).
     *
     * @return self
     */
    public function setProductSeasonalPricing($product_seasonal_pricing)
    {
        $this->container['product_seasonal_pricing'] = $product_seasonal_pricing;

        return $this;
    }

    /**
     * Gets product_quantity_pricing
     *
     * @return bool
     */
    public function getProductQuantityPricing()
    {
        return $this->container['product_quantity_pricing'];
    }

    /**
     * Sets product_quantity_pricing
     *
     * @param bool $product_quantity_pricing Different pricing based on the booking quantity.
     *
     * @return self
     */
    public function setProductQuantityPricing($product_quantity_pricing)
    {
        $this->container['product_quantity_pricing'] = $product_quantity_pricing;

        return $this;
    }

    /**
     * Gets product_daily_pricing
     *
     * @return bool
     */
    public function getProductDailyPricing()
    {
        return $this->container['product_daily_pricing'];
    }

    /**
     * Sets product_daily_pricing
     *
     * @param bool $product_daily_pricing Whether pricing can differentiate between specific days.
     *
     * @return self
     */
    public function setProductDailyPricing($product_daily_pricing)
    {
        $this->container['product_daily_pricing'] = $product_daily_pricing;

        return $this;
    }

    /**
     * Gets product_dynamic_pricing
     *
     * @return bool
     */
    public function getProductDynamicPricing()
    {
        return $this->container['product_dynamic_pricing'];
    }

    /**
     * Sets product_dynamic_pricing
     *
     * @param bool $product_dynamic_pricing Whether pricing can differentiate between specific availability slots (e.g. Peakhours).
     *
     * @return self
     */
    public function setProductDynamicPricing($product_dynamic_pricing)
    {
        $this->container['product_dynamic_pricing'] = $product_dynamic_pricing;

        return $this;
    }

    /**
     * Gets product_relation_details_visible
     *
     * @return bool
     */
    public function getProductRelationDetailsVisible()
    {
        return $this->container['product_relation_details_visible'];
    }

    /**
     * Sets product_relation_details_visible
     *
     * @param bool $product_relation_details_visible Whether you should show the underlying details of the linked sub-products. Only applicable if either `product_cluster:true`, `product_combi:true` or `product_addon:true`.
     *
     * @return self
     */
    public function setProductRelationDetailsVisible($product_relation_details_visible)
    {
        $this->container['product_relation_details_visible'] = $product_relation_details_visible;

        return $this;
    }

    /**
     * Gets product_timepicker_visible
     *
     * @return bool|null
     */
    public function getProductTimepickerVisible()
    {
        return $this->container['product_timepicker_visible'];
    }

    /**
     * Sets product_timepicker_visible
     *
     * @param bool|null $product_timepicker_visible Whether you should show the timepicker during booking.
     *
     * @return self
     */
    public function setProductTimepickerVisible($product_timepicker_visible)
    {
        $this->container['product_timepicker_visible'] = $product_timepicker_visible;

        return $this;
    }

    /**
     * Gets product_sub_only
     *
     * @return bool|null
     */
    public function getProductSubOnly()
    {
        return $this->container['product_sub_only'];
    }

    /**
     * Sets product_sub_only
     *
     * @param bool|null $product_sub_only In case `product_sub_only:true` then the product is not available for individual sales. Instead it should be listed as part of a main cluster/combi/addon product only.
     *
     * @return self
     */
    public function setProductSubOnly($product_sub_only)
    {
        $this->container['product_sub_only'] = $product_sub_only;

        return $this;
    }

    /**
     * Gets product_cluster
     *
     * @return bool
     */
    public function getProductCluster()
    {
        return $this->container['product_cluster'];
    }

    /**
     * Sets product_cluster
     *
     * @param bool $product_cluster Product is a cluster-product. In case this value is indicated as `true`, this product is the main cluster product and is not bookable. One of the sub-products linked to this cluster should be booked instead. These products are listed inside `product_cluster_details`.
     *
     * @return self
     */
    public function setProductCluster($product_cluster)
    {
        $this->container['product_cluster'] = $product_cluster;

        return $this;
    }

    /**
     * Gets product_combi
     *
     * @return bool
     */
    public function getProductCombi()
    {
        return $this->container['product_combi'];
    }

    /**
     * Sets product_combi
     *
     * @param bool $product_combi Product is a combi-product. In case this value is indicated as `true`, this product is the main combi product and is not bookable on its own. All of the sub-products linked to this combi should be booked as well. These products are listed inside `product_combi_details`.
     *
     * @return self
     */
    public function setProductCombi($product_combi)
    {
        $this->container['product_combi'] = $product_combi;

        return $this;
    }

    /**
     * Gets product_addon
     *
     * @return bool
     */
    public function getProductAddon()
    {
        return $this->container['product_addon'];
    }

    /**
     * Sets product_addon
     *
     * @param bool $product_addon Product has one or more addon-products. In case this value is indicated as `true`, this product has one or more optional addons. All of the optional addons are listed inside `product_addon_details`.
     *
     * @return self
     */
    public function setProductAddon($product_addon)
    {
        $this->container['product_addon'] = $product_addon;

        return $this;
    }

    /**
     * Gets product_availability
     *
     * @return bool
     */
    public function getProductAvailability()
    {
        return $this->container['product_availability'];
    }

    /**
     * Sets product_availability
     *
     * @param bool $product_availability Whether it is required to select an availability slot to make a booking request.   In case (`product_cluster:true` or `product_combi:true`) and `product_availability:true` then the product has shared capacity (`product_capacity_type:SHARED`) across the sub-products.   If `product_availability:false` then this main cluster/combi product does not have shared capacity across the sub-products and therefore those should be checked individually.   Check `product_admission_type` for more details.
     *
     * @return self
     */
    public function setProductAvailability($product_availability)
    {
        $this->container['product_availability'] = $product_availability;

        return $this;
    }

    /**
     * Gets product_availability_assigned
     *
     * @return bool
     */
    public function getProductAvailabilityAssigned()
    {
        return $this->container['product_availability_assigned'];
    }

    /**
     * Sets product_availability_assigned
     *
     * @param bool $product_availability_assigned Whether availability slots are assigned to a specific `spot`. In case `product_availability_assigned:true` assigned 'spots' will be returned once a booking is confirmed (using a best available seat algorithm).  Optionally, if seatmaps are being supported, you are able to send your own selected seats.
     *
     * @return self
     */
    public function setProductAvailabilityAssigned($product_availability_assigned)
    {
        $this->container['product_availability_assigned'] = $product_availability_assigned;

        return $this;
    }

    /**
     * Gets product_capacity
     *
     * @return bool
     */
    public function getProductCapacity()
    {
        return $this->container['product_capacity'];
    }

    /**
     * Sets product_capacity
     *
     * @param bool $product_capacity Whether this product has managed (limited) capacity.   Check `product_capacity_type` for more details.
     *
     * @return self
     */
    public function setProductCapacity($product_capacity)
    {
        $this->container['product_capacity'] = $product_capacity;

        return $this;
    }

    /**
     * Gets product_traveldate_required
     *
     * @return bool
     */
    public function getProductTraveldateRequired()
    {
        return $this->container['product_traveldate_required'];
    }

    /**
     * Sets product_traveldate_required
     *
     * @param bool $product_traveldate_required Whether a traveldate is required upon booking.  Redundant if availability is selected.
     *
     * @return self
     */
    public function setProductTraveldateRequired($product_traveldate_required)
    {
        $this->container['product_traveldate_required'] = $product_traveldate_required;

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
     * @param bool $product_cancellation_allowed Whether it is allowed to cancel this product.   Note that even if a product can be cancelled, cancellation fees might still apply. Please check `product_cancellation_policies` for more details.
     *
     * @return self
     */
    public function setProductCancellationAllowed($product_cancellation_allowed)
    {
        $this->container['product_cancellation_allowed'] = $product_cancellation_allowed;

        return $this;
    }

    /**
     * Gets product_overbooking_allowed
     *
     * @return bool
     */
    public function getProductOverbookingAllowed()
    {
        return $this->container['product_overbooking_allowed'];
    }

    /**
     * Sets product_overbooking_allowed
     *
     * @param bool $product_overbooking_allowed Whether it is allowed to overbook. Not appplicable to third party products.
     *
     * @return self
     */
    public function setProductOverbookingAllowed($product_overbooking_allowed)
    {
        $this->container['product_overbooking_allowed'] = $product_overbooking_allowed;

        return $this;
    }

    /**
     * Gets product_past_date_booking_allowed
     *
     * @return bool
     */
    public function getProductPastDateBookingAllowed()
    {
        return $this->container['product_past_date_booking_allowed'];
    }

    /**
     * Sets product_past_date_booking_allowed
     *
     * @param bool $product_past_date_booking_allowed Whether it is allowed to select a date in the past.
     *
     * @return self
     */
    public function setProductPastDateBookingAllowed($product_past_date_booking_allowed)
    {
        $this->container['product_past_date_booking_allowed'] = $product_past_date_booking_allowed;

        return $this;
    }

    /**
     * Gets product_capacity_id
     *
     * @return string|null
     */
    public function getProductCapacityId()
    {
        return $this->container['product_capacity_id'];
    }

    /**
     * Sets product_capacity_id
     *
     * @param string|null $product_capacity_id Product capacity identifier.
     *
     * @return self
     */
    public function setProductCapacityId($product_capacity_id)
    {
        $this->container['product_capacity_id'] = $product_capacity_id;

        return $this;
    }

    /**
     * Gets product_capacity_shared_id
     *
     * @return string|null
     */
    public function getProductCapacitySharedId()
    {
        return $this->container['product_capacity_shared_id'];
    }

    /**
     * Sets product_capacity_shared_id
     *
     * @param string|null $product_capacity_shared_id Shared availability / Capacity identifier.   Only applicable if `capacity_type:SHARED / COMBINED`.
     *
     * @return self
     */
    public function setProductCapacitySharedId($product_capacity_shared_id)
    {
        $this->container['product_capacity_shared_id'] = $product_capacity_shared_id;

        return $this;
    }

    /**
     * Gets product_capacity_type
     *
     * @return \PrioTicket\DistributorAPI\Models\CapacityType
     */
    public function getProductCapacityType()
    {
        return $this->container['product_capacity_type'];
    }

    /**
     * Sets product_capacity_type
     *
     * @param \PrioTicket\DistributorAPI\Models\CapacityType $product_capacity_type product_capacity_type
     *
     * @return self
     */
    public function setProductCapacityType($product_capacity_type)
    {
        $this->container['product_capacity_type'] = $product_capacity_type;

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
     * Gets product_status
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductStatus|null
     */
    public function getProductStatus()
    {
        return $this->container['product_status'];
    }

    /**
     * Sets product_status
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductStatus|null $product_status product_status
     *
     * @return self
     */
    public function setProductStatus($product_status)
    {
        $this->container['product_status'] = $product_status;

        return $this;
    }

    /**
     * Gets product_catalogue_status
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductCatalogueStatus|null
     */
    public function getProductCatalogueStatus()
    {
        return $this->container['product_catalogue_status'];
    }

    /**
     * Sets product_catalogue_status
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductCatalogueStatus|null $product_catalogue_status product_catalogue_status
     *
     * @return self
     */
    public function setProductCatalogueStatus($product_catalogue_status)
    {
        $this->container['product_catalogue_status'] = $product_catalogue_status;

        return $this;
    }

    /**
     * Gets product_service_type
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductServiceType
     */
    public function getProductServiceType()
    {
        return $this->container['product_service_type'];
    }

    /**
     * Sets product_service_type
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductServiceType $product_service_type product_service_type
     *
     * @return self
     */
    public function setProductServiceType($product_service_type)
    {
        $this->container['product_service_type'] = $product_service_type;

        return $this;
    }

    /**
     * Gets product_pickup_point
     *
     * @return string
     */
    public function getProductPickupPoint()
    {
        return $this->container['product_pickup_point'];
    }

    /**
     * Sets product_pickup_point
     *
     * @param string $product_pickup_point Whether its required to set a pickup point for this product. Details on the available locations are inside `product_locations`.
     *
     * @return self
     */
    public function setProductPickupPoint($product_pickup_point)
    {
        $allowedValues = $this->getProductPickupPointAllowableValues();
        if (!in_array($product_pickup_point, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'product_pickup_point', must be one of '%s'",
                    $product_pickup_point,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product_pickup_point'] = $product_pickup_point;

        return $this;
    }

    /**
     * Gets product_pickup_point_details
     *
     * @return \PrioTicket\DistributorAPI\Models\PickupPoint[]|null
     */
    public function getProductPickupPointDetails()
    {
        return $this->container['product_pickup_point_details'];
    }

    /**
     * Sets product_pickup_point_details
     *
     * @param \PrioTicket\DistributorAPI\Models\PickupPoint[]|null $product_pickup_point_details If `product_pickup_point:MANDATORY/OPTIONAL`, then `pickup_point_details` are required.
     *
     * @return self
     */
    public function setProductPickupPointDetails($product_pickup_point_details)
    {
        $this->container['product_pickup_point_details'] = $product_pickup_point_details;

        return $this;
    }

    /**
     * Gets product_content
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductContent
     */
    public function getProductContent()
    {
        return $this->container['product_content'];
    }

    /**
     * Sets product_content
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductContent $product_content product_content
     *
     * @return self
     */
    public function setProductContent($product_content)
    {
        $this->container['product_content'] = $product_content;

        return $this;
    }

    /**
     * Gets product_redemption_rules
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductRedemptionRules
     */
    public function getProductRedemptionRules()
    {
        return $this->container['product_redemption_rules'];
    }

    /**
     * Sets product_redemption_rules
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductRedemptionRules $product_redemption_rules product_redemption_rules
     *
     * @return self
     */
    public function setProductRedemptionRules($product_redemption_rules)
    {
        $this->container['product_redemption_rules'] = $product_redemption_rules;

        return $this;
    }

    /**
     * Gets product_code_settings
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductCodeSettings
     */
    public function getProductCodeSettings()
    {
        return $this->container['product_code_settings'];
    }

    /**
     * Sets product_code_settings
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductCodeSettings $product_code_settings product_code_settings
     *
     * @return self
     */
    public function setProductCodeSettings($product_code_settings)
    {
        $this->container['product_code_settings'] = $product_code_settings;

        return $this;
    }

    /**
     * Gets product_payment_detail
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductPaymentDetails|null
     */
    public function getProductPaymentDetail()
    {
        return $this->container['product_payment_detail'];
    }

    /**
     * Sets product_payment_detail
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductPaymentDetails|null $product_payment_detail product_payment_detail
     *
     * @return self
     */
    public function setProductPaymentDetail($product_payment_detail)
    {
        $this->container['product_payment_detail'] = $product_payment_detail;

        return $this;
    }

    /**
     * Gets product_type_seasons
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductTypeSeason[]
     */
    public function getProductTypeSeasons()
    {
        return $this->container['product_type_seasons'];
    }

    /**
     * Sets product_type_seasons
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductTypeSeason[] $product_type_seasons Product types per season.
     *
     * @return self
     */
    public function setProductTypeSeasons($product_type_seasons)
    {
        $this->container['product_type_seasons'] = $product_type_seasons;

        return $this;
    }

    /**
     * Gets product_options
     *
     * @return \PrioTicket\DistributorAPI\Models\ExtraOptions[]|null
     */
    public function getProductOptions()
    {
        return $this->container['product_options'];
    }

    /**
     * Sets product_options
     *
     * @param \PrioTicket\DistributorAPI\Models\ExtraOptions[]|null $product_options General product options.
     *
     * @return self
     */
    public function setProductOptions($product_options)
    {
        $this->container['product_options'] = $product_options;

        return $this;
    }

    /**
     * Gets product_cancellation_policies
     *
     * @return \PrioTicket\DistributorAPI\Models\CancellationPolicy[]|null
     */
    public function getProductCancellationPolicies()
    {
        return $this->container['product_cancellation_policies'];
    }

    /**
     * Sets product_cancellation_policies
     *
     * @param \PrioTicket\DistributorAPI\Models\CancellationPolicy[]|null $product_cancellation_policies Sometimes a product has a cancellation fee. In that case the order amount might not be refunded in full. If no cancellation policies are set and `product_cancellation_allowed:true` then you can always cancel products until they are redeemed.
     *
     * @return self
     */
    public function setProductCancellationPolicies($product_cancellation_policies)
    {
        $this->container['product_cancellation_policies'] = $product_cancellation_policies;

        return $this;
    }

    /**
     * Gets product_opening_times
     *
     * @return \PrioTicket\DistributorAPI\Models\OpeningTimes[]|null
     */
    public function getProductOpeningTimes()
    {
        return $this->container['product_opening_times'];
    }

    /**
     * Sets product_opening_times
     *
     * @param \PrioTicket\DistributorAPI\Models\OpeningTimes[]|null $product_opening_times Opening times of the product / venue.
     *
     * @return self
     */
    public function setProductOpeningTimes($product_opening_times)
    {
        $this->container['product_opening_times'] = $product_opening_times;

        return $this;
    }

    /**
     * Gets product_currencies
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductCurrency[]|null
     */
    public function getProductCurrencies()
    {
        return $this->container['product_currencies'];
    }

    /**
     * Sets product_currencies
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductCurrency[]|null $product_currencies If this product is available in multiple supplier base currencies, all related products are listed here.
     *
     * @return self
     */
    public function setProductCurrencies($product_currencies)
    {
        $this->container['product_currencies'] = $product_currencies;

        return $this;
    }

    /**
     * Gets product_noshow_policy
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductNoShowPolicy|null
     */
    public function getProductNoshowPolicy()
    {
        return $this->container['product_noshow_policy'];
    }

    /**
     * Sets product_noshow_policy
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductNoShowPolicy|null $product_noshow_policy product_noshow_policy
     *
     * @return self
     */
    public function setProductNoshowPolicy($product_noshow_policy)
    {
        $this->container['product_noshow_policy'] = $product_noshow_policy;

        return $this;
    }

    /**
     * Gets product_flags
     *
     * @return \PrioTicket\DistributorAPI\Models\Flag[]|null
     */
    public function getProductFlags()
    {
        return $this->container['product_flags'];
    }

    /**
     * Sets product_flags
     *
     * @param \PrioTicket\DistributorAPI\Models\Flag[]|null $product_flags Product flags.
     *
     * @return self
     */
    public function setProductFlags($product_flags)
    {
        $this->container['product_flags'] = $product_flags;

        return $this;
    }

    /**
     * Gets product_block_out_dates
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductBlockoutDate[]|null
     */
    public function getProductBlockOutDates()
    {
        return $this->container['product_block_out_dates'];
    }

    /**
     * Sets product_block_out_dates
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductBlockoutDate[]|null $product_block_out_dates Dates when the product is not available, these dates will not show as available dates.
     *
     * @return self
     */
    public function setProductBlockOutDates($product_block_out_dates)
    {
        $this->container['product_block_out_dates'] = $product_block_out_dates;

        return $this;
    }

    /**
     * Gets product_special_dates
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductSpecialDate[]|null
     */
    public function getProductSpecialDates()
    {
        return $this->container['product_special_dates'];
    }

    /**
     * Sets product_special_dates
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductSpecialDate[]|null $product_special_dates Dates for a special event, depending on the products extra information might be available.
     *
     * @return self
     */
    public function setProductSpecialDates($product_special_dates)
    {
        $this->container['product_special_dates'] = $product_special_dates;

        return $this;
    }

    /**
     * Gets product_locations
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductLocation[]|null
     */
    public function getProductLocations()
    {
        return $this->container['product_locations'];
    }

    /**
     * Sets product_locations
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductLocation[]|null $product_locations Venues / Locations of interested for this product.
     *
     * @return self
     */
    public function setProductLocations($product_locations)
    {
        $this->container['product_locations'] = $product_locations;

        return $this;
    }

    /**
     * Gets product_cluster_details
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductRelationDetails[]|null
     */
    public function getProductClusterDetails()
    {
        return $this->container['product_cluster_details'];
    }

    /**
     * Sets product_cluster_details
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductRelationDetails[]|null $product_cluster_details In case `product_cluster:true` the following array will be populated. This array contains all linked cluster-products to this main cluster-product. One of these should be booked instead of the main-product. Depending on the configuration, details and availability might be shared across these products.
     *
     * @return self
     */
    public function setProductClusterDetails($product_cluster_details)
    {
        $this->container['product_cluster_details'] = $product_cluster_details;

        return $this;
    }

    /**
     * Gets product_combi_details
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductRelationDetails[]|null
     */
    public function getProductCombiDetails()
    {
        return $this->container['product_combi_details'];
    }

    /**
     * Sets product_combi_details
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductRelationDetails[]|null $product_combi_details The List Products API lists all available product configurations enabled for the distributor. If you have a combination (combi-product) of (Product A + Product B) a third product (Product C) will be created.   The API will return the following: ``` Array [    Product A Details {     `product_id`:'PRODUCT_ID_A'     `product_combi:false`,     `product_combi_details`:[])    }        Product B Details {     `product_id`:'PRODUCT_ID_B',     `product_combi:false`,     `product_combi_details`:[])    }        Product C Details {       `product_id`:'PRODUCT_ID_C'      `product_combi:true`,       `product_combi_details`:['PRODUCT_ID_A', 'PRODUCT_ID_B')    } ] ``` Every product has a unique ID and acts as a separate entity. Therefore there is no need to handle this logic on your side and you could handle them as separate products.  In case `product_combi:true` the following array will be populated. This array contains all linked combi-products to this main combi-product. Depending on the configuration, details and availability might be shared across these products. * To make a combination booking ALL combi sub-products MUST be set in the booking request as well as the main combi-product itself. Failing to do so will cause an invalid response. * All sub-products must be set in the `product_combi_details` object of the main combi-product booking object, else the products will be set as individual bookings. (Some sub-products can be booked as separate products as well) * All sub-products will inherited the `product_type_details` configuration of the main combi-product and therefore should not be set.
     *
     * @return self
     */
    public function setProductCombiDetails($product_combi_details)
    {
        $this->container['product_combi_details'] = $product_combi_details;

        return $this;
    }

    /**
     * Gets product_addon_details
     *
     * @return \PrioTicket\DistributorAPI\Models\ProductRelationDetails[]|null
     */
    public function getProductAddonDetails()
    {
        return $this->container['product_addon_details'];
    }

    /**
     * Sets product_addon_details
     *
     * @param \PrioTicket\DistributorAPI\Models\ProductRelationDetails[]|null $product_addon_details In case `product_addon:true` the following array will be populated. This array contains all linked addon-products to this main product. One or more of these could be booked in addition to the main product.
     *
     * @return self
     */
    public function setProductAddonDetails($product_addon_details)
    {
        $this->container['product_addon_details'] = $product_addon_details;

        return $this;
    }

    /**
     * Gets product_categories
     *
     * @return string[]|null
     */
    public function getProductCategories()
    {
        return $this->container['product_categories'];
    }

    /**
     * Sets product_categories
     *
     * @param string[]|null $product_categories The categories the product belongs to.
     *
     * @return self
     */
    public function setProductCategories($product_categories)
    {
        $this->container['product_categories'] = $product_categories;

        return $this;
    }

    /**
     * Gets product_destinations
     *
     * @return string[]|null
     */
    public function getProductDestinations()
    {
        return $this->container['product_destinations'];
    }

    /**
     * Sets product_destinations
     *
     * @param string[]|null $product_destinations The destinations the product belongs to.
     *
     * @return self
     */
    public function setProductDestinations($product_destinations)
    {
        $this->container['product_destinations'] = $product_destinations;

        return $this;
    }

    /**
     * Gets product_languages
     *
     * @return string[]|null
     */
    public function getProductLanguages()
    {
        return $this->container['product_languages'];
    }

    /**
     * Sets product_languages
     *
     * @param string[]|null $product_languages Language codes for the available languages of the product, e.g. Shows are available in English and Spanish.   Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.
     *
     * @return self
     */
    public function setProductLanguages($product_languages)
    {
        $this->container['product_languages'] = $product_languages;

        return $this;
    }

    /**
     * Gets product_content_languages
     *
     * @return string[]
     */
    public function getProductContentLanguages()
    {
        return $this->container['product_content_languages'];
    }

    /**
     * Sets product_content_languages
     *
     * @param string[] $product_content_languages Language Codes of the languages for which the product data is available.   Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. This field can be used to show multilingual content on your website.
     *
     * @return self
     */
    public function setProductContentLanguages($product_content_languages)
    {
        $this->container['product_content_languages'] = $product_content_languages;

        return $this;
    }

    /**
     * Gets product_guide_languages
     *
     * @return \PrioTicket\DistributorAPI\Models\GuideLanguage[]|null
     */
    public function getProductGuideLanguages()
    {
        return $this->container['product_guide_languages'];
    }

    /**
     * Sets product_guide_languages
     *
     * @param \PrioTicket\DistributorAPI\Models\GuideLanguage[]|null $product_guide_languages Language codes of the available guides.  Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format.
     *
     * @return self
     */
    public function setProductGuideLanguages($product_guide_languages)
    {
        $this->container['product_guide_languages'] = $product_guide_languages;

        return $this;
    }

    /**
     * Gets product_routes
     *
     * @return string[]|null
     */
    public function getProductRoutes()
    {
        return $this->container['product_routes'];
    }

    /**
     * Sets product_routes
     *
     * @param string[]|null $product_routes Array of routes linked to this product.
     *
     * @return self
     */
    public function setProductRoutes($product_routes)
    {
        $this->container['product_routes'] = $product_routes;

        return $this;
    }

    /**
     * Gets product_notes
     *
     * @return \PrioTicket\DistributorAPI\Models\Note[]|null
     */
    public function getProductNotes()
    {
        return $this->container['product_notes'];
    }

    /**
     * Sets product_notes
     *
     * @param \PrioTicket\DistributorAPI\Models\Note[]|null $product_notes Optional notes on this product.
     *
     * @return self
     */
    public function setProductNotes($product_notes)
    {
        $this->container['product_notes'] = $product_notes;

        return $this;
    }

    /**
     * Gets product_google_categories
     *
     * @return string|null
     */
    public function getProductGoogleCategories()
    {
        return $this->container['product_google_categories'];
    }

    /**
     * Sets product_google_categories
     *
     * @param string|null $product_google_categories Comma-separated list of attached Google categories (https://developers.google.com/travel/things-to-do/reference/feed-spec/product-category).
     *
     * @return self
     */
    public function setProductGoogleCategories($product_google_categories)
    {
        $this->container['product_google_categories'] = $product_google_categories;

        return $this;
    }

    /**
     * Gets product_custom_fields
     *
     * @return \PrioTicket\DistributorAPI\Models\CustomField[]|null
     */
    public function getProductCustomFields()
    {
        return $this->container['product_custom_fields'];
    }

    /**
     * Sets product_custom_fields
     *
     * @param \PrioTicket\DistributorAPI\Models\CustomField[]|null $product_custom_fields Freeform entry of any key-value pair.
     *
     * @return self
     */
    public function setProductCustomFields($product_custom_fields)
    {
        $this->container['product_custom_fields'] = $product_custom_fields;

        return $this;
    }

    /**
     * Gets product_created
     *
     * @return \DateTime
     */
    public function getProductCreated()
    {
        return $this->container['product_created'];
    }

    /**
     * Sets product_created
     *
     * @param \DateTime $product_created The date on which the product has been created.
     *
     * @return self
     */
    public function setProductCreated($product_created)
    {
        $this->container['product_created'] = $product_created;

        return $this;
    }

    /**
     * Gets product_created_name
     *
     * @return string
     */
    public function getProductCreatedName()
    {
        return $this->container['product_created_name'];
    }

    /**
     * Sets product_created_name
     *
     * @param string $product_created_name Cashier name / User name who created the product.
     *
     * @return self
     */
    public function setProductCreatedName($product_created_name)
    {
        $this->container['product_created_name'] = $product_created_name;

        return $this;
    }

    /**
     * Gets product_created_email
     *
     * @return string
     */
    public function getProductCreatedEmail()
    {
        return $this->container['product_created_email'];
    }

    /**
     * Sets product_created_email
     *
     * @param string $product_created_email Cashier email / User email who created the product.
     *
     * @return self
     */
    public function setProductCreatedEmail($product_created_email)
    {
        $this->container['product_created_email'] = $product_created_email;

        return $this;
    }

    /**
     * Gets product_modified
     *
     * @return \DateTime
     */
    public function getProductModified()
    {
        return $this->container['product_modified'];
    }

    /**
     * Sets product_modified
     *
     * @param \DateTime $product_modified The date on which the product has been last modified.
     *
     * @return self
     */
    public function setProductModified($product_modified)
    {
        $this->container['product_modified'] = $product_modified;

        return $this;
    }

    /**
     * Gets product_modified_name
     *
     * @return string
     */
    public function getProductModifiedName()
    {
        return $this->container['product_modified_name'];
    }

    /**
     * Sets product_modified_name
     *
     * @param string $product_modified_name Cashier name / User name who last modified the product.
     *
     * @return self
     */
    public function setProductModifiedName($product_modified_name)
    {
        $this->container['product_modified_name'] = $product_modified_name;

        return $this;
    }

    /**
     * Gets product_modified_email
     *
     * @return string
     */
    public function getProductModifiedEmail()
    {
        return $this->container['product_modified_email'];
    }

    /**
     * Sets product_modified_email
     *
     * @param string $product_modified_email Cashier email / User email who last modified the product.
     *
     * @return self
     */
    public function setProductModifiedEmail($product_modified_email)
    {
        $this->container['product_modified_email'] = $product_modified_email;

        return $this;
    }

    /**
     * Gets product_view_type
     *
     * @return \PrioTicket\DistributorAPI\Models\AccountType
     */
    public function getProductViewType()
    {
        return $this->container['product_view_type'];
    }

    /**
     * Sets product_view_type
     *
     * @param \PrioTicket\DistributorAPI\Models\AccountType $product_view_type product_view_type
     *
     * @return self
     */
    public function setProductViewType($product_view_type)
    {
        $this->container['product_view_type'] = $product_view_type;

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


