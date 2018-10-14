<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingPinholeDigitPlanCallMeNowPermission
 *
 * Permission choices for Pinhole digit patterns on Call Me Now calls.
 *
 * @method static OutgoingPinholeDigitPlanCallMeNowPermission IGNORE()
 * @method static OutgoingPinholeDigitPlanCallMeNowPermission ALLOW()
 * @ValueType string
 */
class OutgoingPinholeDigitPlanCallMeNowPermission extends \MyCLabs\Enum\Enum
{

    const IGNORE = 'Ignore';

    const ALLOW = 'Allow';


}

