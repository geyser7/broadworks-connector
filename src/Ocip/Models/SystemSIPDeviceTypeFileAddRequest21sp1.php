<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDeviceTypeFileAddRequest21sp1
 *
 * Request to add a sip device type file.
 *         The response is either SuccessResponse or ErrorResponse.
 * 		
 *         The following logic applies to these elements:
 *           macInCert
 *           macInNonRequestURI
 *           The two elements are mutually exclusive.
 *           When both are set to true, the command fails.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see macInNonRequest
 */
class SystemSIPDeviceTypeFileAddRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName fileFormat
     * @var string|null
     */
    private $fileFormat = null;

    /**
     * @ElementName remoteFileFormat
     * @var string|null
     */
    private $remoteFileFormat = null;

    /**
     * @ElementName fileCategory
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory|null
     */
    private $fileCategory = null;

    /**
     * @ElementName fileCustomization
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization|null
     */
    private $fileCustomization = null;

    /**
     * @ElementName fileSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode|null
     */
    private $fileSource = null;

    /**
     * @ElementName uploadFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    private $uploadFile = null;

    /**
     * @ElementName useHttpDigestAuthentication
     * @var bool|null
     */
    private $useHttpDigestAuthentication = null;

    /**
     * @ElementName macBasedFileAuthentication
     * @var bool|null
     */
    private $macBasedFileAuthentication = null;

    /**
     * @ElementName userNamePasswordFileAuthentication
     * @var bool|null
     */
    private $userNamePasswordFileAuthentication = null;

    /**
     * @ElementName macInNonRequestURI
     * @var bool|null
     */
    private $macInNonRequestURI = null;

    /**
     * @ElementName macInCert
     * @var bool|null
     */
    private $macInCert = null;

    /**
     * @ElementName macFormatInNonRequestURI
     * @var string|null
     */
    private $macFormatInNonRequestURI = null;

    /**
     * @ElementName allowHttp
     * @var bool|null
     */
    private $allowHttp = null;

    /**
     * @ElementName allowHttps
     * @var bool|null
     */
    private $allowHttps = null;

    /**
     * @ElementName allowTftp
     * @var bool|null
     */
    private $allowTftp = null;

    /**
     * @ElementName enableCaching
     * @var bool|null
     */
    private $enableCaching = null;

    /**
     * @ElementName allowUploadFromDevice
     * @var bool|null
     */
    private $allowUploadFromDevice = null;

    /**
     * @ElementName defaultExtendedFileCaptureMode
     * @var bool|null
     */
    private $defaultExtendedFileCaptureMode = null;

    /**
     * Getter for deviceType
     *
     * @ElementName deviceType
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @ElementName deviceType
     * @param string|null $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * Getter for fileFormat
     *
     * @ElementName fileFormat
     * @return string|null
     */
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * Setter for fileFormat
     *
     * @ElementName fileFormat
     * @param string|null $fileFormat
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
        return $this;
    }

    /**
     * Getter for remoteFileFormat
     *
     * @ElementName remoteFileFormat
     * @return string|null
     */
    public function getRemoteFileFormat()
    {
        return $this->remoteFileFormat;
    }

    /**
     * Setter for remoteFileFormat
     *
     * @ElementName remoteFileFormat
     * @param string|null $remoteFileFormat
     * @return $this
     */
    public function setRemoteFileFormat($remoteFileFormat)
    {
        $this->remoteFileFormat = $remoteFileFormat;
        return $this;
    }

    /**
     * Getter for fileCategory
     *
     * @ElementName fileCategory
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory|null
     */
    public function getFileCategory()
    {
        return $this->fileCategory;
    }

    /**
     * Setter for fileCategory
     *
     * @ElementName fileCategory
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory|null $fileCategory
     * @return $this
     */
    public function setFileCategory(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCategory $fileCategory)
    {
        $this->fileCategory = $fileCategory;
        return $this;
    }

    /**
     * Getter for fileCustomization
     *
     * @ElementName fileCustomization
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization|null
     */
    public function getFileCustomization()
    {
        return $this->fileCustomization;
    }

    /**
     * Setter for fileCustomization
     *
     * @ElementName fileCustomization
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization|null $fileCustomization
     * @return $this
     */
    public function setFileCustomization(\CWM\BroadWorksConnector\Ocip\Models\DeviceManagementFileCustomization $fileCustomization)
    {
        $this->fileCustomization = $fileCustomization;
        return $this;
    }

    /**
     * Getter for fileSource
     *
     * @ElementName fileSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode|null
     */
    public function getFileSource()
    {
        return $this->fileSource;
    }

    /**
     * Setter for fileSource
     *
     * @ElementName fileSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode|null $fileSource
     * @return $this
     */
    public function setFileSource(\CWM\BroadWorksConnector\Ocip\Models\DeviceTypeFileEnhancedConfigurationMode $fileSource)
    {
        $this->fileSource = $fileSource;
        return $this;
    }

    /**
     * Getter for uploadFile
     *
     * @ElementName uploadFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileResource|null
     */
    public function getUploadFile()
    {
        return $this->uploadFile;
    }

    /**
     * Setter for uploadFile
     *
     * @ElementName uploadFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileResource|null $uploadFile
     * @return $this
     */
    public function setUploadFile(\CWM\BroadWorksConnector\Ocip\Models\FileResource $uploadFile)
    {
        $this->uploadFile = $uploadFile;
        return $this;
    }

    /**
     * Getter for useHttpDigestAuthentication
     *
     * @ElementName useHttpDigestAuthentication
     * @return bool|null
     */
    public function getUseHttpDigestAuthentication()
    {
        return $this->useHttpDigestAuthentication;
    }

    /**
     * Setter for useHttpDigestAuthentication
     *
     * @ElementName useHttpDigestAuthentication
     * @param bool|null $useHttpDigestAuthentication
     * @return $this
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication)
    {
        $this->useHttpDigestAuthentication = $useHttpDigestAuthentication;
        return $this;
    }

    /**
     * Getter for macBasedFileAuthentication
     *
     * @ElementName macBasedFileAuthentication
     * @return bool|null
     */
    public function getMacBasedFileAuthentication()
    {
        return $this->macBasedFileAuthentication;
    }

    /**
     * Setter for macBasedFileAuthentication
     *
     * @ElementName macBasedFileAuthentication
     * @param bool|null $macBasedFileAuthentication
     * @return $this
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication)
    {
        $this->macBasedFileAuthentication = $macBasedFileAuthentication;
        return $this;
    }

    /**
     * Getter for userNamePasswordFileAuthentication
     *
     * @ElementName userNamePasswordFileAuthentication
     * @return bool|null
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return $this->userNamePasswordFileAuthentication;
    }

    /**
     * Setter for userNamePasswordFileAuthentication
     *
     * @ElementName userNamePasswordFileAuthentication
     * @param bool|null $userNamePasswordFileAuthentication
     * @return $this
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication)
    {
        $this->userNamePasswordFileAuthentication = $userNamePasswordFileAuthentication;
        return $this;
    }

    /**
     * Getter for macInNonRequestURI
     *
     * @ElementName macInNonRequestURI
     * @return bool|null
     */
    public function getMacInNonRequestURI()
    {
        return $this->macInNonRequestURI;
    }

    /**
     * Setter for macInNonRequestURI
     *
     * @ElementName macInNonRequestURI
     * @param bool|null $macInNonRequestURI
     * @return $this
     */
    public function setMacInNonRequestURI($macInNonRequestURI)
    {
        $this->macInNonRequestURI = $macInNonRequestURI;
        return $this;
    }

    /**
     * Getter for macInCert
     *
     * @ElementName macInCert
     * @return bool|null
     */
    public function getMacInCert()
    {
        return $this->macInCert;
    }

    /**
     * Setter for macInCert
     *
     * @ElementName macInCert
     * @param bool|null $macInCert
     * @return $this
     */
    public function setMacInCert($macInCert)
    {
        $this->macInCert = $macInCert;
        return $this;
    }

    /**
     * Getter for macFormatInNonRequestURI
     *
     * @ElementName macFormatInNonRequestURI
     * @return string|null
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI;
    }

    /**
     * Setter for macFormatInNonRequestURI
     *
     * @ElementName macFormatInNonRequestURI
     * @param string|null $macFormatInNonRequestURI
     * @return $this
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI)
    {
        $this->macFormatInNonRequestURI = $macFormatInNonRequestURI;
        return $this;
    }

    /**
     * Getter for allowHttp
     *
     * @ElementName allowHttp
     * @return bool|null
     */
    public function getAllowHttp()
    {
        return $this->allowHttp;
    }

    /**
     * Setter for allowHttp
     *
     * @ElementName allowHttp
     * @param bool|null $allowHttp
     * @return $this
     */
    public function setAllowHttp($allowHttp)
    {
        $this->allowHttp = $allowHttp;
        return $this;
    }

    /**
     * Getter for allowHttps
     *
     * @ElementName allowHttps
     * @return bool|null
     */
    public function getAllowHttps()
    {
        return $this->allowHttps;
    }

    /**
     * Setter for allowHttps
     *
     * @ElementName allowHttps
     * @param bool|null $allowHttps
     * @return $this
     */
    public function setAllowHttps($allowHttps)
    {
        $this->allowHttps = $allowHttps;
        return $this;
    }

    /**
     * Getter for allowTftp
     *
     * @ElementName allowTftp
     * @return bool|null
     */
    public function getAllowTftp()
    {
        return $this->allowTftp;
    }

    /**
     * Setter for allowTftp
     *
     * @ElementName allowTftp
     * @param bool|null $allowTftp
     * @return $this
     */
    public function setAllowTftp($allowTftp)
    {
        $this->allowTftp = $allowTftp;
        return $this;
    }

    /**
     * Getter for enableCaching
     *
     * @ElementName enableCaching
     * @return bool|null
     */
    public function getEnableCaching()
    {
        return $this->enableCaching;
    }

    /**
     * Setter for enableCaching
     *
     * @ElementName enableCaching
     * @param bool|null $enableCaching
     * @return $this
     */
    public function setEnableCaching($enableCaching)
    {
        $this->enableCaching = $enableCaching;
        return $this;
    }

    /**
     * Getter for allowUploadFromDevice
     *
     * @ElementName allowUploadFromDevice
     * @return bool|null
     */
    public function getAllowUploadFromDevice()
    {
        return $this->allowUploadFromDevice;
    }

    /**
     * Setter for allowUploadFromDevice
     *
     * @ElementName allowUploadFromDevice
     * @param bool|null $allowUploadFromDevice
     * @return $this
     */
    public function setAllowUploadFromDevice($allowUploadFromDevice)
    {
        $this->allowUploadFromDevice = $allowUploadFromDevice;
        return $this;
    }

    /**
     * Getter for defaultExtendedFileCaptureMode
     *
     * @ElementName defaultExtendedFileCaptureMode
     * @return bool|null
     */
    public function getDefaultExtendedFileCaptureMode()
    {
        return $this->defaultExtendedFileCaptureMode;
    }

    /**
     * Setter for defaultExtendedFileCaptureMode
     *
     * @ElementName defaultExtendedFileCaptureMode
     * @param bool|null $defaultExtendedFileCaptureMode
     * @return $this
     */
    public function setDefaultExtendedFileCaptureMode($defaultExtendedFileCaptureMode)
    {
        $this->defaultExtendedFileCaptureMode = $defaultExtendedFileCaptureMode;
        return $this;
    }


}

