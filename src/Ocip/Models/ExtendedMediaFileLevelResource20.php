<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExtendedMediaFileLevelResource20
 *
 * Represents either an existing file for the application server to use, or
 *           the contents of a file to transfer and an URL.
 */
class ExtendedMediaFileLevelResource20
{

    /**
     * @ElementName file
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    private $file = null;

    /**
     * @ElementName url
     * @var string|null
     */
    private $url = null;

    /**
     * Getter for file
     *
     * @ElementName file
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Setter for file
     *
     * @ElementName file
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $file
     * @return $this
     */
    public function setFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * Getter for url
     *
     * @ElementName url
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Setter for url
     *
     * @ElementName url
     * @param string|null $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }


}

