<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
 *
 * Response to SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest.
 *         Contains a table with column headings: "Schedule Name", "Organization Type", "Service Provider Id", 
 *         "Group Id", "Created By", "Created By Supervisor", and "Is Active".
 *          The "Organization Type" is either "Service Provider" or "Enterprise".
 *          The "Created By" can be either "Administrator" or user id if created by supervisor.
 *          The possible values for "Created By Supervisor" are "true" and "false".
 *
 * @see SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:5773","type":"sequence"}]
 */
class SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleReportTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:5773
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $scheduleReportTable = null;

    /**
     * Getter for scheduleReportTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getScheduleReportTable()
    {
        return $this->scheduleReportTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleReportTable;
    }

    /**
     * Setter for scheduleReportTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $scheduleReportTable
     * @return $this
     */
    public function setScheduleReportTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $scheduleReportTable)
    {
        $this->scheduleReportTable = $scheduleReportTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleReportTable()
    {
        $this->scheduleReportTable = null;
        return $this;
    }


}

