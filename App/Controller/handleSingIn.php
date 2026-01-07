<?php
namespace App\Controller;
use App\Models\User;
use App\Controller\HandleRole;
class HandleSingIn{
    private  $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }
    public function validate($data)
    {
        $errors = [];

        if (!preg_match('/^[a-zA-Z][a-zA-Z0-9_]{2,19}$/', $data['username'])) {
            $errors['username'] = 'Invalid username';
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email';
        }

        if (strlen($data['password']) < 6) {
            $errors['password'] = 'Password too short';
        }

        return $errors;
    }


    public function create()  {
        $validation   = $this->validate($_POST);
        if(!empty($validation)){
            header('location: ../../view/signIn.php');
        }
        $handler = new User();
        $handler->setName($_POST['name']);
        $handler->setEmail($_POST['email']);
        $handler->setPass($_POST['pass']);
        $handler->setRole($_POST['role']);
        $handler->save();
        $role = new HandleRole();
        $role->checkRole($_POST['role']);
    }
}
