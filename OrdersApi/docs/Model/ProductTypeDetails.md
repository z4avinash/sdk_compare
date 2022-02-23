# # ProductTypeDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_type** | [**\PrioTicket\DistributorAPI\Models\ProductType**](ProductType.md) |  |
**product_type_class** | [**\PrioTicket\DistributorAPI\Models\ProductTypeClass**](ProductTypeClass.md) |  | [optional]
**product_type_variant_id** | **string** | Unique identifier for this product type variant. | [optional] [readonly]
**product_type_id** | **string** |  | [readonly]
**product_type_label** | **string** | (Translatable) The actual label to show on your front-end. | [optional]
**product_type_description** | **string** | (Translatable) Optional description of this product type. If provided, it is highly recommended to show it on your front-end as it might contain important information about the eligibility. | [optional]
**product_type_age_from** | **int** | The starting age for age group. | [optional] [readonly]
**product_type_age_to** | **int** | The ending age for age group.  If both &#x60;product_type_age_from&#x60; and &#x60;product_type_age_to&#x60; are empty no age-restrictions should be shown. If only &#x60;product_type_age_to&#x60; is empty, then it is advised to show the age-restriction as e.g. \&quot;22+\&quot;. | [optional] [readonly]
**product_type_pax** | **int** | Number of persons that should be counted in the reporting. | [optional] [readonly] [default to 1]
**product_type_capacity** | **int** | Capacity that should be counted / blocked in the system.  For example:  If a single table with six seats is booked by two persons, the setup would be as follows:    &#x60;&#x60;&#x60;   \&quot;product_type_count\&quot;: 1,   \&quot;product_type_pax\&quot;: 2,   \&quot;product_type_capacity\&quot;: 6   &#x60;&#x60;&#x60; | [optional] [readonly] [default to 1]
**product_type_quantity_min** | **int** | The minimum required quantity to be selected. The &#x60;product_type_count&#x60; must be equal or higher. | [optional] [readonly]
**product_type_quantity_max** | **int** | The maximum allowed quantity to be selected. The &#x60;product_type_count&#x60; must be equal or lower. | [optional] [readonly]
**product_type_price_tax_id** | **string** | Tax ID for this product type. Tax information can be retrieved from the Tax API. | [optional] [readonly]
**product_type_price_type** | **string** | Whether the price is applicable per individual or fixed for the whole group.  Price Type:      * &#x60;INDIVIDUAL&#x60; - Depending on the booking quantity, the price increases.      * &#x60;GROUP&#x60; - The price for this product type is fixed regardless of how many are booked. | [optional] [readonly]
**product_type_pricing** | [**\PrioTicket\DistributorAPI\Models\ProductTypePricing**](ProductTypePricing.md) |  |
**product_type_fees** | [**\PrioTicket\DistributorAPI\Models\Fee[]**](Fee.md) | List of fees. Some fee types are only visible for certain users. | [optional] [readonly]
**product_type_quantity_variations_label** | **string** |  | [optional]
**product_type_quantity_variations** | [**\PrioTicket\DistributorAPI\Models\ProductTypeQuantityVariation[]**](ProductTypeQuantityVariation.md) | Only set if &#x60;product_quantity_pricing:true&#x60;. | [optional]
**product_type_daily_variations** | [**\PrioTicket\DistributorAPI\Models\ProductTypeDailyVariation[]**](ProductTypeDailyVariation.md) | Only set if &#x60;product_daily_pricing:true&#x60;. As an alternative to implementing these prices statically (Content API), they could also be retrieved from the Availability API (&#x60;availability_pricing&#x60;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
