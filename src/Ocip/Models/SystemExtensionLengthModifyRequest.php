<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExtensionLengthModifyRequest
 *
 * Modify the group's extension length range.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:8421","type":"sequence"}]
 */
class SystemExtensionLengthModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName minExtensionLength
     * @Type int
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8421
     * @var int|null
     */
    private $minExtensionLength = null;

    /**
     * @ElementName maxExtensionLength
     * @Type int
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8421
     * @var int|null
     */
    private $maxExtensionLength = null;

    /**
     * Getter for minExtensionLength
     *
     * @return int
     */
    public function getMinExtensionLength()
    {
        return $this->minExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minExtensionLength;
    }

    /**
     * Setter for minExtensionLength
     *
     * @param int $minExtensionLength
     * @return $this
     */
    public function setMinExtensionLength($minExtensionLength)
    {
        $this->minExtensionLength = $minExtensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinExtensionLength()
    {
        $this->minExtensionLength = null;
        return $this;
    }

    /**
     * Getter for maxExtensionLength
     *
     * @return int
     */
    public function getMaxExtensionLength()
    {
        return $this->maxExtensionLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxExtensionLength;
    }

    /**
     * Setter for maxExtensionLength
     *
     * @param int $maxExtensionLength
     * @return $this
     */
    public function setMaxExtensionLength($maxExtensionLength)
    {
        $this->maxExtensionLength = $maxExtensionLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxExtensionLength()
    {
        $this->maxExtensionLength = null;
        return $this;
    }


}

