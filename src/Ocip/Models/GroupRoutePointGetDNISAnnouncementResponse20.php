<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetDNISAnnouncementResponse20
 *
 * Response to the GroupRoutePointGetDNISAnnouncementRequest20.
 *
 * @see GroupRoutePointGetDNISAnnouncementRequest20
 * @Groups [{"id":"08c06bb3683a696d340b1644025134a4:430","type":"sequence"}]
 */
class GroupRoutePointGetDNISAnnouncementResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mediaOnHoldSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead20
     * @Group 08c06bb3683a696d340b1644025134a4:430
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead20|null
     */
    private $mediaOnHoldSource = null;

    /**
     * Getter for mediaOnHoldSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead20
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaOnHoldSource;
    }

    /**
     * Setter for mediaOnHoldSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead20 $mediaOnHoldSource
     * @return $this
     */
    public function setMediaOnHoldSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterMediaOnHoldSourceRead20 $mediaOnHoldSource)
    {
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaOnHoldSource()
    {
        $this->mediaOnHoldSource = null;
        return $this;
    }


}

