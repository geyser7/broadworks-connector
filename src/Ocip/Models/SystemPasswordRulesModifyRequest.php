<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPasswordRulesModifyRequest
 *
 * Request to modify the system providers password rule
 *         setting applicable to System Adminstrator, Provisioning Administrator,
 *         and/or Service Provider Administrator, Group Administrator, Department Administrator, User.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: SystemPasswordRulesModifyRequest14sp3
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemPasswordRulesModifyRequest14sp3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:28226","type":"sequence"}]
 */
class SystemPasswordRulesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName rulesApplyTo
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemPasswordRulesApplyTo
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemPasswordRulesApplyTo|null
     */
    protected $rulesApplyTo = null;

    /**
     * @ElementName allowWebAddExternalAuthenticationUsers
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @var bool|null
     */
    protected $allowWebAddExternalAuthenticationUsers = null;

    /**
     * @ElementName disallowUserId
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @var bool|null
     */
    protected $disallowUserId = null;

    /**
     * @ElementName disallowOldPassword
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @var bool|null
     */
    protected $disallowOldPassword = null;

    /**
     * @ElementName disallowReversedOldPassword
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @var bool|null
     */
    protected $disallowReversedOldPassword = null;

    /**
     * @ElementName restrictMinDigits
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @var bool|null
     */
    protected $restrictMinDigits = null;

    /**
     * @ElementName minDigits
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $minDigits = null;

    /**
     * @ElementName restrictMinUpperCaseLetters
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @var bool|null
     */
    protected $restrictMinUpperCaseLetters = null;

    /**
     * @ElementName minUpperCaseLetters
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $minUpperCaseLetters = null;

    /**
     * @ElementName restrictMinLowerCaseLetters
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @var bool|null
     */
    protected $restrictMinLowerCaseLetters = null;

    /**
     * @ElementName minLowerCaseLetters
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $minLowerCaseLetters = null;

    /**
     * @ElementName restrictMinNonAlphanumericCharacters
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @var bool|null
     */
    protected $restrictMinNonAlphanumericCharacters = null;

    /**
     * @ElementName minNonAlphanumericCharacters
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $minNonAlphanumericCharacters = null;

    /**
     * @ElementName minLength
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @MinInclusive 3
     * @MaxInclusive 40
     * @var int|null
     */
    protected $minLength = null;

    /**
     * @ElementName maxFailedLoginAttempts
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @MinInclusive 0
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maxFailedLoginAttempts = null;

    /**
     * @ElementName passwordExpiresDays
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @MinInclusive 0
     * @MaxInclusive 199
     * @var int|null
     */
    protected $passwordExpiresDays = null;

    /**
     * @ElementName sendLoginDisabledNotifyEmail
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @var bool|null
     */
    protected $sendLoginDisabledNotifyEmail = null;

    /**
     * @ElementName loginDisabledNotifyEmailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $loginDisabledNotifyEmailAddress = null;

    /**
     * @ElementName disallowRulesModification
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:28226
     * @var bool|null
     */
    protected $disallowRulesModification = null;

    /**
     * Getter for rulesApplyTo
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemPasswordRulesApplyTo
     */
    public function getRulesApplyTo()
    {
        return $this->rulesApplyTo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rulesApplyTo;
    }

    /**
     * Setter for rulesApplyTo
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemPasswordRulesApplyTo $rulesApplyTo
     * @return $this
     */
    public function setRulesApplyTo(\CWM\BroadWorksConnector\Ocip\Models\SystemPasswordRulesApplyTo $rulesApplyTo)
    {
        $this->rulesApplyTo = $rulesApplyTo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRulesApplyTo()
    {
        $this->rulesApplyTo = null;
        return $this;
    }

    /**
     * Getter for allowWebAddExternalAuthenticationUsers
     *
     * @return bool
     */
    public function getAllowWebAddExternalAuthenticationUsers()
    {
        return $this->allowWebAddExternalAuthenticationUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowWebAddExternalAuthenticationUsers;
    }

    /**
     * Setter for allowWebAddExternalAuthenticationUsers
     *
     * @param bool $allowWebAddExternalAuthenticationUsers
     * @return $this
     */
    public function setAllowWebAddExternalAuthenticationUsers($allowWebAddExternalAuthenticationUsers)
    {
        $this->allowWebAddExternalAuthenticationUsers = $allowWebAddExternalAuthenticationUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowWebAddExternalAuthenticationUsers()
    {
        $this->allowWebAddExternalAuthenticationUsers = null;
        return $this;
    }

    /**
     * Getter for disallowUserId
     *
     * @return bool
     */
    public function getDisallowUserId()
    {
        return $this->disallowUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowUserId;
    }

    /**
     * Setter for disallowUserId
     *
     * @param bool $disallowUserId
     * @return $this
     */
    public function setDisallowUserId($disallowUserId)
    {
        $this->disallowUserId = $disallowUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowUserId()
    {
        $this->disallowUserId = null;
        return $this;
    }

    /**
     * Getter for disallowOldPassword
     *
     * @return bool
     */
    public function getDisallowOldPassword()
    {
        return $this->disallowOldPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowOldPassword;
    }

    /**
     * Setter for disallowOldPassword
     *
     * @param bool $disallowOldPassword
     * @return $this
     */
    public function setDisallowOldPassword($disallowOldPassword)
    {
        $this->disallowOldPassword = $disallowOldPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowOldPassword()
    {
        $this->disallowOldPassword = null;
        return $this;
    }

    /**
     * Getter for disallowReversedOldPassword
     *
     * @return bool
     */
    public function getDisallowReversedOldPassword()
    {
        return $this->disallowReversedOldPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowReversedOldPassword;
    }

    /**
     * Setter for disallowReversedOldPassword
     *
     * @param bool $disallowReversedOldPassword
     * @return $this
     */
    public function setDisallowReversedOldPassword($disallowReversedOldPassword)
    {
        $this->disallowReversedOldPassword = $disallowReversedOldPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowReversedOldPassword()
    {
        $this->disallowReversedOldPassword = null;
        return $this;
    }

    /**
     * Getter for restrictMinDigits
     *
     * @return bool
     */
    public function getRestrictMinDigits()
    {
        return $this->restrictMinDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictMinDigits;
    }

    /**
     * Setter for restrictMinDigits
     *
     * @param bool $restrictMinDigits
     * @return $this
     */
    public function setRestrictMinDigits($restrictMinDigits)
    {
        $this->restrictMinDigits = $restrictMinDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictMinDigits()
    {
        $this->restrictMinDigits = null;
        return $this;
    }

    /**
     * Getter for minDigits
     *
     * @return int
     */
    public function getMinDigits()
    {
        return $this->minDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minDigits;
    }

    /**
     * Setter for minDigits
     *
     * @param int $minDigits
     * @return $this
     */
    public function setMinDigits($minDigits)
    {
        $this->minDigits = $minDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinDigits()
    {
        $this->minDigits = null;
        return $this;
    }

    /**
     * Getter for restrictMinUpperCaseLetters
     *
     * @return bool
     */
    public function getRestrictMinUpperCaseLetters()
    {
        return $this->restrictMinUpperCaseLetters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictMinUpperCaseLetters;
    }

    /**
     * Setter for restrictMinUpperCaseLetters
     *
     * @param bool $restrictMinUpperCaseLetters
     * @return $this
     */
    public function setRestrictMinUpperCaseLetters($restrictMinUpperCaseLetters)
    {
        $this->restrictMinUpperCaseLetters = $restrictMinUpperCaseLetters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictMinUpperCaseLetters()
    {
        $this->restrictMinUpperCaseLetters = null;
        return $this;
    }

    /**
     * Getter for minUpperCaseLetters
     *
     * @return int
     */
    public function getMinUpperCaseLetters()
    {
        return $this->minUpperCaseLetters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minUpperCaseLetters;
    }

    /**
     * Setter for minUpperCaseLetters
     *
     * @param int $minUpperCaseLetters
     * @return $this
     */
    public function setMinUpperCaseLetters($minUpperCaseLetters)
    {
        $this->minUpperCaseLetters = $minUpperCaseLetters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinUpperCaseLetters()
    {
        $this->minUpperCaseLetters = null;
        return $this;
    }

    /**
     * Getter for restrictMinLowerCaseLetters
     *
     * @return bool
     */
    public function getRestrictMinLowerCaseLetters()
    {
        return $this->restrictMinLowerCaseLetters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictMinLowerCaseLetters;
    }

    /**
     * Setter for restrictMinLowerCaseLetters
     *
     * @param bool $restrictMinLowerCaseLetters
     * @return $this
     */
    public function setRestrictMinLowerCaseLetters($restrictMinLowerCaseLetters)
    {
        $this->restrictMinLowerCaseLetters = $restrictMinLowerCaseLetters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictMinLowerCaseLetters()
    {
        $this->restrictMinLowerCaseLetters = null;
        return $this;
    }

    /**
     * Getter for minLowerCaseLetters
     *
     * @return int
     */
    public function getMinLowerCaseLetters()
    {
        return $this->minLowerCaseLetters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minLowerCaseLetters;
    }

    /**
     * Setter for minLowerCaseLetters
     *
     * @param int $minLowerCaseLetters
     * @return $this
     */
    public function setMinLowerCaseLetters($minLowerCaseLetters)
    {
        $this->minLowerCaseLetters = $minLowerCaseLetters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinLowerCaseLetters()
    {
        $this->minLowerCaseLetters = null;
        return $this;
    }

    /**
     * Getter for restrictMinNonAlphanumericCharacters
     *
     * @return bool
     */
    public function getRestrictMinNonAlphanumericCharacters()
    {
        return $this->restrictMinNonAlphanumericCharacters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictMinNonAlphanumericCharacters;
    }

    /**
     * Setter for restrictMinNonAlphanumericCharacters
     *
     * @param bool $restrictMinNonAlphanumericCharacters
     * @return $this
     */
    public function setRestrictMinNonAlphanumericCharacters($restrictMinNonAlphanumericCharacters)
    {
        $this->restrictMinNonAlphanumericCharacters = $restrictMinNonAlphanumericCharacters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictMinNonAlphanumericCharacters()
    {
        $this->restrictMinNonAlphanumericCharacters = null;
        return $this;
    }

    /**
     * Getter for minNonAlphanumericCharacters
     *
     * @return int
     */
    public function getMinNonAlphanumericCharacters()
    {
        return $this->minNonAlphanumericCharacters instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minNonAlphanumericCharacters;
    }

    /**
     * Setter for minNonAlphanumericCharacters
     *
     * @param int $minNonAlphanumericCharacters
     * @return $this
     */
    public function setMinNonAlphanumericCharacters($minNonAlphanumericCharacters)
    {
        $this->minNonAlphanumericCharacters = $minNonAlphanumericCharacters;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinNonAlphanumericCharacters()
    {
        $this->minNonAlphanumericCharacters = null;
        return $this;
    }

    /**
     * Getter for minLength
     *
     * @return int
     */
    public function getMinLength()
    {
        return $this->minLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minLength;
    }

    /**
     * Setter for minLength
     *
     * @param int $minLength
     * @return $this
     */
    public function setMinLength($minLength)
    {
        $this->minLength = $minLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinLength()
    {
        $this->minLength = null;
        return $this;
    }

    /**
     * Getter for maxFailedLoginAttempts
     *
     * @return int
     */
    public function getMaxFailedLoginAttempts()
    {
        return $this->maxFailedLoginAttempts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxFailedLoginAttempts;
    }

    /**
     * Setter for maxFailedLoginAttempts
     *
     * @param int $maxFailedLoginAttempts
     * @return $this
     */
    public function setMaxFailedLoginAttempts($maxFailedLoginAttempts)
    {
        $this->maxFailedLoginAttempts = $maxFailedLoginAttempts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxFailedLoginAttempts()
    {
        $this->maxFailedLoginAttempts = null;
        return $this;
    }

    /**
     * Getter for passwordExpiresDays
     *
     * @return int
     */
    public function getPasswordExpiresDays()
    {
        return $this->passwordExpiresDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passwordExpiresDays;
    }

    /**
     * Setter for passwordExpiresDays
     *
     * @param int $passwordExpiresDays
     * @return $this
     */
    public function setPasswordExpiresDays($passwordExpiresDays)
    {
        $this->passwordExpiresDays = $passwordExpiresDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPasswordExpiresDays()
    {
        $this->passwordExpiresDays = null;
        return $this;
    }

    /**
     * Getter for sendLoginDisabledNotifyEmail
     *
     * @return bool
     */
    public function getSendLoginDisabledNotifyEmail()
    {
        return $this->sendLoginDisabledNotifyEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendLoginDisabledNotifyEmail;
    }

    /**
     * Setter for sendLoginDisabledNotifyEmail
     *
     * @param bool $sendLoginDisabledNotifyEmail
     * @return $this
     */
    public function setSendLoginDisabledNotifyEmail($sendLoginDisabledNotifyEmail)
    {
        $this->sendLoginDisabledNotifyEmail = $sendLoginDisabledNotifyEmail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendLoginDisabledNotifyEmail()
    {
        $this->sendLoginDisabledNotifyEmail = null;
        return $this;
    }

    /**
     * Getter for loginDisabledNotifyEmailAddress
     *
     * @return string|null
     */
    public function getLoginDisabledNotifyEmailAddress()
    {
        return $this->loginDisabledNotifyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->loginDisabledNotifyEmailAddress;
    }

    /**
     * Setter for loginDisabledNotifyEmailAddress
     *
     * @param string|null $loginDisabledNotifyEmailAddress
     * @return $this
     */
    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress = null)
    {
        if ($loginDisabledNotifyEmailAddress === null) {
            $this->loginDisabledNotifyEmailAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->loginDisabledNotifyEmailAddress = $loginDisabledNotifyEmailAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLoginDisabledNotifyEmailAddress()
    {
        $this->loginDisabledNotifyEmailAddress = null;
        return $this;
    }

    /**
     * Getter for disallowRulesModification
     *
     * @return bool
     */
    public function getDisallowRulesModification()
    {
        return $this->disallowRulesModification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowRulesModification;
    }

    /**
     * Setter for disallowRulesModification
     *
     * @param bool $disallowRulesModification
     * @return $this
     */
    public function setDisallowRulesModification($disallowRulesModification)
    {
        $this->disallowRulesModification = $disallowRulesModification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowRulesModification()
    {
        $this->disallowRulesModification = null;
        return $this;
    }


}

