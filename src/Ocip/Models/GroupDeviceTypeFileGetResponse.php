<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceTypeFileGetResponse
 *
 * Response to GroupDeviceTypeFileGetRequest.
 *                 Replaced By: GroupDeviceTypeFileGetResponse14sp8
 *
 * @see GroupDeviceTypeFileGetRequest
 * @see GroupDeviceTypeFileGetResponse14sp8
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:1475","type":"sequence"}]
 */
class GroupDeviceTypeFileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName fileSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1475
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode|null
     */
    private $fileSource = null;

    /**
     * @ElementName configurationFileName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:1475
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $configurationFileName = null;

    /**
     * Getter for fileSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode
     */
    public function getFileSource()
    {
        return $this->fileSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileSource;
    }

    /**
     * Setter for fileSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode $fileSource
     * @return $this
     */
    public function setFileSource(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceEnhancedConfigurationMode $fileSource)
    {
        $this->fileSource = $fileSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileSource()
    {
        $this->fileSource = null;
        return $this;
    }

    /**
     * Getter for configurationFileName
     *
     * @return string
     */
    public function getConfigurationFileName()
    {
        return $this->configurationFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->configurationFileName;
    }

    /**
     * Setter for configurationFileName
     *
     * @param string $configurationFileName
     * @return $this
     */
    public function setConfigurationFileName($configurationFileName)
    {
        $this->configurationFileName = $configurationFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfigurationFileName()
    {
        $this->configurationFileName = null;
        return $this;
    }


}

