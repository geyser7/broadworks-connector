<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGetResponse22V3
 *
 * The response to a SystemBroadWorksMobilityGetRequest22V3.
 *
 * @see SystemBroadWorksMobilityGetRequest22V3
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:1044","type":"sequence"}]
 */
class SystemBroadWorksMobilityGetResponse22V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableLocationServices
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1044
     * @var bool|null
     */
    protected $enableLocationServices = null;

    /**
     * @ElementName enableMSRNLookup
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1044
     * @var bool|null
     */
    protected $enableMSRNLookup = null;

    /**
     * @ElementName enableMobileStateChecking
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1044
     * @var bool|null
     */
    protected $enableMobileStateChecking = null;

    /**
     * @ElementName denyCallOriginations
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1044
     * @var bool|null
     */
    protected $denyCallOriginations = null;

    /**
     * @ElementName denyCallTerminations
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1044
     * @var bool|null
     */
    protected $denyCallTerminations = null;

    /**
     * @ElementName imrnTimeoutMillisecnds
     * @Type int
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1044
     * @MinInclusive 100
     * @MaxInclusive 60000
     * @var int|null
     */
    protected $imrnTimeoutMillisecnds = null;

    /**
     * @ElementName enableInternalCLIDDelivery
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1044
     * @var bool|null
     */
    protected $enableInternalCLIDDelivery = null;

    /**
     * @ElementName includeRedirectForMobilityTermination
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1044
     * @var bool|null
     */
    protected $includeRedirectForMobilityTermination = null;

    /**
     * @ElementName enableInternalCLIDDeliveryAccessLocations
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1044
     * @var bool|null
     */
    protected $enableInternalCLIDDeliveryAccessLocations = null;

    /**
     * @ElementName enableEnhancedUnreachableStateChecking
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1044
     * @var bool|null
     */
    protected $enableEnhancedUnreachableStateChecking = null;

    /**
     * @ElementName enableNetworkCallBarringStatusCheck
     * @Type bool
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1044
     * @var bool|null
     */
    protected $enableNetworkCallBarringStatusCheck = null;

    /**
     * @ElementName networkTranslationIndex
     * @Type string
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1044
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $networkTranslationIndex = null;

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
     * Getter for imrnTimeoutMillisecnds
     *
     * @return int
     */
    public function getImrnTimeoutMillisecnds()
    {
        return $this->imrnTimeoutMillisecnds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->imrnTimeoutMillisecnds;
    }

    /**
     * Setter for imrnTimeoutMillisecnds
     *
     * @param int $imrnTimeoutMillisecnds
     * @return $this
     */
    public function setImrnTimeoutMillisecnds($imrnTimeoutMillisecnds)
    {
        $this->imrnTimeoutMillisecnds = $imrnTimeoutMillisecnds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImrnTimeoutMillisecnds()
    {
        $this->imrnTimeoutMillisecnds = null;
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

    /**
     * Getter for includeRedirectForMobilityTermination
     *
     * @return bool
     */
    public function getIncludeRedirectForMobilityTermination()
    {
        return $this->includeRedirectForMobilityTermination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeRedirectForMobilityTermination;
    }

    /**
     * Setter for includeRedirectForMobilityTermination
     *
     * @param bool $includeRedirectForMobilityTermination
     * @return $this
     */
    public function setIncludeRedirectForMobilityTermination($includeRedirectForMobilityTermination)
    {
        $this->includeRedirectForMobilityTermination = $includeRedirectForMobilityTermination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeRedirectForMobilityTermination()
    {
        $this->includeRedirectForMobilityTermination = null;
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

    /**
     * Getter for enableEnhancedUnreachableStateChecking
     *
     * @return bool
     */
    public function getEnableEnhancedUnreachableStateChecking()
    {
        return $this->enableEnhancedUnreachableStateChecking instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableEnhancedUnreachableStateChecking;
    }

    /**
     * Setter for enableEnhancedUnreachableStateChecking
     *
     * @param bool $enableEnhancedUnreachableStateChecking
     * @return $this
     */
    public function setEnableEnhancedUnreachableStateChecking($enableEnhancedUnreachableStateChecking)
    {
        $this->enableEnhancedUnreachableStateChecking = $enableEnhancedUnreachableStateChecking;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableEnhancedUnreachableStateChecking()
    {
        $this->enableEnhancedUnreachableStateChecking = null;
        return $this;
    }

    /**
     * Getter for enableNetworkCallBarringStatusCheck
     *
     * @return bool
     */
    public function getEnableNetworkCallBarringStatusCheck()
    {
        return $this->enableNetworkCallBarringStatusCheck instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableNetworkCallBarringStatusCheck;
    }

    /**
     * Setter for enableNetworkCallBarringStatusCheck
     *
     * @param bool $enableNetworkCallBarringStatusCheck
     * @return $this
     */
    public function setEnableNetworkCallBarringStatusCheck($enableNetworkCallBarringStatusCheck)
    {
        $this->enableNetworkCallBarringStatusCheck = $enableNetworkCallBarringStatusCheck;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableNetworkCallBarringStatusCheck()
    {
        $this->enableNetworkCallBarringStatusCheck = null;
        return $this;
    }

    /**
     * Getter for networkTranslationIndex
     *
     * @return string
     */
    public function getNetworkTranslationIndex()
    {
        return $this->networkTranslationIndex instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkTranslationIndex;
    }

    /**
     * Setter for networkTranslationIndex
     *
     * @param string $networkTranslationIndex
     * @return $this
     */
    public function setNetworkTranslationIndex($networkTranslationIndex)
    {
        $this->networkTranslationIndex = $networkTranslationIndex;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkTranslationIndex()
    {
        $this->networkTranslationIndex = null;
        return $this;
    }


}

