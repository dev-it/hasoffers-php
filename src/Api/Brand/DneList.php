<?php
namespace DevIT\Hasoffers\Api\Brand;

use DevIT\Hasoffers\Base;

class DneList extends Base
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
    protected $endpointName = 'DneList';
    /**
     * Add DNE Email with data to a DNE List.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addEmail($parameters = [])
    {
        return $this->get('addEmail', $parameters);
    }

    /**
     * Create DNE List with data properties.
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
     * Find all DNE Lists by filters.
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
     * Finds all DNE Lists by DNE List IDs.
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
     * Find DNE List by DNE List ID.
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
     * Find DNE List by Offer ID. The offer must have \"show_mail_list\" set to 1 or this returns false.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findByOfferId($parameters = [])
    {
        return $this->get('findByOfferId', $parameters);
    }

    /**
     * Get DNE Emails by DNE List ID in CSV format.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getEmailListCsv($parameters = [])
    {
        return $this->get('getEmailListCsv', $parameters);
    }

    /**
     * Modify all Offers using one DNE List to use another DNE List.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function moveDneList($parameters = [])
    {
        return $this->get('moveDneList', $parameters);
    }

    /**
     * Update DNE List with data properties by DNE List ID.
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
     * Bulk upload DNE Emails by DNE List ID and _FILES.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function upload($parameters = [])
    {
        return $this->get('upload', $parameters);
    }
}
