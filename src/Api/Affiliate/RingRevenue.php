<?php
namespace DevIT\HasOffers\Api\Affiliate;

use DevIT\HasOffers\Base;

class RingRevenue extends Base
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
    protected $endpointName = 'RingRevenue';
    /**
     * Returns an Affiliate login url for an Offer that utilizes RingRevenue.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function createAffiliateLoginUrl($parameters = [])
    {
        return $this->get('createAffiliateLoginUrl', $parameters);
    }
}
