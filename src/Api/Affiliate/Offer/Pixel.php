<?php
namespace DevIT\HasOffers\Api\Affiliate\Offer;

use DevIT\HasOffers\Base;

class Pixel extends Base
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
    protected $endpointName = 'OfferPixel';
    /**
     * Create an Offer Pixel.
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
     * Find Offer Pixels.
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
     * Gets an array of the allowed pixel types for the given offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAllowedTypes($parameters = [])
    {
        return $this->get('getAllowedTypes', $parameters);
    }

    /**
     * Update Offer Pixel field with value by Offer Pixel ID.
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
