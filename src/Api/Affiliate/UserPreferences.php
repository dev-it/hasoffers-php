<?php
namespace DevIT\HasOffers\Api\Affiliate;

use DevIT\HasOffers\Base;

class UserPreferences extends Base
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
    protected $endpointName = 'UserPreferences';
    /**
     * Set a value for one of the calling Affiliate User's preferences.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setValue($parameters = [])
    {
        return $this->get('setValue', $parameters);
    }
}
