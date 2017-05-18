<?php
namespace DevIT\Hasoffers;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    /**
     * API Base URL - Brand.
     *
     * @var string
     */
    private $apiUrlBrand = 'https://api.hasoffers.com/Apiv3/json?NetworkId=%s&Target=%s&Method=%s&NetworkToken=%s';

    /**
     * API Base URL - Affiliate.
     *
     * @var string
     */
    private $apiUrlAffiliate = 'https://api.hasoffers.com/Apiv3/json?NetworkId=%s&Target=%s_%s&Method=%s&api_key=%s';

    /**
     * HTTP Headers.
     *
     * @var array
     */
    private $headers = ['User-Agent' => 'DevIT-HasOffers/1.0.0'];

    /**
     * HTTP Client.
     *
     * @var object
     */
    private $httpClient;

    /**
     * API Key.
     *
     * @var string
     */
    private $apiKey;

    /**
     * Network ID.
     *
     * @var string
     */
    private $networkId;

    /**
     * API Type.
     *
     * @var string
     */
    private $apiType;

    /**
     * API Namespace.
     *
     * @var string
     */
    private $apiNamespace;

    /**
     * Constructor.
     *
     * @param string $apiKey
     * @param string $networkId
     */
    public function __construct($apiKey, $networkId = null)
    {
        $this->setApiKey($apiKey);

        $this->setNetworkId($networkId);

        $this->setHttpClient(new GuzzleClient([
            'defaults' => [
                'headers'  => $this->getHeaders(),
            ],
        ]));
    }

    /**
     * Initialize the given API class.
     *
     * @param string $class
     *
     * @return object
     */
    public function api($class)
    {
        $class = "DevIT\\Hasoffers\\Api\\".$class;

        return new $class($this);
    }

    /**
     * Send a GET request.
     *
     * @param string $apiMethod
     * @param array  $parameters
     *
     * @return object
     */
    public function get($apiMethod, $parameters = [])
    {
        $requestUrl = $this->buildUrl($apiMethod, $parameters);
        $requestUrl = urldecode($requestUrl);

        $response   = $this->getHttpClient()->get($requestUrl);

        return $this->handleResponse($response);
    }

    /**
     * Build the request url.
     *
     * @param string $apiMethod
     * @param array  $parameter
     *
     * @return string
     */
    private function buildUrl($apiMethod, $parameters)
    {
        switch ($this->getApiType()) {
            case 'Brand':
                $url = sprintf($this->apiUrlBrand, $this->getNetworkId(), $this->getApiNamespace(), $apiMethod, $this->getApiKey());
            break;

            case 'Affiliate':
                $url = sprintf($this->apiUrlAffiliate, $this->getNetworkId(), $this->getApiType(), $this->getApiNamespace(), $apiMethod, $this->getApiKey());
            break;
        }

        return $url.'&'.http_build_query($parameters);
    }

    /**
     * Handle the response.
     *
     * @param object $response
     *
     * @return object
     */
    private function handleResponse($response)
    {
        $statusCode = $response->getStatusCode();
        $body = $response->json(['object' => true]);

        if ($statusCode >= 200 && $statusCode < 300) {
            return $body;
        }

        throw new \Exception($body->message, $statusCode);
    }

    /**
     * Get the Affiliate API Base URL.
     *
     * @return string
     */
    public function getApiUrlAffiliate()
    {
        return $this->apiUrlAffiliate;
    }

    /**
     * Set the Affiliate API Base URL.
     *
     * @param string $apiUrlAffiliate
     */
    public function setApiUrlAffiliate($apiUrlAffiliate)
    {
        $this->apiUrlAffiliate = $apiUrlAffiliate;
    }

    /**
     * Get the Brand API Base URL.
     *
     * @return string
     */
    public function getApiUrlBrand()
    {
        return $this->apiUrlBrand;
    }

    /**
     * Set the Brand API Base URL.
     *
     * @param string $apiUrlBrand
     */
    public function setApiUrlBrand($apiUrlBrand)
    {
        $this->apiUrlBrand = $apiUrlBrand;
    }


    /**
     * Get the HTTP Headers.
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Set the HTTP Headers.
     *
     * @param array $headers
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    /**
     * Get the API Key.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set the API Key.
     *
     * @param string $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Get the Network ID.
     *
     * @return string
     */
    public function getNetworkId()
    {
        return $this->networkId;
    }

    /**
     * Set the Network ID.
     *
     * @param string $networkId
     */
    public function setNetworkId($networkId)
    {
        $this->networkId = $networkId;
    }

    /**
     * Get the API Type.
     *
     * @return string
     */
    public function getApiType()
    {
        return $this->apiType;
    }

    /**
     * Set the API Type.
     *
     * @param string $apiType
     */
    public function setApiType($apiType)
    {
        $this->apiType = $apiType;
    }

    /**
     * Get the API Namespace.
     *
     * @return string
     */
    public function getApiNamespace()
    {
        return $this->apiNamespace;
    }

    /**
     * Set the API Namespace.
     *
     * @param string $apiNamespace
     */
    public function setApiNamespace($apiNamespace)
    {
        $this->apiNamespace = $apiNamespace;
    }

    /**
     * Get the HTTP Client.
     *
     * @return object
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * Set the HTTP Client.
     *
     * @param object $httpClient
     */
    public function setHttpClient($httpClient)
    {
        $this->httpClient = $httpClient;
    }
}
