<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRouteListGetResponse22
 *
 * Response to UserRouteListGetRequest22.
 *         Contains the route list setting and a list of assigned number ranges and
 * number prefixes.
 *         The column headings for assignedNumberRangeTable are "Number Range
 * Start", "Number Range End" and "Is Active".
 *         The column headings for assignedNumberPrefixTable are "Number Prefix"
 * and "Is Active".
 *
 * @see UserRouteListGetRequest22
 */
class UserRouteListGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treatOriginationsAndPBXRedirectionsAsScreened
     * @Type bool
     * @var bool|null
     */
    private $treatOriginationsAndPBXRedirectionsAsScreened = null;

    /**
     * @ElementName useRouteListIdentityForNonEmergencyCalls
     * @Type bool
     * @var bool|null
     */
    private $useRouteListIdentityForNonEmergencyCalls = null;

    /**
     * @ElementName useRouteListIdentityForEmergencyCalls
     * @Type bool
     * @var bool|null
     */
    private $useRouteListIdentityForEmergencyCalls = null;

    /**
     * @ElementName assignedNumberRangeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $assignedNumberRangeTable = null;

    /**
     * @ElementName assignedNumberPrefixTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $assignedNumberPrefixTable = null;

    /**
     * Getter for treatOriginationsAndPBXRedirectionsAsScreened
     *
     * @return bool
     */
    public function getTreatOriginationsAndPBXRedirectionsAsScreened()
    {
        return $this->treatOriginationsAndPBXRedirectionsAsScreened instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatOriginationsAndPBXRedirectionsAsScreened;
    }

    /**
     * Setter for treatOriginationsAndPBXRedirectionsAsScreened
     *
     * @param bool $treatOriginationsAndPBXRedirectionsAsScreened
     * @return $this
     */
    public function setTreatOriginationsAndPBXRedirectionsAsScreened($treatOriginationsAndPBXRedirectionsAsScreened)
    {
        $this->treatOriginationsAndPBXRedirectionsAsScreened = $treatOriginationsAndPBXRedirectionsAsScreened;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatOriginationsAndPBXRedirectionsAsScreened()
    {
        $this->treatOriginationsAndPBXRedirectionsAsScreened = null;
        return $this;
    }

    /**
     * Getter for useRouteListIdentityForNonEmergencyCalls
     *
     * @return bool
     */
    public function getUseRouteListIdentityForNonEmergencyCalls()
    {
        return $this->useRouteListIdentityForNonEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useRouteListIdentityForNonEmergencyCalls;
    }

    /**
     * Setter for useRouteListIdentityForNonEmergencyCalls
     *
     * @param bool $useRouteListIdentityForNonEmergencyCalls
     * @return $this
     */
    public function setUseRouteListIdentityForNonEmergencyCalls($useRouteListIdentityForNonEmergencyCalls)
    {
        $this->useRouteListIdentityForNonEmergencyCalls = $useRouteListIdentityForNonEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseRouteListIdentityForNonEmergencyCalls()
    {
        $this->useRouteListIdentityForNonEmergencyCalls = null;
        return $this;
    }

    /**
     * Getter for useRouteListIdentityForEmergencyCalls
     *
     * @return bool
     */
    public function getUseRouteListIdentityForEmergencyCalls()
    {
        return $this->useRouteListIdentityForEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useRouteListIdentityForEmergencyCalls;
    }

    /**
     * Setter for useRouteListIdentityForEmergencyCalls
     *
     * @param bool $useRouteListIdentityForEmergencyCalls
     * @return $this
     */
    public function setUseRouteListIdentityForEmergencyCalls($useRouteListIdentityForEmergencyCalls)
    {
        $this->useRouteListIdentityForEmergencyCalls = $useRouteListIdentityForEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseRouteListIdentityForEmergencyCalls()
    {
        $this->useRouteListIdentityForEmergencyCalls = null;
        return $this;
    }

    /**
     * Getter for assignedNumberRangeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAssignedNumberRangeTable()
    {
        return $this->assignedNumberRangeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignedNumberRangeTable;
    }

    /**
     * Setter for assignedNumberRangeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $assignedNumberRangeTable
     * @return $this
     */
    public function setAssignedNumberRangeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $assignedNumberRangeTable)
    {
        $this->assignedNumberRangeTable = $assignedNumberRangeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignedNumberRangeTable()
    {
        $this->assignedNumberRangeTable = null;
        return $this;
    }

    /**
     * Getter for assignedNumberPrefixTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAssignedNumberPrefixTable()
    {
        return $this->assignedNumberPrefixTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignedNumberPrefixTable;
    }

    /**
     * Setter for assignedNumberPrefixTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $assignedNumberPrefixTable
     * @return $this
     */
    public function setAssignedNumberPrefixTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $assignedNumberPrefixTable)
    {
        $this->assignedNumberPrefixTable = $assignedNumberPrefixTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignedNumberPrefixTable()
    {
        $this->assignedNumberPrefixTable = null;
        return $this;
    }


}

