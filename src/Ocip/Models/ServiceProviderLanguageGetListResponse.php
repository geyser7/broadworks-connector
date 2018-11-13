<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderLanguageGetListResponse
 *
 * Response to ServiceProviderLanguageGetListRequest.
 *
 * @see ServiceProviderLanguageGetListRequest
 */
class ServiceProviderLanguageGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName language
     * @Type string
     * @Array
     * @var string[]
     */
    private $language = array(
        
    );

    /**
     * @ElementName defaultLanguage
     * @Type string
     * @var string|null
     */
    private $defaultLanguage = null;

    /**
     * Getter for language
     *
     * @return string[]
     */
    public function getLanguage()
    {
        return $this->language instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->language;
    }

    /**
     * Setter for language
     *
     * @param string[] $language
     * @return $this
     */
    public function setLanguage(array $language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLanguage()
    {
        $this->language = null;
        return $this;
    }

    /**
     * Adder for language
     *
     * @param string $language
     * @return $this
     */
    public function addLanguage(string $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * Getter for defaultLanguage
     *
     * @return string
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultLanguage;
    }

    /**
     * Setter for defaultLanguage
     *
     * @param string $defaultLanguage
     * @return $this
     */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultLanguage()
    {
        $this->defaultLanguage = null;
        return $this;
    }


}

