<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPushNotificationGetRequest
 *
 * Get the push notification settings for a user.
 *         The response is either UserPushNotificationGetResponse or ErrorResponse.
 *         
 *         Replaced by: UserPushNotificationRequest24
 *
 * @see UserPushNotificationGetResponse
 * @see ErrorResponse
 * @see UserPushNotificationRequest24
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:45719","type":"sequence"}]
 */
class UserPushNotificationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:45719
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

