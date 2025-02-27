<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileGetListResponse14sp8
 *
 * Response to SystemSIPDeviceTypeFileGetListRequest14sp8.
 *         Contains a table of device files managed by the Device Management System on a per-device type basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access URL", "Repository URL", "Template URL".
 *
 * @see SystemSIPDeviceTypeFileGetListRequest14sp8
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:16996","type":"sequence"}]
 */
class SystemSIPDeviceTypeFileGetListResponse14sp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceTypeFilesTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16996
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceTypeFilesTable = null;

    /**
     * Getter for deviceTypeFilesTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceTypeFilesTable()
    {
        return $this->deviceTypeFilesTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTypeFilesTable;
    }

    /**
     * Setter for deviceTypeFilesTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTypeFilesTable
     * @return $this
     */
    public function setDeviceTypeFilesTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTypeFilesTable)
    {
        $this->deviceTypeFilesTable = $deviceTypeFilesTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTypeFilesTable()
    {
        $this->deviceTypeFilesTable = null;
        return $this;
    }


}

