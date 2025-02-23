<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRemoteOfficeGetRequest
 *
 * Request the user level data associated with Remote Office.
 *         The response is either a UserRemoteOfficeGetResponse or an ErrorResponse.
 *
 * @see UserRemoteOfficeGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"70aea661491074f1e7cc845c9a6c7ea3:41","type":"sequence"}]
 */
class UserRemoteOfficeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 70aea661491074f1e7cc845c9a6c7ea3:41
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

