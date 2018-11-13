<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBwDiameterRoutingRealmModifyRequest
 *
 * Modify a static entry in the Realm Routing Table.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemBwDiameterRoutingRealmModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName instance
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance|null
     */
    private $instance = null;

    /**
     * @ElementName realm
     * @Type string
     * @var string|null
     */
    private $realm = null;

    /**
     * @ElementName applicationId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId
     * @var \CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId|null
     */
    private $applicationId = null;

    /**
     * @ElementName default
     * @Type bool
     * @var bool|null
     */
    private $default = null;

    /**
     * Getter for instance
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance
     */
    public function getInstance()
    {
        return $this->instance instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->instance;
    }

    /**
     * Setter for instance
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance $instance
     * @return $this
     */
    public function setInstance(\CWM\BroadWorksConnector\Ocip\Models\BwDiameterPeerInstance $instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInstance()
    {
        $this->instance = null;
        return $this;
    }

    /**
     * Getter for realm
     *
     * @return string
     */
    public function getRealm()
    {
        return $this->realm instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->realm;
    }

    /**
     * Setter for realm
     *
     * @param string $realm
     * @return $this
     */
    public function setRealm($realm)
    {
        $this->realm = $realm;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRealm()
    {
        $this->realm = null;
        return $this;
    }

    /**
     * Getter for applicationId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId
     */
    public function getApplicationId()
    {
        return $this->applicationId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applicationId;
    }

    /**
     * Setter for applicationId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId $applicationId
     * @return $this
     */
    public function setApplicationId(\CWM\BroadWorksConnector\Ocip\Models\BwDiameterApplicationId $applicationId)
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplicationId()
    {
        $this->applicationId = null;
        return $this;
    }

    /**
     * Getter for default
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->default;
    }

    /**
     * Setter for default
     *
     * @param bool $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefault()
    {
        $this->default = null;
        return $this;
    }


}

