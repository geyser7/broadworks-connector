<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGETSResourcePriorityAddRequest
 *
 * Add a GETS Resource Priority.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:11053","type":"sequence"}]
 */
class SystemGETSResourcePriorityAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName priorityValue
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11053
     * @MinLength 3
     * @MaxLength 80
     * @var string|null
     */
    protected $priorityValue = null;

    /**
     * @ElementName priorityLevel
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11053
     * @MinInclusive 1
     * @MaxInclusive 5
     * @var int|null
     */
    protected $priorityLevel = null;

    /**
     * @ElementName priorityClass
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GETSPriorityClass
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11053
     * @var \CWM\BroadWorksConnector\Ocip\Models\GETSPriorityClass|null
     */
    protected $priorityClass = null;

    /**
     * Getter for priorityValue
     *
     * @return string
     */
    public function getPriorityValue()
    {
        return $this->priorityValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityValue;
    }

    /**
     * Setter for priorityValue
     *
     * @param string $priorityValue
     * @return $this
     */
    public function setPriorityValue($priorityValue)
    {
        $this->priorityValue = $priorityValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriorityValue()
    {
        $this->priorityValue = null;
        return $this;
    }

    /**
     * Getter for priorityLevel
     *
     * @return int
     */
    public function getPriorityLevel()
    {
        return $this->priorityLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityLevel;
    }

    /**
     * Setter for priorityLevel
     *
     * @param int $priorityLevel
     * @return $this
     */
    public function setPriorityLevel($priorityLevel)
    {
        $this->priorityLevel = $priorityLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriorityLevel()
    {
        $this->priorityLevel = null;
        return $this;
    }

    /**
     * Getter for priorityClass
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GETSPriorityClass
     */
    public function getPriorityClass()
    {
        return $this->priorityClass instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priorityClass;
    }

    /**
     * Setter for priorityClass
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GETSPriorityClass $priorityClass
     * @return $this
     */
    public function setPriorityClass(\CWM\BroadWorksConnector\Ocip\Models\GETSPriorityClass $priorityClass)
    {
        $this->priorityClass = $priorityClass;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriorityClass()
    {
        $this->priorityClass = null;
        return $this;
    }


}

