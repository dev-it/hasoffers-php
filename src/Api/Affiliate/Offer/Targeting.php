<?php
namespace DevIT\HasOffers\Api\Affiliate\Offer;

use DevIT\HasOffers\Base;

class Targeting extends Base
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
    protected $endpointName = 'OfferTargeting';
    /**
     * Returns all TargetRuleOffers (with TargetRule attached) for the specified Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getRuleTargetingForOffer($parameters = [])
    {
        return $this->get('getRuleTargetingForOffer', $parameters);
    }
}
