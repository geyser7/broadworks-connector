<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetDNISAnnouncementRequest20
 *
 * Get a call center's DNIS Announcements
 *         The response is either a GroupCallCenterGetDNISAnnouncementResponse20 or an ErrorResponse.
 *         
 *         Replaced by: GroupCallCenterGetDNISAnnouncementRequest22.
 *
 * @see GroupCallCenterGetDNISAnnouncementResponse20
 * @see ErrorResponse
 * @see GroupCallCenterGetDNISAnnouncementRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:5402","type":"sequence"}]
 */
class GroupCallCenterGetDNISAnnouncementRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName dnisKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     * @Group ab0042aa512abc10edb3c55e4b416b0b:5402
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNISKey|null
     */
    protected $dnisKey = null;

    /**
     * Getter for dnisKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNISKey
     */
    public function getDnisKey()
    {
        return $this->dnisKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnisKey;
    }

    /**
     * Setter for dnisKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey
     * @return $this
     */
    public function setDnisKey(\CWM\BroadWorksConnector\Ocip\Models\DNISKey $dnisKey)
    {
        $this->dnisKey = $dnisKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnisKey()
    {
        $this->dnisKey = null;
        return $this;
    }


}

