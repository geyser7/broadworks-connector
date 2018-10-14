<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetResponse19
 *
 * Response to the UserCallCenterGetRequest19.
 *         Contains the user's call center settings.
 *         Indicates whether the agent is current available (logged in) to each
 * call center in the list.
 *         Contains a table with column headings: "Service User Id", "Phone
 * Number", "Extension", "Available", "Logoff Allowed", "Type",
 *          "Priority","Routing Policy" and "Skill Level".
 *         The valid "Routing Type" values are "Priority Based" and "Skill Based".
 * This column is only populated for Premium Call Centers.
 *         The valid "Skill Level" values are of from 1-20. This column is only
 * populated for Premium Skill Based Call Centers.
 *
 * @see UserCallCenterGetRequest19
 */
class UserCallCenterGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName agentACDState
     * @var \CWM\BroadWorksConnector\Ocip\Models\AgentACDState|null
     */
    private $agentACDState = null;

    /**
     * @ElementName agentThresholdProfileName
     * @var string|null
     */
    private $agentThresholdProfileName = null;

    /**
     * @ElementName agentUnavailableCode
     * @var string|null
     */
    private $agentUnavailableCode = null;

    /**
     * @ElementName useDefaultGuardTimer
     * @var bool|null
     */
    private $useDefaultGuardTimer = null;

    /**
     * @ElementName enableGuardTimer
     * @var bool|null
     */
    private $enableGuardTimer = null;

    /**
     * @ElementName guardTimerSeconds
     * @var int|null
     */
    private $guardTimerSeconds = null;

    /**
     * @ElementName useSystemDefaultUnavailableSettings
     * @var bool|null
     */
    private $useSystemDefaultUnavailableSettings = null;

    /**
     * @ElementName forceAgentUnavailableOnDNDActivation
     * @var bool|null
     */
    private $forceAgentUnavailableOnDNDActivation = null;

    /**
     * @ElementName forceAgentUnavailableOnPersonalCalls
     * @var bool|null
     */
    private $forceAgentUnavailableOnPersonalCalls = null;

    /**
     * @ElementName forceAgentUnavailableOnBouncedCallLimit
     * @var bool|null
     */
    private $forceAgentUnavailableOnBouncedCallLimit = null;

    /**
     * @ElementName numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @var int|null
     */
    private $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;

    /**
     * @ElementName forceAgentUnavailableOnNotReachable
     * @var bool|null
     */
    private $forceAgentUnavailableOnNotReachable = null;

    /**
     * @ElementName makeOutgoingCallsAsCallCenter
     * @var bool|null
     */
    private $makeOutgoingCallsAsCallCenter = null;

    /**
     * @ElementName outgoingCallDNIS
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    private $outgoingCallDNIS = null;

    /**
     * @ElementName callCenterTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $callCenterTable = null;

    /**
     * Getter for agentACDState
     *
     * @ElementName agentACDState
     * @return \CWM\BroadWorksConnector\Ocip\Models\AgentACDState|null
     */
    public function getAgentACDState()
    {
        return $this->agentACDState;
    }

    /**
     * Setter for agentACDState
     *
     * @ElementName agentACDState
     * @param \CWM\BroadWorksConnector\Ocip\Models\AgentACDState|null $agentACDState
     * @return $this
     */
    public function setAgentACDState(\CWM\BroadWorksConnector\Ocip\Models\AgentACDState $agentACDState)
    {
        $this->agentACDState = $agentACDState;
        return $this;
    }

    /**
     * Getter for agentThresholdProfileName
     *
     * @ElementName agentThresholdProfileName
     * @return string|null
     */
    public function getAgentThresholdProfileName()
    {
        return $this->agentThresholdProfileName;
    }

    /**
     * Setter for agentThresholdProfileName
     *
     * @ElementName agentThresholdProfileName
     * @param string|null $agentThresholdProfileName
     * @return $this
     */
    public function setAgentThresholdProfileName($agentThresholdProfileName)
    {
        $this->agentThresholdProfileName = $agentThresholdProfileName;
        return $this;
    }

    /**
     * Getter for agentUnavailableCode
     *
     * @ElementName agentUnavailableCode
     * @return string|null
     */
    public function getAgentUnavailableCode()
    {
        return $this->agentUnavailableCode;
    }

    /**
     * Setter for agentUnavailableCode
     *
     * @ElementName agentUnavailableCode
     * @param string|null $agentUnavailableCode
     * @return $this
     */
    public function setAgentUnavailableCode($agentUnavailableCode)
    {
        $this->agentUnavailableCode = $agentUnavailableCode;
        return $this;
    }

    /**
     * Getter for useDefaultGuardTimer
     *
     * @ElementName useDefaultGuardTimer
     * @return bool|null
     */
    public function getUseDefaultGuardTimer()
    {
        return $this->useDefaultGuardTimer;
    }

    /**
     * Setter for useDefaultGuardTimer
     *
     * @ElementName useDefaultGuardTimer
     * @param bool|null $useDefaultGuardTimer
     * @return $this
     */
    public function setUseDefaultGuardTimer($useDefaultGuardTimer)
    {
        $this->useDefaultGuardTimer = $useDefaultGuardTimer;
        return $this;
    }

    /**
     * Getter for enableGuardTimer
     *
     * @ElementName enableGuardTimer
     * @return bool|null
     */
    public function getEnableGuardTimer()
    {
        return $this->enableGuardTimer;
    }

    /**
     * Setter for enableGuardTimer
     *
     * @ElementName enableGuardTimer
     * @param bool|null $enableGuardTimer
     * @return $this
     */
    public function setEnableGuardTimer($enableGuardTimer)
    {
        $this->enableGuardTimer = $enableGuardTimer;
        return $this;
    }

    /**
     * Getter for guardTimerSeconds
     *
     * @ElementName guardTimerSeconds
     * @return int|null
     */
    public function getGuardTimerSeconds()
    {
        return $this->guardTimerSeconds;
    }

    /**
     * Setter for guardTimerSeconds
     *
     * @ElementName guardTimerSeconds
     * @param int|null $guardTimerSeconds
     * @return $this
     */
    public function setGuardTimerSeconds($guardTimerSeconds)
    {
        $this->guardTimerSeconds = $guardTimerSeconds;
        return $this;
    }

    /**
     * Getter for useSystemDefaultUnavailableSettings
     *
     * @ElementName useSystemDefaultUnavailableSettings
     * @return bool|null
     */
    public function getUseSystemDefaultUnavailableSettings()
    {
        return $this->useSystemDefaultUnavailableSettings;
    }

    /**
     * Setter for useSystemDefaultUnavailableSettings
     *
     * @ElementName useSystemDefaultUnavailableSettings
     * @param bool|null $useSystemDefaultUnavailableSettings
     * @return $this
     */
    public function setUseSystemDefaultUnavailableSettings($useSystemDefaultUnavailableSettings)
    {
        $this->useSystemDefaultUnavailableSettings = $useSystemDefaultUnavailableSettings;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnDNDActivation
     *
     * @ElementName forceAgentUnavailableOnDNDActivation
     * @return bool|null
     */
    public function getForceAgentUnavailableOnDNDActivation()
    {
        return $this->forceAgentUnavailableOnDNDActivation;
    }

    /**
     * Setter for forceAgentUnavailableOnDNDActivation
     *
     * @ElementName forceAgentUnavailableOnDNDActivation
     * @param bool|null $forceAgentUnavailableOnDNDActivation
     * @return $this
     */
    public function setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation)
    {
        $this->forceAgentUnavailableOnDNDActivation = $forceAgentUnavailableOnDNDActivation;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnPersonalCalls
     *
     * @ElementName forceAgentUnavailableOnPersonalCalls
     * @return bool|null
     */
    public function getForceAgentUnavailableOnPersonalCalls()
    {
        return $this->forceAgentUnavailableOnPersonalCalls;
    }

    /**
     * Setter for forceAgentUnavailableOnPersonalCalls
     *
     * @ElementName forceAgentUnavailableOnPersonalCalls
     * @param bool|null $forceAgentUnavailableOnPersonalCalls
     * @return $this
     */
    public function setForceAgentUnavailableOnPersonalCalls($forceAgentUnavailableOnPersonalCalls)
    {
        $this->forceAgentUnavailableOnPersonalCalls = $forceAgentUnavailableOnPersonalCalls;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnBouncedCallLimit
     *
     * @ElementName forceAgentUnavailableOnBouncedCallLimit
     * @return bool|null
     */
    public function getForceAgentUnavailableOnBouncedCallLimit()
    {
        return $this->forceAgentUnavailableOnBouncedCallLimit;
    }

    /**
     * Setter for forceAgentUnavailableOnBouncedCallLimit
     *
     * @ElementName forceAgentUnavailableOnBouncedCallLimit
     * @param bool|null $forceAgentUnavailableOnBouncedCallLimit
     * @return $this
     */
    public function setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit)
    {
        $this->forceAgentUnavailableOnBouncedCallLimit = $forceAgentUnavailableOnBouncedCallLimit;
        return $this;
    }

    /**
     * Getter for numberConsecutiveBouncedCallsToForceAgentUnavailable
     *
     * @ElementName numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @return int|null
     */
    public function getNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        return $this->numberConsecutiveBouncedCallsToForceAgentUnavailable;
    }

    /**
     * Setter for numberConsecutiveBouncedCallsToForceAgentUnavailable
     *
     * @ElementName numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @param int|null $numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @return $this
     */
    public function setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable)
    {
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = $numberConsecutiveBouncedCallsToForceAgentUnavailable;
        return $this;
    }

    /**
     * Getter for forceAgentUnavailableOnNotReachable
     *
     * @ElementName forceAgentUnavailableOnNotReachable
     * @return bool|null
     */
    public function getForceAgentUnavailableOnNotReachable()
    {
        return $this->forceAgentUnavailableOnNotReachable;
    }

    /**
     * Setter for forceAgentUnavailableOnNotReachable
     *
     * @ElementName forceAgentUnavailableOnNotReachable
     * @param bool|null $forceAgentUnavailableOnNotReachable
     * @return $this
     */
    public function setForceAgentUnavailableOnNotReachable($forceAgentUnavailableOnNotReachable)
    {
        $this->forceAgentUnavailableOnNotReachable = $forceAgentUnavailableOnNotReachable;
        return $this;
    }

    /**
     * Getter for makeOutgoingCallsAsCallCenter
     *
     * @ElementName makeOutgoingCallsAsCallCenter
     * @return bool|null
     */
    public function getMakeOutgoingCallsAsCallCenter()
    {
        return $this->makeOutgoingCallsAsCallCenter;
    }

    /**
     * Setter for makeOutgoingCallsAsCallCenter
     *
     * @ElementName makeOutgoingCallsAsCallCenter
     * @param bool|null $makeOutgoingCallsAsCallCenter
     * @return $this
     */
    public function setMakeOutgoingCallsAsCallCenter($makeOutgoingCallsAsCallCenter)
    {
        $this->makeOutgoingCallsAsCallCenter = $makeOutgoingCallsAsCallCenter;
        return $this;
    }

    /**
     * Getter for outgoingCallDNIS
     *
     * @ElementName outgoingCallDNIS
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    public function getOutgoingCallDNIS()
    {
        return $this->outgoingCallDNIS;
    }

    /**
     * Setter for outgoingCallDNIS
     *
     * @ElementName outgoingCallDNIS
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null $outgoingCallDNIS
     * @return $this
     */
    public function setOutgoingCallDNIS(\CWM\BroadWorksConnector\Ocip\Models\DNISKey $outgoingCallDNIS)
    {
        $this->outgoingCallDNIS = $outgoingCallDNIS;
        return $this;
    }

    /**
     * Getter for callCenterTable
     *
     * @ElementName callCenterTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCallCenterTable()
    {
        return $this->callCenterTable;
    }

    /**
     * Setter for callCenterTable
     *
     * @ElementName callCenterTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $callCenterTable
     * @return $this
     */
    public function setCallCenterTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $callCenterTable)
    {
        $this->callCenterTable = $callCenterTable;
        return $this;
    }


}

