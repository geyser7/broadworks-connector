<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ChangeCurrentIntroductionOrMessageOrReplyMenuKeysModifyEntry
 *
 * The voice portal change current introduction or message or reply menu keys
 * modify entry.
 */
class ChangeCurrentIntroductionOrMessageOrReplyMenuKeysModifyEntry
{

    /**
     * @ElementName endRecording
     * @Type string
     * @var string|null
     */
    private $endRecording = null;

    /**
     * Getter for endRecording
     *
     * @return string
     */
    public function getEndRecording()
    {
        return $this->endRecording instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endRecording;
    }

    /**
     * Setter for endRecording
     *
     * @param string $endRecording
     * @return $this
     */
    public function setEndRecording($endRecording)
    {
        $this->endRecording = $endRecording;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndRecording()
    {
        $this->endRecording = null;
        return $this;
    }


}

