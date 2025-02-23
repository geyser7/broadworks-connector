<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityGeographicalPoolPrefixGetListRequest
 *
 * Gets a list of geographical prefixes belonging to a geographical pool.
 *         The response is either SystemBroadWorksMobilityGeographicalPoolPrefixGetListResponse or ErrorResponse.
 *
 * @see SystemBroadWorksMobilityGeographicalPoolPrefixGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:934","type":"sequence"}]
 */
class SystemBroadWorksMobilityGeographicalPoolPrefixGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName geographicalPoolName
     * @Type string
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:934
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $geographicalPoolName = null;

    /**
     * Getter for geographicalPoolName
     *
     * @return string
     */
    public function getGeographicalPoolName()
    {
        return $this->geographicalPoolName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->geographicalPoolName;
    }

    /**
     * Setter for geographicalPoolName
     *
     * @param string $geographicalPoolName
     * @return $this
     */
    public function setGeographicalPoolName($geographicalPoolName)
    {
        $this->geographicalPoolName = $geographicalPoolName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGeographicalPoolName()
    {
        $this->geographicalPoolName = null;
        return $this;
    }


}

