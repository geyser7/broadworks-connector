<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemLegacyAutomaticCallbackModifyLineTypeRequest
 *
 * Modifies the system's legacy automatic callback line type attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b13911393ae4d700b4d51c80e9950cad:119","type":"sequence"}]
 */
class SystemLegacyAutomaticCallbackModifyLineTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName lineType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineType
     * @Group b13911393ae4d700b4d51c80e9950cad:119
     * @var \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineType|null
     */
    private $lineType = null;

    /**
     * @ElementName matchAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction
     * @Optional
     * @Group b13911393ae4d700b4d51c80e9950cad:119
     * @var \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction|null
     */
    private $matchAction = null;

    /**
     * @ElementName noMatchAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction
     * @Optional
     * @Group b13911393ae4d700b4d51c80e9950cad:119
     * @var \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction|null
     */
    private $noMatchAction = null;

    /**
     * Getter for lineType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineType
     */
    public function getLineType()
    {
        return $this->lineType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lineType;
    }

    /**
     * Setter for lineType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineType $lineType
     * @return $this
     */
    public function setLineType(\CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineType $lineType)
    {
        $this->lineType = $lineType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLineType()
    {
        $this->lineType = null;
        return $this;
    }

    /**
     * Getter for matchAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction
     */
    public function getMatchAction()
    {
        return $this->matchAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchAction;
    }

    /**
     * Setter for matchAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction $matchAction
     * @return $this
     */
    public function setMatchAction(\CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction $matchAction)
    {
        $this->matchAction = $matchAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchAction()
    {
        $this->matchAction = null;
        return $this;
    }

    /**
     * Getter for noMatchAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction
     */
    public function getNoMatchAction()
    {
        return $this->noMatchAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noMatchAction;
    }

    /**
     * Setter for noMatchAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction $noMatchAction
     * @return $this
     */
    public function setNoMatchAction(\CWM\BroadWorksConnector\Ocip\Models\LegacyAutomaticCallbackLineMatchAction $noMatchAction)
    {
        $this->noMatchAction = $noMatchAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoMatchAction()
    {
        $this->noMatchAction = null;
        return $this;
    }


}

