<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAnonymousCallRejectionGetRequest
 *
 * Request the user level data associated with Anonymous Call Rejection.
 *         The response is either a UserAnonymousCallRejectionGetResponse or an
 *         ErrorResponse.
 *
 * @see UserAnonymousCallRejectionGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"717e1e4342421a820b1b313f1eb4eb01:95","type":"sequence"}]
 */
class UserAnonymousCallRejectionGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 717e1e4342421a820b1b313f1eb4eb01:95
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

