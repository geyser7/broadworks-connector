<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseSessionAdmissionControlGroupAddRequest19sp1
 *
 * Request to add a session admission control group for the enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Note that to provision the accessInfoPattern element, the
 *         captureAccessInfoInPaniHeader system parameter needs to be set to
 * "true".
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class EnterpriseSessionAdmissionControlGroupAddRequest19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName name
     * @Type string
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName maxSession
     * @Type int
     * @var int|null
     */
    private $maxSession = null;

    /**
     * @ElementName maxUserOriginatingSessions
     * @Type int
     * @var int|null
     */
    private $maxUserOriginatingSessions = null;

    /**
     * @ElementName maxUserTerminatingSessions
     * @Type int
     * @var int|null
     */
    private $maxUserTerminatingSessions = null;

    /**
     * @ElementName reservedSession
     * @Type int
     * @var int|null
     */
    private $reservedSession = null;

    /**
     * @ElementName reservedUserOriginatingSessions
     * @Type int
     * @var int|null
     */
    private $reservedUserOriginatingSessions = null;

    /**
     * @ElementName reservedUserTerminatingSessions
     * @Type int
     * @var int|null
     */
    private $reservedUserTerminatingSessions = null;

    /**
     * @ElementName becomeDefaultGroup
     * @Type bool
     * @var bool|null
     */
    private $becomeDefaultGroup = null;

    /**
     * @ElementName countIntraSACGroupSessions
     * @Type bool
     * @var bool|null
     */
    private $countIntraSACGroupSessions = null;

    /**
     * @ElementName devices
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    private $devices = array(
        
    );

    /**
     * @ElementName blockEmergencyAndRepairCallsDueToSACLimits
     * @Type bool
     * @var bool|null
     */
    private $blockEmergencyAndRepairCallsDueToSACLimits = null;

    /**
     * @ElementName mediaGroupName
     * @Type string
     * @var string|null
     */
    private $mediaGroupName = null;

    /**
     * @ElementName accessInfoPattern
     * @Type string
     * @var string|null
     */
    private $accessInfoPattern = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for maxSession
     *
     * @return int
     */
    public function getMaxSession()
    {
        return $this->maxSession instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxSession;
    }

    /**
     * Setter for maxSession
     *
     * @param int $maxSession
     * @return $this
     */
    public function setMaxSession($maxSession)
    {
        $this->maxSession = $maxSession;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxSession()
    {
        $this->maxSession = null;
        return $this;
    }

    /**
     * Getter for maxUserOriginatingSessions
     *
     * @return int
     */
    public function getMaxUserOriginatingSessions()
    {
        return $this->maxUserOriginatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxUserOriginatingSessions;
    }

    /**
     * Setter for maxUserOriginatingSessions
     *
     * @param int $maxUserOriginatingSessions
     * @return $this
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions)
    {
        $this->maxUserOriginatingSessions = $maxUserOriginatingSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxUserOriginatingSessions()
    {
        $this->maxUserOriginatingSessions = null;
        return $this;
    }

    /**
     * Getter for maxUserTerminatingSessions
     *
     * @return int
     */
    public function getMaxUserTerminatingSessions()
    {
        return $this->maxUserTerminatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxUserTerminatingSessions;
    }

    /**
     * Setter for maxUserTerminatingSessions
     *
     * @param int $maxUserTerminatingSessions
     * @return $this
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions)
    {
        $this->maxUserTerminatingSessions = $maxUserTerminatingSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxUserTerminatingSessions()
    {
        $this->maxUserTerminatingSessions = null;
        return $this;
    }

    /**
     * Getter for reservedSession
     *
     * @return int
     */
    public function getReservedSession()
    {
        return $this->reservedSession instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reservedSession;
    }

    /**
     * Setter for reservedSession
     *
     * @param int $reservedSession
     * @return $this
     */
    public function setReservedSession($reservedSession)
    {
        $this->reservedSession = $reservedSession;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReservedSession()
    {
        $this->reservedSession = null;
        return $this;
    }

    /**
     * Getter for reservedUserOriginatingSessions
     *
     * @return int
     */
    public function getReservedUserOriginatingSessions()
    {
        return $this->reservedUserOriginatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reservedUserOriginatingSessions;
    }

    /**
     * Setter for reservedUserOriginatingSessions
     *
     * @param int $reservedUserOriginatingSessions
     * @return $this
     */
    public function setReservedUserOriginatingSessions($reservedUserOriginatingSessions)
    {
        $this->reservedUserOriginatingSessions = $reservedUserOriginatingSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReservedUserOriginatingSessions()
    {
        $this->reservedUserOriginatingSessions = null;
        return $this;
    }

    /**
     * Getter for reservedUserTerminatingSessions
     *
     * @return int
     */
    public function getReservedUserTerminatingSessions()
    {
        return $this->reservedUserTerminatingSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reservedUserTerminatingSessions;
    }

    /**
     * Setter for reservedUserTerminatingSessions
     *
     * @param int $reservedUserTerminatingSessions
     * @return $this
     */
    public function setReservedUserTerminatingSessions($reservedUserTerminatingSessions)
    {
        $this->reservedUserTerminatingSessions = $reservedUserTerminatingSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReservedUserTerminatingSessions()
    {
        $this->reservedUserTerminatingSessions = null;
        return $this;
    }

    /**
     * Getter for becomeDefaultGroup
     *
     * @return bool
     */
    public function getBecomeDefaultGroup()
    {
        return $this->becomeDefaultGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->becomeDefaultGroup;
    }

    /**
     * Setter for becomeDefaultGroup
     *
     * @param bool $becomeDefaultGroup
     * @return $this
     */
    public function setBecomeDefaultGroup($becomeDefaultGroup)
    {
        $this->becomeDefaultGroup = $becomeDefaultGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBecomeDefaultGroup()
    {
        $this->becomeDefaultGroup = null;
        return $this;
    }

    /**
     * Getter for countIntraSACGroupSessions
     *
     * @return bool
     */
    public function getCountIntraSACGroupSessions()
    {
        return $this->countIntraSACGroupSessions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countIntraSACGroupSessions;
    }

    /**
     * Setter for countIntraSACGroupSessions
     *
     * @param bool $countIntraSACGroupSessions
     * @return $this
     */
    public function setCountIntraSACGroupSessions($countIntraSACGroupSessions)
    {
        $this->countIntraSACGroupSessions = $countIntraSACGroupSessions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountIntraSACGroupSessions()
    {
        $this->countIntraSACGroupSessions = null;
        return $this;
    }

    /**
     * Getter for devices
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[]
     */
    public function getDevices()
    {
        return $this->devices instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->devices;
    }

    /**
     * Setter for devices
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice[] $devices
     * @return $this
     */
    public function setDevices(array $devices)
    {
        $this->devices = $devices;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDevices()
    {
        $this->devices = null;
        return $this;
    }

    /**
     * Adder for devices
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAccessDevice $devices
     * @return $this
     */
    public function addDevices($devices)
    {
        $this->devices[] = $devices;
        return $this;
    }

    /**
     * Getter for blockEmergencyAndRepairCallsDueToSACLimits
     *
     * @return bool
     */
    public function getBlockEmergencyAndRepairCallsDueToSACLimits()
    {
        return $this->blockEmergencyAndRepairCallsDueToSACLimits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->blockEmergencyAndRepairCallsDueToSACLimits;
    }

    /**
     * Setter for blockEmergencyAndRepairCallsDueToSACLimits
     *
     * @param bool $blockEmergencyAndRepairCallsDueToSACLimits
     * @return $this
     */
    public function setBlockEmergencyAndRepairCallsDueToSACLimits($blockEmergencyAndRepairCallsDueToSACLimits)
    {
        $this->blockEmergencyAndRepairCallsDueToSACLimits = $blockEmergencyAndRepairCallsDueToSACLimits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBlockEmergencyAndRepairCallsDueToSACLimits()
    {
        $this->blockEmergencyAndRepairCallsDueToSACLimits = null;
        return $this;
    }

    /**
     * Getter for mediaGroupName
     *
     * @return string
     */
    public function getMediaGroupName()
    {
        return $this->mediaGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaGroupName;
    }

    /**
     * Setter for mediaGroupName
     *
     * @param string $mediaGroupName
     * @return $this
     */
    public function setMediaGroupName($mediaGroupName)
    {
        $this->mediaGroupName = $mediaGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaGroupName()
    {
        $this->mediaGroupName = null;
        return $this;
    }

    /**
     * Getter for accessInfoPattern
     *
     * @return string
     */
    public function getAccessInfoPattern()
    {
        return $this->accessInfoPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessInfoPattern;
    }

    /**
     * Setter for accessInfoPattern
     *
     * @param string $accessInfoPattern
     * @return $this
     */
    public function setAccessInfoPattern($accessInfoPattern)
    {
        $this->accessInfoPattern = $accessInfoPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessInfoPattern()
    {
        $this->accessInfoPattern = null;
        return $this;
    }


}

