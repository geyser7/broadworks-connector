<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingGuestGetResponse14
 *
 * Response to UserHotelingGuestGetRequest14.
 *         Replaced By: UserSharedCallAppearanceAddEndpointRequest14sp2
 *
 * @see UserHotelingGuestGetRequest14
 * @see UserSharedCallAppearanceAddEndpointRequest14sp2
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:44787","type":"sequence"}]
 */
class UserHotelingGuestGetResponse14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:44787
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName associationLimitHours
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:44787
     * @MinInclusive 1
     * @MaxInclusive 999
     * @var int|null
     */
    protected $associationLimitHours = null;

    /**
     * @ElementName hostUserId
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:44787
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $hostUserId = null;

    /**
     * @ElementName hostLastName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:44787
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $hostLastName = null;

    /**
     * @ElementName hostFirstName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:44787
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $hostFirstName = null;

    /**
     * @ElementName hostAssociationDateTime
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:44787
     * @var string|null
     */
    protected $hostAssociationDateTime = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for associationLimitHours
     *
     * @return int
     */
    public function getAssociationLimitHours()
    {
        return $this->associationLimitHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->associationLimitHours;
    }

    /**
     * Setter for associationLimitHours
     *
     * @param int $associationLimitHours
     * @return $this
     */
    public function setAssociationLimitHours($associationLimitHours)
    {
        $this->associationLimitHours = $associationLimitHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssociationLimitHours()
    {
        $this->associationLimitHours = null;
        return $this;
    }

    /**
     * Getter for hostUserId
     *
     * @return string
     */
    public function getHostUserId()
    {
        return $this->hostUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostUserId;
    }

    /**
     * Setter for hostUserId
     *
     * @param string $hostUserId
     * @return $this
     */
    public function setHostUserId($hostUserId)
    {
        $this->hostUserId = $hostUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostUserId()
    {
        $this->hostUserId = null;
        return $this;
    }

    /**
     * Getter for hostLastName
     *
     * @return string
     */
    public function getHostLastName()
    {
        return $this->hostLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostLastName;
    }

    /**
     * Setter for hostLastName
     *
     * @param string $hostLastName
     * @return $this
     */
    public function setHostLastName($hostLastName)
    {
        $this->hostLastName = $hostLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostLastName()
    {
        $this->hostLastName = null;
        return $this;
    }

    /**
     * Getter for hostFirstName
     *
     * @return string
     */
    public function getHostFirstName()
    {
        return $this->hostFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostFirstName;
    }

    /**
     * Setter for hostFirstName
     *
     * @param string $hostFirstName
     * @return $this
     */
    public function setHostFirstName($hostFirstName)
    {
        $this->hostFirstName = $hostFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostFirstName()
    {
        $this->hostFirstName = null;
        return $this;
    }

    /**
     * Getter for hostAssociationDateTime
     *
     * @return string
     */
    public function getHostAssociationDateTime()
    {
        return $this->hostAssociationDateTime instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hostAssociationDateTime;
    }

    /**
     * Setter for hostAssociationDateTime
     *
     * @param string $hostAssociationDateTime
     * @return $this
     */
    public function setHostAssociationDateTime($hostAssociationDateTime)
    {
        $this->hostAssociationDateTime = $hostAssociationDateTime;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHostAssociationDateTime()
    {
        $this->hostAssociationDateTime = null;
        return $this;
    }


}

