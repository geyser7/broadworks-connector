<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackGetListRequest
 *
 * Request to get a list of defined service packs for a service provider.
 *         The response is either ServiceProviderServicePackGetListResponse or ErrorResponse.
 *
 * @see ServiceProviderServicePackGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"8eb862aea0ee5d4211db0a0d3fe7c164:5119","type":"sequence"}]
 */
class ServiceProviderServicePackGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:5119
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }


}

