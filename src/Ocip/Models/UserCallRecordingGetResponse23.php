<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallRecordingGetResponse23
 *
 * Response to the UserCallRecordingGetRequest23.
 *         The response contains the user's Call Recording option information.
 *         
 *         The following parameters are not returned for service instance:
 *           - pauseResumeNotification
 *           - enableCallRecordingAnnouncement
 *           - enableRecordCallRepeatWarningTone
 *           - recordCallRepeatWarningToneTimerSeconds
 *           
 *         The enableVoiceMailRecording parameter is only returned if the Voice
 *         Messaging User service is assigned to the user.  This applies to both
 *         users and service instances.
 *         
 *         The recordingOption and enableCallRecordingAnnouncement which elements can
 *         only be modified by a System or a Provisioning administrator when
 *         restrictCallRecordingProvisioningAccess system param is set to true. Both the element
 *         values will be ignored when group admin or lower runs this.
 *         The following elements are only used in AS data mode and not returned in XS data mode:         
 *            mediaStream
 *
 * @see UserCallRecordingGetRequest23
 * @Groups [{"id":"9741e074fbfeb4c7312bfa4dfbaee3d3:452","type":"sequence"}]
 */
class UserCallRecordingGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName recordingOption
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecordingOption20
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:452
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecordingOption20|null
     */
    protected $recordingOption = null;

    /**
     * @ElementName pauseResumeNotification
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RecordingPauseResumeNotificationType
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:452
     * @var \CWM\BroadWorksConnector\Ocip\Models\RecordingPauseResumeNotificationType|null
     */
    protected $pauseResumeNotification = null;

    /**
     * @ElementName enableCallRecordingAnnouncement
     * @Type bool
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:452
     * @var bool|null
     */
    protected $enableCallRecordingAnnouncement = null;

    /**
     * @ElementName enableRecordCallRepeatWarningTone
     * @Type bool
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:452
     * @var bool|null
     */
    protected $enableRecordCallRepeatWarningTone = null;

    /**
     * @ElementName recordCallRepeatWarningToneTimerSeconds
     * @Type int
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:452
     * @MinInclusive 10
     * @MaxInclusive 1800
     * @var int|null
     */
    protected $recordCallRepeatWarningToneTimerSeconds = null;

    /**
     * @ElementName enableVoiceMailRecording
     * @Type bool
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:452
     * @var bool|null
     */
    protected $enableVoiceMailRecording = null;

    /**
     * @ElementName mediaStream
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaStream
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:452
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaStream|null
     */
    protected $mediaStream = null;

    /**
     * Getter for recordingOption
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecordingOption20
     */
    public function getRecordingOption()
    {
        return $this->recordingOption instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordingOption;
    }

    /**
     * Setter for recordingOption
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecordingOption20 $recordingOption
     * @return $this
     */
    public function setRecordingOption(\CWM\BroadWorksConnector\Ocip\Models\RecordingOption20 $recordingOption)
    {
        $this->recordingOption = $recordingOption;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecordingOption()
    {
        $this->recordingOption = null;
        return $this;
    }

    /**
     * Getter for pauseResumeNotification
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RecordingPauseResumeNotificationType
     */
    public function getPauseResumeNotification()
    {
        return $this->pauseResumeNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pauseResumeNotification;
    }

    /**
     * Setter for pauseResumeNotification
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RecordingPauseResumeNotificationType $pauseResumeNotification
     * @return $this
     */
    public function setPauseResumeNotification(\CWM\BroadWorksConnector\Ocip\Models\RecordingPauseResumeNotificationType $pauseResumeNotification)
    {
        $this->pauseResumeNotification = $pauseResumeNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPauseResumeNotification()
    {
        $this->pauseResumeNotification = null;
        return $this;
    }

    /**
     * Getter for enableCallRecordingAnnouncement
     *
     * @return bool
     */
    public function getEnableCallRecordingAnnouncement()
    {
        return $this->enableCallRecordingAnnouncement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallRecordingAnnouncement;
    }

    /**
     * Setter for enableCallRecordingAnnouncement
     *
     * @param bool $enableCallRecordingAnnouncement
     * @return $this
     */
    public function setEnableCallRecordingAnnouncement($enableCallRecordingAnnouncement)
    {
        $this->enableCallRecordingAnnouncement = $enableCallRecordingAnnouncement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallRecordingAnnouncement()
    {
        $this->enableCallRecordingAnnouncement = null;
        return $this;
    }

    /**
     * Getter for enableRecordCallRepeatWarningTone
     *
     * @return bool
     */
    public function getEnableRecordCallRepeatWarningTone()
    {
        return $this->enableRecordCallRepeatWarningTone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableRecordCallRepeatWarningTone;
    }

    /**
     * Setter for enableRecordCallRepeatWarningTone
     *
     * @param bool $enableRecordCallRepeatWarningTone
     * @return $this
     */
    public function setEnableRecordCallRepeatWarningTone($enableRecordCallRepeatWarningTone)
    {
        $this->enableRecordCallRepeatWarningTone = $enableRecordCallRepeatWarningTone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableRecordCallRepeatWarningTone()
    {
        $this->enableRecordCallRepeatWarningTone = null;
        return $this;
    }

    /**
     * Getter for recordCallRepeatWarningToneTimerSeconds
     *
     * @return int
     */
    public function getRecordCallRepeatWarningToneTimerSeconds()
    {
        return $this->recordCallRepeatWarningToneTimerSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordCallRepeatWarningToneTimerSeconds;
    }

    /**
     * Setter for recordCallRepeatWarningToneTimerSeconds
     *
     * @param int $recordCallRepeatWarningToneTimerSeconds
     * @return $this
     */
    public function setRecordCallRepeatWarningToneTimerSeconds($recordCallRepeatWarningToneTimerSeconds)
    {
        $this->recordCallRepeatWarningToneTimerSeconds = $recordCallRepeatWarningToneTimerSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecordCallRepeatWarningToneTimerSeconds()
    {
        $this->recordCallRepeatWarningToneTimerSeconds = null;
        return $this;
    }

    /**
     * Getter for enableVoiceMailRecording
     *
     * @return bool
     */
    public function getEnableVoiceMailRecording()
    {
        return $this->enableVoiceMailRecording instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableVoiceMailRecording;
    }

    /**
     * Setter for enableVoiceMailRecording
     *
     * @param bool $enableVoiceMailRecording
     * @return $this
     */
    public function setEnableVoiceMailRecording($enableVoiceMailRecording)
    {
        $this->enableVoiceMailRecording = $enableVoiceMailRecording;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableVoiceMailRecording()
    {
        $this->enableVoiceMailRecording = null;
        return $this;
    }

    /**
     * Getter for mediaStream
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaStream
     */
    public function getMediaStream()
    {
        return $this->mediaStream instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaStream;
    }

    /**
     * Setter for mediaStream
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaStream $mediaStream
     * @return $this
     */
    public function setMediaStream(\CWM\BroadWorksConnector\Ocip\Models\MediaStream $mediaStream)
    {
        $this->mediaStream = $mediaStream;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaStream()
    {
        $this->mediaStream = null;
        return $this;
    }


}

