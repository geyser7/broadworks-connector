<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMWIDeliveryToMobileEndpointGetResponse
 *
 * Response to ServiceProviderMWIDeliveryToMobileEndpointGetRequest.
 *         
 *         The templateActivationTable contains the list of templates defined for the service provider.
 *         The column headings are "Enable", "Language", "Type".
 *
 * @see ServiceProviderMWIDeliveryToMobileEndpointGetRequest
 * @Groups [{"id":"958b78cc2a785d78259c1e8a474eb40d:319","type":"sequence"}]
 */
class ServiceProviderMWIDeliveryToMobileEndpointGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName templateActivationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 958b78cc2a785d78259c1e8a474eb40d:319
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $templateActivationTable = null;

    /**
     * Getter for templateActivationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTemplateActivationTable()
    {
        return $this->templateActivationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->templateActivationTable;
    }

    /**
     * Setter for templateActivationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $templateActivationTable
     * @return $this
     */
    public function setTemplateActivationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $templateActivationTable)
    {
        $this->templateActivationTable = $templateActivationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTemplateActivationTable()
    {
        $this->templateActivationTable = null;
        return $this;
    }


}

