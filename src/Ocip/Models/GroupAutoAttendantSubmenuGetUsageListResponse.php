<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantSubmenuGetUsageListResponse
 *
 * Response to the GroupAutoAttendantSubmenuGetUsageListRequest.
 *         Contains a table with column headings:
 *         "Type" and "Submenu ID".
 *         
 *         The "Type" Column will contain one of the following: Business Hours Menu,
 *         After Hours Menu, Holiday Menu or Submenu.
 *         
 *         The "Submenu ID" Column will be left blank when the "Type" Column contains one
 *         of the base menu types (Business Hours Menu, After Hours Menu or Holiday Menu),
 *         and will contain the Submenu ID when the "Type" Column contains type Submenu.
 *
 * @see GroupAutoAttendantSubmenuGetUsageListRequest
 * @Groups [{"id":"ed0640d8ef49eb8b4eaa14d7c6f6c033:579","type":"sequence"}]
 */
class GroupAutoAttendantSubmenuGetUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName submenuTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:579
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $submenuTable = null;

    /**
     * Getter for submenuTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSubmenuTable()
    {
        return $this->submenuTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->submenuTable;
    }

    /**
     * Setter for submenuTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $submenuTable
     * @return $this
     */
    public function setSubmenuTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $submenuTable)
    {
        $this->submenuTable = $submenuTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSubmenuTable()
    {
        $this->submenuTable = null;
        return $this;
    }


}

