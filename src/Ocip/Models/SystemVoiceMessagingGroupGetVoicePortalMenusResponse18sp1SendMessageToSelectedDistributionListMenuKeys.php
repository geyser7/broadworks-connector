<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1SendMessageToSelectedDistributionListMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:37337","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1SendMessageToSelectedDistributionListMenuKeys
{

    /**
     * @ElementName confirmSendingToDistributionList
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37337
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    protected $confirmSendingToDistributionList = null;

    /**
     * @ElementName cancelSendingToDistributionList
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37337
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    protected $cancelSendingToDistributionList = null;

    /**
     * Getter for confirmSendingToDistributionList
     *
     * @return string
     */
    public function getConfirmSendingToDistributionList()
    {
        return $this->confirmSendingToDistributionList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->confirmSendingToDistributionList;
    }

    /**
     * Setter for confirmSendingToDistributionList
     *
     * @param string $confirmSendingToDistributionList
     * @return $this
     */
    public function setConfirmSendingToDistributionList($confirmSendingToDistributionList)
    {
        $this->confirmSendingToDistributionList = $confirmSendingToDistributionList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfirmSendingToDistributionList()
    {
        $this->confirmSendingToDistributionList = null;
        return $this;
    }

    /**
     * Getter for cancelSendingToDistributionList
     *
     * @return string
     */
    public function getCancelSendingToDistributionList()
    {
        return $this->cancelSendingToDistributionList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cancelSendingToDistributionList;
    }

    /**
     * Setter for cancelSendingToDistributionList
     *
     * @param string $cancelSendingToDistributionList
     * @return $this
     */
    public function setCancelSendingToDistributionList($cancelSendingToDistributionList)
    {
        $this->cancelSendingToDistributionList = $cancelSendingToDistributionList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCancelSendingToDistributionList()
    {
        $this->cancelSendingToDistributionList = null;
        return $this;
    }


}

