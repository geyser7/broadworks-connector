<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemClientSessionParametersModifyRequest
 *
 * Request to modify Client Session (web and CLI) system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:5456","type":"sequence"}]
 */
class SystemClientSessionParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enableInactivityTimeout
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:5456
     * @var bool|null
     */
    protected $enableInactivityTimeout = null;

    /**
     * @ElementName inactivityTimeoutMinutes
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:5456
     * @MinInclusive 10
     * @MaxInclusive 360
     * @var int|null
     */
    protected $inactivityTimeoutMinutes = null;

    /**
     * Getter for enableInactivityTimeout
     *
     * @return bool
     */
    public function getEnableInactivityTimeout()
    {
        return $this->enableInactivityTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableInactivityTimeout;
    }

    /**
     * Setter for enableInactivityTimeout
     *
     * @param bool $enableInactivityTimeout
     * @return $this
     */
    public function setEnableInactivityTimeout($enableInactivityTimeout)
    {
        $this->enableInactivityTimeout = $enableInactivityTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableInactivityTimeout()
    {
        $this->enableInactivityTimeout = null;
        return $this;
    }

    /**
     * Getter for inactivityTimeoutMinutes
     *
     * @return int
     */
    public function getInactivityTimeoutMinutes()
    {
        return $this->inactivityTimeoutMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->inactivityTimeoutMinutes;
    }

    /**
     * Setter for inactivityTimeoutMinutes
     *
     * @param int $inactivityTimeoutMinutes
     * @return $this
     */
    public function setInactivityTimeoutMinutes($inactivityTimeoutMinutes)
    {
        $this->inactivityTimeoutMinutes = $inactivityTimeoutMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInactivityTimeoutMinutes()
    {
        $this->inactivityTimeoutMinutes = null;
        return $this;
    }


}

