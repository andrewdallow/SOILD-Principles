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

    /**
     * @param String  $address
     * @param Address $address
     *
     * @return int
     */
    public function calculateTaxClass($address)
    {
        //do something
        return $taxClass;
    }
}