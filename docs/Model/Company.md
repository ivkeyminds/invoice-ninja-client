# # Company

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The company hash id | [optional]
**size_id** | **string** | The company size ID | [optional]
**industry_id** | **string** | The company industry ID | [optional]
**slack_webhook_url** | **string** | The slack webhook notification URL | [optional]
**google_analytics_key** | **string** | The google analytics key | [optional]
**portal_mode** | **string** | Determines the client facing urls ie: subdomain,domain,iframe | [optional]
**subdomain** | **string** | Specifies the first part of the company domain ie acme in acme.domain.com | [optional]
**portal_domain** | **string** | The fully qualified domain for client facing URLS | [optional]
**enabled_tax_rates** | **int** | Number of taxes rates used per entity | [optional]
**fill_products** | **bool** | Toggles filling a product description based on product key | [optional]
**convert_products** | **bool** | ___________ | [optional]
**update_products** | **bool** | Toggles updating a product description which description changes | [optional]
**show_product_details** | **bool** | Toggles showing a product description which description changes | [optional]
**custom_fields** | **object** | Custom fields map | [optional]
**enable_product_cost** | **bool** | Show/Hide the product cost field in the UI | [optional]
**enable_product_quantity** | **bool** | Show/hide the product quantity field (used in the UI to show the default quantity) | [optional]
**default_quantity** | **bool** | Enable/Disable whether to use a default quantity | [optional]
**custom_surcharge_taxes1** | **bool** | Toggles charging taxes on custom surcharge amounts | [optional]
**custom_surcharge_taxes2** | **bool** | Toggles charging taxes on custom surcharge amounts | [optional]
**custom_surcharge_taxes3** | **bool** | Toggles charging taxes on custom surcharge amounts | [optional]
**custom_surcharge_taxes4** | **bool** | Toggles charging taxes on custom surcharge amounts | [optional]
**logo** | **object** | The company logo - binary | [optional]
**settings** | [**\IvkeyMinds\InvoiceNinjaClient\Model\CompanySettings**](CompanySettings.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
