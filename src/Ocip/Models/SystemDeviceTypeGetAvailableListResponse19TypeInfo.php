<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetAvailableListResponse19TypeInfo
 *
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:7978","type":"sequence"}]
 */
class SystemDeviceTypeGetAvailableListResponse19TypeInfo
{

    /**
     * @ElementName profile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType
     * @Group de4d76f01f337fe4694212ec9f771753:7978
     * @var \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType|null
     */
    protected $profile = null;

    /**
     * @ElementName staticRegistrationCapable
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:7978
     * @var bool|null
     */
    protected $staticRegistrationCapable = null;

    /**
     * @ElementName configType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7978
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14|null
     */
    protected $configType = null;

    /**
     * @ElementName protocolChoice
     * @Type string
     * @Array
     * @Group de4d76f01f337fe4694212ec9f771753:7978
     * @MinLength 1
     * @MaxLength 20
     * @var string[]
     */
    protected $protocolChoice = array(
        
    );

    /**
     * @ElementName isIpAddressOptional
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:7978
     * @var bool|null
     */
    protected $isIpAddressOptional = null;

    /**
     * @ElementName useDomain
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:7978
     * @var bool|null
     */
    protected $useDomain = null;

    /**
     * @ElementName isMobilityManagerDevice
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:7978
     * @var bool|null
     */
    protected $isMobilityManagerDevice = null;

    /**
     * @ElementName deviceConfigurationOption
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7978
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType|null
     */
    protected $deviceConfigurationOption = null;

    /**
     * @ElementName staticLineOrdering
     * @Type bool
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7978
     * @var bool|null
     */
    protected $staticLineOrdering = null;

    /**
     * @ElementName numberOfPorts
     * @Type int
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7978
     * @MinInclusive 1
     * @MaxInclusive 1024
     * @var int|null
     */
    protected $numberOfPorts = null;

    /**
     * Getter for profile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType
     */
    public function getProfile()
    {
        return $this->profile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profile;
    }

    /**
     * Setter for profile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType $profile
     * @return $this
     */
    public function setProfile(\CWM\BroadWorksConnector\Ocip\Models\SignalingAddressType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfile()
    {
        $this->profile = null;
        return $this;
    }

    /**
     * Getter for staticRegistrationCapable
     *
     * @return bool
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->staticRegistrationCapable;
    }

    /**
     * Setter for staticRegistrationCapable
     *
     * @param bool $staticRegistrationCapable
     * @return $this
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable)
    {
        $this->staticRegistrationCapable = $staticRegistrationCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStaticRegistrationCapable()
    {
        $this->staticRegistrationCapable = null;
        return $this;
    }

    /**
     * Getter for configType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14
     */
    public function getConfigType()
    {
        return $this->configType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->configType;
    }

    /**
     * Setter for configType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14 $configType
     * @return $this
     */
    public function setConfigType(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationType14 $configType)
    {
        $this->configType = $configType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfigType()
    {
        $this->configType = null;
        return $this;
    }

    /**
     * Getter for protocolChoice
     *
     * @return string[]
     */
    public function getProtocolChoice()
    {
        return $this->protocolChoice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolChoice;
    }

    /**
     * Setter for protocolChoice
     *
     * @param string[] $protocolChoice
     * @return $this
     */
    public function setProtocolChoice(array $protocolChoice)
    {
        $this->protocolChoice = $protocolChoice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProtocolChoice()
    {
        $this->protocolChoice = null;
        return $this;
    }

    /**
     * Adder for protocolChoice
     *
     * @param string $protocolChoice
     * @return $this
     */
    public function addProtocolChoice(string $protocolChoice)
    {
        $this->protocolChoice[] = $protocolChoice;
        return $this;
    }

    /**
     * Getter for isIpAddressOptional
     *
     * @return bool
     */
    public function getIsIpAddressOptional()
    {
        return $this->isIpAddressOptional instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isIpAddressOptional;
    }

    /**
     * Setter for isIpAddressOptional
     *
     * @param bool $isIpAddressOptional
     * @return $this
     */
    public function setIsIpAddressOptional($isIpAddressOptional)
    {
        $this->isIpAddressOptional = $isIpAddressOptional;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsIpAddressOptional()
    {
        $this->isIpAddressOptional = null;
        return $this;
    }

    /**
     * Getter for useDomain
     *
     * @return bool
     */
    public function getUseDomain()
    {
        return $this->useDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDomain;
    }

    /**
     * Setter for useDomain
     *
     * @param bool $useDomain
     * @return $this
     */
    public function setUseDomain($useDomain)
    {
        $this->useDomain = $useDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDomain()
    {
        $this->useDomain = null;
        return $this;
    }

    /**
     * Getter for isMobilityManagerDevice
     *
     * @return bool
     */
    public function getIsMobilityManagerDevice()
    {
        return $this->isMobilityManagerDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isMobilityManagerDevice;
    }

    /**
     * Setter for isMobilityManagerDevice
     *
     * @param bool $isMobilityManagerDevice
     * @return $this
     */
    public function setIsMobilityManagerDevice($isMobilityManagerDevice)
    {
        $this->isMobilityManagerDevice = $isMobilityManagerDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsMobilityManagerDevice()
    {
        $this->isMobilityManagerDevice = null;
        return $this;
    }

    /**
     * Getter for deviceConfigurationOption
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType
     */
    public function getDeviceConfigurationOption()
    {
        return $this->deviceConfigurationOption instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceConfigurationOption;
    }

    /**
     * Setter for deviceConfigurationOption
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType $deviceConfigurationOption
     * @return $this
     */
    public function setDeviceConfigurationOption(\CWM\BroadWorksConnector\Ocip\Models\DeviceTypeConfigurationOptionType $deviceConfigurationOption)
    {
        $this->deviceConfigurationOption = $deviceConfigurationOption;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceConfigurationOption()
    {
        $this->deviceConfigurationOption = null;
        return $this;
    }

    /**
     * Getter for staticLineOrdering
     *
     * @return bool
     */
    public function getStaticLineOrdering()
    {
        return $this->staticLineOrdering instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->staticLineOrdering;
    }

    /**
     * Setter for staticLineOrdering
     *
     * @param bool $staticLineOrdering
     * @return $this
     */
    public function setStaticLineOrdering($staticLineOrdering)
    {
        $this->staticLineOrdering = $staticLineOrdering;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStaticLineOrdering()
    {
        $this->staticLineOrdering = null;
        return $this;
    }

    /**
     * Getter for numberOfPorts
     *
     * @return int
     */
    public function getNumberOfPorts()
    {
        return $this->numberOfPorts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfPorts;
    }

    /**
     * Setter for numberOfPorts
     *
     * @param int $numberOfPorts
     * @return $this
     */
    public function setNumberOfPorts($numberOfPorts)
    {
        $this->numberOfPorts = $numberOfPorts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfPorts()
    {
        $this->numberOfPorts = null;
        return $this;
    }


}

