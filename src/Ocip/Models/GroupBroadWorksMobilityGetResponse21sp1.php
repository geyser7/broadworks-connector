<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobilityGetResponse21sp1
 *
 * The response to a GroupBroadWorksMobilityGetRequest21sp1.
 *         
 *         Replaced by GroupBroadWorksMobilityGetResponse22V2.
 *
 * @see GroupBroadWorksMobilityGetRequest21sp1
 * @see GroupBroadWorksMobilityGetResponse22V2
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:4137","type":"sequence"}]
 */
class GroupBroadWorksMobilityGetResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useSettingLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityGroupSettingLevel
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4137
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityGroupSettingLevel|null
     */
    protected $useSettingLevel = null;

    /**
     * @ElementName enableLocationServices
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4137
     * @var bool|null
     */
    protected $enableLocationServices = null;

    /**
     * @ElementName enableMSRNLookup
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4137
     * @var bool|null
     */
    protected $enableMSRNLookup = null;

    /**
     * @ElementName enableMobileStateChecking
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4137
     * @var bool|null
     */
    protected $enableMobileStateChecking = null;

    /**
     * @ElementName denyCallOriginations
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4137
     * @var bool|null
     */
    protected $denyCallOriginations = null;

    /**
     * @ElementName denyCallTerminations
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4137
     * @var bool|null
     */
    protected $denyCallTerminations = null;

    /**
     * @ElementName enableAnnouncementSuppression
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4137
     * @var bool|null
     */
    protected $enableAnnouncementSuppression = null;

    /**
     * @ElementName enableInternalCLIDDeliveryAccessLocations
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4137
     * @var bool|null
     */
    protected $enableInternalCLIDDeliveryAccessLocations = null;

    /**
     * Getter for useSettingLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityGroupSettingLevel
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSettingLevel;
    }

    /**
     * Setter for useSettingLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityGroupSettingLevel $useSettingLevel
     * @return $this
     */
    public function setUseSettingLevel(\CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityGroupSettingLevel $useSettingLevel)
    {
        $this->useSettingLevel = $useSettingLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSettingLevel()
    {
        $this->useSettingLevel = null;
        return $this;
    }

    /**
     * Getter for enableLocationServices
     *
     * @return bool
     */
    public function getEnableLocationServices()
    {
        return $this->enableLocationServices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableLocationServices;
    }

    /**
     * Setter for enableLocationServices
     *
     * @param bool $enableLocationServices
     * @return $this
     */
    public function setEnableLocationServices($enableLocationServices)
    {
        $this->enableLocationServices = $enableLocationServices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableLocationServices()
    {
        $this->enableLocationServices = null;
        return $this;
    }

    /**
     * Getter for enableMSRNLookup
     *
     * @return bool
     */
    public function getEnableMSRNLookup()
    {
        return $this->enableMSRNLookup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMSRNLookup;
    }

    /**
     * Setter for enableMSRNLookup
     *
     * @param bool $enableMSRNLookup
     * @return $this
     */
    public function setEnableMSRNLookup($enableMSRNLookup)
    {
        $this->enableMSRNLookup = $enableMSRNLookup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMSRNLookup()
    {
        $this->enableMSRNLookup = null;
        return $this;
    }

    /**
     * Getter for enableMobileStateChecking
     *
     * @return bool
     */
    public function getEnableMobileStateChecking()
    {
        return $this->enableMobileStateChecking instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMobileStateChecking;
    }

    /**
     * Setter for enableMobileStateChecking
     *
     * @param bool $enableMobileStateChecking
     * @return $this
     */
    public function setEnableMobileStateChecking($enableMobileStateChecking)
    {
        $this->enableMobileStateChecking = $enableMobileStateChecking;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMobileStateChecking()
    {
        $this->enableMobileStateChecking = null;
        return $this;
    }

    /**
     * Getter for denyCallOriginations
     *
     * @return bool
     */
    public function getDenyCallOriginations()
    {
        return $this->denyCallOriginations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->denyCallOriginations;
    }

    /**
     * Setter for denyCallOriginations
     *
     * @param bool $denyCallOriginations
     * @return $this
     */
    public function setDenyCallOriginations($denyCallOriginations)
    {
        $this->denyCallOriginations = $denyCallOriginations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDenyCallOriginations()
    {
        $this->denyCallOriginations = null;
        return $this;
    }

    /**
     * Getter for denyCallTerminations
     *
     * @return bool
     */
    public function getDenyCallTerminations()
    {
        return $this->denyCallTerminations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->denyCallTerminations;
    }

    /**
     * Setter for denyCallTerminations
     *
     * @param bool $denyCallTerminations
     * @return $this
     */
    public function setDenyCallTerminations($denyCallTerminations)
    {
        $this->denyCallTerminations = $denyCallTerminations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDenyCallTerminations()
    {
        $this->denyCallTerminations = null;
        return $this;
    }

    /**
     * Getter for enableAnnouncementSuppression
     *
     * @return bool
     */
    public function getEnableAnnouncementSuppression()
    {
        return $this->enableAnnouncementSuppression instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAnnouncementSuppression;
    }

    /**
     * Setter for enableAnnouncementSuppression
     *
     * @param bool $enableAnnouncementSuppression
     * @return $this
     */
    public function setEnableAnnouncementSuppression($enableAnnouncementSuppression)
    {
        $this->enableAnnouncementSuppression = $enableAnnouncementSuppression;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAnnouncementSuppression()
    {
        $this->enableAnnouncementSuppression = null;
        return $this;
    }

    /**
     * Getter for enableInternalCLIDDeliveryAccessLocations
     *
     * @return bool
     */
    public function getEnableInternalCLIDDeliveryAccessLocations()
    {
        return $this->enableInternalCLIDDeliveryAccessLocations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableInternalCLIDDeliveryAccessLocations;
    }

    /**
     * Setter for enableInternalCLIDDeliveryAccessLocations
     *
     * @param bool $enableInternalCLIDDeliveryAccessLocations
     * @return $this
     */
    public function setEnableInternalCLIDDeliveryAccessLocations($enableInternalCLIDDeliveryAccessLocations)
    {
        $this->enableInternalCLIDDeliveryAccessLocations = $enableInternalCLIDDeliveryAccessLocations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableInternalCLIDDeliveryAccessLocations()
    {
        $this->enableInternalCLIDDeliveryAccessLocations = null;
        return $this;
    }


}

