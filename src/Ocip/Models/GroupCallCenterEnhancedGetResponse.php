<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedGetResponse
 *
 * Response to GroupCallCenterEnhancedGetRequest.
 *
 * @see GroupCallCenterEnhancedGetRequest
 */
class GroupCallCenterEnhancedGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName overrideAgentWrapUpTime
     * @Type bool
     * @var bool|null
     */
    private $overrideAgentWrapUpTime = null;

    /**
     * @ElementName wrapUpSeconds
     * @Type int
     * @var int|null
     */
    private $wrapUpSeconds = null;

    /**
     * Getter for overrideAgentWrapUpTime
     *
     * @return bool
     */
    public function getOverrideAgentWrapUpTime()
    {
        return $this->overrideAgentWrapUpTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->overrideAgentWrapUpTime;
    }

    /**
     * Setter for overrideAgentWrapUpTime
     *
     * @param bool $overrideAgentWrapUpTime
     * @return $this
     */
    public function setOverrideAgentWrapUpTime($overrideAgentWrapUpTime)
    {
        $this->overrideAgentWrapUpTime = $overrideAgentWrapUpTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOverrideAgentWrapUpTime()
    {
        $this->overrideAgentWrapUpTime = null;
        return $this;
    }

    /**
     * Getter for wrapUpSeconds
     *
     * @return int
     */
    public function getWrapUpSeconds()
    {
        return $this->wrapUpSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->wrapUpSeconds;
    }

    /**
     * Setter for wrapUpSeconds
     *
     * @param int $wrapUpSeconds
     * @return $this
     */
    public function setWrapUpSeconds($wrapUpSeconds)
    {
        $this->wrapUpSeconds = $wrapUpSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWrapUpSeconds()
    {
        $this->wrapUpSeconds = null;
        return $this;
    }


}

