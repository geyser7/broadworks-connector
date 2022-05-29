<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPasswordRulesGetResponse22
 *
 * Response to GroupPasswordRulesGetRequest22.
 *         Contains the password rules applicable to users within the group.
 *
 * @see GroupPasswordRulesGetRequest22
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:6811","type":"sequence"}]
 */
class GroupPasswordRulesGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName disallowUserId
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @var bool|null
     */
    protected $disallowUserId = null;

    /**
     * @ElementName disallowOldPassword
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @var bool|null
     */
    protected $disallowOldPassword = null;

    /**
     * @ElementName disallowReversedOldPassword
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @var bool|null
     */
    protected $disallowReversedOldPassword = null;

    /**
     * @ElementName restrictMinDigits
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @var bool|null
     */
    protected $restrictMinDigits = null;

    /**
     * @ElementName minDigits
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $minDigits = null;

    /**
     * @ElementName restrictMinUpperCaseLetters
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @var bool|null
     */
    protected $restrictMinUpperCaseLetters = null;

    /**
     * @ElementName minUpperCaseLetters
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $minUpperCaseLetters = null;

    /**
     * @ElementName restrictMinLowerCaseLetters
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @var bool|null
     */
    protected $restrictMinLowerCaseLetters = null;

    /**
     * @ElementName minLowerCaseLetters
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $minLowerCaseLetters = null;

    /**
     * @ElementName restrictMinNonAlphanumericCharacters
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @var bool|null
     */
    protected $restrictMinNonAlphanumericCharacters = null;

    /**
     * @ElementName minNonAlphanumericCharacters
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $minNonAlphanumericCharacters = null;

    /**
     * @ElementName minLength
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @MinInclusive 3
     * @MaxInclusive 40
     * @var int|null
     */
    protected $minLength = null;

    /**
     * @ElementName maxFailedLoginAttempts
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @MinInclusive 0
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maxFailedLoginAttempts = null;

    /**
     * @ElementName passwordExpiresDays
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @MinInclusive 0
     * @MaxInclusive 199
     * @var int|null
     */
    protected $passwordExpiresDays = null;

    /**
     * @ElementName sendLoginDisabledNotifyEmail
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @var bool|null
     */
    protected $sendLoginDisabledNotifyEmail = null;

    /**
     * @ElementName loginDisabledNotifyEmailAddress
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $loginDisabledNotifyEmailAddress = null;

    /**
     * @ElementName disallowRulesModification
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @var bool|null
     */
    protected $disallowRulesModification = null;

    /**
     * @ElementName disallowPreviousPasswords
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @var bool|null
     */
    protected $disallowPreviousPasswords = null;

    /**
     * @ElementName numberOfPreviousPasswords
     * @Type int
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $numberOfPreviousPasswords = null;

    /**
     * @ElementName forcePasswordChangeAfterReset
     * @Type bool
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6811
     * @var bool|null
     */
    protected $forcePasswordChangeAfterReset = null;

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
     * @return string
     */
    public function getLoginDisabledNotifyEmailAddress()
    {
        return $this->loginDisabledNotifyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->loginDisabledNotifyEmailAddress;
    }

    /**
     * Setter for loginDisabledNotifyEmailAddress
     *
     * @param string $loginDisabledNotifyEmailAddress
     * @return $this
     */
    public function setLoginDisabledNotifyEmailAddress($loginDisabledNotifyEmailAddress)
    {
        $this->loginDisabledNotifyEmailAddress = $loginDisabledNotifyEmailAddress;
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

    /**
     * Getter for disallowPreviousPasswords
     *
     * @return bool
     */
    public function getDisallowPreviousPasswords()
    {
        return $this->disallowPreviousPasswords instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disallowPreviousPasswords;
    }

    /**
     * Setter for disallowPreviousPasswords
     *
     * @param bool $disallowPreviousPasswords
     * @return $this
     */
    public function setDisallowPreviousPasswords($disallowPreviousPasswords)
    {
        $this->disallowPreviousPasswords = $disallowPreviousPasswords;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisallowPreviousPasswords()
    {
        $this->disallowPreviousPasswords = null;
        return $this;
    }

    /**
     * Getter for numberOfPreviousPasswords
     *
     * @return int
     */
    public function getNumberOfPreviousPasswords()
    {
        return $this->numberOfPreviousPasswords instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberOfPreviousPasswords;
    }

    /**
     * Setter for numberOfPreviousPasswords
     *
     * @param int $numberOfPreviousPasswords
     * @return $this
     */
    public function setNumberOfPreviousPasswords($numberOfPreviousPasswords)
    {
        $this->numberOfPreviousPasswords = $numberOfPreviousPasswords;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberOfPreviousPasswords()
    {
        $this->numberOfPreviousPasswords = null;
        return $this;
    }

    /**
     * Getter for forcePasswordChangeAfterReset
     *
     * @return bool
     */
    public function getForcePasswordChangeAfterReset()
    {
        return $this->forcePasswordChangeAfterReset instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forcePasswordChangeAfterReset;
    }

    /**
     * Setter for forcePasswordChangeAfterReset
     *
     * @param bool $forcePasswordChangeAfterReset
     * @return $this
     */
    public function setForcePasswordChangeAfterReset($forcePasswordChangeAfterReset)
    {
        $this->forcePasswordChangeAfterReset = $forcePasswordChangeAfterReset;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForcePasswordChangeAfterReset()
    {
        $this->forcePasswordChangeAfterReset = null;
        return $this;
    }


}

