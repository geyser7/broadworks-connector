<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallReturnGetResponse
 *
 * Response to SystemCallReturnGetRequest.
 *
 * @see SystemCallReturnGetRequest
 * @Groups [{"id":"ca38ce43363a73a1079bbf73920b7a45:55","type":"sequence"}]
 */
class SystemCallReturnGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName twoLevelActivation
     * @Type bool
     * @Group ca38ce43363a73a1079bbf73920b7a45:55
     * @var bool|null
     */
    protected $twoLevelActivation = null;

    /**
     * @ElementName provideDate
     * @Type bool
     * @Group ca38ce43363a73a1079bbf73920b7a45:55
     * @var bool|null
     */
    protected $provideDate = null;

    /**
     * @ElementName lastUnansweredCallOnly
     * @Type bool
     * @Group ca38ce43363a73a1079bbf73920b7a45:55
     * @var bool|null
     */
    protected $lastUnansweredCallOnly = null;

    /**
     * @ElementName confirmationKey
     * @Type string
     * @Optional
     * @Group ca38ce43363a73a1079bbf73920b7a45:55
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $confirmationKey = null;

    /**
     * @ElementName allowRestrictedNumber
     * @Type bool
     * @Group ca38ce43363a73a1079bbf73920b7a45:55
     * @var bool|null
     */
    protected $allowRestrictedNumber = null;

    /**
     * @ElementName deleteNumberAfterAnsweredCallReturn
     * @Type bool
     * @Group ca38ce43363a73a1079bbf73920b7a45:55
     * @var bool|null
     */
    protected $deleteNumberAfterAnsweredCallReturn = null;

    /**
     * Getter for twoLevelActivation
     *
     * @return bool
     */
    public function getTwoLevelActivation()
    {
        return $this->twoLevelActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->twoLevelActivation;
    }

    /**
     * Setter for twoLevelActivation
     *
     * @param bool $twoLevelActivation
     * @return $this
     */
    public function setTwoLevelActivation($twoLevelActivation)
    {
        $this->twoLevelActivation = $twoLevelActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTwoLevelActivation()
    {
        $this->twoLevelActivation = null;
        return $this;
    }

    /**
     * Getter for provideDate
     *
     * @return bool
     */
    public function getProvideDate()
    {
        return $this->provideDate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provideDate;
    }

    /**
     * Setter for provideDate
     *
     * @param bool $provideDate
     * @return $this
     */
    public function setProvideDate($provideDate)
    {
        $this->provideDate = $provideDate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProvideDate()
    {
        $this->provideDate = null;
        return $this;
    }

    /**
     * Getter for lastUnansweredCallOnly
     *
     * @return bool
     */
    public function getLastUnansweredCallOnly()
    {
        return $this->lastUnansweredCallOnly instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastUnansweredCallOnly;
    }

    /**
     * Setter for lastUnansweredCallOnly
     *
     * @param bool $lastUnansweredCallOnly
     * @return $this
     */
    public function setLastUnansweredCallOnly($lastUnansweredCallOnly)
    {
        $this->lastUnansweredCallOnly = $lastUnansweredCallOnly;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastUnansweredCallOnly()
    {
        $this->lastUnansweredCallOnly = null;
        return $this;
    }

    /**
     * Getter for confirmationKey
     *
     * @return string
     */
    public function getConfirmationKey()
    {
        return $this->confirmationKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->confirmationKey;
    }

    /**
     * Setter for confirmationKey
     *
     * @param string $confirmationKey
     * @return $this
     */
    public function setConfirmationKey($confirmationKey)
    {
        $this->confirmationKey = $confirmationKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfirmationKey()
    {
        $this->confirmationKey = null;
        return $this;
    }

    /**
     * Getter for allowRestrictedNumber
     *
     * @return bool
     */
    public function getAllowRestrictedNumber()
    {
        return $this->allowRestrictedNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowRestrictedNumber;
    }

    /**
     * Setter for allowRestrictedNumber
     *
     * @param bool $allowRestrictedNumber
     * @return $this
     */
    public function setAllowRestrictedNumber($allowRestrictedNumber)
    {
        $this->allowRestrictedNumber = $allowRestrictedNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowRestrictedNumber()
    {
        $this->allowRestrictedNumber = null;
        return $this;
    }

    /**
     * Getter for deleteNumberAfterAnsweredCallReturn
     *
     * @return bool
     */
    public function getDeleteNumberAfterAnsweredCallReturn()
    {
        return $this->deleteNumberAfterAnsweredCallReturn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteNumberAfterAnsweredCallReturn;
    }

    /**
     * Setter for deleteNumberAfterAnsweredCallReturn
     *
     * @param bool $deleteNumberAfterAnsweredCallReturn
     * @return $this
     */
    public function setDeleteNumberAfterAnsweredCallReturn($deleteNumberAfterAnsweredCallReturn)
    {
        $this->deleteNumberAfterAnsweredCallReturn = $deleteNumberAfterAnsweredCallReturn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteNumberAfterAnsweredCallReturn()
    {
        $this->deleteNumberAfterAnsweredCallReturn = null;
        return $this;
    }


}

