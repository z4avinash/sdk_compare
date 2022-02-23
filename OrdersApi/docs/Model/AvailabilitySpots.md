# # AvailabilitySpots

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability_spots_total** | **int** | The total number of spots that the merchant has configured for this distributor (including those that are not available). | [optional]
**availability_spots_reserved** | **int** | The number of spots currently reserved / blocked for this availability entry. SOme of these might open up in the near future (e.g. abandoned checkouts). This value is already deducted from the &#x60;availability_spots_open&#x60; parameter and can be safely ignored in capacity calculations.  Formula: &#x60;availability_spots_total&#x60; - (&#x60;availability_spots_booked&#x60; + &#x60;availability_spots_reserved&#x60;) &#x3D; &#x60;availability_spots_open&#x60;. | [optional]
**availability_spots_booked** | **int** | The number of spots currently booked for this availability entry. These might open up in the near future (Cancellations). This value is already deducted from the &#x60;availability_spots_open&#x60; parameter and can be safely ignored in capacity calculations.  Formula: &#x60;availability_spots_total&#x60; - (&#x60;availability_spots_booked&#x60; + &#x60;availability_spots_reserved&#x60;) &#x3D; &#x60;availability_spots_open&#x60;. | [optional]
**availability_spots_open** | **int** | The number of spots currently available for this availability entry. |
**availability_spots_redeemed** | **int** | The number of spots that are redeemed.   &gt; Only visible to suppliers. | [optional]
**availability_spots_details** | [**\PrioTicket\DistributorAPI\Models\Spot[]**](Spot.md) | List of available spots. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
