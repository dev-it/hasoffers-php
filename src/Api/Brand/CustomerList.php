<?php
namespace DevIT\Hasoffers\Api\Brand;

use DevIT\Hasoffers\Base;

class CustomerList extends Base
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
    protected $endpointName = 'CustomerList';
    /**
     * Create a Customer Attribute on a Customer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addCustomerAttribute($parameters = [])
    {
        return $this->get('addCustomerAttribute', $parameters);
    }

    /**
     * Create a Customer List Attribute.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addListAttribute($parameters = [])
    {
        return $this->get('addListAttribute', $parameters);
    }

    /**
     * Create a Customer List.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function createList($parameters = [])
    {
        return $this->get('createList', $parameters);
    }

    /**
     * Find Customers.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllCustomers($parameters = [])
    {
        return $this->get('findAllCustomers', $parameters);
    }

    /**
     * Find Customer Lists.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllLists($parameters = [])
    {
        return $this->get('findAllLists', $parameters);
    }

    /**
     * Find one or more Customer Lists by their IDs.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllListsByIds($parameters = [])
    {
        return $this->get('findAllListsByIds', $parameters);
    }

    /**
     * Find Subscriptions.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllSubscriptions($parameters = [])
    {
        return $this->get('findAllSubscriptions', $parameters);
    }

    /**
     * Find a Customer by its ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findCustomerById($parameters = [])
    {
        return $this->get('findCustomerById', $parameters);
    }

    /**
     * Find a Customer List by its ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findListById($parameters = [])
    {
        return $this->get('findListById', $parameters);
    }

    /**
     * Find a Subscription by its ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findSubscriptionById($parameters = [])
    {
        return $this->get('findSubscriptionById', $parameters);
    }

    /**
     * Get a list of Customer List Attributes for a Customer List.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getListAttributes($parameters = [])
    {
        return $this->get('getListAttributes', $parameters);
    }

    /**
     * Deletes a Customer Attribute.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeCustomerAttribute($parameters = [])
    {
        return $this->get('removeCustomerAttribute', $parameters);
    }

    /**
     * Delete a Customer List Attribute.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeListAttribute($parameters = [])
    {
        return $this->get('removeListAttribute', $parameters);
    }

    /**
     * Update a Customer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateCustomer($parameters = [])
    {
        return $this->get('updateCustomer', $parameters);
    }

    /**
     * Update a Customer Attribute.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateCustomerAttribute($parameters = [])
    {
        return $this->get('updateCustomerAttribute', $parameters);
    }

    /**
     * Update a Customer List.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateList($parameters = [])
    {
        return $this->get('updateList', $parameters);
    }

    /**
     * Update a Customer List Attribute.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateListAttribute($parameters = [])
    {
        return $this->get('updateListAttribute', $parameters);
    }

    /**
     * Update one field of a Customer List.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateListField($parameters = [])
    {
        return $this->get('updateListField', $parameters);
    }

    /**
     * Update a Subscription.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateSubscription($parameters = [])
    {
        return $this->get('updateSubscription', $parameters);
    }
}
