<?php
namespace DevIT\HasOffers\Api\Brand;

use DevIT\HasOffers\Base;

class Employee extends Base
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
    protected $endpointName = 'Employee';
    /**
     * Check if a password matches that of an Employee account.
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
     * Create an Employee.
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
     * Find Employees.
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
     * Find all Employees who have the Brand.advertiser_management permission.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllAdvertiserManagers($parameters = [])
    {
        return $this->get('findAllAdvertiserManagers', $parameters);
    }

    /**
     * Find all Employees who have the Brand.affiliate_management permission.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllAffiliateManagers($parameters = [])
    {
        return $this->get('findAllAffiliateManagers', $parameters);
    }

    /**
     * Find one or more Employees by their IDs.
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
     * Find all Employees who have a named Permission.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllByPermission($parameters = [])
    {
        return $this->get('findAllByPermission', $parameters);
    }

    /**
     * Find all Employee IDs.
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
     * Find all Employee IDs who have a named Permission.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllIdsByPermission($parameters = [])
    {
        return $this->get('findAllIdsByPermission', $parameters);
    }

    /**
     * Find Brand owner (Employee) information.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findBrandOwnerInformation($parameters = [])
    {
        return $this->get('findBrandOwnerInformation', $parameters);
    }

    /**
     * Find an Employee by its ID.
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
     * Get Employee Commission for referrals by Employee ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getCommission($parameters = [])
    {
        return $this->get('getCommission', $parameters);
    }

    /**
     * Get the latest HasOffers informational message for an Employee.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getHOMessage($parameters = [])
    {
        return $this->get('getHOMessage', $parameters);
    }

    /**
     * Grant a permission to an Employee.
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
     * Remove Employee's access to permission by Employee ID.
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
     * Removes the custom Employee Commission amount/rate for an Employee.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeCustomCommission($parameters = [])
    {
        return $this->get('removeCustomCommission', $parameters);
    }

    /**
     * Resets an Employee password to a new, randomly generated password.
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
     * Set a custom commission amount/rate for an Employee.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setCustomCommission($parameters = [])
    {
        return $this->get('setCustomCommission', $parameters);
    }

    /**
     * Checks if any Employees in the Network have a specific email address.
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
     * Update an Employee.
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
     * Update one field of an Employee.
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
