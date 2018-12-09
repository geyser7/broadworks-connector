<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetDistributionListRequest
 *
 * Get a voice mail distribution list for a users voice message.
 *         The response is either UserVoiceMessagingUserGetDistributionListResponse or ErrorResponse.
 *
 * @see UserVoiceMessagingUserGetDistributionListResponse
 * @see ErrorResponse
 * @Groups [{"id":"80c5986946137c505e41f6008c7f75a8:1711","type":"sequence"}]
 */
class UserVoiceMessagingUserGetDistributionListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 80c5986946137c505e41f6008c7f75a8:1711
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName listId
     * @Type int
     * @Group 80c5986946137c505e41f6008c7f75a8:1711
     * @var int|null
     */
    private $listId = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for listId
     *
     * @return int
     */
    public function getListId()
    {
        return $this->listId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listId;
    }

    /**
     * Setter for listId
     *
     * @param int $listId
     * @return $this
     */
    public function setListId($listId)
    {
        $this->listId = $listId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListId()
    {
        $this->listId = null;
        return $this;
    }


}

