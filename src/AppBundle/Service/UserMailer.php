<?php

namespace AppBundle\Service;

use AppBundle\Entity\User;

class UserMailer
{
    /**
     * @var Mailer
     */
    private $mailer;

    private $generator;

    public function __construct(Mailer $mailer, HappyNumberGenerator $generator)
    {
        $this->mailer = $mailer;
        $this->generator = $generator;
    }

    public function sendHello(User $user)
    {
        $body = sprintf('Hello %s. Your Happy Number is %d', $user->getName(), $this->generator->generate());

        $this->mailer->send($user->getEmail(), $body);
    }
}
