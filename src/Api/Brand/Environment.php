<?php
namespace DevIT\HasOffers\Api\Brand;

use DevIT\HasOffers\Base;

class Environment extends Base
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
    protected $endpointName = 'Environment';
    /**
     * Find all Environment values.
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
     * Find Environment value by name.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findByName($parameters = [])
    {
        return $this->get('findByName', $parameters);
    }

    /**
     * Get Environment value by name.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getValue($parameters = [])
    {
        return $this->get('getValue', $parameters);
    }

    /**
     * Is Environment name enabled (aka., 0 or 1. 1 being enabled).
     *
     * @param array $parameters
     *
     * @return object
     */
    public function isEnabled($parameters = [])
    {
        return $this->get('isEnabled', $parameters);
    }

    /**
     * Set Environment value by name and value.
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
