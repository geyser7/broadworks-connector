<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileAddRequest17sp3
 *
 * Add a new Communication Barring Profile.
 *         The priorities for IncomingRules are requantized to consecutive integers as part of the add.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The following elements are only used in AS data mode:
 *           callMeNowDefaultAction, use value "Block" in XS data mode
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           callMeNowDefaultCallTimeout
 *           callMeNowRule
 *           
 *         Replaced by: SystemCommunicationBarringProfileAddRequest19sp1 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemCommunicationBarringProfileAddRequest19sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:7608","type":"sequence"}]
 */
class SystemCommunicationBarringProfileAddRequest17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName originatingDefaultAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction|null
     */
    protected $originatingDefaultAction = null;

    /**
     * @ElementName originatingDefaultTreatmentId
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $originatingDefaultTreatmentId = null;

    /**
     * @ElementName originatingDefaultTransferNumber
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $originatingDefaultTransferNumber = null;

    /**
     * @ElementName originatingDefaultCallTimeout
     * @Type int
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @MinInclusive 60
     * @MaxInclusive 86400
     * @var int|null
     */
    protected $originatingDefaultCallTimeout = null;

    /**
     * @ElementName originatingRule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule[]
     */
    protected $originatingRule = array(
        
    );

    /**
     * @ElementName redirectingDefaultAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction|null
     */
    protected $redirectingDefaultAction = null;

    /**
     * @ElementName redirectingDefaultCallTimeout
     * @Type int
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @MinInclusive 60
     * @MaxInclusive 86400
     * @var int|null
     */
    protected $redirectingDefaultCallTimeout = null;

    /**
     * @ElementName redirectingRule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule[]
     */
    protected $redirectingRule = array(
        
    );

    /**
     * @ElementName incomingDefaultAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction|null
     */
    protected $incomingDefaultAction = null;

    /**
     * @ElementName incomingDefaultCallTimeout
     * @Type int
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @MinInclusive 60
     * @MaxInclusive 86400
     * @var int|null
     */
    protected $incomingDefaultCallTimeout = null;

    /**
     * @ElementName incomingRule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule[]
     */
    protected $incomingRule = array(
        
    );

    /**
     * @ElementName callMeNowDefaultAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction|null
     */
    protected $callMeNowDefaultAction = null;

    /**
     * @ElementName callMeNowDefaultCallTimeout
     * @Type int
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @MinInclusive 60
     * @MaxInclusive 86400
     * @var int|null
     */
    protected $callMeNowDefaultCallTimeout = null;

    /**
     * @ElementName callMeNowRule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowRule
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7608
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowRule[]
     */
    protected $callMeNowRule = array(
        
    );

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
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for originatingDefaultAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction
     */
    public function getOriginatingDefaultAction()
    {
        return $this->originatingDefaultAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatingDefaultAction;
    }

    /**
     * Setter for originatingDefaultAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction $originatingDefaultAction
     * @return $this
     */
    public function setOriginatingDefaultAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction $originatingDefaultAction)
    {
        $this->originatingDefaultAction = $originatingDefaultAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatingDefaultAction()
    {
        $this->originatingDefaultAction = null;
        return $this;
    }

    /**
     * Getter for originatingDefaultTreatmentId
     *
     * @return string
     */
    public function getOriginatingDefaultTreatmentId()
    {
        return $this->originatingDefaultTreatmentId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatingDefaultTreatmentId;
    }

    /**
     * Setter for originatingDefaultTreatmentId
     *
     * @param string $originatingDefaultTreatmentId
     * @return $this
     */
    public function setOriginatingDefaultTreatmentId($originatingDefaultTreatmentId)
    {
        $this->originatingDefaultTreatmentId = $originatingDefaultTreatmentId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatingDefaultTreatmentId()
    {
        $this->originatingDefaultTreatmentId = null;
        return $this;
    }

    /**
     * Getter for originatingDefaultTransferNumber
     *
     * @return string
     */
    public function getOriginatingDefaultTransferNumber()
    {
        return $this->originatingDefaultTransferNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatingDefaultTransferNumber;
    }

    /**
     * Setter for originatingDefaultTransferNumber
     *
     * @param string $originatingDefaultTransferNumber
     * @return $this
     */
    public function setOriginatingDefaultTransferNumber($originatingDefaultTransferNumber)
    {
        $this->originatingDefaultTransferNumber = $originatingDefaultTransferNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatingDefaultTransferNumber()
    {
        $this->originatingDefaultTransferNumber = null;
        return $this;
    }

    /**
     * Getter for originatingDefaultCallTimeout
     *
     * @return int
     */
    public function getOriginatingDefaultCallTimeout()
    {
        return $this->originatingDefaultCallTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatingDefaultCallTimeout;
    }

    /**
     * Setter for originatingDefaultCallTimeout
     *
     * @param int $originatingDefaultCallTimeout
     * @return $this
     */
    public function setOriginatingDefaultCallTimeout($originatingDefaultCallTimeout)
    {
        $this->originatingDefaultCallTimeout = $originatingDefaultCallTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatingDefaultCallTimeout()
    {
        $this->originatingDefaultCallTimeout = null;
        return $this;
    }

    /**
     * Getter for originatingRule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule[]
     */
    public function getOriginatingRule()
    {
        return $this->originatingRule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->originatingRule;
    }

    /**
     * Setter for originatingRule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule[] $originatingRule
     * @return $this
     */
    public function setOriginatingRule(array $originatingRule)
    {
        $this->originatingRule = $originatingRule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOriginatingRule()
    {
        $this->originatingRule = null;
        return $this;
    }

    /**
     * Adder for originatingRule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingRule $originatingRule
     * @return $this
     */
    public function addOriginatingRule($originatingRule)
    {
        $this->originatingRule[] = $originatingRule;
        return $this;
    }

    /**
     * Getter for redirectingDefaultAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction
     */
    public function getRedirectingDefaultAction()
    {
        return $this->redirectingDefaultAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectingDefaultAction;
    }

    /**
     * Setter for redirectingDefaultAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction $redirectingDefaultAction
     * @return $this
     */
    public function setRedirectingDefaultAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction $redirectingDefaultAction)
    {
        $this->redirectingDefaultAction = $redirectingDefaultAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectingDefaultAction()
    {
        $this->redirectingDefaultAction = null;
        return $this;
    }

    /**
     * Getter for redirectingDefaultCallTimeout
     *
     * @return int
     */
    public function getRedirectingDefaultCallTimeout()
    {
        return $this->redirectingDefaultCallTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectingDefaultCallTimeout;
    }

    /**
     * Setter for redirectingDefaultCallTimeout
     *
     * @param int $redirectingDefaultCallTimeout
     * @return $this
     */
    public function setRedirectingDefaultCallTimeout($redirectingDefaultCallTimeout)
    {
        $this->redirectingDefaultCallTimeout = $redirectingDefaultCallTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectingDefaultCallTimeout()
    {
        $this->redirectingDefaultCallTimeout = null;
        return $this;
    }

    /**
     * Getter for redirectingRule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule[]
     */
    public function getRedirectingRule()
    {
        return $this->redirectingRule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->redirectingRule;
    }

    /**
     * Setter for redirectingRule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule[] $redirectingRule
     * @return $this
     */
    public function setRedirectingRule(array $redirectingRule)
    {
        $this->redirectingRule = $redirectingRule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRedirectingRule()
    {
        $this->redirectingRule = null;
        return $this;
    }

    /**
     * Adder for redirectingRule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingRule $redirectingRule
     * @return $this
     */
    public function addRedirectingRule($redirectingRule)
    {
        $this->redirectingRule[] = $redirectingRule;
        return $this;
    }

    /**
     * Getter for incomingDefaultAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction
     */
    public function getIncomingDefaultAction()
    {
        return $this->incomingDefaultAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingDefaultAction;
    }

    /**
     * Setter for incomingDefaultAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction $incomingDefaultAction
     * @return $this
     */
    public function setIncomingDefaultAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction $incomingDefaultAction)
    {
        $this->incomingDefaultAction = $incomingDefaultAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingDefaultAction()
    {
        $this->incomingDefaultAction = null;
        return $this;
    }

    /**
     * Getter for incomingDefaultCallTimeout
     *
     * @return int
     */
    public function getIncomingDefaultCallTimeout()
    {
        return $this->incomingDefaultCallTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingDefaultCallTimeout;
    }

    /**
     * Setter for incomingDefaultCallTimeout
     *
     * @param int $incomingDefaultCallTimeout
     * @return $this
     */
    public function setIncomingDefaultCallTimeout($incomingDefaultCallTimeout)
    {
        $this->incomingDefaultCallTimeout = $incomingDefaultCallTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingDefaultCallTimeout()
    {
        $this->incomingDefaultCallTimeout = null;
        return $this;
    }

    /**
     * Getter for incomingRule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule[]
     */
    public function getIncomingRule()
    {
        return $this->incomingRule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingRule;
    }

    /**
     * Setter for incomingRule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule[] $incomingRule
     * @return $this
     */
    public function setIncomingRule(array $incomingRule)
    {
        $this->incomingRule = $incomingRule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingRule()
    {
        $this->incomingRule = null;
        return $this;
    }

    /**
     * Adder for incomingRule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingRule $incomingRule
     * @return $this
     */
    public function addIncomingRule($incomingRule)
    {
        $this->incomingRule[] = $incomingRule;
        return $this;
    }

    /**
     * Getter for callMeNowDefaultAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction
     */
    public function getCallMeNowDefaultAction()
    {
        return $this->callMeNowDefaultAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callMeNowDefaultAction;
    }

    /**
     * Setter for callMeNowDefaultAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction $callMeNowDefaultAction
     * @return $this
     */
    public function setCallMeNowDefaultAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowAction $callMeNowDefaultAction)
    {
        $this->callMeNowDefaultAction = $callMeNowDefaultAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallMeNowDefaultAction()
    {
        $this->callMeNowDefaultAction = null;
        return $this;
    }

    /**
     * Getter for callMeNowDefaultCallTimeout
     *
     * @return int
     */
    public function getCallMeNowDefaultCallTimeout()
    {
        return $this->callMeNowDefaultCallTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callMeNowDefaultCallTimeout;
    }

    /**
     * Setter for callMeNowDefaultCallTimeout
     *
     * @param int $callMeNowDefaultCallTimeout
     * @return $this
     */
    public function setCallMeNowDefaultCallTimeout($callMeNowDefaultCallTimeout)
    {
        $this->callMeNowDefaultCallTimeout = $callMeNowDefaultCallTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallMeNowDefaultCallTimeout()
    {
        $this->callMeNowDefaultCallTimeout = null;
        return $this;
    }

    /**
     * Getter for callMeNowRule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowRule[]
     */
    public function getCallMeNowRule()
    {
        return $this->callMeNowRule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callMeNowRule;
    }

    /**
     * Setter for callMeNowRule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowRule[] $callMeNowRule
     * @return $this
     */
    public function setCallMeNowRule(array $callMeNowRule)
    {
        $this->callMeNowRule = $callMeNowRule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallMeNowRule()
    {
        $this->callMeNowRule = null;
        return $this;
    }

    /**
     * Adder for callMeNowRule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringCallMeNowRule $callMeNowRule
     * @return $this
     */
    public function addCallMeNowRule($callMeNowRule)
    {
        $this->callMeNowRule[] = $callMeNowRule;
        return $this;
    }


}

