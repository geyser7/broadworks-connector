<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserHotelingHostModifyRequest
 *
 * Modify the user level data associated with Hoteling Host.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserHotelingHostModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName enforceAssociationLimit
     * @Type bool
     * @var bool|null
     */
    private $enforceAssociationLimit = null;

    /**
     * @ElementName associationLimitHours
     * @Type int
     * @var int|null
     */
    private $associationLimitHours = null;

    /**
     * @ElementName accessLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel|null
     */
    private $accessLevel = null;

    /**
     * @ElementName removeGuestAssociation
     * @Type bool
     * @var bool|null
     */
    private $removeGuestAssociation = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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
     * Getter for enforceAssociationLimit
     *
     * @return bool
     */
    public function getEnforceAssociationLimit()
    {
        return $this->enforceAssociationLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceAssociationLimit;
    }

    /**
     * Setter for enforceAssociationLimit
     *
     * @param bool $enforceAssociationLimit
     * @return $this
     */
    public function setEnforceAssociationLimit($enforceAssociationLimit)
    {
        $this->enforceAssociationLimit = $enforceAssociationLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceAssociationLimit()
    {
        $this->enforceAssociationLimit = null;
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
     * Getter for accessLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel
     */
    public function getAccessLevel()
    {
        return $this->accessLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessLevel;
    }

    /**
     * Setter for accessLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel $accessLevel
     * @return $this
     */
    public function setAccessLevel(\CWM\BroadWorksConnector\Ocip\Models\HotelingHostAccessLevel $accessLevel)
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessLevel()
    {
        $this->accessLevel = null;
        return $this;
    }

    /**
     * Getter for removeGuestAssociation
     *
     * @return bool
     */
    public function getRemoveGuestAssociation()
    {
        return $this->removeGuestAssociation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->removeGuestAssociation;
    }

    /**
     * Setter for removeGuestAssociation
     *
     * @param bool $removeGuestAssociation
     * @return $this
     */
    public function setRemoveGuestAssociation($removeGuestAssociation)
    {
        $this->removeGuestAssociation = $removeGuestAssociation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRemoveGuestAssociation()
    {
        $this->removeGuestAssociation = null;
        return $this;
    }


}

