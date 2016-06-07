<?php

class CardNumberTest extends PHPUnit_Framework_TestCase
{
    public function testNumber()
    {
        $response = \CreditCard\Card::validate('33333333');

        $this->assertTrue($response['valid']);
        $this->assertArrayHasKey('valid', $response);
        $this->assertArrayHasKey('type', $response);
    }

    /**
     * @expectedException \CreditCard\Exception\NumberValidateException
     */
    public function testNumberExpectingException()
    {
        $response = \CreditCard\Card::validate('aa');
    }
}