<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16
 *
 * Modify the group's voice portal branding settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest20 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest20
 * @Groups [{"id":"bb12a3589ab4748963f28f7ac9310f70:2197","type":"sequence"}]
 */
class GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group bb12a3589ab4748963f28f7ac9310f70:2197
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group bb12a3589ab4748963f28f7ac9310f70:2197
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName voicePortalGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:2197
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    private $voicePortalGreetingSelection = null;

    /**
     * @ElementName voicePortalGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:2197
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $voicePortalGreetingFile = null;

    /**
     * @ElementName voiceMessagingGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:2197
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    private $voiceMessagingGreetingSelection = null;

    /**
     * @ElementName voiceMessagingGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     * @Optional
     * @Group bb12a3589ab4748963f28f7ac9310f70:2197
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource|null
     */
    private $voiceMessagingGreetingFile = null;

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
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for voicePortalGreetingSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     */
    public function getVoicePortalGreetingSelection()
    {
        return $this->voicePortalGreetingSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalGreetingSelection;
    }

    /**
     * Setter for voicePortalGreetingSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voicePortalGreetingSelection
     * @return $this
     */
    public function setVoicePortalGreetingSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voicePortalGreetingSelection)
    {
        $this->voicePortalGreetingSelection = $voicePortalGreetingSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalGreetingSelection()
    {
        $this->voicePortalGreetingSelection = null;
        return $this;
    }

    /**
     * Getter for voicePortalGreetingFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getVoicePortalGreetingFile()
    {
        return $this->voicePortalGreetingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalGreetingFile;
    }

    /**
     * Setter for voicePortalGreetingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $voicePortalGreetingFile
     * @return $this
     */
    public function setVoicePortalGreetingFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $voicePortalGreetingFile)
    {
        $this->voicePortalGreetingFile = $voicePortalGreetingFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalGreetingFile()
    {
        $this->voicePortalGreetingFile = null;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     */
    public function getVoiceMessagingGreetingSelection()
    {
        return $this->voiceMessagingGreetingSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGreetingSelection;
    }

    /**
     * Setter for voiceMessagingGreetingSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voiceMessagingGreetingSelection
     * @return $this
     */
    public function setVoiceMessagingGreetingSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voiceMessagingGreetingSelection)
    {
        $this->voiceMessagingGreetingSelection = $voiceMessagingGreetingSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGreetingSelection()
    {
        $this->voiceMessagingGreetingSelection = null;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource
     */
    public function getVoiceMessagingGreetingFile()
    {
        return $this->voiceMessagingGreetingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGreetingFile;
    }

    /**
     * Setter for voiceMessagingGreetingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $voiceMessagingGreetingFile
     * @return $this
     */
    public function setVoiceMessagingGreetingFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledMediaFileResource $voiceMessagingGreetingFile)
    {
        $this->voiceMessagingGreetingFile = $voiceMessagingGreetingFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGreetingFile()
    {
        $this->voiceMessagingGreetingFile = null;
        return $this;
    }


}

