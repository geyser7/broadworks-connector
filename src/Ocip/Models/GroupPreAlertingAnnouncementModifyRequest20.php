<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPreAlertingAnnouncementModifyRequest20
 *
 * Modify the group level pre-alerting service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupPreAlertingAnnouncementModifyRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName announcementInterruption
     * @var \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt|null
     */
    private $announcementInterruption = null;

    /**
     * @ElementName interruptionDigitSequence
     * @var string|null
     */
    private $interruptionDigitSequence = null;

    /**
     * @ElementName audioSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $audioSelection = null;

    /**
     * @ElementName audioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    private $videoSelection = null;

    /**
     * @ElementName videoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null
     */
    private $videoFile = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for announcementInterruption
     *
     * @ElementName announcementInterruption
     * @return \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt|null
     */
    public function getAnnouncementInterruption()
    {
        return $this->announcementInterruption;
    }

    /**
     * Setter for announcementInterruption
     *
     * @ElementName announcementInterruption
     * @param \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt|null $announcementInterruption
     * @return $this
     */
    public function setAnnouncementInterruption(\CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt $announcementInterruption)
    {
        $this->announcementInterruption = $announcementInterruption;
        return $this;
    }

    /**
     * Getter for interruptionDigitSequence
     *
     * @ElementName interruptionDigitSequence
     * @return string|null
     */
    public function getInterruptionDigitSequence()
    {
        return $this->interruptionDigitSequence;
    }

    /**
     * Setter for interruptionDigitSequence
     *
     * @ElementName interruptionDigitSequence
     * @param string|null $interruptionDigitSequence
     * @return $this
     */
    public function setInterruptionDigitSequence($interruptionDigitSequence)
    {
        $this->interruptionDigitSequence = $interruptionDigitSequence;
        return $this;
    }

    /**
     * Getter for audioSelection
     *
     * @ElementName audioSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getAudioSelection()
    {
        return $this->audioSelection;
    }

    /**
     * Setter for audioSelection
     *
     * @ElementName audioSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $audioSelection
     * @return $this
     */
    public function setAudioSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $audioSelection)
    {
        $this->audioSelection = $audioSelection;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @ElementName audioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @ElementName audioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20 $audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * Getter for videoSelection
     *
     * @ElementName videoSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    public function getVideoSelection()
    {
        return $this->videoSelection;
    }

    /**
     * Setter for videoSelection
     *
     * @ElementName videoSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null $videoSelection
     * @return $this
     */
    public function setVideoSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $videoSelection)
    {
        $this->videoSelection = $videoSelection;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @ElementName videoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @ElementName videoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20|null $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource20 $videoFile)
    {
        $this->videoFile = $videoFile;
        return $this;
    }


}

