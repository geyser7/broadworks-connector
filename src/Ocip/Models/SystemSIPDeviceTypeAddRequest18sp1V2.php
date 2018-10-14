<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeAddRequest18sp1V2
 *
 * Request to add a sip device type.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in XS data mode:
 *           enable3G4GContinuity, use value "false" in AS data mode
 *         The following elements are only used in AS data mode:
 *           holdAnnouncementMethod, use value "useInactive" in XS data mode      
 *           supportRFC3398, use value "false" in XS data mode
 *         The following element values are only applicable in AS data mode:
 *           holdNormalization=useRfc3264Hold will raise an error in XS data mode
 *     Replaced by: SystemSIPDeviceTypeAddRequest19.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemSIPDeviceTypeAddRequest19
 */
class SystemSIPDeviceTypeAddRequest18sp1V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName numberOfPorts
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    private $numberOfPorts = null;

    /**
     * @ElementName profile
     * @var \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null
     */
    private $profile = null;

    /**
     * @ElementName registrationCapable
     * @var bool|null
     */
    private $registrationCapable = null;

    /**
     * @ElementName isConferenceDevice
     * @var bool|null
     */
    private $isConferenceDevice = null;

    /**
     * @ElementName isMobilityManagerDevice
     * @var bool|null
     */
    private $isMobilityManagerDevice = null;

    /**
     * @ElementName isMusicOnHoldDevice
     * @var bool|null
     */
    private $isMusicOnHoldDevice = null;

    /**
     * @ElementName holdNormalization
     * @var \CWM\BroadWorksConnector\Ocip\Models\HoldNormalizationMode|null
     */
    private $holdNormalization = null;

    /**
     * @ElementName holdAnnouncementMethod
     * @var \CWM\BroadWorksConnector\Ocip\Models\HoldAnnouncementMethodMode|null
     */
    private $holdAnnouncementMethod = null;

    /**
     * @ElementName isTrusted
     * @var bool|null
     */
    private $isTrusted = null;

    /**
     * @ElementName E164Capable
     * @var bool|null
     */
    private $E164Capable = null;

    /**
     * @ElementName routeAdvance
     * @var bool|null
     */
    private $routeAdvance = null;

    /**
     * @ElementName forwardingOverride
     * @var bool|null
     */
    private $forwardingOverride = null;

    /**
     * @ElementName wirelessIntegration
     * @var bool|null
     */
    private $wirelessIntegration = null;

    /**
     * @ElementName webBasedConfigURL
     * @var string|null
     */
    private $webBasedConfigURL = null;

    /**
     * @ElementName isVideoCapable
     * @var bool|null
     */
    private $isVideoCapable = null;

    /**
     * @ElementName PBXIntegration
     * @var bool|null
     */
    private $PBXIntegration = null;

    /**
     * @ElementName staticRegistrationCapable
     * @var bool|null
     */
    private $staticRegistrationCapable = null;

    /**
     * @ElementName cpeDeviceOptions
     * @var \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions16sp1|null
     */
    private $cpeDeviceOptions = null;

    /**
     * @ElementName earlyMediaSupport
     * @var \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType|null
     */
    private $earlyMediaSupport = null;

    /**
     * @ElementName authenticateRefer
     * @var bool|null
     */
    private $authenticateRefer = null;

    /**
     * @ElementName autoConfigSoftClient
     * @var bool|null
     */
    private $autoConfigSoftClient = null;

    /**
     * @ElementName authenticationMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationMode|null
     */
    private $authenticationMode = null;

    /**
     * @ElementName requiresBroadWorksDigitCollection
     * @var bool|null
     */
    private $requiresBroadWorksDigitCollection = null;

    /**
     * @ElementName requiresBroadWorksCallWaitingTone
     * @var bool|null
     */
    private $requiresBroadWorksCallWaitingTone = null;

    /**
     * @ElementName requiresMWISubscription
     * @var bool|null
     */
    private $requiresMWISubscription = null;

    /**
     * @ElementName useHistoryInfoHeaderOnAccessSide
     * @var bool|null
     */
    private $useHistoryInfoHeaderOnAccessSide = null;

    /**
     * @ElementName adviceOfChargeCapable
     * @var bool|null
     */
    private $adviceOfChargeCapable = null;

    /**
     * @ElementName resetEvent
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceResetEvent|null
     */
    private $resetEvent = null;

    /**
     * @ElementName supportCallCenterMIMEType
     * @var bool|null
     */
    private $supportCallCenterMIMEType = null;

    /**
     * @ElementName trunkMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkMode|null
     */
    private $trunkMode = null;

    /**
     * @ElementName addPCalledPartyId
     * @var bool|null
     */
    private $addPCalledPartyId = null;

    /**
     * @ElementName supportIdentityInUpdateAndReInvite
     * @var bool|null
     */
    private $supportIdentityInUpdateAndReInvite = null;

    /**
     * @ElementName unscreenedPresentationIdentityPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnscreenedPresentationIdentityPolicy|null
     */
    private $unscreenedPresentationIdentityPolicy = null;

    /**
     * @ElementName enable3G4GContinuity
     * @var bool|null
     */
    private $enable3G4GContinuity = null;

    /**
     * @ElementName supportEmergencyDisconnectControl
     * @var bool|null
     */
    private $supportEmergencyDisconnectControl = null;

    /**
     * @ElementName deviceTypeConfigurationOption
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null
     */
    private $deviceTypeConfigurationOption = null;

    /**
     * @ElementName supportRFC3398
     * @var bool|null
     */
    private $supportRFC3398 = null;

    /**
     * Getter for deviceType
     *
     * @ElementName deviceType
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @ElementName deviceType
     * @param string|null $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * Getter for numberOfPorts
     *
     * @ElementName numberOfPorts
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    public function getNumberOfPorts()
    {
        return $this->numberOfPorts;
    }

    /**
     * Setter for numberOfPorts
     *
     * @ElementName numberOfPorts
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null $numberOfPorts
     * @return $this
     */
    public function setNumberOfPorts(\CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $numberOfPorts)
    {
        $this->numberOfPorts = $numberOfPorts;
        return $this;
    }

    /**
     * Getter for profile
     *
     * @ElementName profile
     * @return \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Setter for profile
     *
     * @ElementName profile
     * @param \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null $profile
     * @return $this
     */
    public function setProfile(\CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Getter for registrationCapable
     *
     * @ElementName registrationCapable
     * @return bool|null
     */
    public function getRegistrationCapable()
    {
        return $this->registrationCapable;
    }

    /**
     * Setter for registrationCapable
     *
     * @ElementName registrationCapable
     * @param bool|null $registrationCapable
     * @return $this
     */
    public function setRegistrationCapable($registrationCapable)
    {
        $this->registrationCapable = $registrationCapable;
        return $this;
    }

    /**
     * Getter for isConferenceDevice
     *
     * @ElementName isConferenceDevice
     * @return bool|null
     */
    public function getIsConferenceDevice()
    {
        return $this->isConferenceDevice;
    }

    /**
     * Setter for isConferenceDevice
     *
     * @ElementName isConferenceDevice
     * @param bool|null $isConferenceDevice
     * @return $this
     */
    public function setIsConferenceDevice($isConferenceDevice)
    {
        $this->isConferenceDevice = $isConferenceDevice;
        return $this;
    }

    /**
     * Getter for isMobilityManagerDevice
     *
     * @ElementName isMobilityManagerDevice
     * @return bool|null
     */
    public function getIsMobilityManagerDevice()
    {
        return $this->isMobilityManagerDevice;
    }

    /**
     * Setter for isMobilityManagerDevice
     *
     * @ElementName isMobilityManagerDevice
     * @param bool|null $isMobilityManagerDevice
     * @return $this
     */
    public function setIsMobilityManagerDevice($isMobilityManagerDevice)
    {
        $this->isMobilityManagerDevice = $isMobilityManagerDevice;
        return $this;
    }

    /**
     * Getter for isMusicOnHoldDevice
     *
     * @ElementName isMusicOnHoldDevice
     * @return bool|null
     */
    public function getIsMusicOnHoldDevice()
    {
        return $this->isMusicOnHoldDevice;
    }

    /**
     * Setter for isMusicOnHoldDevice
     *
     * @ElementName isMusicOnHoldDevice
     * @param bool|null $isMusicOnHoldDevice
     * @return $this
     */
    public function setIsMusicOnHoldDevice($isMusicOnHoldDevice)
    {
        $this->isMusicOnHoldDevice = $isMusicOnHoldDevice;
        return $this;
    }

    /**
     * Getter for holdNormalization
     *
     * @ElementName holdNormalization
     * @return \CWM\BroadWorksConnector\Ocip\Models\HoldNormalizationMode|null
     */
    public function getHoldNormalization()
    {
        return $this->holdNormalization;
    }

    /**
     * Setter for holdNormalization
     *
     * @ElementName holdNormalization
     * @param \CWM\BroadWorksConnector\Ocip\Models\HoldNormalizationMode|null $holdNormalization
     * @return $this
     */
    public function setHoldNormalization(\CWM\BroadWorksConnector\Ocip\Models\HoldNormalizationMode $holdNormalization)
    {
        $this->holdNormalization = $holdNormalization;
        return $this;
    }

    /**
     * Getter for holdAnnouncementMethod
     *
     * @ElementName holdAnnouncementMethod
     * @return \CWM\BroadWorksConnector\Ocip\Models\HoldAnnouncementMethodMode|null
     */
    public function getHoldAnnouncementMethod()
    {
        return $this->holdAnnouncementMethod;
    }

    /**
     * Setter for holdAnnouncementMethod
     *
     * @ElementName holdAnnouncementMethod
     * @param \CWM\BroadWorksConnector\Ocip\Models\HoldAnnouncementMethodMode|null $holdAnnouncementMethod
     * @return $this
     */
    public function setHoldAnnouncementMethod(\CWM\BroadWorksConnector\Ocip\Models\HoldAnnouncementMethodMode $holdAnnouncementMethod)
    {
        $this->holdAnnouncementMethod = $holdAnnouncementMethod;
        return $this;
    }

    /**
     * Getter for isTrusted
     *
     * @ElementName isTrusted
     * @return bool|null
     */
    public function getIsTrusted()
    {
        return $this->isTrusted;
    }

    /**
     * Setter for isTrusted
     *
     * @ElementName isTrusted
     * @param bool|null $isTrusted
     * @return $this
     */
    public function setIsTrusted($isTrusted)
    {
        $this->isTrusted = $isTrusted;
        return $this;
    }

    /**
     * Getter for E164Capable
     *
     * @ElementName E164Capable
     * @return bool|null
     */
    public function getE164Capable()
    {
        return $this->E164Capable;
    }

    /**
     * Setter for E164Capable
     *
     * @ElementName E164Capable
     * @param bool|null $E164Capable
     * @return $this
     */
    public function setE164Capable($E164Capable)
    {
        $this->E164Capable = $E164Capable;
        return $this;
    }

    /**
     * Getter for routeAdvance
     *
     * @ElementName routeAdvance
     * @return bool|null
     */
    public function getRouteAdvance()
    {
        return $this->routeAdvance;
    }

    /**
     * Setter for routeAdvance
     *
     * @ElementName routeAdvance
     * @param bool|null $routeAdvance
     * @return $this
     */
    public function setRouteAdvance($routeAdvance)
    {
        $this->routeAdvance = $routeAdvance;
        return $this;
    }

    /**
     * Getter for forwardingOverride
     *
     * @ElementName forwardingOverride
     * @return bool|null
     */
    public function getForwardingOverride()
    {
        return $this->forwardingOverride;
    }

    /**
     * Setter for forwardingOverride
     *
     * @ElementName forwardingOverride
     * @param bool|null $forwardingOverride
     * @return $this
     */
    public function setForwardingOverride($forwardingOverride)
    {
        $this->forwardingOverride = $forwardingOverride;
        return $this;
    }

    /**
     * Getter for wirelessIntegration
     *
     * @ElementName wirelessIntegration
     * @return bool|null
     */
    public function getWirelessIntegration()
    {
        return $this->wirelessIntegration;
    }

    /**
     * Setter for wirelessIntegration
     *
     * @ElementName wirelessIntegration
     * @param bool|null $wirelessIntegration
     * @return $this
     */
    public function setWirelessIntegration($wirelessIntegration)
    {
        $this->wirelessIntegration = $wirelessIntegration;
        return $this;
    }

    /**
     * Getter for webBasedConfigURL
     *
     * @ElementName webBasedConfigURL
     * @return string|null
     */
    public function getWebBasedConfigURL()
    {
        return $this->webBasedConfigURL;
    }

    /**
     * Setter for webBasedConfigURL
     *
     * @ElementName webBasedConfigURL
     * @param string|null $webBasedConfigURL
     * @return $this
     */
    public function setWebBasedConfigURL($webBasedConfigURL)
    {
        $this->webBasedConfigURL = $webBasedConfigURL;
        return $this;
    }

    /**
     * Getter for isVideoCapable
     *
     * @ElementName isVideoCapable
     * @return bool|null
     */
    public function getIsVideoCapable()
    {
        return $this->isVideoCapable;
    }

    /**
     * Setter for isVideoCapable
     *
     * @ElementName isVideoCapable
     * @param bool|null $isVideoCapable
     * @return $this
     */
    public function setIsVideoCapable($isVideoCapable)
    {
        $this->isVideoCapable = $isVideoCapable;
        return $this;
    }

    /**
     * Getter for PBXIntegration
     *
     * @ElementName PBXIntegration
     * @return bool|null
     */
    public function getPBXIntegration()
    {
        return $this->PBXIntegration;
    }

    /**
     * Setter for PBXIntegration
     *
     * @ElementName PBXIntegration
     * @param bool|null $PBXIntegration
     * @return $this
     */
    public function setPBXIntegration($PBXIntegration)
    {
        $this->PBXIntegration = $PBXIntegration;
        return $this;
    }

    /**
     * Getter for staticRegistrationCapable
     *
     * @ElementName staticRegistrationCapable
     * @return bool|null
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable;
    }

    /**
     * Setter for staticRegistrationCapable
     *
     * @ElementName staticRegistrationCapable
     * @param bool|null $staticRegistrationCapable
     * @return $this
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable)
    {
        $this->staticRegistrationCapable = $staticRegistrationCapable;
        return $this;
    }

    /**
     * Getter for cpeDeviceOptions
     *
     * @ElementName cpeDeviceOptions
     * @return \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions16sp1|null
     */
    public function getCpeDeviceOptions()
    {
        return $this->cpeDeviceOptions;
    }

    /**
     * Setter for cpeDeviceOptions
     *
     * @ElementName cpeDeviceOptions
     * @param \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions16sp1|null $cpeDeviceOptions
     * @return $this
     */
    public function setCpeDeviceOptions(\CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions16sp1 $cpeDeviceOptions)
    {
        $this->cpeDeviceOptions = $cpeDeviceOptions;
        return $this;
    }

    /**
     * Getter for earlyMediaSupport
     *
     * @ElementName earlyMediaSupport
     * @return \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType|null
     */
    public function getEarlyMediaSupport()
    {
        return $this->earlyMediaSupport;
    }

    /**
     * Setter for earlyMediaSupport
     *
     * @ElementName earlyMediaSupport
     * @param \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType|null $earlyMediaSupport
     * @return $this
     */
    public function setEarlyMediaSupport(\CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType $earlyMediaSupport)
    {
        $this->earlyMediaSupport = $earlyMediaSupport;
        return $this;
    }

    /**
     * Getter for authenticateRefer
     *
     * @ElementName authenticateRefer
     * @return bool|null
     */
    public function getAuthenticateRefer()
    {
        return $this->authenticateRefer;
    }

    /**
     * Setter for authenticateRefer
     *
     * @ElementName authenticateRefer
     * @param bool|null $authenticateRefer
     * @return $this
     */
    public function setAuthenticateRefer($authenticateRefer)
    {
        $this->authenticateRefer = $authenticateRefer;
        return $this;
    }

    /**
     * Getter for autoConfigSoftClient
     *
     * @ElementName autoConfigSoftClient
     * @return bool|null
     */
    public function getAutoConfigSoftClient()
    {
        return $this->autoConfigSoftClient;
    }

    /**
     * Setter for autoConfigSoftClient
     *
     * @ElementName autoConfigSoftClient
     * @param bool|null $autoConfigSoftClient
     * @return $this
     */
    public function setAutoConfigSoftClient($autoConfigSoftClient)
    {
        $this->autoConfigSoftClient = $autoConfigSoftClient;
        return $this;
    }

    /**
     * Getter for authenticationMode
     *
     * @ElementName authenticationMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationMode|null
     */
    public function getAuthenticationMode()
    {
        return $this->authenticationMode;
    }

    /**
     * Setter for authenticationMode
     *
     * @ElementName authenticationMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationMode|null $authenticationMode
     * @return $this
     */
    public function setAuthenticationMode(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationMode $authenticationMode)
    {
        $this->authenticationMode = $authenticationMode;
        return $this;
    }

    /**
     * Getter for requiresBroadWorksDigitCollection
     *
     * @ElementName requiresBroadWorksDigitCollection
     * @return bool|null
     */
    public function getRequiresBroadWorksDigitCollection()
    {
        return $this->requiresBroadWorksDigitCollection;
    }

    /**
     * Setter for requiresBroadWorksDigitCollection
     *
     * @ElementName requiresBroadWorksDigitCollection
     * @param bool|null $requiresBroadWorksDigitCollection
     * @return $this
     */
    public function setRequiresBroadWorksDigitCollection($requiresBroadWorksDigitCollection)
    {
        $this->requiresBroadWorksDigitCollection = $requiresBroadWorksDigitCollection;
        return $this;
    }

    /**
     * Getter for requiresBroadWorksCallWaitingTone
     *
     * @ElementName requiresBroadWorksCallWaitingTone
     * @return bool|null
     */
    public function getRequiresBroadWorksCallWaitingTone()
    {
        return $this->requiresBroadWorksCallWaitingTone;
    }

    /**
     * Setter for requiresBroadWorksCallWaitingTone
     *
     * @ElementName requiresBroadWorksCallWaitingTone
     * @param bool|null $requiresBroadWorksCallWaitingTone
     * @return $this
     */
    public function setRequiresBroadWorksCallWaitingTone($requiresBroadWorksCallWaitingTone)
    {
        $this->requiresBroadWorksCallWaitingTone = $requiresBroadWorksCallWaitingTone;
        return $this;
    }

    /**
     * Getter for requiresMWISubscription
     *
     * @ElementName requiresMWISubscription
     * @return bool|null
     */
    public function getRequiresMWISubscription()
    {
        return $this->requiresMWISubscription;
    }

    /**
     * Setter for requiresMWISubscription
     *
     * @ElementName requiresMWISubscription
     * @param bool|null $requiresMWISubscription
     * @return $this
     */
    public function setRequiresMWISubscription($requiresMWISubscription)
    {
        $this->requiresMWISubscription = $requiresMWISubscription;
        return $this;
    }

    /**
     * Getter for useHistoryInfoHeaderOnAccessSide
     *
     * @ElementName useHistoryInfoHeaderOnAccessSide
     * @return bool|null
     */
    public function getUseHistoryInfoHeaderOnAccessSide()
    {
        return $this->useHistoryInfoHeaderOnAccessSide;
    }

    /**
     * Setter for useHistoryInfoHeaderOnAccessSide
     *
     * @ElementName useHistoryInfoHeaderOnAccessSide
     * @param bool|null $useHistoryInfoHeaderOnAccessSide
     * @return $this
     */
    public function setUseHistoryInfoHeaderOnAccessSide($useHistoryInfoHeaderOnAccessSide)
    {
        $this->useHistoryInfoHeaderOnAccessSide = $useHistoryInfoHeaderOnAccessSide;
        return $this;
    }

    /**
     * Getter for adviceOfChargeCapable
     *
     * @ElementName adviceOfChargeCapable
     * @return bool|null
     */
    public function getAdviceOfChargeCapable()
    {
        return $this->adviceOfChargeCapable;
    }

    /**
     * Setter for adviceOfChargeCapable
     *
     * @ElementName adviceOfChargeCapable
     * @param bool|null $adviceOfChargeCapable
     * @return $this
     */
    public function setAdviceOfChargeCapable($adviceOfChargeCapable)
    {
        $this->adviceOfChargeCapable = $adviceOfChargeCapable;
        return $this;
    }

    /**
     * Getter for resetEvent
     *
     * @ElementName resetEvent
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceResetEvent|null
     */
    public function getResetEvent()
    {
        return $this->resetEvent;
    }

    /**
     * Setter for resetEvent
     *
     * @ElementName resetEvent
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceResetEvent|null $resetEvent
     * @return $this
     */
    public function setResetEvent(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceResetEvent $resetEvent)
    {
        $this->resetEvent = $resetEvent;
        return $this;
    }

    /**
     * Getter for supportCallCenterMIMEType
     *
     * @ElementName supportCallCenterMIMEType
     * @return bool|null
     */
    public function getSupportCallCenterMIMEType()
    {
        return $this->supportCallCenterMIMEType;
    }

    /**
     * Setter for supportCallCenterMIMEType
     *
     * @ElementName supportCallCenterMIMEType
     * @param bool|null $supportCallCenterMIMEType
     * @return $this
     */
    public function setSupportCallCenterMIMEType($supportCallCenterMIMEType)
    {
        $this->supportCallCenterMIMEType = $supportCallCenterMIMEType;
        return $this;
    }

    /**
     * Getter for trunkMode
     *
     * @ElementName trunkMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkMode|null
     */
    public function getTrunkMode()
    {
        return $this->trunkMode;
    }

    /**
     * Setter for trunkMode
     *
     * @ElementName trunkMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkMode|null $trunkMode
     * @return $this
     */
    public function setTrunkMode(\CWM\BroadWorksConnector\Ocip\Models\TrunkMode $trunkMode)
    {
        $this->trunkMode = $trunkMode;
        return $this;
    }

    /**
     * Getter for addPCalledPartyId
     *
     * @ElementName addPCalledPartyId
     * @return bool|null
     */
    public function getAddPCalledPartyId()
    {
        return $this->addPCalledPartyId;
    }

    /**
     * Setter for addPCalledPartyId
     *
     * @ElementName addPCalledPartyId
     * @param bool|null $addPCalledPartyId
     * @return $this
     */
    public function setAddPCalledPartyId($addPCalledPartyId)
    {
        $this->addPCalledPartyId = $addPCalledPartyId;
        return $this;
    }

    /**
     * Getter for supportIdentityInUpdateAndReInvite
     *
     * @ElementName supportIdentityInUpdateAndReInvite
     * @return bool|null
     */
    public function getSupportIdentityInUpdateAndReInvite()
    {
        return $this->supportIdentityInUpdateAndReInvite;
    }

    /**
     * Setter for supportIdentityInUpdateAndReInvite
     *
     * @ElementName supportIdentityInUpdateAndReInvite
     * @param bool|null $supportIdentityInUpdateAndReInvite
     * @return $this
     */
    public function setSupportIdentityInUpdateAndReInvite($supportIdentityInUpdateAndReInvite)
    {
        $this->supportIdentityInUpdateAndReInvite = $supportIdentityInUpdateAndReInvite;
        return $this;
    }

    /**
     * Getter for unscreenedPresentationIdentityPolicy
     *
     * @ElementName unscreenedPresentationIdentityPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnscreenedPresentationIdentityPolicy|null
     */
    public function getUnscreenedPresentationIdentityPolicy()
    {
        return $this->unscreenedPresentationIdentityPolicy;
    }

    /**
     * Setter for unscreenedPresentationIdentityPolicy
     *
     * @ElementName unscreenedPresentationIdentityPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnscreenedPresentationIdentityPolicy|null $unscreenedPresentationIdentityPolicy
     * @return $this
     */
    public function setUnscreenedPresentationIdentityPolicy(\CWM\BroadWorksConnector\Ocip\Models\UnscreenedPresentationIdentityPolicy $unscreenedPresentationIdentityPolicy)
    {
        $this->unscreenedPresentationIdentityPolicy = $unscreenedPresentationIdentityPolicy;
        return $this;
    }

    /**
     * Getter for enable3G4GContinuity
     *
     * @ElementName enable3G4GContinuity
     * @return bool|null
     */
    public function getEnable3G4GContinuity()
    {
        return $this->enable3G4GContinuity;
    }

    /**
     * Setter for enable3G4GContinuity
     *
     * @ElementName enable3G4GContinuity
     * @param bool|null $enable3G4GContinuity
     * @return $this
     */
    public function setEnable3G4GContinuity($enable3G4GContinuity)
    {
        $this->enable3G4GContinuity = $enable3G4GContinuity;
        return $this;
    }

    /**
     * Getter for supportEmergencyDisconnectControl
     *
     * @ElementName supportEmergencyDisconnectControl
     * @return bool|null
     */
    public function getSupportEmergencyDisconnectControl()
    {
        return $this->supportEmergencyDisconnectControl;
    }

    /**
     * Setter for supportEmergencyDisconnectControl
     *
     * @ElementName supportEmergencyDisconnectControl
     * @param bool|null $supportEmergencyDisconnectControl
     * @return $this
     */
    public function setSupportEmergencyDisconnectControl($supportEmergencyDisconnectControl)
    {
        $this->supportEmergencyDisconnectControl = $supportEmergencyDisconnectControl;
        return $this;
    }

    /**
     * Getter for deviceTypeConfigurationOption
     *
     * @ElementName deviceTypeConfigurationOption
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null
     */
    public function getDeviceTypeConfigurationOption()
    {
        return $this->deviceTypeConfigurationOption;
    }

    /**
     * Setter for deviceTypeConfigurationOption
     *
     * @ElementName deviceTypeConfigurationOption
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null $deviceTypeConfigurationOption
     * @return $this
     */
    public function setDeviceTypeConfigurationOption(\CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType $deviceTypeConfigurationOption)
    {
        $this->deviceTypeConfigurationOption = $deviceTypeConfigurationOption;
        return $this;
    }

    /**
     * Getter for supportRFC3398
     *
     * @ElementName supportRFC3398
     * @return bool|null
     */
    public function getSupportRFC3398()
    {
        return $this->supportRFC3398;
    }

    /**
     * Setter for supportRFC3398
     *
     * @ElementName supportRFC3398
     * @param bool|null $supportRFC3398
     * @return $this
     */
    public function setSupportRFC3398($supportRFC3398)
    {
        $this->supportRFC3398 = $supportRFC3398;
        return $this;
    }


}

