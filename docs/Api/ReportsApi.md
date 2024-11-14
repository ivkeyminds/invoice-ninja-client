# IvkeyMinds\InvoiceNinjaClient\ReportsApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getClientReport()**](ReportsApi.md#getClientReport) | **POST** /api/v1/reports/clients | Client reports |
| [**getContactReport()**](ReportsApi.md#getContactReport) | **POST** /api/v1/reports/contacts | Contact reports |
| [**getCreditReport()**](ReportsApi.md#getCreditReport) | **POST** /api/v1/reports/credit | Credit reports |
| [**getDocumentReport()**](ReportsApi.md#getDocumentReport) | **POST** /api/v1/reports/documents | Document reports |
| [**getExpenseReport()**](ReportsApi.md#getExpenseReport) | **POST** /api/v1/reports/expense | Expense reports |
| [**getInvoiceItemReport()**](ReportsApi.md#getInvoiceItemReport) | **POST** /api/v1/reports/invoice_items | Invoice item reports |
| [**getInvoiceReport()**](ReportsApi.md#getInvoiceReport) | **POST** /api/v1/reports/invoices | Invoice reports |
| [**getPaymentReport()**](ReportsApi.md#getPaymentReport) | **POST** /api/v1/reports/payments | Payment reports |
| [**getProductReport()**](ReportsApi.md#getProductReport) | **POST** /api/v1/reports/products | Product reports |
| [**getProductSalesReport()**](ReportsApi.md#getProductSalesReport) | **POST** /api/v1/reports/product_sales | Product Salesreports |
| [**getProfitLossReport()**](ReportsApi.md#getProfitLossReport) | **POST** /api/v1/reports/profitloss | Profit loss reports |
| [**getQuoteItemReport()**](ReportsApi.md#getQuoteItemReport) | **POST** /api/v1/reports/quote_items | Quote item reports |
| [**getQuoteReport()**](ReportsApi.md#getQuoteReport) | **POST** /api/v1/reports/quotes | Quote reports |
| [**getRecurringInvoiceReport()**](ReportsApi.md#getRecurringInvoiceReport) | **POST** /api/v1/reports/recurring_invoices | Recurring Invoice reports |
| [**getTaskReport()**](ReportsApi.md#getTaskReport) | **POST** /api/v1/reports/tasks | Task reports |


## `getClientReport()`

```php
getClientReport($x_requested_with, $generic_report_schema)
```

Client reports

Export client reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getClientReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getClientReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getContactReport()`

```php
getContactReport($x_requested_with, $generic_report_schema)
```

Contact reports

Export contact reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getContactReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getContactReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getCreditReport()`

```php
getCreditReport($x_requested_with, $generic_report_schema)
```

Credit reports

Export credit reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getCreditReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getCreditReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getDocumentReport()`

```php
getDocumentReport($x_requested_with, $generic_report_schema)
```

Document reports

Export document reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getDocumentReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getDocumentReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getExpenseReport()`

```php
getExpenseReport($x_requested_with, $generic_report_schema)
```

Expense reports

Export expense reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getExpenseReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getExpenseReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getInvoiceItemReport()`

```php
getInvoiceItemReport($x_requested_with, $generic_report_schema)
```

Invoice item reports

Export invoice item reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getInvoiceItemReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getInvoiceItemReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getInvoiceReport()`

```php
getInvoiceReport($x_requested_with, $generic_report_schema)
```

Invoice reports

Export invoice reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getInvoiceReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getInvoiceReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getPaymentReport()`

```php
getPaymentReport($x_requested_with, $generic_report_schema)
```

Payment reports

Export payment reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getPaymentReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getPaymentReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getProductReport()`

```php
getProductReport($x_requested_with, $generic_report_schema)
```

Product reports

Export product reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getProductReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getProductReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getProductSalesReport()`

```php
getProductSalesReport($x_requested_with, $generic_report_schema)
```

Product Salesreports

Export product sales reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getProductSalesReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getProductSalesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getProfitLossReport()`

```php
getProfitLossReport($x_requested_with, $generic_report_schema)
```

Profit loss reports

Profit loss report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getProfitLossReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getProfitLossReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getQuoteItemReport()`

```php
getQuoteItemReport($x_requested_with, $generic_report_schema)
```

Quote item reports

Export Quote item reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getQuoteItemReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getQuoteItemReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getQuoteReport()`

```php
getQuoteReport($x_requested_with, $generic_report_schema)
```

Quote reports

Export quote reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getQuoteReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getQuoteReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getRecurringInvoiceReport()`

```php
getRecurringInvoiceReport($x_requested_with, $generic_report_schema)
```

Recurring Invoice reports

Export recurring invoice reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getRecurringInvoiceReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getRecurringInvoiceReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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

## `getTaskReport()`

```php
getTaskReport($x_requested_with, $generic_report_schema)
```

Task reports

Export task reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$generic_report_schema = new \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema(); // \IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema

try {
    $apiInstance->getTaskReport($x_requested_with, $generic_report_schema);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getTaskReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **generic_report_schema** | [**\IvkeyMinds\InvoiceNinjaClient\Model\GenericReportSchema**](../Model/GenericReportSchema.md)|  | |

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
