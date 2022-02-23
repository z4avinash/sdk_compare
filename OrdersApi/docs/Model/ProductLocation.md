# # ProductLocation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**location_id** | **string** | Unique identifier of this location. | [readonly]
**location_label** | **string** | The label for this location. | [optional]
**location_name** | **string** | Returns location name. |
**location_description** | **string** | Optional description of the location. | [optional]
**location_url** | **string** | The location URL.  Can contain additional information about the location, or for example, show a link to an online video-conference. | [optional]
**location_type** | [**\PrioTicket\DistributorAPI\Models\LocationType**](LocationType.md) |  |
**location_address** | [**\PrioTicket\DistributorAPI\Models\AddressModel**](AddressModel.md) |  | [optional]
**location_contacts** | [**\PrioTicket\DistributorAPI\Models\ContactDetails[]**](ContactDetails.md) | Location contacts. | [optional]
**location_opening_times** | [**\PrioTicket\DistributorAPI\Models\OpeningTimes[]**](OpeningTimes.md) | Opening times of this location. | [optional]
**location_custom_fields** | [**\PrioTicket\DistributorAPI\Models\CustomField[]**](CustomField.md) | Freeform entry of any key-value pair. | [optional]
**location_pickup_point** | **bool** | Whether this location is a pickup point. | [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
