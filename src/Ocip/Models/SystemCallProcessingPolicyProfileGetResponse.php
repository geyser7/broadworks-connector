<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileGetResponse
 *
 * Response to a SystemCallProcessingPolicyProfileGetRequest.
 *
 * @see SystemCallProcessingPolicyProfileGetRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:19726","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:19726
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName assignedSubscriberType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType
     * @Array
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:19726
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType[]
     */
    private $assignedSubscriberType = array(
        
    );

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

    /**
     * Getter for assignedSubscriberType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType[]
     */
    public function getAssignedSubscriberType()
    {
        return $this->assignedSubscriberType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->assignedSubscriberType;
    }

    /**
     * Setter for assignedSubscriberType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType[] $assignedSubscriberType
     * @return $this
     */
    public function setAssignedSubscriberType(array $assignedSubscriberType)
    {
        $this->assignedSubscriberType = $assignedSubscriberType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAssignedSubscriberType()
    {
        $this->assignedSubscriberType = null;
        return $this;
    }

    /**
     * Adder for assignedSubscriberType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallProcessingPolicyProfileSubscriberType $assignedSubscriberType
     * @return $this
     */
    public function addAssignedSubscriberType($assignedSubscriberType)
    {
        $this->assignedSubscriberType[] = $assignedSubscriberType;
        return $this;
    }


}

