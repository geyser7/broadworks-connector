<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPasswordInfoGetRequest
 *
 * Request the user's Web password information.
 *         The response is either a UserPasswordInfoGetResponse or an ErrorResponse.
 *
 * @see UserPasswordInfoGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"ee3830ce42f01a3ef2a105d473fc3b17:2176","type":"sequence"}]
 */
class UserPasswordInfoGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:2176
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

