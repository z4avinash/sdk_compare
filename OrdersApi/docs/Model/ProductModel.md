# # ProductModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_id** | **string** | Unique identifier for the product assigned by Prio. | [readonly]
**product_external_id** | **string** | Unique identifier for the product assigned by the third party. | [optional]
**product_internal_reference** | **string** | Internal Reference / SKU for the product. | [optional]
**product_platform_id** | **string** | Unique identifier of the platform. | [optional] [readonly]
**product_platform_name** | **string** | Name of the platform. | [optional] [readonly]
**product_distributor_id** | **string** | Unique identifier for the distributor. | [optional] [readonly]
**product_distributor_name** | **string** | Name of the distributor. | [optional] [readonly]
**product_reseller_id** | **string** | Unique identifier of the reseller. | [optional] [readonly]
**product_reseller_name** | **string** | Name of the reseller. | [optional] [readonly]
**product_market_admin_id** | **string** | Unique identifier for the market admin. | [readonly]
**product_market_admin_name** | **string** | Name of the market admin. | [readonly]
**product_supplier_admin_id** | **string** | Unique identifier for the supplier admin. | [optional] [readonly]
**product_supplier_admin_name** | **string** | Name of the supplier admin. | [optional] [readonly]
**product_supplier_id** | **string** | Unique identifier for supplier. | [readonly]
**product_source_id** | **string** | Unique ID of the product source. |
**product_source_name** | **string** | Source of the product.   Either PrioTicket or the name of the other reservation system e.g. CSS. |
**product_contract_source_id** | **string** | Contract source id. | [optional]
**product_contract_source_name** | **string** | Contract source of the product.   Either PrioTicket or the name of the contracting party. | [optional]
**product_default_language** | **string** | Default Supplier Language.   Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. | [default to 'en']
**product_version** | **int** | Product version. | [optional]
**product_color** | **string** | Color of the product. (HEX) | [optional]
**product_slug** | **string** | SEO friendly slug which can be used during URL building. | [optional]
**product_supplier_url** | **string** |  | [optional] [readonly]
**product_supplier_key_public** | **string** | Supplier public key (Internal use only). | [optional]
**product_from_price** | **string** | Static from price which can be shown on the main product tile. (Usually regular Adult including discount and season independent). | [optional]
**product_start_date** | [**\DateTime**](\DateTime.md) | Starting date of product. |
**product_end_date** | [**\DateTime**](\DateTime.md) | End date of the product. | [optional]
**product_booking_start_date** | [**\DateTime**](\DateTime.md) | The earliest date on which the product is available for sale. This can be earlier than the &#x60;product_start_date&#x60;. |
**product_booking_end_date** | [**\DateTime**](\DateTime.md) | The date on which the product is no longer available for sale. This can be earlier than the &#x60;product_end_date&#x60;. | [optional]
**product_booking_advance_time_min** | **int** | The minimum amount of minutes you are required to book in advance to the selected travel date (&#x60;booking_travel_date&#x60;) or availability slot (&#x60;availability_from_date_time&#x60;). | [optional]
**product_booking_advance_time_max** | **int** | The maximum amount of minutes you are allowed to book in advance to the selected travel date (&#x60;booking_travel_date&#x60;) or availability slot (&#x60;availability_from_date_time&#x60;). | [optional]
**product_booking_quantity_min** | **int** | The minimum amount of available seats/spot/places/services required per product booking. | [optional]
**product_booking_quantity_max** | **int** | The maximum amount of available seats/spots/places/services allowed per product booking. | [optional]
**product_turnout_time** | **int** | The amount of minutes at which guests should arrive prior to the start time of the reservation.  For example: You need to be at the meeting point 15 minutes in advance. | [optional]
**product_duration** | **int** | Duration of product / tour/ service in minutes. | [optional]
**product_show_capacity_count** | **int** | The value from which the current capacity should be shown to the customer.  Only applicable if &#x60;product_capacity:true&#x60;. | [optional]
**product_third_party** | **bool** | Whether the product is from a third party. | [default to false]
**product_seasonal_pricing** | **bool** | Whether pricing can differentiate between specific date ranges (Product types can be returned more than once with different settings). | [readonly] [default to false]
**product_quantity_pricing** | **bool** | Different pricing based on the booking quantity. | [readonly] [default to false]
**product_daily_pricing** | **bool** | Whether pricing can differentiate between specific days. | [readonly] [default to false]
**product_dynamic_pricing** | **bool** | Whether pricing can differentiate between specific availability slots (e.g. Peakhours). | [readonly] [default to false]
**product_relation_details_visible** | **bool** | Whether you should show the underlying details of the linked sub-products. Only applicable if either &#x60;product_cluster:true&#x60;, &#x60;product_combi:true&#x60; or &#x60;product_addon:true&#x60;. | [default to false]
**product_timepicker_visible** | **bool** | Whether you should show the timepicker during booking. | [optional] [default to true]
**product_sub_only** | **bool** | In case &#x60;product_sub_only:true&#x60; then the product is not available for individual sales. Instead it should be listed as part of a main cluster/combi/addon product only. | [optional] [default to false]
**product_cluster** | **bool** | Product is a cluster-product. In case this value is indicated as &#x60;true&#x60;, this product is the main cluster product and is not bookable. One of the sub-products linked to this cluster should be booked instead. These products are listed inside &#x60;product_cluster_details&#x60;. | [readonly] [default to false]
**product_combi** | **bool** | Product is a combi-product. In case this value is indicated as &#x60;true&#x60;, this product is the main combi product and is not bookable on its own. All of the sub-products linked to this combi should be booked as well. These products are listed inside &#x60;product_combi_details&#x60;. | [readonly] [default to false]
**product_addon** | **bool** | Product has one or more addon-products. In case this value is indicated as &#x60;true&#x60;, this product has one or more optional addons. All of the optional addons are listed inside &#x60;product_addon_details&#x60;. | [readonly] [default to false]
**product_availability** | **bool** | Whether it is required to select an availability slot to make a booking request.   In case (&#x60;product_cluster:true&#x60; or &#x60;product_combi:true&#x60;) and &#x60;product_availability:true&#x60; then the product has shared capacity (&#x60;product_capacity_type:SHARED&#x60;) across the sub-products.   If &#x60;product_availability:false&#x60; then this main cluster/combi product does not have shared capacity across the sub-products and therefore those should be checked individually.   Check &#x60;product_admission_type&#x60; for more details. | [default to true]
**product_availability_assigned** | **bool** | Whether availability slots are assigned to a specific &#x60;spot&#x60;. In case &#x60;product_availability_assigned:true&#x60; assigned &#39;spots&#39; will be returned once a booking is confirmed (using a best available seat algorithm).  Optionally, if seatmaps are being supported, you are able to send your own selected seats. | [default to false]
**product_capacity** | **bool** | Whether this product has managed (limited) capacity.   Check &#x60;product_capacity_type&#x60; for more details. | [default to true]
**product_traveldate_required** | **bool** | Whether a traveldate is required upon booking.  Redundant if availability is selected. | [default to false]
**product_cancellation_allowed** | **bool** | Whether it is allowed to cancel this product.   Note that even if a product can be cancelled, cancellation fees might still apply. Please check &#x60;product_cancellation_policies&#x60; for more details. | [readonly] [default to true]
**product_overbooking_allowed** | **bool** | Whether it is allowed to overbook. Not appplicable to third party products. | [readonly] [default to false]
**product_past_date_booking_allowed** | **bool** | Whether it is allowed to select a date in the past. | [readonly] [default to false]
**product_capacity_id** | **string** | Product capacity identifier. | [optional] [readonly]
**product_capacity_shared_id** | **string** | Shared availability / Capacity identifier.   Only applicable if &#x60;capacity_type:SHARED / COMBINED&#x60;. | [optional] [readonly]
**product_capacity_type** | [**\PrioTicket\DistributorAPI\Models\CapacityType**](CapacityType.md) |  |
**product_admission_type** | [**\PrioTicket\DistributorAPI\Models\ProductAdmissionType**](ProductAdmissionType.md) |  |
**product_status** | [**\PrioTicket\DistributorAPI\Models\ProductStatus**](ProductStatus.md) |  | [optional]
**product_catalogue_status** | [**\PrioTicket\DistributorAPI\Models\ProductCatalogueStatus**](ProductCatalogueStatus.md) |  | [optional]
**product_service_type** | [**\PrioTicket\DistributorAPI\Models\ProductServiceType**](ProductServiceType.md) |  |
**product_pickup_point** | **string** | Whether its required to set a pickup point for this product. Details on the available locations are inside &#x60;product_locations&#x60;. |
**product_pickup_point_details** | [**\PrioTicket\DistributorAPI\Models\PickupPoint[]**](PickupPoint.md) | If &#x60;product_pickup_point:MANDATORY/OPTIONAL&#x60;, then &#x60;pickup_point_details&#x60; are required. | [optional]
**product_content** | [**\PrioTicket\DistributorAPI\Models\ProductContent**](ProductContent.md) |  |
**product_redemption_rules** | [**\PrioTicket\DistributorAPI\Models\ProductRedemptionRules**](ProductRedemptionRules.md) |  |
**product_code_settings** | [**\PrioTicket\DistributorAPI\Models\ProductCodeSettings**](ProductCodeSettings.md) |  |
**product_payment_detail** | [**\PrioTicket\DistributorAPI\Models\ProductPaymentDetails**](ProductPaymentDetails.md) |  | [optional]
**product_type_seasons** | [**\PrioTicket\DistributorAPI\Models\ProductTypeSeason[]**](ProductTypeSeason.md) | Product types per season. |
**product_options** | [**\PrioTicket\DistributorAPI\Models\ExtraOptions[]**](ExtraOptions.md) | General product options. | [optional]
**product_cancellation_policies** | [**\PrioTicket\DistributorAPI\Models\CancellationPolicy[]**](CancellationPolicy.md) | Sometimes a product has a cancellation fee. In that case the order amount might not be refunded in full. If no cancellation policies are set and &#x60;product_cancellation_allowed:true&#x60; then you can always cancel products until they are redeemed. | [optional] [readonly]
**product_opening_times** | [**\PrioTicket\DistributorAPI\Models\OpeningTimes[]**](OpeningTimes.md) | Opening times of the product / venue. | [optional]
**product_currencies** | [**\PrioTicket\DistributorAPI\Models\ProductCurrency[]**](ProductCurrency.md) | If this product is available in multiple supplier base currencies, all related products are listed here. | [optional]
**product_noshow_policy** | [**\PrioTicket\DistributorAPI\Models\ProductNoShowPolicy**](ProductNoShowPolicy.md) |  | [optional]
**product_flags** | [**\PrioTicket\DistributorAPI\Models\Flag[]**](Flag.md) | Product flags. | [optional]
**product_block_out_dates** | [**\PrioTicket\DistributorAPI\Models\ProductBlockoutDate[]**](ProductBlockoutDate.md) | Dates when the product is not available, these dates will not show as available dates. | [optional]
**product_special_dates** | [**\PrioTicket\DistributorAPI\Models\ProductSpecialDate[]**](ProductSpecialDate.md) | Dates for a special event, depending on the products extra information might be available. | [optional]
**product_locations** | [**\PrioTicket\DistributorAPI\Models\ProductLocation[]**](ProductLocation.md) | Venues / Locations of interested for this product. | [optional]
**product_cluster_details** | [**\PrioTicket\DistributorAPI\Models\ProductRelationDetails[]**](ProductRelationDetails.md) | In case &#x60;product_cluster:true&#x60; the following array will be populated. This array contains all linked cluster-products to this main cluster-product. One of these should be booked instead of the main-product. Depending on the configuration, details and availability might be shared across these products. | [optional]
**product_combi_details** | [**\PrioTicket\DistributorAPI\Models\ProductRelationDetails[]**](ProductRelationDetails.md) | The List Products API lists all available product configurations enabled for the distributor. If you have a combination (combi-product) of (Product A + Product B) a third product (Product C) will be created.   The API will return the following: &#x60;&#x60;&#x60; Array [    Product A Details {     &#x60;product_id&#x60;:&#39;PRODUCT_ID_A&#39;     &#x60;product_combi:false&#x60;,     &#x60;product_combi_details&#x60;:[])    }        Product B Details {     &#x60;product_id&#x60;:&#39;PRODUCT_ID_B&#39;,     &#x60;product_combi:false&#x60;,     &#x60;product_combi_details&#x60;:[])    }        Product C Details {       &#x60;product_id&#x60;:&#39;PRODUCT_ID_C&#39;      &#x60;product_combi:true&#x60;,       &#x60;product_combi_details&#x60;:[&#39;PRODUCT_ID_A&#39;, &#39;PRODUCT_ID_B&#39;)    } ] &#x60;&#x60;&#x60; Every product has a unique ID and acts as a separate entity. Therefore there is no need to handle this logic on your side and you could handle them as separate products.  In case &#x60;product_combi:true&#x60; the following array will be populated. This array contains all linked combi-products to this main combi-product. Depending on the configuration, details and availability might be shared across these products. * To make a combination booking ALL combi sub-products MUST be set in the booking request as well as the main combi-product itself. Failing to do so will cause an invalid response. * All sub-products must be set in the &#x60;product_combi_details&#x60; object of the main combi-product booking object, else the products will be set as individual bookings. (Some sub-products can be booked as separate products as well) * All sub-products will inherited the &#x60;product_type_details&#x60; configuration of the main combi-product and therefore should not be set. | [optional]
**product_addon_details** | [**\PrioTicket\DistributorAPI\Models\ProductRelationDetails[]**](ProductRelationDetails.md) | In case &#x60;product_addon:true&#x60; the following array will be populated. This array contains all linked addon-products to this main product. One or more of these could be booked in addition to the main product. | [optional]
**product_categories** | **string[]** | The categories the product belongs to. | [optional]
**product_destinations** | **string[]** | The destinations the product belongs to. | [optional]
**product_languages** | **string[]** | Language codes for the available languages of the product, e.g. Shows are available in English and Spanish.   Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. | [optional]
**product_content_languages** | **string[]** | Language Codes of the languages for which the product data is available.   Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. This field can be used to show multilingual content on your website. |
**product_guide_languages** | [**\PrioTicket\DistributorAPI\Models\GuideLanguage[]**](GuideLanguage.md) | Language codes of the available guides.  Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. | [optional]
**product_routes** | **string[]** | Array of routes linked to this product. | [optional]
**product_notes** | [**\PrioTicket\DistributorAPI\Models\Note[]**](Note.md) | Optional notes on this product. | [optional]
**product_google_categories** | **string** | Comma-separated list of attached Google categories (https://developers.google.com/travel/things-to-do/reference/feed-spec/product-category). | [optional]
**product_custom_fields** | [**\PrioTicket\DistributorAPI\Models\CustomField[]**](CustomField.md) | Freeform entry of any key-value pair. | [optional]
**product_created** | [**\DateTime**](\DateTime.md) | The date on which the product has been created. | [readonly]
**product_created_name** | **string** | Cashier name / User name who created the product. |
**product_created_email** | **string** | Cashier email / User email who created the product. |
**product_modified** | [**\DateTime**](\DateTime.md) | The date on which the product has been last modified. | [readonly]
**product_modified_name** | **string** | Cashier name / User name who last modified the product. |
**product_modified_email** | **string** | Cashier email / User email who last modified the product. |
**product_view_type** | [**\PrioTicket\DistributorAPI\Models\AccountType**](AccountType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
