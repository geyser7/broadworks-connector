<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterMonitoringGetRequest
 *
 * Request the user's Call Center Monitoring settings.
 *         The response is either a UserCallCenterMonitoringGetResponse or an ErrorResponse.
 *
 * @see UserCallCenterMonitoringGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"23d9cf1608afed0e8614858cbc410a94:43","type":"sequence"}]
 */
class UserCallCenterMonitoringGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 23d9cf1608afed0e8614858cbc410a94:43
     * @var string|null
     */
    private $userId = null;

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

