# IvkeyMinds\InvoiceNinjaClient\EmailsApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendEmailTemplate()**](EmailsApi.md#sendEmailTemplate) | **POST** /api/v1/emails | Sends an email for an entity |


## `sendEmailTemplate()`

```php
sendEmailTemplate($x_requested_with, $v1_emails_body): \IvkeyMinds\InvoiceNinjaClient\Model\Template
```

Sends an email for an entity

Sends an email for an entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$v1_emails_body = new \IvkeyMinds\InvoiceNinjaClient\Model\V1EmailsBody(); // \IvkeyMinds\InvoiceNinjaClient\Model\V1EmailsBody | The template subject and body

try {
    $result = $apiInstance->sendEmailTemplate($x_requested_with, $v1_emails_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->sendEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **v1_emails_body** | [**\IvkeyMinds\InvoiceNinjaClient\Model\V1EmailsBody**](../Model/V1EmailsBody.md)| The template subject and body | |

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
