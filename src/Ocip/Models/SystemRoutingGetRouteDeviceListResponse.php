<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingGetRouteDeviceListResponse
 *
 * Response to SystemRoutingGetRouteDeviceListRequest. The column headings are "Net
 * Address",
 *         "Port", "Transport" and "Description".
 *
 * @see SystemRoutingGetRouteDeviceListRequest
 */
class SystemRoutingGetRouteDeviceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName routeDeviceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $routeDeviceTable = null;

    /**
     * Getter for routeDeviceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getRouteDeviceTable()
    {
        return $this->routeDeviceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->routeDeviceTable;
    }

    /**
     * Setter for routeDeviceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $routeDeviceTable
     * @return $this
     */
    public function setRouteDeviceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $routeDeviceTable)
    {
        $this->routeDeviceTable = $routeDeviceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRouteDeviceTable()
    {
        $this->routeDeviceTable = null;
        return $this;
    }


}

