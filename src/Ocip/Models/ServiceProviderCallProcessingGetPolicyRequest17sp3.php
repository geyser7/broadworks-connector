<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCallProcessingGetPolicyRequest17sp3
 *
 * Request the service provider level data associated with Call Processing
 *         Policy. The response is either a
 *         ServiceProviderCallProcessingGetPolicyResponse17sp3 or an ErrorResponse.
 *         
 *         Replaced by ServiceProviderCallProcessingGetPolicyResponse17sp4
 *
 * @see ServiceProviderCallProcessingGetPolicyResponse17sp3
 * @see ErrorResponse
 * @see ServiceProviderCallProcessingGetPolicyResponse17sp4
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:15404","type":"sequence"}]
 */
class ServiceProviderCallProcessingGetPolicyRequest17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:15404
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

