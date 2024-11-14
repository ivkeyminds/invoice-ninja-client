# IvkeyMinds\InvoiceNinjaClient\SignupApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postSignup()**](SignupApi.md#postSignup) | **POST** /api/v1/signup | Attempts a new account signup |


## `postSignup()`

```php
postSignup($x_requested_with, $token_name, $v1_signup_body): \IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser
```

Attempts a new account signup

Attempts a new account signup and returns a CompanyUser object on success

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\SignupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$token_name = Daves iOS Device; // string | A custom name for the user company token
$v1_signup_body = new \IvkeyMinds\InvoiceNinjaClient\Model\V1SignupBody(); // \IvkeyMinds\InvoiceNinjaClient\Model\V1SignupBody | Signup credentials

try {
    $result = $apiInstance->postSignup($x_requested_with, $token_name, $v1_signup_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignupApi->postSignup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **token_name** | **string**| A custom name for the user company token | |
| **v1_signup_body** | [**\IvkeyMinds\InvoiceNinjaClient\Model\V1SignupBody**](../Model/V1SignupBody.md)| Signup credentials | |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser**](../Model/CompanyUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
