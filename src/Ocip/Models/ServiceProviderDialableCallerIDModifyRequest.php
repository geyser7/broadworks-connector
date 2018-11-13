<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDialableCallerIDModifyRequest
 *
 * Modify the service provider?s Dialable Caller ID settings and criteria list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderDialableCallerIDModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName useServiceProviderCriteria
     * @Type bool
     * @var bool|null
     */
    private $useServiceProviderCriteria = null;

    /**
     * @ElementName nsScreeningFailurePolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy|null
     */
    private $nsScreeningFailurePolicy = null;

    /**
     * @ElementName criteriaPriorityOrder
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder[]
     */
    private $criteriaPriorityOrder = array(
        
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
     * Getter for useServiceProviderCriteria
     *
     * @return bool
     */
    public function getUseServiceProviderCriteria()
    {
        return $this->useServiceProviderCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useServiceProviderCriteria;
    }

    /**
     * Setter for useServiceProviderCriteria
     *
     * @param bool $useServiceProviderCriteria
     * @return $this
     */
    public function setUseServiceProviderCriteria($useServiceProviderCriteria)
    {
        $this->useServiceProviderCriteria = $useServiceProviderCriteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseServiceProviderCriteria()
    {
        $this->useServiceProviderCriteria = null;
        return $this;
    }

    /**
     * Getter for nsScreeningFailurePolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy
     */
    public function getNsScreeningFailurePolicy()
    {
        return $this->nsScreeningFailurePolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nsScreeningFailurePolicy;
    }

    /**
     * Setter for nsScreeningFailurePolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy $nsScreeningFailurePolicy
     * @return $this
     */
    public function setNsScreeningFailurePolicy(\CWM\BroadWorksConnector\Ocip\Models\NsScreeningFailurePolicy $nsScreeningFailurePolicy)
    {
        $this->nsScreeningFailurePolicy = $nsScreeningFailurePolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNsScreeningFailurePolicy()
    {
        $this->nsScreeningFailurePolicy = null;
        return $this;
    }

    /**
     * Getter for criteriaPriorityOrder
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder[]
     */
    public function getCriteriaPriorityOrder()
    {
        return $this->criteriaPriorityOrder instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaPriorityOrder;
    }

    /**
     * Setter for criteriaPriorityOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder[] $criteriaPriorityOrder
     * @return $this
     */
    public function setCriteriaPriorityOrder(array $criteriaPriorityOrder)
    {
        $this->criteriaPriorityOrder = $criteriaPriorityOrder;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaPriorityOrder()
    {
        $this->criteriaPriorityOrder = null;
        return $this;
    }

    /**
     * Adder for criteriaPriorityOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder
     * @return $this
     */
    public function addCriteriaPriorityOrder($criteriaPriorityOrder)
    {
        $this->criteriaPriorityOrder[] = $criteriaPriorityOrder;
        return $this;
    }


}

