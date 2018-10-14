<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPAddContentTypeRequest
 *
 * Add a content type for the SIP interface.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSIPAddContentTypeRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName contentType
     * @var string|null
     */
    private $contentType = null;

    /**
     * @ElementName interface
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemSIPSupportedInterface|null
     */
    private $interface = null;

    /**
     * Getter for contentType
     *
     * @ElementName contentType
     * @return string|null
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Setter for contentType
     *
     * @ElementName contentType
     * @param string|null $contentType
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Getter for interface
     *
     * @ElementName interface
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemSIPSupportedInterface|null
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * Setter for interface
     *
     * @ElementName interface
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemSIPSupportedInterface|null $interface
     * @return $this
     */
    public function setInterface(\CWM\BroadWorksConnector\Ocip\Models\SystemSIPSupportedInterface $interface)
    {
        $this->interface = $interface;
        return $this;
    }


}

