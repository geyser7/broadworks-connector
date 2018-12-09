<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCPEConfigReorderDeviceLinePortsRequest
 *
 * Reorder the lines of a group device. You can not add or delete line ports, only
 *         re-ordering the list is allowed. The ordered list of line ports can be obtained
 *         with the GroupAccessDeviceGetRequest16 command.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see GroupAccessDeviceGetRequest16
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"15129cd25fa2d5581f4edfd652c24f93:2447","type":"sequence"}]
 */
class GroupCPEConfigReorderDeviceLinePortsRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:2447
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:2447
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group 15129cd25fa2d5581f4edfd652c24f93:2447
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName orderedLinePortList
     * @Type string
     * @Array
     * @Group 15129cd25fa2d5581f4edfd652c24f93:2447
     * @var string[]
     */
    private $orderedLinePortList = array(
        
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

    /**
     * Getter for orderedLinePortList
     *
     * @return string[]
     */
    public function getOrderedLinePortList()
    {
        return $this->orderedLinePortList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->orderedLinePortList;
    }

    /**
     * Setter for orderedLinePortList
     *
     * @param string[] $orderedLinePortList
     * @return $this
     */
    public function setOrderedLinePortList(array $orderedLinePortList)
    {
        $this->orderedLinePortList = $orderedLinePortList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOrderedLinePortList()
    {
        $this->orderedLinePortList = null;
        return $this;
    }

    /**
     * Adder for orderedLinePortList
     *
     * @param string $orderedLinePortList
     * @return $this
     */
    public function addOrderedLinePortList(string $orderedLinePortList)
    {
        $this->orderedLinePortList[] = $orderedLinePortList;
        return $this;
    }


}

