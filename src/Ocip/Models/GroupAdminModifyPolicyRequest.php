<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminModifyPolicyRequest
 *
 * Request to modify the group administrator's policy settings.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode:
 *             dialableCallerIDAccess
 *             verifyTranslationAndRoutingAccess
 *             communicationBarringUserProfileAccess (only applicable to groups in an Enterprise)
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:1764","type":"sequence"}]
 */
class GroupAdminModifyPolicyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName profileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess|null
     */
    protected $profileAccess = null;

    /**
     * @ElementName userAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess|null
     */
    protected $userAccess = null;

    /**
     * @ElementName adminAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess|null
     */
    protected $adminAccess = null;

    /**
     * @ElementName departmentAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess|null
     */
    protected $departmentAccess = null;

    /**
     * @ElementName accessDeviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess|null
     */
    protected $accessDeviceAccess = null;

    /**
     * @ElementName enhancedServiceInstanceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess|null
     */
    protected $enhancedServiceInstanceAccess = null;

    /**
     * @ElementName featureAccessCodeAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess|null
     */
    protected $featureAccessCodeAccess = null;

    /**
     * @ElementName phoneNumberExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess|null
     */
    protected $phoneNumberExtensionAccess = null;

    /**
     * @ElementName callingLineIdNumberAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess|null
     */
    protected $callingLineIdNumberAccess = null;

    /**
     * @ElementName serviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess|null
     */
    protected $serviceAccess = null;

    /**
     * @ElementName trunkGroupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess|null
     */
    protected $trunkGroupAccess = null;

    /**
     * @ElementName sessionAdmissionControlAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess|null
     */
    protected $sessionAdmissionControlAccess = null;

    /**
     * @ElementName officeZoneAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess|null
     */
    protected $officeZoneAccess = null;

    /**
     * @ElementName dialableCallerIDAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess|null
     */
    protected $dialableCallerIDAccess = null;

    /**
     * @ElementName numberActivationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminNumberActivationAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminNumberActivationAccess|null
     */
    protected $numberActivationAccess = null;

    /**
     * @ElementName verifyTranslationAndRoutingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminVerifyTranslationAndRoutingAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminVerifyTranslationAndRoutingAccess|null
     */
    protected $verifyTranslationAndRoutingAccess = null;

    /**
     * @ElementName communicationBarringUserProfileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCommunicationBarringUserProfileAccess
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1764
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCommunicationBarringUserProfileAccess|null
     */
    protected $communicationBarringUserProfileAccess = null;

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
     * Getter for profileAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess
     */
    public function getProfileAccess()
    {
        return $this->profileAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileAccess;
    }

    /**
     * Setter for profileAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess $profileAccess
     * @return $this
     */
    public function setProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess $profileAccess)
    {
        $this->profileAccess = $profileAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileAccess()
    {
        $this->profileAccess = null;
        return $this;
    }

    /**
     * Getter for userAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess
     */
    public function getUserAccess()
    {
        return $this->userAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userAccess;
    }

    /**
     * Setter for userAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess $userAccess
     * @return $this
     */
    public function setUserAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess $userAccess)
    {
        $this->userAccess = $userAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserAccess()
    {
        $this->userAccess = null;
        return $this;
    }

    /**
     * Getter for adminAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess
     */
    public function getAdminAccess()
    {
        return $this->adminAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->adminAccess;
    }

    /**
     * Setter for adminAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess $adminAccess
     * @return $this
     */
    public function setAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess $adminAccess)
    {
        $this->adminAccess = $adminAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdminAccess()
    {
        $this->adminAccess = null;
        return $this;
    }

    /**
     * Getter for departmentAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess
     */
    public function getDepartmentAccess()
    {
        return $this->departmentAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentAccess;
    }

    /**
     * Setter for departmentAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess $departmentAccess
     * @return $this
     */
    public function setDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess $departmentAccess)
    {
        $this->departmentAccess = $departmentAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentAccess()
    {
        $this->departmentAccess = null;
        return $this;
    }

    /**
     * Getter for accessDeviceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess
     */
    public function getAccessDeviceAccess()
    {
        return $this->accessDeviceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceAccess;
    }

    /**
     * Setter for accessDeviceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess $accessDeviceAccess
     * @return $this
     */
    public function setAccessDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess $accessDeviceAccess)
    {
        $this->accessDeviceAccess = $accessDeviceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDeviceAccess()
    {
        $this->accessDeviceAccess = null;
        return $this;
    }

    /**
     * Getter for enhancedServiceInstanceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess
     */
    public function getEnhancedServiceInstanceAccess()
    {
        return $this->enhancedServiceInstanceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enhancedServiceInstanceAccess;
    }

    /**
     * Setter for enhancedServiceInstanceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess $enhancedServiceInstanceAccess
     * @return $this
     */
    public function setEnhancedServiceInstanceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess $enhancedServiceInstanceAccess)
    {
        $this->enhancedServiceInstanceAccess = $enhancedServiceInstanceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnhancedServiceInstanceAccess()
    {
        $this->enhancedServiceInstanceAccess = null;
        return $this;
    }

    /**
     * Getter for featureAccessCodeAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess
     */
    public function getFeatureAccessCodeAccess()
    {
        return $this->featureAccessCodeAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->featureAccessCodeAccess;
    }

    /**
     * Setter for featureAccessCodeAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess $featureAccessCodeAccess
     * @return $this
     */
    public function setFeatureAccessCodeAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess $featureAccessCodeAccess)
    {
        $this->featureAccessCodeAccess = $featureAccessCodeAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFeatureAccessCodeAccess()
    {
        $this->featureAccessCodeAccess = null;
        return $this;
    }

    /**
     * Getter for phoneNumberExtensionAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess
     */
    public function getPhoneNumberExtensionAccess()
    {
        return $this->phoneNumberExtensionAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumberExtensionAccess;
    }

    /**
     * Setter for phoneNumberExtensionAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess
     * @return $this
     */
    public function setPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess)
    {
        $this->phoneNumberExtensionAccess = $phoneNumberExtensionAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumberExtensionAccess()
    {
        $this->phoneNumberExtensionAccess = null;
        return $this;
    }

    /**
     * Getter for callingLineIdNumberAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess
     */
    public function getCallingLineIdNumberAccess()
    {
        return $this->callingLineIdNumberAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdNumberAccess;
    }

    /**
     * Setter for callingLineIdNumberAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess $callingLineIdNumberAccess
     * @return $this
     */
    public function setCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess $callingLineIdNumberAccess)
    {
        $this->callingLineIdNumberAccess = $callingLineIdNumberAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdNumberAccess()
    {
        $this->callingLineIdNumberAccess = null;
        return $this;
    }

    /**
     * Getter for serviceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess
     */
    public function getServiceAccess()
    {
        return $this->serviceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceAccess;
    }

    /**
     * Setter for serviceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess $serviceAccess
     * @return $this
     */
    public function setServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess $serviceAccess)
    {
        $this->serviceAccess = $serviceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceAccess()
    {
        $this->serviceAccess = null;
        return $this;
    }

    /**
     * Getter for trunkGroupAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess
     */
    public function getTrunkGroupAccess()
    {
        return $this->trunkGroupAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupAccess;
    }

    /**
     * Setter for trunkGroupAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess $trunkGroupAccess
     * @return $this
     */
    public function setTrunkGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess $trunkGroupAccess)
    {
        $this->trunkGroupAccess = $trunkGroupAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupAccess()
    {
        $this->trunkGroupAccess = null;
        return $this;
    }

    /**
     * Getter for sessionAdmissionControlAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess
     */
    public function getSessionAdmissionControlAccess()
    {
        return $this->sessionAdmissionControlAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sessionAdmissionControlAccess;
    }

    /**
     * Setter for sessionAdmissionControlAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess $sessionAdmissionControlAccess
     * @return $this
     */
    public function setSessionAdmissionControlAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess $sessionAdmissionControlAccess)
    {
        $this->sessionAdmissionControlAccess = $sessionAdmissionControlAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSessionAdmissionControlAccess()
    {
        $this->sessionAdmissionControlAccess = null;
        return $this;
    }

    /**
     * Getter for officeZoneAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess
     */
    public function getOfficeZoneAccess()
    {
        return $this->officeZoneAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->officeZoneAccess;
    }

    /**
     * Setter for officeZoneAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess $officeZoneAccess
     * @return $this
     */
    public function setOfficeZoneAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess $officeZoneAccess)
    {
        $this->officeZoneAccess = $officeZoneAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOfficeZoneAccess()
    {
        $this->officeZoneAccess = null;
        return $this;
    }

    /**
     * Getter for dialableCallerIDAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess
     */
    public function getDialableCallerIDAccess()
    {
        return $this->dialableCallerIDAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dialableCallerIDAccess;
    }

    /**
     * Setter for dialableCallerIDAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess $dialableCallerIDAccess
     * @return $this
     */
    public function setDialableCallerIDAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess $dialableCallerIDAccess)
    {
        $this->dialableCallerIDAccess = $dialableCallerIDAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDialableCallerIDAccess()
    {
        $this->dialableCallerIDAccess = null;
        return $this;
    }

    /**
     * Getter for numberActivationAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminNumberActivationAccess
     */
    public function getNumberActivationAccess()
    {
        return $this->numberActivationAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberActivationAccess;
    }

    /**
     * Setter for numberActivationAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminNumberActivationAccess $numberActivationAccess
     * @return $this
     */
    public function setNumberActivationAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminNumberActivationAccess $numberActivationAccess)
    {
        $this->numberActivationAccess = $numberActivationAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberActivationAccess()
    {
        $this->numberActivationAccess = null;
        return $this;
    }

    /**
     * Getter for verifyTranslationAndRoutingAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminVerifyTranslationAndRoutingAccess
     */
    public function getVerifyTranslationAndRoutingAccess()
    {
        return $this->verifyTranslationAndRoutingAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->verifyTranslationAndRoutingAccess;
    }

    /**
     * Setter for verifyTranslationAndRoutingAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminVerifyTranslationAndRoutingAccess $verifyTranslationAndRoutingAccess
     * @return $this
     */
    public function setVerifyTranslationAndRoutingAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminVerifyTranslationAndRoutingAccess $verifyTranslationAndRoutingAccess)
    {
        $this->verifyTranslationAndRoutingAccess = $verifyTranslationAndRoutingAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVerifyTranslationAndRoutingAccess()
    {
        $this->verifyTranslationAndRoutingAccess = null;
        return $this;
    }

    /**
     * Getter for communicationBarringUserProfileAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCommunicationBarringUserProfileAccess
     */
    public function getCommunicationBarringUserProfileAccess()
    {
        return $this->communicationBarringUserProfileAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringUserProfileAccess;
    }

    /**
     * Setter for communicationBarringUserProfileAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCommunicationBarringUserProfileAccess $communicationBarringUserProfileAccess
     * @return $this
     */
    public function setCommunicationBarringUserProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminCommunicationBarringUserProfileAccess $communicationBarringUserProfileAccess)
    {
        $this->communicationBarringUserProfileAccess = $communicationBarringUserProfileAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommunicationBarringUserProfileAccess()
    {
        $this->communicationBarringUserProfileAccess = null;
        return $this;
    }


}

