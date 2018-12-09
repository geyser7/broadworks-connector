<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTimeScheduleGetListResponse
 *
 * Response to the UserTimeScheduleGetListRequest. The column headings are "Time Schedule" and
 *         "Type".
 *         The response contains user's personal and user's group's schedule names.
 *
 * @see UserTimeScheduleGetListRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:37677","type":"sequence"}]
 */
class UserTimeScheduleGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeScheduleTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:37677
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $timeScheduleTable = null;

    /**
     * Getter for timeScheduleTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTimeScheduleTable()
    {
        return $this->timeScheduleTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeScheduleTable;
    }

    /**
     * Setter for timeScheduleTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $timeScheduleTable
     * @return $this
     */
    public function setTimeScheduleTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $timeScheduleTable)
    {
        $this->timeScheduleTable = $timeScheduleTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeScheduleTable()
    {
        $this->timeScheduleTable = null;
        return $this;
    }


}

