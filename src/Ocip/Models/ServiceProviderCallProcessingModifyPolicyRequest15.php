<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingModifyPolicyRequest15
 *
 * Modify the service provider level data associated with Call Processing
 *         Policy. The response is either a SuccessResponse or an ErrorResponse.
 *          The following elements are only used in AS data mode:
 *            useServiceProviderDCLIDSetting
 *            enableDialableCallerID
 *            allowConfigurableCLIDForRedirectingIdentity
 *            enterpriseCallsCLIDPolicy
 *            groupCallsCLIDPolicy
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *            enablePhoneListLookup
 *            useMaxConcurrentTerminatingAlertingRequests
 *            maxConcurrentTerminatingAlertingRequests
 *            includeRedirectionsInMaximumNumberOfConcurrentCalls
 *            useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
 *            useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
 *            allowMobileDNForRedirectingIdentity
 *            enableGatewayRoutePolicy
 *            networkCallsGatewayRouteIdentity
 *            networkURLCallsGatewayRouteIdentity
 *            emergencyCallsGatewayRouteIdentity
 *            repairCallsGatewayRouteIdentity
 *            callTypingErrorsGatewayRouteIdentity
 *
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *            routeOverrideDomain
 *            routeOverridePrefix
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see useMaxConcurrentTerminatingAlertingRequests
 * @see maxConcurrentTerminatingAlertingRequests
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:1906","type":"sequence"}]
 */
class ServiceProviderCallProcessingModifyPolicyRequest15 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName useServiceProviderDCLIDSetting
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $useServiceProviderDCLIDSetting = null;

    /**
     * @ElementName useMaxSimultaneousCalls
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $useMaxSimultaneousCalls = null;

    /**
     * @ElementName maxSimultaneousCalls
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxSimultaneousCalls = null;

    /**
     * @ElementName useMaxSimultaneousVideoCalls
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $useMaxSimultaneousVideoCalls = null;

    /**
     * @ElementName maxSimultaneousVideoCalls
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxSimultaneousVideoCalls = null;

    /**
     * @ElementName useMaxCallTimeForAnsweredCalls
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $useMaxCallTimeForAnsweredCalls = null;

    /**
     * @ElementName maxCallTimeForAnsweredCallsMinutes
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinInclusive 3
     * @MaxInclusive 2880
     * @var int|null
     */
    protected $maxCallTimeForAnsweredCallsMinutes = null;

    /**
     * @ElementName useMaxCallTimeForUnansweredCalls
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $useMaxCallTimeForUnansweredCalls = null;

    /**
     * @ElementName maxCallTimeForUnansweredCallsMinutes
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinInclusive 1
     * @MaxInclusive 2880
     * @var int|null
     */
    protected $maxCallTimeForUnansweredCallsMinutes = null;

    /**
     * @ElementName mediaPolicySelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection|null
     */
    protected $mediaPolicySelection = null;

    /**
     * @ElementName supportedMediaSetName
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $supportedMediaSetName = null;

    /**
     * @ElementName networkUsageSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection|null
     */
    protected $networkUsageSelection = null;

    /**
     * @ElementName enforceGroupCallingLineIdentityRestriction
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $enforceGroupCallingLineIdentityRestriction = null;

    /**
     * @ElementName allowEnterpriseGroupCallTypingForPrivateDialingPlan
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $allowEnterpriseGroupCallTypingForPrivateDialingPlan = null;

    /**
     * @ElementName allowEnterpriseGroupCallTypingForPublicDialingPlan
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $allowEnterpriseGroupCallTypingForPublicDialingPlan = null;

    /**
     * @ElementName overrideCLIDRestrictionForPrivateCallCategory
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $overrideCLIDRestrictionForPrivateCallCategory = null;

    /**
     * @ElementName useEnterpriseCLIDForPrivateCallCategory
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $useEnterpriseCLIDForPrivateCallCategory = null;

    /**
     * @ElementName enableEnterpriseExtensionDialing
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $enableEnterpriseExtensionDialing = null;

    /**
     * @ElementName enforceEnterpriseCallingLineIdentityRestriction
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $enforceEnterpriseCallingLineIdentityRestriction = null;

    /**
     * @ElementName useSettingLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderConferenceURISettingLevel
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderConferenceURISettingLevel|null
     */
    protected $useSettingLevel = null;

    /**
     * @ElementName conferenceURI
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $conferenceURI = null;

    /**
     * @ElementName useMaxConcurrentRedirectedCalls
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $useMaxConcurrentRedirectedCalls = null;

    /**
     * @ElementName maxConcurrentRedirectedCalls
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxConcurrentRedirectedCalls = null;

    /**
     * @ElementName useMaxFindMeFollowMeDepth
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $useMaxFindMeFollowMeDepth = null;

    /**
     * @ElementName maxFindMeFollowMeDepth
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $maxFindMeFollowMeDepth = null;

    /**
     * @ElementName maxRedirectionDepth
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinInclusive 1
     * @MaxInclusive 100
     * @var int|null
     */
    protected $maxRedirectionDepth = null;

    /**
     * @ElementName useMaxConcurrentFindMeFollowMeInvocations
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $useMaxConcurrentFindMeFollowMeInvocations = null;

    /**
     * @ElementName maxConcurrentFindMeFollowMeInvocations
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxConcurrentFindMeFollowMeInvocations = null;

    /**
     * @ElementName clidPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy|null
     */
    protected $clidPolicy = null;

    /**
     * @ElementName emergencyClidPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy|null
     */
    protected $emergencyClidPolicy = null;

    /**
     * @ElementName allowAlternateNumbersForRedirectingIdentity
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $allowAlternateNumbersForRedirectingIdentity = null;

    /**
     * @ElementName enableDialableCallerID
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $enableDialableCallerID = null;

    /**
     * @ElementName blockCallingNameForExternalCalls
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $blockCallingNameForExternalCalls = null;

    /**
     * @ElementName allowConfigurableCLIDForRedirectingIdentity
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $allowConfigurableCLIDForRedirectingIdentity = null;

    /**
     * @ElementName enterpriseCallsCLIDPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy|null
     */
    protected $enterpriseCallsCLIDPolicy = null;

    /**
     * @ElementName groupCallsCLIDPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy|null
     */
    protected $groupCallsCLIDPolicy = null;

    /**
     * @ElementName enablePhoneListLookup
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $enablePhoneListLookup = null;

    /**
     * @ElementName useMaxConcurrentTerminatingAlertingRequests
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $useMaxConcurrentTerminatingAlertingRequests = null;

    /**
     * @ElementName maxConcurrentTerminatingAlertingRequests
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinInclusive 1
     * @MaxInclusive 50
     * @var int|null
     */
    protected $maxConcurrentTerminatingAlertingRequests = null;

    /**
     * @ElementName includeRedirectionsInMaximumNumberOfConcurrentCalls
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $includeRedirectionsInMaximumNumberOfConcurrentCalls = null;

    /**
     * @ElementName useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable = null;

    /**
     * @ElementName useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable = null;

    /**
     * @ElementName routeOverrideDomain
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $routeOverrideDomain = null;

    /**
     * @ElementName routeOverridePrefix
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinLength 1
     * @MaxLength 10
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $routeOverridePrefix = null;

    /**
     * @ElementName allowMobileDNForRedirectingIdentity
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $allowMobileDNForRedirectingIdentity = null;

    /**
     * @ElementName enableGatewayRoutePolicy
     * @Type bool
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @var bool|null
     */
    protected $enableGatewayRoutePolicy = null;

    /**
     * @ElementName networkCallsGatewayRouteIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $networkCallsGatewayRouteIdentity = null;

    /**
     * @ElementName networkURLCallsGatewayRouteIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $networkURLCallsGatewayRouteIdentity = null;

    /**
     * @ElementName emergencyCallsGatewayRouteIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $emergencyCallsGatewayRouteIdentity = null;

    /**
     * @ElementName repairCallsGatewayRouteIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $repairCallsGatewayRouteIdentity = null;

    /**
     * @ElementName callTypingErrorsGatewayRouteIdentity
     * @Type string
     * @Nillable
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1906
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $callTypingErrorsGatewayRouteIdentity = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for useServiceProviderDCLIDSetting
     *
     * @return bool
     */
    public function getUseServiceProviderDCLIDSetting()
    {
        return $this->useServiceProviderDCLIDSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useServiceProviderDCLIDSetting;
    }

    /**
     * Setter for useServiceProviderDCLIDSetting
     *
     * @param bool $useServiceProviderDCLIDSetting
     * @return $this
     */
    public function setUseServiceProviderDCLIDSetting($useServiceProviderDCLIDSetting)
    {
        $this->useServiceProviderDCLIDSetting = $useServiceProviderDCLIDSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseServiceProviderDCLIDSetting()
    {
        $this->useServiceProviderDCLIDSetting = null;
        return $this;
    }

    /**
     * Getter for useMaxSimultaneousCalls
     *
     * @return bool
     */
    public function getUseMaxSimultaneousCalls()
    {
        return $this->useMaxSimultaneousCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxSimultaneousCalls;
    }

    /**
     * Setter for useMaxSimultaneousCalls
     *
     * @param bool $useMaxSimultaneousCalls
     * @return $this
     */
    public function setUseMaxSimultaneousCalls($useMaxSimultaneousCalls)
    {
        $this->useMaxSimultaneousCalls = $useMaxSimultaneousCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxSimultaneousCalls()
    {
        $this->useMaxSimultaneousCalls = null;
        return $this;
    }

    /**
     * Getter for maxSimultaneousCalls
     *
     * @return int
     */
    public function getMaxSimultaneousCalls()
    {
        return $this->maxSimultaneousCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxSimultaneousCalls;
    }

    /**
     * Setter for maxSimultaneousCalls
     *
     * @param int $maxSimultaneousCalls
     * @return $this
     */
    public function setMaxSimultaneousCalls($maxSimultaneousCalls)
    {
        $this->maxSimultaneousCalls = $maxSimultaneousCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxSimultaneousCalls()
    {
        $this->maxSimultaneousCalls = null;
        return $this;
    }

    /**
     * Getter for useMaxSimultaneousVideoCalls
     *
     * @return bool
     */
    public function getUseMaxSimultaneousVideoCalls()
    {
        return $this->useMaxSimultaneousVideoCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxSimultaneousVideoCalls;
    }

    /**
     * Setter for useMaxSimultaneousVideoCalls
     *
     * @param bool $useMaxSimultaneousVideoCalls
     * @return $this
     */
    public function setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls)
    {
        $this->useMaxSimultaneousVideoCalls = $useMaxSimultaneousVideoCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxSimultaneousVideoCalls()
    {
        $this->useMaxSimultaneousVideoCalls = null;
        return $this;
    }

    /**
     * Getter for maxSimultaneousVideoCalls
     *
     * @return int
     */
    public function getMaxSimultaneousVideoCalls()
    {
        return $this->maxSimultaneousVideoCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxSimultaneousVideoCalls;
    }

    /**
     * Setter for maxSimultaneousVideoCalls
     *
     * @param int $maxSimultaneousVideoCalls
     * @return $this
     */
    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls)
    {
        $this->maxSimultaneousVideoCalls = $maxSimultaneousVideoCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxSimultaneousVideoCalls()
    {
        $this->maxSimultaneousVideoCalls = null;
        return $this;
    }

    /**
     * Getter for useMaxCallTimeForAnsweredCalls
     *
     * @return bool
     */
    public function getUseMaxCallTimeForAnsweredCalls()
    {
        return $this->useMaxCallTimeForAnsweredCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxCallTimeForAnsweredCalls;
    }

    /**
     * Setter for useMaxCallTimeForAnsweredCalls
     *
     * @param bool $useMaxCallTimeForAnsweredCalls
     * @return $this
     */
    public function setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls)
    {
        $this->useMaxCallTimeForAnsweredCalls = $useMaxCallTimeForAnsweredCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxCallTimeForAnsweredCalls()
    {
        $this->useMaxCallTimeForAnsweredCalls = null;
        return $this;
    }

    /**
     * Getter for maxCallTimeForAnsweredCallsMinutes
     *
     * @return int
     */
    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return $this->maxCallTimeForAnsweredCallsMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxCallTimeForAnsweredCallsMinutes;
    }

    /**
     * Setter for maxCallTimeForAnsweredCallsMinutes
     *
     * @param int $maxCallTimeForAnsweredCallsMinutes
     * @return $this
     */
    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes)
    {
        $this->maxCallTimeForAnsweredCallsMinutes = $maxCallTimeForAnsweredCallsMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxCallTimeForAnsweredCallsMinutes()
    {
        $this->maxCallTimeForAnsweredCallsMinutes = null;
        return $this;
    }

    /**
     * Getter for useMaxCallTimeForUnansweredCalls
     *
     * @return bool
     */
    public function getUseMaxCallTimeForUnansweredCalls()
    {
        return $this->useMaxCallTimeForUnansweredCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxCallTimeForUnansweredCalls;
    }

    /**
     * Setter for useMaxCallTimeForUnansweredCalls
     *
     * @param bool $useMaxCallTimeForUnansweredCalls
     * @return $this
     */
    public function setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls)
    {
        $this->useMaxCallTimeForUnansweredCalls = $useMaxCallTimeForUnansweredCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxCallTimeForUnansweredCalls()
    {
        $this->useMaxCallTimeForUnansweredCalls = null;
        return $this;
    }

    /**
     * Getter for maxCallTimeForUnansweredCallsMinutes
     *
     * @return int
     */
    public function getMaxCallTimeForUnansweredCallsMinutes()
    {
        return $this->maxCallTimeForUnansweredCallsMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxCallTimeForUnansweredCallsMinutes;
    }

    /**
     * Setter for maxCallTimeForUnansweredCallsMinutes
     *
     * @param int $maxCallTimeForUnansweredCallsMinutes
     * @return $this
     */
    public function setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes)
    {
        $this->maxCallTimeForUnansweredCallsMinutes = $maxCallTimeForUnansweredCallsMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxCallTimeForUnansweredCallsMinutes()
    {
        $this->maxCallTimeForUnansweredCallsMinutes = null;
        return $this;
    }

    /**
     * Getter for mediaPolicySelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection
     */
    public function getMediaPolicySelection()
    {
        return $this->mediaPolicySelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaPolicySelection;
    }

    /**
     * Setter for mediaPolicySelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection $mediaPolicySelection
     * @return $this
     */
    public function setMediaPolicySelection(\CWM\BroadWorksConnector\Ocip\Models\MediaPolicySelection $mediaPolicySelection)
    {
        $this->mediaPolicySelection = $mediaPolicySelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaPolicySelection()
    {
        $this->mediaPolicySelection = null;
        return $this;
    }

    /**
     * Getter for supportedMediaSetName
     *
     * @return string|null
     */
    public function getSupportedMediaSetName()
    {
        return $this->supportedMediaSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportedMediaSetName;
    }

    /**
     * Setter for supportedMediaSetName
     *
     * @param string|null $supportedMediaSetName
     * @return $this
     */
    public function setSupportedMediaSetName($supportedMediaSetName = null)
    {
        if ($supportedMediaSetName === null) {
            $this->supportedMediaSetName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->supportedMediaSetName = $supportedMediaSetName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportedMediaSetName()
    {
        $this->supportedMediaSetName = null;
        return $this;
    }

    /**
     * Getter for networkUsageSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection
     */
    public function getNetworkUsageSelection()
    {
        return $this->networkUsageSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkUsageSelection;
    }

    /**
     * Setter for networkUsageSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection $networkUsageSelection
     * @return $this
     */
    public function setNetworkUsageSelection(\CWM\BroadWorksConnector\Ocip\Models\NetworkUsageSelection $networkUsageSelection)
    {
        $this->networkUsageSelection = $networkUsageSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkUsageSelection()
    {
        $this->networkUsageSelection = null;
        return $this;
    }

    /**
     * Getter for enforceGroupCallingLineIdentityRestriction
     *
     * @return bool
     */
    public function getEnforceGroupCallingLineIdentityRestriction()
    {
        return $this->enforceGroupCallingLineIdentityRestriction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceGroupCallingLineIdentityRestriction;
    }

    /**
     * Setter for enforceGroupCallingLineIdentityRestriction
     *
     * @param bool $enforceGroupCallingLineIdentityRestriction
     * @return $this
     */
    public function setEnforceGroupCallingLineIdentityRestriction($enforceGroupCallingLineIdentityRestriction)
    {
        $this->enforceGroupCallingLineIdentityRestriction = $enforceGroupCallingLineIdentityRestriction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceGroupCallingLineIdentityRestriction()
    {
        $this->enforceGroupCallingLineIdentityRestriction = null;
        return $this;
    }

    /**
     * Getter for allowEnterpriseGroupCallTypingForPrivateDialingPlan
     *
     * @return bool
     */
    public function getAllowEnterpriseGroupCallTypingForPrivateDialingPlan()
    {
        return $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan;
    }

    /**
     * Setter for allowEnterpriseGroupCallTypingForPrivateDialingPlan
     *
     * @param bool $allowEnterpriseGroupCallTypingForPrivateDialingPlan
     * @return $this
     */
    public function setAllowEnterpriseGroupCallTypingForPrivateDialingPlan($allowEnterpriseGroupCallTypingForPrivateDialingPlan)
    {
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan = $allowEnterpriseGroupCallTypingForPrivateDialingPlan;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowEnterpriseGroupCallTypingForPrivateDialingPlan()
    {
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan = null;
        return $this;
    }

    /**
     * Getter for allowEnterpriseGroupCallTypingForPublicDialingPlan
     *
     * @return bool
     */
    public function getAllowEnterpriseGroupCallTypingForPublicDialingPlan()
    {
        return $this->allowEnterpriseGroupCallTypingForPublicDialingPlan instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowEnterpriseGroupCallTypingForPublicDialingPlan;
    }

    /**
     * Setter for allowEnterpriseGroupCallTypingForPublicDialingPlan
     *
     * @param bool $allowEnterpriseGroupCallTypingForPublicDialingPlan
     * @return $this
     */
    public function setAllowEnterpriseGroupCallTypingForPublicDialingPlan($allowEnterpriseGroupCallTypingForPublicDialingPlan)
    {
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan = $allowEnterpriseGroupCallTypingForPublicDialingPlan;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowEnterpriseGroupCallTypingForPublicDialingPlan()
    {
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan = null;
        return $this;
    }

    /**
     * Getter for overrideCLIDRestrictionForPrivateCallCategory
     *
     * @return bool
     */
    public function getOverrideCLIDRestrictionForPrivateCallCategory()
    {
        return $this->overrideCLIDRestrictionForPrivateCallCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->overrideCLIDRestrictionForPrivateCallCategory;
    }

    /**
     * Setter for overrideCLIDRestrictionForPrivateCallCategory
     *
     * @param bool $overrideCLIDRestrictionForPrivateCallCategory
     * @return $this
     */
    public function setOverrideCLIDRestrictionForPrivateCallCategory($overrideCLIDRestrictionForPrivateCallCategory)
    {
        $this->overrideCLIDRestrictionForPrivateCallCategory = $overrideCLIDRestrictionForPrivateCallCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOverrideCLIDRestrictionForPrivateCallCategory()
    {
        $this->overrideCLIDRestrictionForPrivateCallCategory = null;
        return $this;
    }

    /**
     * Getter for useEnterpriseCLIDForPrivateCallCategory
     *
     * @return bool
     */
    public function getUseEnterpriseCLIDForPrivateCallCategory()
    {
        return $this->useEnterpriseCLIDForPrivateCallCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useEnterpriseCLIDForPrivateCallCategory;
    }

    /**
     * Setter for useEnterpriseCLIDForPrivateCallCategory
     *
     * @param bool $useEnterpriseCLIDForPrivateCallCategory
     * @return $this
     */
    public function setUseEnterpriseCLIDForPrivateCallCategory($useEnterpriseCLIDForPrivateCallCategory)
    {
        $this->useEnterpriseCLIDForPrivateCallCategory = $useEnterpriseCLIDForPrivateCallCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseEnterpriseCLIDForPrivateCallCategory()
    {
        $this->useEnterpriseCLIDForPrivateCallCategory = null;
        return $this;
    }

    /**
     * Getter for enableEnterpriseExtensionDialing
     *
     * @return bool
     */
    public function getEnableEnterpriseExtensionDialing()
    {
        return $this->enableEnterpriseExtensionDialing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableEnterpriseExtensionDialing;
    }

    /**
     * Setter for enableEnterpriseExtensionDialing
     *
     * @param bool $enableEnterpriseExtensionDialing
     * @return $this
     */
    public function setEnableEnterpriseExtensionDialing($enableEnterpriseExtensionDialing)
    {
        $this->enableEnterpriseExtensionDialing = $enableEnterpriseExtensionDialing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableEnterpriseExtensionDialing()
    {
        $this->enableEnterpriseExtensionDialing = null;
        return $this;
    }

    /**
     * Getter for enforceEnterpriseCallingLineIdentityRestriction
     *
     * @return bool
     */
    public function getEnforceEnterpriseCallingLineIdentityRestriction()
    {
        return $this->enforceEnterpriseCallingLineIdentityRestriction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceEnterpriseCallingLineIdentityRestriction;
    }

    /**
     * Setter for enforceEnterpriseCallingLineIdentityRestriction
     *
     * @param bool $enforceEnterpriseCallingLineIdentityRestriction
     * @return $this
     */
    public function setEnforceEnterpriseCallingLineIdentityRestriction($enforceEnterpriseCallingLineIdentityRestriction)
    {
        $this->enforceEnterpriseCallingLineIdentityRestriction = $enforceEnterpriseCallingLineIdentityRestriction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceEnterpriseCallingLineIdentityRestriction()
    {
        $this->enforceEnterpriseCallingLineIdentityRestriction = null;
        return $this;
    }

    /**
     * Getter for useSettingLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderConferenceURISettingLevel
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSettingLevel;
    }

    /**
     * Setter for useSettingLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderConferenceURISettingLevel $useSettingLevel
     * @return $this
     */
    public function setUseSettingLevel(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderConferenceURISettingLevel $useSettingLevel)
    {
        $this->useSettingLevel = $useSettingLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSettingLevel()
    {
        $this->useSettingLevel = null;
        return $this;
    }

    /**
     * Getter for conferenceURI
     *
     * @return string|null
     */
    public function getConferenceURI()
    {
        return $this->conferenceURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceURI;
    }

    /**
     * Setter for conferenceURI
     *
     * @param string|null $conferenceURI
     * @return $this
     */
    public function setConferenceURI($conferenceURI = null)
    {
        if ($conferenceURI === null) {
            $this->conferenceURI = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->conferenceURI = $conferenceURI;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceURI()
    {
        $this->conferenceURI = null;
        return $this;
    }

    /**
     * Getter for useMaxConcurrentRedirectedCalls
     *
     * @return bool
     */
    public function getUseMaxConcurrentRedirectedCalls()
    {
        return $this->useMaxConcurrentRedirectedCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxConcurrentRedirectedCalls;
    }

    /**
     * Setter for useMaxConcurrentRedirectedCalls
     *
     * @param bool $useMaxConcurrentRedirectedCalls
     * @return $this
     */
    public function setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls)
    {
        $this->useMaxConcurrentRedirectedCalls = $useMaxConcurrentRedirectedCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxConcurrentRedirectedCalls()
    {
        $this->useMaxConcurrentRedirectedCalls = null;
        return $this;
    }

    /**
     * Getter for maxConcurrentRedirectedCalls
     *
     * @return int
     */
    public function getMaxConcurrentRedirectedCalls()
    {
        return $this->maxConcurrentRedirectedCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConcurrentRedirectedCalls;
    }

    /**
     * Setter for maxConcurrentRedirectedCalls
     *
     * @param int $maxConcurrentRedirectedCalls
     * @return $this
     */
    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls)
    {
        $this->maxConcurrentRedirectedCalls = $maxConcurrentRedirectedCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConcurrentRedirectedCalls()
    {
        $this->maxConcurrentRedirectedCalls = null;
        return $this;
    }

    /**
     * Getter for useMaxFindMeFollowMeDepth
     *
     * @return bool
     */
    public function getUseMaxFindMeFollowMeDepth()
    {
        return $this->useMaxFindMeFollowMeDepth instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxFindMeFollowMeDepth;
    }

    /**
     * Setter for useMaxFindMeFollowMeDepth
     *
     * @param bool $useMaxFindMeFollowMeDepth
     * @return $this
     */
    public function setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth)
    {
        $this->useMaxFindMeFollowMeDepth = $useMaxFindMeFollowMeDepth;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxFindMeFollowMeDepth()
    {
        $this->useMaxFindMeFollowMeDepth = null;
        return $this;
    }

    /**
     * Getter for maxFindMeFollowMeDepth
     *
     * @return int
     */
    public function getMaxFindMeFollowMeDepth()
    {
        return $this->maxFindMeFollowMeDepth instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxFindMeFollowMeDepth;
    }

    /**
     * Setter for maxFindMeFollowMeDepth
     *
     * @param int $maxFindMeFollowMeDepth
     * @return $this
     */
    public function setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth)
    {
        $this->maxFindMeFollowMeDepth = $maxFindMeFollowMeDepth;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxFindMeFollowMeDepth()
    {
        $this->maxFindMeFollowMeDepth = null;
        return $this;
    }

    /**
     * Getter for maxRedirectionDepth
     *
     * @return int
     */
    public function getMaxRedirectionDepth()
    {
        return $this->maxRedirectionDepth instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxRedirectionDepth;
    }

    /**
     * Setter for maxRedirectionDepth
     *
     * @param int $maxRedirectionDepth
     * @return $this
     */
    public function setMaxRedirectionDepth($maxRedirectionDepth)
    {
        $this->maxRedirectionDepth = $maxRedirectionDepth;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxRedirectionDepth()
    {
        $this->maxRedirectionDepth = null;
        return $this;
    }

    /**
     * Getter for useMaxConcurrentFindMeFollowMeInvocations
     *
     * @return bool
     */
    public function getUseMaxConcurrentFindMeFollowMeInvocations()
    {
        return $this->useMaxConcurrentFindMeFollowMeInvocations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxConcurrentFindMeFollowMeInvocations;
    }

    /**
     * Setter for useMaxConcurrentFindMeFollowMeInvocations
     *
     * @param bool $useMaxConcurrentFindMeFollowMeInvocations
     * @return $this
     */
    public function setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations)
    {
        $this->useMaxConcurrentFindMeFollowMeInvocations = $useMaxConcurrentFindMeFollowMeInvocations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxConcurrentFindMeFollowMeInvocations()
    {
        $this->useMaxConcurrentFindMeFollowMeInvocations = null;
        return $this;
    }

    /**
     * Getter for maxConcurrentFindMeFollowMeInvocations
     *
     * @return int
     */
    public function getMaxConcurrentFindMeFollowMeInvocations()
    {
        return $this->maxConcurrentFindMeFollowMeInvocations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConcurrentFindMeFollowMeInvocations;
    }

    /**
     * Setter for maxConcurrentFindMeFollowMeInvocations
     *
     * @param int $maxConcurrentFindMeFollowMeInvocations
     * @return $this
     */
    public function setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations)
    {
        $this->maxConcurrentFindMeFollowMeInvocations = $maxConcurrentFindMeFollowMeInvocations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConcurrentFindMeFollowMeInvocations()
    {
        $this->maxConcurrentFindMeFollowMeInvocations = null;
        return $this;
    }

    /**
     * Getter for clidPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy
     */
    public function getClidPolicy()
    {
        return $this->clidPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->clidPolicy;
    }

    /**
     * Setter for clidPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy $clidPolicy
     * @return $this
     */
    public function setClidPolicy(\CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy $clidPolicy)
    {
        $this->clidPolicy = $clidPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetClidPolicy()
    {
        $this->clidPolicy = null;
        return $this;
    }

    /**
     * Getter for emergencyClidPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy
     */
    public function getEmergencyClidPolicy()
    {
        return $this->emergencyClidPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyClidPolicy;
    }

    /**
     * Setter for emergencyClidPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy $emergencyClidPolicy
     * @return $this
     */
    public function setEmergencyClidPolicy(\CWM\BroadWorksConnector\Ocip\Models\CLIDPolicy $emergencyClidPolicy)
    {
        $this->emergencyClidPolicy = $emergencyClidPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencyClidPolicy()
    {
        $this->emergencyClidPolicy = null;
        return $this;
    }

    /**
     * Getter for allowAlternateNumbersForRedirectingIdentity
     *
     * @return bool
     */
    public function getAllowAlternateNumbersForRedirectingIdentity()
    {
        return $this->allowAlternateNumbersForRedirectingIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowAlternateNumbersForRedirectingIdentity;
    }

    /**
     * Setter for allowAlternateNumbersForRedirectingIdentity
     *
     * @param bool $allowAlternateNumbersForRedirectingIdentity
     * @return $this
     */
    public function setAllowAlternateNumbersForRedirectingIdentity($allowAlternateNumbersForRedirectingIdentity)
    {
        $this->allowAlternateNumbersForRedirectingIdentity = $allowAlternateNumbersForRedirectingIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowAlternateNumbersForRedirectingIdentity()
    {
        $this->allowAlternateNumbersForRedirectingIdentity = null;
        return $this;
    }

    /**
     * Getter for enableDialableCallerID
     *
     * @return bool
     */
    public function getEnableDialableCallerID()
    {
        return $this->enableDialableCallerID instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDialableCallerID;
    }

    /**
     * Setter for enableDialableCallerID
     *
     * @param bool $enableDialableCallerID
     * @return $this
     */
    public function setEnableDialableCallerID($enableDialableCallerID)
    {
        $this->enableDialableCallerID = $enableDialableCallerID;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDialableCallerID()
    {
        $this->enableDialableCallerID = null;
        return $this;
    }

    /**
     * Getter for blockCallingNameForExternalCalls
     *
     * @return bool
     */
    public function getBlockCallingNameForExternalCalls()
    {
        return $this->blockCallingNameForExternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->blockCallingNameForExternalCalls;
    }

    /**
     * Setter for blockCallingNameForExternalCalls
     *
     * @param bool $blockCallingNameForExternalCalls
     * @return $this
     */
    public function setBlockCallingNameForExternalCalls($blockCallingNameForExternalCalls)
    {
        $this->blockCallingNameForExternalCalls = $blockCallingNameForExternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBlockCallingNameForExternalCalls()
    {
        $this->blockCallingNameForExternalCalls = null;
        return $this;
    }

    /**
     * Getter for allowConfigurableCLIDForRedirectingIdentity
     *
     * @return bool
     */
    public function getAllowConfigurableCLIDForRedirectingIdentity()
    {
        return $this->allowConfigurableCLIDForRedirectingIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowConfigurableCLIDForRedirectingIdentity;
    }

    /**
     * Setter for allowConfigurableCLIDForRedirectingIdentity
     *
     * @param bool $allowConfigurableCLIDForRedirectingIdentity
     * @return $this
     */
    public function setAllowConfigurableCLIDForRedirectingIdentity($allowConfigurableCLIDForRedirectingIdentity)
    {
        $this->allowConfigurableCLIDForRedirectingIdentity = $allowConfigurableCLIDForRedirectingIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowConfigurableCLIDForRedirectingIdentity()
    {
        $this->allowConfigurableCLIDForRedirectingIdentity = null;
        return $this;
    }

    /**
     * Getter for enterpriseCallsCLIDPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy
     */
    public function getEnterpriseCallsCLIDPolicy()
    {
        return $this->enterpriseCallsCLIDPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseCallsCLIDPolicy;
    }

    /**
     * Setter for enterpriseCallsCLIDPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy $enterpriseCallsCLIDPolicy
     * @return $this
     */
    public function setEnterpriseCallsCLIDPolicy(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy $enterpriseCallsCLIDPolicy)
    {
        $this->enterpriseCallsCLIDPolicy = $enterpriseCallsCLIDPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseCallsCLIDPolicy()
    {
        $this->enterpriseCallsCLIDPolicy = null;
        return $this;
    }

    /**
     * Getter for groupCallsCLIDPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy
     */
    public function getGroupCallsCLIDPolicy()
    {
        return $this->groupCallsCLIDPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupCallsCLIDPolicy;
    }

    /**
     * Setter for groupCallsCLIDPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy $groupCallsCLIDPolicy
     * @return $this
     */
    public function setGroupCallsCLIDPolicy(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseInternalCallsCLIDPolicy $groupCallsCLIDPolicy)
    {
        $this->groupCallsCLIDPolicy = $groupCallsCLIDPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupCallsCLIDPolicy()
    {
        $this->groupCallsCLIDPolicy = null;
        return $this;
    }

    /**
     * Getter for enablePhoneListLookup
     *
     * @return bool
     */
    public function getEnablePhoneListLookup()
    {
        return $this->enablePhoneListLookup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enablePhoneListLookup;
    }

    /**
     * Setter for enablePhoneListLookup
     *
     * @param bool $enablePhoneListLookup
     * @return $this
     */
    public function setEnablePhoneListLookup($enablePhoneListLookup)
    {
        $this->enablePhoneListLookup = $enablePhoneListLookup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnablePhoneListLookup()
    {
        $this->enablePhoneListLookup = null;
        return $this;
    }

    /**
     * Getter for useMaxConcurrentTerminatingAlertingRequests
     *
     * @return bool
     */
    public function getUseMaxConcurrentTerminatingAlertingRequests()
    {
        return $this->useMaxConcurrentTerminatingAlertingRequests instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMaxConcurrentTerminatingAlertingRequests;
    }

    /**
     * Setter for useMaxConcurrentTerminatingAlertingRequests
     *
     * @param bool $useMaxConcurrentTerminatingAlertingRequests
     * @return $this
     */
    public function setUseMaxConcurrentTerminatingAlertingRequests($useMaxConcurrentTerminatingAlertingRequests)
    {
        $this->useMaxConcurrentTerminatingAlertingRequests = $useMaxConcurrentTerminatingAlertingRequests;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMaxConcurrentTerminatingAlertingRequests()
    {
        $this->useMaxConcurrentTerminatingAlertingRequests = null;
        return $this;
    }

    /**
     * Getter for maxConcurrentTerminatingAlertingRequests
     *
     * @return int
     */
    public function getMaxConcurrentTerminatingAlertingRequests()
    {
        return $this->maxConcurrentTerminatingAlertingRequests instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConcurrentTerminatingAlertingRequests;
    }

    /**
     * Setter for maxConcurrentTerminatingAlertingRequests
     *
     * @param int $maxConcurrentTerminatingAlertingRequests
     * @return $this
     */
    public function setMaxConcurrentTerminatingAlertingRequests($maxConcurrentTerminatingAlertingRequests)
    {
        $this->maxConcurrentTerminatingAlertingRequests = $maxConcurrentTerminatingAlertingRequests;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConcurrentTerminatingAlertingRequests()
    {
        $this->maxConcurrentTerminatingAlertingRequests = null;
        return $this;
    }

    /**
     * Getter for includeRedirectionsInMaximumNumberOfConcurrentCalls
     *
     * @return bool
     */
    public function getIncludeRedirectionsInMaximumNumberOfConcurrentCalls()
    {
        return $this->includeRedirectionsInMaximumNumberOfConcurrentCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeRedirectionsInMaximumNumberOfConcurrentCalls;
    }

    /**
     * Setter for includeRedirectionsInMaximumNumberOfConcurrentCalls
     *
     * @param bool $includeRedirectionsInMaximumNumberOfConcurrentCalls
     * @return $this
     */
    public function setIncludeRedirectionsInMaximumNumberOfConcurrentCalls($includeRedirectionsInMaximumNumberOfConcurrentCalls)
    {
        $this->includeRedirectionsInMaximumNumberOfConcurrentCalls = $includeRedirectionsInMaximumNumberOfConcurrentCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeRedirectionsInMaximumNumberOfConcurrentCalls()
    {
        $this->includeRedirectionsInMaximumNumberOfConcurrentCalls = null;
        return $this;
    }

    /**
     * Getter for useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     *
     * @return bool
     */
    public function getUseUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable()
    {
        return $this->useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable;
    }

    /**
     * Setter for useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     *
     * @param bool $useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable
     * @return $this
     */
    public function setUseUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable($useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable)
    {
        $this->useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable = $useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable()
    {
        $this->useUserPhoneNumberForGroupCallsWhenInternalCLIDUnavailable = null;
        return $this;
    }

    /**
     * Getter for useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     *
     * @return bool
     */
    public function getUseUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable()
    {
        return $this->useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable;
    }

    /**
     * Setter for useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     *
     * @param bool $useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable
     * @return $this
     */
    public function setUseUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable($useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable)
    {
        $this->useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable = $useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable()
    {
        $this->useUserPhoneNumberForEnterpriseCallsWhenInternalCLIDUnavailable = null;
        return $this;
    }

    /**
     * Getter for routeOverrideDomain
     *
     * @return string|null
     */
    public function getRouteOverrideDomain()
    {
        return $this->routeOverrideDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeOverrideDomain;
    }

    /**
     * Setter for routeOverrideDomain
     *
     * @param string|null $routeOverrideDomain
     * @return $this
     */
    public function setRouteOverrideDomain($routeOverrideDomain = null)
    {
        if ($routeOverrideDomain === null) {
            $this->routeOverrideDomain = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->routeOverrideDomain = $routeOverrideDomain;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteOverrideDomain()
    {
        $this->routeOverrideDomain = null;
        return $this;
    }

    /**
     * Getter for routeOverridePrefix
     *
     * @return string|null
     */
    public function getRouteOverridePrefix()
    {
        return $this->routeOverridePrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeOverridePrefix;
    }

    /**
     * Setter for routeOverridePrefix
     *
     * @param string|null $routeOverridePrefix
     * @return $this
     */
    public function setRouteOverridePrefix($routeOverridePrefix = null)
    {
        if ($routeOverridePrefix === null) {
            $this->routeOverridePrefix = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->routeOverridePrefix = $routeOverridePrefix;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteOverridePrefix()
    {
        $this->routeOverridePrefix = null;
        return $this;
    }

    /**
     * Getter for allowMobileDNForRedirectingIdentity
     *
     * @return bool
     */
    public function getAllowMobileDNForRedirectingIdentity()
    {
        return $this->allowMobileDNForRedirectingIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowMobileDNForRedirectingIdentity;
    }

    /**
     * Setter for allowMobileDNForRedirectingIdentity
     *
     * @param bool $allowMobileDNForRedirectingIdentity
     * @return $this
     */
    public function setAllowMobileDNForRedirectingIdentity($allowMobileDNForRedirectingIdentity)
    {
        $this->allowMobileDNForRedirectingIdentity = $allowMobileDNForRedirectingIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowMobileDNForRedirectingIdentity()
    {
        $this->allowMobileDNForRedirectingIdentity = null;
        return $this;
    }

    /**
     * Getter for enableGatewayRoutePolicy
     *
     * @return bool
     */
    public function getEnableGatewayRoutePolicy()
    {
        return $this->enableGatewayRoutePolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableGatewayRoutePolicy;
    }

    /**
     * Setter for enableGatewayRoutePolicy
     *
     * @param bool $enableGatewayRoutePolicy
     * @return $this
     */
    public function setEnableGatewayRoutePolicy($enableGatewayRoutePolicy)
    {
        $this->enableGatewayRoutePolicy = $enableGatewayRoutePolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableGatewayRoutePolicy()
    {
        $this->enableGatewayRoutePolicy = null;
        return $this;
    }

    /**
     * Getter for networkCallsGatewayRouteIdentity
     *
     * @return string|null
     */
    public function getNetworkCallsGatewayRouteIdentity()
    {
        return $this->networkCallsGatewayRouteIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkCallsGatewayRouteIdentity;
    }

    /**
     * Setter for networkCallsGatewayRouteIdentity
     *
     * @param string|null $networkCallsGatewayRouteIdentity
     * @return $this
     */
    public function setNetworkCallsGatewayRouteIdentity($networkCallsGatewayRouteIdentity = null)
    {
        if ($networkCallsGatewayRouteIdentity === null) {
            $this->networkCallsGatewayRouteIdentity = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->networkCallsGatewayRouteIdentity = $networkCallsGatewayRouteIdentity;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkCallsGatewayRouteIdentity()
    {
        $this->networkCallsGatewayRouteIdentity = null;
        return $this;
    }

    /**
     * Getter for networkURLCallsGatewayRouteIdentity
     *
     * @return string|null
     */
    public function getNetworkURLCallsGatewayRouteIdentity()
    {
        return $this->networkURLCallsGatewayRouteIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkURLCallsGatewayRouteIdentity;
    }

    /**
     * Setter for networkURLCallsGatewayRouteIdentity
     *
     * @param string|null $networkURLCallsGatewayRouteIdentity
     * @return $this
     */
    public function setNetworkURLCallsGatewayRouteIdentity($networkURLCallsGatewayRouteIdentity = null)
    {
        if ($networkURLCallsGatewayRouteIdentity === null) {
            $this->networkURLCallsGatewayRouteIdentity = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->networkURLCallsGatewayRouteIdentity = $networkURLCallsGatewayRouteIdentity;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkURLCallsGatewayRouteIdentity()
    {
        $this->networkURLCallsGatewayRouteIdentity = null;
        return $this;
    }

    /**
     * Getter for emergencyCallsGatewayRouteIdentity
     *
     * @return string|null
     */
    public function getEmergencyCallsGatewayRouteIdentity()
    {
        return $this->emergencyCallsGatewayRouteIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emergencyCallsGatewayRouteIdentity;
    }

    /**
     * Setter for emergencyCallsGatewayRouteIdentity
     *
     * @param string|null $emergencyCallsGatewayRouteIdentity
     * @return $this
     */
    public function setEmergencyCallsGatewayRouteIdentity($emergencyCallsGatewayRouteIdentity = null)
    {
        if ($emergencyCallsGatewayRouteIdentity === null) {
            $this->emergencyCallsGatewayRouteIdentity = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->emergencyCallsGatewayRouteIdentity = $emergencyCallsGatewayRouteIdentity;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmergencyCallsGatewayRouteIdentity()
    {
        $this->emergencyCallsGatewayRouteIdentity = null;
        return $this;
    }

    /**
     * Getter for repairCallsGatewayRouteIdentity
     *
     * @return string|null
     */
    public function getRepairCallsGatewayRouteIdentity()
    {
        return $this->repairCallsGatewayRouteIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->repairCallsGatewayRouteIdentity;
    }

    /**
     * Setter for repairCallsGatewayRouteIdentity
     *
     * @param string|null $repairCallsGatewayRouteIdentity
     * @return $this
     */
    public function setRepairCallsGatewayRouteIdentity($repairCallsGatewayRouteIdentity = null)
    {
        if ($repairCallsGatewayRouteIdentity === null) {
            $this->repairCallsGatewayRouteIdentity = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->repairCallsGatewayRouteIdentity = $repairCallsGatewayRouteIdentity;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRepairCallsGatewayRouteIdentity()
    {
        $this->repairCallsGatewayRouteIdentity = null;
        return $this;
    }

    /**
     * Getter for callTypingErrorsGatewayRouteIdentity
     *
     * @return string|null
     */
    public function getCallTypingErrorsGatewayRouteIdentity()
    {
        return $this->callTypingErrorsGatewayRouteIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callTypingErrorsGatewayRouteIdentity;
    }

    /**
     * Setter for callTypingErrorsGatewayRouteIdentity
     *
     * @param string|null $callTypingErrorsGatewayRouteIdentity
     * @return $this
     */
    public function setCallTypingErrorsGatewayRouteIdentity($callTypingErrorsGatewayRouteIdentity = null)
    {
        if ($callTypingErrorsGatewayRouteIdentity === null) {
            $this->callTypingErrorsGatewayRouteIdentity = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callTypingErrorsGatewayRouteIdentity = $callTypingErrorsGatewayRouteIdentity;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallTypingErrorsGatewayRouteIdentity()
    {
        $this->callTypingErrorsGatewayRouteIdentity = null;
        return $this;
    }


}

