<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterHolidayServiceGetRequest17sp1
 *
 * Get a call center's holiday service settings.
 *         The response is either a GroupCallCenterHolidayServiceGetResponse17sp1 or an ErrorResponse.
 *
 * @see GroupCallCenterHolidayServiceGetResponse17sp1
 * @see ErrorResponse
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:4860","type":"sequence"}]
 */
class GroupCallCenterHolidayServiceGetRequest17sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:4860
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

