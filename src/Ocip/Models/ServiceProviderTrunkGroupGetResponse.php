<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderTrunkGroupGetResponse
 *
 * Response to the ServiceProviderTrunkGroupGetRequest.
 *         The response contains the maximum permissible active trunk group calls for the service provider.
 *
 * @see ServiceProviderTrunkGroupGetRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:16700","type":"sequence"}]
 */
class ServiceProviderTrunkGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxActiveCalls
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:16700
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt|null
     */
    private $maxActiveCalls = null;

    /**
     * Getter for maxActiveCalls
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxActiveCalls;
    }

    /**
     * Setter for maxActiveCalls
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $maxActiveCalls
     * @return $this
     */
    public function setMaxActiveCalls(\CWM\BroadWorksConnector\Ocip\Models\UnboundedNonNegativeInt $maxActiveCalls)
    {
        $this->maxActiveCalls = $maxActiveCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxActiveCalls()
    {
        $this->maxActiveCalls = null;
        return $this;
    }


}

