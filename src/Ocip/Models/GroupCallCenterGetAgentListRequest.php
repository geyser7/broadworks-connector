<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetAgentListRequest
 *
 * Get a list of agents assigned to a call center.
 *         The response is either a GroupCallCenterGetAgentListResponse or an ErrorResponse.
 *
 *         The following element is only used in AS data mode and ignored in XS data mode:
 *           searchCriteriaExactSkillLevel
 *
 * @see GroupCallCenterGetAgentListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:3971","type":"sequence"}]
 */
class GroupCallCenterGetAgentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:3971
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3971
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3971
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    protected $searchCriteriaUserLastName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3971
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    protected $searchCriteriaUserFirstName = array(
        
    );

    /**
     * @ElementName searchCriteriaExactUserDepartment
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3971
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment|null
     */
    protected $searchCriteriaExactUserDepartment = null;

    /**
     * @ElementName searchCriteriaExactUserGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3971
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup|null
     */
    protected $searchCriteriaExactUserGroup = null;

    /**
     * @ElementName searchCriteriaUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3971
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    protected $searchCriteriaUserId = array(
        
    );

    /**
     * @ElementName searchCriteriaDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3971
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    protected $searchCriteriaDn = array(
        
    );

    /**
     * @ElementName searchCriteriaExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3971
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    protected $searchCriteriaExtension = array(
        
    );

    /**
     * @ElementName searchCriteriaExactSkillLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSkillLevel
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:3971
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSkillLevel|null
     */
    protected $searchCriteriaExactSkillLevel = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for responseSizeLimit
     *
     * @return int
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @param int $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseSizeLimit()
    {
        $this->responseSizeLimit = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserLastName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserLastName;
    }

    /**
     * Setter for searchCriteriaUserLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[] $searchCriteriaUserLastName
     * @return $this
     */
    public function setSearchCriteriaUserLastName(array $searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName = $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserLastName()
    {
        $this->searchCriteriaUserLastName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName $searchCriteriaUserLastName
     * @return $this
     */
    public function addSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName[] = $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserFirstName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserFirstName;
    }

    /**
     * Setter for searchCriteriaUserFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[] $searchCriteriaUserFirstName
     * @return $this
     */
    public function setSearchCriteriaUserFirstName(array $searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName = $searchCriteriaUserFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserFirstName()
    {
        $this->searchCriteriaUserFirstName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName $searchCriteriaUserFirstName
     * @return $this
     */
    public function addSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName[] = $searchCriteriaUserFirstName;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactUserDepartment
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return $this->searchCriteriaExactUserDepartment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactUserDepartment;
    }

    /**
     * Setter for searchCriteriaExactUserDepartment
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment
     * @return $this
     */
    public function setSearchCriteriaExactUserDepartment(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment)
    {
        $this->searchCriteriaExactUserDepartment = $searchCriteriaExactUserDepartment;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactUserDepartment()
    {
        $this->searchCriteriaExactUserDepartment = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactUserGroup
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup
     */
    public function getSearchCriteriaExactUserGroup()
    {
        return $this->searchCriteriaExactUserGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactUserGroup;
    }

    /**
     * Setter for searchCriteriaExactUserGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup
     * @return $this
     */
    public function setSearchCriteriaExactUserGroup(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup)
    {
        $this->searchCriteriaExactUserGroup = $searchCriteriaExactUserGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactUserGroup()
    {
        $this->searchCriteriaExactUserGroup = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    public function getSearchCriteriaUserId()
    {
        return $this->searchCriteriaUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserId;
    }

    /**
     * Setter for searchCriteriaUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[] $searchCriteriaUserId
     * @return $this
     */
    public function setSearchCriteriaUserId(array $searchCriteriaUserId)
    {
        $this->searchCriteriaUserId = $searchCriteriaUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserId()
    {
        $this->searchCriteriaUserId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId $searchCriteriaUserId
     * @return $this
     */
    public function addSearchCriteriaUserId($searchCriteriaUserId)
    {
        $this->searchCriteriaUserId[] = $searchCriteriaUserId;
        return $this;
    }

    /**
     * Getter for searchCriteriaDn
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDn;
    }

    /**
     * Setter for searchCriteriaDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[] $searchCriteriaDn
     * @return $this
     */
    public function setSearchCriteriaDn(array $searchCriteriaDn)
    {
        $this->searchCriteriaDn = $searchCriteriaDn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDn()
    {
        $this->searchCriteriaDn = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn $searchCriteriaDn
     * @return $this
     */
    public function addSearchCriteriaDn($searchCriteriaDn)
    {
        $this->searchCriteriaDn[] = $searchCriteriaDn;
        return $this;
    }

    /**
     * Getter for searchCriteriaExtension
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    public function getSearchCriteriaExtension()
    {
        return $this->searchCriteriaExtension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExtension;
    }

    /**
     * Setter for searchCriteriaExtension
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[] $searchCriteriaExtension
     * @return $this
     */
    public function setSearchCriteriaExtension(array $searchCriteriaExtension)
    {
        $this->searchCriteriaExtension = $searchCriteriaExtension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExtension()
    {
        $this->searchCriteriaExtension = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExtension
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension $searchCriteriaExtension
     * @return $this
     */
    public function addSearchCriteriaExtension($searchCriteriaExtension)
    {
        $this->searchCriteriaExtension[] = $searchCriteriaExtension;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactSkillLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSkillLevel
     */
    public function getSearchCriteriaExactSkillLevel()
    {
        return $this->searchCriteriaExactSkillLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactSkillLevel;
    }

    /**
     * Setter for searchCriteriaExactSkillLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSkillLevel $searchCriteriaExactSkillLevel
     * @return $this
     */
    public function setSearchCriteriaExactSkillLevel(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactSkillLevel $searchCriteriaExactSkillLevel)
    {
        $this->searchCriteriaExactSkillLevel = $searchCriteriaExactSkillLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactSkillLevel()
    {
        $this->searchCriteriaExactSkillLevel = null;
        return $this;
    }


}

