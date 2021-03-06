<?php

/*
 * This file is part of the smsmode-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\SMSModeBundle\Event;

use WBW\Bundle\CoreBundle\Event\AbstractEvent as BaseEvent;
use WBW\Bundle\SMSModeBundle\WBWSMSModeEvents;
use WBW\Library\SMSMode\Model\DeliveryReportCallback;

/**
 * Delivery report callback event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\SMSModeBundle\Event
 */
class DeliveryReportCallbackEvent extends BaseEvent {

    /**
     * Delivery report.
     *
     * @var DeliveryReportCallback
     */
    private $deliveryReportCallback;

    /**
     * Constructor.
     *
     * @param DeliveryReportCallback $deliveryReportCallback The delivery report.
     */
    public function __construct(DeliveryReportCallback $deliveryReportCallback) {
        parent::__construct(WBWSMSModeEvents::DELIVERY_REPORT_CALLBACK);
        $this->setDeliveryReportCallback($deliveryReportCallback);
    }

    /**
     * Get the delivery report.
     *
     * @return DeliveryReportCallback Returns the delivery report.
     */
    public function getDeliveryReportCallback() {
        return $this->deliveryReportCallback;
    }

    /**
     * Set the delivery report.
     *
     * @param DeliveryReportCallback $deliveryReportCallback The delivery report.
     * @return DeliveryReportCallbackEvent Returns this delivery report callback event.
     */
    protected function setDeliveryReportCallback($deliveryReportCallback) {
        $this->deliveryReportCallback = $deliveryReportCallback;
        return $this;
    }
}
