<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceFamilyAssignDeviceTypeListRequest
 *
 * Request to assign a list of Device Types to a device family. 
 *
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7363","type":"sequence"}]
 */
class SystemDeviceFamilyAssignDeviceTypeListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceFamilyName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7363
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $deviceFamilyName = null;

    /**
     * @ElementName deviceTypeName
     * @Type string
     * @Array
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7363
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $deviceTypeName = array(
        
    );

    /**
     * Getter for deviceFamilyName
     *
     * @return string
     */
    public function getDeviceFamilyName()
    {
        return $this->deviceFamilyName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceFamilyName;
    }

    /**
     * Setter for deviceFamilyName
     *
     * @param string $deviceFamilyName
     * @return $this
     */
    public function setDeviceFamilyName($deviceFamilyName)
    {
        $this->deviceFamilyName = $deviceFamilyName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceFamilyName()
    {
        $this->deviceFamilyName = null;
        return $this;
    }

    /**
     * Getter for deviceTypeName
     *
     * @return string[]
     */
    public function getDeviceTypeName()
    {
        return $this->deviceTypeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceTypeName;
    }

    /**
     * Setter for deviceTypeName
     *
     * @param string[] $deviceTypeName
     * @return $this
     */
    public function setDeviceTypeName(array $deviceTypeName)
    {
        $this->deviceTypeName = $deviceTypeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceTypeName()
    {
        $this->deviceTypeName = null;
        return $this;
    }

    /**
     * Adder for deviceTypeName
     *
     * @param string $deviceTypeName
     * @return $this
     */
    public function addDeviceTypeName(string $deviceTypeName)
    {
        $this->deviceTypeName[] = $deviceTypeName;
        return $this;
    }


}

