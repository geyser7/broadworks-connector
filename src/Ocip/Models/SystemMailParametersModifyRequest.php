<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMailParametersModifyRequest
 *
 * Request to modify Mail system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemMailParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName primaryServerNetAddress
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $primaryServerNetAddress = null;

    /**
     * @ElementName secondaryServerNetAddress
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $secondaryServerNetAddress = null;

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @var string|null
     */
    private $defaultFromAddress = null;

    /**
     * @ElementName defaultSubject
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultSubject = null;

    /**
     * @ElementName supportDNSSRVForMailServerAccess
     * @Type bool
     * @var bool|null
     */
    private $supportDNSSRVForMailServerAccess = null;

    /**
     * @ElementName secureMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SMTPSecureMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\SMTPSecureMode|null
     */
    private $secureMode = null;

    /**
     * @ElementName port
     * @Type int
     * @Nillable
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $port = null;

    /**
     * Getter for primaryServerNetAddress
     *
     * @return string|null
     */
    public function getPrimaryServerNetAddress()
    {
        return $this->primaryServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->primaryServerNetAddress;
    }

    /**
     * Setter for primaryServerNetAddress
     *
     * @param string|null $primaryServerNetAddress
     * @return $this
     */
    public function setPrimaryServerNetAddress($primaryServerNetAddress)
    {
        if ($primaryServerNetAddress === null) {
            $this->primaryServerNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->primaryServerNetAddress = $primaryServerNetAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrimaryServerNetAddress()
    {
        $this->primaryServerNetAddress = null;
        return $this;
    }

    /**
     * Getter for secondaryServerNetAddress
     *
     * @return string|null
     */
    public function getSecondaryServerNetAddress()
    {
        return $this->secondaryServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secondaryServerNetAddress;
    }

    /**
     * Setter for secondaryServerNetAddress
     *
     * @param string|null $secondaryServerNetAddress
     * @return $this
     */
    public function setSecondaryServerNetAddress($secondaryServerNetAddress)
    {
        if ($secondaryServerNetAddress === null) {
            $this->secondaryServerNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->secondaryServerNetAddress = $secondaryServerNetAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecondaryServerNetAddress()
    {
        $this->secondaryServerNetAddress = null;
        return $this;
    }

    /**
     * Getter for defaultFromAddress
     *
     * @return string
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultFromAddress;
    }

    /**
     * Setter for defaultFromAddress
     *
     * @param string $defaultFromAddress
     * @return $this
     */
    public function setDefaultFromAddress($defaultFromAddress)
    {
        $this->defaultFromAddress = $defaultFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultFromAddress()
    {
        $this->defaultFromAddress = null;
        return $this;
    }

    /**
     * Getter for defaultSubject
     *
     * @return string|null
     */
    public function getDefaultSubject()
    {
        return $this->defaultSubject instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultSubject;
    }

    /**
     * Setter for defaultSubject
     *
     * @param string|null $defaultSubject
     * @return $this
     */
    public function setDefaultSubject($defaultSubject)
    {
        if ($defaultSubject === null) {
            $this->defaultSubject = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultSubject = $defaultSubject;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultSubject()
    {
        $this->defaultSubject = null;
        return $this;
    }

    /**
     * Getter for supportDNSSRVForMailServerAccess
     *
     * @return bool
     */
    public function getSupportDNSSRVForMailServerAccess()
    {
        return $this->supportDNSSRVForMailServerAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportDNSSRVForMailServerAccess;
    }

    /**
     * Setter for supportDNSSRVForMailServerAccess
     *
     * @param bool $supportDNSSRVForMailServerAccess
     * @return $this
     */
    public function setSupportDNSSRVForMailServerAccess($supportDNSSRVForMailServerAccess)
    {
        $this->supportDNSSRVForMailServerAccess = $supportDNSSRVForMailServerAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportDNSSRVForMailServerAccess()
    {
        $this->supportDNSSRVForMailServerAccess = null;
        return $this;
    }

    /**
     * Getter for secureMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SMTPSecureMode
     */
    public function getSecureMode()
    {
        return $this->secureMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->secureMode;
    }

    /**
     * Setter for secureMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SMTPSecureMode $secureMode
     * @return $this
     */
    public function setSecureMode(\CWM\BroadWorksConnector\Ocip\Models\SMTPSecureMode $secureMode)
    {
        $this->secureMode = $secureMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecureMode()
    {
        $this->secureMode = null;
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


}

