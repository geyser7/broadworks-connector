<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetRegionModifyRequest
 *
 * Request to modify the name of a region within a static configuration tag set for per-region tags override.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8399","type":"sequence"}]
 */
class SystemDeviceManagementTagSetRegionModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName tagSetName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8399
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $tagSetName = null;

    /**
     * @ElementName regionName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8399
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    protected $regionName = null;

    /**
     * @ElementName newRegionName
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8399
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    protected $newRegionName = null;

    /**
     * Getter for tagSetName
     *
     * @return string
     */
    public function getTagSetName()
    {
        return $this->tagSetName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagSetName;
    }

    /**
     * Setter for tagSetName
     *
     * @param string $tagSetName
     * @return $this
     */
    public function setTagSetName($tagSetName)
    {
        $this->tagSetName = $tagSetName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagSetName()
    {
        $this->tagSetName = null;
        return $this;
    }

    /**
     * Getter for regionName
     *
     * @return string
     */
    public function getRegionName()
    {
        return $this->regionName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->regionName;
    }

    /**
     * Setter for regionName
     *
     * @param string $regionName
     * @return $this
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRegionName()
    {
        $this->regionName = null;
        return $this;
    }

    /**
     * Getter for newRegionName
     *
     * @return string
     */
    public function getNewRegionName()
    {
        return $this->newRegionName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newRegionName;
    }

    /**
     * Setter for newRegionName
     *
     * @param string $newRegionName
     * @return $this
     */
    public function setNewRegionName($newRegionName)
    {
        $this->newRegionName = $newRegionName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewRegionName()
    {
        $this->newRegionName = null;
        return $this;
    }


}

