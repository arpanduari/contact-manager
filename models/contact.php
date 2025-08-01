<?php
class contact
{
    public $contactId;
    public $firstName;
    public $lastName;
    public $email;
    public $birthday;
    public $contactOf;

    public function __construct($contactId, $firstName, $lastName, $email, $birthday, $contactOf)
    {
        $this->contactId = $contactId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->birthday = $birthday;
        $this->contactOf = $contactOf;
    }
}
