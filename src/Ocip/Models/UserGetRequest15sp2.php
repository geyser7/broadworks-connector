<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetRequest15sp2
 *
 * Request to get the user information.  The response is either 
 *         UserGetResponse15sp2 or ErrorResponse.
 *
 * @see UserGetResponse15sp2
 * @see ErrorResponse
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:34971","type":"sequence"}]
 */
class UserGetRequest15sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:34971
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

