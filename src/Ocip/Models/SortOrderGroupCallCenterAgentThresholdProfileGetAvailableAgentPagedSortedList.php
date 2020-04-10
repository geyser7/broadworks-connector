<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SortOrderGroupCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedList
 *
 * Used to sort the GroupCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListRequest request.
 *
 * @see GroupCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedListRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:7762","type":"choice"}]
 */
class SortOrderGroupCallCenterAgentThresholdProfileGetAvailableAgentPagedSortedList
{

    /**
     * @ElementName sortByUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserId
     * @Group e2c537e3e39483b96620673a7012ffdd:7762
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserId|null
     */
    private $sortByUserId = null;

    /**
     * @ElementName sortByUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName
     * @Group e2c537e3e39483b96620673a7012ffdd:7762
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null
     */
    private $sortByUserLastName = null;

    /**
     * @ElementName sortByUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName
     * @Group e2c537e3e39483b96620673a7012ffdd:7762
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName|null
     */
    private $sortByUserFirstName = null;

    /**
     * @ElementName sortByDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDn
     * @Group e2c537e3e39483b96620673a7012ffdd:7762
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDn|null
     */
    private $sortByDn = null;

    /**
     * @ElementName sortByExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByExtension
     * @Group e2c537e3e39483b96620673a7012ffdd:7762
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByExtension|null
     */
    private $sortByExtension = null;

    /**
     * @ElementName sortByDepartmentName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName
     * @Group e2c537e3e39483b96620673a7012ffdd:7762
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName|null
     */
    private $sortByDepartmentName = null;

    /**
     * @ElementName sortByEmailAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByEmailAddress
     * @Group e2c537e3e39483b96620673a7012ffdd:7762
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByEmailAddress|null
     */
    private $sortByEmailAddress = null;

    /**
     * @ElementName sortByAgentThresholdProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByAgentThresholdProfile
     * @Group e2c537e3e39483b96620673a7012ffdd:7762
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByAgentThresholdProfile|null
     */
    private $sortByAgentThresholdProfile = null;

    /**
     * Getter for sortByUserId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserId
     */
    public function getSortByUserId()
    {
        return $this->sortByUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserId;
    }

    /**
     * Setter for sortByUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserId $sortByUserId
     * @return $this
     */
    public function setSortByUserId(\CWM\BroadWorksConnector\Ocip\Models\SortByUserId $sortByUserId)
    {
        $this->sortByUserId = $sortByUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserId()
    {
        $this->sortByUserId = null;
        return $this;
    }

    /**
     * Getter for sortByUserLastName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName
     */
    public function getSortByUserLastName()
    {
        return $this->sortByUserLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserLastName;
    }

    /**
     * Setter for sortByUserLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName $sortByUserLastName
     * @return $this
     */
    public function setSortByUserLastName(\CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName $sortByUserLastName)
    {
        $this->sortByUserLastName = $sortByUserLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserLastName()
    {
        $this->sortByUserLastName = null;
        return $this;
    }

    /**
     * Getter for sortByUserFirstName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName
     */
    public function getSortByUserFirstName()
    {
        return $this->sortByUserFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserFirstName;
    }

    /**
     * Setter for sortByUserFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName $sortByUserFirstName
     * @return $this
     */
    public function setSortByUserFirstName(\CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName $sortByUserFirstName)
    {
        $this->sortByUserFirstName = $sortByUserFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserFirstName()
    {
        $this->sortByUserFirstName = null;
        return $this;
    }

    /**
     * Getter for sortByDn
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByDn
     */
    public function getSortByDn()
    {
        return $this->sortByDn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByDn;
    }

    /**
     * Setter for sortByDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByDn $sortByDn
     * @return $this
     */
    public function setSortByDn(\CWM\BroadWorksConnector\Ocip\Models\SortByDn $sortByDn)
    {
        $this->sortByDn = $sortByDn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByDn()
    {
        $this->sortByDn = null;
        return $this;
    }

    /**
     * Getter for sortByExtension
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByExtension
     */
    public function getSortByExtension()
    {
        return $this->sortByExtension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByExtension;
    }

    /**
     * Setter for sortByExtension
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByExtension $sortByExtension
     * @return $this
     */
    public function setSortByExtension(\CWM\BroadWorksConnector\Ocip\Models\SortByExtension $sortByExtension)
    {
        $this->sortByExtension = $sortByExtension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByExtension()
    {
        $this->sortByExtension = null;
        return $this;
    }

    /**
     * Getter for sortByDepartmentName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName
     */
    public function getSortByDepartmentName()
    {
        return $this->sortByDepartmentName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByDepartmentName;
    }

    /**
     * Setter for sortByDepartmentName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName $sortByDepartmentName
     * @return $this
     */
    public function setSortByDepartmentName(\CWM\BroadWorksConnector\Ocip\Models\SortByDepartmentName $sortByDepartmentName)
    {
        $this->sortByDepartmentName = $sortByDepartmentName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByDepartmentName()
    {
        $this->sortByDepartmentName = null;
        return $this;
    }

    /**
     * Getter for sortByEmailAddress
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByEmailAddress
     */
    public function getSortByEmailAddress()
    {
        return $this->sortByEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByEmailAddress;
    }

    /**
     * Setter for sortByEmailAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByEmailAddress $sortByEmailAddress
     * @return $this
     */
    public function setSortByEmailAddress(\CWM\BroadWorksConnector\Ocip\Models\SortByEmailAddress $sortByEmailAddress)
    {
        $this->sortByEmailAddress = $sortByEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByEmailAddress()
    {
        $this->sortByEmailAddress = null;
        return $this;
    }

    /**
     * Getter for sortByAgentThresholdProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByAgentThresholdProfile
     */
    public function getSortByAgentThresholdProfile()
    {
        return $this->sortByAgentThresholdProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByAgentThresholdProfile;
    }

    /**
     * Setter for sortByAgentThresholdProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByAgentThresholdProfile $sortByAgentThresholdProfile
     * @return $this
     */
    public function setSortByAgentThresholdProfile(\CWM\BroadWorksConnector\Ocip\Models\SortByAgentThresholdProfile $sortByAgentThresholdProfile)
    {
        $this->sortByAgentThresholdProfile = $sortByAgentThresholdProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByAgentThresholdProfile()
    {
        $this->sortByAgentThresholdProfile = null;
        return $this;
    }


}

