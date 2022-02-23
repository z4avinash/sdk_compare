# # WebhookNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notification_id** | **string** | Unique notification ID. | [readonly]
**notification_status** | [**\PrioTicket\DistributorAPI\Models\NotificationStatus**](NotificationStatus.md) |  |
**notification_event** | [**\PrioTicket\DistributorAPI\Models\NotificationEvent**](NotificationEvent.md) |  |
**notification_account_id** | **string** | Notification account ID. | [optional]
**notification_item_id** | **string** | Identifier of the item related to this event.  Item Types:    * Product ID.   * Availability ID.   * Payment ID.   * Order ID.   * Contact ID. |
**notification_note** | **string** | Notification note. | [optional]
**notification_created** | [**\DateTime**](\DateTime.md) | Date of creation. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
