<?php
namespace DevIT\HasOffers\Api\Affiliate\Offer;

use DevIT\HasOffers\Base;

class File extends Base
{
    /**
     * API Endpoint Type.
     *
     * @var string
     */
    protected $endpointType = 'Affiliate';

    /**
     * API Endpoint Name.
     *
     * @var string
     */
    protected $endpointName = 'OfferFile';
    /**
     * Creates an OfferFile for the calling Affiliate for a specified Offer.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    /**
     * Find Offer Files.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    /**
     * Find Offer File by ID.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    /**
     * Get Offer File Creative Code with tracking_url, impression_pixel, offer_id, source and aff_sub1-5 by Offer File ID.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function getCreativeCode($parameters = [])
    {
        return $this->get('getCreativeCode', $parameters);
    }
}
