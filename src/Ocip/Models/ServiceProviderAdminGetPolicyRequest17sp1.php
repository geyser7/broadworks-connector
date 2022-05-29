<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetPolicyRequest17sp1
 *
 * Requests the service provider administrator's policy settings.
 *         The response is either ServiceProviderAdminGetPolicyResponse17sp1 or ErrorResponse.
 *
 * @see ServiceProviderAdminGetPolicyResponse17sp1
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:17020","type":"sequence"}]
 */
class ServiceProviderAdminGetPolicyRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:17020
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

