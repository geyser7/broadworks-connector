<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1
 *
 * Get a list of all the available BroadWorks Anywhere portal instances for a
 * specific user
 *         The response is either
 * UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1 or ErrorResponse.
 *
 * @see UserBroadWorksAnywhereGetAvailablePortalListResponse21sp1
 * @see ErrorResponse
 */
class UserBroadWorksAnywhereGetAvailablePortalListRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }


}

