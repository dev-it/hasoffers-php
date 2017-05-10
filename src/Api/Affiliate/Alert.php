<?php
namespace DevIT\Hasoffers\Api\Affiliate;

use DevIT\Hasoffers\Base;

class Alert extends Base
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
    protected $endpointName = 'Alert';
    /**
     * Dismiss an Affiliate User Alert by Alert ID for the calling Affiliate User.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function dismissAffiliateUserAlert($parameters = [])
    {
        return $this->get('dismissAffiliateUserAlert', $parameters);
    }

    /**
     * Find Alert by Alert ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    /**
     * Retrieve an Affiliate User's Alerts.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateUserAlerts($parameters = [])
    {
        return $this->get('getAffiliateUserAlerts', $parameters);
    }
}
