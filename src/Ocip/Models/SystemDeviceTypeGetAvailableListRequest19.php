<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeGetAvailableListRequest19
 *
 * Requests a list of non-obsolete Identity/device profile types defined in the system. It is possible
 *         to get either all conference device types or all non-conferernce types. This command is similar
 *         to the SystemSIPDeviceTypeGetListRequest and SystemMGCPDeviceTypeGetListRequest
 *         but gets both SIP and MGCP types.
 *         The response is either SystemDeviceTypeGetAvailableListResponse19 or ErrorResponse.
 *         Replaced by SystemDeviceTypeGetAvailableListRequest22 in AS data mode.
 *
 * @see SystemSIPDeviceTypeGetListRequest
 * @see SystemMGCPDeviceTypeGetListRequest
 * @see SystemDeviceTypeGetAvailableListResponse19
 * @see ErrorResponse
 * @see SystemDeviceTypeGetAvailableListRequest22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:7952","type":"sequence"}]
 */
class SystemDeviceTypeGetAvailableListRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName allowConference
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:7952
     * @var bool|null
     */
    protected $allowConference = null;

    /**
     * @ElementName allowMusicOnHold
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:7952
     * @var bool|null
     */
    protected $allowMusicOnHold = null;

    /**
     * @ElementName onlyConference
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:7952
     * @var bool|null
     */
    protected $onlyConference = null;

    /**
     * @ElementName onlyVideoCapable
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:7952
     * @var bool|null
     */
    protected $onlyVideoCapable = null;

    /**
     * @ElementName onlyOptionalIpAddress
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:7952
     * @var bool|null
     */
    protected $onlyOptionalIpAddress = null;

    /**
     * Getter for allowConference
     *
     * @return bool
     */
    public function getAllowConference()
    {
        return $this->allowConference instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowConference;
    }

    /**
     * Setter for allowConference
     *
     * @param bool $allowConference
     * @return $this
     */
    public function setAllowConference($allowConference)
    {
        $this->allowConference = $allowConference;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowConference()
    {
        $this->allowConference = null;
        return $this;
    }

    /**
     * Getter for allowMusicOnHold
     *
     * @return bool
     */
    public function getAllowMusicOnHold()
    {
        return $this->allowMusicOnHold instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowMusicOnHold;
    }

    /**
     * Setter for allowMusicOnHold
     *
     * @param bool $allowMusicOnHold
     * @return $this
     */
    public function setAllowMusicOnHold($allowMusicOnHold)
    {
        $this->allowMusicOnHold = $allowMusicOnHold;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowMusicOnHold()
    {
        $this->allowMusicOnHold = null;
        return $this;
    }

    /**
     * Getter for onlyConference
     *
     * @return bool
     */
    public function getOnlyConference()
    {
        return $this->onlyConference instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onlyConference;
    }

    /**
     * Setter for onlyConference
     *
     * @param bool $onlyConference
     * @return $this
     */
    public function setOnlyConference($onlyConference)
    {
        $this->onlyConference = $onlyConference;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnlyConference()
    {
        $this->onlyConference = null;
        return $this;
    }

    /**
     * Getter for onlyVideoCapable
     *
     * @return bool
     */
    public function getOnlyVideoCapable()
    {
        return $this->onlyVideoCapable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onlyVideoCapable;
    }

    /**
     * Setter for onlyVideoCapable
     *
     * @param bool $onlyVideoCapable
     * @return $this
     */
    public function setOnlyVideoCapable($onlyVideoCapable)
    {
        $this->onlyVideoCapable = $onlyVideoCapable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnlyVideoCapable()
    {
        $this->onlyVideoCapable = null;
        return $this;
    }

    /**
     * Getter for onlyOptionalIpAddress
     *
     * @return bool
     */
    public function getOnlyOptionalIpAddress()
    {
        return $this->onlyOptionalIpAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->onlyOptionalIpAddress;
    }

    /**
     * Setter for onlyOptionalIpAddress
     *
     * @param bool $onlyOptionalIpAddress
     * @return $this
     */
    public function setOnlyOptionalIpAddress($onlyOptionalIpAddress)
    {
        $this->onlyOptionalIpAddress = $onlyOptionalIpAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOnlyOptionalIpAddress()
    {
        $this->onlyOptionalIpAddress = null;
        return $this;
    }


}

