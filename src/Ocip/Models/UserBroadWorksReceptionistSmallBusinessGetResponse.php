<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistSmallBusinessGetResponse
 *
 * Response to UserBroadWorksReceptionistSmallBusinessGetRequest.
 *         Returns a 12 column table with column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana
 * First Name", 
 *           "Group Id", "Phone Number", "Extension", "Mobile", "Email Address",
 * "Department", "IMP Id", "Title".
 *
 * @see UserBroadWorksReceptionistSmallBusinessGetRequest
 */
class UserBroadWorksReceptionistSmallBusinessGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName monitoredUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $monitoredUserTable = null;

    /**
     * Getter for monitoredUserTable
     *
     * @ElementName monitoredUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getMonitoredUserTable()
    {
        return $this->monitoredUserTable;
    }

    /**
     * Setter for monitoredUserTable
     *
     * @ElementName monitoredUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $monitoredUserTable
     * @return $this
     */
    public function setMonitoredUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $monitoredUserTable)
    {
        $this->monitoredUserTable = $monitoredUserTable;
        return $this;
    }


}

