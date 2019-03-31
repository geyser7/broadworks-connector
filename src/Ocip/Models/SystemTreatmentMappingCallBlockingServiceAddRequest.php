<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceAddRequest
 *
 * Add a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemTreatmentMappingCallBlockingServiceAddRequest22 in AS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemTreatmentMappingCallBlockingServiceAddRequest22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:6750","type":"sequence"}]
 */
class SystemTreatmentMappingCallBlockingServiceAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callBlockingService
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService
     * @Group de4d76f01f337fe4694212ec9f771753:6750
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService|null
     */
    private $callBlockingService = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:6750
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * Getter for callBlockingService
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService
     */
    public function getCallBlockingService()
    {
        return $this->callBlockingService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callBlockingService;
    }

    /**
     * Setter for callBlockingService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService $callBlockingService
     * @return $this
     */
    public function setCallBlockingService(\CWM\BroadWorksConnector\Ocip\Models\CallBlockingService $callBlockingService)
    {
        $this->callBlockingService = $callBlockingService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallBlockingService()
    {
        $this->callBlockingService = null;
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

