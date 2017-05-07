<?php
namespace DevIT\HasOffers\Api\Affiliate;

use DevIT\HasOffers\Base;

class Affiliate extends Base
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
    protected $endpointName = 'Affiliate';
    /**
     * Retrieves the Affiliate details for the caller.
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
     * Get account balance for the calling Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAccountBalance($parameters = [])
    {
        return $this->get('getAccountBalance', $parameters);
    }

    /**
     * Get the Account Manager for the calling Affiliate.
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
     * Returns a Payoneer signup URL for the calling with optional post-signup redirect URL.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getPayoneerSignupUrl($parameters = [])
    {
        return $this->get('getPayoneerSignupUrl', $parameters);
    }

    /**
     * Returns the referral commission rate details for the calling Affiliate.
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
     * Update the Affiliate details for the calling Affiliate.
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
     * Update Payment method 'Check' for the calling Affiliate.
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
     * Update Payment method 'Direct Deposit' for the calling Affiliate.
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
     * Update Payment method 'Other' for the calling Affiliate.
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
     * Update Payment method 'Paypal' for the calling Affiliate.
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
     * Update Payment method 'PayQuicker' for the calling Affiliate.
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
     * Update Payment method 'Wire' for the calling Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updatePaymentMethodWire($parameters = [])
    {
        return $this->get('updatePaymentMethodWire', $parameters);
    }
}
