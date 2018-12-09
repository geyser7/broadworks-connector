<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetRouteDeviceListRequest
 *
 * Request to get a list of devices for a route.
 *         The response is either a SystemRoutingGetRouteDeviceListResponse or an ErrorResponse.
 *
 * @see SystemRoutingGetRouteDeviceListResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:13500","type":"sequence"}]
 */
class SystemRoutingGetRouteDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName routeName
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:13500
     * @var string|null
     */
    private $routeName = null;

    /**
     * Getter for routeName
     *
     * @return string
     */
    public function getRouteName()
    {
        return $this->routeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeName;
    }

    /**
     * Setter for routeName
     *
     * @param string $routeName
     * @return $this
     */
    public function setRouteName($routeName)
    {
        $this->routeName = $routeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteName()
    {
        $this->routeName = null;
        return $this;
    }


}

