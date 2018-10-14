<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterModifyRoutingPolicyRequest
 *
 * Modify the enterprise call center routing policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class EnterpriseCallCenterModifyRoutingPolicyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName routingPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy|null
     */
    private $routingPolicy = null;

    /**
     * @ElementName routingPriorityOrder
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder[]
     */
    private $routingPriorityOrder = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for routingPolicy
     *
     * @ElementName routingPolicy
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy|null
     */
    public function getRoutingPolicy()
    {
        return $this->routingPolicy;
    }

    /**
     * Setter for routingPolicy
     *
     * @ElementName routingPolicy
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy|null $routingPolicy
     * @return $this
     */
    public function setRoutingPolicy(\CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPolicy $routingPolicy)
    {
        $this->routingPolicy = $routingPolicy;
        return $this;
    }

    /**
     * Getter for routingPriorityOrder
     *
     * @ElementName routingPriorityOrder
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder[]
     */
    public function getRoutingPriorityOrder()
    {
        return $this->routingPriorityOrder;
    }

    /**
     * Setter for routingPriorityOrder
     *
     * @ElementName routingPriorityOrder
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder[] $routingPriorityOrder
     * @return $this
     */
    public function setRoutingPriorityOrder(array $routingPriorityOrder)
    {
        $this->routingPriorityOrder = $routingPriorityOrder;
        return $this;
    }

    /**
     * Adder for routingPriorityOrder
     *
     * @ElementName routingPriorityOrder
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterRoutingPriorityOrder $routingPriorityOrder
     * @return $this
     */
    public function addRoutingPriorityOrder($routingPriorityOrder)
    {
        $this->routingPriorityOrder []= $routingPriorityOrder;
        return $this;
    }


}

