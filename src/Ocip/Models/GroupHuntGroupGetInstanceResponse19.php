<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupGetInstanceResponse19
 *
 * Response to GroupHuntGroupGetInstanceRequest19.
 *         Contains the service profile information and a table of assigned users.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 *         "Hiragana Last Name", "Hiragana First Name", "Weight", "Phone Number", 
 *         "Extension", "Department", "Email Address".
 *         The following elements are only used in AS data mode:
 *           useSystemHuntGroupCLIDSetting, value "true" is returned in XS data mode
 *           includeHuntGroupNameInCLID, value "true" is returned in XS data mode
 *          
 *         The following elements are only used in XS data mode:
 *            allowMembersToControlGroupBusy
 *            enableGroupBusy           
 *            
 *         Replaced by: GroupHuntGroupGetInstanceResponse19sp1 in AS data mode
 *
 * @see GroupHuntGroupGetInstanceRequest19
 * @see GroupHuntGroupGetInstanceResponse19sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:686","type":"sequence"}]
 */
class GroupHuntGroupGetInstanceResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName policy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy|null
     */
    private $policy = null;

    /**
     * @ElementName huntAfterNoAnswer
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @var bool|null
     */
    private $huntAfterNoAnswer = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @Type int
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @MinInclusive 1
     * @MaxInclusive 20
     * @var int|null
     */
    private $noAnswerNumberOfRings = null;

    /**
     * @ElementName forwardAfterTimeout
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @var bool|null
     */
    private $forwardAfterTimeout = null;

    /**
     * @ElementName forwardTimeoutSeconds
     * @Type int
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @MinInclusive
     * @MaxInclusive 7200
     * @var int|null
     */
    private $forwardTimeoutSeconds = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $forwardToPhoneNumber = null;

    /**
     * @ElementName agentUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $agentUserTable = null;

    /**
     * @ElementName allowCallWaitingForAgents
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @var bool|null
     */
    private $allowCallWaitingForAgents = null;

    /**
     * @ElementName useSystemHuntGroupCLIDSetting
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @var bool|null
     */
    private $useSystemHuntGroupCLIDSetting = null;

    /**
     * @ElementName includeHuntGroupNameInCLID
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @var bool|null
     */
    private $includeHuntGroupNameInCLID = null;

    /**
     * @ElementName enableNotReachableForwarding
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @var bool|null
     */
    private $enableNotReachableForwarding = null;

    /**
     * @ElementName notReachableForwardToPhoneNumber
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $notReachableForwardToPhoneNumber = null;

    /**
     * @ElementName makeBusyWhenNotReachable
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @var bool|null
     */
    private $makeBusyWhenNotReachable = null;

    /**
     * @ElementName allowMembersToControlGroupBusy
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @var bool|null
     */
    private $allowMembersToControlGroupBusy = null;

    /**
     * @ElementName enableGroupBusy
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:686
     * @var bool|null
     */
    private $enableGroupBusy = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17 $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17 $serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInstanceProfile()
    {
        $this->serviceInstanceProfile = null;
        return $this;
    }

    /**
     * Getter for policy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     */
    public function getPolicy()
    {
        return $this->policy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->policy;
    }

    /**
     * Setter for policy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy $policy
     * @return $this
     */
    public function setPolicy(\CWM\BroadWorksConnector\Ocip\Models\HuntPolicy $policy)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPolicy()
    {
        $this->policy = null;
        return $this;
    }

    /**
     * Getter for huntAfterNoAnswer
     *
     * @return bool
     */
    public function getHuntAfterNoAnswer()
    {
        return $this->huntAfterNoAnswer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->huntAfterNoAnswer;
    }

    /**
     * Setter for huntAfterNoAnswer
     *
     * @param bool $huntAfterNoAnswer
     * @return $this
     */
    public function setHuntAfterNoAnswer($huntAfterNoAnswer)
    {
        $this->huntAfterNoAnswer = $huntAfterNoAnswer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHuntAfterNoAnswer()
    {
        $this->huntAfterNoAnswer = null;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @return int
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @param int $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
    {
        $this->noAnswerNumberOfRings = $noAnswerNumberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerNumberOfRings()
    {
        $this->noAnswerNumberOfRings = null;
        return $this;
    }

    /**
     * Getter for forwardAfterTimeout
     *
     * @return bool
     */
    public function getForwardAfterTimeout()
    {
        return $this->forwardAfterTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardAfterTimeout;
    }

    /**
     * Setter for forwardAfterTimeout
     *
     * @param bool $forwardAfterTimeout
     * @return $this
     */
    public function setForwardAfterTimeout($forwardAfterTimeout)
    {
        $this->forwardAfterTimeout = $forwardAfterTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardAfterTimeout()
    {
        $this->forwardAfterTimeout = null;
        return $this;
    }

    /**
     * Getter for forwardTimeoutSeconds
     *
     * @return int
     */
    public function getForwardTimeoutSeconds()
    {
        return $this->forwardTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardTimeoutSeconds;
    }

    /**
     * Setter for forwardTimeoutSeconds
     *
     * @param int $forwardTimeoutSeconds
     * @return $this
     */
    public function setForwardTimeoutSeconds($forwardTimeoutSeconds)
    {
        $this->forwardTimeoutSeconds = $forwardTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardTimeoutSeconds()
    {
        $this->forwardTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for forwardToPhoneNumber
     *
     * @return string
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @param string $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $this->forwardToPhoneNumber = $forwardToPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardToPhoneNumber()
    {
        $this->forwardToPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for agentUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAgentUserTable()
    {
        return $this->agentUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserTable;
    }

    /**
     * Setter for agentUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentUserTable
     * @return $this
     */
    public function setAgentUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $agentUserTable)
    {
        $this->agentUserTable = $agentUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserTable()
    {
        $this->agentUserTable = null;
        return $this;
    }

    /**
     * Getter for allowCallWaitingForAgents
     *
     * @return bool
     */
    public function getAllowCallWaitingForAgents()
    {
        return $this->allowCallWaitingForAgents instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowCallWaitingForAgents;
    }

    /**
     * Setter for allowCallWaitingForAgents
     *
     * @param bool $allowCallWaitingForAgents
     * @return $this
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents)
    {
        $this->allowCallWaitingForAgents = $allowCallWaitingForAgents;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowCallWaitingForAgents()
    {
        $this->allowCallWaitingForAgents = null;
        return $this;
    }

    /**
     * Getter for useSystemHuntGroupCLIDSetting
     *
     * @return bool
     */
    public function getUseSystemHuntGroupCLIDSetting()
    {
        return $this->useSystemHuntGroupCLIDSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemHuntGroupCLIDSetting;
    }

    /**
     * Setter for useSystemHuntGroupCLIDSetting
     *
     * @param bool $useSystemHuntGroupCLIDSetting
     * @return $this
     */
    public function setUseSystemHuntGroupCLIDSetting($useSystemHuntGroupCLIDSetting)
    {
        $this->useSystemHuntGroupCLIDSetting = $useSystemHuntGroupCLIDSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemHuntGroupCLIDSetting()
    {
        $this->useSystemHuntGroupCLIDSetting = null;
        return $this;
    }

    /**
     * Getter for includeHuntGroupNameInCLID
     *
     * @return bool
     */
    public function getIncludeHuntGroupNameInCLID()
    {
        return $this->includeHuntGroupNameInCLID instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeHuntGroupNameInCLID;
    }

    /**
     * Setter for includeHuntGroupNameInCLID
     *
     * @param bool $includeHuntGroupNameInCLID
     * @return $this
     */
    public function setIncludeHuntGroupNameInCLID($includeHuntGroupNameInCLID)
    {
        $this->includeHuntGroupNameInCLID = $includeHuntGroupNameInCLID;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeHuntGroupNameInCLID()
    {
        $this->includeHuntGroupNameInCLID = null;
        return $this;
    }

    /**
     * Getter for enableNotReachableForwarding
     *
     * @return bool
     */
    public function getEnableNotReachableForwarding()
    {
        return $this->enableNotReachableForwarding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableNotReachableForwarding;
    }

    /**
     * Setter for enableNotReachableForwarding
     *
     * @param bool $enableNotReachableForwarding
     * @return $this
     */
    public function setEnableNotReachableForwarding($enableNotReachableForwarding)
    {
        $this->enableNotReachableForwarding = $enableNotReachableForwarding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableNotReachableForwarding()
    {
        $this->enableNotReachableForwarding = null;
        return $this;
    }

    /**
     * Getter for notReachableForwardToPhoneNumber
     *
     * @return string
     */
    public function getNotReachableForwardToPhoneNumber()
    {
        return $this->notReachableForwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->notReachableForwardToPhoneNumber;
    }

    /**
     * Setter for notReachableForwardToPhoneNumber
     *
     * @param string $notReachableForwardToPhoneNumber
     * @return $this
     */
    public function setNotReachableForwardToPhoneNumber($notReachableForwardToPhoneNumber)
    {
        $this->notReachableForwardToPhoneNumber = $notReachableForwardToPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNotReachableForwardToPhoneNumber()
    {
        $this->notReachableForwardToPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for makeBusyWhenNotReachable
     *
     * @return bool
     */
    public function getMakeBusyWhenNotReachable()
    {
        return $this->makeBusyWhenNotReachable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->makeBusyWhenNotReachable;
    }

    /**
     * Setter for makeBusyWhenNotReachable
     *
     * @param bool $makeBusyWhenNotReachable
     * @return $this
     */
    public function setMakeBusyWhenNotReachable($makeBusyWhenNotReachable)
    {
        $this->makeBusyWhenNotReachable = $makeBusyWhenNotReachable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMakeBusyWhenNotReachable()
    {
        $this->makeBusyWhenNotReachable = null;
        return $this;
    }

    /**
     * Getter for allowMembersToControlGroupBusy
     *
     * @return bool
     */
    public function getAllowMembersToControlGroupBusy()
    {
        return $this->allowMembersToControlGroupBusy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowMembersToControlGroupBusy;
    }

    /**
     * Setter for allowMembersToControlGroupBusy
     *
     * @param bool $allowMembersToControlGroupBusy
     * @return $this
     */
    public function setAllowMembersToControlGroupBusy($allowMembersToControlGroupBusy)
    {
        $this->allowMembersToControlGroupBusy = $allowMembersToControlGroupBusy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowMembersToControlGroupBusy()
    {
        $this->allowMembersToControlGroupBusy = null;
        return $this;
    }

    /**
     * Getter for enableGroupBusy
     *
     * @return bool
     */
    public function getEnableGroupBusy()
    {
        return $this->enableGroupBusy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableGroupBusy;
    }

    /**
     * Setter for enableGroupBusy
     *
     * @param bool $enableGroupBusy
     * @return $this
     */
    public function setEnableGroupBusy($enableGroupBusy)
    {
        $this->enableGroupBusy = $enableGroupBusy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableGroupBusy()
    {
        $this->enableGroupBusy = null;
        return $this;
    }


}

