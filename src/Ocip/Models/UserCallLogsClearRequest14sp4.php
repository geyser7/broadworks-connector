<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallLogsClearRequest14sp4
 *
 * Clear a user's call logs associated with Basic Call Logs and Enhanced
 *         Call Logs features. The calls logs are deleted from both Basic Call Logs 
 *         and Enhanced Call Logs if both features are assigned.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ee3830ce42f01a3ef2a105d473fc3b17:667","type":"sequence","children":[{"id":"ee3830ce42f01a3ef2a105d473fc3b17:669","type":"choice","children":[{"id":"ee3830ce42f01a3ef2a105d473fc3b17:674","type":"sequence"}]}]}]
 */
class UserCallLogsClearRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:667
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName deleteAllCallLogs
     * @Type bool
     * @Optional
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:669
     * @var bool|null
     */
    private $deleteAllCallLogs = null;

    /**
     * @ElementName deleteSpecifiedCallLogs
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserCallLogsClearRequest14sp4DeleteSpecifiedCallLogs
     * @Group ee3830ce42f01a3ef2a105d473fc3b17:669
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserCallLogsClearRequest14sp4DeleteSpecifiedCallLogs|null
     */
    private $deleteSpecifiedCallLogs = null;

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
     * Getter for deleteAllCallLogs
     *
     * @return bool
     */
    public function getDeleteAllCallLogs()
    {
        return $this->deleteAllCallLogs instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteAllCallLogs;
    }

    /**
     * Setter for deleteAllCallLogs
     *
     * @param bool $deleteAllCallLogs
     * @return $this
     */
    public function setDeleteAllCallLogs($deleteAllCallLogs)
    {
        $this->deleteAllCallLogs = $deleteAllCallLogs;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteAllCallLogs()
    {
        $this->deleteAllCallLogs = null;
        return $this;
    }

    /**
     * Getter for deleteSpecifiedCallLogs
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserCallLogsClearRequest14sp4DeleteSpecifiedCallLogs
     */
    public function getDeleteSpecifiedCallLogs()
    {
        return $this->deleteSpecifiedCallLogs instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteSpecifiedCallLogs;
    }

    /**
     * Setter for deleteSpecifiedCallLogs
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserCallLogsClearRequest14sp4DeleteSpecifiedCallLogs $deleteSpecifiedCallLogs
     * @return $this
     */
    public function setDeleteSpecifiedCallLogs(\CWM\BroadWorksConnector\Ocip\Models\UserCallLogsClearRequest14sp4DeleteSpecifiedCallLogs $deleteSpecifiedCallLogs)
    {
        $this->deleteSpecifiedCallLogs = $deleteSpecifiedCallLogs;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteSpecifiedCallLogs()
    {
        $this->deleteSpecifiedCallLogs = null;
        return $this;
    }


}

