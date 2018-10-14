<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetListRequest
 *
 * Requests the list of access devices in a service provider.
 *         The response is either ServiceProviderAccessDeviceGetListResponse or
 * ErrorResponse.
 *
 * @see ServiceProviderAccessDeviceGetListResponse
 * @see ErrorResponse
 */
class ServiceProviderAccessDeviceGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDeviceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[]
     */
    private $searchCriteriaDeviceName = array(
        
    );

    /**
     * @ElementName searchCriteriaDeviceMACAddress
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress[]
     */
    private $searchCriteriaDeviceMACAddress = array(
        
    );

    /**
     * @ElementName searchCriteriaDeviceNetAddress
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress[]
     */
    private $searchCriteriaDeviceNetAddress = array(
        
    );

    /**
     * @ElementName searchCriteriaExactDeviceType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType|null
     */
    private $searchCriteriaExactDeviceType = null;

    /**
     * @ElementName searchCriteriaAccessDeviceVersion
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion[]
     */
    private $searchCriteriaAccessDeviceVersion = array(
        
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
     * Getter for searchCriteriaDeviceName
     *
     * @ElementName searchCriteriaDeviceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[]
     */
    public function getSearchCriteriaDeviceName()
    {
        return $this->searchCriteriaDeviceName;
    }

    /**
     * Setter for searchCriteriaDeviceName
     *
     * @ElementName searchCriteriaDeviceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName[] $searchCriteriaDeviceName
     * @return $this
     */
    public function setSearchCriteriaDeviceName(array $searchCriteriaDeviceName)
    {
        $this->searchCriteriaDeviceName = $searchCriteriaDeviceName;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceName
     *
     * @ElementName searchCriteriaDeviceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceName $searchCriteriaDeviceName
     * @return $this
     */
    public function addSearchCriteriaDeviceName($searchCriteriaDeviceName)
    {
        $this->searchCriteriaDeviceName []= $searchCriteriaDeviceName;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceMACAddress
     *
     * @ElementName searchCriteriaDeviceMACAddress
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress[]
     */
    public function getSearchCriteriaDeviceMACAddress()
    {
        return $this->searchCriteriaDeviceMACAddress;
    }

    /**
     * Setter for searchCriteriaDeviceMACAddress
     *
     * @ElementName searchCriteriaDeviceMACAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress[] $searchCriteriaDeviceMACAddress
     * @return $this
     */
    public function setSearchCriteriaDeviceMACAddress(array $searchCriteriaDeviceMACAddress)
    {
        $this->searchCriteriaDeviceMACAddress = $searchCriteriaDeviceMACAddress;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceMACAddress
     *
     * @ElementName searchCriteriaDeviceMACAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress
     * @return $this
     */
    public function addSearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress)
    {
        $this->searchCriteriaDeviceMACAddress []= $searchCriteriaDeviceMACAddress;
        return $this;
    }

    /**
     * Getter for searchCriteriaDeviceNetAddress
     *
     * @ElementName searchCriteriaDeviceNetAddress
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress[]
     */
    public function getSearchCriteriaDeviceNetAddress()
    {
        return $this->searchCriteriaDeviceNetAddress;
    }

    /**
     * Setter for searchCriteriaDeviceNetAddress
     *
     * @ElementName searchCriteriaDeviceNetAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress[] $searchCriteriaDeviceNetAddress
     * @return $this
     */
    public function setSearchCriteriaDeviceNetAddress(array $searchCriteriaDeviceNetAddress)
    {
        $this->searchCriteriaDeviceNetAddress = $searchCriteriaDeviceNetAddress;
        return $this;
    }

    /**
     * Adder for searchCriteriaDeviceNetAddress
     *
     * @ElementName searchCriteriaDeviceNetAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress
     * @return $this
     */
    public function addSearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress)
    {
        $this->searchCriteriaDeviceNetAddress []= $searchCriteriaDeviceNetAddress;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDeviceType
     *
     * @ElementName searchCriteriaExactDeviceType
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType|null
     */
    public function getSearchCriteriaExactDeviceType()
    {
        return $this->searchCriteriaExactDeviceType;
    }

    /**
     * Setter for searchCriteriaExactDeviceType
     *
     * @ElementName searchCriteriaExactDeviceType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType|null $searchCriteriaExactDeviceType
     * @return $this
     */
    public function setSearchCriteriaExactDeviceType(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType)
    {
        $this->searchCriteriaExactDeviceType = $searchCriteriaExactDeviceType;
        return $this;
    }

    /**
     * Getter for searchCriteriaAccessDeviceVersion
     *
     * @ElementName searchCriteriaAccessDeviceVersion
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion[]
     */
    public function getSearchCriteriaAccessDeviceVersion()
    {
        return $this->searchCriteriaAccessDeviceVersion;
    }

    /**
     * Setter for searchCriteriaAccessDeviceVersion
     *
     * @ElementName searchCriteriaAccessDeviceVersion
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion[] $searchCriteriaAccessDeviceVersion
     * @return $this
     */
    public function setSearchCriteriaAccessDeviceVersion(array $searchCriteriaAccessDeviceVersion)
    {
        $this->searchCriteriaAccessDeviceVersion = $searchCriteriaAccessDeviceVersion;
        return $this;
    }

    /**
     * Adder for searchCriteriaAccessDeviceVersion
     *
     * @ElementName searchCriteriaAccessDeviceVersion
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceVersion $searchCriteriaAccessDeviceVersion
     * @return $this
     */
    public function addSearchCriteriaAccessDeviceVersion($searchCriteriaAccessDeviceVersion)
    {
        $this->searchCriteriaAccessDeviceVersion []= $searchCriteriaAccessDeviceVersion;
        return $this;
    }


}

