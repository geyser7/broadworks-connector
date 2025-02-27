<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterModifyRequest
 *
 * Modify the system level data associated with Call Center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in Amplify data mode:
 *           callHandlingSamplingPeriodMinutes
 *           callHandlingMinimumSamplingSize
 *           thresholdCrossingNotificationEmailGuardTimerSeconds
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:6585","type":"sequence"}]
 */
class SystemCallCenterModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultFromAddress = null;

    /**
     * @ElementName statisticsSamplingPeriodMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes|null
     */
    protected $statisticsSamplingPeriodMinutes = null;

    /**
     * @ElementName defaultEnableGuardTimer
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @var bool|null
     */
    protected $defaultEnableGuardTimer = null;

    /**
     * @ElementName defaultGuardTimerSeconds
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @MinInclusive 1
     * @MaxInclusive 25
     * @var int|null
     */
    protected $defaultGuardTimerSeconds = null;

    /**
     * @ElementName forceAgentUnavailableOnDNDActivation
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @var bool|null
     */
    protected $forceAgentUnavailableOnDNDActivation = null;

    /**
     * @ElementName forceAgentUnavailableOnPersonalCalls
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @var bool|null
     */
    protected $forceAgentUnavailableOnPersonalCalls = null;

    /**
     * @ElementName forceAgentUnavailableOnBouncedCallLimit
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @var bool|null
     */
    protected $forceAgentUnavailableOnBouncedCallLimit = null;

    /**
     * @ElementName numberConsecutiveBouncedCallsToForceAgentUnavailable
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @MinInclusive 1
     * @MaxInclusive 5
     * @var int|null
     */
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;

    /**
     * @ElementName forceAgentUnavailableOnNotReachable
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @var bool|null
     */
    protected $forceAgentUnavailableOnNotReachable = null;

    /**
     * @ElementName defaultPlayRingWhenOfferCall
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @var bool|null
     */
    protected $defaultPlayRingWhenOfferCall = null;

    /**
     * @ElementName uniformCallDistributionPolicyScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterUniformCallDistributionPolicyScope
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterUniformCallDistributionPolicyScope|null
     */
    protected $uniformCallDistributionPolicyScope = null;

    /**
     * @ElementName callHandlingSamplingPeriodMinutes
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @MinInclusive 5
     * @MaxInclusive 30
     * @var int|null
     */
    protected $callHandlingSamplingPeriodMinutes = null;

    /**
     * @ElementName callHandlingMinimumSamplingSize
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $callHandlingMinimumSamplingSize = null;

    /**
     * @ElementName playToneToAgentForEmergencyCall
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @var bool|null
     */
    protected $playToneToAgentForEmergencyCall = null;

    /**
     * @ElementName emergencyCallCLIDPrefix
     * @Type string
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $emergencyCallCLIDPrefix = null;

    /**
     * @ElementName thresholdCrossingNotificationEmailGuardTimerSeconds
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @MinInclusive 3
     * @MaxInclusive 60
     * @var int|null
     */
    protected $thresholdCrossingNotificationEmailGuardTimerSeconds = null;

    /**
     * @ElementName allowAgentDeviceInitiatedForward
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6585
     * @var bool|null
     */
    protected $allowAgentDeviceInitiatedForward = null;

    /**
     * Getter for defaultFromAddress
     *
     * @return string
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @param string $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFromAddress()
    {
        $this->defaultFromAddress = null;
        return $this;
    }

    /**
     * Getter for statisticsSamplingPeriodMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes
     */
    public function getStatisticsSamplingPeriodMinutes()
    {
        return $this->statisticsSamplingPeriodMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->statisticsSamplingPeriodMinutes;
    }

    /**
     * Setter for statisticsSamplingPeriodMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes $statisticsSamplingPeriodMinutes
     * @return $this
     */
    public function setStatisticsSamplingPeriodMinutes(\CWM\BroadWorksConnector\Ocip\Models\CallCenterStatisticsSamplingPeriodMinutes $statisticsSamplingPeriodMinutes)
    {
        $this->statisticsSamplingPeriodMinutes = $statisticsSamplingPeriodMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatisticsSamplingPeriodMinutes()
    {
        $this->statisticsSamplingPeriodMinutes = null;
        return $this;
    }

    /**
     * Getter for defaultEnableGuardTimer
     *
     * @return bool
     */
    public function getDefaultEnableGuardTimer()
    {
        return $this->defaultEnableGuardTimer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultEnableGuardTimer;
    }

    /**
     * Setter for defaultEnableGuardTimer
     *
     * @param bool $defaultEnableGuardTimer
     * @return $this
     */
    public function setDefaultEnableGuardTimer($defaultEnableGuardTimer)
    {
        $this->defaultEnableGuardTimer = $defaultEnableGuardTimer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultEnableGuardTimer()
    {
        $this->defaultEnableGuardTimer = null;
        return $this;
    }

    /**
     * Getter for defaultGuardTimerSeconds
     *
     * @return int
     */
    public function getDefaultGuardTimerSeconds()
    {
        return $this->defaultGuardTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultGuardTimerSeconds;
    }

    /**
     * Setter for defaultGuardTimerSeconds
     *
     * @param int $defaultGuardTimerSeconds
     * @return $this
     */
    public function setDefaultGuardTimerSeconds($defaultGuardTimerSeconds)
    {
        $this->defaultGuardTimerSeconds = $defaultGuardTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultGuardTimerSeconds()
    {
        $this->defaultGuardTimerSeconds = null;
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
     * Getter for defaultPlayRingWhenOfferCall
     *
     * @return bool
     */
    public function getDefaultPlayRingWhenOfferCall()
    {
        return $this->defaultPlayRingWhenOfferCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultPlayRingWhenOfferCall;
    }

    /**
     * Setter for defaultPlayRingWhenOfferCall
     *
     * @param bool $defaultPlayRingWhenOfferCall
     * @return $this
     */
    public function setDefaultPlayRingWhenOfferCall($defaultPlayRingWhenOfferCall)
    {
        $this->defaultPlayRingWhenOfferCall = $defaultPlayRingWhenOfferCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultPlayRingWhenOfferCall()
    {
        $this->defaultPlayRingWhenOfferCall = null;
        return $this;
    }

    /**
     * Getter for uniformCallDistributionPolicyScope
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterUniformCallDistributionPolicyScope
     */
    public function getUniformCallDistributionPolicyScope()
    {
        return $this->uniformCallDistributionPolicyScope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->uniformCallDistributionPolicyScope;
    }

    /**
     * Setter for uniformCallDistributionPolicyScope
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterUniformCallDistributionPolicyScope $uniformCallDistributionPolicyScope
     * @return $this
     */
    public function setUniformCallDistributionPolicyScope(\CWM\BroadWorksConnector\Ocip\Models\CallCenterUniformCallDistributionPolicyScope $uniformCallDistributionPolicyScope)
    {
        $this->uniformCallDistributionPolicyScope = $uniformCallDistributionPolicyScope;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUniformCallDistributionPolicyScope()
    {
        $this->uniformCallDistributionPolicyScope = null;
        return $this;
    }

    /**
     * Getter for callHandlingSamplingPeriodMinutes
     *
     * @return int
     */
    public function getCallHandlingSamplingPeriodMinutes()
    {
        return $this->callHandlingSamplingPeriodMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callHandlingSamplingPeriodMinutes;
    }

    /**
     * Setter for callHandlingSamplingPeriodMinutes
     *
     * @param int $callHandlingSamplingPeriodMinutes
     * @return $this
     */
    public function setCallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes)
    {
        $this->callHandlingSamplingPeriodMinutes = $callHandlingSamplingPeriodMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallHandlingSamplingPeriodMinutes()
    {
        $this->callHandlingSamplingPeriodMinutes = null;
        return $this;
    }

    /**
     * Getter for callHandlingMinimumSamplingSize
     *
     * @return int
     */
    public function getCallHandlingMinimumSamplingSize()
    {
        return $this->callHandlingMinimumSamplingSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callHandlingMinimumSamplingSize;
    }

    /**
     * Setter for callHandlingMinimumSamplingSize
     *
     * @param int $callHandlingMinimumSamplingSize
     * @return $this
     */
    public function setCallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize)
    {
        $this->callHandlingMinimumSamplingSize = $callHandlingMinimumSamplingSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallHandlingMinimumSamplingSize()
    {
        $this->callHandlingMinimumSamplingSize = null;
        return $this;
    }

    /**
     * Getter for playToneToAgentForEmergencyCall
     *
     * @return bool
     */
    public function getPlayToneToAgentForEmergencyCall()
    {
        return $this->playToneToAgentForEmergencyCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playToneToAgentForEmergencyCall;
    }

    /**
     * Setter for playToneToAgentForEmergencyCall
     *
     * @param bool $playToneToAgentForEmergencyCall
     * @return $this
     */
    public function setPlayToneToAgentForEmergencyCall($playToneToAgentForEmergencyCall)
    {
        $this->playToneToAgentForEmergencyCall = $playToneToAgentForEmergencyCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayToneToAgentForEmergencyCall()
    {
        $this->playToneToAgentForEmergencyCall = null;
        return $this;
    }

    /**
     * Getter for emergencyCallCLIDPrefix
     *
     * @return string
     */
    public function getEmergencyCallCLIDPrefix()
    {
        return $this->emergencyCallCLIDPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyCallCLIDPrefix;
    }

    /**
     * Setter for emergencyCallCLIDPrefix
     *
     * @param string $emergencyCallCLIDPrefix
     * @return $this
     */
    public function setEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix)
    {
        $this->emergencyCallCLIDPrefix = $emergencyCallCLIDPrefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencyCallCLIDPrefix()
    {
        $this->emergencyCallCLIDPrefix = null;
        return $this;
    }

    /**
     * Getter for thresholdCrossingNotificationEmailGuardTimerSeconds
     *
     * @return int
     */
    public function getThresholdCrossingNotificationEmailGuardTimerSeconds()
    {
        return $this->thresholdCrossingNotificationEmailGuardTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->thresholdCrossingNotificationEmailGuardTimerSeconds;
    }

    /**
     * Setter for thresholdCrossingNotificationEmailGuardTimerSeconds
     *
     * @param int $thresholdCrossingNotificationEmailGuardTimerSeconds
     * @return $this
     */
    public function setThresholdCrossingNotificationEmailGuardTimerSeconds($thresholdCrossingNotificationEmailGuardTimerSeconds)
    {
        $this->thresholdCrossingNotificationEmailGuardTimerSeconds = $thresholdCrossingNotificationEmailGuardTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetThresholdCrossingNotificationEmailGuardTimerSeconds()
    {
        $this->thresholdCrossingNotificationEmailGuardTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for allowAgentDeviceInitiatedForward
     *
     * @return bool
     */
    public function getAllowAgentDeviceInitiatedForward()
    {
        return $this->allowAgentDeviceInitiatedForward instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowAgentDeviceInitiatedForward;
    }

    /**
     * Setter for allowAgentDeviceInitiatedForward
     *
     * @param bool $allowAgentDeviceInitiatedForward
     * @return $this
     */
    public function setAllowAgentDeviceInitiatedForward($allowAgentDeviceInitiatedForward)
    {
        $this->allowAgentDeviceInitiatedForward = $allowAgentDeviceInitiatedForward;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowAgentDeviceInitiatedForward()
    {
        $this->allowAgentDeviceInitiatedForward = null;
        return $this;
    }


}

