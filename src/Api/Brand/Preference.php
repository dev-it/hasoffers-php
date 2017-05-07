<?php
namespace DevIT\HasOffers\Api\Brand;

use DevIT\HasOffers\Base;

class Preference extends Base
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
    protected $endpointName = 'Preference';
    /**
     * Delete Preference by Preference name.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function delete($parameters = [])
    {
        return $this->get('delete', $parameters);
    }

    /**
     * Get all Preferences.
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
     * Find a Preference by name.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findByName($parameters = [])
    {
        return $this->get('findByName', $parameters);
    }

    /**
     * Get Preferences for a given account type and account id.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findPreferenceByNameTypeAndAccountId($parameters = [])
    {
        return $this->get('findPreferenceByNameTypeAndAccountId', $parameters);
    }

    /**
     * Get a specific named preference for a given user by type and user id.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findPreferenceByNameTypeAndUserId($parameters = [])
    {
        return $this->get('findPreferenceByNameTypeAndUserId', $parameters);
    }

    /**
     * Get Preferences for a given account type and account id.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findPreferencesByTypeAndAccountId($parameters = [])
    {
        return $this->get('findPreferencesByTypeAndAccountId', $parameters);
    }

    /**
     * Get Preferences for a given user type and user id.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findPreferencesByTypeAndUserId($parameters = [])
    {
        return $this->get('findPreferencesByTypeAndUserId', $parameters);
    }

    /**
     * Get Preference value by Preference name.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getValue($parameters = [])
    {
        return $this->get('getValue', $parameters);
    }

    /**
     * Check if Preference is enabled by Preference name.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function isEnabled($parameters = [])
    {
        return $this->get('isEnabled', $parameters);
    }

    /**
     * Set an Account Preference.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setAccountPreference($parameters = [])
    {
        return $this->get('setAccountPreference', $parameters);
    }

    /**
     * Set a User Preference.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setUserPreference($parameters = [])
    {
        return $this->get('setUserPreference', $parameters);
    }

    /**
     * Set Preference with value by Preference name.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function setValue($parameters = [])
    {
        return $this->get('setValue', $parameters);
    }

    /**
     * Update All user preferences based on name, value, and type.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateAllUserPreferences($parameters = [])
    {
        return $this->get('updateAllUserPreferences', $parameters);
    }

    /**
     * Resets the Network terms and conditions agreement for all users of the specified type.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function userPreferenceUpdateTermsAndConditions($parameters = [])
    {
        return $this->get('userPreferenceUpdateTermsAndConditions', $parameters);
    }
}
