<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse21
 *
 * Response to SystemVoiceMessagingGroupGetVoicePortalMenusRequest21.
 *
 * @see SystemVoiceMessagingGroupGetVoicePortalMenusRequest21
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useVoicePortalCustomization
     * @var bool|null
     */
    private $useVoicePortalCustomization = null;

    /**
     * @ElementName voicePortalMainMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalMainMenuKeys|null
     */
    private $voicePortalMainMenuKeys = null;

    /**
     * @ElementName announcementMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementMenuKeys|null
     */
    private $announcementMenuKeys = null;

    /**
     * @ElementName announcementRecordingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementRecordingMenuKeys|null
     */
    private $announcementRecordingMenuKeys = null;

    /**
     * @ElementName greetingsMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21GreetingsMenuKeys|null
     */
    private $greetingsMenuKeys = null;

    /**
     * @ElementName conferenceGreetingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ConferenceGreetingMenuKeys|null
     */
    private $conferenceGreetingMenuKeys = null;

    /**
     * @ElementName voiceMessagingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoiceMessagingMenuKeys|null
     */
    private $voiceMessagingMenuKeys = null;

    /**
     * @ElementName playGreetingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayGreetingMenuKeys|null
     */
    private $playGreetingMenuKeys = null;

    /**
     * @ElementName changeBusyOrNoAnswerGreetingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeBusyOrNoAnswerGreetingMenuKeys|null
     */
    private $changeBusyOrNoAnswerGreetingMenuKeys = null;

    /**
     * @ElementName changeExtendedAwayGreetingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeExtendedAwayGreetingMenuKeys|null
     */
    private $changeExtendedAwayGreetingMenuKeys = null;

    /**
     * @ElementName recordNewGreetingOrPersonalizedNameMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21RecordNewGreetingOrPersonalizedNameMenuKeys|null
     */
    private $recordNewGreetingOrPersonalizedNameMenuKeys = null;

    /**
     * @ElementName deleteAllMessagesMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21DeleteAllMessagesMenuKeys|null
     */
    private $deleteAllMessagesMenuKeys = null;

    /**
     * @ElementName commPilotExpressProfileMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21CommPilotExpressProfileMenuKeys|null
     */
    private $commPilotExpressProfileMenuKeys = null;

    /**
     * @ElementName personalizedNameMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PersonalizedNameMenuKeys|null
     */
    private $personalizedNameMenuKeys = null;

    /**
     * @ElementName callForwardingOptionsMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21CallForwardingOptionsMenuKeys|null
     */
    private $callForwardingOptionsMenuKeys = null;

    /**
     * @ElementName changeCallForwardingDestinationMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeCallForwardingDestinationMenuKeys|null
     */
    private $changeCallForwardingDestinationMenuKeys = null;

    /**
     * @ElementName voicePortalCallingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalCallingMenuKeys|null
     */
    private $voicePortalCallingMenuKeys = null;

    /**
     * @ElementName hotelingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21HotelingMenuKeys|null
     */
    private $hotelingMenuKeys = null;

    /**
     * @ElementName passcodeMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PasscodeMenuKeys|null
     */
    private $passcodeMenuKeys = null;

    /**
     * @ElementName playMessagesMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayMessagesMenuKeys|null
     */
    private $playMessagesMenuKeys = null;

    /**
     * @ElementName playMessageMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayMessageMenuKeys|null
     */
    private $playMessageMenuKeys = null;

    /**
     * @ElementName additionalMessageOptionsMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AdditionalMessageOptionsMenuKeys|null
     */
    private $additionalMessageOptionsMenuKeys = null;

    /**
     * @ElementName forwardOrComposeMessageMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ForwardOrComposeMessageMenuKeys|null
     */
    private $forwardOrComposeMessageMenuKeys = null;

    /**
     * @ElementName replyMessageMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ReplyMessageMenuKeys|null
     */
    private $replyMessageMenuKeys = null;

    /**
     * @ElementName sendToDistributionListMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToDistributionListMenuKeys|null
     */
    private $sendToDistributionListMenuKeys = null;

    /**
     * @ElementName selectDistributionListMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SelectDistributionListMenuKeys|null
     */
    private $selectDistributionListMenuKeys = null;

    /**
     * @ElementName reviewSelectedDistributionListMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ReviewSelectedDistributionListMenuKeys|null
     */
    private $reviewSelectedDistributionListMenuKeys = null;

    /**
     * @ElementName sendMessageToSelectedDistributionListMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendMessageToSelectedDistributionListMenuKeys|null
     */
    private $sendMessageToSelectedDistributionListMenuKeys = null;

    /**
     * @ElementName sendToAllGroupMembersMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToAllGroupMembersMenuKeys|null
     */
    private $sendToAllGroupMembersMenuKeys = null;

    /**
     * @ElementName sendToPersonMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToPersonMenuKeys|null
     */
    private $sendToPersonMenuKeys = null;

    /**
     * @ElementName changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeCurrentIntroductionOrMessageOrReplyMenuKeys|null
     */
    private $changeCurrentIntroductionOrMessageOrReplyMenuKeys = null;

    /**
     * @ElementName voicePortalLoginMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalLoginMenuKeys|null
     */
    private $voicePortalLoginMenuKeys = null;

    /**
     * @ElementName faxMessagingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21FaxMessagingMenuKeys|null
     */
    private $faxMessagingMenuKeys = null;

    /**
     * @ElementName messageDepositMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21MessageDepositMenuKeys|null
     */
    private $messageDepositMenuKeys = null;

    /**
     * @ElementName disableMessageDepositMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21DisableMessageDepositMenuKeys|null
     */
    private $disableMessageDepositMenuKeys = null;

    /**
     * @ElementName greetingOnlyForwardingDestinationMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21GreetingOnlyForwardingDestinationMenuKeys|null
     */
    private $greetingOnlyForwardingDestinationMenuKeys = null;

    /**
     * @ElementName personalAssistantMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PersonalAssistantMenuKeys|null
     */
    private $personalAssistantMenuKeys = null;

    /**
     * Getter for useVoicePortalCustomization
     *
     * @ElementName useVoicePortalCustomization
     * @return bool|null
     */
    public function getUseVoicePortalCustomization()
    {
        return $this->useVoicePortalCustomization;
    }

    /**
     * Setter for useVoicePortalCustomization
     *
     * @ElementName useVoicePortalCustomization
     * @param bool|null $useVoicePortalCustomization
     * @return $this
     */
    public function setUseVoicePortalCustomization($useVoicePortalCustomization)
    {
        $this->useVoicePortalCustomization = $useVoicePortalCustomization;
        return $this;
    }

    /**
     * Getter for voicePortalMainMenuKeys
     *
     * @ElementName voicePortalMainMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalMainMenuKeys|null
     */
    public function getVoicePortalMainMenuKeys()
    {
        return $this->voicePortalMainMenuKeys;
    }

    /**
     * Setter for voicePortalMainMenuKeys
     *
     * @ElementName voicePortalMainMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalMainMenuKeys|null $voicePortalMainMenuKeys
     * @return $this
     */
    public function setVoicePortalMainMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalMainMenuKeys $voicePortalMainMenuKeys)
    {
        $this->voicePortalMainMenuKeys = $voicePortalMainMenuKeys;
        return $this;
    }

    /**
     * Getter for announcementMenuKeys
     *
     * @ElementName announcementMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementMenuKeys|null
     */
    public function getAnnouncementMenuKeys()
    {
        return $this->announcementMenuKeys;
    }

    /**
     * Setter for announcementMenuKeys
     *
     * @ElementName announcementMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementMenuKeys|null $announcementMenuKeys
     * @return $this
     */
    public function setAnnouncementMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementMenuKeys $announcementMenuKeys)
    {
        $this->announcementMenuKeys = $announcementMenuKeys;
        return $this;
    }

    /**
     * Getter for announcementRecordingMenuKeys
     *
     * @ElementName announcementRecordingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementRecordingMenuKeys|null
     */
    public function getAnnouncementRecordingMenuKeys()
    {
        return $this->announcementRecordingMenuKeys;
    }

    /**
     * Setter for announcementRecordingMenuKeys
     *
     * @ElementName announcementRecordingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementRecordingMenuKeys|null $announcementRecordingMenuKeys
     * @return $this
     */
    public function setAnnouncementRecordingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AnnouncementRecordingMenuKeys $announcementRecordingMenuKeys)
    {
        $this->announcementRecordingMenuKeys = $announcementRecordingMenuKeys;
        return $this;
    }

    /**
     * Getter for greetingsMenuKeys
     *
     * @ElementName greetingsMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21GreetingsMenuKeys|null
     */
    public function getGreetingsMenuKeys()
    {
        return $this->greetingsMenuKeys;
    }

    /**
     * Setter for greetingsMenuKeys
     *
     * @ElementName greetingsMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21GreetingsMenuKeys|null $greetingsMenuKeys
     * @return $this
     */
    public function setGreetingsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21GreetingsMenuKeys $greetingsMenuKeys)
    {
        $this->greetingsMenuKeys = $greetingsMenuKeys;
        return $this;
    }

    /**
     * Getter for conferenceGreetingMenuKeys
     *
     * @ElementName conferenceGreetingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ConferenceGreetingMenuKeys|null
     */
    public function getConferenceGreetingMenuKeys()
    {
        return $this->conferenceGreetingMenuKeys;
    }

    /**
     * Setter for conferenceGreetingMenuKeys
     *
     * @ElementName conferenceGreetingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ConferenceGreetingMenuKeys|null $conferenceGreetingMenuKeys
     * @return $this
     */
    public function setConferenceGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ConferenceGreetingMenuKeys $conferenceGreetingMenuKeys)
    {
        $this->conferenceGreetingMenuKeys = $conferenceGreetingMenuKeys;
        return $this;
    }

    /**
     * Getter for voiceMessagingMenuKeys
     *
     * @ElementName voiceMessagingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoiceMessagingMenuKeys|null
     */
    public function getVoiceMessagingMenuKeys()
    {
        return $this->voiceMessagingMenuKeys;
    }

    /**
     * Setter for voiceMessagingMenuKeys
     *
     * @ElementName voiceMessagingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoiceMessagingMenuKeys|null $voiceMessagingMenuKeys
     * @return $this
     */
    public function setVoiceMessagingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoiceMessagingMenuKeys $voiceMessagingMenuKeys)
    {
        $this->voiceMessagingMenuKeys = $voiceMessagingMenuKeys;
        return $this;
    }

    /**
     * Getter for playGreetingMenuKeys
     *
     * @ElementName playGreetingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayGreetingMenuKeys|null
     */
    public function getPlayGreetingMenuKeys()
    {
        return $this->playGreetingMenuKeys;
    }

    /**
     * Setter for playGreetingMenuKeys
     *
     * @ElementName playGreetingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayGreetingMenuKeys|null $playGreetingMenuKeys
     * @return $this
     */
    public function setPlayGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayGreetingMenuKeys $playGreetingMenuKeys)
    {
        $this->playGreetingMenuKeys = $playGreetingMenuKeys;
        return $this;
    }

    /**
     * Getter for changeBusyOrNoAnswerGreetingMenuKeys
     *
     * @ElementName changeBusyOrNoAnswerGreetingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeBusyOrNoAnswerGreetingMenuKeys|null
     */
    public function getChangeBusyOrNoAnswerGreetingMenuKeys()
    {
        return $this->changeBusyOrNoAnswerGreetingMenuKeys;
    }

    /**
     * Setter for changeBusyOrNoAnswerGreetingMenuKeys
     *
     * @ElementName changeBusyOrNoAnswerGreetingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeBusyOrNoAnswerGreetingMenuKeys|null $changeBusyOrNoAnswerGreetingMenuKeys
     * @return $this
     */
    public function setChangeBusyOrNoAnswerGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeBusyOrNoAnswerGreetingMenuKeys $changeBusyOrNoAnswerGreetingMenuKeys)
    {
        $this->changeBusyOrNoAnswerGreetingMenuKeys = $changeBusyOrNoAnswerGreetingMenuKeys;
        return $this;
    }

    /**
     * Getter for changeExtendedAwayGreetingMenuKeys
     *
     * @ElementName changeExtendedAwayGreetingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeExtendedAwayGreetingMenuKeys|null
     */
    public function getChangeExtendedAwayGreetingMenuKeys()
    {
        return $this->changeExtendedAwayGreetingMenuKeys;
    }

    /**
     * Setter for changeExtendedAwayGreetingMenuKeys
     *
     * @ElementName changeExtendedAwayGreetingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeExtendedAwayGreetingMenuKeys|null $changeExtendedAwayGreetingMenuKeys
     * @return $this
     */
    public function setChangeExtendedAwayGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeExtendedAwayGreetingMenuKeys $changeExtendedAwayGreetingMenuKeys)
    {
        $this->changeExtendedAwayGreetingMenuKeys = $changeExtendedAwayGreetingMenuKeys;
        return $this;
    }

    /**
     * Getter for recordNewGreetingOrPersonalizedNameMenuKeys
     *
     * @ElementName recordNewGreetingOrPersonalizedNameMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21RecordNewGreetingOrPersonalizedNameMenuKeys|null
     */
    public function getRecordNewGreetingOrPersonalizedNameMenuKeys()
    {
        return $this->recordNewGreetingOrPersonalizedNameMenuKeys;
    }

    /**
     * Setter for recordNewGreetingOrPersonalizedNameMenuKeys
     *
     * @ElementName recordNewGreetingOrPersonalizedNameMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21RecordNewGreetingOrPersonalizedNameMenuKeys|null $recordNewGreetingOrPersonalizedNameMenuKeys
     * @return $this
     */
    public function setRecordNewGreetingOrPersonalizedNameMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21RecordNewGreetingOrPersonalizedNameMenuKeys $recordNewGreetingOrPersonalizedNameMenuKeys)
    {
        $this->recordNewGreetingOrPersonalizedNameMenuKeys = $recordNewGreetingOrPersonalizedNameMenuKeys;
        return $this;
    }

    /**
     * Getter for deleteAllMessagesMenuKeys
     *
     * @ElementName deleteAllMessagesMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21DeleteAllMessagesMenuKeys|null
     */
    public function getDeleteAllMessagesMenuKeys()
    {
        return $this->deleteAllMessagesMenuKeys;
    }

    /**
     * Setter for deleteAllMessagesMenuKeys
     *
     * @ElementName deleteAllMessagesMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21DeleteAllMessagesMenuKeys|null $deleteAllMessagesMenuKeys
     * @return $this
     */
    public function setDeleteAllMessagesMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21DeleteAllMessagesMenuKeys $deleteAllMessagesMenuKeys)
    {
        $this->deleteAllMessagesMenuKeys = $deleteAllMessagesMenuKeys;
        return $this;
    }

    /**
     * Getter for commPilotExpressProfileMenuKeys
     *
     * @ElementName commPilotExpressProfileMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21CommPilotExpressProfileMenuKeys|null
     */
    public function getCommPilotExpressProfileMenuKeys()
    {
        return $this->commPilotExpressProfileMenuKeys;
    }

    /**
     * Setter for commPilotExpressProfileMenuKeys
     *
     * @ElementName commPilotExpressProfileMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21CommPilotExpressProfileMenuKeys|null $commPilotExpressProfileMenuKeys
     * @return $this
     */
    public function setCommPilotExpressProfileMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21CommPilotExpressProfileMenuKeys $commPilotExpressProfileMenuKeys)
    {
        $this->commPilotExpressProfileMenuKeys = $commPilotExpressProfileMenuKeys;
        return $this;
    }

    /**
     * Getter for personalizedNameMenuKeys
     *
     * @ElementName personalizedNameMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PersonalizedNameMenuKeys|null
     */
    public function getPersonalizedNameMenuKeys()
    {
        return $this->personalizedNameMenuKeys;
    }

    /**
     * Setter for personalizedNameMenuKeys
     *
     * @ElementName personalizedNameMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PersonalizedNameMenuKeys|null $personalizedNameMenuKeys
     * @return $this
     */
    public function setPersonalizedNameMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PersonalizedNameMenuKeys $personalizedNameMenuKeys)
    {
        $this->personalizedNameMenuKeys = $personalizedNameMenuKeys;
        return $this;
    }

    /**
     * Getter for callForwardingOptionsMenuKeys
     *
     * @ElementName callForwardingOptionsMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21CallForwardingOptionsMenuKeys|null
     */
    public function getCallForwardingOptionsMenuKeys()
    {
        return $this->callForwardingOptionsMenuKeys;
    }

    /**
     * Setter for callForwardingOptionsMenuKeys
     *
     * @ElementName callForwardingOptionsMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21CallForwardingOptionsMenuKeys|null $callForwardingOptionsMenuKeys
     * @return $this
     */
    public function setCallForwardingOptionsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21CallForwardingOptionsMenuKeys $callForwardingOptionsMenuKeys)
    {
        $this->callForwardingOptionsMenuKeys = $callForwardingOptionsMenuKeys;
        return $this;
    }

    /**
     * Getter for changeCallForwardingDestinationMenuKeys
     *
     * @ElementName changeCallForwardingDestinationMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeCallForwardingDestinationMenuKeys|null
     */
    public function getChangeCallForwardingDestinationMenuKeys()
    {
        return $this->changeCallForwardingDestinationMenuKeys;
    }

    /**
     * Setter for changeCallForwardingDestinationMenuKeys
     *
     * @ElementName changeCallForwardingDestinationMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeCallForwardingDestinationMenuKeys|null $changeCallForwardingDestinationMenuKeys
     * @return $this
     */
    public function setChangeCallForwardingDestinationMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeCallForwardingDestinationMenuKeys $changeCallForwardingDestinationMenuKeys)
    {
        $this->changeCallForwardingDestinationMenuKeys = $changeCallForwardingDestinationMenuKeys;
        return $this;
    }

    /**
     * Getter for voicePortalCallingMenuKeys
     *
     * @ElementName voicePortalCallingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalCallingMenuKeys|null
     */
    public function getVoicePortalCallingMenuKeys()
    {
        return $this->voicePortalCallingMenuKeys;
    }

    /**
     * Setter for voicePortalCallingMenuKeys
     *
     * @ElementName voicePortalCallingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalCallingMenuKeys|null $voicePortalCallingMenuKeys
     * @return $this
     */
    public function setVoicePortalCallingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalCallingMenuKeys $voicePortalCallingMenuKeys)
    {
        $this->voicePortalCallingMenuKeys = $voicePortalCallingMenuKeys;
        return $this;
    }

    /**
     * Getter for hotelingMenuKeys
     *
     * @ElementName hotelingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21HotelingMenuKeys|null
     */
    public function getHotelingMenuKeys()
    {
        return $this->hotelingMenuKeys;
    }

    /**
     * Setter for hotelingMenuKeys
     *
     * @ElementName hotelingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21HotelingMenuKeys|null $hotelingMenuKeys
     * @return $this
     */
    public function setHotelingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21HotelingMenuKeys $hotelingMenuKeys)
    {
        $this->hotelingMenuKeys = $hotelingMenuKeys;
        return $this;
    }

    /**
     * Getter for passcodeMenuKeys
     *
     * @ElementName passcodeMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PasscodeMenuKeys|null
     */
    public function getPasscodeMenuKeys()
    {
        return $this->passcodeMenuKeys;
    }

    /**
     * Setter for passcodeMenuKeys
     *
     * @ElementName passcodeMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PasscodeMenuKeys|null $passcodeMenuKeys
     * @return $this
     */
    public function setPasscodeMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PasscodeMenuKeys $passcodeMenuKeys)
    {
        $this->passcodeMenuKeys = $passcodeMenuKeys;
        return $this;
    }

    /**
     * Getter for playMessagesMenuKeys
     *
     * @ElementName playMessagesMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayMessagesMenuKeys|null
     */
    public function getPlayMessagesMenuKeys()
    {
        return $this->playMessagesMenuKeys;
    }

    /**
     * Setter for playMessagesMenuKeys
     *
     * @ElementName playMessagesMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayMessagesMenuKeys|null $playMessagesMenuKeys
     * @return $this
     */
    public function setPlayMessagesMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayMessagesMenuKeys $playMessagesMenuKeys)
    {
        $this->playMessagesMenuKeys = $playMessagesMenuKeys;
        return $this;
    }

    /**
     * Getter for playMessageMenuKeys
     *
     * @ElementName playMessageMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayMessageMenuKeys|null
     */
    public function getPlayMessageMenuKeys()
    {
        return $this->playMessageMenuKeys;
    }

    /**
     * Setter for playMessageMenuKeys
     *
     * @ElementName playMessageMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayMessageMenuKeys|null $playMessageMenuKeys
     * @return $this
     */
    public function setPlayMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayMessageMenuKeys $playMessageMenuKeys)
    {
        $this->playMessageMenuKeys = $playMessageMenuKeys;
        return $this;
    }

    /**
     * Getter for additionalMessageOptionsMenuKeys
     *
     * @ElementName additionalMessageOptionsMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AdditionalMessageOptionsMenuKeys|null
     */
    public function getAdditionalMessageOptionsMenuKeys()
    {
        return $this->additionalMessageOptionsMenuKeys;
    }

    /**
     * Setter for additionalMessageOptionsMenuKeys
     *
     * @ElementName additionalMessageOptionsMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AdditionalMessageOptionsMenuKeys|null $additionalMessageOptionsMenuKeys
     * @return $this
     */
    public function setAdditionalMessageOptionsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21AdditionalMessageOptionsMenuKeys $additionalMessageOptionsMenuKeys)
    {
        $this->additionalMessageOptionsMenuKeys = $additionalMessageOptionsMenuKeys;
        return $this;
    }

    /**
     * Getter for forwardOrComposeMessageMenuKeys
     *
     * @ElementName forwardOrComposeMessageMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ForwardOrComposeMessageMenuKeys|null
     */
    public function getForwardOrComposeMessageMenuKeys()
    {
        return $this->forwardOrComposeMessageMenuKeys;
    }

    /**
     * Setter for forwardOrComposeMessageMenuKeys
     *
     * @ElementName forwardOrComposeMessageMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ForwardOrComposeMessageMenuKeys|null $forwardOrComposeMessageMenuKeys
     * @return $this
     */
    public function setForwardOrComposeMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ForwardOrComposeMessageMenuKeys $forwardOrComposeMessageMenuKeys)
    {
        $this->forwardOrComposeMessageMenuKeys = $forwardOrComposeMessageMenuKeys;
        return $this;
    }

    /**
     * Getter for replyMessageMenuKeys
     *
     * @ElementName replyMessageMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ReplyMessageMenuKeys|null
     */
    public function getReplyMessageMenuKeys()
    {
        return $this->replyMessageMenuKeys;
    }

    /**
     * Setter for replyMessageMenuKeys
     *
     * @ElementName replyMessageMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ReplyMessageMenuKeys|null $replyMessageMenuKeys
     * @return $this
     */
    public function setReplyMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ReplyMessageMenuKeys $replyMessageMenuKeys)
    {
        $this->replyMessageMenuKeys = $replyMessageMenuKeys;
        return $this;
    }

    /**
     * Getter for sendToDistributionListMenuKeys
     *
     * @ElementName sendToDistributionListMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToDistributionListMenuKeys|null
     */
    public function getSendToDistributionListMenuKeys()
    {
        return $this->sendToDistributionListMenuKeys;
    }

    /**
     * Setter for sendToDistributionListMenuKeys
     *
     * @ElementName sendToDistributionListMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToDistributionListMenuKeys|null $sendToDistributionListMenuKeys
     * @return $this
     */
    public function setSendToDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToDistributionListMenuKeys $sendToDistributionListMenuKeys)
    {
        $this->sendToDistributionListMenuKeys = $sendToDistributionListMenuKeys;
        return $this;
    }

    /**
     * Getter for selectDistributionListMenuKeys
     *
     * @ElementName selectDistributionListMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SelectDistributionListMenuKeys|null
     */
    public function getSelectDistributionListMenuKeys()
    {
        return $this->selectDistributionListMenuKeys;
    }

    /**
     * Setter for selectDistributionListMenuKeys
     *
     * @ElementName selectDistributionListMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SelectDistributionListMenuKeys|null $selectDistributionListMenuKeys
     * @return $this
     */
    public function setSelectDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SelectDistributionListMenuKeys $selectDistributionListMenuKeys)
    {
        $this->selectDistributionListMenuKeys = $selectDistributionListMenuKeys;
        return $this;
    }

    /**
     * Getter for reviewSelectedDistributionListMenuKeys
     *
     * @ElementName reviewSelectedDistributionListMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ReviewSelectedDistributionListMenuKeys|null
     */
    public function getReviewSelectedDistributionListMenuKeys()
    {
        return $this->reviewSelectedDistributionListMenuKeys;
    }

    /**
     * Setter for reviewSelectedDistributionListMenuKeys
     *
     * @ElementName reviewSelectedDistributionListMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ReviewSelectedDistributionListMenuKeys|null $reviewSelectedDistributionListMenuKeys
     * @return $this
     */
    public function setReviewSelectedDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ReviewSelectedDistributionListMenuKeys $reviewSelectedDistributionListMenuKeys)
    {
        $this->reviewSelectedDistributionListMenuKeys = $reviewSelectedDistributionListMenuKeys;
        return $this;
    }

    /**
     * Getter for sendMessageToSelectedDistributionListMenuKeys
     *
     * @ElementName sendMessageToSelectedDistributionListMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendMessageToSelectedDistributionListMenuKeys|null
     */
    public function getSendMessageToSelectedDistributionListMenuKeys()
    {
        return $this->sendMessageToSelectedDistributionListMenuKeys;
    }

    /**
     * Setter for sendMessageToSelectedDistributionListMenuKeys
     *
     * @ElementName sendMessageToSelectedDistributionListMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendMessageToSelectedDistributionListMenuKeys|null $sendMessageToSelectedDistributionListMenuKeys
     * @return $this
     */
    public function setSendMessageToSelectedDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendMessageToSelectedDistributionListMenuKeys $sendMessageToSelectedDistributionListMenuKeys)
    {
        $this->sendMessageToSelectedDistributionListMenuKeys = $sendMessageToSelectedDistributionListMenuKeys;
        return $this;
    }

    /**
     * Getter for sendToAllGroupMembersMenuKeys
     *
     * @ElementName sendToAllGroupMembersMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToAllGroupMembersMenuKeys|null
     */
    public function getSendToAllGroupMembersMenuKeys()
    {
        return $this->sendToAllGroupMembersMenuKeys;
    }

    /**
     * Setter for sendToAllGroupMembersMenuKeys
     *
     * @ElementName sendToAllGroupMembersMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToAllGroupMembersMenuKeys|null $sendToAllGroupMembersMenuKeys
     * @return $this
     */
    public function setSendToAllGroupMembersMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToAllGroupMembersMenuKeys $sendToAllGroupMembersMenuKeys)
    {
        $this->sendToAllGroupMembersMenuKeys = $sendToAllGroupMembersMenuKeys;
        return $this;
    }

    /**
     * Getter for sendToPersonMenuKeys
     *
     * @ElementName sendToPersonMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToPersonMenuKeys|null
     */
    public function getSendToPersonMenuKeys()
    {
        return $this->sendToPersonMenuKeys;
    }

    /**
     * Setter for sendToPersonMenuKeys
     *
     * @ElementName sendToPersonMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToPersonMenuKeys|null $sendToPersonMenuKeys
     * @return $this
     */
    public function setSendToPersonMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToPersonMenuKeys $sendToPersonMenuKeys)
    {
        $this->sendToPersonMenuKeys = $sendToPersonMenuKeys;
        return $this;
    }

    /**
     * Getter for changeCurrentIntroductionOrMessageOrReplyMenuKeys
     *
     * @ElementName changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeCurrentIntroductionOrMessageOrReplyMenuKeys|null
     */
    public function getChangeCurrentIntroductionOrMessageOrReplyMenuKeys()
    {
        return $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys;
    }

    /**
     * Setter for changeCurrentIntroductionOrMessageOrReplyMenuKeys
     *
     * @ElementName changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeCurrentIntroductionOrMessageOrReplyMenuKeys|null $changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @return $this
     */
    public function setChangeCurrentIntroductionOrMessageOrReplyMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21ChangeCurrentIntroductionOrMessageOrReplyMenuKeys $changeCurrentIntroductionOrMessageOrReplyMenuKeys)
    {
        $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys = $changeCurrentIntroductionOrMessageOrReplyMenuKeys;
        return $this;
    }

    /**
     * Getter for voicePortalLoginMenuKeys
     *
     * @ElementName voicePortalLoginMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalLoginMenuKeys|null
     */
    public function getVoicePortalLoginMenuKeys()
    {
        return $this->voicePortalLoginMenuKeys;
    }

    /**
     * Setter for voicePortalLoginMenuKeys
     *
     * @ElementName voicePortalLoginMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalLoginMenuKeys|null $voicePortalLoginMenuKeys
     * @return $this
     */
    public function setVoicePortalLoginMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21VoicePortalLoginMenuKeys $voicePortalLoginMenuKeys)
    {
        $this->voicePortalLoginMenuKeys = $voicePortalLoginMenuKeys;
        return $this;
    }

    /**
     * Getter for faxMessagingMenuKeys
     *
     * @ElementName faxMessagingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21FaxMessagingMenuKeys|null
     */
    public function getFaxMessagingMenuKeys()
    {
        return $this->faxMessagingMenuKeys;
    }

    /**
     * Setter for faxMessagingMenuKeys
     *
     * @ElementName faxMessagingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21FaxMessagingMenuKeys|null $faxMessagingMenuKeys
     * @return $this
     */
    public function setFaxMessagingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21FaxMessagingMenuKeys $faxMessagingMenuKeys)
    {
        $this->faxMessagingMenuKeys = $faxMessagingMenuKeys;
        return $this;
    }

    /**
     * Getter for messageDepositMenuKeys
     *
     * @ElementName messageDepositMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21MessageDepositMenuKeys|null
     */
    public function getMessageDepositMenuKeys()
    {
        return $this->messageDepositMenuKeys;
    }

    /**
     * Setter for messageDepositMenuKeys
     *
     * @ElementName messageDepositMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21MessageDepositMenuKeys|null $messageDepositMenuKeys
     * @return $this
     */
    public function setMessageDepositMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21MessageDepositMenuKeys $messageDepositMenuKeys)
    {
        $this->messageDepositMenuKeys = $messageDepositMenuKeys;
        return $this;
    }

    /**
     * Getter for disableMessageDepositMenuKeys
     *
     * @ElementName disableMessageDepositMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21DisableMessageDepositMenuKeys|null
     */
    public function getDisableMessageDepositMenuKeys()
    {
        return $this->disableMessageDepositMenuKeys;
    }

    /**
     * Setter for disableMessageDepositMenuKeys
     *
     * @ElementName disableMessageDepositMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21DisableMessageDepositMenuKeys|null $disableMessageDepositMenuKeys
     * @return $this
     */
    public function setDisableMessageDepositMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21DisableMessageDepositMenuKeys $disableMessageDepositMenuKeys)
    {
        $this->disableMessageDepositMenuKeys = $disableMessageDepositMenuKeys;
        return $this;
    }

    /**
     * Getter for greetingOnlyForwardingDestinationMenuKeys
     *
     * @ElementName greetingOnlyForwardingDestinationMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21GreetingOnlyForwardingDestinationMenuKeys|null
     */
    public function getGreetingOnlyForwardingDestinationMenuKeys()
    {
        return $this->greetingOnlyForwardingDestinationMenuKeys;
    }

    /**
     * Setter for greetingOnlyForwardingDestinationMenuKeys
     *
     * @ElementName greetingOnlyForwardingDestinationMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21GreetingOnlyForwardingDestinationMenuKeys|null $greetingOnlyForwardingDestinationMenuKeys
     * @return $this
     */
    public function setGreetingOnlyForwardingDestinationMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21GreetingOnlyForwardingDestinationMenuKeys $greetingOnlyForwardingDestinationMenuKeys)
    {
        $this->greetingOnlyForwardingDestinationMenuKeys = $greetingOnlyForwardingDestinationMenuKeys;
        return $this;
    }

    /**
     * Getter for personalAssistantMenuKeys
     *
     * @ElementName personalAssistantMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PersonalAssistantMenuKeys|null
     */
    public function getPersonalAssistantMenuKeys()
    {
        return $this->personalAssistantMenuKeys;
    }

    /**
     * Setter for personalAssistantMenuKeys
     *
     * @ElementName personalAssistantMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PersonalAssistantMenuKeys|null $personalAssistantMenuKeys
     * @return $this
     */
    public function setPersonalAssistantMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PersonalAssistantMenuKeys $personalAssistantMenuKeys)
    {
        $this->personalAssistantMenuKeys = $personalAssistantMenuKeys;
        return $this;
    }


}

