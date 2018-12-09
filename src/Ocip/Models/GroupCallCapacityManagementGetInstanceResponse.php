<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCapacityManagementGetInstanceResponse
 *
 * Response to the GroupCallCapacityManagementGetInstanceRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see GroupCallCapacityManagementGetInstanceRequest
 * @Groups [{"id":"a508c8d47cf6dc9787cc3865bf94b9f5:225","type":"sequence"}]
 */
class GroupCallCapacityManagementGetInstanceResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @Type string
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:225
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName maxActiveCallsAllowed
     * @Type int
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:225
     * @var int|null
     */
    private $maxActiveCallsAllowed = null;

    /**
     * @ElementName maxIncomingActiveCallsAllowed
     * @Type int
     * @Optional
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:225
     * @var int|null
     */
    private $maxIncomingActiveCallsAllowed = null;

    /**
     * @ElementName maxOutgoingActiveCallsAllowed
     * @Type int
     * @Optional
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:225
     * @var int|null
     */
    private $maxOutgoingActiveCallsAllowed = null;

    /**
     * @ElementName defaultGroupForNewUsers
     * @Type bool
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:225
     * @var bool|null
     */
    private $defaultGroupForNewUsers = null;

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group a508c8d47cf6dc9787cc3865bf94b9f5:225
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

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
     * Getter for maxActiveCallsAllowed
     *
     * @return int
     */
    public function getMaxActiveCallsAllowed()
    {
        return $this->maxActiveCallsAllowed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxActiveCallsAllowed;
    }

    /**
     * Setter for maxActiveCallsAllowed
     *
     * @param int $maxActiveCallsAllowed
     * @return $this
     */
    public function setMaxActiveCallsAllowed($maxActiveCallsAllowed)
    {
        $this->maxActiveCallsAllowed = $maxActiveCallsAllowed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxActiveCallsAllowed()
    {
        $this->maxActiveCallsAllowed = null;
        return $this;
    }

    /**
     * Getter for maxIncomingActiveCallsAllowed
     *
     * @return int
     */
    public function getMaxIncomingActiveCallsAllowed()
    {
        return $this->maxIncomingActiveCallsAllowed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxIncomingActiveCallsAllowed;
    }

    /**
     * Setter for maxIncomingActiveCallsAllowed
     *
     * @param int $maxIncomingActiveCallsAllowed
     * @return $this
     */
    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed)
    {
        $this->maxIncomingActiveCallsAllowed = $maxIncomingActiveCallsAllowed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxIncomingActiveCallsAllowed()
    {
        $this->maxIncomingActiveCallsAllowed = null;
        return $this;
    }

    /**
     * Getter for maxOutgoingActiveCallsAllowed
     *
     * @return int
     */
    public function getMaxOutgoingActiveCallsAllowed()
    {
        return $this->maxOutgoingActiveCallsAllowed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxOutgoingActiveCallsAllowed;
    }

    /**
     * Setter for maxOutgoingActiveCallsAllowed
     *
     * @param int $maxOutgoingActiveCallsAllowed
     * @return $this
     */
    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed)
    {
        $this->maxOutgoingActiveCallsAllowed = $maxOutgoingActiveCallsAllowed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxOutgoingActiveCallsAllowed()
    {
        $this->maxOutgoingActiveCallsAllowed = null;
        return $this;
    }

    /**
     * Getter for defaultGroupForNewUsers
     *
     * @return bool
     */
    public function getDefaultGroupForNewUsers()
    {
        return $this->defaultGroupForNewUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultGroupForNewUsers;
    }

    /**
     * Setter for defaultGroupForNewUsers
     *
     * @param bool $defaultGroupForNewUsers
     * @return $this
     */
    public function setDefaultGroupForNewUsers($defaultGroupForNewUsers)
    {
        $this->defaultGroupForNewUsers = $defaultGroupForNewUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultGroupForNewUsers()
    {
        $this->defaultGroupForNewUsers = null;
        return $this;
    }

    /**
     * Getter for userTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserTable()
    {
        return $this->userTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserTable()
    {
        $this->userTable = null;
        return $this;
    }


}

