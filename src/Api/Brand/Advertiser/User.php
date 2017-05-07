<?php
namespace DevIT\HasOffers\Api\Brand\Advertiser;

use DevIT\HasOffers\Base;

class User extends Base
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
    protected $endpointName = 'AdvertiserUser';
    /**
     * Check if a password matches that of an Advertiser User account.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function checkPassword($parameters = [])
    {
        return $this->get('checkPassword', $parameters);
    }

    /**
     * Create an Advertiser User.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    /**
     * Find Advertiser Users.
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
     * Find one or more Advertiser Users by their IDs.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllByIds($parameters = [])
    {
        return $this->get('findAllByIds', $parameters);
    }

    /**
     * Get a list of all Advertiser User IDs.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllIds($parameters = [])
    {
        return $this->get('findAllIds', $parameters);
    }

    /**
     * Get a list of all Advertiser User IDs in a specific Advertiser account.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllIdsByAdvertiserId($parameters = [])
    {
        return $this->get('findAllIdsByAdvertiserId', $parameters);
    }

    /**
     * Retrieve an Advertiser User.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    /**
     * Grants a permission to an Advertiser User.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function grantAccess($parameters = [])
    {
        return $this->get('grantAccess', $parameters);
    }

    /**
     * Revokes a permission from an Advertiser User.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeAccess($parameters = [])
    {
        return $this->get('removeAccess', $parameters);
    }

    /**
     * Resets an Advertiser User password to a new, randomly generated password.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function resetPassword($parameters = [])
    {
        return $this->get('resetPassword', $parameters);
    }

    /**
     * Checks if any Advertiser Users in the Network have a specific email address.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function uniqueEmail($parameters = [])
    {
        return $this->get('uniqueEmail', $parameters);
    }

    /**
     * Update an Advertiser User.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }

    /**
     * Update one field of an Advertiser User.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateField($parameters = [])
    {
        return $this->get('updateField', $parameters);
    }
}
