<?php
namespace DevIT\Hasoffers\Api\Brand;

use DevIT\Hasoffers\Base;

class Authentication extends Base
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
    protected $endpointName = 'Authentication';
    /**
     * Find User by email, password and type.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findUserByCredentials($parameters = [])
    {
        return $this->get('findUserByCredentials', $parameters);
    }

    /**
     * Find User type by session token.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findUserByToken($parameters = [])
    {
        return $this->get('findUserByToken', $parameters);
    }
}
