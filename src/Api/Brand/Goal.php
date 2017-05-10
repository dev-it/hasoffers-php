<?php
namespace DevIT\Hasoffers\Api\Brand;

use DevIT\Hasoffers\Base;

class Goal extends Base
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
    protected $endpointName = 'Goal';
    /**
     * Create a Goal.
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
     * Find Goals.
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
     * Find one or more Goals by their IDs.
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
     * Find a Goal by its ID.
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
     * Generate a tracking link for a Goal.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function generateTracking($parameters = [])
    {
        return $this->get('generateTracking', $parameters);
    }

    /**
     * Get Affiliate-specific Payouts for a Goal.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getPayouts($parameters = [])
    {
        return $this->get('getPayouts', $parameters);
    }

    /**
     * Get Affiliate-specific Revenues for a Goal.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getRevenues($parameters = [])
    {
        return $this->get('getRevenues', $parameters);
    }

    /**
     * Returns the Affiliate Tier Payouts and their associated Affiliate Tier for the specified Goal ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getTierPayouts($parameters = [])
    {
        return $this->get('getTierPayouts', $parameters);
    }

    /**
     * Returns the Affiliate Tier Revenues and their associated Affiliate Tier for the specified Goal ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getTierRevenues($parameters = [])
    {
        return $this->get('getTierRevenues', $parameters);
    }

    /**
     * Update a Goal.
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
     * Update one field of a Goal.
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
