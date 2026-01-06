<?php
namespace App\Models;
class User{
    private $name;
    private $email;
    private $pass;
    private $role;

    public function __construct($name, $email, $pass, $role) {
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
        $this->role = $role;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
        public function test(){
        return "hi";
    }
}

