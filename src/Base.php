<?php
namespace DevIT\HasOffers;

class Base
{
    /**
     * HTTP Client.
     *
     * @var object
     */
    private $httpClient;

    /**
     * API Endpoint Type.
     *
     * @var string
     */
    protected $endpointType;

    /**
     * API Endpoint Name(space).
     *
     * @var string
     */
    protected $endpointName;

    /**
     * Constructor.
     *
     * @param object $httpClient
     */
    public function __construct($httpClient)
    {
        $this->setHttpClient($httpClient);
        $this->getHttpClient()->setApiType($this->endpointType);
        $this->getHttpClient()->setApiNamespace($this->endpointName);
    }

    /**
     * Send a GET request.
     *
     * @param string $path
     * @param array  $parameters
     *
     * @return object
     */
    public function get($path, $parameters = [])
    {
        return $this->getHttpClient()->get($path, $parameters);
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

    /**
     * Get the API Endpoint Type.
     *
     * @return string
     */
    public function getEndpointType()
    {
        return $this->endpointType;
    }

    /**
     * Set the API Endpoint Type.
     *
     * @param string $endpointType
     */
    public function setEndpointType($endpointType)
    {
        $this->endpointType = $endpointType;
    }

    /**
     * Get the API Endpoint Name.
     *
     * @return object
     */
    public function getEndpointName()
    {
        return $this->endpointName;
    }

    /**
     * Set the API Endpoint Name.
     *
     * @param string $endpointName
     */
    public function setEndpointName($endpointName)
    {
        $this->endpointName = $endpointName;
    }
}
