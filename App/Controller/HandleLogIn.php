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
        // var_dump($data);
        if ($data == false){
            // header("location: ./login.php?error = your accoute not found pleas sign in");
            return ;
        }
        session_start();
        $_SESSION['username'] = $data->getName();
        $_SESSION['email'] = $data->getEmail();
        $_SESSION['role'] = $data->getRole();
        $role = new HandleRole();
        $role->checkRole($data->getRole());
    }
}
