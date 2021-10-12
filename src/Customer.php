<?php

namespace Acme;

use Exception;

class Customer
{
    /**
     * @var string
     */
    public string $email;

    /**
     * @var Mailer
     */
    public Mailer $mailer;

    /**
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * @param Mailer $mailer
     */
    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @throws Exception
     */
    public function notify(string $message): bool
    {
        return $this->mailer->send($this->email, $message);
    }
}