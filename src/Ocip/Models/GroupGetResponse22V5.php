<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetResponse22V5
 *
 * Response to the GroupGetRequest22V5.
 *         The response contains the group's profile information.
 *         The following element is only used in Amplify data mode and not returned
 *         in AS and XS data mode:
 *         servicePolicy,
 *         callProcessingSliceId,
 *         provisioningSliceId,
 *         subscriberPartition,
 *         preferredDataCenter.
 *         
 *         The following elements are only used in Amplify and XS data mode and not
 *         returned in AS data mode:
 *         preferredDataCenter.
 *         
 *         The following data elements are only used in AS data mode and not returned
 *         in XS data mode:
 *         resellerId,
 *         groupExternalId.
 *         
 *         The following elements are only used in XS data mode and not returned
 *         in AS data mode:
 *         defaultUserCallingLineIdPhoneNumber.
 *
 * @see GroupGetRequest22V5
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:6262","type":"sequence"}]
 */
class GroupGetResponse22V5 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultDomain
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultDomain = null;

    /**
     * @ElementName userLimit
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $userLimit = null;

    /**
     * @ElementName userCount
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @var int|null
     */
    protected $userCount = null;

    /**
     * @ElementName groupName
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $groupName = null;

    /**
     * @ElementName callingLineIdName
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $callingLineIdName = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $callingLineIdPhoneNumber = null;

    /**
     * @ElementName callingLineIdDisplayPhoneNumber
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $callingLineIdDisplayPhoneNumber = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $timeZone = null;

    /**
     * @ElementName timeZoneDisplayName
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $timeZoneDisplayName = null;

    /**
     * @ElementName locationDialingCode
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 15
     * @var string|null
     */
    protected $locationDialingCode = null;

    /**
     * @ElementName contact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Contact
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @var \CWM\BroadWorksConnector\Ocip\Models\Contact|null
     */
    protected $contact = null;

    /**
     * @ElementName address
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    protected $address = null;

    /**
     * @ElementName servicePolicy
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $servicePolicy = null;

    /**
     * @ElementName callProcessingSliceId
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $callProcessingSliceId = null;

    /**
     * @ElementName provisioningSliceId
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $provisioningSliceId = null;

    /**
     * @ElementName subscriberPartition
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $subscriberPartition = null;

    /**
     * @ElementName preferredDataCenter
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $preferredDataCenter = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName defaultUserCallingLineIdPhoneNumber
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $defaultUserCallingLineIdPhoneNumber = null;

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName groupExternalId
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6262
     * @MaxLength 36
     * @var string|null
     */
    protected $groupExternalId = null;

    /**
     * Getter for defaultDomain
     *
     * @return string
     */
    public function getDefaultDomain()
    {
        return $this->defaultDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultDomain;
    }

    /**
     * Setter for defaultDomain
     *
     * @param string $defaultDomain
     * @return $this
     */
    public function setDefaultDomain($defaultDomain)
    {
        $this->defaultDomain = $defaultDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultDomain()
    {
        $this->defaultDomain = null;
        return $this;
    }

    /**
     * Getter for userLimit
     *
     * @return int
     */
    public function getUserLimit()
    {
        return $this->userLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userLimit;
    }

    /**
     * Setter for userLimit
     *
     * @param int $userLimit
     * @return $this
     */
    public function setUserLimit($userLimit)
    {
        $this->userLimit = $userLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserLimit()
    {
        $this->userLimit = null;
        return $this;
    }

    /**
     * Getter for userCount
     *
     * @return int
     */
    public function getUserCount()
    {
        return $this->userCount instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userCount;
    }

    /**
     * Setter for userCount
     *
     * @param int $userCount
     * @return $this
     */
    public function setUserCount($userCount)
    {
        $this->userCount = $userCount;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserCount()
    {
        $this->userCount = null;
        return $this;
    }

    /**
     * Getter for groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupName;
    }

    /**
     * Setter for groupName
     *
     * @param string $groupName
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupName()
    {
        $this->groupName = null;
        return $this;
    }

    /**
     * Getter for callingLineIdName
     *
     * @return string
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @param string $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName)
    {
        $this->callingLineIdName = $callingLineIdName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdName()
    {
        $this->callingLineIdName = null;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @return string
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @param string $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdPhoneNumber()
    {
        $this->callingLineIdPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for callingLineIdDisplayPhoneNumber
     *
     * @return string
     */
    public function getCallingLineIdDisplayPhoneNumber()
    {
        return $this->callingLineIdDisplayPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdDisplayPhoneNumber;
    }

    /**
     * Setter for callingLineIdDisplayPhoneNumber
     *
     * @param string $callingLineIdDisplayPhoneNumber
     * @return $this
     */
    public function setCallingLineIdDisplayPhoneNumber($callingLineIdDisplayPhoneNumber)
    {
        $this->callingLineIdDisplayPhoneNumber = $callingLineIdDisplayPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdDisplayPhoneNumber()
    {
        $this->callingLineIdDisplayPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @param string $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZone()
    {
        $this->timeZone = null;
        return $this;
    }

    /**
     * Getter for timeZoneDisplayName
     *
     * @return string
     */
    public function getTimeZoneDisplayName()
    {
        return $this->timeZoneDisplayName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZoneDisplayName;
    }

    /**
     * Setter for timeZoneDisplayName
     *
     * @param string $timeZoneDisplayName
     * @return $this
     */
    public function setTimeZoneDisplayName($timeZoneDisplayName)
    {
        $this->timeZoneDisplayName = $timeZoneDisplayName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZoneDisplayName()
    {
        $this->timeZoneDisplayName = null;
        return $this;
    }

    /**
     * Getter for locationDialingCode
     *
     * @return string
     */
    public function getLocationDialingCode()
    {
        return $this->locationDialingCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationDialingCode;
    }

    /**
     * Setter for locationDialingCode
     *
     * @param string $locationDialingCode
     * @return $this
     */
    public function setLocationDialingCode($locationDialingCode)
    {
        $this->locationDialingCode = $locationDialingCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocationDialingCode()
    {
        $this->locationDialingCode = null;
        return $this;
    }

    /**
     * Getter for contact
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Contact
     */
    public function getContact()
    {
        return $this->contact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contact;
    }

    /**
     * Setter for contact
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Contact $contact
     * @return $this
     */
    public function setContact(\CWM\BroadWorksConnector\Ocip\Models\Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContact()
    {
        $this->contact = null;
        return $this;
    }

    /**
     * Getter for address
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     */
    public function getAddress()
    {
        return $this->address instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->address;
    }

    /**
     * Setter for address
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StreetAddress $address
     * @return $this
     */
    public function setAddress(\CWM\BroadWorksConnector\Ocip\Models\StreetAddress $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddress()
    {
        $this->address = null;
        return $this;
    }

    /**
     * Getter for servicePolicy
     *
     * @return string
     */
    public function getServicePolicy()
    {
        return $this->servicePolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePolicy;
    }

    /**
     * Setter for servicePolicy
     *
     * @param string $servicePolicy
     * @return $this
     */
    public function setServicePolicy($servicePolicy)
    {
        $this->servicePolicy = $servicePolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePolicy()
    {
        $this->servicePolicy = null;
        return $this;
    }

    /**
     * Getter for callProcessingSliceId
     *
     * @return string
     */
    public function getCallProcessingSliceId()
    {
        return $this->callProcessingSliceId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callProcessingSliceId;
    }

    /**
     * Setter for callProcessingSliceId
     *
     * @param string $callProcessingSliceId
     * @return $this
     */
    public function setCallProcessingSliceId($callProcessingSliceId)
    {
        $this->callProcessingSliceId = $callProcessingSliceId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallProcessingSliceId()
    {
        $this->callProcessingSliceId = null;
        return $this;
    }

    /**
     * Getter for provisioningSliceId
     *
     * @return string
     */
    public function getProvisioningSliceId()
    {
        return $this->provisioningSliceId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningSliceId;
    }

    /**
     * Setter for provisioningSliceId
     *
     * @param string $provisioningSliceId
     * @return $this
     */
    public function setProvisioningSliceId($provisioningSliceId)
    {
        $this->provisioningSliceId = $provisioningSliceId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProvisioningSliceId()
    {
        $this->provisioningSliceId = null;
        return $this;
    }

    /**
     * Getter for subscriberPartition
     *
     * @return string
     */
    public function getSubscriberPartition()
    {
        return $this->subscriberPartition instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->subscriberPartition;
    }

    /**
     * Setter for subscriberPartition
     *
     * @param string $subscriberPartition
     * @return $this
     */
    public function setSubscriberPartition($subscriberPartition)
    {
        $this->subscriberPartition = $subscriberPartition;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSubscriberPartition()
    {
        $this->subscriberPartition = null;
        return $this;
    }

    /**
     * Getter for preferredDataCenter
     *
     * @return string
     */
    public function getPreferredDataCenter()
    {
        return $this->preferredDataCenter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preferredDataCenter;
    }

    /**
     * Setter for preferredDataCenter
     *
     * @param string $preferredDataCenter
     * @return $this
     */
    public function setPreferredDataCenter($preferredDataCenter)
    {
        $this->preferredDataCenter = $preferredDataCenter;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreferredDataCenter()
    {
        $this->preferredDataCenter = null;
        return $this;
    }

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for defaultUserCallingLineIdPhoneNumber
     *
     * @return string
     */
    public function getDefaultUserCallingLineIdPhoneNumber()
    {
        return $this->defaultUserCallingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultUserCallingLineIdPhoneNumber;
    }

    /**
     * Setter for defaultUserCallingLineIdPhoneNumber
     *
     * @param string $defaultUserCallingLineIdPhoneNumber
     * @return $this
     */
    public function setDefaultUserCallingLineIdPhoneNumber($defaultUserCallingLineIdPhoneNumber)
    {
        $this->defaultUserCallingLineIdPhoneNumber = $defaultUserCallingLineIdPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultUserCallingLineIdPhoneNumber()
    {
        $this->defaultUserCallingLineIdPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for groupExternalId
     *
     * @return string
     */
    public function getGroupExternalId()
    {
        return $this->groupExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupExternalId;
    }

    /**
     * Setter for groupExternalId
     *
     * @param string $groupExternalId
     * @return $this
     */
    public function setGroupExternalId($groupExternalId)
    {
        $this->groupExternalId = $groupExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupExternalId()
    {
        $this->groupExternalId = null;
        return $this;
    }


}

