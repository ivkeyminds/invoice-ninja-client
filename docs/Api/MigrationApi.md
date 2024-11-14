# IvkeyMinds\InvoiceNinjaClient\MigrationApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postPurgeCompany()**](MigrationApi.md#postPurgeCompany) | **POST** /api/v1/migration/purge/{company} | Attempts to purge a company record and all its child records |
| [**postPurgeCompanySaveSettings()**](MigrationApi.md#postPurgeCompanySaveSettings) | **POST** /api/v1/migration/purge_save_settings/{company} | Attempts to purge a companies child records but save the company record and its settings |
| [**postStartMigration()**](MigrationApi.md#postStartMigration) | **POST** /api/v1/migration/start | Starts the migration from previous version of Invoice Ninja |


## `postPurgeCompany()`

```php
postPurgeCompany($x_api_token, $x_requested_with, $company)
```

Attempts to purge a company record and all its child records

Attempts to purge a company record and all its child records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$company = D2J234DFA; // string | The Company Hashed ID

try {
    $apiInstance->postPurgeCompany($x_api_token, $x_requested_with, $company);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->postPurgeCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **company** | **string**| The Company Hashed ID | |

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

## `postPurgeCompanySaveSettings()`

```php
postPurgeCompanySaveSettings($x_api_token, $x_requested_with, $company)
```

Attempts to purge a companies child records but save the company record and its settings

Attempts to purge a companies child records but save the company record and its settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$company = D2J234DFA; // string | The Company Hashed ID

try {
    $apiInstance->postPurgeCompanySaveSettings($x_api_token, $x_requested_with, $company);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->postPurgeCompanySaveSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **company** | **string**| The Company Hashed ID | |

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

## `postStartMigration()`

```php
postStartMigration($x_api_token, $x_requested_with, $x_api_password, $migration)
```

Starts the migration from previous version of Invoice Ninja

Starts the migration from previous version of Invoice Ninja

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\MigrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$x_api_password = supersecretpassword; // string | The login password when challenged
$migration = migration.zip; // object | The migraton file

try {
    $apiInstance->postStartMigration($x_api_token, $x_requested_with, $x_api_password, $migration);
} catch (Exception $e) {
    echo 'Exception when calling MigrationApi->postStartMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **x_api_password** | **string**| The login password when challenged | |
| **migration** | [**object**](../Model/.md)| The migraton file | |

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
