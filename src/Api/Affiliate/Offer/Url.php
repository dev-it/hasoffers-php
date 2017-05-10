<?php
namespace DevIT\Hasoffers\Api\Affiliate\Offer;

use DevIT\Hasoffers\Base;

class Url extends Base
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
    protected $endpointName = 'OfferUrl';
    /**
     * Find Offer Urls.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }
}
