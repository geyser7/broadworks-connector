<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaUserName
 *
 * Criteria for searching for a user's full name.
 *         This search criterion will be compared against multiple combinations of first name and last name:
 *         
 *         First Name + ' ' + Last Name
 *         Last Name + ' ' + First Name
 *         Last Name + ', ' + First Name
 *         Hiragana Last Name + Hiragana First Name
 *
 *         Note that when specific conditions are met, VON users will be included in the search results.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:2050","type":"sequence"}]
 */
class SearchCriteriaUserName extends SearchCriteria
{

    /**
     * @ElementName mode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchMode
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:2050
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchMode|null
     */
    private $mode = null;

    /**
     * @ElementName value
     * @Type string
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:2050
     * @var string|null
     */
    private $value = null;

    /**
     * @ElementName isCaseInsensitive
     * @Type bool
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:2050
     * @var bool|null
     */
    private $isCaseInsensitive = null;

    /**
     * Getter for mode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchMode
     */
    public function getMode()
    {
        return $this->mode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mode;
    }

    /**
     * Setter for mode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchMode $mode
     * @return $this
     */
    public function setMode(\CWM\BroadWorksConnector\Ocip\Models\SearchMode $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMode()
    {
        $this->mode = null;
        return $this;
    }

    /**
     * Getter for value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->value;
    }

    /**
     * Setter for value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
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

