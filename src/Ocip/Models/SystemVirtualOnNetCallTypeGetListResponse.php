<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVirtualOnNetCallTypeGetListResponse
 *
 * Response to SystemVirtualOnNetCallTypeGetListRequest.
 *         Contains a table with column headings: 
 *         "Virtual On-Net Call Type Name", "Virtual On-Net Call Type CDR Value" 
 *         in a row for each Virtual On-Net Call Type.
 *
 * @see SystemVirtualOnNetCallTypeGetListRequest
 * @Groups [{"id":"f72eed3624b2f8f1013e6751cb17c899:297","type":"sequence"}]
 */
class SystemVirtualOnNetCallTypeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName virtualOnNetCallTypeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f72eed3624b2f8f1013e6751cb17c899:297
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $virtualOnNetCallTypeTable = null;

    /**
     * Getter for virtualOnNetCallTypeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getVirtualOnNetCallTypeTable()
    {
        return $this->virtualOnNetCallTypeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->virtualOnNetCallTypeTable;
    }

    /**
     * Setter for virtualOnNetCallTypeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $virtualOnNetCallTypeTable
     * @return $this
     */
    public function setVirtualOnNetCallTypeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $virtualOnNetCallTypeTable)
    {
        $this->virtualOnNetCallTypeTable = $virtualOnNetCallTypeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVirtualOnNetCallTypeTable()
    {
        $this->virtualOnNetCallTypeTable = null;
        return $this;
    }


}

