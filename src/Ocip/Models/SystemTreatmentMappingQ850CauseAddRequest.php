<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingQ850CauseAddRequest
 *
 * Add a Q850 Cause Value mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:16796","type":"sequence"}]
 */
class SystemTreatmentMappingQ850CauseAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName q850CauseValue
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:16796
     * @var int|null
     */
    private $q850CauseValue = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:16796
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * Getter for q850CauseValue
     *
     * @return int
     */
    public function getQ850CauseValue()
    {
        return $this->q850CauseValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->q850CauseValue;
    }

    /**
     * Setter for q850CauseValue
     *
     * @param int $q850CauseValue
     * @return $this
     */
    public function setQ850CauseValue($q850CauseValue)
    {
        $this->q850CauseValue = $q850CauseValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetQ850CauseValue()
    {
        $this->q850CauseValue = null;
        return $this;
    }

    /**
     * Getter for treatmentId
     *
     * @return string
     */
    public function getTreatmentId()
    {
        return $this->treatmentId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @param string $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentId()
    {
        $this->treatmentId = null;
        return $this;
    }


}

