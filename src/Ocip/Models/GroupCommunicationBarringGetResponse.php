<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCommunicationBarringGetResponse
 *
 * Response to GroupCommunicationBarringGetRequest.
 *
 * @see GroupCommunicationBarringGetRequest
 */
class GroupCommunicationBarringGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useDefaultServiceProviderProfile
     * @Type bool
     * @var bool|null
     */
    private $useDefaultServiceProviderProfile = null;

    /**
     * @ElementName profile
     * @Type string
     * @var string|null
     */
    private $profile = null;

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

