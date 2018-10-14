<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsRedirectedCallSelection
 *
 * Redirected call selection.
 *       When " redirectedCall " is set to true, all call logs with redirected call
 * are returned. When it
 *       set to false, all call logs without redirected call are returned.
 *       The redirected call can be defined by including a subset of Service
 * Invocation Disposition here.
 *       If none included, any call has a ServiceInvocationDisposition  value
 * defined in ServiceInvocationDisposition
 *       is considered as a redirected call.
 */
class EnhancedCallLogsRedirectedCallSelection
{

    /**
     * @ElementName redirectedCall
     * @var bool|null
     */
    private $redirectedCall = null;

    /**
     * @ElementName redirectType
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition[]
     */
    private $redirectType = array(
        
    );

    /**
     * Getter for redirectedCall
     *
     * @ElementName redirectedCall
     * @return bool|null
     */
    public function getRedirectedCall()
    {
        return $this->redirectedCall;
    }

    /**
     * Setter for redirectedCall
     *
     * @ElementName redirectedCall
     * @param bool|null $redirectedCall
     * @return $this
     */
    public function setRedirectedCall($redirectedCall)
    {
        $this->redirectedCall = $redirectedCall;
        return $this;
    }

    /**
     * Getter for redirectType
     *
     * @ElementName redirectType
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition[]
     */
    public function getRedirectType()
    {
        return $this->redirectType;
    }

    /**
     * Setter for redirectType
     *
     * @ElementName redirectType
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition[] $redirectType
     * @return $this
     */
    public function setRedirectType(array $redirectType)
    {
        $this->redirectType = $redirectType;
        return $this;
    }

    /**
     * Adder for redirectType
     *
     * @ElementName redirectType
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInvocationDisposition $redirectType
     * @return $this
     */
    public function addRedirectType($redirectType)
    {
        $this->redirectType []= $redirectType;
        return $this;
    }


}

