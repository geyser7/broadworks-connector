<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementOutgoingDNList
 *
 * A list of outgoing dns that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3968","type":"sequence"}]
 */
class ReplacementOutgoingDNList
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3968
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    protected $phoneNumber = array(
        
    );

    /**
     * Getter for phoneNumber
     *
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(array $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Adder for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber[] = $phoneNumber;
        return $this;
    }


}

