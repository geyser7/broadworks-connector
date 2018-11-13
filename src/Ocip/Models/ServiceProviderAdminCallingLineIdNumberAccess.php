<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAdminCallingLineIdNumberAccess
 *
 * Service Provider Administrator's policy for accessing calling line id number.
 *
 * @method static ServiceProviderAdminCallingLineIdNumberAccess FULL()
 * @method static ServiceProviderAdminCallingLineIdNumberAccess READ_ONLY()
 * @EnumValueType string
 */
class ServiceProviderAdminCallingLineIdNumberAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const READ_ONLY = 'Read-Only';


}

