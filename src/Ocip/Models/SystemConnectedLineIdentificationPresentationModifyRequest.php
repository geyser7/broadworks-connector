<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConnectedLineIdentificationPresentationModifyRequest
 *
 * Modify the system level data associated with the COLP Service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"2ea11c5e213a79b17d4a363684d76c57:73","type":"sequence"}]
 */
class SystemConnectedLineIdentificationPresentationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enforceUserServiceAssignment
     * @Type bool
     * @Optional
     * @Group 2ea11c5e213a79b17d4a363684d76c57:73
     * @var bool|null
     */
    protected $enforceUserServiceAssignment = null;

    /**
     * Getter for enforceUserServiceAssignment
     *
     * @return bool
     */
    public function getEnforceUserServiceAssignment()
    {
        return $this->enforceUserServiceAssignment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enforceUserServiceAssignment;
    }

    /**
     * Setter for enforceUserServiceAssignment
     *
     * @param bool $enforceUserServiceAssignment
     * @return $this
     */
    public function setEnforceUserServiceAssignment($enforceUserServiceAssignment)
    {
        $this->enforceUserServiceAssignment = $enforceUserServiceAssignment;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnforceUserServiceAssignment()
    {
        $this->enforceUserServiceAssignment = null;
        return $this;
    }


}

