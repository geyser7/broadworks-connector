<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTimeScheduleGetListRequest
 *
 * Get all time schedules for a user. This includes the user's personal schedules and user's group's
 *         schedules.
 *         The response is either a UserTimeScheduleGetListResponse or an ErrorResponse.
 *
 * @see UserTimeScheduleGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:46753","type":"sequence"}]
 */
class UserTimeScheduleGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46753
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

