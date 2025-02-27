<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGeographicalPoolIMRNGetListRequest
 *
 * Get a list of BroadWorks Mobility IMRN numbers from a geographical pool.
 *         The response is either a SystemBroadWorksMobilityGeographicalPoolIMRNGetListResponse
 *         or an ErrorResponse.
 *
 * @see SystemBroadWorksMobilityGeographicalPoolIMRNGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:848","type":"sequence"}]
 */
class SystemBroadWorksMobilityGeographicalPoolIMRNGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName geographicalPoolName
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:848
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $geographicalPoolName = null;

    /**
     * @ElementName searchCriteriaIMRN
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN
     * @Array
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:848
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN[]
     */
    protected $searchCriteriaIMRN = array(
        
    );

    /**
     * Getter for geographicalPoolName
     *
     * @return string
     */
    public function getGeographicalPoolName()
    {
        return $this->geographicalPoolName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->geographicalPoolName;
    }

    /**
     * Setter for geographicalPoolName
     *
     * @param string $geographicalPoolName
     * @return $this
     */
    public function setGeographicalPoolName($geographicalPoolName)
    {
        $this->geographicalPoolName = $geographicalPoolName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGeographicalPoolName()
    {
        $this->geographicalPoolName = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaIMRN
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN[]
     */
    public function getSearchCriteriaIMRN()
    {
        return $this->searchCriteriaIMRN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaIMRN;
    }

    /**
     * Setter for searchCriteriaIMRN
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN[] $searchCriteriaIMRN
     * @return $this
     */
    public function setSearchCriteriaIMRN(array $searchCriteriaIMRN)
    {
        $this->searchCriteriaIMRN = $searchCriteriaIMRN;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaIMRN()
    {
        $this->searchCriteriaIMRN = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaIMRN
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaIMRN $searchCriteriaIMRN
     * @return $this
     */
    public function addSearchCriteriaIMRN($searchCriteriaIMRN)
    {
        $this->searchCriteriaIMRN[] = $searchCriteriaIMRN;
        return $this;
    }


}

