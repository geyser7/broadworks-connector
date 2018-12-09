<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAddAgentListRequest
 *
 * Add agent(s) to a call center.
 *         The response is either SuccessResponse or ErrorResponse.
 *         If the skill level is not present for skill based premium call centers, the users will be set to skill level 1.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:1776","type":"sequence","children":[{"id":"3ac5f05d969bc771d6ba8d344d95aa72:1778","type":"choice"}]}]
 */
class GroupCallCenterAddAgentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:1776
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName agentUserId
     * @Type string
     * @Array
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:1778
     * @var string[]
     */
    private $agentUserId = array(
        
    );

    /**
     * @ElementName agentSkillList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList
     * @Array
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:1778
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList[]
     */
    private $agentSkillList = array(
        
    );

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
     * Getter for agentUserId
     *
     * @return string[]
     */
    public function getAgentUserId()
    {
        return $this->agentUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @param string[] $agentUserId
     * @return $this
     */
    public function setAgentUserId(array $agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserId()
    {
        $this->agentUserId = null;
        return $this;
    }

    /**
     * Adder for agentUserId
     *
     * @param string $agentUserId
     * @return $this
     */
    public function addAgentUserId(string $agentUserId)
    {
        $this->agentUserId[] = $agentUserId;
        return $this;
    }

    /**
     * Getter for agentSkillList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList[]
     */
    public function getAgentSkillList()
    {
        return $this->agentSkillList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentSkillList;
    }

    /**
     * Setter for agentSkillList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList[] $agentSkillList
     * @return $this
     */
    public function setAgentSkillList(array $agentSkillList)
    {
        $this->agentSkillList = $agentSkillList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentSkillList()
    {
        $this->agentSkillList = null;
        return $this;
    }

    /**
     * Adder for agentSkillList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList $agentSkillList
     * @return $this
     */
    public function addAgentSkillList($agentSkillList)
    {
        $this->agentSkillList[] = $agentSkillList;
        return $this;
    }


}

