<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentAdminGetListResponse
 *
 * Response to GroupDepartmentAdminGetListRequest.
 *         Contains a 5 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Department", "Language".
 *
 * @see GroupDepartmentAdminGetListRequest
 */
class GroupDepartmentAdminGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName departmentAdminTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $departmentAdminTable = null;

    /**
     * Getter for departmentAdminTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDepartmentAdminTable()
    {
        return $this->departmentAdminTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentAdminTable;
    }

    /**
     * Setter for departmentAdminTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $departmentAdminTable
     * @return $this
     */
    public function setDepartmentAdminTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $departmentAdminTable)
    {
        $this->departmentAdminTable = $departmentAdminTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentAdminTable()
    {
        $this->departmentAdminTable = null;
        return $this;
    }


}

