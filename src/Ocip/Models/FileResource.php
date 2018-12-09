<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FileResource
 *
 * Represents either an existing file for the application server to use, or
 *         the contents of a file to transfer.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:2052","type":"sequence","children":[{"id":"8e629edbac315ae7889caca732382c44:2053","type":"choice"}]}]
 */
class FileResource
{

    /**
     * @ElementName sourceFileName
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:2053
     * @var string|null
     */
    private $sourceFileName = null;

    /**
     * @ElementName fileContent
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:2053
     * @var string|null
     */
    private $fileContent = null;

    /**
     * Getter for sourceFileName
     *
     * @return string
     */
    public function getSourceFileName()
    {
        return $this->sourceFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sourceFileName;
    }

    /**
     * Setter for sourceFileName
     *
     * @param string $sourceFileName
     * @return $this
     */
    public function setSourceFileName($sourceFileName)
    {
        $this->sourceFileName = $sourceFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSourceFileName()
    {
        $this->sourceFileName = null;
        return $this;
    }

    /**
     * Getter for fileContent
     *
     * @return string
     */
    public function getFileContent()
    {
        return $this->fileContent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileContent;
    }

    /**
     * Setter for fileContent
     *
     * @param string $fileContent
     * @return $this
     */
    public function setFileContent($fileContent)
    {
        $this->fileContent = $fileContent;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileContent()
    {
        $this->fileContent = null;
        return $this;
    }


}

