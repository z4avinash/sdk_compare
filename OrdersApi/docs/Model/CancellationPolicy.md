# # CancellationPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancellation_description** | **string** | Description of this cancellation policy. | [optional]
**cancellation_type** | [**\PrioTicket\DistributorAPI\Models\CancellationType**](CancellationType.md) |  |
**cancellation_fee_threshold** | **int** | The amount of minutes before / after the traveldate / booking date for which this policy is applicable. | [optional]
**cancellation_fee_percentage** | **double** | Percentage of the total booking value that should be charged. | [optional]
**cancellation_fee_amount** | **string** | Fixed amount that should be charged. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
