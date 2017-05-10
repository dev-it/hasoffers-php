<?php
namespace DevIT\Hasoffers\Api\Brand;

use DevIT\Hasoffers\Base;

class Conversion extends Base
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
    protected $endpointName = 'Conversion';
    /**
     * Creates a Conversion with data properties.
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
     * Find Conversions which were manually added within a specific date range.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAddedConversions($parameters = [])
    {
        return $this->get('findAddedConversions', $parameters);
    }

    /**
     * Find Conversions.
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
     * Find a list of Conversions by their Conversion IDs.
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
     * Find a Conversion by the Conversion ID or by Transaction (Ad) ID. Only one identifier should be passed.
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
     * Find Conversions which were manually updated within a specific date range.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findUpdatedConversions($parameters = [])
    {
        return $this->get('findUpdatedConversions', $parameters);
    }

    /**
     * Update a Conversion identified by Conversion ID or Transaction ID (Ad ID).
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
     * Updates a field of a Conversion.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateField($parameters = [])
    {
        return $this->get('updateField', $parameters);
    }

    /**
     * Update the meta data for a Conversion.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateMeta($parameters = [])
    {
        return $this->get('updateMeta', $parameters);
    }

    /**
     * Update the status of a Conversion.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateStatus($parameters = [])
    {
        return $this->get('updateStatus', $parameters);
    }
}
