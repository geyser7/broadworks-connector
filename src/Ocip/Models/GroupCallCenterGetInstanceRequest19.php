<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstanceRequest19
 *
 * Request to get all the information of a Call Center instance.
 *         The response is either GroupCallCenterGetInstanceResponse19 or ErrorResponse.
 *         
 *         Replaced by: GroupCallCenterGetInstanceRequest19sp1
 *
 * @see GroupCallCenterGetInstanceResponse19
 * @see ErrorResponse
 * @see GroupCallCenterGetInstanceRequest19sp1
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:4323","type":"sequence"}]
 */
class GroupCallCenterGetInstanceRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:4323
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

