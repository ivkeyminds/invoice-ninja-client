# IvkeyMinds\InvoiceNinjaClient\ExpenseApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**uploadExpense()**](ExpenseApi.md#uploadExpense) | **PUT** /api/v1/expenses/{id}/upload | Uploads a document to a expense |


## `uploadExpense()`

```php
uploadExpense($x_api_token, $x_requested_with, $id, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Expense
```

Uploads a document to a expense

Handles the uploading of a document to a expense

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ExpenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Expense Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->uploadExpense($x_api_token, $x_requested_with, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApi->uploadExpense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Expense Hashed ID | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Expense**](../Model/Expense.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
