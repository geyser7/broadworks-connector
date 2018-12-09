<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * LDAPPage
 *
 * Type to retrieve a particular page or the last page.
 *
 * @Groups [{"id":"231c9d5e24dad81018b882aac56545ca:45","type":"choice"}]
 */
class LDAPPage
{

    /**
     * @ElementName lastPage
     * @Type bool
     * @Group 231c9d5e24dad81018b882aac56545ca:45
     * @var bool|null
     */
    private $lastPage = null;

    /**
     * @ElementName number
     * @Type int
     * @Group 231c9d5e24dad81018b882aac56545ca:45
     * @var int|null
     */
    private $number = null;

    /**
     * Getter for lastPage
     *
     * @return bool
     */
    public function getLastPage()
    {
        return $this->lastPage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->lastPage;
    }

    /**
     * Setter for lastPage
     *
     * @param bool $lastPage
     * @return $this
     */
    public function setLastPage($lastPage)
    {
        $this->lastPage = $lastPage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLastPage()
    {
        $this->lastPage = null;
        return $this;
    }

    /**
     * Getter for number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->number;
    }

    /**
     * Setter for number
     *
     * @param int $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumber()
    {
        $this->number = null;
        return $this;
    }


}

