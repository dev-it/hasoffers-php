<?php
namespace DevIT\Hasoffers\Api\Brand;

use DevIT\Hasoffers\Base;

class RawLog extends Base
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
    protected $endpointName = 'RawLog';
    /**
     * Get log file download link by log_type and log_filename that is valid for 8 hours.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getDownloadLink($parameters = [])
    {
        return $this->get('getDownloadLink', $parameters);
    }

    /**
     * Get retention in days for each log type.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function getLogExpirations($parameters = [])
    {
        return $this->get('getLogExpirations', $parameters);
    }

    /**
     * List available directories by log_type.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function listDateDirs($parameters = [])
    {
        return $this->get('listDateDirs', $parameters);
    }

    /**
     * List available logs by log_type and date_dir.
     *
     * @param array $parameters
     *
     * @return object
     */
    public function listLogs($parameters = [])
    {
        return $this->get('listLogs', $parameters);
    }
}
