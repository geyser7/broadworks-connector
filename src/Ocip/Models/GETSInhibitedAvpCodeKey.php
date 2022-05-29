<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GETSInhibitedAvpCodeKey
 *
 * The GETS inhibited Avp code entry.
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19921","type":"sequence"}]
 */
class GETSInhibitedAvpCodeKey
{

    /**
     * @ElementName avpCode
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19921
     * @var int|null
     */
    protected $avpCode = null;

    /**
     * @ElementName vendorId
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19921
     * @var int|null
     */
    protected $vendorId = null;

    /**
     * Getter for avpCode
     *
     * @return int
     */
    public function getAvpCode()
    {
        return $this->avpCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->avpCode;
    }

    /**
     * Setter for avpCode
     *
     * @param int $avpCode
     * @return $this
     */
    public function setAvpCode($avpCode)
    {
        $this->avpCode = $avpCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvpCode()
    {
        $this->avpCode = null;
        return $this;
    }

    /**
     * Getter for vendorId
     *
     * @return int
     */
    public function getVendorId()
    {
        return $this->vendorId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->vendorId;
    }

    /**
     * Setter for vendorId
     *
     * @param int $vendorId
     * @return $this
     */
    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVendorId()
    {
        $this->vendorId = null;
        return $this;
    }


}

