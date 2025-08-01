<?php
class User
{
    public $user_id;
    public $name;
    public $email;
    public $password;
    public function __construct($user_id, $name, $email, $password)
    {
        $this->user_id = $user_id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}
