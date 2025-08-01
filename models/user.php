<?php
class User
{
    public $userId;
    public $name;
    public $email;
    public $password;
    public function __construct($user_id, $name, $email, $password)
    {
        $this->userId = $user_id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}
