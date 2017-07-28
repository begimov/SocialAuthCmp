<?php

namespace App\Auth\Social;

abstract class Service
{
    abstract public function getAuthorizeUrl();
    abstract public function getUserByCode($code);

    public function authorizeUrl()
    {
        return $this->getAuthorizeUrl();
    }

    public function getUser($code)
    {
        return $this->getUserByCode($code);
    }
}
