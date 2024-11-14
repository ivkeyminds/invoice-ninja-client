# IvkeyMinds\InvoiceNinjaClient\TaskSchedulersApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkTaskSchedulerActions()**](TaskSchedulersApi.md#bulkTaskSchedulerActions) | **POST** /api/v1/task_schedulers/bulk | Performs bulk actions on an array of task_schedulers |
| [**createTaskScheduler()**](TaskSchedulersApi.md#createTaskScheduler) | **POST** /api/v1/task_schedulers/ | Create task scheduler with job |
| [**destroyTaskScheduler()**](TaskSchedulersApi.md#destroyTaskScheduler) | **DELETE** /api/v1/task_schedulers/{id} | Destroy Task Scheduler |
| [**getTaskScheduler()**](TaskSchedulersApi.md#getTaskScheduler) | **GET** /api/v1/invoices/task_schedulers | Gets a new blank scheduler object |
| [**getTaskSchedulers()**](TaskSchedulersApi.md#getTaskSchedulers) | **GET** /api/v1/task_schedulers/ | Task Scheduler Index |
| [**showTaskScheduler()**](TaskSchedulersApi.md#showTaskScheduler) | **GET** /api/v1/task_schedulers/{id} | Show given scheduler |
| [**updateTaskScheduler()**](TaskSchedulersApi.md#updateTaskScheduler) | **PUT** /api/v1/task_schedulers/{id} | Update task scheduler |


## `bulkTaskSchedulerActions()`

```php
bulkTaskSchedulerActions($x_api_token, $x_requested_with, $request_body, $index): \IvkeyMinds\InvoiceNinjaClient\Model\TaskSchedulerSchema
```

Performs bulk actions on an array of task_schedulers



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaskSchedulersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$request_body = array(56); // int[] | array of ids
$index = user; // string | Replaces the default response index from data to a user specific string

try {
    $result = $apiInstance->bulkTaskSchedulerActions($x_api_token, $x_requested_with, $request_body, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskSchedulersApi->bulkTaskSchedulerActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **request_body** | [**int[]**](../Model/int.md)| array of ids | |
| **index** | **string**| Replaces the default response index from data to a user specific string | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\TaskSchedulerSchema**](../Model/TaskSchedulerSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTaskScheduler()`

```php
createTaskScheduler($x_api_secret, $x_requested_with, $task_scheduler_schema)
```

Create task scheduler with job

Create task scheduler with a job (action(job) request should be sent via request also. Example: We want client report to be job which will be run      * multiple times, we should send the same parameters in the request as we would send if we wanted to get report, see example

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaskSchedulersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_secret = password; // string | The API secret as defined by the .env variable API_SECRET
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$task_scheduler_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\TaskSchedulerSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\TaskSchedulerSchema

try {
    $apiInstance->createTaskScheduler($x_api_secret, $x_requested_with, $task_scheduler_schema);
} catch (Exception $e) {
    echo 'Exception when calling TaskSchedulersApi->createTaskScheduler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_secret** | **string**| The API secret as defined by the .env variable API_SECRET | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **task_scheduler_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\TaskSchedulerSchema**](../Model/TaskSchedulerSchema.md)|  | |

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

## `destroyTaskScheduler()`

```php
destroyTaskScheduler($x_requested_with, $id)
```

Destroy Task Scheduler

Destroy task scheduler and its associated job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaskSchedulersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Scheduler Hashed ID

try {
    $apiInstance->destroyTaskScheduler($x_requested_with, $id);
} catch (Exception $e) {
    echo 'Exception when calling TaskSchedulersApi->destroyTaskScheduler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Scheduler Hashed ID | |

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

## `getTaskScheduler()`

```php
getTaskScheduler($x_api_token, $x_requested_with, $include): \IvkeyMinds\InvoiceNinjaClient\Model\TaskSchedulerSchema
```

Gets a new blank scheduler object

Returns a blank object with default values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaskSchedulersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->getTaskScheduler($x_api_token, $x_requested_with, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskSchedulersApi->getTaskScheduler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\TaskSchedulerSchema**](../Model/TaskSchedulerSchema.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskSchedulers()`

```php
getTaskSchedulers($x_requested_with)
```

Task Scheduler Index

Get all schedulers with associated jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaskSchedulersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header

try {
    $apiInstance->getTaskSchedulers($x_requested_with);
} catch (Exception $e) {
    echo 'Exception when calling TaskSchedulersApi->getTaskSchedulers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |

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

## `showTaskScheduler()`

```php
showTaskScheduler($x_requested_with, $id)
```

Show given scheduler

Get scheduler with associated job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaskSchedulersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Scheduler Hashed ID

try {
    $apiInstance->showTaskScheduler($x_requested_with, $id);
} catch (Exception $e) {
    echo 'Exception when calling TaskSchedulersApi->showTaskScheduler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Scheduler Hashed ID | |

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

## `updateTaskScheduler()`

```php
updateTaskScheduler($x_api_secret, $x_requested_with, $id, $task_scheduler_schema)
```

Update task scheduler

Update task scheduler

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\TaskSchedulersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_secret = password; // string | The API secret as defined by the .env variable API_SECRET
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Scheduler Hashed ID
$task_scheduler_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\TaskSchedulerSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\TaskSchedulerSchema

try {
    $apiInstance->updateTaskScheduler($x_api_secret, $x_requested_with, $id, $task_scheduler_schema);
} catch (Exception $e) {
    echo 'Exception when calling TaskSchedulersApi->updateTaskScheduler: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_secret** | **string**| The API secret as defined by the .env variable API_SECRET | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Scheduler Hashed ID | |
| **task_scheduler_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\TaskSchedulerSchema**](../Model/TaskSchedulerSchema.md)|  | |

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
