# # CompanyUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**permissions** | **string** | The company user permissions | [optional]
**settings** | **object** | The company name | [optional]
**is_owner** | **bool** | Determines whether the user owns this company | [optional]
**is_admin** | **bool** | Determines whether the user is the admin of this company | [optional]
**is_locked** | **bool** | Determines whether the users access to this company has been locked | [optional]
**updated_at** | **int** | The last time the record was modified | [optional]
**deleted_at** | **int** | Timestamp when the user was archived | [optional]
**account** | [**\IvkeyMinds\InvoiceNinjaClient\Model\Account**](Account.md) |  | [optional]
**company** | [**\IvkeyMinds\InvoiceNinjaClient\Model\Company**](Company.md) |  | [optional]
**user** | [**\IvkeyMinds\InvoiceNinjaClient\Model\User**](User.md) |  | [optional]
**token** | [**\IvkeyMinds\InvoiceNinjaClient\Model\CompanyToken**](CompanyToken.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
