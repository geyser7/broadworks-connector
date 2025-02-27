<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceDeviceActivationGetResponse
 *
 * Response to GroupAccessDeviceDeviceActivationGetRequest.
 *         The response contains the activation code (if available), the expiry time (if available) and the activation state.
 *         The expiryTime is represented as a timestamp, i.e. the number of milliseconds
 *         since January 1, 1970, 00:00:00 GMT.
 *
 * @see GroupAccessDeviceDeviceActivationGetRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:553","type":"sequence"}]
 */
class GroupAccessDeviceDeviceActivationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName activationCode
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:553
     * @MinLength 16
     * @MaxLength 16
     * @var string|null
     */
    protected $activationCode = null;

    /**
     * @ElementName expiryTime
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:553
     * @var string|null
     */
    protected $expiryTime = null;

    /**
     * @ElementName activationState
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceActivationState
     * @Group f3a93cf15de4abd7903673e44ee3e07b:553
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceActivationState|null
     */
    protected $activationState = null;

    /**
     * Getter for activationCode
     *
     * @return string
     */
    public function getActivationCode()
    {
        return $this->activationCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activationCode;
    }

    /**
     * Setter for activationCode
     *
     * @param string $activationCode
     * @return $this
     */
    public function setActivationCode($activationCode)
    {
        $this->activationCode = $activationCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivationCode()
    {
        $this->activationCode = null;
        return $this;
    }

    /**
     * Getter for expiryTime
     *
     * @return string
     */
    public function getExpiryTime()
    {
        return $this->expiryTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->expiryTime;
    }

    /**
     * Setter for expiryTime
     *
     * @param string $expiryTime
     * @return $this
     */
    public function setExpiryTime($expiryTime)
    {
        $this->expiryTime = $expiryTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExpiryTime()
    {
        $this->expiryTime = null;
        return $this;
    }

    /**
     * Getter for activationState
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceActivationState
     */
    public function getActivationState()
    {
        return $this->activationState instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activationState;
    }

    /**
     * Setter for activationState
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceActivationState $activationState
     * @return $this
     */
    public function setActivationState(\CWM\BroadWorksConnector\Ocip\Models\DeviceActivationState $activationState)
    {
        $this->activationState = $activationState;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivationState()
    {
        $this->activationState = null;
        return $this;
    }


}

