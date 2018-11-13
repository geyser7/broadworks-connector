<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ScheduleGlobalKey
 *
 * Uniquely identifies Holiday and Time Schedules throughout all System, Service
 * Provider, Group and User level.
 */
class ScheduleGlobalKey
{

    /**
     * @ElementName scheduleKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey|null
     */
    private $scheduleKey = null;

    /**
     * @ElementName scheduleLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel|null
     */
    private $scheduleLevel = null;

    /**
     * Getter for scheduleKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleKey;
    }

    /**
     * Setter for scheduleKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey $scheduleKey
     * @return $this
     */
    public function setScheduleKey(\CWM\BroadWorksConnector\Ocip\Models\ScheduleKey $scheduleKey)
    {
        $this->scheduleKey = $scheduleKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleKey()
    {
        $this->scheduleKey = null;
        return $this;
    }

    /**
     * Getter for scheduleLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel
     */
    public function getScheduleLevel()
    {
        return $this->scheduleLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleLevel;
    }

    /**
     * Setter for scheduleLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel $scheduleLevel
     * @return $this
     */
    public function setScheduleLevel(\CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel $scheduleLevel)
    {
        $this->scheduleLevel = $scheduleLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleLevel()
    {
        $this->scheduleLevel = null;
        return $this;
    }


}

