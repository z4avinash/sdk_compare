# # ContactDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_uid** | **string** | A unique contact identifier created by Prio.   In case this field is left blank, a new contact will be created in the system. If you pass an already existing &#x60;contact_uid&#x60;, those contact details will be  used and linked to the current/future order. In this case all other fields will be ignored. &gt; Only applicable for partners using the Contacts Module (Returning guests). For regular transactions this parameter can be safely ignored. | [optional]
**contact_external_uid** | **string** | Unique external identifier of the contact. | [optional]
**contact_version** | **int** | Contact version; every time the contact details are updated, a new version is registered. | [optional] [readonly] [default to 1]
**contact_number** | **string** | Number of the contact. | [optional]
**contact_type** | [**\PrioTicket\DistributorAPI\Models\ContactType**](ContactType.md) |  | [optional]
**contact_title** | **string** | Title prefix of the contact (Mister / Miss / Misses etc). | [optional]
**contact_name_first** | **string** | First name of the contact. | [optional]
**contact_name_last** | **string** | Last name of the contact. If you only have the fullname, we recommend sending it as &#x60;contact_name_last&#x60; and leaving the &#x60;contact_name_first&#x60; blank. | [optional]
**contact_email** | **string** | Email address of the contact. | [optional]
**contact_phone** | **string** | Must be a valid E.164 spec compliant phone number. | [optional]
**contact_mobile** | **string** | Must be a valid E.164 spec compliant phone number. | [optional]
**contact_language** | **string** | Language and culture code of the contact preferred language ([ISO-639-1](https://en.wikipedia.org/wiki/ISO_639-1)). | [optional]
**contact_nationality** | **string** | Country code of the contact ([ISO-3166-1](https://en.wikipedia.org/wiki/ISO_3166-1)). | [optional]
**contact_flight_number** | **string** | Contact Flight Number. | [optional]
**contact_loyalty_number** | **string** | Contact Loyalty Number. | [optional]
**contact_birth_place** | **string** | Place of birth. | [optional]
**contact_birth_date** | [**\DateTime**](\DateTime.md) | Date of birth. | [optional]
**contact_passport** | **string** | Passport details of the contact. | [optional]
**contact_gender** | **string** | Gender of the contact. | [optional]
**contact_age** | **int** | Age of the contact. | [optional]
**contact_room_number** | **string** | Contact room number. | [optional]
**contact_website** | **string** | Contact website. | [optional]
**contact_classification** | [**\PrioTicket\DistributorAPI\Models\ContactClassification**](ContactClassification.md) |  | [optional]
**contact_address** | [**\PrioTicket\DistributorAPI\Models\AddressModel**](AddressModel.md) |  | [optional]
**contact_notes** | [**\PrioTicket\DistributorAPI\Models\Note[]**](Note.md) | Contact notes. | [optional]
**contact_custom_fields** | [**\PrioTicket\DistributorAPI\Models\CustomField[]**](CustomField.md) | Freeform entry of any key-value pair. | [optional]
**contact_created** | [**\DateTime**](\DateTime.md) | Creation date and time of the contact. | [readonly]
**contact_modified** | [**\DateTime**](\DateTime.md) | Last update date and time of the contact. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
