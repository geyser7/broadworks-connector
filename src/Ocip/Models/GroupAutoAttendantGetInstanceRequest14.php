<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantGetInstanceRequest14
 *
 * Request to get all the information of a Auto Attendant instance.
 *         The response is either GroupAutoAttendantGetInstanceResponse14 or ErrorResponse.
 *         Replaced By: GroupAutoAttendantGetInstanceRequest16
 *
 * @see GroupAutoAttendantGetInstanceResponse14
 * @see ErrorResponse
 * @see GroupAutoAttendantGetInstanceRequest16
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:2578","type":"sequence"}]
 */
class GroupAutoAttendantGetInstanceRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:2578
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

