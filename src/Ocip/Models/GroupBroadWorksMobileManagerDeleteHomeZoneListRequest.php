<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobileManagerDeleteHomeZoneListRequest
 *
 * Delete a list of home zones from the BroadWorks Mobile Manager.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupBroadWorksMobileManagerDeleteHomeZoneListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName homeZoneId
     * @var string[]
     */
    private $homeZoneId = array(
        
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
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for homeZoneId
     *
     * @ElementName homeZoneId
     * @return string[]
     */
    public function getHomeZoneId()
    {
        return $this->homeZoneId;
    }

    /**
     * Setter for homeZoneId
     *
     * @ElementName homeZoneId
     * @param string[] $homeZoneId
     * @return $this
     */
    public function setHomeZoneId(array $homeZoneId)
    {
        $this->homeZoneId = $homeZoneId;
        return $this;
    }

    /**
     * Adder for homeZoneId
     *
     * @ElementName homeZoneId
     * @param string $homeZoneId
     * @return $this
     */
    public function addHomeZoneId(string $homeZoneId)
    {
        $this->homeZoneId []= $homeZoneId;
        return $this;
    }


}

