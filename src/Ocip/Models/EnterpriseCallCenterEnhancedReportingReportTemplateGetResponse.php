<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingReportTemplateGetResponse
 *
 * Response to EnterpriseCallCenterEnhancedReportingReportTemplateGetRequest.
 *
 * @see EnterpriseCallCenterEnhancedReportingReportTemplateGetRequest
 */
class EnterpriseCallCenterEnhancedReportingReportTemplateGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName dataTemplate
     * @Type string
     * @var string|null
     */
    private $dataTemplate = null;

    /**
     * @ElementName filterNumber
     * @Type int
     * @var int|null
     */
    private $filterNumber = null;

    /**
     * @ElementName xsltTemplateDescription
     * @Type string
     * @var string|null
     */
    private $xsltTemplateDescription = null;

    /**
     * @ElementName scope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption|null
     */
    private $scope = null;

    /**
     * @ElementName isEnabled
     * @Type bool
     * @var bool|null
     */
    private $isEnabled = null;

    /**
     * @ElementName isRealtimeReport
     * @Type bool
     * @var bool|null
     */
    private $isRealtimeReport = null;

    /**
     * @ElementName callCompletionThresholdParam
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $callCompletionThresholdParam = null;

    /**
     * @ElementName shortDurationThresholdParam
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $shortDurationThresholdParam = null;

    /**
     * @ElementName serviceLevelThresholdParam
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $serviceLevelThresholdParam = null;

    /**
     * @ElementName serviceLevelInclusionsParam
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $serviceLevelInclusionsParam = null;

    /**
     * @ElementName serviceLevelObjectiveThresholdParam
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $serviceLevelObjectiveThresholdParam = null;

    /**
     * @ElementName abandonedCallThresholdParam
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption|null
     */
    private $abandonedCallThresholdParam = null;

    /**
     * @ElementName serviceLevelThresholdParamNumber
     * @Type int
     * @var int|null
     */
    private $serviceLevelThresholdParamNumber = null;

    /**
     * @ElementName abandonedCallThresholdParamNumber
     * @Type int
     * @var int|null
     */
    private $abandonedCallThresholdParamNumber = null;

    /**
     * @ElementName filterValue
     * @Type string
     * @Array
     * @var string[]
     */
    private $filterValue = array(
        
    );

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for dataTemplate
     *
     * @return string
     */
    public function getDataTemplate()
    {
        return $this->dataTemplate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dataTemplate;
    }

    /**
     * Setter for dataTemplate
     *
     * @param string $dataTemplate
     * @return $this
     */
    public function setDataTemplate($dataTemplate)
    {
        $this->dataTemplate = $dataTemplate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDataTemplate()
    {
        $this->dataTemplate = null;
        return $this;
    }

    /**
     * Getter for filterNumber
     *
     * @return int
     */
    public function getFilterNumber()
    {
        return $this->filterNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->filterNumber;
    }

    /**
     * Setter for filterNumber
     *
     * @param int $filterNumber
     * @return $this
     */
    public function setFilterNumber($filterNumber)
    {
        $this->filterNumber = $filterNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFilterNumber()
    {
        $this->filterNumber = null;
        return $this;
    }

    /**
     * Getter for xsltTemplateDescription
     *
     * @return string
     */
    public function getXsltTemplateDescription()
    {
        return $this->xsltTemplateDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->xsltTemplateDescription;
    }

    /**
     * Setter for xsltTemplateDescription
     *
     * @param string $xsltTemplateDescription
     * @return $this
     */
    public function setXsltTemplateDescription($xsltTemplateDescription)
    {
        $this->xsltTemplateDescription = $xsltTemplateDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetXsltTemplateDescription()
    {
        $this->xsltTemplateDescription = null;
        return $this;
    }

    /**
     * Getter for scope
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption
     */
    public function getScope()
    {
        return $this->scope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scope;
    }

    /**
     * Setter for scope
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption $scope
     * @return $this
     */
    public function setScope(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateAccessOption $scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScope()
    {
        $this->scope = null;
        return $this;
    }

    /**
     * Getter for isEnabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->isEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isEnabled;
    }

    /**
     * Setter for isEnabled
     *
     * @param bool $isEnabled
     * @return $this
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsEnabled()
    {
        $this->isEnabled = null;
        return $this;
    }

    /**
     * Getter for isRealtimeReport
     *
     * @return bool
     */
    public function getIsRealtimeReport()
    {
        return $this->isRealtimeReport instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isRealtimeReport;
    }

    /**
     * Setter for isRealtimeReport
     *
     * @param bool $isRealtimeReport
     * @return $this
     */
    public function setIsRealtimeReport($isRealtimeReport)
    {
        $this->isRealtimeReport = $isRealtimeReport;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsRealtimeReport()
    {
        $this->isRealtimeReport = null;
        return $this;
    }

    /**
     * Getter for callCompletionThresholdParam
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     */
    public function getCallCompletionThresholdParam()
    {
        return $this->callCompletionThresholdParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callCompletionThresholdParam;
    }

    /**
     * Setter for callCompletionThresholdParam
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $callCompletionThresholdParam
     * @return $this
     */
    public function setCallCompletionThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $callCompletionThresholdParam)
    {
        $this->callCompletionThresholdParam = $callCompletionThresholdParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallCompletionThresholdParam()
    {
        $this->callCompletionThresholdParam = null;
        return $this;
    }

    /**
     * Getter for shortDurationThresholdParam
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     */
    public function getShortDurationThresholdParam()
    {
        return $this->shortDurationThresholdParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->shortDurationThresholdParam;
    }

    /**
     * Setter for shortDurationThresholdParam
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $shortDurationThresholdParam
     * @return $this
     */
    public function setShortDurationThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $shortDurationThresholdParam)
    {
        $this->shortDurationThresholdParam = $shortDurationThresholdParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetShortDurationThresholdParam()
    {
        $this->shortDurationThresholdParam = null;
        return $this;
    }

    /**
     * Getter for serviceLevelThresholdParam
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     */
    public function getServiceLevelThresholdParam()
    {
        return $this->serviceLevelThresholdParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelThresholdParam;
    }

    /**
     * Setter for serviceLevelThresholdParam
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelThresholdParam
     * @return $this
     */
    public function setServiceLevelThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelThresholdParam)
    {
        $this->serviceLevelThresholdParam = $serviceLevelThresholdParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceLevelThresholdParam()
    {
        $this->serviceLevelThresholdParam = null;
        return $this;
    }

    /**
     * Getter for serviceLevelInclusionsParam
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     */
    public function getServiceLevelInclusionsParam()
    {
        return $this->serviceLevelInclusionsParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelInclusionsParam;
    }

    /**
     * Setter for serviceLevelInclusionsParam
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelInclusionsParam
     * @return $this
     */
    public function setServiceLevelInclusionsParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelInclusionsParam)
    {
        $this->serviceLevelInclusionsParam = $serviceLevelInclusionsParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceLevelInclusionsParam()
    {
        $this->serviceLevelInclusionsParam = null;
        return $this;
    }

    /**
     * Getter for serviceLevelObjectiveThresholdParam
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     */
    public function getServiceLevelObjectiveThresholdParam()
    {
        return $this->serviceLevelObjectiveThresholdParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelObjectiveThresholdParam;
    }

    /**
     * Setter for serviceLevelObjectiveThresholdParam
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelObjectiveThresholdParam
     * @return $this
     */
    public function setServiceLevelObjectiveThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $serviceLevelObjectiveThresholdParam)
    {
        $this->serviceLevelObjectiveThresholdParam = $serviceLevelObjectiveThresholdParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceLevelObjectiveThresholdParam()
    {
        $this->serviceLevelObjectiveThresholdParam = null;
        return $this;
    }

    /**
     * Getter for abandonedCallThresholdParam
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption
     */
    public function getAbandonedCallThresholdParam()
    {
        return $this->abandonedCallThresholdParam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->abandonedCallThresholdParam;
    }

    /**
     * Setter for abandonedCallThresholdParam
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $abandonedCallThresholdParam
     * @return $this
     */
    public function setAbandonedCallThresholdParam(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportInputParameterOption $abandonedCallThresholdParam)
    {
        $this->abandonedCallThresholdParam = $abandonedCallThresholdParam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAbandonedCallThresholdParam()
    {
        $this->abandonedCallThresholdParam = null;
        return $this;
    }

    /**
     * Getter for serviceLevelThresholdParamNumber
     *
     * @return int
     */
    public function getServiceLevelThresholdParamNumber()
    {
        return $this->serviceLevelThresholdParamNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceLevelThresholdParamNumber;
    }

    /**
     * Setter for serviceLevelThresholdParamNumber
     *
     * @param int $serviceLevelThresholdParamNumber
     * @return $this
     */
    public function setServiceLevelThresholdParamNumber($serviceLevelThresholdParamNumber)
    {
        $this->serviceLevelThresholdParamNumber = $serviceLevelThresholdParamNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceLevelThresholdParamNumber()
    {
        $this->serviceLevelThresholdParamNumber = null;
        return $this;
    }

    /**
     * Getter for abandonedCallThresholdParamNumber
     *
     * @return int
     */
    public function getAbandonedCallThresholdParamNumber()
    {
        return $this->abandonedCallThresholdParamNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->abandonedCallThresholdParamNumber;
    }

    /**
     * Setter for abandonedCallThresholdParamNumber
     *
     * @param int $abandonedCallThresholdParamNumber
     * @return $this
     */
    public function setAbandonedCallThresholdParamNumber($abandonedCallThresholdParamNumber)
    {
        $this->abandonedCallThresholdParamNumber = $abandonedCallThresholdParamNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAbandonedCallThresholdParamNumber()
    {
        $this->abandonedCallThresholdParamNumber = null;
        return $this;
    }

    /**
     * Getter for filterValue
     *
     * @return string[]
     */
    public function getFilterValue()
    {
        return $this->filterValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->filterValue;
    }

    /**
     * Setter for filterValue
     *
     * @param string[] $filterValue
     * @return $this
     */
    public function setFilterValue(array $filterValue)
    {
        $this->filterValue = $filterValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFilterValue()
    {
        $this->filterValue = null;
        return $this;
    }

    /**
     * Adder for filterValue
     *
     * @param string $filterValue
     * @return $this
     */
    public function addFilterValue(string $filterValue)
    {
        $this->filterValue[] = $filterValue;
        return $this;
    }


}

