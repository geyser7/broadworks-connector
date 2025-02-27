<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringGetResponse
 *
 * Response to GroupCommunicationBarringGetRequest.
 *
 * @see GroupCommunicationBarringGetRequest
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:3035","type":"sequence"}]
 */
class GroupCommunicationBarringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useDefaultServiceProviderProfile
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3035
     * @var bool|null
     */
    protected $useDefaultServiceProviderProfile = null;

    /**
     * @ElementName profile
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3035
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $profile = null;

    /**
     * Getter for useDefaultServiceProviderProfile
     *
     * @return bool
     */
    public function getUseDefaultServiceProviderProfile()
    {
        return $this->useDefaultServiceProviderProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useDefaultServiceProviderProfile;
    }

    /**
     * Setter for useDefaultServiceProviderProfile
     *
     * @param bool $useDefaultServiceProviderProfile
     * @return $this
     */
    public function setUseDefaultServiceProviderProfile($useDefaultServiceProviderProfile)
    {
        $this->useDefaultServiceProviderProfile = $useDefaultServiceProviderProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseDefaultServiceProviderProfile()
    {
        $this->useDefaultServiceProviderProfile = null;
        return $this;
    }

    /**
     * Getter for profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profile;
    }

    /**
     * Setter for profile
     *
     * @param string $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfile()
    {
        $this->profile = null;
        return $this;
    }


}

