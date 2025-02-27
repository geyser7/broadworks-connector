<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneLocationBasedPhysicalLocationAddListRequest
 *
 * Adds a list of physical locations to a zone
 *         The response is SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19705","type":"sequence"}]
 */
class SystemZoneLocationBasedPhysicalLocationAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName zoneName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19705
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $zoneName = null;

    /**
     * @ElementName physicalLocation
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19705
     * @MinLength 1
     * @MaxLength 1024
     * @var string[]
     */
    protected $physicalLocation = array(
        
    );

    /**
     * Getter for zoneName
     *
     * @return string
     */
    public function getZoneName()
    {
        return $this->zoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->zoneName;
    }

    /**
     * Setter for zoneName
     *
     * @param string $zoneName
     * @return $this
     */
    public function setZoneName($zoneName)
    {
        $this->zoneName = $zoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetZoneName()
    {
        $this->zoneName = null;
        return $this;
    }

    /**
     * Getter for physicalLocation
     *
     * @return string[]
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->physicalLocation;
    }

    /**
     * Setter for physicalLocation
     *
     * @param string[] $physicalLocation
     * @return $this
     */
    public function setPhysicalLocation(array $physicalLocation)
    {
        $this->physicalLocation = $physicalLocation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhysicalLocation()
    {
        $this->physicalLocation = null;
        return $this;
    }

    /**
     * Adder for physicalLocation
     *
     * @param string $physicalLocation
     * @return $this
     */
    public function addPhysicalLocation(string $physicalLocation)
    {
        $this->physicalLocation[] = $physicalLocation;
        return $this;
    }


}

