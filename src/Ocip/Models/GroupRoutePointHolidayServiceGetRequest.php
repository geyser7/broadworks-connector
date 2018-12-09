<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointHolidayServiceGetRequest
 *
 * Get a route point's holiday service settings.
 *         The response is either a GroupRoutePointHolidayServiceGetResponse or an ErrorResponse.
 *
 * @see GroupRoutePointHolidayServiceGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:10576","type":"sequence"}]
 */
class GroupRoutePointHolidayServiceGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:10576
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

