<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVideoAddOnGetRequest14
 *
 * Get the user's Video Add-On service setting.
 *         The response is either a UserVideoAddOnGetResponse14 or an ErrorResponse.
 *     
 *         Replaced by: UserVideoAddOnGetRequest19.
 *
 * @see UserVideoAddOnGetResponse14
 * @see ErrorResponse
 * @see UserVideoAddOnGetRequest19
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:46879","type":"sequence"}]
 */
class UserVideoAddOnGetRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46879
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

