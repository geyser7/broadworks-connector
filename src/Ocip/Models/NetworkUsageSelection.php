<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * NetworkUsageSelection
 *
 * Network Usage types.
 *
 * @method static NetworkUsageSelection FORCE_ALL_CALLS()
 * @method static NetworkUsageSelection
 * FORCE_ALL_EXCEPT_EXTENSION_AND_LOCATION_CALLS()
 * @method static NetworkUsageSelection DO_NOT_FORCE_ENTERPRISE_AND_GROUP_CALLS()
 * @ValueType string
 */
class NetworkUsageSelection extends \MyCLabs\Enum\Enum
{

    const FORCE_ALL_CALLS = 'Force All Calls';

    const FORCE_ALL_EXCEPT_EXTENSION_AND_LOCATION_CALLS = 'Force All Except Extension and Location Calls';

    const DO_NOT_FORCE_ENTERPRISE_AND_GROUP_CALLS = 'Do Not Force Enterprise and Group Calls';


}

