<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetResponse21PriorityWeightedRouting
 */
class EnterpriseEnterpriseTrunkGetResponse21PriorityWeightedRouting
{

    /**
     * @ElementName maximumRerouteAttemptsWithinPriority
     * @Type int
     * @var int|null
     */
    private $maximumRerouteAttemptsWithinPriority = null;

    /**
     * @ElementName priorityWeightedTrunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup[]
     */
    private $priorityWeightedTrunkGroup = array(
        
    );

    /**
     * Getter for maximumRerouteAttemptsWithinPriority
     *
     * @return int
     */
    public function getMaximumRerouteAttemptsWithinPriority()
    {
        return $this->maximumRerouteAttemptsWithinPriority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maximumRerouteAttemptsWithinPriority;
    }

    /**
     * Setter for maximumRerouteAttemptsWithinPriority
     *
     * @param int $maximumRerouteAttemptsWithinPriority
     * @return $this
     */
    public function setMaximumRerouteAttemptsWithinPriority($maximumRerouteAttemptsWithinPriority)
    {
        $this->maximumRerouteAttemptsWithinPriority = $maximumRerouteAttemptsWithinPriority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaximumRerouteAttemptsWithinPriority()
    {
        $this->maximumRerouteAttemptsWithinPriority = null;
        return $this;
    }

    /**
     * Getter for priorityWeightedTrunkGroup
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup[]
     */
    public function getPriorityWeightedTrunkGroup()
    {
        return $this->priorityWeightedTrunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityWeightedTrunkGroup;
    }

    /**
     * Setter for priorityWeightedTrunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup[] $priorityWeightedTrunkGroup
     * @return $this
     */
    public function setPriorityWeightedTrunkGroup(array $priorityWeightedTrunkGroup)
    {
        $this->priorityWeightedTrunkGroup = $priorityWeightedTrunkGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriorityWeightedTrunkGroup()
    {
        $this->priorityWeightedTrunkGroup = null;
        return $this;
    }

    /**
     * Adder for priorityWeightedTrunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseEnterpriseTrunkPriorityWeightedTrunkGroup $priorityWeightedTrunkGroup
     * @return $this
     */
    public function addPriorityWeightedTrunkGroup($priorityWeightedTrunkGroup)
    {
        $this->priorityWeightedTrunkGroup[] = $priorityWeightedTrunkGroup;
        return $this;
    }


}

