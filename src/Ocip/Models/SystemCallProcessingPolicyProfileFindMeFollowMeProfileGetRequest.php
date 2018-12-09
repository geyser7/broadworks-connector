<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileFindMeFollowMeProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile Find-me/Follow-me subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileFindMeFollowMeProfileGetResponse or an
 *         ErrorResponse.
 *         
 *         Replaced by: SystemCallProcessingPolicyProfileFindMeFollowMeProfileGetRequest22
 *
 * @see SystemCallProcessingPolicyProfileFindMeFollowMeProfileGetResponse
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileFindMeFollowMeProfileGetRequest22
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:19564","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileFindMeFollowMeProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:19564
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

