<?php

namespace Midtrans\Tests\Integration;

use Midtrans\Snap;
use utility\MtChargeFixture;

class SnapIntegrationTest extends IntegrationTestCase
{
    public function testSnapToken()
    {
        $charge_params = MtChargeFixture::build('vtweb');
        $token_id = Snap::getSnapToken($charge_params);

        $this->assertTrue(isset($token_id));
    }
}
