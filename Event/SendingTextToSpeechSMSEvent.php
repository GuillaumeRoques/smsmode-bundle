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
use WBW\Library\SMSMode\Entity\SendingTextToSpeechSMSInterface;
use WBW\Library\SMSMode\Model\Request\SendingTextToSpeechSMSRequest;
use WBW\Library\SMSMode\Model\Response\SendingTextToSpeechSMSResponse;

/**
 * Sending text-to-speech event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\SMSModeBundle\Event
 */
class SendingTextToSpeechSMSEvent extends AbstractEvent {

    /**
     * Constructor.
     *
     * @param SendingTextToSpeechSMSInterface $sendingTextToSpeechSMS The sending text-to-speech SMS.
     */
    public function __construct(SendingTextToSpeechSMSInterface $sendingTextToSpeechSMS) {
        parent::__construct(WBWSMSModeEvents::SENDING_TEXT_TO_SPEECH_SMS, $sendingTextToSpeechSMS);
    }

    /**
     * Get the sending text-to-speech SMS request.
     *
     * @return SendingTextToSpeechSMSRequest Returns the sending text-to-speech SMS request.
     */
    public function getRequest() {
        return parent::getRequest();
    }

    /**
     * Get the sending text-to-speech SMS response.
     *
     * @return SendingTextToSpeechSMSResponse Returns the sending text-to-speech SMS response.
     */
    public function getResponse() {
        return parent::getResponse();
    }

    /**
     * Get the sending text-to-speech SMS.
     *
     * @return SendingTextToSpeechSMSInterface Returns the sending text-to-speech SMS.
     */
    public function getSendingTextToSpeechSMS() {
        return $this->getEntity();
    }
}
