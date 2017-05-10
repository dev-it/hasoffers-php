<?php
namespace DevIT\Hasoffers\Api\Affiliate;

use DevIT\Hasoffers\Base;

class Notification extends Base
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
    protected $endpointName = 'Notification';
    /**
     * Deletes all the email notification subscriptions for a user.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function clearUserSubscriptions($parameters = [])
    {
        return $this->get('clearUserSubscriptions', $parameters);
    }

    /**
     * Retrieve a list of Scenario IDs a user is subscribed to.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function getUserSubscriptions($parameters = [])
    {
        return $this->get('getUserSubscriptions', $parameters);
    }

    /**
     * Sets all the email notification subscriptions for a user,
     * deleting any records of scenarios no longer subscribed to
     * and inserting records for new scenario subscriptions.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function replaceUserSubscriptions($parameters = [])
    {
        return $this->get('replaceUserSubscriptions', $parameters);
    }
}
