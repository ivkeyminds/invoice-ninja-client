# IvkeyMinds\InvoiceNinjaClient\TemplatesApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getShowTemplate()**](TemplatesApi.md#getShowTemplate) | **POST** /api/v1/templates | Returns a entity template with the template variables replaced with the Entities |


## `getShowTemplate()`

```php
getShowTemplate($x_requested_with, $v1_templates_body): \IvkeyMinds\InvoiceNinjaClient\Model\Template
```

Returns a entity template with the template variables replaced with the Entities

Returns a entity template with the template variables replaced with the Entities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$v1_templates_body = new \IvkeyMinds\InvoiceNinjaClient\Model\V1TemplatesBody(); // \IvkeyMinds\InvoiceNinjaClient\Model\V1TemplatesBody | The template subject and body

try {
    $result = $apiInstance->getShowTemplate($x_requested_with, $v1_templates_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getShowTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **v1_templates_body** | [**\IvkeyMinds\InvoiceNinjaClient\Model\V1TemplatesBody**](../Model/V1TemplatesBody.md)| The template subject and body | |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Template**](../Model/Template.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
