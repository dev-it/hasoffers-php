<?php
namespace DevIT\HasOffers\Api\Brand\Custom;

use DevIT\HasOffers\Base;

class Page extends Base
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
    protected $endpointName = 'CustomPage';
    /**
     * Find custom pages.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function find($parameters = [])
    {
        return $this->get('find', $parameters);
    }

    /**
     * Find custom page by id.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }
}
