<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallTypeMappingEntry
 *
 * The call type mapping entry.
 */
class CallTypeMappingEntry
{

    /**
     * @ElementName countryCode
     * @var string|null
     */
    private $countryCode = null;

    /**
     * @ElementName digitMap
     * @var string|null
     */
    private $digitMap = null;

    /**
     * @ElementName callType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemCallType|null
     */
    private $callType = null;

    /**
     * Getter for countryCode
     *
     * @ElementName countryCode
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Setter for countryCode
     *
     * @ElementName countryCode
     * @param string|null $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Getter for digitMap
     *
     * @ElementName digitMap
     * @return string|null
     */
    public function getDigitMap()
    {
        return $this->digitMap;
    }

    /**
     * Setter for digitMap
     *
     * @ElementName digitMap
     * @param string|null $digitMap
     * @return $this
     */
    public function setDigitMap($digitMap)
    {
        $this->digitMap = $digitMap;
        return $this;
    }

    /**
     * Getter for callType
     *
     * @ElementName callType
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemCallType|null
     */
    public function getCallType()
    {
        return $this->callType;
    }

    /**
     * Setter for callType
     *
     * @ElementName callType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemCallType|null $callType
     * @return $this
     */
    public function setCallType(\CWM\BroadWorksConnector\Ocip\Models\SystemCallType $callType)
    {
        $this->callType = $callType;
        return $this;
    }


}

