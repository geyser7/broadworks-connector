<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetDNISRequest
 *
 * Get a call center's DNIS.
 *         The response is either a GroupCallCenterGetDNISRequest or an
 * ErrorResponse.
 *
 * @see GroupCallCenterGetDNISRequest
 * @see ErrorResponse
 */
class GroupCallCenterGetDNISRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName dnisKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    private $dnisKey = null;

    /**
     * Getter for dnisKey
     *
     * @ElementName dnisKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    public function getDnisKey()
    {
        return $this->dnisKey;
    }

    /**
     * Setter for dnisKey
     *
     * @ElementName dnisKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null $dnisKey
     * @return $this
     */
    public function setDnisKey(\CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey)
    {
        $this->dnisKey = $dnisKey;
        return $this;
    }


}

