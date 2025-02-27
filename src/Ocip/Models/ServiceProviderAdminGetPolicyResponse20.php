<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminGetPolicyResponse20
 *
 * Response to ServiceProviderAdminGetPolicyRequest20.
 *         Contains the policy settings for the service provider administrator.
 *         The networkPolicyAccess and numberActivationAccess are returned only for the enterprise administrator.
 *         The following elements are only used in AS data mode:
 *             dialableCallerIDAccess
 *             verifyTranslationAndRoutingAccess
 *
 * @see ServiceProviderAdminGetPolicyRequest20
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:1478","type":"sequence"}]
 */
class ServiceProviderAdminGetPolicyResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess|null
     */
    protected $profileAccess = null;

    /**
     * @ElementName groupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess|null
     */
    protected $groupAccess = null;

    /**
     * @ElementName userAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess|null
     */
    protected $userAccess = null;

    /**
     * @ElementName adminAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess|null
     */
    protected $adminAccess = null;

    /**
     * @ElementName departmentAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess|null
     */
    protected $departmentAccess = null;

    /**
     * @ElementName accessDeviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess|null
     */
    protected $accessDeviceAccess = null;

    /**
     * @ElementName phoneNumberExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess|null
     */
    protected $phoneNumberExtensionAccess = null;

    /**
     * @ElementName callingLineIdNumberAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess|null
     */
    protected $callingLineIdNumberAccess = null;

    /**
     * @ElementName serviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess|null
     */
    protected $serviceAccess = null;

    /**
     * @ElementName servicePackAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess|null
     */
    protected $servicePackAccess = null;

    /**
     * @ElementName sessionAdmissionControlAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess|null
     */
    protected $sessionAdmissionControlAccess = null;

    /**
     * @ElementName webBrandingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess|null
     */
    protected $webBrandingAccess = null;

    /**
     * @ElementName officeZoneAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess|null
     */
    protected $officeZoneAccess = null;

    /**
     * @ElementName communicationBarringAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess|null
     */
    protected $communicationBarringAccess = null;

    /**
     * @ElementName networkPolicyAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess|null
     */
    protected $networkPolicyAccess = null;

    /**
     * @ElementName numberActivationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNumberActivationAccess
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNumberActivationAccess|null
     */
    protected $numberActivationAccess = null;

    /**
     * @ElementName dialableCallerIDAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess|null
     */
    protected $dialableCallerIDAccess = null;

    /**
     * @ElementName verifyTranslationAndRoutingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminVerifyTranslationAndRoutingAccess
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1478
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminVerifyTranslationAndRoutingAccess|null
     */
    protected $verifyTranslationAndRoutingAccess = null;

    /**
     * Getter for profileAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess
     */
    public function getProfileAccess()
    {
        return $this->profileAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileAccess;
    }

    /**
     * Setter for profileAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess $profileAccess
     * @return $this
     */
    public function setProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess $profileAccess)
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
     * Getter for groupAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess
     */
    public function getGroupAccess()
    {
        return $this->groupAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAccess;
    }

    /**
     * Setter for groupAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess $groupAccess
     * @return $this
     */
    public function setGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess $groupAccess)
    {
        $this->groupAccess = $groupAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAccess()
    {
        $this->groupAccess = null;
        return $this;
    }

    /**
     * Getter for userAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess
     */
    public function getUserAccess()
    {
        return $this->userAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userAccess;
    }

    /**
     * Setter for userAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess $userAccess
     * @return $this
     */
    public function setUserAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess $userAccess)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess
     */
    public function getAdminAccess()
    {
        return $this->adminAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->adminAccess;
    }

    /**
     * Setter for adminAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess $adminAccess
     * @return $this
     */
    public function setAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess $adminAccess)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess
     */
    public function getDepartmentAccess()
    {
        return $this->departmentAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentAccess;
    }

    /**
     * Setter for departmentAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess $departmentAccess
     * @return $this
     */
    public function setDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess $departmentAccess)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess
     */
    public function getAccessDeviceAccess()
    {
        return $this->accessDeviceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDeviceAccess;
    }

    /**
     * Setter for accessDeviceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess $accessDeviceAccess
     * @return $this
     */
    public function setAccessDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess $accessDeviceAccess)
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
     * Getter for phoneNumberExtensionAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess
     */
    public function getPhoneNumberExtensionAccess()
    {
        return $this->phoneNumberExtensionAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumberExtensionAccess;
    }

    /**
     * Setter for phoneNumberExtensionAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess
     * @return $this
     */
    public function setPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess
     */
    public function getCallingLineIdNumberAccess()
    {
        return $this->callingLineIdNumberAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdNumberAccess;
    }

    /**
     * Setter for callingLineIdNumberAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess $callingLineIdNumberAccess
     * @return $this
     */
    public function setCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess $callingLineIdNumberAccess)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess
     */
    public function getServiceAccess()
    {
        return $this->serviceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceAccess;
    }

    /**
     * Setter for serviceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess $serviceAccess
     * @return $this
     */
    public function setServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess $serviceAccess)
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
     * Getter for servicePackAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess
     */
    public function getServicePackAccess()
    {
        return $this->servicePackAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackAccess;
    }

    /**
     * Setter for servicePackAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess $servicePackAccess
     * @return $this
     */
    public function setServicePackAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess $servicePackAccess)
    {
        $this->servicePackAccess = $servicePackAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackAccess()
    {
        $this->servicePackAccess = null;
        return $this;
    }

    /**
     * Getter for sessionAdmissionControlAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess
     */
    public function getSessionAdmissionControlAccess()
    {
        return $this->sessionAdmissionControlAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sessionAdmissionControlAccess;
    }

    /**
     * Setter for sessionAdmissionControlAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess $sessionAdmissionControlAccess
     * @return $this
     */
    public function setSessionAdmissionControlAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess $sessionAdmissionControlAccess)
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
     * Getter for webBrandingAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess
     */
    public function getWebBrandingAccess()
    {
        return $this->webBrandingAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webBrandingAccess;
    }

    /**
     * Setter for webBrandingAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess $webBrandingAccess
     * @return $this
     */
    public function setWebBrandingAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess $webBrandingAccess)
    {
        $this->webBrandingAccess = $webBrandingAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWebBrandingAccess()
    {
        $this->webBrandingAccess = null;
        return $this;
    }

    /**
     * Getter for officeZoneAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess
     */
    public function getOfficeZoneAccess()
    {
        return $this->officeZoneAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->officeZoneAccess;
    }

    /**
     * Setter for officeZoneAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess $officeZoneAccess
     * @return $this
     */
    public function setOfficeZoneAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess $officeZoneAccess)
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
     * Getter for communicationBarringAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess
     */
    public function getCommunicationBarringAccess()
    {
        return $this->communicationBarringAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->communicationBarringAccess;
    }

    /**
     * Setter for communicationBarringAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess $communicationBarringAccess
     * @return $this
     */
    public function setCommunicationBarringAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess $communicationBarringAccess)
    {
        $this->communicationBarringAccess = $communicationBarringAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommunicationBarringAccess()
    {
        $this->communicationBarringAccess = null;
        return $this;
    }

    /**
     * Getter for networkPolicyAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess
     */
    public function getNetworkPolicyAccess()
    {
        return $this->networkPolicyAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkPolicyAccess;
    }

    /**
     * Setter for networkPolicyAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess $networkPolicyAccess
     * @return $this
     */
    public function setNetworkPolicyAccess(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess $networkPolicyAccess)
    {
        $this->networkPolicyAccess = $networkPolicyAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkPolicyAccess()
    {
        $this->networkPolicyAccess = null;
        return $this;
    }

    /**
     * Getter for numberActivationAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNumberActivationAccess
     */
    public function getNumberActivationAccess()
    {
        return $this->numberActivationAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberActivationAccess;
    }

    /**
     * Setter for numberActivationAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNumberActivationAccess $numberActivationAccess
     * @return $this
     */
    public function setNumberActivationAccess(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNumberActivationAccess $numberActivationAccess)
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
     * Getter for dialableCallerIDAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess
     */
    public function getDialableCallerIDAccess()
    {
        return $this->dialableCallerIDAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dialableCallerIDAccess;
    }

    /**
     * Setter for dialableCallerIDAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess $dialableCallerIDAccess
     * @return $this
     */
    public function setDialableCallerIDAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess $dialableCallerIDAccess)
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
     * Getter for verifyTranslationAndRoutingAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminVerifyTranslationAndRoutingAccess
     */
    public function getVerifyTranslationAndRoutingAccess()
    {
        return $this->verifyTranslationAndRoutingAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->verifyTranslationAndRoutingAccess;
    }

    /**
     * Setter for verifyTranslationAndRoutingAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminVerifyTranslationAndRoutingAccess $verifyTranslationAndRoutingAccess
     * @return $this
     */
    public function setVerifyTranslationAndRoutingAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminVerifyTranslationAndRoutingAccess $verifyTranslationAndRoutingAccess)
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


}

