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

use WBW\Bundle\SMSModeBundle\Entity\RetrievingSMSReplyInterface;
use WBW\Library\SMSMode\Model\RetrievingSMSReplyRequest;
use WBW\Library\SMSMode\Model\RetrievingSMSReplyResponse;

/**
 * Retrieving SMS reply event
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\SMSModeBundle\Event
 */
class RetrievingSMSReplyEvent extends AbstractResponseEvent {

    /**
     * Retrieving SMS reply.
     *
     * @var RetrievingSMSReplyInterface
     */
    private $retrievingSMSReply;

    /**
     * Constructor.
     *
     * @param RetrievingSMSReplyInterface $retrievingSMSReply The retrieving SMS reply.
     */
    public function __construct(RetrievingSMSReplyInterface $retrievingSMSReply) {
        parent::__construct(SMSModeEvents::RETRIEVING_SMS_REPLY);
        $this->setRetrievingSMSReply($retrievingSMSReply);
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
        return $this->retrievingSMSReply;
    }

    /**
     * Set the retrieving SMS reply.
     *
     * @param RetrievingSMSReplyInterface $retrievingSMSReply The retrieving SMS reply.
     * @return RetrievingSMSReplyEvent Returns this retrieving SMS reply event.
     */
    protected function setRetrievingSMSReply(RetrievingSMSReplyInterface $retrievingSMSReply) {
        $this->retrievingSMSReply = $retrievingSMSReply;
        return $this;
    }
}
