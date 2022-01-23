<?php

class Customer
{
    public $name;
    public $contactNumber;
    public $address;
    public $email;

    public function __construct($name, $contactNumber, $address, $email)
    {
        $this->name = $name;
        $this->contactNumber = $contactNumber;
        $this->address = $address;
        $this->email = $email;
    }
}
