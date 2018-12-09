<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAlternateUserIdGetListResponse
 *
 * Response to UserAlternateUserIdGetListRequest.
 *         Contains a table of the main user id and the alternate user ids, the column headings are: "User Id", "Description", "Alternate".
 *         The possible values for "Alternate" are "true" and "false".
 *         The "Description" is only present for alternate user Ids.
 *
 * @see UserAlternateUserIdGetListRequest
 * @Groups [{"id":"ee3830ce42f01a3ef2a105d473fc3b17:371","type":"sequence"}]
 */
class UserAlternateUserIdGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userIdTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:371
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userIdTable = null;

    /**
     * Getter for userIdTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserIdTable()
    {
        return $this->userIdTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userIdTable;
    }

    /**
     * Setter for userIdTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userIdTable
     * @return $this
     */
    public function setUserIdTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userIdTable)
    {
        $this->userIdTable = $userIdTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserIdTable()
    {
        $this->userIdTable = null;
        return $this;
    }


}

