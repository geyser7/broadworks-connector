<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanRedirectingGetListResponse
 *
 * Response to GroupOutgoingCallingPlanRedirectingGetListRequest.
 *
 * @see GroupOutgoingCallingPlanRedirectingGetListRequest
 */
class GroupOutgoingCallingPlanRedirectingGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissions|null
     */
    private $groupPermissions = null;

    /**
     * @ElementName departmentPermissions
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingDepartmentPermissions[]
     */
    private $departmentPermissions = array(
        
    );

    /**
     * Getter for groupPermissions
     *
     * @ElementName groupPermissions
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissions|null
     */
    public function getGroupPermissions()
    {
        return $this->groupPermissions;
    }

    /**
     * Setter for groupPermissions
     *
     * @ElementName groupPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissions|null $groupPermissions
     * @return $this
     */
    public function setGroupPermissions(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingPermissions $groupPermissions)
    {
        $this->groupPermissions = $groupPermissions;
        return $this;
    }

    /**
     * Getter for departmentPermissions
     *
     * @ElementName departmentPermissions
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingDepartmentPermissions[]
     */
    public function getDepartmentPermissions()
    {
        return $this->departmentPermissions;
    }

    /**
     * Setter for departmentPermissions
     *
     * @ElementName departmentPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingDepartmentPermissions[] $departmentPermissions
     * @return $this
     */
    public function setDepartmentPermissions(array $departmentPermissions)
    {
        $this->departmentPermissions = $departmentPermissions;
        return $this;
    }

    /**
     * Adder for departmentPermissions
     *
     * @ElementName departmentPermissions
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanRedirectingDepartmentPermissions $departmentPermissions
     * @return $this
     */
    public function addDepartmentPermissions($departmentPermissions)
    {
        $this->departmentPermissions []= $departmentPermissions;
        return $this;
    }


}

