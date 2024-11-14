# IvkeyMinds\InvoiceNinjaClient\TaxRatesApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkTaxRates()**](TaxRatesApi.md#bulkTaxRates) | **POST** /api/v1/tax_rates/bulk | Performs bulk actions on an array of TaxRates |
| [**deleteTaxRate()**](TaxRatesApi.md#deleteTaxRate) | **DELETE** /api/v1/tax_rates/{id} | Deletes a TaxRate |
| [**editTaxRate()**](TaxRatesApi.md#editTaxRate) | **GET** /api/v1/tax_rates/{id}/edit | Shows a Tax Rate for editting |
| [**getTaxRateCreate()**](TaxRatesApi.md#getTaxRateCreate) | **GET** /api/v1/tax_rates/create | Gets a new blank Tax Rate object |
| [**getTaxRates()**](TaxRatesApi.md#getTaxRates) | **GET** /api/v1/tax_rates | Gets a list of tax_rates |
| [**showTaxRate()**](TaxRatesApi.md#showTaxRate) | **GET** /api/v1/tax_rates/{id} | Shows a Tax Rate |
| [**updateTaxRate()**](TaxRatesApi.md#updateTaxRate) | **PUT** /api/v1/tax_rates/{id} | Updates a tax rate |


## `bulkTaxRates()`

```php
bulkTaxRates($x_api_token, $x_requested_with, $request_body, $index): \IvkeyMinds\InvoiceNinjaClient\Model\Webhook
```

Performs bulk actions on an array of TaxRates



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$request_body = array(56); // int[] | Tax Rates
$index = user; // string | Replaces the default response index from data to a user specific string

try {
    $result = $apiInstance->bulkTaxRates($x_api_token, $x_requested_with, $request_body, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->bulkTaxRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **request_body** | [**int[]**](../Model/int.md)| Tax Rates | |
| **index** | **string**| Replaces the default response index from data to a user specific string | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Webhook**](../Model/Webhook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTaxRate()`

```php
deleteTaxRate($x_api_token, $x_requested_with, $id)
```

Deletes a TaxRate

Handles the deletion of an TaxRate by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The TaxRate Hashed ID

try {
    $apiInstance->deleteTaxRate($x_api_token, $x_requested_with, $id);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->deleteTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The TaxRate Hashed ID | |

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

## `editTaxRate()`

```php
editTaxRate($x_api_token, $x_requested_with, $id): \IvkeyMinds\InvoiceNinjaClient\Model\TaxRate
```

Shows a Tax Rate for editting

Displays a Tax Rate by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The TaxRate Hashed ID

try {
    $result = $apiInstance->editTaxRate($x_api_token, $x_requested_with, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->editTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The TaxRate Hashed ID | |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\TaxRate**](../Model/TaxRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxRateCreate()`

```php
getTaxRateCreate($x_api_token, $x_requested_with): \IvkeyMinds\InvoiceNinjaClient\Model\TaxRate
```

Gets a new blank Tax Rate object

Returns a blank object with default values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header

try {
    $result = $apiInstance->getTaxRateCreate($x_api_token, $x_requested_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->getTaxRateCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\TaxRate**](../Model/TaxRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxRates()`

```php
getTaxRates($index): \IvkeyMinds\InvoiceNinjaClient\Model\TaxRate
```

Gets a list of tax_rates

Lists tax rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index = user; // string | Replaces the default response index from data to a user specific string

try {
    $result = $apiInstance->getTaxRates($index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->getTaxRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **string**| Replaces the default response index from data to a user specific string | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\TaxRate**](../Model/TaxRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showTaxRate()`

```php
showTaxRate($x_api_token, $x_requested_with, $id): \IvkeyMinds\InvoiceNinjaClient\Model\TaxRate
```

Shows a Tax Rate

Displays an TaxRate by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The TaxRate Hashed ID

try {
    $result = $apiInstance->showTaxRate($x_api_token, $x_requested_with, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->showTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The TaxRate Hashed ID | |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\TaxRate**](../Model/TaxRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxRate()`

```php
updateTaxRate($x_api_token, $x_requested_with, $id): \IvkeyMinds\InvoiceNinjaClient\Model\TaxRate
```

Updates a tax rate

Handles the updating of a tax rate by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaxRatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The TaxRate Hashed ID

try {
    $result = $apiInstance->updateTaxRate($x_api_token, $x_requested_with, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRatesApi->updateTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The TaxRate Hashed ID | |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\TaxRate**](../Model/TaxRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
