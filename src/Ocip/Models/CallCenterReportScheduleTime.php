<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportScheduleTime
 *
 * A scheduled time for call center enhanced reporting scheduled report.
 *
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:6768","type":"sequence"}]
 */
class CallCenterReportScheduleTime
{

    /**
     * @ElementName timeZone
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6768
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName scheduleDate
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6768
     * @var string|null
     */
    private $scheduleDate = null;

    /**
     * @ElementName scheduleTime
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:6768
     * @var \CWM\BroadWorksConnector\Ocip\Models\HourMinute|null
     */
    private $scheduleTime = null;

    /**
     * Getter for timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @param string $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZone()
    {
        $this->timeZone = null;
        return $this;
    }

    /**
     * Getter for scheduleDate
     *
     * @return string
     */
    public function getScheduleDate()
    {
        return $this->scheduleDate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleDate;
    }

    /**
     * Setter for scheduleDate
     *
     * @param string $scheduleDate
     * @return $this
     */
    public function setScheduleDate($scheduleDate)
    {
        $this->scheduleDate = $scheduleDate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleDate()
    {
        $this->scheduleDate = null;
        return $this;
    }

    /**
     * Getter for scheduleTime
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HourMinute
     */
    public function getScheduleTime()
    {
        return $this->scheduleTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleTime;
    }

    /**
     * Setter for scheduleTime
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HourMinute $scheduleTime
     * @return $this
     */
    public function setScheduleTime(\CWM\BroadWorksConnector\Ocip\Models\HourMinute $scheduleTime)
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleTime()
    {
        $this->scheduleTime = null;
        return $this;
    }


}

