# # PassDurationDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pass_duration_start** | [**\DateTime**](\DateTime.md) | In case of a redeemed pass, the start time of the countdown. Will be equal to &#x60;redeem_date_time_first&#x60;. |
**pass_duration_end** | [**\DateTime**](\DateTime.md) | In case of a redeemed pass, the end time of the countdown. (&#x60;duration_start&#x60; + &#x60;duration_total&#x60;) |
**pass_duration_total** | **int** | The total amount of time in seconds that the pass is supposed to be valid. |
**pass_duration_remaining** | **int** | The remaining time for the pass to be valid in seconds. Can be a negative value in case of an expired passcode. (&#x60;duration_end&#x60; - current time) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
