<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayMessageMenuKeys
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:928","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse21PlayMessageMenuKeys
{

    /**
     * @ElementName skipBackward
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:928
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $skipBackward = null;

    /**
     * @ElementName pauseOrResume
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:928
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $pauseOrResume = null;

    /**
     * @ElementName skipForward
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:928
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $skipForward = null;

    /**
     * @ElementName jumpToBegin
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:928
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $jumpToBegin = null;

    /**
     * @ElementName jumpToEnd
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:928
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $jumpToEnd = null;

    /**
     * Getter for skipBackward
     *
     * @return string
     */
    public function getSkipBackward()
    {
        return $this->skipBackward instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->skipBackward;
    }

    /**
     * Setter for skipBackward
     *
     * @param string $skipBackward
     * @return $this
     */
    public function setSkipBackward($skipBackward)
    {
        $this->skipBackward = $skipBackward;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSkipBackward()
    {
        $this->skipBackward = null;
        return $this;
    }

    /**
     * Getter for pauseOrResume
     *
     * @return string
     */
    public function getPauseOrResume()
    {
        return $this->pauseOrResume instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pauseOrResume;
    }

    /**
     * Setter for pauseOrResume
     *
     * @param string $pauseOrResume
     * @return $this
     */
    public function setPauseOrResume($pauseOrResume)
    {
        $this->pauseOrResume = $pauseOrResume;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPauseOrResume()
    {
        $this->pauseOrResume = null;
        return $this;
    }

    /**
     * Getter for skipForward
     *
     * @return string
     */
    public function getSkipForward()
    {
        return $this->skipForward instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->skipForward;
    }

    /**
     * Setter for skipForward
     *
     * @param string $skipForward
     * @return $this
     */
    public function setSkipForward($skipForward)
    {
        $this->skipForward = $skipForward;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSkipForward()
    {
        $this->skipForward = null;
        return $this;
    }

    /**
     * Getter for jumpToBegin
     *
     * @return string
     */
    public function getJumpToBegin()
    {
        return $this->jumpToBegin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->jumpToBegin;
    }

    /**
     * Setter for jumpToBegin
     *
     * @param string $jumpToBegin
     * @return $this
     */
    public function setJumpToBegin($jumpToBegin)
    {
        $this->jumpToBegin = $jumpToBegin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetJumpToBegin()
    {
        $this->jumpToBegin = null;
        return $this;
    }

    /**
     * Getter for jumpToEnd
     *
     * @return string
     */
    public function getJumpToEnd()
    {
        return $this->jumpToEnd instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->jumpToEnd;
    }

    /**
     * Setter for jumpToEnd
     *
     * @param string $jumpToEnd
     * @return $this
     */
    public function setJumpToEnd($jumpToEnd)
    {
        $this->jumpToEnd = $jumpToEnd;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetJumpToEnd()
    {
        $this->jumpToEnd = null;
        return $this;
    }


}

