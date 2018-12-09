<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceModifyRequest
 *
 * Modify a file repository.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:8763","type":"sequence"}]
 */
class SystemFileRepositoryDeviceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:8763
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName rootDirectory
     * @Type string
     * @Nillable
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8763
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $rootDirectory = null;

    /**
     * @ElementName secure
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8763
     * @var bool|null
     */
    private $secure = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8763
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName ftpPassive
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8763
     * @var bool|null
     */
    private $ftpPassive = null;

    /**
     * @ElementName protocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocol
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8763
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocol|null
     */
    private $protocol = null;

    /**
     * @ElementName port
     * @Type int
     * @Nillable
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8763
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $port = null;

    /**
     * @ElementName ftpRemoteVerification
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8763
     * @var bool|null
     */
    private $ftpRemoteVerification = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for rootDirectory
     *
     * @return string|null
     */
    public function getRootDirectory()
    {
        return $this->rootDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rootDirectory;
    }

    /**
     * Setter for rootDirectory
     *
     * @param string|null $rootDirectory
     * @return $this
     */
    public function setRootDirectory($rootDirectory)
    {
        if ($rootDirectory === null) {
            $this->rootDirectory = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->rootDirectory = $rootDirectory;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRootDirectory()
    {
        $this->rootDirectory = null;
        return $this;
    }

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
     * Getter for netAddress
     *
     * @return string
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddress()
    {
        $this->netAddress = null;
        return $this;
    }

    /**
     * Getter for ftpPassive
     *
     * @return bool
     */
    public function getFtpPassive()
    {
        return $this->ftpPassive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ftpPassive;
    }

    /**
     * Setter for ftpPassive
     *
     * @param bool $ftpPassive
     * @return $this
     */
    public function setFtpPassive($ftpPassive)
    {
        $this->ftpPassive = $ftpPassive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFtpPassive()
    {
        $this->ftpPassive = null;
        return $this;
    }

    /**
     * Getter for protocol
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocol
     */
    public function getProtocol()
    {
        return $this->protocol instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocol;
    }

    /**
     * Setter for protocol
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocol $protocol
     * @return $this
     */
    public function setProtocol(\CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocol $protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProtocol()
    {
        $this->protocol = null;
        return $this;
    }

    /**
     * Getter for port
     *
     * @return int|null
     */
    public function getPort()
    {
        return $this->port instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->port;
    }

    /**
     * Setter for port
     *
     * @param int|null $port
     * @return $this
     */
    public function setPort($port)
    {
        if ($port === null) {
            $this->port = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->port = $port;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPort()
    {
        $this->port = null;
        return $this;
    }

    /**
     * Getter for ftpRemoteVerification
     *
     * @return bool
     */
    public function getFtpRemoteVerification()
    {
        return $this->ftpRemoteVerification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ftpRemoteVerification;
    }

    /**
     * Setter for ftpRemoteVerification
     *
     * @param bool $ftpRemoteVerification
     * @return $this
     */
    public function setFtpRemoteVerification($ftpRemoteVerification)
    {
        $this->ftpRemoteVerification = $ftpRemoteVerification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFtpRemoteVerification()
    {
        $this->ftpRemoteVerification = null;
        return $this;
    }


}

