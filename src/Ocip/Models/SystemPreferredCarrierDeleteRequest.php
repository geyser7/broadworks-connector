<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierDeleteRequest
 *
 * Delete a carrier from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         An ErrorResponse is returned if the carrier is in use, or if the carrier didn't exist prior to deletion..
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"56f1bd27c6955cc11e0869b6463fb814:342","type":"sequence"}]
 */
class SystemPreferredCarrierDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName carrier
     * @Type string
     * @Group 56f1bd27c6955cc11e0869b6463fb814:342
     * @var string|null
     */
    private $carrier = null;

    /**
     * Getter for carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->carrier;
    }

    /**
     * Setter for carrier
     *
     * @param string $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCarrier()
    {
        $this->carrier = null;
        return $this;
    }


}

