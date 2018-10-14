<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantModifyRequest
 *
 * Modify the User Personal Assistant information.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserPersonalAssistantModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName presence
     * @var \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence|null
     */
    private $presence = null;

    /**
     * @ElementName enableTransferToAttendant
     * @var bool|null
     */
    private $enableTransferToAttendant = null;

    /**
     * @ElementName attendantNumber
     * @var string|null
     */
    private $attendantNumber = null;

    /**
     * @ElementName enableRingSplash
     * @var bool|null
     */
    private $enableRingSplash = null;

    /**
     * @ElementName enableExpirationTime
     * @var bool|null
     */
    private $enableExpirationTime = null;

    /**
     * @ElementName expirationTime
     * @var string|null
     */
    private $expirationTime = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for presence
     *
     * @ElementName presence
     * @return \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence|null
     */
    public function getPresence()
    {
        return $this->presence;
    }

    /**
     * Setter for presence
     *
     * @ElementName presence
     * @param \CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence|null $presence
     * @return $this
     */
    public function setPresence(\CWM\BroadWorksConnector\Ocip\Models\PersonalAssistantPresence $presence)
    {
        $this->presence = $presence;
        return $this;
    }

    /**
     * Getter for enableTransferToAttendant
     *
     * @ElementName enableTransferToAttendant
     * @return bool|null
     */
    public function getEnableTransferToAttendant()
    {
        return $this->enableTransferToAttendant;
    }

    /**
     * Setter for enableTransferToAttendant
     *
     * @ElementName enableTransferToAttendant
     * @param bool|null $enableTransferToAttendant
     * @return $this
     */
    public function setEnableTransferToAttendant($enableTransferToAttendant)
    {
        $this->enableTransferToAttendant = $enableTransferToAttendant;
        return $this;
    }

    /**
     * Getter for attendantNumber
     *
     * @ElementName attendantNumber
     * @return string|null
     */
    public function getAttendantNumber()
    {
        return $this->attendantNumber;
    }

    /**
     * Setter for attendantNumber
     *
     * @ElementName attendantNumber
     * @param string|null $attendantNumber
     * @return $this
     */
    public function setAttendantNumber($attendantNumber)
    {
        $this->attendantNumber = $attendantNumber;
        return $this;
    }

    /**
     * Getter for enableRingSplash
     *
     * @ElementName enableRingSplash
     * @return bool|null
     */
    public function getEnableRingSplash()
    {
        return $this->enableRingSplash;
    }

    /**
     * Setter for enableRingSplash
     *
     * @ElementName enableRingSplash
     * @param bool|null $enableRingSplash
     * @return $this
     */
    public function setEnableRingSplash($enableRingSplash)
    {
        $this->enableRingSplash = $enableRingSplash;
        return $this;
    }

    /**
     * Getter for enableExpirationTime
     *
     * @ElementName enableExpirationTime
     * @return bool|null
     */
    public function getEnableExpirationTime()
    {
        return $this->enableExpirationTime;
    }

    /**
     * Setter for enableExpirationTime
     *
     * @ElementName enableExpirationTime
     * @param bool|null $enableExpirationTime
     * @return $this
     */
    public function setEnableExpirationTime($enableExpirationTime)
    {
        $this->enableExpirationTime = $enableExpirationTime;
        return $this;
    }

    /**
     * Getter for expirationTime
     *
     * @ElementName expirationTime
     * @return string|null
     */
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    /**
     * Setter for expirationTime
     *
     * @ElementName expirationTime
     * @param string|null $expirationTime
     * @return $this
     */
    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }


}

