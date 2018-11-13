<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointNightServiceGetRequest17sp1
 *
 * Get a route point's night service settings.
 *         The response is either a GroupRoutePointNightServiceGetResponse17sp1 or
 * an ErrorResponse.
 *
 * @see GroupRoutePointNightServiceGetResponse17sp1
 * @see ErrorResponse
 */
class GroupRoutePointNightServiceGetRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
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

