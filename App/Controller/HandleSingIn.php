<?php
namespace App\Controller;
use App\Models\User;
use App\Controller\HandleRole;
use App\Service\CrudUser;
class HandleSingIn{
    private  $conn;

    public function create()  {
        $handler = new User();
        $handler->setName($_POST['username']);
        $handler->setAddress($_POST['address']);
        $handler->setEmail($_POST['email']);
        $handler->setRole($_POST['role']);
        $handler->setPass($_POST['[password]']);
        $handler->save();
        $role = new HandleRole();
        $role->checkRole($_POST['role']);
        $user = new CrudUser();
        $datauser = $user->findOne($_POST['email']);
        session_start();
        $_SESSION['id'] = $datauser->getId();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email'] = $_POST['email'];
        if ($_POST['role'] == 2) {
            $_SESSION['role'] = 2;
        }if ($_POST['role'] == 3) {
            $_SESSION['role'] = 3;
        } else {
            $_SESSION['role'] = 1;
        }

    }


}
