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

use WBW\Bundle\SMSModeBundle\Event\SentSMSMessageListEvent;
use WBW\Bundle\SMSModeBundle\Event\SMSModeEvents;
use WBW\Bundle\SMSModeBundle\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Model\Request\SentSMSMessageListRequest;
use WBW\Library\SMSMode\Model\Response\SentSMSMessageListResponse;

/**
 * Sent SMS message list event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\SMSModeBundle\Tests\Event
 */
class SentSMSMessageListEventEventTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SentSMSMessageListEvent($this->sentSMSMessageList);

        $this->assertEquals(SMSModeEvents::SENT_SMS_MESSAGE_LIST, $obj->getEventName());

        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getResponse());

        $this->assertSame($this->sentSMSMessageList, $obj->getSentSMSMessageList());
    }

    /**
     * Tests the setRequest() method.
     *
     * @return void
     */
    public function testSetRequest() {

        // Set a Sent SMS message list request mock.
        $request = new SentSMSMessageListRequest();

        $obj = new SentSMSMessageListEvent($this->sentSMSMessageList);

        $obj->setRequest($request);
        $this->assertSame($request, $obj->getRequest());
    }

    /**
     * Tests the setResponse() method.
     *
     * @return void
     */
    public function testSetResponse() {

        // Set a Sent SMS message list response mock.
        $response = new SentSMSMessageListResponse();

        $obj = new SentSMSMessageListEvent($this->sentSMSMessageList);

        $obj->setResponse($response);
        $this->assertSame($response, $obj->getResponse());
    }
}
