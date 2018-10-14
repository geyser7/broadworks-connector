<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetPolicyResponse17sp3
 *
 * Response to GroupAdminGetPolicyRequest17sp3.
 *         Contains the policy settings for the group administrator.
 *         The following elements are only used in AS data mode:
 *             dialableCallerIDAccess
 *
 * @see GroupAdminGetPolicyRequest17sp3
 */
class GroupAdminGetPolicyResponse17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess|null
     */
    private $profileAccess = null;

    /**
     * @ElementName userAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess|null
     */
    private $userAccess = null;

    /**
     * @ElementName adminAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess|null
     */
    private $adminAccess = null;

    /**
     * @ElementName departmentAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess|null
     */
    private $departmentAccess = null;

    /**
     * @ElementName accessDeviceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess|null
     */
    private $accessDeviceAccess = null;

    /**
     * @ElementName enhancedServiceInstanceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess|null
     */
    private $enhancedServiceInstanceAccess = null;

    /**
     * @ElementName featureAccessCodeAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess|null
     */
    private $featureAccessCodeAccess = null;

    /**
     * @ElementName phoneNumberExtensionAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess|null
     */
    private $phoneNumberExtensionAccess = null;

    /**
     * @ElementName callingLineIdNumberAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess|null
     */
    private $callingLineIdNumberAccess = null;

    /**
     * @ElementName serviceAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess|null
     */
    private $serviceAccess = null;

    /**
     * @ElementName trunkGroupAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess|null
     */
    private $trunkGroupAccess = null;

    /**
     * @ElementName sessionAdmissionControlAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess|null
     */
    private $sessionAdmissionControlAccess = null;

    /**
     * @ElementName officeZoneAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess|null
     */
    private $officeZoneAccess = null;

    /**
     * @ElementName dialableCallerIDAccess
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess|null
     */
    private $dialableCallerIDAccess = null;

    /**
     * Getter for profileAccess
     *
     * @ElementName profileAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess|null
     */
    public function getProfileAccess()
    {
        return $this->profileAccess;
    }

    /**
     * Setter for profileAccess
     *
     * @ElementName profileAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess|null $profileAccess
     * @return $this
     */
    public function setProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess $profileAccess)
    {
        $this->profileAccess = $profileAccess;
        return $this;
    }

    /**
     * Getter for userAccess
     *
     * @ElementName userAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess|null
     */
    public function getUserAccess()
    {
        return $this->userAccess;
    }

    /**
     * Setter for userAccess
     *
     * @ElementName userAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess|null $userAccess
     * @return $this
     */
    public function setUserAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess $userAccess)
    {
        $this->userAccess = $userAccess;
        return $this;
    }

    /**
     * Getter for adminAccess
     *
     * @ElementName adminAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess|null
     */
    public function getAdminAccess()
    {
        return $this->adminAccess;
    }

    /**
     * Setter for adminAccess
     *
     * @ElementName adminAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess|null $adminAccess
     * @return $this
     */
    public function setAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess $adminAccess)
    {
        $this->adminAccess = $adminAccess;
        return $this;
    }

    /**
     * Getter for departmentAccess
     *
     * @ElementName departmentAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess|null
     */
    public function getDepartmentAccess()
    {
        return $this->departmentAccess;
    }

    /**
     * Setter for departmentAccess
     *
     * @ElementName departmentAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess|null $departmentAccess
     * @return $this
     */
    public function setDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess $departmentAccess)
    {
        $this->departmentAccess = $departmentAccess;
        return $this;
    }

    /**
     * Getter for accessDeviceAccess
     *
     * @ElementName accessDeviceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess|null
     */
    public function getAccessDeviceAccess()
    {
        return $this->accessDeviceAccess;
    }

    /**
     * Setter for accessDeviceAccess
     *
     * @ElementName accessDeviceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess|null $accessDeviceAccess
     * @return $this
     */
    public function setAccessDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess $accessDeviceAccess)
    {
        $this->accessDeviceAccess = $accessDeviceAccess;
        return $this;
    }

    /**
     * Getter for enhancedServiceInstanceAccess
     *
     * @ElementName enhancedServiceInstanceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess|null
     */
    public function getEnhancedServiceInstanceAccess()
    {
        return $this->enhancedServiceInstanceAccess;
    }

    /**
     * Setter for enhancedServiceInstanceAccess
     *
     * @ElementName enhancedServiceInstanceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess|null $enhancedServiceInstanceAccess
     * @return $this
     */
    public function setEnhancedServiceInstanceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess $enhancedServiceInstanceAccess)
    {
        $this->enhancedServiceInstanceAccess = $enhancedServiceInstanceAccess;
        return $this;
    }

    /**
     * Getter for featureAccessCodeAccess
     *
     * @ElementName featureAccessCodeAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess|null
     */
    public function getFeatureAccessCodeAccess()
    {
        return $this->featureAccessCodeAccess;
    }

    /**
     * Setter for featureAccessCodeAccess
     *
     * @ElementName featureAccessCodeAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess|null $featureAccessCodeAccess
     * @return $this
     */
    public function setFeatureAccessCodeAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess $featureAccessCodeAccess)
    {
        $this->featureAccessCodeAccess = $featureAccessCodeAccess;
        return $this;
    }

    /**
     * Getter for phoneNumberExtensionAccess
     *
     * @ElementName phoneNumberExtensionAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess|null
     */
    public function getPhoneNumberExtensionAccess()
    {
        return $this->phoneNumberExtensionAccess;
    }

    /**
     * Setter for phoneNumberExtensionAccess
     *
     * @ElementName phoneNumberExtensionAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess|null $phoneNumberExtensionAccess
     * @return $this
     */
    public function setPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess)
    {
        $this->phoneNumberExtensionAccess = $phoneNumberExtensionAccess;
        return $this;
    }

    /**
     * Getter for callingLineIdNumberAccess
     *
     * @ElementName callingLineIdNumberAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess|null
     */
    public function getCallingLineIdNumberAccess()
    {
        return $this->callingLineIdNumberAccess;
    }

    /**
     * Setter for callingLineIdNumberAccess
     *
     * @ElementName callingLineIdNumberAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess|null $callingLineIdNumberAccess
     * @return $this
     */
    public function setCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess $callingLineIdNumberAccess)
    {
        $this->callingLineIdNumberAccess = $callingLineIdNumberAccess;
        return $this;
    }

    /**
     * Getter for serviceAccess
     *
     * @ElementName serviceAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess|null
     */
    public function getServiceAccess()
    {
        return $this->serviceAccess;
    }

    /**
     * Setter for serviceAccess
     *
     * @ElementName serviceAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess|null $serviceAccess
     * @return $this
     */
    public function setServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess $serviceAccess)
    {
        $this->serviceAccess = $serviceAccess;
        return $this;
    }

    /**
     * Getter for trunkGroupAccess
     *
     * @ElementName trunkGroupAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess|null
     */
    public function getTrunkGroupAccess()
    {
        return $this->trunkGroupAccess;
    }

    /**
     * Setter for trunkGroupAccess
     *
     * @ElementName trunkGroupAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess|null $trunkGroupAccess
     * @return $this
     */
    public function setTrunkGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess $trunkGroupAccess)
    {
        $this->trunkGroupAccess = $trunkGroupAccess;
        return $this;
    }

    /**
     * Getter for sessionAdmissionControlAccess
     *
     * @ElementName sessionAdmissionControlAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess|null
     */
    public function getSessionAdmissionControlAccess()
    {
        return $this->sessionAdmissionControlAccess;
    }

    /**
     * Setter for sessionAdmissionControlAccess
     *
     * @ElementName sessionAdmissionControlAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess|null $sessionAdmissionControlAccess
     * @return $this
     */
    public function setSessionAdmissionControlAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess $sessionAdmissionControlAccess)
    {
        $this->sessionAdmissionControlAccess = $sessionAdmissionControlAccess;
        return $this;
    }

    /**
     * Getter for officeZoneAccess
     *
     * @ElementName officeZoneAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess|null
     */
    public function getOfficeZoneAccess()
    {
        return $this->officeZoneAccess;
    }

    /**
     * Setter for officeZoneAccess
     *
     * @ElementName officeZoneAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess|null $officeZoneAccess
     * @return $this
     */
    public function setOfficeZoneAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess $officeZoneAccess)
    {
        $this->officeZoneAccess = $officeZoneAccess;
        return $this;
    }

    /**
     * Getter for dialableCallerIDAccess
     *
     * @ElementName dialableCallerIDAccess
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess|null
     */
    public function getDialableCallerIDAccess()
    {
        return $this->dialableCallerIDAccess;
    }

    /**
     * Setter for dialableCallerIDAccess
     *
     * @ElementName dialableCallerIDAccess
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess|null $dialableCallerIDAccess
     * @return $this
     */
    public function setDialableCallerIDAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess $dialableCallerIDAccess)
    {
        $this->dialableCallerIDAccess = $dialableCallerIDAccess;
        return $this;
    }


}

