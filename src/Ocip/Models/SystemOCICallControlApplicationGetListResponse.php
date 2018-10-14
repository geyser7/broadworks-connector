<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOCICallControlApplicationGetListResponse
 *
 * Response to SystemOCICallControlApplicationGetListRequest. The table columns
 * are:
 *         "Application Id", "Enabled System Wide", "Description" "Notification
 * Timeout Seconds", "Max Event Channels Per Set"
 *         and "Channel Set Grace Period Seconds".
 *
 * @see SystemOCICallControlApplicationGetListRequest
 */
class SystemOCICallControlApplicationGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName appTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $appTable = null;

    /**
     * Getter for appTable
     *
     * @ElementName appTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAppTable()
    {
        return $this->appTable;
    }

    /**
     * Setter for appTable
     *
     * @ElementName appTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $appTable
     * @return $this
     */
    public function setAppTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $appTable)
    {
        $this->appTable = $appTable;
        return $this;
    }


}

