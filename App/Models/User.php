<?php
namespace App\Models;
use App\Service\CrudUser;
class User extends CrudUser{
    private $name;
    private $email;
    private $pass;
    private $role;

    // public function __construct($name, $email, $pass, $role) {
    //     $this->name = null;
    //     $this->email = null;
    //     $this->pass = null;
    //     $this->role = null;
    // }

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

