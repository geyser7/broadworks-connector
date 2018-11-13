<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGeographicRedundancyUnreachableFromPrimaryGetUserListResponse
 *
 * Response to SystemGeographicRedundancyUnreachableFromPrimaryGetUserListRequest.
 * The Unreachable From Primary User table column
 *         headings are: "User ID", "Lineport".
 *         
 *         Replaced by:
 * SystemGeographicRedundancyUnreachableFromPrimaryGetUserListResponse22 in AS data
 * mode
 *
 * @see SystemGeographicRedundancyUnreachableFromPrimaryGetUserListRequest
 * @see SystemGeographicRedundancyUnreachableFromPrimaryGetUserListResponse22
 */
class SystemGeographicRedundancyUnreachableFromPrimaryGetUserListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName unreachableFromPrimaryUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $unreachableFromPrimaryUserTable = null;

    /**
     * Getter for unreachableFromPrimaryUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUnreachableFromPrimaryUserTable()
    {
        return $this->unreachableFromPrimaryUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unreachableFromPrimaryUserTable;
    }

    /**
     * Setter for unreachableFromPrimaryUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $unreachableFromPrimaryUserTable
     * @return $this
     */
    public function setUnreachableFromPrimaryUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $unreachableFromPrimaryUserTable)
    {
        $this->unreachableFromPrimaryUserTable = $unreachableFromPrimaryUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnreachableFromPrimaryUserTable()
    {
        $this->unreachableFromPrimaryUserTable = null;
        return $this;
    }


}

