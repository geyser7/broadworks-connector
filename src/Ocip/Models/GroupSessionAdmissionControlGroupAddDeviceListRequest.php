<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupSessionAdmissionControlGroupAddDeviceListRequest
 *
 * Request to add one ore more devices to a group level session admission control group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"15129cd25fa2d5581f4edfd652c24f93:6729","type":"sequence"}]
 */
class GroupSessionAdmissionControlGroupAddDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:6729
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:6729
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:6729
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName devices
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Array
     * @Group 15129cd25fa2d5581f4edfd652c24f93:6729
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    private $devices = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for devices
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[]
     */
    public function getDevices()
    {
        return $this->devices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->devices;
    }

    /**
     * Setter for devices
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice[] $devices
     * @return $this
     */
    public function setDevices(array $devices)
    {
        $this->devices = $devices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDevices()
    {
        $this->devices = null;
        return $this;
    }

    /**
     * Adder for devices
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $devices
     * @return $this
     */
    public function addDevices($devices)
    {
        $this->devices[] = $devices;
        return $this;
    }


}

