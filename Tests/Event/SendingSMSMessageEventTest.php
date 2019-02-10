<?php

/*
 * This file is part of the smsmode-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\SMSModeBundle\Tests\Event;

use WBW\Bundle\SMSModeBundle\Event\SendingSMSMessageEvent;
use WBW\Bundle\SMSModeBundle\Event\SMSModeEvents;
use WBW\Bundle\SMSModeBundle\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Model\Request\SendingSMSMessageRequest;
use WBW\Library\SMSMode\Model\Response\SendingSMSMessageResponse;

/**
 * Sending SMS message event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\SMSModeBundle\Tests\Event
 */
class SendingSMSMessageEventTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SendingSMSMessageEvent($this->sendingSMSMessage);

        $this->assertEquals(SMSModeEvents::SENDING_SMS_MESSAGE, $obj->getEventName());

        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getResponse());

        $this->assertSame($this->sendingSMSMessage, $obj->getSendingSMSMessage());
    }

    /**
     * Tests the setRequest() method.
     *
     * @return void
     */
    public function testSetRequest() {

        // Set a Sending SMS message request mock.
        $request = new SendingSMSMessageRequest();

        $obj = new SendingSMSMessageEvent($this->sendingSMSMessage);

        $obj->setRequest($request);
        $this->assertSame($request, $obj->getRequest());
    }

    /**
     * Tests the setResponse() method.
     *
     * @return void
     */
    public function testSetResponse() {

        // Set a Sending SMS message response mock.
        $response = new SendingSMSMessageResponse();

        $obj = new SendingSMSMessageEvent($this->sendingSMSMessage);

        $obj->setResponse($response);
        $this->assertSame($response, $obj->getResponse());
    }
}
