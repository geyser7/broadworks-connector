<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderFeatureAccessCodeGetListRequest
 *
 * Get the list of feature access codes for a service provider or enterprise.
 *         The response is either a ServiceProviderFeatureAccessCodeGetListResponse or an ErrorResponse.
 *         
 *         Replaced By : ServiceProviderFeatureAccessCodeGetListRequest20 in AS data mode
 *
 * @see ServiceProviderFeatureAccessCodeGetListResponse
 * @see ErrorResponse
 * @see ServiceProviderFeatureAccessCodeGetListRequest20
 * @Groups [{"id":"bb12a3589ab4748963f28f7ac9310f70:2699","type":"sequence"}]
 */
class ServiceProviderFeatureAccessCodeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group bb12a3589ab4748963f28f7ac9310f70:2699
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

