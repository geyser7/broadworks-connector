<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse14SendToAllGroupMembersMenuKeys
 *
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:29573","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse14SendToAllGroupMembersMenuKeys
{

    /**
     * @ElementName confirmSendingToEntireGroup
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:29573
     * @var string|null
     */
    private $confirmSendingToEntireGroup = null;

    /**
     * @ElementName cancelSendingToEntireGroup
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:29573
     * @var string|null
     */
    private $cancelSendingToEntireGroup = null;

    /**
     * Getter for confirmSendingToEntireGroup
     *
     * @return string
     */
    public function getConfirmSendingToEntireGroup()
    {
        return $this->confirmSendingToEntireGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->confirmSendingToEntireGroup;
    }

    /**
     * Setter for confirmSendingToEntireGroup
     *
     * @param string $confirmSendingToEntireGroup
     * @return $this
     */
    public function setConfirmSendingToEntireGroup($confirmSendingToEntireGroup)
    {
        $this->confirmSendingToEntireGroup = $confirmSendingToEntireGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfirmSendingToEntireGroup()
    {
        $this->confirmSendingToEntireGroup = null;
        return $this;
    }

    /**
     * Getter for cancelSendingToEntireGroup
     *
     * @return string
     */
    public function getCancelSendingToEntireGroup()
    {
        return $this->cancelSendingToEntireGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cancelSendingToEntireGroup;
    }

    /**
     * Setter for cancelSendingToEntireGroup
     *
     * @param string $cancelSendingToEntireGroup
     * @return $this
     */
    public function setCancelSendingToEntireGroup($cancelSendingToEntireGroup)
    {
        $this->cancelSendingToEntireGroup = $cancelSendingToEntireGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCancelSendingToEntireGroup()
    {
        $this->cancelSendingToEntireGroup = null;
        return $this;
    }


}

