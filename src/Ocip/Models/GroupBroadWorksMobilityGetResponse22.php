<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksMobilityGetResponse22
 *
 * The response to a GroupBroadWorksMobilityGetRequest22.
 *
 * @see GroupBroadWorksMobilityGetRequest22
 * @Groups [{"id":"6536ac9946b3d8422bec81ad9d995e2b:181","type":"sequence"}]
 */
class GroupBroadWorksMobilityGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useSettingLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityGroupSettingLevel
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:181
     * @var \CWM\BroadWorksConnector\Ocip\Models\BroadWorksMobilityGroupSettingLevel|null
     */
    private $useSettingLevel = null;

    /**
     * @ElementName enableLocationServices
     * @Type bool
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:181
     * @var bool|null
     */
    private $enableLocationServices = null;

    /**
     * @ElementName enableMSRNLookup
     * @Type bool
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:181
     * @var bool|null
     */
    private $enableMSRNLookup = null;

    /**
     * @ElementName enableMobileStateChecking
     * @Type bool
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:181
     * @var bool|null
     */
    private $enableMobileStateChecking = null;

    /**
     * @ElementName denyCallOriginations
     * @Type bool
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:181
     * @var bool|null
     */
    private $denyCallOriginations = null;

    /**
     * @ElementName denyCallTerminations
     * @Type bool
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:181
     * @var bool|null
     */
    private $denyCallTerminations = null;

    /**
     * @ElementName enableAnnouncementSuppression
     * @Type bool
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:181
     * @var bool|null
     */
    private $enableAnnouncementSuppression = null;

    /**
     * @ElementName enableInternalCLIDDelivery
     * @Type bool
     * @Group 6536ac9946b3d8422bec81ad9d995e2b:181
     * @var bool|null
     */
    private $enableInternalCLIDDelivery = null;

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
     * Getter for enableInternalCLIDDelivery
     *
     * @return bool
     */
    public function getEnableInternalCLIDDelivery()
    {
        return $this->enableInternalCLIDDelivery instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableInternalCLIDDelivery;
    }

    /**
     * Setter for enableInternalCLIDDelivery
     *
     * @param bool $enableInternalCLIDDelivery
     * @return $this
     */
    public function setEnableInternalCLIDDelivery($enableInternalCLIDDelivery)
    {
        $this->enableInternalCLIDDelivery = $enableInternalCLIDDelivery;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableInternalCLIDDelivery()
    {
        $this->enableInternalCLIDDelivery = null;
        return $this;
    }


}

