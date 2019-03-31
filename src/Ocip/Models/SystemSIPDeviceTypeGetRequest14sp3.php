<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetRequest14sp3
 *
 * Request to get a sip device type.
 *                 See Also: SystemDeviceTypeGetRequest
 *                 The response is either SystemSIPDeviceTypeGetResponse14sp3 or ErrorResponse.
 *                 Replaced by: SystemSIPDeviceTypeGetRequest14sp6
 *
 * @see SystemDeviceTypeGetRequest
 * @see SystemSIPDeviceTypeGetResponse14sp3
 * @see ErrorResponse
 * @see SystemSIPDeviceTypeGetRequest14sp6
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:6146","type":"sequence"}]
 */
class SystemSIPDeviceTypeGetRequest14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:6146
     * @MinLength 1
     * @MaxLength 40
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

