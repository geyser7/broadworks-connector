<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseDepartmentDeleteRequest
 *
 * Delete a department from an enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class EnterpriseDepartmentDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enterpriseId
     * @Type string
     * @var string|null
     */
    private $enterpriseId = null;

    /**
     * @ElementName departmentName
     * @Type string
     * @var string|null
     */
    private $departmentName = null;

    /**
     * Getter for enterpriseId
     *
     * @return string
     */
    public function getEnterpriseId()
    {
        return $this->enterpriseId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseId;
    }

    /**
     * Setter for enterpriseId
     *
     * @param string $enterpriseId
     * @return $this
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->enterpriseId = $enterpriseId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseId()
    {
        $this->enterpriseId = null;
        return $this;
    }

    /**
     * Getter for departmentName
     *
     * @return string
     */
    public function getDepartmentName()
    {
        return $this->departmentName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentName;
    }

    /**
     * Setter for departmentName
     *
     * @param string $departmentName
     * @return $this
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentName()
    {
        $this->departmentName = null;
        return $this;
    }


}

