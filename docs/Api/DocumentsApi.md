# IvkeyMinds\InvoiceNinjaClient\DocumentsApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDocuments()**](DocumentsApi.md#getDocuments) | **GET** /api/v1/documents | Gets a list of documents |


## `getDocuments()`

```php
getDocuments($x_api_token, $x_requested_with, $include, $index): \IvkeyMinds\InvoiceNinjaClient\Model\Document
```

Gets a list of documents

Lists documents, search and filters allow fine grained lists to be generated.      Query parameters can be added to performed more fine grained filtering of the documents, these are handled by the DocumentsFilters class which defines the methods available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated
$index = user; // string | Replaces the default response index from data to a user specific string

try {
    $result = $apiInstance->getDocuments($x_api_token, $x_requested_with, $include, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |
| **index** | **string**| Replaces the default response index from data to a user specific string | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Document**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
