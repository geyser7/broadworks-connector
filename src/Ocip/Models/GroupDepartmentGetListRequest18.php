<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentGetListRequest18
 *
 * Request a list of departments in a group. You may request only the
 *         list of departments defined at the group-level, or you may request
 *         the list of all departments in the group including all the departments
 *         defined within the enterprise the group belongs to.
 *         The response is either GroupDepartmentGetListResponse18 or
 * ErrorResponse.
 *
 * @see GroupDepartmentGetListResponse18
 * @see ErrorResponse
 */
class GroupDepartmentGetListRequest18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName includeEnterpriseDepartments
     * @Type bool
     * @var bool|null
     */
    private $includeEnterpriseDepartments = null;

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

    /**
     * Getter for includeEnterpriseDepartments
     *
     * @return bool
     */
    public function getIncludeEnterpriseDepartments()
    {
        return $this->includeEnterpriseDepartments instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeEnterpriseDepartments;
    }

    /**
     * Setter for includeEnterpriseDepartments
     *
     * @param bool $includeEnterpriseDepartments
     * @return $this
     */
    public function setIncludeEnterpriseDepartments($includeEnterpriseDepartments)
    {
        $this->includeEnterpriseDepartments = $includeEnterpriseDepartments;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeEnterpriseDepartments()
    {
        $this->includeEnterpriseDepartments = null;
        return $this;
    }


}

