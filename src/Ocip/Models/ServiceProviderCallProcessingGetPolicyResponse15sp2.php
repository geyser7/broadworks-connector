<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyResponse15sp2
 *
 * Response to ServiceProviderCallProcessingGetPolicyRequest15sp2.
 *
 * @see ServiceProviderCallProcessingGetPolicyRequest15sp2
 */
class ServiceProviderCallProcessingGetPolicyResponse15sp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useMaxSimultaneousCalls
     * @var bool|null
     */
    private $useMaxSimultaneousCalls = null;

    /**
     * @ElementName maxSimultaneousCalls
     * @var int|null
     */
    private $maxSimultaneousCalls = null;

    /**
     * @ElementName useMaxSimultaneousVideoCalls
     * @var bool|null
     */
    private $useMaxSimultaneousVideoCalls = null;

    /**
     * @ElementName maxSimultaneousVideoCalls
     * @var int|null
     */
    private $maxSimultaneousVideoCalls = null;

    /**
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @var bool|null
     */
    private $useMaxCallTimeForAnsweredCalls = null;

    /**
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @var int|null
     */
    private $maxCallTimeForAnsweredCallsMinutes = null;

    /**
     * @ElementName useMaxCallTimeForUnansweredCalls
     * @var bool|null
     */
    private $useMaxCallTimeForUnansweredCalls = null;

    /**
     * @ElementName maxCallTimeForUnansweredCallsMinutes
     * @var int|null
     */
    private $maxCallTimeForUnansweredCallsMinutes = null;

    /**
     * @ElementName mediaPolicySelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection|null
     */
    private $mediaPolicySelection = null;

    /**
     * @ElementName supportedMediaSetName
     * @var string|null
     */
    private $supportedMediaSetName = null;

    /**
     * @ElementName networkUsageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection|null
     */
    private $networkUsageSelection = null;

    /**
     * @ElementName enforceGroupCallingLineIdentityRestriction
     * @var bool|null
     */
    private $enforceGroupCallingLineIdentityRestriction = null;

    /**
     * @ElementName allowEnterpriseGroupCallTypingForPrivateDialingPlan
     * @var bool|null
     */
    private $allowEnterpriseGroupCallTypingForPrivateDialingPlan = null;

    /**
     * @ElementName allowEnterpriseGroupCallTypingForPublicDialingPlan
     * @var bool|null
     */
    private $allowEnterpriseGroupCallTypingForPublicDialingPlan = null;

    /**
     * @ElementName overrideCLIDRestrictionForPrivateCallCategory
     * @var bool|null
     */
    private $overrideCLIDRestrictionForPrivateCallCategory = null;

    /**
     * @ElementName useEnterpriseCLIDForPrivateCallCategory
     * @var bool|null
     */
    private $useEnterpriseCLIDForPrivateCallCategory = null;

    /**
     * @ElementName enableEnterpriseExtensionDialing
     * @var bool|null
     */
    private $enableEnterpriseExtensionDialing = null;

    /**
     * @ElementName enforceEnterpriseCallingLineIdentityRestriction
     * @var bool|null
     */
    private $enforceEnterpriseCallingLineIdentityRestriction = null;

    /**
     * @ElementName useSettingLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderConferenceURISettingLevel|null
     */
    private $useSettingLevel = null;

    /**
     * @ElementName conferenceURI
     * @var string|null
     */
    private $conferenceURI = null;

    /**
     * @ElementName useMaxConcurrentRedirectedCalls
     * @var bool|null
     */
    private $useMaxConcurrentRedirectedCalls = null;

    /**
     * @ElementName maxConcurrentRedirectedCalls
     * @var int|null
     */
    private $maxConcurrentRedirectedCalls = null;

    /**
     * @ElementName useMaxFindMeFollowMeDepth
     * @var bool|null
     */
    private $useMaxFindMeFollowMeDepth = null;

    /**
     * @ElementName maxFindMeFollowMeDepth
     * @var int|null
     */
    private $maxFindMeFollowMeDepth = null;

    /**
     * @ElementName maxRedirectionDepth
     * @var int|null
     */
    private $maxRedirectionDepth = null;

    /**
     * @ElementName useMaxConcurrentFindMeFollowMeInvocations
     * @var bool|null
     */
    private $useMaxConcurrentFindMeFollowMeInvocations = null;

    /**
     * @ElementName maxConcurrentFindMeFollowMeInvocations
     * @var int|null
     */
    private $maxConcurrentFindMeFollowMeInvocations = null;

    /**
     * @ElementName clidPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy|null
     */
    private $clidPolicy = null;

    /**
     * @ElementName emergencyClidPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy|null
     */
    private $emergencyClidPolicy = null;

    /**
     * @ElementName allowAlternateNumbersForRedirectingIdentity
     * @var bool|null
     */
    private $allowAlternateNumbersForRedirectingIdentity = null;

    /**
     * Getter for useMaxSimultaneousCalls
     *
     * @ElementName useMaxSimultaneousCalls
     * @return bool|null
     */
    public function getUseMaxSimultaneousCalls()
    {
        return $this->useMaxSimultaneousCalls;
    }

    /**
     * Setter for useMaxSimultaneousCalls
     *
     * @ElementName useMaxSimultaneousCalls
     * @param bool|null $useMaxSimultaneousCalls
     * @return $this
     */
    public function setUseMaxSimultaneousCalls($useMaxSimultaneousCalls)
    {
        $this->useMaxSimultaneousCalls = $useMaxSimultaneousCalls;
        return $this;
    }

    /**
     * Getter for maxSimultaneousCalls
     *
     * @ElementName maxSimultaneousCalls
     * @return int|null
     */
    public function getMaxSimultaneousCalls()
    {
        return $this->maxSimultaneousCalls;
    }

    /**
     * Setter for maxSimultaneousCalls
     *
     * @ElementName maxSimultaneousCalls
     * @param int|null $maxSimultaneousCalls
     * @return $this
     */
    public function setMaxSimultaneousCalls($maxSimultaneousCalls)
    {
        $this->maxSimultaneousCalls = $maxSimultaneousCalls;
        return $this;
    }

    /**
     * Getter for useMaxSimultaneousVideoCalls
     *
     * @ElementName useMaxSimultaneousVideoCalls
     * @return bool|null
     */
    public function getUseMaxSimultaneousVideoCalls()
    {
        return $this->useMaxSimultaneousVideoCalls;
    }

    /**
     * Setter for useMaxSimultaneousVideoCalls
     *
     * @ElementName useMaxSimultaneousVideoCalls
     * @param bool|null $useMaxSimultaneousVideoCalls
     * @return $this
     */
    public function setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls)
    {
        $this->useMaxSimultaneousVideoCalls = $useMaxSimultaneousVideoCalls;
        return $this;
    }

    /**
     * Getter for maxSimultaneousVideoCalls
     *
     * @ElementName maxSimultaneousVideoCalls
     * @return int|null
     */
    public function getMaxSimultaneousVideoCalls()
    {
        return $this->maxSimultaneousVideoCalls;
    }

    /**
     * Setter for maxSimultaneousVideoCalls
     *
     * @ElementName maxSimultaneousVideoCalls
     * @param int|null $maxSimultaneousVideoCalls
     * @return $this
     */
    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls)
    {
        $this->maxSimultaneousVideoCalls = $maxSimultaneousVideoCalls;
        return $this;
    }

    /**
     * Getter for useMaxCallTimeForAnsweredCalls
     *
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @return bool|null
     */
    public function getUseMaxCallTimeForAnsweredCalls()
    {
        return $this->useMaxCallTimeForAnsweredCalls;
    }

    /**
     * Setter for useMaxCallTimeForAnsweredCalls
     *
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @param bool|null $useMaxCallTimeForAnsweredCalls
     * @return $this
     */
    public function setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls)
    {
        $this->useMaxCallTimeForAnsweredCalls = $useMaxCallTimeForAnsweredCalls;
        return $this;
    }

    /**
     * Getter for maxCallTimeForAnsweredCallsMinutes
     *
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @return int|null
     */
    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return $this->maxCallTimeForAnsweredCallsMinutes;
    }

    /**
     * Setter for maxCallTimeForAnsweredCallsMinutes
     *
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @param int|null $maxCallTimeForAnsweredCallsMinutes
     * @return $this
     */
    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes)
    {
        $this->maxCallTimeForAnsweredCallsMinutes = $maxCallTimeForAnsweredCallsMinutes;
        return $this;
    }

    /**
     * Getter for useMaxCallTimeForUnansweredCalls
     *
     * @ElementName useMaxCallTimeForUnansweredCalls
     * @return bool|null
     */
    public function getUseMaxCallTimeForUnansweredCalls()
    {
        return $this->useMaxCallTimeForUnansweredCalls;
    }

    /**
     * Setter for useMaxCallTimeForUnansweredCalls
     *
     * @ElementName useMaxCallTimeForUnansweredCalls
     * @param bool|null $useMaxCallTimeForUnansweredCalls
     * @return $this
     */
    public function setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls)
    {
        $this->useMaxCallTimeForUnansweredCalls = $useMaxCallTimeForUnansweredCalls;
        return $this;
    }

    /**
     * Getter for maxCallTimeForUnansweredCallsMinutes
     *
     * @ElementName maxCallTimeForUnansweredCallsMinutes
     * @return int|null
     */
    public function getMaxCallTimeForUnansweredCallsMinutes()
    {
        return $this->maxCallTimeForUnansweredCallsMinutes;
    }

    /**
     * Setter for maxCallTimeForUnansweredCallsMinutes
     *
     * @ElementName maxCallTimeForUnansweredCallsMinutes
     * @param int|null $maxCallTimeForUnansweredCallsMinutes
     * @return $this
     */
    public function setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes)
    {
        $this->maxCallTimeForUnansweredCallsMinutes = $maxCallTimeForUnansweredCallsMinutes;
        return $this;
    }

    /**
     * Getter for mediaPolicySelection
     *
     * @ElementName mediaPolicySelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection|null
     */
    public function getMediaPolicySelection()
    {
        return $this->mediaPolicySelection;
    }

    /**
     * Setter for mediaPolicySelection
     *
     * @ElementName mediaPolicySelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection|null $mediaPolicySelection
     * @return $this
     */
    public function setMediaPolicySelection(\CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection $mediaPolicySelection)
    {
        $this->mediaPolicySelection = $mediaPolicySelection;
        return $this;
    }

    /**
     * Getter for supportedMediaSetName
     *
     * @ElementName supportedMediaSetName
     * @return string|null
     */
    public function getSupportedMediaSetName()
    {
        return $this->supportedMediaSetName;
    }

    /**
     * Setter for supportedMediaSetName
     *
     * @ElementName supportedMediaSetName
     * @param string|null $supportedMediaSetName
     * @return $this
     */
    public function setSupportedMediaSetName($supportedMediaSetName)
    {
        $this->supportedMediaSetName = $supportedMediaSetName;
        return $this;
    }

    /**
     * Getter for networkUsageSelection
     *
     * @ElementName networkUsageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection|null
     */
    public function getNetworkUsageSelection()
    {
        return $this->networkUsageSelection;
    }

    /**
     * Setter for networkUsageSelection
     *
     * @ElementName networkUsageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection|null $networkUsageSelection
     * @return $this
     */
    public function setNetworkUsageSelection(\CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection $networkUsageSelection)
    {
        $this->networkUsageSelection = $networkUsageSelection;
        return $this;
    }

    /**
     * Getter for enforceGroupCallingLineIdentityRestriction
     *
     * @ElementName enforceGroupCallingLineIdentityRestriction
     * @return bool|null
     */
    public function getEnforceGroupCallingLineIdentityRestriction()
    {
        return $this->enforceGroupCallingLineIdentityRestriction;
    }

    /**
     * Setter for enforceGroupCallingLineIdentityRestriction
     *
     * @ElementName enforceGroupCallingLineIdentityRestriction
     * @param bool|null $enforceGroupCallingLineIdentityRestriction
     * @return $this
     */
    public function setEnforceGroupCallingLineIdentityRestriction($enforceGroupCallingLineIdentityRestriction)
    {
        $this->enforceGroupCallingLineIdentityRestriction = $enforceGroupCallingLineIdentityRestriction;
        return $this;
    }

    /**
     * Getter for allowEnterpriseGroupCallTypingForPrivateDialingPlan
     *
     * @ElementName allowEnterpriseGroupCallTypingForPrivateDialingPlan
     * @return bool|null
     */
    public function getAllowEnterpriseGroupCallTypingForPrivateDialingPlan()
    {
        return $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan;
    }

    /**
     * Setter for allowEnterpriseGroupCallTypingForPrivateDialingPlan
     *
     * @ElementName allowEnterpriseGroupCallTypingForPrivateDialingPlan
     * @param bool|null $allowEnterpriseGroupCallTypingForPrivateDialingPlan
     * @return $this
     */
    public function setAllowEnterpriseGroupCallTypingForPrivateDialingPlan($allowEnterpriseGroupCallTypingForPrivateDialingPlan)
    {
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan = $allowEnterpriseGroupCallTypingForPrivateDialingPlan;
        return $this;
    }

    /**
     * Getter for allowEnterpriseGroupCallTypingForPublicDialingPlan
     *
     * @ElementName allowEnterpriseGroupCallTypingForPublicDialingPlan
     * @return bool|null
     */
    public function getAllowEnterpriseGroupCallTypingForPublicDialingPlan()
    {
        return $this->allowEnterpriseGroupCallTypingForPublicDialingPlan;
    }

    /**
     * Setter for allowEnterpriseGroupCallTypingForPublicDialingPlan
     *
     * @ElementName allowEnterpriseGroupCallTypingForPublicDialingPlan
     * @param bool|null $allowEnterpriseGroupCallTypingForPublicDialingPlan
     * @return $this
     */
    public function setAllowEnterpriseGroupCallTypingForPublicDialingPlan($allowEnterpriseGroupCallTypingForPublicDialingPlan)
    {
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan = $allowEnterpriseGroupCallTypingForPublicDialingPlan;
        return $this;
    }

    /**
     * Getter for overrideCLIDRestrictionForPrivateCallCategory
     *
     * @ElementName overrideCLIDRestrictionForPrivateCallCategory
     * @return bool|null
     */
    public function getOverrideCLIDRestrictionForPrivateCallCategory()
    {
        return $this->overrideCLIDRestrictionForPrivateCallCategory;
    }

    /**
     * Setter for overrideCLIDRestrictionForPrivateCallCategory
     *
     * @ElementName overrideCLIDRestrictionForPrivateCallCategory
     * @param bool|null $overrideCLIDRestrictionForPrivateCallCategory
     * @return $this
     */
    public function setOverrideCLIDRestrictionForPrivateCallCategory($overrideCLIDRestrictionForPrivateCallCategory)
    {
        $this->overrideCLIDRestrictionForPrivateCallCategory = $overrideCLIDRestrictionForPrivateCallCategory;
        return $this;
    }

    /**
     * Getter for useEnterpriseCLIDForPrivateCallCategory
     *
     * @ElementName useEnterpriseCLIDForPrivateCallCategory
     * @return bool|null
     */
    public function getUseEnterpriseCLIDForPrivateCallCategory()
    {
        return $this->useEnterpriseCLIDForPrivateCallCategory;
    }

    /**
     * Setter for useEnterpriseCLIDForPrivateCallCategory
     *
     * @ElementName useEnterpriseCLIDForPrivateCallCategory
     * @param bool|null $useEnterpriseCLIDForPrivateCallCategory
     * @return $this
     */
    public function setUseEnterpriseCLIDForPrivateCallCategory($useEnterpriseCLIDForPrivateCallCategory)
    {
        $this->useEnterpriseCLIDForPrivateCallCategory = $useEnterpriseCLIDForPrivateCallCategory;
        return $this;
    }

    /**
     * Getter for enableEnterpriseExtensionDialing
     *
     * @ElementName enableEnterpriseExtensionDialing
     * @return bool|null
     */
    public function getEnableEnterpriseExtensionDialing()
    {
        return $this->enableEnterpriseExtensionDialing;
    }

    /**
     * Setter for enableEnterpriseExtensionDialing
     *
     * @ElementName enableEnterpriseExtensionDialing
     * @param bool|null $enableEnterpriseExtensionDialing
     * @return $this
     */
    public function setEnableEnterpriseExtensionDialing($enableEnterpriseExtensionDialing)
    {
        $this->enableEnterpriseExtensionDialing = $enableEnterpriseExtensionDialing;
        return $this;
    }

    /**
     * Getter for enforceEnterpriseCallingLineIdentityRestriction
     *
     * @ElementName enforceEnterpriseCallingLineIdentityRestriction
     * @return bool|null
     */
    public function getEnforceEnterpriseCallingLineIdentityRestriction()
    {
        return $this->enforceEnterpriseCallingLineIdentityRestriction;
    }

    /**
     * Setter for enforceEnterpriseCallingLineIdentityRestriction
     *
     * @ElementName enforceEnterpriseCallingLineIdentityRestriction
     * @param bool|null $enforceEnterpriseCallingLineIdentityRestriction
     * @return $this
     */
    public function setEnforceEnterpriseCallingLineIdentityRestriction($enforceEnterpriseCallingLineIdentityRestriction)
    {
        $this->enforceEnterpriseCallingLineIdentityRestriction = $enforceEnterpriseCallingLineIdentityRestriction;
        return $this;
    }

    /**
     * Getter for useSettingLevel
     *
     * @ElementName useSettingLevel
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderConferenceURISettingLevel|null
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel;
    }

    /**
     * Setter for useSettingLevel
     *
     * @ElementName useSettingLevel
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderConferenceURISettingLevel|null $useSettingLevel
     * @return $this
     */
    public function setUseSettingLevel(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderConferenceURISettingLevel $useSettingLevel)
    {
        $this->useSettingLevel = $useSettingLevel;
        return $this;
    }

    /**
     * Getter for conferenceURI
     *
     * @ElementName conferenceURI
     * @return string|null
     */
    public function getConferenceURI()
    {
        return $this->conferenceURI;
    }

    /**
     * Setter for conferenceURI
     *
     * @ElementName conferenceURI
     * @param string|null $conferenceURI
     * @return $this
     */
    public function setConferenceURI($conferenceURI)
    {
        $this->conferenceURI = $conferenceURI;
        return $this;
    }

    /**
     * Getter for useMaxConcurrentRedirectedCalls
     *
     * @ElementName useMaxConcurrentRedirectedCalls
     * @return bool|null
     */
    public function getUseMaxConcurrentRedirectedCalls()
    {
        return $this->useMaxConcurrentRedirectedCalls;
    }

    /**
     * Setter for useMaxConcurrentRedirectedCalls
     *
     * @ElementName useMaxConcurrentRedirectedCalls
     * @param bool|null $useMaxConcurrentRedirectedCalls
     * @return $this
     */
    public function setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls)
    {
        $this->useMaxConcurrentRedirectedCalls = $useMaxConcurrentRedirectedCalls;
        return $this;
    }

    /**
     * Getter for maxConcurrentRedirectedCalls
     *
     * @ElementName maxConcurrentRedirectedCalls
     * @return int|null
     */
    public function getMaxConcurrentRedirectedCalls()
    {
        return $this->maxConcurrentRedirectedCalls;
    }

    /**
     * Setter for maxConcurrentRedirectedCalls
     *
     * @ElementName maxConcurrentRedirectedCalls
     * @param int|null $maxConcurrentRedirectedCalls
     * @return $this
     */
    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls)
    {
        $this->maxConcurrentRedirectedCalls = $maxConcurrentRedirectedCalls;
        return $this;
    }

    /**
     * Getter for useMaxFindMeFollowMeDepth
     *
     * @ElementName useMaxFindMeFollowMeDepth
     * @return bool|null
     */
    public function getUseMaxFindMeFollowMeDepth()
    {
        return $this->useMaxFindMeFollowMeDepth;
    }

    /**
     * Setter for useMaxFindMeFollowMeDepth
     *
     * @ElementName useMaxFindMeFollowMeDepth
     * @param bool|null $useMaxFindMeFollowMeDepth
     * @return $this
     */
    public function setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth)
    {
        $this->useMaxFindMeFollowMeDepth = $useMaxFindMeFollowMeDepth;
        return $this;
    }

    /**
     * Getter for maxFindMeFollowMeDepth
     *
     * @ElementName maxFindMeFollowMeDepth
     * @return int|null
     */
    public function getMaxFindMeFollowMeDepth()
    {
        return $this->maxFindMeFollowMeDepth;
    }

    /**
     * Setter for maxFindMeFollowMeDepth
     *
     * @ElementName maxFindMeFollowMeDepth
     * @param int|null $maxFindMeFollowMeDepth
     * @return $this
     */
    public function setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth)
    {
        $this->maxFindMeFollowMeDepth = $maxFindMeFollowMeDepth;
        return $this;
    }

    /**
     * Getter for maxRedirectionDepth
     *
     * @ElementName maxRedirectionDepth
     * @return int|null
     */
    public function getMaxRedirectionDepth()
    {
        return $this->maxRedirectionDepth;
    }

    /**
     * Setter for maxRedirectionDepth
     *
     * @ElementName maxRedirectionDepth
     * @param int|null $maxRedirectionDepth
     * @return $this
     */
    public function setMaxRedirectionDepth($maxRedirectionDepth)
    {
        $this->maxRedirectionDepth = $maxRedirectionDepth;
        return $this;
    }

    /**
     * Getter for useMaxConcurrentFindMeFollowMeInvocations
     *
     * @ElementName useMaxConcurrentFindMeFollowMeInvocations
     * @return bool|null
     */
    public function getUseMaxConcurrentFindMeFollowMeInvocations()
    {
        return $this->useMaxConcurrentFindMeFollowMeInvocations;
    }

    /**
     * Setter for useMaxConcurrentFindMeFollowMeInvocations
     *
     * @ElementName useMaxConcurrentFindMeFollowMeInvocations
     * @param bool|null $useMaxConcurrentFindMeFollowMeInvocations
     * @return $this
     */
    public function setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations)
    {
        $this->useMaxConcurrentFindMeFollowMeInvocations = $useMaxConcurrentFindMeFollowMeInvocations;
        return $this;
    }

    /**
     * Getter for maxConcurrentFindMeFollowMeInvocations
     *
     * @ElementName maxConcurrentFindMeFollowMeInvocations
     * @return int|null
     */
    public function getMaxConcurrentFindMeFollowMeInvocations()
    {
        return $this->maxConcurrentFindMeFollowMeInvocations;
    }

    /**
     * Setter for maxConcurrentFindMeFollowMeInvocations
     *
     * @ElementName maxConcurrentFindMeFollowMeInvocations
     * @param int|null $maxConcurrentFindMeFollowMeInvocations
     * @return $this
     */
    public function setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations)
    {
        $this->maxConcurrentFindMeFollowMeInvocations = $maxConcurrentFindMeFollowMeInvocations;
        return $this;
    }

    /**
     * Getter for clidPolicy
     *
     * @ElementName clidPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy|null
     */
    public function getClidPolicy()
    {
        return $this->clidPolicy;
    }

    /**
     * Setter for clidPolicy
     *
     * @ElementName clidPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy|null $clidPolicy
     * @return $this
     */
    public function setClidPolicy(\CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy $clidPolicy)
    {
        $this->clidPolicy = $clidPolicy;
        return $this;
    }

    /**
     * Getter for emergencyClidPolicy
     *
     * @ElementName emergencyClidPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy|null
     */
    public function getEmergencyClidPolicy()
    {
        return $this->emergencyClidPolicy;
    }

    /**
     * Setter for emergencyClidPolicy
     *
     * @ElementName emergencyClidPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy|null $emergencyClidPolicy
     * @return $this
     */
    public function setEmergencyClidPolicy(\CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy $emergencyClidPolicy)
    {
        $this->emergencyClidPolicy = $emergencyClidPolicy;
        return $this;
    }

    /**
     * Getter for allowAlternateNumbersForRedirectingIdentity
     *
     * @ElementName allowAlternateNumbersForRedirectingIdentity
     * @return bool|null
     */
    public function getAllowAlternateNumbersForRedirectingIdentity()
    {
        return $this->allowAlternateNumbersForRedirectingIdentity;
    }

    /**
     * Setter for allowAlternateNumbersForRedirectingIdentity
     *
     * @ElementName allowAlternateNumbersForRedirectingIdentity
     * @param bool|null $allowAlternateNumbersForRedirectingIdentity
     * @return $this
     */
    public function setAllowAlternateNumbersForRedirectingIdentity($allowAlternateNumbersForRedirectingIdentity)
    {
        $this->allowAlternateNumbersForRedirectingIdentity = $allowAlternateNumbersForRedirectingIdentity;
        return $this;
    }


}

