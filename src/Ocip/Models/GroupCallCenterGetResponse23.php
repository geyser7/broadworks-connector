<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetResponse23
 *
 * Response to GroupCallCenterGetRequest23.
 *         
 *         The following elements are only used in AS data mode and not returned in XS data mode:
 *           useSystemDefaultUnavailableSettings
 *           forceAgentUnavailableOnDNDActivation
 *           forceAgentUnavailableOnPersonalCalls
 *           forceAgentUnavailableOnBouncedCallLimit
 *           numberConsecutiveBouncedCallsToForceAgentUnavailable
 *           forceAgentUnavailableOnNotReachable
 *           wrapUpDestination
 *
 * @see GroupCallCenterGetRequest23
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:4777","type":"sequence"}]
 */
class GroupCallCenterGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useSystemDefaultGuardTimer
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:4777
     * @var bool|null
     */
    protected $useSystemDefaultGuardTimer = null;

    /**
     * @ElementName enableGuardTimer
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:4777
     * @var bool|null
     */
    protected $enableGuardTimer = null;

    /**
     * @ElementName guardTimerSeconds
     * @Type int
     * @Group e2c537e3e39483b96620673a7012ffdd:4777
     * @MinInclusive 1
     * @MaxInclusive 25
     * @var int|null
     */
    protected $guardTimerSeconds = null;

    /**
     * @ElementName useSystemDefaultUnavailableSettings
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4777
     * @var bool|null
     */
    protected $useSystemDefaultUnavailableSettings = null;

    /**
     * @ElementName forceAgentUnavailableOnDNDActivation
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4777
     * @var bool|null
     */
    protected $forceAgentUnavailableOnDNDActivation = null;

    /**
     * @ElementName forceAgentUnavailableOnPersonalCalls
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4777
     * @var bool|null
     */
    protected $forceAgentUnavailableOnPersonalCalls = null;

    /**
     * @ElementName forceAgentUnavailableOnBouncedCallLimit
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4777
     * @var bool|null
     */
    protected $forceAgentUnavailableOnBouncedCallLimit = null;

    /**
     * @ElementName numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4777
     * @MinInclusive 1
     * @MaxInclusive 5
     * @var int|null
     */
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;

    /**
     * @ElementName forceAgentUnavailableOnNotReachable
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4777
     * @var bool|null
     */
    protected $forceAgentUnavailableOnNotReachable = null;

    /**
     * @ElementName wrapUpDestination
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4777
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $wrapUpDestination = null;

    /**
     * Getter for useSystemDefaultGuardTimer
     *
     * @return bool
     */
    public function getUseSystemDefaultGuardTimer()
    {
        return $this->useSystemDefaultGuardTimer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemDefaultGuardTimer;
    }

    /**
     * Setter for useSystemDefaultGuardTimer
     *
     * @param bool $useSystemDefaultGuardTimer
     * @return $this
     */
    public function setUseSystemDefaultGuardTimer($useSystemDefaultGuardTimer)
    {
        $this->useSystemDefaultGuardTimer = $useSystemDefaultGuardTimer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemDefaultGuardTimer()
    {
        $this->useSystemDefaultGuardTimer = null;
        return $this;
    }

    /**
     * Getter for enableGuardTimer
     *
     * @return bool
     */
    public function getEnableGuardTimer()
    {
        return $this->enableGuardTimer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableGuardTimer;
    }

    /**
     * Setter for enableGuardTimer
     *
     * @param bool $enableGuardTimer
     * @return $this
     */
    public function setEnableGuardTimer($enableGuardTimer)
    {
        $this->enableGuardTimer = $enableGuardTimer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableGuardTimer()
    {
        $this->enableGuardTimer = null;
        return $this;
    }

    /**
     * Getter for guardTimerSeconds
     *
     * @return int
     */
    public function getGuardTimerSeconds()
    {
        return $this->guardTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->guardTimerSeconds;
    }

    /**
     * Setter for guardTimerSeconds
     *
     * @param int $guardTimerSeconds
     * @return $this
     */
    public function setGuardTimerSeconds($guardTimerSeconds)
    {
        $this->guardTimerSeconds = $guardTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGuardTimerSeconds()
    {
        $this->guardTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for useSystemDefaultUnavailableSettings
     *
     * @return bool
     */
    public function getUseSystemDefaultUnavailableSettings()
    {
        return $this->useSystemDefaultUnavailableSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemDefaultUnavailableSettings;
    }

    /**
     * Setter for useSystemDefaultUnavailableSettings
     *
     * @param bool $useSystemDefaultUnavailableSettings
     * @return $this
     */
    public function setUseSystemDefaultUnavailableSettings($useSystemDefaultUnavailableSettings)
    {
        $this->useSystemDefaultUnavailableSettings = $useSystemDefaultUnavailableSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemDefaultUnavailableSettings()
    {
        $this->useSystemDefaultUnavailableSettings = null;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnDNDActivation
     *
     * @return bool
     */
    public function getForceAgentUnavailableOnDNDActivation()
    {
        return $this->forceAgentUnavailableOnDNDActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceAgentUnavailableOnDNDActivation;
    }

    /**
     * Setter for forceAgentUnavailableOnDNDActivation
     *
     * @param bool $forceAgentUnavailableOnDNDActivation
     * @return $this
     */
    public function setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation)
    {
        $this->forceAgentUnavailableOnDNDActivation = $forceAgentUnavailableOnDNDActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceAgentUnavailableOnDNDActivation()
    {
        $this->forceAgentUnavailableOnDNDActivation = null;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnPersonalCalls
     *
     * @return bool
     */
    public function getForceAgentUnavailableOnPersonalCalls()
    {
        return $this->forceAgentUnavailableOnPersonalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceAgentUnavailableOnPersonalCalls;
    }

    /**
     * Setter for forceAgentUnavailableOnPersonalCalls
     *
     * @param bool $forceAgentUnavailableOnPersonalCalls
     * @return $this
     */
    public function setForceAgentUnavailableOnPersonalCalls($forceAgentUnavailableOnPersonalCalls)
    {
        $this->forceAgentUnavailableOnPersonalCalls = $forceAgentUnavailableOnPersonalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceAgentUnavailableOnPersonalCalls()
    {
        $this->forceAgentUnavailableOnPersonalCalls = null;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnBouncedCallLimit
     *
     * @return bool
     */
    public function getForceAgentUnavailableOnBouncedCallLimit()
    {
        return $this->forceAgentUnavailableOnBouncedCallLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceAgentUnavailableOnBouncedCallLimit;
    }

    /**
     * Setter for forceAgentUnavailableOnBouncedCallLimit
     *
     * @param bool $forceAgentUnavailableOnBouncedCallLimit
     * @return $this
     */
    public function setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit)
    {
        $this->forceAgentUnavailableOnBouncedCallLimit = $forceAgentUnavailableOnBouncedCallLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceAgentUnavailableOnBouncedCallLimit()
    {
        $this->forceAgentUnavailableOnBouncedCallLimit = null;
        return $this;
    }

    /**
     * Getter for numberConsecutiveBouncedCallsToForceAgentUnavailable
     *
     * @return int
     */
    public function getNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        return $this->numberConsecutiveBouncedCallsToForceAgentUnavailable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberConsecutiveBouncedCallsToForceAgentUnavailable;
    }

    /**
     * Setter for numberConsecutiveBouncedCallsToForceAgentUnavailable
     *
     * @param int $numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @return $this
     */
    public function setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable)
    {
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = $numberConsecutiveBouncedCallsToForceAgentUnavailable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = null;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnNotReachable
     *
     * @return bool
     */
    public function getForceAgentUnavailableOnNotReachable()
    {
        return $this->forceAgentUnavailableOnNotReachable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceAgentUnavailableOnNotReachable;
    }

    /**
     * Setter for forceAgentUnavailableOnNotReachable
     *
     * @param bool $forceAgentUnavailableOnNotReachable
     * @return $this
     */
    public function setForceAgentUnavailableOnNotReachable($forceAgentUnavailableOnNotReachable)
    {
        $this->forceAgentUnavailableOnNotReachable = $forceAgentUnavailableOnNotReachable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceAgentUnavailableOnNotReachable()
    {
        $this->forceAgentUnavailableOnNotReachable = null;
        return $this;
    }

    /**
     * Getter for wrapUpDestination
     *
     * @return string
     */
    public function getWrapUpDestination()
    {
        return $this->wrapUpDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->wrapUpDestination;
    }

    /**
     * Setter for wrapUpDestination
     *
     * @param string $wrapUpDestination
     * @return $this
     */
    public function setWrapUpDestination($wrapUpDestination)
    {
        $this->wrapUpDestination = $wrapUpDestination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWrapUpDestination()
    {
        $this->wrapUpDestination = null;
        return $this;
    }


}

