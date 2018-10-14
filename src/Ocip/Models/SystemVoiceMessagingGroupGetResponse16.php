<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetResponse16
 *
 * Response to SystemVoiceMessagingGroupGetRequest16.
 *         
 *         Replaced by: SystemVoiceMessagingGroupGetResponse16sp2
 *
 * @see SystemVoiceMessagingGroupGetRequest16
 * @see SystemVoiceMessagingGroupGetResponse16sp2
 */
class SystemVoiceMessagingGroupGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName realDeleteForImap
     * @var bool|null
     */
    private $realDeleteForImap = null;

    /**
     * @ElementName useDnInMailBody
     * @var bool|null
     */
    private $useDnInMailBody = null;

    /**
     * @ElementName useShortSubjectLine
     * @var bool|null
     */
    private $useShortSubjectLine = null;

    /**
     * @ElementName maxMessageLengthMinutes
     * @var int|null
     */
    private $maxMessageLengthMinutes = null;

    /**
     * @ElementName maxMailboxLengthMinutes
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes|null
     */
    private $maxMailboxLengthMinutes = null;

    /**
     * @ElementName doesMessageAge
     * @var bool|null
     */
    private $doesMessageAge = null;

    /**
     * @ElementName holdPeriodDays
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays|null
     */
    private $holdPeriodDays = null;

    /**
     * @ElementName mailServerNetAddress
     * @var string|null
     */
    private $mailServerNetAddress = null;

    /**
     * @ElementName mailServerProtocol
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol|null
     */
    private $mailServerProtocol = null;

    /**
     * @ElementName defaultDeliveryFromAddress
     * @var string|null
     */
    private $defaultDeliveryFromAddress = null;

    /**
     * @ElementName defaultNotificationFromAddress
     * @var string|null
     */
    private $defaultNotificationFromAddress = null;

    /**
     * @ElementName defaultVoicePortalLockoutFromAddress
     * @var string|null
     */
    private $defaultVoicePortalLockoutFromAddress = null;

    /**
     * @ElementName useOutgoingMWIOnSMDI
     * @var bool|null
     */
    private $useOutgoingMWIOnSMDI = null;

    /**
     * @ElementName mwiDelayInSeconds
     * @var int|null
     */
    private $mwiDelayInSeconds = null;

    /**
     * @ElementName voicePortalScope
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoicePortalScope|null
     */
    private $voicePortalScope = null;

    /**
     * @ElementName enterpriseVoicePortalLicensed
     * @var bool|null
     */
    private $enterpriseVoicePortalLicensed = null;

    /**
     * @ElementName networkWideMessaging
     * @var bool|null
     */
    private $networkWideMessaging = null;

    /**
     * @ElementName useExternalRouting
     * @var bool|null
     */
    private $useExternalRouting = null;

    /**
     * @ElementName defaultExternalRoutingAddress
     * @var string|null
     */
    private $defaultExternalRoutingAddress = null;

    /**
     * Getter for realDeleteForImap
     *
     * @ElementName realDeleteForImap
     * @return bool|null
     */
    public function getRealDeleteForImap()
    {
        return $this->realDeleteForImap;
    }

    /**
     * Setter for realDeleteForImap
     *
     * @ElementName realDeleteForImap
     * @param bool|null $realDeleteForImap
     * @return $this
     */
    public function setRealDeleteForImap($realDeleteForImap)
    {
        $this->realDeleteForImap = $realDeleteForImap;
        return $this;
    }

    /**
     * Getter for useDnInMailBody
     *
     * @ElementName useDnInMailBody
     * @return bool|null
     */
    public function getUseDnInMailBody()
    {
        return $this->useDnInMailBody;
    }

    /**
     * Setter for useDnInMailBody
     *
     * @ElementName useDnInMailBody
     * @param bool|null $useDnInMailBody
     * @return $this
     */
    public function setUseDnInMailBody($useDnInMailBody)
    {
        $this->useDnInMailBody = $useDnInMailBody;
        return $this;
    }

    /**
     * Getter for useShortSubjectLine
     *
     * @ElementName useShortSubjectLine
     * @return bool|null
     */
    public function getUseShortSubjectLine()
    {
        return $this->useShortSubjectLine;
    }

    /**
     * Setter for useShortSubjectLine
     *
     * @ElementName useShortSubjectLine
     * @param bool|null $useShortSubjectLine
     * @return $this
     */
    public function setUseShortSubjectLine($useShortSubjectLine)
    {
        $this->useShortSubjectLine = $useShortSubjectLine;
        return $this;
    }

    /**
     * Getter for maxMessageLengthMinutes
     *
     * @ElementName maxMessageLengthMinutes
     * @return int|null
     */
    public function getMaxMessageLengthMinutes()
    {
        return $this->maxMessageLengthMinutes;
    }

    /**
     * Setter for maxMessageLengthMinutes
     *
     * @ElementName maxMessageLengthMinutes
     * @param int|null $maxMessageLengthMinutes
     * @return $this
     */
    public function setMaxMessageLengthMinutes($maxMessageLengthMinutes)
    {
        $this->maxMessageLengthMinutes = $maxMessageLengthMinutes;
        return $this;
    }

    /**
     * Getter for maxMailboxLengthMinutes
     *
     * @ElementName maxMailboxLengthMinutes
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes|null
     */
    public function getMaxMailboxLengthMinutes()
    {
        return $this->maxMailboxLengthMinutes;
    }

    /**
     * Setter for maxMailboxLengthMinutes
     *
     * @ElementName maxMailboxLengthMinutes
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes|null $maxMailboxLengthMinutes
     * @return $this
     */
    public function setMaxMailboxLengthMinutes(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes $maxMailboxLengthMinutes)
    {
        $this->maxMailboxLengthMinutes = $maxMailboxLengthMinutes;
        return $this;
    }

    /**
     * Getter for doesMessageAge
     *
     * @ElementName doesMessageAge
     * @return bool|null
     */
    public function getDoesMessageAge()
    {
        return $this->doesMessageAge;
    }

    /**
     * Setter for doesMessageAge
     *
     * @ElementName doesMessageAge
     * @param bool|null $doesMessageAge
     * @return $this
     */
    public function setDoesMessageAge($doesMessageAge)
    {
        $this->doesMessageAge = $doesMessageAge;
        return $this;
    }

    /**
     * Getter for holdPeriodDays
     *
     * @ElementName holdPeriodDays
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays|null
     */
    public function getHoldPeriodDays()
    {
        return $this->holdPeriodDays;
    }

    /**
     * Setter for holdPeriodDays
     *
     * @ElementName holdPeriodDays
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays|null $holdPeriodDays
     * @return $this
     */
    public function setHoldPeriodDays(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays $holdPeriodDays)
    {
        $this->holdPeriodDays = $holdPeriodDays;
        return $this;
    }

    /**
     * Getter for mailServerNetAddress
     *
     * @ElementName mailServerNetAddress
     * @return string|null
     */
    public function getMailServerNetAddress()
    {
        return $this->mailServerNetAddress;
    }

    /**
     * Setter for mailServerNetAddress
     *
     * @ElementName mailServerNetAddress
     * @param string|null $mailServerNetAddress
     * @return $this
     */
    public function setMailServerNetAddress($mailServerNetAddress)
    {
        $this->mailServerNetAddress = $mailServerNetAddress;
        return $this;
    }

    /**
     * Getter for mailServerProtocol
     *
     * @ElementName mailServerProtocol
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol|null
     */
    public function getMailServerProtocol()
    {
        return $this->mailServerProtocol;
    }

    /**
     * Setter for mailServerProtocol
     *
     * @ElementName mailServerProtocol
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol|null $mailServerProtocol
     * @return $this
     */
    public function setMailServerProtocol(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol $mailServerProtocol)
    {
        $this->mailServerProtocol = $mailServerProtocol;
        return $this;
    }

    /**
     * Getter for defaultDeliveryFromAddress
     *
     * @ElementName defaultDeliveryFromAddress
     * @return string|null
     */
    public function getDefaultDeliveryFromAddress()
    {
        return $this->defaultDeliveryFromAddress;
    }

    /**
     * Setter for defaultDeliveryFromAddress
     *
     * @ElementName defaultDeliveryFromAddress
     * @param string|null $defaultDeliveryFromAddress
     * @return $this
     */
    public function setDefaultDeliveryFromAddress($defaultDeliveryFromAddress)
    {
        $this->defaultDeliveryFromAddress = $defaultDeliveryFromAddress;
        return $this;
    }

    /**
     * Getter for defaultNotificationFromAddress
     *
     * @ElementName defaultNotificationFromAddress
     * @return string|null
     */
    public function getDefaultNotificationFromAddress()
    {
        return $this->defaultNotificationFromAddress;
    }

    /**
     * Setter for defaultNotificationFromAddress
     *
     * @ElementName defaultNotificationFromAddress
     * @param string|null $defaultNotificationFromAddress
     * @return $this
     */
    public function setDefaultNotificationFromAddress($defaultNotificationFromAddress)
    {
        $this->defaultNotificationFromAddress = $defaultNotificationFromAddress;
        return $this;
    }

    /**
     * Getter for defaultVoicePortalLockoutFromAddress
     *
     * @ElementName defaultVoicePortalLockoutFromAddress
     * @return string|null
     */
    public function getDefaultVoicePortalLockoutFromAddress()
    {
        return $this->defaultVoicePortalLockoutFromAddress;
    }

    /**
     * Setter for defaultVoicePortalLockoutFromAddress
     *
     * @ElementName defaultVoicePortalLockoutFromAddress
     * @param string|null $defaultVoicePortalLockoutFromAddress
     * @return $this
     */
    public function setDefaultVoicePortalLockoutFromAddress($defaultVoicePortalLockoutFromAddress)
    {
        $this->defaultVoicePortalLockoutFromAddress = $defaultVoicePortalLockoutFromAddress;
        return $this;
    }

    /**
     * Getter for useOutgoingMWIOnSMDI
     *
     * @ElementName useOutgoingMWIOnSMDI
     * @return bool|null
     */
    public function getUseOutgoingMWIOnSMDI()
    {
        return $this->useOutgoingMWIOnSMDI;
    }

    /**
     * Setter for useOutgoingMWIOnSMDI
     *
     * @ElementName useOutgoingMWIOnSMDI
     * @param bool|null $useOutgoingMWIOnSMDI
     * @return $this
     */
    public function setUseOutgoingMWIOnSMDI($useOutgoingMWIOnSMDI)
    {
        $this->useOutgoingMWIOnSMDI = $useOutgoingMWIOnSMDI;
        return $this;
    }

    /**
     * Getter for mwiDelayInSeconds
     *
     * @ElementName mwiDelayInSeconds
     * @return int|null
     */
    public function getMwiDelayInSeconds()
    {
        return $this->mwiDelayInSeconds;
    }

    /**
     * Setter for mwiDelayInSeconds
     *
     * @ElementName mwiDelayInSeconds
     * @param int|null $mwiDelayInSeconds
     * @return $this
     */
    public function setMwiDelayInSeconds($mwiDelayInSeconds)
    {
        $this->mwiDelayInSeconds = $mwiDelayInSeconds;
        return $this;
    }

    /**
     * Getter for voicePortalScope
     *
     * @ElementName voicePortalScope
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoicePortalScope|null
     */
    public function getVoicePortalScope()
    {
        return $this->voicePortalScope;
    }

    /**
     * Setter for voicePortalScope
     *
     * @ElementName voicePortalScope
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoicePortalScope|null $voicePortalScope
     * @return $this
     */
    public function setVoicePortalScope(\CWM\BroadWorksConnector\Ocip\Models\SystemVoicePortalScope $voicePortalScope)
    {
        $this->voicePortalScope = $voicePortalScope;
        return $this;
    }

    /**
     * Getter for enterpriseVoicePortalLicensed
     *
     * @ElementName enterpriseVoicePortalLicensed
     * @return bool|null
     */
    public function getEnterpriseVoicePortalLicensed()
    {
        return $this->enterpriseVoicePortalLicensed;
    }

    /**
     * Setter for enterpriseVoicePortalLicensed
     *
     * @ElementName enterpriseVoicePortalLicensed
     * @param bool|null $enterpriseVoicePortalLicensed
     * @return $this
     */
    public function setEnterpriseVoicePortalLicensed($enterpriseVoicePortalLicensed)
    {
        $this->enterpriseVoicePortalLicensed = $enterpriseVoicePortalLicensed;
        return $this;
    }

    /**
     * Getter for networkWideMessaging
     *
     * @ElementName networkWideMessaging
     * @return bool|null
     */
    public function getNetworkWideMessaging()
    {
        return $this->networkWideMessaging;
    }

    /**
     * Setter for networkWideMessaging
     *
     * @ElementName networkWideMessaging
     * @param bool|null $networkWideMessaging
     * @return $this
     */
    public function setNetworkWideMessaging($networkWideMessaging)
    {
        $this->networkWideMessaging = $networkWideMessaging;
        return $this;
    }

    /**
     * Getter for useExternalRouting
     *
     * @ElementName useExternalRouting
     * @return bool|null
     */
    public function getUseExternalRouting()
    {
        return $this->useExternalRouting;
    }

    /**
     * Setter for useExternalRouting
     *
     * @ElementName useExternalRouting
     * @param bool|null $useExternalRouting
     * @return $this
     */
    public function setUseExternalRouting($useExternalRouting)
    {
        $this->useExternalRouting = $useExternalRouting;
        return $this;
    }

    /**
     * Getter for defaultExternalRoutingAddress
     *
     * @ElementName defaultExternalRoutingAddress
     * @return string|null
     */
    public function getDefaultExternalRoutingAddress()
    {
        return $this->defaultExternalRoutingAddress;
    }

    /**
     * Setter for defaultExternalRoutingAddress
     *
     * @ElementName defaultExternalRoutingAddress
     * @param string|null $defaultExternalRoutingAddress
     * @return $this
     */
    public function setDefaultExternalRoutingAddress($defaultExternalRoutingAddress)
    {
        $this->defaultExternalRoutingAddress = $defaultExternalRoutingAddress;
        return $this;
    }


}

