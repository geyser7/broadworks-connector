<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserTwoStageDialingGetRequest13Mp20
 *
 * Request the user level data associated with Two Stage Dialing.
 *           The response is either a UserTwoStageDialingGetResponse13Mp20 or an ErrorResponse.
 *
 * @see UserTwoStageDialingGetResponse13Mp20
 * @see ErrorResponse
 * @Groups [{"id":"25fccbf16e98061b338758dd7d75d8f2:131","type":"sequence"}]
 */
class UserTwoStageDialingGetRequest13Mp20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 25fccbf16e98061b338758dd7d75d8f2:131
     * @var string|null
     */
    private $userId = null;

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


}

