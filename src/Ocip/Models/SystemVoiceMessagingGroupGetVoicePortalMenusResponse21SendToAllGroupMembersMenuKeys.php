<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToAllGroupMembersMenuKeys
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:1026","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse21SendToAllGroupMembersMenuKeys
{

    /**
     * @ElementName confirmSendingToEntireGroup
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1026
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $confirmSendingToEntireGroup = null;

    /**
     * @ElementName cancelSendingToEntireGroup
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1026
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $cancelSendingToEntireGroup = null;

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

