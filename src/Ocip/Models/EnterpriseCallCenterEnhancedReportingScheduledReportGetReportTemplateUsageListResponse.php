<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
 *
 * Response to
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest.
 *
 *         Contains a table with column headings: "Schedule Name", "Created By",
 * "Created By Supervisor", and
 *         "Is Active".
 *         The "Created By" can be either "Administrator" or user id if created by
 * supervisor.
 *
 * @see
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName scheduleReportTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
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

