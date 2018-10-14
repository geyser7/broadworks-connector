<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileGroupPagingProfileModifyRequest
 */
class SystemCallProcessingPolicyProfileGroupPagingProfileModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @var string|null
     */
    private $callProcessingPolicyProfileName = null;

    /**
     * @ElementName useCLIDPolicy
     * @var bool|null
     */
    private $useCLIDPolicy = null;

    /**
     * @ElementName clidPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy|null
     */
    private $clidPolicy = null;

    /**
     * @ElementName useGroupName
     * @var bool|null
     */
    private $useGroupName = null;

    /**
     * @ElementName blockCallingNameForExternalCalls
     * @var bool|null
     */
    private $blockCallingNameForExternalCalls = null;

    /**
     * @ElementName allowConfigurableCLIDForRedirectingIdentity
     * @var bool|null
     */
    private $allowConfigurableCLIDForRedirectingIdentity = null;

    /**
     * @ElementName allowDepartmentCLIDNameOverride
     * @var bool|null
     */
    private $allowDepartmentCLIDNameOverride = null;

    /**
     * @ElementName enterpriseCallsCLIDPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy|null
     */
    private $enterpriseCallsCLIDPolicy = null;

    /**
     * @ElementName enterpriseGroupCallsCLIDPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy|null
     */
    private $enterpriseGroupCallsCLIDPolicy = null;

    /**
     * @ElementName serviceProviderGroupCallsCLIDPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInternalCallsCLIDPolicy|null
     */
    private $serviceProviderGroupCallsCLIDPolicy = null;

    /**
     * @ElementName useCallLimitsPolicy
     * @var bool|null
     */
    private $useCallLimitsPolicy = null;

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
     * @ElementName useTranslationRoutingPolicy
     * @var bool|null
     */
    private $useTranslationRoutingPolicy = null;

    /**
     * @ElementName networkUsageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection|null
     */
    private $networkUsageSelection = null;

    /**
     * @ElementName enableEnterpriseExtensionDialing
     * @var bool|null
     */
    private $enableEnterpriseExtensionDialing = null;

    /**
     * @ElementName enforceGroupCallingLineIdentityRestriction
     * @var bool|null
     */
    private $enforceGroupCallingLineIdentityRestriction = null;

    /**
     * @ElementName enforceEnterpriseCallingLineIdentityRestriction
     * @var bool|null
     */
    private $enforceEnterpriseCallingLineIdentityRestriction = null;

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
     * @ElementName useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     * @var bool|null
     */
    private $useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable = null;

    /**
     * @ElementName useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     * @var bool|null
     */
    private $useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable = null;

    /**
     * Getter for callProcessingPolicyProfileName
     *
     * @ElementName callProcessingPolicyProfileName
     * @return string|null
     */
    public function getCallProcessingPolicyProfileName()
    {
        return $this->callProcessingPolicyProfileName;
    }

    /**
     * Setter for callProcessingPolicyProfileName
     *
     * @ElementName callProcessingPolicyProfileName
     * @param string|null $callProcessingPolicyProfileName
     * @return $this
     */
    public function setCallProcessingPolicyProfileName($callProcessingPolicyProfileName)
    {
        $this->callProcessingPolicyProfileName = $callProcessingPolicyProfileName;
        return $this;
    }

    /**
     * Getter for useCLIDPolicy
     *
     * @ElementName useCLIDPolicy
     * @return bool|null
     */
    public function getUseCLIDPolicy()
    {
        return $this->useCLIDPolicy;
    }

    /**
     * Setter for useCLIDPolicy
     *
     * @ElementName useCLIDPolicy
     * @param bool|null $useCLIDPolicy
     * @return $this
     */
    public function setUseCLIDPolicy($useCLIDPolicy)
    {
        $this->useCLIDPolicy = $useCLIDPolicy;
        return $this;
    }

    /**
     * Getter for clidPolicy
     *
     * @ElementName clidPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy|null
     */
    public function getClidPolicy()
    {
        return $this->clidPolicy;
    }

    /**
     * Setter for clidPolicy
     *
     * @ElementName clidPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy|null $clidPolicy
     * @return $this
     */
    public function setClidPolicy(\CWM\BroadWorksConnector\Ocip\Models\GroupCLIDPolicy $clidPolicy)
    {
        $this->clidPolicy = $clidPolicy;
        return $this;
    }

    /**
     * Getter for useGroupName
     *
     * @ElementName useGroupName
     * @return bool|null
     */
    public function getUseGroupName()
    {
        return $this->useGroupName;
    }

    /**
     * Setter for useGroupName
     *
     * @ElementName useGroupName
     * @param bool|null $useGroupName
     * @return $this
     */
    public function setUseGroupName($useGroupName)
    {
        $this->useGroupName = $useGroupName;
        return $this;
    }

    /**
     * Getter for blockCallingNameForExternalCalls
     *
     * @ElementName blockCallingNameForExternalCalls
     * @return bool|null
     */
    public function getBlockCallingNameForExternalCalls()
    {
        return $this->blockCallingNameForExternalCalls;
    }

    /**
     * Setter for blockCallingNameForExternalCalls
     *
     * @ElementName blockCallingNameForExternalCalls
     * @param bool|null $blockCallingNameForExternalCalls
     * @return $this
     */
    public function setBlockCallingNameForExternalCalls($blockCallingNameForExternalCalls)
    {
        $this->blockCallingNameForExternalCalls = $blockCallingNameForExternalCalls;
        return $this;
    }

    /**
     * Getter for allowConfigurableCLIDForRedirectingIdentity
     *
     * @ElementName allowConfigurableCLIDForRedirectingIdentity
     * @return bool|null
     */
    public function getAllowConfigurableCLIDForRedirectingIdentity()
    {
        return $this->allowConfigurableCLIDForRedirectingIdentity;
    }

    /**
     * Setter for allowConfigurableCLIDForRedirectingIdentity
     *
     * @ElementName allowConfigurableCLIDForRedirectingIdentity
     * @param bool|null $allowConfigurableCLIDForRedirectingIdentity
     * @return $this
     */
    public function setAllowConfigurableCLIDForRedirectingIdentity($allowConfigurableCLIDForRedirectingIdentity)
    {
        $this->allowConfigurableCLIDForRedirectingIdentity = $allowConfigurableCLIDForRedirectingIdentity;
        return $this;
    }

    /**
     * Getter for allowDepartmentCLIDNameOverride
     *
     * @ElementName allowDepartmentCLIDNameOverride
     * @return bool|null
     */
    public function getAllowDepartmentCLIDNameOverride()
    {
        return $this->allowDepartmentCLIDNameOverride;
    }

    /**
     * Setter for allowDepartmentCLIDNameOverride
     *
     * @ElementName allowDepartmentCLIDNameOverride
     * @param bool|null $allowDepartmentCLIDNameOverride
     * @return $this
     */
    public function setAllowDepartmentCLIDNameOverride($allowDepartmentCLIDNameOverride)
    {
        $this->allowDepartmentCLIDNameOverride = $allowDepartmentCLIDNameOverride;
        return $this;
    }

    /**
     * Getter for enterpriseCallsCLIDPolicy
     *
     * @ElementName enterpriseCallsCLIDPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy|null
     */
    public function getEnterpriseCallsCLIDPolicy()
    {
        return $this->enterpriseCallsCLIDPolicy;
    }

    /**
     * Setter for enterpriseCallsCLIDPolicy
     *
     * @ElementName enterpriseCallsCLIDPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy|null $enterpriseCallsCLIDPolicy
     * @return $this
     */
    public function setEnterpriseCallsCLIDPolicy(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy $enterpriseCallsCLIDPolicy)
    {
        $this->enterpriseCallsCLIDPolicy = $enterpriseCallsCLIDPolicy;
        return $this;
    }

    /**
     * Getter for enterpriseGroupCallsCLIDPolicy
     *
     * @ElementName enterpriseGroupCallsCLIDPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy|null
     */
    public function getEnterpriseGroupCallsCLIDPolicy()
    {
        return $this->enterpriseGroupCallsCLIDPolicy;
    }

    /**
     * Setter for enterpriseGroupCallsCLIDPolicy
     *
     * @ElementName enterpriseGroupCallsCLIDPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy|null $enterpriseGroupCallsCLIDPolicy
     * @return $this
     */
    public function setEnterpriseGroupCallsCLIDPolicy(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy $enterpriseGroupCallsCLIDPolicy)
    {
        $this->enterpriseGroupCallsCLIDPolicy = $enterpriseGroupCallsCLIDPolicy;
        return $this;
    }

    /**
     * Getter for serviceProviderGroupCallsCLIDPolicy
     *
     * @ElementName serviceProviderGroupCallsCLIDPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInternalCallsCLIDPolicy|null
     */
    public function getServiceProviderGroupCallsCLIDPolicy()
    {
        return $this->serviceProviderGroupCallsCLIDPolicy;
    }

    /**
     * Setter for serviceProviderGroupCallsCLIDPolicy
     *
     * @ElementName serviceProviderGroupCallsCLIDPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInternalCallsCLIDPolicy|null $serviceProviderGroupCallsCLIDPolicy
     * @return $this
     */
    public function setServiceProviderGroupCallsCLIDPolicy(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderInternalCallsCLIDPolicy $serviceProviderGroupCallsCLIDPolicy)
    {
        $this->serviceProviderGroupCallsCLIDPolicy = $serviceProviderGroupCallsCLIDPolicy;
        return $this;
    }

    /**
     * Getter for useCallLimitsPolicy
     *
     * @ElementName useCallLimitsPolicy
     * @return bool|null
     */
    public function getUseCallLimitsPolicy()
    {
        return $this->useCallLimitsPolicy;
    }

    /**
     * Setter for useCallLimitsPolicy
     *
     * @ElementName useCallLimitsPolicy
     * @param bool|null $useCallLimitsPolicy
     * @return $this
     */
    public function setUseCallLimitsPolicy($useCallLimitsPolicy)
    {
        $this->useCallLimitsPolicy = $useCallLimitsPolicy;
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
     * Getter for useTranslationRoutingPolicy
     *
     * @ElementName useTranslationRoutingPolicy
     * @return bool|null
     */
    public function getUseTranslationRoutingPolicy()
    {
        return $this->useTranslationRoutingPolicy;
    }

    /**
     * Setter for useTranslationRoutingPolicy
     *
     * @ElementName useTranslationRoutingPolicy
     * @param bool|null $useTranslationRoutingPolicy
     * @return $this
     */
    public function setUseTranslationRoutingPolicy($useTranslationRoutingPolicy)
    {
        $this->useTranslationRoutingPolicy = $useTranslationRoutingPolicy;
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
     * Getter for useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     *
     * @ElementName useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     * @return bool|null
     */
    public function getUseUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable()
    {
        return $this->useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable;
    }

    /**
     * Setter for useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     *
     * @ElementName useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     * @param bool|null $useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     * @return $this
     */
    public function setUseUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable($useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable)
    {
        $this->useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable = $useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable;
        return $this;
    }

    /**
     * Getter for useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     *
     * @ElementName useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     * @return bool|null
     */
    public function getUseUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable()
    {
        return $this->useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable;
    }

    /**
     * Setter for useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     *
     * @ElementName useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     * @param bool|null $useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     * @return $this
     */
    public function setUseUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable($useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable)
    {
        $this->useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable = $useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable;
        return $this;
    }


}

