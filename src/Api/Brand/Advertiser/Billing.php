<?php
namespace DevIT\Hasoffers\Api\Brand\Advertiser;

use DevIT\Hasoffers\Base;

class Billing extends Base
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
    protected $endpointName = 'AdvertiserBilling';
    /**
     * Create an Advertiser Invoice Item for an existing Advertiser Invoice.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addInvoiceItem($parameters = [])
    {
        return $this->get('addInvoiceItem', $parameters);
    }

    /**
     * Create an Advertiser Invoice.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function createInvoice($parameters = [])
    {
        return $this->get('createInvoice', $parameters);
    }

    /**
     * Find Advertiser Billing Invoices.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllInvoices($parameters = [])
    {
        return $this->get('findAllInvoices', $parameters);
    }

    /**
     * Find one or more Advertiser Invoices by their IDs.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllInvoicesByIds($parameters = [])
    {
        return $this->get('findAllInvoicesByIds', $parameters);
    }

    /**
     * Retrieve an Advertiser Invoice.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findInvoiceById($parameters = [])
    {
        return $this->get('findInvoiceById', $parameters);
    }

    /**
     * Find Advertiser Invoice stats for an Advertiser ID for a specific date range and currency.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findInvoiceStats($parameters = [])
    {
        return $this->get('findInvoiceStats', $parameters);
    }

    /**
     * Get the next Advertiser Invoice start date for a specific Advertiser and Currency.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getNextStartDate($parameters = [])
    {
        return $this->get('getNextStartDate', $parameters);
    }

    /**
     * Delete Advertiser Invoice Item.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeInvoiceItem($parameters = [])
    {
        return $this->get('removeInvoiceItem', $parameters);
    }

    /**
     * Update an Advertiser Invoice.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateInvoice($parameters = [])
    {
        return $this->get('updateInvoice', $parameters);
    }

    /**
     * Update one field of an Advertiser Invoice.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateInvoiceField($parameters = [])
    {
        return $this->get('updateInvoiceField', $parameters);
    }

    /**
     * Update tax information data by Advertiser ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateTaxInfo($parameters = [])
    {
        return $this->get('updateTaxInfo', $parameters);
    }
}
