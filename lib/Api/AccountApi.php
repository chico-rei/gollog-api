<?php
/**
 * AccountApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Central do desenvolvedor - Nexlog API
 *
 * De maneira pratica e rápida, entenda como conectar e consumir todas as informações necessárias para seu negócio. </br> <h2> Ambientes</h2> Os ambientes do gateway de integração são divididos atualmente em 2 ambientes:<br> &ensp;&ensp;&ensp;&ensp;&ensp;<b>QA</b>:&ensp;ambiente utilizado para desenvolvimento de novas integrações e testes com os clientes e parceiros.<br>&ensp;&ensp;&ensp;<b>Prod</b>:&ensp;ambiente de produção com todas os serviços expostos com certificação de qualidade. </br> <h2>Informações Adicionais</h2>                 A central do desenvolvedor conta com uma completa documentação referente a todos os APIs expostos, com exemplos de request/response, modelo e possibilidade de realizar testes direto no barramento. </br></br> Atualmente nossa central está separada com 2 dominios de integração:</br>&ensp;&ensp;&ensp; <b>- Account</b> <br> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Serviços para autenticação quando necessário.</br>&ensp;&ensp;&ensp; <b>- Sales</b> <br> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Disponibilização de serviços para utilização de rastreio, cotações, minutas e documentos autorizados.<br>&ensp;&ensp;&ensp; <b>- Operations</b> <br> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Disponibilização de consulta de bases operacionais.<br>(*)Dependendo do endpoint utilizado, algumas informações são obrigatórias, como identificador da aplicação/cliente e token.<br><br> Dúvidas sobre como utilizar, entre em contato br-operations@ttinteractive.com
 *
 * OpenAPI spec version: V1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * AccountApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation accountSignIn
     *
     * Log user into the system
     *
     * @param  string $company_key IATA company code \&quot;example G1\&quot; (required)
     * @param  \Swagger\Client\Model\Model $model Sigin model with login information (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\SignInResponse
     */
    public function accountSignIn($company_key, $model)
    {
        list($response) = $this->accountSignInWithHttpInfo($company_key, $model);
        return $response;
    }

    /**
     * Operation accountSignInWithHttpInfo
     *
     * Log user into the system
     *
     * @param  string $company_key IATA company code \&quot;example G1\&quot; (required)
     * @param  \Swagger\Client\Model\Model $model Sigin model with login information (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\SignInResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountSignInWithHttpInfo($company_key, $model)
    {
        $returnType = '\Swagger\Client\Model\SignInResponse';
        $request = $this->accountSignInRequest($company_key, $model);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
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
                        '\Swagger\Client\Model\SignInResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountSignInAsync
     *
     * Log user into the system
     *
     * @param  string $company_key IATA company code \&quot;example G1\&quot; (required)
     * @param  \Swagger\Client\Model\Model $model Sigin model with login information (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountSignInAsync($company_key, $model)
    {
        return $this->accountSignInAsyncWithHttpInfo($company_key, $model)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountSignInAsyncWithHttpInfo
     *
     * Log user into the system
     *
     * @param  string $company_key IATA company code \&quot;example G1\&quot; (required)
     * @param  \Swagger\Client\Model\Model $model Sigin model with login information (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountSignInAsyncWithHttpInfo($company_key, $model)
    {
        $returnType = '\Swagger\Client\Model\SignInResponse';
        $request = $this->accountSignInRequest($company_key, $model);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'accountSignIn'
     *
     * @param  string $company_key IATA company code \&quot;example G1\&quot; (required)
     * @param  \Swagger\Client\Model\Model $model Sigin model with login information (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function accountSignInRequest($company_key, $model)
    {
        // verify the required parameter 'company_key' is set
        if ($company_key === null || (is_array($company_key) && count($company_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_key when calling accountSignIn'
            );
        }
        // verify the required parameter 'model' is set
        if ($model === null || (is_array($model) && count($model) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $model when calling accountSignIn'
            );
        }

        $resourcePath = '/account/signin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($company_key !== null) {
            $headerParams['companyKey'] = ObjectSerializer::toHeaderValue($company_key);
        }


        // body params
        $_tempBody = null;
        if (isset($model)) {
            $_tempBody = $model;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json'],
                ['application/json', 'text/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation accountSignOut
     *
     * Log out current logged in user session
     *
     * @param  string $company_key IATA company code example \&quot;G1\&quot; (required)
     * @param  float $session_id Session id example \&quot;50836\&quot; (required)
     * @param  string $session_token Session token example \&quot;d29608a44094429b8b40723018cd201\&quot; (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function accountSignOut($company_key, $session_id, $session_token)
    {
        $this->accountSignOutWithHttpInfo($company_key, $session_id, $session_token);
    }

    /**
     * Operation accountSignOutWithHttpInfo
     *
     * Log out current logged in user session
     *
     * @param  string $company_key IATA company code example \&quot;G1\&quot; (required)
     * @param  float $session_id Session id example \&quot;50836\&quot; (required)
     * @param  string $session_token Session token example \&quot;d29608a44094429b8b40723018cd201\&quot; (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountSignOutWithHttpInfo($company_key, $session_id, $session_token)
    {
        $returnType = '';
        $request = $this->accountSignOutRequest($company_key, $session_id, $session_token);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation accountSignOutAsync
     *
     * Log out current logged in user session
     *
     * @param  string $company_key IATA company code example \&quot;G1\&quot; (required)
     * @param  float $session_id Session id example \&quot;50836\&quot; (required)
     * @param  string $session_token Session token example \&quot;d29608a44094429b8b40723018cd201\&quot; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountSignOutAsync($company_key, $session_id, $session_token)
    {
        return $this->accountSignOutAsyncWithHttpInfo($company_key, $session_id, $session_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountSignOutAsyncWithHttpInfo
     *
     * Log out current logged in user session
     *
     * @param  string $company_key IATA company code example \&quot;G1\&quot; (required)
     * @param  float $session_id Session id example \&quot;50836\&quot; (required)
     * @param  string $session_token Session token example \&quot;d29608a44094429b8b40723018cd201\&quot; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountSignOutAsyncWithHttpInfo($company_key, $session_id, $session_token)
    {
        $returnType = '';
        $request = $this->accountSignOutRequest($company_key, $session_id, $session_token);

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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'accountSignOut'
     *
     * @param  string $company_key IATA company code example \&quot;G1\&quot; (required)
     * @param  float $session_id Session id example \&quot;50836\&quot; (required)
     * @param  string $session_token Session token example \&quot;d29608a44094429b8b40723018cd201\&quot; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function accountSignOutRequest($company_key, $session_id, $session_token)
    {
        // verify the required parameter 'company_key' is set
        if ($company_key === null || (is_array($company_key) && count($company_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_key when calling accountSignOut'
            );
        }
        // verify the required parameter 'session_id' is set
        if ($session_id === null || (is_array($session_id) && count($session_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $session_id when calling accountSignOut'
            );
        }
        // verify the required parameter 'session_token' is set
        if ($session_token === null || (is_array($session_token) && count($session_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $session_token when calling accountSignOut'
            );
        }

        $resourcePath = '/account/signout';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($company_key !== null) {
            $headerParams['companyKey'] = ObjectSerializer::toHeaderValue($company_key);
        }
        // header params
        if ($session_id !== null) {
            $headerParams['sessionId'] = ObjectSerializer::toHeaderValue($session_id);
        }
        // header params
        if ($session_token !== null) {
            $headerParams['sessionToken'] = ObjectSerializer::toHeaderValue($session_token);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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