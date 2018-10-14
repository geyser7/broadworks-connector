<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetListResponse14sp8
 *
 * Response to SystemSIPDeviceTypeFileGetListRequest14sp8.
 *         Contains a table of device files managed by the Device Management System
 * on a per-device type basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access
 * URL", "Repository URL", "Template URL".
 *
 * @see SystemSIPDeviceTypeFileGetListRequest14sp8
 */
class SystemSIPDeviceTypeFileGetListResponse14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceTypeFilesTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $deviceTypeFilesTable = null;

    /**
     * Getter for deviceTypeFilesTable
     *
     * @ElementName deviceTypeFilesTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDeviceTypeFilesTable()
    {
        return $this->deviceTypeFilesTable;
    }

    /**
     * Setter for deviceTypeFilesTable
     *
     * @ElementName deviceTypeFilesTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $deviceTypeFilesTable
     * @return $this
     */
    public function setDeviceTypeFilesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTypeFilesTable)
    {
        $this->deviceTypeFilesTable = $deviceTypeFilesTable;
        return $this;
    }


}

