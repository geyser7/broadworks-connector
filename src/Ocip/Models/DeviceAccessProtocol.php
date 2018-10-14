<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceAccessProtocol
 *
 * Protocols that an access device can use to fetch files from BroadWorks.
 *
 * @method static DeviceAccessProtocol HTTP()
 * @method static DeviceAccessProtocol HTTPS()
 * @method static DeviceAccessProtocol FTP()
 * @ValueType string
 */
class DeviceAccessProtocol extends \MyCLabs\Enum\Enum
{

    const HTTP = 'Http';

    const HTTPS = 'Https';

    const FTP = 'FTP';


}

