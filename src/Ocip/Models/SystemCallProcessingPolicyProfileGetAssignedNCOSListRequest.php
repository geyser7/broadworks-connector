<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileGetAssignedNCOSListRequest
 *
 * Request a list of NCOSs that have a given CallP Policy Profile assigned.
 *         The response is either a
 *         SystemCallProcessingPolicyProfileGetAssignedNCOSListResponse or
 *         ErrorResponse.
 *
 * @see SystemCallProcessingPolicyProfileGetAssignedNCOSListResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:3356","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileGetAssignedNCOSListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName profileName
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:3356
     * @var string|null
     */
    private $profileName = null;

    /**
     * Getter for profileName
     *
     * @return string
     */
    public function getProfileName()
    {
        return $this->profileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileName;
    }

    /**
     * Setter for profileName
     *
     * @param string $profileName
     * @return $this
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileName()
    {
        $this->profileName = null;
        return $this;
    }


}

