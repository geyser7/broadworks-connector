<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingNotReachableGetRequest
 *
 * Request the user level data associated with Call Forwarding Not Reachable.
 *         The response is either a UserCallForwardingNotReachableGetResponse or an
 *         ErrorResponse.
 *
 * @see UserCallForwardingNotReachableGetResponse
 * @see ErrorResponse
 */
class UserCallForwardingNotReachableGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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

