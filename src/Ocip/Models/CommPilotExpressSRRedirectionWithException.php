<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRRedirectionWithException
 *
 * CommPilot Express SR type to transfer to voice mail or forward to a number
 *         with certain exceptions used in the context of a get.
 *
 * @Groups [{"id":"9035ce6c9d1f5c483ddb27dc6c140d91:187","type":"sequence"}]
 */
class CommPilotExpressSRRedirectionWithException
{

    /**
     * @ElementName sendCallsToVoiceMailExceptExcludedNumbers
     * @Type bool
     * @Group 9035ce6c9d1f5c483ddb27dc6c140d91:187
     * @var bool|null
     */
    private $sendCallsToVoiceMailExceptExcludedNumbers = null;

    /**
     * @ElementName excludedPhoneNumber01
     * @Type string
     * @Optional
     * @Group 9035ce6c9d1f5c483ddb27dc6c140d91:187
     * @var string|null
     */
    private $excludedPhoneNumber01 = null;

    /**
     * @ElementName excludedPhoneNumber02
     * @Type string
     * @Optional
     * @Group 9035ce6c9d1f5c483ddb27dc6c140d91:187
     * @var string|null
     */
    private $excludedPhoneNumber02 = null;

    /**
     * @ElementName excludedPhoneNumber03
     * @Type string
     * @Optional
     * @Group 9035ce6c9d1f5c483ddb27dc6c140d91:187
     * @var string|null
     */
    private $excludedPhoneNumber03 = null;

    /**
     * @ElementName forwardExcludedNumbersTo
     * @Type string
     * @Optional
     * @Group 9035ce6c9d1f5c483ddb27dc6c140d91:187
     * @var string|null
     */
    private $forwardExcludedNumbersTo = null;

    /**
     * Getter for sendCallsToVoiceMailExceptExcludedNumbers
     *
     * @return bool
     */
    public function getSendCallsToVoiceMailExceptExcludedNumbers()
    {
        return $this->sendCallsToVoiceMailExceptExcludedNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendCallsToVoiceMailExceptExcludedNumbers;
    }

    /**
     * Setter for sendCallsToVoiceMailExceptExcludedNumbers
     *
     * @param bool $sendCallsToVoiceMailExceptExcludedNumbers
     * @return $this
     */
    public function setSendCallsToVoiceMailExceptExcludedNumbers($sendCallsToVoiceMailExceptExcludedNumbers)
    {
        $this->sendCallsToVoiceMailExceptExcludedNumbers = $sendCallsToVoiceMailExceptExcludedNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendCallsToVoiceMailExceptExcludedNumbers()
    {
        $this->sendCallsToVoiceMailExceptExcludedNumbers = null;
        return $this;
    }

    /**
     * Getter for excludedPhoneNumber01
     *
     * @return string
     */
    public function getExcludedPhoneNumber01()
    {
        return $this->excludedPhoneNumber01 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->excludedPhoneNumber01;
    }

    /**
     * Setter for excludedPhoneNumber01
     *
     * @param string $excludedPhoneNumber01
     * @return $this
     */
    public function setExcludedPhoneNumber01($excludedPhoneNumber01)
    {
        $this->excludedPhoneNumber01 = $excludedPhoneNumber01;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExcludedPhoneNumber01()
    {
        $this->excludedPhoneNumber01 = null;
        return $this;
    }

    /**
     * Getter for excludedPhoneNumber02
     *
     * @return string
     */
    public function getExcludedPhoneNumber02()
    {
        return $this->excludedPhoneNumber02 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->excludedPhoneNumber02;
    }

    /**
     * Setter for excludedPhoneNumber02
     *
     * @param string $excludedPhoneNumber02
     * @return $this
     */
    public function setExcludedPhoneNumber02($excludedPhoneNumber02)
    {
        $this->excludedPhoneNumber02 = $excludedPhoneNumber02;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExcludedPhoneNumber02()
    {
        $this->excludedPhoneNumber02 = null;
        return $this;
    }

    /**
     * Getter for excludedPhoneNumber03
     *
     * @return string
     */
    public function getExcludedPhoneNumber03()
    {
        return $this->excludedPhoneNumber03 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->excludedPhoneNumber03;
    }

    /**
     * Setter for excludedPhoneNumber03
     *
     * @param string $excludedPhoneNumber03
     * @return $this
     */
    public function setExcludedPhoneNumber03($excludedPhoneNumber03)
    {
        $this->excludedPhoneNumber03 = $excludedPhoneNumber03;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExcludedPhoneNumber03()
    {
        $this->excludedPhoneNumber03 = null;
        return $this;
    }

    /**
     * Getter for forwardExcludedNumbersTo
     *
     * @return string
     */
    public function getForwardExcludedNumbersTo()
    {
        return $this->forwardExcludedNumbersTo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardExcludedNumbersTo;
    }

    /**
     * Setter for forwardExcludedNumbersTo
     *
     * @param string $forwardExcludedNumbersTo
     * @return $this
     */
    public function setForwardExcludedNumbersTo($forwardExcludedNumbersTo)
    {
        $this->forwardExcludedNumbersTo = $forwardExcludedNumbersTo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardExcludedNumbersTo()
    {
        $this->forwardExcludedNumbersTo = null;
        return $this;
    }


}

