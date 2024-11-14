# OpenAPIClient-php

Invoice Ninja. Open Source Invoicing lives here. 


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new IvkeyMinds\InvoiceNinjaClient\Api\ActvitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_token = HcRvs0oCvYbY5g3RzgBZrSBOChCiq8u4AL0ieuFN5gn4wUV14t0clVhfPc5OX99q; // string | The API token to be used for authentication
$x_requested_with = XMLHttpRequest; // string | Used to send the XMLHttpRequest header
$include = clients,invoices; // string | Includes child relationships in the response, format is comma separated
$index = user; // string | Replaces the default response index from data to a user specific string
$rows = 50; // float | The number of activities to return

try {
    $result = $apiInstance->getActivities($x_api_token, $x_requested_with, $include, $index, $rows);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActvitiesApi->getActivities: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://ninja.test*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActvitiesApi* | [**getActivities**](docs/Api/ActvitiesApi.md#getactivities) | **GET** /api/v1/activities | Gets a list of actvities
*ActvitiesApi* | [**getActivityHistoricalEntityPdf**](docs/Api/ActvitiesApi.md#getactivityhistoricalentitypdf) | **GET** /api/v1/actvities/download_entity/{activity_id} | Gets a PDF for the given activity
*BankIntegrationsApi* | [**bulkBankIntegrations**](docs/Api/BankIntegrationsApi.md#bulkbankintegrations) | **POST** /api/v1/bank_integrations/bulk | Performs bulk actions on an array of bank_integrations
*BankIntegrationsApi* | [**deleteBankIntegration**](docs/Api/BankIntegrationsApi.md#deletebankintegration) | **DELETE** /api/v1/bank_integrations/{id} | Deletes a bank_integration
*BankIntegrationsApi* | [**editBankIntegration**](docs/Api/BankIntegrationsApi.md#editbankintegration) | **GET** /api/v1/bank_integrations/{id}/edit | Shows a bank_integration for editing
*BankIntegrationsApi* | [**getAccountTransactions**](docs/Api/BankIntegrationsApi.md#getaccounttransactions) | **POST** /api/v1/bank_integrations/get_transactions/account_id | Retrieve transactions for a account
*BankIntegrationsApi* | [**getBankIntegrations**](docs/Api/BankIntegrationsApi.md#getbankintegrations) | **GET** /api/v1/bank_integrations | Gets a list of bank_integrations
*BankIntegrationsApi* | [**getBankIntegrationsCreate**](docs/Api/BankIntegrationsApi.md#getbankintegrationscreate) | **GET** /api/v1/bank_integrations/create | Gets a new blank bank_integration object
*BankIntegrationsApi* | [**getRefreshAccounts**](docs/Api/BankIntegrationsApi.md#getrefreshaccounts) | **POST** /api/v1/bank_integrations/refresh_accounts | Gets the list of accounts from the remote server
*BankIntegrationsApi* | [**getRemoveAccount**](docs/Api/BankIntegrationsApi.md#getremoveaccount) | **POST** /api/v1/bank_integrations/remove_account/account_id | Removes an account from the integration
*BankIntegrationsApi* | [**showBankIntegration**](docs/Api/BankIntegrationsApi.md#showbankintegration) | **GET** /api/v1/bank_integrations/{id} | Shows a bank_integration
*BankIntegrationsApi* | [**storeBankIntegration**](docs/Api/BankIntegrationsApi.md#storebankintegration) | **POST** /api/v1/bank_integrations | Adds a bank_integration
*BankIntegrationsApi* | [**updateBankIntegration**](docs/Api/BankIntegrationsApi.md#updatebankintegration) | **PUT** /api/v1/bank_integrations/{id} | Updates a bank_integration
*BankTransactionRulesApi* | [**bulkBankTransactionRules**](docs/Api/BankTransactionRulesApi.md#bulkbanktransactionrules) | **POST** /api/v1/bank_transation_rules/bulk | Performs bulk actions on an array of bank_transation rules
*BankTransactionRulesApi* | [**deleteBankTransactionRule**](docs/Api/BankTransactionRulesApi.md#deletebanktransactionrule) | **DELETE** /api/v1/bank_transaction_rules/{id} | Deletes a bank_transaction rule
*BankTransactionRulesApi* | [**editBankTransactionRule**](docs/Api/BankTransactionRulesApi.md#editbanktransactionrule) | **GET** /api/v1/bank_transaction_rules/{id}/edit | Shows a bank_transaction for editing
*BankTransactionRulesApi* | [**getBankTransactionRules**](docs/Api/BankTransactionRulesApi.md#getbanktransactionrules) | **GET** /api/v1/bank_transaction_rules | Gets a list of bank_transaction_rules
*BankTransactionRulesApi* | [**getBankTransactionRulesCreate**](docs/Api/BankTransactionRulesApi.md#getbanktransactionrulescreate) | **GET** /api/v1/bank_transaction_rules/create | Gets a new blank bank_transaction rule object
*BankTransactionRulesApi* | [**showBankTransactionRule**](docs/Api/BankTransactionRulesApi.md#showbanktransactionrule) | **GET** /api/v1/bank_transaction_rules/{id} | Shows a bank_transaction
*BankTransactionRulesApi* | [**storeBankTransactionRule**](docs/Api/BankTransactionRulesApi.md#storebanktransactionrule) | **POST** /api/v1/bank_transaction_rules | Adds a bank_transaction rule
*BankTransactionRulesApi* | [**updateBankTransactionRule**](docs/Api/BankTransactionRulesApi.md#updatebanktransactionrule) | **PUT** /api/v1/bank_transaction_rules/{id} | Updates a bank_transaction Rule
*BankTransactionsApi* | [**bulkBankTransactions**](docs/Api/BankTransactionsApi.md#bulkbanktransactions) | **POST** /api/v1/bank_transations/bulk | Performs bulk actions on an array of bank_transations
*BankTransactionsApi* | [**deleteBankTransaction**](docs/Api/BankTransactionsApi.md#deletebanktransaction) | **DELETE** /api/v1/bank_transactions/{id} | Deletes a bank_transaction
*BankTransactionsApi* | [**editBankTransaction**](docs/Api/BankTransactionsApi.md#editbanktransaction) | **GET** /api/v1/bank_transactions/{id}/edit | Shows a bank_transaction for editing
*BankTransactionsApi* | [**getBankTransactions**](docs/Api/BankTransactionsApi.md#getbanktransactions) | **GET** /api/v1/bank_transactions | Gets a list of bank_transactions
*BankTransactionsApi* | [**getBankTransactionsCreate**](docs/Api/BankTransactionsApi.md#getbanktransactionscreate) | **GET** /api/v1/bank_transactions/create | Gets a new blank bank_transaction object
*BankTransactionsApi* | [**matchBankTransactions**](docs/Api/BankTransactionsApi.md#matchbanktransactions) | **POST** /api/v1/bank_transations/match | Performs match actions on an array of bank_transactions
*BankTransactionsApi* | [**showBankTransaction**](docs/Api/BankTransactionsApi.md#showbanktransaction) | **GET** /api/v1/bank_transactions/{id} | Shows a bank_transaction
*BankTransactionsApi* | [**storeBankTransaction**](docs/Api/BankTransactionsApi.md#storebanktransaction) | **POST** /api/v1/bank_transactions | Adds a bank_transaction
*BankTransactionsApi* | [**updateBankTransaction**](docs/Api/BankTransactionsApi.md#updatebanktransaction) | **PUT** /api/v1/bank_transactions/{id} | Updates a bank_transaction
*ChartsApi* | [**getChartTotals**](docs/Api/ChartsApi.md#getcharttotals) | **POST** /api/v1/charts/totals | Get chart data
*ClaimLicenseApi* | [**getClaimLicense**](docs/Api/ClaimLicenseApi.md#getclaimlicense) | **GET** /api/v1/claim_license | Attempts to claim a white label license
*ClientGatewayTokensApi* | [**deleteClientGatewayToken**](docs/Api/ClientGatewayTokensApi.md#deleteclientgatewaytoken) | **DELETE** /api/v1/client_gateway_tokens/{id} | Deletes a client
*ClientGatewayTokensApi* | [**editClientGatewayToken**](docs/Api/ClientGatewayTokensApi.md#editclientgatewaytoken) | **GET** /api/v1/client_gateway_tokens/{id}/edit | Shows a client for editting
*ClientGatewayTokensApi* | [**getClientGatewayTokens**](docs/Api/ClientGatewayTokensApi.md#getclientgatewaytokens) | **GET** /api/v1/client_gateway_tokens | Gets a list of client_gateway_tokens
*ClientGatewayTokensApi* | [**getClientGatewayTokensCreate**](docs/Api/ClientGatewayTokensApi.md#getclientgatewaytokenscreate) | **GET** /api/v1/client_gateway_tokens/create | Gets a new blank client object
*ClientGatewayTokensApi* | [**showClientGatewayToken**](docs/Api/ClientGatewayTokensApi.md#showclientgatewaytoken) | **GET** /api/v1/client_gateway_tokens/{id} | Shows a client
*ClientGatewayTokensApi* | [**storeClientGatewayToken**](docs/Api/ClientGatewayTokensApi.md#storeclientgatewaytoken) | **POST** /api/v1/client_gateway_tokens | Adds a client
*ClientGatewayTokensApi* | [**updateClientGatewayToken**](docs/Api/ClientGatewayTokensApi.md#updateclientgatewaytoken) | **PUT** /api/v1/client_gateway_tokens/{id} | Updates a client
*ClientsApi* | [**bulkClients**](docs/Api/ClientsApi.md#bulkclients) | **POST** /api/v1/clients/bulk | Performs bulk actions on an array of clients
*ClientsApi* | [**clientStatement**](docs/Api/ClientsApi.md#clientstatement) | **POST** /api/v1/client_statement | Return a PDF of the client statement
*ClientsApi* | [**deleteClient**](docs/Api/ClientsApi.md#deleteclient) | **DELETE** /api/v1/clients/{id} | Deletes a client
*ClientsApi* | [**editClient**](docs/Api/ClientsApi.md#editclient) | **GET** /api/v1/clients/{id}/edit | Shows a client for editting
*ClientsApi* | [**getClients**](docs/Api/ClientsApi.md#getclients) | **GET** /api/v1/clients | Gets a list of clients
*ClientsApi* | [**getClientsCreate**](docs/Api/ClientsApi.md#getclientscreate) | **GET** /api/v1/clients/create | Gets a new blank client object
*ClientsApi* | [**mergeClient**](docs/Api/ClientsApi.md#mergeclient) | **POST** /api/v1/clients/{id}/{mergeable_client_hashed_id}/merge | Merges two clients
*ClientsApi* | [**purgeClient**](docs/Api/ClientsApi.md#purgeclient) | **POST** /api/v1/clients/{id}/purge | Purges a client from the system
*ClientsApi* | [**showClient**](docs/Api/ClientsApi.md#showclient) | **GET** /api/v1/clients/{id} | Shows a client
*ClientsApi* | [**storeClient**](docs/Api/ClientsApi.md#storeclient) | **POST** /api/v1/clients | Adds a client
*ClientsApi* | [**updateClient**](docs/Api/ClientsApi.md#updateclient) | **PUT** /api/v1/clients/{id} | Updates a client
*ClientsApi* | [**uploadClient**](docs/Api/ClientsApi.md#uploadclient) | **PUT** /api/v1/clients/{id}/upload | Uploads a document to a client
*CompaniesApi* | [**deleteCompany**](docs/Api/CompaniesApi.md#deletecompany) | **DELETE** /api/v1/companies/{id} | Deletes a company
*CompaniesApi* | [**editCompany**](docs/Api/CompaniesApi.md#editcompany) | **GET** /api/v1/companies/{id}/edit | Shows an company for editting
*CompaniesApi* | [**getCompanies**](docs/Api/CompaniesApi.md#getcompanies) | **GET** /api/v1/companies | Gets a list of companies
*CompaniesApi* | [**getCompaniesCreate**](docs/Api/CompaniesApi.md#getcompaniescreate) | **GET** /api/v1/companies/create | Gets a new blank company object
*CompaniesApi* | [**setDefaultCompany**](docs/Api/CompaniesApi.md#setdefaultcompany) | **POST** /api/v1/companies/{company}/default | Sets the company as the default company.
*CompaniesApi* | [**showCompany**](docs/Api/CompaniesApi.md#showcompany) | **GET** /api/v1/companies/{id} | Shows an company
*CompaniesApi* | [**storeCompany**](docs/Api/CompaniesApi.md#storecompany) | **POST** /api/v1/companies | Adds a company
*CompaniesApi* | [**updateCompany**](docs/Api/CompaniesApi.md#updatecompany) | **PUT** /api/v1/companies/{id} | Updates an company
*CompaniesApi* | [**uploadCompanies**](docs/Api/CompaniesApi.md#uploadcompanies) | **PUT** /api/v1/companies/{id}/upload | Uploads a document to a company
*CompanyGatewaysApi* | [**bulkCompanyGateways**](docs/Api/CompanyGatewaysApi.md#bulkcompanygateways) | **POST** /api/v1/company_gateways/bulk | Performs bulk actions on an array of company_gateways
*CompanyGatewaysApi* | [**deleteCompanyGateway**](docs/Api/CompanyGatewaysApi.md#deletecompanygateway) | **DELETE** /api/v1/company_gateways/{id} | Deletes a CompanyGateway
*CompanyGatewaysApi* | [**editCompanyGateway**](docs/Api/CompanyGatewaysApi.md#editcompanygateway) | **GET** /api/v1/company_gateways/{id}/edit | Shows an CompanyGateway for editting
*CompanyGatewaysApi* | [**getCompanyGateways**](docs/Api/CompanyGatewaysApi.md#getcompanygateways) | **GET** /api/v1/company_gateways | Gets a list of company_gateways
*CompanyGatewaysApi* | [**getCompanyGatewaysCreate**](docs/Api/CompanyGatewaysApi.md#getcompanygatewayscreate) | **GET** /api/v1/company_gateways/create | Gets a new blank CompanyGateway object
*CompanyGatewaysApi* | [**showCompanyGateway**](docs/Api/CompanyGatewaysApi.md#showcompanygateway) | **GET** /api/v1/company_gateways/{id} | Shows an CompanyGateway
*CompanyGatewaysApi* | [**storeCompanyGateway**](docs/Api/CompanyGatewaysApi.md#storecompanygateway) | **POST** /api/v1/company_gateways | Adds a CompanyGateway
*CompanyGatewaysApi* | [**updateCompanyGateway**](docs/Api/CompanyGatewaysApi.md#updatecompanygateway) | **PUT** /api/v1/company_gateways/{id} | Updates an CompanyGateway
*CompanyLedgerApi* | [**getCompanyLedger**](docs/Api/CompanyLedgerApi.md#getcompanyledger) | **GET** /api/v1/company_ledger | Gets a list of company_ledger
*CompanyUserApi* | [**updateCompanyUser**](docs/Api/CompanyUserApi.md#updatecompanyuser) | **POST** /api/v1/company_users | Update a company user record
*ConnectedAccountApi* | [**connectedAccount**](docs/Api/ConnectedAccountApi.md#connectedaccount) | **POST** /api/v1/connected_account | Connect an oauth user to an existing user
*CreditsApi* | [**bulkCredits**](docs/Api/CreditsApi.md#bulkcredits) | **POST** /api/v1/credits/bulk | Performs bulk actions on an array of credits
*CreditsApi* | [**deleteCredit**](docs/Api/CreditsApi.md#deletecredit) | **DELETE** /api/v1/credits/{id} | Deletes a credit
*CreditsApi* | [**editCredit**](docs/Api/CreditsApi.md#editcredit) | **GET** /api/v1/credits/{id}/edit | Shows an credit for editting
*CreditsApi* | [**getCredits**](docs/Api/CreditsApi.md#getcredits) | **GET** /api/v1/credits | Gets a list of credits
*CreditsApi* | [**getCreditsCreate**](docs/Api/CreditsApi.md#getcreditscreate) | **GET** /api/v1/credits/create | Gets a new blank credit object
*CreditsApi* | [**showCredit**](docs/Api/CreditsApi.md#showcredit) | **GET** /api/v1/credits/{id} | Shows an credit
*CreditsApi* | [**storeCredit**](docs/Api/CreditsApi.md#storecredit) | **POST** /api/v1/credits | Adds a credit
*CreditsApi* | [**updateCredit**](docs/Api/CreditsApi.md#updatecredit) | **PUT** /api/v1/credits/{id} | Updates an Credit
*CreditsApi* | [**uploadCredits**](docs/Api/CreditsApi.md#uploadcredits) | **PUT** /api/v1/credits/{id}/upload | Uploads a document to a credit
*DesignsApi* | [**bulkDesigns**](docs/Api/DesignsApi.md#bulkdesigns) | **POST** /api/v1/designs/bulk | Performs bulk actions on an array of designs
*DesignsApi* | [**deleteDesign**](docs/Api/DesignsApi.md#deletedesign) | **DELETE** /api/v1/designs/{id} | Deletes a design
*DesignsApi* | [**editDesign**](docs/Api/DesignsApi.md#editdesign) | **GET** /api/v1/designs/{id}/edit | Shows a design for editting
*DesignsApi* | [**getDesigns**](docs/Api/DesignsApi.md#getdesigns) | **GET** /api/v1/designs | Gets a list of designs
*DesignsApi* | [**getDesignsCreate**](docs/Api/DesignsApi.md#getdesignscreate) | **GET** /api/v1/designs/create | Gets a new blank design object
*DesignsApi* | [**showDesign**](docs/Api/DesignsApi.md#showdesign) | **GET** /api/v1/designs/{id} | Shows a design
*DesignsApi* | [**storeDesign**](docs/Api/DesignsApi.md#storedesign) | **POST** /api/v1/designs | Adds a design
*DesignsApi* | [**updateDesign**](docs/Api/DesignsApi.md#updatedesign) | **PUT** /api/v1/designs/{id} | Updates a design
*DocumentsApi* | [**getDocuments**](docs/Api/DocumentsApi.md#getdocuments) | **GET** /api/v1/documents | Gets a list of documents
*EmailsApi* | [**sendEmailTemplate**](docs/Api/EmailsApi.md#sendemailtemplate) | **POST** /api/v1/emails | Sends an email for an entity
*ExpenseApi* | [**uploadExpense**](docs/Api/ExpenseApi.md#uploadexpense) | **PUT** /api/v1/expenses/{id}/upload | Uploads a document to a expense
*ExpenseCategoriesApi* | [**bulkExpenseCategorys**](docs/Api/ExpenseCategoriesApi.md#bulkexpensecategorys) | **POST** /api/v1/expense_categories/bulk | Performs bulk actions on an array of ExpenseCategorys
*ExpenseCategoriesApi* | [**deleteExpenseCategory**](docs/Api/ExpenseCategoriesApi.md#deleteexpensecategory) | **DELETE** /api/v1/expense_categories/{id} | Deletes a ExpenseCategory
*ExpenseCategoriesApi* | [**editExpenseCategory**](docs/Api/ExpenseCategoriesApi.md#editexpensecategory) | **GET** /api/v1/expense_categories/{id}/edit | Shows a Expens Category for editting
*ExpenseCategoriesApi* | [**getExpenseCategoryCreate**](docs/Api/ExpenseCategoriesApi.md#getexpensecategorycreate) | **GET** /api/v1/expense_categories/create | Gets a new blank Expens Category object
*ExpenseCategoriesApi* | [**getExpenseCategorys**](docs/Api/ExpenseCategoriesApi.md#getexpensecategorys) | **GET** /api/v1/expense_categories | Gets a list of expense_categories
*ExpenseCategoriesApi* | [**showExpenseCategory**](docs/Api/ExpenseCategoriesApi.md#showexpensecategory) | **GET** /api/v1/expense_categories/{id} | Shows a Expens Category
*ExpenseCategoriesApi* | [**storeExpenseCategory**](docs/Api/ExpenseCategoriesApi.md#storeexpensecategory) | **POST** /api/v1/expense_categories | Adds a expense category
*ExpenseCategoriesApi* | [**updateExpenseCategory**](docs/Api/ExpenseCategoriesApi.md#updateexpensecategory) | **PUT** /api/v1/expense_categories/{id} | Updates a tax rate
*ExpensesApi* | [**bulkExpenses**](docs/Api/ExpensesApi.md#bulkexpenses) | **POST** /api/v1/expenses/bulk | Performs bulk actions on an array of expenses
*ExpensesApi* | [**deleteExpense**](docs/Api/ExpensesApi.md#deleteexpense) | **DELETE** /api/v1/expenses/{id} | Deletes a client
*ExpensesApi* | [**editExpense**](docs/Api/ExpensesApi.md#editexpense) | **GET** /api/v1/expenses/{id}/edit | Shows a client for editting
*ExpensesApi* | [**getExpenses**](docs/Api/ExpensesApi.md#getexpenses) | **GET** /api/v1/expenses | Gets a list of expenses
*ExpensesApi* | [**getExpensesCreate**](docs/Api/ExpensesApi.md#getexpensescreate) | **GET** /api/v1/expenses/create | Gets a new blank client object
*ExpensesApi* | [**showExpense**](docs/Api/ExpensesApi.md#showexpense) | **GET** /api/v1/expenses/{id} | Shows a client
*ExpensesApi* | [**storeExpense**](docs/Api/ExpensesApi.md#storeexpense) | **POST** /api/v1/expenses | Adds a client
*ExpensesApi* | [**updateExpense**](docs/Api/ExpensesApi.md#updateexpense) | **PUT** /api/v1/expenses/{id} | Updates a client
*ExportApi* | [**getExport**](docs/Api/ExportApi.md#getexport) | **POST** /api/v1/export | Export data from the system
*GroupSettingsApi* | [**bulkGroupSettings**](docs/Api/GroupSettingsApi.md#bulkgroupsettings) | **POST** /api/v1/group_settings/bulk | Performs bulk actions on an array of group_settings
*GroupSettingsApi* | [**deleteGroupSetting**](docs/Api/GroupSettingsApi.md#deletegroupsetting) | **DELETE** /api/v1/group_settings/{id} | Deletes a GroupSetting
*GroupSettingsApi* | [**editGroupSetting**](docs/Api/GroupSettingsApi.md#editgroupsetting) | **GET** /api/v1/group_settings/{id}/edit | Shows an GroupSetting for editting
*GroupSettingsApi* | [**getGroupSettings**](docs/Api/GroupSettingsApi.md#getgroupsettings) | **GET** /api/v1/group_settings | Gets a list of group_settings
*GroupSettingsApi* | [**getGroupSettingsCreate**](docs/Api/GroupSettingsApi.md#getgroupsettingscreate) | **GET** /api/v1/group_settings/create | Gets a new blank GroupSetting object
*GroupSettingsApi* | [**showGroupSetting**](docs/Api/GroupSettingsApi.md#showgroupsetting) | **GET** /api/v1/group_settings/{id} | Shows an GroupSetting
*GroupSettingsApi* | [**storeGroupSetting**](docs/Api/GroupSettingsApi.md#storegroupsetting) | **POST** /api/v1/group_settings | Adds a GroupSetting
*GroupSettingsApi* | [**updateGroupSetting**](docs/Api/GroupSettingsApi.md#updategroupsetting) | **PUT** /api/v1/group_settings/{id} | Updates an GroupSetting
*GroupSettingsApi* | [**uploadGroupSetting**](docs/Api/GroupSettingsApi.md#uploadgroupsetting) | **PUT** /api/v1/group_settings/{id}/upload | Uploads a document to a group setting
*HealthCheckApi* | [**getHealthCheck**](docs/Api/HealthCheckApi.md#gethealthcheck) | **GET** /api/v1/health_check | Attempts to get a health check from the API
*ImportApi* | [**getImportJson**](docs/Api/ImportApi.md#getimportjson) | **POST** /api/v1/import_json | Import data from the system
*ImportsApi* | [**preimport**](docs/Api/ImportsApi.md#preimport) | **POST** /api/v1/preimport | Pre Import checks - returns a reference to the job and the headers of the CSV
*InvoicesApi* | [**actionInvoice**](docs/Api/InvoicesApi.md#actioninvoice) | **GET** /api/v1/invoices/{id}/{action} | Performs a custom action on an invoice
*InvoicesApi* | [**bulkInvoices**](docs/Api/InvoicesApi.md#bulkinvoices) | **POST** /api/v1/invoices/bulk | Performs bulk actions on an array of invoices
*InvoicesApi* | [**deleteInvoice**](docs/Api/InvoicesApi.md#deleteinvoice) | **DELETE** /api/v1/invoices/{id} | Deletes a invoice
*InvoicesApi* | [**deliveryNote**](docs/Api/InvoicesApi.md#deliverynote) | **GET** /api/v1/invoices/{id}/delivery_note | Download a specific invoice delivery notes
*InvoicesApi* | [**downloadInvoice**](docs/Api/InvoicesApi.md#downloadinvoice) | **GET** /api/v1/invoice/{invitation_key}/download | Download a specific invoice by invitation key
*InvoicesApi* | [**downloadRecurringInvoice**](docs/Api/InvoicesApi.md#downloadrecurringinvoice) | **GET** /api/v1/recurring_invoice/{invitation_key}/download | Download a specific invoice by invitation key
*InvoicesApi* | [**editInvoice**](docs/Api/InvoicesApi.md#editinvoice) | **GET** /api/v1/invoices/{id}/edit | Shows an invoice for editting
*InvoicesApi* | [**getInvoices**](docs/Api/InvoicesApi.md#getinvoices) | **GET** /api/v1/invoices | Gets a list of invoices
*InvoicesApi* | [**getInvoicesCreate**](docs/Api/InvoicesApi.md#getinvoicescreate) | **GET** /api/v1/invoices/create | Gets a new blank invoice object
*InvoicesApi* | [**showInvoice**](docs/Api/InvoicesApi.md#showinvoice) | **GET** /api/v1/invoices/{id} | Shows an invoice
*InvoicesApi* | [**storeInvoice**](docs/Api/InvoicesApi.md#storeinvoice) | **POST** /api/v1/invoices | Adds a invoice
*InvoicesApi* | [**updateInvoice**](docs/Api/InvoicesApi.md#updateinvoice) | **PUT** /api/v1/invoices/{id} | Updates an invoice
*InvoicesApi* | [**uploadInvoice**](docs/Api/InvoicesApi.md#uploadinvoice) | **PUT** /api/v1/invoices/{id}/upload | Uploads a document to a invoice
*LoginApi* | [**postLogin**](docs/Api/LoginApi.md#postlogin) | **POST** /api/v1/login | Attempts authentication
*LogoutApi* | [**getLogout**](docs/Api/LogoutApi.md#getlogout) | **POST** /api/v1/logout | Gets a list of logout
*MigrationApi* | [**postPurgeCompany**](docs/Api/MigrationApi.md#postpurgecompany) | **POST** /api/v1/migration/purge/{company} | Attempts to purge a company record and all its child records
*MigrationApi* | [**postPurgeCompanySaveSettings**](docs/Api/MigrationApi.md#postpurgecompanysavesettings) | **POST** /api/v1/migration/purge_save_settings/{company} | Attempts to purge a companies child records but save the company record and its settings
*MigrationApi* | [**postStartMigration**](docs/Api/MigrationApi.md#poststartmigration) | **POST** /api/v1/migration/start | Starts the migration from previous version of Invoice Ninja
*OneTimeTokenApi* | [**oneTimeToken**](docs/Api/OneTimeTokenApi.md#onetimetoken) | **POST** /api/v1/one_time_token | Attempts to create a one time token
*PaymentTermsApi* | [**bulkPaymentTerms**](docs/Api/PaymentTermsApi.md#bulkpaymentterms) | **POST** /api/v1/payment_terms/bulk | Performs bulk actions on an array of payment terms
*PaymentTermsApi* | [**editPaymentTerms**](docs/Api/PaymentTermsApi.md#editpaymentterms) | **GET** /api/v1/payment_terms/{id}/edit | Shows an Payment Term for editting
*PaymentTermsApi* | [**getPaymentTerms**](docs/Api/PaymentTermsApi.md#getpaymentterms) | **GET** /api/v1/payment_terms | Gets a list of payment terms
*PaymentTermsApi* | [**getPaymentTermsCreate**](docs/Api/PaymentTermsApi.md#getpaymenttermscreate) | **GET** /api/v1/payment_terms/create | Gets a new blank PaymentTerm object
*PaymentTermsApi* | [**showPaymentTerm**](docs/Api/PaymentTermsApi.md#showpaymentterm) | **GET** /api/v1/payment_terms/{id} | Shows a Payment Term
*PaymentTermsApi* | [**storePaymentTerm**](docs/Api/PaymentTermsApi.md#storepaymentterm) | **POST** /api/v1/payment_terms | Adds a Payment
*PaymentTermsApi* | [**updatePaymentTerm**](docs/Api/PaymentTermsApi.md#updatepaymentterm) | **PUT** /api/v1/payment_terms/{id} | Updates a Payment Term
*PaymentTermssApi* | [**deletePaymentTerm**](docs/Api/PaymentTermssApi.md#deletepaymentterm) | **DELETE** /api/v1/payment_terms/{id} | Deletes a Payment Term
*PaymentsApi* | [**actionPayment**](docs/Api/PaymentsApi.md#actionpayment) | **GET** /api/v1/payments/{id}/{action} | Performs a custom action on an Payment
*PaymentsApi* | [**bulkPayments**](docs/Api/PaymentsApi.md#bulkpayments) | **POST** /api/v1/payments/bulk | Performs bulk actions on an array of payments
*PaymentsApi* | [**deletePayment**](docs/Api/PaymentsApi.md#deletepayment) | **DELETE** /api/v1/payments/{id} | Deletes a Payment
*PaymentsApi* | [**editPayment**](docs/Api/PaymentsApi.md#editpayment) | **GET** /api/v1/payments/{id}/edit | Shows an Payment for editting
*PaymentsApi* | [**getPayments**](docs/Api/PaymentsApi.md#getpayments) | **GET** /api/v1/payments | Gets a list of payments
*PaymentsApi* | [**getPaymentsCreate**](docs/Api/PaymentsApi.md#getpaymentscreate) | **GET** /api/v1/payments/create | Gets a new blank Payment object
*PaymentsApi* | [**showPayment**](docs/Api/PaymentsApi.md#showpayment) | **GET** /api/v1/payments/{id} | Shows an Payment
*PaymentsApi* | [**storePayment**](docs/Api/PaymentsApi.md#storepayment) | **POST** /api/v1/payments | Adds a Payment
*PaymentsApi* | [**storeRefund**](docs/Api/PaymentsApi.md#storerefund) | **POST** /api/v1/payments/refund | Adds a Refund
*PaymentsApi* | [**updatePayment**](docs/Api/PaymentsApi.md#updatepayment) | **PUT** /api/v1/payments/{id} | Updates an Payment
*PaymentsApi* | [**uploadPayment**](docs/Api/PaymentsApi.md#uploadpayment) | **PUT** /api/v1/payments/{id}/upload | Uploads a document to a payment
*PingApi* | [**getPing**](docs/Api/PingApi.md#getping) | **GET** /api/v1/ping | Attempts to ping the API
*PostmarkApi* | [**confirmApplePurchase**](docs/Api/PostmarkApi.md#confirmapplepurchase) | **POST** /api/v1/apple/confirm_purchase | Processing webhooks from Apple for in app purchases
*PostmarkApi* | [**postmarkWebhook**](docs/Api/PostmarkApi.md#postmarkwebhook) | **POST** /api/v1/postmark_webhook | Processing webhooks from PostMark
*PostmarkApi* | [**processAppleWebhook**](docs/Api/PostmarkApi.md#processapplewebhook) | **POST** /api/v1/apple/process_webhook | Processing event webhooks from Apple for in purchase / subscription status update
*PreviewApi* | [**getPreview**](docs/Api/PreviewApi.md#getpreview) | **POST** /api/v1/preview | Returns a pdf preview
*PreviewApi* | [**getPreviewPurchaseOrder**](docs/Api/PreviewApi.md#getpreviewpurchaseorder) | **POST** /api/v1/preview/purchase_order | Returns a pdf preview for purchase order
*ProductsApi* | [**bulkProducts**](docs/Api/ProductsApi.md#bulkproducts) | **POST** /api/v1/products/bulk | Performs bulk actions on an array of products
*ProductsApi* | [**deleteProduct**](docs/Api/ProductsApi.md#deleteproduct) | **DELETE** /api/v1/products/{id} | Deletes a Product
*ProductsApi* | [**editProduct**](docs/Api/ProductsApi.md#editproduct) | **GET** /api/v1/products/{id}/edit | Shows an Product for editting
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /api/v1/products | Gets a list of products
*ProductsApi* | [**getProductsCreate**](docs/Api/ProductsApi.md#getproductscreate) | **GET** /api/v1/products/create | Gets a new blank Product object
*ProductsApi* | [**showProduct**](docs/Api/ProductsApi.md#showproduct) | **GET** /api/v1/products/{id} | Shows an Product
*ProductsApi* | [**storeProduct**](docs/Api/ProductsApi.md#storeproduct) | **POST** /api/v1/products | Adds a Product
*ProductsApi* | [**updateProduct**](docs/Api/ProductsApi.md#updateproduct) | **PUT** /api/v1/products/{id} | Updates an Product
*ProductsApi* | [**uploadProduct**](docs/Api/ProductsApi.md#uploadproduct) | **PUT** /api/v1/products/{id}/upload | Uploads a document to a product
*ProjectsApi* | [**bulkProjects**](docs/Api/ProjectsApi.md#bulkprojects) | **POST** /api/v1/projects/bulk | Performs bulk actions on an array of projects
*ProjectsApi* | [**deleteProject**](docs/Api/ProjectsApi.md#deleteproject) | **DELETE** /api/v1/projects/{id} | Deletes a project
*ProjectsApi* | [**editProject**](docs/Api/ProjectsApi.md#editproject) | **GET** /api/v1/projects/{id}/edit | Shows a project for editting
*ProjectsApi* | [**getProjects**](docs/Api/ProjectsApi.md#getprojects) | **GET** /api/v1/projects | Gets a list of projects
*ProjectsApi* | [**getProjectsCreate**](docs/Api/ProjectsApi.md#getprojectscreate) | **GET** /api/v1/projects/create | Gets a new blank project object
*ProjectsApi* | [**showProject**](docs/Api/ProjectsApi.md#showproject) | **GET** /api/v1/projects/{id} | Shows a project
*ProjectsApi* | [**storeProject**](docs/Api/ProjectsApi.md#storeproject) | **POST** /api/v1/projects | Adds a project
*ProjectsApi* | [**updateProject**](docs/Api/ProjectsApi.md#updateproject) | **PUT** /api/v1/projects/{id} | Updates a project
*ProjectsApi* | [**uploadProject**](docs/Api/ProjectsApi.md#uploadproject) | **PUT** /api/v1/projects/{id}/upload | Uploads a document to a project
*PurchaseOrdersApi* | [**actionPurchaseOrder**](docs/Api/PurchaseOrdersApi.md#actionpurchaseorder) | **GET** /api/v1/purchase_orders/{id}/{action} | Performs a custom action on an purchase order
*PurchaseOrdersApi* | [**bulkPurchaseOrderss**](docs/Api/PurchaseOrdersApi.md#bulkpurchaseorderss) | **POST** /api/v1/purchase_orders/bulk | Performs bulk actions on an array of purchase_orders
*PurchaseOrdersApi* | [**deletePurchaseOrder**](docs/Api/PurchaseOrdersApi.md#deletepurchaseorder) | **DELETE** /api/v1/purchase_orders/{id} | Deletes a purchase order
*PurchaseOrdersApi* | [**editPurchaseOrder**](docs/Api/PurchaseOrdersApi.md#editpurchaseorder) | **GET** /api/v1/purchase_orders/{id}/edit | Shows an purchase order for editting
*PurchaseOrdersApi* | [**getPurchaseOrderCreate**](docs/Api/PurchaseOrdersApi.md#getpurchaseordercreate) | **GET** /api/v1/purchase_orders/create | Gets a new blank purchase order object
*PurchaseOrdersApi* | [**getPurchaseOrders**](docs/Api/PurchaseOrdersApi.md#getpurchaseorders) | **GET** /api/v1/purchase_orders | Gets a list of purchase orders
*PurchaseOrdersApi* | [**showPurchaseOrder**](docs/Api/PurchaseOrdersApi.md#showpurchaseorder) | **GET** /api/v1/purchase_orders/{id} | Shows an purcase orders
*PurchaseOrdersApi* | [**updatePurchaseOrder**](docs/Api/PurchaseOrdersApi.md#updatepurchaseorder) | **PUT** /api/v1/purchase_order/{id} | Updates an purchase order
*PurchaseOrdersApi* | [**uploadPurchaseOrder**](docs/Api/PurchaseOrdersApi.md#uploadpurchaseorder) | **PUT** /api/v1/purchase_orders/{id}/upload | Uploads a document to a purchase_orders
*PurhcaseOrdersApi* | [**storePurchaseOrder**](docs/Api/PurhcaseOrdersApi.md#storepurchaseorder) | **POST** /api/v1/purchase_orders | Adds a purchase order
*QuotesApi* | [**actionQuote**](docs/Api/QuotesApi.md#actionquote) | **GET** /api/v1/quotes/{id}/{action} | Performs a custom action on an Quote
*QuotesApi* | [**bulkQuotes**](docs/Api/QuotesApi.md#bulkquotes) | **POST** /api/v1/quotes/bulk | Performs bulk actions on an array of quotes
*QuotesApi* | [**deleteQuote**](docs/Api/QuotesApi.md#deletequote) | **DELETE** /api/v1/quotes/{id} | Deletes a Quote
*QuotesApi* | [**editQuote**](docs/Api/QuotesApi.md#editquote) | **GET** /api/v1/quotes/{id}/edit | Shows an Quote for editting
*QuotesApi* | [**getQuotes**](docs/Api/QuotesApi.md#getquotes) | **GET** /api/v1/quotes | Gets a list of quotes
*QuotesApi* | [**getQuotesCreate**](docs/Api/QuotesApi.md#getquotescreate) | **GET** /api/v1/quotes/create | Gets a new blank Quote object
*QuotesApi* | [**showQuote**](docs/Api/QuotesApi.md#showquote) | **GET** /api/v1/quotes/{id} | Shows an Quote
*QuotesApi* | [**storeQuote**](docs/Api/QuotesApi.md#storequote) | **POST** /api/v1/quotes | Adds a Quote
*QuotesApi* | [**updateQuote**](docs/Api/QuotesApi.md#updatequote) | **PUT** /api/v1/quotes/{id} | Updates an Quote
*QuotesApi* | [**uploadQuote**](docs/Api/QuotesApi.md#uploadquote) | **PUT** /api/v1/quotes/{id}/upload | Uploads a document to a quote
*RecurringExpenseApi* | [**uploadRecurringExpense**](docs/Api/RecurringExpenseApi.md#uploadrecurringexpense) | **PUT** /api/v1/recurring_expenses/{id}/upload | Uploads a document to a recurring_expense
*RecurringExpensesApi* | [**bulkRecurringExpenses**](docs/Api/RecurringExpensesApi.md#bulkrecurringexpenses) | **POST** /api/v1/recurring_expenses/bulk | Performs bulk actions on an array of recurring_expenses
*RecurringExpensesApi* | [**deleteRecurringExpense**](docs/Api/RecurringExpensesApi.md#deleterecurringexpense) | **DELETE** /api/v1/recurring_expenses/{id} | Deletes a client
*RecurringExpensesApi* | [**editRecurringExpense**](docs/Api/RecurringExpensesApi.md#editrecurringexpense) | **GET** /api/v1/recurring_expenses/{id}/edit | Shows a client for editting
*RecurringExpensesApi* | [**getRecurringExpenses**](docs/Api/RecurringExpensesApi.md#getrecurringexpenses) | **GET** /api/v1/recurring_expenses | Gets a list of recurring_expenses
*RecurringExpensesApi* | [**getRecurringExpensesCreate**](docs/Api/RecurringExpensesApi.md#getrecurringexpensescreate) | **GET** /api/v1/recurring_expenses/create | Gets a new blank client object
*RecurringExpensesApi* | [**showRecurringExpense**](docs/Api/RecurringExpensesApi.md#showrecurringexpense) | **GET** /api/v1/recurring_expenses/{id} | Shows a client
*RecurringExpensesApi* | [**storeRecurringExpense**](docs/Api/RecurringExpensesApi.md#storerecurringexpense) | **POST** /api/v1/recurring_expenses | Adds a client
*RecurringExpensesApi* | [**updateRecurringExpense**](docs/Api/RecurringExpensesApi.md#updaterecurringexpense) | **PUT** /api/v1/recurring_expenses/{id} | Updates a client
*RecurringInvoicesApi* | [**actionRecurringInvoice**](docs/Api/RecurringInvoicesApi.md#actionrecurringinvoice) | **GET** /api/v1/recurring_invoices/{id}/{action} | Performs a custom action on an RecurringInvoice
*RecurringInvoicesApi* | [**bulkRecurringInvoices**](docs/Api/RecurringInvoicesApi.md#bulkrecurringinvoices) | **POST** /api/v1/recurring_invoices/bulk | Performs bulk actions on an array of recurring_invoices
*RecurringInvoicesApi* | [**deleteRecurringInvoice**](docs/Api/RecurringInvoicesApi.md#deleterecurringinvoice) | **DELETE** /api/v1/recurring_invoices/{id} | Deletes a RecurringInvoice
*RecurringInvoicesApi* | [**editRecurringInvoice**](docs/Api/RecurringInvoicesApi.md#editrecurringinvoice) | **GET** /api/v1/recurring_invoices/{id}/edit | Shows an RecurringInvoice for editting
*RecurringInvoicesApi* | [**getRecurringInvoices**](docs/Api/RecurringInvoicesApi.md#getrecurringinvoices) | **GET** /api/v1/recurring_invoices | Gets a list of recurring_invoices
*RecurringInvoicesApi* | [**getRecurringInvoicesCreate**](docs/Api/RecurringInvoicesApi.md#getrecurringinvoicescreate) | **GET** /api/v1/recurring_invoices/create | Gets a new blank RecurringInvoice object
*RecurringInvoicesApi* | [**showRecurringInvoice**](docs/Api/RecurringInvoicesApi.md#showrecurringinvoice) | **GET** /api/v1/recurring_invoices/{id} | Shows an RecurringInvoice
*RecurringInvoicesApi* | [**storeRecurringInvoice**](docs/Api/RecurringInvoicesApi.md#storerecurringinvoice) | **POST** /api/v1/recurring_invoices | Adds a RecurringInvoice
*RecurringInvoicesApi* | [**updateRecurringInvoice**](docs/Api/RecurringInvoicesApi.md#updaterecurringinvoice) | **PUT** /api/v1/recurring_invoices/{id} | Updates an RecurringInvoice
*RecurringInvoicesApi* | [**uploadRecurringInvoice**](docs/Api/RecurringInvoicesApi.md#uploadrecurringinvoice) | **PUT** /api/v1/recurring_invoices/{id}/upload | Uploads a document to a recurring_invoice
*RecurringQuotesApi* | [**actionRecurringQuote**](docs/Api/RecurringQuotesApi.md#actionrecurringquote) | **GET** /api/v1/recurring_quotes/{id}/{action} | Performs a custom action on an RecurringQuote
*RecurringQuotesApi* | [**bulkRecurringQuotes**](docs/Api/RecurringQuotesApi.md#bulkrecurringquotes) | **POST** /api/v1/recurring_quotes/bulk | Performs bulk actions on an array of recurring_quotes
*RecurringQuotesApi* | [**deleteRecurringQuote**](docs/Api/RecurringQuotesApi.md#deleterecurringquote) | **DELETE** /api/v1/recurring_quotes/{id} | Deletes a RecurringQuote
*RecurringQuotesApi* | [**editRecurringQuote**](docs/Api/RecurringQuotesApi.md#editrecurringquote) | **GET** /api/v1/recurring_quotes/{id}/edit | Shows an RecurringQuote for editting
*RecurringQuotesApi* | [**getRecurringQuotes**](docs/Api/RecurringQuotesApi.md#getrecurringquotes) | **GET** /api/v1/recurring_quotes | Gets a list of recurring_quotes
*RecurringQuotesApi* | [**getRecurringQuotesCreate**](docs/Api/RecurringQuotesApi.md#getrecurringquotescreate) | **GET** /api/v1/recurring_quotes/create | Gets a new blank RecurringQuote object
*RecurringQuotesApi* | [**showRecurringQuote**](docs/Api/RecurringQuotesApi.md#showrecurringquote) | **GET** /api/v1/recurring_quotes/{id} | Shows an RecurringQuote
*RecurringQuotesApi* | [**storeRecurringQuote**](docs/Api/RecurringQuotesApi.md#storerecurringquote) | **POST** /api/v1/recurring_quotes | Adds a RecurringQuote
*RecurringQuotesApi* | [**updateRecurringQuote**](docs/Api/RecurringQuotesApi.md#updaterecurringquote) | **PUT** /api/v1/recurring_quotes/{id} | Updates an RecurringQuote
*RefreshApi* | [**refresh**](docs/Api/RefreshApi.md#refresh) | **POST** /api/v1/refresh | Refreshes the dataset
*ReportsApi* | [**getClientReport**](docs/Api/ReportsApi.md#getclientreport) | **POST** /api/v1/reports/clients | Client reports
*ReportsApi* | [**getContactReport**](docs/Api/ReportsApi.md#getcontactreport) | **POST** /api/v1/reports/contacts | Contact reports
*ReportsApi* | [**getCreditReport**](docs/Api/ReportsApi.md#getcreditreport) | **POST** /api/v1/reports/credit | Credit reports
*ReportsApi* | [**getDocumentReport**](docs/Api/ReportsApi.md#getdocumentreport) | **POST** /api/v1/reports/documents | Document reports
*ReportsApi* | [**getExpenseReport**](docs/Api/ReportsApi.md#getexpensereport) | **POST** /api/v1/reports/expense | Expense reports
*ReportsApi* | [**getInvoiceItemReport**](docs/Api/ReportsApi.md#getinvoiceitemreport) | **POST** /api/v1/reports/invoice_items | Invoice item reports
*ReportsApi* | [**getInvoiceReport**](docs/Api/ReportsApi.md#getinvoicereport) | **POST** /api/v1/reports/invoices | Invoice reports
*ReportsApi* | [**getPaymentReport**](docs/Api/ReportsApi.md#getpaymentreport) | **POST** /api/v1/reports/payments | Payment reports
*ReportsApi* | [**getProductReport**](docs/Api/ReportsApi.md#getproductreport) | **POST** /api/v1/reports/products | Product reports
*ReportsApi* | [**getProductSalesReport**](docs/Api/ReportsApi.md#getproductsalesreport) | **POST** /api/v1/reports/product_sales | Product Salesreports
*ReportsApi* | [**getProfitLossReport**](docs/Api/ReportsApi.md#getprofitlossreport) | **POST** /api/v1/reports/profitloss | Profit loss reports
*ReportsApi* | [**getQuoteItemReport**](docs/Api/ReportsApi.md#getquoteitemreport) | **POST** /api/v1/reports/quote_items | Quote item reports
*ReportsApi* | [**getQuoteReport**](docs/Api/ReportsApi.md#getquotereport) | **POST** /api/v1/reports/quotes | Quote reports
*ReportsApi* | [**getRecurringInvoiceReport**](docs/Api/ReportsApi.md#getrecurringinvoicereport) | **POST** /api/v1/reports/recurring_invoices | Recurring Invoice reports
*ReportsApi* | [**getTaskReport**](docs/Api/ReportsApi.md#gettaskreport) | **POST** /api/v1/reports/tasks | Task reports
*SignupApi* | [**postSignup**](docs/Api/SignupApi.md#postsignup) | **POST** /api/v1/signup | Attempts a new account signup
*StaticsApi* | [**getStatics**](docs/Api/StaticsApi.md#getstatics) | **GET** /api/v1/statics | Gets a list of statics
*SubscriptionsApi* | [**bulkSubscriptions**](docs/Api/SubscriptionsApi.md#bulksubscriptions) | **POST** /api/v1/subscriptions/bulk | Performs bulk actions on an array of subscriptions
*SubscriptionsApi* | [**deleteSubscription**](docs/Api/SubscriptionsApi.md#deletesubscription) | **DELETE** /api/v1/subscriptions/{id} | Deletes a subscriptions
*SubscriptionsApi* | [**editSubscription**](docs/Api/SubscriptionsApi.md#editsubscription) | **GET** /api/v1/subscriptions/{id}/edit | Shows an subscriptions for editting
*SubscriptionsApi* | [**getSubscriptions**](docs/Api/SubscriptionsApi.md#getsubscriptions) | **GET** /api/v1/subscriptions | Gets a list of subscriptions
*SubscriptionsApi* | [**getSubscriptionsCreate**](docs/Api/SubscriptionsApi.md#getsubscriptionscreate) | **GET** /api/v1/subscriptions/create | Gets a new blank subscriptions object
*SubscriptionsApi* | [**showSubscription**](docs/Api/SubscriptionsApi.md#showsubscription) | **GET** /api/v1/subscriptions/{id} | Shows an subscriptions
*SubscriptionsApi* | [**storeSubscription**](docs/Api/SubscriptionsApi.md#storesubscription) | **POST** /api/v1/subscriptions | Adds a subscriptions
*SubscriptionsApi* | [**updateSubscription**](docs/Api/SubscriptionsApi.md#updatesubscription) | **PUT** /api/v1/subscriptions/{id} | Updates an subscriptions
*SupportApi* | [**supportMessage**](docs/Api/SupportApi.md#supportmessage) | **POST** /api/v1/support/messages/send | Sends a support message to Invoice Ninja team
*SystemLogsApi* | [**getSystemLogs**](docs/Api/SystemLogsApi.md#getsystemlogs) | **GET** /api/v1/system_logs | Gets a list of system logs
*SystemLogsApi* | [**showSystemLogs**](docs/Api/SystemLogsApi.md#showsystemlogs) | **GET** /api/v1/system_logs/{id} | Shows a system_logs
*TaskSchedulersApi* | [**bulkTaskSchedulerActions**](docs/Api/TaskSchedulersApi.md#bulktaskscheduleractions) | **POST** /api/v1/task_schedulers/bulk | Performs bulk actions on an array of task_schedulers
*TaskSchedulersApi* | [**createTaskScheduler**](docs/Api/TaskSchedulersApi.md#createtaskscheduler) | **POST** /api/v1/task_schedulers/ | Create task scheduler with job
*TaskSchedulersApi* | [**destroyTaskScheduler**](docs/Api/TaskSchedulersApi.md#destroytaskscheduler) | **DELETE** /api/v1/task_schedulers/{id} | Destroy Task Scheduler
*TaskSchedulersApi* | [**getTaskScheduler**](docs/Api/TaskSchedulersApi.md#gettaskscheduler) | **GET** /api/v1/invoices/task_schedulers | Gets a new blank scheduler object
*TaskSchedulersApi* | [**getTaskSchedulers**](docs/Api/TaskSchedulersApi.md#gettaskschedulers) | **GET** /api/v1/task_schedulers/ | Task Scheduler Index
*TaskSchedulersApi* | [**showTaskScheduler**](docs/Api/TaskSchedulersApi.md#showtaskscheduler) | **GET** /api/v1/task_schedulers/{id} | Show given scheduler
*TaskSchedulersApi* | [**updateTaskScheduler**](docs/Api/TaskSchedulersApi.md#updatetaskscheduler) | **PUT** /api/v1/task_schedulers/{id} | Update task scheduler
*TaskStatusApi* | [**bulkTaskStatuss**](docs/Api/TaskStatusApi.md#bulktaskstatuss) | **POST** /api/v1/task_statuses/bulk | Performs bulk actions on an array of task statuses
*TaskStatusApi* | [**editTaskStatuss**](docs/Api/TaskStatusApi.md#edittaskstatuss) | **GET** /api/v1/task_statuses/{id}/edit | Shows an TaskStatusfor editting
*TaskStatusApi* | [**getTaskStatuses**](docs/Api/TaskStatusApi.md#gettaskstatuses) | **GET** /api/v1/task_statuses | Gets a list of task statuses
*TaskStatusApi* | [**getTaskStatussCreate**](docs/Api/TaskStatusApi.md#gettaskstatusscreate) | **GET** /api/v1/task_statuses/create | Gets a new blank TaskStatus object
*TaskStatusApi* | [**showTaskStatus**](docs/Api/TaskStatusApi.md#showtaskstatus) | **GET** /api/v1/task_statuses/{id} | Shows a TaskStatus Term
*TaskStatusApi* | [**storeTaskStatus**](docs/Api/TaskStatusApi.md#storetaskstatus) | **POST** /api/v1/task_statuses | Adds a TaskStatus
*TaskStatusApi* | [**updateTaskStatus**](docs/Api/TaskStatusApi.md#updatetaskstatus) | **PUT** /api/v1/task_statuses/{id} | Updates a TaskStatus Term
*TaskStatussApi* | [**deleteTaskStatus**](docs/Api/TaskStatussApi.md#deletetaskstatus) | **DELETE** /api/v1/task_statuses/{id} | Deletes a TaskStatus Term
*TasksApi* | [**bulkTasks**](docs/Api/TasksApi.md#bulktasks) | **POST** /api/v1/tasks/bulk | Performs bulk actions on an array of tasks
*TasksApi* | [**deleteTask**](docs/Api/TasksApi.md#deletetask) | **DELETE** /api/v1/tasks/{id} | Deletes a client
*TasksApi* | [**editTask**](docs/Api/TasksApi.md#edittask) | **GET** /api/v1/tasks/{id}/edit | Shows a client for editting
*TasksApi* | [**getTasks**](docs/Api/TasksApi.md#gettasks) | **GET** /api/v1/tasks | Gets a list of tasks
*TasksApi* | [**getTasksCreate**](docs/Api/TasksApi.md#gettaskscreate) | **GET** /api/v1/tasks/create | Gets a new blank client object
*TasksApi* | [**showTask**](docs/Api/TasksApi.md#showtask) | **GET** /api/v1/tasks/{id} | Shows a client
*TasksApi* | [**sortTasks**](docs/Api/TasksApi.md#sorttasks) | **POST** /api/v1/tasks/stort | Sort tasks on KanBan
*TasksApi* | [**storeTask**](docs/Api/TasksApi.md#storetask) | **POST** /api/v1/tasks | Adds a client
*TasksApi* | [**updateTask**](docs/Api/TasksApi.md#updatetask) | **PUT** /api/v1/tasks/{id} | Updates a client
*TasksApi* | [**uploadTask**](docs/Api/TasksApi.md#uploadtask) | **PUT** /api/v1/tasks/{id}/upload | Uploads a document to a task
*TaxRatesApi* | [**bulkTaxRates**](docs/Api/TaxRatesApi.md#bulktaxrates) | **POST** /api/v1/tax_rates/bulk | Performs bulk actions on an array of TaxRates
*TaxRatesApi* | [**deleteTaxRate**](docs/Api/TaxRatesApi.md#deletetaxrate) | **DELETE** /api/v1/tax_rates/{id} | Deletes a TaxRate
*TaxRatesApi* | [**editTaxRate**](docs/Api/TaxRatesApi.md#edittaxrate) | **GET** /api/v1/tax_rates/{id}/edit | Shows a Tax Rate for editting
*TaxRatesApi* | [**getTaxRateCreate**](docs/Api/TaxRatesApi.md#gettaxratecreate) | **GET** /api/v1/tax_rates/create | Gets a new blank Tax Rate object
*TaxRatesApi* | [**getTaxRates**](docs/Api/TaxRatesApi.md#gettaxrates) | **GET** /api/v1/tax_rates | Gets a list of tax_rates
*TaxRatesApi* | [**showTaxRate**](docs/Api/TaxRatesApi.md#showtaxrate) | **GET** /api/v1/tax_rates/{id} | Shows a Tax Rate
*TaxRatesApi* | [**updateTaxRate**](docs/Api/TaxRatesApi.md#updatetaxrate) | **PUT** /api/v1/tax_rates/{id} | Updates a tax rate
*TemplatesApi* | [**getShowTemplate**](docs/Api/TemplatesApi.md#getshowtemplate) | **POST** /api/v1/templates | Returns a entity template with the template variables replaced with the Entities
*TokensApi* | [**bulkTokens**](docs/Api/TokensApi.md#bulktokens) | **POST** /api/v1/tokens/bulk | Performs bulk actions on an array of tokens
*TokensApi* | [**deleteToken**](docs/Api/TokensApi.md#deletetoken) | **DELETE** /api/v1/tokens/{id} | Deletes a token
*TokensApi* | [**editToken**](docs/Api/TokensApi.md#edittoken) | **GET** /api/v1/tokens/{id}/edit | Shows a token for editting
*TokensApi* | [**getTokens**](docs/Api/TokensApi.md#gettokens) | **GET** /api/v1/tokens | Gets a list of company tokens
*TokensApi* | [**getTokensCreate**](docs/Api/TokensApi.md#gettokenscreate) | **GET** /api/v1/tokens/create | Gets a new blank token object
*TokensApi* | [**showToken**](docs/Api/TokensApi.md#showtoken) | **GET** /api/v1/tokens/{id} | Shows a token
*TokensApi* | [**storeToken**](docs/Api/TokensApi.md#storetoken) | **POST** /api/v1/tokens | Adds a token
*TokensApi* | [**updateToken**](docs/Api/TokensApi.md#updatetoken) | **PUT** /api/v1/tokens/{id} | Updates a token
*UpdateApi* | [**selfUpdate**](docs/Api/UpdateApi.md#selfupdate) | **POST** /api/v1/self-update | Performs a system update
*UsersApi* | [**bulkUsers**](docs/Api/UsersApi.md#bulkusers) | **POST** /api/v1/users/bulk | Performs bulk actions on an array of users
*UsersApi* | [**deleteUser**](docs/Api/UsersApi.md#deleteuser) | **DELETE** /api/v1/users/{id} | Deletes a User
*UsersApi* | [**detachUser**](docs/Api/UsersApi.md#detachuser) | **DELETE** /api/v1/users/{user}/detach_from_company | Detach an existing user to a company
*UsersApi* | [**editUser**](docs/Api/UsersApi.md#edituser) | **GET** /api/v1/users/{id}/edit | Shows an User for editting
*UsersApi* | [**getUsers**](docs/Api/UsersApi.md#getusers) | **GET** /api/v1/users | Gets a list of users
*UsersApi* | [**getUsersCreate**](docs/Api/UsersApi.md#getuserscreate) | **GET** /api/v1/users/create | Gets a new blank User object
*UsersApi* | [**inviteUser**](docs/Api/UsersApi.md#inviteuser) | **POST** /api/v1/users/{user}/invite | Reconfirm an existing user to a company
*UsersApi* | [**inviteUserReconfirm**](docs/Api/UsersApi.md#inviteuserreconfirm) | **POST** /api/v1/users/{user}/reconfirm | Reconfirm an existing user to a company
*UsersApi* | [**showUser**](docs/Api/UsersApi.md#showuser) | **GET** /api/v1/users/{id} | Shows an User
*UsersApi* | [**storeUser**](docs/Api/UsersApi.md#storeuser) | **POST** /api/v1/users | Adds a User
*UsersApi* | [**updateUser**](docs/Api/UsersApi.md#updateuser) | **PUT** /api/v1/users/{id} | Updates an User
*VendorsApi* | [**bulkVendors**](docs/Api/VendorsApi.md#bulkvendors) | **POST** /api/v1/vendors/bulk | Performs bulk actions on an array of vendors
*VendorsApi* | [**deleteVendor**](docs/Api/VendorsApi.md#deletevendor) | **DELETE** /api/v1/vendors/{id} | Deletes a client
*VendorsApi* | [**editVendor**](docs/Api/VendorsApi.md#editvendor) | **GET** /api/v1/vendors/{id}/edit | Shows a client for editting
*VendorsApi* | [**getVendors**](docs/Api/VendorsApi.md#getvendors) | **GET** /api/v1/vendors | Gets a list of vendors
*VendorsApi* | [**getVendorsCreate**](docs/Api/VendorsApi.md#getvendorscreate) | **GET** /api/v1/vendors/create | Gets a new blank client object
*VendorsApi* | [**showVendor**](docs/Api/VendorsApi.md#showvendor) | **GET** /api/v1/vendors/{id} | Shows a client
*VendorsApi* | [**storeVendor**](docs/Api/VendorsApi.md#storevendor) | **POST** /api/v1/vendors | Adds a client
*VendorsApi* | [**updateVendor**](docs/Api/VendorsApi.md#updatevendor) | **PUT** /api/v1/vendors/{id} | Updates a client
*VendorsApi* | [**uploadVendor**](docs/Api/VendorsApi.md#uploadvendor) | **PUT** /api/v1/vendors/{id}/upload | Uploads a document to a vendor
*WebcronApi* | [**webcron**](docs/Api/WebcronApi.md#webcron) | **GET** /api/v1/webcron | Executes the task scheduler via a webcron service
*WebhooksApi* | [**bulkWebhooks**](docs/Api/WebhooksApi.md#bulkwebhooks) | **POST** /api/v1/webhooks/bulk | Performs bulk actions on an array of Webhooks
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /api/v1/webhooks/{id} | Deletes a Webhook
*WebhooksApi* | [**editWebhook**](docs/Api/WebhooksApi.md#editwebhook) | **GET** /api/v1/webhooks/{id}/edit | Shows a Webhook for editting
*WebhooksApi* | [**getWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /api/v1/webhooks | Gets a list of Webhooks
*WebhooksApi* | [**getWebhooksCreate**](docs/Api/WebhooksApi.md#getwebhookscreate) | **GET** /api/v1/webhooks/create | Gets a new blank Webhook object
*WebhooksApi* | [**showWebhook**](docs/Api/WebhooksApi.md#showwebhook) | **GET** /api/v1/webhooks/{id} | Shows a Webhook
*WebhooksApi* | [**storeWebhook**](docs/Api/WebhooksApi.md#storewebhook) | **POST** /api/v1/webhooks | Adds a Webhook
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PUT** /api/v1/webhooks/{id} | Updates a Webhook
*YodleeApi* | [**yodleeRefreshWebhook**](docs/Api/YodleeApi.md#yodleerefreshwebhook) | **POST** /api/v1/yodlee/refresh | Processing webhooks from Yodlee

## Models

- [Account](docs/Model/Account.md)
- [Activity](docs/Model/Activity.md)
- [BTRules](docs/Model/BTRules.md)
- [BankIntegration](docs/Model/BankIntegration.md)
- [BankTransaction](docs/Model/BankTransaction.md)
- [BankTransactionRule](docs/Model/BankTransactionRule.md)
- [Client](docs/Model/Client.md)
- [ClientContact](docs/Model/ClientContact.md)
- [ClientGatewayToken](docs/Model/ClientGatewayToken.md)
- [Company](docs/Model/Company.md)
- [CompanyGateway](docs/Model/CompanyGateway.md)
- [CompanyLedger](docs/Model/CompanyLedger.md)
- [CompanySettings](docs/Model/CompanySettings.md)
- [CompanyToken](docs/Model/CompanyToken.md)
- [CompanyUser](docs/Model/CompanyUser.md)
- [Credit](docs/Model/Credit.md)
- [CreditPaymentable](docs/Model/CreditPaymentable.md)
- [Design](docs/Model/Design.md)
- [Document](docs/Model/Document.md)
- [Error](docs/Model/Error.md)
- [Expense](docs/Model/Expense.md)
- [ExpenseCategory](docs/Model/ExpenseCategory.md)
- [FeesAndLimits](docs/Model/FeesAndLimits.md)
- [FillableInvoice](docs/Model/FillableInvoice.md)
- [GenericReportSchema](docs/Model/GenericReportSchema.md)
- [GroupSetting](docs/Model/GroupSetting.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoicePaymentable](docs/Model/InvoicePaymentable.md)
- [Payment](docs/Model/Payment.md)
- [PaymentTerm](docs/Model/PaymentTerm.md)
- [Paymentable](docs/Model/Paymentable.md)
- [Product](docs/Model/Product.md)
- [Project](docs/Model/Project.md)
- [Quote](docs/Model/Quote.md)
- [RecurringExpense](docs/Model/RecurringExpense.md)
- [RecurringInvoice](docs/Model/RecurringInvoice.md)
- [RecurringQuote](docs/Model/RecurringQuote.md)
- [Subscription](docs/Model/Subscription.md)
- [SystemLog](docs/Model/SystemLog.md)
- [Task](docs/Model/Task.md)
- [TaskSchedulerSchema](docs/Model/TaskSchedulerSchema.md)
- [TaskStatus](docs/Model/TaskStatus.md)
- [TaxRate](docs/Model/TaxRate.md)
- [Template](docs/Model/Template.md)
- [UpdateJobForASchedulerSchema](docs/Model/UpdateJobForASchedulerSchema.md)
- [UpdateTaskSchedulerSchema](docs/Model/UpdateTaskSchedulerSchema.md)
- [User](docs/Model/User.md)
- [V1ClientStatementBody](docs/Model/V1ClientStatementBody.md)
- [V1EmailsBody](docs/Model/V1EmailsBody.md)
- [V1LoginBody](docs/Model/V1LoginBody.md)
- [V1SignupBody](docs/Model/V1SignupBody.md)
- [V1TemplatesBody](docs/Model/V1TemplatesBody.md)
- [ValidationError](docs/Model/ValidationError.md)
- [ValidationErrorErrors](docs/Model/ValidationErrorErrors.md)
- [Vendor](docs/Model/Vendor.md)
- [VendorContact](docs/Model/VendorContact.md)
- [Webhook](docs/Model/Webhook.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

contact@invoiceninja.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `5.5.58`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
