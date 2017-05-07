<?php
namespace DevIT\HasOffers\Api\Brand;

use DevIT\HasOffers\Base;

class SavedReports extends Base
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
    protected $endpointName = 'SavedReports';
    /**
     * Create a Saved Report.
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
     * Delete a Saved Report.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function delete($parameters = [])
    {
        return $this->get('delete', $parameters);
    }

    /**
     * Find any Saved Reports having a specified hash.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findByHash($parameters = [])
    {
        return $this->get('findByHash', $parameters);
    }

    /**
     * Find a Saved Report by its ID.
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
     * Update a Saved Report.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }
}
