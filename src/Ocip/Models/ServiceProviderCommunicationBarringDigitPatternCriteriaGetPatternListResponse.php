<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse
 *
 * Response to the ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest.
 *         The response contains the Digit Pattern Criteria information.
 *
 * @see ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest
 * @Groups [{"id":"8eb862aea0ee5d4211db0a0d3fe7c164:1568","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName matchDigitPattern
     * @Type string
     * @Array
     * @Optional
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:1568
     * @var string[]
     */
    private $matchDigitPattern = array(
        
    );

    /**
     * Getter for matchDigitPattern
     *
     * @return string[]
     */
    public function getMatchDigitPattern()
    {
        return $this->matchDigitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchDigitPattern;
    }

    /**
     * Setter for matchDigitPattern
     *
     * @param string[] $matchDigitPattern
     * @return $this
     */
    public function setMatchDigitPattern(array $matchDigitPattern)
    {
        $this->matchDigitPattern = $matchDigitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchDigitPattern()
    {
        $this->matchDigitPattern = null;
        return $this;
    }

    /**
     * Adder for matchDigitPattern
     *
     * @param string $matchDigitPattern
     * @return $this
     */
    public function addMatchDigitPattern(string $matchDigitPattern)
    {
        $this->matchDigitPattern[] = $matchDigitPattern;
        return $this;
    }


}

