<?php
namespace DevIT\Hasoffers\Api\Brand;

use DevIT\Hasoffers\Base;

class Alert extends Base
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
    protected $endpointName = 'Alert';
    /**
     * Create an Alert.
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
     * Sends an existing Alert to an Affiliate User.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function createAffiliateUserAlert($parameters = [])
    {
        return $this->get('createAffiliateUserAlert', $parameters);
    }

    /**
     * Sends an existing Alert to an Employee.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function createEmployeeAlert($parameters = [])
    {
        return $this->get('createEmployeeAlert', $parameters);
    }

    /**
     * Dismiss an Alert that was sent to an Affiliate User.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function dismissAffiliateUserAlert($parameters = [])
    {
        return $this->get('dismissAffiliateUserAlert', $parameters);
    }

    /**
     * Dismiss all Alerts that were sent to an Affiliate User.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function dismissAllAffiliateUserAlerts($parameters = [])
    {
        return $this->get('dismissAllAffiliateUserAlerts', $parameters);
    }

    /**
     * Dismiss all Alerts that were sent to an Employee.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function dismissAllEmployeeAlerts($parameters = [])
    {
        return $this->get('dismissAllEmployeeAlerts', $parameters);
    }

    /**
     * Dismiss an Alert that was sent to an Employee.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function dismissEmployeeAlert($parameters = [])
    {
        return $this->get('dismissEmployeeAlert', $parameters);
    }

    /**
     * Find Alerts.
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
     * Find one or more Alerts by their IDs.
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
     * Find an Alert its ID.
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
     * Retrieve a list of Alerts assigned to an Affiliate User.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateUserAlerts($parameters = [])
    {
        return $this->get('getAffiliateUserAlerts', $parameters);
    }

    /**
     * Retrieve a list of Alerts assigned to an Employee.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getEmployeeAlerts($parameters = [])
    {
        return $this->get('getEmployeeAlerts', $parameters);
    }

    /**
     * Send an existing Alert to a group of Affiliate Users.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function sendToAffiliateUsers($parameters = [])
    {
        return $this->get('sendToAffiliateUsers', $parameters);
    }

    /**
     * Send an existing Alert to a group of Employees.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function sendToEmployees($parameters = [])
    {
        return $this->get('sendToEmployees', $parameters);
    }

    /**
     * Update the properties of an existing Alert.
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
     * Update a property of an existing Alert.
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
