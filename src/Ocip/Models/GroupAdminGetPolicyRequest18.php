<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetPolicyRequest18
 *
 * Requests the Group administrator's policy settings.
 *         The response is either GroupAdminGetPolicyResponse18 or ErrorResponse.
 *
 * @see GroupAdminGetPolicyResponse18
 * @see ErrorResponse
 */
class GroupAdminGetPolicyRequest18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

