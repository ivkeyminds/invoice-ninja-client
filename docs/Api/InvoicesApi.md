# IvkeyMinds\InvoiceNinjaClient\InvoicesApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionInvoice()**](InvoicesApi.md#actionInvoice) | **GET** /api/v1/invoices/{id}/{action} | Performs a custom action on an invoice |
| [**bulkInvoices()**](InvoicesApi.md#bulkInvoices) | **POST** /api/v1/invoices/bulk | Performs bulk actions on an array of invoices |
| [**deleteInvoice()**](InvoicesApi.md#deleteInvoice) | **DELETE** /api/v1/invoices/{id} | Deletes a invoice |
| [**deliveryNote()**](InvoicesApi.md#deliveryNote) | **GET** /api/v1/invoices/{id}/delivery_note | Download a specific invoice delivery notes |
| [**downloadInvoice()**](InvoicesApi.md#downloadInvoice) | **GET** /api/v1/invoice/{invitation_key}/download | Download a specific invoice by invitation key |
| [**downloadRecurringInvoice()**](InvoicesApi.md#downloadRecurringInvoice) | **GET** /api/v1/recurring_invoice/{invitation_key}/download | Download a specific invoice by invitation key |
| [**editInvoice()**](InvoicesApi.md#editInvoice) | **GET** /api/v1/invoices/{id}/edit | Shows an invoice for editting |
| [**getInvoices()**](InvoicesApi.md#getInvoices) | **GET** /api/v1/invoices | Gets a list of invoices |
| [**getInvoicesCreate()**](InvoicesApi.md#getInvoicesCreate) | **GET** /api/v1/invoices/create | Gets a new blank invoice object |
| [**showInvoice()**](InvoicesApi.md#showInvoice) | **GET** /api/v1/invoices/{id} | Shows an invoice |
| [**storeInvoice()**](InvoicesApi.md#storeInvoice) | **POST** /api/v1/invoices | Adds a invoice |
| [**updateInvoice()**](InvoicesApi.md#updateInvoice) | **PUT** /api/v1/invoices/{id} | Updates an invoice |
| [**uploadInvoice()**](InvoicesApi.md#uploadInvoice) | **PUT** /api/v1/invoices/{id}/upload | Uploads a document to a invoice |


## `actionInvoice()`

```php
actionInvoice($x_api_token, $x_requested_with, $id, $action, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Invoice
```

Performs a custom action on an invoice

Performs a custom action on an invoice.      *      *        The current range of actions are as follows      *        - clone_to_invoice      *        - clone_to_quote      *        - history      *        - delivery_note      *        - mark_paid      *        - download      *        - archive      *        - delete      *        - email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Invoice Hashed ID
$action = clone_to_quote; // string | The action string to be performed
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->actionInvoice($x_api_token, $x_requested_with, $id, $action, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->actionInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Invoice Hashed ID | |
| **action** | **string**| The action string to be performed | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkInvoices()`

```php
bulkInvoices($x_api_token, $x_requested_with, $request_body, $index)
```

Performs bulk actions on an array of invoices



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$request_body = array(56); // int[] | User credentials
$index = user; // string | Replaces the default response index from data to a user specific string

try {
    $apiInstance->bulkInvoices($x_api_token, $x_requested_with, $request_body, $index);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->bulkInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **request_body** | [**int[]**](../Model/int.md)| User credentials | |
| **index** | **string**| Replaces the default response index from data to a user specific string | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInvoice()`

```php
deleteInvoice($x_api_token, $x_requested_with, $id, $include)
```

Deletes a invoice

Handles the deletion of an invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Invoice Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $apiInstance->deleteInvoice($x_api_token, $x_requested_with, $id, $include);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->deleteInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Invoice Hashed ID | |
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

## `deliveryNote()`

```php
deliveryNote($x_api_token, $x_requested_with, $id, $include)
```

Download a specific invoice delivery notes

Downloads a specific invoice delivery notes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Invoice Hahsed Id
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $apiInstance->deliveryNote($x_api_token, $x_requested_with, $id, $include);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->deliveryNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Invoice Hahsed Id | |
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

## `downloadInvoice()`

```php
downloadInvoice($x_api_token, $x_requested_with, $invitation_key, $include)
```

Download a specific invoice by invitation key

Downloads a specific invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$invitation_key = D2J234DFA; // string | The Invoice Invitation Key
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $apiInstance->downloadInvoice($x_api_token, $x_requested_with, $invitation_key, $include);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->downloadInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **invitation_key** | **string**| The Invoice Invitation Key | |
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

## `downloadRecurringInvoice()`

```php
downloadRecurringInvoice($x_api_token, $x_requested_with, $invitation_key, $include)
```

Download a specific invoice by invitation key

Downloads a specific invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$invitation_key = D2J234DFA; // string | The Recurring Invoice Invitation Key
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $apiInstance->downloadRecurringInvoice($x_api_token, $x_requested_with, $invitation_key, $include);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->downloadRecurringInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **invitation_key** | **string**| The Recurring Invoice Invitation Key | |
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

## `editInvoice()`

```php
editInvoice($x_api_token, $x_requested_with, $id, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Invoice
```

Shows an invoice for editting

Displays an invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Invoice Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->editInvoice($x_api_token, $x_requested_with, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->editInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Invoice Hashed ID | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoices()`

```php
getInvoices($x_api_token, $x_requested_with, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Invoice
```

Gets a list of invoices

Lists invoices, search and filters allow fine grained lists to be generated.      *      *  Query parameters can be added to performed more fine grained filtering of the invoices, these are handled by the InvoiceFilters class which defines the methods available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->getInvoices($x_api_token, $x_requested_with, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoicesCreate()`

```php
getInvoicesCreate($x_api_token, $x_requested_with, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Invoice
```

Gets a new blank invoice object

Returns a blank object with default values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->getInvoicesCreate($x_api_token, $x_requested_with, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoicesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showInvoice()`

```php
showInvoice($x_api_token, $x_requested_with, $id, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Invoice
```

Shows an invoice

Displays an invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Invoice Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->showInvoice($x_api_token, $x_requested_with, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->showInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Invoice Hashed ID | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storeInvoice()`

```php
storeInvoice($x_api_token, $x_requested_with, $fillable_invoice, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Invoice
```

Adds a invoice

Adds an invoice to the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$fillable_invoice = new \IvkeyMinds\InvoiceNinjaClient\Model\FillableInvoice(); // \IvkeyMinds\InvoiceNinjaClient\Model\FillableInvoice
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->storeInvoice($x_api_token, $x_requested_with, $fillable_invoice, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->storeInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **fillable_invoice** | [**\IvkeyMinds\InvoiceNinjaClient\Model\FillableInvoice**](../Model/FillableInvoice.md)|  | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoice()`

```php
updateInvoice($x_api_token, $x_requested_with, $id, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Invoice
```

Updates an invoice

Handles the updating of an invoice by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Invoice Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->updateInvoice($x_api_token, $x_requested_with, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Invoice Hashed ID | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadInvoice()`

```php
uploadInvoice($x_api_token, $x_requested_with, $id, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Invoice
```

Uploads a document to a invoice

Handles the uploading of a document to a invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Invoice Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->uploadInvoice($x_api_token, $x_requested_with, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->uploadInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Invoice Hashed ID | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
