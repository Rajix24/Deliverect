<?php
namespace App\Models;
use App\Service\CrudUser;
class User extends CrudUser{
    public function getName()
    {
        return $this->username;
    }
    public function setName($username)
    {
        // $REG = '^[a-zA-Z][a-zA-Z0-9_]{2,19}$';
        if (preg_match('/^[a-zA-Z0-9_]{3,20}$/', $username)) {
                $this->username = $username;
            } else {
                header("location: ../../public/index.php?username=iValide username");
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
                header("location: ../../index.php?username=inValide email");
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
        return $this->role_id;
    }

    public function setRole($role_id)
    {
        $this->role_id = $role_id;

        return $this;
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

}

