<?php
namespace DevIT\Hasoffers\Api\Brand\Offer;

use DevIT\Hasoffers\Base;

class Targeting extends Base
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
    protected $endpointName = 'OfferTargeting';
    /**
     * Associates a TargetRuleOffer with an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addTargetRuleToOffer($parameters = [])
    {
        return $this->get('addTargetRuleToOffer', $parameters);
    }

    /**
     * Create a TargetRule.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function createTargetRule($parameters = [])
    {
        return $this->get('createTargetRule', $parameters);
    }

    /**
     * Deletes the specified TargetRule and any TargetRuleOffers associated
     * with it, so long as the referenced Offers are not active.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function deleteTargetRule($parameters = [])
    {
        return $this->get('deleteTargetRule', $parameters);
    }

    /**
     * Returns TargetRules matching the specified criteria.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findTargetRules($parameters = [])
    {
        return $this->get('findTargetRules', $parameters);
    }

    /**
     * Returns the IDs of all active Offers with use_target_rules enabled that are using the specified TargetRule.id.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getActiveOfferIdsUsingRule($parameters = [])
    {
        return $this->get('getActiveOfferIdsUsingRule', $parameters);
    }

    /**
     * Returns all active offers and cashflow groups (if enabled) that reference a specific TargetRule.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getActiveUsesOfRule($parameters = [])
    {
        return $this->get('getActiveUsesOfRule', $parameters);
    }

    /**
     * Returns all TargetRuleOffers (with TargetRule attached) for the specified Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getRuleTargetingForOffer($parameters = [])
    {
        return $this->get('getRuleTargetingForOffer', $parameters);
    }

    /**
     * Deletes a TargetRuleOffer, i.e. removes a TargetRule from an Offer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeTargetRuleFromOffer($parameters = [])
    {
        return $this->get('removeTargetRuleFromOffer', $parameters);
    }

    /**
     * Updates the properties of a TargetRule.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateTargetRule($parameters = [])
    {
        return $this->get('updateTargetRule', $parameters);
    }

    /**
     * Updates the action for a TargetRuleOffer (toggle between allow and deny).
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateTargetRuleOfferAction($parameters = [])
    {
        return $this->get('updateTargetRuleOfferAction', $parameters);
    }
}
