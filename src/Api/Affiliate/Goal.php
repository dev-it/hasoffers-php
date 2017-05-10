<?php
namespace DevIT\Hasoffers\Api\Affiliate;

use DevIT\Hasoffers\Base;

class Goal extends Base
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
    protected $endpointName = 'Goal';
    /**
     * Find Goals.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }
}
