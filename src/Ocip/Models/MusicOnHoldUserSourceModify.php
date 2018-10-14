<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldUserSourceModify
 *
 * Contains the music on hold user source configuration.
 */
class MusicOnHoldUserSourceModify
{

    /**
     * @ElementName messageSourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelection|null
     */
    private $messageSourceSelection = null;

    /**
     * @ElementName customSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyCustomSource|null
     */
    private $customSource = null;

    /**
     * Getter for messageSourceSelection
     *
     * @ElementName messageSourceSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelection|null
     */
    public function getMessageSourceSelection()
    {
        return $this->messageSourceSelection;
    }

    /**
     * Setter for messageSourceSelection
     *
     * @ElementName messageSourceSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelection|null $messageSourceSelection
     * @return $this
     */
    public function setMessageSourceSelection(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserMessageSelection $messageSourceSelection)
    {
        $this->messageSourceSelection = $messageSourceSelection;
        return $this;
    }

    /**
     * Getter for customSource
     *
     * @ElementName customSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyCustomSource|null
     */
    public function getCustomSource()
    {
        return $this->customSource;
    }

    /**
     * Setter for customSource
     *
     * @ElementName customSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyCustomSource|null $customSource
     * @return $this
     */
    public function setCustomSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyCustomSource $customSource)
    {
        $this->customSource = $customSource;
        return $this;
    }


}

