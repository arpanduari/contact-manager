<?php
class contact
{
    public $contact_id;
    public $first_name;
    public $last_name;
    public $email;
    public $birthday;
    public $contact_of;

    public function __construct($contact_id, $first_name, $last_name, $email, $birthday, $contact_of)
    {
        $this->contact_id = $contact_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->birthday = $birthday;
        $this->contact_of = $contact_of;
    }
}
