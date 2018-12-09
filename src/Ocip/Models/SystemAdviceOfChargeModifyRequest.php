<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdviceOfChargeModifyRequest
 *
 * Request to modify Advice of Charge system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         Replaced by: SystemAdviceOfChargeModifyRequest19sp1
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemAdviceOfChargeModifyRequest19sp1
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:17252","type":"sequence"}]
 */
class SystemAdviceOfChargeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName delayBetweenNotificationSeconds
     * @Type int
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:17252
     * @var int|null
     */
    private $delayBetweenNotificationSeconds = null;

    /**
     * @ElementName incomingAocHandling
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:17252
     * @var \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling|null
     */
    private $incomingAocHandling = null;

    /**
     * @ElementName costInformationSource
     * @Type string
     * @Nillable
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:17252
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $costInformationSource = null;

    /**
     * Getter for delayBetweenNotificationSeconds
     *
     * @return int
     */
    public function getDelayBetweenNotificationSeconds()
    {
        return $this->delayBetweenNotificationSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->delayBetweenNotificationSeconds;
    }

    /**
     * Setter for delayBetweenNotificationSeconds
     *
     * @param int $delayBetweenNotificationSeconds
     * @return $this
     */
    public function setDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds)
    {
        $this->delayBetweenNotificationSeconds = $delayBetweenNotificationSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDelayBetweenNotificationSeconds()
    {
        $this->delayBetweenNotificationSeconds = null;
        return $this;
    }

    /**
     * Getter for incomingAocHandling
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling
     */
    public function getIncomingAocHandling()
    {
        return $this->incomingAocHandling instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingAocHandling;
    }

    /**
     * Setter for incomingAocHandling
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling $incomingAocHandling
     * @return $this
     */
    public function setIncomingAocHandling(\CWM\BroadWorksConnector\Ocip\Models\AdviceOfChargeIncomingAocHandling $incomingAocHandling)
    {
        $this->incomingAocHandling = $incomingAocHandling;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingAocHandling()
    {
        $this->incomingAocHandling = null;
        return $this;
    }

    /**
     * Getter for costInformationSource
     *
     * @return string|null
     */
    public function getCostInformationSource()
    {
        return $this->costInformationSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->costInformationSource;
    }

    /**
     * Setter for costInformationSource
     *
     * @param string|null $costInformationSource
     * @return $this
     */
    public function setCostInformationSource($costInformationSource)
    {
        if ($costInformationSource === null) {
            $this->costInformationSource = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->costInformationSource = $costInformationSource;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCostInformationSource()
    {
        $this->costInformationSource = null;
        return $this;
    }


}

