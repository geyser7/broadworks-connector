<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackGetServiceUsageListResponse
 *
 * Response to ServiceProviderServicePackGetServiceUsageListRequest.
 *         The column headings are "Service Pack Name", "Total Packs" and "Allocated to Groups"
 *
 * @see ServiceProviderServicePackGetServiceUsageListRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:6196","type":"sequence"}]
 */
class ServiceProviderServicePackGetServiceUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceUsageTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:6196
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $serviceUsageTable = null;

    /**
     * Getter for serviceUsageTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getServiceUsageTable()
    {
        return $this->serviceUsageTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUsageTable;
    }

    /**
     * Setter for serviceUsageTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceUsageTable
     * @return $this
     */
    public function setServiceUsageTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $serviceUsageTable)
    {
        $this->serviceUsageTable = $serviceUsageTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUsageTable()
    {
        $this->serviceUsageTable = null;
        return $this;
    }


}

