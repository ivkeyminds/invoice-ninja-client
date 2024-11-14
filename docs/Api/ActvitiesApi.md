# IvkeyMinds\InvoiceNinjaClient\ActvitiesApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getActivities()**](ActvitiesApi.md#getActivities) | **GET** /api/v1/activities | Gets a list of actvities |
| [**getActivityHistoricalEntityPdf()**](ActvitiesApi.md#getActivityHistoricalEntityPdf) | **GET** /api/v1/actvities/download_entity/{activity_id} | Gets a PDF for the given activity |


## `getActivities()`

```php
getActivities($x_api_token, $x_requested_with, $include, $index, $rows): \IvkeyMinds\InvoiceNinjaClient\Model\Activity
```

Gets a list of actvities

Lists all activities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ActvitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated
$index = user; // string | Replaces the default response index from data to a user specific string
$rows = 50; // float | The number of activities to return

try {
    $result = $apiInstance->getActivities($x_api_token, $x_requested_with, $include, $index, $rows);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActvitiesApi->getActivities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |
| **index** | **string**| Replaces the default response index from data to a user specific string | [optional] |
| **rows** | **float**| The number of activities to return | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Activity**](../Model/Activity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActivityHistoricalEntityPdf()`

```php
getActivityHistoricalEntityPdf($x_api_token, $x_requested_with, $activity_id)
```

Gets a PDF for the given activity

Gets a PDF for the given activity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ActvitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$activity_id = D2J234DFA; // string | The Activity Hashed ID

try {
    $apiInstance->getActivityHistoricalEntityPdf($x_api_token, $x_requested_with, $activity_id);
} catch (Exception $e) {
    echo 'Exception when calling ActvitiesApi->getActivityHistoricalEntityPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **activity_id** | **string**| The Activity Hashed ID | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
