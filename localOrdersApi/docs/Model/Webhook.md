# # Webhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_id** | **string** | Unique webhook ID. | [readonly]
**webhook_status** | **string** | Status of this webhook. | [readonly]
**webhook_version** | **string** | Represents the version of the service API that&#39;s served in the response. | [optional] [readonly]
**webhook_events** | [**\PrioTicket\DistributorAPI\Models\NotificationEvent[]**](NotificationEvent.md) | Events this webhook subscribes to. |
**webhook_url** | **string** | Webhook URL to sent notifications. | [optional]
**webhook_email** | **string** | Webhook Email to sent notifications. | [optional]
**webhook_payload** | **bool** | Whether the notification should contain the payload of the changed data. | [optional] [default to true]
**webhook_auth** | **string** | Optional Basic access authentication value that will be passed as &#x60;Authorization: Basic &lt;Webhook Auth Value&gt;&#x60; header on each callback. | [optional]
**webhook_created** | [**\DateTime**](\DateTime.md) | Date of creation. | [readonly]
**webhook_created_name** | **string** | Cashier name / User name who created the webhook. | [readonly]
**webhook_created_email** | **string** | Cashier email / User email who created the webhook. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
