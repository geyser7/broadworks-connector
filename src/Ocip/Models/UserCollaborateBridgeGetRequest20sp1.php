<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCollaborateBridgeGetRequest20sp1
 *
 * Request the collaborate bridged assigned to the user. The user can only be assigned to one collaborate bridge at any given time.
 *         The response is either UserCollaborateBridgeGetResponse20sp1 or 
 *         ErrorResponse.
 *
 * @see UserCollaborateBridgeGetResponse20sp1
 * @see ErrorResponse
 * @Groups [{"id":"1d655a4f2853eddf47018e01b685b65b:411","type":"sequence"}]
 */
class UserCollaborateBridgeGetRequest20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 1d655a4f2853eddf47018e01b685b65b:411
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

