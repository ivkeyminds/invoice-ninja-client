# IvkeyMinds\InvoiceNinjaClient\LoginApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postLogin()**](LoginApi.md#postLogin) | **POST** /api/v1/login | Attempts authentication |


## `postLogin()`

```php
postLogin($x_api_secret, $x_api_token, $x_requested_with, $v1_login_body, $include, $include_static, $clear_cache): \IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser
```

Attempts authentication

Returns a CompanyUser object on success

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_secret = password; // string | The API secret as defined by the .env variable API_SECRET
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$v1_login_body = new \IvkeyMinds\InvoiceNinjaClient\Model\V1LoginBody(); // \IvkeyMinds\InvoiceNinjaClient\Model\V1LoginBody | User credentials
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated
$include_static = include_static=true; // string | Returns static variables
$clear_cache = clear_cache=true; // string | Clears the static cache

try {
    $result = $apiInstance->postLogin($x_api_secret, $x_api_token, $x_requested_with, $v1_login_body, $include, $include_static, $clear_cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->postLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_secret** | **string**| The API secret as defined by the .env variable API_SECRET | |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **v1_login_body** | [**\IvkeyMinds\InvoiceNinjaClient\Model\V1LoginBody**](../Model/V1LoginBody.md)| User credentials | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |
| **include_static** | **string**| Returns static variables | [optional] |
| **clear_cache** | **string**| Clears the static cache | [optional] |

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
