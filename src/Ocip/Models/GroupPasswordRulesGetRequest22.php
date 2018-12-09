<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPasswordRulesGetRequest22
 *
 * Requests the group's password rules setting that is applicable to
 *         users within the group.
 *         The response is either GroupPasswordRulesGetResponse22 or ErrorResponse.
 *
 * @see GroupPasswordRulesGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"15129cd25fa2d5581f4edfd652c24f93:5504","type":"sequence"}]
 */
class GroupPasswordRulesGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:5504
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:5504
     * @var string|null
     */
    private $groupId = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }


}

