<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressRedirectionModify
 *
 * CommPilot Express type to transfer to voice Mail or forward to a number
 *         used in the context of a modify.
 */
class CommPilotExpressRedirectionModify
{

    /**
     * @ElementName action
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionAction|null
     */
    private $action = null;

    /**
     * @ElementName forwardingPhoneNumber
     * @var string|null
     */
    private $forwardingPhoneNumber = null;

    /**
     * Getter for action
     *
     * @ElementName action
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionAction|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Setter for action
     *
     * @ElementName action
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionAction|null $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionAction $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Getter for forwardingPhoneNumber
     *
     * @ElementName forwardingPhoneNumber
     * @return string|null
     */
    public function getForwardingPhoneNumber()
    {
        return $this->forwardingPhoneNumber;
    }

    /**
     * Setter for forwardingPhoneNumber
     *
     * @ElementName forwardingPhoneNumber
     * @param string|null $forwardingPhoneNumber
     * @return $this
     */
    public function setForwardingPhoneNumber($forwardingPhoneNumber)
    {
        $this->forwardingPhoneNumber = $forwardingPhoneNumber;
        return $this;
    }


}

