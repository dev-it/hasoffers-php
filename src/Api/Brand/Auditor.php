<?php
namespace DevIT\HasOffers\Api\Brand;

use DevIT\HasOffers\Base;

class Auditor extends Base
{
    /**
     * API Endpoint Type.
     *
     * @var string
     */
    protected $endpointType = 'Brand';

    /**
     * API Endpoint Name.
     *
     * @var string
     */
    protected $endpointName = 'Auditor';
    /**
     * Find data audit records logged for the brand.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findBrandDataAudits($parameters = [])
    {
        return $this->get('findBrandDataAudits', $parameters);
    }
}
