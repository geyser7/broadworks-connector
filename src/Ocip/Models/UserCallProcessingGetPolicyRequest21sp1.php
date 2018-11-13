<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallProcessingGetPolicyRequest21sp1
 *
 * Request the user level data associated with Call Processing Policy.
 *         The response is either a UserCallProcessingGetPolicyResponse21sp1 or an
 *         ErrorResponse.
 *         Replaced by: UserCallProcessingGetPolicyRequest21sp2
 *
 * @see UserCallProcessingGetPolicyResponse21sp1
 * @see ErrorResponse
 * @see UserCallProcessingGetPolicyRequest21sp2
 */
class UserCallProcessingGetPolicyRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

