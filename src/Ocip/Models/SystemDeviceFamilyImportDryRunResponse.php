<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceFamilyImportDryRunResponse
 *
 * Response to SystemDeviceFamilyImportDryRunRequest.
 *
 * @see SystemDeviceFamilyImportDryRunRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7549","type":"sequence"}]
 */
class SystemDeviceFamilyImportDryRunResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName file
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7549
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $file = null;

    /**
     * @ElementName differenceFound
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7549
     * @var bool|null
     */
    protected $differenceFound = null;

    /**
     * Getter for file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->file;
    }

    /**
     * Setter for file
     *
     * @param string $file
     * @return $this
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFile()
    {
        $this->file = null;
        return $this;
    }

    /**
     * Getter for differenceFound
     *
     * @return bool
     */
    public function getDifferenceFound()
    {
        return $this->differenceFound instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->differenceFound;
    }

    /**
     * Setter for differenceFound
     *
     * @param bool $differenceFound
     * @return $this
     */
    public function setDifferenceFound($differenceFound)
    {
        $this->differenceFound = $differenceFound;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDifferenceFound()
    {
        $this->differenceFound = null;
        return $this;
    }


}

