<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSelectiveCallRejectionGetCriteriaListRequest
 *
 * Get the user's selective call rejection criteria listing.
 *         The response is either a UserSelectiveCallRejectionGetCriteriaListResponse or an ErrorResponse.
 *
 * @see UserSelectiveCallRejectionGetCriteriaListResponse
 * @see ErrorResponse
 * @Groups [{"id":"4b7289c8f4277798c695334874edd510:91","type":"sequence"}]
 */
class UserSelectiveCallRejectionGetCriteriaListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 4b7289c8f4277798c695334874edd510:91
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

