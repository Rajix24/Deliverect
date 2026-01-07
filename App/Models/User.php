<?php
namespace App\Models;
use App\Service\CrudUser;
class User extends CrudUser{

    // public function __construct($name, $email, $pass, $role) {
    //     $this->name = null;
    //     $this->email = null;
    //     $this->pass = null;
    //     $this->role = null;
    // }
    

    public function getName()
    {
        return $this->username;
    }
    public function setName($name)
    {
        $REG = '^[a-zA-Z][a-zA-Z0-9_]{2,19}$';
        if (preg_match($name, $REG)) {
                $this->name = $name;
            } else {
                return "Plase Enter valid userName";
            }
        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
            if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
                $this->email = $email;
            } else {
                return "Invalid email! pls Enter Email exist";
            }
        return $this;
    }


    public function getPass()
    {
        return $this->password;
    }

    public function setPass($pass)
    {
        $pass = password_hash($pass , PASSWORD_DEFAULT);
        $this->password = $pass;
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


}

