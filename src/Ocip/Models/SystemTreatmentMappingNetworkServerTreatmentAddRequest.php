<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingNetworkServerTreatmentAddRequest
 *
 * Add a Network Server Treatment mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:16634","type":"sequence"}]
 */
class SystemTreatmentMappingNetworkServerTreatmentAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName nsTreatment
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:16634
     * @var string|null
     */
    private $nsTreatment = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:16634
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * Getter for nsTreatment
     *
     * @return string
     */
    public function getNsTreatment()
    {
        return $this->nsTreatment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nsTreatment;
    }

    /**
     * Setter for nsTreatment
     *
     * @param string $nsTreatment
     * @return $this
     */
    public function setNsTreatment($nsTreatment)
    {
        $this->nsTreatment = $nsTreatment;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNsTreatment()
    {
        $this->nsTreatment = null;
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

