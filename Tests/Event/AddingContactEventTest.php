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

use WBW\Bundle\SMSModeBundle\Event\AddingContactEvent;
use WBW\Bundle\SMSModeBundle\Event\SMSModeEvents;
use WBW\Bundle\SMSModeBundle\Tests\AbstractTestCase;
use WBW\Library\SMSMode\Model\Request\AddingContactRequest;
use WBW\Library\SMSMode\Model\Response\AddingContactResponse;

/**
 * Adding contact event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\SMSModeBundle\Tests\Event
 */
class AddingContactEventTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AddingContactEvent($this->addingContact);

        $this->assertEquals(SMSModeEvents::ADDING_CONTACT, $obj->getEventName());

        $this->assertNull($obj->getRequest());
        $this->assertNull($obj->getResponse());

        $this->assertSame($this->addingContact, $obj->getAddingContact());
    }

    /**
     * Tests the setRequest() method.
     *
     * @return void
     */
    public function testSetRequest() {

        // Set an Adding contact request mock.
        $request = new AddingContactRequest();

        $obj = new AddingContactEvent($this->addingContact);

        $obj->setRequest($request);
        $this->assertSame($request, $obj->getRequest());
    }

    /**
     * Tests the setResponse() method.
     *
     * @return void
     */
    public function testSetResponse() {

        // Set an Adding contact response mock.
        $response = new AddingContactResponse();

        $obj = new AddingContactEvent($this->addingContact);

        $obj->setResponse($response);
        $this->assertSame($response, $obj->getResponse());
    }
}
