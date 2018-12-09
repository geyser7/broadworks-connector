<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OcpCallTypeEntry
 *
 * The outgoing call plan call type entry.
 *
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:17427","type":"sequence"}]
 */
class OcpCallTypeEntry
{

    /**
     * @ElementName countryCode
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:17427
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName digitMap
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:17427
     * @var string|null
     */
    private $digitMap = null;

    /**
     * @ElementName callType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType
     * @Group b5f5416d9e71f8e4246cda16c4723744:17427
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType|null
     */
    private $callType = null;

    /**
     * Getter for countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountryCode()
    {
        $this->countryCode = null;
        return $this;
    }

    /**
     * Getter for digitMap
     *
     * @return string
     */
    public function getDigitMap()
    {
        return $this->digitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitMap;
    }

    /**
     * Setter for digitMap
     *
     * @param string $digitMap
     * @return $this
     */
    public function setDigitMap($digitMap)
    {
        $this->digitMap = $digitMap;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitMap()
    {
        $this->digitMap = null;
        return $this;
    }

    /**
     * Getter for callType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType
     */
    public function getCallType()
    {
        return $this->callType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callType;
    }

    /**
     * Setter for callType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType $callType
     * @return $this
     */
    public function setCallType(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanCallType $callType)
    {
        $this->callType = $callType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallType()
    {
        $this->callType = null;
        return $this;
    }


}

