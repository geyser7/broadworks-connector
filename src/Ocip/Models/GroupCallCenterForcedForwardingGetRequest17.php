<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterForcedForwardingGetRequest17
 *
 * Get a call center's forced forwarding settings.
 *         The response is either a GroupCallCenterForcedForwardingGetResponse17 or
 * an ErrorResponse.
 *
 * @see GroupCallCenterForcedForwardingGetResponse17
 * @see ErrorResponse
 */
class GroupCallCenterForcedForwardingGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

