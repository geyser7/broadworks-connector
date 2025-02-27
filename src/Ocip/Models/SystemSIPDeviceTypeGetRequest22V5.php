<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeGetRequest22V5
 *
 * Request to get a sip device type.
 *         See Also: SystemDeviceTypeGetRequest
 *         The response is either SystemSIPDeviceTypeGetResponse22V5 or ErrorResponse.
 *         
 *         Replaced by: SystemDeviceTypeGetRequest22V13 in XS data mode.
 *         Replaced by: SystemDeviceTypeGetRequest22V6 in AS data mode.
 *
 * @see SystemDeviceTypeGetRequest
 * @see SystemSIPDeviceTypeGetResponse22V5
 * @see ErrorResponse
 * @see SystemDeviceTypeGetRequest22V13
 * @see SystemDeviceTypeGetRequest22V6
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:32284","type":"sequence"}]
 */
class SystemSIPDeviceTypeGetRequest22V5 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32284
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

