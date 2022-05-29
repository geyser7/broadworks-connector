<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterModifyRequest19
 *
 * Modifies the agents call center settings and the availability for an agent in one or more Call Centers.
 *         Contains a list specifying the desired availability status of one or more call centers.
 *         A default unavailable code will be used if the parameter agentUnavailableCode is not active, included or is invalid.
 *         Changing the agentACDState from unavailable to any other state will automatically clear the unavailable code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           agentACDState
 *           agentThresholdProfileName
 *           agentUnavailableCode
 *           useSystemDefaultUnavailableSettings
 *           forceAgentUnavailableOnDNDActivation
 *           forceAgentUnavailableOnPersonalCalls
 *           forceAgentUnavailableOnBouncedCallLimit
 *           numberConsecutiveBouncedCallsToForceAgentUnavailable
 *           forceAgentUnavailableOnNotReachable
 *           makeOutgoingCallsAsCallCenter
 *           outgoingCallDNIS
 *           useSystemDefaultWrapUpDestination
 *           wrapUpDestination
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:7259","type":"sequence"}]
 */
class UserCallCenterModifyRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName agentACDState
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AgentACDState
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @var \CWM\BroadWorksConnector\Ocip\Models\AgentACDState|null
     */
    protected $agentACDState = null;

    /**
     * @ElementName agentThresholdProfileName
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $agentThresholdProfileName = null;

    /**
     * @ElementName agentUnavailableCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @MinLength 1
     * @MaxLength 10
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $agentUnavailableCode = null;

    /**
     * @ElementName useDefaultGuardTimer
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @var bool|null
     */
    protected $useDefaultGuardTimer = null;

    /**
     * @ElementName enableGuardTimer
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @var bool|null
     */
    protected $enableGuardTimer = null;

    /**
     * @ElementName guardTimerSeconds
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @MinInclusive 1
     * @MaxInclusive 25
     * @var int|null
     */
    protected $guardTimerSeconds = null;

    /**
     * @ElementName useSystemDefaultUnavailableSettings
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @var bool|null
     */
    protected $useSystemDefaultUnavailableSettings = null;

    /**
     * @ElementName forceAgentUnavailableOnDNDActivation
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @var bool|null
     */
    protected $forceAgentUnavailableOnDNDActivation = null;

    /**
     * @ElementName forceAgentUnavailableOnPersonalCalls
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @var bool|null
     */
    protected $forceAgentUnavailableOnPersonalCalls = null;

    /**
     * @ElementName forceAgentUnavailableOnBouncedCallLimit
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @var bool|null
     */
    protected $forceAgentUnavailableOnBouncedCallLimit = null;

    /**
     * @ElementName numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @MinInclusive 1
     * @MaxInclusive 5
     * @var int|null
     */
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;

    /**
     * @ElementName forceAgentUnavailableOnNotReachable
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @var bool|null
     */
    protected $forceAgentUnavailableOnNotReachable = null;

    /**
     * @ElementName makeOutgoingCallsAsCallCenter
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @var bool|null
     */
    protected $makeOutgoingCallsAsCallCenter = null;

    /**
     * @ElementName outgoingCallDNIS
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $outgoingCallDNIS = null;

    /**
     * @ElementName callCenterAgentSettings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentSettings
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentSettings[]
     */
    protected $callCenterAgentSettings = array(
        
    );

    /**
     * @ElementName useSystemDefaultWrapUpDestination
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @var bool|null
     */
    protected $useSystemDefaultWrapUpDestination = null;

    /**
     * @ElementName wrapUpDestination
     * @Type string
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:7259
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $wrapUpDestination = null;

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

    /**
     * Getter for agentACDState
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AgentACDState
     */
    public function getAgentACDState()
    {
        return $this->agentACDState instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentACDState;
    }

    /**
     * Setter for agentACDState
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AgentACDState $agentACDState
     * @return $this
     */
    public function setAgentACDState(\CWM\BroadWorksConnector\Ocip\Models\AgentACDState $agentACDState)
    {
        $this->agentACDState = $agentACDState;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentACDState()
    {
        $this->agentACDState = null;
        return $this;
    }

    /**
     * Getter for agentThresholdProfileName
     *
     * @return string
     */
    public function getAgentThresholdProfileName()
    {
        return $this->agentThresholdProfileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentThresholdProfileName;
    }

    /**
     * Setter for agentThresholdProfileName
     *
     * @param string $agentThresholdProfileName
     * @return $this
     */
    public function setAgentThresholdProfileName($agentThresholdProfileName)
    {
        $this->agentThresholdProfileName = $agentThresholdProfileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentThresholdProfileName()
    {
        $this->agentThresholdProfileName = null;
        return $this;
    }

    /**
     * Getter for agentUnavailableCode
     *
     * @return string|null
     */
    public function getAgentUnavailableCode()
    {
        return $this->agentUnavailableCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUnavailableCode;
    }

    /**
     * Setter for agentUnavailableCode
     *
     * @param string|null $agentUnavailableCode
     * @return $this
     */
    public function setAgentUnavailableCode($agentUnavailableCode = null)
    {
        if ($agentUnavailableCode === null) {
            $this->agentUnavailableCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->agentUnavailableCode = $agentUnavailableCode;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUnavailableCode()
    {
        $this->agentUnavailableCode = null;
        return $this;
    }

    /**
     * Getter for useDefaultGuardTimer
     *
     * @return bool
     */
    public function getUseDefaultGuardTimer()
    {
        return $this->useDefaultGuardTimer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDefaultGuardTimer;
    }

    /**
     * Setter for useDefaultGuardTimer
     *
     * @param bool $useDefaultGuardTimer
     * @return $this
     */
    public function setUseDefaultGuardTimer($useDefaultGuardTimer)
    {
        $this->useDefaultGuardTimer = $useDefaultGuardTimer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDefaultGuardTimer()
    {
        $this->useDefaultGuardTimer = null;
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
     * Getter for makeOutgoingCallsAsCallCenter
     *
     * @return bool
     */
    public function getMakeOutgoingCallsAsCallCenter()
    {
        return $this->makeOutgoingCallsAsCallCenter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->makeOutgoingCallsAsCallCenter;
    }

    /**
     * Setter for makeOutgoingCallsAsCallCenter
     *
     * @param bool $makeOutgoingCallsAsCallCenter
     * @return $this
     */
    public function setMakeOutgoingCallsAsCallCenter($makeOutgoingCallsAsCallCenter)
    {
        $this->makeOutgoingCallsAsCallCenter = $makeOutgoingCallsAsCallCenter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMakeOutgoingCallsAsCallCenter()
    {
        $this->makeOutgoingCallsAsCallCenter = null;
        return $this;
    }

    /**
     * Getter for outgoingCallDNIS
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    public function getOutgoingCallDNIS()
    {
        return $this->outgoingCallDNIS instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outgoingCallDNIS;
    }

    /**
     * Setter for outgoingCallDNIS
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null $outgoingCallDNIS
     * @return $this
     */
    public function setOutgoingCallDNIS(\CWM\BroadWorksConnector\Ocip\Models\DNISKey $outgoingCallDNIS = null)
    {
        if ($outgoingCallDNIS === null) {
            $this->outgoingCallDNIS = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->outgoingCallDNIS = $outgoingCallDNIS;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutgoingCallDNIS()
    {
        $this->outgoingCallDNIS = null;
        return $this;
    }

    /**
     * Getter for callCenterAgentSettings
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentSettings[]
     */
    public function getCallCenterAgentSettings()
    {
        return $this->callCenterAgentSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCenterAgentSettings;
    }

    /**
     * Setter for callCenterAgentSettings
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentSettings[] $callCenterAgentSettings
     * @return $this
     */
    public function setCallCenterAgentSettings(array $callCenterAgentSettings)
    {
        $this->callCenterAgentSettings = $callCenterAgentSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCenterAgentSettings()
    {
        $this->callCenterAgentSettings = null;
        return $this;
    }

    /**
     * Adder for callCenterAgentSettings
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAgentSettings $callCenterAgentSettings
     * @return $this
     */
    public function addCallCenterAgentSettings($callCenterAgentSettings)
    {
        $this->callCenterAgentSettings[] = $callCenterAgentSettings;
        return $this;
    }

    /**
     * Getter for useSystemDefaultWrapUpDestination
     *
     * @return bool
     */
    public function getUseSystemDefaultWrapUpDestination()
    {
        return $this->useSystemDefaultWrapUpDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemDefaultWrapUpDestination;
    }

    /**
     * Setter for useSystemDefaultWrapUpDestination
     *
     * @param bool $useSystemDefaultWrapUpDestination
     * @return $this
     */
    public function setUseSystemDefaultWrapUpDestination($useSystemDefaultWrapUpDestination)
    {
        $this->useSystemDefaultWrapUpDestination = $useSystemDefaultWrapUpDestination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemDefaultWrapUpDestination()
    {
        $this->useSystemDefaultWrapUpDestination = null;
        return $this;
    }

    /**
     * Getter for wrapUpDestination
     *
     * @return string|null
     */
    public function getWrapUpDestination()
    {
        return $this->wrapUpDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->wrapUpDestination;
    }

    /**
     * Setter for wrapUpDestination
     *
     * @param string|null $wrapUpDestination
     * @return $this
     */
    public function setWrapUpDestination($wrapUpDestination = null)
    {
        if ($wrapUpDestination === null) {
            $this->wrapUpDestination = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->wrapUpDestination = $wrapUpDestination;
        }
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

