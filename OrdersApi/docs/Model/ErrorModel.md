# # ErrorModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **string** | The error code which occured.  As our API has over 1000+ unique error codes (grouped by HTTP status). We discourage implementing individual errors on your customer front-end interface and suggest a catch-all clause for each HTTP status code instead. | [readonly]
**error_reference** | **string** | Unique reference linked to this error. | [readonly]
**error_message** | **string** | Customer friendly error message which can be shown on your front-end. | [readonly]
**error_description** | **string** | Human-readable ASCII [[USASCII]](https://tools.ietf.org/html/rfc6749#ref-USASCII) text providing additional information, used to assist the client developer in understanding the error that occurred. | [optional] [readonly]
**error_uri** | **string** | A URI identifying a human-readable web page with information about the error, used to provide the client  developer with additional information about the error. | [optional] [readonly]
**errors** | **string[]** | Specific messages indicating one or more problems. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
