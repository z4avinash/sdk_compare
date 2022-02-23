# # ProductContent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product_title** | **string** | The title of product. |
**product_supplier_name** | **string** | Name of the supplier which offers the product(s). | [readonly]
**product_duration_text** | **string** | Duration of product as contextial representation. | [optional]
**product_short_description** | **string** | The short description of product. |
**product_long_description** | **string** | The long description of product. |
**product_additional_information** | **string** | Additional information shown on the website and voucher. | [optional]
**product_entry_notes** | **string** | Product entry information. (Know before you go). The user-visible list of important notes, use for details such as age-restrictions or other conditions that make this service unsuitable. | [optional]
**product_booking_url** | **string** | Booking URL for this product. The page should include a button to start the booking / checkout flow. | [optional]
**product_landing_page_view_url** | **string** | Product landing page for this product. Link to a list view at a higher level of available tickets and tours, prominently showing this option possibly among other options. | [optional]
**product_favorite** | **bool** | Indicator that this product is marked as a favorite. | [optional]
**product_highlights** | [**\PrioTicket\DistributorAPI\Models\Highlight[]**](Highlight.md) | Product highlights. | [optional]
**product_includes** | [**\PrioTicket\DistributorAPI\Models\ProductInclude[]**](ProductInclude.md) | Product includes. | [optional]
**product_excludes** | [**\PrioTicket\DistributorAPI\Models\ProductExclude[]**](ProductExclude.md) | Product excludes. | [optional]
**product_marketing_labels** | **string[]** | Product marketing labels. | [optional]
**product_images** | [**\PrioTicket\DistributorAPI\Models\Image[]**](Image.md) | It contains images related to the product. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
