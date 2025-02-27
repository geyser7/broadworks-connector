<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGetAvailableTreeDeviceListRequest
 *
 * Requests the list of available tree devices to link to for the entire system.
 *         Requests the list of available tree devices to which a leaf device can be linked for the entire system.
 *         A tree device is a device associated with a device type that has the option 
 *         supportLinks set to "Support Links from Devices". Many leaf devices can be linked to it.
 *         The list returned includes devices created at the system, service provider, and group levels.
 *         The response is either SystemGetAvailableTreeDeviceListResponse or
 *         ErrorResponse.
 *
 * @see SystemGetAvailableTreeDeviceListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10674","type":"sequence"}]
 */
class SystemGetAvailableTreeDeviceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{


}

