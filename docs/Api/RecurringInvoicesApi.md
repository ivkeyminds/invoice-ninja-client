# IvkeyMinds\InvoiceNinjaClient\RecurringInvoicesApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionRecurringInvoice()**](RecurringInvoicesApi.md#actionRecurringInvoice) | **GET** /api/v1/recurring_invoices/{id}/{action} | Performs a custom action on an RecurringInvoice |
| [**bulkRecurringInvoices()**](RecurringInvoicesApi.md#bulkRecurringInvoices) | **POST** /api/v1/recurring_invoices/bulk | Performs bulk actions on an array of recurring_invoices |
| [**deleteRecurringInvoice()**](RecurringInvoicesApi.md#deleteRecurringInvoice) | **DELETE** /api/v1/recurring_invoices/{id} | Deletes a RecurringInvoice |
| [**editRecurringInvoice()**](RecurringInvoicesApi.md#editRecurringInvoice) | **GET** /api/v1/recurring_invoices/{id}/edit | Shows an RecurringInvoice for editting |
| [**getRecurringInvoices()**](RecurringInvoicesApi.md#getRecurringInvoices) | **GET** /api/v1/recurring_invoices | Gets a list of recurring_invoices |
| [**getRecurringInvoicesCreate()**](RecurringInvoicesApi.md#getRecurringInvoicesCreate) | **GET** /api/v1/recurring_invoices/create | Gets a new blank RecurringInvoice object |
| [**showRecurringInvoice()**](RecurringInvoicesApi.md#showRecurringInvoice) | **GET** /api/v1/recurring_invoices/{id} | Shows an RecurringInvoice |
| [**storeRecurringInvoice()**](RecurringInvoicesApi.md#storeRecurringInvoice) | **POST** /api/v1/recurring_invoices | Adds a RecurringInvoice |
| [**updateRecurringInvoice()**](RecurringInvoicesApi.md#updateRecurringInvoice) | **PUT** /api/v1/recurring_invoices/{id} | Updates an RecurringInvoice |
| [**uploadRecurringInvoice()**](RecurringInvoicesApi.md#uploadRecurringInvoice) | **PUT** /api/v1/recurring_invoices/{id}/upload | Uploads a document to a recurring_invoice |


## `actionRecurringInvoice()`

```php
actionRecurringInvoice($x_api_token, $x_requested_with, $id, $action, $include): \IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice
```

Performs a custom action on an RecurringInvoice

Performs a custom action on an RecurringInvoice.      The current range of actions are as follows     - clone_to_RecurringInvoice     - clone_to_quote     - history     - delivery_note     - mark_paid     - download     - archive     - delete     - email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\RecurringInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The RecurringInvoice Hashed ID
$action = clone_to_quote; // string | The action string to be performed
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->actionRecurringInvoice($x_api_token, $x_requested_with, $id, $action, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringInvoicesApi->actionRecurringInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The RecurringInvoice Hashed ID | |
| **action** | **string**| The action string to be performed | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice**](../Model/RecurringInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkRecurringInvoices()`

```php
bulkRecurringInvoices($x_api_token, $x_requested_with, $request_body, $index): \IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice
```

Performs bulk actions on an array of recurring_invoices



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\RecurringInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$request_body = array(56); // int[] | Hashed IDs
$index = user; // string | Replaces the default response index from data to a user specific string

try {
    $result = $apiInstance->bulkRecurringInvoices($x_api_token, $x_requested_with, $request_body, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringInvoicesApi->bulkRecurringInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **request_body** | [**int[]**](../Model/int.md)| Hashed IDs | |
| **index** | **string**| Replaces the default response index from data to a user specific string | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice**](../Model/RecurringInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRecurringInvoice()`

```php
deleteRecurringInvoice($x_api_token, $x_requested_with, $id, $include)
```

Deletes a RecurringInvoice

Handles the deletion of an RecurringInvoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\RecurringInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The RecurringInvoice Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $apiInstance->deleteRecurringInvoice($x_api_token, $x_requested_with, $id, $include);
} catch (Exception $e) {
    echo 'Exception when calling RecurringInvoicesApi->deleteRecurringInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The RecurringInvoice Hashed ID | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

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

## `editRecurringInvoice()`

```php
editRecurringInvoice($x_api_token, $x_requested_with, $id, $include): \IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice
```

Shows an RecurringInvoice for editting

Displays an RecurringInvoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\RecurringInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The RecurringInvoice Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->editRecurringInvoice($x_api_token, $x_requested_with, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringInvoicesApi->editRecurringInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The RecurringInvoice Hashed ID | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice**](../Model/RecurringInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecurringInvoices()`

```php
getRecurringInvoices($x_api_token, $x_requested_with, $include): \IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice
```

Gets a list of recurring_invoices

Lists recurring_invoices, search and filters allow fine grained lists to be generated.          Query parameters can be added to performed more fine grained filtering of the recurring_invoices, these are handled by the RecurringInvoiceFilters class which defines the methods available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\RecurringInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->getRecurringInvoices($x_api_token, $x_requested_with, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringInvoicesApi->getRecurringInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice**](../Model/RecurringInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecurringInvoicesCreate()`

```php
getRecurringInvoicesCreate($x_api_token, $x_requested_with, $include): \IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice
```

Gets a new blank RecurringInvoice object

Returns a blank object with default values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\RecurringInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->getRecurringInvoicesCreate($x_api_token, $x_requested_with, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringInvoicesApi->getRecurringInvoicesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice**](../Model/RecurringInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showRecurringInvoice()`

```php
showRecurringInvoice($x_api_token, $x_requested_with, $id, $include): \IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice
```

Shows an RecurringInvoice

Displays an RecurringInvoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\RecurringInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The RecurringInvoice Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->showRecurringInvoice($x_api_token, $x_requested_with, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringInvoicesApi->showRecurringInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The RecurringInvoice Hashed ID | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice**](../Model/RecurringInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storeRecurringInvoice()`

```php
storeRecurringInvoice($x_api_token, $x_requested_with, $include): \IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice
```

Adds a RecurringInvoice

Adds an RecurringInvoice to the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\RecurringInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->storeRecurringInvoice($x_api_token, $x_requested_with, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringInvoicesApi->storeRecurringInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice**](../Model/RecurringInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRecurringInvoice()`

```php
updateRecurringInvoice($x_api_token, $x_requested_with, $id, $include): \IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice
```

Updates an RecurringInvoice

Handles the updating of an RecurringInvoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\RecurringInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The RecurringInvoice Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->updateRecurringInvoice($x_api_token, $x_requested_with, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringInvoicesApi->updateRecurringInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The RecurringInvoice Hashed ID | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice**](../Model/RecurringInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadRecurringInvoice()`

```php
uploadRecurringInvoice($x_api_token, $x_requested_with, $id, $include): \IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice
```

Uploads a document to a recurring_invoice

Handles the uploading of a document to a recurring_invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\RecurringInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The RecurringInvoice Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->uploadRecurringInvoice($x_api_token, $x_requested_with, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringInvoicesApi->uploadRecurringInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The RecurringInvoice Hashed ID | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\RecurringInvoice**](../Model/RecurringInvoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
