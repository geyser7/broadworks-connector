<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDnGetAvailableListResponse
 *
 * Response to ServiceProviderDnGetAvailableListRequest.
 *         Contains a list of available DNs not yet assigned to any group.
 *
 * @see ServiceProviderDnGetAvailableListRequest
 */
class ServiceProviderDnGetAvailableListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availableDn
     * @var string[]
     */
    private $availableDn = array(
        
    );

    /**
     * Getter for availableDn
     *
     * @ElementName availableDn
     * @return string[]
     */
    public function getAvailableDn()
    {
        return $this->availableDn;
    }

    /**
     * Setter for availableDn
     *
     * @ElementName availableDn
     * @param string[] $availableDn
     * @return $this
     */
    public function setAvailableDn(array $availableDn)
    {
        $this->availableDn = $availableDn;
        return $this;
    }

    /**
     * Adder for availableDn
     *
     * @ElementName availableDn
     * @param string $availableDn
     * @return $this
     */
    public function addAvailableDn(string $availableDn)
    {
        $this->availableDn []= $availableDn;
        return $this;
    }


}

