<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringCallMeNowRule
 *
 * Communication Barring Call Me Now Rule
 */
class CommunicationBarringCallMeNowRule
{

    /**
     * @ElementName criteria
     * @var string|null
     */
    private $criteria = null;

    /**
     * @ElementName action
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction|null
     */
    private $action = null;

    /**
     * @ElementName callTimeoutSeconds
     * @var int|null
     */
    private $callTimeoutSeconds = null;

    /**
     * Getter for criteria
     *
     * @ElementName criteria
     * @return string|null
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Setter for criteria
     *
     * @ElementName criteria
     * @param string|null $criteria
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Getter for action
     *
     * @ElementName action
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Setter for action
     *
     * @ElementName action
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction|null $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Getter for callTimeoutSeconds
     *
     * @ElementName callTimeoutSeconds
     * @return int|null
     */
    public function getCallTimeoutSeconds()
    {
        return $this->callTimeoutSeconds;
    }

    /**
     * Setter for callTimeoutSeconds
     *
     * @ElementName callTimeoutSeconds
     * @param int|null $callTimeoutSeconds
     * @return $this
     */
    public function setCallTimeoutSeconds($callTimeoutSeconds)
    {
        $this->callTimeoutSeconds = $callTimeoutSeconds;
        return $this;
    }


}

