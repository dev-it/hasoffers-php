<?php
namespace DevIT\HasOffers\Api\Brand;

use DevIT\HasOffers\Base;

class Notification extends Base
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
    protected $endpointName = 'Notification';
    /**
     * Deletes all the email notification subscriptions for a user.
     *
     * @param array $parameters
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
     * @param array $parameters
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
     * @param array $parameters
     *
     * @return object
     */
    public function replaceUserSubscriptions($parameters = [])
    {
        return $this->get('replaceUserSubscriptions', $parameters);
    }
}