<?php
/**
 * PaymentTermssApi
 * PHP version 7.4
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Invoice Ninja
 *
 * Invoice Ninja. Open Source Invoicing lives here.
 *
 * The version of the OpenAPI document: 5.5.58
 * Contact: contact@invoiceninja.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace IvkeyMinds\InvoiceNinjaClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use IvkeyMinds\InvoiceNinjaClient\ApiException;
use IvkeyMinds\InvoiceNinjaClient\Configuration;
use IvkeyMinds\InvoiceNinjaClient\HeaderSelector;
use IvkeyMinds\InvoiceNinjaClient\ObjectSerializer;

/**
 * PaymentTermssApi Class Doc Comment
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentTermssApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'deletePaymentTerm' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation deletePaymentTerm
     *
     * Deletes a Payment Term
     *
     * @param  string $x_api_token The API token to be used for authentication (required)
     * @param  string $x_requested_with Used to send the XMLHttpRequest header (required)
     * @param  string $id The Payment Term Hashed ID (required)
     * @param  string $include Includes child relationships in the response, format is comma separated (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletePaymentTerm'] to see the possible values for this operation
     *
     * @throws \IvkeyMinds\InvoiceNinjaClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deletePaymentTerm($x_api_token, $x_requested_with, $id, $include = null, string $contentType = self::contentTypes['deletePaymentTerm'][0])
    {
        $this->deletePaymentTermWithHttpInfo($x_api_token, $x_requested_with, $id, $include, $contentType);
    }

    /**
     * Operation deletePaymentTermWithHttpInfo
     *
     * Deletes a Payment Term
     *
     * @param  string $x_api_token The API token to be used for authentication (required)
     * @param  string $x_requested_with Used to send the XMLHttpRequest header (required)
     * @param  string $id The Payment Term Hashed ID (required)
     * @param  string $include Includes child relationships in the response, format is comma separated (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletePaymentTerm'] to see the possible values for this operation
     *
     * @throws \IvkeyMinds\InvoiceNinjaClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deletePaymentTermWithHttpInfo($x_api_token, $x_requested_with, $id, $include = null, string $contentType = self::contentTypes['deletePaymentTerm'][0])
    {
        $request = $this->deletePaymentTermRequest($x_api_token, $x_requested_with, $id, $include, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IvkeyMinds\InvoiceNinjaClient\Model\ValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IvkeyMinds\InvoiceNinjaClient\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deletePaymentTermAsync
     *
     * Deletes a Payment Term
     *
     * @param  string $x_api_token The API token to be used for authentication (required)
     * @param  string $x_requested_with Used to send the XMLHttpRequest header (required)
     * @param  string $id The Payment Term Hashed ID (required)
     * @param  string $include Includes child relationships in the response, format is comma separated (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletePaymentTerm'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletePaymentTermAsync($x_api_token, $x_requested_with, $id, $include = null, string $contentType = self::contentTypes['deletePaymentTerm'][0])
    {
        return $this->deletePaymentTermAsyncWithHttpInfo($x_api_token, $x_requested_with, $id, $include, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deletePaymentTermAsyncWithHttpInfo
     *
     * Deletes a Payment Term
     *
     * @param  string $x_api_token The API token to be used for authentication (required)
     * @param  string $x_requested_with Used to send the XMLHttpRequest header (required)
     * @param  string $id The Payment Term Hashed ID (required)
     * @param  string $include Includes child relationships in the response, format is comma separated (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletePaymentTerm'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deletePaymentTermAsyncWithHttpInfo($x_api_token, $x_requested_with, $id, $include = null, string $contentType = self::contentTypes['deletePaymentTerm'][0])
    {
        $returnType = '';
        $request = $this->deletePaymentTermRequest($x_api_token, $x_requested_with, $id, $include, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deletePaymentTerm'
     *
     * @param  string $x_api_token The API token to be used for authentication (required)
     * @param  string $x_requested_with Used to send the XMLHttpRequest header (required)
     * @param  string $id The Payment Term Hashed ID (required)
     * @param  string $include Includes child relationships in the response, format is comma separated (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deletePaymentTerm'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deletePaymentTermRequest($x_api_token, $x_requested_with, $id, $include = null, string $contentType = self::contentTypes['deletePaymentTerm'][0])
    {

        // verify the required parameter 'x_api_token' is set
        if ($x_api_token === null || (is_array($x_api_token) && count($x_api_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_api_token when calling deletePaymentTerm'
            );
        }

        // verify the required parameter 'x_requested_with' is set
        if ($x_requested_with === null || (is_array($x_requested_with) && count($x_requested_with) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_requested_with when calling deletePaymentTerm'
            );
        }

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deletePaymentTerm'
            );
        }



        $resourcePath = '/api/v1/payment_terms/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include,
            'include', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($x_api_token !== null) {
            $headerParams['X-Api-Token'] = ObjectSerializer::toHeaderValue($x_api_token);
        }
        // header params
        if ($x_requested_with !== null) {
            $headerParams['X-Requested-With'] = ObjectSerializer::toHeaderValue($x_requested_with);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \IvkeyMinds\InvoiceNinjaClient\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
