<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
 *
 * Response to SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest.
 *         The column headings are "Number Prefix", "Service Provider Id", "Is Enterprise", "User Id", "Enterprise Trunk", "Is Active", "Reseller Id".
 *
 * @see SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest
 * @Groups [{"id":"6c3e6c5ded8862d72e92e5d067442775:724","type":"sequence"}]
 */
class SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName prefixSummaryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 6c3e6c5ded8862d72e92e5d067442775:724
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $prefixSummaryTable = null;

    /**
     * Getter for prefixSummaryTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getPrefixSummaryTable()
    {
        return $this->prefixSummaryTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefixSummaryTable;
    }

    /**
     * Setter for prefixSummaryTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $prefixSummaryTable
     * @return $this
     */
    public function setPrefixSummaryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $prefixSummaryTable)
    {
        $this->prefixSummaryTable = $prefixSummaryTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefixSummaryTable()
    {
        $this->prefixSummaryTable = null;
        return $this;
    }


}

