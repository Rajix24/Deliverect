<?php
namespace App\Controller;
use App\Models\User;
use App\Controller\HandleRole;
class HandleSingIn{
    private  $conn;

    public function create()  {
        // var_dump($_POST);
        $handler = new User();
        $handler->setName($_POST['username']);
        $handler->setAddress($_POST['address']);
        $handler->setEmail($_POST['email']);
        $handler->setRole($_POST['role']);
        $handler->setPass($_POST['[password]']);
        $role = new HandleRole();
        $role->checkRole($_POST['role']);
        $handler->save();
        session_start();
        $_SESSION['email'] = $_POST['email'];
        if ($_POST['role'] == 2) {
            $_SESSION['role'] = 'client';
        }if ($_POST['role'] == 3) {
            $_SESSION['role'] = 'livreur';
        } else {
            $_SESSION['role'] = 'admin';
        }

    }


}
