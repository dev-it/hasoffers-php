<?php
namespace DevIT\Hasoffers\Api\Brand;

use DevIT\Hasoffers\Base;

class Application extends Base
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
    protected $endpointName = 'Application';
    /**
     * Create an Affiliate Tier.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addAffiliateTier($parameters = [])
    {
        return $this->get('addAffiliateTier', $parameters);
    }

    /**
     * Create jump hostname (tracking domain) with data properties.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addHostname($parameters = [])
    {
        return $this->get('addHostname', $parameters);
    }

    /**
     * Create Offer Category with data properties.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addOfferCategory($parameters = [])
    {
        return $this->get('addOfferCategory', $parameters);
    }

    /**
     * Create Offer Group with data properties.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function addOfferGroup($parameters = [])
    {
        return $this->get('addOfferGroup', $parameters);
    }

    /**
     * Update an Advertiser Api V1 Key. This will generate a new random key for the Advertiser.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function changeAdvertiserApiKey($parameters = [])
    {
        return $this->get('changeAdvertiserApiKey', $parameters);
    }

    /**
     * Change Affiliate Api V1 Key. This will generate a new random key for the affiliate.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function changeAffiliateApiKey($parameters = [])
    {
        return $this->get('changeAffiliateApiKey', $parameters);
    }

    /**
     * Generates and returns a new Network Api Key (Network Token).
     *
     * @param array $parameters
     *
     * @return object
     */
    public function changeNetworkApiKey($parameters = [])
    {
        return $this->get('changeNetworkApiKey', $parameters);
    }

    /**
     * Create Advertiser Api V1 Key with data properties.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function createAdvertiserApiKey($parameters = [])
    {
        return $this->get('createAdvertiserApiKey', $parameters);
    }

    /**
     * Create an Affiliate Api V1 Key.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function createAffiliateApiKey($parameters = [])
    {
        return $this->get('createAffiliateApiKey', $parameters);
    }

    /**
     * Decrypt unsubscribe hash.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function decryptUnsubHash($parameters = [])
    {
        return $this->get('decryptUnsubHash', $parameters);
    }

    /**
     * Find Advertiser Api V1 Key.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAdvertiserApiKey($parameters = [])
    {
        return $this->get('findAdvertiserApiKey', $parameters);
    }

    /**
     * Find Advertiser Api V1 Key by Advertiser ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAdvertiserApiKeyByAdvertiserId($parameters = [])
    {
        return $this->get('findAdvertiserApiKeyByAdvertiserId', $parameters);
    }

    /**
     * Find Affiliate Api V1 Key by Affiliate Api Key.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAffiliateApiKey($parameters = [])
    {
        return $this->get('findAffiliateApiKey', $parameters);
    }

    /**
     * Find Affiliate Api V1 Key by Affiliate ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAffiliateApiKeyByAffiliateId($parameters = [])
    {
        return $this->get('findAffiliateApiKeyByAffiliateId', $parameters);
    }

    /**
     * Find all Advertiser Api V1 Keys by filters.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllAdvertiserApiKeys($parameters = [])
    {
        return $this->get('findAllAdvertiserApiKeys', $parameters);
    }

    /**
     * Find all Affiliate API V1 keys.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllAffiliateApiKeys($parameters = [])
    {
        return $this->get('findAllAffiliateApiKeys', $parameters);
    }

    /**
     * Find the IDs of Affiliates in an Affiliate Tier.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllAffiliateTierAffiliateIds($parameters = [])
    {
        return $this->get('findAllAffiliateTierAffiliateIds', $parameters);
    }

    /**
     * Find Affiliate Tiers.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllAffiliateTiers($parameters = [])
    {
        return $this->get('findAllAffiliateTiers', $parameters);
    }

    /**
     * Find all Browsers.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllBrowsers($parameters = [])
    {
        return $this->get('findAllBrowsers', $parameters);
    }

    /**
     * Find all Countries.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllCountries($parameters = [])
    {
        return $this->get('findAllCountries', $parameters);
    }

    /**
     * Find jump hostnames (tracking domains) specified for the Network.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllHostnames($parameters = [])
    {
        return $this->get('findAllHostnames', $parameters);
    }

    /**
     * Find Offer Categories.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllOfferCategories($parameters = [])
    {
        return $this->get('findAllOfferCategories', $parameters);
    }

    /**
     * Find all Offer IDs in a specific Offer Category.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllOfferCategoryOfferIds($parameters = [])
    {
        return $this->get('findAllOfferCategoryOfferIds', $parameters);
    }

    /**
     * Find all Offer IDs by Offer Group ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllOfferGroupOfferIds($parameters = [])
    {
        return $this->get('findAllOfferGroupOfferIds', $parameters);
    }

    /**
     * Find all Offer Groups by filter.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllOfferGroups($parameters = [])
    {
        return $this->get('findAllOfferGroups', $parameters);
    }

    /**
     * Get a list of all defined permissions.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllPermissions($parameters = [])
    {
        return $this->get('findAllPermissions', $parameters);
    }

    /**
     * Find all Regions.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllRegions($parameters = [])
    {
        return $this->get('findAllRegions', $parameters);
    }

    /**
     * Find all Timezones.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findAllTimezones($parameters = [])
    {
        return $this->get('findAllTimezones', $parameters);
    }

    /**
     * Find Browser ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findBrowserById($parameters = [])
    {
        return $this->get('findBrowserById', $parameters);
    }

    /**
     * Find Country by Country code.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findCountryByCode($parameters = [])
    {
        return $this->get('findCountryByCode', $parameters);
    }

    /**
     * Find permission by ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findPermissionById($parameters = [])
    {
        return $this->get('findPermissionById', $parameters);
    }

    /**
     * Find permission by name.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findPermissionByName($parameters = [])
    {
        return $this->get('findPermissionByName', $parameters);
    }

    /**
     * Find all permissions defined in a permission group.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findPermissionsByGroup($parameters = [])
    {
        return $this->get('findPermissionsByGroup', $parameters);
    }

    /**
     * Find Timezone by ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findTimezoneById($parameters = [])
    {
        return $this->get('findTimezoneById', $parameters);
    }

    /**
     * Find user login details.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function findUserAuthIps($parameters = [])
    {
        return $this->get('findUserAuthIps', $parameters);
    }

    /**
     * Generate unsubscribe links by users.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function generateAllUnsubLinks($parameters = [])
    {
        return $this->get('generateAllUnsubLinks', $parameters);
    }

    /**
     * Generates a Mail Room unsubscribe link for the specified mailing list and user.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function generateUnsubLink($parameters = [])
    {
        return $this->get('generateUnsubLink', $parameters);
    }

    /**
     * Get account information for network ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getAccountInformation($parameters = [])
    {
        return $this->get('getAccountInformation', $parameters);
    }

    /**
     * Get active Offer Category count.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getActiveOfferCategoryCount($parameters = [])
    {
        return $this->get('getActiveOfferCategoryCount', $parameters);
    }

    /**
     * Get Brand details.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getBrand($parameters = [])
    {
        return $this->get('getBrand', $parameters);
    }

    /**
     * Get Brand information by Brand ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getBrandInformation($parameters = [])
    {
        return $this->get('getBrandInformation', $parameters);
    }

    /**
     * Get Country Region by Country code.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getCountryRegions($parameters = [])
    {
        return $this->get('getCountryRegions', $parameters);
    }

    /**
     * Retrieve a previously uploaded PO file.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getPoFile($parameters = [])
    {
        return $this->get('getPoFile', $parameters);
    }

    /**
     * Get the Network's timezone, whose id is stored in the \"timezone_id\" brand preference.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getTimezone($parameters = [])
    {
        return $this->get('getTimezone', $parameters);
    }

    /**
     * Import Advertisers from CSV.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function importAdvertisers($parameters = [])
    {
        return $this->get('importAdvertisers', $parameters);
    }

    /**
     * Import Offers from CSV.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function importOffers($parameters = [])
    {
        return $this->get('importOffers', $parameters);
    }

    /**
     * Resets a user's password to a random new one.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function resetPassword($parameters = [])
    {
        return $this->get('resetPassword', $parameters);
    }

    /**
     * Updates network account information.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateAccountInformation($parameters = [])
    {
        return $this->get('updateAccountInformation', $parameters);
    }

    /**
     * Update Advertiser Api V1 Key.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateAdvertiserApiKey($parameters = [])
    {
        return $this->get('updateAdvertiserApiKey', $parameters);
    }

    /**
     * Update Affiliate Api Key.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateAffiliateApiKey($parameters = [])
    {
        return $this->get('updateAffiliateApiKey', $parameters);
    }

    /**
     * Update Affiliate Tier with data properties by Affiliate Tier ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateAffiliateTier($parameters = [])
    {
        return $this->get('updateAffiliateTier', $parameters);
    }

    /**
     * Update Brand email.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateBrandEmail($parameters = [])
    {
        return $this->get('updateBrandEmail', $parameters);
    }

    /**
     * Update Brand hostname.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateBrandHostname($parameters = [])
    {
        return $this->get('updateBrandHostname', $parameters);
    }

    /**
     * Update Brand jump hostname (main tracking domain) by network ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateBrandJumpHostname($parameters = [])
    {
        return $this->get('updateBrandJumpHostname', $parameters);
    }

    /**
     * Update whether or not the Brand jump hostname (main tracking domain) has SSL.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateBrandJumpHostnameHasSsl($parameters = [])
    {
        return $this->get('updateBrandJumpHostnameHasSsl', $parameters);
    }

    /**
     * Update Brand network name by network ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateBrandNetworkName($parameters = [])
    {
        return $this->get('updateBrandNetworkName', $parameters);
    }

    /**
     * Update jump hostname (tracking domain) by Hostname ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateHostname($parameters = [])
    {
        return $this->get('updateHostname', $parameters);
    }

    /**
     * Update Offer Category with data properties by Offer Category ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateOfferCategory($parameters = [])
    {
        return $this->get('updateOfferCategory', $parameters);
    }

    /**
     * Update Offer Group with data properties by Offer Group ID.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function updateOfferGroup($parameters = [])
    {
        return $this->get('updateOfferGroup', $parameters);
    }

    /**
     * Upload a PO file for a specific language.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function uploadPoFile($parameters = [])
    {
        return $this->get('uploadPoFile', $parameters);
    }

    /**
     * Check if an Advertiser Api V1 Key is valid.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function validAdvertiserApiKey($parameters = [])
    {
        return $this->get('validAdvertiserApiKey', $parameters);
    }

    /**
     * Check if Affiliate Api V1 Key is valid.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function validAffiliateApiKey($parameters = [])
    {
        return $this->get('validAffiliateApiKey', $parameters);
    }

    /**
     * Whitelist an IP address so that can be used to make API requests with the Network Api Key (Network Token).
     *
     * @param array $parameters
     *
     * @return object
     */
    public function whitelistNetworkApiIp($parameters = [])
    {
        return $this->get('whitelistNetworkApiIp', $parameters);
    }
}
