<?php

namespace AppBundle\Service;

use PHPUnit\Framework\TestCase;
use AppBundle\Entity\User;

class UserMailerTest extends TestCase
{
    public function testSendHello(){

        $user = new User();
        $user->setName('Vardas');
        $user->setEmail('me@example.com');


        /**
         * @var Mailer|\PHPUnit_Framework_MockObject_MockObject $mailerMock
         */
        $mailerMock = $this->createMock(Mailer::class);
        $mailerMock -> expects($this->once())
            ->method('send')
            ->with('me@example.com', 'Hello Vardas. Your Happy Number is 20');

        $generatorMock = $this->createMock(HappyNumberGenerator::class);

        $generatorMock -> expects($this->any())
            ->method('generate')
            ->willReturn('20');

        $userMailer = new UserMailer($mailerMock, $generatorMock);
        $userMailer->sendHello($user);
    }

}