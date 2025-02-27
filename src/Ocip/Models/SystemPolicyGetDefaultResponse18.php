<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPolicyGetDefaultResponse18
 *
 * Response to SystemPolicyGetDefaultRequest18.
 *         Contains the default policy settings for the system.
 *         The following elements are only used in AS data mode:
 *             GroupAdminDialableCallerIDAccess
 *             ServiceProviderAdminDialableCallerIDAccess
 *         The following elements are only used in XS data mode:
 *             serviceProviderAdminCommunicationBarringAccess
 *             
 *         Replaced by: SystemPolicyGetDefaultResponse20 in AS data mode
 *
 * @see SystemPolicyGetDefaultRequest18
 * @see SystemPolicyGetDefaultResponse20
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:8959","type":"sequence"}]
 */
class SystemPolicyGetDefaultResponse18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupCallingPlanAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess|null
     */
    protected $groupCallingPlanAccess = null;

    /**
     * @ElementName groupExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess|null
     */
    protected $groupExtensionAccess = null;

    /**
     * @ElementName groupLDAPIntegrationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess|null
     */
    protected $groupLDAPIntegrationAccess = null;

    /**
     * @ElementName groupVoiceMessagingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess|null
     */
    protected $groupVoiceMessagingAccess = null;

    /**
     * @ElementName groupDepartmentAdminUserAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess|null
     */
    protected $groupDepartmentAdminUserAccess = null;

    /**
     * @ElementName groupDepartmentAdminTrunkGroupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess|null
     */
    protected $groupDepartmentAdminTrunkGroupAccess = null;

    /**
     * @ElementName groupDepartmentAdminPhoneNumberExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess|null
     */
    protected $groupDepartmentAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName groupDepartmentAdminCallingLineIdNumberAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess|null
     */
    protected $groupDepartmentAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName groupUserAuthenticationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess|null
     */
    protected $groupUserAuthenticationAccess = null;

    /**
     * @ElementName groupUserGroupDirectoryAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess|null
     */
    protected $groupUserGroupDirectoryAccess = null;

    /**
     * @ElementName groupUserProfileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess|null
     */
    protected $groupUserProfileAccess = null;

    /**
     * @ElementName groupUserEnhancedCallLogsAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess|null
     */
    protected $groupUserEnhancedCallLogsAccess = null;

    /**
     * @ElementName groupAdminProfileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess|null
     */
    protected $groupAdminProfileAccess = null;

    /**
     * @ElementName groupAdminUserAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess|null
     */
    protected $groupAdminUserAccess = null;

    /**
     * @ElementName groupAdminAdminAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess|null
     */
    protected $groupAdminAdminAccess = null;

    /**
     * @ElementName groupAdminDepartmentAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess|null
     */
    protected $groupAdminDepartmentAccess = null;

    /**
     * @ElementName groupAdminAccessDeviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess|null
     */
    protected $groupAdminAccessDeviceAccess = null;

    /**
     * @ElementName groupAdminEnhancedServiceInstanceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess|null
     */
    protected $groupAdminEnhancedServiceInstanceAccess = null;

    /**
     * @ElementName groupAdminFeatureAccessCodeAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess|null
     */
    protected $groupAdminFeatureAccessCodeAccess = null;

    /**
     * @ElementName groupAdminPhoneNumberExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess|null
     */
    protected $groupAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName groupAdminCallingLineIdNumberAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess|null
     */
    protected $groupAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName groupAdminServiceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess|null
     */
    protected $groupAdminServiceAccess = null;

    /**
     * @ElementName groupAdminTrunkGroupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess|null
     */
    protected $groupAdminTrunkGroupAccess = null;

    /**
     * @ElementName groupAdminSessionAdmissionControlAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess|null
     */
    protected $groupAdminSessionAdmissionControlAccess = null;

    /**
     * @ElementName groupAdminOfficeZoneAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess|null
     */
    protected $groupAdminOfficeZoneAccess = null;

    /**
     * @ElementName groupAdminNumberActivationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminNumberActivationAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminNumberActivationAccess|null
     */
    protected $groupAdminNumberActivationAccess = null;

    /**
     * @ElementName groupAdminDialableCallerIDAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess|null
     */
    protected $groupAdminDialableCallerIDAccess = null;

    /**
     * @ElementName serviceProviderAdminProfileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess|null
     */
    protected $serviceProviderAdminProfileAccess = null;

    /**
     * @ElementName serviceProviderAdminGroupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess|null
     */
    protected $serviceProviderAdminGroupAccess = null;

    /**
     * @ElementName serviceProviderAdminUserAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess|null
     */
    protected $serviceProviderAdminUserAccess = null;

    /**
     * @ElementName serviceProviderAdminAdminAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess|null
     */
    protected $serviceProviderAdminAdminAccess = null;

    /**
     * @ElementName serviceProviderAdminDepartmentAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess|null
     */
    protected $serviceProviderAdminDepartmentAccess = null;

    /**
     * @ElementName serviceProviderAdminAccessDeviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess|null
     */
    protected $serviceProviderAdminAccessDeviceAccess = null;

    /**
     * @ElementName serviceProviderAdminPhoneNumberExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess|null
     */
    protected $serviceProviderAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName serviceProviderAdminCallingLineIdNumberAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess|null
     */
    protected $serviceProviderAdminCallingLineIdNumberAccess = null;

    /**
     * @ElementName serviceProviderAdminServiceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess|null
     */
    protected $serviceProviderAdminServiceAccess = null;

    /**
     * @ElementName serviceProviderAdminServicePackAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess|null
     */
    protected $serviceProviderAdminServicePackAccess = null;

    /**
     * @ElementName serviceProviderAdminSessionAdmissionControlAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess|null
     */
    protected $serviceProviderAdminSessionAdmissionControlAccess = null;

    /**
     * @ElementName serviceProviderAdminWebBrandingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess|null
     */
    protected $serviceProviderAdminWebBrandingAccess = null;

    /**
     * @ElementName serviceProviderAdminOfficeZoneAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess|null
     */
    protected $serviceProviderAdminOfficeZoneAccess = null;

    /**
     * @ElementName serviceProviderAdminCommunicationBarringAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess|null
     */
    protected $serviceProviderAdminCommunicationBarringAccess = null;

    /**
     * @ElementName enterpriseAdminNetworkPolicyAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess|null
     */
    protected $enterpriseAdminNetworkPolicyAccess = null;

    /**
     * @ElementName enterpriseAdminNumberActivationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNumberActivationAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNumberActivationAccess|null
     */
    protected $enterpriseAdminNumberActivationAccess = null;

    /**
     * @ElementName serviceProviderAdminDialableCallerIDAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess
     * @Group de4d76f01f337fe4694212ec9f771753:8959
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess|null
     */
    protected $serviceProviderAdminDialableCallerIDAccess = null;

    /**
     * Getter for groupCallingPlanAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess
     */
    public function getGroupCallingPlanAccess()
    {
        return $this->groupCallingPlanAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupCallingPlanAccess;
    }

    /**
     * Setter for groupCallingPlanAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess $groupCallingPlanAccess
     * @return $this
     */
    public function setGroupCallingPlanAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess $groupCallingPlanAccess)
    {
        $this->groupCallingPlanAccess = $groupCallingPlanAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupCallingPlanAccess()
    {
        $this->groupCallingPlanAccess = null;
        return $this;
    }

    /**
     * Getter for groupExtensionAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess
     */
    public function getGroupExtensionAccess()
    {
        return $this->groupExtensionAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupExtensionAccess;
    }

    /**
     * Setter for groupExtensionAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess $groupExtensionAccess
     * @return $this
     */
    public function setGroupExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess $groupExtensionAccess)
    {
        $this->groupExtensionAccess = $groupExtensionAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupExtensionAccess()
    {
        $this->groupExtensionAccess = null;
        return $this;
    }

    /**
     * Getter for groupLDAPIntegrationAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess
     */
    public function getGroupLDAPIntegrationAccess()
    {
        return $this->groupLDAPIntegrationAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupLDAPIntegrationAccess;
    }

    /**
     * Setter for groupLDAPIntegrationAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess $groupLDAPIntegrationAccess
     * @return $this
     */
    public function setGroupLDAPIntegrationAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess $groupLDAPIntegrationAccess)
    {
        $this->groupLDAPIntegrationAccess = $groupLDAPIntegrationAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupLDAPIntegrationAccess()
    {
        $this->groupLDAPIntegrationAccess = null;
        return $this;
    }

    /**
     * Getter for groupVoiceMessagingAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess
     */
    public function getGroupVoiceMessagingAccess()
    {
        return $this->groupVoiceMessagingAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupVoiceMessagingAccess;
    }

    /**
     * Setter for groupVoiceMessagingAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess $groupVoiceMessagingAccess
     * @return $this
     */
    public function setGroupVoiceMessagingAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess $groupVoiceMessagingAccess)
    {
        $this->groupVoiceMessagingAccess = $groupVoiceMessagingAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupVoiceMessagingAccess()
    {
        $this->groupVoiceMessagingAccess = null;
        return $this;
    }

    /**
     * Getter for groupDepartmentAdminUserAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess
     */
    public function getGroupDepartmentAdminUserAccess()
    {
        return $this->groupDepartmentAdminUserAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDepartmentAdminUserAccess;
    }

    /**
     * Setter for groupDepartmentAdminUserAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess $groupDepartmentAdminUserAccess
     * @return $this
     */
    public function setGroupDepartmentAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess $groupDepartmentAdminUserAccess)
    {
        $this->groupDepartmentAdminUserAccess = $groupDepartmentAdminUserAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDepartmentAdminUserAccess()
    {
        $this->groupDepartmentAdminUserAccess = null;
        return $this;
    }

    /**
     * Getter for groupDepartmentAdminTrunkGroupAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess
     */
    public function getGroupDepartmentAdminTrunkGroupAccess()
    {
        return $this->groupDepartmentAdminTrunkGroupAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDepartmentAdminTrunkGroupAccess;
    }

    /**
     * Setter for groupDepartmentAdminTrunkGroupAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess $groupDepartmentAdminTrunkGroupAccess
     * @return $this
     */
    public function setGroupDepartmentAdminTrunkGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess $groupDepartmentAdminTrunkGroupAccess)
    {
        $this->groupDepartmentAdminTrunkGroupAccess = $groupDepartmentAdminTrunkGroupAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDepartmentAdminTrunkGroupAccess()
    {
        $this->groupDepartmentAdminTrunkGroupAccess = null;
        return $this;
    }

    /**
     * Getter for groupDepartmentAdminPhoneNumberExtensionAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess
     */
    public function getGroupDepartmentAdminPhoneNumberExtensionAccess()
    {
        return $this->groupDepartmentAdminPhoneNumberExtensionAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDepartmentAdminPhoneNumberExtensionAccess;
    }

    /**
     * Setter for groupDepartmentAdminPhoneNumberExtensionAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess $groupDepartmentAdminPhoneNumberExtensionAccess
     * @return $this
     */
    public function setGroupDepartmentAdminPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminPhoneNumberExtensionAccess $groupDepartmentAdminPhoneNumberExtensionAccess)
    {
        $this->groupDepartmentAdminPhoneNumberExtensionAccess = $groupDepartmentAdminPhoneNumberExtensionAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDepartmentAdminPhoneNumberExtensionAccess()
    {
        $this->groupDepartmentAdminPhoneNumberExtensionAccess = null;
        return $this;
    }

    /**
     * Getter for groupDepartmentAdminCallingLineIdNumberAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess
     */
    public function getGroupDepartmentAdminCallingLineIdNumberAccess()
    {
        return $this->groupDepartmentAdminCallingLineIdNumberAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDepartmentAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for groupDepartmentAdminCallingLineIdNumberAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess $groupDepartmentAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setGroupDepartmentAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminCallingLineIdNumberAccess $groupDepartmentAdminCallingLineIdNumberAccess)
    {
        $this->groupDepartmentAdminCallingLineIdNumberAccess = $groupDepartmentAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDepartmentAdminCallingLineIdNumberAccess()
    {
        $this->groupDepartmentAdminCallingLineIdNumberAccess = null;
        return $this;
    }

    /**
     * Getter for groupUserAuthenticationAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess
     */
    public function getGroupUserAuthenticationAccess()
    {
        return $this->groupUserAuthenticationAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupUserAuthenticationAccess;
    }

    /**
     * Setter for groupUserAuthenticationAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess $groupUserAuthenticationAccess
     * @return $this
     */
    public function setGroupUserAuthenticationAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess $groupUserAuthenticationAccess)
    {
        $this->groupUserAuthenticationAccess = $groupUserAuthenticationAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupUserAuthenticationAccess()
    {
        $this->groupUserAuthenticationAccess = null;
        return $this;
    }

    /**
     * Getter for groupUserGroupDirectoryAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess
     */
    public function getGroupUserGroupDirectoryAccess()
    {
        return $this->groupUserGroupDirectoryAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupUserGroupDirectoryAccess;
    }

    /**
     * Setter for groupUserGroupDirectoryAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess $groupUserGroupDirectoryAccess
     * @return $this
     */
    public function setGroupUserGroupDirectoryAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess $groupUserGroupDirectoryAccess)
    {
        $this->groupUserGroupDirectoryAccess = $groupUserGroupDirectoryAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupUserGroupDirectoryAccess()
    {
        $this->groupUserGroupDirectoryAccess = null;
        return $this;
    }

    /**
     * Getter for groupUserProfileAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess
     */
    public function getGroupUserProfileAccess()
    {
        return $this->groupUserProfileAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupUserProfileAccess;
    }

    /**
     * Setter for groupUserProfileAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess $groupUserProfileAccess
     * @return $this
     */
    public function setGroupUserProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess $groupUserProfileAccess)
    {
        $this->groupUserProfileAccess = $groupUserProfileAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupUserProfileAccess()
    {
        $this->groupUserProfileAccess = null;
        return $this;
    }

    /**
     * Getter for groupUserEnhancedCallLogsAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess
     */
    public function getGroupUserEnhancedCallLogsAccess()
    {
        return $this->groupUserEnhancedCallLogsAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupUserEnhancedCallLogsAccess;
    }

    /**
     * Setter for groupUserEnhancedCallLogsAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess $groupUserEnhancedCallLogsAccess
     * @return $this
     */
    public function setGroupUserEnhancedCallLogsAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess $groupUserEnhancedCallLogsAccess)
    {
        $this->groupUserEnhancedCallLogsAccess = $groupUserEnhancedCallLogsAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupUserEnhancedCallLogsAccess()
    {
        $this->groupUserEnhancedCallLogsAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminProfileAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess
     */
    public function getGroupAdminProfileAccess()
    {
        return $this->groupAdminProfileAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminProfileAccess;
    }

    /**
     * Setter for groupAdminProfileAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess $groupAdminProfileAccess
     * @return $this
     */
    public function setGroupAdminProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess $groupAdminProfileAccess)
    {
        $this->groupAdminProfileAccess = $groupAdminProfileAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminProfileAccess()
    {
        $this->groupAdminProfileAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminUserAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess
     */
    public function getGroupAdminUserAccess()
    {
        return $this->groupAdminUserAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminUserAccess;
    }

    /**
     * Setter for groupAdminUserAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess $groupAdminUserAccess
     * @return $this
     */
    public function setGroupAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess $groupAdminUserAccess)
    {
        $this->groupAdminUserAccess = $groupAdminUserAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminUserAccess()
    {
        $this->groupAdminUserAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminAdminAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess
     */
    public function getGroupAdminAdminAccess()
    {
        return $this->groupAdminAdminAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminAdminAccess;
    }

    /**
     * Setter for groupAdminAdminAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess $groupAdminAdminAccess
     * @return $this
     */
    public function setGroupAdminAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess $groupAdminAdminAccess)
    {
        $this->groupAdminAdminAccess = $groupAdminAdminAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminAdminAccess()
    {
        $this->groupAdminAdminAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminDepartmentAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess
     */
    public function getGroupAdminDepartmentAccess()
    {
        return $this->groupAdminDepartmentAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminDepartmentAccess;
    }

    /**
     * Setter for groupAdminDepartmentAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess $groupAdminDepartmentAccess
     * @return $this
     */
    public function setGroupAdminDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess $groupAdminDepartmentAccess)
    {
        $this->groupAdminDepartmentAccess = $groupAdminDepartmentAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminDepartmentAccess()
    {
        $this->groupAdminDepartmentAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminAccessDeviceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess
     */
    public function getGroupAdminAccessDeviceAccess()
    {
        return $this->groupAdminAccessDeviceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminAccessDeviceAccess;
    }

    /**
     * Setter for groupAdminAccessDeviceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess $groupAdminAccessDeviceAccess
     * @return $this
     */
    public function setGroupAdminAccessDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess $groupAdminAccessDeviceAccess)
    {
        $this->groupAdminAccessDeviceAccess = $groupAdminAccessDeviceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminAccessDeviceAccess()
    {
        $this->groupAdminAccessDeviceAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminEnhancedServiceInstanceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess
     */
    public function getGroupAdminEnhancedServiceInstanceAccess()
    {
        return $this->groupAdminEnhancedServiceInstanceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminEnhancedServiceInstanceAccess;
    }

    /**
     * Setter for groupAdminEnhancedServiceInstanceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess $groupAdminEnhancedServiceInstanceAccess
     * @return $this
     */
    public function setGroupAdminEnhancedServiceInstanceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess $groupAdminEnhancedServiceInstanceAccess)
    {
        $this->groupAdminEnhancedServiceInstanceAccess = $groupAdminEnhancedServiceInstanceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminEnhancedServiceInstanceAccess()
    {
        $this->groupAdminEnhancedServiceInstanceAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminFeatureAccessCodeAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess
     */
    public function getGroupAdminFeatureAccessCodeAccess()
    {
        return $this->groupAdminFeatureAccessCodeAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminFeatureAccessCodeAccess;
    }

    /**
     * Setter for groupAdminFeatureAccessCodeAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess $groupAdminFeatureAccessCodeAccess
     * @return $this
     */
    public function setGroupAdminFeatureAccessCodeAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess $groupAdminFeatureAccessCodeAccess)
    {
        $this->groupAdminFeatureAccessCodeAccess = $groupAdminFeatureAccessCodeAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminFeatureAccessCodeAccess()
    {
        $this->groupAdminFeatureAccessCodeAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminPhoneNumberExtensionAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess
     */
    public function getGroupAdminPhoneNumberExtensionAccess()
    {
        return $this->groupAdminPhoneNumberExtensionAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminPhoneNumberExtensionAccess;
    }

    /**
     * Setter for groupAdminPhoneNumberExtensionAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess $groupAdminPhoneNumberExtensionAccess
     * @return $this
     */
    public function setGroupAdminPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess $groupAdminPhoneNumberExtensionAccess)
    {
        $this->groupAdminPhoneNumberExtensionAccess = $groupAdminPhoneNumberExtensionAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminPhoneNumberExtensionAccess()
    {
        $this->groupAdminPhoneNumberExtensionAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminCallingLineIdNumberAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess
     */
    public function getGroupAdminCallingLineIdNumberAccess()
    {
        return $this->groupAdminCallingLineIdNumberAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for groupAdminCallingLineIdNumberAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess $groupAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setGroupAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminCallingLineIdNumberAccess $groupAdminCallingLineIdNumberAccess)
    {
        $this->groupAdminCallingLineIdNumberAccess = $groupAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminCallingLineIdNumberAccess()
    {
        $this->groupAdminCallingLineIdNumberAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminServiceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess
     */
    public function getGroupAdminServiceAccess()
    {
        return $this->groupAdminServiceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminServiceAccess;
    }

    /**
     * Setter for groupAdminServiceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess $groupAdminServiceAccess
     * @return $this
     */
    public function setGroupAdminServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess $groupAdminServiceAccess)
    {
        $this->groupAdminServiceAccess = $groupAdminServiceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminServiceAccess()
    {
        $this->groupAdminServiceAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminTrunkGroupAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess
     */
    public function getGroupAdminTrunkGroupAccess()
    {
        return $this->groupAdminTrunkGroupAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminTrunkGroupAccess;
    }

    /**
     * Setter for groupAdminTrunkGroupAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess $groupAdminTrunkGroupAccess
     * @return $this
     */
    public function setGroupAdminTrunkGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess $groupAdminTrunkGroupAccess)
    {
        $this->groupAdminTrunkGroupAccess = $groupAdminTrunkGroupAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminTrunkGroupAccess()
    {
        $this->groupAdminTrunkGroupAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminSessionAdmissionControlAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess
     */
    public function getGroupAdminSessionAdmissionControlAccess()
    {
        return $this->groupAdminSessionAdmissionControlAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminSessionAdmissionControlAccess;
    }

    /**
     * Setter for groupAdminSessionAdmissionControlAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess $groupAdminSessionAdmissionControlAccess
     * @return $this
     */
    public function setGroupAdminSessionAdmissionControlAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminSessionAdmissionControlAccess $groupAdminSessionAdmissionControlAccess)
    {
        $this->groupAdminSessionAdmissionControlAccess = $groupAdminSessionAdmissionControlAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminSessionAdmissionControlAccess()
    {
        $this->groupAdminSessionAdmissionControlAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminOfficeZoneAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess
     */
    public function getGroupAdminOfficeZoneAccess()
    {
        return $this->groupAdminOfficeZoneAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminOfficeZoneAccess;
    }

    /**
     * Setter for groupAdminOfficeZoneAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess $groupAdminOfficeZoneAccess
     * @return $this
     */
    public function setGroupAdminOfficeZoneAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminOfficeZoneAccess $groupAdminOfficeZoneAccess)
    {
        $this->groupAdminOfficeZoneAccess = $groupAdminOfficeZoneAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminOfficeZoneAccess()
    {
        $this->groupAdminOfficeZoneAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminNumberActivationAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminNumberActivationAccess
     */
    public function getGroupAdminNumberActivationAccess()
    {
        return $this->groupAdminNumberActivationAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminNumberActivationAccess;
    }

    /**
     * Setter for groupAdminNumberActivationAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminNumberActivationAccess $groupAdminNumberActivationAccess
     * @return $this
     */
    public function setGroupAdminNumberActivationAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminNumberActivationAccess $groupAdminNumberActivationAccess)
    {
        $this->groupAdminNumberActivationAccess = $groupAdminNumberActivationAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminNumberActivationAccess()
    {
        $this->groupAdminNumberActivationAccess = null;
        return $this;
    }

    /**
     * Getter for groupAdminDialableCallerIDAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess
     */
    public function getGroupAdminDialableCallerIDAccess()
    {
        return $this->groupAdminDialableCallerIDAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupAdminDialableCallerIDAccess;
    }

    /**
     * Setter for groupAdminDialableCallerIDAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess $groupAdminDialableCallerIDAccess
     * @return $this
     */
    public function setGroupAdminDialableCallerIDAccess(\CWM\BroadWorksConnector\Ocip\Models\GroupAdminDialableCallerIDAccess $groupAdminDialableCallerIDAccess)
    {
        $this->groupAdminDialableCallerIDAccess = $groupAdminDialableCallerIDAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupAdminDialableCallerIDAccess()
    {
        $this->groupAdminDialableCallerIDAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminProfileAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess
     */
    public function getServiceProviderAdminProfileAccess()
    {
        return $this->serviceProviderAdminProfileAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminProfileAccess;
    }

    /**
     * Setter for serviceProviderAdminProfileAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess $serviceProviderAdminProfileAccess
     * @return $this
     */
    public function setServiceProviderAdminProfileAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess $serviceProviderAdminProfileAccess)
    {
        $this->serviceProviderAdminProfileAccess = $serviceProviderAdminProfileAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminProfileAccess()
    {
        $this->serviceProviderAdminProfileAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminGroupAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess
     */
    public function getServiceProviderAdminGroupAccess()
    {
        return $this->serviceProviderAdminGroupAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminGroupAccess;
    }

    /**
     * Setter for serviceProviderAdminGroupAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess $serviceProviderAdminGroupAccess
     * @return $this
     */
    public function setServiceProviderAdminGroupAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess $serviceProviderAdminGroupAccess)
    {
        $this->serviceProviderAdminGroupAccess = $serviceProviderAdminGroupAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminGroupAccess()
    {
        $this->serviceProviderAdminGroupAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminUserAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess
     */
    public function getServiceProviderAdminUserAccess()
    {
        return $this->serviceProviderAdminUserAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminUserAccess;
    }

    /**
     * Setter for serviceProviderAdminUserAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess $serviceProviderAdminUserAccess
     * @return $this
     */
    public function setServiceProviderAdminUserAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess $serviceProviderAdminUserAccess)
    {
        $this->serviceProviderAdminUserAccess = $serviceProviderAdminUserAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminUserAccess()
    {
        $this->serviceProviderAdminUserAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminAdminAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess
     */
    public function getServiceProviderAdminAdminAccess()
    {
        return $this->serviceProviderAdminAdminAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminAdminAccess;
    }

    /**
     * Setter for serviceProviderAdminAdminAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess $serviceProviderAdminAdminAccess
     * @return $this
     */
    public function setServiceProviderAdminAdminAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess $serviceProviderAdminAdminAccess)
    {
        $this->serviceProviderAdminAdminAccess = $serviceProviderAdminAdminAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminAdminAccess()
    {
        $this->serviceProviderAdminAdminAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminDepartmentAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess
     */
    public function getServiceProviderAdminDepartmentAccess()
    {
        return $this->serviceProviderAdminDepartmentAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminDepartmentAccess;
    }

    /**
     * Setter for serviceProviderAdminDepartmentAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess $serviceProviderAdminDepartmentAccess
     * @return $this
     */
    public function setServiceProviderAdminDepartmentAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess $serviceProviderAdminDepartmentAccess)
    {
        $this->serviceProviderAdminDepartmentAccess = $serviceProviderAdminDepartmentAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminDepartmentAccess()
    {
        $this->serviceProviderAdminDepartmentAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminAccessDeviceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess
     */
    public function getServiceProviderAdminAccessDeviceAccess()
    {
        return $this->serviceProviderAdminAccessDeviceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminAccessDeviceAccess;
    }

    /**
     * Setter for serviceProviderAdminAccessDeviceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess $serviceProviderAdminAccessDeviceAccess
     * @return $this
     */
    public function setServiceProviderAdminAccessDeviceAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess $serviceProviderAdminAccessDeviceAccess)
    {
        $this->serviceProviderAdminAccessDeviceAccess = $serviceProviderAdminAccessDeviceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminAccessDeviceAccess()
    {
        $this->serviceProviderAdminAccessDeviceAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminPhoneNumberExtensionAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess
     */
    public function getServiceProviderAdminPhoneNumberExtensionAccess()
    {
        return $this->serviceProviderAdminPhoneNumberExtensionAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminPhoneNumberExtensionAccess;
    }

    /**
     * Setter for serviceProviderAdminPhoneNumberExtensionAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess $serviceProviderAdminPhoneNumberExtensionAccess
     * @return $this
     */
    public function setServiceProviderAdminPhoneNumberExtensionAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess $serviceProviderAdminPhoneNumberExtensionAccess)
    {
        $this->serviceProviderAdminPhoneNumberExtensionAccess = $serviceProviderAdminPhoneNumberExtensionAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminPhoneNumberExtensionAccess()
    {
        $this->serviceProviderAdminPhoneNumberExtensionAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminCallingLineIdNumberAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess
     */
    public function getServiceProviderAdminCallingLineIdNumberAccess()
    {
        return $this->serviceProviderAdminCallingLineIdNumberAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminCallingLineIdNumberAccess;
    }

    /**
     * Setter for serviceProviderAdminCallingLineIdNumberAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess $serviceProviderAdminCallingLineIdNumberAccess
     * @return $this
     */
    public function setServiceProviderAdminCallingLineIdNumberAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCallingLineIdNumberAccess $serviceProviderAdminCallingLineIdNumberAccess)
    {
        $this->serviceProviderAdminCallingLineIdNumberAccess = $serviceProviderAdminCallingLineIdNumberAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminCallingLineIdNumberAccess()
    {
        $this->serviceProviderAdminCallingLineIdNumberAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminServiceAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess
     */
    public function getServiceProviderAdminServiceAccess()
    {
        return $this->serviceProviderAdminServiceAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminServiceAccess;
    }

    /**
     * Setter for serviceProviderAdminServiceAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess $serviceProviderAdminServiceAccess
     * @return $this
     */
    public function setServiceProviderAdminServiceAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess $serviceProviderAdminServiceAccess)
    {
        $this->serviceProviderAdminServiceAccess = $serviceProviderAdminServiceAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminServiceAccess()
    {
        $this->serviceProviderAdminServiceAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminServicePackAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess
     */
    public function getServiceProviderAdminServicePackAccess()
    {
        return $this->serviceProviderAdminServicePackAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminServicePackAccess;
    }

    /**
     * Setter for serviceProviderAdminServicePackAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess $serviceProviderAdminServicePackAccess
     * @return $this
     */
    public function setServiceProviderAdminServicePackAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess $serviceProviderAdminServicePackAccess)
    {
        $this->serviceProviderAdminServicePackAccess = $serviceProviderAdminServicePackAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminServicePackAccess()
    {
        $this->serviceProviderAdminServicePackAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminSessionAdmissionControlAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess
     */
    public function getServiceProviderAdminSessionAdmissionControlAccess()
    {
        return $this->serviceProviderAdminSessionAdmissionControlAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminSessionAdmissionControlAccess;
    }

    /**
     * Setter for serviceProviderAdminSessionAdmissionControlAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess $serviceProviderAdminSessionAdmissionControlAccess
     * @return $this
     */
    public function setServiceProviderAdminSessionAdmissionControlAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminSessionAdmissionControlAccess $serviceProviderAdminSessionAdmissionControlAccess)
    {
        $this->serviceProviderAdminSessionAdmissionControlAccess = $serviceProviderAdminSessionAdmissionControlAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminSessionAdmissionControlAccess()
    {
        $this->serviceProviderAdminSessionAdmissionControlAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminWebBrandingAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess
     */
    public function getServiceProviderAdminWebBrandingAccess()
    {
        return $this->serviceProviderAdminWebBrandingAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminWebBrandingAccess;
    }

    /**
     * Setter for serviceProviderAdminWebBrandingAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess $serviceProviderAdminWebBrandingAccess
     * @return $this
     */
    public function setServiceProviderAdminWebBrandingAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess $serviceProviderAdminWebBrandingAccess)
    {
        $this->serviceProviderAdminWebBrandingAccess = $serviceProviderAdminWebBrandingAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminWebBrandingAccess()
    {
        $this->serviceProviderAdminWebBrandingAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminOfficeZoneAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess
     */
    public function getServiceProviderAdminOfficeZoneAccess()
    {
        return $this->serviceProviderAdminOfficeZoneAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminOfficeZoneAccess;
    }

    /**
     * Setter for serviceProviderAdminOfficeZoneAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess $serviceProviderAdminOfficeZoneAccess
     * @return $this
     */
    public function setServiceProviderAdminOfficeZoneAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminOfficeZoneAccess $serviceProviderAdminOfficeZoneAccess)
    {
        $this->serviceProviderAdminOfficeZoneAccess = $serviceProviderAdminOfficeZoneAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminOfficeZoneAccess()
    {
        $this->serviceProviderAdminOfficeZoneAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminCommunicationBarringAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess
     */
    public function getServiceProviderAdminCommunicationBarringAccess()
    {
        return $this->serviceProviderAdminCommunicationBarringAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminCommunicationBarringAccess;
    }

    /**
     * Setter for serviceProviderAdminCommunicationBarringAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess $serviceProviderAdminCommunicationBarringAccess
     * @return $this
     */
    public function setServiceProviderAdminCommunicationBarringAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminCommunicationBarringAccess $serviceProviderAdminCommunicationBarringAccess)
    {
        $this->serviceProviderAdminCommunicationBarringAccess = $serviceProviderAdminCommunicationBarringAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminCommunicationBarringAccess()
    {
        $this->serviceProviderAdminCommunicationBarringAccess = null;
        return $this;
    }

    /**
     * Getter for enterpriseAdminNetworkPolicyAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess
     */
    public function getEnterpriseAdminNetworkPolicyAccess()
    {
        return $this->enterpriseAdminNetworkPolicyAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseAdminNetworkPolicyAccess;
    }

    /**
     * Setter for enterpriseAdminNetworkPolicyAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess $enterpriseAdminNetworkPolicyAccess
     * @return $this
     */
    public function setEnterpriseAdminNetworkPolicyAccess(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess $enterpriseAdminNetworkPolicyAccess)
    {
        $this->enterpriseAdminNetworkPolicyAccess = $enterpriseAdminNetworkPolicyAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseAdminNetworkPolicyAccess()
    {
        $this->enterpriseAdminNetworkPolicyAccess = null;
        return $this;
    }

    /**
     * Getter for enterpriseAdminNumberActivationAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNumberActivationAccess
     */
    public function getEnterpriseAdminNumberActivationAccess()
    {
        return $this->enterpriseAdminNumberActivationAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseAdminNumberActivationAccess;
    }

    /**
     * Setter for enterpriseAdminNumberActivationAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNumberActivationAccess $enterpriseAdminNumberActivationAccess
     * @return $this
     */
    public function setEnterpriseAdminNumberActivationAccess(\CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNumberActivationAccess $enterpriseAdminNumberActivationAccess)
    {
        $this->enterpriseAdminNumberActivationAccess = $enterpriseAdminNumberActivationAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseAdminNumberActivationAccess()
    {
        $this->enterpriseAdminNumberActivationAccess = null;
        return $this;
    }

    /**
     * Getter for serviceProviderAdminDialableCallerIDAccess
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess
     */
    public function getServiceProviderAdminDialableCallerIDAccess()
    {
        return $this->serviceProviderAdminDialableCallerIDAccess instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderAdminDialableCallerIDAccess;
    }

    /**
     * Setter for serviceProviderAdminDialableCallerIDAccess
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess $serviceProviderAdminDialableCallerIDAccess
     * @return $this
     */
    public function setServiceProviderAdminDialableCallerIDAccess(\CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDialableCallerIDAccess $serviceProviderAdminDialableCallerIDAccess)
    {
        $this->serviceProviderAdminDialableCallerIDAccess = $serviceProviderAdminDialableCallerIDAccess;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderAdminDialableCallerIDAccess()
    {
        $this->serviceProviderAdminDialableCallerIDAccess = null;
        return $this;
    }


}

