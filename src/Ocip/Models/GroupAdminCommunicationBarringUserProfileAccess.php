<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminCommunicationBarringUserProfileAccess
 *
 * Policy for accessing the user Communication Barring user profile configuration.
 *
 * @method static GroupAdminCommunicationBarringUserProfileAccess FULL()
 * @method static GroupAdminCommunicationBarringUserProfileAccess NONE()
 * @ValueType string
 */
class GroupAdminCommunicationBarringUserProfileAccess extends \MyCLabs\Enum\Enum
{

    const FULL = 'Full';

    const NONE = 'None';


}

