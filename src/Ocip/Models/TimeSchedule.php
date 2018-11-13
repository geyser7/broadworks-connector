<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * TimeSchedule
 *
 * The from dn criteria.
 */
class TimeSchedule
{

    /**
     * @ElementName type
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel|null
     */
    private $type = null;

    /**
     * @ElementName name
     * @Type string
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for type
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel
     */
    public function getType()
    {
        return $this->type instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->type;
    }

    /**
     * Setter for type
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\ScheduleLevel $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetType()
    {
        $this->type = null;
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


}

