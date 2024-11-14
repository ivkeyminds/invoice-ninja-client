# IvkeyMinds\InvoiceNinjaClient\ClaimLicenseApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getClaimLicense()**](ClaimLicenseApi.md#getClaimLicense) | **GET** /api/v1/claim_license | Attempts to claim a white label license |


## `getClaimLicense()`

```php
getClaimLicense($x_requested_with, $license_key, $product_id)
```

Attempts to claim a white label license

Attempts to claim a white label license

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ClaimLicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$license_key = d87sh-s755s-s7d76-sdsd8; // string | The license hash
$product_id = 1; // string | The ID of the product purchased.

try {
    $apiInstance->getClaimLicense($x_requested_with, $license_key, $product_id);
} catch (Exception $e) {
    echo 'Exception when calling ClaimLicenseApi->getClaimLicense: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **license_key** | **string**| The license hash | |
| **product_id** | **string**| The ID of the product purchased. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
