<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * MusicOnHoldSourceAdd
 *
 * Contains the music on hold source configuration.
 */
class MusicOnHoldSourceAdd
{

    /**
     * @ElementName audioFilePreferredCodec
     * @var \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec|null
     */
    private $audioFilePreferredCodec = null;

    /**
     * @ElementName messageSourceSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection|null
     */
    private $messageSourceSelection = null;

    /**
     * @ElementName customSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAddCustomSource|null
     */
    private $customSource = null;

    /**
     * @ElementName externalSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAddExternalSource|null
     */
    private $externalSource = null;

    /**
     * Getter for audioFilePreferredCodec
     *
     * @ElementName audioFilePreferredCodec
     * @return \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec|null
     */
    public function getAudioFilePreferredCodec()
    {
        return $this->audioFilePreferredCodec;
    }

    /**
     * Setter for audioFilePreferredCodec
     *
     * @ElementName audioFilePreferredCodec
     * @param \CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec|null $audioFilePreferredCodec
     * @return $this
     */
    public function setAudioFilePreferredCodec(\CWM\BroadWorksConnector\Ocip\Models\AudioFileCodec $audioFilePreferredCodec)
    {
        $this->audioFilePreferredCodec = $audioFilePreferredCodec;
        return $this;
    }

    /**
     * Getter for messageSourceSelection
     *
     * @ElementName messageSourceSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection|null
     */
    public function getMessageSourceSelection()
    {
        return $this->messageSourceSelection;
    }

    /**
     * Setter for messageSourceSelection
     *
     * @ElementName messageSourceSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection|null $messageSourceSelection
     * @return $this
     */
    public function setMessageSourceSelection(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldMessageSelection $messageSourceSelection)
    {
        $this->messageSourceSelection = $messageSourceSelection;
        return $this;
    }

    /**
     * Getter for customSource
     *
     * @ElementName customSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAddCustomSource|null
     */
    public function getCustomSource()
    {
        return $this->customSource;
    }

    /**
     * Setter for customSource
     *
     * @ElementName customSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAddCustomSource|null $customSource
     * @return $this
     */
    public function setCustomSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAddCustomSource $customSource)
    {
        $this->customSource = $customSource;
        return $this;
    }

    /**
     * Getter for externalSource
     *
     * @ElementName externalSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAddExternalSource|null
     */
    public function getExternalSource()
    {
        return $this->externalSource;
    }

    /**
     * Setter for externalSource
     *
     * @ElementName externalSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAddExternalSource|null $externalSource
     * @return $this
     */
    public function setExternalSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldSourceAddExternalSource $externalSource)
    {
        $this->externalSource = $externalSource;
        return $this;
    }


}

