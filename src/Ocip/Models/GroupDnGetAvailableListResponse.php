<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetAvailableListResponse
 *
 * Response to the GroupDnGetAvailableListRequest.
 *         The response contains the list of DNs that are assigned to a group and still available for
 *         assignment to users or service instances within the group.
 *
 * @see GroupDnGetAvailableListRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:5187","type":"sequence"}]
 */
class GroupDnGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:5187
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    protected $phoneNumber = array(
        
    );

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


}

