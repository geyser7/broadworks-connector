<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AuthenticationVerificationRequest22NormalLogin
 *
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:3906","type":"sequence"}]
 */
class AuthenticationVerificationRequest22NormalLogin
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:3906
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName password
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:3906
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName isPasswordHashed
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:3906
     * @var bool|null
     */
    private $isPasswordHashed = null;

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
     * Getter for password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->password;
    }

    /**
     * Setter for password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPassword()
    {
        $this->password = null;
        return $this;
    }

    /**
     * Getter for isPasswordHashed
     *
     * @return bool
     */
    public function getIsPasswordHashed()
    {
        return $this->isPasswordHashed instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isPasswordHashed;
    }

    /**
     * Setter for isPasswordHashed
     *
     * @param bool $isPasswordHashed
     * @return $this
     */
    public function setIsPasswordHashed($isPasswordHashed)
    {
        $this->isPasswordHashed = $isPasswordHashed;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsPasswordHashed()
    {
        $this->isPasswordHashed = null;
        return $this;
    }


}

