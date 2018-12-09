<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistEnterpriseNoteGetResponse
 *
 * Response to UserBroadWorksReceptionistEnterpriseNoteGetRequest.
 *
 * @see UserBroadWorksReceptionistEnterpriseNoteGetRequest
 * @Groups [{"id":"b99e2521b171f47568831e973c09aa33:253","type":"sequence"}]
 */
class UserBroadWorksReceptionistEnterpriseNoteGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName receptionistNote
     * @Type string
     * @Optional
     * @Group b99e2521b171f47568831e973c09aa33:253
     * @var string|null
     */
    private $receptionistNote = null;

    /**
     * Getter for receptionistNote
     *
     * @return string
     */
    public function getReceptionistNote()
    {
        return $this->receptionistNote instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->receptionistNote;
    }

    /**
     * Setter for receptionistNote
     *
     * @param string $receptionistNote
     * @return $this
     */
    public function setReceptionistNote($receptionistNote)
    {
        $this->receptionistNote = $receptionistNote;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReceptionistNote()
    {
        $this->receptionistNote = null;
        return $this;
    }


}

