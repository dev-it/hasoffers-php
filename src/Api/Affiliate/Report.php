<?php
namespace DevIT\HasOffers\Api\Affiliate;

use DevIT\HasOffers\Base;

class Report extends Base
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
    protected $endpointName = 'Report';
    /**
     * Get Affiliate Commission Report for the calling Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateCommissions($parameters = [])
    {
        return $this->get('getAffiliateCommissions', $parameters);
    }

    /**
     * Returns a list of all active Affiliates referred by the calling Affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAffiliateReferrals($parameters = [])
    {
        return $this->get('getAffiliateReferrals', $parameters);
    }

    /**
     * Get Conversions Report.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getConversions($parameters = [])
    {
        return $this->get('getConversions', $parameters);
    }

    /**
     * Get Stats Report.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getStats($parameters = [])
    {
        return $this->get('getStats', $parameters);
    }
}
