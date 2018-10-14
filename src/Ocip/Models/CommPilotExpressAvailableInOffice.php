<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressAvailableInOffice
 *
 * CommPilot Express Available In Office Settings.
 */
class CommPilotExpressAvailableInOffice
{

    /**
     * @ElementName additionalPhoneNumberToRing
     * @var string|null
     */
    private $additionalPhoneNumberToRing = null;

    /**
     * @ElementName busySetting
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection|null
     */
    private $busySetting = null;

    /**
     * @ElementName noAnswerSetting
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection|null
     */
    private $noAnswerSetting = null;

    /**
     * Getter for additionalPhoneNumberToRing
     *
     * @ElementName additionalPhoneNumberToRing
     * @return string|null
     */
    public function getAdditionalPhoneNumberToRing()
    {
        return $this->additionalPhoneNumberToRing;
    }

    /**
     * Setter for additionalPhoneNumberToRing
     *
     * @ElementName additionalPhoneNumberToRing
     * @param string|null $additionalPhoneNumberToRing
     * @return $this
     */
    public function setAdditionalPhoneNumberToRing($additionalPhoneNumberToRing)
    {
        $this->additionalPhoneNumberToRing = $additionalPhoneNumberToRing;
        return $this;
    }

    /**
     * Getter for busySetting
     *
     * @ElementName busySetting
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection|null
     */
    public function getBusySetting()
    {
        return $this->busySetting;
    }

    /**
     * Setter for busySetting
     *
     * @ElementName busySetting
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection|null $busySetting
     * @return $this
     */
    public function setBusySetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection $busySetting)
    {
        $this->busySetting = $busySetting;
        return $this;
    }

    /**
     * Getter for noAnswerSetting
     *
     * @ElementName noAnswerSetting
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection|null
     */
    public function getNoAnswerSetting()
    {
        return $this->noAnswerSetting;
    }

    /**
     * Setter for noAnswerSetting
     *
     * @ElementName noAnswerSetting
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection|null $noAnswerSetting
     * @return $this
     */
    public function setNoAnswerSetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection $noAnswerSetting)
    {
        $this->noAnswerSetting = $noAnswerSetting;
        return $this;
    }


}

