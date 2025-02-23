<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupScheduleGetPagedSortedListResponse
 *
 * Response to GroupScheduleGetPagedSortedListRequest.
 *         Contains a 3 column table with column headings: "Name", "Type", "Level"
 *         and a row for each schedule.
 *
 * @see GroupScheduleGetPagedSortedListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:7585","type":"sequence"}]
 */
class GroupScheduleGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7585
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $scheduleTable = null;

    /**
     * Getter for scheduleTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getScheduleTable()
    {
        return $this->scheduleTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleTable;
    }

    /**
     * Setter for scheduleTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $scheduleTable
     * @return $this
     */
    public function setScheduleTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $scheduleTable)
    {
        $this->scheduleTable = $scheduleTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleTable()
    {
        $this->scheduleTable = null;
        return $this;
    }


}

