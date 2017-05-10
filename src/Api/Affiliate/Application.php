<?php
namespace DevIT\Hasoffers\Api\Affiliate;

use DevIT\Hasoffers\Base;

class Application extends Base
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
    protected $endpointName = 'Application';
    /**
     * Retrieves a list of all countries.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllCountries($parameters = [])
    {
        return $this->get('findAllCountries', $parameters);
    }

    /**
     * Find all jump hostnames (tracking domains) by filters.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllHostnames($parameters = [])
    {
        return $this->get('findAllHostnames', $parameters);
    }

    /**
     * Find all Offer Categories by filters.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllOfferCategories($parameters = [])
    {
        return $this->get('findAllOfferCategories', $parameters);
    }

    /**
     * Find all Timezones.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllTimezones($parameters = [])
    {
        return $this->get('findAllTimezones', $parameters);
    }
}
