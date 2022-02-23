# # ProductRedemptionRules

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redemption_has_duration** | **bool** | In case this product has a fixed duration a countdown will be started based on the &#x60;redemption_duration_type&#x60;. | [default to false]
**redemption_duration_time** | **int** | The total amount of time in seconds that the pass is supposed to be valid. Only applicable if &#x60;redemption_has_duration:true&#x60;. | [optional]
**redemption_duration_type** | [**\PrioTicket\DistributorAPI\Models\RedemptionDurationType**](RedemptionDurationType.md) |  | [optional]
**redemption_count_type** | [**\PrioTicket\DistributorAPI\Models\RedemptionCountType**](RedemptionCountType.md) |  |
**redemption_count_value** | **int** | The amount of times this product can be redeemed.   Only applicable if &#x60;redemption_count_type:LIMITED&#x60;. | [optional] [default to 1]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
