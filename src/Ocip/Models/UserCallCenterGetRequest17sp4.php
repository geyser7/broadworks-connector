<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetRequest17sp4
 *
 * Get the user's call center settings and the list of call centers the specified
 * user belongs to.
 *         The response is either a UserCallCenterGetResponse17sp4 or an
 * ErrorResponse.
 *         
 *         Replaced by UserCallCenterGetRequest19
 *
 * @see UserCallCenterGetResponse17sp4
 * @see ErrorResponse
 * @see UserCallCenterGetRequest19
 */
class UserCallCenterGetRequest17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

