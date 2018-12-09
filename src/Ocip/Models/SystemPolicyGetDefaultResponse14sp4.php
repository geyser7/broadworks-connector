<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPolicyGetDefaultResponse14sp4
 *
 * Response to SystemPolicyGetDefaultRequest14sp4.
 *         Contains the default policy settings for the system.
 *
 * @see SystemPolicyGetDefaultRequest14sp4
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:23689","type":"sequence"}]
 */
class SystemPolicyGetDefaultResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupCallingPlanAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupCallingPlanAccess|null
     */
    private $groupCallingPlanAccess = null;

    /**
     * @ElementName groupExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionAccess|null
     */
    private $groupExtensionAccess = null;

    /**
     * @ElementName groupLDAPIntegrationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupLDAPIntegrationAccess|null
     */
    private $groupLDAPIntegrationAccess = null;

    /**
     * @ElementName groupVoiceMessagingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupVoiceMessagingAccess|null
     */
    private $groupVoiceMessagingAccess = null;

    /**
     * @ElementName groupDepartmentAdminUserAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminUserAccess|null
     */
    private $groupDepartmentAdminUserAccess = null;

    /**
     * @ElementName groupDepartmentAdminTrunkGroupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentAdminTrunkGroupAccess|null
     */
    private $groupDepartmentAdminTrunkGroupAccess = null;

    /**
     * @ElementName groupUserAuthenticationAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserAuthenticationAccess|null
     */
    private $groupUserAuthenticationAccess = null;

    /**
     * @ElementName groupUserGroupDirectoryAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserGroupDirectoryAccess|null
     */
    private $groupUserGroupDirectoryAccess = null;

    /**
     * @ElementName groupUserProfileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserProfileAccess|null
     */
    private $groupUserProfileAccess = null;

    /**
     * @ElementName groupUserEnhancedCallLogsAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupUserCallLogAccess|null
     */
    private $groupUserEnhancedCallLogsAccess = null;

    /**
     * @ElementName groupAdminProfileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminProfileAccess|null
     */
    private $groupAdminProfileAccess = null;

    /**
     * @ElementName groupAdminUserAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminUserAccess|null
     */
    private $groupAdminUserAccess = null;

    /**
     * @ElementName groupAdminAdminAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAdminAccess|null
     */
    private $groupAdminAdminAccess = null;

    /**
     * @ElementName groupAdminDepartmentAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminDepartmentAccess|null
     */
    private $groupAdminDepartmentAccess = null;

    /**
     * @ElementName groupAdminAccessDeviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminAccessDeviceAccess|null
     */
    private $groupAdminAccessDeviceAccess = null;

    /**
     * @ElementName groupAdminEnhancedServiceInstanceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminEnhancedServiceInstanceAccess|null
     */
    private $groupAdminEnhancedServiceInstanceAccess = null;

    /**
     * @ElementName groupAdminFeatureAccessCodeAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminFeatureAccessCodeAccess|null
     */
    private $groupAdminFeatureAccessCodeAccess = null;

    /**
     * @ElementName groupAdminPhoneNumberExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminPhoneNumberExtensionAccess|null
     */
    private $groupAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName groupAdminServiceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminServiceAccess|null
     */
    private $groupAdminServiceAccess = null;

    /**
     * @ElementName groupAdminTrunkGroupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupAdminTrunkGroupAccess|null
     */
    private $groupAdminTrunkGroupAccess = null;

    /**
     * @ElementName serviceProviderAdminProfileAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminProfileAccess|null
     */
    private $serviceProviderAdminProfileAccess = null;

    /**
     * @ElementName serviceProviderAdminGroupAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminGroupAccess|null
     */
    private $serviceProviderAdminGroupAccess = null;

    /**
     * @ElementName serviceProviderAdminUserAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminUserAccess|null
     */
    private $serviceProviderAdminUserAccess = null;

    /**
     * @ElementName serviceProviderAdminAdminAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAdminAccess|null
     */
    private $serviceProviderAdminAdminAccess = null;

    /**
     * @ElementName serviceProviderAdminDepartmentAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminDepartmentAccess|null
     */
    private $serviceProviderAdminDepartmentAccess = null;

    /**
     * @ElementName serviceProviderAdminAccessDeviceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminAccessDeviceAccess|null
     */
    private $serviceProviderAdminAccessDeviceAccess = null;

    /**
     * @ElementName serviceProviderAdminPhoneNumberExtensionAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminPhoneNumberExtensionAccess|null
     */
    private $serviceProviderAdminPhoneNumberExtensionAccess = null;

    /**
     * @ElementName serviceProviderAdminServiceAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServiceAccess|null
     */
    private $serviceProviderAdminServiceAccess = null;

    /**
     * @ElementName serviceProviderAdminServicePackAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminServicePackAccess|null
     */
    private $serviceProviderAdminServicePackAccess = null;

    /**
     * @ElementName serviceProviderAdminWebBrandingAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceProviderAdminWebBrandingAccess|null
     */
    private $serviceProviderAdminWebBrandingAccess = null;

    /**
     * @ElementName enterpriseAdminNetworkPolicyAccess
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:23689
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseAdminNetworkPolicyAccess|null
     */
    private $enterpriseAdminNetworkPolicyAccess = null;

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


}

