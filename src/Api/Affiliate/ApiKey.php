<?php
namespace DevIT\HasOffers\Api\Affiliate;

use DevIT\HasOffers\Base;

class ApiKey extends Base
{
    /**
     * API Endpoint Type.
     *
     * @var string
     */
    protected $endpointType = 'Affiliate';

    /**
     * API Endpoint Name.
     *
     * @var string
     */
    protected $endpointName = 'ApiKey';
    /**
     * Generates an API Key for the calling Affiliate User.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function generateApiKey($parameters = [])
    {
        return $this->get('generateApiKey', $parameters);
    }

    /**
     * Returns the API Key for the caller Affiliate User, or NULL if one does not exist.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getUserApiKey($parameters = [])
    {
        return $this->get('getUserApiKey', $parameters);
    }

    /**
     * Retrieve an Affiliate User's Alerts.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function regenerateApiKey($parameters = [])
    {
        return $this->get('regenerateApiKey', $parameters);
    }
}
