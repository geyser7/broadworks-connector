<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingHostGetRequest14
 *
 * Request the user level data associated with Hoteling Host.
 *         The response is either a UserHotelingHostGetResponse14 or an
 * ErrorResponse.
 *         Replaced by: UserHotelingHostGetRequest14sp4
 *
 * @see UserHotelingHostGetResponse14
 * @see ErrorResponse
 * @see UserHotelingHostGetRequest14sp4
 */
class UserHotelingHostGetRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

