<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AccountAuthorizationCodeEntry
 *
 * Account/Authorization Code.
 *
 * @Groups [{"id":"cf39a77cc27bd00da9f2520a22424344:223","type":"sequence"}]
 */
class AccountAuthorizationCodeEntry
{

    /**
     * @ElementName code
     * @Type string
     * @Group cf39a77cc27bd00da9f2520a22424344:223
     * @var string|null
     */
    private $code = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group cf39a77cc27bd00da9f2520a22424344:223
     * @var string|null
     */
    private $description = null;

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

