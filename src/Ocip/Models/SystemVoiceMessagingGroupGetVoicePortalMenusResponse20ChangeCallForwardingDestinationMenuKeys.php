<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCallForwardingDestinationMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:38425","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCallForwardingDestinationMenuKeys
{

    /**
     * @ElementName finishEnteringNewDestinationNumber
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38425
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    protected $finishEnteringNewDestinationNumber = null;

    /**
     * Getter for finishEnteringNewDestinationNumber
     *
     * @return string
     */
    public function getFinishEnteringNewDestinationNumber()
    {
        return $this->finishEnteringNewDestinationNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->finishEnteringNewDestinationNumber;
    }

    /**
     * Setter for finishEnteringNewDestinationNumber
     *
     * @param string $finishEnteringNewDestinationNumber
     * @return $this
     */
    public function setFinishEnteringNewDestinationNumber($finishEnteringNewDestinationNumber)
    {
        $this->finishEnteringNewDestinationNumber = $finishEnteringNewDestinationNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFinishEnteringNewDestinationNumber()
    {
        $this->finishEnteringNewDestinationNumber = null;
        return $this;
    }


}

