# # CategoryModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **string** | Unique category identifier. | [readonly]
**category_name** | **string** | Category name. |
**category_description** | **string** | Category description. | [optional]
**category_parent_id** | **string** | Optional parent category. | [optional]
**category_type** | **string** | Category type. |
**category_slug** | **string** | SEO friendly slug which can be used during URL building. | [optional]
**category_icon** | **string** | URL which points to category icon. | [optional]
**category_images** | [**\PrioTicket\DistributorAPI\Models\Image[]**](Image.md) | It contains images related to the category. | [optional]
**category_products** | **string[]** | The products available in this category. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
