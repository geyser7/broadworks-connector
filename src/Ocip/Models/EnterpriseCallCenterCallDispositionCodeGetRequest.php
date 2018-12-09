<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterCallDispositionCodeGetRequest
 *
 * Get a Call Center Call Disposition Code.
 *         The response is either EnterpriseCallCenterCallDispositionCodeGetResponse or ErrorResponse.
 *
 * @see EnterpriseCallCenterCallDispositionCodeGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:840","type":"sequence"}]
 */
class EnterpriseCallCenterCallDispositionCodeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:840
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName code
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:840
     * @var string|null
     */
    private $code = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCode()
    {
        $this->code = null;
        return $this;
    }


}

