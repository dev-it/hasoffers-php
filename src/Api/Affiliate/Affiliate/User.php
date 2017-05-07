<?php
namespace DevIT\HasOffers\Api\Affiliate\Affiliate;

use DevIT\HasOffers\Base;

class User extends Base
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
    protected $endpointName = 'AffiliateUser';
    /**
     * Create an Affiliate User.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    /**
     * Find Affiliate Users.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    /**
     * Find an Affiliate User by ID.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    /**
     * Returns a variety of details about an Affiliate User,
     * including their details, their Affiliate details,
     * Account Manager details (if enabled), relevant Brand Preferences,
     * and their enabled Features.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function getContext($parameters = [])
    {
        return $this->get('getContext', $parameters);
    }

    /**
     * Sets an Affiliate User's permissions.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function setPermissions($parameters = [])
    {
        return $this->get('setPermissions', $parameters);
    }

    /**
     * Update an Affiliate User.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }
}
