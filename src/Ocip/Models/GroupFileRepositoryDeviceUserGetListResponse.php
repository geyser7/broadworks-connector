<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFileRepositoryDeviceUserGetListResponse
 *
 * Response to GroupFileRepositoryDeviceUserGetListRequest.
 *         Contains a table with column headings : "User Name","Allow
 * Delete","Allow Get","Allow Put" in a row for each file repository service
 * provider user.
 *
 * @see GroupFileRepositoryDeviceUserGetListRequest
 */
class GroupFileRepositoryDeviceUserGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileRepositoryUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $fileRepositoryUserTable = null;

    /**
     * Getter for fileRepositoryUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getFileRepositoryUserTable()
    {
        return $this->fileRepositoryUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRepositoryUserTable;
    }

    /**
     * Setter for fileRepositoryUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $fileRepositoryUserTable
     * @return $this
     */
    public function setFileRepositoryUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $fileRepositoryUserTable)
    {
        $this->fileRepositoryUserTable = $fileRepositoryUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRepositoryUserTable()
    {
        $this->fileRepositoryUserTable = null;
        return $this;
    }


}

