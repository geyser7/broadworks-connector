<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactMobileNetwork
 *
 * Criteria for searching for a particular BroadWorks Mobility Mobile Network.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:932","type":"sequence"}]
 */
class SearchCriteriaExactMobileNetwork extends SearchCriteria
{

    /**
     * @ElementName mobileNetworkName
     * @Type string
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:932
     * @var string|null
     */
    private $mobileNetworkName = null;

    /**
     * Getter for mobileNetworkName
     *
     * @return string
     */
    public function getMobileNetworkName()
    {
        return $this->mobileNetworkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNetworkName;
    }

    /**
     * Setter for mobileNetworkName
     *
     * @param string $mobileNetworkName
     * @return $this
     */
    public function setMobileNetworkName($mobileNetworkName)
    {
        $this->mobileNetworkName = $mobileNetworkName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNetworkName()
    {
        $this->mobileNetworkName = null;
        return $this;
    }


}

