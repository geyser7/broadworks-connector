<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserINIntegrationModifyRequest
 *
 * Request to modify the user level IN Integration service attributes
 *         Response is either SuccessResponse or ErrorResponse
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserINIntegrationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName originatingServiceKey
     * @Type int
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $originatingServiceKey = null;

    /**
     * @ElementName terminatingServiceKey
     * @Type int
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $terminatingServiceKey = null;

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
     * Getter for originatingServiceKey
     *
     * @return int|null
     */
    public function getOriginatingServiceKey()
    {
        return $this->originatingServiceKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatingServiceKey;
    }

    /**
     * Setter for originatingServiceKey
     *
     * @param int|null $originatingServiceKey
     * @return $this
     */
    public function setOriginatingServiceKey($originatingServiceKey)
    {
        if ($originatingServiceKey === null) {
            $this->originatingServiceKey = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->originatingServiceKey = $originatingServiceKey;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatingServiceKey()
    {
        $this->originatingServiceKey = null;
        return $this;
    }

    /**
     * Getter for terminatingServiceKey
     *
     * @return int|null
     */
    public function getTerminatingServiceKey()
    {
        return $this->terminatingServiceKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->terminatingServiceKey;
    }

    /**
     * Setter for terminatingServiceKey
     *
     * @param int|null $terminatingServiceKey
     * @return $this
     */
    public function setTerminatingServiceKey($terminatingServiceKey)
    {
        if ($terminatingServiceKey === null) {
            $this->terminatingServiceKey = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->terminatingServiceKey = $terminatingServiceKey;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTerminatingServiceKey()
    {
        $this->terminatingServiceKey = null;
        return $this;
    }


}

