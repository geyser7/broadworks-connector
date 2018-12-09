<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyGetResponse17
 *
 * Response to the UserSimultaneousRingFamilyGetRequest17.
 *         Contains a criteria table wich column heading: "Is Active", "Criteria Name", "Time Schedule", "Holiday Schedule", "Calls From" and "Blacklisted".
 *
 * @see UserSimultaneousRingFamilyGetRequest17
 * @Groups [{"id":"e5e2d2259eb3c3343c7c35c64b1fba49:136","type":"sequence"}]
 */
class UserSimultaneousRingFamilyGetResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group e5e2d2259eb3c3343c7c35c64b1fba49:136
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName doNotRingIfOnCall
     * @Type bool
     * @Group e5e2d2259eb3c3343c7c35c64b1fba49:136
     * @var bool|null
     */
    private $doNotRingIfOnCall = null;

    /**
     * @ElementName simultaneousRingNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber
     * @Array
     * @Optional
     * @Group e5e2d2259eb3c3343c7c35c64b1fba49:136
     * @var \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber[]
     */
    private $simultaneousRingNumber = array(
        
    );

    /**
     * @ElementName criteriaTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e5e2d2259eb3c3343c7c35c64b1fba49:136
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for doNotRingIfOnCall
     *
     * @return bool
     */
    public function getDoNotRingIfOnCall()
    {
        return $this->doNotRingIfOnCall instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->doNotRingIfOnCall;
    }

    /**
     * Setter for doNotRingIfOnCall
     *
     * @param bool $doNotRingIfOnCall
     * @return $this
     */
    public function setDoNotRingIfOnCall($doNotRingIfOnCall)
    {
        $this->doNotRingIfOnCall = $doNotRingIfOnCall;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDoNotRingIfOnCall()
    {
        $this->doNotRingIfOnCall = null;
        return $this;
    }

    /**
     * Getter for simultaneousRingNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber[]
     */
    public function getSimultaneousRingNumber()
    {
        return $this->simultaneousRingNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->simultaneousRingNumber;
    }

    /**
     * Setter for simultaneousRingNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber[] $simultaneousRingNumber
     * @return $this
     */
    public function setSimultaneousRingNumber(array $simultaneousRingNumber)
    {
        $this->simultaneousRingNumber = $simultaneousRingNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSimultaneousRingNumber()
    {
        $this->simultaneousRingNumber = null;
        return $this;
    }

    /**
     * Adder for simultaneousRingNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SimultaneousRingNumber $simultaneousRingNumber
     * @return $this
     */
    public function addSimultaneousRingNumber($simultaneousRingNumber)
    {
        $this->simultaneousRingNumber[] = $simultaneousRingNumber;
        return $this;
    }

    /**
     * Getter for criteriaTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteriaTable;
    }

    /**
     * Setter for criteriaTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable
     * @return $this
     */
    public function setCriteriaTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteriaTable()
    {
        $this->criteriaTable = null;
        return $this;
    }


}

