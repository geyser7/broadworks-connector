<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVideoAddOnGetRequest19
 *
 * Get the user's Video Add-On service setting.
 *         The response is either a UserVideoAddOnGetResponse19 or an ErrorResponse.
 *
 * @see UserVideoAddOnGetResponse19
 * @see ErrorResponse
 * @Groups [{"id":"578e8f783de3e881008912f5d1277f4e:41","type":"sequence"}]
 */
class UserVideoAddOnGetRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 578e8f783de3e881008912f5d1277f4e:41
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

