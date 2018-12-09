<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse14ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
 *
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:29593","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse14ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
{

    /**
     * @ElementName endRecording
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:29593
     * @var string|null
     */
    private $endRecording = null;

    /**
     * Getter for endRecording
     *
     * @return string
     */
    public function getEndRecording()
    {
        return $this->endRecording instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endRecording;
    }

    /**
     * Setter for endRecording
     *
     * @param string $endRecording
     * @return $this
     */
    public function setEndRecording($endRecording)
    {
        $this->endRecording = $endRecording;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndRecording()
    {
        $this->endRecording = null;
        return $this;
    }


}

