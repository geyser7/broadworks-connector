<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServiceGetAuthorizationListRequest
 *
 * Requests the service provider's service authorization status.
 *         The response is either ServiceProviderServiceGetAuthorizationListResponse or ErrorResponse.
 *
 * @see ServiceProviderServiceGetAuthorizationListResponse
 * @see ErrorResponse
 * @Groups [{"id":"8eb862aea0ee5d4211db0a0d3fe7c164:4893","type":"sequence"}]
 */
class ServiceProviderServiceGetAuthorizationListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:4893
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

