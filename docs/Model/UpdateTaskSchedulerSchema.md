# # UpdateTaskSchedulerSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paused** | **bool** | The scheduler paused state | [optional]
**repeat_every** | **string** | Accepted values (DAY,WEEK,MONTH,3MONTHS,YEAR) | [optional]
**start_from** | **int** | Timestamp when we should start the scheduler, default is today | [optional]
**job** | **string** | Job, we can find list of available jobs in Scheduler model | [optional]
**date_range** | **string** | The string representation of the date range of data to be returned | [optional]
**date_key** | **string** | The date column to search between. | [optional]
**start_date** | **string** | The start date to search between | [optional]
**end_date** | **string** | The end date to search between | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
