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

use WBW\Bundle\SMSModeBundle\Event\CheckingSMSMessageStatusEvent;
use WBW\Bundle\SMSModeBundle\Event\SMSModeEvents;
use WBW\Bundle\SMSModeBundle\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Model\CheckingSMSMessageStatusRequest;
use WBW\Library\SMSMode\Model\CheckingSMSMessageStatusResponse;

/**
 * Checking SMS message status event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\SMSModeBundle\Tests\Event
 */
class CheckingSMSMessageStatusEventTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CheckingSMSMessageStatusEvent($this->checkingSMSMessageStatus);

        $this->assertEquals(SMSModeEvents::CHECKING_SMS_MESSAGE_STATUS, $obj->getEventName());

        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getResponse());

        $this->assertSame($this->checkingSMSMessageStatus, $obj->getCheckingSMSMessageStatus());
    }

    /**
     * Tests the setRequest() method.
     *
     * @return void
     */
    public function testSetRequest() {

        // Set a Checking SMS message status request mock.
        $request = new CheckingSMSMessageStatusRequest();

        $obj = new CheckingSMSMessageStatusEvent($this->checkingSMSMessageStatus);

        $obj->setRequest($request);
        $this->assertSame($request, $obj->getRequest());
    }

    /**
     * Tests the setResponse() method.
     *
     * @return void
     */
    public function testSetResponse() {

        // Set a CHecking SMS message status response mock.
        $response = new CheckingSMSMessageStatusResponse();

        $obj = new CheckingSMSMessageStatusEvent($this->checkingSMSMessageStatus);

        $obj->setResponse($response);
        $this->assertSame($response, $obj->getResponse());
    }
}
