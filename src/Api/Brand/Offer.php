<?php
namespace DevIT\HasOffers\Api\Brand;

use DevIT\HasOffers\Base;

class Offer extends Base
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
    protected $endpointName = 'Offer';
    /**
     * Creates an Offer Signup Question.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addApprovalQuestion($parameters = [])
    {
        return $this->get('addApprovalQuestion', $parameters);
    }

    /**
     * Adds an Offer to an Offer Category (in addition to any existing ones).
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addCategory($parameters = [])
    {
        return $this->get('addCategory', $parameters);
    }

    /**
     * Adds an Offer to an Offer Group (in addition to any existing groups the offer is in).
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addGroup($parameters = [])
    {
        return $this->get('addGroup', $parameters);
    }

    /**
     * Adds a single Browser to the existing list of targeted Browsers for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addTargetBrowser($parameters = [])
    {
        return $this->get('addTargetBrowser', $parameters);
    }

    /**
     * Add a Country and optionally one or more regions within that country to the geo-targeting list for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addTargetCountry($parameters = [])
    {
        return $this->get('addTargetCountry', $parameters);
    }

    /**
     * Add a Country or optionally a single region regions within a country to the geo-targeting list for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addTargetCountryRegion($parameters = [])
    {
        return $this->get('addTargetCountryRegion', $parameters);
    }

    /**
     * Block an Affiliate from an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function blockAffiliate($parameters = [])
    {
        return $this->get('blockAffiliate', $parameters);
    }

    /**
     * Create an Offer.
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
     * Find one or more Offer(s) by their IDs.
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
     * Find all Offer IDs.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllIds($parameters = [])
    {
        return $this->get('findAllIds', $parameters);
    }

    /**
     * Find all Offer IDs for a specific Advertiser.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllIdsByAdvertiserId($parameters = [])
    {
        return $this->get('findAllIdsByAdvertiserId', $parameters);
    }

    /**
     * Find all Offer IDs that a specific Affiliate has access to.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllIdsByAffiliateId($parameters = [])
    {
        return $this->get('findAllIdsByAffiliateId', $parameters);
    }

    /**
     * Find Affiliate Offer Approvals by filters.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllPendingAffiliateApprovals($parameters = [])
    {
        return $this->get('findAllPendingAffiliateApprovals', $parameters);
    }

    /**
     * Find an Offer by its ID.
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
     * Generates an Offer Tracking Link.
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
     * Generates an Offer Tracking Pixel.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function generateTrackingPixel($parameters = [])
    {
        return $this->get('generateTrackingPixel', $parameters);
    }

    /**
     * Get the notes from an Affiliate Offer approval record.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateApplicationNote($parameters = [])
    {
        return $this->get('getAffiliateApplicationNote', $parameters);
    }

    /**
     * Get an Affiliate's approval status for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateApprovalStatus($parameters = [])
    {
        return $this->get('getAffiliateApprovalStatus', $parameters);
    }

    /**
     * Gets Affiliate-specific Hostnames for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateHostnames($parameters = [])
    {
        return $this->get('getAffiliateHostnames', $parameters);
    }

    /**
     * Gets a summary of payout and revenue-related details for an Affiliate/Offer/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliatePayment($parameters = [])
    {
        return $this->get('getAffiliatePayment', $parameters);
    }

    /**
     * Get an Affiliate-specific Offer Payout for a specific Offer/Affiliate/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliatePayout($parameters = [])
    {
        return $this->get('getAffiliatePayout', $parameters);
    }

    /**
     * Get an Affiliate-specific Offer Revenue for a specific Offer/Affiliate/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateRevenue($parameters = [])
    {
        return $this->get('getAffiliateRevenue', $parameters);
    }

    /**
     * Get a list of all answers an Affiliate provided for an Offer's signup/approval questions.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getApprovalAnswers($parameters = [])
    {
        return $this->get('getApprovalAnswers', $parameters);
    }

    /**
     * Get Offer Approval/Signup Questions for an Offer.
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
     * Gets a list of Affiliate IDs that are approved for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getApprovedAffiliateIds($parameters = [])
    {
        return $this->get('getApprovedAffiliateIds', $parameters);
    }

    /**
     * Gets a list of Affiliate IDs that are blocked from an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getBlockedAffiliateIds($parameters = [])
    {
        return $this->get('getBlockedAffiliateIds', $parameters);
    }

    /**
     * Get a list of Offer Categories that an Offer is in.
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
     * Get Offer Conversion Caps for a specific Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getConversionCaps($parameters = [])
    {
        return $this->get('getConversionCaps', $parameters);
    }

    /**
     * Find Customer Lists for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getCustomerList($parameters = [])
    {
        return $this->get('getCustomerList', $parameters);
    }

    /**
     * Get a list of Offer Groups than an Offer is in.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getGroups($parameters = [])
    {
        return $this->get('getGroups', $parameters);
    }

    /**
     * Find Offer Files for a specific Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getOfferFiles($parameters = [])
    {
        return $this->get('getOfferFiles', $parameters);
    }

    /**
     * Gets all Offer Files with Creative Codes.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getOfferFilesWithCreativeCode($parameters = [])
    {
        return $this->get('getOfferFilesWithCreativeCode', $parameters);
    }

    /**
     * Gets a list of Offers that are in a specific Offer Group.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getOfferListByGroupId($parameters = [])
    {
        return $this->get('getOfferListByGroupId', $parameters);
    }

    /**
     * Find Offer URLs for a specific Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getOfferUrls($parameters = [])
    {
        return $this->get('getOfferUrls', $parameters);
    }

    /**
     * Gets an overview containing various Offer-related counts.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getOverview($parameters = [])
    {
        return $this->get('getOverview', $parameters);
    }

    /**
     * Get Affiliate-specific Offer Payouts for an Offer.
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
     * Get a list of Offer Pixels for an Offer.
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
     * Get Affiliate-specific Offer Revenues for an Offer.
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
     * Get the Browsers targeted by an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getTargetBrowsers($parameters = [])
    {
        return $this->get('getTargetBrowsers', $parameters);
    }

    /**
     * Get the list of the Countries and Regions geo-targeted by the specified Offer.
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
     * Get the thumbnail (i.e. Offer File having type of "offer thumbnail") for an Offer.
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
     * Returns the Affiliate Tier Payouts and their associated Affiliate Tier for the specified Offer ID.
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
     * Returns the Affiliate Tier Revenues and their associated Affiliate Tier for the specified Offer ID.
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
     * Gets a list of Affiliates who are unapproved for an Offer, but have not been blocked from it.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getUnapprovedAffiliateIds($parameters = [])
    {
        return $this->get('getUnapprovedAffiliateIds', $parameters);
    }

    /**
     * Removes an Offer from an Offer Category.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeCategory($parameters = [])
    {
        return $this->get('removeCategory', $parameters);
    }

    /**
     * Deletes an Affiliate-specific Offer Conversion Cap.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeConversionCap($parameters = [])
    {
        return $this->get('removeConversionCap', $parameters);
    }

    /**
     * Removes an Offer from an Offer Group.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeGroup($parameters = [])
    {
        return $this->get('removeGroup', $parameters);
    }

    /**
     * Deletes an Affiliate-specific Offer Payout.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removePayout($parameters = [])
    {
        return $this->get('removePayout', $parameters);
    }

    /**
     * Deletes an Affiliate-specific Offer Revenue.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeRevenue($parameters = [])
    {
        return $this->get('removeRevenue', $parameters);
    }

    /**
     * Removes a single Browser from the list of Browsers targeted by an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeTargetBrowser($parameters = [])
    {
        return $this->get('removeTargetBrowser', $parameters);
    }

    /**
     * Removes the specified Country (and any Regions targeted within) from the Offer's geo-targeting list.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeTargetCountry($parameters = [])
    {
        return $this->get('removeTargetCountry', $parameters);
    }

    /**
     * Remove a country or optionally a single region with a country from the geo-targeting list for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeTargetCountryRegion($parameters = [])
    {
        return $this->get('removeTargetCountryRegion', $parameters);
    }

    /**
     * Delete an Affiliate Tier Payout.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeTierPayout($parameters = [])
    {
        return $this->get('removeTierPayout', $parameters);
    }

    /**
     * Delete an Affiliate Tier Revenue.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeTierRevenue($parameters = [])
    {
        return $this->get('removeTierRevenue', $parameters);
    }

    /**
     * Create an Affiliate's answer to an Offer's signup/approval question.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function saveApprovalQuestionAnswer($parameters = [])
    {
        return $this->get('saveApprovalQuestionAnswer', $parameters);
    }

    /**
     * Sets the Offer approval status for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setAffiliateApproval($parameters = [])
    {
        return $this->get('setAffiliateApproval', $parameters);
    }

    /**
     * Sets an Affiliate-specific Hostname to use for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setAffiliateHostname($parameters = [])
    {
        return $this->get('setAffiliateHostname', $parameters);
    }

    /**
     * Sets the date an Affiliate agreed to an Offer's terms and conditions.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setAffiliateTermsDate($parameters = [])
    {
        return $this->get('setAffiliateTermsDate', $parameters);
    }

    /**
     * Replaces any existing Offer Categories with a new set for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setCategories($parameters = [])
    {
        return $this->get('setCategories', $parameters);
    }

    /**
     * Set Offer Conversion Cap.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setConversionCap($parameters = [])
    {
        return $this->get('setConversionCap', $parameters);
    }

    /**
     * Replace the list of Offer Groups that an Offer is in.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setGroups($parameters = [])
    {
        return $this->get('setGroups', $parameters);
    }

    /**
     * Bulk set multiple Affiliate Offer approval statuses for private offers or those which require approval.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setMultipleAffiliateApprovals($parameters = [])
    {
        return $this->get('setMultipleAffiliateApprovals', $parameters);
    }

    /**
     * Sets an Affiliate-specific Offer Payout.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setPayout($parameters = [])
    {
        return $this->get('setPayout', $parameters);
    }

    /**
     * Sets an Affiliate-specific Offer Revenue.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setRevenue($parameters = [])
    {
        return $this->get('setRevenue', $parameters);
    }

    /**
     * Replaces the Browsers targeted by an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setTargetBrowsers($parameters = [])
    {
        return $this->get('setTargetBrowsers', $parameters);
    }

    /**
     * Set a list of Countries and/or Regions that an Offer should use for geo-targeting.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setTargetCountries($parameters = [])
    {
        return $this->get('setTargetCountries', $parameters);
    }

    /**
     * Sets Affiliate Tier Payout for a specific Affiliate Tier/Offer/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setTierPayout($parameters = [])
    {
        return $this->get('setTierPayout', $parameters);
    }

    /**
     * Sets Affiliate Tier Revenue for a specific Affiliate Tier/Offer/Goal(optional) combination.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setTierRevenue($parameters = [])
    {
        return $this->get('setTierRevenue', $parameters);
    }

    /**
     * Unblocks an Affiliate from an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function unblockAffiliate($parameters = [])
    {
        return $this->get('unblockAffiliate', $parameters);
    }

    /**
     * Update an Offer.
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
     * Update a Signup Question.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateApprovalQuestion($parameters = [])
    {
        return $this->get('updateApprovalQuestion', $parameters);
    }

    /**
     * Update an Offer identified by Referral ID ("ref_id" field of the Offer).
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateByRefId($parameters = [])
    {
        return $this->get('updateByRefId', $parameters);
    }

    /**
     * Update one field of an Offer.
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
