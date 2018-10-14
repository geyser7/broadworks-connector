<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantKeyReadConfiguration
 *
 * The read configuration of a key for Auto Attendant.
 */
class AutoAttendantKeyReadConfiguration
{

    /**
     * @ElementName key
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey|null
     */
    private $key = null;

    /**
     * @ElementName entry
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationReadEntry|null
     */
    private $entry = null;

    /**
     * Getter for key
     *
     * @ElementName key
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Setter for key
     *
     * @ElementName key
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey|null $key
     * @return $this
     */
    public function setKey(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey $key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Getter for entry
     *
     * @ElementName entry
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationReadEntry|null
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Setter for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationReadEntry|null $entry
     * @return $this
     */
    public function setEntry(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationReadEntry $entry)
    {
        $this->entry = $entry;
        return $this;
    }


}

