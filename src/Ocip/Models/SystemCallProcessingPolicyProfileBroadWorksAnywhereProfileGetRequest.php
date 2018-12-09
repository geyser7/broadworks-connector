<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileBroadWorksAnywhereProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile BroadWorks Anywhere subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileBroadWorksAnywhereProfileGetResponse or an
 *         ErrorResponse.
 *         
 *         Replaced by: SystemCallProcessingPolicyProfileBroadWorksAnywhereProfileGetRequest22
 *
 * @see SystemCallProcessingPolicyProfileBroadWorksAnywhereProfileGetResponse
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileBroadWorksAnywhereProfileGetRequest22
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:19364","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileBroadWorksAnywhereProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:19364
     * @var string|null
     */
    private $callProcessingPolicyProfileName = null;

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

