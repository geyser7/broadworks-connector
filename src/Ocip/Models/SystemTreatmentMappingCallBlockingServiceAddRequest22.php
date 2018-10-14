<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceAddRequest22
 *
 * Add a Call Blocking Service mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemTreatmentMappingCallBlockingServiceAddRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callBlockingService
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService22|null
     */
    private $callBlockingService = null;

    /**
     * @ElementName treatmentId
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * Getter for callBlockingService
     *
     * @ElementName callBlockingService
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService22|null
     */
    public function getCallBlockingService()
    {
        return $this->callBlockingService;
    }

    /**
     * Setter for callBlockingService
     *
     * @ElementName callBlockingService
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallBlockingService22|null $callBlockingService
     * @return $this
     */
    public function setCallBlockingService(\CWM\BroadWorksConnector\Ocip\Models\CallBlockingService22 $callBlockingService)
    {
        $this->callBlockingService = $callBlockingService;
        return $this;
    }

    /**
     * Getter for treatmentId
     *
     * @ElementName treatmentId
     * @return string|null
     */
    public function getTreatmentId()
    {
        return $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @ElementName treatmentId
     * @param string|null $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }


}

