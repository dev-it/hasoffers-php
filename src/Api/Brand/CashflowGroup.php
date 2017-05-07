<?php
namespace DevIT\HasOffers\Api\Brand;

use DevIT\HasOffers\Base;

class CashflowGroup extends Base
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
    protected $endpointName = 'CashflowGroup';
    /**
     * Create an Cashflow Group along with constituent Cashflow Rules and Cashflow Affiliates.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function createCashflowGroup($parameters = [])
    {
        return $this->get('createCashflowGroup', $parameters);
    }

    /**
     * Find a Cashflow Group by its ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findCashflowGroupById($parameters = [])
    {
        return $this->get('findCashflowGroupById', $parameters);
    }

    /**
     * Find Cashflow Groups.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findCashflowGroups($parameters = [])
    {
        return $this->get('findCashflowGroups', $parameters);
    }

    /**
     * Finds all active offers who either directly use a cashflow group for
     * payout or revenue calculation, or which have at least one
     * active offer that uses the cashflow group.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findCashflowGroupUsage($parameters = [])
    {
        return $this->get('findCashflowGroupUsage', $parameters);
    }

    /**
     * Returns the details for Cashflow Rule fields, including acceptable values and types.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getCashflowRuleFieldDefinitions($parameters = [])
    {
        return $this->get('getCashflowRuleFieldDefinitions', $parameters);
    }

    /**
     * Returns all the Payout Groups for a Goal.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getGoalPayoutGroupsForGoal($parameters = [])
    {
        return $this->get('getGoalPayoutGroupsForGoal', $parameters);
    }

    /**
     * Returns all the Revenue Groups for a Goal.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getGoalRevenueGroupsForGoal($parameters = [])
    {
        return $this->get('getGoalRevenueGroupsForGoal', $parameters);
    }

    /**
     * Returns all the Payout Groups for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getOfferPayoutGroupsForOffer($parameters = [])
    {
        return $this->get('getOfferPayoutGroupsForOffer', $parameters);
    }

    /**
     * Returns all the Revenue Groups for an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getOfferRevenueGroupsForOffer($parameters = [])
    {
        return $this->get('getOfferRevenueGroupsForOffer', $parameters);
    }

    /**
     * Sets all the goal payout groups for an goal, purging any previous
     * groups that were set for the goal, updating any existing ones which
     * are passed with an id, and creating new ones that lack an id.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function replaceGoalPayoutGroupsForGoal($parameters = [])
    {
        return $this->get('replaceGoalPayoutGroupsForGoal', $parameters);
    }

    /**
     * Sets all the goal revenue groups for an goal, purging any previous
     * groups that were set for the goal, updating any existing ones which
     * are passed with an id, and creating new ones that lack an id.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function replaceGoalRevenueGroupsForGoal($parameters = [])
    {
        return $this->get('replaceGoalRevenueGroupsForGoal', $parameters);
    }

    /**
     * Sets all the offer payout groups for an offer, purging any previous
     * groups that were set for the offer, updating any existing ones which
     * are passed with an id, and creating new ones that lack an id.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function replaceOfferPayoutGroupsForOffer($parameters = [])
    {
        return $this->get('replaceOfferPayoutGroupsForOffer', $parameters);
    }

    /**
     * Sets all the offer revenue groups for an offer, purging any previous
     * groups that were set for the offer, updating any existing ones which
     * are passed with an id, and creating new ones that lack an id.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function replaceOfferRevenueGroupsForOffer($parameters = [])
    {
        return $this->get('replaceOfferRevenueGroupsForOffer', $parameters);
    }

    /**
     * Update a Cashflow Group along with its constituent Affiliates and Rules.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateCashflowGroup($parameters = [])
    {
        return $this->get('updateCashflowGroup', $parameters);
    }
}
