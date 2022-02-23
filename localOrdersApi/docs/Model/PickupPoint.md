# # PickupPoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pickup_point_id** | **string** | Pickup point ID. |
**pickup_point_name** | **string** | Pickup point name / label. | [readonly]
**pickup_point_description** | **string** | Pickup point description. | [optional] [readonly]
**pickup_point_location** | **string** | Reference to the location details. | [optional] [readonly]
**pickup_point_time** | **string** | Time of pickup. | [optional]
**pickup_point_times** | **string[]** | Times available to select for this pickup point. | [optional]
**pickup_point_duration** | **int** | Duration of the pickup in minutes. | [optional] [readonly]
**pickup_point_availability_dependency** | **bool** | Dependency on the selected &#x60;availability_slot&#x60;.  The selected (&#x60;pickup_point_time&#x60; + &#x60;pickup_point_duration&#x60;) is not allowed to exceed the selected &#x60;availability_from_date_time&#x60; and therefore only a limited amount of &#x60;pickup_point_times&#x60; should be shown. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
