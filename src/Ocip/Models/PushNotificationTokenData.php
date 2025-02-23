<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PushNotificationTokenData
 *
 * ?
 *         The common push notification token elements.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3570","type":"sequence"}]
 */
class PushNotificationTokenData
{

    /**
     * @ElementName pushNotificationToken
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3570
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    protected $pushNotificationToken = null;

    /**
     * @ElementName pushNotificationType
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3570
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $pushNotificationType = null;

    /**
     * @ElementName pushNotificationEventData
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PushNotificationEventData
     * @Array
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3570
     * @var \CWM\BroadWorksConnector\Ocip\Models\PushNotificationEventData[]
     */
    protected $pushNotificationEventData = array(
        
    );

    /**
     * Getter for pushNotificationToken
     *
     * @return string
     */
    public function getPushNotificationToken()
    {
        return $this->pushNotificationToken instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pushNotificationToken;
    }

    /**
     * Setter for pushNotificationToken
     *
     * @param string $pushNotificationToken
     * @return $this
     */
    public function setPushNotificationToken($pushNotificationToken)
    {
        $this->pushNotificationToken = $pushNotificationToken;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPushNotificationToken()
    {
        $this->pushNotificationToken = null;
        return $this;
    }

    /**
     * Getter for pushNotificationType
     *
     * @return string
     */
    public function getPushNotificationType()
    {
        return $this->pushNotificationType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pushNotificationType;
    }

    /**
     * Setter for pushNotificationType
     *
     * @param string $pushNotificationType
     * @return $this
     */
    public function setPushNotificationType($pushNotificationType)
    {
        $this->pushNotificationType = $pushNotificationType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPushNotificationType()
    {
        $this->pushNotificationType = null;
        return $this;
    }

    /**
     * Getter for pushNotificationEventData
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PushNotificationEventData[]
     */
    public function getPushNotificationEventData()
    {
        return $this->pushNotificationEventData instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pushNotificationEventData;
    }

    /**
     * Setter for pushNotificationEventData
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushNotificationEventData[] $pushNotificationEventData
     * @return $this
     */
    public function setPushNotificationEventData(array $pushNotificationEventData)
    {
        $this->pushNotificationEventData = $pushNotificationEventData;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPushNotificationEventData()
    {
        $this->pushNotificationEventData = null;
        return $this;
    }

    /**
     * Adder for pushNotificationEventData
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PushNotificationEventData $pushNotificationEventData
     * @return $this
     */
    public function addPushNotificationEventData($pushNotificationEventData)
    {
        $this->pushNotificationEventData[] = $pushNotificationEventData;
        return $this;
    }


}

