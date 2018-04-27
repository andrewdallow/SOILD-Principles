<?php

class Customer
{
    protected $firstName;
    protected $lastName;
    protected $username;
    protected $password;
    protected $email;
    protected $address;

    /**
     * @param String $username
     * @param String $password
     *
     * @return bool
     */
    public function login($username, $password)
    {
        //do something
        return true;
    }
}