<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceUserModifyRequest
 *
 * Modify a file repository user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:8890","type":"sequence"}]
 */
class SystemFileRepositoryDeviceUserModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName fileRepositoryName
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:8890
     * @var string|null
     */
    private $fileRepositoryName = null;

    /**
     * @ElementName userName
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:8890
     * @var string|null
     */
    private $userName = null;

    /**
     * @ElementName password
     * @Type string
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8890
     * @var string|null
     */
    private $password = null;

    /**
     * @ElementName allowPut
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8890
     * @var bool|null
     */
    private $allowPut = null;

    /**
     * @ElementName allowDelete
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8890
     * @var bool|null
     */
    private $allowDelete = null;

    /**
     * @ElementName allowGet
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8890
     * @var bool|null
     */
    private $allowGet = null;

    /**
     * Getter for fileRepositoryName
     *
     * @return string
     */
    public function getFileRepositoryName()
    {
        return $this->fileRepositoryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRepositoryName;
    }

    /**
     * Setter for fileRepositoryName
     *
     * @param string $fileRepositoryName
     * @return $this
     */
    public function setFileRepositoryName($fileRepositoryName)
    {
        $this->fileRepositoryName = $fileRepositoryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRepositoryName()
    {
        $this->fileRepositoryName = null;
        return $this;
    }

    /**
     * Getter for userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userName;
    }

    /**
     * Setter for userName
     *
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserName()
    {
        $this->userName = null;
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
     * Getter for allowPut
     *
     * @return bool
     */
    public function getAllowPut()
    {
        return $this->allowPut instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowPut;
    }

    /**
     * Setter for allowPut
     *
     * @param bool $allowPut
     * @return $this
     */
    public function setAllowPut($allowPut)
    {
        $this->allowPut = $allowPut;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowPut()
    {
        $this->allowPut = null;
        return $this;
    }

    /**
     * Getter for allowDelete
     *
     * @return bool
     */
    public function getAllowDelete()
    {
        return $this->allowDelete instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowDelete;
    }

    /**
     * Setter for allowDelete
     *
     * @param bool $allowDelete
     * @return $this
     */
    public function setAllowDelete($allowDelete)
    {
        $this->allowDelete = $allowDelete;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowDelete()
    {
        $this->allowDelete = null;
        return $this;
    }

    /**
     * Getter for allowGet
     *
     * @return bool
     */
    public function getAllowGet()
    {
        return $this->allowGet instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowGet;
    }

    /**
     * Setter for allowGet
     *
     * @param bool $allowGet
     * @return $this
     */
    public function setAllowGet($allowGet)
    {
        $this->allowGet = $allowGet;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowGet()
    {
        $this->allowGet = null;
        return $this;
    }


}

