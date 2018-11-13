<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommunicationBarringGetRequest
 *
 * Gets the Communication Barring settings for a user.  
 *         The response is either a UserCommunicationBarringGetResponse or an
 * ErrorResponse.
 *         This command only applies to groups in an Enterprise. This command will
 * fail for groups in a Service Provider.
 *
 * @see UserCommunicationBarringGetResponse
 * @see ErrorResponse
 */
class UserCommunicationBarringGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

