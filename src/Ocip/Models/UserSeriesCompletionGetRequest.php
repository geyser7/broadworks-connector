<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSeriesCompletionGetRequest
 *
 * Gets the details of the Series Completion group that a user belongs to (if any).
 *         Any user can only belong to one Series Completion group.
 *         The response is either UserSeriesCompletionGetResponse or ErrorResponse.
 *
 * @see UserSeriesCompletionGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"b974dc59b4b32d9f5952a0442ecaefa8:216","type":"sequence"}]
 */
class UserSeriesCompletionGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group b974dc59b4b32d9f5952a0442ecaefa8:216
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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

