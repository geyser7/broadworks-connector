<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseSecurityClassificationCustomizationGetAvailableListRequest
 *
 * Get the enterprise security classification list. If it is not customized, it
 * returns the system default list.
 *         The response is either an
 * EnterpriseSecurityClassificationCustomizationGetAvailableListResponse or an
 * ErrorResponse.
 *
 * @see EnterpriseSecurityClassificationCustomizationGetAvailableListResponse
 * @see ErrorResponse
 */
class EnterpriseSecurityClassificationCustomizationGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

