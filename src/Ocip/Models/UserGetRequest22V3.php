<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest22V3
 *
 * Request to get the user information.  The response is either 
 *         UserGetResponse22V3 or ErrorResponse.
 *
 * @see UserGetResponse22V3
 * @see ErrorResponse
 * @Groups [{"id":"ee3830ce42f01a3ef2a105d473fc3b17:1657","type":"sequence"}]
 */
class UserGetRequest22V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:1657
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

