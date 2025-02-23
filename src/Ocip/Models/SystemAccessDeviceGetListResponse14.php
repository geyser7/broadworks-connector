<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetListResponse14
 *
 * Response to SystemAccessDeviceGetListRequest14.
 *         Contains a table of devices defined at the System-level.
 *         The column headings are:
 *         "Device Name", "Device Type", "Available Ports", "Net Address" and "MAC Address", "Status", "Version", and "Access Device External Id".
 *
 *         The following columns are only returned in AS data mode:
 *           "Access Device External Id"
 *
 * @see SystemAccessDeviceGetListRequest14
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:1252","type":"sequence"}]
 */
class SystemAccessDeviceGetListResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName accessDeviceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:1252
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $accessDeviceTable = null;

    /**
     * Getter for accessDeviceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAccessDeviceTable()
    {
        return $this->accessDeviceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceTable;
    }

    /**
     * Setter for accessDeviceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $accessDeviceTable
     * @return $this
     */
    public function setAccessDeviceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $accessDeviceTable)
    {
        $this->accessDeviceTable = $accessDeviceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceTable()
    {
        $this->accessDeviceTable = null;
        return $this;
    }


}

