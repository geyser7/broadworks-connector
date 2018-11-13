<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServiceGetUserAssignableListRequest
 *
 * Requests the list of all user services assignable to users in the specified
 * service provider.
 *         The response is either
 * ServiceProviderServiceGetUserAssignableListResponse or ErrorResponse.
 *
 * @see ServiceProviderServiceGetUserAssignableListResponse
 * @see ErrorResponse
 */
class ServiceProviderServiceGetUserAssignableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
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

