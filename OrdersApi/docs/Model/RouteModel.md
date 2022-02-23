# # RouteModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**route_active** | **string** | Whether this route should be shown. | [default to 'true']
**route_id** | **string** | Unique identifier of this route. |
**route_name** | **string** | Returns route name. |
**route_description** | **string** | Description of the route. | [optional]
**route_color** | **string** | Returns the color of this route. (HEX) | [optional]
**route_type** | **string** | The type of route. | [optional]
**route_start_time** | **string** | The starting time of the route. | [optional]
**route_end_time** | **string** | The end time of the route. | [optional]
**route_duration** | **int** | The duration of the route (in minutes). | [optional]
**route_frequency** | **int** | Returns the \&quot;loop\&quot; frequency of this route. | [optional]
**route_audio_languages** | **string[]** | The audio languages available on this route. Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. | [optional]
**route_live_languages** | **string[]** | The guide languages available on this route. Language is defined in [ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1) format. | [optional]
**route_products** | **string[]** | List of applicable products on this route. | [optional]
**route_locations** | [**\PrioTicket\DistributorAPI\Models\RouteLocation[]**](RouteLocation.md) | Specifies an array of directional waypoints. Waypoints alter a route by routing it through the specified location(s). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
