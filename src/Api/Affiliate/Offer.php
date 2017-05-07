<?php
namespace DevIT\HasOffers\Api\Affiliate;

use DevIT\HasOffers\Base;

class Offer extends Base
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
    protected $endpointName = 'Offer';
    /**
     * Accept the terms and conditions for an Offer that requires terms & conditions acceptance.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function acceptOfferTermsAndConditions($parameters = [])
    {
        return $this->get('acceptOfferTermsAndConditions', $parameters);
    }

    /**
     * Find Offers.
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
     * Find all featured Offer IDs.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllFeaturedOfferIds($parameters = [])
    {
        return $this->get('findAllFeaturedOfferIds', $parameters);
    }

    /**
     * Get all Offers with Offer Files of the specified type.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findByCreativeType($parameters = [])
    {
        return $this->get('findByCreativeType', $parameters);
    }

    /**
     * Retrieve an Offer by its ID.
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
     * Get all offers that are either private and the affiliate is approved
     * for and all offers that the affiliate has stats for in the last 7 days.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findMyOffers($parameters = [])
    {
        return $this->get('findMyOffers', $parameters);
    }

    /**
     * Generates an Offer Tracking Link for the calling Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function generateTrackingLink($parameters = [])
    {
        return $this->get('generateTrackingLink', $parameters);
    }

    /**
     * Return an array of approval signup questions for the specified offer id.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getApprovalQuestions($parameters = [])
    {
        return $this->get('getApprovalQuestions', $parameters);
    }

    /**
     * Get Offer Categories by Offer IDs.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getCategories($parameters = [])
    {
        return $this->get('getCategories', $parameters);
    }

    /**
     * Returns the payout details for the specified offer and, if enabled, its goals.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getPayoutDetails($parameters = [])
    {
        return $this->get('getPayoutDetails', $parameters);
    }

    /**
     * Get Offer Pixel by Offer ID and Offer Pixel status.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getPixels($parameters = [])
    {
        return $this->get('getPixels', $parameters);
    }

    /**
     * Get Offer Countries for the provided Offer IDs.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getTargetCountries($parameters = [])
    {
        return $this->get('getTargetCountries', $parameters);
    }

    /**
     * Get Thumbnails by Offer IDs.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getThumbnail($parameters = [])
    {
        return $this->get('getThumbnail', $parameters);
    }

    /**
     * This function allows an Affiliate to request access to an Offer that requires approval.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function requestOfferAccess($parameters = [])
    {
        return $this->get('requestOfferAccess', $parameters);
    }
}
