<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestGreetingOnlyForwardingDestinationMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestGreetingOnlyForwardingDestinationMenuKeys
{

    /**
     * @ElementName greetingOnlyForwardingDestination
     * @var string|null
     */
    private $greetingOnlyForwardingDestination = null;

    /**
     * Getter for greetingOnlyForwardingDestination
     *
     * @ElementName greetingOnlyForwardingDestination
     * @return string|null
     */
    public function getGreetingOnlyForwardingDestination()
    {
        return $this->greetingOnlyForwardingDestination;
    }

    /**
     * Setter for greetingOnlyForwardingDestination
     *
     * @ElementName greetingOnlyForwardingDestination
     * @param string|null $greetingOnlyForwardingDestination
     * @return $this
     */
    public function setGreetingOnlyForwardingDestination($greetingOnlyForwardingDestination)
    {
        $this->greetingOnlyForwardingDestination = $greetingOnlyForwardingDestination;
        return $this;
    }


}

