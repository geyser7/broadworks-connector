<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSReservedFeatureAccessCodeAddRequest
 *
 * Add a GETS reserved FAC.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10974","type":"sequence"}]
 */
class SystemGETSReservedFeatureAccessCodeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName code
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10974
     * @MinLength 1
     * @MaxLength 5
     * @var string|null
     */
    protected $code = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10974
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * Getter for code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCode()
    {
        $this->code = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }


}

