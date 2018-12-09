<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterNightServiceGetRequest20
 *
 * Get a call center's night service settings.
 *         The response is either a GroupCallCenterNightServiceGetResponse20 or an ErrorResponse.
 *
 * @see GroupCallCenterNightServiceGetResponse20
 * @see ErrorResponse
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:4756","type":"sequence"}]
 */
class GroupCallCenterNightServiceGetRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:4756
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

