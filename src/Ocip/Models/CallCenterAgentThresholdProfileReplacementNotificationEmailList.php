<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAgentThresholdProfileReplacementNotificationEmailList
 *
 * List of email addresses to which the Agent Threshold Profile email is sent. The
 * list replaces a previously configured list.
 */
class CallCenterAgentThresholdProfileReplacementNotificationEmailList
{

    /**
     * @ElementName emailAddress
     * @Type string
     * @Array
     * @var string[]
     */
    private $emailAddress = array(
        
    );

    /**
     * Getter for emailAddress
     *
     * @return string[]
     */
    public function getEmailAddress()
    {
        return $this->emailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->emailAddress;
    }

    /**
     * Setter for emailAddress
     *
     * @param string[] $emailAddress
     * @return $this
     */
    public function setEmailAddress(array $emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEmailAddress()
    {
        $this->emailAddress = null;
        return $this;
    }

    /**
     * Adder for emailAddress
     *
     * @param string $emailAddress
     * @return $this
     */
    public function addEmailAddress(string $emailAddress)
    {
        $this->emailAddress[] = $emailAddress;
        return $this;
    }


}

