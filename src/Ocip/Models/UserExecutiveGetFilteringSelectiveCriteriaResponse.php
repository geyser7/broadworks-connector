<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveGetFilteringSelectiveCriteriaResponse
 *
 * Response to the UserExecutiveGetFilteringSelectiveCriteriaRequest.
 *         Replaced by: UserExecutiveGetFilteringSelectiveCriteriaResponse21
 *
 * @see UserExecutiveGetFilteringSelectiveCriteriaRequest
 * @see UserExecutiveGetFilteringSelectiveCriteriaResponse21
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:34801","type":"sequence"}]
 */
class UserExecutiveGetFilteringSelectiveCriteriaResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:34801
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:34801
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName filter
     * @Type bool
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:34801
     * @var bool|null
     */
    private $filter = null;

    /**
     * @ElementName fromDnCriteria
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDn
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:34801
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDn|null
     */
    private $fromDnCriteria = null;

    /**
     * Getter for timeSchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $timeSchedule
     * @return $this
     */
    public function setTimeSchedule(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeSchedule()
    {
        $this->timeSchedule = null;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule(\CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidaySchedule()
    {
        $this->holidaySchedule = null;
        return $this;
    }

    /**
     * Getter for filter
     *
     * @return bool
     */
    public function getFilter()
    {
        return $this->filter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->filter;
    }

    /**
     * Setter for filter
     *
     * @param bool $filter
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFilter()
    {
        $this->filter = null;
        return $this;
    }

    /**
     * Getter for fromDnCriteria
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDn
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fromDnCriteria;
    }

    /**
     * Setter for fromDnCriteria
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDn $fromDnCriteria
     * @return $this
     */
    public function setFromDnCriteria(\CWM\BroadWorksConnector\Ocip\Models\ExecutiveCallFilteringCriteriaFromDn $fromDnCriteria)
    {
        $this->fromDnCriteria = $fromDnCriteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFromDnCriteria()
    {
        $this->fromDnCriteria = null;
        return $this;
    }


}

