<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AlternateNumberEntry
 *
 * Alternate Number Entry.
 *
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:38185","type":"sequence"}]
 */
class AlternateNumberEntry
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38185
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumber = null;

    /**
     * @ElementName extension
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38185
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $extension = null;

    /**
     * @ElementName ringPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RingPattern
     * @Nillable
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38185
     * @var \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $ringPattern = null;

    /**
     * Getter for phoneNumber
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        if ($phoneNumber === null) {
            $this->phoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->phoneNumber = $phoneNumber;
        }
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
     * Getter for extension
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extension;
    }

    /**
     * Setter for extension
     *
     * @param string|null $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        if ($extension === null) {
            $this->extension = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->extension = $extension;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtension()
    {
        $this->extension = null;
        return $this;
    }

    /**
     * Getter for ringPattern
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null
     */
    public function getRingPattern()
    {
        return $this->ringPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ringPattern;
    }

    /**
     * Setter for ringPattern
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RingPattern|null $ringPattern
     * @return $this
     */
    public function setRingPattern(\CWM\BroadWorksConnector\Ocip\Models\RingPattern $ringPattern)
    {
        if ($ringPattern === null) {
            $this->ringPattern = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->ringPattern = $ringPattern;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRingPattern()
    {
        $this->ringPattern = null;
        return $this;
    }


}

