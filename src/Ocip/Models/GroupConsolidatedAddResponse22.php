<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupConsolidatedAddResponse22
 *
 * Response to GroupConsolidatedAddRequest22.
 *
 * @see GroupConsolidatedAddRequest22
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:3328","type":"sequence"}]
 */
class GroupConsolidatedAddResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnValidationError
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3328
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage[]
     */
    protected $dnValidationError = array(
        
    );

    /**
     * Getter for dnValidationError
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage[]
     */
    public function getDnValidationError()
    {
        return $this->dnValidationError instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnValidationError;
    }

    /**
     * Setter for dnValidationError
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage[] $dnValidationError
     * @return $this
     */
    public function setDnValidationError(array $dnValidationError)
    {
        $this->dnValidationError = $dnValidationError;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnValidationError()
    {
        $this->dnValidationError = null;
        return $this;
    }

    /**
     * Adder for dnValidationError
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNValidationStatusMessage $dnValidationError
     * @return $this
     */
    public function addDnValidationError($dnValidationError)
    {
        $this->dnValidationError[] = $dnValidationError;
        return $this;
    }


}

