<?php

namespace CWM\BroadWorksConnector\Ocip\Models\C;

/**
 * OCITableRow
 *
 * The OCITableRow type is used in responses only, never in requests. It occurs
 *         inside the OCITable type. The OCITableRow consists columns of strings.
 *         Clients should not assume any particular column order as future
 *         revisions of the protocol may move or add columns. See the OCITable data type
 *         for more information.
 *
 * @Groups [{"id":"77f32f6c8e214eb5c1a80dedfce1cb56:253","type":"sequence"}]
 */
class OCITableRow
{

    /**
     * @ElementName col
     * @Type string
     * @Array
     * @Group 77f32f6c8e214eb5c1a80dedfce1cb56:253
     * @var string[]
     */
    protected $col = array(
        
    );

    /**
     * Getter for col
     *
     * @return string[]
     */
    public function getCol()
    {
        return $this->col instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->col;
    }

    /**
     * Setter for col
     *
     * @param string[] $col
     * @return $this
     */
    public function setCol(array $col)
    {
        $this->col = $col;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCol()
    {
        $this->col = null;
        return $this;
    }

    /**
     * Adder for col
     *
     * @param string $col
     * @return $this
     */
    public function addCol(string $col)
    {
        $this->col[] = $col;
        return $this;
    }


}

