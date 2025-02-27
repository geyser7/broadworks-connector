<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetImportDryRunRequest
 *
 * Request to perform a dry run for the import of a Tag Set Archive File (TSAF) as a new Tag Set.  The URL supports the HTTP and the FILE protocols.
 *         When the optional element resellerId is specified, the device type created is at reseller level. 
 *         When the optional element tagSetOverride is set to true, an existing tag set on the destination system will be overridden.
 *         When the optional element tagSetRename is set, on import the tag set name part of the TSAF will be changed to the desired name on the destination system.
 *         The response is either a SystemDeviceManagementTagSetImportDryRunResponse or an ErrorResponse.
 *         
 *         The following data elements are only used in AS data mode and ignored in XS data mode:
 *           resellerId
 *
 * @see SystemDeviceManagementTagSetImportDryRunResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8256","type":"sequence"}]
 */
class SystemDeviceManagementTagSetImportDryRunRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName file
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8256
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $file = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8256
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName tagSetOverride
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8256
     * @var bool|null
     */
    protected $tagSetOverride = null;

    /**
     * @ElementName tagSetRename
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTagSetRename
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8256
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTagSetRename|null
     */
    protected $tagSetRename = null;

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
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for tagSetOverride
     *
     * @return bool
     */
    public function getTagSetOverride()
    {
        return $this->tagSetOverride instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSetOverride;
    }

    /**
     * Setter for tagSetOverride
     *
     * @param bool $tagSetOverride
     * @return $this
     */
    public function setTagSetOverride($tagSetOverride)
    {
        $this->tagSetOverride = $tagSetOverride;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagSetOverride()
    {
        $this->tagSetOverride = null;
        return $this;
    }

    /**
     * Getter for tagSetRename
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTagSetRename
     */
    public function getTagSetRename()
    {
        return $this->tagSetRename instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSetRename;
    }

    /**
     * Setter for tagSetRename
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTagSetRename $tagSetRename
     * @return $this
     */
    public function setTagSetRename(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTagSetRename $tagSetRename)
    {
        $this->tagSetRename = $tagSetRename;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagSetRename()
    {
        $this->tagSetRename = null;
        return $this;
    }


}

