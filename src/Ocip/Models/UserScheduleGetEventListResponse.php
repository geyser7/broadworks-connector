<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserScheduleGetEventListResponse
 *
 * Response to UserScheduleGetEventListRequest.
 *         The response contains a list of events.
 *
 * @see UserScheduleGetEventListRequest
 */
class UserScheduleGetEventListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName eventName
     * @Type string
     * @Array
     * @var string[]
     */
    private $eventName = array(
        
    );

    /**
     * Getter for eventName
     *
     * @return string[]
     */
    public function getEventName()
    {
        return $this->eventName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eventName;
    }

    /**
     * Setter for eventName
     *
     * @param string[] $eventName
     * @return $this
     */
    public function setEventName(array $eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEventName()
    {
        $this->eventName = null;
        return $this;
    }

    /**
     * Adder for eventName
     *
     * @param string $eventName
     * @return $this
     */
    public function addEventName(string $eventName)
    {
        $this->eventName[] = $eventName;
        return $this;
    }


}

