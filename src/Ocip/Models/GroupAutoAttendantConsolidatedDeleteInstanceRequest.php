<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantConsolidatedDeleteInstanceRequest
 *
 * Delete a Auto Attendant instance from a group and free up phone numbers.
 *         If UnassignPhoneNumbersLevel is set to 'Group', the user's primary phone number, fax number and any alternate numbers, will be un-assigned from the group if the command is executed by a service provider administrator or above.
 *         When set to 'Service Provider', they will be un-assigned from the group and service provider if the command is executed by a provisioning administrator or above.
 *         When omitted, the number(s) will be left assigned to the group.
 *         An ErrorResponse will be returned if any number cannot be unassigned because of insufficient privilege.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see ErrorResponse
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ed0640d8ef49eb8b4eaa14d7c6f6c033:148","type":"sequence"}]
 */
class GroupAutoAttendantConsolidatedDeleteInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:148
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName unassignPhoneNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel
     * @Optional
     * @Group ed0640d8ef49eb8b4eaa14d7c6f6c033:148
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel|null
     */
    protected $unassignPhoneNumbers = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for unassignPhoneNumbers
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel
     */
    public function getUnassignPhoneNumbers()
    {
        return $this->unassignPhoneNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unassignPhoneNumbers;
    }

    /**
     * Setter for unassignPhoneNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel $unassignPhoneNumbers
     * @return $this
     */
    public function setUnassignPhoneNumbers(\CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel $unassignPhoneNumbers)
    {
        $this->unassignPhoneNumbers = $unassignPhoneNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnassignPhoneNumbers()
    {
        $this->unassignPhoneNumbers = null;
        return $this;
    }


}

