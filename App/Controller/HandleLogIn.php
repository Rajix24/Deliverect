<?php 
namespace App\Controller;
use App\Models\User;
use App\Controller\HandleRole;
class HandleLogIn{
    public function checkSession(){
        session_start();
        session_start();
        if ($_SESSION['email'] !== null ) {
            $user = new User();
            $role = new HandleRole();
            $data = $user->findOne($_SESSION['email']);
            $role->checkRole($data->getRole());
        }
        exit();
    }
    public function checkUser(){
        $user = new User();
        $data = $user->findOne($_POST['email']);
        if ($data == false){
            return ;
        }
        echo '<pre>';
        var_dump($data);
        echo '</pre>';

        var_dump($_SESSION);
        session_start();
        $_SESSION['username'] = $data->getName();
        $_SESSION['email'] = $data->getEmail();
        $_SESSION['role'] = $data->getRole();
        $_SESSION['id'] = $data->getId();   
        $role = new HandleRole();
        $role->checkRole($data->getRole());
    }
}
