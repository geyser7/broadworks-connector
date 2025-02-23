<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetRequest18
 *
 * Requests the information about the specified device type without regard to whether the
 *         type is SIP or MGCP.
 *         The response is either SystemDeviceTypeGetResponse18 or ErrorResponse.
 *     Note: The elements deviceTypeConfigurationOption applies to SIP device types only. Therefore, only present in the response when the device type is SIP.
 *     Replaced by: SystemSIPDeviceTypeGetRequest19.
 *
 * @see SystemDeviceTypeGetResponse18
 * @see ErrorResponse
 * @see SystemSIPDeviceTypeGetRequest19
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:26032","type":"sequence"}]
 */
class SystemDeviceTypeGetRequest18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26032
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

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

