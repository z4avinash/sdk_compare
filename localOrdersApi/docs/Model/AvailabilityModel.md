# # AvailabilityModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability_id** | **string** | The unique ID for this availability slot. | [readonly]
**availability_external_id** | **string** | The unique external ID for this availability slot. | [optional] [readonly]
**availability_capacity_id** | **string** | Availability group / capacity identifier. | [optional] [readonly]
**availability_capacity_shared_id** | **string** | Shared availability / capacity identifier. Only applicable if &#x60;capacity_type:SHARED / COMBINED&#x60;. | [optional]
**availability_active** | **bool** | Whether this availability slot is active (open) or not (closed). This availability cannot be booked if &#x60;availability_active:false&#x60;. | [default to true]
**availability_label** | **string** | Optional label for this availability slot. | [optional]
**availability_product_id** | **string** | The product linked to this availability slot.  &gt; In case you are requesting the availability for a main combi product (&#x60;product_combi: true&#x60;) or a cluster product (&#x60;product_cluster:true&#x60;) and &#x60;sub_products_depth: &gt; 0&#x60; all sub-product availabilities will be returned as well. | [optional]
**availability_admission_type** | [**\PrioTicket\DistributorAPI\Models\ProductAdmissionType**](ProductAdmissionType.md) |  | [optional]
**availability_duration** | **int** | Duration of the timeslot in seconds | [optional]
**availability_from_date_time** | [**\DateTime**](\DateTime.md) | The starting date and time of the activity availability slot. |
**availability_to_date_time** | [**\DateTime**](\DateTime.md) | The till date and time of the activity availability slot. | [optional]
**availability_party_size** | **int** | The party size that can be accommodated during this time slot. A restaurant can be associated with multiple slots for the same time, each specifying a different party_size, if for instance 2, 3, or 4 people can be seated with a reservation.  Only applicable for selected merchants. | [optional]
**availability_spots** | [**\PrioTicket\DistributorAPI\Models\AvailabilitySpots**](AvailabilitySpots.md) |  | [optional]
**availability_pricing** | [**\PrioTicket\DistributorAPI\Models\AvailabilityPrice[]**](AvailabilityPrice.md) | Daily / Dynamic Pricing, only returned in case &#x60;product_daily_pricing:true&#x60; or &#x60;product_dynamic_pricing:true&#x60; for this product.  Please note that in case both are enabled, the combined difference will be returned. | [optional]
**availability_notes** | [**\PrioTicket\DistributorAPI\Models\Note[]**](Note.md) | Availability notes. | [optional]
**availability_created** | [**\DateTime**](\DateTime.md) | The date on which the availability slot has been created. |
**availability_modified** | [**\DateTime**](\DateTime.md) | The date on which this availability slot has been modified (Capacity and Configuration). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
