<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceStatisticsReportingRequest
 *
 * Request to get the call center statistics reporting settings.
 *         The response is either GroupCallCenterGetInstanceStatisticsReportingResponse or ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterGetInstanceStatisticsReportingRequest16
 *
 * @see GroupCallCenterGetInstanceStatisticsReportingResponse
 * @see ErrorResponse
 * @see GroupCallCenterGetInstanceStatisticsReportingRequest16
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:4635","type":"sequence"}]
 */
class GroupCallCenterGetInstanceStatisticsReportingRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:4635
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }


}

