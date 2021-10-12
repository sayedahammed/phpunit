<?php

namespace Acme;

use Exception;

class Mailer
{
    /**
     * @param string $email
     * @param string $message
     * @return bool
     * @throws Exception
     */
    public function send(string $email, string $message): bool
    {
        if (empty($email)) {
            throw new Exception;
        }

        echo "Send '$message' to $email";

        return true;
    }
}