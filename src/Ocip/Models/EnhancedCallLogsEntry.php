<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsEntry
 *
 * Call Log entry describing a placed, received, or missed call.
 *        Replaced By: CallLogsEntry
 *
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:38880","type":"sequence"}]
 */
class EnhancedCallLogsEntry
{

    /**
     * @ElementName countryCode
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38880
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38880
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName name
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38880
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName time
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:38880
     * @var string|null
     */
    private $time = null;

    /**
     * Getter for countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountryCode()
    {
        $this->countryCode = null;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
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
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->time;
    }

    /**
     * Setter for time
     *
     * @param string $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTime()
    {
        $this->time = null;
        return $this;
    }


}

