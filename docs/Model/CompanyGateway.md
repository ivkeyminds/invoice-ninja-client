# # CompanyGateway

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The hashed id of the company gateway | [optional]
**company_id** | **string** | The company hashed id | [optional]
**gateway_key** | **string** | The gateway key (hash) | [optional]
**accepted_credit_cards** | **int** | Bitmask representation of cards | [optional]
**require_billing_address** | **bool** | Determines if the the billing address is required prior to payment. | [optional]
**require_shipping_address** | **bool** | Determines if the the billing address is required prior to payment. | [optional]
**config** | **string** | The configuration map for the gateway | [optional]
**update_details** | **bool** | Determines if the client details should be updated. | [optional]
**fees_and_limits** | [**\IvkeyMinds\InvoiceNinjaClient\Model\FeesAndLimits[]**](FeesAndLimits.md) | A mapped collection of the fees and limits for the configured gateway | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
