<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterprisePreAlertingAnnouncementModifyRequest
 *
 * Modify the enterprise level pre-alerting service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6165f2b4cd549de71fe8f3171488fdd8:92","type":"sequence"}]
 */
class EnterprisePreAlertingAnnouncementModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:92
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName announcementInterruption
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:92
     * @var \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt|null
     */
    protected $announcementInterruption = null;

    /**
     * @ElementName interruptionDigitSequence
     * @Type string
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:92
     * @MinLength 1
     * @MaxLength 10
     * @var string|null
     */
    protected $interruptionDigitSequence = null;

    /**
     * @ElementName audioSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:92
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $audioSelection = null;

    /**
     * @ElementName audioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:92
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    protected $audioFile = null;

    /**
     * @ElementName videoSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:92
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection|null
     */
    protected $videoSelection = null;

    /**
     * @ElementName videoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     * @Optional
     * @Group 6165f2b4cd549de71fe8f3171488fdd8:92
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource|null
     */
    protected $videoFile = null;

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
     * Getter for announcementInterruption
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt
     */
    public function getAnnouncementInterruption()
    {
        return $this->announcementInterruption instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementInterruption;
    }

    /**
     * Setter for announcementInterruption
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt $announcementInterruption
     * @return $this
     */
    public function setAnnouncementInterruption(\CWM\BroadWorksConnector\Ocip\Models\PreAlertingAnnouncementInterrupt $announcementInterruption)
    {
        $this->announcementInterruption = $announcementInterruption;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementInterruption()
    {
        $this->announcementInterruption = null;
        return $this;
    }

    /**
     * Getter for interruptionDigitSequence
     *
     * @return string
     */
    public function getInterruptionDigitSequence()
    {
        return $this->interruptionDigitSequence instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interruptionDigitSequence;
    }

    /**
     * Setter for interruptionDigitSequence
     *
     * @param string $interruptionDigitSequence
     * @return $this
     */
    public function setInterruptionDigitSequence($interruptionDigitSequence)
    {
        $this->interruptionDigitSequence = $interruptionDigitSequence;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInterruptionDigitSequence()
    {
        $this->interruptionDigitSequence = null;
        return $this;
    }

    /**
     * Getter for audioSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getAudioSelection()
    {
        return $this->audioSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioSelection;
    }

    /**
     * Setter for audioSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $audioSelection
     * @return $this
     */
    public function setAudioSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $audioSelection)
    {
        $this->audioSelection = $audioSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioSelection()
    {
        $this->audioSelection = null;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getAudioFile()
    {
        return $this->audioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAudioFile()
    {
        $this->audioFile = null;
        return $this;
    }

    /**
     * Getter for videoSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection
     */
    public function getVideoSelection()
    {
        return $this->videoSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoSelection;
    }

    /**
     * Setter for videoSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $videoSelection
     * @return $this
     */
    public function setVideoSelection(\CWM\BroadWorksConnector\Ocip\Models\ExtendedFileResourceSelection $videoSelection)
    {
        $this->videoSelection = $videoSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoSelection()
    {
        $this->videoSelection = null;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource
     */
    public function getVideoFile()
    {
        return $this->videoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\ExtendedMediaFileResource $videoFile)
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVideoFile()
    {
        $this->videoFile = null;
        return $this;
    }


}

