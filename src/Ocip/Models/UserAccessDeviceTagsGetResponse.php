<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAccessDeviceTagsGetResponse
 *
 * Response to UserAccessDeviceTagsGetRequest.
 *         The response contains a table with columns: "Tag Name", and "Tag Value".
 *
 * @see UserAccessDeviceTagsGetRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:325","type":"sequence"}]
 */
class UserAccessDeviceTagsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName deviceTagsTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 53d18cc797d03d802cbc411ad821f1d4:325
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $deviceTagsTable = null;

    /**
     * Getter for deviceTagsTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDeviceTagsTable()
    {
        return $this->deviceTagsTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTagsTable;
    }

    /**
     * Setter for deviceTagsTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTagsTable
     * @return $this
     */
    public function setDeviceTagsTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $deviceTagsTable)
    {
        $this->deviceTagsTable = $deviceTagsTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTagsTable()
    {
        $this->deviceTagsTable = null;
        return $this;
    }


}

