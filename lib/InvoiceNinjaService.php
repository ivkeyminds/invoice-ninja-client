<?php

namespace IvkeyMinds\InvoiceNinjaClient;

use IvkeyMinds\InvoiceNinjaClient\Api\ActvitiesApi;
use IvkeyMinds\InvoiceNinjaClient\Api\BankIntegrationsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\BankTransactionRulesApi;
use IvkeyMinds\InvoiceNinjaClient\Api\BankTransactionsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ChartsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ClaimLicenseApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ClientGatewayTokensApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ClientsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\CompaniesApi;
use IvkeyMinds\InvoiceNinjaClient\Api\CompanyGatewaysApi;
use IvkeyMinds\InvoiceNinjaClient\Api\CompanyLedgerApi;
use IvkeyMinds\InvoiceNinjaClient\Api\CompanyUserApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ConnectedAccountApi;
use IvkeyMinds\InvoiceNinjaClient\Api\CreditsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\DesignsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\DocumentsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\EmailsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ExpenseApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ExpenseCategoriesApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ExpensesApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ExportApi;
use IvkeyMinds\InvoiceNinjaClient\Api\GroupSettingsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\HealthCheckApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ImportApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ImportsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\InvoicesApi;
use IvkeyMinds\InvoiceNinjaClient\Api\LoginApi;
use IvkeyMinds\InvoiceNinjaClient\Api\LogoutApi;
use IvkeyMinds\InvoiceNinjaClient\Api\MigrationApi;
use IvkeyMinds\InvoiceNinjaClient\Api\OneTimeTokenApi;
use IvkeyMinds\InvoiceNinjaClient\Api\PaymentsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\PaymentTermsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\PaymentTermssApi;
use IvkeyMinds\InvoiceNinjaClient\Api\PingApi;
use IvkeyMinds\InvoiceNinjaClient\Api\PostmarkApi;
use IvkeyMinds\InvoiceNinjaClient\Api\PreviewApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ProductsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ProjectsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\PurchaseOrdersApi;
use IvkeyMinds\InvoiceNinjaClient\Api\PurhcaseOrdersApi;
use IvkeyMinds\InvoiceNinjaClient\Api\QuotesApi;
use IvkeyMinds\InvoiceNinjaClient\Api\RecurringExpenseApi;
use IvkeyMinds\InvoiceNinjaClient\Api\RecurringExpensesApi;
use IvkeyMinds\InvoiceNinjaClient\Api\RecurringInvoicesApi;
use IvkeyMinds\InvoiceNinjaClient\Api\RecurringQuotesApi;
use IvkeyMinds\InvoiceNinjaClient\Api\RefreshApi;
use IvkeyMinds\InvoiceNinjaClient\Api\ReportsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\SignupApi;
use IvkeyMinds\InvoiceNinjaClient\Api\StaticsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\SubscriptionsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\SupportApi;
use IvkeyMinds\InvoiceNinjaClient\Api\SystemLogsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\TasksApi;
use IvkeyMinds\InvoiceNinjaClient\Api\TaskSchedulersApi;
use IvkeyMinds\InvoiceNinjaClient\Api\TaskStatusApi;
use IvkeyMinds\InvoiceNinjaClient\Api\TaskStatussApi;
use IvkeyMinds\InvoiceNinjaClient\Api\TaxRatesApi;
use IvkeyMinds\InvoiceNinjaClient\Api\TemplatesApi;
use IvkeyMinds\InvoiceNinjaClient\Api\TokensApi;
use IvkeyMinds\InvoiceNinjaClient\Api\UpdateApi;
use IvkeyMinds\InvoiceNinjaClient\Api\UsersApi;
use IvkeyMinds\InvoiceNinjaClient\Api\VendorsApi;
use IvkeyMinds\InvoiceNinjaClient\Api\WebcronApi;
use IvkeyMinds\InvoiceNinjaClient\Api\WebhooksApi;
use IvkeyMinds\InvoiceNinjaClient\Api\YodleeApi;
use IvkeyMinds\InvoiceNinjaClient\Configuration;
use GuzzleHttp\Client as GuzzleClient;

/**
 * @property ActvitiesApi actvities
 * @property BankIntegrationsApi bankIntegrations
 * @property BankTransactionRulesApi bankTransactionRules
 * @property BankTransactionsApi bankTransactions
 * @property ChartsApi charts
 * @property ClaimLicenseApi claimLicense
 * @property ClientGatewayTokensApi clientGatewayTokens
 * @property ClientsApi clients
 * @property CompaniesApi companies
 * @property CompanyGatewaysApi companyGateways
 * @property CompanyLedgerApi companyLedger
 * @property CompanyUserApi companyUser
 * @property ConnectedAccountApi connectedAccount
 * @property CreditsApi credits
 * @property DesignsApi designs
 * @property DocumentsApi documents
 * @property EmailsApi emails
 * @property ExpenseApi expense
 * @property ExpenseCategoriesApi expenseCategories
 * @property ExpensesApi expenses
 * @property ExportApi export
 * @property GroupSettingsApi groupSettings
 * @property HealthCheckApi healthCheck
 * @property ImportApi import
 * @property ImportsApi imports
 * @property InvoicesApi invoices
 * @property LoginApi login
 * @property LogoutApi logout
 * @property MigrationApi migration
 * @property OneTimeTokenApi oneTimeToken
 * @property PaymentsApi payments
 * @property PaymentTermsApi paymentTerms
 * @property PaymentTermssApi paymentTermss
 * @property PingApi ping
 * @property PostmarkApi postmark
 * @property PreviewApi preview
 * @property ProductsApi products
 * @property ProjectsApi projects
 * @property PurchaseOrdersApi purchaseOrders
 * @property PurhcaseOrdersApi purhcaseOrders
 * @property QuotesApi quotes
 * @property RecurringExpenseApi recurringExpense
 * @property RecurringExpensesApi recurringExpenses
 * @property RecurringInvoicesApi recurringInvoices
 * @property RecurringQuotesApi recurringQuotes
 * @property RefreshApi refresh
 * @property ReportsApi reports
 * @property SignupApi signup
 * @property StaticsApi statics
 * @property SubscriptionsApi subscriptions
 * @property SupportApi support
 * @property SystemLogsApi systemLogs
 * @property TasksApi tasks
 * @property TaskSchedulersApi taskSchedulers
 * @property TaskStatusApi taskStatus
 * @property TaskStatussApi taskStatuss
 * @property TaxRatesApi taxRates
 * @property TemplatesApi templates
 * @property TokensApi tokens
 * @property UpdateApi update
 * @property UsersApi users
 * @property VendorsApi vendors
 * @property WebcronApi webcron
 * @property WebhooksApi webhooks
 * @property YodleeApi yodlee
 */
class InvoiceNinjaService
{
    public $config;
    public $httpClient;

    public $apis = [
        'actvities' => ActvitiesApi::class,
        'bankIntegrations' => BankIntegrationsApi::class,
        'bankTransactionRules' => BankTransactionRulesApi::class,
        'bankTransactions' => BankTransactionsApi::class,
        'charts' => ChartsApi::class,
        'claimLicense' => ClaimLicenseApi::class,
        'clientGatewayTokens' => ClientGatewayTokensApi::class,
        'clients' => ClientsApi::class,
        'companies' => CompaniesApi::class,
        'companyGateways' => CompanyGatewaysApi::class,
        'companyLedger' => CompanyLedgerApi::class,
        'companyUser' => CompanyUserApi::class,
        'connectedAccount' => ConnectedAccountApi::class,
        'credits' => CreditsApi::class,
        'designs' => DesignsApi::class,
        'documents' => DocumentsApi::class,
        'emails' => EmailsApi::class,
        'expense' => ExpenseApi::class,
        'expenseCategories' => ExpenseCategoriesApi::class,
        'expenses' => ExpensesApi::class,
        'export' => ExportApi::class,
        'groupSettings' => GroupSettingsApi::class,
        'healthCheck' => HealthCheckApi::class,
        'import' => ImportApi::class,
        'imports' => ImportsApi::class,
        'invoices' => InvoicesApi::class,
        'login' => LoginApi::class,
        'logout' => LogoutApi::class,
        'migration' => MigrationApi::class,
        'oneTimeToken' => OneTimeTokenApi::class,
        'payments' => PaymentsApi::class,
        'paymentTerms' => PaymentTermsApi::class,
        'paymentTermss' => PaymentTermssApi::class,
        'ping' => PingApi::class,
        'postmark' => PostmarkApi::class,
        'preview' => PreviewApi::class,
        'products' => ProductsApi::class,
        'projects' => ProjectsApi::class,
        'purchaseOrders' => PurchaseOrdersApi::class,
        'purhcaseOrders' => PurhcaseOrdersApi::class,
        'quotes' => QuotesApi::class,
        'recurringExpense' => RecurringExpenseApi::class,
        'recurringExpenses' => RecurringExpensesApi::class,
        'recurringInvoices' => RecurringInvoicesApi::class,
        'recurringQuotes' => RecurringQuotesApi::class,
        'refresh' => RefreshApi::class,
        'reports' => ReportsApi::class,
        'signup' => SignupApi::class,
        'statics' => StaticsApi::class,
        'subscriptions' => SubscriptionsApi::class,
        'support' => SupportApi::class,
        'systemLogs' => SystemLogsApi::class,
        'tasks' => TasksApi::class,
        'taskSchedulers' => TaskSchedulersApi::class,
        'taskStatus' => TaskStatusApi::class,
        'taskStatuss' => TaskStatussApi::class,
        'taxRates' => TaxRatesApi::class,
        'templates' => TemplatesApi::class,
        'tokens' => TokensApi::class,
        'update' => UpdateApi::class,
        'users' => UsersApi::class,
        'vendors' => VendorsApi::class,
        'webcron' => WebcronApi::class,
        'webhooks' => WebhooksApi::class,
        'yodlee' => YodleeApi::class,
    ];

    public function __construct($accessToken, $host)
    {
        $this->httpClient = new GuzzleClient();
        $this->config = new Configuration();

        $this->config->setAccessToken($accessToken);
        $this->config->setHost($host);
    }

    public function __get($name)
    {
        if (isset($this->apis[$name])) {
            return new ApiWrapper(new $this->apis[$name]($this->httpClient, $this->config), $this->config->getAccessToken(), 'XMLHttpRequest');
        }
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }
}
