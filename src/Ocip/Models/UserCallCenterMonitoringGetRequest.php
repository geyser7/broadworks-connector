<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterMonitoringGetRequest
 *
 * Request the user's Call Center Monitoring settings.
 *         The response is either a UserCallCenterMonitoringGetResponse or an ErrorResponse.
 *         Replaced by UserCallCenterMonitoringGetRequest23
 *
 * @see UserCallCenterMonitoringGetResponse
 * @see ErrorResponse
 * @see UserCallCenterMonitoringGetRequest23
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:40636","type":"sequence"}]
 */
class UserCallCenterMonitoringGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40636
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }


}

