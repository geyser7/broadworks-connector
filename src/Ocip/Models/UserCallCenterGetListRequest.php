<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetListRequest
 *
 * Get the list of call centers the specified user belongs to.
 *         The response is either a UserCallCenterGetListResponse or an ErrorResponse.
 *         Replaced By: UserCallCenterGetRequest
 *
 * @see UserCallCenterGetListResponse
 * @see ErrorResponse
 * @see UserCallCenterGetRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:32607","type":"sequence"}]
 */
class UserCallCenterGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:32607
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

