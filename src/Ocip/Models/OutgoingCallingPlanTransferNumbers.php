<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanTransferNumbers
 *
 * Outgoing Calling Plan transfer numbers.
 *
 * @Groups [{"id":"80676ea6f2582b1b88573623a6affc0e:2208","type":"sequence"}]
 */
class OutgoingCallingPlanTransferNumbers
{

    /**
     * @ElementName phoneNumber01
     * @Type string
     * @Optional
     * @Group 80676ea6f2582b1b88573623a6affc0e:2208
     * @var string|null
     */
    private $phoneNumber01 = null;

    /**
     * @ElementName phoneNumber02
     * @Type string
     * @Optional
     * @Group 80676ea6f2582b1b88573623a6affc0e:2208
     * @var string|null
     */
    private $phoneNumber02 = null;

    /**
     * @ElementName phoneNumber03
     * @Type string
     * @Optional
     * @Group 80676ea6f2582b1b88573623a6affc0e:2208
     * @var string|null
     */
    private $phoneNumber03 = null;

    /**
     * Getter for phoneNumber01
     *
     * @return string
     */
    public function getPhoneNumber01()
    {
        return $this->phoneNumber01 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber01;
    }

    /**
     * Setter for phoneNumber01
     *
     * @param string $phoneNumber01
     * @return $this
     */
    public function setPhoneNumber01($phoneNumber01)
    {
        $this->phoneNumber01 = $phoneNumber01;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber01()
    {
        $this->phoneNumber01 = null;
        return $this;
    }

    /**
     * Getter for phoneNumber02
     *
     * @return string
     */
    public function getPhoneNumber02()
    {
        return $this->phoneNumber02 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber02;
    }

    /**
     * Setter for phoneNumber02
     *
     * @param string $phoneNumber02
     * @return $this
     */
    public function setPhoneNumber02($phoneNumber02)
    {
        $this->phoneNumber02 = $phoneNumber02;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber02()
    {
        $this->phoneNumber02 = null;
        return $this;
    }

    /**
     * Getter for phoneNumber03
     *
     * @return string
     */
    public function getPhoneNumber03()
    {
        return $this->phoneNumber03 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber03;
    }

    /**
     * Setter for phoneNumber03
     *
     * @param string $phoneNumber03
     * @return $this
     */
    public function setPhoneNumber03($phoneNumber03)
    {
        $this->phoneNumber03 = $phoneNumber03;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber03()
    {
        $this->phoneNumber03 = null;
        return $this;
    }


}

