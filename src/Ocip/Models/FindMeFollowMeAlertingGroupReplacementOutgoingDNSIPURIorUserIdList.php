<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList
 *
 * A list of phone numbers/sipuris or user ids that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"c81ec650475acb5cc7b075c4582c12ba:518","type":"sequence","children":[{"id":"c81ec650475acb5cc7b075c4582c12ba:519","type":"choice","optional":true}]}]
 */
class FindMeFollowMeAlertingGroupReplacementOutgoingDNSIPURIorUserIdList
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group c81ec650475acb5cc7b075c4582c12ba:519
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group c81ec650475acb5cc7b075c4582c12ba:519
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

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

