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

use WBW\Bundle\SMSModeBundle\WBWSMSModeEvents;
use WBW\Library\SMSMode\Entity\RetrievingSMSReplyInterface;
use WBW\Library\SMSMode\Model\Request\RetrievingSMSReplyRequest;
use WBW\Library\SMSMode\Model\Response\RetrievingSMSReplyResponse;

/**
 * Retrieving SMS reply event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\SMSModeBundle\Event
 */
class RetrievingSMSReplyEvent extends AbstractEvent {

    /**
     * Constructor.
     *
     * @param RetrievingSMSReplyInterface $retrievingSMSReply The retrieving SMS reply.
     */
    public function __construct(RetrievingSMSReplyInterface $retrievingSMSReply) {
        parent::__construct(WBWSMSModeEvents::RETRIEVING_SMS_REPLY, $retrievingSMSReply);
    }

    /**
     * Get the retrieving SMS reply request.
     *
     * @return RetrievingSMSReplyRequest Returns the retrieving SMS reply request.
     */
    public function getRequest() {
        return parent::getRequest();
    }

    /**
     * Get the retrieving SMS reply response.
     *
     * @return RetrievingSMSReplyResponse Returns the retrieving SMS reply response.
     */
    public function getResponse() {
        return parent::getResponse();
    }

    /**
     * Get the retrieving SMS reply.
     *
     * @return RetrievingSMSReplyInterface Returns the retrieving SMS reply.
     */
    public function getRetrievingSMSReply() {
        return $this->getEntity();
    }
}
