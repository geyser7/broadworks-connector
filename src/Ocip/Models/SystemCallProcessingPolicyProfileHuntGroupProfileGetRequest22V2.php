<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileHuntGroupProfileGetRequest22V2
 *
 * Request to get the configuration for a call processing policy profile Hunt Group subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileHuntGroupProfileGetResponse22V2 or an ErrorResponse.
 *
 * @see SystemCallProcessingPolicyProfileHuntGroupProfileGetResponse22V2
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:4142","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileHuntGroupProfileGetRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:4142
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $callProcessingPolicyProfileName = null;

    /**
     * Getter for callProcessingPolicyProfileName
     *
     * @return string
     */
    public function getCallProcessingPolicyProfileName()
    {
        return $this->callProcessingPolicyProfileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callProcessingPolicyProfileName;
    }

    /**
     * Setter for callProcessingPolicyProfileName
     *
     * @param string $callProcessingPolicyProfileName
     * @return $this
     */
    public function setCallProcessingPolicyProfileName($callProcessingPolicyProfileName)
    {
        $this->callProcessingPolicyProfileName = $callProcessingPolicyProfileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallProcessingPolicyProfileName()
    {
        $this->callProcessingPolicyProfileName = null;
        return $this;
    }


}

