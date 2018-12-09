<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigParametersModifyRequestFileRebuildDaily
 *
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:21402","type":"sequence"}]
 */
class SystemCPEConfigParametersModifyRequestFileRebuildDaily
{

    /**
     * @ElementName startHour
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:21402
     * @var int|null
     */
    private $startHour = null;

    /**
     * @ElementName startMinute
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:21402
     * @var int|null
     */
    private $startMinute = null;

    /**
     * Getter for startHour
     *
     * @return int
     */
    public function getStartHour()
    {
        return $this->startHour instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startHour;
    }

    /**
     * Setter for startHour
     *
     * @param int $startHour
     * @return $this
     */
    public function setStartHour($startHour)
    {
        $this->startHour = $startHour;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartHour()
    {
        $this->startHour = null;
        return $this;
    }

    /**
     * Getter for startMinute
     *
     * @return int
     */
    public function getStartMinute()
    {
        return $this->startMinute instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startMinute;
    }

    /**
     * Setter for startMinute
     *
     * @param int $startMinute
     * @return $this
     */
    public function setStartMinute($startMinute)
    {
        $this->startMinute = $startMinute;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartMinute()
    {
        $this->startMinute = null;
        return $this;
    }


}

