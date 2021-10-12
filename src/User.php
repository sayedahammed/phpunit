<?php

namespace Acme;

class User
{
    /**
     * @var string
     */
    public string $first_name = '';

    /**
     * @var string
     */
    public string $surname = '';

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return trim("$this->first_name $this->surname");
    }
}