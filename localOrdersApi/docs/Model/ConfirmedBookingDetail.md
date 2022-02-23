# # ConfirmedBookingDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_type** | [**\PrioTicket\DistributorAPI\Models\ProductType**](ProductType.md) |  |
**product_type_class** | [**\PrioTicket\DistributorAPI\Models\ProductTypeClass**](ProductTypeClass.md) |  | [optional]
**product_type_id** | **string** | In case of more complex product configurations e.g. multiple ambiguous product types, the preferred option must be specified using the ID. |
**product_type_label** | **string** | (Translatable) The product type label. | [optional] [readonly]
**product_type_age_from** | **int** | The starting age for age group. | [optional] [readonly]
**product_type_age_to** | **int** | The ending age for age group.  If both &#x60;product_type_age_from&#x60; and &#x60;product_type_age_to&#x60; are empty no age-restrictions should be shown. If only &#x60;product_type_age_to&#x60; is empty, then it is advised to show the age-restriction as e.g. \&quot;22+\&quot;. | [optional] [readonly]
**product_type_count** | **int** | The quantity being booked for the specified product type.  Please note that the following structures are deemed semantically the same. &#x60;&#x60;&#x60; \&quot;product_type_details\&quot;:[   {      \&quot;product_type_id\&quot;:\&quot;13725\&quot;,      \&quot;product_type_count\&quot;:\&quot;2\&quot;   } ]  and  \&quot;product_type_details\&quot;:[   {                           \&quot;product_type_id\&quot;:\&quot;13725\&quot;,         \&quot;product_type_count\&quot;:1      },   {             \&quot;product_type_id\&quot;:\&quot;13725\&quot;,          \&quot;product_type_count\&quot;:1        } ] &#x60;&#x60;&#x60; We allow this &#39;alternative format&#39; for &#39;ease-of-use&#39;. Please note that in the order response we have no other option than to &#39;split&#39; the product types, otherwise, we would not be able to send multiple codes (single &#x60;product_type_code&#x60; per pax/piece) in the response. |
**product_type_pax** | **int** | Number of persons to be counted in the reporting for the selected product type quantity. | [readonly]
**product_type_capacity** | **int** | The capacity count to be blocked in the system for the selected availability slot.  For example:  If a single table with six seats is booked by two persons, the setup would be as follows:    &#x60;&#x60;&#x60;   \&quot;product_type_count\&quot;: 1,   \&quot;product_type_pax\&quot;: 2,   \&quot;product_type_capacity\&quot;: 6   &#x60;&#x60;&#x60; | [optional] [readonly]
**product_type_spots** | [**\PrioTicket\DistributorAPI\Models\Spot[]**](Spot.md) | Product type spots. | [optional]
**product_type_code** | **string** | The product code allocated by Prio to redeem products. | [readonly]
**product_type_transaction_id** | **string** | Transaction ID of this product type. | [readonly]
**product_type_status** | [**\PrioTicket\DistributorAPI\Models\StatusTypes**](StatusTypes.md) |  | [optional]
**product_type_redemption_status** | [**\PrioTicket\DistributorAPI\Models\RedemptionStatus**](RedemptionStatus.md) |  |
**product_type_redemption_date_time** | [**\DateTime**](\DateTime.md) | Date and time of redemption. | [optional] [readonly]
**product_type_pass** | [**\PrioTicket\DistributorAPI\Models\Pass**](Pass.md) |  | [optional]
**product_type_pricing** | [**\PrioTicket\DistributorAPI\Models\Pricing**](Pricing.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
