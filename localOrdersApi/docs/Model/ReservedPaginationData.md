# # ReservedPaginationData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | [**\PrioTicket\DistributorAPI\Models\Kind**](Kind.md) |  |
**current_item_count** | **int** | The number of items in this result set. Should be equivalent to items.length, and is provided as a convenience property. For example, suppose a developer requests a set of search items, and asks for 10 items per page. The total set of that search has 14 total items. The first page of items will have 10 items in it, so both &#x60;items_per_page&#x60; and &#x60;current_item_count&#x60; will equal \&quot;10\&quot;. The next page of items will have the remaining 4 items; &#x60;items_per_page&#x60; will still be \&quot;10\&quot;, but &#x60;current_item_count&#x60; will be \&quot;4\&quot;. |
**items_per_page** | **int** | The number of items in the result. This is not necessarily the size of the data.items array; if we are viewing the last page of items, the size of data.items may be less than &#x60;items_per_page&#x60;. However the size of data.items should not exceed &#x60;items_per_page&#x60;. |
**start_index** | **int** | The index of the first item in data.items. For consistency, &#x60;start_index&#x60; should be 1-based. For example, the first item in the first set of items should have a &#x60;start_index&#x60; of 1. If the user requests the next set of data, the &#x60;start_index&#x60; may be 10. |
**total_items** | **int** | The total number of items available in this set. For example, if a user has 100 blog posts, the response may only contain 10 items, but the &#x60;total_items&#x60; would be 100. |
**page_index** | **int** | The index of the current page of items. For consistency, &#x60;page_index&#x60; should be 1-based. For example, the first page of items has a &#x60;page_index&#x60; of 1. &#x60;page_index&#x60; can also be calculated from the item-based paging properties: &#x60;page_index&#x60; &#x3D; floor(&#x60;start_index&#x60; / &#x60;items_per_page&#x60;) + 1. |
**total_pages** | **int** | The total number of pages in the result set. &#x60;total_pages&#x60; can also be calculated from the item-based paging properties above: &#x60;total_pages&#x60; &#x3D; ceiling(&#x60;total_items&#x60; / &#x60;items_per_page&#x60;) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
