<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialPlanPolicyGetResponse
 *
 * Response to SystemDialPlanPolicyGetRequest
 *         
 *         Replaced by: SystemDialPlanPolicyGetResponse17
 *
 * @see SystemDialPlanPolicyGetRequest
 * @see SystemDialPlanPolicyGetResponse17
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:26342","type":"sequence"}]
 */
class SystemDialPlanPolicyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName requiresAccessCodeForPublicCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26342
     * @var bool|null
     */
    protected $requiresAccessCodeForPublicCalls = null;

    /**
     * @ElementName allowE164PublicCalls
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26342
     * @var bool|null
     */
    protected $allowE164PublicCalls = null;

    /**
     * @ElementName publicDigitMap
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26342
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    protected $publicDigitMap = null;

    /**
     * @ElementName privateDigitMap
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26342
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    protected $privateDigitMap = null;

    /**
     * Getter for requiresAccessCodeForPublicCalls
     *
     * @return bool
     */
    public function getRequiresAccessCodeForPublicCalls()
    {
        return $this->requiresAccessCodeForPublicCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->requiresAccessCodeForPublicCalls;
    }

    /**
     * Setter for requiresAccessCodeForPublicCalls
     *
     * @param bool $requiresAccessCodeForPublicCalls
     * @return $this
     */
    public function setRequiresAccessCodeForPublicCalls($requiresAccessCodeForPublicCalls)
    {
        $this->requiresAccessCodeForPublicCalls = $requiresAccessCodeForPublicCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRequiresAccessCodeForPublicCalls()
    {
        $this->requiresAccessCodeForPublicCalls = null;
        return $this;
    }

    /**
     * Getter for allowE164PublicCalls
     *
     * @return bool
     */
    public function getAllowE164PublicCalls()
    {
        return $this->allowE164PublicCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowE164PublicCalls;
    }

    /**
     * Setter for allowE164PublicCalls
     *
     * @param bool $allowE164PublicCalls
     * @return $this
     */
    public function setAllowE164PublicCalls($allowE164PublicCalls)
    {
        $this->allowE164PublicCalls = $allowE164PublicCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowE164PublicCalls()
    {
        $this->allowE164PublicCalls = null;
        return $this;
    }

    /**
     * Getter for publicDigitMap
     *
     * @return string
     */
    public function getPublicDigitMap()
    {
        return $this->publicDigitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->publicDigitMap;
    }

    /**
     * Setter for publicDigitMap
     *
     * @param string $publicDigitMap
     * @return $this
     */
    public function setPublicDigitMap($publicDigitMap)
    {
        $this->publicDigitMap = $publicDigitMap;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPublicDigitMap()
    {
        $this->publicDigitMap = null;
        return $this;
    }

    /**
     * Getter for privateDigitMap
     *
     * @return string
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->privateDigitMap;
    }

    /**
     * Setter for privateDigitMap
     *
     * @param string $privateDigitMap
     * @return $this
     */
    public function setPrivateDigitMap($privateDigitMap)
    {
        $this->privateDigitMap = $privateDigitMap;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrivateDigitMap()
    {
        $this->privateDigitMap = null;
        return $this;
    }


}

