<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemEmergencyCallNotificationGetResponse
 *
 * Response to SystemEmergencyCallNotificationGetResponse.
 *
 * @see SystemEmergencyCallNotificationGetResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9709","type":"sequence"}]
 */
class SystemEmergencyCallNotificationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultFromAddress
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9709
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultFromAddress = null;

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


}

