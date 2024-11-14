# # Payment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The payment hashed id | [optional]
**client_id** | **string** | The client hashed id | [optional]
**invitation_id** | **string** | The invitation hashed id | [optional]
**client_contact_id** | **string** | The client contact hashed id | [optional]
**user_id** | **string** | The user hashed id | [optional]
**type_id** | **string** | The Payment Type ID | [optional]
**date** | **string** | The Payment date | [optional]
**transaction_reference** | **string** | The transaction reference as defined by the payment gateway | [optional]
**assigned_user_id** | **string** | The assigned user hashed id | [optional]
**private_notes** | **string** | The private notes of the payment | [optional]
**is_manual** | **bool** | Flags whether the payment was made manually or processed via a gateway | [optional]
**is_deleted** | **bool** | Defines if the payment has been deleted | [optional]
**amount** | **float** | The amount of this payment | [optional]
**refunded** | **float** | The refunded amount of this payment | [optional]
**updated_at** | **float** | Timestamp | [optional]
**archived_at** | **float** | Timestamp | [optional]
**company_gateway_id** | **string** | The company gateway id | [optional]
**paymentables** | [**\IvkeyMinds\InvoiceNinjaClient\Model\Paymentable**](Paymentable.md) |  | [optional]
**invoices** | [**\IvkeyMinds\InvoiceNinjaClient\Model\InvoicePaymentable[]**](InvoicePaymentable.md) |  | [optional]
**credits** | [**\IvkeyMinds\InvoiceNinjaClient\Model\CreditPaymentable[]**](CreditPaymentable.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
