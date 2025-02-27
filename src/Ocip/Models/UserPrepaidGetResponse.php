<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrepaidGetResponse
 *
 * Response to UserPrepaidGetRequest.
 *
 * @see UserPrepaidGetRequest
 * @Groups [{"id":"ec793b9c4e032de7b751034d58c39dd1:57","type":"sequence"}]
 */
class UserPrepaidGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group ec793b9c4e032de7b751034d58c39dd1:57
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }


}

