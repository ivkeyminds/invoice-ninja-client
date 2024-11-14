# IvkeyMinds\InvoiceNinjaClient\CompanyUserApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateCompanyUser()**](CompanyUserApi.md#updateCompanyUser) | **POST** /api/v1/company_users | Update a company user record |


## `updateCompanyUser()`

```php
updateCompanyUser($x_requested_with): \IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser
```

Update a company user record

Attempts to update a company user record. A company user can modify only their settings fields. Full access for Admin users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\CompanyUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header

try {
    $result = $apiInstance->updateCompanyUser($x_requested_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyUserApi->updateCompanyUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |

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
