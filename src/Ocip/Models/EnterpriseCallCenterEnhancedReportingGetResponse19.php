<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingGetResponse19
 *
 * Response to EnterpriseCallCenterEnhancedReportingGetRequest19.
 *
 * @see EnterpriseCallCenterEnhancedReportingGetRequest19
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:1164","type":"sequence"}]
 */
class EnterpriseCallCenterEnhancedReportingGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName reportingServer
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:1164
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19|null
     */
    private $reportingServer = null;

    /**
     * Getter for reportingServer
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19
     */
    public function getReportingServer()
    {
        return $this->reportingServer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingServer;
    }

    /**
     * Setter for reportingServer
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19 $reportingServer
     * @return $this
     */
    public function setReportingServer(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice19 $reportingServer)
    {
        $this->reportingServer = $reportingServer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportingServer()
    {
        $this->reportingServer = null;
        return $this;
    }


}

