<?php
namespace DevIT\HasOffers\Api\Brand;

use DevIT\HasOffers\Base;

class TinyUrl extends Base
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
    protected $endpointName = 'TinyUrl';
    /**
     * Find all Tiny Urls.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    /**
     * Update Tiny Url redirect by Tiny Url ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateRedirect($parameters = [])
    {
        return $this->get('updateRedirect', $parameters);
    }
}
