<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterQueueCallDispositionCodeSettingsGetResponse
 *
 * Response to GroupCallCenterQueueCallDispositionCodeSettingsGetRequest.
 *
 * @see GroupCallCenterQueueCallDispositionCodeSettingsGetRequest
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:5625","type":"sequence"}]
 */
class GroupCallCenterQueueCallDispositionCodeSettingsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableCallDispositionCodes
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:5625
     * @var bool|null
     */
    protected $enableCallDispositionCodes = null;

    /**
     * @ElementName includeOrganizationCodes
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:5625
     * @var bool|null
     */
    protected $includeOrganizationCodes = null;

    /**
     * @ElementName forceUseOfCallDispositionCodes
     * @Type bool
     * @Group e2c537e3e39483b96620673a7012ffdd:5625
     * @var bool|null
     */
    protected $forceUseOfCallDispositionCodes = null;

    /**
     * @ElementName defaultCallDispositionCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:5625
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel|null
     */
    protected $defaultCallDispositionCode = null;

    /**
     * Getter for enableCallDispositionCodes
     *
     * @return bool
     */
    public function getEnableCallDispositionCodes()
    {
        return $this->enableCallDispositionCodes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableCallDispositionCodes;
    }

    /**
     * Setter for enableCallDispositionCodes
     *
     * @param bool $enableCallDispositionCodes
     * @return $this
     */
    public function setEnableCallDispositionCodes($enableCallDispositionCodes)
    {
        $this->enableCallDispositionCodes = $enableCallDispositionCodes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableCallDispositionCodes()
    {
        $this->enableCallDispositionCodes = null;
        return $this;
    }

    /**
     * Getter for includeOrganizationCodes
     *
     * @return bool
     */
    public function getIncludeOrganizationCodes()
    {
        return $this->includeOrganizationCodes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeOrganizationCodes;
    }

    /**
     * Setter for includeOrganizationCodes
     *
     * @param bool $includeOrganizationCodes
     * @return $this
     */
    public function setIncludeOrganizationCodes($includeOrganizationCodes)
    {
        $this->includeOrganizationCodes = $includeOrganizationCodes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeOrganizationCodes()
    {
        $this->includeOrganizationCodes = null;
        return $this;
    }

    /**
     * Getter for forceUseOfCallDispositionCodes
     *
     * @return bool
     */
    public function getForceUseOfCallDispositionCodes()
    {
        return $this->forceUseOfCallDispositionCodes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceUseOfCallDispositionCodes;
    }

    /**
     * Setter for forceUseOfCallDispositionCodes
     *
     * @param bool $forceUseOfCallDispositionCodes
     * @return $this
     */
    public function setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes)
    {
        $this->forceUseOfCallDispositionCodes = $forceUseOfCallDispositionCodes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceUseOfCallDispositionCodes()
    {
        $this->forceUseOfCallDispositionCodes = null;
        return $this;
    }

    /**
     * Getter for defaultCallDispositionCode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel
     */
    public function getDefaultCallDispositionCode()
    {
        return $this->defaultCallDispositionCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultCallDispositionCode;
    }

    /**
     * Setter for defaultCallDispositionCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel $defaultCallDispositionCode
     * @return $this
     */
    public function setDefaultCallDispositionCode(\CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel $defaultCallDispositionCode)
    {
        $this->defaultCallDispositionCode = $defaultCallDispositionCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultCallDispositionCode()
    {
        $this->defaultCallDispositionCode = null;
        return $this;
    }


}

