<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnAssignListRequest
 *
 * Assign a list of service provider DNs to a group. It is possible to assign either: a single DN,
 *         or a list of DNs, or a range of DNs, or any combination thereof.
 *         The DNs must have previously been added to the service provider or enterprise.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:4957","type":"sequence"}]
 */
class GroupDnAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:4957
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:4957
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:4957
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $phoneNumber = array(
        
    );

    /**
     * @ElementName dnRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNRange
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:4957
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    protected $dnRange = array(
        
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
     * Getter for phoneNumber
     *
     * @return string[]
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string[] $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(array $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Adder for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function addPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber[] = $phoneNumber;
        return $this;
    }

    /**
     * Getter for dnRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    public function getDnRange()
    {
        return $this->dnRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnRange;
    }

    /**
     * Setter for dnRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange[] $dnRange
     * @return $this
     */
    public function setDnRange(array $dnRange)
    {
        $this->dnRange = $dnRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnRange()
    {
        $this->dnRange = null;
        return $this;
    }

    /**
     * Adder for dnRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange $dnRange
     * @return $this
     */
    public function addDnRange($dnRange)
    {
        $this->dnRange[] = $dnRange;
        return $this;
    }


}

