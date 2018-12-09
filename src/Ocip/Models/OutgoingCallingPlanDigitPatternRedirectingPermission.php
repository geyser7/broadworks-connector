<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanDigitPatternRedirectingPermission
 *
 * Indicates whether redirecting calls using specified digit patterns are permitted.
 *
 * @Groups [{"id":"80676ea6f2582b1b88573623a6affc0e:1981","type":"sequence"}]
 */
class OutgoingCallingPlanDigitPatternRedirectingPermission
{

    /**
     * @ElementName digitPatternName
     * @Type string
     * @Group 80676ea6f2582b1b88573623a6affc0e:1981
     * @var string|null
     */
    private $digitPatternName = null;

    /**
     * @ElementName permission
     * @Type bool
     * @Group 80676ea6f2582b1b88573623a6affc0e:1981
     * @var bool|null
     */
    private $permission = null;

    /**
     * Getter for digitPatternName
     *
     * @return string
     */
    public function getDigitPatternName()
    {
        return $this->digitPatternName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPatternName;
    }

    /**
     * Setter for digitPatternName
     *
     * @param string $digitPatternName
     * @return $this
     */
    public function setDigitPatternName($digitPatternName)
    {
        $this->digitPatternName = $digitPatternName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitPatternName()
    {
        $this->digitPatternName = null;
        return $this;
    }

    /**
     * Getter for permission
     *
     * @return bool
     */
    public function getPermission()
    {
        return $this->permission instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->permission;
    }

    /**
     * Setter for permission
     *
     * @param bool $permission
     * @return $this
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPermission()
    {
        $this->permission = null;
        return $this;
    }


}

