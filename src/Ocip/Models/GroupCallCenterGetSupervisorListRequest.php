<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetSupervisorListRequest
 *
 * Get a list of supervisors assigned to a call center.
 *         Only users in the same group or enterprise as this call center can
 *         successfully execute this request.
 *         The response is either a GroupCallCenterGetSupervisorListResponse
 *         or an ErrorResponse.
 *         Replaced By: GroupCallCenterSupervisorReportingGetRequest
 *
 * @see GroupCallCenterGetSupervisorListResponse
 * @see ErrorResponse
 * @see GroupCallCenterSupervisorReportingGetRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:4792","type":"sequence"}]
 */
class GroupCallCenterGetSupervisorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:4792
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

