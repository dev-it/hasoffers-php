<?php
namespace DevIT\Hasoffers\Api\Brand;

use DevIT\Hasoffers\Base;

class Affiliate extends Base
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
    protected $endpointName = 'Affiliate';
    /**
     * Add an AccountNote for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addAccountNote($parameters = [])
    {
        return $this->get('addAccountNote', $parameters);
    }

    /**
     * Adjust affiliate clicks.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function adjustAffiliateClicks($parameters = [])
    {
        return $this->get('adjustAffiliateClicks', $parameters);
    }

    /**
     * Block an Affiliate. Sets Affiliate status to 'blocked'.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function block($parameters = [])
    {
        return $this->get('block', $parameters);
    }

    /**
     * Create an Affiliate account.
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
     * Create an Affiliate Signup Question.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function createSignupQuestion($parameters = [])
    {
        return $this->get('createSignupQuestion', $parameters);
    }

    /**
     * Create an Affiliate Signup Answer for an existing Signup Question.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function createSignupQuestionAnswer($parameters = [])
    {
        return $this->get('createSignupQuestionAnswer', $parameters);
    }

    /**
     * Disables an Affiliate Fraud Alert.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function disableFraudAlert($parameters = [])
    {
        return $this->get('disableFraudAlert', $parameters);
    }

    /**
     * Enables an Affiliate Fraud Alert.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function enableFraudAlert($parameters = [])
    {
        return $this->get('enableFraudAlert', $parameters);
    }

    /**
     * Find Affiliates.
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
     * Find one or more Affiliates by their IDs.
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
     * Find Affiliate Fraud Alerts.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllFraudAlerts($parameters = [])
    {
        return $this->get('findAllFraudAlerts', $parameters);
    }

    /**
     * Find a list of Affiliates IDs.
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
     * Find all Affiliate IDs reporting to a specific Account Manager.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllIdsByAccountManagerId($parameters = [])
    {
        return $this->get('findAllIdsByAccountManagerId', $parameters);
    }

    /**
     * Find all Affiliates IDs who have a status of pending or lack an Account Manager.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllPendingUnassignedAffiliateIds($parameters = [])
    {
        return $this->get('findAllPendingUnassignedAffiliateIds', $parameters);
    }

    /**
     * Find all Affiliates who have a status of pending or lack an Account Manager.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllPendingUnassignedAffiliates($parameters = [])
    {
        return $this->get('findAllPendingUnassignedAffiliates', $parameters);
    }

    /**
     * Retrieve an Affiliate by ID.
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
     * Find list of affiliates matching filter.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findList($parameters = [])
    {
        return $this->get('findList', $parameters);
    }

    /**
     * Retrieve the Account Manager (employee) for a specific Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAccountManager($parameters = [])
    {
        return $this->get('getAccountManager', $parameters);
    }

    /**
     * Retrieve all AccountNotes for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAccountNotes($parameters = [])
    {
        return $this->get('getAccountNotes', $parameters);
    }

    /**
     * Retrieve the Affiliate Tier that an Affiliate belongs to.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateTier($parameters = [])
    {
        return $this->get('getAffiliateTier', $parameters);
    }

    /**
     * Returns a list of all Offer IDs that a specific Affiliate is allowed to run.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getApprovedOfferIds($parameters = [])
    {
        return $this->get('getApprovedOfferIds', $parameters);
    }

    /**
     * Get a list of Offer IDs for which the specified Affiliate account has been blocked at the Offer-level or by the Advertiser.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getBlockedOfferIds($parameters = [])
    {
        return $this->get('getBlockedOfferIds', $parameters);
    }

    /**
     * Get a list of the reason(s) why an Affiliate was blocked.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getBlockedReasons($parameters = [])
    {
        return $this->get('getBlockedReasons', $parameters);
    }

    /**
     * Gets the original/creator Affiliate User for an Affiliate account.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getCreatorUser($parameters = [])
    {
        return $this->get('getCreatorUser', $parameters);
    }

    /**
     * Get any Offer Conversion Caps for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getOfferConversionCaps($parameters = [])
    {
        return $this->get('getOfferConversionCaps', $parameters);
    }

    /**
     * Get a list of AffiliateOffers for an Affiliate, accompanied by the Hostname for each.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getOfferHostnames($parameters = [])
    {
        return $this->get('getOfferHostnames', $parameters);
    }

    /**
     * Gets any Offer Payouts defined for a specific Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getOfferPayouts($parameters = [])
    {
        return $this->get('getOfferPayouts', $parameters);
    }

    /**
     * Get all Affiliate-specific Offer Payouts.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getOfferPayoutsAll($parameters = [])
    {
        return $this->get('getOfferPayoutsAll', $parameters);
    }

    /**
     * Get Offer Pixels for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getOfferPixels($parameters = [])
    {
        return $this->get('getOfferPixels', $parameters);
    }

    /**
     * Get the first (lowest numeric) Affiliate ID in the Network.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getOwnersAffiliateAccountId($parameters = [])
    {
        return $this->get('getOwnersAffiliateAccountId', $parameters);
    }

    /**
     * Retrieve the PaymentMethods defined for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getPaymentMethods($parameters = [])
    {
        return $this->get('getPaymentMethods', $parameters);
    }

    /**
     * Get a list of all Affiliate IDs whose accounts were referred by a specific Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getReferralAffiliateIds($parameters = [])
    {
        return $this->get('getReferralAffiliateIds', $parameters);
    }

    /**
     * Get the Affiliate Referral Commissions earned for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getReferralCommission($parameters = [])
    {
        return $this->get('getReferralCommission', $parameters);
    }

    /**
     * Get the ID of the Affiliate who referred a specific Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getReferringAffiliate($parameters = [])
    {
        return $this->get('getReferringAffiliate', $parameters);
    }

    /**
     * Get the Affiliate Signup Answers provided by a specific Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getSignupAnswers($parameters = [])
    {
        return $this->get('getSignupAnswers', $parameters);
    }

    /**
     * Get all Affiliate Signup Questions, optionally limiting the results to those having a specific status.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getSignupQuestions($parameters = [])
    {
        return $this->get('getSignupQuestions', $parameters);
    }

    /**
     * Get a list of Offer IDs that either are private or require manual approval, for which the specified Affiliate has not been granted access.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getUnapprovedOfferIds($parameters = [])
    {
        return $this->get('getUnapprovedOfferIds', $parameters);
    }

    /**
     * Get a list of all Offer IDs for which the specified Affiliate has not been blocked at the Offer-level.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getUnblockedOfferIds($parameters = [])
    {
        return $this->get('getUnblockedOfferIds', $parameters);
    }

    /**
     * Delete a custom Affiliate Referral Commission rate/amount setting for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function removeCustomReferralCommission($parameters = [])
    {
        return $this->get('removeCustomReferralCommission', $parameters);
    }

    /**
     * Set the custom Affiliate Referral Commission amounts/rates for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setCustomReferralCommission($parameters = [])
    {
        return $this->get('setCustomReferralCommission', $parameters);
    }

    /**
     * Sign up for an Affiliate by executing the following steps: - Validate affiliate account attribute.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function signup($parameters = [])
    {
        return $this->get('signup', $parameters);
    }

    /**
     * Paginated search against the affiliates table directly with no contains, virtual properties attached to the response, etc.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function simpleSearch($parameters = [])
    {
        return $this->get('simpleSearch', $parameters);
    }

    /**
     * Update an Affiliate account.
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
     * Update the text of an AccountNote.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateAccountNote($parameters = [])
    {
        return $this->get('updateAccountNote', $parameters);
    }

    /**
     * Update an Affiliate account by its referral ID (rather than Affiliate ID).
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
     * Updated one field of an Affiliate account.
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
     * Update Payment method 'check' for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updatePaymentMethodCheck($parameters = [])
    {
        return $this->get('updatePaymentMethodCheck', $parameters);
    }

    /**
     * Update Payment method 'direct deposit' for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updatePaymentMethodDirectDeposit($parameters = [])
    {
        return $this->get('updatePaymentMethodDirectDeposit', $parameters);
    }

    /**
     * Update 'other' payment method for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updatePaymentMethodOther($parameters = [])
    {
        return $this->get('updatePaymentMethodOther', $parameters);
    }

    /**
     * Update Payment method 'payoneer' for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updatePaymentMethodPayoneer($parameters = [])
    {
        return $this->get('updatePaymentMethodPayoneer', $parameters);
    }

    /**
     * Update Payment method 'paypal' for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updatePaymentMethodPaypal($parameters = [])
    {
        return $this->get('updatePaymentMethodPaypal', $parameters);
    }

    /**
     * Update Payment method 'pay quicker' for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updatePaymentMethodPayQuicker($parameters = [])
    {
        return $this->get('updatePaymentMethodPayQuicker', $parameters);
    }

    /**
     * Update Payment method 'wire' for an Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updatePaymentMethodWire($parameters = [])
    {
        return $this->get('updatePaymentMethodWire', $parameters);
    }

    /**
     * Update an Affiliate Signup Question.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateSignupQuestion($parameters = [])
    {
        return $this->get('updateSignupQuestion', $parameters);
    }

    /**
     * Update an Affiliate Signup Answer.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateSignupQuestionAnswer($parameters = [])
    {
        return $this->get('updateSignupQuestionAnswer', $parameters);
    }
}
