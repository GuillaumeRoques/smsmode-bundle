<?php

/*
 * This file is part of the smsmode-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\SMSModeBundle\Tests\Fixtures\Controller;

use Symfony\Component\HttpFoundation\Request;
use WBW\Bundle\SMSModeBundle\Controller\AbstractController;

/**
 * Test controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\SMSModeBundle\Tests\Fixtures\Controller
 */
class TestController extends AbstractController {

    /**
     * {@inheritdoc}
     */
    public function newDeliveryReportCallback(Request $request) {
        return parent::newDeliveryReportCallback($request);
    }

    /**
     * {@inheritdoc}
     */
    public function newSMSReplyCallback(Request $request) {
        return parent::newSMSReplyCallback($request);
    }
}
