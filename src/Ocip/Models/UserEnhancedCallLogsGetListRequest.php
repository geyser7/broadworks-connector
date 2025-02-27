<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListRequest
 *
 * Request user's call logs. It is possible to get a subset of the total list of calls
 *         by specifying a starting offset and the number of calls to get.
 *         If the callLogType is not specified, all types of calls are returned.
 *         The response is either a UserEnhancedCallLogsGetListResponse or an ErrorResponse.
 *         Replaced By: UserEnhancedCallLogsGetListRequest14sp4
 *
 * @see UserEnhancedCallLogsGetListResponse
 * @see ErrorResponse
 * @see UserEnhancedCallLogsGetListRequest14sp4
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:42355","type":"sequence"}]
 */
class UserEnhancedCallLogsGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42355
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName callLogType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsType
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42355
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsType|null
     */
    protected $callLogType = null;

    /**
     * @ElementName startingOffset
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42355
     * @MinInclusive 0
     * @MaxInclusive 9999
     * @var int|null
     */
    protected $startingOffset = null;

    /**
     * @ElementName numCalls
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:42355
     * @MinInclusive 1
     * @MaxInclusive 10000
     * @var int|null
     */
    protected $numCalls = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for callLogType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsType
     */
    public function getCallLogType()
    {
        return $this->callLogType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callLogType;
    }

    /**
     * Setter for callLogType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsType $callLogType
     * @return $this
     */
    public function setCallLogType(\CWM\BroadWorksConnector\Ocip\Models\EnhancedCallLogsType $callLogType)
    {
        $this->callLogType = $callLogType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallLogType()
    {
        $this->callLogType = null;
        return $this;
    }

    /**
     * Getter for startingOffset
     *
     * @return int
     */
    public function getStartingOffset()
    {
        return $this->startingOffset instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->startingOffset;
    }

    /**
     * Setter for startingOffset
     *
     * @param int $startingOffset
     * @return $this
     */
    public function setStartingOffset($startingOffset)
    {
        $this->startingOffset = $startingOffset;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStartingOffset()
    {
        $this->startingOffset = null;
        return $this;
    }

    /**
     * Getter for numCalls
     *
     * @return int
     */
    public function getNumCalls()
    {
        return $this->numCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numCalls;
    }

    /**
     * Setter for numCalls
     *
     * @param int $numCalls
     * @return $this
     */
    public function setNumCalls($numCalls)
    {
        $this->numCalls = $numCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumCalls()
    {
        $this->numCalls = null;
        return $this;
    }


}

