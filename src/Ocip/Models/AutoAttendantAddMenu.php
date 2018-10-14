<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantAddMenu
 *
 * The configuration of the automated receptionist greeting
 *         prompt and dialing menu to be used during after business hours.
 */
class AutoAttendantAddMenu
{

    /**
     * @ElementName announcementSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    private $announcementSelection = null;

    /**
     * @ElementName audioFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $audioFile = null;

    /**
     * @ElementName videoFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $videoFile = null;

    /**
     * @ElementName enableFirstMenuLevelExtensionDialing
     * @var bool|null
     */
    private $enableFirstMenuLevelExtensionDialing = null;

    /**
     * @ElementName keyConfiguration
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfiguration[]
     */
    private $keyConfiguration = array(
        
    );

    /**
     * Getter for announcementSelection
     *
     * @ElementName announcementSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    public function getAnnouncementSelection()
    {
        return $this->announcementSelection;
    }

    /**
     * Setter for announcementSelection
     *
     * @ElementName announcementSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null $announcementSelection
     * @return $this
     */
    public function setAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $announcementSelection)
    {
        $this->announcementSelection = $announcementSelection;
        return $this;
    }

    /**
     * Getter for audioFile
     *
     * @ElementName audioFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * Setter for audioFile
     *
     * @ElementName audioFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null $audioFile
     * @return $this
     */
    public function setAudioFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $audioFile)
    {
        $this->audioFile = $audioFile;
        return $this;
    }

    /**
     * Getter for videoFile
     *
     * @ElementName videoFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * Setter for videoFile
     *
     * @ElementName videoFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null $videoFile
     * @return $this
     */
    public function setVideoFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $videoFile)
    {
        $this->videoFile = $videoFile;
        return $this;
    }

    /**
     * Getter for enableFirstMenuLevelExtensionDialing
     *
     * @ElementName enableFirstMenuLevelExtensionDialing
     * @return bool|null
     */
    public function getEnableFirstMenuLevelExtensionDialing()
    {
        return $this->enableFirstMenuLevelExtensionDialing;
    }

    /**
     * Setter for enableFirstMenuLevelExtensionDialing
     *
     * @ElementName enableFirstMenuLevelExtensionDialing
     * @param bool|null $enableFirstMenuLevelExtensionDialing
     * @return $this
     */
    public function setEnableFirstMenuLevelExtensionDialing($enableFirstMenuLevelExtensionDialing)
    {
        $this->enableFirstMenuLevelExtensionDialing = $enableFirstMenuLevelExtensionDialing;
        return $this;
    }

    /**
     * Getter for keyConfiguration
     *
     * @ElementName keyConfiguration
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfiguration[]
     */
    public function getKeyConfiguration()
    {
        return $this->keyConfiguration;
    }

    /**
     * Setter for keyConfiguration
     *
     * @ElementName keyConfiguration
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfiguration[] $keyConfiguration
     * @return $this
     */
    public function setKeyConfiguration(array $keyConfiguration)
    {
        $this->keyConfiguration = $keyConfiguration;
        return $this;
    }

    /**
     * Adder for keyConfiguration
     *
     * @ElementName keyConfiguration
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfiguration $keyConfiguration
     * @return $this
     */
    public function addKeyConfiguration($keyConfiguration)
    {
        $this->keyConfiguration []= $keyConfiguration;
        return $this;
    }


}

