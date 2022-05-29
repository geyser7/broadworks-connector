<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SIPStatusMapEntry
 *
 * The access SIP status map entry.
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:20115","type":"sequence"}]
 */
class SIPStatusMapEntry
{

    /**
     * @ElementName sipStatusCode
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:20115
     * @MinInclusive 400
     * @MaxInclusive 699
     * @var int|null
     */
    protected $sipStatusCode = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:20115
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $treatmentId = null;

    /**
     * Getter for sipStatusCode
     *
     * @return int
     */
    public function getSipStatusCode()
    {
        return $this->sipStatusCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipStatusCode;
    }

    /**
     * Setter for sipStatusCode
     *
     * @param int $sipStatusCode
     * @return $this
     */
    public function setSipStatusCode($sipStatusCode)
    {
        $this->sipStatusCode = $sipStatusCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipStatusCode()
    {
        $this->sipStatusCode = null;
        return $this;
    }

    /**
     * Getter for treatmentId
     *
     * @return string
     */
    public function getTreatmentId()
    {
        return $this->treatmentId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @param string $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentId()
    {
        $this->treatmentId = null;
        return $this;
    }


}

