<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VerifyTranslationAndRoutingParameters
 *
 * Verification Translation and Routing parameters
 *         for creating a Verify Translation and Routing request from
 *         parameters.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:4007","type":"sequence"}]
 */
class VerifyTranslationAndRoutingParameters
{

    /**
     * @ElementName origination
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination
     * @Group 8e629edbac315ae7889caca732382c44:4007
     * @var \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination|null
     */
    private $origination = null;

    /**
     * @ElementName destination
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:4007
     * @var string|null
     */
    private $destination = null;

    /**
     * @ElementName contact
     * @Type string
     * @Optional
     * @Group 8e629edbac315ae7889caca732382c44:4007
     * @var string|null
     */
    private $contact = null;

    /**
     * @ElementName diversion
     * @Type string
     * @Optional
     * @Group 8e629edbac315ae7889caca732382c44:4007
     * @var string|null
     */
    private $diversion = null;

    /**
     * Getter for origination
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination
     */
    public function getOrigination()
    {
        return $this->origination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->origination;
    }

    /**
     * Setter for origination
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination $origination
     * @return $this
     */
    public function setOrigination(\CWM\BroadWorksConnector\Ocip\Models\VerifyTranslationAndRoutingOrigination $origination)
    {
        $this->origination = $origination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrigination()
    {
        $this->origination = null;
        return $this;
    }

    /**
     * Getter for destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->destination;
    }

    /**
     * Setter for destination
     *
     * @param string $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDestination()
    {
        $this->destination = null;
        return $this;
    }

    /**
     * Getter for contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contact;
    }

    /**
     * Setter for contact
     *
     * @param string $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContact()
    {
        $this->contact = null;
        return $this;
    }

    /**
     * Getter for diversion
     *
     * @return string
     */
    public function getDiversion()
    {
        return $this->diversion instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->diversion;
    }

    /**
     * Setter for diversion
     *
     * @param string $diversion
     * @return $this
     */
    public function setDiversion($diversion)
    {
        $this->diversion = $diversion;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDiversion()
    {
        $this->diversion = null;
        return $this;
    }


}

