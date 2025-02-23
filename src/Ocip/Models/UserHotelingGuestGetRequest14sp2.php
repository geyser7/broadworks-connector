<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingGuestGetRequest14sp2
 *
 * Request the user level data associated with Hoteling Guest.
 *         The response is either a UserHotelingGuestGetResponse14 or an ErrorResponse.
 *         Replaced by: UserHotelingGuestGetRequest14sp4
 *
 * @see UserHotelingGuestGetResponse14
 * @see ErrorResponse
 * @see UserHotelingGuestGetRequest14sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:44771","type":"sequence"}]
 */
class UserHotelingGuestGetRequest14sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:44771
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

