<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupInstantGroupCallGetInstanceListResponse
 *
 * Response to the GroupInstantGroupCallGetInstanceListRequest.
 *         Contains a 6 column table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active".
 *         The column values for Is Active can either be true, or false.
 *
 * @see GroupInstantGroupCallGetInstanceListRequest
 * @Groups [{"id":"942d6d52bb90de674123c4718d7e1483:106","type":"sequence"}]
 */
class GroupInstantGroupCallGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName instantGroupCallTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 942d6d52bb90de674123c4718d7e1483:106
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $instantGroupCallTable = null;

    /**
     * Getter for instantGroupCallTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getInstantGroupCallTable()
    {
        return $this->instantGroupCallTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->instantGroupCallTable;
    }

    /**
     * Setter for instantGroupCallTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $instantGroupCallTable
     * @return $this
     */
    public function setInstantGroupCallTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $instantGroupCallTable)
    {
        $this->instantGroupCallTable = $instantGroupCallTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInstantGroupCallTable()
    {
        $this->instantGroupCallTable = null;
        return $this;
    }


}

