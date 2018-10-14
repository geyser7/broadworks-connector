<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16
 *
 * Response to the GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16.
 *         
 *         Replaced by: GroupVoiceMessagingGroupGetVoicePortalBrandingResponse20 in
 * AS data mode
 *
 * @see GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16
 * @see GroupVoiceMessagingGroupGetVoicePortalBrandingResponse20
 */
class GroupVoiceMessagingGroupGetVoicePortalBrandingResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName voicePortalGreetingSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    private $voicePortalGreetingSelection = null;

    /**
     * @ElementName voicePortalGreetingFileDescription
     * @var string|null
     */
    private $voicePortalGreetingFileDescription = null;

    /**
     * @ElementName voicePortalGreetingMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $voicePortalGreetingMediaType = null;

    /**
     * @ElementName voiceMessagingGreetingSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    private $voiceMessagingGreetingSelection = null;

    /**
     * @ElementName voiceMessagingGreetingFileDescription
     * @var string|null
     */
    private $voiceMessagingGreetingFileDescription = null;

    /**
     * @ElementName voiceMessagingGreetingMediaType
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    private $voiceMessagingGreetingMediaType = null;

    /**
     * Getter for voicePortalGreetingSelection
     *
     * @ElementName voicePortalGreetingSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    public function getVoicePortalGreetingSelection()
    {
        return $this->voicePortalGreetingSelection;
    }

    /**
     * Setter for voicePortalGreetingSelection
     *
     * @ElementName voicePortalGreetingSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null $voicePortalGreetingSelection
     * @return $this
     */
    public function setVoicePortalGreetingSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voicePortalGreetingSelection)
    {
        $this->voicePortalGreetingSelection = $voicePortalGreetingSelection;
        return $this;
    }

    /**
     * Getter for voicePortalGreetingFileDescription
     *
     * @ElementName voicePortalGreetingFileDescription
     * @return string|null
     */
    public function getVoicePortalGreetingFileDescription()
    {
        return $this->voicePortalGreetingFileDescription;
    }

    /**
     * Setter for voicePortalGreetingFileDescription
     *
     * @ElementName voicePortalGreetingFileDescription
     * @param string|null $voicePortalGreetingFileDescription
     * @return $this
     */
    public function setVoicePortalGreetingFileDescription($voicePortalGreetingFileDescription)
    {
        $this->voicePortalGreetingFileDescription = $voicePortalGreetingFileDescription;
        return $this;
    }

    /**
     * Getter for voicePortalGreetingMediaType
     *
     * @ElementName voicePortalGreetingMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getVoicePortalGreetingMediaType()
    {
        return $this->voicePortalGreetingMediaType;
    }

    /**
     * Setter for voicePortalGreetingMediaType
     *
     * @ElementName voicePortalGreetingMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $voicePortalGreetingMediaType
     * @return $this
     */
    public function setVoicePortalGreetingMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voicePortalGreetingMediaType)
    {
        $this->voicePortalGreetingMediaType = $voicePortalGreetingMediaType;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingSelection
     *
     * @ElementName voiceMessagingGreetingSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    public function getVoiceMessagingGreetingSelection()
    {
        return $this->voiceMessagingGreetingSelection;
    }

    /**
     * Setter for voiceMessagingGreetingSelection
     *
     * @ElementName voiceMessagingGreetingSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null $voiceMessagingGreetingSelection
     * @return $this
     */
    public function setVoiceMessagingGreetingSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voiceMessagingGreetingSelection)
    {
        $this->voiceMessagingGreetingSelection = $voiceMessagingGreetingSelection;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingFileDescription
     *
     * @ElementName voiceMessagingGreetingFileDescription
     * @return string|null
     */
    public function getVoiceMessagingGreetingFileDescription()
    {
        return $this->voiceMessagingGreetingFileDescription;
    }

    /**
     * Setter for voiceMessagingGreetingFileDescription
     *
     * @ElementName voiceMessagingGreetingFileDescription
     * @param string|null $voiceMessagingGreetingFileDescription
     * @return $this
     */
    public function setVoiceMessagingGreetingFileDescription($voiceMessagingGreetingFileDescription)
    {
        $this->voiceMessagingGreetingFileDescription = $voiceMessagingGreetingFileDescription;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingMediaType
     *
     * @ElementName voiceMessagingGreetingMediaType
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null
     */
    public function getVoiceMessagingGreetingMediaType()
    {
        return $this->voiceMessagingGreetingMediaType;
    }

    /**
     * Setter for voiceMessagingGreetingMediaType
     *
     * @ElementName voiceMessagingGreetingMediaType
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaFileType|null $voiceMessagingGreetingMediaType
     * @return $this
     */
    public function setVoiceMessagingGreetingMediaType(\CWM\BroadWorksConnector\Ocip\Models\MediaFileType $voiceMessagingGreetingMediaType)
    {
        $this->voiceMessagingGreetingMediaType = $voiceMessagingGreetingMediaType;
        return $this;
    }


}

