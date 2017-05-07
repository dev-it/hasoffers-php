<?php
namespace DevIT\HasOffers\Api\Brand\Affiliate;

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
    protected $endpointName = 'AffiliateUser';
    /**
     * Check if a password matches that of an Affiliate User account.
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
     * Create an Affiliate User.
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
     * Find Affiliate Users.
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
     * Find one or more Affiliate Users by their IDs.
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
     * Find a list of all Affiliate User IDs.
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
     * Find a list of all Affiliate User IDs in a specific Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllIdsByAffiliateId($parameters = [])
    {
        return $this->get('findAllIdsByAffiliateId', $parameters);
    }

    /**
     * Find and Affiliate User.
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
     * Grants a permission to an Affiliate User.
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
     * Revokes a permission from an Affiliate User.
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
     * Resets an Affiliate User password to a new, randomly generated password.
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
     * Check if any Affiliate Users in the Network have a specific email address.
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
     * Update an Affiliate User.
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
     * Update one field of an Affiliate User.
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
