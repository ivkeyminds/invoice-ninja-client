# # BankTransactionRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The bank transaction rules hashed id | [optional]
**company_id** | **string** | The company hashed id | [optional]
**user_id** | **string** | The user hashed id | [optional]
**name** | **string** | The name of the transaction | [optional]
**rules** | [**\IvkeyMinds\InvoiceNinjaClient\Model\BTRules[]**](BTRules.md) | A mapped collection of the sub rules for the BankTransactionRule | [optional]
**auto_convert** | **bool** | Flags whether the rule converts the transaction automatically | [optional]
**matches_on_all** | **bool** | Flags whether all subrules are required for the match | [optional]
**applies_to** | **string** | Flags whether the rule applies to a CREDIT or DEBIT | [optional]
**client_id** | **string** | The client hashed id | [optional]
**vendor_id** | **string** | The vendor hashed id | [optional]
**category_id** | **string** | The category hashed id | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
