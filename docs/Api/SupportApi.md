# IvkeyMinds\InvoiceNinjaClient\SupportApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**supportMessage()**](SupportApi.md#supportMessage) | **POST** /api/v1/support/messages/send | Sends a support message to Invoice Ninja team |


## `supportMessage()`

```php
supportMessage($x_api_token, $x_requested_with, $body): string[]
```

Sends a support message to Invoice Ninja team

Allows a user to send a support message to the Invoice Ninja Team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\SupportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$body = 'body_example'; // string | The message

try {
    $result = $apiInstance->supportMessage($x_api_token, $x_requested_with, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupportApi->supportMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **body** | **string**| The message | |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
