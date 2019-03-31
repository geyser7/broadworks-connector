<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceMonitorParametersGetResponse
 *
 * Response to SystemAccessDeviceMonitorParametersGetListRequest.
 *         Contains a list of system Access Device Monitor parameters.
 *
 * @see SystemAccessDeviceMonitorParametersGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1216","type":"sequence"}]
 */
class SystemAccessDeviceMonitorParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName pollingIntervalMinutes
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1216
     * @MinInclusive
     * @MaxInclusive 1440
     * @var int|null
     */
    private $pollingIntervalMinutes = null;

    /**
     * Getter for pollingIntervalMinutes
     *
     * @return int
     */
    public function getPollingIntervalMinutes()
    {
        return $this->pollingIntervalMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pollingIntervalMinutes;
    }

    /**
     * Setter for pollingIntervalMinutes
     *
     * @param int $pollingIntervalMinutes
     * @return $this
     */
    public function setPollingIntervalMinutes($pollingIntervalMinutes)
    {
        $this->pollingIntervalMinutes = $pollingIntervalMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPollingIntervalMinutes()
    {
        $this->pollingIntervalMinutes = null;
        return $this;
    }


}

