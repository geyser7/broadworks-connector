<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaEnterpriseCommonMultiPartPhoneListName
 *
 * Criteria for searching for a multi-part name in an enterprise common phone list.\
 *         Note: For this search criterion, the searchMode is always ‘Contains’ and the multi-part search criteria are always AND’ed.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:629","type":"sequence"}]
 */
class SearchCriteriaEnterpriseCommonMultiPartPhoneListName extends SearchCriteria
{

    /**
     * @ElementName value
     * @Type string
     * @Array
     * @Group f0ada2681ca347fa83b464734259b304:629
     * @MinLength 1
     * @MaxLength 50
     * @var string[]
     */
    protected $value = array(
        
    );

    /**
     * @ElementName isCaseInsensitive
     * @Type bool
     * @Group f0ada2681ca347fa83b464734259b304:629
     * @var bool|null
     */
    protected $isCaseInsensitive = null;

    /**
     * Getter for value
     *
     * @return string[]
     */
    public function getValue()
    {
        return $this->value instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->value;
    }

    /**
     * Setter for value
     *
     * @param string[] $value
     * @return $this
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetValue()
    {
        $this->value = null;
        return $this;
    }

    /**
     * Adder for value
     *
     * @param string $value
     * @return $this
     */
    public function addValue(string $value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * Getter for isCaseInsensitive
     *
     * @return bool
     */
    public function getIsCaseInsensitive()
    {
        return $this->isCaseInsensitive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isCaseInsensitive;
    }

    /**
     * Setter for isCaseInsensitive
     *
     * @param bool $isCaseInsensitive
     * @return $this
     */
    public function setIsCaseInsensitive($isCaseInsensitive)
    {
        $this->isCaseInsensitive = $isCaseInsensitive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsCaseInsensitive()
    {
        $this->isCaseInsensitive = null;
        return $this;
    }


}

