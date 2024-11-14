# IvkeyMinds\InvoiceNinjaClient\HealthCheckApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getHealthCheck()**](HealthCheckApi.md#getHealthCheck) | **GET** /api/v1/health_check | Attempts to get a health check from the API |


## `getHealthCheck()`

```php
getHealthCheck($x_requested_with)
```

Attempts to get a health check from the API

Attempts to get a health check from the API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\HealthCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header

try {
    $apiInstance->getHealthCheck($x_requested_with);
} catch (Exception $e) {
    echo 'Exception when calling HealthCheckApi->getHealthCheck: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
