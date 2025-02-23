<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCountryCodeGetListResponse
 *
 * Response to a SystemCountryCodeGetListRequest. Contains the default country code
 *         and a table with one row per country code.  The table columns are
 *         "Country Code", "Country Name", "Off Hook Warning Seconds",
 *         "Ring Period Milliseconds", "National Prefix", "Use Prefix",
 *         "Maximum Call Waiting Tones", "Time Between Call Waiting Tones Milliseconds"
 *         and "Disable National Prefix for OffNet Calls".
 *         
 *         The following columns are only returned in AS data mode:       
 *           "Disable National Prefix for OffNet Calls"
 *
 * @see SystemCountryCodeGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:6922","type":"sequence"}]
 */
class SystemCountryCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultCountryCode
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6922
     * @MaxLength 3
     * @Pattern [0-9]|[1-9][0-9]{1,2}
     * @var string|null
     */
    protected $defaultCountryCode = null;

    /**
     * @ElementName countryCodeTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6922
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $countryCodeTable = null;

    /**
     * Getter for defaultCountryCode
     *
     * @return string
     */
    public function getDefaultCountryCode()
    {
        return $this->defaultCountryCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultCountryCode;
    }

    /**
     * Setter for defaultCountryCode
     *
     * @param string $defaultCountryCode
     * @return $this
     */
    public function setDefaultCountryCode($defaultCountryCode)
    {
        $this->defaultCountryCode = $defaultCountryCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultCountryCode()
    {
        $this->defaultCountryCode = null;
        return $this;
    }

    /**
     * Getter for countryCodeTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCountryCodeTable()
    {
        return $this->countryCodeTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->countryCodeTable;
    }

    /**
     * Setter for countryCodeTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $countryCodeTable
     * @return $this
     */
    public function setCountryCodeTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $countryCodeTable)
    {
        $this->countryCodeTable = $countryCodeTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCountryCodeTable()
    {
        $this->countryCodeTable = null;
        return $this;
    }


}

