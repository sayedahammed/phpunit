<?php

use Acme\Customer;
use Acme\Mailer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testNotifyReturnTrue()
    {
        $customer = new Customer('sayed@gmail.com');

        $mailer = $this->createMock(Mailer::class);

        $customer->setMailer($mailer);

        $mailer->method('send')
            ->willReturn(true);

        $this->assertTrue($customer->notify('Hello'));
    }
}