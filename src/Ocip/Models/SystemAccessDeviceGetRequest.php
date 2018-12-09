<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetRequest
 *
 * Requests the configuration of a specified system access device.
 *         The response is either SystemAccessDeviceGetResponse or ErrorResponse.
 *         Replaced By: SystemAccessDeviceGetRequest14sp3
 *
 * @see SystemAccessDeviceGetResponse
 * @see ErrorResponse
 * @see SystemAccessDeviceGetRequest14sp3
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:17015","type":"sequence"}]
 */
class SystemAccessDeviceGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:17015
     * @var string|null
     */
    private $deviceName = null;

    /**
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
        return $this;
    }


}

