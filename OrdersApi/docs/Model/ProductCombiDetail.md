# # ProductCombiDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_parent_id** | **string** | Unique identifier for the parent product assigned by Prio. | [readonly]
**product_id** | **string** | Unique identifier for the product assigned by Prio. |
**product_title** | **string** | The title of product. | [readonly]
**product_supplier_id** | **string** | Unique identifier for supplier. | [readonly]
**product_supplier_name** | **string** | Name of the supplier which offers the product(s). | [readonly]
**product_admission_type** | [**\PrioTicket\DistributorAPI\Models\ProductAdmissionType**](ProductAdmissionType.md) |  |
**product_currency_code** | **string** | Product Currency Code, according to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217). | [readonly]
**product_availability_id** | **string** | The unique ID for the availability slot. Only mandatory if &#x60;product_availability:true&#x60; | [optional]
**product_availability_from_date_time** | [**\DateTime**](\DateTime.md) | The starting date and time of the activity availability. | [optional] [readonly]
**product_availability_to_date_time** | [**\DateTime**](\DateTime.md) | The till date and time of the activity availability. | [optional] [readonly]
**product_availability_capacity_id** | **string** | Availability group / capacity identifier. | [optional] [readonly]
**product_availability_capacity_shared_id** | **string** | Shared availability / capacity identifier. Only applicable if &#x60;capacity_type:SHARED / COMBINED&#x60;. | [optional] [readonly]
**booking_travel_date** | [**\DateTime**](\DateTime.md) | If &#x60;product_availability:false&#x60; you can still define the expected redemption date of this product. Required if &#x60;product_traveldate_required:true&#x60;. | [optional]
**booking_external_reference** | **string** | A unique booking identifier within the external system. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
