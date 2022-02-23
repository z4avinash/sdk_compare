# # ProductCodeSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_code_format** | [**\PrioTicket\DistributorAPI\Models\ProductCodeFormat**](ProductCodeFormat.md) |  |
**product_code_source** | [**\PrioTicket\DistributorAPI\Models\ProductCodeSource**](ProductCodeSource.md) |  |
**product_group_code** | **bool** | Whether this product supports a group code. In this case a code (&#x60;product_code&#x60;) is returned which is valid for all &#x60;product_type&#x60;s. This code can be used to allow entry to all persons within that booking without using an individual &#x60;product_type_code&#x60;. | [default to false]
**product_combi_code** | **bool** | Whether this product supports a combi code. In this case a code (&#x60;product_code&#x60;) is returned which is valid for all products within a package. This code allows admission to all supplier venues. This is only applicable to combi-products (&#x60;product_combi:true&#x60;). | [default to false]
**product_voucher_settings** | [**\PrioTicket\DistributorAPI\Models\ProductVoucherSettings**](ProductVoucherSettings.md) |  |
**product_code_release_date** | [**\DateTime**](\DateTime.md) | If &#x60;product_code_release_details:DATE_ALLOCATION&#x60;, this field will indicate the date on which the voucher codes will be available. Note that if there are multiple voucher release requirements, all must be met prior to this date, otherwise the voucher will be released as soon as the last requirement is fullfilled.  In case you are subscribed to the Order Notification Event, a webhook will be triggered on this date as well. | [optional]
**product_code_release_details** | [**\PrioTicket\DistributorAPI\Models\VoucherReleaseType[]**](VoucherReleaseType.md) | Requirements for the voucher codes to be released. All requirements must be met for the voucher to be released.  By default the vouchers will be released on Order Confirmation. Be aware that if additional requirements are set, the voucher codes might not immediately be released upon Create Booking.  Additional requirements are only applicable to a very small subset of products. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
