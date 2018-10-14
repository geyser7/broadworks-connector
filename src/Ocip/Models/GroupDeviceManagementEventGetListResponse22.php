<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDeviceManagementEventGetListResponse22
 *
 * Response to GroupDeviceManagementEventGetListRequest22.
 *         Contains a table with column headings: "Event Id", "Status", "Action",
 *         "Level", "Type", "Additional Info", "Is Local", "Completion %", 
 *         "Pushed/ Same Hash/ Not Pushed", "Login Id", "Start Time", 
 *         "Process Time".
 *         "Event Id" is a unique identifer for the event.
 *         "Status" can be: Pending, Queued, In Progress,
 *         Process On Other Host, Stale, Completed, Canceled.
 *         "Action" can be: Delete, Download, Rebuild, Reset, Upload.
 *         "Level" can be: Device, Device Type, Device Type Group, Group, User.
 *         "Type" can be: Automatic, Manual.
 *         "Additional Info" includes the affected device type, device or group.
 *         It depends on the level of the event:
 *           Device Profile: "Device Name" "Service Provider Id" "Group Id"
 *           Device Type: "Device Type Name"
 *           Device Type Service Provider: "Service Provider Id" "Device Type Name"
 *           Service Provider: "Service Provider Id"
 *           Device Type Group: "Service Provider Id" "Group Id" "Device Type Name"
 *           Group: "Service Provider Id" "Group Id"
 *           User: "User Id"
 *         "Is Local" is set to "yes" if the event is processed on the server 
 *         who received the request, "no" otherwise meaning that the event is
 *         processed on another server.        
 *         "Completion %" provides an estimate of the completion of the event.
 *         A percentage is given, the current number of completed expanded event,
 *         and the total number of expanded event.
 *         "Pushed/ Same Hash/ Not Pushed" gives the total number of files that 
 *         were pushed, not pushed because of same hash, and not pushed when 
 *         processing the event.
 *         "LoginId" is the user or admin id who triggered the event.
 *         "Start Time" is the date when the event was started.  The display 
 *         shows the month, days, hours, and minutes (MM-dd hh:mm).
 *         "Process Time" is the time taken to process the event in hours,
 *         minutes, seconds, and milliseconds (hhhh:mm:ss.SSS).
 *         Each row represents an event sorted by priority of processing.  The 
 *         first row in the table is an event that has an associated expanded 
 *         event currently being processed or next in line to be processed.
 *
 * @see GroupDeviceManagementEventGetListRequest22
 */
class GroupDeviceManagementEventGetListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName eventTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $eventTable = null;

    /**
     * Getter for eventTable
     *
     * @ElementName eventTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getEventTable()
    {
        return $this->eventTable;
    }

    /**
     * Setter for eventTable
     *
     * @ElementName eventTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $eventTable
     * @return $this
     */
    public function setEventTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $eventTable)
    {
        $this->eventTable = $eventTable;
        return $this;
    }


}

