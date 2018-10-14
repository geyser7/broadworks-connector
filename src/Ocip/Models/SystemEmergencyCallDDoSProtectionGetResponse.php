<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEmergencyCallDDoSProtectionGetResponse
 *
 * Response to the SystemEmergencyCallDDoSProtectionGetRequest.
 *
 * @see SystemEmergencyCallDDoSProtectionGetRequest
 */
class SystemEmergencyCallDDoSProtectionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enabled
     * @var bool|null
     */
    private $enabled = null;

    /**
     * @ElementName sampleIntervalSeconds
     * @var int|null
     */
    private $sampleIntervalSeconds = null;

    /**
     * @ElementName protectionRate
     * @var int|null
     */
    private $protectionRate = null;

    /**
     * @ElementName protectionAction
     * @var \CWM\BroadWorksConnector\Ocip\Models\ProtectionAction|null
     */
    private $protectionAction = null;

    /**
     * Getter for enabled
     *
     * @ElementName enabled
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Setter for enabled
     *
     * @ElementName enabled
     * @param bool|null $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Getter for sampleIntervalSeconds
     *
     * @ElementName sampleIntervalSeconds
     * @return int|null
     */
    public function getSampleIntervalSeconds()
    {
        return $this->sampleIntervalSeconds;
    }

    /**
     * Setter for sampleIntervalSeconds
     *
     * @ElementName sampleIntervalSeconds
     * @param int|null $sampleIntervalSeconds
     * @return $this
     */
    public function setSampleIntervalSeconds($sampleIntervalSeconds)
    {
        $this->sampleIntervalSeconds = $sampleIntervalSeconds;
        return $this;
    }

    /**
     * Getter for protectionRate
     *
     * @ElementName protectionRate
     * @return int|null
     */
    public function getProtectionRate()
    {
        return $this->protectionRate;
    }

    /**
     * Setter for protectionRate
     *
     * @ElementName protectionRate
     * @param int|null $protectionRate
     * @return $this
     */
    public function setProtectionRate($protectionRate)
    {
        $this->protectionRate = $protectionRate;
        return $this;
    }

    /**
     * Getter for protectionAction
     *
     * @ElementName protectionAction
     * @return \CWM\BroadWorksConnector\Ocip\Models\ProtectionAction|null
     */
    public function getProtectionAction()
    {
        return $this->protectionAction;
    }

    /**
     * Setter for protectionAction
     *
     * @ElementName protectionAction
     * @param \CWM\BroadWorksConnector\Ocip\Models\ProtectionAction|null $protectionAction
     * @return $this
     */
    public function setProtectionAction(\CWM\BroadWorksConnector\Ocip\Models\ProtectionAction $protectionAction)
    {
        $this->protectionAction = $protectionAction;
        return $this;
    }


}

