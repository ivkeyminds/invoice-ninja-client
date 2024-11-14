# IvkeyMinds\InvoiceNinjaClient\DesignsApi

All URIs are relative to https://ninja.test, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkDesigns()**](DesignsApi.md#bulkDesigns) | **POST** /api/v1/designs/bulk | Performs bulk actions on an array of designs |
| [**deleteDesign()**](DesignsApi.md#deleteDesign) | **DELETE** /api/v1/designs/{id} | Deletes a design |
| [**editDesign()**](DesignsApi.md#editDesign) | **GET** /api/v1/designs/{id}/edit | Shows a design for editting |
| [**getDesigns()**](DesignsApi.md#getDesigns) | **GET** /api/v1/designs | Gets a list of designs |
| [**getDesignsCreate()**](DesignsApi.md#getDesignsCreate) | **GET** /api/v1/designs/create | Gets a new blank design object |
| [**showDesign()**](DesignsApi.md#showDesign) | **GET** /api/v1/designs/{id} | Shows a design |
| [**storeDesign()**](DesignsApi.md#storeDesign) | **POST** /api/v1/designs | Adds a design |
| [**updateDesign()**](DesignsApi.md#updateDesign) | **PUT** /api/v1/designs/{id} | Updates a design |


## `bulkDesigns()`

```php
bulkDesigns($x_api_token, $x_requested_with, $request_body, $index): \IvkeyMinds\InvoiceNinjaClient\Model\Design
```

Performs bulk actions on an array of designs



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$request_body = array(56); // int[] | User credentials
$index = user; // string | Replaces the default response index from data to a user specific string

try {
    $result = $apiInstance->bulkDesigns($x_api_token, $x_requested_with, $request_body, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->bulkDesigns: ', $e->getMessage(), PHP_EOL;
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

[**\IvkeyMinds\InvoiceNinjaClient\Model\Design**](../Model/Design.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDesign()`

```php
deleteDesign($x_api_token, $x_requested_with, $id, $include)
```

Deletes a design

Handles the deletion of a design by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Design Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $apiInstance->deleteDesign($x_api_token, $x_requested_with, $id, $include);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->deleteDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Design Hashed ID | |
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

## `editDesign()`

```php
editDesign($x_api_token, $x_requested_with, $id, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Design
```

Shows a design for editting

Displays a design by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Design Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->editDesign($x_api_token, $x_requested_with, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->editDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Design Hashed ID | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Design**](../Model/Design.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDesigns()`

```php
getDesigns($x_api_token, $x_requested_with, $include, $index): \IvkeyMinds\InvoiceNinjaClient\Model\Design
```

Gets a list of designs

Lists designs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated
$index = user; // string | Replaces the default response index from data to a user specific string

try {
    $result = $apiInstance->getDesigns($x_api_token, $x_requested_with, $include, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->getDesigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |
| **index** | **string**| Replaces the default response index from data to a user specific string | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Design**](../Model/Design.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDesignsCreate()`

```php
getDesignsCreate($x_api_token, $x_requested_with, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Design
```

Gets a new blank design object

Returns a blank object with default values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->getDesignsCreate($x_api_token, $x_requested_with, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->getDesignsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Design**](../Model/Design.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showDesign()`

```php
showDesign($x_api_token, $x_requested_with, $id, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Design
```

Shows a design

Displays a design by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Design Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->showDesign($x_api_token, $x_requested_with, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->showDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Design Hashed ID | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Design**](../Model/Design.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storeDesign()`

```php
storeDesign($x_api_token, $x_requested_with, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Design
```

Adds a design

Adds an design to a company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->storeDesign($x_api_token, $x_requested_with, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->storeDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Design**](../Model/Design.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDesign()`

```php
updateDesign($x_api_token, $x_requested_with, $id, $include): \IvkeyMinds\InvoiceNinjaClient\Model\Design
```

Updates a design

Handles the updating of a design by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\DesignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$id = D2J234DFA; // string | The Design Hashed ID
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated

try {
    $result = $apiInstance->updateDesign($x_api_token, $x_requested_with, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesignsApi->updateDesign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_token** | **string**| The API token to be used for authentication | |
| **x_requested_with** | **string**| Used to send the XMLHttpRequest header | |
| **id** | **string**| The Design Hashed ID | |
| **include** | **string**| Includes child relationships in the response, format is comma separated | [optional] |

### Return type

[**\IvkeyMinds\InvoiceNinjaClient\Model\Design**](../Model/Design.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
