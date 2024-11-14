# IvkeyMinds\InvoiceNinjaClient\ImportApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getImportJson()**](ImportApi.md#getImportJson) | **POST** /api/v1/import_json | Import data from the system |


## `getImportJson()`

```php
getImportJson($x_requested_with)
```

Import data from the system

Import data from the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header

try {
    $apiInstance->getImportJson($x_requested_with);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->getImportJson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |

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
