<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVideoAddOnGetResponse14
 *
 * Response to the UserVideoAddOnGetRequest14.
 *
 * @see UserVideoAddOnGetRequest14
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:46912","type":"sequence"}]
 */
class UserVideoAddOnGetResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46912
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName maxOriginatingCallDelaySeconds
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46912
     * @var \CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds|null
     */
    protected $maxOriginatingCallDelaySeconds = null;

    /**
     * @ElementName accessDeviceEndpoint
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46912
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14|null
     */
    protected $accessDeviceEndpoint = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for maxOriginatingCallDelaySeconds
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds
     */
    public function getMaxOriginatingCallDelaySeconds()
    {
        return $this->maxOriginatingCallDelaySeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxOriginatingCallDelaySeconds;
    }

    /**
     * Setter for maxOriginatingCallDelaySeconds
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds $maxOriginatingCallDelaySeconds
     * @return $this
     */
    public function setMaxOriginatingCallDelaySeconds(\CWM\BroadWorksConnector\Ocip\Models\VideoAddOnMaxOriginatingCallDelaySeconds $maxOriginatingCallDelaySeconds)
    {
        $this->maxOriginatingCallDelaySeconds = $maxOriginatingCallDelaySeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxOriginatingCallDelaySeconds()
    {
        $this->maxOriginatingCallDelaySeconds = null;
        return $this;
    }

    /**
     * Getter for accessDeviceEndpoint
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceEndpoint;
    }

    /**
     * Setter for accessDeviceEndpoint
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14 $accessDeviceEndpoint
     * @return $this
     */
    public function setAccessDeviceEndpoint(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEndpointRead14 $accessDeviceEndpoint)
    {
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceEndpoint()
    {
        $this->accessDeviceEndpoint = null;
        return $this;
    }


}

