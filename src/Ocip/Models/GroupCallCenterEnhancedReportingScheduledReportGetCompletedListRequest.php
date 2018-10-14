<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingScheduledReportGetCompletedListRequest
 *
 * Request to get a list of completed group level call center reporting scheduled
 * reports.
 *         The response is either a
 * GroupCallCenterEnhancedReportingScheduledReportGetCompletedListResponse or an
 * ErrorResponse.
 *
 * @see GroupCallCenterEnhancedReportingScheduledReportGetCompletedListResponse
 * @see ErrorResponse
 */
class GroupCallCenterEnhancedReportingScheduledReportGetCompletedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaCallCenterScheduledReportName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName[]
     */
    private $searchCriteriaCallCenterScheduledReportName = array(
        
    );

    /**
     * @ElementName searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor|null
     */
    private $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null;

    /**
     * @ElementName searchCriteriaExactCallCenterReportTemplateKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterReportTemplateKey|null
     */
    private $searchCriteriaExactCallCenterReportTemplateKey = null;

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
     * Getter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @return int|null
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @param int|null $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * Getter for searchCriteriaCallCenterScheduledReportName
     *
     * @ElementName searchCriteriaCallCenterScheduledReportName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName[]
     */
    public function getSearchCriteriaCallCenterScheduledReportName()
    {
        return $this->searchCriteriaCallCenterScheduledReportName;
    }

    /**
     * Setter for searchCriteriaCallCenterScheduledReportName
     *
     * @ElementName searchCriteriaCallCenterScheduledReportName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName[] $searchCriteriaCallCenterScheduledReportName
     * @return $this
     */
    public function setSearchCriteriaCallCenterScheduledReportName(array $searchCriteriaCallCenterScheduledReportName)
    {
        $this->searchCriteriaCallCenterScheduledReportName = $searchCriteriaCallCenterScheduledReportName;
        return $this;
    }

    /**
     * Adder for searchCriteriaCallCenterScheduledReportName
     *
     * @ElementName searchCriteriaCallCenterScheduledReportName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName
     * @return $this
     */
    public function addSearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName)
    {
        $this->searchCriteriaCallCenterScheduledReportName []= $searchCriteriaCallCenterScheduledReportName;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     *
     * @ElementName searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor|null
     */
    public function getSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor()
    {
        return $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
    }

    /**
     * Setter for searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     *
     * @ElementName searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor|null $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     * @return $this
     */
    public function setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor)
    {
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactCallCenterReportTemplateKey
     *
     * @ElementName searchCriteriaExactCallCenterReportTemplateKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterReportTemplateKey|null
     */
    public function getSearchCriteriaExactCallCenterReportTemplateKey()
    {
        return $this->searchCriteriaExactCallCenterReportTemplateKey;
    }

    /**
     * Setter for searchCriteriaExactCallCenterReportTemplateKey
     *
     * @ElementName searchCriteriaExactCallCenterReportTemplateKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterReportTemplateKey|null $searchCriteriaExactCallCenterReportTemplateKey
     * @return $this
     */
    public function setSearchCriteriaExactCallCenterReportTemplateKey(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterReportTemplateKey $searchCriteriaExactCallCenterReportTemplateKey)
    {
        $this->searchCriteriaExactCallCenterReportTemplateKey = $searchCriteriaExactCallCenterReportTemplateKey;
        return $this;
    }


}

