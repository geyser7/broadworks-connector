<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetRequest
 *
 * Requests the information about the specified device type without regard to whether the
 *         type is SIP or MGCP.
 *         The response is either SystemDeviceTypeGetResponse or ErrorResponse.
 *         Replaced By: SystemDeviceTypeGetRequest14sp3
 *
 * @see SystemDeviceTypeGetResponse
 * @see ErrorResponse
 * @see SystemDeviceTypeGetRequest14sp3
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:21695","type":"sequence"}]
 */
class SystemDeviceTypeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:21695
     * @var string|null
     */
    private $deviceType = null;

    /**
     * Getter for deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceType()
    {
        $this->deviceType = null;
        return $this;
    }


}

