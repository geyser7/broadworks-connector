<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSequentialRingGetRequest13mp16
 *
 * Get the user's sequential ring service setting.
 *         The response is either a UserSequentialRingGetResponse13mp16 or an ErrorResponse.
 *         Replaced By: UserSequentialRingGetRequest14sp4
 *
 * @see UserSequentialRingGetResponse13mp16
 * @see ErrorResponse
 * @see UserSequentialRingGetRequest14sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:46036","type":"sequence"}]
 */
class UserSequentialRingGetRequest13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46036
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

