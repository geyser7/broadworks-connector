<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyDNISAnnouncementRequest
 *
 * Modify a call center DNIS announcement settings.
 *         The response is either a SuccessResponse or an
 *         ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallCenterModifyDNISAnnouncementRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName dnisKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    private $dnisKey = null;

    /**
     * @ElementName playEntranceMessage
     * @var bool|null
     */
    private $playEntranceMessage = null;

    /**
     * @ElementName mandatoryEntranceMessage
     * @var bool|null
     */
    private $mandatoryEntranceMessage = null;

    /**
     * @ElementName entranceAudioMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $entranceAudioMessageSelection = null;

    /**
     * @ElementName entranceMessageAudioUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $entranceMessageAudioUrlList = null;

    /**
     * @ElementName entranceMessageAudioFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    private $entranceMessageAudioFileList = null;

    /**
     * @ElementName entranceVideoMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $entranceVideoMessageSelection = null;

    /**
     * @ElementName entranceMessageVideoUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $entranceMessageVideoUrlList = null;

    /**
     * @ElementName entranceMessageVideoFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    private $entranceMessageVideoFileList = null;

    /**
     * @ElementName playPeriodicComfortMessage
     * @var bool|null
     */
    private $playPeriodicComfortMessage = null;

    /**
     * @ElementName timeBetweenComfortMessagesSeconds
     * @var int|null
     */
    private $timeBetweenComfortMessagesSeconds = null;

    /**
     * @ElementName periodicComfortAudioMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $periodicComfortAudioMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageAudioUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $periodicComfortMessageAudioUrlList = null;

    /**
     * @ElementName periodicComfortMessageAudioFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    private $periodicComfortMessageAudioFileList = null;

    /**
     * @ElementName periodicComfortVideoMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $periodicComfortVideoMessageSelection = null;

    /**
     * @ElementName periodicComfortMessageVideoUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $periodicComfortMessageVideoUrlList = null;

    /**
     * @ElementName periodicComfortMessageVideoFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    private $periodicComfortMessageVideoFileList = null;

    /**
     * @ElementName enableMediaOnHoldForQueuedCalls
     * @var bool|null
     */
    private $enableMediaOnHoldForQueuedCalls = null;

    /**
     * @ElementName mediaOnHoldSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17|null
     */
    private $mediaOnHoldSource = null;

    /**
     * @ElementName playWhisperMessage
     * @var bool|null
     */
    private $playWhisperMessage = null;

    /**
     * @ElementName whisperAudioMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $whisperAudioMessageSelection = null;

    /**
     * @ElementName whisperMessageAudioUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $whisperMessageAudioUrlList = null;

    /**
     * @ElementName whisperMessageAudioFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    private $whisperMessageAudioFileList = null;

    /**
     * @ElementName whisperVideoMessageSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $whisperVideoMessageSelection = null;

    /**
     * @ElementName whisperMessageVideoUrlList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    private $whisperMessageVideoUrlList = null;

    /**
     * @ElementName whisperMessageVideoFileList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    private $whisperMessageVideoFileList = null;

    /**
     * @ElementName estimatedWaitMessageOptionsModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsModify|null
     */
    private $estimatedWaitMessageOptionsModify = null;

    /**
     * Getter for dnisKey
     *
     * @ElementName dnisKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    public function getDnisKey()
    {
        return $this->dnisKey;
    }

    /**
     * Setter for dnisKey
     *
     * @ElementName dnisKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null $dnisKey
     * @return $this
     */
    public function setDnisKey(\CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey)
    {
        $this->dnisKey = $dnisKey;
        return $this;
    }

    /**
     * Getter for playEntranceMessage
     *
     * @ElementName playEntranceMessage
     * @return bool|null
     */
    public function getPlayEntranceMessage()
    {
        return $this->playEntranceMessage;
    }

    /**
     * Setter for playEntranceMessage
     *
     * @ElementName playEntranceMessage
     * @param bool|null $playEntranceMessage
     * @return $this
     */
    public function setPlayEntranceMessage($playEntranceMessage)
    {
        $this->playEntranceMessage = $playEntranceMessage;
        return $this;
    }

    /**
     * Getter for mandatoryEntranceMessage
     *
     * @ElementName mandatoryEntranceMessage
     * @return bool|null
     */
    public function getMandatoryEntranceMessage()
    {
        return $this->mandatoryEntranceMessage;
    }

    /**
     * Setter for mandatoryEntranceMessage
     *
     * @ElementName mandatoryEntranceMessage
     * @param bool|null $mandatoryEntranceMessage
     * @return $this
     */
    public function setMandatoryEntranceMessage($mandatoryEntranceMessage)
    {
        $this->mandatoryEntranceMessage = $mandatoryEntranceMessage;
        return $this;
    }

    /**
     * Getter for entranceAudioMessageSelection
     *
     * @ElementName entranceAudioMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getEntranceAudioMessageSelection()
    {
        return $this->entranceAudioMessageSelection;
    }

    /**
     * Setter for entranceAudioMessageSelection
     *
     * @ElementName entranceAudioMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $entranceAudioMessageSelection
     * @return $this
     */
    public function setEntranceAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $entranceAudioMessageSelection)
    {
        $this->entranceAudioMessageSelection = $entranceAudioMessageSelection;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioUrlList
     *
     * @ElementName entranceMessageAudioUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getEntranceMessageAudioUrlList()
    {
        return $this->entranceMessageAudioUrlList;
    }

    /**
     * Setter for entranceMessageAudioUrlList
     *
     * @ElementName entranceMessageAudioUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $entranceMessageAudioUrlList
     * @return $this
     */
    public function setEntranceMessageAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $entranceMessageAudioUrlList)
    {
        $this->entranceMessageAudioUrlList = $entranceMessageAudioUrlList;
        return $this;
    }

    /**
     * Getter for entranceMessageAudioFileList
     *
     * @ElementName entranceMessageAudioFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    public function getEntranceMessageAudioFileList()
    {
        return $this->entranceMessageAudioFileList;
    }

    /**
     * Setter for entranceMessageAudioFileList
     *
     * @ElementName entranceMessageAudioFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null $entranceMessageAudioFileList
     * @return $this
     */
    public function setEntranceMessageAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $entranceMessageAudioFileList)
    {
        $this->entranceMessageAudioFileList = $entranceMessageAudioFileList;
        return $this;
    }

    /**
     * Getter for entranceVideoMessageSelection
     *
     * @ElementName entranceVideoMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getEntranceVideoMessageSelection()
    {
        return $this->entranceVideoMessageSelection;
    }

    /**
     * Setter for entranceVideoMessageSelection
     *
     * @ElementName entranceVideoMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $entranceVideoMessageSelection
     * @return $this
     */
    public function setEntranceVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $entranceVideoMessageSelection)
    {
        $this->entranceVideoMessageSelection = $entranceVideoMessageSelection;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoUrlList
     *
     * @ElementName entranceMessageVideoUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getEntranceMessageVideoUrlList()
    {
        return $this->entranceMessageVideoUrlList;
    }

    /**
     * Setter for entranceMessageVideoUrlList
     *
     * @ElementName entranceMessageVideoUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $entranceMessageVideoUrlList
     * @return $this
     */
    public function setEntranceMessageVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $entranceMessageVideoUrlList)
    {
        $this->entranceMessageVideoUrlList = $entranceMessageVideoUrlList;
        return $this;
    }

    /**
     * Getter for entranceMessageVideoFileList
     *
     * @ElementName entranceMessageVideoFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    public function getEntranceMessageVideoFileList()
    {
        return $this->entranceMessageVideoFileList;
    }

    /**
     * Setter for entranceMessageVideoFileList
     *
     * @ElementName entranceMessageVideoFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null $entranceMessageVideoFileList
     * @return $this
     */
    public function setEntranceMessageVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $entranceMessageVideoFileList)
    {
        $this->entranceMessageVideoFileList = $entranceMessageVideoFileList;
        return $this;
    }

    /**
     * Getter for playPeriodicComfortMessage
     *
     * @ElementName playPeriodicComfortMessage
     * @return bool|null
     */
    public function getPlayPeriodicComfortMessage()
    {
        return $this->playPeriodicComfortMessage;
    }

    /**
     * Setter for playPeriodicComfortMessage
     *
     * @ElementName playPeriodicComfortMessage
     * @param bool|null $playPeriodicComfortMessage
     * @return $this
     */
    public function setPlayPeriodicComfortMessage($playPeriodicComfortMessage)
    {
        $this->playPeriodicComfortMessage = $playPeriodicComfortMessage;
        return $this;
    }

    /**
     * Getter for timeBetweenComfortMessagesSeconds
     *
     * @ElementName timeBetweenComfortMessagesSeconds
     * @return int|null
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return $this->timeBetweenComfortMessagesSeconds;
    }

    /**
     * Setter for timeBetweenComfortMessagesSeconds
     *
     * @ElementName timeBetweenComfortMessagesSeconds
     * @param int|null $timeBetweenComfortMessagesSeconds
     * @return $this
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds)
    {
        $this->timeBetweenComfortMessagesSeconds = $timeBetweenComfortMessagesSeconds;
        return $this;
    }

    /**
     * Getter for periodicComfortAudioMessageSelection
     *
     * @ElementName periodicComfortAudioMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getPeriodicComfortAudioMessageSelection()
    {
        return $this->periodicComfortAudioMessageSelection;
    }

    /**
     * Setter for periodicComfortAudioMessageSelection
     *
     * @ElementName periodicComfortAudioMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $periodicComfortAudioMessageSelection
     * @return $this
     */
    public function setPeriodicComfortAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $periodicComfortAudioMessageSelection)
    {
        $this->periodicComfortAudioMessageSelection = $periodicComfortAudioMessageSelection;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioUrlList
     *
     * @ElementName periodicComfortMessageAudioUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getPeriodicComfortMessageAudioUrlList()
    {
        return $this->periodicComfortMessageAudioUrlList;
    }

    /**
     * Setter for periodicComfortMessageAudioUrlList
     *
     * @ElementName periodicComfortMessageAudioUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $periodicComfortMessageAudioUrlList
     * @return $this
     */
    public function setPeriodicComfortMessageAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $periodicComfortMessageAudioUrlList)
    {
        $this->periodicComfortMessageAudioUrlList = $periodicComfortMessageAudioUrlList;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageAudioFileList
     *
     * @ElementName periodicComfortMessageAudioFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    public function getPeriodicComfortMessageAudioFileList()
    {
        return $this->periodicComfortMessageAudioFileList;
    }

    /**
     * Setter for periodicComfortMessageAudioFileList
     *
     * @ElementName periodicComfortMessageAudioFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null $periodicComfortMessageAudioFileList
     * @return $this
     */
    public function setPeriodicComfortMessageAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $periodicComfortMessageAudioFileList)
    {
        $this->periodicComfortMessageAudioFileList = $periodicComfortMessageAudioFileList;
        return $this;
    }

    /**
     * Getter for periodicComfortVideoMessageSelection
     *
     * @ElementName periodicComfortVideoMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getPeriodicComfortVideoMessageSelection()
    {
        return $this->periodicComfortVideoMessageSelection;
    }

    /**
     * Setter for periodicComfortVideoMessageSelection
     *
     * @ElementName periodicComfortVideoMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $periodicComfortVideoMessageSelection
     * @return $this
     */
    public function setPeriodicComfortVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $periodicComfortVideoMessageSelection)
    {
        $this->periodicComfortVideoMessageSelection = $periodicComfortVideoMessageSelection;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoUrlList
     *
     * @ElementName periodicComfortMessageVideoUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getPeriodicComfortMessageVideoUrlList()
    {
        return $this->periodicComfortMessageVideoUrlList;
    }

    /**
     * Setter for periodicComfortMessageVideoUrlList
     *
     * @ElementName periodicComfortMessageVideoUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $periodicComfortMessageVideoUrlList
     * @return $this
     */
    public function setPeriodicComfortMessageVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $periodicComfortMessageVideoUrlList)
    {
        $this->periodicComfortMessageVideoUrlList = $periodicComfortMessageVideoUrlList;
        return $this;
    }

    /**
     * Getter for periodicComfortMessageVideoFileList
     *
     * @ElementName periodicComfortMessageVideoFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    public function getPeriodicComfortMessageVideoFileList()
    {
        return $this->periodicComfortMessageVideoFileList;
    }

    /**
     * Setter for periodicComfortMessageVideoFileList
     *
     * @ElementName periodicComfortMessageVideoFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null $periodicComfortMessageVideoFileList
     * @return $this
     */
    public function setPeriodicComfortMessageVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $periodicComfortMessageVideoFileList)
    {
        $this->periodicComfortMessageVideoFileList = $periodicComfortMessageVideoFileList;
        return $this;
    }

    /**
     * Getter for enableMediaOnHoldForQueuedCalls
     *
     * @ElementName enableMediaOnHoldForQueuedCalls
     * @return bool|null
     */
    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return $this->enableMediaOnHoldForQueuedCalls;
    }

    /**
     * Setter for enableMediaOnHoldForQueuedCalls
     *
     * @ElementName enableMediaOnHoldForQueuedCalls
     * @param bool|null $enableMediaOnHoldForQueuedCalls
     * @return $this
     */
    public function setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls)
    {
        $this->enableMediaOnHoldForQueuedCalls = $enableMediaOnHoldForQueuedCalls;
        return $this;
    }

    /**
     * Getter for mediaOnHoldSource
     *
     * @ElementName mediaOnHoldSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17|null
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @ElementName mediaOnHoldSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17|null $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource)
    {
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        return $this;
    }

    /**
     * Getter for playWhisperMessage
     *
     * @ElementName playWhisperMessage
     * @return bool|null
     */
    public function getPlayWhisperMessage()
    {
        return $this->playWhisperMessage;
    }

    /**
     * Setter for playWhisperMessage
     *
     * @ElementName playWhisperMessage
     * @param bool|null $playWhisperMessage
     * @return $this
     */
    public function setPlayWhisperMessage($playWhisperMessage)
    {
        $this->playWhisperMessage = $playWhisperMessage;
        return $this;
    }

    /**
     * Getter for whisperAudioMessageSelection
     *
     * @ElementName whisperAudioMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getWhisperAudioMessageSelection()
    {
        return $this->whisperAudioMessageSelection;
    }

    /**
     * Setter for whisperAudioMessageSelection
     *
     * @ElementName whisperAudioMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $whisperAudioMessageSelection
     * @return $this
     */
    public function setWhisperAudioMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $whisperAudioMessageSelection)
    {
        $this->whisperAudioMessageSelection = $whisperAudioMessageSelection;
        return $this;
    }

    /**
     * Getter for whisperMessageAudioUrlList
     *
     * @ElementName whisperMessageAudioUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getWhisperMessageAudioUrlList()
    {
        return $this->whisperMessageAudioUrlList;
    }

    /**
     * Setter for whisperMessageAudioUrlList
     *
     * @ElementName whisperMessageAudioUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $whisperMessageAudioUrlList
     * @return $this
     */
    public function setWhisperMessageAudioUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $whisperMessageAudioUrlList)
    {
        $this->whisperMessageAudioUrlList = $whisperMessageAudioUrlList;
        return $this;
    }

    /**
     * Getter for whisperMessageAudioFileList
     *
     * @ElementName whisperMessageAudioFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    public function getWhisperMessageAudioFileList()
    {
        return $this->whisperMessageAudioFileList;
    }

    /**
     * Setter for whisperMessageAudioFileList
     *
     * @ElementName whisperMessageAudioFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null $whisperMessageAudioFileList
     * @return $this
     */
    public function setWhisperMessageAudioFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $whisperMessageAudioFileList)
    {
        $this->whisperMessageAudioFileList = $whisperMessageAudioFileList;
        return $this;
    }

    /**
     * Getter for whisperVideoMessageSelection
     *
     * @ElementName whisperVideoMessageSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getWhisperVideoMessageSelection()
    {
        return $this->whisperVideoMessageSelection;
    }

    /**
     * Setter for whisperVideoMessageSelection
     *
     * @ElementName whisperVideoMessageSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $whisperVideoMessageSelection
     * @return $this
     */
    public function setWhisperVideoMessageSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $whisperVideoMessageSelection)
    {
        $this->whisperVideoMessageSelection = $whisperVideoMessageSelection;
        return $this;
    }

    /**
     * Getter for whisperMessageVideoUrlList
     *
     * @ElementName whisperMessageVideoUrlList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null
     */
    public function getWhisperMessageVideoUrlList()
    {
        return $this->whisperMessageVideoUrlList;
    }

    /**
     * Setter for whisperMessageVideoUrlList
     *
     * @ElementName whisperMessageVideoUrlList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify|null $whisperMessageVideoUrlList
     * @return $this
     */
    public function setWhisperMessageVideoUrlList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementURLListModify $whisperMessageVideoUrlList)
    {
        $this->whisperMessageVideoUrlList = $whisperMessageVideoUrlList;
        return $this;
    }

    /**
     * Getter for whisperMessageVideoFileList
     *
     * @ElementName whisperMessageVideoFileList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null
     */
    public function getWhisperMessageVideoFileList()
    {
        return $this->whisperMessageVideoFileList;
    }

    /**
     * Setter for whisperMessageVideoFileList
     *
     * @ElementName whisperMessageVideoFileList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify|null $whisperMessageVideoFileList
     * @return $this
     */
    public function setWhisperMessageVideoFileList(\CWM\BroadWorksConnector\Ocip\Models\CallCenterAnnouncementFileListModify $whisperMessageVideoFileList)
    {
        $this->whisperMessageVideoFileList = $whisperMessageVideoFileList;
        return $this;
    }

    /**
     * Getter for estimatedWaitMessageOptionsModify
     *
     * @ElementName estimatedWaitMessageOptionsModify
     * @return \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsModify|null
     */
    public function getEstimatedWaitMessageOptionsModify()
    {
        return $this->estimatedWaitMessageOptionsModify;
    }

    /**
     * Setter for estimatedWaitMessageOptionsModify
     *
     * @ElementName estimatedWaitMessageOptionsModify
     * @param \CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsModify|null $estimatedWaitMessageOptionsModify
     * @return $this
     */
    public function setEstimatedWaitMessageOptionsModify(\CWM\BroadWorksConnector\Ocip\Models\EstimatedWaitMessageOptionsModify $estimatedWaitMessageOptionsModify)
    {
        $this->estimatedWaitMessageOptionsModify = $estimatedWaitMessageOptionsModify;
        return $this;
    }


}

