<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAuthenticationLockoutSettingsGetResponse
 *
 * Response to SystemAuthenticationLockoutSettingsGetRequest.
 *        Contains the authentication lockout settings in the system.
 *
 * @see SystemAuthenticationLockoutSettingsGetRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:2005","type":"sequence"}]
 */
class SystemAuthenticationLockoutSettingsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName counterResetIntervalDays
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:2005
     * @var int|null
     */
    private $counterResetIntervalDays = null;

    /**
     * @ElementName counterResetHour
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:2005
     * @var int|null
     */
    private $counterResetHour = null;

    /**
     * @ElementName counterResetMinute
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:2005
     * @var int|null
     */
    private $counterResetMinute = null;

    /**
     * @ElementName emergencySIPBypassAllowed
     * @Type bool
     * @Group b5f5416d9e71f8e4246cda16c4723744:2005
     * @var bool|null
     */
    private $emergencySIPBypassAllowed = null;

    /**
     * Getter for counterResetIntervalDays
     *
     * @return int
     */
    public function getCounterResetIntervalDays()
    {
        return $this->counterResetIntervalDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->counterResetIntervalDays;
    }

    /**
     * Setter for counterResetIntervalDays
     *
     * @param int $counterResetIntervalDays
     * @return $this
     */
    public function setCounterResetIntervalDays($counterResetIntervalDays)
    {
        $this->counterResetIntervalDays = $counterResetIntervalDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCounterResetIntervalDays()
    {
        $this->counterResetIntervalDays = null;
        return $this;
    }

    /**
     * Getter for counterResetHour
     *
     * @return int
     */
    public function getCounterResetHour()
    {
        return $this->counterResetHour instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->counterResetHour;
    }

    /**
     * Setter for counterResetHour
     *
     * @param int $counterResetHour
     * @return $this
     */
    public function setCounterResetHour($counterResetHour)
    {
        $this->counterResetHour = $counterResetHour;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCounterResetHour()
    {
        $this->counterResetHour = null;
        return $this;
    }

    /**
     * Getter for counterResetMinute
     *
     * @return int
     */
    public function getCounterResetMinute()
    {
        return $this->counterResetMinute instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->counterResetMinute;
    }

    /**
     * Setter for counterResetMinute
     *
     * @param int $counterResetMinute
     * @return $this
     */
    public function setCounterResetMinute($counterResetMinute)
    {
        $this->counterResetMinute = $counterResetMinute;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCounterResetMinute()
    {
        $this->counterResetMinute = null;
        return $this;
    }

    /**
     * Getter for emergencySIPBypassAllowed
     *
     * @return bool
     */
    public function getEmergencySIPBypassAllowed()
    {
        return $this->emergencySIPBypassAllowed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencySIPBypassAllowed;
    }

    /**
     * Setter for emergencySIPBypassAllowed
     *
     * @param bool $emergencySIPBypassAllowed
     * @return $this
     */
    public function setEmergencySIPBypassAllowed($emergencySIPBypassAllowed)
    {
        $this->emergencySIPBypassAllowed = $emergencySIPBypassAllowed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencySIPBypassAllowed()
    {
        $this->emergencySIPBypassAllowed = null;
        return $this;
    }


}

