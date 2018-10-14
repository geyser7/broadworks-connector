<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingSelectiveGetResponse16
 *
 * Response to the UserCallForwardingSelectiveGetRequest16. The criteria table's
 * column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule", "Calls From", "Forward
 * To", "Blacklisted", "Holiday Schedule", "Calls To Type", "Calls To Number" and
 * "Calls To Extension".
 *         The following columns are only returned in AS data mode:       
 *           "Calls To Type", "Calls To Number" and "Calls To Extension"
 *           
 *         The possible values for the "Calls To Type" column are the following or
 * a combination of them separated by comma:
 *           - Primary
 *           - Alternate X (where x is a number between 1 and 10)
 *           - Mobility        
 *         The possible values for the "Calls To Number" column are the following
 * or a combination of them separated by comma:
 *           - The value of the phone number for the corresponding Calls To Type,
 * when the number is available. i.e. Alternate 1 may have extension, but no
 * number.
 *           - When no number is available a blank space is provided instead.
 *         The possible values for the "Calls To Extension" column are the
 * following or a combination of them separated by comma:
 *           - The value of the extension for the corresponding Calls To Type, when
 * the extension is available. i.e. Primary may have number, but no extension.
 *           - For Mobility Calls To Type, this is always blank.
 *           - When no extension is available a blank space is provided instead.
 *
 * @see UserCallForwardingSelectiveGetRequest16
 */
class UserCallForwardingSelectiveGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName defaultForwardToPhoneNumber
     * @var string|null
     */
    private $defaultForwardToPhoneNumber = null;

    /**
     * @ElementName playRingReminder
     * @var bool|null
     */
    private $playRingReminder = null;

    /**
     * @ElementName criteriaTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $criteriaTable = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for defaultForwardToPhoneNumber
     *
     * @ElementName defaultForwardToPhoneNumber
     * @return string|null
     */
    public function getDefaultForwardToPhoneNumber()
    {
        return $this->defaultForwardToPhoneNumber;
    }

    /**
     * Setter for defaultForwardToPhoneNumber
     *
     * @ElementName defaultForwardToPhoneNumber
     * @param string|null $defaultForwardToPhoneNumber
     * @return $this
     */
    public function setDefaultForwardToPhoneNumber($defaultForwardToPhoneNumber)
    {
        $this->defaultForwardToPhoneNumber = $defaultForwardToPhoneNumber;
        return $this;
    }

    /**
     * Getter for playRingReminder
     *
     * @ElementName playRingReminder
     * @return bool|null
     */
    public function getPlayRingReminder()
    {
        return $this->playRingReminder;
    }

    /**
     * Setter for playRingReminder
     *
     * @ElementName playRingReminder
     * @param bool|null $playRingReminder
     * @return $this
     */
    public function setPlayRingReminder($playRingReminder)
    {
        $this->playRingReminder = $playRingReminder;
        return $this;
    }

    /**
     * Getter for criteriaTable
     *
     * @ElementName criteriaTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable;
    }

    /**
     * Setter for criteriaTable
     *
     * @ElementName criteriaTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $criteriaTable
     * @return $this
     */
    public function setCriteriaTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $criteriaTable)
    {
        $this->criteriaTable = $criteriaTable;
        return $this;
    }


}

