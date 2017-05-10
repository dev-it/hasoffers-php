<?php
namespace DevIT\Hasoffers\Api\Brand;

use DevIT\Hasoffers\Base;

class VatRate extends Base
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
    protected $endpointName = 'VatRate';
    /**
     * Create Vat Rate with data properties.
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
     * Delete Vat Rate by Vat Rate ID.
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
     * Find all Vat Rates by filters.
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
     * Find Vat Rate by Vat Rate ID.
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
     * Update Vat Rate with data properties by Vat Rate ID.
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
     * Update Vat Rate field with value by Vat Rate ID.
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
