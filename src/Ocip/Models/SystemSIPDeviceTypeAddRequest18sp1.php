<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeAddRequest18sp1
 *
 * Request to add a sip device type.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in XS data mode:
 *           enable3G4GContinuity, use value "false" in AS data mode
 *         The following elements are only used in AS data mode:
 *           holdAnnouncementMethod, use value "useInactive" in XS data mode      
 *         The following element values are only applicable in AS data mode:
 *           holdNormalization=useRfc3264Hold will raise an error in XS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:29914","type":"sequence"}]
 */
class SystemSIPDeviceTypeAddRequest18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName numberOfPorts
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt|null
     */
    protected $numberOfPorts = null;

    /**
     * @ElementName profile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null
     */
    protected $profile = null;

    /**
     * @ElementName registrationCapable
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $registrationCapable = null;

    /**
     * @ElementName isConferenceDevice
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $isConferenceDevice = null;

    /**
     * @ElementName isMobilityManagerDevice
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $isMobilityManagerDevice = null;

    /**
     * @ElementName isMusicOnHoldDevice
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $isMusicOnHoldDevice = null;

    /**
     * @ElementName holdNormalization
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HoldNormalizationMode
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var \CWM\BroadWorksConnector\Ocip\Models\HoldNormalizationMode|null
     */
    protected $holdNormalization = null;

    /**
     * @ElementName holdAnnouncementMethod
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HoldAnnouncementMethodMode
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var \CWM\BroadWorksConnector\Ocip\Models\HoldAnnouncementMethodMode|null
     */
    protected $holdAnnouncementMethod = null;

    /**
     * @ElementName isTrusted
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $isTrusted = null;

    /**
     * @ElementName E164Capable
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $E164Capable = null;

    /**
     * @ElementName routeAdvance
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $routeAdvance = null;

    /**
     * @ElementName forwardingOverride
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $forwardingOverride = null;

    /**
     * @ElementName wirelessIntegration
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $wirelessIntegration = null;

    /**
     * @ElementName webBasedConfigURL
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $webBasedConfigURL = null;

    /**
     * @ElementName isVideoCapable
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $isVideoCapable = null;

    /**
     * @ElementName PBXIntegration
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $PBXIntegration = null;

    /**
     * @ElementName staticRegistrationCapable
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $staticRegistrationCapable = null;

    /**
     * @ElementName cpeDeviceOptions
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions16sp1
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions16sp1|null
     */
    protected $cpeDeviceOptions = null;

    /**
     * @ElementName earlyMediaSupport
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType|null
     */
    protected $earlyMediaSupport = null;

    /**
     * @ElementName authenticateRefer
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $authenticateRefer = null;

    /**
     * @ElementName autoConfigSoftClient
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $autoConfigSoftClient = null;

    /**
     * @ElementName authenticationMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AuthenticationMode
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var \CWM\BroadWorksConnector\Ocip\Models\AuthenticationMode|null
     */
    protected $authenticationMode = null;

    /**
     * @ElementName requiresBroadWorksDigitCollection
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $requiresBroadWorksDigitCollection = null;

    /**
     * @ElementName requiresBroadWorksCallWaitingTone
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $requiresBroadWorksCallWaitingTone = null;

    /**
     * @ElementName requiresMWISubscription
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $requiresMWISubscription = null;

    /**
     * @ElementName useHistoryInfoHeaderOnAccessSide
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $useHistoryInfoHeaderOnAccessSide = null;

    /**
     * @ElementName adviceOfChargeCapable
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $adviceOfChargeCapable = null;

    /**
     * @ElementName resetEvent
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceResetEvent
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceResetEvent|null
     */
    protected $resetEvent = null;

    /**
     * @ElementName supportCallCenterMIMEType
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $supportCallCenterMIMEType = null;

    /**
     * @ElementName trunkMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkMode
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkMode|null
     */
    protected $trunkMode = null;

    /**
     * @ElementName addPCalledPartyId
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $addPCalledPartyId = null;

    /**
     * @ElementName supportIdentityInUpdateAndReInvite
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $supportIdentityInUpdateAndReInvite = null;

    /**
     * @ElementName unscreenedPresentationIdentityPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnscreenedPresentationIdentityPolicy
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnscreenedPresentationIdentityPolicy|null
     */
    protected $unscreenedPresentationIdentityPolicy = null;

    /**
     * @ElementName enable3G4GContinuity
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $enable3G4GContinuity = null;

    /**
     * @ElementName supportEmergencyDisconnectControl
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var bool|null
     */
    protected $supportEmergencyDisconnectControl = null;

    /**
     * @ElementName deviceTypeConfigurationOption
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType
     * @Group ab0042aa512abc10edb3c55e4b416b0b:29914
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null
     */
    protected $deviceTypeConfigurationOption = null;

    /**
     * Getter for deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceType()
    {
        $this->deviceType = null;
        return $this;
    }

    /**
     * Getter for numberOfPorts
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt
     */
    public function getNumberOfPorts()
    {
        return $this->numberOfPorts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfPorts;
    }

    /**
     * Setter for numberOfPorts
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $numberOfPorts
     * @return $this
     */
    public function setNumberOfPorts(\CWM\BroadWorksConnector\Ocip\Models\UnboundedPositiveInt $numberOfPorts)
    {
        $this->numberOfPorts = $numberOfPorts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfPorts()
    {
        $this->numberOfPorts = null;
        return $this;
    }

    /**
     * Getter for profile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType
     */
    public function getProfile()
    {
        return $this->profile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profile;
    }

    /**
     * Setter for profile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType $profile
     * @return $this
     */
    public function setProfile(\CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfile()
    {
        $this->profile = null;
        return $this;
    }

    /**
     * Getter for registrationCapable
     *
     * @return bool
     */
    public function getRegistrationCapable()
    {
        return $this->registrationCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->registrationCapable;
    }

    /**
     * Setter for registrationCapable
     *
     * @param bool $registrationCapable
     * @return $this
     */
    public function setRegistrationCapable($registrationCapable)
    {
        $this->registrationCapable = $registrationCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRegistrationCapable()
    {
        $this->registrationCapable = null;
        return $this;
    }

    /**
     * Getter for isConferenceDevice
     *
     * @return bool
     */
    public function getIsConferenceDevice()
    {
        return $this->isConferenceDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isConferenceDevice;
    }

    /**
     * Setter for isConferenceDevice
     *
     * @param bool $isConferenceDevice
     * @return $this
     */
    public function setIsConferenceDevice($isConferenceDevice)
    {
        $this->isConferenceDevice = $isConferenceDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsConferenceDevice()
    {
        $this->isConferenceDevice = null;
        return $this;
    }

    /**
     * Getter for isMobilityManagerDevice
     *
     * @return bool
     */
    public function getIsMobilityManagerDevice()
    {
        return $this->isMobilityManagerDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isMobilityManagerDevice;
    }

    /**
     * Setter for isMobilityManagerDevice
     *
     * @param bool $isMobilityManagerDevice
     * @return $this
     */
    public function setIsMobilityManagerDevice($isMobilityManagerDevice)
    {
        $this->isMobilityManagerDevice = $isMobilityManagerDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsMobilityManagerDevice()
    {
        $this->isMobilityManagerDevice = null;
        return $this;
    }

    /**
     * Getter for isMusicOnHoldDevice
     *
     * @return bool
     */
    public function getIsMusicOnHoldDevice()
    {
        return $this->isMusicOnHoldDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isMusicOnHoldDevice;
    }

    /**
     * Setter for isMusicOnHoldDevice
     *
     * @param bool $isMusicOnHoldDevice
     * @return $this
     */
    public function setIsMusicOnHoldDevice($isMusicOnHoldDevice)
    {
        $this->isMusicOnHoldDevice = $isMusicOnHoldDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsMusicOnHoldDevice()
    {
        $this->isMusicOnHoldDevice = null;
        return $this;
    }

    /**
     * Getter for holdNormalization
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HoldNormalizationMode
     */
    public function getHoldNormalization()
    {
        return $this->holdNormalization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holdNormalization;
    }

    /**
     * Setter for holdNormalization
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HoldNormalizationMode $holdNormalization
     * @return $this
     */
    public function setHoldNormalization(\CWM\BroadWorksConnector\Ocip\Models\HoldNormalizationMode $holdNormalization)
    {
        $this->holdNormalization = $holdNormalization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoldNormalization()
    {
        $this->holdNormalization = null;
        return $this;
    }

    /**
     * Getter for holdAnnouncementMethod
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HoldAnnouncementMethodMode
     */
    public function getHoldAnnouncementMethod()
    {
        return $this->holdAnnouncementMethod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holdAnnouncementMethod;
    }

    /**
     * Setter for holdAnnouncementMethod
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HoldAnnouncementMethodMode $holdAnnouncementMethod
     * @return $this
     */
    public function setHoldAnnouncementMethod(\CWM\BroadWorksConnector\Ocip\Models\HoldAnnouncementMethodMode $holdAnnouncementMethod)
    {
        $this->holdAnnouncementMethod = $holdAnnouncementMethod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoldAnnouncementMethod()
    {
        $this->holdAnnouncementMethod = null;
        return $this;
    }

    /**
     * Getter for isTrusted
     *
     * @return bool
     */
    public function getIsTrusted()
    {
        return $this->isTrusted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isTrusted;
    }

    /**
     * Setter for isTrusted
     *
     * @param bool $isTrusted
     * @return $this
     */
    public function setIsTrusted($isTrusted)
    {
        $this->isTrusted = $isTrusted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsTrusted()
    {
        $this->isTrusted = null;
        return $this;
    }

    /**
     * Getter for E164Capable
     *
     * @return bool
     */
    public function getE164Capable()
    {
        return $this->E164Capable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->E164Capable;
    }

    /**
     * Setter for E164Capable
     *
     * @param bool $E164Capable
     * @return $this
     */
    public function setE164Capable($E164Capable)
    {
        $this->E164Capable = $E164Capable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetE164Capable()
    {
        $this->E164Capable = null;
        return $this;
    }

    /**
     * Getter for routeAdvance
     *
     * @return bool
     */
    public function getRouteAdvance()
    {
        return $this->routeAdvance instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeAdvance;
    }

    /**
     * Setter for routeAdvance
     *
     * @param bool $routeAdvance
     * @return $this
     */
    public function setRouteAdvance($routeAdvance)
    {
        $this->routeAdvance = $routeAdvance;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteAdvance()
    {
        $this->routeAdvance = null;
        return $this;
    }

    /**
     * Getter for forwardingOverride
     *
     * @return bool
     */
    public function getForwardingOverride()
    {
        return $this->forwardingOverride instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardingOverride;
    }

    /**
     * Setter for forwardingOverride
     *
     * @param bool $forwardingOverride
     * @return $this
     */
    public function setForwardingOverride($forwardingOverride)
    {
        $this->forwardingOverride = $forwardingOverride;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardingOverride()
    {
        $this->forwardingOverride = null;
        return $this;
    }

    /**
     * Getter for wirelessIntegration
     *
     * @return bool
     */
    public function getWirelessIntegration()
    {
        return $this->wirelessIntegration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->wirelessIntegration;
    }

    /**
     * Setter for wirelessIntegration
     *
     * @param bool $wirelessIntegration
     * @return $this
     */
    public function setWirelessIntegration($wirelessIntegration)
    {
        $this->wirelessIntegration = $wirelessIntegration;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWirelessIntegration()
    {
        $this->wirelessIntegration = null;
        return $this;
    }

    /**
     * Getter for webBasedConfigURL
     *
     * @return string
     */
    public function getWebBasedConfigURL()
    {
        return $this->webBasedConfigURL instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webBasedConfigURL;
    }

    /**
     * Setter for webBasedConfigURL
     *
     * @param string $webBasedConfigURL
     * @return $this
     */
    public function setWebBasedConfigURL($webBasedConfigURL)
    {
        $this->webBasedConfigURL = $webBasedConfigURL;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWebBasedConfigURL()
    {
        $this->webBasedConfigURL = null;
        return $this;
    }

    /**
     * Getter for isVideoCapable
     *
     * @return bool
     */
    public function getIsVideoCapable()
    {
        return $this->isVideoCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isVideoCapable;
    }

    /**
     * Setter for isVideoCapable
     *
     * @param bool $isVideoCapable
     * @return $this
     */
    public function setIsVideoCapable($isVideoCapable)
    {
        $this->isVideoCapable = $isVideoCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsVideoCapable()
    {
        $this->isVideoCapable = null;
        return $this;
    }

    /**
     * Getter for PBXIntegration
     *
     * @return bool
     */
    public function getPBXIntegration()
    {
        return $this->PBXIntegration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->PBXIntegration;
    }

    /**
     * Setter for PBXIntegration
     *
     * @param bool $PBXIntegration
     * @return $this
     */
    public function setPBXIntegration($PBXIntegration)
    {
        $this->PBXIntegration = $PBXIntegration;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPBXIntegration()
    {
        $this->PBXIntegration = null;
        return $this;
    }

    /**
     * Getter for staticRegistrationCapable
     *
     * @return bool
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->staticRegistrationCapable;
    }

    /**
     * Setter for staticRegistrationCapable
     *
     * @param bool $staticRegistrationCapable
     * @return $this
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable)
    {
        $this->staticRegistrationCapable = $staticRegistrationCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStaticRegistrationCapable()
    {
        $this->staticRegistrationCapable = null;
        return $this;
    }

    /**
     * Getter for cpeDeviceOptions
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions16sp1
     */
    public function getCpeDeviceOptions()
    {
        return $this->cpeDeviceOptions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cpeDeviceOptions;
    }

    /**
     * Setter for cpeDeviceOptions
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions16sp1 $cpeDeviceOptions
     * @return $this
     */
    public function setCpeDeviceOptions(\CWM\BroadWorksConnector\Ocip\Models\CPEDeviceOptions16sp1 $cpeDeviceOptions)
    {
        $this->cpeDeviceOptions = $cpeDeviceOptions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCpeDeviceOptions()
    {
        $this->cpeDeviceOptions = null;
        return $this;
    }

    /**
     * Getter for earlyMediaSupport
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType
     */
    public function getEarlyMediaSupport()
    {
        return $this->earlyMediaSupport instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->earlyMediaSupport;
    }

    /**
     * Setter for earlyMediaSupport
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType $earlyMediaSupport
     * @return $this
     */
    public function setEarlyMediaSupport(\CWM\BroadWorksConnector\Ocip\Models\EarlyMediaSupportType $earlyMediaSupport)
    {
        $this->earlyMediaSupport = $earlyMediaSupport;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEarlyMediaSupport()
    {
        $this->earlyMediaSupport = null;
        return $this;
    }

    /**
     * Getter for authenticateRefer
     *
     * @return bool
     */
    public function getAuthenticateRefer()
    {
        return $this->authenticateRefer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authenticateRefer;
    }

    /**
     * Setter for authenticateRefer
     *
     * @param bool $authenticateRefer
     * @return $this
     */
    public function setAuthenticateRefer($authenticateRefer)
    {
        $this->authenticateRefer = $authenticateRefer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthenticateRefer()
    {
        $this->authenticateRefer = null;
        return $this;
    }

    /**
     * Getter for autoConfigSoftClient
     *
     * @return bool
     */
    public function getAutoConfigSoftClient()
    {
        return $this->autoConfigSoftClient instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->autoConfigSoftClient;
    }

    /**
     * Setter for autoConfigSoftClient
     *
     * @param bool $autoConfigSoftClient
     * @return $this
     */
    public function setAutoConfigSoftClient($autoConfigSoftClient)
    {
        $this->autoConfigSoftClient = $autoConfigSoftClient;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAutoConfigSoftClient()
    {
        $this->autoConfigSoftClient = null;
        return $this;
    }

    /**
     * Getter for authenticationMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AuthenticationMode
     */
    public function getAuthenticationMode()
    {
        return $this->authenticationMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authenticationMode;
    }

    /**
     * Setter for authenticationMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AuthenticationMode $authenticationMode
     * @return $this
     */
    public function setAuthenticationMode(\CWM\BroadWorksConnector\Ocip\Models\AuthenticationMode $authenticationMode)
    {
        $this->authenticationMode = $authenticationMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthenticationMode()
    {
        $this->authenticationMode = null;
        return $this;
    }

    /**
     * Getter for requiresBroadWorksDigitCollection
     *
     * @return bool
     */
    public function getRequiresBroadWorksDigitCollection()
    {
        return $this->requiresBroadWorksDigitCollection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requiresBroadWorksDigitCollection;
    }

    /**
     * Setter for requiresBroadWorksDigitCollection
     *
     * @param bool $requiresBroadWorksDigitCollection
     * @return $this
     */
    public function setRequiresBroadWorksDigitCollection($requiresBroadWorksDigitCollection)
    {
        $this->requiresBroadWorksDigitCollection = $requiresBroadWorksDigitCollection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequiresBroadWorksDigitCollection()
    {
        $this->requiresBroadWorksDigitCollection = null;
        return $this;
    }

    /**
     * Getter for requiresBroadWorksCallWaitingTone
     *
     * @return bool
     */
    public function getRequiresBroadWorksCallWaitingTone()
    {
        return $this->requiresBroadWorksCallWaitingTone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requiresBroadWorksCallWaitingTone;
    }

    /**
     * Setter for requiresBroadWorksCallWaitingTone
     *
     * @param bool $requiresBroadWorksCallWaitingTone
     * @return $this
     */
    public function setRequiresBroadWorksCallWaitingTone($requiresBroadWorksCallWaitingTone)
    {
        $this->requiresBroadWorksCallWaitingTone = $requiresBroadWorksCallWaitingTone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequiresBroadWorksCallWaitingTone()
    {
        $this->requiresBroadWorksCallWaitingTone = null;
        return $this;
    }

    /**
     * Getter for requiresMWISubscription
     *
     * @return bool
     */
    public function getRequiresMWISubscription()
    {
        return $this->requiresMWISubscription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requiresMWISubscription;
    }

    /**
     * Setter for requiresMWISubscription
     *
     * @param bool $requiresMWISubscription
     * @return $this
     */
    public function setRequiresMWISubscription($requiresMWISubscription)
    {
        $this->requiresMWISubscription = $requiresMWISubscription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequiresMWISubscription()
    {
        $this->requiresMWISubscription = null;
        return $this;
    }

    /**
     * Getter for useHistoryInfoHeaderOnAccessSide
     *
     * @return bool
     */
    public function getUseHistoryInfoHeaderOnAccessSide()
    {
        return $this->useHistoryInfoHeaderOnAccessSide instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useHistoryInfoHeaderOnAccessSide;
    }

    /**
     * Setter for useHistoryInfoHeaderOnAccessSide
     *
     * @param bool $useHistoryInfoHeaderOnAccessSide
     * @return $this
     */
    public function setUseHistoryInfoHeaderOnAccessSide($useHistoryInfoHeaderOnAccessSide)
    {
        $this->useHistoryInfoHeaderOnAccessSide = $useHistoryInfoHeaderOnAccessSide;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseHistoryInfoHeaderOnAccessSide()
    {
        $this->useHistoryInfoHeaderOnAccessSide = null;
        return $this;
    }

    /**
     * Getter for adviceOfChargeCapable
     *
     * @return bool
     */
    public function getAdviceOfChargeCapable()
    {
        return $this->adviceOfChargeCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->adviceOfChargeCapable;
    }

    /**
     * Setter for adviceOfChargeCapable
     *
     * @param bool $adviceOfChargeCapable
     * @return $this
     */
    public function setAdviceOfChargeCapable($adviceOfChargeCapable)
    {
        $this->adviceOfChargeCapable = $adviceOfChargeCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdviceOfChargeCapable()
    {
        $this->adviceOfChargeCapable = null;
        return $this;
    }

    /**
     * Getter for resetEvent
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceResetEvent
     */
    public function getResetEvent()
    {
        return $this->resetEvent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resetEvent;
    }

    /**
     * Setter for resetEvent
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceResetEvent $resetEvent
     * @return $this
     */
    public function setResetEvent(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceResetEvent $resetEvent)
    {
        $this->resetEvent = $resetEvent;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResetEvent()
    {
        $this->resetEvent = null;
        return $this;
    }

    /**
     * Getter for supportCallCenterMIMEType
     *
     * @return bool
     */
    public function getSupportCallCenterMIMEType()
    {
        return $this->supportCallCenterMIMEType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportCallCenterMIMEType;
    }

    /**
     * Setter for supportCallCenterMIMEType
     *
     * @param bool $supportCallCenterMIMEType
     * @return $this
     */
    public function setSupportCallCenterMIMEType($supportCallCenterMIMEType)
    {
        $this->supportCallCenterMIMEType = $supportCallCenterMIMEType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportCallCenterMIMEType()
    {
        $this->supportCallCenterMIMEType = null;
        return $this;
    }

    /**
     * Getter for trunkMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkMode
     */
    public function getTrunkMode()
    {
        return $this->trunkMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkMode;
    }

    /**
     * Setter for trunkMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkMode $trunkMode
     * @return $this
     */
    public function setTrunkMode(\CWM\BroadWorksConnector\Ocip\Models\TrunkMode $trunkMode)
    {
        $this->trunkMode = $trunkMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkMode()
    {
        $this->trunkMode = null;
        return $this;
    }

    /**
     * Getter for addPCalledPartyId
     *
     * @return bool
     */
    public function getAddPCalledPartyId()
    {
        return $this->addPCalledPartyId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addPCalledPartyId;
    }

    /**
     * Setter for addPCalledPartyId
     *
     * @param bool $addPCalledPartyId
     * @return $this
     */
    public function setAddPCalledPartyId($addPCalledPartyId)
    {
        $this->addPCalledPartyId = $addPCalledPartyId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddPCalledPartyId()
    {
        $this->addPCalledPartyId = null;
        return $this;
    }

    /**
     * Getter for supportIdentityInUpdateAndReInvite
     *
     * @return bool
     */
    public function getSupportIdentityInUpdateAndReInvite()
    {
        return $this->supportIdentityInUpdateAndReInvite instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportIdentityInUpdateAndReInvite;
    }

    /**
     * Setter for supportIdentityInUpdateAndReInvite
     *
     * @param bool $supportIdentityInUpdateAndReInvite
     * @return $this
     */
    public function setSupportIdentityInUpdateAndReInvite($supportIdentityInUpdateAndReInvite)
    {
        $this->supportIdentityInUpdateAndReInvite = $supportIdentityInUpdateAndReInvite;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportIdentityInUpdateAndReInvite()
    {
        $this->supportIdentityInUpdateAndReInvite = null;
        return $this;
    }

    /**
     * Getter for unscreenedPresentationIdentityPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnscreenedPresentationIdentityPolicy
     */
    public function getUnscreenedPresentationIdentityPolicy()
    {
        return $this->unscreenedPresentationIdentityPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unscreenedPresentationIdentityPolicy;
    }

    /**
     * Setter for unscreenedPresentationIdentityPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnscreenedPresentationIdentityPolicy $unscreenedPresentationIdentityPolicy
     * @return $this
     */
    public function setUnscreenedPresentationIdentityPolicy(\CWM\BroadWorksConnector\Ocip\Models\UnscreenedPresentationIdentityPolicy $unscreenedPresentationIdentityPolicy)
    {
        $this->unscreenedPresentationIdentityPolicy = $unscreenedPresentationIdentityPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnscreenedPresentationIdentityPolicy()
    {
        $this->unscreenedPresentationIdentityPolicy = null;
        return $this;
    }

    /**
     * Getter for enable3G4GContinuity
     *
     * @return bool
     */
    public function getEnable3G4GContinuity()
    {
        return $this->enable3G4GContinuity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enable3G4GContinuity;
    }

    /**
     * Setter for enable3G4GContinuity
     *
     * @param bool $enable3G4GContinuity
     * @return $this
     */
    public function setEnable3G4GContinuity($enable3G4GContinuity)
    {
        $this->enable3G4GContinuity = $enable3G4GContinuity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnable3G4GContinuity()
    {
        $this->enable3G4GContinuity = null;
        return $this;
    }

    /**
     * Getter for supportEmergencyDisconnectControl
     *
     * @return bool
     */
    public function getSupportEmergencyDisconnectControl()
    {
        return $this->supportEmergencyDisconnectControl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportEmergencyDisconnectControl;
    }

    /**
     * Setter for supportEmergencyDisconnectControl
     *
     * @param bool $supportEmergencyDisconnectControl
     * @return $this
     */
    public function setSupportEmergencyDisconnectControl($supportEmergencyDisconnectControl)
    {
        $this->supportEmergencyDisconnectControl = $supportEmergencyDisconnectControl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportEmergencyDisconnectControl()
    {
        $this->supportEmergencyDisconnectControl = null;
        return $this;
    }

    /**
     * Getter for deviceTypeConfigurationOption
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType
     */
    public function getDeviceTypeConfigurationOption()
    {
        return $this->deviceTypeConfigurationOption instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTypeConfigurationOption;
    }

    /**
     * Setter for deviceTypeConfigurationOption
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType $deviceTypeConfigurationOption
     * @return $this
     */
    public function setDeviceTypeConfigurationOption(\CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType $deviceTypeConfigurationOption)
    {
        $this->deviceTypeConfigurationOption = $deviceTypeConfigurationOption;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTypeConfigurationOption()
    {
        $this->deviceTypeConfigurationOption = null;
        return $this;
    }


}

