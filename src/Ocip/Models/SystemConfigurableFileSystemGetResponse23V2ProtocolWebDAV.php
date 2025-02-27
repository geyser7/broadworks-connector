<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponse23V2ProtocolWebDAV
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:6630","type":"sequence"}]
 */
class SystemConfigurableFileSystemGetResponse23V2ProtocolWebDAV
{

    /**
     * @ElementName secure
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6630
     * @var bool|null
     */
    protected $secure = null;

    /**
     * @ElementName userName
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6630
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $userName = null;

    /**
     * @ElementName fileServerFQDN
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6630
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $fileServerFQDN = null;

    /**
     * Getter for secure
     *
     * @return bool
     */
    public function getSecure()
    {
        return $this->secure instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secure;
    }

    /**
     * Setter for secure
     *
     * @param bool $secure
     * @return $this
     */
    public function setSecure($secure)
    {
        $this->secure = $secure;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecure()
    {
        $this->secure = null;
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
     * Getter for fileServerFQDN
     *
     * @return string
     */
    public function getFileServerFQDN()
    {
        return $this->fileServerFQDN instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileServerFQDN;
    }

    /**
     * Setter for fileServerFQDN
     *
     * @param string $fileServerFQDN
     * @return $this
     */
    public function setFileServerFQDN($fileServerFQDN)
    {
        $this->fileServerFQDN = $fileServerFQDN;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileServerFQDN()
    {
        $this->fileServerFQDN = null;
        return $this;
    }


}

