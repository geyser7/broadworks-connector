<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAutomaticCallbackGetResponse
 *
 * Response to SystemAutomaticCallbackGetRequest.
 *         Replaced By: SystemAutomaticCallbackGetResponse15
 *
 * @see SystemAutomaticCallbackGetRequest
 * @see SystemAutomaticCallbackGetResponse15
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:19921","type":"sequence"}]
 */
class SystemAutomaticCallbackGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName monitorMinutes
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19921
     * @MinInclusive 5
     * @MaxInclusive 180
     * @var int|null
     */
    protected $monitorMinutes = null;

    /**
     * @ElementName waitBetweenRetryOriginatorMinutes
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19921
     * @MinInclusive 1
     * @MaxInclusive 15
     * @var int|null
     */
    protected $waitBetweenRetryOriginatorMinutes = null;

    /**
     * @ElementName maxMonitorsPerOriginator
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19921
     * @MinInclusive 1
     * @MaxInclusive 30
     * @var int|null
     */
    protected $maxMonitorsPerOriginator = null;

    /**
     * @ElementName maxCallbackRings
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19921
     * @MinInclusive 3
     * @MaxInclusive 8
     * @var int|null
     */
    protected $maxCallbackRings = null;

    /**
     * @ElementName maxRetryOriginatorMinutes
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19921
     * @MinInclusive 180
     * @MaxInclusive 360
     * @var int|null
     */
    protected $maxRetryOriginatorMinutes = null;

    /**
     * Getter for monitorMinutes
     *
     * @return int
     */
    public function getMonitorMinutes()
    {
        return $this->monitorMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->monitorMinutes;
    }

    /**
     * Setter for monitorMinutes
     *
     * @param int $monitorMinutes
     * @return $this
     */
    public function setMonitorMinutes($monitorMinutes)
    {
        $this->monitorMinutes = $monitorMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMonitorMinutes()
    {
        $this->monitorMinutes = null;
        return $this;
    }

    /**
     * Getter for waitBetweenRetryOriginatorMinutes
     *
     * @return int
     */
    public function getWaitBetweenRetryOriginatorMinutes()
    {
        return $this->waitBetweenRetryOriginatorMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->waitBetweenRetryOriginatorMinutes;
    }

    /**
     * Setter for waitBetweenRetryOriginatorMinutes
     *
     * @param int $waitBetweenRetryOriginatorMinutes
     * @return $this
     */
    public function setWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes)
    {
        $this->waitBetweenRetryOriginatorMinutes = $waitBetweenRetryOriginatorMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWaitBetweenRetryOriginatorMinutes()
    {
        $this->waitBetweenRetryOriginatorMinutes = null;
        return $this;
    }

    /**
     * Getter for maxMonitorsPerOriginator
     *
     * @return int
     */
    public function getMaxMonitorsPerOriginator()
    {
        return $this->maxMonitorsPerOriginator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxMonitorsPerOriginator;
    }

    /**
     * Setter for maxMonitorsPerOriginator
     *
     * @param int $maxMonitorsPerOriginator
     * @return $this
     */
    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator)
    {
        $this->maxMonitorsPerOriginator = $maxMonitorsPerOriginator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxMonitorsPerOriginator()
    {
        $this->maxMonitorsPerOriginator = null;
        return $this;
    }

    /**
     * Getter for maxCallbackRings
     *
     * @return int
     */
    public function getMaxCallbackRings()
    {
        return $this->maxCallbackRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxCallbackRings;
    }

    /**
     * Setter for maxCallbackRings
     *
     * @param int $maxCallbackRings
     * @return $this
     */
    public function setMaxCallbackRings($maxCallbackRings)
    {
        $this->maxCallbackRings = $maxCallbackRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxCallbackRings()
    {
        $this->maxCallbackRings = null;
        return $this;
    }

    /**
     * Getter for maxRetryOriginatorMinutes
     *
     * @return int
     */
    public function getMaxRetryOriginatorMinutes()
    {
        return $this->maxRetryOriginatorMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxRetryOriginatorMinutes;
    }

    /**
     * Setter for maxRetryOriginatorMinutes
     *
     * @param int $maxRetryOriginatorMinutes
     * @return $this
     */
    public function setMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes)
    {
        $this->maxRetryOriginatorMinutes = $maxRetryOriginatorMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxRetryOriginatorMinutes()
    {
        $this->maxRetryOriginatorMinutes = null;
        return $this;
    }


}

