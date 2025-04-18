<?php
/**
 * LoginApi
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
 * LoginApi Class Doc Comment
 *
 * @category Class
 * @package  IvkeyMinds\InvoiceNinjaClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LoginApi
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
        'postLogin' => [
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
     * Operation postLogin
     *
     * Attempts authentication
     *
     * @param  string $x_api_secret The API secret as defined by the .env variable API_SECRET (required)
     * @param  string $x_api_token The API token to be used for authentication (required)
     * @param  string $x_requested_with Used to send the XMLHttpRequest header (required)
     * @param  \IvkeyMinds\InvoiceNinjaClient\Model\V1LoginBody $v1_login_body User credentials (required)
     * @param  string $include Includes child relationships in the response, format is comma separated (optional)
     * @param  string $include_static Returns static variables (optional)
     * @param  string $clear_cache Clears the static cache (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postLogin'] to see the possible values for this operation
     *
     * @throws \IvkeyMinds\InvoiceNinjaClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser|\IvkeyMinds\InvoiceNinjaClient\Model\ValidationError|\IvkeyMinds\InvoiceNinjaClient\Model\Error
     */
    public function postLogin($x_api_secret, $x_api_token, $x_requested_with, $v1_login_body, $include = null, $include_static = null, $clear_cache = null, string $contentType = self::contentTypes['postLogin'][0])
    {
        list($response) = $this->postLoginWithHttpInfo($x_api_secret, $x_api_token, $x_requested_with, $v1_login_body, $include, $include_static, $clear_cache, $contentType);
        return $response;
    }

    /**
     * Operation postLoginWithHttpInfo
     *
     * Attempts authentication
     *
     * @param  string $x_api_secret The API secret as defined by the .env variable API_SECRET (required)
     * @param  string $x_api_token The API token to be used for authentication (required)
     * @param  string $x_requested_with Used to send the XMLHttpRequest header (required)
     * @param  \IvkeyMinds\InvoiceNinjaClient\Model\V1LoginBody $v1_login_body User credentials (required)
     * @param  string $include Includes child relationships in the response, format is comma separated (optional)
     * @param  string $include_static Returns static variables (optional)
     * @param  string $clear_cache Clears the static cache (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postLogin'] to see the possible values for this operation
     *
     * @throws \IvkeyMinds\InvoiceNinjaClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser|\IvkeyMinds\InvoiceNinjaClient\Model\ValidationError|\IvkeyMinds\InvoiceNinjaClient\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function postLoginWithHttpInfo($x_api_secret, $x_api_token, $x_requested_with, $v1_login_body, $include = null, $include_static = null, $clear_cache = null, string $contentType = self::contentTypes['postLogin'][0])
    {
        $request = $this->postLoginRequest($x_api_secret, $x_api_token, $x_requested_with, $v1_login_body, $include, $include_static, $clear_cache, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512);
                            } catch (\Exception $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\IvkeyMinds\InvoiceNinjaClient\Model\ValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\IvkeyMinds\InvoiceNinjaClient\Model\ValidationError' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512);
                            } catch (\Exception $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\IvkeyMinds\InvoiceNinjaClient\Model\ValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                default:
                    if ('\IvkeyMinds\InvoiceNinjaClient\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\IvkeyMinds\InvoiceNinjaClient\Model\Error' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512);
                            } catch (\Exception $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\IvkeyMinds\InvoiceNinjaClient\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512);
                    } catch (\Exception $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
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
     * Operation postLoginAsync
     *
     * Attempts authentication
     *
     * @param  string $x_api_secret The API secret as defined by the .env variable API_SECRET (required)
     * @param  string $x_api_token The API token to be used for authentication (required)
     * @param  string $x_requested_with Used to send the XMLHttpRequest header (required)
     * @param  \IvkeyMinds\InvoiceNinjaClient\Model\V1LoginBody $v1_login_body User credentials (required)
     * @param  string $include Includes child relationships in the response, format is comma separated (optional)
     * @param  string $include_static Returns static variables (optional)
     * @param  string $clear_cache Clears the static cache (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postLogin'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postLoginAsync($x_api_secret, $x_api_token, $x_requested_with, $v1_login_body, $include = null, $include_static = null, $clear_cache = null, string $contentType = self::contentTypes['postLogin'][0])
    {
        return $this->postLoginAsyncWithHttpInfo($x_api_secret, $x_api_token, $x_requested_with, $v1_login_body, $include, $include_static, $clear_cache, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postLoginAsyncWithHttpInfo
     *
     * Attempts authentication
     *
     * @param  string $x_api_secret The API secret as defined by the .env variable API_SECRET (required)
     * @param  string $x_api_token The API token to be used for authentication (required)
     * @param  string $x_requested_with Used to send the XMLHttpRequest header (required)
     * @param  \IvkeyMinds\InvoiceNinjaClient\Model\V1LoginBody $v1_login_body User credentials (required)
     * @param  string $include Includes child relationships in the response, format is comma separated (optional)
     * @param  string $include_static Returns static variables (optional)
     * @param  string $clear_cache Clears the static cache (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postLogin'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postLoginAsyncWithHttpInfo($x_api_secret, $x_api_token, $x_requested_with, $v1_login_body, $include = null, $include_static = null, $clear_cache = null, string $contentType = self::contentTypes['postLogin'][0])
    {
        $returnType = '\IvkeyMinds\InvoiceNinjaClient\Model\CompanyUser';
        $request = $this->postLoginRequest($x_api_secret, $x_api_token, $x_requested_with, $v1_login_body, $include, $include_static, $clear_cache, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'postLogin'
     *
     * @param  string $x_api_secret The API secret as defined by the .env variable API_SECRET (required)
     * @param  string $x_api_token The API token to be used for authentication (required)
     * @param  string $x_requested_with Used to send the XMLHttpRequest header (required)
     * @param  \IvkeyMinds\InvoiceNinjaClient\Model\V1LoginBody $v1_login_body User credentials (required)
     * @param  string $include Includes child relationships in the response, format is comma separated (optional)
     * @param  string $include_static Returns static variables (optional)
     * @param  string $clear_cache Clears the static cache (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postLogin'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postLoginRequest($x_api_secret, $x_api_token, $x_requested_with, $v1_login_body, $include = null, $include_static = null, $clear_cache = null, string $contentType = self::contentTypes['postLogin'][0])
    {

        // verify the required parameter 'x_api_secret' is set
        if ($x_api_secret === null || (is_array($x_api_secret) && count($x_api_secret) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_api_secret when calling postLogin'
            );
        }

        // verify the required parameter 'x_api_token' is set
        if ($x_api_token === null || (is_array($x_api_token) && count($x_api_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_api_token when calling postLogin'
            );
        }

        // verify the required parameter 'x_requested_with' is set
        if ($x_requested_with === null || (is_array($x_requested_with) && count($x_requested_with) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_requested_with when calling postLogin'
            );
        }

        // verify the required parameter 'v1_login_body' is set
        if ($v1_login_body === null || (is_array($v1_login_body) && count($v1_login_body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $v1_login_body when calling postLogin'
            );
        }





        $resourcePath = '/api/v1/login';
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
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_static,
            'include_static', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $clear_cache,
            'clear_cache', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);

        // header params
        if ($x_api_secret !== null) {
            $headerParams['X-Api-Secret'] = ObjectSerializer::toHeaderValue($x_api_secret);
        }
        // header params
        if ($x_api_token !== null) {
            $headerParams['X-Api-Token'] = ObjectSerializer::toHeaderValue($x_api_token);
        }
        // header params
        if ($x_requested_with !== null) {
            $headerParams['X-Requested-With'] = ObjectSerializer::toHeaderValue($x_requested_with);
        }



        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($v1_login_body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \IvkeyMinds\InvoiceNinjaClient\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($v1_login_body));
            } else {
                $httpBody = $v1_login_body;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
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
