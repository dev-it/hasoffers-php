<?php
namespace DevIT\HasOffers\Api\Brand\Custom;

use DevIT\HasOffers\Base;

class MenuLink extends Base
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
    protected $endpointName = 'CustomMenuLink';
    /**
     * Find all custom menu links.
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
     * Finds all active menu links.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findActive($parameters = [])
    {
        return $this->get('findActive', $parameters);
    }
}
