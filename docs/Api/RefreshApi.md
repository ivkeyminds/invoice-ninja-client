# IvkeyMinds\InvoiceNinjaClient\RefreshApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**refresh()**](RefreshApi.md#refresh) | **POST** /api/v1/refresh | Refreshes the dataset |


## `refresh()`

```php
refresh($x_api_token, $x_requested_with, $include, $include_static, $clear_cache): \IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser
```

Refreshes the dataset

Refreshes the dataset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\RefreshApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated
$include_static = include_static=true; // string | Returns static variables
$clear_cache = clear_cache=true; // string | Clears the static cache

try {
    $result = $apiInstance->refresh($x_api_token, $x_requested_with, $include, $include_static, $clear_cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefreshApi->refresh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |
| **include_static** | **string**| Returns static variables | [optional] |
| **clear_cache** | **string**| Clears the static cache | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser**](../Model/CompanyUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
