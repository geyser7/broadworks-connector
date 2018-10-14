<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallBlockingService22
 *
 * Possible types of Call Blocking Services.
 *         The following enumeration values are only used in AS Data mode:
 *            PTT
 *            SAC
 *            BroadWorks Mobility Deny Originations
 *            BroadWorks Mobility Deny Terminations
 *            Enterprise Trunk Route Exhaust
 *            Call Park
 *            Number Portability
 *            Maximum Concurrent Terminating Alerting Requests
 *          The following types are only used in XS data mode:
 *            Incoming Communication Barring
 *            Hierarchical Communication Barring
 *            Incoming Hierarchical Communication Barring
 *
 * @method static CallBlockingService22 OCP()
 * @method static CallBlockingService22 EOCP()
 * @method static CallBlockingService22 ICP()
 * @method static CallBlockingService22 ACR()
 * @method static CallBlockingService22 SCR()
 * @method static CallBlockingService22 SCA()
 * @method static CallBlockingService22 AAC()
 * @method static CallBlockingService22 INTERCEPT()
 * @method static CallBlockingService22 PTT()
 * @method static CallBlockingService22 COMMUNICATION_BARRING()
 * @method static CallBlockingService22 SAC()
 * @method static CallBlockingService22 INCOMING_COMMUNICATION_BARRING()
 * @method static CallBlockingService22 HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService22
 * INCOMING_HIERARCHICAL_COMMUNICATION_BARRING()
 * @method static CallBlockingService22 BROADWORKS_MOBILITY_DENY_ORIGINATIONS()
 * @method static CallBlockingService22 BROADWORKS_MOBILITY_DENY_TERMINATIONS()
 * @method static CallBlockingService22 ENTERPRISE_TRUNK_ROUTE_EXHAUST()
 * @method static CallBlockingService22 CALL_PARK()
 * @method static CallBlockingService22 NUMBER_PORTABILITY()
 * @method static CallBlockingService22
 * MAXIMUM_CONCURRENT_TERMINATING_ALERTING_REQUESTS()
 * @ValueType string
 */
class CallBlockingService22 extends \MyCLabs\Enum\Enum
{

    const OCP = 'OCP';

    const EOCP = 'EOCP';

    const ICP = 'ICP';

    const ACR = 'ACR';

    const SCR = 'SCR';

    const SCA = 'SCA';

    const AAC = 'AAC';

    const INTERCEPT = 'Intercept';

    const PTT = 'PTT';

    const COMMUNICATION_BARRING = 'Communication Barring';

    const SAC = 'SAC';

    const INCOMING_COMMUNICATION_BARRING = 'Incoming Communication Barring';

    const HIERARCHICAL_COMMUNICATION_BARRING = 'Hierarchical Communication Barring';

    const INCOMING_HIERARCHICAL_COMMUNICATION_BARRING = 'Incoming Hierarchical Communication Barring';

    const BROADWORKS_MOBILITY_DENY_ORIGINATIONS = 'BroadWorks Mobility Deny Originations';

    const BROADWORKS_MOBILITY_DENY_TERMINATIONS = 'BroadWorks Mobility Deny Terminations';

    const ENTERPRISE_TRUNK_ROUTE_EXHAUST = 'Enterprise Trunk Route Exhaust';

    const CALL_PARK = 'Call Park';

    const NUMBER_PORTABILITY = 'Number Portability';

    const MAXIMUM_CONCURRENT_TERMINATING_ALERTING_REQUESTS = 'Maximum Concurrent Terminating Alerting Requests';


}

