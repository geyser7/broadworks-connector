<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse19SelectDistributionListMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:37716","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse19SelectDistributionListMenuKeys
{

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37716
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenuOrFinishEnteringDistributionListNumber
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37716
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    protected $repeatMenuOrFinishEnteringDistributionListNumber = null;

    /**
     * Getter for returnToPreviousMenu
     *
     * @return string
     */
    public function getReturnToPreviousMenu()
    {
        return $this->returnToPreviousMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->returnToPreviousMenu;
    }

    /**
     * Setter for returnToPreviousMenu
     *
     * @param string $returnToPreviousMenu
     * @return $this
     */
    public function setReturnToPreviousMenu($returnToPreviousMenu)
    {
        $this->returnToPreviousMenu = $returnToPreviousMenu;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReturnToPreviousMenu()
    {
        $this->returnToPreviousMenu = null;
        return $this;
    }

    /**
     * Getter for repeatMenuOrFinishEnteringDistributionListNumber
     *
     * @return string
     */
    public function getRepeatMenuOrFinishEnteringDistributionListNumber()
    {
        return $this->repeatMenuOrFinishEnteringDistributionListNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->repeatMenuOrFinishEnteringDistributionListNumber;
    }

    /**
     * Setter for repeatMenuOrFinishEnteringDistributionListNumber
     *
     * @param string $repeatMenuOrFinishEnteringDistributionListNumber
     * @return $this
     */
    public function setRepeatMenuOrFinishEnteringDistributionListNumber($repeatMenuOrFinishEnteringDistributionListNumber)
    {
        $this->repeatMenuOrFinishEnteringDistributionListNumber = $repeatMenuOrFinishEnteringDistributionListNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRepeatMenuOrFinishEnteringDistributionListNumber()
    {
        $this->repeatMenuOrFinishEnteringDistributionListNumber = null;
        return $this;
    }


}

