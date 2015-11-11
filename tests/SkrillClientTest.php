<?php
namespace Skrill\Quick\Test;

class SkrillClientTest extends \PHPUnit_Framework_TestCase
{
    public function testSkrillClient()
    {
        $request = new \Skrill\Quick\SkrillRequest();
        $request->pay_to_email = 'skrill.merchant.email@gmail.com';
        $request->amount = '100';
        $request->currency = 'RSD';
        $request->language = 'RS';
        $request->prepare_only = '1';

        $client = new \Skrill\Quick\SkrillClient($request);
        $this->assertGreaterThanOrEqual(32, strlen($client->generateSID()));
    }
}