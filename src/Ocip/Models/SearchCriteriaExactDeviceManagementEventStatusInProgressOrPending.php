<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending
 *
 * Criteria for searching for a particular fully specified Device Management event
 * in progress or pending status.
 */
class SearchCriteriaExactDeviceManagementEventStatusInProgressOrPending extends SearchCriteria
{

    /**
     * @ElementName dmEventStatusInProgressOrPending
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusInProgressOrPending
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusInProgressOrPending|null
     */
    private $dmEventStatusInProgressOrPending = null;

    /**
     * Getter for dmEventStatusInProgressOrPending
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusInProgressOrPending
     */
    public function getDmEventStatusInProgressOrPending()
    {
        return $this->dmEventStatusInProgressOrPending instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dmEventStatusInProgressOrPending;
    }

    /**
     * Setter for dmEventStatusInProgressOrPending
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusInProgressOrPending $dmEventStatusInProgressOrPending
     * @return $this
     */
    public function setDmEventStatusInProgressOrPending(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementEventStatusInProgressOrPending $dmEventStatusInProgressOrPending)
    {
        $this->dmEventStatusInProgressOrPending = $dmEventStatusInProgressOrPending;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDmEventStatusInProgressOrPending()
    {
        $this->dmEventStatusInProgressOrPending = null;
        return $this;
    }


}

