<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallToNumber
 *
 * Call to Number.
 */
class CallToNumber
{

    /**
     * @ElementName type
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallToNumberType|null
     */
    private $type = null;

    /**
     * @ElementName number
     * @var string|null
     */
    private $number = null;

    /**
     * @ElementName extension
     * @var string|null
     */
    private $extension = null;

    /**
     * Getter for type
     *
     * @ElementName type
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallToNumberType|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallToNumberType|null $type
     * @return $this
     */
    public function setType(\CWM\BroadWorksConnector\Ocip\Models\CallToNumberType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Getter for number
     *
     * @ElementName number
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Setter for number
     *
     * @ElementName number
     * @param string|null $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Getter for extension
     *
     * @ElementName extension
     * @return string|null
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Setter for extension
     *
     * @ElementName extension
     * @param string|null $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }


}

