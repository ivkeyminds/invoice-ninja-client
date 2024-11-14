# IvkeyMinds\InvoiceNinjaClient\ExpenseCategoriesApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkExpenseCategorys()**](ExpenseCategoriesApi.md#bulkExpenseCategorys) | **POST** /api/v1/expense_categories/bulk | Performs bulk actions on an array of ExpenseCategorys |
| [**deleteExpenseCategory()**](ExpenseCategoriesApi.md#deleteExpenseCategory) | **DELETE** /api/v1/expense_categories/{id} | Deletes a ExpenseCategory |
| [**editExpenseCategory()**](ExpenseCategoriesApi.md#editExpenseCategory) | **GET** /api/v1/expense_categories/{id}/edit | Shows a Expens Category for editting |
| [**getExpenseCategoryCreate()**](ExpenseCategoriesApi.md#getExpenseCategoryCreate) | **GET** /api/v1/expense_categories/create | Gets a new blank Expens Category object |
| [**getExpenseCategorys()**](ExpenseCategoriesApi.md#getExpenseCategorys) | **GET** /api/v1/expense_categories | Gets a list of expense_categories |
| [**showExpenseCategory()**](ExpenseCategoriesApi.md#showExpenseCategory) | **GET** /api/v1/expense_categories/{id} | Shows a Expens Category |
| [**storeExpenseCategory()**](ExpenseCategoriesApi.md#storeExpenseCategory) | **POST** /api/v1/expense_categories | Adds a expense category |
| [**updateExpenseCategory()**](ExpenseCategoriesApi.md#updateExpenseCategory) | **PUT** /api/v1/expense_categories/{id} | Updates a tax rate |


## `bulkExpenseCategorys()`

```php
bulkExpenseCategorys($x_api_token, $x_requested_with, $request_body, $index): \IvkeyMinds\InvoiceNinjaClient\Model\Webhook
```

Performs bulk actions on an array of ExpenseCategorys



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ExpenseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$request_body = array(56); // int[] | Expens Categorys
$index = user; // string | Replaces the default response index from data to a user specific string

try {
    $result = $apiInstance->bulkExpenseCategorys($x_api_token, $x_requested_with, $request_body, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseCategoriesApi->bulkExpenseCategorys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **request_body** | [**int[]**](../Model/int.md)| Expens Categorys | |
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

## `deleteExpenseCategory()`

```php
deleteExpenseCategory($x_api_token, $x_requested_with, $id)
```

Deletes a ExpenseCategory

Handles the deletion of an ExpenseCategory by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ExpenseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The ExpenseCategory Hashed ID

try {
    $apiInstance->deleteExpenseCategory($x_api_token, $x_requested_with, $id);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseCategoriesApi->deleteExpenseCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The ExpenseCategory Hashed ID | |

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

## `editExpenseCategory()`

```php
editExpenseCategory($x_api_token, $x_requested_with, $id): \IvkeyMinds\InvoiceNinjaClient\Model\ExpenseCategory
```

Shows a Expens Category for editting

Displays a Expens Category by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ExpenseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The ExpenseCategory Hashed ID

try {
    $result = $apiInstance->editExpenseCategory($x_api_token, $x_requested_with, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseCategoriesApi->editExpenseCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The ExpenseCategory Hashed ID | |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\ExpenseCategory**](../Model/ExpenseCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExpenseCategoryCreate()`

```php
getExpenseCategoryCreate($x_api_token, $x_requested_with): \IvkeyMinds\InvoiceNinjaClient\Model\ExpenseCategory
```

Gets a new blank Expens Category object

Returns a blank object with default values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ExpenseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header

try {
    $result = $apiInstance->getExpenseCategoryCreate($x_api_token, $x_requested_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseCategoriesApi->getExpenseCategoryCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\ExpenseCategory**](../Model/ExpenseCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExpenseCategorys()`

```php
getExpenseCategorys($index): \IvkeyMinds\InvoiceNinjaClient\Model\ExpenseCategory
```

Gets a list of expense_categories

Lists tax rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ExpenseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index = user; // string | Replaces the default response index from data to a user specific string

try {
    $result = $apiInstance->getExpenseCategorys($index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseCategoriesApi->getExpenseCategorys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **string**| Replaces the default response index from data to a user specific string | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\ExpenseCategory**](../Model/ExpenseCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showExpenseCategory()`

```php
showExpenseCategory($x_api_token, $x_requested_with, $id): \IvkeyMinds\InvoiceNinjaClient\Model\ExpenseCategory
```

Shows a Expens Category

Displays an ExpenseCategory by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ExpenseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The ExpenseCategory Hashed ID

try {
    $result = $apiInstance->showExpenseCategory($x_api_token, $x_requested_with, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseCategoriesApi->showExpenseCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The ExpenseCategory Hashed ID | |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\ExpenseCategory**](../Model/ExpenseCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storeExpenseCategory()`

```php
storeExpenseCategory($x_api_token, $x_requested_with, $include): \IvkeyMinds\InvoiceNinjaClient\Model\ExpenseCategory
```

Adds a expense category

Adds an expense category to the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ExpenseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->storeExpenseCategory($x_api_token, $x_requested_with, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseCategoriesApi->storeExpenseCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\ExpenseCategory**](../Model/ExpenseCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExpenseCategory()`

```php
updateExpenseCategory($x_api_token, $x_requested_with, $id): \IvkeyMinds\InvoiceNinjaClient\Model\ExpenseCategory
```

Updates a tax rate

Handles the updating of a tax rate by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ExpenseCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The ExpenseCategory Hashed ID

try {
    $result = $apiInstance->updateExpenseCategory($x_api_token, $x_requested_with, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseCategoriesApi->updateExpenseCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The ExpenseCategory Hashed ID | |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\ExpenseCategory**](../Model/ExpenseCategory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
