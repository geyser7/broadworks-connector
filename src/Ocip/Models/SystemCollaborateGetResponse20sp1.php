<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCollaborateGetResponse20sp1
 *
 * Response to SystemCollaborateGetRequest20sp1.
 *         
 *         Replaced by: SystemCollaborateGetResponse20sp1V2
 *
 * @see SystemCollaborateGetRequest20sp1
 * @see SystemCollaborateGetResponse20sp1V2
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:20692","type":"sequence"}]
 */
class SystemCollaborateGetResponse20sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName collaborateRoomIdLength
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:20692
     * @var int|null
     */
    private $collaborateRoomIdLength = null;

    /**
     * @ElementName instantRoomIdleTimeoutSeconds
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:20692
     * @var int|null
     */
    private $instantRoomIdleTimeoutSeconds = null;

    /**
     * @ElementName collaborateRoomMaximumDurationMinutes
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:20692
     * @var int|null
     */
    private $collaborateRoomMaximumDurationMinutes = null;

    /**
     * @ElementName supportOutdial
     * @Type bool
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:20692
     * @var bool|null
     */
    private $supportOutdial = null;

    /**
     * @ElementName maxCollaborateRoomParticipants
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:20692
     * @var int|null
     */
    private $maxCollaborateRoomParticipants = null;

    /**
     * @ElementName collaborateActiveTalkerRefreshIntervalSeconds
     * @Type int
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:20692
     * @var int|null
     */
    private $collaborateActiveTalkerRefreshIntervalSeconds = null;

    /**
     * @ElementName terminateCollaborateAfterGracePeriod
     * @Type bool
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:20692
     * @var bool|null
     */
    private $terminateCollaborateAfterGracePeriod = null;

    /**
     * @ElementName collaborateGracePeriod
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CollaborateGracePeriodDuration
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:20692
     * @var \CWM\BroadWorksConnector\Ocip\Models\CollaborateGracePeriodDuration|null
     */
    private $collaborateGracePeriod = null;

    /**
     * @ElementName enableActiveCollaborateNotification
     * @Type bool
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:20692
     * @var bool|null
     */
    private $enableActiveCollaborateNotification = null;

    /**
     * @ElementName collaborateFromAddress
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:20692
     * @var string|null
     */
    private $collaborateFromAddress = null;

    /**
     * Getter for collaborateRoomIdLength
     *
     * @return int
     */
    public function getCollaborateRoomIdLength()
    {
        return $this->collaborateRoomIdLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->collaborateRoomIdLength;
    }

    /**
     * Setter for collaborateRoomIdLength
     *
     * @param int $collaborateRoomIdLength
     * @return $this
     */
    public function setCollaborateRoomIdLength($collaborateRoomIdLength)
    {
        $this->collaborateRoomIdLength = $collaborateRoomIdLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCollaborateRoomIdLength()
    {
        $this->collaborateRoomIdLength = null;
        return $this;
    }

    /**
     * Getter for instantRoomIdleTimeoutSeconds
     *
     * @return int
     */
    public function getInstantRoomIdleTimeoutSeconds()
    {
        return $this->instantRoomIdleTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->instantRoomIdleTimeoutSeconds;
    }

    /**
     * Setter for instantRoomIdleTimeoutSeconds
     *
     * @param int $instantRoomIdleTimeoutSeconds
     * @return $this
     */
    public function setInstantRoomIdleTimeoutSeconds($instantRoomIdleTimeoutSeconds)
    {
        $this->instantRoomIdleTimeoutSeconds = $instantRoomIdleTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInstantRoomIdleTimeoutSeconds()
    {
        $this->instantRoomIdleTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for collaborateRoomMaximumDurationMinutes
     *
     * @return int
     */
    public function getCollaborateRoomMaximumDurationMinutes()
    {
        return $this->collaborateRoomMaximumDurationMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->collaborateRoomMaximumDurationMinutes;
    }

    /**
     * Setter for collaborateRoomMaximumDurationMinutes
     *
     * @param int $collaborateRoomMaximumDurationMinutes
     * @return $this
     */
    public function setCollaborateRoomMaximumDurationMinutes($collaborateRoomMaximumDurationMinutes)
    {
        $this->collaborateRoomMaximumDurationMinutes = $collaborateRoomMaximumDurationMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCollaborateRoomMaximumDurationMinutes()
    {
        $this->collaborateRoomMaximumDurationMinutes = null;
        return $this;
    }

    /**
     * Getter for supportOutdial
     *
     * @return bool
     */
    public function getSupportOutdial()
    {
        return $this->supportOutdial instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportOutdial;
    }

    /**
     * Setter for supportOutdial
     *
     * @param bool $supportOutdial
     * @return $this
     */
    public function setSupportOutdial($supportOutdial)
    {
        $this->supportOutdial = $supportOutdial;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportOutdial()
    {
        $this->supportOutdial = null;
        return $this;
    }

    /**
     * Getter for maxCollaborateRoomParticipants
     *
     * @return int
     */
    public function getMaxCollaborateRoomParticipants()
    {
        return $this->maxCollaborateRoomParticipants instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxCollaborateRoomParticipants;
    }

    /**
     * Setter for maxCollaborateRoomParticipants
     *
     * @param int $maxCollaborateRoomParticipants
     * @return $this
     */
    public function setMaxCollaborateRoomParticipants($maxCollaborateRoomParticipants)
    {
        $this->maxCollaborateRoomParticipants = $maxCollaborateRoomParticipants;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxCollaborateRoomParticipants()
    {
        $this->maxCollaborateRoomParticipants = null;
        return $this;
    }

    /**
     * Getter for collaborateActiveTalkerRefreshIntervalSeconds
     *
     * @return int
     */
    public function getCollaborateActiveTalkerRefreshIntervalSeconds()
    {
        return $this->collaborateActiveTalkerRefreshIntervalSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->collaborateActiveTalkerRefreshIntervalSeconds;
    }

    /**
     * Setter for collaborateActiveTalkerRefreshIntervalSeconds
     *
     * @param int $collaborateActiveTalkerRefreshIntervalSeconds
     * @return $this
     */
    public function setCollaborateActiveTalkerRefreshIntervalSeconds($collaborateActiveTalkerRefreshIntervalSeconds)
    {
        $this->collaborateActiveTalkerRefreshIntervalSeconds = $collaborateActiveTalkerRefreshIntervalSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCollaborateActiveTalkerRefreshIntervalSeconds()
    {
        $this->collaborateActiveTalkerRefreshIntervalSeconds = null;
        return $this;
    }

    /**
     * Getter for terminateCollaborateAfterGracePeriod
     *
     * @return bool
     */
    public function getTerminateCollaborateAfterGracePeriod()
    {
        return $this->terminateCollaborateAfterGracePeriod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->terminateCollaborateAfterGracePeriod;
    }

    /**
     * Setter for terminateCollaborateAfterGracePeriod
     *
     * @param bool $terminateCollaborateAfterGracePeriod
     * @return $this
     */
    public function setTerminateCollaborateAfterGracePeriod($terminateCollaborateAfterGracePeriod)
    {
        $this->terminateCollaborateAfterGracePeriod = $terminateCollaborateAfterGracePeriod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTerminateCollaborateAfterGracePeriod()
    {
        $this->terminateCollaborateAfterGracePeriod = null;
        return $this;
    }

    /**
     * Getter for collaborateGracePeriod
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CollaborateGracePeriodDuration
     */
    public function getCollaborateGracePeriod()
    {
        return $this->collaborateGracePeriod instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->collaborateGracePeriod;
    }

    /**
     * Setter for collaborateGracePeriod
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CollaborateGracePeriodDuration $collaborateGracePeriod
     * @return $this
     */
    public function setCollaborateGracePeriod(\CWM\BroadWorksConnector\Ocip\Models\CollaborateGracePeriodDuration $collaborateGracePeriod)
    {
        $this->collaborateGracePeriod = $collaborateGracePeriod;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCollaborateGracePeriod()
    {
        $this->collaborateGracePeriod = null;
        return $this;
    }

    /**
     * Getter for enableActiveCollaborateNotification
     *
     * @return bool
     */
    public function getEnableActiveCollaborateNotification()
    {
        return $this->enableActiveCollaborateNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableActiveCollaborateNotification;
    }

    /**
     * Setter for enableActiveCollaborateNotification
     *
     * @param bool $enableActiveCollaborateNotification
     * @return $this
     */
    public function setEnableActiveCollaborateNotification($enableActiveCollaborateNotification)
    {
        $this->enableActiveCollaborateNotification = $enableActiveCollaborateNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableActiveCollaborateNotification()
    {
        $this->enableActiveCollaborateNotification = null;
        return $this;
    }

    /**
     * Getter for collaborateFromAddress
     *
     * @return string
     */
    public function getCollaborateFromAddress()
    {
        return $this->collaborateFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->collaborateFromAddress;
    }

    /**
     * Setter for collaborateFromAddress
     *
     * @param string $collaborateFromAddress
     * @return $this
     */
    public function setCollaborateFromAddress($collaborateFromAddress)
    {
        $this->collaborateFromAddress = $collaborateFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCollaborateFromAddress()
    {
        $this->collaborateFromAddress = null;
        return $this;
    }


}

