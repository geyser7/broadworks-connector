<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest22
 *
 * Request to get the user information.  The response is either UserGetResponse22 or ErrorResponse.
 *         
 *         Replaced by UserGetRequest22V2
 *
 * @see UserGetResponse22
 * @see ErrorResponse
 * @see UserGetRequest22V2
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:43572","type":"sequence"}]
 */
class UserGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:43572
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

